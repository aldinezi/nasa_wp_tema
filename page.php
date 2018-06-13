<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<section id="img">
				<section id="title">
					<h1>Making Landing Pages</h1>
					<h1>Has Never Been Easier!</h1>
					<h3>You can create unlimited possibilities with our new team.</h3>
					<button id="btn">Start Earning Today</button>					
				</section>
			</section>

			<section class="content">
					<div id="contentTitle">
						<h1>Beast Headings Are the Thinest!</h1>
						<h3>From logo to website design and developers are ready to complete perfect your custom jobs</h3>
					</div>
			</section>

			<section id="boxes">
				<div class="box">
					<h2>Vijest 1</h2>
					<p>We provides you with user manage functions that result in faster development process</p>
				</div>
				<div class="box">
					<h2>Vijest 1</h2>
					<p>We provides you with user manage functions that result in faster development process</p>
				</div>
				<div class="box">
					<h2>Vijest 1</h2>
					<p>We provides you with user manage functions that result in faster development process</p>
				</div>
			</section>

			<section class="content">
				<div id="contentTitle">
					<h1>Beast Prices For Great Services</h1>
					<h3>From logo to website design and developers are ready to complete perfect your custom jobs</h3>
				</div>
			</section>

			
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>


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
