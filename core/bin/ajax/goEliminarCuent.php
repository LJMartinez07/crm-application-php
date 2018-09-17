<?php 	
$db = new Conexion();
$id=$db->real_escape_string($_POST['id']);
$sql = $db->query("UPDATE cuenta_cliente SET Estado = 0 WHERE Id_Cuenta = '$id'");
echo 1;


$db->close();


?>