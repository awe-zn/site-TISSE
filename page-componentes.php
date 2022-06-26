<?php
// Template Name: componentes
?>
<?php get_header() ?>
<main class="container min-h-600">
  <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
    <ol class="breadcrumb m-0">
      <li class="breadcrumb-item font-inter fw-normal"><a class="text-Prata-2" href="<?php echo home_url('/'); ?>">Home</a></li>
      <li class="breadcrumb-item font-inter fw-normal text-Prata-2 active" aria-current="page">Componentes</li>
    </ol>
  </nav>
  <div data-aos="fade-down" data-aos-delay="200" class="title-page">
    <h1 class="font-inter fw-bold fz-44 py-4 m-0 text-break">Pesquisadores</h1>
  </div>
  <section class="pesquisadores py-3">
    <h2 class="font-inter fw-normal fz-26 my-3">Pesquisadores atuais</h2>
    <div class="row gy-5">

      <?php

      $equipe = get_field('Componente');
      if (isset($equipe)) {

        foreach ($equipe as $membro) { ?>
          <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class="lazy">
              <img class="w-100 h-auto" data-src="<?php echo $membro['imagem'] ?>" alt="">
            </div>
            <div class="my-3">
              <h3 class="font-inter fw-bold fz-18 text-Aco m-0"><?php echo $membro['nome'] ?></h3>
              <span class="text-Prata-2 fz-14 fw-normal d-block"><?php echo $membro['funcao'] ?></span>
            </div>
            <div class="mb-3">
              <p class="font-lato fw-normal text-Aco fz-14"><?php echo $membro['descricao'] ?></p>
            </div>
            <a class="font-lato fw-normal fz-14 text-break" href="<?php echo $membro['link'] ?>"><?php echo $membro['link'] ?></a>
          </div>

      <?php }
      }
      ?>
    </div>
  </section>
</main>

<?php get_footer() ?>