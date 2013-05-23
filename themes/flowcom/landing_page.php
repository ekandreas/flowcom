<?php
/**
 * Template Name: Landing Page
 *
 * Listing posts after category select
 * 
 */

get_header(); ?>

	<section id="content" role="main">

		<?php // Start the loop ?>
		<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<?php if ( has_post_thumbnail() ) : ?>
							<figure class="post-thumbnail">
								<?php the_post_thumbnail(); ?>
							</figure>
						<?php endif; ?>


							<h2>
								<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'blaskan' ), the_title_attribute( 'echo=0' ) ); ?>">
									<?php the_title(); ?>
								</a>
							</h2>

							<time datetime="<?php the_date('c'); ?>" pubdate><?php print get_the_date(); ?></time>

					</header>

					<div class="content">
						<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'blaskan' ) ); ?>
						<?php wp_link_pages( array( 'before' => '<nav class="page-link" role="navigation">' . __( 'Pages:', 'blaskan' ), 'after' => '</nav>' ) ); ?>

							<p>
								<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'blaskan' ), the_title_attribute( 'echo=0' ) ); ?>">
									<?php _e( 'Continue reading <span class="meta-nav">&rarr;</span>', 'blaskan' ); ?>
								</a>
							</p>

					</div>
					<!-- / .content -->

				</article>
				<!-- / #post-<?php the_ID(); ?> -->

		<?php endwhile; // End the loop. Whew. ?>

	</section>


<?php get_sidebar(); ?>

<?php get_footer(); ?>