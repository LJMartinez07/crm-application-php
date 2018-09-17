<?php 

$db = new conexion();

$id = $_POST['id'];

$nombre = $db->real_escape_string($_POST['nombre']);
$tipo = $db->real_escape_string($_POST['tipo']);

$fechaf =$db->real_escape_string( $_POST['fechaf']);
$cantidad = $_POST['cantidad'];
$descripcion = $db->real_escape_string($_POST['descripcion']);

$db -> query("UPDATE contrato SET Nombre_Cont = '$nombre', Tipo = '$tipo', Fecha_close = '$fechaf', Cantidad = '$cantidad', Descripcion = '$descripcion' WHERE Id_Contrato = '$id'");
echo 1;

$db ->close();




 ?>