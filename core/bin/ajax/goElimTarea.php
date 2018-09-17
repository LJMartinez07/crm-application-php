<?php 	
$db = new Conexion();
$id=$db->real_escape_string($_POST['id']);
$sql = $db->query("UPDATE tarea SET Estado = 0 WHERE Id_tarea = '$id'");
echo 1;


$db->close();


?>