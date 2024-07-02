<?php

function blackcats_ajustes(){
    add_menu_page(
        'Blackcats',//Titulo pagina
        'Blackcats',//Titulo menu
        'administrator',// capability
        'Blackcats',//slug
        'Dashboardbk',//contenido
        //'dashicons-building',
        get_template_directory_uri() . '/core/inc/img/blackcat-menu.png',//icono
        '3'
    );
    add_action('admin_init', 'blackcats_registrar_ajustes');
}

add_action('admin_menu', 'blackcats_ajustes');

function blackcats_registrar_ajustes() {
    // Registro de Informacion de la plantilla
    register_setting('blackcats-options','type_web');
}
require_once dirname(__FILE__) . '/pages/dashboard-bk.php';