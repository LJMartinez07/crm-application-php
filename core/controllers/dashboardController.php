<?php 


if (!isset($_SESSION['app_id']) AND !isset($_SESSION['app_idemp'])) {
	header('Location: ?view=index');
}else {
	include('html/index/dashboard.php');

}
	
 ?>