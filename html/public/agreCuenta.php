<?php
$db = new Conexion();
$id_usuario = $_SESSION['app_id'];
$sql5 = $db ->query("SELECT Id_Contacto, Nombre, Apellido FROM contacto_cliente WHERE fk_Id_usuario = '$id_usuario' AND Estado = 1");
 ?>
<!-- Modal -->
<div class="modal fade" id="cuenta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar cuenta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="_AJAX_CUENTA_"></div>
      <div class="modal-body" onkeypress="return runScriptCuentaDatos(event)">
      	<div class="row">
    		<div class="col">
    			<label for="nombre">Nombre:*</label>
      			<input type="text" id="nombre" class="form-control" placeholder="Nombre">
    		</div>
    		<div class="col">
    			<label for="no_cuenta">Numero cuenta:*</label>
      			<input type="text" id="no_cuenta" class="form-control" maxlength="21" placeholder="Numero cuenta">

    		</div>
  		</div>
  		<br>
  		<div class="row">
    		<div class="col">
				<label for="tipoc">Tipo de cuenta:*</label>
          <select class="custom-select" id="tipo_cuenta">
            <option selected value="">--Seleccciona--</option>
            <option value="Socio">Socio</option>
            <option value="Inversionista">Inversionista</option>
          </select>
    		</div>
    		<div class="col">
				<label for="ingreso">Ingreso:*</label>
      			<input type="text" id="ingreso" class="form-control" placeholder="Ingresos">
    		</div>
  		</div>
  		<br>
  		<div class="row">
    		<div class="col">
    			<label for="telefono">Telefono:*</label>
      			<input type="text" id="telefono" class="form-control" placeholder="Telefono">
    		</div>
    		<div class="col">
    			<label for="fax">Fax:</label>
      			<input type="text" id="fax" class="form-control" placeholder="Fax">
    		</div>
  		</div>
  		<br>
  		<div class="row">
    		<div class="col">
    			<label for="web">Sitio web:*</label>
      			<input type="text" id="sitio_web" class="form-control" placeholder="sitio Web">
    		</div>
    		<div class="col">
    			<label for="direccion">Dirección:*</label>
      			<input type="text" id="direccion" class="form-control" placeholder="Dirección">
    		</div>
  		</div>
      <div class="row">
      <div class="col">
      <label for="Contacto">Cliente:</label>
        <select class="custom-select" id="contacto">
          <option selected value="">--Seleccciona--</option>
          <?php while($f = $db->recorrer($sql5)){ ?>
          <option value="<?php echo $f[0]; ?>"><?php echo $f[1]." ". $f[2]; ?></option>
        <?php } ?>
        </select>
      </div>
    </div>
      <div class="row">
        <div class="col">
          <label for="codigo">Codigo postal:*</label>
            <input type="text" id="codigo_postal" maxlength="4" class="form-control" placeholder="Codigo postal">
        </div>
      </div>
      <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <textarea class="form-control" id="descripcion" rows="4" placeholder="Descripcion"></textarea>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="goCuentaDatos()">Guardar</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="./views/app/js/CuentaDatos.js"></script>
