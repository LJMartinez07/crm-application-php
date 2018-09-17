


<div class="card mb-3">
  <div id="_AJAX_CONTRATO_"></div>
  <div class="card-header">
    <i class="fa fa-table"></i> Lista de ofertas
    <div class="" style="float:right;clear:left;">
       <div class="btn-group" role="group" aria-label="Basic example">
        <button onclick="Todos()" type="button" class="btn btn-secondary">Todos</button>
  <button onclick="Aceptados()" type="button" class="btn btn-secondary">Aceptados</button>
  <button onclick="Proceso()" type="button" class="btn btn-secondary">En Proceso</button>
  <button onclick="Cancelados()" type="button" class="btn btn-secondary">Cancelados</button>
</div>
         <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#oferta" title="Oferta"><i class="fas fa-hand-holding-usd"></i></button>
    </div>
  </div>
  <div id="_AJAX_FILTROOFERTA_" >
  <?php require './core/bin/ajax/goFiltrofert.php'; ?>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nombre de producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Descuento</th>
            <th>Descripcion de venta</th>
            <th>Fecha Fin</th>
            <th>Descripcion de garantia</th>
            <th>Contacto</th>
            <th>Confirmacion</th>
            
          </tr>
        </thead>
       
       
        <tbody>
          <?php
          while($f = $db->recorrer($sql)){
           

          ?>
          <tr>
            <td><?php echo $f[1]; ?></td>
            <td><?php  echo $f[2]; ?></td>
            <td><?php  echo $f[3]; ?></td>
            <td><?php  echo $f[4]; ?></td>
            <td><?php  echo $f[5]; ?></td>
            <td><?php  echo $f[8]; ?></td>
            <td><?php  echo $f[7]; ?></td>

            <td><?php echo $f[14].' '.$f[15]; ?></td>
            <td><?php 

            if ($f[9] == 0) {
              echo "Proceso";
            }elseif ($f[9] == 1) {
              echo "Aceptado";
            }else{
              echo "No aceptado";
            }


            ?></td>
           
          
           
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
<script src="./views/app/js/filtrofert.js"></script>

<?php 


include './html/index/oferta.php'
 ?>