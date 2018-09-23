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

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
 // Assign the year to a variable
 $year = the_date('Y', '', '', FALSE);

 // If your year hasn't been echoed earlier in the loop, echo it now
 if ($year !== $year_check) {
 echo "<h2 class='year'>" . $year . "</h2>";
 }

 // Now that your year has been printed, assign it to the $year_check variable
 $year_check = $year;
?>

<div id="post-<?php the_ID(); ?>">
<?php the_title();?>
</div><!-- end .post-wrap -->
<?php endwhile; ?>
<!-- previous next nav -->
<?php else : ?>
<!-- posts not found info -->
<?php endif; ?>

<ul class="post-list">
  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <li class="post">
    <a href="<?php the_permalink(); ?>" rel="bookmark">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-2">
            <div class="date">
              <?php the_time('M jS, Y'); ?>
            </div>
          </div>
          <div class="col-12 col-lg-10">
            <div class="title">
              <?php the_title(); ?>
            </div>
          </div>
        </div>
      </div>
    </a>
  </li>
  <?php endwhile; ?>
  <?php endif; ?>
</ul>
<button type="button">Load More</button>

<?php
get_footer();