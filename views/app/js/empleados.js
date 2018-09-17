function goEmpleados() {
	var connect, form, response, result, nombre, apellido, email, pass, cedula, cargo;
	nombre = _('nombre_ae').value;
	apellido = _('apellido_ae').value;
	email = _('email_ae').value;
	//pass = _('pass_ae').value;
	cedula = _('cedula_ae').value;
	cargo = _('cargo_ae').value;
	
if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(email)) {
		_('checkemail').innerHTML = '';
	if (cedula.length == 11 ) {

	if (email!='' && cedula!= '' && nombre!='' && apellido!= '') {
		form = 'nombre=' + nombre + '&apellido=' + apellido + '&email=' + email + '&cedula=' + cedula + '&cargo=' + cargo;
		connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
		connect.onreadystatechange = function () {
			if (connect.readyState == 4 && connect.status ==200) {
				if (connect.responseText==1) {
					result = '<div class="alert alert-success" role="alert">';
	  				result +='<h4 class="alert-heading">Correcto</h4>';
	  				result +='<p>Hemos Ingresados los datos</p>';
	  				result +='<hr>';
	  				result +='<p class="mb-0"></p>';
					result +='</div>';
					_('_AJAX_EMPLEADO32_').innerHTML = result;
					location.reload();

				}else{
					_('_AJAX_EMPLEADO32_').innerHTML = connect.responseText;
				}

			}else if (connect.readyState != 4) {
				result = '<div class="alert alert-dismissible alert-warning">';
	 		 	result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<h4 class="alert-heading">Proceso!</h4>';
				result += ' <p class="mb-0">Espere un momento porfavor..</p>';
				result += '</div>';
				_('_AJAX_EMPLEADO32_').innerHTML = result;


			}
		}
		connect.open('POST', 'ajax.php?mode=empleado', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(form);


	}else{
		result = '<div class="alert alert-dismissible alert-warning">';
		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		result += '<h4 class="alert-heading">Faltan Campos!!</h4>';
		result += '<p class="mb-0">Favor llenar los campos faltantes que tiene *</p>';
		result += '</div>';
		_('_AJAX_EMPLEADO32_').innerHTML = result;
		_('checkcedula').innerHTML = '';

	}

}


else{
	_('checkcedula').innerHTML = 'Favor de ingresar una cedula valida';

}


}else{

	_('checkemail').innerHTML = 'Favor de ingresar un email valido';

}



}


function runScriptEmpleados(e) {
	if (e.keyCode == 13) {

		goEmpleados();
	}
	// body...
}