<div class="card">
  <div class="card-header text-center">
    Perfil
  </div>
  <div class="card-body">
    <h5 class="card-title text-center">Configuracion de perfil </h5>
    <div class="container">
      <br>
    <div class="row">
      <div class="col">
        Nombre: <strong><?php echo $emp[$_SESSION['app_idemp']]['nombre']; ?></strong>
      </div>
      <div class="col">
        Apellido: <strong><?php echo $emp[$_SESSION['app_idemp']]['apellido']; ?></strong>
      </div>
      <div class="col">
      Email: <strong><?php echo $emp[$_SESSION['app_idemp']]['email']; ?></strong>
      </div>
      
    </div>
    <br>
    <div class="row">
      
      <div class="col-sm">
        Cargo: <strong><?php echo $emp[$_SESSION['app_idemp']]['cargo']; ?></strong>
      </div>
     

    </div>
  </div>
  </div>
</div>
