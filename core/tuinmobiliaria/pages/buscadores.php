<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
function configbuscadores(){    ?>

<div class="wrap">
    <form action="options.php" method="post">
        <?php settings_fields('tu-inmobilairia-serch-options'); ?>
        <?php do_settings_sections('tu-inmobilairia-serch-options'); ?>
        <h1>Configurar Buscadores</h1>
        <div style="display:flex">
            <div style="width: 50%;">
                <h2>Buscador Portada</h2>
                [buscador-portada]
                <table>
                    <tr valign="top">
                        <th scope="row">Codigo </th>
                        <td>
                            <select name="search_code">
                                <option value="<?php echo esc_attr( get_option('search_code')); ?>">
                                    <?php echo esc_attr( get_option('search_code')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Tipo Inmueble </th>
                        <td>
                            <select name="search_tipo_inmueble">
                                <option value="<?php echo esc_attr( get_option('search_tipo_inmueble')); ?>">
                                    <?php echo esc_attr( get_option('search_tipo_inmueble')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Gestion </th>
                        <td>
                            <select name="search_gestion">
                                <option value="<?php echo esc_attr( get_option('search_gestion')); ?>">
                                    <?php echo esc_attr( get_option('search_gestion')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Area </th>
                        <td>
                            <select name="search_area">
                                <option value="<?php echo esc_attr( get_option('search_area')); ?>">
                                    <?php echo esc_attr( get_option('search_area')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Ciudad </th>
                        <td>
                            <select name="search_ciudad">
                                <option value="<?php echo esc_attr( get_option('search_ciudad')); ?>">
                                    <?php echo esc_attr( get_option('search_ciudad')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Barrio </th>
                        <td>
                            <select name="search_barrio">
                                <option value="<?php echo esc_attr( get_option('search_barrio')); ?>">
                                    <?php echo esc_attr( get_option('search_barrio')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Zona </th>
                        <td>
                            <select name="search_zona">
                                <option value="<?php echo esc_attr( get_option('search_zona')); ?>">
                                    <?php echo esc_attr( get_option('search_zona')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Habitaciones </th>
                        <td>
                            <select name="search_habitaciones">
                                <option value="<?php echo esc_attr( get_option('search_habitaciones')); ?>">
                                    <?php echo esc_attr( get_option('search_habitaciones')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Baños </th>
                        <td>
                            <select name="search_banios">
                                <option value="<?php echo esc_attr( get_option('search_banios')); ?>">
                                    <?php echo esc_attr( get_option('search_banios')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Garajes </th>
                        <td>
                            <select name="search_garajes">
                                <option value="<?php echo esc_attr( get_option('search_garajes')); ?>">
                                    <?php echo esc_attr( get_option('search_garajes')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Valor</th>
                        <td>
                            <select name="search_valor">
                                <option value="<?php echo esc_attr( get_option('search_valor')); ?>">
                                    <?php echo esc_attr( get_option('search_valor')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Boton Name</th>
                        <td>
                            <input type="text" name="search_name_boton"
                                value="<?php echo esc_attr( get_option('search_name_boton')); ?>">
                        </td>
                    </tr>
                </table>
            </div>
            <div style="width: 50%;">
                <h2>Buscador Page</h2>
                [buscador-page]
                <table>
                    <tr valign="top">
                        <th scope="row">Codigo </th>
                        <td>
                            <select name="search_code_p">
                                <option value="<?php echo esc_attr( get_option('search_code_p')); ?>">
                                    <?php echo esc_attr( get_option('search_code_p')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Tipo Inmueble </th>
                        <td>
                            <select name="search_tipo_inmueble_p">
                                <option value="<?php echo esc_attr( get_option('search_tipo_inmueble_p')); ?>">
                                    <?php echo esc_attr( get_option('search_tipo_inmueble_p')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Gestion </th>
                        <td>
                            <select name="search_gestion_p">
                                <option value="<?php echo esc_attr( get_option('search_gestion_p')); ?>">
                                    <?php echo esc_attr( get_option('search_gestion_p')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Area </th>
                        <td>
                            <select name="search_area_p">
                                <option value="<?php echo esc_attr( get_option('search_area_p')); ?>">
                                    <?php echo esc_attr( get_option('search_area_p')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Ciudad </th>
                        <td>
                            <select name="search_ciudad_p">
                                <option value="<?php echo esc_attr( get_option('search_ciudad_p')); ?>">
                                    <?php echo esc_attr( get_option('search_ciudad_p')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Barrio </th>
                        <td>
                            <select name="search_barrio_p">
                                <option value="<?php echo esc_attr( get_option('searh-barrio-p')); ?>">
                                    <?php echo esc_attr( get_option('searh-barrio-p')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Zona </th>
                        <td>
                            <select name="search_zona_p">
                                <option value="<?php echo esc_attr( get_option('search_zona_p')); ?>">
                                    <?php echo esc_attr( get_option('search_zona_p')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Habitaciones </th>
                        <td>
                            <select name="search_habitaciones_p">
                                <option value="<?php echo esc_attr( get_option('search_habitaciones_p')); ?>">
                                    <?php echo esc_attr( get_option('search_habitaciones_p')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Baños </th>
                        <td>
                            <select name="search_banios_p">
                                <option value="<?php echo esc_attr( get_option('search_banios_p')); ?>">
                                    <?php echo esc_attr( get_option('search_banios_p')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Garajes </th>
                        <td>
                            <select name="search_garajes_p">
                                <option value="<?php echo esc_attr( get_option('search_garajes_p')); ?>">
                                    <?php echo esc_attr( get_option('search_garajes_p')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Valor</th>
                        <td>
                            <select name="search_valor_p">
                                <option value="<?php echo esc_attr( get_option('search_valor_p')); ?>">
                                    <?php echo esc_attr( get_option('search_valor_p')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Orden</th>
                        <td>
                            <select name="search_orden">
                                <option value="<?php echo esc_attr( get_option('search_orden')); ?>">
                                    <?php echo esc_attr( get_option('search_orden')); ?>
                                </option>
                                <option value="off">off</option>
                                <option value="on">on</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Boton Name</th>
                        <td>
                            <input type="text" name="search_name_boton_p"
                                value="<?php echo esc_attr( get_option('search_name_boton_p')); ?>">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <?php submit_button(); ?>
    </form>

</div>
<?php }