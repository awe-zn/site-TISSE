<?php

      $catArray = array();
      $args = array(
        'hide_empty'      => false,
        );
      ?>
        <?php 
          $postcatf = get_categories($args);
          
          if ( ! empty( $postcatf ) ) {
            for ($i=0; $i < count($postcatf) ; $i++) { 
              $stringCat = strval($postcatf[$i]->name);
              if(! array_key_exists($stringCat, $catArray)){
                $catArray[$stringCat] = $wpdb->get_var("SELECT count FROM wp_term_taxonomy WHERE term_taxonomy_id = '".get_cat_ID($postcatf[$i]->name)."' ");
              }
            }
            
          }
              
        ?>

      <?php
      arsort($catArray);
      $cont = 0;
      $category_id = get_cat_ID( 'Category Name' );
      $category_link = get_category_link( $category_id );
      foreach ($catArray as $key => $value) {
        $category_id = get_cat_ID($key);
        $category_link = get_category_link($category_id);
        ?>
        <div class="py-1 px-3 border border-1 border-Ui-Color-Primary m-2">
              <a class="text-decoration-none position-relative" href="<?php echo $category_link?>">
                <span class="font-inter fz-16 fw-light text-Ui-Color-Primary"><?php echo $key?></span>
                <span class="cont d-block bg-white border border-1 border-Ui-Color-Primary rounded-circle  position-absolute text-Prata font-inter fw-bold fz-12"><?php echo $value ?></span>
              </a>
        </div>  
        <?php
        if(is_front_page()){
          if($cont == 9){
            break;
          }
          $cont++;
        }
      } ?>