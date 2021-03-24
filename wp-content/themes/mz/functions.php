<?php 

//Theme supports
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support('menus');

//Add menu
register_nav_menus(array(
    'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
    'footer' => 'Нижнее меню'      //Название другого месторасположения меню в шаблоне
));

add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' ); // Убираем везде DIV контейнер
function my_wp_nav_menu_args( $args='' ){
    $args['container'] = '';
    return $args;
}




add_filter(
    'nav_menu_link_attributes',
    function($atts, $item, $args, $depth) {
        // добавляем класс для элементов <a>
        $atts['class'] = 'main-nav__link';
        return $atts;
    },
    10,
    4
);
	
//Load styles & scripts	
function mz_scripts() {
    $ver = '0.0.1';
	wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), $ver );
	wp_enqueue_style( 'mz-style', get_template_directory_uri() . '/assets/css/style.min.css', array(), $ver );
	wp_enqueue_style( 'mz-addstyle', get_template_directory_uri() . '/assets/css/addstyle.css', array(), $ver );
}

add_action( 'wp_enqueue_scripts', 'mz_scripts' );



//Подключение изображений в html
function theme_image($image) {
    echo get_template_directory_uri() . '/assets/img/' . $image;

}