<?php

$db = new conexion();
$id = $_SESSION['app_id'];

$sql = $db->query("SELECT COUNT(*) FROM contacto_cliente WHERE fk_id_usuario = '$id' and Estado = 1 and Tipo = 'Potencial'");
$sql1 = $db->query("SELECT COUNT(*) FROM contacto_cliente WHERE fk_id_usuario = '$id' and Estado = 1 and tipo = 'Fijo'");
$sql2 = $db->query("SELECT COUNT(*) FROM contrato WHERE fk_id_usuario = '$id' and Estado = 1");
$sql3 = $db->query("SELECT COUNT(*) FROM bandeja WHERE fk_id_usuario = '$id'");
?>