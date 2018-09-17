<?php 
$db = new Conexion();

$nombre = $db->real_escape_string($_POST['nombre']);
$apellido = $db->real_escape_string($_POST['apellido']);
$cuenta = $db->real_escape_string($_POST['cuenta']);
$email = $db->real_escape_string($_POST['email']);
$telefono = $db->real_escape_string($_POST['telefono']);
$telefono2 = $db->real_escape_string($_POST['telefono2']);
$celular = $db->real_escape_string($_POST['celular']);
$fuente = $db->real_escape_string($_POST['fuente']);
$tipo = $db->real_escape_string($_POST['tipo']);
$fk_Id_usuario = $_SESSION['app_id'];

$nombreComp = $db->real_escape_string($nombre.' '.$apellido);
//se ejecuta la sentencia
$sql = $db->query("SELECT Email FROM contacto_cliente WHERE Email = '$email' AND Estado = 1 LIMIT 1;");
if ($db->rows($sql) == 0) {

	$com= $db -> query("INSERT INTO contacto_cliente (Nombre, Apellido, Cuenta, Email, Telefono, Telefono_ex, Celular, Fuente, Tipo,  fk_Id_usuario, NombreCompleto) VALUES ('$nombre', '$apellido', '$cuenta', '$email', '$telefono', '$telefono2', '$celular', '$fuente', '$tipo', '$fk_Id_usuario', '$nombreComp')");
  if ($com) {
   echo 1;
  }else{
    echo '<div class="alert alert-dismissible alert-warning">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h4 class="alert-heading">Error!</h4>
          <p class="mb-0">Si el error persiste por favor llamar a soporte</p>
        </div>';
  }

	 

}else {

  $emails = $db->recorrer($sql)[0];
    if (strtolower($email) == strtolower($emails)) {
      	echo '<div class="alert alert-dismissible alert-warning">
  				<button type="button" class="close" data-dismiss="alert">&times;</button>
  				<h4 class="alert-heading">Error!</h4>
  				<p class="mb-0">Ese email ya es existente en sus contactos.</p>
				</div>';
    
  }

}


?>