
<div class="card mb-3">
    <div id="_AJAX_TAREAT_"></div>
    <div class="card-header">
        <i class="fa fa-table"></i> Lista de Tarea
        <div class="" style="float:right;clear:left;">
             <div class="btn-group" role="group" aria-label="Basic example">
        <button onclick="Todas()" type="button" class="btn btn-secondary">Todas</button>
       
  <button onclick="Completada()" type="button" class="btn btn-secondary">Completadas</button>
  <button onclick="Proceso()" type="button" class="btn btn-secondary">En proceso</button>
</div>
            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#tarea" title="Agregar Tarea">
                <i class="far fa-clipboard"></i>
            </button>
        </div>
        <div class="" style="float:right;">
           
            &ensp;
        </div>
    </div>
    <div id="_AJAX_FILTROTAREA_">
    <?php require './core/bin/ajax/goFiltrotarea.php'; ?>
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
</div>
<script src="./views/app/js/filtrotarea.js"></script>
    <div class="card-footer small text-muted">Actualizado
        <?php echo  date('d-m-Y h:i:s'); ?>
    </div>
</div>


<?php


?>



<!-- Modal Tarea-->
<div class="modal fade" id="tarea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tarea</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="_AJAX_TAREA_"></div>
            <div class="modal-body" onkeypress="return runScriptTarea(event)">
                <form>
                    <div class="form-group">
                        <div class="form-group ">
                            <label for="asuntoT">Asunto</label>
                            <input type="text" class="form-control" id="asuntoT" placeholder="Asunto">
                        </div>
                        <div class="form-group ">
                            <label for="descripcionT">Descripción</label>
                            
                              <textarea  id="descripcionT" class="form-control" rows="4" placeholder="Descripción"></textarea>
                        </div>
                        <div class="form-group ">
                            <label for="PrioridadT">Prioridad</label>
                            <select name="" id="PrioridadT" class="form-control">
                                <option value="Alta">Alta</option>
                                <option value="Media">Media</option>
                                <option value="Baja">Baja</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label for="responsableT">Responsable</label>
                            <select name="" id="responsableT" class="form-control">
                                <option value="0">Para mí</option>
                                <?php while($o = $db->recorrer($sqlT)){ ?>
                                <option value="<?php echo $o[0]; ?>"><?php echo $o[1]." ". $o[2]; ?></option>
                                <?php } ?>
                            </select>
                            
                        </div>
                        <div class="form-group ">
                            <label for="FechaLimiteT">Fecha Limite</label>
                            <input type="date" class="form-control" id="FechaLimiteT" placeholder="Fecha Limite">
                        </div>
                        <!--<div class="form-group ">
                            <label for="cursoT">Curso</label>
                            <select name="" id="cursoT" class="form-control">
                                <option value="En Proceso">En proceso</option>
                                <option value="Finalizado">Finalizado</option>
                                <option value="Cancelado">Cancelado</option>
                            </select>
                        </div>-->
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="goTarea()" >Guardar</button>
            </div>
        </div>
    </div>
</div>
<script src="./views/app/js/tarea.js"></script>