<?php

$db = new Conexion();
 $id_usuario = $_SESSION['app_id'];

  if (isset($_POST['id'])) {

  	if ($_POST['id']==2) {
  		$sql = $db ->query("SELECT * FROM cuenta_cliente WHERE Estado = 0 AND fk_Id_usuario = '$id_usuario'");

  	?>
		
		  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Numero de cuenta</th>
            <th>Tipo de cuenta</th>
            <th>Ingresos anueles</th>
            <th>Telefono</th>
            <th>Fax</th>
            <th>Website</th>
            <th>Direccion</th>
            <th>Descripcion</th>
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
            <td><?php  echo $f[3]; ?></td>
            <td><?php  echo $f[4]; ?></td>
            <td><?php  echo $f[5]; ?></td>
            <td><?php  echo $f[6]; ?></td>
            <td><?php  echo $f[7]; ?></td>
            <td><?php  echo $f[8]; ?></td>
            <td><?php  echo $f[10]; ?></td>
            <td> <button type="button" id="eliminar"  onclick="recuperarCuenta(<?php echo $f[0]; ?>)"  class="btn btn-warning fas fa-times"  title="Eliminar"></button></td>
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


  	<?php 
  		# code...
  	}else{
  		$sql = $db ->query("SELECT * FROM contacto_cliente WHERE Estado = 0 AND fk_Id_usuario = '$id_usuario'");

  		?>

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

  		<?php  


  	}

  }else{

		$sql = $db ->query("SELECT * FROM contacto_cliente WHERE Estado = 0 AND fk_Id_usuario = '$id_usuario'");

}



?>