<?php

//Creamos la conexion
$db = new Conexion();
$user=$db->real_escape_string($_POST['user_login']);
$pass=Encrypt($_POST['pass_login']);
$sql = $db->query("SELECT Id_Usuario  FROM usuarios WHERE Email='$user' AND Password ='$pass' LIMIT 1");
if ($db->rows($sql)>0) {
//si la consulta dio resultado

	//Si se chequeó la casilla de recordar usuario:
/*if ($_POST['session_login']){
		//se crea una cookie de sesión:
		setcookie('app_id', time() -86400 );
	}*/
	$_SESSION['app_id'] = $db->recorrer($sql)[0];
	//Pongo echo 1 para que ajax lo tome como un success y me redireccione al dashboard
	echo 1;

}else{
	echo '<div class="alert alert-dismissible alert-warning">
  		<button type="button" class="close" data-dismiss="alert">&times;</button>
  		<h4 class="alert-heading">Alerta!!</h4>
  		<p class="mb-0">Las credenciales no coinciden.</p>
		</div>';

}
$db->liberar($sql);
$db->close();
?>
