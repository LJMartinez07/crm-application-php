<?php
/*Nucleo de la aplicacion*/
session_start();
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'CRM');


define('HTML_DIR', 'html/');
define('APP_TITLE', 'CRM |');
define('APP_COPY', 'Copyright (c) 2018 ADGSystem.');
define('APP_URL', 'http://localhost/CRM/');

#Contastes PHPMailer
define('PHPMAILER_HOST', 'smtp.gmail.com');
define('PHPMAILER_USER', '');
define('PHPMAILER_PASS', '');
define('PHPMAILER_PORT', 465);




require('vendor/autoload.php');
require('core/models/class.Conexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/user.php');
require('core/bin/functions/emp.php');
//require('core/bin/functions/contactodatos.php');
require('core/bin/functions/EmailTemplate.php');
require('core/bin/functions/ContratoTemplate.php');
require('core/bin/functions/ofertaTemplate.php');
require('core/bin/functions/Lostpasstemplate.php');
require('core/bin/functions/CambiopassTemplate.php');
require('core/bin/functions/AgreempleadoTemplate.php');

$users=Users();
$emp=Emp();
//$contacto=ContactoD();



 ?>
