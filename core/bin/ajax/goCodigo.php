<?php 
$db = new Conexion();
$codigo=$db->real_escape_string($_POST['codigo']);
$sql = $db->query("SELECT *  FROM usuarios WHERE Codigo ='$codigo' LIMIT 1");
if ($db->rows($sql)>0) {
	echo 1;
}else{
	echo '<div class="alert alert-dismissible alert-warning">
  	<button type="button" class="close" data-dismiss="alert">&times;</button>
  	<h4 class="alert-heading">Alerta!!</h4>
  	<p class="mb-0">El codigo ingresado no es valido</p>
	</div>';

}
?>