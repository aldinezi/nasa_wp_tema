<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

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

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	<a class="navbar-brand" href="#"><img src="" alt=""></a>
	<a href="<?php echo home_url(); ?>" class="navbar-brand">
		<img src="<?php echo get_template_directory_uri(); ?>/img/okc-logo.png" alt="Logo" class="logo-img">
	</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          O nama
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="muzika">Muzički centar</a>
          <a class="dropdown-item" href="itcentar">IT Centar</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontakt">Kontakt</a>
      </li>
    </ul>
  </div>
  <div class="links">
		<a href="https://www.facebook.com/okcurbanart/" target="_blank" class="link-fb"><i class="fab fa-facebook fa-2x facebookLink"></i></a>
	</div>
</nav>
			<!-- /header -->
