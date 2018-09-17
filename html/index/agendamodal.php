<div class="modal fade" id="agenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Actividad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="_AJAX_ACTIVIDAD_"></div>
      <div class="modal-body" onkeypress="return runScriptAgenda(event)">
        <div class="row">
        <div class="col">
          <label for="asunto">Asunto: *</label>
            <input type="text" id="asunto" class="form-control" placeholder="Asunto">
        </div>
        <div class="col">
          <label for="descripcion">Descripción: *</label>
            <textarea type="text" id="descripcion" class="form-control" placeholder="Descripción"></textarea>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
        <label for="fecha">Fecha: *</label>
            <input type="datetime-local" id="fecha" class="form-control" placeholder="Fecha">
        </div>
        <?php
        
        if(isset($_SESSION['app_id'])){
          ?>
          <div class="col">
          <label for="empleado">¿Para quíen?: *</label>
          <select name="" id="empleado" class="form-control">
              <option value=-1>Todos</option>
              <option value="0">Para mí</option>
              <?php while($o = $db->recorrer($sqlemp)){ ?>
              <option value="<?php echo $o[0]; ?>"><?php echo $o[1]." ". $o[2]; ?></option>
              <?php } ?>
          </select>                
      </div>
      <?php
        }elseif(isset($_SESSION['app_idemp'])){

        }
        ?>

      </div>
      <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="goAgenda()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<script src="./views/app/js/agenda.js"></script>
