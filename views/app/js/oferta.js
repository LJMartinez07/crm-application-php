function goOferta() {
	var connect, form, response, result, nombre, precio, cantidad, descuento, descripcionven, bonus, fechafin, descripciongara;
	nombre = _('NombreProdu').value;
	precio = _('PrecioProdu').value;
	cantidad = _('Cantidad').value;
	descuento = _('Descuento').value;
	descripcionven = _('DescripcionVen').value;
	bonus = _('Bonus').value;
	fechafin = _('FechaFin').value;
	descripciongara = _('DescripcionGarantia').value;
	contacto = _('clienteoferta').value;
	

	if (nombre != "" && precio != "" &&  cantidad != "" && descuento != "" &&  descripcionven != "" && fechafin != ""  &&  contacto != "" ) {
		form='nombre='+ nombre + '&precio=' + precio +'&cantidad='+cantidad  +'&descuento='+ descuento + '&descripcionven=' + descripcionven +'&bonus='+bonus + '&fechafin='+ fechafin + '&descripciongara=' + descripciongara +'&contacto='+contacto;
		connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
		connect.onreadystatechange = function () {
			if (connect.readyState == 4 && connect.status ==200) {
				if (connect.responseText==1) {
					result = '<div class="alert alert-success" role="alert">';
  					result +='<h4 class="alert-heading">Correcto</h4>';
  					result +='<p>Datos enviados</p>';
  					result +='<hr>';
  					result +='<p class="mb-0"></p>';
					result +='</div>';
					_('_AJAX_OFERTA_').innerHTML = result;
					
					location.reload();
 				}else{
					_('_AJAX_OFERTA_').innerHTML = connect.responseText;
				}
			}else if (connect.readyState != 4) {
				result = '<div class="alert alert-dismissible alert-warning">';
 		 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<h4 class="alert-heading">Proceso!</h4>';
				result += ' <p class="mb-0">Espere un momento porfavor..</p>';
				result += '</div>';
				_('_AJAX_OFERTA_').innerHTML = result;
			}
		}
		connect.open('POST', 'ajax.php?mode=oferta', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(form);




	}else{
		result = '<div class="alert alert-dismissible alert-warning">';
 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		result += '<h4 class="alert-heading">Error!</h4>';
		result += ' <p class="mb-0">Porfavor llena los datos</p>';
		result += '</div>';
		_('_AJAX_OFERTA_').innerHTML = result;

	}




}
function runScriptOferta(e) {
	if (e.keyCode == 13) {
		 goOferta();
	}
}