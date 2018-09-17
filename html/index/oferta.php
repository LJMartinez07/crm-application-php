<!-- Modal -->
<?php 
$db = new Conexion();
$id_usuario = $_SESSION['app_id'];
$sql = $db ->query("SELECT Id_Contacto, Nombre, Apellido FROM contacto_cliente WHERE fk_Id_usuario = '$id_usuario' AND Estado = 1");
 ?>
<div class="modal fade" id="oferta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enviar Oferta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="_AJAX_OFERTA_"></div>
      <div class="modal-body" onkeypress="return runScriptOferta(event)">
       
          <div class="row">
    <div class="col-sm">
       <div class="form-group">
          <label for="NombreProdu">Nombre del producto: *</label>
          <input type="email"  class="form-control" id="NombreProdu">
        </div>
      </div>
      <div class="col-sm">
         <div class="form-group">
          <label for="PrecioProdu">Precio del producto: *</label>
          <input type="number"  class="form-control" id="PrecioProdu">
        </div>
      </div>
      </div>
        <div class="row">
    <div class="col-sm">
         <div class="form-group">
          <label for="Cantidad">Cantidad: *</label>
          <input type="number" class="form-control" id="Cantidad">
        </div>
      </div>
        <div class="col-sm">
          <label for="Descuento">Descuento</label>
         <div class="input-group mb-3">

  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">%</span>
  </div>
  <input type="number" id="Descuento" class="form-control" placeholder=""  aria-describedby="basic-addon1">
</div>
      </div>
    </div>
        <div class="form-group">
          <label for="DescripcionVen">Descripcion de la venta: *</label>
          <textarea class="form-control" id="DescripcionVen" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="Bonus">Bonus</label>
          <textarea class="form-control" id="Bonus" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="DescripcionGarantia">Descripcion de la garantia</label>
          <textarea class="form-control" id="DescripcionGarantia" rows="3"></textarea>
        </div>
         <div class="form-group">
          <label for="FechaFin">Fecha Fin: *</label>
       <input type="date" class="form-control"id="FechaFin">
        </div>

        

        
        <label for="clienteoferta">Contacto: *</label>
        <select class="custom-select" id="clienteoferta">
          <option selected value=" ">--Seleccciona--</option>
          <?php while($f = $db->recorrer($sql)){ ?>
          <option value="<?php echo $f[0]; ?>"><?php echo $f[1]." ". $f[2]; ?></option>
        <?php } ?>
        </select>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="goOferta()">Guardar</button>
      </div>
    </div>
  </div>
</div>

<script src="./views/app/js/oferta.js"></script>
