/*=========================================================
=====================Eliminar contacto====================
===========================================================*/

function EliminarCont(id) {
    var txt;
    var r = confirm("Esta Seguro de Eliminar Contacto");
    if (r == true) {
        EliminarContacto(id);
    } else {
        txt = "Ha Seleccionado cancelar!";
    }
}

function EliminarContacto(id) {
    var connect, form, response, result;

    form = 'id=' + id;

   connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
        connect.onreadystatechange = function () {
            if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
                if (connect.responseText==1) {
                    /*result = 'alertify.success("Bienvenido")';
                    result +='<h4 class="alert-heading">Correcto!</h4>';
                    result +='<p>Contacto agregado</p>';
                    result +='<hr>';
                    result +='<p class="mb-0"></p>';
                    result +='</div>';*/
                  //  _('_AJAX_NOT').innerHTML = result;
                    window.location.href="?view=dashboard&contacto=true&s=true";
                    //location.reload();
                    
                }else{
                    _('_AJAX_CONTACTOTAB_').innerHTML = connect.responseText;
                    
                }
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
            }else if (connect.readyState != 4) {
                result = '<div class="alert alert-dismissible alert-warning">';
                result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                result += '<h4 class="alert-heading">Proceso!</h4>';
                result += ' <p class="mb-0">Espere un momento porfavor..</p>';
                result += '</div>';
                _('_AJAX_CONTACTOTAB_').innerHTML = result;
            }
        }
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
        connect.open('POST', 'ajax.php?mode=eliminar', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(form);
}


/*=========================================================
=====================Fin->Eliminar contacto====================
===========================================================*/



/*=========================================================
=====================Modificar contacto====================
===========================================================*/



function EnviarDatosContactoMod(datos) {
 

   
    d = datos.split("||");

    $('#id1').val(d[0]);
    $('#nombre1').val(d[1]);
   

    $('#apellido1').val(d[2]);
    $('#cuenta1').val(d[3]);
    $('#email1').val(d[4]);
    $('#telefono1').val(d[5]);
    $('#telefono21').val(d[6]);
    $('#celular1').val(d[7]);
    $('#fuente1').val(d[8]);
    $('#tipo3').val(d[9]);


}


function ActualizarDatos() {

    var connect, form, response, result, id, nombre, apellido, cuenta, email, telefono, telefono2, celular, fuente, tipo;
    id = _('id1').value;
    nombre = _('nombre1').value;
    apellido = _('apellido1').value;
    cuenta = _('cuenta1').value;
    email = _('email1').value;
    telefono = _('telefono1').value;
    telefono2 = _('telefono21').value;
    celular = _('celular1').value;
    fuente = _('fuente1').value;
    tipo = _('tipo3').value;
    if (nombre != "" && apellido != "" && email != "" && telefono != ""  && tipo != "") {
        form='id='+ id + '&nombre='+ nombre + '&apellido=' + apellido +'&cuenta='+cuenta  + '&email=' + email +'&telefono='+telefono +'&telefono2='+telefono2  + '&celular=' + celular +'&fuente='+fuente +'&tipo='+tipo;
        //Si el navegador es muy viejo, se usa ActiveXObject... de resto, todos los navegadores usan XMLHttpRequest
        connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
        connect.onreadystatechange = function () {
            if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
                if (connect.responseText==1) {
                    result = '<div class="alert alert-success" role="alert">';
                    result +='<h4 class="alert-heading">Correcto!</h4>';
                    result +='<p>Contacto modificado</p>';
                    result +='<hr>';
                    result +='<p class="mb-0"></p>';
                    result +='</div>';
                    _('_AJAX_CONTACTOACT_').innerHTML = result;
                    location.reload();
                    
                }else{
                    _('_AJAX_CONTACTOACT_').innerHTML = connect.responseText;
                }
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
            }else if (connect.readyState != 4) {
                result = '<div class="alert alert-dismissible alert-warning">';
                result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                result += '<h4 class="alert-heading">Proceso!</h4>';
                result += ' <p class="mb-0">Espere un momento porfavor..</p>';
                result += '</div>';
                _('_AJAX_CONTACTOACT_').innerHTML = result;
            }
        }
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
        connect.open('POST', 'ajax.php?mode=modificar', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(form);



    }else{
        result = '<div class="alert alert-dismissible alert-warning">';
        result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        result += '<h4 class="alert-heading">Error!</h4>';
        result += ' <p class="mb-0">Porfavor llena los datos con el *</p>';
        result += '</div>';
        _('_AJAX_CONTACTOACT_').innerHTML = result;
    }

}
   

   
    


