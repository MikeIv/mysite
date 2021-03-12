<!DOCTYPE html>
<html <?php language_attributes(); ?> class="page">
  <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('page__body'); ?>>

  <!-- Header -->
  <header class="header">

      <h1 class="header__h1 v-hidden">Главная навигация</h1>

      <div class="header__wrapper">

          <img src="<?php theme_image('my-logo.svg'); ?>" alt="logo"
               class="header__main-logo">
          <div class="header__left-line"></div>



          <nav class="main-nav">
              <?php

                wp_nav_menu([
                    'theme_location'  => '',
                    'menu'            => '',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'main-nav__list',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ]);

              ?>
          </nav>

      </div>

  </header><!-- header end -->