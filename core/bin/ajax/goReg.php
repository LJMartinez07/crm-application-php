<?php
//se importan lo qeu vamos a utilizar para mandar correo
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//echo "Algo, esta funcionando";
//conexion base de datos
$db = new conexion();

$nombre = $db->real_escape_string($_POST['nombre']);
$apellido = $db->real_escape_string($_POST['apellido']);
$email = $db->real_escape_string($_POST['email']);
//$pais = $db->real_escape_string($_POST['pais']);
//$c_empleado = $db->real_escape_string($_POST['Cempleado']);
//$domini = $db->real_escape_string($_POST['dominio']);
//$cargo = $db->real_escape_string($_POST['cargo']);
$telefono = $db->real_escape_string($_POST['telefono']);
//$num_celular = $db->real_escape_string($_POST['numcelular']);
$pass= Encrypt($_POST['pass']);

//se ejecuta la sentencia
$sql = $db->query("SELECT Email FROM usuarios WHERE Email = '$email' LIMIT 1;");

if ($db->rows($sql) == 0) {
  // si la sentencia dio resultado
  //aqui procedemos hacer una codigo para agregarlo en el link
  $keyreg = md5(time());
  //link va hacer la url que mandaremos al correo
  $link = APP_URL .'?view=activar&key='.$keyreg;

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
      $mail->Subject = 'Activacion de cuenta';
      $mail->Body    = EmailTemplate($nombre,$link);
      $mail->AltBody = 'Hola, '.$nombre.' para activar tu cuenta ingresda a este link :)' .$link;

      if (!$mail->send()) {
        //si no mando el correo entonces imprime el error
      $html = '<div class="alert alert-warning" role="alert">'.$mail->ErrorInfo.'</div>';
      }
      else {
        //si lo mando entonces este ingresara la informacon a la tabla y luego tomara el id para manter la session abierta
        /*$db -> query("INSERT INTO usuarios (Nombre,Apellido,Email,Pais, Cant_empleados,dominio,Cargo,Telefono,Celular,Password,keyreg) VALUES ('$nombre','$apellido','$email','$pais', '$c_empleado', '$domini', '$cargo', '$telefono', '$num_celular', '$pass','$keyreg');");*/
        $db -> query("INSERT INTO usuarios (Nombre, Apellido, Email, Telefono, Password, keyreg) VALUES ('$nombre', '$apellido','$email', '$telefono', '$pass', '$keyreg');");
        $sql_2 = $db -> query("SELECT  MAX(Id_Usuario) AS Id_Usuario FROM usuarios;");
        $_SESSION['app_id'] = $db -> recorrer($sql_2)[0];

       
        
        //el 1 se devolvera para cuando llegue al reg.js este pueda imprimir
        $html= 1;

        $db -> query("INSERT INTO usuariopost (Nombre, Apellido, fk_Id_usuario) VALUES ('$nombre', '$apellido', '".$_SESSION['app_id']."')");
        $db -> liberar($sql_2);

      }
}else {

  $emails = $db -> recorrer($sql)[0];
    if (strtolower($email) == strtolower($emails)) {
      $html = '<div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 class="alert-heading">Error!</h4>
  <p class="mb-0">El email ingresado ya existe.</p>
</div>';
    // code...
  }
}

$db->liberar($sql);
$db->close();

echo $html;



?>
