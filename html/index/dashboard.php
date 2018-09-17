<?php require 'html/overall/header.php'; ?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php require 'html/overall/topnav.php';
              $db = new Conexion;
             
             
  ?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="?view=dashboard">Inicio</a>
          
        </li>
          <!-- Large modal -->

      </ol>
    
      <div class="row">
        <div class="col-12">
                  <?php
        if(isset($_GET['agenda'])){
          require './html/tablas/tablaagenda.php';
        }        
        ?>
          

          <?php
 if (isset($_GET['inicio'])) {
            require 'Cards.php';
             require 'grafico.php'; 


             
            # code...
          }

         

           if (isset($_SESSION['app_id'])) {
                 $id = $_SESSION['app_id'];


                 if (isset($_GET['papelera'])) {

                  require './html/tablas/tablapapelera.php';
                   # code...
                 }

                 if (isset($_GET['ofertas'])) {

                  require './html/tablas/tablaofertas.php';
                   # code...
                 }
                # code...
            
          if (isset($_GET['contacto'])) {

            $sql = $db -> query("SELECT * FROM contacto_cliente  WHERE Estado = 1 AND fk_Id_usuario = '$id'");
            require './html/public/agreContacto.php';
            if ($db->rows($sql)>0) {
              require './html/tablas/tablacontacto.php';
            }else {
              // code...\
              require './html/public/contactofondo.html';
            }
            $db->liberar($sql);

          }
           ?>
           <?php
           if (isset($_GET['cuenta'])) {

             $sql = $db -> query("SELECT * FROM cuenta_cliente WHERE Estado = 1 AND fk_Id_usuario = '$id'");
             require './html/public/agreCuenta.php';
             if ($db->rows($sql)>0) {
               require './html/tablas/tablacuenta.php';
               

             }else {
                require './html/public/cuentafondo.html';
             }

             $db->liberar($sql);

           }


           if (isset($_GET['perfil'])) {
             require './html/index/perfil.php';

           }

            if(isset($_GET['tarea'])){
            require './html/tablas/tablatarea.php';
            //require './html/index/tarea.php';
           }

          

           if (isset($_GET['Contrato'])) {
           $sql5 = $db -> query("SELECT * FROM contrato WHERE fk_Id_usuario = '$id' AND Estado = 1");
            
            require './html/public/agreContrato.php';
            if ($db->rows($sql5)>0) {
              require './html/tablas/tablacontrato.php';

            }else{

              require './html/public/Contratofondo.html';

            }
             $db->liberar($sql5);

           }

           

           if (isset($_GET['veremp'])) {
             require './html/index/veremp.php';

             # code...
           }

            if(isset($_GET['campana'])){
            require './html/public/agreCampana.html';

            $sql = $db -> query("SELECT * FROM campain WHERE EstadoElim = 1");
            if ($db->rows($sql)>0) {
              require './html/tablas/tablacampana.php';

            }else{

              require './html/public/Campanafondo.html';

            }
          }
           include './html/public/agreEmpleados.html';

             }else{
              if (isset($_GET['perfilemp'])) {
            require './html/index/perfilemp.php';
             # code...
           }


           if (isset($_GET['tareaemp'])) {

             require './html/tablas/tablatareaemp.php';
            
             # code...
           }

           if (isset($_GET['hola'])) {
            ?>
            <div style="margin:15%; ">
<center>
            <h1>Bienvenido a tu zona de trabajo</h1>
</center>
</div>
            <?php 



             # code...
           }




             }
          

          

          

           

            ?>

        </div>
      </div>
      
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php require 'html/overall/footer.php'; ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Seguro?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Esta seguro de que quiere Cerrar la sesion.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="?view=logout">Salir</a>
          </div>
        </div>
      </div>
    </div>
      









    <?php

    if (isset($_GET['suem'])) {
      ?>
       <script type="text/javascript">
         alertify.success('Bienvenido <?php echo  $emp[$_SESSION['app_id']]['nombre']." ".$emp[$_SESSION['app_id']]['apellido']; ?>');
    </script>
    <?php  
      
    }
      if (isset($_GET['successlogin'])) {
        ?>
       <script type="text/javascript">
         alertify.success('Bienvenido <?php echo  $users[$_SESSION['app_id']]['nombre']." ".$users[$_SESSION['app_id']]['apellido']; ?>');
    </script>

      <?php
       }elseif (isset($_GET['successreg'])) {
         ?>
         <script type="text/javascript">
          alertify.success('Bienvenido <?php echo  $users[$_SESSION['app_id']]['nombre']." ".$users[$_SESSION['app_id']]['apellido']; ?> Te hemos enviado un correo de activacion de cuenta');
           </script>

         <?php

       }

     ?>

     <?php

  if (isset($_GET['success'])) {
    ?>


    <script type="text/javascript">
           alertify.success('<?php echo  $users[$_SESSION['app_id']]['nombre']; ?> tu cuenta se ha activado correctamente');
    </script>
    <?php
    # code...
   }
    if (isset($_GET['error'])) {
    ?>
    <script type="text/javascript">
           alertify.error('<?php echo  $users[$_SESSION['app_id']]['nombre']; ?> tu cuenta no se pudo activar correctamente');
    </script>

    <?php
    }if (isset($_GET['activa'])) {
      ?>

      <script type="text/javascript">
           alertify.success('<?php echo  $users[$_SESSION['app_id']]['nombre']; ?> tu cuenta ya ha sido activada');
    </script>


      <?php
    }

   
   ?>

