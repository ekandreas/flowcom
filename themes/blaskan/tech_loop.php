<?php

query_posts( 'category_name=tech blog' );

while ( have_posts() ) : the_post(); ?>

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
				<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'blaskan' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<nav class="page-link" role="navigation">' . __( 'Pages:', 'blaskan' ), 'after' => '</nav>' ) ); ?>

				<?php if ( !is_single() && !get_the_title() ) : ?>
					<p>
						<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'blaskan' ), the_title_attribute( 'echo=0' ) ); ?>">
							<?php _e( 'Continue reading <span class="meta-nav">&rarr;</span>', 'blaskan' ); ?>
						</a>
					</p>
				<?php endif; ?>
			</div>
			<!-- / .content -->

			<footer>
				<?php
				$tags_list = get_the_tag_list( '', ', ' );
				if ( $tags_list ):
					?>
					<span class="tags">
						<?php printf( __( '<span class="%1$s">Tagged with</span> %2$s', 'blaskan' ), 'tags-label', $tags_list ); ?>
					</span>
				<?php endif; ?>

				<?php edit_post_link( __( 'Edit', 'blaskan' ), '<span class="edit">', '</span>' ); ?>
			</footer>
		</article>
		<!-- / #post-<?php the_ID(); ?> -->

<?php endwhile; // End the loop. Whew. ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<nav class="post-nav" role="navigation">
		<div class="nav-previous"><?php next_posts_link( __( 'Older posts', 'blaskan' ) ); ?></div>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts', 'blaskan' ) ); ?></div>
	</nav>
	<!-- / .post-nav -->
<?php endif; ?>
