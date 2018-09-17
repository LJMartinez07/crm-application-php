function clientes() {

	var connect, form, response, result, idfk;
	idfk = 1;
			
			form='id='+ idfk;
			connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');

			connect.onreadystatechange = function(){
				if (connect.readyState == 4 && connect.status == 200) {
					
					document.getElementById('_AJAX_FILTROPAPELERA456454_').innerHTML = connect.responseText;
				}
			}

			connect.open('POST', 'ajax.php?mode=filtropape', true);
			connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			connect.send(form);
	// body...
}

function cuentas() {

	var connect, form, response, result, idfk;
	idfk = 2;
			
			form='id='+ idfk;
			connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');

			connect.onreadystatechange = function(){
				if (connect.readyState == 4 && connect.status == 200) {
					
					document.getElementById('_AJAX_FILTROPAPELERA456454_').innerHTML = connect.responseText;
				}
			}

			connect.open('POST', 'ajax.php?mode=filtropape', true);
			connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			connect.send(form);
	// body...
}

function recuperarContacto(id) {
	var connect, form, response, result;
		var id; 
form= 'id=' + id;



	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
		connect.onreadystatechange = function () {
			if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
				if (connect.responseText==1) {
					result = '<div class="alert alert-success" role="alert">';
  					result +='<h4 class="alert-heading">Correcto!</h4>';
  					result +='<p>El contrato ha sido Agregado</p>';
  					result +='<hr>';
  					result +='<p class="mb-0"></p>';
					result +='</div>';
					_('_AJAX_OTRACOSA_').innerHTML = result;
					location.reload();
					
 				}else{
					_('_AJAX_OTRACOSA_').innerHTML = connect.responseText;
				}
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
			}else if (connect.readyState != 4) {
				result = '<div class="alert alert-dismissible alert-warning">';
 		 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<h4 class="alert-heading">Proceso!</h4>';
				result += ' <p class="mb-0">Espere un momento porfavor..</p>';
				result += '</div>';
				_('_AJAX_OTRACOSA_').innerHTML = result;
			}
		}
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
		connect.open('POST', 'ajax.php?mode=recontacto', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(form);

	// body...
}

function recuperarCuenta(id) {
	var connect, form, response, result;
		var id;
		form= 'id=' + id; 

		connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
		connect.onreadystatechange = function () {
			if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
				if (connect.responseText==1) {
					result = '<div class="alert alert-success" role="alert">';
  					result +='<h4 class="alert-heading">Correcto!</h4>';
  					result +='<p>El contrato ha sido Agregado</p>';
  					result +='<hr>';
  					result +='<p class="mb-0"></p>';
					result +='</div>';
					_('_AJAX_OTRACOSA_').innerHTML = result;
					location.reload();
					
 				}else{
					_('_AJAX_OTRACOSA_').innerHTML = connect.responseText;
				}
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
			}else if (connect.readyState != 4) {
				result = '<div class="alert alert-dismissible alert-warning">';
 		 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<h4 class="alert-heading">Proceso!</h4>';
				result += ' <p class="mb-0">Espere un momento porfavor..</p>';
				result += '</div>';
				_('_AJAX_OTRACOSA_').innerHTML = result;
			}
		}
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
		connect.open('POST', 'ajax.php?mode=recuenta', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(form);
	// body...
}