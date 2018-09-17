<?php

require './core/models/cards.php';

?>
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
                    <div class="card-body-icon">
                    <i class="fas fa-fw fas fa-user-tie"></i>
                    </div>
                <div class="mr-5"><?php echo $db -> recorrer($sql)[0]; ?> Clientes Potenciales!</div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                    <div class="card-body-icon">
                    <i class="fas fa-fw fas fa-user-tie"></i>
                    </div>
                <div class="mr-5"><?php echo $db -> recorrer($sql1)[0]; ?> Clientes Fijos!</div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
                    <div class="card-body-icon">
                    <i class="fas fa-fw fas fa-hands-helping"></i>
                    </div>
                <div class="mr-5"><?php echo $db -> recorrer($sql2)[0]; ?> Negociaciones!</div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
                    <div class="card-body-icon">
                    <i class="fas fa-bullhorn"></i>
                    </div>
                <div class="mr-5"><?php echo $db -> recorrer($sql3)[0]; ?> Mensajes enviados!</div>
            </div>
        </div>
    </div>
</div>

<?php 
$db -> liberar($sql);
$db -> liberar($sql2);
$db -> liberar($sql3);

//$db ->close();

?>