<?php 
$db = new Conexion();
 $id_usuario = $_SESSION['app_id'];
if (isset($_POST['id'])) {

	if ($_POST['id'] == 1) {
		$sql = $db ->query("SELECT contacto_cliente.*, cuenta_cliente.Nombre
  		FROM contacto_cliente 
  		LEFT JOIN cuenta_cliente  ON contacto_cliente.Cuenta = cuenta_cliente.Id_Cuenta
  		AND (contacto_cliente.fk_Id_usuario = cuenta_cliente.fk_Id_usuario = '$id_usuario') 
  		AND  (cuenta_cliente.Estado = contacto_cliente.Estado)
  		WHERE  contacto_cliente.Estado = 1 AND contacto_cliente.Tipo = 'Fijo'");
		?>
		<div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cuenta</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Telefono_ex</th>
            <th>Celular</th>
            <th>Fuente</th>
            <th>Tipo</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
       
       
        <tbody>
          <?php
          while($f = $db->recorrer($sql)){
            $data = $f[0]."||".$f[1]."||".$f[2]."||".$f[3]."||".$f[4]."||".$f[5]."||".$f[6]."||".$f[7]."||".$f[8]."||".$f[9];

          ?>
          <tr>
            <td><?php echo $f[1]; ?></td>
            <td><?php  echo $f[2]; ?></td>
            <td><?php  echo $f[13]; ?></td>
            <td><?php  echo $f[4]; ?></td>
            <td><?php  echo $f[5]; ?></td>
            <td><?php  echo $f[6]; ?></td>
            <td><?php  echo $f[7]; ?></td>
            <td><?php  echo $f[8]; ?></td>
            <td><?php echo $f[9]; ?></td>
            <td> <button type="button" id="modificar"  class="btn btn-info fas fa-edit" data-toggle="modal" data-target="#contactoMod" onclick="EnviarDatosContactoMod('<?php echo $data;?>')" title="Agregar Contacto"></button></td>
            <td> <button type="button" id="eliminar"  onclick="EliminarCont(<?php echo $f[0]; ?>)"  class="btn btn-warning fas fa-times"  title="Eliminar"></button></td>
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
	}elseif ($_POST['id'] == 2) {
		$sql = $db ->query("SELECT contacto_cliente.*, cuenta_cliente.Nombre
  		FROM contacto_cliente 
  		LEFT JOIN cuenta_cliente  ON contacto_cliente.Cuenta = cuenta_cliente.Id_Cuenta
  		AND (contacto_cliente.fk_Id_usuario = cuenta_cliente.fk_Id_usuario = '$id_usuario') 
  		AND  (cuenta_cliente.Estado = contacto_cliente.Estado)
  		WHERE  contacto_cliente.Estado = 1  AND contacto_cliente.Tipo = 'Potencial'");
		?>
		<div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cuenta</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Telefono_ex</th>
            <th>Celular</th>
            <th>Fuente</th>
            <th>Tipo</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
       
       
        <tbody>
          <?php
          while($f = $db->recorrer($sql)){
            $data = $f[0]."||".$f[1]."||".$f[2]."||".$f[3]."||".$f[4]."||".$f[5]."||".$f[6]."||".$f[7]."||".$f[8]."||".$f[9];

          ?>
          <tr>
            <td><?php echo $f[1]; ?></td>
            <td><?php  echo $f[2]; ?></td>
            <td><?php  echo $f[13]; ?></td>
            <td><?php  echo $f[4]; ?></td>
            <td><?php  echo $f[5]; ?></td>
            <td><?php  echo $f[6]; ?></td>
            <td><?php  echo $f[7]; ?></td>
            <td><?php  echo $f[8]; ?></td>
            <td><?php echo $f[9]; ?></td>
            <td> <button type="button" id="modificar"  class="btn btn-info fas fa-edit" data-toggle="modal" data-target="#contactoMod" onclick="EnviarDatosContactoMod('<?php echo $data;?>')" title="Agregar Contacto"></button></td>
            <td> <button type="button" id="eliminar"  onclick="EliminarCont(<?php echo $f[0]; ?>)"  class="btn btn-warning fas fa-times"  title="Eliminar"></button></td>
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
	}else{

		$sql = $db ->query("SELECT contacto_cliente.*, cuenta_cliente.Nombre
  	FROM contacto_cliente 
  	LEFT JOIN cuenta_cliente  ON contacto_cliente.Cuenta = cuenta_cliente.Id_Cuenta
  	AND (contacto_cliente.fk_Id_usuario = cuenta_cliente.fk_Id_usuario = '$id_usuario') 
  	AND  (cuenta_cliente.Estado = contacto_cliente.Estado)
  	WHERE  contacto_cliente.Estado = 1 ");
  	?>

  	<div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cuenta</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Telefono_ex</th>
            <th>Celular</th>
            <th>Fuente</th>
            <th>Tipo</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
       
       
        <tbody>
          <?php
          while($f = $db->recorrer($sql)){
            $data = $f[0]."||".$f[1]."||".$f[2]."||".$f[3]."||".$f[4]."||".$f[5]."||".$f[6]."||".$f[7]."||".$f[8]."||".$f[9];

          ?>
          <tr>
            <td><?php echo $f[1]; ?></td>
            <td><?php  echo $f[2]; ?></td>
            <td><?php  echo $f[13]; ?></td>
            <td><?php  echo $f[4]; ?></td>
            <td><?php  echo $f[5]; ?></td>
            <td><?php  echo $f[6]; ?></td>
            <td><?php  echo $f[7]; ?></td>
            <td><?php  echo $f[8]; ?></td>
            <td><?php echo $f[9]; ?></td>
            <td> <button type="button" id="modificar"  class="btn btn-info fas fa-edit" data-toggle="modal" data-target="#contactoMod" onclick="EnviarDatosContactoMod('<?php echo $data;?>')" title="Agregar Contacto"></button></td>
            <td> <button type="button" id="eliminar"  onclick="EliminarCont(<?php echo $f[0]; ?>)"  class="btn btn-warning fas fa-times"  title="Eliminar"></button></td>
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
	# code...
}else{

		$sql = $db ->query("SELECT contacto_cliente.*, cuenta_cliente.Nombre
  	FROM contacto_cliente 
  	LEFT JOIN cuenta_cliente  ON contacto_cliente.Cuenta = cuenta_cliente.Id_Cuenta
  	AND (contacto_cliente.fk_Id_usuario = cuenta_cliente.fk_Id_usuario = '$id_usuario') 
  	AND  (cuenta_cliente.Estado = contacto_cliente.Estado)
  	WHERE  contacto_cliente.Estado = 1 ");

	}



if (isset($_POST['buscar'])) {

  $buscar =$_POST['buscar'];


  $sql = $db ->query("SELECT contacto_cliente.*, cuenta_cliente.Nombre
    FROM contacto_cliente 
    LEFT JOIN cuenta_cliente  ON contacto_cliente.Cuenta = cuenta_cliente.Id_Cuenta
    AND (contacto_cliente.fk_Id_usuario = cuenta_cliente.fk_Id_usuario = '$id_usuario') 
    AND  (cuenta_cliente.Estado = contacto_cliente.Estado)
    AND (contacto_cliente.Estado = 1)
    WHERE contacto_cliente.NombreCompleto = '$buscar' OR contacto_cliente.Nombre = '$buscar' OR contacto_cliente.Apellido = '$buscar' OR contacto_cliente.Telefono = '$buscar' OR contacto_cliente.Email = '$buscar' ");



    ?>


    <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cuenta</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Telefono_ex</th>
            <th>Celular</th>
            <th>Fuente</th>
            <th>Tipo</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
       
       
        <tbody>
          <?php
          while($f = $db->recorrer($sql)){
            $data = $f[0]."||".$f[1]."||".$f[2]."||".$f[3]."||".$f[4]."||".$f[5]."||".$f[6]."||".$f[7]."||".$f[8]."||".$f[9];

          ?>
          <tr>
            <td><?php echo $f[1]; ?></td>
            <td><?php  echo $f[2]; ?></td>
            <td><?php  echo $f[13]; ?></td>
            <td><?php  echo $f[4]; ?></td>
            <td><?php  echo $f[5]; ?></td>
            <td><?php  echo $f[6]; ?></td>
            <td><?php  echo $f[7]; ?></td>
            <td><?php  echo $f[8]; ?></td>
            <td><?php echo $f[9]; ?></td>
            <td> <button type="button" id="modificar"  class="btn btn-info fas fa-edit" data-toggle="modal" data-target="#contactoMod" onclick="EnviarDatosContactoMod('<?php echo $data;?>')" title="Agregar Contacto"></button></td>
            <td> <button type="button" id="eliminar"  onclick="EliminarCont(<?php echo $f[0]; ?>)"  class="btn btn-warning fas fa-times"  title="Eliminar"></button></td>
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
}

 ?>