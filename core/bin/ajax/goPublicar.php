<?php 

$db = new conexion();

	$nombre=$db->real_escape_string($_POST['nombre']);
	$apellido=$db->real_escape_string($_POST['apellido']);
	$id =$db->real_escape_string($_POST['id']);

	$mensaje = $db->real_escape_string($_POST['mensaje']);
	
	 $db ->query("INSERT INTO chat (Nombre, Apellido, Mensaje, fk_Id_usuarios) value ('$nombre','$apellido', '$mensaje', '$id')");
	
		echo "<embed loop='false' src='./beep.mp3' hidden='true' autoplay='true'>";
 	



 	 
 ?>