function goLogin() {
	var connect, form, response, result, user, pass, sesion;


	var validarusu = _('user_login').checked ? true : false;




	//if (validarusu) {
	user = _('user_login').value;
	pass = _('pass_login').value;
	session = _('session_login').checked ? true : false;

	if (user != "" && pass != "") {
		form='user_login='+ user + '&pass_login=' + pass +'&session_login='+session;
//Si el navegador es muy viejo, se usa ActiveXObject... de resto, todos los navegadores usan XMLHttpRequest
		connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
		connect.onreadystatechange = function () {
			if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
				if (connect.responseText==1) {
					result = '<div class="alert alert-success" role="alert">';
  					result +='<h4 class="alert-heading">Correcto</h4>';
  					result +='<p>Estamos iniciando sesion....</p>';
  					result +='<hr>';
  					result +='<p class="mb-0"></p>';
					result +='</div>';
					_('_AJAX_LOGIN_').innerHTML = result;
					window.location.href="?view=dashboard&successlogin=true&inicio=true";
					//location.reload();
 				}else{
					_('_AJAX_LOGIN_').innerHTML = connect.responseText;
				}
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
			}else if (connect.readyState != 4) {
				result = '<div class="alert alert-dismissible alert-warning">';
 		 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<h4 class="alert-heading">Proceso!</h4>';
				result += ' <p class="mb-0">Espere un momento porfavor..</p>';
				result += '</div>';
				_('_AJAX_LOGIN_').innerHTML = result;
			}
		}
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
		connect.open('POST', 'ajax.php?mode=login', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(form);

	}else{
		result = '<div class="alert alert-dismissible alert-warning">';
 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		result += '<h4 class="alert-heading">Error!</h4>';
		result += ' <p class="mb-0">Porfavor llena los datos</p>';
		result += '</div>';
		_('_AJAX_LOGIN_').innerHTML = result;

	}

//}else{


	//_('checkemail').innerHTML = 'Favor de ingresar email valido';
//}
}
	
function runScriptLogin(e) {
 // si la tecla presionada es igual al número ASCI de la tecla ENTER
	if (e.keyCode == 13) {
		goLogin();
	}
}


//Aqui todo es igual pero este login es para la activacion de la cuenta
function goLoginActivar() {
	var connect, form, response, result, user, pass, sesion;


	validaremail = _('user_login').checked ? true : false;


	//if (validaremail) {


	user = _('user_login').value;
	pass = _('pass_login').value;
	session = _('session_login').checked ? true : false;
	if (user != "" && pass != "") {
		form='user_login='+ user + '&pass_login=' + pass +'&session_login='+session;
		connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
		connect.onreadystatechange = function () {
			if (connect.readyState == 4 && connect.status ==200) {
				if (connect.responseText==1) {
					result = '<div class="alert alert-success" role="alert">';
  					result +='<h4 class="alert-heading">Correcto</h4>';
  					result +='<p>Estamos iniciando sesion....</p>';
  					result +='<hr>';
  					result +='<p class="mb-0"></p>';
					result +='</div>';
					_('_AJAX_LOGIN_').innerHTML = result;
					window.location.href="?view=dashboard&success=true";
					//location.reload();
 				}else{
					_('_AJAX_LOGIN_').innerHTML = connect.responseText;
				}
			}else if (connect.readyState != 4) {
				result = '<div class="alert alert-dismissible alert-warning">';
 		 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<h4 class="alert-heading">Proceso!</h4>';
				result += ' <p class="mb-0">Espere un momento porfavor..</p>';
				result += '</div>';
				_('_AJAX_LOGIN_').innerHTML = result;
			}
		}
		connect.open('POST', 'ajax.php?mode=login', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(form);

	}else{
		result = '<div class="alert alert-dismissible alert-warning">';
 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		result += '<h4 class="alert-heading">Error!</h4>';
		result += ' <p class="mb-0">Porfavor llena los datos</p>';
		result += '</div>';
		_('_AJAX_LOGIN_').innerHTML = result;

	}

//}else{

	//_('checkemail').innerHTML = 'Favor de ingresar email valido';

//}
}

function runScriptLoginActivar(e) {
	if (e.keyCode == 13) {
		goLoginActivar();
	}
	// body...
}


//------ Login Empleados --------


function goLoginEmp() {
	var connect, form, response, result, user, pass, sesion;

	validar = _('user_login').checked ? true : false;

	//if (validar){
	user = _('user_login').value;
	pass = _('pass_login').value;
	session = _('session_login').checked ? true : false;
	if (user != "" && pass != "") {
		form='user_login='+ user + '&pass_login=' + pass +'&session_login='+session;
		connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
		connect.onreadystatechange = function () {
			if (connect.readyState == 4 && connect.status ==200) {
				if (connect.responseText==1) {
					result = '<div class="alert alert-success" role="alert">';
  					result +='<h4 class="alert-heading">Correcto</h4>';
  					result +='<p>Estamos iniciando sesion....</p>';
  					result +='<hr>';
  					result +='<p class="mb-0"></p>';
					result +='</div>';
					_('_AJAX_LOGIN_').innerHTML = result;
					window.location.href="?view=dashboard&suem=true&hola";
					//location.reload();
 				}else{
					_('_AJAX_LOGIN_').innerHTML = connect.responseText;
				}
			}else if (connect.readyState != 4) {
				result = '<div class="alert alert-dismissible alert-warning">';
 		 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<h4 class="alert-heading">Proceso!</h4>';
				result += ' <p class="mb-0">Espere un momento porfavor..</p>';
				result += '</div>';
				_('_AJAX_LOGIN_').innerHTML = result;
			}
		}
		connect.open('POST', 'ajax.php?mode=loginemp', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(form);

	}else{
		result = '<div class="alert alert-dismissible alert-warning">';
 		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		result += '<h4 class="alert-heading">Error!</h4>';
		result += ' <p class="mb-0">Porfavor llena los datos</p>';
		result += '</div>';
		_('_AJAX_LOGIN_').innerHTML = result;

	}


	//}else{

		//_('checkemail').innerHTML = 'Favor de ingresar email valido';

	//}


	
}


function runScriptLoginEmp(e) {
 // si la tecla presionada es igual al número ASCI de la tecla ENTER
	if (e.keyCode == 13) {
		goLoginEmp();
	}
}