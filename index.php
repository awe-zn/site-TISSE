<?php get_header()?>


<main>
  <style>
    .banner {
      background: url(<?php echo get_template_directory_uri();?>/dist/image/image.svg) no-repeat bottom right;
    }
    .contato form input[type=email] {
      background: url(<?php echo get_template_directory_uri();?>/dist/image/icon/mail_input.svg) no-repeat 2% center, white;
    }
    .search::after {
      content: "";
      padding: 24px;
      display: block;
      position: absolute;
      top: 0;
      right: 0;
      background: url(<?php echo get_template_directory_uri();?>/dist/image/icon/search.svg) no-repeat center center;
    }
  </style>
        <section class="banner min-h-600 bg-Ui-Color-Primary pb-5">
          <div class="container py-awe-90">
            <div class="row">
              <div class="col-12 col-md-8 col-lg-6 ">
                <h1 class="font-inter fw-bold text-Gray-6 fz-48 my-4">Bem-vindo à TISSE</h1>
                <p class="font-inter fw-normal fz-21 text-neve my-4 ">If you’re looking for the latest in wireless headphones, look no further. These are perfect for TV, stereo, home, and cell phone.</p>
                <a class="font-ubuntu text-decoration-none text-Ui-Color-Primary  fw-normal px-4 py-2 rounded-1 bg-Ui-Color-Alert-Dark d-inline-block my-4" href="#">INSCREVA-SE NA NEWSLETTER</a>
              </div>
            </div>
          </div>
        </section>
        <section class="somos min-h-600 bg-white">
          <div class="container py-0 py-sm-awe-90">
            <div class=" overflow-hidden row py-5 justify-content-between">
              <div data-aos="zoom-in-right" data-aos-delay="100" class="col-12 col-lg-6 py-5">
                <h2 class="font-inter fw-bold text-Aco fz-36 my-4  animate-delay-1">Somos a REDE TISSE</h2>
                <p class="font-lato fw-normal fz-21 text-prata my-4  animate-delay-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat  incididunt ut laboret.</p>
                <a class="font-ubuntu text-decoration-none text-Ui-Color-Primary  animate-delay-3 fw-normal px-awe-90 py-2 rounded-1 border border-Ui-Color-Primary d-inline-block my-4" href="#">LEIA MAIS</a>
              </div>
                <div data-aos="zoom-in-right" data-aos-delay="500" class="col-12 col-lg-5 d-flex justify-content-center">
                  <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/dist/image/image1.png" alt="">
                </div>
            </div>
          </div>
        </section>
        <section class="eventos min-h-600 bg-white">
          <div class="container py-5 py-sm-awe-90">
            <h2 data-aos="fade-down" class="font-inter fw-bold text-Aco fz-36 my-4">Próximos eventos</h2>
            <div class=" overflow-hidden row my-3">
            <?php 
                      $args3 = array (
                        'post_type' => 'eventos',
                        'posts_per_page'=>'4',
                    );
                      $the_query = new WP_Query ( $args3 );
            ?>
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
              <div data-aos="flip-down" data-aos-delay="100" class="col-12 col-sm-6 col-lg-3 py-3">
                  <div class="eventos_card border border-1 border-Aco rounded-1 p-3 card-evento-1">
                    <a class="text-decoration-none d-block" href="<?php the_permalink(); ?>">
                    <span class="text-Prata-2 fz-14 fw-normal"><?php echo get_the_date('d.M.y'); ?></span>
                    <h3 class="my-5 font-inter fw-bold text-Aco fz-18"><?php the_title(); ?></h3>
                    <a class="font-inter fw-bold fz-14 text-Ui-Color-Primary" href="<?php the_permalink(); ?>">Leia mais -></a>
                  </a>
                  </div>
              </div>
              <?php endwhile; else: endif; ?>
              
            </div>
            <a class="font-inter fw-bold text-Ui-Color-Primary" href="<?php echo home_url('/');?>/eventos">Veja todos os eventos</a>
          </div>
            
        </section >
        <section class="fique-atual min-h-600 bg-fique">
        <div class="container py-0 py-sm-awe-90">
          <div class="d-flex align-items-center flex-column flex-sm-row">
            <h2 data-aos="fade-down" class="font-inter fw-bold text-Aco fz-36 my-4">Fique atualizado</h2>
            <a class="d-inline-block font-inter fw-normal text-Ui-Color-Primary ms-sm-5" href="<?php echo home_url('/');?>posts">Ver todas</a>
          </div>
          
          <div class=" overflow-hidden row my-3">
          <?php 
                      $args3 = array (
                        'post_type' => 'post',
                        'posts_per_page'=>'3',
                    );
                      $the_query = new WP_Query ( $args3 );
          ?>
           <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
            <div data-aos="flip-up" data-aos-delay="100" class=" col-12 col-sm-6 col-md-4 py-3">
              <div class="eventos_card">
              <a href="<?php the_permalink(); ?>" class="text-decoration-none d-block">
                <?php the_post_thumbnail('thumbnail', ['class' => 'w-100 h-auto']);?>
                <span class="text-Prata-2 fz-14 fw-normal my-3 d-block"><?php echo get_the_date('d.M.y'); ?></span>
                <h3 class="d-block mt-2 mb-4 font-inter fw-bold text-Ui-Color-Primary fz-18 d-inline-block"><?php the_title(); ?></h3>
                <button class="btn-hover my-3 btn-outline-transparent font-inter fw-normal fz-14 bg-transparent text-Aco border border-Aco rounded-2  py-3 px-5 text-uppercase text-decoration-none d-inline-block">Leia mais</button>
              </a>
            </div>
            </div>
          <?php endwhile; else: endif; ?>
            
          </div>
        </div>
        <section class="parceiros bg-white">
          <div class="container py-4 py-sm-awe-90">
            <div class="d-flex align-items-center justify-content-center">
              <h2 data-aos="fade-down" class=" font-inter fw-normal text-Ui-Color-Primary fz-36 my-4">Parceiros</h2>
            </div>
            <div class=" overflow-hidden row my-3">
              <div data-aos="fade-up" data-aos-delay="100" class="col-sm-6 p-4 col-md-3 d-flex align-items-center justify-content-center">
                <img src="<?php echo get_template_directory_uri();?>/dist/image/labore.png" alt="">
              </div>
              <div data-aos="fade-up" data-aos-delay="300" class="col-sm-6 p-4 col-md-3 d-flex align-items-center justify-content-center">
                <img src="<?php echo get_template_directory_uri();?>/dist/image/aliqua.png" alt="">
              </div>
              <div data-aos="fade-up" data-aos-delay="500" class="col-sm-6 p-4 col-md-3 d-flex align-items-center justify-content-center">
                <img src="<?php echo get_template_directory_uri();?>/dist/image/dynamic.png" alt="">
              </div>
              <div data-aos="fade-up" data-aos-delay="700"  class="col-sm-6 p-4 col-md-3 d-flex align-items-center justify-content-center">
                <img src="<?php echo get_template_directory_uri();?>/dist/image/fugiat.png" alt="">
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
                <h2 class="font-inter fw-bold text-white fz-18 mb-4">Estamos esperando seu contato</h2>
                <p class="font-inter fw-normal fz-14 text-neve mt-3 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <h3 class="font-inter fw-normal text-white fz-16 my-4"><span class="me-3"><img width="24" height="24" src="<?php echo get_template_directory_uri();?>/dist/image/icon/location.svg" alt=""></span>385 Noah Place Suite 878</h3>
                <h3 class="font-inter fw-normal text-white fz-16 my-4"><span class="me-3"><img width="24" height="24" src="<?php echo get_template_directory_uri();?>/dist/image/icon/phone.svg" alt=""></span>877-255-7945</h3>
                <h3 class="font-inter fw-normal text-white fz-16 my-4"><span class="me-3"><img width="24" height="24" src="<?php echo get_template_directory_uri();?>/dist/image/icon/mail.svg" alt=""></span>info@form.com</h3>
              </div>
                <div class=" col-12 col-sm-6 col-lg-4">
                  <form>
                    <div class="mb-3">
                      <input type="email" class="form-control py-awe-12 ps-awe-36" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu e-mail">
                    </div>
                    <div class="mb-3">
                      <select class="form-select ps-2 py-awe-12" aria-label="Default select example" placeholder="Escolha um assunto">
                        <option class="text-Aco" value="" disabled selected>Escolha um assunto</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                    <div class="mb-3">
                        <textarea rows="4" class="w-100 py-1 px-2" placeholder="Mande uma mensagem para nós..."></textarea>
                    </div>
                    <button type="submit" class="btn rounded-0 w-100 border border-1 border-white text-white font-ubuntu fw-normal fz-12 py-awe-12">ENVIAR</button>
                  </form>
                </div>
            </div>
          </div>
        </section>
    </main>

<?php get_footer()?>