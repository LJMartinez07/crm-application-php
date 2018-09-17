<?php 

//se importan lo qeu vamos a utilizar para mandar correo
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$db = new Conexion();
$id=$_SESSION['app_id'];

$nombre = $db->real_escape_string($_POST['nombre']);
$tipo_contrato = $db->real_escape_string($_POST['tipo_contrato']);
$Cantidad = $db->real_escape_string($_POST['cantidad_D']);
$fecha_C = $db->real_escape_string($_POST['fechaC']);
$Descripcion = $db->real_escape_string($_POST['Descripcion']);
$contacto = $_POST['contacto'];
$campana = $_POST['campana'];


$sql = $db->query("SELECT Email, Nombre, Apellido FROM contacto_cliente WHERE Id_Contacto = '$contacto' LIMIT 1;");

if ($db->rows($sql)>0) {

	  $data = $db -> recorrer($sql);
        $email = $data[0];
        $nombreCom = $data[1].' '.$data[2];
        $codigo = strtoupper(substr(sha1(time()),0,8));
	$link = APP_URL. '?view=aceptar&codigo='.$codigo;
  $link2 = APP_URL. '?view=aceptar&no=1&codigo='.$codigo;
	

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
      $mail->Subject = 'Propuesta de contratacion CRM';
      $mail->Body    = ContratoTemple($nombreCom,$link,$link2,$nombre, $Descripcion );
      $mail->AltBody = 'Hola, '.$nombre.' para activar tu cuenta ingresda a este link :)' .$link;

      if (!$mail->send()) {
        //si no mando el correo entonces imprime el error
      $html = '<div class="alert alert-warning" role="alert">'.$mail->ErrorInfo.'</div>';
      }
      else {
      
       $db -> query("INSERT INTO contrato(Nombre_Cont, Tipo, Cantidad, Fecha_close, Descripcion, CodigoConf, fk_Id_usuario, fk_id_Contacto, fk_id_campain) VALUES ('$nombre', '$tipo_contrato', '$Cantidad', '$fecha_C', '$Descripcion', '$codigo', '$id', '$contacto', '$campana')");
        
        echo 1;

      }



} else{

	echo "Lo siento tenemos problemas contacta a soporte";
}











?>