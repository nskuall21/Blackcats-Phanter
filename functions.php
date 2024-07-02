<?php
/**
 * Blackcats Seguridad
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Definiciones de constantes
if ( ! defined( '_S_VERSION' ) ) {
    define( '_S_VERSION', '1.0.0' );
}

define( 'BACKCATS_PRO_UPGRADE_URL', 'https://skuallstudio.com' );
define( 'BACKCATS_THEME_DIR', trailingslashit( get_template_directory() ) );
 require_once BACKCATS_THEME_DIR . '/core/blackcat/blackcats.php';



