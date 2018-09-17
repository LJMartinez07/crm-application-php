<?php 
$db = new Conexion();

if (isset($_GET['codigo'])) {
	if (!isset($_GET['no'])) {


		$codigo = $_GET['codigo'];

		
		$db -> query("UPDATE contrato SET Confirmacion = 1, CodigoConf= '' WHERE CodigoConf = '$codigo'");
		require './html/overall/header.php';                                 

		require './html/public/aceptar.html';
		
	}else{

		$codigo = $_GET['codigo'];
		$db -> query("UPDATE contrato SET Confirmacion = 2, CodigoConf= '' WHERE CodigoConf = '$codigo'");
		require './html/overall/header.php';
		require './html/public/NoAcep.html';

	}
}else{

	echo "error";


}

$db->close();


 ?>