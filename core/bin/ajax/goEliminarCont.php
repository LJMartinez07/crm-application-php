<?php 	
$db = new Conexion();
$id=$_POST['id'];
$sql = $db->query("UPDATE contacto_cliente SET Estado = 0 WHERE Id_Contacto = '$id'");


echo 1;


$db->close();


?>