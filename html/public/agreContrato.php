<?php
$db = new Conexion();
$id_usuario = $_SESSION['app_id'];
$sql = $db ->query("SELECT Id_Contacto, Nombre, Apellido FROM contacto_cliente WHERE fk_Id_usuario = '$id_usuario' AND Estado = 1");
$sql2 = $db ->query("SELECT Id_campain, Nombre FROM campain WHERE EstadoElim = 1");
?>
<div class="modal fade" id="contrato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Negociones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="_AJAX_CONTRATO_"></div>
      <div class="modal-body" onkeypress="return runScriptContrato(event)">
      	<div class="row">
    		<div class="col">
    			<label for="nombre">Nombre Negociación: *</label>
      			<input type="text" id="nombre" class="form-control" placeholder="Nombre">
    		</div>
    		<div class="col">
    			<label for="T_contrato">Tipo de Negociaciones: *</label>
      			<select  class="custom-select" id="T_contrato">
              <option value="">---Seleccion---</option>
            <option value="Existente">Existente</option>
            <option value="Nuevo">Nuevo</option>
            </select>
    		</div>
  		</div>
  		<br>
  		<div class="row">
    		<div class="col">
				<label for="cantidad">Cantidad de Dinero </label>
      			<input type="number" id="cantidad" class="form-control" placeholder="Cantidad de Dinero">
    		</div>
  		</div>
  		<br>
  		<div class="row">
    		<div class="col">
    			<label for="fechaC">Fecha Cierre: *</label>
      			<input type="DATE" id="fechaC" class="form-control" placeholder="Telefono">
    		</div>
  		</div>
      <div class="row">
      <div class="col">
      <label for="Contacto">Cliente: *</label>
        <select class="custom-select" id="contacto">
          <option selected value="">--Seleccciona--</option>
          <?php while($f = $db->recorrer($sql)){ ?>
          <option value="<?php echo $f[0]; ?>"><?php echo $f[1]." ". $f[2]; ?></option>
        <?php } ?>
        </select>
      </div>
    </div>
      <div class="row">
      <div class="col">
      <label for="campana">Campaña: *</label>
        <select class="custom-select" id="campana">
          <option selected value="">--Seleccciona--</option>
          <?php while($r = $db->recorrer($sql2)){ ?>
          <option value="<?php echo $r[0]; ?>"><?php echo $r[1];?></option>
        <?php } ?>
        </select>
      </div>
    </div>
  		<br>
  		<div class="row">
    		<div class="col">
    			<label for="descripcion">Descripción: *</label>
      			 <textarea class="form-control" id="descripcion" rows="4" placeholder="Descripcion"></textarea>
    		</div>
  		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="goContrato()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<script src="./views/app/js/contrato.js"></script>
<?php 
$db -> liberar($sql);
$db -> liberar($sql2);
$db -> close();  ?>