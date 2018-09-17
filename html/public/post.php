<?php
 $db = new Conexion();
?>

<div class="mb-0 mt-4">
  <i class="fa fa-newspaper-o"></i> Bandeja
</div>
<hr class="mt-2">

<div id="_AJAX_PUBLICAR_"></div>

<?php if (isset($_SESSION['app_id'])) {
  # code...
?>
<div>
 
    <div class="form-group">
      <textarea class="form-control"  id="publicar"><?php if(isset($_GET['user'])) { ?>@<?php echo $_GET['user']; ?><?php } ?> </textarea>
   </div>
   
      
 <center>
       <?php if (isset($_GET['id'])) { ?>


      <button type="button" onclick="goResponder()" class="btn btn-outline-info">Responder</button>

      <?php }else { ?>

      <button type="button"  onclick="goComentar()" class="btn btn-outline-info">Publicar</button><?php } ?>
    </center>
  
</div>



<br>

<div class="card-columns">
   <?php 
          
   $id = $_SESSION['app_id'];

        $comentarios = $db -> query("SELECT * FROM comentarios WHERE reply = 0  AND  usuario = '$id'  ORDER BY id DESC LIMIT 5");
    while($row=$db->recorrer($comentarios)) {
      
      $usuario = $db -> query("SELECT * FROM usuariopost WHERE fk_Id_usuario = '".$row['usuario']."'");
      $user = $db->recorrer($usuario);

     

        
            # code...
          
         ?>
  <div class="card mb-3">
    <div class="card-body">
        <h6 class="card-title mb-1"><a href="#"><?php echo $user['Nombre'].' '.$user['Apellido']; ?></a></h6>
        <p class="card-text small">
          <?php echo $row['comentario']; ?>
        </p>
    </div>

  
    <hr class="my-0">
    <div class="card-body py-2 small">
        <a class="mr-3 d-inline-block" href="?view=dashboard&inicio=true&user=<?php echo $user['Nombre']; ?>&id=<?php echo $row['id']; ?>">
          <i class="fa fa-fw fa-comment"></i>Comment
        </a>
    </div>
    
      
      <hr class="my-0">
      
         <?php
        $sql = $db-> query("SELECT * FROM comentarios WHERE reply = '".$row['id']."'");

        $contar = $db ->rows($sql);
        if($contar != '0') {
          
          $reply =$db-> query("SELECT * FROM comentarios WHERE reply = '".$row['id']."' ORDER BY id DESC");
          while($rep=$db ->recorrer($reply)) {
            
          $usuario2 =$db-> query("SELECT * FROM usuariopost WHERE fk_Id_usuario = '".$rep['usuario']."'");
          $user2 = $db ->recorrer($usuario2); 

         ?>
         <div class="card-body small bg-faded">


    
      <div class="media">
         <div class="media-body">
          <h6 class="mt-0 mb-1"><a href="#"><?php echo $user2['Nombre'].' '.$user2['Apellido']; ?></a>
          </h6>
          <p>

             <?php echo $rep['comentario']; ?>
          </p>
         </div>


      </div>
    </div>
    




      
  

  <?php }}


?>
 <div class="card-footer small text-muted"><?php echo $row['fecha']; ?></div>
  </div><?php  } ?>


  </div>


<?php }elseif (isset($_SESSION['app_idemp'])) {



  $id = $_SESSION['app_idemp'];
?>


<div>
 
    <div class="form-group">
      <textarea class="form-control"  id="publicar"><?php if(isset($_GET['user'])) { ?>@<?php echo $_GET['user']; ?><?php } ?> </textarea>
   </div>
   
      
 <center>
       <?php if (isset($_GET['id'])) { ?>


      <button type="button" onclick="goResponder()" class="btn btn-outline-info">Responder</button>

      <?php }else { ?>

      <button type="button"  onclick="goComentar()" class="btn btn-outline-info">Publicar</button><?php } ?>
    </center>
  
</div>



<br>

<div class="card-columns">
   <?php 
          
   $id = $_SESSION['app_id'];

        $comentarios = $db -> query("SELECT * FROM comentarios WHERE reply = 0  AND  usuario = '$id'  ORDER BY id DESC LIMIT 5");
    while($row=$db->recorrer($comentarios)) {
      
      $usuario = $db -> query("SELECT * FROM usuarios WHERE Id_usuario = '".$row['usuario']."'");
      $user = $db->recorrer($usuario);

     

        
            # code...
          
         ?>
  <div class="card mb-3">
    <div class="card-body">
        <h6 class="card-title mb-1"><a href="#"><?php echo $user['Nombre'].' '.$user['Apellido']; ?></a></h6>
        <p class="card-text small">
          <?php echo $row['comentario']; ?>
        </p>
    </div>

  
    <hr class="my-0">
    <div class="card-body py-2 small">
        <a class="mr-3 d-inline-block" href="?view=dashboard&inicio=true&user=<?php echo $user['Nombre']; ?>&id=<?php echo $row['id']; ?>">
          <i class="fa fa-fw fa-comment"></i>Comment
        </a>
    </div>
    
      
      <hr class="my-0">
      
         <?php
        $sql = $db-> query("SELECT * FROM comentarios WHERE reply = '".$row['id']."'");

        $contar = $db ->rows($sql);
        if($contar != '0') {
          
          $reply =$db-> query("SELECT * FROM comentarios WHERE reply = '".$row['id']."' ORDER BY id DESC");
          while($rep=$db ->recorrer($reply)) {
            
          $usuario2 =$db-> query("SELECT * FROM usuarios WHERE Id_usuario = '".$rep['usuario']."'");
          $user2 = $db ->recorrer($usuario2); 

         ?>
         <div class="card-body small bg-faded">


    
      <div class="media">
         <div class="media-body">
          <h6 class="mt-0 mb-1"><a href="#"><?php echo $user2['Nombre'].' '.$user2['Apellido']; ?></a>
          </h6>
          <p>

             <?php echo $rep['comentario']; ?>
          </p>
         </div>


      </div>
    </div>
    




      
  

  <?php }}


?>
 <div class="card-footer small text-muted"><?php echo $row['fecha']; ?></div>
  </div><?php  } ?>


  </div>




<?php  


  # code...
}  ?>


     











    

 <!-- <div id="container">
      <ul id="comments">

  		
             Example Social Card
           
         <li class="cmmnt">
              
                <div class="cmmnt-content">
                  <header>
                    <a href="#" class="userlink"><?php// echo $user['Nombre'].' '.$user['Apellido']; ?></a> - <span class="pubdate"><?php// echo $row['fecha']; ?></span>
                    </header>
                    <p>
                    <?php// echo $row['comentario']; ?>
                    </p>
                    <span>
                    <a href="?view=dashboard&inicio=true&user=<?php //echo $user['Nombre']; ?>&id=<?php// echo $row['id']; ?>">
                    Responder
                    </a>
                    </span>
                </div>
          <div class="card">
   
        <div class="card-body">
          <h6 class="card-title"><a href="#"><?php //echo $user[1].' '.$user[2]; ?></a></h6>
            <p class="card-text small"><?php //echo $row['comentario']; ?>
            </p>
             <a href="?view=dashboard&inicio=true&user=<?php //echo $user['Nombre']; ?>&id=<?php //echo $row['id']; ?>">
                    Responder
                    </a>
        </div>


         <ul class="replies">
                  <li class="cmmnt">
                     
                  <div class="cmmnt-content">
                        <header>
                        <a href="#" class="userlink"><?php //echo $user2['Nombre'].' '.$user2['Apellido'] ; ?></a> - <span class="pubdate"><?php// echo $rep['fecha']; ?></span>
                        </header>
                        <p>
                        <?php //echo $rep['comentario']; ?>
                        </p>
                    </div>
                    
                    </li>
                </ul>
                
        
          
       
            <?php// } }} ?>
               </li>        
        
        </ul>
    </div>-->
       
            
            


<script src="./views/app/js/publicarycomen.js"></script>
          
