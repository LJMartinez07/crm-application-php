<?php 


$db = new conexion();

$id = $db->real_escape_string($_POST['id']);
$nombre = $db->real_escape_string($_POST['nombre']);
$apellido = $db->real_escape_string($_POST['apellido']);
$email = $db->real_escape_string($_POST['email']);
$cedula = $db->real_escape_string($_POST['cedula']);
$cargo = $db->real_escape_string($_POST['cargo']);

$db -> query("UPDATE empleados SET Nombre = '$nombre', Apellido = '$apellido', Email = '$email', cedula ='$cedula', cargo= '$cargo' WHERE Id_empleados = '$id'");

echo 1;

?>