<?php get_header(); ?>

<div class="container">
  <div class="post--content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php the_content(); ?>

    <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <div class="comments">
    <?php comments_template(); ?>
  </div>

  <div class="author--box">
    author box
  </div>

  <div class="post--nav">
      <div class="prev--link text-left">
        <?php previous_post_link('%link','<span>Prev</span><- %title'); ?>
      </div>
      <div class="next--link text-right">
        <?php next_post_link('%link','<span>Next</span> %title ->'); ?>
      </div>
  </div>
</div>

<?php get_footer(); ?>