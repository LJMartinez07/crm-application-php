
        
        
       
        
        <?php 

        if (isset($_SESSION['app_id'])) {

          ?>
           <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="?view=dashboard&inicio">FortUp</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
          <a class="nav-link" href="?view=dashboard&inicio">
            <i class="fas fa-chart-pie"></i>
            <span class="nav-link-text">Inicio</span>
          </a>
        </li>

           <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tarea">
          <a class="nav-link" href="?view=dashboard&tarea">
            <i class="fa fa-fw far fa-clipboard"></i>
            <span class="nav-link-text">Tarea</span>
          </a>
        </li>
          

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Contacto">
          <a class="nav-link" href="?view=dashboard&contacto">
            <i class="fa fa-fw far fa-address-book"></i>
            <span class="nav-link-text">Contacto</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cuenta">
          <a class="nav-link" href="?view=dashboard&cuenta">
            <i class="fa fa-fw fas fa-user-tie"></i>
            <span class="nav-link-text">Cuenta</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Negociación">
          <a class="nav-link" href="?view=dashboard&Contrato">
            <i class="fa fa-fw far fa-handshake"></i>
            <span class="nav-link-text">Negociación</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Campaña">
          <a class="nav-link" href="?view=dashboard&campana">
            <i class="fa fa-fw fas fa-bullhorn"></i>
            <span class="nav-link-text">Campaña</span>
          </a>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ofertas">
          <a class="nav-link" href="?view=dashboard&ofertas">
            <i class="fas fa-chart-pie"></i>
            <span class="nav-link-text">ofertas</span>
          </a>
        </li>

        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Configuración">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fas fa-cog"></i>
            <span class="nav-link-text">configuración</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="?view=dashboard&perfil">Perfil</a>
            </li>
            <li>
              <a data-toggle="modal" href="" data-target="#empleado">Agregar empleados</a>
            </li>
            <li>
              <a href="?view=dashboard&veremp">Ver empleados</a>
            </li>
          </ul>
        </li>
          <?php 
          
        }

        if (isset($_SESSION['app_idemp'])) {
          ?>
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="?view=dashboard&hola">ADG CRM</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
          <a class="nav-link" href="?view=dashboard&hola">
            <i class="fa fa-fw fas fa-home"></i>
            <span class="nav-link-text">Inicio</span>
          </a>
        </li>

           <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tarea">
          <a class="nav-link" href="?view=dashboard&tareaemp">
            <i class="fa fa-fw far fa-clipboard"></i>
            <span class="nav-link-text">Tarea</span>
          </a>
        </li>

          
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Configuración">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
              <i class="fa fa-fw fas fa-cog"></i>
              <span class="nav-link-text">configuración</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMulti">
              <li>
                <a href="?view=dashboard&perfilemp">Perfil</a>
              </li>
            </ul>
          </li>
          <?php  


        }


        


        ?>
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>



      <ul class="navbar-nav ml-auto">

        <li class="nav-item ">
          <a class="nav-link" id="" href="?view=dashboard&agenda" title="Agenda">
            <i class="fa fa-fw fas fa-book"></i>
            <span class="d-lg-none">Agenda
              <span class="badge badge-pill badge-primary"></span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
            </span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" id="" href=""data-toggle="modal" data-target="#exampleModalLong" title="Chat">
            <i class="fas fa-comments"></i>
            <span class="d-lg-none">Chat
              <span class="badge badge-pill badge-primary"></span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
            </span>
          </a>
        </li>


   

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-3" id="hora" href="#" data-toggle="dropdown" aria-haspopup=" aria-expanded="false">
            <i class="fa fa-fw fas fa-clock"></i>
            <span class="d-lg-none">Hora y Fecha
              <span class="badge badge-pill badge-primary"></span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="hora">
            <h6 class="dropdown-header">Hora y Fecha:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
            <strong>Santiago De Los Caballeros </strong>
            <span class="small float-right text-muted"></span>
            <div class="dropdown-message small">Republica Dominicana</div>
            <div style="text-align:center;padding:1em 0;"><iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FSanto_Domingo" width="100%" height="90" frameborder="0" seamless></iframe> </div>
            </a>
            <a class="dropdown-item small" href="#"></a>
          </div>
        </li>

  
        <li class="nav-item ">
          <a class="nav-link" id="" href="?view=dashboard&papelera"  title="Papelera">
            <i class="far fa-trash-alt"></i>
            <span class="d-lg-none">Papelera
              <span class="badge badge-pill badge-primary"></span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
            </span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#logout">
            <i class="fa fa-fw fas fa-sign-out-alt"></i>Cerrar Sesion</a>
        </li>
      </ul>
    </div>
  </nav>