function runScriptActualicarCont(e) {
 // si la tecla presionada es igual al número ASCI de la tecla ENTER
    if (e.keyCode == 13) {
        
        actualizardatos();
    }
}


/*=========================================================
=====================Fin->modificar contacto====================
===========================================================*/

/*=========================================================
=====================Eliminar Cuenta====================
===========================================================*/

function EliminarPreguntar(id) {
      var txt;
    var r = confirm("Esta Seguro de Eliminar la cuenta");
    if (r == true) {
        EliminarCuenta(id);
    } else {
        txt = "Ha Seleccionado cancelar!";
    }
}

function EliminarCuenta(id) {
    var connect, form, response, result;

    form = 'id=' + id;

   connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
        connect.onreadystatechange = function () {
            if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
                if (connect.responseText==1) {
                    /*result = 'alertify.success("Bienvenido")';
                    result +='<h4 class="alert-heading">Correcto!</h4>';
                    result +='<p>Contacto agregado</p>';
                    result +='<hr>';
                    result +='<p class="mb-0"></p>';
                    result +='</div>';*/
                  //  _('_AJAX_NOT').innerHTML = result;
                    window.location.href="?view=dashboard&cuenta=true&s=true";
                    //location.reload();
                    
                }else{
                    _('_AJAX_CUENTADEL_').innerHTML = connect.responseText;
                }
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
            }else if (connect.readyState != 4) {
                result = '<div class="alert alert-dismissible alert-warning">';
                result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                result += '<h4 class="alert-heading">Proceso!</h4>';
                result += ' <p class="mb-0">Espere un momento porfavor..</p>';
                result += '</div>';
                _('_AJAX_CUENTADEL_').innerHTML = result;
            }
        }
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
        connect.open('POST', 'ajax.php?mode=eliminarCuent', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(form);
}


/*=========================================================
=====================FIN->Eliminar Cuenta====================
===========================================================*/




/*=========================================================
===================== modificar cuentas====================
===========================================================*/

function EnviarDatosModificarCuen(datos) {
   
    
    d = datos.split("||");

    $('#idCuenMo').val(d[0]);
    $('#nombreCuenMo').val(d[1]);
    $('#no_cuentaCuenMo').val(d[2]);
    $('#tipo_cuentaCuenMo').val(d[3]);
    $('#ingresoCuenMo').val(d[4]);
    $('#telefonoCuenMo').val(d[5]);
    $('#faxCuenMo').val(d[6]);
    $('#sitio_webCuenMo').val(d[7]);
    $('#direccionCuenMo').val(d[8]);
    $('#codigo_postalCuenMo').val(d[9]);
    $('#descripcionCuenMo').val(d[10]);


}

