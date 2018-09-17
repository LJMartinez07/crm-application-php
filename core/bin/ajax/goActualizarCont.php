<?php 

$db = new Conexion();
$id = $db->real_escape_string($_POST['id']);
$nombre = $db->real_escape_string($_POST['nombre']);
$apellido = $db->real_escape_string($_POST['apellido']);
$cuenta = $db->real_escape_string($_POST['cuenta']);
$email = $db->real_escape_string($_POST['email']);
$telefono = $db->real_escape_string($_POST['telefono']);
$telefono2 = $db->real_escape_string($_POST['telefono2']);
$celular = $db->real_escape_string($_POST['celular']);
$fuente = $db->real_escape_string($_POST['fuente']);
$tipo = $db->real_escape_string($_POST['tipo']);



	 $db -> query("UPDATE contacto_cliente SET Nombre = '$nombre', Apellido = '$apellido', Cuenta = '$cuenta', Email = '$email', Telefono = '$telefono', Telefono_ex = '$telefono2', Celular = '$celular', Fuente = '$fuente', Tipo = '$tipo' WHERE Id_Contacto = '$id'");

	 echo 1;




 ?>