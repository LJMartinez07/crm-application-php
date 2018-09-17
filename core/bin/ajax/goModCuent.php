<?php

$db = new conexion();

$id = $db->real_escape_string($_POST['id']);
$nombre = $db->real_escape_string($_POST['nombre']);
$no_cuenta = $db->real_escape_string($_POST['no_cuenta']);
$tipo_cuenta = $db->real_escape_string($_POST['tipo_cuenta']);
$ingreso = $db->real_escape_string($_POST['ingreso']);
$telefono = $db->real_escape_string($_POST['telefono']);
$fax = $db->real_escape_string($_POST['fax']);
$sitio_web = $db->real_escape_string($_POST['sitio_web']);
$direccion = $db->real_escape_string($_POST['direccion']);
$codigo_postal = $db->real_escape_string($_POST['codigo_postal']);
$descripcion = $db->real_escape_string($_POST['descripcion']);

$db -> query("UPDATE cuenta_cliente SET Nombre = '$nombre', Numero_cuenta = '$no_cuenta', Tipo_cuenta = '$tipo_cuenta', Ingreso_anual = '$ingreso', Telefono = '$telefono', Fax = '$fax', Website = '$sitio_web', Direccion = '$direccion', Codigo_postal = '$codigo_postal', Descripcion = '$descripcion' WHERE Id_Cuenta = '$id'");

echo 1;


?>