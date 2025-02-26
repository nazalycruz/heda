// Para que una caja de texto solo admita numeros enteros o flotantes
// <input name="txtQty" TYPE="text" size="6" onkeypress="onlyDigits(event,'noDec');">  noDec = no decimales
// <input name="txtPrice" TYPE="text" size="6" onkeypress="onlyDigits(event,'decOK');">  devOK = acepta decimales

var isIE = document.all?true:false;
var isNS = document.layers?true:false;

function onlyAlpha(e,campo,control_click) {
	var key = e.keyCode;
	if(key == 37 || key == 38 || key == 39 || key == 40 || key == 8 || key == 46 || key == 9) { // Left / Up / Right / Down Arrow, Backspace, Delete keys / tab
    return true;
  }
	if (key==13){
		return dispara_tab(e,campo,control_click);
	}
	var regex = new RegExp("^[a-zA-ZáéíóúÁÉÍÓÚÑñ0-9 ]+$");
	var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
	if (regex.test(str)) {
		return true;
	}
	else{
		return false;
	}
}

$(document).on('input', '.alpha-only', function() {
  var regexp = /[^a-zA-ZáéíóúÁÉÍÓÚÑñ ]/g;
  if($(this).val().match(regexp)){
    $(this).val( $(this).val().replace(regexp,'') );
  }
});

function onlyDigits(e,campo,decReq,control_click) {
	var key = (isIE) ? event.keyCode : e.which;
	var obj = (isIE) ? event.srcElement : e.target;
	var isNum = (key > 47 && key < 58) ? true : false;
	var dotOK = (key==46 && decReq=='decOK' && (obj.value.indexOf(".")<0 || obj.value.length==0)) ? true:false;
	var isDel = (key==0 || key==8)?true:false;
	//var isEnter = (key==13)?true:false;
	//if (key==13) return CapturaEnter(campo);
	if (key==13) return dispara_tab(e,campo,control_click);
	//e.which = (!isNum && !dotOK && isNS) ? 0 : key;
	//return (isNum || dotOK || isDel || isEnter);
	return (isNum || dotOK || isDel);
}

function ValidaEntero(e,campo){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;  //retroceso
    if (tecla==0) return true;  //tab
    if (tecla==13) return CapturaEnter(campo);  //tab
    patron = /[0-9]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}

function EsEnter(e,campo) {
	var key = (isIE) ? event.keyCode : e.which;
	if (key==13) return CapturaEnter(campo);
}

function SoloLectura(e,campo) {
	var key = (isIE) ? event.keyCode : e.which;
	if (key==0) return true;  //tab
	if (key==8) return true;  //retroceso
	if (key==13) return CapturaEnter(campo);
	return false;
}

/******************************************************************************/
function dispara_tab(e, control, control_click) {
    var inputs = $(':input:visible');
    if (e.which == 13) {
    	if( control_click != null ){
    		dispara_click(e, control_click);
    	}
    	else{
			e.preventDefault();
			var nextInput = inputs.get(inputs.index(control) + 1);
			if (nextInput) {
				if(nextInput.type == "text"){
					nextInput.select();
				}
				nextInput.focus();
	       }
    	}
    }
}

function dispara_tab_especial(e) {
	var inputs = $(':input:visible:enabled:not([readonly]), select'),
			nextInput = inputs.get(inputs.index($(e.target)) + 1);
	if (nextInput.type == "text") {
		nextInput.select();
	}
	if(nextInput.type == "select-one"){
		$('#'+nextInput.id).select2("focus");
	}
	nextInput.focus();
}

function fire_click_event(control_click) {
    $("#" + control_click).click();
    return false;
}

function dispara_click(e, control_click) {
		e.preventDefault();
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla == 13) {
        fire_click_event(control_click);
    }
    return true;
}

function CapturaEnter(Campo){
	var inputs = $(':input:visible');
	var nextInput = inputs.get(inputs.index(Campo) + 1);
	if (nextInput) {
		nextInput.focus();
	}
	return false;
}

function ColocarFoco(idcampo){
	$("#" + idcampo).focus();
}

