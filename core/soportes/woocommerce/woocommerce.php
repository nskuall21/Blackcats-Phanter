<?php
function blackcats_phanter_woocommerce_setup() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'blackcats_phanter_woocommerce_setup');

function blackcats_phanter_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('woocommerce-style', get_template_directory_uri() . '/woocommerce.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'blackcats_phanter_enqueue_styles');

function blackcats_phanter_widgets_init() {
    register_sidebar(array(
        'name' => 'Sidebar de la Tienda',
        'id' => 'shop-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'blackcats_phanter_widgets_init');

function blackcats_phanter_menus() {
    register_nav_menus(array(
        'primary' => 'Menú Principal',
        'footer' => 'Menú del Pie de Página',
    ));
}
add_action('init', 'blackcats_phanter_menus');
