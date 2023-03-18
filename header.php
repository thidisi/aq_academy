<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AQ_Academy
 */

$primary_menu = [
	'theme_location' => 'primary-menu',
	'menu_id'        => 'primary-menu',
	'container'      => 'ul',
	'menu_class'     => 'navbar-list p-0',
];

$primary_menu_sp = [
	'theme_location' => 'primary-menu',
	'menu_id'        => 'primary-menu',
	'container'      => 'ul',
	'menu_class'     => 'mobile-navbar-list',
];

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon.png">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon.png">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="app">
		<header class="header">
			<div class="header_container header-top">
				<!-- logo -->
				<div class="logo-fixed logo d-none">
					<a href="/">
						<img src="<?php echo get_template_directory_uri() ?>/dist/images/common/logo.png" />
					</a>
				</div>
				<!-- end logo -->
				<!-- logo -->
				<div class="header-logo d-block">
					<div class="logo m-auto">
						<a href="/">
							<img src="<?php echo get_template_directory_uri() ?>/dist/images/common/logo.png" />
						</a>
					</div>
					<div class="navigate">
						<a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">特別無料体験授業実施中
						</a>
						<span class="d-inline-block">→</span>
					</div>
				</div>
				<!-- end logo -->
				<!-- navbar -->
				<div class="navbar navbar-top">
					<?php wp_nav_menu($primary_menu); ?>
					<div class="navbar-info navbar-left">
						<ul class="d-flex m-0 p-0">
							<li><a href="/contact"><img width="18" src="<?php echo get_template_directory_uri() ?>/dist/images/common/mail_icon.png" alt="">
									お問い合わせ</a></li>
							<li><a href="https://lin.ee/k0zAu8t" target=“_blank”><img width="20" src="<?php echo get_template_directory_uri() ?>/dist/images/common/line_icon.png" alt="">
									LINE友だち追加</a>
							</li>
						</ul>
					</div>
					<!-- navbar mobi -->
					<div class="navbar_mobi">
						<div class="menu-on">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="1" viewBox="0 0 24 1">
								<line id="Line_4" data-name="Line 4" x2="24" transform="translate(0 0.5)" fill="none" stroke="#1f1f1f" stroke-width="1" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="1" viewBox="0 0 24 1">
								<line id="Line_4" data-name="Line 4" x2="24" transform="translate(0 0.5)" fill="none" stroke="#1f1f1f" stroke-width="1" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="1" viewBox="0 0 24 1">
								<line id="Line_4" data-name="Line 4" x2="24" transform="translate(0 0.5)" fill="none" stroke="#1f1f1f" stroke-width="1" />
							</svg>
						</div>
						<div class="menu-off">
							<svg class="position-absolute" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<line id="Line_152" data-name="Line 152" x1="24" y2="24" transform="translate(0.354 0.354)" fill="none" stroke="#1f1f1f" stroke-width="1" />
							</svg>
							<svg class="position-absolute" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<line id="Line_151" data-name="Line 151" x2="24" y2="24" transform="translate(0.354 0.354)" fill="none" stroke="#1f1f1f" stroke-width="1" />
							</svg>

						</div>
					</div>
					<!-- end navbar mobi -->

				</div>
				<!-- end navbar -->
				<div class="mobile-navbar">
					<?php wp_nav_menu($primary_menu_sp); ?>
				</div>
			</div>
		</header>