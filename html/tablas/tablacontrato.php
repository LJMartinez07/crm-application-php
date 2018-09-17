


<div class="card mb-3">
  <div id="_AJAX_CONTRATO_"></div>
  <div class="card-header">
    <i class="fa fa-table"></i> Lista de Negociaciones
    <div class="" style="float:right;clear:left;">
       <div class="btn-group" role="group" aria-label="Basic example">
        <button onclick="Todos()" type="button" class="btn btn-secondary">Todos</button>
  <button onclick="Aceptados()" type="button" class="btn btn-secondary">Aceptados</button>
  <button onclick="Proceso()" type="button" class="btn btn-secondary">En Proceso</button>
  <button onclick="Cancelados()" type="button" class="btn btn-secondary">Cancelados</button>
</div>
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#contrato" title="Agregar Contacto"><i class="fas fa-user-plus"></i></button>
    </div>
  </div>
  <div id="_AJAX_FILTROCONTRATO_" >
  <?php require './core/bin/ajax/goFiltrocamp.php'; ?>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nombre de negociación</th>
            <th>Tipo</th>
            <th>Cantidad</th>
            <th>Fecha cierre</th>
            <th>Descripcion</th>
            <th>Contacto</th>
            <th>Confirmación</th>
            <th>Modificar</th>
            <th>Eliminar</th>
          
          </tr>
        </thead>
       
       
        <tbody>
          <?php
          while($f = $db->recorrer($sql)){
            $data = $f[0]."||".$f[1]."||".$f[2]."||".$f[3]."||".$f[4]."||".$f[5];

          ?>
          <tr>
            <td><?php echo $f[1]; ?></td>
            <td><?php  echo $f[2]; ?></td>
            <td><?php  echo $f[3]; ?></td>
            <td><?php  echo $f[4]; ?></td>
            <td><?php  echo $f[5]; ?></td>
            <td><?php  echo $f[12].' '.$f[13]; ?></td>
            <td><?php 

            if ($f[7] == 0) {
              echo "Proceso";
            }elseif ($f[7] == 1) {
              echo "Aceptado";
            }else{
              echo "No aceptado";
            }


            ?></td>
           
            <td> <button type="button" id="modificar"  class="btn btn-info fas fa-edit" data-toggle="modal" data-target="#ModifContrato" onclick="EnviarDatosContrato('<?php echo $data;?>')" title="Agregar Contacto"></button></td>
            <td> <button type="button" id="eliminar"  onclick="EliminarContratoPregunta(<?php echo $f[0]; ?>)"  class="btn btn-warning fas fa-times"  title="Eliminar"></button></td>
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

  </div>

  <div class="card-footer small text-muted">Actualizado <?php echo  date('d-m-Y h:i:s'); ?></div>
</div>
</div>
<script src="./views/app/js/filtrocontrato.js"></script>

<?php 

include './html/public/modificarContrato.html';


?>