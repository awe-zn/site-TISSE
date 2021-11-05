
<?php get_header()?>
<main class="container quem-somos min-h-600">
        <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item font-inter fw-normal"><a class="text-Prata-2" href="#">Home</a></li>
                <li class="breadcrumb-item font-inter fw-normal"><a class="text-Prata-2" href="#">Busca</a></li>
                <li class="breadcrumb-item d-sm-block d-none font-inter fw-normal text-Prata-2 active" aria-current="page">Resultado de busca</li>
            </ol>
        </nav>
        <div class="row gy-4">
         <div class="col-12 col-md-7 col-lg-8">
          <div class="title-page">
          
            <span class="font-inter fw-light fz-18 text-Gray pt-4">Abaixo está o resultado da sua busca</span>
            <h1 class="font-inter fw-bold fz-44 pb-4 m-0 text-break text-Aco"><?php 
              if(is_search()){
                  $total_results = $wp_query->found_posts;
                  echo sprintf(__('%s resultado(s) para "%s"','site-TISSE'), $total_results, get_search_query());
                    }
                  ?></h1>
          </div>
         </div>
         <div class="col-12 col-md-5 col-lg-4">
          <form class="w-100" action="">
            <div class="search position-relative border border-Gray">
              <input type="search" id="inputPassword5" class="form-control w-100 py-awe-12 ps-4" placeholder="sua pesquisa">
            </div>
          </form>
          <span class="font-inter fw-light fz-18 text-Gray pt-4">Você pode pesquisar novamente.</span>
         </div>
        </div>
       
        <section class="posts mb-awe-90 mt-5 alinhar min-h-600">
          <div class="border-bottom border-1 border-Neve-Extra-Dark">
            <h5 class="font-inter fw-light text-Gray fz-26 my-3 ">Posts resultantes da sua pesquisa</h5>
          </div>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
          <div class="border-bottom border-1 border-Neve-Extra-Dark pt-3">
            <span class="font-inter fz-14 text-Prata-2">por <a href="#" class="fw-bold text-Prata-2"><?php the_author();?></a> , publicado em <span class="fw-bold"><?php echo get_the_date('d.M.Y'); ?></span></span>
            <h3 class="my-3 text-Aco font-inter fz-21 fw-bold"><?php the_title();?></h3>
          </div>
          <?php endwhile; else: endif;?>
          <div class="pagination my-5">
            <ul class="d-flex p-0">
            <?php 
        echo paginate_links( array(
            'base' => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
            'current' => max( 1, get_query_var('paged') ),
            'total' => $the_query->max_num_pages,
            'prev_next' => false,
            'show_all' => false,
            'mid_size' => 2,
            'end_size' => 1
        ) );?>
            </ul>
          </div>
        </section>
        
    </main>

<?php get_footer()?>