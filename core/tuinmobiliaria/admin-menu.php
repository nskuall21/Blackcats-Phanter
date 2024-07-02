<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
function Tu_inmobiliaria_ajustes(){  
    // agregando menu para la informacion de la empresa
    add_menu_page(
        'Tu inmobiliaria',//Titulo pagina
        'Tu inmobiliaria',//Titulo menu
        'administrator',// capability
        'Tu-inmobiliaria',//slug
        'Tuinmobiliaria_Dashboard',//contenido
        //'dashicons-building',
        get_template_directory_uri() . '/core/tuinmobiliaria/img/tu-inmobiliaria.png',//icono
        '3'
    ); 
    $tcrm =  esc_attr( get_option('active_crm')); if($tcrm =="Simi"){
        add_submenu_page(
            'Tu-inmobiliaria',//padre
            'Simi',// Ajustes tutulo pagina
            'Simi CRM',// titulo menu
            'administrator',//permisos
            'simi-crm',//slug
            'simicrm'// contenido
        );
    }
        add_submenu_page(
        'Tu-inmobiliaria',//padre
        'Buscador',// Ajustes tutulo pagina
        'Buscador',// titulo menu
        'administrator',//permisos
        'buscador',//slug
        'configbuscadores'// contenido
    );

    add_submenu_page(
        'Tu-inmobiliaria',//padre
        'Fichas',// Ajustes tutulo pagina
        'Ficha',// titulo menu
        'editor',//permisos
        'fichas',//slug
        'configfichas'// contenido
    );

    add_action('admin_init', 'tu_inmobiliaria_registrar_ajustes');
    add_action('admin_init', 'tu_inmobiliaria_registrar_ajustes_simi');
    add_action('admin_init', 'tu_inmobiliaria_buscador_ajustes');
    add_action('admin_init', 'tu_inmobiliaria_ficha_ajustes');
}
add_action('admin_menu', 'Tu_inmobiliaria_ajustes');

function tu_inmobiliaria_registrar_ajustes() {
     // Registro de Informacion de la plantilla
     register_setting('tu-inmobilairia-options','active_crm');
}

function tu_inmobiliaria_registrar_ajustes_simi() {
     // Registro de Informacion de la plantilla
     register_setting('tu-inmobilairia-simi-options','num_propiedades');
     register_setting('tu-inmobilairia-simi-options','num_propiedades_destacadas');
     register_setting('tu-inmobilairia-simi-options','url_propiedad');
     register_setting('tu-inmobilairia-simi-options','url_listado_inmuebles');
     register_setting('tu-inmobilairia-simi-options','url_propiedad_no_disponible');
     register_setting('tu-inmobilairia-simi-options','id_inmobiliaria');
     register_setting('tu-inmobilairia-simi-options','token_simi');
     register_setting('tu-inmobilairia-simi-options','url_web');
     register_setting('tu-inmobilairia-simi-options','simi_dlc');
     register_setting('tu-inmobilairia-simi-options','simi_sedes');
}
function tu_inmobiliaria_buscador_ajustes() {
     // Registro de Informacion de la plantilla
     register_setting('tu-inmobilairia-serch-options','search_code');
     register_setting('tu-inmobilairia-serch-options','search_tipo_inmueble');
     register_setting('tu-inmobilairia-serch-options','search_gestion');
     register_setting('tu-inmobilairia-serch-options','search_barrio');
     register_setting('tu-inmobilairia-serch-options','search_ciudad');
     register_setting('tu-inmobilairia-serch-options','search_zona');
     register_setting('tu-inmobilairia-serch-options','search_habitaciones');
     register_setting('tu-inmobilairia-serch-options','search_banios');
     register_setting('tu-inmobilairia-serch-options','search_garajes');
     register_setting('tu-inmobilairia-serch-options','search_valor');
     register_setting('tu-inmobilairia-serch-options','search_area');
     register_setting('tu-inmobilairia-serch-options','search_orden');
     register_setting('tu-inmobilairia-serch-options','search_name_boton');

     register_setting('tu-inmobilairia-serch-options','search_code_p');
     register_setting('tu-inmobilairia-serch-options','search_tipo_inmueble_p');
     register_setting('tu-inmobilairia-serch-options','search_gestion_p');
     register_setting('tu-inmobilairia-serch-options','search_barrio_p');
     register_setting('tu-inmobilairia-serch-options','search_ciudad_p');
     register_setting('tu-inmobilairia-serch-options','search_zona_p');
     register_setting('tu-inmobilairia-serch-options','search_habitaciones_p');
     register_setting('tu-inmobilairia-serch-options','search_banios_p');
     register_setting('tu-inmobilairia-serch-options','search_garajes_p');
     register_setting('tu-inmobilairia-serch-options','search_valor_p');
     register_setting('tu-inmobilairia-serch-options','search_area_p');
     register_setting('tu-inmobilairia-serch-options','search_name_boton_p');
}
function tu_inmobiliaria_ficha_ajustes() {
     // Registro de Informacion de la plantilla
     register_setting('tu-inmobilairia-ficha-options','ficha_gestion');
     register_setting('tu-inmobilairia-ficha-options','ficha_valor');
     register_setting('tu-inmobilairia-ficha-options','ficha_ciudad');
     register_setting('tu-inmobilairia-ficha-options','ficha_tipo_inmueble');
     register_setting('tu-inmobilairia-ficha-options','ficha_sede');
     register_setting('tu-inmobilairia-ficha-options','ficha_area_icon');
     register_setting('tu-inmobilairia-ficha-options','ficha_habitaciones_icon');
     register_setting('tu-inmobilairia-ficha-options','ficha_banios_icon');
     register_setting('tu-inmobilairia-ficha-options','ficha_garaje_icon');
     register_setting('tu-inmobilairia-ficha-options','ficha_color');
     register_setting('tu-inmobilairia-ficha-options','ficha_border_radius');
     register_setting('tu-inmobilairia-ficha-options','page_single');
}

require_once dirname(__DIR__) . '/tuinmobiliaria/pages/dashboard.php'; 
require_once dirname(__DIR__) . '/tuinmobiliaria/pages/buscadores.php';
require_once dirname(__DIR__) . '/tuinmobiliaria/pages/simi.php';
require_once dirname(__DIR__) . '/tuinmobiliaria/pages/fichas.php';
