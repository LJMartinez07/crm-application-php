<?php

$db = new Conexion();
$id = $_SESSION['app_id'];
if (isset($_POST['id'])) {

	if ($_POST['id'] == 1 ) {
		#Consulta sql
		$sql =$db -> query("SELECT ofertas.*, contacto_cliente.Nombre, contacto_cliente.Apellido
  							FROM ofertas
  							LEFT JOIN contacto_cliente  ON ofertas.fk_Id_Contacto = contacto_cliente.Id_Contacto
  							AND (ofertas.fk_Id_usuario = contacto_cliente.fk_Id_usuario = '$id') 
  							AND  (ofertas.Estado = contacto_cliente.Estado)
  							WHERE  contacto_cliente.Estado = 1 AND ofertas.Confirmacion = 1");
		


	?>

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






	<?php 
		
	}elseif ($_POST['id'] == 2 ) {
		#Consulta sql
		$sql =$db -> query("SELECT ofertas.*, contacto_cliente.Nombre, contacto_cliente.Apellido
  							FROM ofertas
  							LEFT JOIN contacto_cliente  ON ofertas.fk_Id_Contacto = contacto_cliente.Id_Contacto
  							AND (ofertas.fk_Id_usuario = contacto_cliente.fk_Id_usuario = '$id') 
  							AND  (ofertas.Estado = contacto_cliente.Estado)
  							WHERE  contacto_cliente.Estado = 1 AND ofertas.Confirmacion = 2");
  	?>
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






	<?php 



		
	}elseif ($_POST['id'] == 3 ) {
		#Consulta sql
		$sql =$db -> query("SELECT ofertas.*, contacto_cliente.Nombre, contacto_cliente.Apellido
  							FROM ofertas
  							LEFT JOIN contacto_cliente  ON ofertas.fk_Id_Contacto = contacto_cliente.Id_Contacto
  							AND (ofertas.fk_Id_usuario = contacto_cliente.fk_Id_usuario = '$id') 
  							AND  (ofertas.Estado = contacto_cliente.Estado)
  							WHERE  contacto_cliente.Estado = 1 AND ofertas.Confirmacion = 0");


		?>

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


		<?php  





	}else{
		#Consulta sql
		$sql =$db -> query("SELECT ofertas.*, contacto_cliente.Nombre, contacto_cliente.Apellido
  							FROM ofertas
  							LEFT JOIN contacto_cliente  ON ofertas.fk_Id_Contacto = contacto_cliente.Id_Contacto
  							AND (ofertas.fk_Id_usuario = contacto_cliente.fk_Id_usuario = '$id') 
  							AND  (ofertas.Estado = contacto_cliente.Estado)
  							WHERE  contacto_cliente.Estado = 1 ");


	?>
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






	<?php 

	}

}else{
	#Consulta sql
	$sql =$db -> query("SELECT ofertas.*, contacto_cliente.Nombre, contacto_cliente.Apellido
					  	FROM ofertas
					  	LEFT JOIN contacto_cliente  ON ofertas.fk_Id_Contacto = contacto_cliente.Id_Contacto
					  	AND (ofertas.fk_Id_usuario = contacto_cliente.fk_Id_usuario = '$id') 
					  	AND  (ofertas.Estado = contacto_cliente.Estado)
					  	WHERE  contacto_cliente.Estado = 1");



}




?>