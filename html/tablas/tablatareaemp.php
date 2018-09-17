<?php 
  
  require './core/models/TareaEmp.php';

?>
<div class="card mb-3">
    <div id="_AJAX_TAREAEMP_"></div>
    <div class="card-header">
        <i class="fa fa-table"></i> Lista de Tarea
        
        

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
                        <th>Finalizar</th>
                        
                    </tr>
                </thead>


                <tbody>
                    <?php
                        while($f = $db->recorrer($sql)){
                        

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
                            <?php  echo $f[1]; ?>
                        </td>
                        <td>
                            <?php  echo $f[5]; ?>
                        </td>
                        <td>
                            <?php  echo $f[7]; ?>
                        </td>
                        <td>
                            <?php
                            if ($f[7] == 'En Proceso') {
                            ?>

                            <button type="button"  class="btn btn-info far fa-check-square" onclick="CompletarTarea(<?php echo $f[0];?>)" title="Agregar Contacto"></button></td>
                            <?php  

                                 # code...
                             } 


                             ?>

                        
                    </tr>
                    <?php }
                    $db->liberar($sql);
          $db->close();  ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Actualizado
        <?php echo  date('d-m-Y h:i:s'); ?>
    </div>
</div>