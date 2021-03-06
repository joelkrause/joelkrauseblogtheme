<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dfg
 */

get_header();
?>
<div class="container">
  <ul class="post-list">
    <?php
$day_check = '';
while (have_posts()) : the_post();
  $day = get_the_date('Y');
  if ($day != $day_check) {
    echo '<div class="row"><div class="col-12"><div class="index--date"> '.get_the_date("Y") . '</div></div></div>';
  }
?>
    <li class="post">
      <a href="<?php the_permalink() ?>">
        <div class="title">
          <?php the_title(); ?>
        </div>
        <div class="date">
          <?php the_time('M jS'); ?>
        </div>
      </a>
    </li>
    <?php
$day_check = $day;
endwhile; ?>
    <?php if ( have_posts() ) : ?>
    <?php endif; ?>
  </ul>
</div>
<?php
get_footer();