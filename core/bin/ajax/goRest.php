<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

	$db = new conexion();
	$pass = Encrypt($db->real_escape_string($_POST['pass1']));
	$codigo = $db->real_escape_string($_POST['codigo']);
	$sql = $db->query("SELECT * FROM usuarios WHERE Codigo = '$codigo' LIMIT 1");
	if ($db->rows($sql) > 0) {
         $data = $db -> recorrer($sql);
        $nombre = $data[1];
   $email = $data[3];
       
      


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
        $mail->Subject = 'Cambio de contraseña';
        $mail->Body    = CambiopassTemplate($nombre);
        $mail->AltBody = 'probando';
        if (!$mail->send()) {
        	$html = '<div class="alert alert-warning" role="alert">'.$mail->ErrorInfo.'</div>';
        }else {
        	$db -> query("UPDATE usuarios SET Password = '$pass',  Codigo = '' WHERE Codigo = '$codigo';");
            $sql_2 = $db -> query("SELECT Id_usuario FROM usuarios WHERE Codigo = '$codigo'");
        	$db -> liberar($sql_2);

        	echo 1;
        }

        
       
        $db->liberar($sql);
        $db->close();

        
	}else{
        echo '<div class="alert alert-dismissible alert-warning">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4 class="alert-heading">Error!</h4>
        <p class="mb-0">Intentelo mas tarde..</p>
        </div>';

    }



 ?>