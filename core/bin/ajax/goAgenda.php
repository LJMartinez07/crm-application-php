<?php

$db = new conexion();

if(isset($_SESSION['app_id'])){
    $asunto = $db->real_escape_string($_POST['asunto']);
    $descripcion = $db->real_escape_string($_POST['descripcion']);
    $fecha = $_POST['fecha'];
    $empleado  = $_POST['empleado'];
    $id = $_SESSION['app_id'];
    $db -> query("INSERT INTO agenda(Asunto, Descripcion, Fecha, fk_Id_usuario, fk_Id_empleado) VALUES ('$asunto','$descripcion', '$fecha', '$id', '$empleado')");
    echo 1;

}elseif(isset($_SESSION['app_idemp'])){
    $idemp = $_SESSION['app_idemp'];
    $asunto = $db->real_escape_string($_POST['asunto']);
    $descripcion = $db->real_escape_string($_POST['descripcion']);
    $fecha = $_POST['fecha'];
    $idusuario = $db->query("SELECT Id_usuario FROM usuarios, empleados WHERE empleados.Id_empleados = '$idemp' AND empleados.fk_Id_usuario = usuarios.Id_usuario");
    $dat =  $db->recorrer($idusuario);
    $db->query("INSERT INTO agenda(Asunto, Descripcion, Fecha, fk_Id_usuario, fk_Id_empleado) VALUES ('$asunto', '$descripcion','$fecha','$dat[0]', '$idemp')");

}




?>