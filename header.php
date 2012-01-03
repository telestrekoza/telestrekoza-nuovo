<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title><?php wp_title('|',true,'right'); ?> <?php bloginfo( 'name' ); ?></title>
	
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="<?php bloginfo('admin_email'); ?>">
	
	<!-- The Open Graph protocol enables any web page to become a rich object in a social graph. http://ogp.me/ -->
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:image" content="<?php bloginfo('template_url'); ?>/apple-touch-icon.png" />

	<!-- Consult this list of types: http://ogp.me/#types -->
	<meta property="og:type" content="news" /> 
	
	<!-- meta property="fb:admins" content="<?php echo $facebookProfileId; ?>" / -->

	
	<?php if (is_single()) { ?> 
		<meta property="og:title" content="<?php the_title(); ?>" />
		<meta property="og:url" content="<?php the_permalink() ?>" />
	<?php } ?>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="/static/nuovo/css/normalize.css">
	<link rel="stylesheet" href="/static/nuovo/css/grids-min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/nuovo.css">

	<link rel="stylesheet" href="/static/th5/style-date.css">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  
	<!-- All JavaScript at the bottom, except for Modernizr and Respond.
		 Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries -->
	<script src="/static/nuovo/js/libs/modernizr-2.0.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/libs/respond.min.js"></script>

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<div id="container">
		<header>
			<hgroup role="menu" class="header-item header-item-nav">
				<div id="header-nav-container" class="yui3-g header-item-container ground">
					<section role="head-menu" id="header-nav-left" class="yui3-u-1-2"><?php get_template_part( 'header-nav-left' ); ?></section>
					<section role="head-menu" id="header-nav-right" class="yui3-u-1-2 right"><?php get_template_part( 'header-nav-right' ); ?></section>
				</div>
			</hgroup>
			<hgroup id="logo-banner" role="banner" class="header-item header-item-logo">
				<canvas id="header-canvas"></canvas>
				<div id="header-logo-container" class="yui3-g header-item-container ground">
					<section role="logo" id="header-nav-left" class="yui3-u-1-2">
						<h1><a href="/"><img src="/static/nuovo/img/logo/new_logo_a.png" alt="TeleStrekoza"/></a></h1>
						<h2><?php bloginfo('description'); ?></h2>
					</section>
					<section role="selectTvShow" id="header-nav-right" class="yui3-u-1-2 right">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
						<?php endif; ?>
					</section>
				</div>
			</hgroup>
		</header>
		
		<div id="main-menu-line">
        	<section role="menubar" id="main-menu" class="ground">
				<?php wp_nav_menu(); ?>
			</section>
		</div>

	<div id="main" role="main">
