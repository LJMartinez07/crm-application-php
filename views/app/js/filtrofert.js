function Todos(argument) {

	var connect, form, response, result, idfk;
	idfk = 7;
			
			form='id='+ idfk;
			connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');

			connect.onreadystatechange = function(){
				if (connect.readyState == 4 && connect.status == 200) {
					
					document.getElementById('_AJAX_FILTROOFERTA_').innerHTML = connect.responseText;
				}
			}

			connect.open('POST', 'ajax.php?mode=filtrofer', true);
			connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			connect.send(form);


	
}
function Aceptados(argument) {

	var connect, form, response, result, idfk;
	idfk = 1;
			
			form='id='+ idfk;
			connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');

			connect.onreadystatechange = function(){
				if (connect.readyState == 4 && connect.status == 200) {
					
					document.getElementById('_AJAX_FILTROOFERTA_').innerHTML = connect.responseText;
				}
			}

			connect.open('POST', 'ajax.php?mode=filtrofer', true);
			connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			connect.send(form);



}
function Proceso(argument) {
	var connect, form, response, result, idfk;
	idfk = 3;
			
			form='id='+ idfk;
			connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');

			connect.onreadystatechange = function(){
				if (connect.readyState == 4 && connect.status == 200) {
					
					document.getElementById('_AJAX_FILTROOFERTA_').innerHTML = connect.responseText;
				}
			}

			connect.open('POST', 'ajax.php?mode=filtrofer', true);
			connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			connect.send(form);





}
function Cancelados(argument) {
	var connect, form, response, result, idfk;
	idfk = 2;
			
			form='id='+ idfk;
			connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');

			connect.onreadystatechange = function(){
				if (connect.readyState == 4 && connect.status == 200) {
					
					document.getElementById('_AJAX_FILTROOFERTA_').innerHTML = connect.responseText;
				}
			}

			connect.open('POST', 'ajax.php?mode=filtrofer', true);
			connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			connect.send(form);


}