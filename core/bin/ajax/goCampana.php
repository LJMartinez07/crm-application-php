<?php

$db = new conexion();

$nombre = $db->real_escape_string($_POST['nombre']);
$estatus = $db->real_escape_string($_POST['estatus']);
$fechai =$db->real_escape_string( $_POST['fechai']);
$fechaf =$db->real_escape_string( $_POST['fechaf']);
$recaudacion = $_POST['recaudacion'];
$descripcion = $db->real_escape_string($_POST['descripcion']);
$id = $_SESSION['app_id'];

$sql = $db -> query("SELECT Nombre FROM campain WHERE Nombre = '$nombre' LIMIT 1");
if ($db->rows($sql)==0) {

    $db -> query("INSERT INTO campain (Nombre, Estado, Fecha_start, Fecha_close, Recaudacion,  	fk_Id_usuario, Descripcion) VALUES ('$nombre', '$estatus', '$fechai', '$fechaf', '$recaudacion','$id' , '$descripcion')");

    echo 1;
  
}else{

    echo '<div class="alert alert-dismissible alert-warning">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4 class="alert-heading">Alerta!!</h4>
    <p class="mb-0">Ya existe una cuenta con el mismo Website</p>
    </div>';

}
$db->liberar($sql);
$db->close();


?>