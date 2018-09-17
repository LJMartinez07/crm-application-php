function goContacto() {
	var connect, form, response, result, nombre, apellido, cuenta, email, telefono, telefono2, celular, fuente, tipo;
	nombre = _('nombre').value;
	apellido= _('apellido').value;
	cuenta= _('cuenta').value;
	email= _('email').value;
	telefono= _('telefono').value;
	telefono2= _('telefono2').value;
	celular= _('celular').value;
	fuente= _('fuente').value;
	tipo= _('tipo').value;

	if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(email)) {
		_('checkemail').innerHTML = '';
	if (tipo != "" && nombre != "" && apellido != "" && email != "" && telefono != "") {
		form='nombre='+ nombre + '&apellido=' + apellido +'&cuenta='+cuenta  + '&email=' + email +'&telefono='+telefono +'&telefono2='+telefono2  + '&celular=' + celular +'&fuente='+fuente +'&tipo=' +tipo;
		//Si el navegador es muy viejo, se usa ActiveXObject... de resto, todos los navegadores usan XMLHttpRequest
		connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
		connect.onreadystatechange = function () {
			if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
				if (connect.responseText==1) {
					result = '<div class="alert alert-success" role="alert">';
  					result +='<h4 class="alert-heading">Correcto!</h4>';
  					result +='<p>Contacto agregado</p>';
  					result +='<hr>';
  					result +='<p class="mb-0"></p>';
					result +='</div>';
					_('_AJAX_CONTACTO_').innerHTML = result;
					location.reload();
					
 				}else{
					_('_AJAX_CONTACTO_').innerHTML = connect.responseText;
				}
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
			}else if (connect.readyState != 4) {
				result = '<div class="alert alert-dismissible alert-warning">';
 		 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<h4 class="alert-heading">Proceso!</h4>';
				result += ' <p class="mb-0">Espere un momento porfavor..</p>';
				result += '</div>';
				_('_AJAX_CONTACTO_').innerHTML = result;
			}
		}
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
		connect.open('POST', 'ajax.php?mode=contacto', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(form);



	}else{
		result = '<div class="alert alert-dismissible alert-warning">';
 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		result += '<h4 class="alert-heading">Error!</h4>';
		result += ' <p class="mb-0">Porfavor llena los datos con el *</p>';
		result += '</div>';
		_('_AJAX_CONTACTO_').innerHTML = result;
	}

}else{
	_('checkemail').innerHTML = 'Favor de ingresar un email valido';
}

}
function runScriptContacto(e) {
	if (e.keyCode == 13) {
		goContacto();
	}
}
