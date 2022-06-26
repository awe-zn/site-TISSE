<?php get_header() ?>


<main>
  <style>
    .banner {
      background: url(<?php echo get_template_directory_uri(); ?>/dist/image/image.svg) no-repeat bottom right;
    }

    .contato form input[type=email] {
      background: url(<?php echo get_template_directory_uri(); ?>/dist/image/icon/mail_input.svg) no-repeat 2% center, white;
    }

    .search::after {
      content: "";
      padding: 24px;
      display: block;
      position: absolute;
      top: 0;
      right: 0;
      background: url(<?php echo get_template_directory_uri(); ?>/dist/image/icon/search.svg) no-repeat center center;
    }
  </style>
  <section class="banner min-h-600 pb-5" style="background-color: <?php the_field('background_principal', 548); ?>;">
    <div class="container py-awe-90">
      <div class="row">
        <div class="col-12 col-md-8 col-lg-6 ">
          <h1 class="font-inter fw-bold text-Gray-6 fz-48 my-4"><?php the_field('titulo_inicial', 548); ?></h1>
          <p class="font-inter fw-normal fz-21 text-neve my-4 "><?php the_field('descricao_inicial', 548); ?></p>
          <a class="font-ubuntu text-decoration-none text-Ui-Color-Primary  fw-normal px-4 py-2 rounded-1 bg-Ui-Color-Alert-Dark d-inline-block my-4" href="<?php the_field('link_newsletter', 548); ?>">INSCREVA-SE NA NEWSLETTER</a>
        </div>
      </div>
    </div>
  </section>
  <section class="somos min-h-600 bg-white">
    <div class="container py-0 py-sm-awe-90">
      <div class=" overflow-hidden row py-5 justify-content-between">
        <div data-aos="zoom-in-right" data-aos-delay="100" class="col-12 col-lg-6 py-5">
          <h2 class="font-inter fw-bold text-Aco fz-36 my-4  animate-delay-1">
            <?php the_field('quem_somos_titulo', 548); ?>
          </h2>
          <p class="font-lato fw-normal fz-21 text-prata my-4  animate-delay-2">
            <?php the_field('quem_somos_resumo', 548); ?>
          </p>
          <a class="font-ubuntu text-decoration-none text-Ui-Color-Primary  animate-delay-3 fw-normal px-awe-90 py-2 rounded-1 border border-Ui-Color-Primary d-inline-block my-4" href="<?php echo home_url('/quem-somos'); ?>">LEIA MAIS</a>
        </div>
        <div data-aos="zoom-in-right" data-aos-delay="500" class="col-12 col-lg-5 d-flex justify-content-center">
          <img class="img-fluid" src="<?php the_field('quem_somos_imagem', 548); ?>" alt="">
        </div>
      </div>
    </div>
  </section>
  <section class="eventos min-h-600 bg-white">
    <div class="container py-5 py-sm-awe-90">
      <h2 data-aos="fade-down" class="font-inter fw-bold text-Aco fz-36 my-4">Próximos eventos</h2>
      <div class=" overflow-hidden row my-3">
        <?php
        $args3 = array(
          'post_type' => 'eventos',
          'posts_per_page' => '4',
        );
        $the_query = new WP_Query($args3);
        ?>
        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div data-aos="flip-down" data-aos-delay="100" class="col-12 col-sm-6 col-lg-3 py-3">
              <div class="eventos_card border border-1 border-Aco rounded-1 p-3 card-evento-1">
                <a class="text-decoration-none d-block" href="<?php the_permalink(); ?>">
                  <span class="text-Prata-2 fz-14 fw-normal"><?php echo get_the_date('d.M.y'); ?></span>
                  <h3 class="my-5 font-inter fw-bold text-Aco fz-18"><?php the_title(); ?></h3>
                  <a class="font-inter fw-bold fz-14 text-Ui-Color-Primary" href="<?php the_permalink(); ?>">Leia mais -></a>
                </a>
              </div>
            </div>
        <?php endwhile;
        else : endif; ?>

      </div>
      <a class="font-inter fw-bold text-Ui-Color-Primary" href="<?php echo home_url('/'); ?>eventos">Veja todos os eventos</a>
    </div>

  </section>
  <section class="fique-atual min-h-600 bg-fique">
    <div class="container py-0 py-sm-awe-90">
      <div class="d-flex align-items-center flex-column flex-sm-row">
        <h2 data-aos="fade-down" class="font-inter fw-bold text-Aco fz-36 my-4">Fique atualizado</h2>
        <a class="d-inline-block font-inter fw-normal text-Ui-Color-Primary ms-sm-5" href="<?php echo home_url('/'); ?>posts">Ver todas</a>
      </div>

      <div class=" overflow-hidden row my-3">
        <?php
        $args3 = array(
          'post_type' => 'post',
          'posts_per_page' => '3',
        );
        $the_query = new WP_Query($args3);
        ?>
        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div data-aos="flip-up" data-aos-delay="100" class=" col-12 col-sm-6 col-md-4 py-3">
              <div class="eventos_card">
                <a href="<?php the_permalink(); ?>" class="text-decoration-none d-block">
                  <?php the_post_thumbnail('thumbnail', ['class' => 'w-100 h-auto']); ?>
                  <span class="text-Prata-2 fz-14 fw-normal my-3 d-block"><?php echo get_the_date('d.M.y'); ?></span>
                  <h3 class="d-block mt-2 mb-4 font-inter fw-bold text-Ui-Color-Primary fz-18 d-inline-block"><?php the_title(); ?></h3>
                  <button class="btn-hover my-3 btn-outline-transparent font-inter fw-normal fz-14 bg-transparent text-Aco border border-Aco rounded-2  py-3 px-5 text-uppercase text-decoration-none d-inline-block">Leia mais</button>
                </a>
              </div>
            </div>
        <?php endwhile;
        else : endif; ?>

      </div>
    </div>
    <section class="parceiros bg-white">
      <div class="container py-4 py-sm-awe-90">
        <div class="d-flex align-items-center justify-content-center">
          <h2 data-aos="fade-down" class=" font-inter fw-normal text-Ui-Color-Primary fz-36 my-4">Parceiros</h2>
        </div>
        <div class=" overflow-hidden row my-3">
          <div data-aos="fade-up" data-aos-delay="100" class="col-sm-6 p-4 col-md-3 d-flex align-items-center justify-content-center">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/image/labore.png" alt="">
          </div>
          <div data-aos="fade-up" data-aos-delay="300" class="col-sm-6 p-4 col-md-3 d-flex align-items-center justify-content-center">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/image/aliqua.png" alt="">
          </div>
          <div data-aos="fade-up" data-aos-delay="500" class="col-sm-6 p-4 col-md-3 d-flex align-items-center justify-content-center">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/image/dynamic.png" alt="">
          </div>
          <div data-aos="fade-up" data-aos-delay="700" class="col-sm-6 p-4 col-md-3 d-flex align-items-center justify-content-center">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/image/fugiat.png" alt="">
          </div>

        </div>
      </div>
    </section>
    <section class="contato min-h-600 bg-Ui-Color-Primary">
      <div class="container py-0 py-sm-awe-90">
        <div class="d-flex align-items-center justify-content-center">
          <h2 data-aos="fade-down" class="font-inter fw-bold text-neve fz-36 my-4">Entre em contato</h2>
        </div>
        <div class=" overflow-hidden row py-5 justify-content-center">
          <div class=" col-12 col-sm-6 col-lg-4">
            <h2 class="font-inter fw-bold text-white fz-18 mb-4">
              <?php the_field('contato_titulo', 548); ?>
            </h2>
            <p class="font-inter fw-normal fz-14 text-neve mt-3 mb-5">
              <?php the_field('contato_descricao', 548); ?>
            </p>
          </div>
          <div class=" col-12 col-sm-6 col-lg-4">
            <h3 class="font-inter fw-normal text-white fz-16 my-4">
              <span class="me-3">
                <img width="24" height="24" src="<?php echo get_template_directory_uri(); ?>/dist/image/icon/location.svg" alt="">
              </span>
              <?php the_field('contato_endereco', 548); ?>
            </h3>
            <h3 class="font-inter fw-normal text-white fz-16 my-4">
              <span class="me-3">
                <img width="24" height="24" src="<?php echo get_template_directory_uri(); ?>/dist/image/icon/phone.svg" alt="">
              </span>
              <?php the_field('contato_numero', 548); ?>
            </h3>
            <h3 class="font-inter fw-normal text-white fz-16 my-4">
              <span class="me-3">
                <img width="24" height="24" src="<?php echo get_template_directory_uri(); ?>/dist/image/icon/mail.svg" alt="">
              </span>
              <a href="mailto:<?php the_field('contato_email', 548) ?>" class="text-white text-decoration-none">
                <?php the_field('contato_email', 548); ?>
              </a>
            </h3>
          </div>
        </div>
      </div>
    </section>
</main>

<?php get_footer() ?>