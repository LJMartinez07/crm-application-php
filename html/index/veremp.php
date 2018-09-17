<?php
$db = new Conexion();
$id_usuario = $_SESSION['app_id'];
$sql5 = $db ->query("SELECT * FROM empleados WHERE fk_Id_usuario = '$id_usuario' AND Estado = 1");
 ?>

<div class="card">
  <div class="card-header text-center">
    Empleados
  </div>


  <div class="_AJAX_EMP_"></div>
  <div class="card-body">
    <h5 class="card-title text-center">Ver empleados</h5>
    <div class="container">
    <table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
       <th scope="col">Cedula</th>
      <th scope="col">Cargo</th>
      <th scope="col">Modificar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>

    <?php while($f = $db->recorrer($sql5)){
      $data = $f[0]."||".$f[1]."||".$f[2]."||".$f[3]."||".$f[4]."||".$f[6];

     ?>


      <tr>
        <td><?php echo $f[1]; ?></td>
        <td><?php echo $f[2]; ?> </td>
        <td><?php echo $f[3]; ?> </td>
        <td><?php echo $f[4]; ?> </td>
        <td><?php echo $f[6]; ?> </td>
        <td> <button type="button" id="modificar"  class="btn btn-dark" data-toggle="modal" data-target="#Empleado" onclick="EnviarDatosModificarEmp('<?php echo $data;?>')" title="Agregar Contacto">Modificar</button></td>
        <td> <button type="button" id="eliminar"  onclick="EliminarPreguntaEmp(<?php echo $f[0]; ?>)"  class="btn btn-danger eliminar"  title="Eliminar">Eliminar</button></td>
      </tr>
    <?php } ?>
    
  </tbody>
</table>

  </div>
  </div>
</div>

<?php 

include './html/public/modificarEmp.html';

 ?>