function cargarpag(pagina, obj, async1, method, vars, bcargando){
	var cargando = '<p align="center" style="padding-top:50px;"><img src="assets/img/loaders/loader6.gif" width="31" height="31"></p><p align="center" style="font-size: 15px;"><b>Cargando datos...</b></p>';
	if(typeof(method) == "undefined" || method == "") { method = "GET"; }
	if(typeof(vars) == "undefined" || vars == "") { vars = ""; }
	if(typeof(bcargando) == "undefined" || bcargando === "") { bcargando = false; }
	if(async1 === false){
		var html = $.ajax({
					  url: pagina,
					  type: method,
					  async: false,
					  data: vars
					}).responseText;
		return html;
	}

	if(typeof(obj) == "undefined" || obj == "") { obj = "div#divcontenido"; }
	if(typeof(async1) == "undefined" || async1 == "") { async1 = true; }

		// $(obj).html(cargando);
		// $(obj).html();
	$.ajax({
		url: pagina,
		type: method,
		async: async1,
		// global: bcargando,
		data: vars,
		beforeSend: function() {
			if( bcargando ){ showLoading();	}
		},
		success: function(htmlcode){
			$(obj).html("");
			$(obj).html(htmlcode);
	  },
		error: function(xhr, textStatus, errorThrown){
			if ( xhr.status == 500 ) { alerta_emergente("Error interno del servidor, intente de nuevo más tarde.", "error");	}
			else if ( xhr.status == 404 ) { alerta_emergente("Página no encontrada, avise al Departamento de Servicios y Redes", "warning"); }
			else alerta_emergente("Mensaje de Error: "+textStatus+",  Solicitud XHR: "+StatusMsg(xhr.status), "error");
			var html_error = '<h2> Algo salió mal. Si persiste el problema comuníquelo al Departamento de Servicios y Redes.</h2>';
			$(obj).fadeOut('slow', function(){
				$(obj).html(html_error).fadeIn('slow');
			});
			return false;
		},
		complete: function( jqXHR, Status){
			hideLoading();
		}
	});
	return false;
}

function cargamodalGenerica(url, contenido, modal, vars, titulo, pie, bloqueado, bcargando){
	if (typeof(vars) == "undefined" || vars === "") { vars = ""; }
	if (typeof(bloqueado) == "undefined" || bloqueado === "") { bloqueado = false; }
	if (typeof(bcargando) == "undefined" || bcargando === "") { bcargando = false; }
	modal = modal.replace('#','');
	$.ajax({
		url: url,
		type: 'POST',
		async: true,
		global: bcargando,
		data: vars,
		beforeSend: function() {
			$(".btn").attr("disabled", "disabled");
		},
		success: function(htmlcode){
				$(contenido).fadeOut('slow', function () {
					$(contenido).html(htmlcode).fadeIn('slow');
					$("#TituloModal.modal-title").text(titulo);
					if (pie === 0) { $(".modal-footer").addClass('hidden'); }
					$(modal).data('bs.modal',null);
					var genModal = new bootstrap.Modal(document.getElementById(modal), {
						backdrop: (bloqueado ? 'static' : true),
						keyboard: !bloqueado
					});
					genModal.show();
					$(".btn").removeAttr("disabled");
					return true;
				});
		},
		error: function(XMLHttpRequest, errMsg, exception){
			$(".btn").removeAttr("disabled");
			alerta_emergente("jQuery message: "+errMsg+"   XMLHttpRequest: "+StatusMsg(XMLHttpRequest.status), 'error');
			return false;
		}
	});
}

function ocultamodalGenerica(varModal='modGeneral') {
	const cierraModal = document.getElementById(varModal);
	const modal = bootstrap.Modal.getInstance(cierraModal);
	if (modal != null) { modal.hide(); }
}

