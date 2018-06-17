<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="okvir">

			<!-- header -->
			<header class="header clear nasHeader" role="banner">
				<nav>
						<ul>
							<li>
							Projekt
							</li>
							<li>
							<a href="<?php echo home_url()?>/o-nama">O nama</a>
							</li>
							<li>
							Kontakt
							</li>
							<li><i class="fab fa-facebook-f fa-lg"></i><a href="https://www.facebook.com"></a></li>
							<li><i class="fab fa-twitter fa-lg"></i><a href="https://www.twitter.com"></a></li>
							<li><i class="fab fa-instagram fa-lg"></i><a href="https://www.instagram.com"></a></li>
							
						</ul>
						</nav>

						<?php html5blank_nav('newMenuID')?>
					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
						</a>
					</div>
					
			</header>
			<!-- /header -->
