<?php
$db = new Conexion();

$id_usuario=$_SESSION['app_id'];

if (isset($_POST['id'])) {
  # code...


if ($_POST['id'] == 1 ) {
  $sql = $db -> query("SELECT contrato.*, contacto_cliente.Nombre, contacto_cliente.Apellido
  FROM contrato
  LEFT JOIN contacto_cliente  ON contrato.fk_Id_Contacto = contacto_cliente.Id_Contacto
  AND (contrato.fk_Id_usuario = contacto_cliente.fk_Id_usuario = '$id_usuario') 
  AND  (contrato.Estado = contacto_cliente.Estado)
  WHERE  contacto_cliente.Estado = 1 AND contrato.Confirmacion = 1 ");

  ?>


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
              echo "No aceptada";
            }elseif ($f[7] == 1) {
              echo "Aceptado";
            }else{
              echo "No aceptada";
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
  <?php  
  
  
}elseif ($_POST['id'] == 2) {
   $sql = $db -> query("SELECT contrato.*, contacto_cliente.Nombre, contacto_cliente.Apellido
  FROM contrato
  LEFT JOIN contacto_cliente  ON contrato.fk_Id_Contacto = contacto_cliente.Id_Contacto
  AND (contrato.fk_Id_usuario = contacto_cliente.fk_Id_usuario = '$id_usuario') 
  AND  (contrato.Estado = contacto_cliente.Estado)
  WHERE  contacto_cliente.Estado = 1 AND contrato.Confirmacion = 2 ");

  ?>


  <div class="card-body3">
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
              echo "No aceptada";
            }elseif ($f[7] == 1) {
              echo "Aceptado";
            }else{
              echo "No aceptada";
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
  <?php  


  # code...
}elseif ($_POST['id'] == 3) {
   $sql = $db -> query("SELECT contrato.*, contacto_cliente.Nombre, contacto_cliente.Apellido
  FROM contrato
  LEFT JOIN contacto_cliente  ON contrato.fk_Id_Contacto = contacto_cliente.Id_Contacto
  AND (contrato.fk_Id_usuario = contacto_cliente.fk_Id_usuario = '$id_usuario') 
  AND  (contrato.Estado = contacto_cliente.Estado)
  WHERE  contacto_cliente.Estado = 1 AND contrato.Confirmacion = 0 ");

  ?>


  <div class="card-body3">
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
              echo "No aceptada";
            }elseif ($f[7] == 1) {
              echo "Aceptado";
            }else{
              echo "No aceptada";
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
  <?php  
}else{
  $sql = $db -> query("SELECT contrato.*, contacto_cliente.Nombre, contacto_cliente.Apellido
  FROM contrato
  LEFT JOIN contacto_cliente  ON contrato.fk_Id_Contacto = contacto_cliente.Id_Contacto
  AND (contrato.fk_Id_usuario = contacto_cliente.fk_Id_usuario = '$id_usuario') 
  AND  (contrato.Estado = contacto_cliente.Estado)
  WHERE  contacto_cliente.Estado = 1");
   ?>


  <div class="card-body3">
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
              echo "No aceptada";
            }elseif ($f[7] == 1) {
              echo "Aceptado";
            }else{
              echo "No aceptada";
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
  <?php  

}

}

else{
$sql = $db -> query("SELECT contrato.*, contacto_cliente.Nombre, contacto_cliente.Apellido
  FROM contrato
  LEFT JOIN contacto_cliente  ON contrato.fk_Id_Contacto = contacto_cliente.Id_Contacto
  AND (contrato.fk_Id_usuario = contacto_cliente.fk_Id_usuario = '$id_usuario') 
  AND  (contrato.Estado = contacto_cliente.Estado)
  WHERE  contacto_cliente.Estado = 1");




 
  
}

  
    



?>