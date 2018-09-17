<?php

$db = new conexion();

$nombre = $db->real_escape_string($_POST['nombre']);
$no_cuenta = $db->real_escape_string($_POST['no_cuenta']);
$tipo_cuenta = $db->real_escape_string($_POST['tipo_cuenta']);
$ingreso = $db->real_escape_string($_POST['ingreso']);
$telefono = $db->real_escape_string($_POST['telefono']);
$fax = $db->real_escape_string($_POST['fax']);
$sitio_web = $db->real_escape_string($_POST['sitio_web']);
$direccion = $db->real_escape_string($_POST['direccion']);
$codigo_postal = $db->real_escape_string($_POST['codigo_postal']);
$descripcion = $db->real_escape_string($_POST['descripcion']);
$contacto = $db->real_escape_string($_POST['contacto']);
$id_usuario = $_SESSION['app_id'];
$sql = $db -> query("SELECT Website, Numero_cuenta FROM cuenta_cliente WHERE Website = '$sitio_web' OR Numero_cuenta = '$no_cuenta' LIMIT 1");
if ($db->rows($sql)==0) {

    $db -> query("INSERT INTO cuenta_cliente (Nombre, Numero_cuenta, Tipo_cuenta, Ingreso_anual, Telefono, Fax, Website, Direccion, Codigo_postal, Descripcion, fk_Id_usuario, Id_contacto) VALUES ('$nombre','$no_cuenta', '$tipo_cuenta', '$ingreso', '$telefono', '$fax', '$sitio_web', '$direccion', '$codigo_postal', '$descripcion', '$id_usuario', '$contacto');");

  echo 1;

}else {
  echo '<div class="alert alert-dismissible alert-warning">
  		<button type="button" class="close" data-dismiss="alert">&times;</button>
  		<h4 class="alert-heading">Alerta!!</h4>
  		<p class="mb-0">Ya existe una cuenta con el mismo Website</p>
		</div>';

}
$db->liberar($sql);
$db->close();

 ?>
