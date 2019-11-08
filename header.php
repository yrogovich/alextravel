<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alextravel_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<?php include "src/const.php" // Часто изменяемые значения ?>

	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url') ?>/src/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url') ?>/src/img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url') ?>/src/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url') ?>/src/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url') ?>/src/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url') ?>/src/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url') ?>/src/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url') ?>/src/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url') ?>/src/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url') ?>/src/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url') ?>/src/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url') ?>/src/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url') ?>/src/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_url') ?>/src/img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php bloginfo('template_url') ?>/src/img/favicon//ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header class="main">
		<div class="container-full">
			<navbar>
				<a href="<?php echo get_home_url() ?>" class="logo">
					<img src="<?php bloginfo('template_url') ?>/src/img/logo.svg" alt="AlexTravel logo">
				</a>
				<div class="line"></div>
				<div class="right-block">
					<div class="messenger-wrapper">
						<a href="tel:<?=PHONE_HREF?>" class="phone"><?=PHONE?></a>
						<div class="messengers">
							<a href="<?=TELEGRAM_LINK?>" target="_blank" class="telegram"><img src="<?php bloginfo('template_url') ?>/src/img/header/telegram.svg" alt="telegram"></a>
							<a href="<?=WHATSAPP_LINK?>" target="_blank" class="whatsapp"><img src="<?php bloginfo('template_url') ?>/src/img/header/whatsapp.svg" alt="whatsapp"></a>
						</div>
						<!-- /.messengers -->
					</div>
					<!-- /.social-wrapper -->

					<svg class="burger" viewBox="0 0 100 100" width="70" onclick="this.classList.toggle('active')">
                        <path class="line top"
                                d="m 70,33 h -40 c 0,0 -6,1.368796 -6,8.5 0,7.131204 6,8.5013 6,8.5013 l 20,-0.0013" />
                        <path class="line middle"
                                d="m 70,50 h -40" />
                        <path class="line bottom"
                                d="m 69.575405,67.073826 h -40 c -5.592752,0 -6.873604,-9.348582 1.371031,-9.348582 8.244634,0 19.053564,21.797129 19.053564,12.274756 l 0,-40" />
                    </svg>
				</div>
				<!-- /.right-block -->
			</navbar>
		</div>
		<!-- /.container-full -->
		<div class="container">
			<div class="relative">
			<h1 data-aos="zoom-in">
				<div class="bold">Авторские групповые туры</div>
				по всему миру
			</h1>

			<ul>
				<li data-aos="fade-up" data-aos-delay="400">Исландия (ноябрь) - мест нет</li>
				<li data-aos="fade-up" data-aos-delay="600">Исландия (декабрь) - мест нет</li>
				<li data-aos="fade-up" data-aos-delay="800">Иордания (январь) - мест нет</li>
				<li data-aos="fade-up" data-aos-delay="1000" class="active">Исландия (апрель) - осталось 9 мест</li>
			</ul>

			<div id="compass">
				<img src="<?php bloginfo('template_url') ?>/src/img/header/compass.png" alt="cardinal-directions" class="cardinal-directions">
				<img src="<?php bloginfo('template_url') ?>/src/img/header/compass-niddle.png" alt="niddle" class="niddle">
			</div>

			<img src="<?php bloginfo('template_url') ?>/src/img/header/man.png" alt="Алекс" class="man"
				data-aos="zoom-in-up"
				data-aos-delay="1000"
				data-aos-duration="1000">

			<div class="social-wrapper">
				<span class="title">Присоеденяйся!</span>
				<div class="social">
					<a href="<?=VK?>" target="_blank" class="vk"><img src="<?php bloginfo('template_url') ?>/src/img/header/vk.svg" alt="vk"></a>
					<a href="<?=INST?>" target="_blank" class="inst"><img src="<?php bloginfo('template_url') ?>/src/img/header/inst.svg" alt="inst"></a>
					<a href="<?=FACEBOOK?>" target="_blank" class="facebook"><img src="<?php bloginfo('template_url') ?>/src/img/header/facebook.svg" alt="facebook"></a>
				</div>
			</div>
			</div>
			<!-- /.relative -->
		</div>
		<!-- /.container -->

		<svg class="wave" viewBox="0 0 1920 518" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1920 0H1840C1760 0 1600 0 1440 57C1280 115 1120 230 960 288C800 345 640 345 480 316C320 288 160 230 80 201L0 172V518H80C160 518 320 518 480 518C640 518 800 518 960 518C1120 518 1280 518 1440 518C1600 518 1760 518 1840 518H1920V0Z" fill="white"/></svg>
	</header>
	<!-- /.main -->