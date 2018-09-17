function goTarea() {
	var connect, form, response, result, asunto, descripcion, altaprioridad, responsables, fechalimite;
    asunto = _('asuntoT').value;
    descripcion = _('descripcionT').value;
    altaprioridad = _('PrioridadT').value;
    responsables = _('responsableT').value;
    fechalimite = _('FechaLimiteT').value;
    //curso = _('cursoT').value;
    

		if (asunto != "" && descripcion != "" && responsables != ""  && fechalimite != "" &&  altaprioridad !="") {

            form = 'asunto=' + asunto + '&descripcion=' + descripcion + '&responsables='  + responsables + '&altaprioridad='+ altaprioridad + '&fechalimite=' + fechalimite;
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
                        _('_AJAX_TAREA_').innerHTML = result;
                        location.reload();
						


					} else {
						_('_AJAX_TAREA_').innerHTML = connect.responseText;
						console.log(connect.responseText);
					}
//Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
				} else if (connect.readyState != 4) {
					result = '<div class="alert alert-dismissible alert-warning">';
 		 			result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
					result += '<h4 class="alert-heading">Proceso!</h4>';
					result += ' <p class="mb-0">Espere un momento porfavor..</p>';
					result += '</div>';
					_('_AJAX_TAREA_').innerHTML = result;


				}
			}
//Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
//Enviamos el formulario (form)
			connect.open('POST', 'ajax.php?mode=tarea', true);
			connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			connect.send(form);

			


		} else {
//Error si no pasa la comprobación (los campos están vacíos, o algunos)			

			result = '<div class="alert alert-dismissible alert-warning">';
 		 	result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
			
			result += '<h4 class="alert-heading">Error!</h4>';
			result += '<p class="mb-0">Favor llenar los campos..</p>';
			result += '</div>';
			_('_AJAX_TAREA_').innerHTML = result;
		}

	

}

//Esto para poder usar la tecla ENTER para enviar el formulario
function runScriptTarea(e) {
	if (e.keyCode == 13) {
// si la tecla presionada es igual al número ASCI de la tecla ENTER
		goTarea();
	}
	
}
