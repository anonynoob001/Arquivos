<?php

set_time_limit(90);

ob_start();

error_reporting(0);

// error_reporting(E_ALL);

// Time

date_default_timezone_set('America/Sao_Paulo');

// Url

$httprotocol = "https://";

if( !$_SERVER['HTTPS'] ) {
	$fixprotocol = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	header("Location: ".$fixprotocol);
}

$suport_url = $httprotocol."conheca.pluginthemebr.com/#contato";
$system_url = $httprotocol."pluginthemebr.com/administracao";
$panel_url = $httprotocol."pluginthemebr.com/painel";
$admin_url = $httprotocol."pluginthemebr.com/administracao";
$just_url = $httprotocol."pluginthemebr.com";
$app_url = $httprotocol."pluginthemebr.com/app";
$simple_url = "pluginthemebr.com";
$afiliado_url = $httprotocol."pluginthemebr.com/afiliado";

// Comissão Afiliados
$comissao_afiliados = "10";

// Title

$seo_title = "Rei do Script";
$seo_description = "Compre sem sair de casa!";
//$titulo_topo = "Velox Imports<strong>.</strong>"; //TITULO DA LOGO PARA USAR TITULO INVES DE IMAGEM TIRAR OS // DO COMEÇO E COLOCAR NO DE BAIXO 
$titulo_topo = '<img src="/_core/_cdn/img/logo.png">'; //US4R LOGO INVES DE TITUL5
$titulo_rodape ="Rei do Script";
$sub_titulo_rodape ="O CATÁLOGO VIRTUAL DESCOMPLICADO!"; //Endereço ou Slogan
$titulo_rodape_marketplace ="Rei do Script, Compre sem sair de casa!"; //Endereço ou Slogan


// Redes/Whatsapp/Email
$whatsapp = "11982889012";
$usrtelefone = "11982889012";
$email ="#";
$youtube ="#";
$instagram="#";
$facebook ="#";

// Db

$db_host = "localhost";
$db_user = "usuario_banco";
$db_pass = "senha_banco";
$db_name = "nome_banco";

// SMTP

$smtp_name = "Rei do Script";
$smtp_user = "naoresponda@pluginthemebr.com";
$smtp_pass = "senha_email";

// Manunten

$manutencao = false;

if( $manutencao ) {

	include("manutencao.php");
	die;

}

// Includes

include("functions.php");

// Tokens


// Recaptcha
// Gerar em: https://www.google.com/recaptcha/admin/
$recaptcha_sitekey = "6LdNuxEjAAAAAETj9Eqti5pFKWgYAvSF-AnvqYcO";
$recaptcha_secretkey = "6LdNuxEjAAAAAMQ5t9WJKyYHKeYxzsb66F1qDdqb";

//External token Utilizado para receber os callbacks do mercado pago pro sistema, pode manter padr
$external_token = "LfBMLcUA4BR3A1AAAALxKYfylrPMhMMg35IskTG4R7jYw181120";

// Mercado pago
// Gerar em: https://www.mercadopago.com.br/developers/panel/credentials
$mp_sandbox = false;

if ($mp_sandbox == true) {
	$mp_public_key = "TEST-10b09b8e-8e44-481a-a247-3ffe489c66ad";
	$mp_acess_token = "TEST-4638355852297439-101719-f19d4627d7455ac9c71dd027fd820449-50209960";
} else {
	$mp_public_key = "APP_USR-6c78c892-13f8-4b9b-aaa9-84a371493c25";
	$mp_acess_token = "APP_USR-4638355852297439-101719-313e384a8d0904a05a4e2699dffbb497-50209960";
	$mp_client_id = "4638355852297439";
	$mp_client_secret = "DHNmeQ5a7pLhDJrJNXvAEQFaOwrW80WE";
}

// Plano padr (id)

$plano_default = "5";

// Root path

$rootpath = $_SERVER["DOCUMENT_ROOT"];

// Images

$image_max_width = 1000;
$image_max_height = 1000;
$gallery_max_files  = 10;

// Global header and footer

$system_header = "";
$system_footer = "";

// Keep Alive

if( $_SESSION['user']['logged'] == "1" && strlen( $_SESSION['user']['keepalive'] ) >= 10 && $_SESSION['user']['keepalive'] != $_COOKIE['keepalive'] ) {
	setcookie( 'keepalive', "kill", time() - 3600 );
	if( strlen( $_SESSION['user']['keepalive'] ) >= 10 ) {
		setcookie( 'keepalive', $_SESSION['user']['keepalive'], (time() + (120 * 24 * 3600)) );
	}
}

$keepalive = $_COOKIE['keepalive'];

if( $_SESSION['user']['logged'] != "1" && strlen( $keepalive ) >= 10 ) {

	make_login($keepalive,"","keepalive","2");

}

?>