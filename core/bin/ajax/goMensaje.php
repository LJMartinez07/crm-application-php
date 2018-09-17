<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

 $db = new Conexion();
$id=$_SESSION['app_id'];

$asunto = $db->real_escape_string($_POST['asunto']);
$Descripcion = $db->real_escape_string($_POST['descripcion']);
$contacto = $_POST['cliente'];



$sql = $db->query("SELECT Email, Nombre, Apellido FROM contacto_cliente WHERE Id_Contacto = '$contacto' LIMIT 1;");

if ($db->rows($sql)>0) {

	  $data = $db -> recorrer($sql);
        $email = $data[0];
        $nombreCom = $data[1].' '.$data[2];
       
	

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
      $mail->Subject = $asunto;
      $mail->Body    = $Descripcion;
      $mail->AltBody =  $email;

      if (!$mail->send()) {
        //si no mando el correo entonces imprime el error
      $html = '<div class="alert alert-warning" role="alert">'.$mail->ErrorInfo.'</div>';
      }
      else {
      
      /* $db -> query("INSERT INTO contrato(Nombre_Cont, Tipo, Cantidad, Fecha_close, Descripcion, CodigoConf, fk_Id_usuario, fk_id_Contacto, fk_id_campain) VALUES ('$nombre', '$tipo_contrato', '$Cantidad', '$fecha_C', '$Descripcion', '$codigo', '$id', '$contacto', '$campana')");*/
      $db -> query("INSERT INTO bandeja values(1, '$id')");

        
        echo 1;

      }



} else{

	echo "Lo siento tenemos problemas contacta a soporte";
}




?>