<?php
/**
 * Template Name: Techblog
 */

get_header(); ?>

	<section id="content" role="main">
		<?php get_template_part( 'tech_loop', 'index' ); ?>
	</section>
	<!-- / #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>