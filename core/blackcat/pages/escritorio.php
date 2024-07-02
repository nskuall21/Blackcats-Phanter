<?php
// Redirigir al nuevo dashboard personalizado
function custom_redirect_dashboard() {
    global $pagenow;
    if ($pagenow == 'index.php' && is_admin()) {
        wp_redirect(admin_url('admin.php?page=custom-dashboard'));
        exit();
    }
}
add_action('admin_init', 'custom_redirect_dashboard');

// Crear un menú de página personalizada en el dashboard
function custom_add_dashboard_menu_item() {
    add_menu_page(
        'Custom Dashboard', // Título de la página
        'Dashboard', // Título del menú
        'manage_options', // Capacidad
        'custom-dashboard', // Slug del menú
        'custom_dashboard_page_content', // Función que muestra el contenido
        'dashicons-admin-home', // Icono del menú
        2 // Posición en el menú
    );
}
add_action('admin_menu', 'custom_add_dashboard_menu_item');

// Función para mostrar el contenido del dashboard personalizado
function custom_dashboard_page_content() {
    // Incluir el template part del dashboard personalizado
    get_template_part('template-parts/custom-dashboard');
}

// Ocultar el menú de dashboard predeterminado
function custom_remove_default_dashboard_menu() {
    remove_menu_page('index.php'); // Elimina el menú de dashboard predeterminado
}
add_action('admin_menu', 'custom_remove_default_dashboard_menu');
?>
