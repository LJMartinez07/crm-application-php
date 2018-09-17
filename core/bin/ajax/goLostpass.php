<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$db = new Conexion();
$email = $db ->real_escape_string($_POST['email']);
$sql = $db->query("SELECT * FROM usuarios WHERE Email = '$email'");

if($db->rows($sql)>0){
   $data = $db -> recorrer($sql);
   $id = $data[0];
   $nombre = $data[1];
   
   $codigo = strtoupper(substr(sha1(time()),0,8));
   $link =  APP_URL .'?view=restpass&codigo='. $codigo;

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

       $mail->addAddress($email, $nombre);     // aquien le llega?

       //Content
       $mail->isHTML(true);                                  // Set email format to HTML
       $mail->Subject = 'Recuperar contraseña perdida';
       $mail->Body    = Lostpasstemplate($nombre,$link, $codigo);
       $mail->AltBody = 'Hola, '.$nombre.' para recuperar tu contraseña debes ir a este enlace :)' .$link . 'si no lo ha solicitado obvie este mensaje';

       if (!$mail->send()) {
         // code...
       $html = '<div class="alert alert-warning" role="alert">'.$mail->ErrorInfo.'</div>';
     }else{
       $db -> query("UPDATE usuarios SET  Codigo = '$codigo' WHERE Id_usuario = '$id';");
       $html=1;
     }

   //LostpassTemplate($nombre,$link);

}else{
  $html = '<div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 class="alert-heading">Error!</h4>
  <p class="mb-0">El correo solicitado no se encuentra favor y ingrese uno valido :]</p>
</div>';
    

}




$db ->liberar($sql);
$db->close();

echo $html;



 ?>

