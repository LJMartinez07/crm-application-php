<!-- Modal -->
<div class="modal fade" id="confUsu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="_AJAX_CONFUSU_"></div>
      <div class="modal-body" onkeypress="runScriptModiPerfil(event)">
      	<div class="row">
    		<div class="col">
    			<label for="nombre">Nombre: *</label>
      			<input type="text" id="nombre" value="<?php echo $users[$_SESSION['app_id']]['nombre']; ?>" class="form-control" placeholder="Nombre">
    		</div>
    		<div class="col">
    			<label for="apellido">Apellido: *</label>
      			<input type="text" id="apellido" value="<?php echo $users[$_SESSION['app_id']]['apellido']; ?>" class="form-control" placeholder="Apellido">
    		</div>
  		</div>
  		<br>
  		<div class="row">
    		<div class="col">
				<label for="pais">Pais: *</label>
      			<input type="text" id="pais" value="<?php echo $users[$_SESSION['app_id']]['pais']; ?>" class="form-control" placeholder="Pais">
    		</div>
    		<div class="col">
				<label for="email">Email: *</label>
      			<input type="email" id="email" value="<?php echo $users[$_SESSION['app_id']]['email']; ?>" class="form-control" placeholder="Email">
    		</div>
  		</div>
  		<br>
  		<div class="row">
    		<div class="col">
    			<label for="telefono">Telefono: *</label>
      			<input type="text" id="telefono" value="<?php echo $users[$_SESSION['app_id']]['telefono']; ?>" class="form-control" placeholder="Telefono">
    		</div>
    		<div class="col">
    			<label for="celular">Celular:</label>
      			<input type="text" id="celular" value="<?php echo $users[$_SESSION['app_id']]['celular']; ?>" class="form-control" placeholder="Celular">
    		</div>
  		</div>
  		<br>
  		<div class="row">
    		<div class="col">
    			<label for="dominio">Dominio:</label>
      			<input type="text" id="dominio" value="<?php echo $users[$_SESSION['app_id']]['dominio']; ?>" class="form-control" placeholder="Dominio">
    		</div>
    		<div class="col">
    			<label for="cargo">Cargo:</label>
      			<input type="text" id="cargo" value="<?php echo $users[$_SESSION['app_id']]['cargo']; ?>" class="form-control" placeholder="Cargo">
    		</div>
  		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="goModificarPerf()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

