<div class="card">
  <div class="card-header text-center">
    Perfil
  </div>
  <div class="card-body">
    <h5 class="card-title text-center">Configuracion de perfil</h5>
    <div class="container">
      <br>
    <div class="row">
      <div class="col">
        Nombre: <strong><?php echo $users[$_SESSION['app_id']]['nombre']; ?></strong>
      </div>
      <div class="col">
        Apellido: <strong><?php echo $users[$_SESSION['app_id']]['apellido']; ?></strong>
      </div>
      <div class="col">
      Email: <strong><?php echo $users[$_SESSION['app_id']]['email']; ?></strong>
      </div>
      <div class="col">
        Pais: <strong><?php echo $users[$_SESSION['app_id']]['pais']; ?></strong>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm">
        Dominio: <strong><?php echo $users[$_SESSION['app_id']]['dominio']; ?></strong>
      </div>
      <div class="col-sm">
        Cargo: <strong><?php echo $users[$_SESSION['app_id']]['cargo']; ?></strong>
      </div>
      <div class="col-sm">
        Telefono: <strong><?php echo $users[$_SESSION['app_id']]['telefono']; ?></strong>
      </div>
      <div class="col-sm">
        Celular: <strong><?php echo $users[$_SESSION['app_id']]['celular']; ?></strong>
      </div>

    </div>
  </div>
  </div>
  <div class="card-footer text-muted text-center">
      <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#confUsu">Modificar datos</button>
  </div>
</div>
<?php
require 'confUsuario.php';
 ?>
