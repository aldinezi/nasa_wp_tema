<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>
	<div class="container">
			<div class="row justify-content-md-center">
			<div class="col-sm-12 col-md-10 col-lg-8">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post thumbnail -->
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
						<div class="header-wrap" style="background: url('<?php echo $url ?>'); background-size:cover;background-position: center center">
							<h1 class="single-post-title"><?php the_title(); ?></h1>
						</div>
												
						<!-- /post thumbnail -->
						<!-- post details -->
						<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
						<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
						<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
						<!-- /post details -->

						<?php the_content(); // Dynamic Content ?>

					</article>
					<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

					<!-- article -->
					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

					<?php endif; ?>
			</div>
			</div>
	</div>
	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
