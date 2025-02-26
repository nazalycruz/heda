<div id="divEnvios" class="card">
  <h5 class="card-header bg-pjey text-white">
    <b>Buscar Empleado</b>
  </h5>
  <div class="card-body">
    <form class="form-horizontal" method="post" id="frmBusca">
			<div class="row">
				<div class="col-2">
					<div class="form-group">
		        <label class="form-label" for="credencial">Credencial</label>
						<input type="text" class="form-control form-control-sm" name="credencial" id="credencial" value="" maxlength="5" onkeydown="return ProcesarCaptura(event, this);" onblur="formateaCredencial(this,5);" autocomplete="off"/>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-9" id="divGrupoNombre">
					<div class="form-group">
						<input type="hidden" id="idEmpleado" value="" class="parametro">
						<label class="mb-0 d-none d-xl-block">&nbsp;</label>
						<i id="spinNombre" class="fas fa-spinner fa-spin text-muted nom-emp" style="display:none;"></i>&nbsp;&nbsp;
						<span id="divLabelNombre" class="nom-emp" style="display:none;">
							<i class="fa fa-check text-success"></i>&nbsp; <span id="spanNombreEmpleado" class="text-muted"><b></b></span>
						</span>
						<span id="divLabelErrorNombre" class="nom-emp" style="display:none;">
							<i class="fa fa-times text-danger"></i>&nbsp; <span class="text-danger"><i>No se encontró al empleado</i></span>
						</span>
					</div>
				</div>
			</div>
    </form>
  </div>

  <div class="card-footer text-end">
		<button type="button" class="btn btn-inverse btn-sm" title="Búsqueda por nombre" onclick="buscar_empleado_porNombre();" id="btnBuscaEmpleadoporNombre" name="btnBuscaEmpleadoporNombre">
			<i class="fas fa-binoculars"></i> Empleado
		</button>
		<button type="button" id="btnBuscar" class="btn btn-inverse btn-sm" onclick="BuscarEmpleado();" title="Buscar Empleado">
			<i class="fa fa-search"></i> Buscar
		</button>
  </div>

</div>

<!-- #modal-dialog large -->
<div class="modal fade" data-backdrop="static" id="pnlModalLg">
  <div class="modal-dialog modal-lg">
    <div id="pnlModalContentLg" class="modal-content">

    </div>
  </div>
</div>

<!-- #modal-dialog large -->
<div class="modal fade" data-backdrop="static" id="pnlModal">
  <div class="modal-dialog">
    <div id="pnlModalContent" class="modal-content">

    </div>
  </div>
</div>

<script type="text/javascript">
  var busqueda = "";
  setTimeout(function FuncionesIniciales(){
    $("#credencial").focus();
  });

  $("#frmBusca").on('submit', function(evt){
    evt.preventDefault();
  });

  function BuscarEmpleado(){
    if (ValidarFormulario() == true) {
        var credencial= $('#credencial').val();

        $.ajax({
            url: "<?=base_url();?>inicio/BuscarEmpleado",
            type: "POST",
            async: false,
            data: "credencial="+credencial,
            error: function(XMLHttpRequest, errMsg, exception){
                var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
                alerta_emergente(msg, 'error');
            },
            success: function(htmlcode){
                var r = htmlcode.substr(0,1);
                switch(r){
                  case "@":
                    alerta_emergente('Acceso denegado.', 'error');
                    break;

                  case "*":
                    alerta_emergente('Parámetros incorrectos', 'error');
                    break;

                  case "2":
                    alerta_emergente('Número de credencial inválido.', 'error');
                    break;
                  case "0":
                    alerta_emergente('No existe ningún empleado con el número de credencial especificado.', 'error');
                    break;

                  case "1": //Todo correcto
                    var Clave = htmlcode.substr(1);

                    cargarpag('<?= base_url()?>'+'inicio/CargarFormulario', "div#content", true, "POST", "Clave="+Clave)
                    break;

                  default:
                    msg = htmlcode.split("-");
                    alerta_emergente(msg);
                    break;
                }
            }
        });
    }
  }

  function ValidarFormulario(){
    var resultado = true;

    if (resultado == true && $('#credencial').val().trim() == '' ){
        resultado = false;
        $('#credencial').focus();
        alerta_emergente('Se requiere el <b>Número de credencial</b>.', 'warning');
    }

    if (resultado == true && parseInt($('#credencial').val()) == 0 ){
        resultado = false;
        $('#credencial').focus();
        alerta_emergente('El número de credencial no es válido.', 'warning');
    }

    return resultado;
  }

	function ProcesarCaptura(e,campo) {
			let resultado = false;
			let ejecBusqueda = true;
			let _key = (window.Event) ? event.which : event.keyCode;
			if (_key > 95 && _key < 106) {
					resultado = true;
			}
			else if (_key > 47 && _key < 58) {
					resultado = true;
			}
			else if (_key == 8) {
					resultado = true;
			}
			else if (_key == 46) {
					resultado = true;
			}
			else if (_key == 37 | _key == 39 | _key == 9) { //Flechas y tab
					resultado = true;
					ejecBusqueda = false;
			}
			else {
					resultado = false;
					ejecBusqueda = false;
			}

			if(ejecBusqueda == true) InicializaContador();

			return resultado;
	}

	function InicializaContador() {
		clearInterval(busqueda);
		busqueda = setInterval(function(){ ActualizaEtiquetaEmpleado(); },300);
	}

	function ActualizaEtiquetaEmpleado() {
		clearInterval(busqueda);
		let Credencial = $("#credencial").val();
		if (Credencial != "") {
				$.ajax({
						url: "<?=base_url();?>index.php/reportes/get_empleado_por_credencial",
						type: 'POST',
						async: true,
						dataType: "JSON",
						data: "Credencial="+Credencial,
						error: function(XMLHttpRequest, errMsg, exception) {
							let msg = "jQuery message: "+errMsg+" XMLHttpRequest: "+StatusMsg(XMLHttpRequest.status);
							alerta_emergente(msg, 'error');
						},
						beforeSend:function(request) {
							$("#spinNombre").show();
						},
						success: function(data){
							if (data.status == false) {
								$("#idEmpleado").val('');
								$("#divLabelNombre").hide();
								$("#spanNombreEmpleado").text('')
								$("#divLabelErrorNombre").show();
							}
							else {
								$("#idEmpleado").val(data.datos.Id);
								$("#divLabelErrorNombre").hide();
								$("#divLabelNombre").show();
								$("#spanNombreEmpleado").text(data.datos.Nombre + ' ' + data.datos.Apellido1 + ' ' + data.datos.Apellido2)
							}
						},
						complete: function(request, json){
							$("#spinNombre").hide();
						}
				});
		}
		else {
			$("#idEmpleado").val('');
			$("#divLabelNombre").hide();
			$("#spanNombreEmpleado").text('')
			$("#divLabelErrorNombre").hide();
		}
	}

  var formateaCredencial = (obj,largo) => $(obj).val(String($(obj).val()).padStart(largo, '0'));

	function buscar_empleado_porNombre() {
	  cargamodalGenerica('<?= base_url() ?>generico/carga_vista', '#modContenido', '#modGeneral', {vista:"empleado/buscar_por_nombre"}, "Buscar empleado por nombre", 1);
	  return false;
	}

	$("#credencial").on("input", function() {
		ProcesarCaptura(this);
	});
</script>
