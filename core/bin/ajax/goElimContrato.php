<?php 
$db = new Conexion();
$id=$db->real_escape_string($_POST['id']);
$sql = $db->query("UPDATE contrato SET Estado = 0 WHERE Id_Contrato = '$id'");
echo 1;


$db->close();


 ?>