function actualizardatoscuenta() {
    var connect, form, response, result, id, nombre, no_cuenta, tipo_cuenta, ingreso, telefono, fax, sitio_web, direccion, codigo_postal, descripcion;
    id = _('idCuenMo').value;
    nombre = _('nombreCuenMo').value;
    no_cuenta = _('no_cuentaCuenMo').value;
    tipo_cuenta = _('tipo_cuentaCuenMo').value;
    ingreso = _('ingresoCuenMo').value;
    telefono = _('telefonoCuenMo').value;
    fax = _('faxCuenMo').value;
    sitio_web = _('sitio_webCuenMo').value;
    direccion = _('direccionCuenMo').value;
    codigo_postal = _('codigo_postalCuenMo').value;
    descripcion = _('descripcionCuenMo').value;

    if (nombre != "" && no_cuenta != "" && tipo_cuenta != "" && ingreso != "" && telefono != "" && sitio_web != "" && direccion != "" && codigo_postal != "") {

        form = 'id=' + id + '&nombre='+ nombre + '&no_cuenta=' + no_cuenta + '&tipo_cuenta=' + tipo_cuenta + '&ingreso=' + ingreso + '&telefono=' + telefono + '&fax=' + fax + '&sitio_web=' + sitio_web + '&direccion=' + direccion + '&codigo_postal=' + codigo_postal + '&descripcion=' + descripcion;
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
                    _('_AJAX_CUENTAM_').innerHTML = result;
                    location.reload();

                }else{
                    _('_AJAX_CUENTAM_').innerHTML = connect.responseText;
                }

            }else if (connect.readyState != 4) {
                result = '<div class="alert alert-dismissible alert-warning">';
                result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                result += '<h4 class="alert-heading">Proceso!</h4>';
                result += ' <p class="mb-0">Espere un momento porfavor..</p>';
                result += '</div>';
                _('_AJAX_CUENTAM_').innerHTML = connect.responseText;


            }
        }
        connect.open('POST', 'ajax.php?mode=ModCuent', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(form);
    }else{
        result = '<div class="alert alert-dismissible alert-warning">';
        result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        result += '<h4 class="alert-heading">Faltan Campos!!</h4>';
        result += '<p class="mb-0">Favor llenar los campos faltantes que tiene *</p>';
        result += '</div>';
        _('_AJAX_CUENTAM_').innerHTML = result;

    }
}

    



function runScriptActualicarCuenta(e) {
 // si la tecla presionada es igual al número ASCI de la tecla ENTER
    if (e.keyCode == 13) {
   
        actualizardatoscuenta();
    }
}


/*=========================================================
=====================FIN-->modificar cuentas====================
===========================================================*/





/*=========================================================
=====================Eliminar empleados ====================
===========================================================*/



function EliminarPreguntaEmp(id) {
    var txt;
    var r = confirm("Esta Seguro de Eliminar este contacto");
    if (r == true) {
        EliminarEmpleado(id);
    } else {
        txt = "Ha Seleccionado cancelar!";
    }
}
function EliminarEmpleado(id) {
    var connect, form, response, result;

    form = 'id=' + id;

   connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
        connect.onreadystatechange = function () {
            if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
                if (connect.responseText==1) {
                    /*result = 'alertify.success("Bienvenido")';
                    result +='<h4 class="alert-heading">Correcto!</h4>';
                    result +='<p>Contacto agregado</p>';
                    result +='<hr>';
                    result +='<p class="mb-0"></p>';
                    result +='</div>';*/
                  //  _('_AJAX_NOT').innerHTML = result;
                    window.location.href="?view=dashboard&veremp=true&s=true";
                    //location.reload();
                    
                }else{
                    _('_AJAX_EMP_').innerHTML = connect.responseText;
                }
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
            }else if (connect.readyState != 4) {
                result = '<div class="alert alert-dismissible alert-warning">';
                result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                result += '<h4 class="alert-heading">Proceso!</h4>';
                result += ' <p class="mb-0">Espere un momento porfavor..</p>';
                result += '</div>';
                _('_AJAX_EMP_').innerHTML = result;
            }
        }
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
        connect.open('POST', 'ajax.php?mode=eliminarEmp', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(form);
}


/*=========================================================
=====================Fin ->Eliminar empleados ====================
===========================================================*/





/*=========================================================
=====================Modificar empleados ====================
===========================================================*/



function EnviarDatosModificarEmp(datos) {
   

    d = datos.split("||");

    $('#idEmp').val(d[0]);
    $('#nombreEmp').val(d[1]);
    $('#apellidoEmp').val(d[2]);
    $('#emailEmp').val(d[3]);
    $('#cedulaEmp').val([4]);
    $('#cargoEmp').val(d[5]);
 
   


}




