<!-- Modal -->
<div class="modal fade" id="cuenta1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar cuenta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="_AJAX_CUENTAM_"></div>
      <div class="modal-body" onkeypress="return runScriptActualicarCuenta(event)">
      	<div class="row">
    		<div class="col">
          <input type="text" id="idCuenMo"  hidden="">
    			<label for="nombre">Nombre: *</label>
      			<input type="text" id="nombreCuenMo" class="form-control" placeholder="Nombre">
    		</div>
    		<div class="col">
    			<label for="no_cuenta">Numero de cuenta: *</label>
      			<input type="text" id="no_cuentaCuenMo" class="form-control" placeholder="Numero de cuenta">
    		</div>
  		</div>
  		<br>
  		<div class="row">
    		<div class="col">
				<label for="tipoc">Tipo de cuenta: *</label>
          <select class="custom-select" id="tipo_cuentaCuenMo">
            <option selected value="">--Seleccciona--</option>
            <option value="Socio">Socio</option>
            <option value="Inversionista">Inversionista</option>
          </select>
    		</div>
    		<div class="col">
				<label for="ingreso">Ingreso: *</label>
      			<input type="email" id="ingresoCuenMo" class="form-control" placeholder="Ingresos">
    		</div>
  		</div>
  		<br>
  		<div class="row">
    		<div class="col">
    			<label for="telefono">Telefono: *</label>
      			<input type="text" id="telefonoCuenMo" class="form-control" placeholder="Telefono">
    		</div>
    		<div class="col">
    			<label for="fax">Fax: </label>
      			<input type="text" id="faxCuenMo" class="form-control" placeholder="Fax">
    		</div>
  		</div>
  		<br>
  		<div class="row">
    		<div class="col">
    			<label for="web">Sitio web: *</label>
      			<input type="text" id="sitio_webCuenMo" class="form-control" placeholder="Sitio Web">
    		</div>
    		<div class="col">
    			<label for="direccion">Dirección: *</label>
      			<input type="text" id="direccionCuenMo" class="form-control" placeholder="Dirección">
    		</div>
  		</div>
      <div class="row">
        <div class="col">
          <label for="codigo">Codigo postal: *</label>
            <input type="text" id="codigo_postalCuenMo" class="form-control" placeholder="Codigo postal">
        </div>
      </div>
      <div class="form-group">
        <label for="descripcionCuenMo">Descripcion</label>
        <textarea class="form-control" id="descripcionCuenMo" rows="4" placeholder="Descripcion"></textarea>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="actualizardatoscuenta()">Guardar</button>
      </div>
    </div>
  </div>
</div>
