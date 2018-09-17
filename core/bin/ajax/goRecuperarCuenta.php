<?php 

$db = new Conexion();

$id = $_POST['id'];




$db->query("UPDATE cuenta_cliente SET Estado = 1 WHERE Id_Cuenta = '$id';");
echo 1;

 ?>