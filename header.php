<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/style-update.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <?php wp_head(); ?>
  <title>
    <?php bloginfo('name'); ?>
    <?php if (!is_front_page()) {
      echo " | ";
    } ?>
    <?php wp_title(''); ?>
  </title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg" style="background-color: <?php the_field('background_principal', 548); ?>;">
      <div class="container py-3">
        <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/image/REDE-TISSE.svg" alt="">
        </a>
        <button class="toggler navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="span"></span>
          <span class="span"></span>
          <span class="span"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end font-inter" id="navbarNav">
          <?php

          $args_projetos = array(
            'menu' => 'header-menu',
            'container' => 'ul',
            'menu_class' => 'navbar-nav menu'
          );
          wp_nav_menu($args_projetos);
          ?>
          <ul class="navbar-nav icones">
            <?php if (get_field('tt', 39)) { ?>
              <li class="nav-item icon">
                <a class="nav-link text-uppercase fz-14 text-neve" href="<?php the_field('tt', 39); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/dist/image/icon/twitter.svg" alt="">
                </a>
              </li>
            <?php } ?>
            <?php if (get_field('instagram', 39)) { ?>
              <li class="nav-item icon">
                <a class="nav-link text-uppercase fz-14 text-neve" href="<?php the_field('instagram', 39); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/dist/image/icon/instagram.svg" alt="">
                </a>
              </li>
            <?php } ?>
            <?php if (get_field('yt', 39)) { ?>
              <li class="nav-item icon">
                <a class="nav-link text-uppercase fz-14 text-neve" href="<?php the_field('yt', 39); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/dist/image/icon/youtube.svg" alt="">
                </a>
              </li>
            <?php } ?>
            <?php if (get_field('facebook', 39)) { ?>
              <li class="nav-item icon">
                <a class="nav-link text-uppercase fz-14 text-neve" href="<?php the_field('facebook', 39); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/dist/image/icon/facebook.svg" alt="">
                </a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>