function ModificarEmp() {

    var connect, form, response, result, id, nombre, apellido, email, cedula, cargo;
    id = _('idEmp').value;
    nombre = _('nombreEmp').value;
    apellido = _('apellidoEmp').value;
    email = _('emailEmp').value;
    cedula = _('cedulaEmp').value;
    cargo = _('cargoEmp').value;
    
    if (nombre != "" && apellido != "" && email != "" ) {
        form='id='+ id + '&nombre='+ nombre + '&apellido=' + apellido +'&email=' + email + '&cedula=' + cedula + '&cargo=' + cargo;
        //Si el navegador es muy viejo, se usa ActiveXObject... de resto, todos los navegadores usan XMLHttpRequest
        connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
        connect.onreadystatechange = function () {
            if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
                if (connect.responseText==1) {
                    result = '<div class="alert alert-success" role="alert">';
                    result +='<h4 class="alert-heading">Correcto!</h4>';
                    result +='<p>Contacto agregado</p>';
                    result +='<hr>';
                    result +='<p class="mb-0"></p>';
                    result +='</div>';
                    _('_AJAX_EMPLEADO_').innerHTML = result;
                    location.reload();
                    
                }else{
                    _('_AJAX_EMPLEADO_').innerHTML = connect.responseText;
                }
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
            }else if (connect.readyState != 4) {
                result = '<div class="alert alert-dismissible alert-warning">';
                result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                result += '<h4 class="alert-heading">Proceso!</h4>';
                result += ' <p class="mb-0">Espere un momento porfavor..</p>';
                result += '</div>';
                _('_AJAX_EMPLEADO_').innerHTML = result;
            }
        }
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
        connect.open('POST', 'ajax.php?mode=modificarEmp', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(form);



    }else{
        result = '<div class="alert alert-dismissible alert-warning">';
        result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        result += '<h4 class="alert-heading">Error!</h4>';
        result += ' <p class="mb-0">Porfavor llena los datos con el *</p>';
        result += '</div>';
        _('_AJAX_CONTACTO1_').innerHTML = result;
    }

}

function runScriptActualicarEmp(e) {
 // si la tecla presionada es igual al número ASCI de la tecla ENTER
    if (e.keyCode == 13) {
   
        ModificarEmp();
    }
}


/*=========================================================
=====================FIN ->Modificar empleados ====================
===========================================================*/




/*=========================================================
=====================Eliminar Campana ====================
===========================================================*/



function preguntarsinoCampana(id) {
    var txt;
    var r = confirm("Esta Seguro de Eliminar esta campaña");
    if (r == true) {
        Eliminarcontacto(id);
    } else {
        txt = "Ha Seleccionado cancelar!";
    }
}

function Eliminarcontacto(id) {
    var connect, form, response, result;

    form = 'id=' + id;

   connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
        connect.onreadystatechange = function () {
            if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
                if (connect.responseText==1) {
                    /*result = 'alertify.success("Bienvenido")';
                    result +='<h4 class="alert-heading">Correcto!</h4>';
                    result +='<p>Contacto agregado</p>';
                    result +='<hr>';
                    result +='<p class="mb-0"></p>';
                    result +='</div>';*/
                  //  _('_AJAX_NOT').innerHTML = result;
                    //window.location.href="?view=dashboard&contacto=true&s=true";
                    location.reload();
                   // alertify.success('Has eliminado una Campaña');
                    
                }else{
                    _('_AJAX_NOT').innerHTML = connect.responseText;
                }
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
            }else if (connect.readyState != 4) {
                result = '<div class="alert alert-dismissible alert-warning">';
                result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                result += '<h4 class="alert-heading">Proceso!</h4>';
                result += ' <p class="mb-0">Espere un momento porfavor..</p>';
                result += '</div>';
                _('_AJAX_NOT').innerHTML = result;
            }
        }
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
        connect.open('POST', 'ajax.php?mode=ElimCampana', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(form);
}



/*=========================================================
=====================FIN ->Eliminar Campana ====================
===========================================================*/




/*=========================================================
=====================Modificar campana ====================
===========================================================*/


function agregarformCampa(datos) {

   
    d = datos.split("||");

    $('#id1').val(d[0]);
    $('#nombre1').val(d[1]);
    $('#estatus1').val(d[2]);
    $('#FechaI1').val(d[3]);
    $('#FechaF1').val(d[4]);
    $('#recaudacion1').val(d[5]);
    $('#descripcion1').val(d[6]);



}


