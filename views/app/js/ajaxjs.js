
function ajax(){

	var connect, form, response, result;
	mensaje = 'naaa';
			
form='mensaje='+ mensaje;
			connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');

			connect.onreadystatechange = function(){
				if (connect.readyState == 4 && connect.status == 200) {
					document.getElementById('chat').innerHTML = connect.responseText;
				}
			}

			connect.open('POST', 'ajax.php?mode=chat', true);
			connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			connect.send(form);
		}

setInterval(function(){ajax();}, 4000);

