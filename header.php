<?php
/**
 * The template for displaying the header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700&amp;subset=latin-ext" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page">

	<header id="header" class="header" role="banner">
<div class="wrapper">
	<div class="logo">
		<img class="logo__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="logo">
		<img class="logo__icon fixed" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-2.svg" alt="logo">
	</div>
		<nav class="nav">
		<?php wp_nav_menu( array( 'menu' => 'Main menu') ); ?>
		</nav>
</div>
	</header>

	<div id="content" class="site-content">
