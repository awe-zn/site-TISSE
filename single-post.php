
<?php get_header()?>
<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
<?php 
$categories = get_the_category();
$category;
 
if ( ! empty( $categories ) ) {
  $category= $categories[0]->name;   
}
if(! empty( $category )){
  $category_id = get_cat_ID($category);
  $category_link = get_category_link($category_id);
}
?>
<main class="container quem-somos min-h-600">
        <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item font-inter fw-normal"><a class="text-Prata-2" href="<?php echo home_url('/');?>">Home</a></li>
                <li class="breadcrumb-item font-inter fw-normal"><a class="text-Prata-2" href="<?php echo $category_link;?>"><?php echo $category;?></a></li>
                <li class="breadcrumb-item d-sm-block d-none font-inter fw-normal text-Prata-2 w-50 text-overflow-ellipsis active" aria-current="page"><?php the_title();?></li>
            </ol>
        </nav>
        <div data-aos="fade-down" data-aos-delay="200" class="title-page">
            <h1 class="font-inter fw-bold fz-44 py-4 m-0 text-break"><?php the_title();?></h1>
        </div>
        <section class="py-3">
                <span class="font-inter fw-bolder fst-italic fz-16 text-Gray d-block my-2">atualizado em <span class="text-Aco">16.out.2018</span></span>
                <div class="content py-5">
                <?php the_content();?>
                </div>
        </section>
        <section class="tags alinhar py-3 <?php $postTag = get_the_tags( $post->ID ); 
        if(empty($postTag)) {echo 'd-none';} ?>">
          <h4 class="text-prata fz-16 font-inter fw-normal my-4">filtre por tags</h4>
          <div class="py-4 px-4 tags_filter d-flex flex-wrap">
            <div class="py-1 px-3 border border-1 border-Prata m-2">
            <?php foreach ( $postTag as $key) {?>
              <?php $tagLink = get_tag_link($key);?>
              <a class="text-decoration-none" href="<?php echo $tagLink?>">
                <span class="font-inter fz-16 fw-light text-Prata"><?php echo $key->name ?></span>
              </a>
              <?php } ?>
            </div>
          </div>
        </section>
        <section class="posts my-awe-90 alinhar min-h-600">
          <div class="grad-line">
            <h4 class="text-prata fz-16 font-inter fw-normal py-3 m-0">posts relacionados</h4>
          </div>
          <?php
                       $args3 = array(
                         'post_type' => 'post',
                         'category' => $category,
                         'posts_per_page' => '6'
                     );
                       $the_query3 = new WP_Query ( $args3 );
                   ?>
          <?php if ( $the_query3->have_posts() ) : while ( $the_query3->have_posts() ) : $the_query3->the_post(); ?>
          <div data-aos="flip-down" data-aos-delay="200" class="grad-line pt-3">
            <span class="font-inter fz-14 text-Prata-2">por <a href="#" class="fw-bold text-Prata-2"><?php the_author();?></a> , publicado em <span class="fw-bold"><?php echo get_the_date('d.M.Y'); ?></span></span>
            <h3 class="my-3 text-Aco font-inter fz-21 fw-bold"><?php the_title();?></h3>
          </div>
          <?php endwhile; else: endif; ?>
        </section>
    </main>
    <?php endwhile; else: endif;?>
 <?php get_footer()?>