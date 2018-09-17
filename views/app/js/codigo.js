function goCodigo() {
	var connect, form, response, result, codigo;
	codigo = _('codigo').value;

	if (codigo != "") {
		form='codigo='+ codigo;
		connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
		connect.onreadystatechange = function () {
			if (connect.readyState == 4 && connect.status ==200) {
				if (connect.responseText==1) {
					result = '<div class="alert alert-success" role="alert">';
	  				result +='<h4 class="alert-heading">Correcto</h4>';
	  				result +='<p>Te estamo redireccionando</p>';
	  				result +='<hr>';
	  				result +='<p class="mb-0"></p>';
					result +='</div>';
					_('_AJAX_CODIGO_').innerHTML = result;
					window.location.href="?view=restpass&codigo="+codigo;
					//location.reload();
	 		 
				}else{
					_('_AJAX_CODIGO_').innerHTML = connect.responseText;
				}

			}else if (connect.readyState != 4) {
				result = '<div class="alert alert-dismissible alert-warning">';
	 		 	result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<h4 class="alert-heading">Proceso!</h4>';
				result += ' <p class="mb-0">Espere un momento porfavor..</p>';
				result += '</div>';
				_('_AJAX_CODIGO_').innerHTML = result;


			}
		}
		connect.open('POST', 'ajax.php?mode=codigo', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(form);
	}else{
		result = '<div class="alert alert-dismissible alert-warning">';
		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		result += '<h4 class="alert-heading">Alerta!!</h4>';
		result += '<p class="mb-0">Inserte un codigo</p>';
		result += '</div>';
		_('_AJAX_CODIGO_').innerHTML = result;

	}	
}

function runScriptCodigo(e) {
	if (e.keyCode == 13) {
		goCodigo();
	}
	// body...
}