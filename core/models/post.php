<?php 

$id = $_SESSION['app_id']; 

$db = new Conexion();
$sql= $db->query("SELECT post.*, usuarios.Nombre, usuarios.Apellido
FROM post

LEFT JOIN usuarios  ON post.fk_Id_usuario = usuarios.Id_usuario
WHERE post.fk_Id_usuario = '$id' AND usuarios.Id_usuario = '$id'
ORDER BY post.Id_post DESC");




 ?>