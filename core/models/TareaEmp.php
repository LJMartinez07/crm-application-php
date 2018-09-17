<?php

$db = new Conexion();
  $id = $_SESSION['app_idemp'];
  $sql = $db -> query("SELECT * FROM tarea WHERE Estado = 1 AND Personasresponsable = '$id'"); 

?>