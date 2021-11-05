<?php
// Template Name: posts
?>
<?php get_header()?>

<main class="container quem-somos min-h-600">
        <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item font-inter fw-normal"><a class="text-Prata-2" href="<?php echo home_url('/');?>">Home</a></li>
                <li class="breadcrumb-item d-sm-block d-none font-inter fw-normal text-Prata-2 active" aria-current="page">Posts</li>
            </ol>
        </nav>
        <div data-aos="fade-down" data-aos-delay="200" class="title-page">
            <h1 class="font-inter fw-bold fz-44 py-4 m-0 text-break">Você está vendo os posts mais recentes</h1>
        </div>
        <section class="tags py-3">
          <div class="row">
            <div class="col-12 order-2 order-sm-1 col-sm-8">
              <h4 class="text-prata fz-16 font-inter fw-normal mt-4">filtre ou pesquise</h4>
              <h5 class="font-inter fw-light text-Gray fz-26 my-3">Categorias com mais visualizações</h5>
            </div>
            <div class="col-12 order-1 order-sm-2 col-sm-4 d-flex justify-content-end align-items-start">
              <form class="w-100" action="">
                <div class="search position-relative border border-Gray">
                  <input type="search" id="inputPassword5" class="form-control w-100 py-awe-12 ps-4" placeholder="sua pesquisa">
                </div>
              </form>
            </div>
          </div>
          <div class="py-4 d-flex filter_cat flex-wrap">
          <?php include(TEMPLATEPATH . "/inc/filtro-categorias.php");?>
          </div>
        </section>
        <section class="posts mb-awe-90 mt-5 alinhar min-h-600">
          <div class="border-bottom  border-1 border-Neve-Extra-Dark">
            <h5 class="font-inter fw-light text-Gray fz-26 my-3 ">Últimos posts</h5>
          </div>
          <?php
                       $args3 = array (
                         'paged'    => get_query_var('paged') ? get_query_var('paged') : 1,
                     );
                       $the_query = new WP_Query ( $args3 );
                   ?>
          <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>  
          <div data-aos="flip-down" data-aos-delay="200" class="border-bottom border-1 border-Neve-Extra-Dark pt-3">
            <span class="font-inter fz-14 text-Prata-2">por <a href="#" class="fw-bold text-Prata-2"><?php the_author();?></a> , publicado em <span class="fw-bold"><?php echo get_the_date('d.M.Y'); ?></span></span>
            <h3 class="my-3 text-Aco font-inter fz-21 fw-bold"><?php the_title();?></h3>
          </div>
          <?php endwhile; else: endif; ?>
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