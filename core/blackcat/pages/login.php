<?php

function blackcats_login_logo() { 
?>
 <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap');
 #login h1 a, .login h1 a {
    font-family: 'Poppins', sans-serif, 'Poppins-Regular';
 background-image: url('<?php echo get_template_directory_uri() . '/core/tuinmobiliaria/img/logo-tu-inmobiliaria-blancos-morado.png'; ?>;');
 margin-bottom: 0;
 background-size: 250px;
 width: 300px;
 margin-left: auto;
 margin-right: auto;
 }
 .login form {
	 border-radius: 20px;
 }
 .wp-login-lost-password{
    font-family: 'Poppins', sans-serif, 'Poppins-Regular';
    color: #fff!important;
 }
 .wp-core-ui .button-primary {
	 background: #000 !important;
	 width: 100%;
    border-radius: 14px!important;;
	 /*border-color: #f16558 !important;*/
	 box-shadow: 0 1px 0 #e0e0e0e0 !important;
	/* text-shadow: 0 -1px 1px #f16558, 1px 0 1px #f16558, 0 1px 1px #f16558, -1px 0 1px #f16558 !important;*/
 }
 body.login {background-color: #0d0918!important;} .login #backtoblog a, .login #nav a {color: #FFF !important}
 </style>
<?php }
add_action( 'login_enqueue_scripts', 'blackcats_login_logo' );


function blackcats_login_logo_url_title() {
    return 'Pon aquí el texto que quieras';
}
add_filter( 'login_headertitle', 'blackcats_login_logo_url_title' );


function blackcats_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'blackcats_login_logo_url' );


function blackcats_no_wordpress_errors(){
  return 'Ups! Algo has puesto mal...';
}
add_filter( 'login_errors', 'blackcats_no_wordpress_errors' );


function blackcats_eliminar_vibracion_login() {
	remove_action('login_head', 'wp_shake_js', 12);
}
add_action('login_head', 'blackcats_eliminar_vibracion_login');