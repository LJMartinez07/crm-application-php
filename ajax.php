<?php
if ($_POST) {
	require 'core/core.php';

	switch (isset($_GET['mode']) ? $_GET['mode']: null){

		case 'chat':
			require 'core/bin/ajax/goChat.php';
			break;
		case 'filtrofer':
			require 'core/bin/ajax/goFiltrofert.php';
			break;
		case 'oferta':
			require 'core/bin/ajax/goOferta.php';
			break;
		case 'recuenta':
			require 'core/bin/ajax/goRecuperarCuenta.php';
			break;
				case 'recontacto':
			require 'core/bin/ajax/goRecuperarContacto.php';
			break;
		case 'filtropape':
			require 'core/bin/ajax/goFiltroPapelera.php';
			break;

		case 'mensaje':
			require 'core/bin/ajax/goMensaje.php';
			break;
		case 'chatemp':
			require 'core/bin/ajax/goChatemp.php';
			break;

		case 'login':
			require 'core/bin/ajax/goLogin.php';
			break;

		case 'loginemp':
			require 'core/bin/ajax/goLoginEmp.php';
			break;

		case 'reg':
			require 'core/bin/ajax/goReg.php';
			break;

		case 'lostpass':
			require 'core/bin/ajax/goLostpass.php';
			break;
		case 'codigo':
			require 'core/bin/ajax/goCodigo.php';
			break;
		case 'rest':
			require 'core/bin/ajax/goRest.php';
			break;
		case 'cuentadatos':
			require 'core/bin/ajax/goCuentaDatos.php';
			break;
		case 'contacto':
			require 'core/bin/ajax/goContacto.php';
			break;
		case 'eliminar':
			require 'core/bin/ajax/goEliminarCont.php';
			break;
		case 'modificar':
			require 'core/bin/ajax/goActualizarCont.php';
			break;
		case 'eliminarCuent':
			require 'core/bin/ajax/goEliminarCuent.php';
			break;
		case 'ModCuent':
			require 'core/bin/ajax/goModCuent.php';
			break;
		case 'empleado':
			require 'core/bin/ajax/goEmpleado.php';
			break;

		case 'eliminarEmp':
			require 'core/bin/ajax/goEliminarEmp.php';
			break;
		case 'modificarEmp':
			require 'core/bin/ajax/goModificarEmp.php';
			break;

		case 'campana':
			require 'core/bin/ajax/goCampana.php';
			break;
		case 'Modifcampana':
			require 'core/bin/ajax/goModifCampana.php';
			break;
		case 'ElimCampana':
			require 'core/bin/ajax/goElimCampana.php';
			break;
		case 'contrato':
			require 'core/bin/ajax/goContrato.php';
			break;

		case 'Modifcontrato':
			require 'core/bin/ajax/goModifContrato.php';
			break;

		case 'ElimContrato':
			require 'core/bin/ajax/goElimContrato.php';
			break;

		case 'tarea':
			require 'core/bin/ajax/goTarea.php';
			break;
		case 'ElimTarea':
			require 'core/bin/ajax/goElimTarea.php';
			break;

		case 'completartarea':
			require 'core/bin/ajax/goCompletarTarea.php';
			break;

		case 'ModificarPerfil':
			require 'core/bin/ajax/goModificarPerfil.php';
			break;

		case 'publicar':
			require 'core/bin/ajax/goPublicar.php';
				# code...
			break;

		case 'responder':
			require 'core/bin/ajax/goResponder.php';
			break;

		case 'filtrocamp':
			require 'core/bin/ajax/goFiltrocamp.php';
			break; 
		case 'filtrocontacto':
			require 'core/bin/ajax/goFiltrocontacto.php';
			break;     
		case 'filtrotarea':
			require 'core/bin/ajax/goFiltrotarea.php';
			break;
		case 'agenda':
			require 'core/bin/ajax/goAgenda.php';
			break;
		case 'eliminaragenda':
			require 'core/bin/ajax/goElimagenda.php';
			break;    	

		




		default:
			header('location: index.php');
			break;
	}


} else{

	header('location: index.php');
	}

 ?>
