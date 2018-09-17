function goRest() {
	var connect, form, response, result, pass1, pass2, codigo;
	pass1 = _('pass1').value;
	pass2 = _('pass2').value;
	codigo = getParameterByName('codigo');
	if (codigo != "") {
		if (pass1 != "" && pass2 != "") {
			if (pass1 == pass2) {
				form='pass1='+ pass1 + '&codigo='+ codigo;
				connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
					connect.onreadystatechange = function () {
						if (connect.readyState == 4 && connect.status == 200) {
							if (connect.responseText == 1) {
								result = '<div class="alert alert-success" role="alert">';
	  							result +='<h4 class="alert-heading">Exito!</h4>';
	  							result +='<p>En el registro</p>';
	  							result +='<hr>';
	  							result +='<p class="mb-0"></p>';
								result +='</div>';
								_('_AJAX_REST_').innerHTML = result;
								window.location.href="?view=index&pass=true";
							} else {
								_('_AJAX_REST_').innerHTML = connect.responseText;
								
							}


						}else if (connect.readyState != 4) {
							result = '<div class="alert alert-dismissible alert-warning">';
	 		 				result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
							result += '<h4 class="alert-heading">Proceso!</h4>';
							result += ' <p class="mb-0">Espere un momento porfavor..</p>';
							result += '</div>';
							_('_AJAX_REST_').innerHTML = result;


						}
					}

				connect.open('POST', 'ajax.php?mode=rest', true);
				connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
				connect.send(form);
			}else{

				result = '<div class="alert alert-dismissible alert-warning">';
	 			result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<h4 class="alert-heading">Error!</h4>';
				result += '<p class="mb-0">Las contraseñas no coinciden</p>';
				result += '</div>';
				_('_AJAX_REST_').innerHTML = result;

			}

		}else{
			result = '<div class="alert alert-dismissible alert-warning">';
	 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
			result += '<h4 class="alert-heading">Error!</h4>';
			result += '<p class="mb-0">Favor llenar los campos..</p>';
			result += '</div>';
			_('_AJAX_REST_').innerHTML = result;
		}
	}else{

		result ='<div class="alert alert-dismissible alert-warning">';
  		result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
  		result +='<h4 class="alert-heading">Alerta!!</h4>';
  		result +='<p class="mb-0">Intente solicitar otro codigo porfavor</p>';
		result +='</div>';



	}	


}

	
function runScriptRest(e) {
	if (e.keyCode == 13) {
		goRest();
	}
	// body...
}


function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