function Carga_Metodo(url, parametros, successCallback, cargando, multiform) {
	if (typeof(parametros) == "undefined") { parametros = ""; }
	if (typeof(cargando) == "undefined" || cargando === "") { cargando = false; }
	if (typeof(multiform) == "undefined" || multiform === "") { multiform = false; }

	if (typeof(successCallback) == "undefined" || successCallback === "") {
		Carga_Metodo(url, parametros, function (data) {
			if (typeof(data.status) == "undefined" || data.status === "" || typeof(data.message) == "undefined" || data.message === "") {
				alerta_emergente("No se recibió la respuesta esperada.", "warning");
			}
			else {
				if (data.status == false) { alerta_emergente(data.message, "warning"); }
				else { alerta_emergente(data.message, "success"); }
			}
	 	}, cargando, multiform);
		return false;
	}

	$.ajax({
		type: 'POST',
		url: url,
		data: parametros,
		processData: !multiform,
		contentType: (multiform ? false : "application/x-www-form-urlencoded; charset=UTF-8"),
		dataType: 'json',
		beforeSend: function() {
			if (cargando != false) {
				var texto = cargando.split("*");
				showLoading(texto[0],texto[1]);
			}
		},
		success: successCallback,
		error: function(xhr, textStatus, errorThrown) {
			if (xhr.status == 500) { alerta_emergente("Error interno del servidor, intente de nuevo más tarde.", "error");	}
			else if (xhr.status == 404) { alerta_emergente("Página no encontrada, avise al Departamento de Servicios y Redes", "warning"); }
			else alerta_emergente("Mensaje de Error: "+textStatus+",  Solicitud XHR: "+StatusMsg(xhr.status), "error");
			return false;
		},
		complete: function( jqXHR, Status) {
			if (cargando != false) { hideLoading(); }
		}
	});
	return false;
}

function CargarCatalogo(baseurl, tabla){
	cargarpag(baseurl+'index.php/catalogo/index', "div#content", true, "POST", "tabla=" + tabla);
}

function CargarModulo(baseurl, modulo){
	cargarpag(baseurl+'index.php/' + modulo, "div#content");
}

//configuración de alerta_emergente
iziToast.settings({
		transitionIn: 'fadeInDown',
		progressBar: false,
		close: true,
		timeout: 2500,
		closeOnClick: true,
		pauseOnHover: true,
		closeOnEscape: true
});

function alerta_emergente(mensaje, tipo, pos){
	//posiciones: 'bottomRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
	if(typeof(pos) == "undefined" || pos == "") { pos = "topCenter"; }
	switch(tipo){
		case 'error':
			iziToast.error({
	        message: mensaje,
	        position: pos,
	    });
			break;
		case 'success':
			iziToast.success({
	        message: mensaje,
	        position: pos,
	    });
			break;
		case 'warning':
			iziToast.warning({
	        message: mensaje,
	        position: pos,
	    });
			break;
		case 'info':
			iziToast.info({
	        message: mensaje,
	        position: pos,
	    });
			break;
		default:
			iziToast.show({
	        message: mensaje,
	        position: pos,
	    });
			break;
	}
}

