<?php
$db = new Conexion();
$id_usuario = $_SESSION['app_id'];
$sql5 = $db ->query("SELECT Id_Cuenta, Nombre FROM cuenta_cliente WHERE fk_Id_usuario = '$id_usuario' AND Estado = 1");
 ?>
<div class="modal fade" id="contactoMod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="_AJAX_CONTACTOACT_"></div>
      <div class="modal-body" onkeypress="return runScriptActualicarCont(event)">
        <div class="row">
        <div class="col">
            
         <input type="text" hidden="" id='id1'>
          <label for="nombre">Nombre: *</label>
            <input type="text" id="nombre1" class="form-control" placeholder="Nombre">
        </div>
        <div class="col">
          <label for="apellido">Apellido: *</label>
            <input type="text" id="apellido1" class="form-control" placeholder="Apellido">
        </div>
      </div>
      <div class="row">
        <div class="col">
        <label for="tipo">Tipo:</label>
        <select class="custom-select" id="tipo3">
          <option selected value="">--Seleccciona--</option>
          <option value="Potencial">Potencial</option>
          <option value="Fijo">Fijo</option>
        </select>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
        <label for="cuenta1">Cuenta: </label>
          <select class="custom-select" id="cuenta1">
          <option selected value="">--Seleccciona--</option>
          <?php while($f = $db->recorrer($sql5)){ ?>
          <option value="<?php echo $f[0]; ?>"><?php echo $f[1]; ?></option>
        <?php } ?>
        </select>
        </div>
        <div class="col">
        <label for="email">Email: *</label>
            <input type="email" id="email1" class="form-control" placeholder="Email">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          <label for="telefono">Telefono: *</label>
            <input type="text" id="telefono1" class="form-control" placeholder="Telefono">
        </div>
        <div class="col">
          <label for="telefono2">Telefono 2 :</label>
            <input type="text" id="telefono21" class="form-control" placeholder="Telefono 2">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          <label for="celular">Celular :</label>
            <input type="text" id="celular1" class="form-control" placeholder="Celular">
        </div>
        <div class="col">
          <label for="fuente">Fuente :</label>
            <input type="text" id="fuente1" class="form-control" placeholder="Fuente">
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="ActualizarDatos()" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
