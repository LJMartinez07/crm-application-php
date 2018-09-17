<?php
$db = new conexion();
function formatearFecha($fecha){
	return date('g:i a', strtotime($fecha));
}


$id = $_SESSION['app_id'];

	$sql =$db -> query("SELECT * FROM chat WHERE fk_Id_usuarios = '$id' ORDER BY id DESC");
	while($fila = $db->recorrer($sql)) : 
?>
	
		
		<div class="coco1 darker">
          <h6><?php echo $fila['Nombre'].' '.$fila['Apellido']; ?></h6>
            <p><?php echo $fila['Mensaje']; ?></p>
            <span class="time-left"><?php echo formatearFecha($fila['Fecha']); ?></span>
        </div>

	
	<?php endwhile; 

$db -> liberar($sql);

$db ->close();
	?>



 