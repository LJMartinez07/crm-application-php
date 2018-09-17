<?php 
	if (isset($_SESSION['app_id'])) {
		header('Location: ?view=dashboard&inicio');
	}else{
		include('html/index/index.php');

	}


	

 ?>