
<div class="card mb-3">
  <div id="_AJAX_NOT"></div>
  <div class="card-header">
    <i class="fa fa-table"></i> Papelera
    <div class="" style="float:right;clear:left;">
      <div class="btn-group" role="group" aria-label="Basic example">
        <button onclick="clientes()" type="button" class="btn btn-secondary">Clientes</button>
        <button onclick="cuentas()" type="button" class="btn btn-secondary">Cuentas</button>
       
      </div>
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#campana" title="Agregar Campaña"><i class="fas fa-user-plus"></i></button>
    </div>
  </div>
  <div  id="_AJAX_OTRACOSA_"></div>

  <div  id="_AJAX_FILTROPAPELERA456454_" >
  
  <?php require './core/bin/ajax/goFiltroPapelera.php'; ?>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Celular</th>
            <th>Tipo</th>
            <th>Recuperar</th>
          </tr>
        </thead>
       
       
        <tbody>
          <?php
          while($f = $db->recorrer($sql)){
          

          ?>
          <tr>
            <td><?php echo $f[1]; ?></td>
            <td><?php  echo $f[2]; ?></td>
            <td><?php  echo $f[4]; ?></td>
            <td><?php  echo $f[5]; ?></td>
            <td><?php  echo $f[7]; ?></td>
            <td><?php  echo $f[9]; ?></td>
            <td> <button type="button" id="eliminar"  onclick="recuperarContacto(<?php echo $f[0]; ?>)"  class="btn btn-warning fas fa-times"  title="Eliminar Campaña"></button></td>
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

<script src="./views/app/js/filtropapelera.js"></script>