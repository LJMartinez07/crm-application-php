<?php 


$db = new conexion();

$id = $_SESSION['app_id'];

$nombre = $db->real_escape_string($_POST['nombre']);
$apellido = $db->real_escape_string($_POST['apellido']);
$pais =$db->real_escape_string( $_POST['pais']);
$email =$db->real_escape_string( $_POST['email']);
$telefono = $db->real_escape_string($_POST['telefono']);
$celular = $db->real_escape_string($_POST['celular']);
$dominio = $db->real_escape_string($_POST['dominio']);
$cargo = $db->real_escape_string($_POST['cargo']);

$db -> query("UPDATE usuarios SET Nombre = '$nombre', Apellido = '$apellido', Email = '$email', Pais ='$pais', Dominio = '$dominio', Cargo = '$nombre', telefono = '$telefono', Celular = '$celular' WHERE Id_usuario = '$id'");
echo 1;


 ?>