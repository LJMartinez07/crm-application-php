function ajaxemp(){

	var connect, form, response, result, idfk;
	idfk = _('id').value;
			
			form='id='+ idfk;
			connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');

			connect.onreadystatechange = function(){
				if (connect.readyState == 4 && connect.status == 200) {
					document.getElementById('chat').innerHTML = connect.responseText;
				}
			}

			connect.open('POST', 'ajax.php?mode=chatemp', true);
			connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			connect.send(form);
		}

setInterval(function(){ajaxemp();}, 4000);


