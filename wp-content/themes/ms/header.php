<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mysite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site ms__page">

    <!-- Header -->
    <header class="header">

        <h1 class="header__h1 v-hidden">Главная навигация</h1>

        <div class="header__wrapper">

        <?php if (is_front_page() && is_home()) { ?>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/my-logo.svg" alt="logo"
                     class="header__main-logo">
                <div class="header__left-line"></div>

                <nav class="main-nav">
                    <ul class="main-nav__list">
                        <li class="main-nav__item"><a href="page-portfolio.html" class="main-nav__link">Портфолио</a></li>
                        <li class="main-nav__item"><a href="page-tools.html" class="main-nav__link">Инструменты</a></li>
                        <li class="main-nav__item"><a href="page-sandbox.html" class="main-nav__link">Песочница</a></li>
                        <li class="main-nav__item"><a href="page-contacts.html" class="main-nav__link">Контакты</a></li>
                    </ul>
                </nav>

        <?php } else { ?>


            <a href="<?php echo home_url(); ?>" class="header__main-page-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/my-logo.svg" alt="logo" class="header__main-logo">
            </a>
        <?php } ?>

        </div>






    </header><!-- header end -->
