<?php
if (isset($_GET['key'], $_SESSION['app_id'])) {
  $db = new conexion();
  $id = $_SESSION['app_id'];
  $key = $db -> real_escape_string($_GET['key']);
  $sql = $db -> query("SELECT Id_Usuario FROM usuarios WHERE Id_Usuario = '$id' AND keyreg='$key' LIMIT 1");

  if ($db->rows($sql)>0) {
    $db->query("UPDATE usuarios SET activo=1, keyreg = '' WHERE Id_Usuario='$id'");
    $db -> liberar($sql);
    header("location: ?view=dashboard&success=true");
    
$db->close();
  }else {

     $sql = $db -> query("SELECT Id_Usuario FROM usuarios WHERE Id_Usuario = '$id' AND activo= 1 LIMIT 1");
     if ($db->rows($sql)>0) {
      $db -> liberar($sql);
      $db->close();
      header("location: ?view=dashboard&activa=true");


     }else{
     header("location: ?view=dashboard&error=true");

     }
    
  

  }


}else {
  include('html/index/loginactivar.php');
  ?>
  <script type="text/javascript">
           alertify.error('Para poder activar tu cuenta debes iniciar session.'); 
    </script>
    <?php 
}


 ?>
