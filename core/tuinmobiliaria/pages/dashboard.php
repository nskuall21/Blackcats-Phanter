<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
function Tuinmobiliaria_Dashboard(){ ?>

<div class="wrap">
    <h1>Tu Inmobiliaria</h1>
    <p>Inicia a configurar tu inmobiliaria en Linea </p>
    <form action="options.php" method="post">
        <?php settings_fields('tu-inmobilairia-options'); ?>
        <?php do_settings_sections('tu-inmobilairia-options'); ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Conectar CRM </th>
                <td>
                    <select name="active_crm">
                        <option value="<?php echo esc_attr( get_option('active_crm')); ?>">
                            <?php echo esc_attr( get_option('active_crm')); ?>
                        </option>
                        <option value="Local">Local</option>
                        <option value="Simi">Simi</option>
                        <option value="Simi">Domus</option>
                        <option value="Simi">Wasi</option>
                    </select>
                </td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
</div>
<?php }

    