function StatusMsg(id){
	var msg = "";
	switch(id){
		case 100 :  msg = "Continua-Esta respuesta significa que el servidor ha recibido los encabezados de la peticion, y que el cliente deberia proceder a enviar el cuerpo de la misma (en el caso de peticiones para las cuales el cuerpo necesita ser enviado; por ejemplo, una peticion Hypertext Transfer Protocol). Si el cuerpo de la peticion es largo, es ineficiente enviarlo a un servidor, cuando la peticion ha sido ya rechazada, debido a encabezados inapropiados. Para hacer que un servidor cheque si la peticion podria ser aceptada basada unicamente en los encabezados de la peticion, el cliente debe enviar Expect: 100-continue como un encabezado en su peticion inicial (vea Plantilla:Web-RFC: Expect header) y verificar si un codigo de estado 100 Continue es recibido en respuesta, antes de continuar (o recibir 417 Expectation Failed y no continuar)";  break;
		case 101 :  msg = "Conmutando protocolos";  break;
		case 200 :  msg = "OK-Respuesta estandar para peticiones correctas.";  break;
		case 201 :  msg = "Creado-La peticion ha sido completada y ha resultado en la creacion de un nuevo recurso.";  break;
		case 202 :  msg = "Aceptada";  break;
		case 203 :  msg = "Informacion no autorizada";  break;
		case 204 :  msg = "Sin contenido";  break;
		case 205 :  msg = "Recargar contenido";  break;
		case 206 :  msg = "Contenido parcial-La peticion servira parcialmente el contenido solicitado. Esta caracteristica es utilizada por herramientas de descarga como wget para continuar la transferencia de descargas anteriormente interrumpidas, o para dividir una descarga y procesar las partes simultaneamente.";  break;
		case 207 :	msg = "Estado multiple (Multi-Status, WebDAV)-El cuerpo del mensaje que sigue es un mensaje XML y puede contener algun numero de codigos de respuesta separados, dependiendo de cuantas sub-peticiones sean hechas."; break;
		case 300 :  msg = "Multiples opciones-Indica opciones multiples para el URI que el cliente podria seguir. Esto podria ser utilizado, por ejemplo, para presentar distintas opciones de formato para video, listar archivos con distintas extensiones o word sense disambiguation.";  break;
		case 301 :  msg = "Movido permanentemente-Esta y todas las peticiones futuras deberian ser dirigidas a la URI dada.";  break;
		case 302 :  msg = "Movido temporalmente-Este es el codigo de redireccion mas popular, pero tambien un ejemplo de las practicas de la industria contradiciendo el estandar. La especificacion HTTP/1.0 (RFC 1945) requeria que el cliente realizara una redireccion temporal (la frase descriptiva original fue \"Moved Temporarily\"), pero los navegadores populares lo implementaron como 303 See Other. Por tanto, HTTP/1.1 aniadio codigos de estado 303 y 307 para eliminar la ambiguedad entre ambos comportamientos. Sin embargo, la mayoria de aplicaciones web y librerias de desarrollo aun utilizan el codigo de respuesta 302 como si fuera el 303.";  break;
		case 303 :  msg = "Vea otra (desde HTTP/1.1)-La respuesta a la peticion puede ser encontrada bajo otra URI utilizando el metodo GET.";  break;
		case 304 :  msg = "No modificado-Indica que la peticion a la URL no ha sido modificada desde que fue requerida por ultima vez. Tipicamente, el cliente HTTP provee un encabezado como If-Modified-Since para indicar una fecha y hora contra la cual el servidor pueda comparar. El uso de este encabezado ahorra ancho de banda y reprocesamiento tanto del servidor como del cliente.";  break;
		case 305 :  msg = "Utilice un PROXY-Muchos clientes HTTP (como Mozilla[2] e Internet Explorer) no se apegan al estandar al procesar respuestas con este codigo, principalmente por motivos de seguridad.-Se trata de una redireccion que deberia haber sido hecha con otra URI, sin embargo aun puede ser procesada con la URI proporcionada. En contraste con el codigo 303, el metodo de la peticion no deberia ser cambiado cuando el cliente repita la solicitud. Por ejemplo, una solicitud POST tiene que ser repetida utilizando otra peticion POST.";  break;
		case 302 :	msg = "Cambio de PROXY-Esta respuesta esta descontinuada"; break;
		case 307 :  msg = "Redireccion temporal";  break;
		case 400 :  msg = "Solicitud incorrecta-La solicitud contiene sintaxis erronea y no deberia repetirse.";  break;
		case 401 :  msg = "No autorizado-Nombre de usuario o contrasenia incorrecta.";  break;
		case 402 :  msg = "Pago requerido-Olvido realizar su pago";  break;
		case 403 :  msg = "Prohibido-La solicitud fue legal, pero el servidor se rehusa a responderla.";  break;
		case 404 :  msg = "No encontrado-Indica que el recurso solicitado ya no esta disponible y no lo estara de nuevo. Este codigo deberia ser utilizado cuando un recurso haya sido quitado intencionalmente; sin embargo, en la practica, un codigo 404 No encontrado es expedido en su lugar. ";  break;
		case 405 :  msg = "Metodo no permitido-Una peticion fue hecha a una URI utilizando un metodo de solicitud no soportado por dicha URI";  break;
		case 406 :  msg = "No aceptable-"; break;
		case 407 :  msg = "Autenticacion Proxy requerida";  break;
		case 408 :  msg = "Tiempo de espera agotado-El cliente fallo al continuar la peticion (excepto durante la ejecucion de videos Adobe Flash cuando solo significa que el usuario cerro la ventana de video o se movio a otro. ref)";  break;
		case 409 :  msg = "Conflicto";  break;
		case 410 :  msg = "Ya no disponible-La pagina ya no esta disponible dentro del servidor";  break;
		case 411 :  msg = "Requiere longitud";  break;
		case 412 :  msg = "Fallo la precondicion";  break;
		case 413 :  msg = "Solicitud demasiado larga";  break;
		case 414 :  msg = "URI demasiado larga";  break;
		case 415 :  msg = "Tipo de medio no soportado";  break;
		case 416 :  msg = "Rango solicitado no disponible-El cliente ha preguntado por una parte de un archivo, pero el servidor no puede proporcionar esa parte, por ejemplo, si el cliente pregunto por una parte de un archivo que esta mas alla de los limites del fin del archivo.";  break;
		case 417 :  msg = "Fallo espectativa";  break;
		case 500 :  msg = "Error interno del Servidor-Es un codigo comunmente emitido por aplicaciones empotradas en servidores web, mismas que generan contenido dinamicamente, por ejemplo aplicaciones montadas en IIS o Tomcat, cuando se encuentran con situaciones de error ajenas a la naturaleza del servidor web.";  break;
		case 501 :  msg = "No implementado";  break;
		case 502 :  msg = "Error en el Gateway";  break;
		case 503 :  msg = "Servicio no disponible";  break;
		case 504 :  msg = "Tiempo del Gateway agotado";  break;
		case 505 :  msg = "Version del HTTP no soportada";  break;
		case 506 :	msg = "Variante tambien negocia (RFC 2295)"; break;
		case 507 :	msg = "Almacenamiento insuficiente (WebDAV - RFC 4918)"; break;
		case 509 :	msg = "Limite de ancho de banda excedido-Este codigo de estatus, mientras que es utilizado por muchos servidores, no es oficial."; break;
		case 510 :	msg = "No extendido (RFC 2774)"; break;
	}
	l = msg.split("-")[0];
	return l;
}

