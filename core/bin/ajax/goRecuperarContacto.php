<?php


$db = new Conexion();

$id = $_POST['id'];


$db->query("UPDATE contacto_cliente SET Estado = 1 WHERE Id_Contacto = '$id';");
echo 1; 

?>