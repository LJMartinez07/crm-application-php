function Fijos(){

	var connect, form, response, result, idfk;
	idfk = 1;
			
			form='id='+ idfk;
			connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');

			connect.onreadystatechange = function(){
				if (connect.readyState == 4 && connect.status == 200) {
					
					document.getElementById('_AJAX_FILTROCONTACTO_').innerHTML = connect.responseText;
				}
			}

			connect.open('POST', 'ajax.php?mode=filtrocontacto', true);
			connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			connect.send(form);
}

function Potencial(){

	var connect, form, response, result, idfk;
	idfk = 2;
			
			form='id='+ idfk;
			connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');

			connect.onreadystatechange = function(){
				if (connect.readyState == 4 && connect.status == 200) {
					
					document.getElementById('_AJAX_FILTROCONTACTO_').innerHTML = connect.responseText;
				}
			}

			connect.open('POST', 'ajax.php?mode=filtrocontacto', true);
			connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			connect.send(form);
}

function Todos(){

	var connect, form, response, result, idfk;
	idfk = 3;
			
			form='id='+ idfk;
			connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');

			connect.onreadystatechange = function(){
				if (connect.readyState == 4 && connect.status == 200) {
					
					document.getElementById('_AJAX_FILTROCONTACTO_').innerHTML = connect.responseText;
				}
			}

			connect.open('POST', 'ajax.php?mode=filtrocontacto', true);
			connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			connect.send(form);
}

function runBuscar(e) {
	if (e.keyCode == 13) {
		goBuscar();
	}
	
}

function goBuscar() {


	var connect, form, response, result, buscar;
	buscar = _('buscar').value;

	if (buscar != '') {
			
			form='buscar='+ buscar;
			connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');

			connect.onreadystatechange = function(){
				if (connect.readyState == 4 && connect.status == 200) {
					
					document.getElementById('_AJAX_FILTROCONTACTO_').innerHTML = connect.responseText;
				}
			}

			connect.open('POST', 'ajax.php?mode=filtrocontacto', true);
			connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			connect.send(form);

			}else{

				alert("Favor y llenar el campo antes de realizar la busqueda");
			}


	
}