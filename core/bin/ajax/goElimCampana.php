<?php 	
$db = new Conexion();
$id=$db->real_escape_string($_POST['id']);
$sql = $db->query("UPDATE campain SET EstadoElim = 0 WHERE Id_campain = '$id'");
echo 1;


$db->close();


?>