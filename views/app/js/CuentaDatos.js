function goCuentaDatos() {
	var connect, form, response, result, nombre, no_cuenta, tipo_cuenta, ingreso, telefono, fax, sitio_web, direccion, codigo_postal, descripcion, contacto;
	nombre = _('nombre').value;
  no_cuenta = _('no_cuenta').value;
  tipo_cuenta = _('tipo_cuenta').value;
  ingreso = _('ingreso').value;
  telefono = _('telefono').value;
  fax = _('fax').value;
  sitio_web = _('sitio_web').value;
  direccion = _('direccion').value;
  codigo_postal = _('codigo_postal').value;
  descripcion = _('descripcion').value;
	contacto = _('contacto').value;

	if (nombre != "" && no_cuenta != "" && tipo_cuenta != "" && ingreso != "" && telefono != "" && sitio_web != "" && direccion != "" && codigo_postal != "") {
		form = 'nombre='+ nombre + '&no_cuenta=' + no_cuenta + '&tipo_cuenta=' + tipo_cuenta + '&ingreso=' + ingreso + '&telefono=' + telefono + '&fax=' + fax + '&sitio_web=' + sitio_web + '&direccion=' + direccion + '&codigo_postal=' + codigo_postal + '&descripcion=' + descripcion + '&contacto=' + contacto;
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
					_('_AJAX_CUENTA_').innerHTML = result;
					location.reload();

				}else{
					_('_AJAX_CUENTA_').innerHTML = connect.responseText;
				}

			}else if (connect.readyState != 4) {
				result = '<div class="alert alert-dismissible alert-warning">';
	 		 	result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<h4 class="alert-heading">Proceso!</h4>';
				result += ' <p class="mb-0">Espere un momento porfavor..</p>';
				result += '</div>';
				_('_AJAX_CUENTA_').innerHTML = connect.responseText;


			}
		}
		connect.open('POST', 'ajax.php?mode=cuentadatos', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(form);
	}else{
		result = '<div class="alert alert-dismissible alert-warning">';
		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		result += '<h4 class="alert-heading">Faltan Campos!!</h4>';
		result += '<p class="mb-0">Favor llenar los campos faltantes que tiene *</p>';
		result += '</div>';
		_('_AJAX_CUENTA_').innerHTML = result;

	}
}

function runScriptCuentaDatos(e) {
	if (e.keyCode == 13) {
		goCuentaDatos();
	}
}
