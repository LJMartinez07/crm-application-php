function goLostpass() {
	var connect, form, response, result, email;
	email= _('email_lostpass').value;
//Si el campo email no esta vacio ejecutara el IF al contrario si lo esta ira al else...
	if (email != '') {
// Si todo sale bien y se comprueba el campo con javascript
		form ='email=' + email;
//Si el navegador es muy viejo, se usa ActiveXObject... de resto, todos los navegadores usan XMLHttpRequest
		connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
		connect.onreadystatechange = function () {
			if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien...
					if (connect.responseText==1) {
						result ='<div class="alert alert-dismissible alert-success">';
						result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
						result +=' <strong>Perfecto!</strong>se ha enviado un mensaje a su correo.</a>.';
						result +='</div>';
						_('_AJAX_LOSTPASS_').innerHTML = result;
						window.location.href='?view=codigo';

					}else{
					_('_AJAX_LOSTPASS_').innerHTML = connect.responseText;
				}
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
			}else if (connect.readyState != 4) {
				result = '<div class="alert alert-dismissible alert-warning">';
				result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<h4 class="alert-heading">Espere!</h4>';
				result += '<p class="mb-0">Estamos procesando los datos.</p>';
				result += '</div>';
				_('_AJAX_LOSTPASS_').innerHTML = result;
			}
		}// fin del onreadystatechange

		//Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
        //Enviamos el formulario (form)
		connect.open('POST', 'ajax.php?mode=lostpass', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(form);

	}else {
		result = '<div class="alert alert-dismissible alert-warning">';
				result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<h4 class="alert-heading">Favor!</h4>';
				result += '<p class="mb-0">Llenar los campos faltantes.</p>';
				result += '</div>';
		_('_AJAX_LOSTPASS_').innerHTML = result;
	}

}// FIN DEL goLostpass

function runScriptLostpass(e) {
	// si la tecla presionada es igual al número ASCI de la tecla ENTER
	if (e.keyCode == 13) {
		goLostpass();
	}
}
