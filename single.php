<?php get_header(); ?>

<div class="container">
  <div class="post--content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php the_content(); ?>

    <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <div class="post--nav">
    <div class="row">
      <div class="col-6 text-left">
        <?php previous_post_link(); ?>
      </div>
      <div class="col-6 text-right">
        <?php next_post_link(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>