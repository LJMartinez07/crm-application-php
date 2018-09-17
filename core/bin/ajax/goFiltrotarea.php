<?php 
$db = new Conexion();
 $id = $_SESSION['app_id'];
if (isset($_POST['id'])) {

	if ($_POST['id'] == 1) {
		 $sql = $db -> query("SELECT tarea.*, empleados.Nombre,empleados.Apellido FROM tarea LEFT JOIN empleados ON tarea.Personasresponsable = empleados.Id_empleados WHERE tarea.fk_id_usuario = '$id' AND tarea.Estado = 1  AND tarea.Curso = 'Completada' ORDER BY `tarea`.`Altaprioridad`  ASC");
  $sqlT = $db -> query("SELECT Id_empleados, Nombre, Apellido FROM empleados WHERE fk_Id_usuario = '$id' AND Estado = 1");
  ?>

  <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Asunto</th>
                        <th>Descripción</th>
                        <th>Alta prioridad</th>
                        <th>Responsables</th>
                        <th>Fecha Limite</th>
                        <th>Curso</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>


                <tbody>
                    <?php
                        while($f = $db->recorrer($sql)){
                        $data = $f[0]."||".$f[1]."||".$f[2]."||".$f[3]."||".$f[4]."||".$f[5]."||".$f[6]."||".$f[7];

                    ?>
                    <tr>
                        <td>
                            <?php echo $f[1]; ?>
                        </td>
                        <td>
                            <?php  echo $f[2]; ?>
                        </td>
                        <td>
                            <?php echo $f[3]; ?>
                        </td>
                        <td>
                        <?php 
                        if ($f[4] == 0) {
                            
                            echo "Para Mí";
                        }else{
                        ?>
                        <?php  echo $f[9] ." ". $f[10]; ?>
                        <?php 
                        }
                         ?>
                        </td>
                        <td>
                            <?php  echo $f[5]; ?>
                        </td>
                        <td>
                            <?php  echo $f[7]; ?>
                        </td>
                        <td>
                            <button type="button" id="eliminar" onclick="preguntarsinoTarea(<?php echo $f[0]; ?>)" class="btn btn-warning fas fa-times" title="Eliminar"></button>
                        </td>
                    </tr>
                    <?php } 
                    $db->liberar($sql);
                     $db->close();


                    ?>
                </tbody>
            </table>
        </div>
    </div>



  <?php  

	}elseif ($_POST['id'] == 2) {
		 $sql = $db -> query("SELECT tarea.*, empleados.Nombre,empleados.Apellido FROM tarea LEFT JOIN empleados ON tarea.Personasresponsable = empleados.Id_empleados WHERE tarea.fk_id_usuario = '$id' AND tarea.Estado = 1 AND tarea.Curso = 'En Proceso' ORDER BY `tarea`.`Altaprioridad`  ASC");
  $sqlT = $db -> query("SELECT Id_empleados, Nombre, Apellido FROM empleados WHERE fk_Id_usuario = '$id' AND Estado = 1" );
		?>
		<div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Asunto</th>
                        <th>Descripción</th>
                        <th>Alta prioridad</th>
                        <th>Responsables</th>
                        <th>Fecha Limite</th>
                        <th>Curso</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>


                <tbody>
                    <?php
                        while($f = $db->recorrer($sql)){
                        $data = $f[0]."||".$f[1]."||".$f[2]."||".$f[3]."||".$f[4]."||".$f[5]."||".$f[6]."||".$f[7];

                    ?>
                    <tr>
                        <td>
                            <?php echo $f[1]; ?>
                        </td>
                        <td>
                            <?php  echo $f[2]; ?>
                        </td>
                        <td>
                            <?php echo $f[3]; ?>
                        </td>
                        <td>
                        <?php 
                        if ($f[4] == 0) {
                            
                            echo "Para Mí";
                        }else{
                        ?>
                        <?php  echo $f[9] ." ". $f[10]; ?>
                        <?php 
                        }
                         ?>
                        </td>
                        <td>
                            <?php  echo $f[5]; ?>
                        </td>
                        <td>
                            <?php  echo $f[7]; ?>
                        </td>
                        <td>
                            <button type="button" id="eliminar" onclick="preguntarsinoTarea(<?php echo $f[0]; ?>)" class="btn btn-warning fas fa-times" title="Eliminar"></button>
                        </td>
                    </tr>
                    <?php } 
                    $db->liberar($sql);
                     $db->close();


                    ?>
                </tbody>
            </table>
        </div>
    </div>

		<?php
	}else{
		 $sql = $db -> query("SELECT tarea.*, empleados.Nombre,empleados.Apellido FROM tarea LEFT JOIN empleados ON tarea.Personasresponsable = empleados.Id_empleados WHERE tarea.fk_id_usuario = '$id' AND tarea.Estado = 1 ORDER BY `tarea`.`Altaprioridad`  ASC");
  $sqlT = $db -> query("SELECT Id_empleados, Nombre, Apellido FROM empleados WHERE fk_Id_usuario = '$id' AND Estado = 1" );

  ?>
  <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Asunto</th>
                        <th>Descripción</th>
                        <th>Alta prioridad</th>
                        <th>Responsables</th>
                        <th>Fecha Limite</th>
                        <th>Curso</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>


                <tbody>
                    <?php
                        while($f = $db->recorrer($sql)){
                        $data = $f[0]."||".$f[1]."||".$f[2]."||".$f[3]."||".$f[4]."||".$f[5]."||".$f[6]."||".$f[7];

                    ?>
                    <tr>
                        <td>
                            <?php echo $f[1]; ?>
                        </td>
                        <td>
                            <?php  echo $f[2]; ?>
                        </td>
                        <td>
                            <?php echo $f[3]; ?>
                        </td>
                        <td>
                        <?php 
                        if ($f[4] == 0) {
                            
                            echo "Para Mí";
                        }else{
                        ?>
                        <?php  echo $f[9] ." ". $f[10]; ?>
                        <?php 
                        }
                         ?>
                        </td>
                        <td>
                            <?php  echo $f[5]; ?>
                        </td>
                        <td>
                            <?php  echo $f[7]; ?>
                        </td>
                        <td>
                            <button type="button" id="eliminar" onclick="preguntarsinoTarea(<?php echo $f[0]; ?>)" class="btn btn-warning fas fa-times" title="Eliminar"></button>
                        </td>
                    </tr>
                    <?php } 
                    $db->liberar($sql);
                     $db->close();


                    ?>
                </tbody>
            </table>
        </div>
    </div>

  <?php 

	}
}else{
	 $sql = $db -> query("SELECT tarea.*, empleados.Nombre,empleados.Apellido FROM tarea LEFT JOIN empleados ON tarea.Personasresponsable = empleados.Id_empleados WHERE tarea.fk_id_usuario = '$id' AND tarea.Estado = 1 ORDER BY `tarea`.`Altaprioridad`  ASC");
  $sqlT = $db -> query("SELECT Id_empleados, Nombre, Apellido FROM empleados WHERE fk_Id_usuario = '$id' AND Estado = 1" );

}


 ?>
