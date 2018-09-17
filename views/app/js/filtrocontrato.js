function Aceptados(){

	var connect, form, response, result, idfk;
	idfk = 1;
			
			form='id='+ idfk;
			connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');

			connect.onreadystatechange = function(){
				if (connect.readyState == 4 && connect.status == 200) {
					
					document.getElementById('_AJAX_FILTROCONTRATO_').innerHTML = connect.responseText;
				}
			}

			connect.open('POST', 'ajax.php?mode=filtrocamp', true);
			connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			connect.send(form);
}

function Todos(){

	var connect, form, response, result, idfk;
	idfk = 5;
			
			form='id='+ idfk;
			connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');

			connect.onreadystatechange = function(){
				if (connect.readyState == 4 && connect.status == 200) {
					
					document.getElementById('_AJAX_FILTROCONTRATO_').innerHTML = connect.responseText;
				}
			}

			connect.open('POST', 'ajax.php?mode=filtrocamp', true);
			connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			connect.send(form);
}

function Cancelados(){

	var connect, form, response, result, idfk;
	idfk = 2;
			
			form='id='+ idfk;
			connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');

			connect.onreadystatechange = function(){
				if (connect.readyState == 4 && connect.status == 200) {
					
					document.getElementById('_AJAX_FILTROCONTRATO_').innerHTML = connect.responseText;
				}
			}

			connect.open('POST', 'ajax.php?mode=filtrocamp', true);
			connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			connect.send(form);
}

function Proceso(){

	var connect, form, response, result, idfk;
	idfk = 3;
			
			form='id='+ idfk;
			connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');

			connect.onreadystatechange = function(){
				if (connect.readyState == 4 && connect.status == 200) {
					
					document.getElementById('_AJAX_FILTROCONTRATO_').innerHTML = connect.responseText;
				}
			}

			connect.open('POST', 'ajax.php?mode=filtrocamp', true);
			connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			connect.send(form);
}


