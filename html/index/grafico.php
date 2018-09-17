
<?php 

$db = new conexion();
//SELECT COUNT(*) FROM contrato WHERE Confirmacion = 1 AND fk_Id_usuario = 1
$id = $_SESSION['app_id'];

$sql = $db->query("SELECT COUNT(*) FROM contrato WHERE Confirmacion = 1 AND fk_Id_usuario = '$id'");
$sql2 = $db->query("SELECT COUNT(*) FROM contrato WHERE Confirmacion = 0 AND fk_Id_usuario = '$id'");
$sql3 = $db->query("SELECT COUNT(*) FROM contrato WHERE Confirmacion = 2 AND fk_Id_usuario = '$id'");
$sql4 = $db->query("SELECT COUNT(*) FROM contacto_cliente WHERE fk_id_usuario = '$id' and Estado = 1 and Tipo = 'Potencial'");
$sql5 = $db->query("SELECT COUNT(*) FROM contacto_cliente WHERE fk_id_usuario = '$id' and Estado = 1 and tipo = 'Fijo'");

#Sql Para el grafico de ofertas

$sql7 = $db->query("SELECT COUNT(*) FROM ofertas  WHERE Confirmacion = 1 AND fk_Id_usuario = '$id'");#Aceptadas
$sql8 = $db->query("SELECT COUNT(*) FROM ofertas WHERE Confirmacion = 0 AND fk_Id_usuario = '$id'"); #En proceso
$sql9 = $db->query("SELECT COUNT(*) FROM ofertas WHERE Confirmacion = 2 AND fk_Id_usuario = '$id'");#No aceptadas
?>


      <!-- Breadcrumbs-->
      <!-- Area Chart Example-->
          <input type="hidden" id="aceptado" value="<?php echo $db -> recorrer($sql)[0]; ?>">
          <input type="hidden" id="proceso" value="<?php echo $db -> recorrer($sql2)[0]; ?>">
          <input type="hidden" id="rechazado" value="<?php echo $db -> recorrer($sql3)[0]; ?>">
          <input type="hidden" id="potencial" value="<?php echo $db -> recorrer($sql4)[0]; ?>">
          <input type="hidden" id="fijo" value="<?php echo $db -> recorrer($sql5)[0]; ?>">


             <!--Valores para graficos de ofertas-->
           <input type="hidden" id="aceptadofert" value="<?php echo $db -> recorrer($sql7)[0]; ?>">
          <input type="hidden" id="procesofert" value="<?php echo $db -> recorrer($sql8)[0]; ?>">
          <input type="hidden" id="rechazadofert" value="<?php echo $db -> recorrer($sql9)[0]; ?>">
      
<div class="row">
        <div class="col-lg-4">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> Grafico de Negociaciones</div>
            <div class="card-body">
              <canvas id="myPieChart" width="100%" height="100"></canvas>
            </div>
            <div class="card-footer small text-muted">Actualizado por ultima vez:  <?php echo date('d-m-Y h:i:s'); ?></div>
          </div>
        </div>
        
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Graficos de Clientes</div>
            <div class="card-body">
              <canvas id="myBarChart" width="100" height="50"></canvas>
            </div>
            <div class="card-footer small text-muted">Actualizado por ultima vez:  <?php echo date('d-m-Y h:i:s'); ?></div>
          </div>
        </div>
</div>
<div class="col-lg-4">
  <!-- Example Pie Chart Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-pie-chart"></i> Grafico de Ofertas</div>
    <div class="card-body">
      <canvas id="myPieChart1" width="100%" height="100"></canvas>
    </div>
    <div class="card-footer small text-muted">Actualizado por ultima vez:  <?php echo date('d-m-Y h:i:s'); ?></div>
  </div>
</div>


<?php 
$db -> liberar($sql);
$db -> liberar($sql2);
$db -> liberar($sql3);
$db -> liberar($sql4);
$db -> liberar($sql5);
$db -> liberar($sql7);
$db -> liberar($sql8);
$db -> liberar($sql9);

//$db ->close();

 ?>