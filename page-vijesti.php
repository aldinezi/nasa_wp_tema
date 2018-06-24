<?php /* Template Name: Vijesti Template */ get_header(); ?>
	<main role="main">
		<!-- slider -->
		<?php
		echo do_shortcode('[smartslider3 slider=1]');
		?>
		<!-- section -->
		<section class="pozadina">
			<?php
			global $post;
			$args = array( 'posts_per_page' => 3 );
			$lastposts = get_posts( $args );
			
			foreach ( $lastposts as $post ) :
			setup_postdata( $post ); ?>
						<div class="vijest">	
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_content(); ?></div>
					<?php endforeach; 
			
					wp_reset_postdata(); ?>
			
		</section>
		<?php get_footer(); ?>
					<!-- /section -->
				</main>
			


