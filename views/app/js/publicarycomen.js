


function goComentar() {

	var connect, form, response, result, descripcion;
    descripcion = _('publicar').value;

    if (descripcion != '') {
    	form='publicar='+ descripcion;




    	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
		connect.onreadystatechange = function () {
			if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
				if (connect.responseText==1) {
					_('_AJAX_PUBLICAR_').innerHTML = result;
					location.reload();
					
 				}else{
					_('_AJAX_PUBLICAR_').innerHTML = connect.responseText;
				}
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
			}else if (connect.readyState != 4) {
				result = '<div class="alert alert-dismissible alert-warning">';
 		 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<h4 class="alert-heading">Proceso!</h4>';
				result += ' <p class="mb-0">Espere un momento porfavor..</p>';
				result += '</div>';
				_('_AJAX_PUBLICAR_').innerHTML = result;
			}
		}
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
		connect.open('POST', 'ajax.php?mode=publicar', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(form);



    }
    
}

function goResponder() {
		var connect, form, response, result, descripcion, id;
    	descripcion = _('publicar').value;

    	id = getParameterByName('id');

    if (descripcion != '') {
    	form='publicar='+ descripcion + '&id='+ id ;

    	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
		connect.onreadystatechange = function () {
			if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
				if (connect.responseText==1) {
					
					location.href = '?view=dashboard&inicio=true';
					
 				}else{
					_('_AJAX_PUBLICAR_').innerHTML = connect.responseText;
				}
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
			}else if (connect.readyState != 4) {
				result = '<div class="alert alert-dismissible alert-warning">';
 		 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<h4 class="alert-heading">Proceso!</h4>';
				result += ' <p class="mb-0">Espere un momento porfavor..</p>';
				result += '</div>';
				_('_AJAX_PUBLICAR_').innerHTML = result;
			}
		}
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
		connect.open('POST', 'ajax.php?mode=responder', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(form);



    }


function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}


}

function runScriptChat(e) {
	if (e.keyCode == 13) {
		goChat();
	}
}

function goChat() {
	var connect, form, response, result, nombre, apellido, id, mensaje;


	nombre = _('nombre').value;
	apellido = _('apellido').value;
	id = _('id').value;
	mensaje = _('publicar').value;
	if (mensaje != '') {

			form='mensaje='+ mensaje + '&id='+ id + '&nombre='+ nombre + '&apellido='+ apellido;
				connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
		connect.onreadystatechange = function () {
			if (connect.readyState == 4 && connect.status ==200) {

				_('publicar').value = '';
				_('notifi').innerHTML = connect.responseText;
				

					

				
			}
	}
	//Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
		connect.open('POST', 'ajax.php?mode=responder', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(form);


	 }



	// body...
}

function goChatemp() {
	var connect, form, response, result, nombre, apellido, id, mensaje;


	nombre = _('nombre').value;
	apellido = _('apellido').value;
	id = _('id').value;
	mensaje = _('publicar').value;
	if (mensaje != '') {

			form='mensaje='+ mensaje + '&id='+ id + '&nombre='+ nombre + '&apellido='+ apellido;
				connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
		connect.onreadystatechange = function () {
			if (connect.readyState == 4 && connect.status ==200) {

				_('publicar').value = '';
				

					

				
			}
	}
	//Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
		connect.open('POST', 'ajax.php?mode=publicar', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(form);


	 }



	// body...
}

function runScriptChatemp(e) {
	if (e.keyCode == 13) {
		goChatemp();
	}
}









