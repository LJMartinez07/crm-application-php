<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$db = new Conexion();
$nombre=$db->real_escape_string($_POST['nombre']);                      
$apellido=$db->real_escape_string($_POST['apellido']);
$email=$db->real_escape_string($_POST['email']);
$cedula=$db->real_escape_string($_POST['cedula']);
$cargo=$db->real_escape_string($_POST['cargo']);
$id= $_SESSION['app_id'];
//se ejecuta la sentencia
$sql = $db->query("SELECT Email FROM empleados WHERE Email = '$email' LIMIT 1;");

if ($db->rows($sql) == 0) {
	$pass = strtoupper(substr(sha1(time()),0,8));
    $pass2 = Encrypt($pass);
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
    $mail->Subject = 'Inicio de Sesion ADG CRM';
    $mail->Body    = AgEmpleado($nombre,$pass) ;
    $mail->AltBody = 'Hola, '.$nombre.'Usted a sido agreagado en ADG CRM';

    if (!$mail->send()) {
         // code...
       $html = '<div class="alert alert-warning" role="alert">'.$mail->ErrorInfo.'</div>';
    }else{
       $db -> query("INSERT INTO empleados (Nombre, Apellido, Email, Cedula, Password, Cargo, fk_Id_usuario) VALUES ('$nombre', '$apellido', '$email', '$cedula', '$pass2', '$cargo', '$id')");
       echo 1;
        $sql_2 = $db -> query("SELECT  MAX(Id_empleados) AS Id_empleados FROM empleados;");

        $id2 = $db -> recorrer($sql_2)[0];
        $db -> liberar($sql_2);
       $db ->query("INSERT INTO usuariopost (Nombre,  Apellido, fk_Id_empleados ) VALUES ('$nombre', '$apellido', '$id2')");
    }
}


?>