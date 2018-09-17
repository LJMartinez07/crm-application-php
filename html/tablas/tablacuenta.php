<?php
	require './core/models/Cuenta.php'; 

?>
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Lista de Cuenta
    <div class="" style="float:right;clear:left;">
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#cuenta" title="Agregar Contacto"><i class="fas fa-user-plus"></i></button>
        

    </div>

 
  </div>

  <div id="_AJAX_CUENTADEL_"></div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Numero de cuenta</th>
            <th>Tipo de cuenta</th>
            <th>Ingresos</th>
            <th>Telefono</th>
            <th>Fax</th>
            <th>Website</th>
            <th>Direccion</th>
            <th>Codigo postal</th>
            <th>Descripcion</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while($f = $db->recorrer($sql)){
              $data = $f[0]."||".$f[1]."||".$f[2]."||".$f[3]."||".$f[4]."||".$f[5]."||".$f[6]."||".$f[7]."||".$f[8]."||".$f[9]."||".$f[10];


          ?>
          <tr>
            <td><?php echo $f[1]; ?></td>
            <td><?php  echo $f[2]; ?></td>
            <td><?php  echo $f[3]; ?></td>
            <td><?php  echo $f[4]; ?></td>
            <td><?php  echo $f[5]; ?></td>
            <td><?php  echo $f[6]; ?></td>
            <td><?php  echo $f[7]; ?></td>
            <td><?php  echo $f[8]; ?></td>
            <td><?php  echo $f[9]; ?></td>
            <td><?php  echo $f[10]; ?></td>
            <td> <button type="button" id="modificar"  class="btn btn-info fas fa-edit" data-toggle="modal" data-target="#cuenta1" onclick="EnviarDatosModificarCuen('<?php echo $data;?>')" title="Agregar Contacto"></button></td>
            <td> <button type="button" id="eliminar"  onclick="EliminarPreguntar(<?php echo $f[0]; ?>)"  class="btn btn-warning fas fa-times"  title="Eliminar"></button></td>
          </tr>
          <?php
          } 

          
          $db->close();?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Actualizado <?php echo  date('d-m-Y h:i:s'); ?></div>
</div>
</div>
<?php  

if (isset($_GET['s'])) {

  ?>
  <script>
  alertify.success('Cuenta eliminada');
</script>
  <?php 


  
}
 include './html/index/modificarCuent.php';

?>