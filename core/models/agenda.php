<?php

$db = new conexion;

if(isset($_SESSION['app_id'])){
    $id = $_SESSION['app_id'];
    $sqlemp = $db->query("SELECT Id_empleados, Nombre, Apellido FROM empleados WHERE fk_Id_usuario = '$id' AND Estado = 1" );
    $sqltabla = $db->query("SELECT * FROM agenda WHERE  fk_Id_usuario = '$id' AND Estado = 1");

}elseif(isset($_SESSION['app_idemp'])){
    $id2 = $_SESSION['app_idemp'];
    $sqltabla = $db->query("SELECT * FROM agenda WHERE Estado = 1 AND fk_Id_empleado = '$id2'");

}

?>