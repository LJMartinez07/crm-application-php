function goReg() {
	var connect, form, response, result, nombre, apellido, email, pais, c_empleado, dominio, cargo, telefono, num_celular, pass, passdos, terminos;
	nombre = _('reg_nombre').value;
	apellido = _('reg_apellido').value;
	email = _('email_reg').value;
	//pais = _('reg_pais').value;
	//c_empleado = _('reg_empleado').value;
	//dominio = _('reg_dominio').value;
	//cargo = _('reg_cargo').value;
	telefono = _('reg_tel').value;
	//num_celular = _('reg_cel').value;
	passdos = _('pass_reg').value;
	pass = _('pass_reg_dos').value;

	veripass = passdos;
	terminos = _('tyc_reg').checked ? false : true;


	if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(email)) {
		_('checkemail').innerHTML = '';
		_('checkpass').innerHTML = '';

		if (passdos.length >= 8) {
			_('checkpass').innerHTML = '';

		

	if (terminos == false) {
//Si los terminos fueron aceptado
		if (nombre != "" && apellido != "" && email != ""  && telefono != "" && pass != "" && passdos != "") {
//Si todos los campos fueron rellenados:
			if (pass == passdos) {
//Si las password coinciden

				form = 'nombre=' + nombre + '&apellido=' + apellido + '&email=' + email + '&telefono=' + telefono + '&pass=' + pass;
//Si el navegador es muy viejo, se usa ActiveXObject... de resto, todos los navegadores usan XMLHttpRequest
				connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
				connect.onreadystatechange = function () {
					if (connect.readyState == 4 && connect.status == 200) {
//Si todo salió bien...
						if (connect.responseText == 1) {
							result = '<div class="alert alert-success" role="alert">';
  							result +='<h4 class="alert-heading">Exito!</h4>';
  							result +='<p>En el registro</p>';
  							result +='<hr>';
  							result +='<p class="mb-0"></p>';
							result +='</div>';
							_('_AJAX_REG_').innerHTML = result;
							window.location.href="?view=dashboard&successreg=true&inicio=true";


						} else {
							_('_AJAX_REG_').innerHTML = connect.responseText;
							console.log(connect.responseText);
						}
//Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
					} else if (connect.readyState != 4) {
						result = '<div class="alert alert-dismissible alert-warning">';
 		 				result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						result += '<h4 class="alert-heading">Proceso!</h4>';
						result += ' <p class="mb-0">Espere un momento porfavor..</p>';
						result += '</div>';
						_('_AJAX_REG_').innerHTML = result;


					}
				}
//Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
//Enviamos el formulario (form)
				connect.open('POST', 'ajax.php?mode=reg', true);
				connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
				connect.send(form);

			} else {
//Error si las contraseñas no coinciden en el registro

				result = '<div class="alert alert-dismissible alert-warning">';
 		 				result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						
						result += '<h4 class="alert-heading">Error!</h4>';
						result += ' <p class="mb-0">Las password no coinceden</p>';
						result += '</div>';
				_('_AJAX_REG_').innerHTML = result;

			}


		} else {
//Error si no pasa la comprobación (los campos están vacíos, o algunos)			

			result = '<div class="alert alert-dismissible alert-warning">';
 		 	result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
			
			result += '<h4 class="alert-heading">Error!</h4>';
			result += '<p class="mb-0">Favor llenar los campos..</p>';
			result += '</div>';
			_('_AJAX_REG_').innerHTML = result;
		}

	} else {
//Si no ha aceptado los términos y condiciones.
		result = '<div class="alert alert-dismissible alert-warning">';
 		 	result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		
			result += '<h4 class="alert-heading">Acepte!</h4>';
			result += ' <p class="mb-0">Los terminos y condiciones de usos</p>';
			result += '</div>';
			 
		_('_AJAX_REG_').innerHTML = result;
	}

}else{

	_('checkpass').innerHTML = 'La contraseñas debe de tener minimo 8 caracter';

}

}else{
	_('checkemail').innerHTML = 'Favor de ingresar un email valido';
	_('checkpass').innerHTML = '';
}

}

//Esto para poder usar la tecla ENTER para enviar el formulario
function runScriptReg(e) {
	if (e.keyCode == 13) {
// si la tecla presionada es igual al número ASCI de la tecla ENTER
		goReg();
	}
	
}