function cargar_listado_dependiente(rutacontrolador, nombrelst, lstpadreid, lsthijoid, lstnietoid, lstbisnietoid, lsttataranietoid){
	var valor = $("#"+lstpadreid).val();
	lstnietoid = lstnietoid || '';
	lstbisnietoid = lstbisnietoid || '';
	lsttataranietoid = lsttataranietoid || '';

	$.post(rutacontrolador, {nombrelst:nombrelst,valor:valor}, function(resultado,status){
		$('#'+lsthijoid+' option[value!=""]').remove();
		if( valor.length > 0 ){
			$('#'+lsthijoid).append(resultado);
			//$('#'+lsthijoid).attr("disabled",false);
		}//else $('#'+lsthijoid).attr("disabled",true);

		if(lstnietoid != ''){
			$('#'+lstnietoid+' option[value!=""]').remove();
			//$('#'+lstnietoid).attr("disabled",true);
		}

		if(lstbisnietoid != ''){
			$('#'+lstbisnietoid+' option[value!=""]').remove();
			//$('#'+lstbisnietoid).attr("disabled",true);
		}

		if(lsttataranietoid != ''){
			$('#'+lsttataranietoid+' option[value!=""]').remove();
			//$('#'+lsttataranietoid).attr("disabled",true);
		}
	});
}

function cargar_listado_nparametros(rutacontrolador, nombrelst, idlst, val1, val2, val3, val4, val5){
	$.post(rutacontrolador, {nombrelst:nombrelst,val1:val1,val2:val2,val3:val3,val4:val4,val5:val5}, function(resultado,status){
		$('#'+idlst+' option[value!=""]').remove();
		$('#'+idlst).append(resultado);
	});
}

function EsFechaValida(texto) {
    let partes = (texto || '').split('/'),
        fechaGenerada = new Date(partes[2], --partes[1], partes[0]);

    if (partes.length == 3 && fechaGenerada
     && partes[0] == fechaGenerada.getDate()
     && partes[1] == fechaGenerada.getMonth()
     && partes[2] == fechaGenerada.getFullYear()) {
        return true;
    }
    return false;
}

function FormatearFecha(fecha) {
	function pad(s) { return (s < 10) ? '0' + s : s; }
	return [pad(fecha.getDate()), pad(fecha.getMonth()+1), fecha.getFullYear()].join('/');
}

