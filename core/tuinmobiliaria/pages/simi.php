<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
function simicrm(){    ?>

<div class="wrap">
    <h1>Tu Inmobiliaria</h1>
    <p>Inicia a configurar tu inmobiliaria en Linea </p>
    <form action="options.php" method="post">
        <?php settings_fields('tu-inmobilairia-simi-options'); ?>
        <?php do_settings_sections('tu-inmobilairia-simi-options'); ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Id Inmobiliaria</th>
                <td>
                    <input type="nunber" name="id_inmobiliaria"
                        value="<?php echo esc_attr( get_option('id_inmobiliaria')); ?>">
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Token</th>
                <td>
                    <input style="width: 350px;" type="text" name="token_simi"
                        value="<?php echo esc_attr( get_option('token_simi')); ?>">
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Dominio</th>
                <td>
                    <input type="text" name="url_web" value="<?php echo esc_attr( get_option('url_web')); ?>">
                </td>
            </tr>
        </table>
        <table>
            <h1>Configuración de Inmuebles</h1>
            <tr valign="top">
                <th scope="row">Fichas DLC</th>
                <td>
                    <select name="simi_dlc">
                        <option value="<?php echo esc_attr( get_option('simi_dlc')); ?>">
                            <?php echo esc_attr( get_option('simi_dlc')); ?>
                        </option>
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Numero de Inmuebles Destacados</th>
                <td>

                    <input type="number" name="num_propiedades_destacadas"
                        value="<?php echo esc_attr( get_option('num_propiedades_destacadas')); ?>">
                    <div>Shortcode [simi-destacados]</div>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Numero de Inmuebles por Pagina</th>

                <td>
                    <input type="number" name="num_propiedades"
                        value="<?php echo esc_attr( get_option('num_propiedades')); ?>">
                    <div>Shortcode [simi-Propiedades]</div>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Habilitar Sedes</th>
                <td>
                    <select name="simi_sedes">
                        <option value="<?php echo esc_attr( get_option('simi_sedes')); ?>">
                            <?php echo esc_attr( get_option('simi_sedes')); ?>
                        </option>
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                </td>
            </tr>
        </table>
        <table>
            <h1>Configuración de Paginas</h1>
            <tr valign="top">
                <th scope="row">Pagina listado Inmuebles</th>
                <td>
                    <input type="text" name="url_listado_inmuebles"
                        value="<?php echo esc_attr( get_option('url_listado_inmuebles')); ?>">
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Pagina Información de la propiedad</th>
                <td>
                    <input type="text" name="url_propiedad"
                        value="<?php echo esc_attr( get_option('url_propiedad')); ?>">
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Pagina propiedad no disponible</th>
                <td>
                    <input type="text" name="url_propiedad_no_disponible"
                        value="<?php echo esc_attr( get_option('url_propiedad_no_disponible')); ?>">
                </td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
</div>
<?php }

    