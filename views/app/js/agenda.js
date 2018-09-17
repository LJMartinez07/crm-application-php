function goAgenda() {
    var connect, form, response, result, asunto, descripcion, fecha, empleado, fk_id_usuario;
    asunto = _('asunto').value;
    descripcion = _('descripcion').value;
    fecha = _('fecha').value;
    empleado = _('empleado').value;
 
	if (asunto != "" && descripcion != "" && fecha != "") {
		form = 'asunto=' + asunto + '&descripcion=' + descripcion + '&fecha=' + fecha + '&empleado=' + empleado;
		//Si el navegador es muy viejo, se usa ActiveXObject... de resto, todos los navegadores usan XMLHttpRequest
		connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
		connect.onreadystatechange = function () {
			if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
				if (connect.responseText==1) {
					result = '<div class="alert alert-success" role="alert">';
  					result +='<h4 class="alert-heading">Correcto!</h4>';
  					result +='<p>Actividad agregado</p>';
  					result +='<hr>';
  					result +='<p class="mb-0"></p>';
					result +='</div>';
					_('_AJAX_ACTIVIDAD_').innerHTML = result;
					location.reload();
					
 				}else{
					_('_AJAX_ACTIVIDAD_').innerHTML = connect.responseText;
				}
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
			}else if (connect.readyState != 4) {
				result = '<div class="alert alert-dismissible alert-warning">';
 		 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<h4 class="alert-heading">Proceso!</h4>';
				result += ' <p class="mb-0">Espere un momento porfavor..</p>';
				result += '</div>';
				_('_AJAX_ACTIVIDAD_').innerHTML = result;
			}
		}
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
		connect.open('POST', 'ajax.php?mode=agenda', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(form);



	}else{
		result = '<div class="alert alert-dismissible alert-warning">';
 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		result += '<h4 class="alert-heading">Error!</h4>';
		result += ' <p class="mb-0">Porfavor llena los datos con el *</p>';
		result += '</div>';
		_('_AJAX_ACTIVIDAD_').innerHTML = result;
	}

}
function runScriptAgenda(e) {
	if (e.keyCode == 13) {
		goAgenda();
	}
}
