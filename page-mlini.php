<?php /*Template Name:mlini*/?>
<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<section id="slika">
					<section id="naslov">
						<h1>Druga stranica VRBANJUSE</h1>
						<h1>Has Never Been Easier!</h1>
						<h3>You can create unlimited possibilities with our new team.</h3>
						<button id="dugme">Start Earning Today</button>
					</section>
			</section>
			<section class="sadrzaj">
				<h1>Best Headings Are The Thinest</h1>
				<h3>From logo to website design and developers are ready to complete perfect your custom jobs</h3>
				
			</section>

			<section id="vijesti">
				<div class="vijest">
						<h2>Vijest 1</h2>
						<p>We provides you with user manage functions that result in faster development process</p>
				</div>
				<div class="vijest">
					<h2>Vijest 2</h2>
					<p>We provides you with user manage functions that result in faster development process</p>
					
				</div>
				<div class="vijest">
					<h2>Vijest 3</h2>
					<p>We provides you with user manage functions that result in faster development process</p>
					
				</div>
			</section>
			<section class="sadrzaj">
				<h1>Best Prices For Great Services</h1>
				<h3>From logo to website design and developers are ready to complete perfect your custom jobs</h3>
			</section>
			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">
	

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
