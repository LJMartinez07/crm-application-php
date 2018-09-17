<?php 
$db = new Conexion();

$asunto = $db->real_escape_string($_POST['asunto']);
$descripcion = $db->real_escape_string($_POST['descripcion']);
$prioridad = $db->real_escape_string($_POST['altaprioridad']);
$responsables = $_POST['responsables'];
$fechalimite = $_POST['fechalimite'];
//$curso = $db->real_escape_string($_POST['curso']);
$fk_Id_usuario = $_SESSION['app_id'];
//se ejecuta la sentencia


$db -> query("INSERT INTO tarea (Asunto, Descripcion, Altaprioridad, Personasresponsable, Fechalimite, fk_id_usuario) VALUES ('$asunto', '$descripcion', '$prioridad', '$responsables', '$fechalimite', '$fk_Id_usuario')");
echo 1;

$db->close();
?>