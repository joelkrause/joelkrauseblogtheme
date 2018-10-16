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
  <div class="side--nav">
    <nav class="main--navigation">
      <?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'menu_id'        => 'primary',
        ) );
      ?>
    </nav>
  </div>
  <div class="preloader"></div>
  <div class="site--wrapper">
    <header class="site-header">

      <div class="bar">
        <div class="site-logo">
          <a href="<?php echo home_url(); ?>">
            Joel Krause // <span>front-end dev.</span>
          </a>
        </div>
        <div class="hamburger">
          <a id="mobile-nav-button" href="javascript:void(0);" class="mobile-hamburger">
            <span class="line1"></span>
            <span class="line2"></span>
            <span class="line3"></span>
          </a>
        </div>
      </div>
      <div class="container">

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
      <a href="#tocontent" class="scroll-msg-inner">
        <div class="scroll-msg-wheel"></div>
      </a>
    </header>