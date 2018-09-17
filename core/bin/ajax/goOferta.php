<?php 

//se importan lo qeu vamos a utilizar para mandar correo
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$db = new conexion(); 

$nombre =  $db->real_escape_string($_POST['nombre']);
$precio =  $db->real_escape_string($_POST['precio']);
$cantidad =  $db->real_escape_string($_POST['cantidad']);
$descuento =  $db->real_escape_string($_POST['descuento']);
$descripcionven =  $db->real_escape_string($_POST['descripcionven']);
$bonus =  $db->real_escape_string($_POST['bonus']);
$fechafin =  $db->real_escape_string($_POST['fechafin']);
$descripciongara =  $db->real_escape_string($_POST['descripciongara']);
$contacto =  $db->real_escape_string($_POST['contacto']);
$id_usuario = $_SESSION['app_id'];

$sql = $db -> query("SELECT Email, Nombre, Apellido FROM contacto_cliente WHERE Id_Contacto = '$contacto' LIMIT 1");

if ($db ->rows($sql)) {
	 $codigo = strtoupper(substr(sha1(time()),0,8));
	 $link = APP_URL. '?view=aceptarofert&codigo='.$codigo;
  $link2 = APP_URL. '?view=aceptarofert&no=1&codigo='.$codigo;

	$datos = $db ->recorrer($sql);

	$email = $datos[0];

	$nombreCom = $datos[1].' '.$datos[2];


	  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
      //Server settings
      $mail->CharSet = "UTF-8";
      $mail->Encoding = "quoted-printable";
      $mail->SMTPDebug = 0;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = PHPMAILER_HOST;                         // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = PHPMAILER_USER;                     // SMTP username
      $mail->Password = PHPMAILER_PASS;                     // SMTP password
      $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = PHPMAILER_PORT;                         // TCP port to connect to

      //Recipients
      $mail->setFrom(PHPMAILER_USER, APP_TITLE); //quien manda ?

      $mail->addAddress($email, $nombreCom);     // aquien le llega?

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Oferta CRM';
      $mail->Body    = OfertaTemple($nombreCom,$link,$link2,$nombre, $descripcionven, $bonus, $descripciongara, $fechafin, $precio, $descuento, $cantidad);
      $mail->AltBody = 'Nada por ahora';

      if (!$mail->send()) {
        //si no mando el correo entonces imprime el error
      $html = '<div class="alert alert-warning" role="alert">'.$mail->ErrorInfo.'</div>';
      }
      else {

      	$db -> query("INSERT INTO ofertas (NombrePro, Precio, Cantidad, Descuento, DescripcionVenta, Bonus, DescripcionGarantia, FechaFin, fk_Id_Contacto, CodigoConf, fk_Id_usuario) VALUES ('$nombre', '$precio', '$cantidad', '$descuento', '$descripcionven', '$bonus', '$descripciongara', '$fechafin', '$contacto', '$codigo', '$id_usuario')");

echo 1;

      }




	# code...
}else{
	echo "Tenemos Problemas En encontrar el email";
}










 ?>