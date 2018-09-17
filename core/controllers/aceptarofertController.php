<?php 

$db = new Conexion();

if (isset($_GET['codigo'])) {

	$codigo = $_GET['codigo'];




	$sql = $db ->query("SELECT CodigoConf FROM ofertas WHERE CodigoConf = '$codigo'");

	if ($db ->rows($sql) > 0) {

		if (!isset($_GET['no'])) {


		

		
		$db -> query("UPDATE ofertas SET Confirmacion = 1, CodigoConf= '' WHERE CodigoConf = '$codigo'");
		require './html/overall/header.php';                                 

		require './html/public/aceptar.html';
		
	}else{

		$codigo = $_GET['codigo'];
		$db -> query("UPDATE ofertas SET Confirmacion = 2, CodigoConf= '' WHERE CodigoConf = '$codigo'");
		require './html/overall/header.php';
		require './html/public/NoAcep.html';

	}




	}else{
		require './html/overall/header.php';
		require './html/public/ofertainvalida.html';


	}




	
}else{

	echo "error";


}
$db->liberar($sql);
$db->close();
 ?>