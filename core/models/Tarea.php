<?php 
$db = new Conexion();
  $id = $_SESSION['app_id'];
  $sql = $db -> query("SELECT tarea.*, empleados.Nombre,empleados.Apellido FROM tarea LEFT JOIN empleados ON tarea.Personasresponsable = empleados.Id_empleados WHERE tarea.fk_id_usuario = '$id' AND tarea.Estado = 1");
  $sqlT = $db -> query("SELECT Id_empleados, Nombre, Apellido FROM empleados WHERE fk_Id_usuario = '$id' AND Estado = 1" );

?>