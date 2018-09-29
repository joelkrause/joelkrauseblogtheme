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

<ul class="post-list">
  <?php
$day_check = '';
while (have_posts()) : the_post();
  $day = get_the_date('Y');
  if ($day != $day_check) {
    if ($day_check != '') {
      echo '</ul>'; // close the list here
    }
    echo '<div class="container"><div class="row"><div class="col-12"><div class="index--date"> '.get_the_date("Y") . '</div></div></div></div><ul class="post-list">';
  }
?>
  <li class="post">
    <div class="container">
      <div class="title">
        <a href="<?php the_permalink() ?>">
          <?php the_title(); ?>
        </a>
        <div class="tags">
          <?php
            $post_tags = get_the_tags();
            if ($post_tags) {
              foreach($post_tags as $tag) {
                echo '<span class="post--tag ' . $tag->slug . '">' . $tag->name . '</span>';
              }
            }
            ?>
        </div>
      </div>
      <div class="date">
        <?php the_time('M jS'); ?>
      </div>
    </div>
  </li>
  <?php
$day_check = $day;
endwhile; ?>
  <?php if ( have_posts() ) : ?>
  <?php endif; ?>
</ul>

<?php
get_footer();