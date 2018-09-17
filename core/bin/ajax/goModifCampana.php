<?php

$db = new conexion();

$id = $_POST['id'];
$nombre = $db->real_escape_string($_POST['nombre']);
$estatus = $_POST['estatus'];
$fechai = $_POST['fechai'];
$fechaf = $_POST['fechaf'];
$recaudacion = $_POST['recaudacion'];
$descripcion =$_POST['descripcion'];

$db -> query("UPDATE campain SET Nombre = '$nombre', Estado = '$estatus', Fecha_start = '$fechai', Fecha_close = '$fechaf', Recaudacion = '$recaudacion', Descripcion = '$descripcion' WHERE id_campain = '$id' ");

echo 1;

$db->close();


?>