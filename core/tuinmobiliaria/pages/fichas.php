<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
function configfichas(){ ?>

<div class="wrap">
    <h1>Ficha</h1>
    <p>Configuracion ficha </p>
    <form action="options.php" method="post">
        <?php settings_fields('tu-inmobilairia-ficha-options'); ?>
        <?php do_settings_sections('tu-inmobilairia-ficha-options'); ?>
        <table class="form-table">
            <h1>Tu Inmobiliaria</h1>
            <tr valign="top">
                <th scope="row">Paginas Independientes</th>
                <td>
                    <select name="page_single">
                        <option value="<?php echo esc_attr( get_option('page_single')); ?>">
                            <?php echo esc_attr( get_option('page_single')); ?>
                        </option>
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                </td>
            </tr>
        </table>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Habitaciones</th>
                <td>
                    <input type="color" id="ficha_color" name="ficha_color"
                        value="<?php echo esc_attr(get_option('ficha_color')); ?>">
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Garaje</th>
                <td>
                    <input type="text" name="ficha_garaje_icon"
                        value="<?php echo esc_attr( get_option('ficha_garaje_icon')); ?>">
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Baños</th>
                <td>
                    <input type="text" name="ficha_banios_icon"
                        value="<?php echo esc_attr( get_option('ficha_banios_icon')); ?>">
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Area</th>
                <td>
                    <input type="text" name="ficha_area_icon"
                        value="<?php echo esc_attr( get_option('ficha_area_icon')); ?>">
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Habitaciones</th>
                <td>
                    <input type="text" name="ficha_habitaciones_icon"
                        value="<?php echo esc_attr( get_option('ficha_habitaciones_icon')); ?>">
                </td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
</div>
<?php }

    