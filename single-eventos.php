<?php get_header() ?>
<main class="container quem-somos min-h-600">
  <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
    <ol class="breadcrumb m-0">
      <li class="breadcrumb-item font-inter fw-normal"><a class="text-Prata-2" href="<?php echo home_url('/'); ?>">Home</a></li>
      <li class="breadcrumb-item font-inter fw-normal text-Prata-2 active" aria-current="page"><?php the_title(); ?></li>
    </ol>
  </nav>
  <div data-aos="fade-down" data-aos-delay="200" class="title-page">
    <h1 class="font-inter fw-bold fz-44 py-4 m-0 text-break"><?php the_title() ?></h1>
  </div>
  <section class="py-3">
    <span class="font-inter fw-bolder fst-italic fz-16 text-Gray d-block my-2">atualizado em <span class="text-Aco"><?php echo get_the_date('d.M.Y'); ?></span></span>
    <div class="content py-5">
      <?php the_content(); ?>
    </div>


  </section>
</main>
<?php get_footer() ?>