<?php
/**
 * Blackcats Seguridad
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
require_once BACKCATS_THEME_DIR . '/core/blackcat/admin-menu.php';
require_once BACKCATS_THEME_DIR . '/core/blackcat/pages/login.php';
require_once BACKCATS_THEME_DIR . '/core/blackcat/pages/escritorio.php';

$blackcatsweb =  esc_attr( get_option('type_web')); if($blackcatsweb =="Tienda"){

}
$blackcatsweb =  esc_attr( get_option('type_web')); if($blackcatsweb =="Inmobiliaria"){
    require_once BACKCATS_THEME_DIR . '/core/tuinmobiliaria/functions.php';
}

$blackcatsweb =  esc_attr( get_option('type_web')); if($blackcatsweb =="Blog"){

}



function blackcats_css_admin() {
    wp_enqueue_style( 'mayagrip', get_template_directory_uri() . '/assets/css/mayagrip.css');
    wp_enqueue_style( 'blackcats', get_template_directory_uri() . '/core/inc/css/admin-blackcats.css');
}
add_action( 'admin_enqueue_scripts', 'blackcats_css_admin' );


function blackcats_styles () {
    wp_enqueue_style('mayagrip-reset', get_stylesheet_directory_uri(). '/assets/css/reset.css' );
    wp_enqueue_style('mayagrip', get_stylesheet_directory_uri(). '/assets/css/mayagrip.css' );
    wp_enqueue_style('general-blackcats', get_stylesheet_directory_uri(). '/assets/css/blackcats-public.css' );
    wp_enqueue_style('style', get_stylesheet_uri() );   
    wp_enqueue_script('jquery');   
    //wp_enqueue_script('bootpag', get_stylesheet_directory_uri(). '/inc/librerias/bootpage/jquery.bootpag.min.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'blackcats_styles');


/********************************************************
                  Cambiar el pie de pagina del panel de Administración
**********************************************************/ 
function change_footer_admin() {  
    echo '&copy;2018 - 2024 Copyright Skuall Studio. Todos los derechos reservados <a href="https://www.skuallstudio.com" target="_blank">Skuall Studio</a>';  
}  
add_filter('admin_footer_text', 'change_footer_admin');

function remove_admin_bar_items() {
    global $wp_admin_bar;
    
    // Eliminar el logo de WordPress
    $wp_admin_bar->remove_node('wp-logo');
    
    // Eliminar enlaces adicionales (si es necesario)
    // $wp_admin_bar->remove_node('comments'); // Eliminar comentarios
    // $wp_admin_bar->remove_node('new-content'); // Eliminar nuevo contenido
    // Añade otras líneas similares para eliminar otros elementos según sea necesario
}
add_action('wp_before_admin_bar_render', 'remove_admin_bar_items', 999);

function custom_admin_bar_logo() {
    echo '<style>
        #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
            content: none;
        }
    </style>';
}
add_action('admin_head', 'custom_admin_bar_logo');
add_action('wp_head', 'custom_admin_bar_logo');

function custom_admin_menu_colors() {
    echo '<style>
    #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu {
        background-color: #846ACC!important;
    }
        #adminmenu .wp-submenu a:focus, #adminmenu .wp-submenu a:hover, #adminmenu a:hover, #adminmenu li.menu-top>a:focus {
    color: #846ACC!important;
}
        /* Cambiar el color de fondo del menú lateral */
        #adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap {
            background-color: #0d0918; /* Cambia este valor por el color que prefieras */
        }
        
        /* Cambiar el color del texto de los elementos del menú */
        #adminmenu a {
            color: #ffffff; /* Cambia este valor por el color que prefieras */
        }
        
        /* Cambiar el color del texto de los elementos del menú al pasar el ratón */
        #adminmenu li.menu-top:hover, #adminmenu li.opensub > a.menu-top, #adminmenu li > a.menu-top:focus {
            color: #7C64BF!important; /* Cambia este valor por el color que prefieras */
        }

        /* Cambiar el color del ícono del menú */
        #adminmenu .wp-menu-image:before {
            color: #ffffff; /* Cambia este valor por el color que prefieras */
        }
        
        /* Cambiar el color del ícono del menú al pasar el ratón */
        #adminmenu li.menu-top:hover .wp-menu-image:before, #adminmenu li.opensub > a.menu-top .wp-menu-image:before, #adminmenu li > a.menu-top:focus .wp-menu-image:before {
            color: #ffffff; /* Cambia este valor por el color que prefieras */
        }
    </style>';
}
add_action('admin_head', 'custom_admin_menu_colors');


