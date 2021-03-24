
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="page">
  <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('page__pages-body'); ?>>

  <!-- Header -->
<header class="header-pages">

    <div class="header__page-wrapper">
        <a href="<?php echo get_home_url(); ?>">
            <img src="<?php theme_image('my-logo.svg'); ?>" alt="logo" class="header__main-logo">
        </a>
        <div class="header__left-line"></div>

        <h1 class="header__page-h1"><?php echo get_the_title(); ?></h1>

    </div>

    <?php get_template_part( 'parts/header/pages-nav' ); ?>


</header><!-- header end -->