<?php 


if (isset($_SESSION['app_id'])) {




  ?>
  <script src="./views/app/js/ajaxjs.js"></script>


  <div class="modal fade"  onload="ajax();" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Chat - <?php echo $users[$_SESSION['app_id']]['nombre'].' '.$users[$_SESSION['app_id']]['apellido']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  style="height:350px; overflow-y: scroll;" >


        <div id="caja-chat">
           <div id="chat"></div>
        </div>

        <div id="notifi"></div>
        
        
      </div>
      <div class="modal-footer"  >
        
 
       
           <textarea class="form-control" onkeypress="return runScriptChat(event)" placeholder="Escribir..." id="publicar"></textarea>
         
   
      


      <button type="submit" onclick="goChat()" class="btn btn-outline-info">Responder</button>

      <input type="hidden" id="nombre" value="<?php echo $users[$_SESSION['app_id']]['nombre'];?>">
      <input type="hidden" id="apellido" value="<?php echo  $users[$_SESSION['app_id']]['apellido'] ;?>">
      <input type="hidden" id="id" value="<?php echo  $users[$_SESSION['app_id']]['id'] ;?>">

     
  

      </div>
    </div>
  </div>
</div>
  <?php  
 
}elseif (isset($_SESSION['app_idemp'])) {
 ?>
   <script src="./views/app/js/ajaxemp.js"></script>

<div class="modal fade"  onload="ajaxemp();" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Chat - <?php echo $emp[$_SESSION['app_idemp']]['nombre'].' '.$emp[$_SESSION['app_idemp']]['apellido']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  style="height:350px; overflow-y: scroll;" >


        <div id="caja-chat">
           <div id="chat"></div>
        </div>
        
        
      </div>
      <div class="modal-footer"  >
        
 
       
           <textarea class="form-control" onkeypress="return runScriptChatemp(event)" id="publicar"></textarea>
         
   
      


      <button type="submit" onclick="goChatemp()" class="btn btn-outline-info">Responder</button>

      <input type="hidden" id="nombre" value="<?php echo $emp[$_SESSION['app_idemp']]['nombre'];?>">
      <input type="hidden" id="apellido" value="<?php echo  $emp[$_SESSION['app_idemp']]['apellido'] ;?>">
      <input type="hidden" id="id" value="<?php echo  $emp[$_SESSION['app_idemp']]['fk_usu'] ;?>">

     
  

      </div>
    </div>
  </div>
</div>



 <?php 
}
?>








<script src="./views/app/js/publicarycomen.js"></script>
          






    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="./views/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="./views/js/sb-admin-charts.min.js"></script>
    <script src="./views/js/Chart-bar-demo.js"></script>
  </div>
</body>

</html>
