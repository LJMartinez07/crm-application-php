function goCampana() {
	var connect, form, response, result, nombre, estatus, fechai, fechaf, recaudacion, descripcion ;
    nombre = _('nombre').value;
    estatus = _('estatus').value;
    fechai = _('FechaI').value;
    fechaf = _('FechaF').value;
    recaudacion = _('recaudacion').value;
    descripcion = _('descripcion').value;
	if (nombre != "" && estatus != "" && fechai != "" && fechaf != "" && recaudacion != "" && descripcion != "" ) {
		form='nombre='+ nombre + '&estatus=' + estatus +'&fechai='+fechai  + '&fechaf=' + fechaf +'&recaudacion='+ recaudacion +'&descripcion='+ descripcion;
		//Si el navegador es muy viejo, se usa ActiveXObject... de resto, todos los navegadores usan XMLHttpRequest
		connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
		connect.onreadystatechange = function () {
			if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
				if (connect.responseText==1) {
					result = '<div class="alert alert-success" role="alert">';
  					result +='<h4 class="alert-heading">Correcto!</h4>';
  					result +='<p>Campaña agregado</p>';
  					result +='<hr>';
  					result +='<p class="mb-0"></p>';
					result +='</div>';
					_('_AJAX_CAMPANA_').innerHTML = result;
					location.reload();
					
 				}else{
					_('_AJAX_CAMPANA_').innerHTML = connect.responseText;
				}
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
			}else if (connect.readyState != 4) {
				result = '<div class="alert alert-dismissible alert-warning">';
 		 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<h4 class="alert-heading">Proceso!</h4>';
				result += ' <p class="mb-0">Espere un momento porfavor..</p>';
				result += '</div>';
				_('_AJAX_CAMPANA_').innerHTML = result;
			}
		}
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
		connect.open('POST', 'ajax.php?mode=campana', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(form);



	}else{
		result = '<div class="alert alert-dismissible alert-warning">';
 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		result += '<h4 class="alert-heading">Error!</h4>';
		result += ' <p class="mb-0">Porfavor llena los datos</p>';
		result += '</div>';
		_('_AJAX_CAMPANA_').innerHTML = result;
	}

}
function runScriptCampana(e) {
	if (e.keyCode == 13) {
		goCampana();
	}
}
