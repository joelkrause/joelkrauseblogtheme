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
  <div class="site--wrapper">
    <header class="site-header">
      <div class="container">
        <div class="bar">
          <div class="site-logo">
            <a href="<?php echo home_url(); ?>">
              Joel Krause // <span>front-end dev.</span>
            </a>
          </div>
          <div class="social--network">
            <a href="https://twitter.com/joel_krause" target="_blank"><i class="fab fa-twitter"></i></a>
          </div>
        </div>


        <div class="page--title">

          <?php if (is_front_page() ) { ?>
          <div class="main">I'm Joel &amp; I'm a passionate <span>front-end developer</span> at
            <a href="http://www.chriate.com.au" target="_blank">Studio Chriate</a>.</div>
          <span class="subtitle">This is my space where I share all my tips &amp; tricks of being a front-end dev</span>
          <?php } else if (is_page()) { ?>
          <?php the_title('<h1 class="blog-title">','</h1>');?>
          <?php } else if (is_singular()) { ?>
          <div class="post--meta">
            <?php the_title('<h1 class="blog-title">','</h1>');?>
            <div class="date">
              Published on
              <?php the_time('F jS, Y'); ?> by Joel Krause
            </div>
            <div class="tags">
              <?php
            $post_tags = get_the_tags();
            if ($post_tags) {
              foreach($post_tags as $tag) {
                echo '<span class="post--tag ' . $tag->slug . '">#' . $tag->name . '</span>';
              }
            }
            ?>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </header>
    <div class="wave--container">
      <svg viewBox="0 0 1440 120" id="wave" width="100%" height="100%">
        <path d="M1440,21.2101911 L1440,120 L0,120 L0,21.2101911 C120,35.0700637 240,42 360,42 C480,42 600,35.0700637 720,21.2101911 C808.32779,12.416393 874.573633,6.87702029 918.737528,4.59207306 C972.491685,1.8109458 1026.24584,0.420382166 1080,0.420382166 C1200,0.420382166 1320,7.35031847 1440,21.2101911 Z"></path>
      </svg>
    </div>