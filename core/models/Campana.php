<?php

$db = new Conexion();
  $id_usuario = $_SESSION['app_id'];
  $sql = $db ->query("SELECT * FROM campain WHERE EstadoElim = 1"); 

?>