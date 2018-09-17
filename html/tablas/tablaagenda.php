<?php
	require './core/models/agenda.php';
 ?>
<div class="card mb-3">
  <div id="_AJAX_AGENDA2_"></div>
  <div class="card-header">
    <i class="fa fa-book"></i> Agenda
    <div class="" style="float:right;clear:left;">
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#agenda" title="Agregar una actividad"><i class="fas fa-book"></i></button>
    </div>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Asunto</th>
            <th>Descripción</th>
            <th>Fecha</th>
            <?php 
            
            if(isset($_SESSION['app_id'])){
            ?>
                <th>¿Para quíen?</th>
            <?php
            }elseif(isset($_SESSION['app_idemp'])){

            }
            ?>
            
            <th>Eliminar</th>
          </tr>
        </thead>
       
       
        <tbody>
          <?php
          while($f = $db->recorrer($sqltabla)){
            $data = $f[0]."||".$f[1]."||".$f[2]."||".$f[3]."||".$f[4]."||".$f[5];

          ?>
          <tr>
            <td><?php echo $f[1]; ?></td>
            <td><?php echo $f[2]; ?></td>
            <td><?php echo $f[3]; ?></td>
            <?php
            if(isset($_SESSION['app_id'])){
            ?>
            <td>
            <?php if($f[5] == 0){
                echo "Para mí";
            }elseif($f[5] == -1){
                echo "Todos";

            }else{
                $sql = $db->query("SELECT Nombre, Apellido FROM empleados WHERE Id_empleados = '$f[5]' AND fk_Id_usuario = '$id' LIMIT 1");
                $dat=$db->recorrer($sql);
                echo $dat[0] ." ". $dat[1];
                $db->liberar($sql);
            } ?>
            </td>
            <?php
            }elseif(isset($_SESSION['app_idemp'])){

            }
            ?>
            
            <td> <button type="button" id="eliminar"  onclick="preguntarsinAgenda('<?php echo $f[0]; ?>')"  class="btn btn-warning fas fa-times"  title="Eliminar Campaña"></button></td>
          </tr>
          <?php
          }
          $db->liberar($sqltabla);
          $db->close(); 
           ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Actualizado <?php echo  date('d-m-Y h:i:s'); ?></div>
</div>
</div>
<?php
require './html/index/agendamodal.php';
?>

