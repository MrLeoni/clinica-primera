<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Clínica_Primera
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Icons -->
<link rel="icon" href="<?php bloginfo("stylesheet_directory"); ?>/assets/images/logo/logo-primera_16.png" size="16x16">
<link rel="icon" href="<?php bloginfo("stylesheet_directory"); ?>/assets/images/logo/logo-primera_32.png" size="32x32">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<!-- Local Files -->
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/ionicons.min.css" rel="stylesheet">
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/jquery.bxslider.css" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-lg-2">
						<div class="header-logo-box">
							<a href="<?php echo esc_html(home_url("/")); ?>" title="Clínica Priméra"><img src="<?php bloginfo("stylesheet_directory"); ?>/assets/images/logo/primera-logo.png" alt="Clínica Priméra"></a>
						</div>
					</div>
					<div class="col-lg-offset-3 col-lg-6 mobile-padding">
						<nav id="main-nav">
							<?php
								$header_menu_args = array(
									"theme_location"	=> "header",
									"container"				=> "ul",
									"menu_class"			=> "nav-links"
								);
								wp_nav_menu( $header_menu_args );
							?>
						</nav>
					</div>
				</div>
			</div>
			<div class="mobile-btn">
				<i class="ion-ios-arrow-down"></i>
			</div>
		</header>
	