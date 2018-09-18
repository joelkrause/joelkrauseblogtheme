<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <title>
    <?php if(is_front_page() || is_home()){
          echo get_bloginfo('name');
      } else{
          echo wp_title('');
          echo ' | ';
          echo get_bloginfo('name');
      }?>
  </title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="preloader"></div>
  <header class="site-header">
    <div class="container">
      <div class="bar">
        <div class="site-logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" />
          </a>
        </div>
        <div class="social--network">
          <a href="https://twitter.com/joel_krause" target="_blank"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
      <div class="page--title">

        <?php if (is_front_page() ) { ?>
        Hey, I'm Joel &amp; I'm a passionate front-end developer at
        <a href="http://www.chriate.com.au" target="_blank">Studio Chriate</a>.
        <br> This is my space where I share my findings, tips and tricks everything front-end development related.
        <?php } else if (is_page()) { ?>
        <?php the_title('<h1 class="blog-title">','</h1>');?>
        <?php } else if (is_singular()) { ?>
        <div class="post--meta">
          <?php the_title('<h1 class="blog-title">','</h1>');?>
          <div class="date">
            <?php the_time('M jS, Y'); ?>
          </div>
        </div>
        <?php } ?>

      </div>
    </div>
  </header>