function goMCampana() {
    var connect, form, response, result, nombre, estatus, fechai, fechaf, recaudacion, descripcion, id;
    id = _('id1').value;
    nombre = _('nombre1').value;
    estatus = _('estatus1').value;
    fechai = _('FechaI1').value;
    fechaf = _('FechaF1').value;
    recaudacion = _('recaudacion1').value;
    descripcion = _('descripcion1').value;
    if (nombre != "" && estatus != "" && fechai != "" && fechaf != "" && recaudacion != "" && descripcion != "" ) {
        form='id=' + id +'&nombre='+ nombre + '&estatus=' + estatus +'&fechai='+fechai  + '&fechaf=' + fechaf +'&recaudacion='+ recaudacion +'&descripcion='+ descripcion;
        //Si el navegador es muy viejo, se usa ActiveXObject... de resto, todos los navegadores usan XMLHttpRequest
        connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
        connect.onreadystatechange = function () {
            if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
                if (connect.responseText==1) {
                    result = '<div class="alert alert-success" role="alert">';
                    result +='<h4 class="alert-heading">Correcto!</h4>';
                    result +='<p>La Campaña Ha sido Modificada</p>';
                    result +='<hr>';
                    result +='<p class="mb-0"></p>';
                    result +='</div>';
                    _('_AJAX_MCAMPANA_').innerHTML = result;
                    location.reload();
                    
                }else{
                    _('_AJAX_MCAMPANA_').innerHTML = connect.responseText;
                }
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
            }else if (connect.readyState != 4) {
                result = '<div class="alert alert-dismissible alert-warning">';
                result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                result += '<h4 class="alert-heading">Proceso!</h4>';
                result += ' <p class="mb-0">Espere un momento porfavor..</p>';
                result += '</div>';
                _('_AJAX_MCAMPANA_').innerHTML = result;
            }
        }
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
        connect.open('POST', 'ajax.php?mode=Modifcampana', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(form);



    }else{
        result = '<div class="alert alert-dismissible alert-warning">';
        result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        result += '<h4 class="alert-heading">Error!</h4>';
        result += ' <p class="mb-0">Porfavor llena los datos</p>';
        result += '</div>';
        _('_AJAX_MCAMPANA_').innerHTML = result;
    }

}
function runScriptMCampana(e) {
    if (e.keyCode == 13) {
        goMCampana();
    }
}
   


/*=========================================================
=====================FIN ->Modificar campana ====================
===========================================================*/



/*=========================================================
=====================Modificar contrato====================
===========================================================*/
function EnviarDatosContrato(datos) {

   
    d = datos.split("||");

    $('#idContrato').val(d[0]);
    $('#nombreContra').val(d[1]);
    $('#tipoContra').val(d[2]);
    $('#cantidadContra').val(d[3]);
    $('#fechaContra').val(d[4]);
    $('#descripcionContra').val(d[5]);
   



}


function goModiContrato() {
    var connect, form, response, result, id, nombreContrato, tipo, cantidad, fechaf, descripcion;
    id = _('idContrato').value;
    nombreContrato = _('nombreContra').value;
    tipo = _('tipoContra').value;
    cantidad = _('cantidadContra').value;
    fechaf = _('fechaContra').value;
    descripcion = _('descripcionContra').value;
   
    if (nombreContrato != "" && cantidad != "" && fechaf != "" ) {
        form='id=' + id +'&nombre='+ nombreContrato + '&tipo=' + tipo +'&cantidad='+cantidad  + '&fechaf=' + fechaf +'&descripcion='+ descripcion;
        //Si el navegador es muy viejo, se usa ActiveXObject... de resto, todos los navegadores usan XMLHttpRequest
        connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
        connect.onreadystatechange = function () {
            if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
                if (connect.responseText==1) {
                    result = '<div class="alert alert-success" role="alert">';
                    result +='<h4 class="alert-heading">Correcto!</h4>';
                    result +='<p>El contrato ha sido modificado</p>';
                    result +='<hr>';
                    result +='<p class="mb-0"></p>';
                    result +='</div>';
                    _('_AJAX_MCONTRATO_').innerHTML = result;
                    location.reload();
                    
                }else{
                    _('_AJAX_MCONTRATO_').innerHTML = connect.responseText;
                }
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
            }else if (connect.readyState != 4) {
                result = '<div class="alert alert-dismissible alert-warning">';
                result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                result += '<h4 class="alert-heading">Proceso!</h4>';
                result += ' <p class="mb-0">Espere un momento porfavor..</p>';
                result += '</div>';
                _('_AJAX_MCONTRATO_').innerHTML = result;
            }
        }
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
        connect.open('POST', 'ajax.php?mode=Modifcontrato', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(form);



    }else{
        result = '<div class="alert alert-dismissible alert-warning">';
        result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        result += '<h4 class="alert-heading">Error!</h4>';
        result += ' <p class="mb-0">Porfavor llena los datos</p>';
        result += '</div>';
        _('_AJAX_MCONTRATO_').innerHTML = result;
    }

}
function runScriptModiContrato(e) {
    if (e.keyCode == 13) {
        goModiContrato();
    }
}