function ValidaRangoFechas(fecha1, fecha2) {
	let partes1 = (fecha1 || '').split('/'),
        rfecha1 = new Date(partes1[2], --partes1[1], partes1[0]);

    let partes2 = (fecha2 || '').split('/'),
        rfecha2 = new Date(partes2[2], --partes2[1], partes2[0]);

	if(rfecha1 > rfecha2) return false;
	else return true;
}

function inicializaDatatable(NombreDataTable,CantidadRegistros=5,MostrarFiltro=false){ //<<<RPERAZA(2018.08.24): CASU 1079/2018
	jQuery('#' + NombreDataTable).dataTable({
		"autoWidth" : true,
		//"sPaginationType": "full_numbers",
		"bLengthChange": false,
		"bFilter": MostrarFiltro,
		"iDisplayLength": CantidadRegistros,
		language: {
			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
				"sFirst":    "Primero",
				"sLast":     "Último",
				"sNext":     "",
				"sPrevious": ""
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			},
			"select": {
							"rows": {
								"_": "%d filas seleccionadas",
								"0": "",
								"1": "1 fila seleccionada"
							}
			}
		}
	});
}

function showLoading(titulo,mensaje) {
	if( typeof(titulo) == "undefined" || titulo === "" ) { titulo = "Cargando..."; }
	if( typeof(mensaje) == "undefined" || mensaje === "" ) { mensaje = ""; }
  $(document.body).css({'cursor' : 'wait'});

  swal.fire({
     title: titulo,
     html: mensaje,
     showConfirmButton: false,
     allowOutsideClick: false,
		 allowEscapeKey: false,
		 willOpen: () => {
			 swal.showLoading();
		 },
   });
}

function hideLoading(divId, name) {
  $(document.body).css({'cursor' : 'default'});
  swal.close();
}

function formato_fecha(fecha) {
	var fecha_formateada = "";
	if (fecha != "") {
		var datePart_fecha = fecha.match(/\d+/g), anio_fecha = datePart_fecha[2].substring(0,4), mes_fecha = datePart_fecha[1], dia_fecha = datePart_fecha[0];
		fecha_formateada = new Date(mes_fecha+'/'+dia_fecha+'/'+anio_fecha);
	}
	return fecha_formateada;
}

// function fecha_sql_a_normal(fecha) {
// 	var d = new Date(fecha);
// 	var f = ("00" + (d.getDate()).toString()).slice(-2) + "/" + ("00" + (d.getMonth()+1).toString()).slice(-2) + "/" + (1900 + d.getYear()).toString();
// 	return f;
// }

function fecha_sql_a_normal2(fecha,hora) {
	var d = new Date(fecha);
	var f = ("00" + (d.getDate()).toString()).slice(-2) + "/" + ("00" + (d.getMonth()+1).toString()).slice(-2) + "/" + (1900 + d.getYear()).toString();
	f = (f == '01/01/1900' ? '' : f);
	return f;
}

function fecha_sql_a_normal(fecha) {
	var d = new Date(fecha);
	var f = ("00" + (d.getDate()).toString()).slice(-2) + "/" + ("00" + (d.getMonth()+1).toString()).slice(-2) + "/" + (1900 + d.getYear()).toString();
	var h = (' '+d.getHours().toString().padStart(2, '0')+ ':' +d.getMinutes().toString().padStart(2, '0'));
	f = (f == '01/01/1900' ? '' : f);
	h = (h == ' 00:00' ? '' : h);
	return f + h;
}

function formato_moneda(numero,signo) {
	signo = (signo == false ? '' : '$');
	var moneda = '';
	moneda = Number.parseFloat(numero).toFixed(2);
	return signo+moneda;
}

function formatCurrency(total) {
	var neg = false;
	if (total < 0) {
	  neg = true;
	  total = Math.abs(total);
	}
	return (neg ? "-$" : '$') + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();
}

function formatPorcentaje(numero) {
	var porcentaje = '';
	numero = Number.parseFloat(numero).toFixed(2);
	return numero+"%";
}

function limpiaForm($form){
  $form.find(':input').not(':button, :submit, :reset, :checkbox, :radio, :hidden').val('');
  $form.find(':checkbox, :radio').prop('checked', false);
	$form.find('select').val('').trigger('change');
	$form.get(0).reset();
}
