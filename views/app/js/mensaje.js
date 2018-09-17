function goMensaje() {
	var connect, form, response, result, asunto, descripcion, cliente;

	asunto =_('asunto').value;
	descripcion =_('descripcion').value;
	cliente =_('cliente').value;
	
	if (asunto!='' && descripcion!= '' && cliente!=' ') {

		form = 'asunto=' + asunto + '&descripcion=' + descripcion + '&cliente=' + cliente;
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
					_('_AJAX_MENSAJES_').innerHTML = result;
					location.reload();

				}else{
					_('_AJAX_MENSAJES_').innerHTML = connect.responseText;
				}

			}else if (connect.readyState != 4) {
				result = '<div class="alert alert-dismissible alert-warning">';
	 		 	result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<h4 class="alert-heading">Proceso!</h4>';
				result += ' <p class="mb-0">Espere un momento porfavor..</p>';
				result += '</div>';
				_('_AJAX_MENSAJES_').innerHTML = result;


			}
		}
		connect.open('POST', 'ajax.php?mode=mensaje', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(form);

	}else{
		result = '<div class="alert alert-dismissible alert-warning">';
		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		result += '<h4 class="alert-heading">Faltan Campos!!</h4>';
		result += '<p class="mb-0">Favor llenar los campos faltantes que tiene *</p>';
		result += '</div>';
		_('_AJAX_MENSAJES_').innerHTML = result;
	}
	// body...
}

function runScriptMensaje() {
	if (e.keyCode == 13) {

		goMensaje();
	}
	// body...
}