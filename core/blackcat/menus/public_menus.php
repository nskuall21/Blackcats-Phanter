<?php
/**
 * Blackcats Seguridad
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
// registro de menis de la plantilla
 register_nav_menus( array (
     'top_menu'=>__('Menu Primary','Blackcats'),
     'social_menu'=>__('Menu Social','Blackcats'),
 ));
/* ---- filtro para añadir clases al menu --- */
 function Blackcats_menu_classes($classes, $item, $args){
            
            if ($args->theme_location == 'top_menu')
            {
                $classes[] = 'mod-li';
            }
            return $classes;
        }    
add_filter('nav_menu_css_class', 'Blackcats_menu_classes',1,3);