<?php

$db = new Conexion();
$id=$_POST['id']; 

$db -> query("UPDATE tarea SET Curso = 'Completada' WHERE Id_tarea = '$id' ");

echo 1;


?>