/*=========================================================
=====================FIN ->Modificar contrato ====================
===========================================================*/

/*=========================================================
=====================eliminar contrato ====================
===========================================================*/

function EliminarContratoPregunta(id) {
    var txt;
    var r = confirm("Esta Seguro de eliminar esta negociación?");
    if (r == true) {
        EliminarContrato(id);
    } else {
        txt = "Ha Seleccionado cancelar!";
    }
}

function EliminarContrato(id) {
    var connect, form, response, result;

    form = 'id=' + id;

   connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
        connect.onreadystatechange = function () {
            if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
                if (connect.responseText==1) {
                    /*result = 'alertify.success("Bienvenido")';
                    result +='<h4 class="alert-heading">Correcto!</h4>';
                    result +='<p>Contacto agregado</p>';
                    result +='<hr>';
                    result +='<p class="mb-0"></p>';
                    result +='</div>';*/
                  //  _('_AJAX_NOT').innerHTML = result;
                    //window.location.href="?view=dashboard&contacto=true&s=true";
                    location.reload();
                   // alertify.success('Has eliminado una Campaña');
                    
                }else{
                    _('_AJAX_CONTRATO_').innerHTML = connect.responseText;
                }
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
            }else if (connect.readyState != 4) {
                result = '<div class="alert alert-dismissible alert-warning">';
                result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                result += '<h4 class="alert-heading">Proceso!</h4>';
                result += ' <p class="mb-0">Espere un momento porfavor..</p>';
                result += '</div>';
                _('_AJAX_CONTRATO_').innerHTML = result;
            }
        }
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
        connect.open('POST', 'ajax.php?mode=ElimContrato', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(form);
}


/*=========================================================
=====================FIN->eliminar contrato ====================
===========================================================*/



/*=========================================================
===================== Eliminar tarea ====================
===========================================================*/

function preguntarsinoTarea(id) {
    var txt;
    var r = confirm("Esta Seguro de Eliminar esta Tarea");
    if (r == true) {
        EliminarTarea(id);
    } else {
        txt = "Ha Seleccionado cancelar!";
    }
}

function EliminarTarea(id) {
    var connect, form, response, result;

    form = 'id=' + id;

   connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
        connect.onreadystatechange = function () {
            if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
                if (connect.responseText==1) {
                    /*result = 'alertify.success("Bienvenido")';
                    result +='<h4 class="alert-heading">Correcto!</h4>';
                    result +='<p>Contacto agregado</p>';
                    result +='<hr>';
                    result +='<p class="mb-0"></p>';
                    result +='</div>';*/
                  //  _('_AJAX_NOT').innerHTML = result;
                    //window.location.href="?view=dashboard&contacto=true&s=true";
                    location.reload();
                   // alertify.success('Has eliminado una Campaña');
                    
                }else{
                    _('_AJAX_TAREAT_').innerHTML = connect.responseText;
                }
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
            }else if (connect.readyState != 4) {
                result = '<div class="alert alert-dismissible alert-warning">';
                result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                result += '<h4 class="alert-heading">Proceso!</h4>';
                result += ' <p class="mb-0">Espere un momento porfavor..</p>';
                result += '</div>';
                _('_AJAX_TAREAT_').innerHTML = result;
            }
        }
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
        connect.open('POST', 'ajax.php?mode=ElimTarea', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(form);
}

/*=========================================================
=====================FIN->eliminar tarea ====================
===========================================================*/

