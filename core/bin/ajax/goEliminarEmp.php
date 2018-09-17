<?php 	
$db = new Conexion();
$id=$db->real_escape_string($_POST['id']);
$sql = $db->query("UPDATE empleados SET Estado = 0 WHERE Id_empleados = '$id'");
echo 1;


$db->close();


?>