<?php 

	$db = new Conexion();
  $id_usuario = $_SESSION['app_id'];
  $sql = $db ->query("SELECT * FROM cuenta_cliente WHERE fk_Id_usuario = '$id_usuario' AND Estado = 1");

?>