<?php
/**
 * The Template for displaying all single posts.
 *
 * @package cactus
 */
get_header(); 
?>
    <div class="cactus-single-page background-color-5c">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php 
				get_template_part( 'html/single/content', get_post_format() );
			?>
		<?php endwhile; // end of the loop. ?>
	</div><!-- cactus-single-page -->
<?php get_footer(); ?>