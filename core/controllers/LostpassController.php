<?php

if(!isset($_GET['app_id']) and isset($_GET['email']) ){

  $db = new Conexion();
  $keypass = $db->real_escape_string($_GET['email']);
  $sql = $db->query("SELECT Id_Usuario ,new_pass FROM usuarios WHERE keypass= '$keypass' LIMIT 1");
  
  if($db->rows($sql) > 0){
    $data = $db->recorrer($sql);
    $id_user = $data[0];
    $new_pass = Encrypt($data[1]);
    $password =$data[1];
    $sql=$db->query("UPDATE usuarios SET keypass= '', new_pass='', Password='$new_pass' WHERE Id_Usuario= $id_user;");
    if ($sql==true) {
      include 'html/lostpass_mensaje.php';
    }else{
      echo "nooop";
    }
    
     
   
  }else{
    header("location: ?view=index");
  }
 
  $db->liberar($sql);
  $db->close();
}else{
  header('location: ?view=index');
}




?>