/*=========================================================
=====================Completar tarea ====================
===========================================================*/
function CompletarTarea(id) {
    var txt;
    var r = confirm("Esta Seguro que completo esta Tarea");
    if (r == true) {
        compTarea(id);
    } else {
        txt = "Ha Seleccionado cancelar!";
    }
}

function compTarea(id) {
    var connect, form, response, result;

    form = 'id=' + id;

   connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
        connect.onreadystatechange = function () {
            if (connect.readyState == 4 && connect.status ==200) {
//Si todo salió bien..
                if (connect.responseText==1) {
                    /*result = 'alertify.success("Bienvenido")';
                    result +='<h4 class="alert-heading">Correcto!</h4>';
                    result +='<p>Contacto agregado</p>';
                    result +='<hr>';
                    result +='<p class="mb-0"></p>';
                    result +='</div>';*/
                  //  _('_AJAX_NOT').innerHTML = result;
                    //window.location.href="?view=dashboard&contacto=true&s=true";
                    location.reload();
                   // alertify.success('Has eliminado una Campaña');
                    
                }else{
                    _('_AJAX_TAREAEMP_').innerHTML = connect.responseText;
                }
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
            }else if (connect.readyState != 4) {
                result = '<div class="alert alert-dismissible alert-warning">';
                result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                result += '<h4 class="alert-heading">Proceso!</h4>';
                result += ' <p class="mb-0">Espere un momento porfavor..</p>';
                result += '</div>';
                _('_AJAX_TAREAEMP_').innerHTML = result;
            }
        }
 //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
 //Enviamos el formulario (form)
        connect.open('POST', 'ajax.php?mode=completartarea', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(form);
}

/*=========================================================
=====================FIN->completar tarea====================
===========================================================*/


/*=========================================================
=====================Modificar Perfil====================
===========================================================*/

function runScriptModiPerfil(e) {
    if (e.keyCode == 13) {
        goModificarPerf();
        
    }
}

function goModificarPerf() {

    var connect, form, response, result, nombre, apellido, pais, email, telefono, celular, dominio, cargo;
    nombre= _('nombre').value;
    apellido= _('apellido').value;
    pais= _('pais').value;
    email= _('email').value;
    telefono= _('telefono').value;
    celular= _('celular').value;
    dominio= _('dominio').value;
    cargo= _('cargo').value;

    if (nombre != '' && apellido != '' && pais != '' && email != '' && telefono != '') {

        form = 'nombre='+ nombre+ '&&apellido='+apellido+'&&pais='+pais+'&&email='+email+'&&telefono='+telefono+'&&celular='+celular+'&&dominio='+dominio+'&&cargo='+cargo;
        connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('microsoft.XMLHTTP');
//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
        connect.onreadystatechange = function () {
            if (connect.readyState == 4 && connect.status ==200) {
                //Si todo salió bien..
                if (connect.responseText==1) {
                    /*result = 'alertify.success("Bienvenido")';
                    result +='<h4 class="alert-heading">Correcto!</h4>';
                    result +='<p>Contacto agregado</p>';
                    result +='<hr>';
                    result +='<p class="mb-0"></p>';
                    result +='</div>';*/
                  //  _('_AJAX_NOT').innerHTML = result;
                    //window.location.href="?view=dashboard&contacto=true&s=true";
                    location.reload();
                   // alertify.success('Has eliminado una Campaña');
                    
                }else{
                    _('_AJAX_CONFUSU_').innerHTML = connect.responseText;
                }
 //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
            }else if (connect.readyState != 4) {
                result = '<div class="alert alert-dismissible alert-warning">';
                result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                result += '<h4 class="alert-heading">Proceso!</h4>';
                result += ' <p class="mb-0">Espere un momento porfavor..</p>';
                result += '</div>';
                _('_AJAX_CONFUSU_').innerHTML = result;
            }



        } 
        connect.open('POST', 'ajax.php?mode=ModificarPerfil', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(form);
        }else{

        result = '<div class="alert alert-dismissible alert-warning">';
        result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        result += '<h4 class="alert-heading">Error!</h4>';
        result += ' <p class="mb-0">Porfavor llena los datos</p>';
        result += '</div>';
        _('_AJAX_CONFUSU_').innerHTML = result;

    }

}


/*=========================================================
=====================FIN ->Modificar Perfil====================
===========================================================*/
