<?php
/**
 * Blackcats Seguridad
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

add_theme_support('title-tag');
add_theme_support('post-thumbnails');


/*
// Añadir soporte para subidas de archivos webp
function enable_webp_uploads($mime_types) {
    $mime_types['webp'] = 'image/webp';
    return $mime_types;
}
add_filter('upload_mimes', 'enable_webp_uploads');
// Permitir la previsualización de imágenes webp en la biblioteca de medios
function display_webp_in_media_library($result, $path) {
    $info = @getimagesize($path);
    if ($info && $info['mime'] === 'image/webp') {
        if (is_bool($result) && $result === false) {
            $result = array('ext' => 'webp', 'type' => 'image/webp');
        } elseif (is_array($result)) {
            $result['ext'] = 'webp';
            $result['type'] = 'image/webp';
        }
    }
    return $result;
}
add_filter('file_is_displayable_image', 'display_webp_in_media_library', 10, 2);
*/