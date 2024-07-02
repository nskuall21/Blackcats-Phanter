<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
function Dashboardbk(){ ?>

<div class="wrap">
    <h1>Configuracion Web</h1>
    <p>Configura el tipo de Web</p>
    <form action="options.php" method="post">
        <?php settings_fields('blackcats-options'); ?>
        <?php do_settings_sections('blackcats-options'); ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Tipo de Web</th>
                <td>
                    <select name="type_web">
                        <option value="<?php echo esc_attr( get_option('type_web')); ?>">
                            <?php echo esc_attr( get_option('type_web')); ?>
                        </option>
                        <option value="Tienda">Tienda</option>
                        <option value="Inmobiliaria">Inmobiliaria</option>
                        <option value="Blog">Blog</option>
                    </select>
                </td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
</div>
<?php }