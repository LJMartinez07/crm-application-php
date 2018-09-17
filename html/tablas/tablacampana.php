<?php
	require './core/models/Campana.php'
 ?>
<div class="card mb-3">
  <div id="_AJAX_NOT"></div>
  <div class="card-header">
    <i class="fa fa-table"></i> Lista de Campaña
    <div class="" style="float:right;clear:left;">
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#campana" title="Agregar Campaña"><i class="fas fa-user-plus"></i></button>
    </div>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Fecha Inicio</th>
            <th>Fecha Cierre</th>
            <th>Recaudacion</th>
            <th>Descripcion</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
       
       
        <tbody>
          <?php
          while($f = $db->recorrer($sql)){
            $data = $f[0]."||".$f[1]."||".$f[2]."||".$f[3]."||".$f[4]."||".$f[5]."||".$f[7];

          ?>
          <tr>
            <td><?php echo $f[1]; ?></td>
            <td>
              <?php
              if ($f[2] == 1) {
                 echo "Activo";
               }else{
                  echo "Inactivo";
               }
              ?>
            </td>
            <td><?php  echo $f[3]; ?></td>
            <td><?php  echo $f[4]; ?></td>
            <td><?php  echo $f[5]; ?></td>
            <td><?php  echo $f[7]; ?></td>
            <td> <button type="button" id="modificar"  class="btn btn-info fas fa-edit" data-toggle="modal" data-target="#Modifcampana" onclick="agregarformCampa('<?php echo $data ?>')" title="modificar campaña"></button></td>
            <td> <button type="button" id="eliminar"  onclick="preguntarsinoCampana('<?php echo $f[0]; ?>')"  class="btn btn-warning fas fa-times"  title="Eliminar Campaña"></button></td>
          </tr>
          <?php
          }
          $db->liberar($sql);
          $db->close(); 
           ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Actualizado <?php echo  date('d-m-Y h:i:s'); ?></div>
</div>

<?php

require './html/public/modifCampana.html';

?>

