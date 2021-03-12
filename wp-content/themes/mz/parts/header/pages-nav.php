<?php
/**
 * Displays the site navigation.
 */

?>


<nav class="page-nav">

        <?php

        wp_nav_menu([
            'theme_location'  => '',
            'menu'            => 'Меню страниц',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'page-nav__list',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
        ]);

        ?>

</nav>