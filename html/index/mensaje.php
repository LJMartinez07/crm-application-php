<!-- Modal -->
<?php 
$db = new Conexion();
$id_usuario = $_SESSION['app_id'];
$sql = $db ->query("SELECT Id_Contacto, Nombre, Apellido FROM contacto_cliente WHERE fk_Id_usuario = '$id_usuario' AND Estado = 1");
 ?>
<div class="modal fade" id="mensaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enviar Mensaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="_AJAX_MENSAJES_"></div>
      <div class="modal-body" onkeypress="return runScriptMensaje(event)">
        <div class="form-group">
          <label for="asunto">Asunto</label>
          <input type="email" class="form-control" id="asunto">
        </div>
        <div class="form-group">
          <label for="descripcion">Descripcion</label>
          <textarea class="form-control" id="descripcion" rows="3"></textarea>
        </div>
        <label for="cliente">Cliente: *</label>
        <select class="custom-select" id="cliente">
          <option selected value=" ">--Seleccciona--</option>
          <?php while($f = $db->recorrer($sql)){ ?>
          <option value="<?php echo $f[0]; ?>"><?php echo $f[1]." ". $f[2]; ?></option>
        <?php } ?>
        </select>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="goMensaje()">Guardar</button>
      </div>
    </div>
  </div>
</div>

<script src="./views/app/js/mensaje.js"></script>
