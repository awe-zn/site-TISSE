<?php
// Template Name: eventos
?>
<?php get_header() ?>

<main class="container quem-somos min-h-600">
  <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
    <ol class="breadcrumb m-0">
      <li class="breadcrumb-item font-inter fw-normal"><a class="text-Prata-2" href="<?php echo home_url('/'); ?>">Home</a></li>
      <li class="breadcrumb-item font-inter fw-normal text-Prata-2 active" aria-current="page">Eventos</li>
    </ol>
  </nav>
  <div data-aos="fade-down" data-aos-delay="200" class="title-page">
    <h1 class="font-inter fw-bold fz-44 py-4 m-0 text-break"><?php the_title() ?></h1>
  </div>
  <section class="eventos min-h-600 bg-white">
    <div class="py-4 py-sm-2">
      <h2 data-aos="fade-down" class="font-inter fw-bold text-Aco fz-24 my-4">Todos eventos</h2>
      <div class=" overflow-hidden row my-3">
        <?php
        $args3 = array(
          'post_type' => 'eventos'
        );
        $the_query_eventos = new WP_Query($args3);
        ?>
        <?php if ($the_query_eventos->have_posts()) : while ($the_query_eventos->have_posts()) : $the_query_eventos->the_post(); ?>
            <div data-aos="flip-down" data-aos-delay="100" class="col-12 col-sm-6 col-lg-3 py-3">
              <div class="eventos_card border border-1 border-Aco rounded-1 p-3 card-evento-1">
                <a role="button" class="text-decoration-none d-block" href="<?php the_permalink(); ?>">
                  <span class="text-Prata-2 fz-14 fw-normal"><?php echo get_the_date('d.M.y'); ?></span>
                  <h3 class="my-5 font-inter fw-bold text-Aco fz-18"><?php the_title(); ?></h3>
                  <a class="font-inter fw-bold fz-14 text-Ui-Color-Primary" href="<?php the_permalink(); ?>">Leia mais -></a>
                </a>
              </div>
            </div>
        <?php endwhile;
        else : endif; ?>
      </div>
    </div>

  </section>
</main>
<?php get_footer() ?>