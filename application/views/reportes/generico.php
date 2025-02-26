<h1 class="page-header">Reporteador Genérico</h1>

<?php
$attributes = array("id" => "frmGenerarReporte", "name" => "frmGenerarReporte", "onsubmit" => "return PostBackFrmGenerarReporte(this, event);");
echo form_open("reportes/procesar_reporte_generico", $attributes);
?>
<div class="card mb-2">
	<div class="card-body">
		<div class="row mb-3">
			<div class="col">
				<div class="form-group">
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" id="checkCredencial" name="Credencial" value="Credencial" checked/>
					  <label class="form-check-label" for="checkCredencial">Credencial</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkCompleto" name="nombrecompleto" value="Nombre Completo" checked/>
						<label class="form-check-label" for="checkCompleto">Nombre Completo</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkNombre" name="Nombre" value="Nombre"/>
						<label class="form-check-label" for="checkNombre">Nombre</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkApPaterno" name="Apellido1" value="Primer Apellido"/>
						<label class="form-check-label" for="checkApPaterno">Primer Apellido</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkApMaterno" name="Apellido2" value="Segundo Apellido"/>
						<label class="form-check-label" for="checkApPaterno">Segundo Apellido</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkDependencia" name="dependencia" value="Dependencia"/>
						<label class="form-check-label" for="checkDependencia">Dependencia</label>
					</div>
				</div>
			</div>

		</div>

		<div class="row mb-3">

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkCategoria" name="categoria" value="Categoría"/>
						<label class="form-check-label" for="checkCategoria">Categoría</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkSexo" name="Sexo" value="Sexo"/>
						<label class="form-check-label" for="checkSexo">Sexo</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkRFC" name="RFC" value="RFC"/>
						<label class="form-check-label" for="checkRFC">RFC</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkCURP" name="CURP" value="CURP"/>
						<label class="form-check-label" for="checkCURP">CURP</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkEmail" name="Exper" value="Correo Electrónico"/>
						<label class="form-check-label" for="checkEmail">Correo Electrónico</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkFechaNac" name="FechaNac" value="Fecha de Nacimiento"/>
						<label class="form-check-label" for="checkCURP">Fecha de Nacimiento</label>
					</div>
				</div>
			</div>

		</div>

		<div class="row mb-3">

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkContrato" name="TipoContra" value="Tipo de Contrato"/>
						<label class="form-check-label" for="checkContrato">Tipo de Contrato</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkHijos" name="Hijos" value="Hijos"/>
						<label class="form-check-label" for="checkHijos">Hijos</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkTurno" name="turno" value="Turno"/>
						<label class="form-check-label" for="checkTurno">Turno</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkEstado" name="Estado" value="Estado"/>
						<label class="form-check-label" for="checkEstado">Estado</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkDireccion" name="Direccion" value="Dirección"/>
						<label class="form-check-label" for="checkDireccion">Dirección</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkColonia" name="colonia" value="Colonia"/>
						<label class="form-check-label" for="checkColonia">Colonia</label>
					</div>
				</div>
			</div>

		</div>

		<div class="row mb-3">

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkZona" name="Zona" value="Zona"/>
						<label class="form-check-label" for="checkZona">Zona</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkCiudad" name="ciudad" value="Ciudad"/>
						<label class="form-check-label" for="checkCiudad">Ciudad</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkCP" name="CodPostal" value="Código Postal"/>
						<label class="form-check-label" for="checkCP">Código Postal</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkCSF" name="CSF" value="Código Postal de Situación Fiscal"/>
						<label class="form-check-label" for="checkCSF">CSF</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkFechaAlta" name="FechaAlta" value="Fecha de Alta"/>
						<label class="form-check-label" for="checkFechaAlta">Fecha de Alta</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkEstado" name="baja" value="De baja"/>
						<label class="form-check-label" for="checkEstado">De Baja</label>
					</div>
				</div>
			</div>

		</div>

		<div class="row mb-3">

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkFechaBaja" name="FechaBaja" value="Fecha de Baja"/>
						<label class="form-check-label" for="checkFechaBaja">Fecha de Baja</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkFechaIniVigCred" name="FechaIniVigCred" value="Fecha Inicio Credencial"/>
						<label class="form-check-label" for="checkFechaIniVigCred">Fecha Inicio Credencial</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkFechaFinVigCred" name="FechaFinVigCred" value="Fecha Final Credencial"/>
						<label class="form-check-label" for="checkFechaFinVigCred">Fecha Final Credencial</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkSindicato" name="sindicato" value="Sindicato"/>
						<label class="form-check-label" for="checkSindicato">Sindicato</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkCorreoInst" name="CorreoInstitucional" value="Correo Institucional"/>
						<label class="form-check-label" for="checkCorreoInst">Correo Institucional</label>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkTransISSTEY" name="transicion" value="Aportación ISSTEY"/>
						<label class="form-check-label" for="checkTransISSTEY">Aportación ISSTEY</label>
					</div>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkEmisor" name="emisor" value="Emisor"/>
						<label class="form-check-label" for="checkEmisor">Emisor</label>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkEscolaridad" name="escolaridad" value="Escolaridad"/>
						<label class="form-check-label" for="checkEscolaridad">Escolaridad</label>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkIMSS" name="IMSS" value="IMSS"/>
						<label class="form-check-label" for="checkIMSS">IMSS</label>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkEdoCivil" name="EdoCivil" value="Estado Civil"/>
						<label class="form-check-label" for="checkIMSS">Estado Civil</label>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkTelefono" name="Telefono" value="Telefono"/>
						<label class="form-check-label" for="checkTelefono">Teléfono</label>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="checkDireccion" name="Direccion" value="Dirección"/>
						<label class="form-check-label" for="checkDireccion">Dirección</label>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="card-footer text-end">
		<button type="button" class="btn btn-outline-inverse btn-sm" title="Seleccionar todos" id="btnSeleccionarTodos" name="btnSeleccionarTodos">
			<i class="fa-regular fa-square-check"></i> Seleccionar Todos
		</button>
		<button type="button" class="btn btn-outline-inverse btn-sm" title="Anular Selección" id="btnAnularSeleccion" name="btnAnularSeleccion">
			<i class="fa-regular fa-square"></i> Anular selección
		</button>
	</div>
</div>

<div class="card mb-2">
  <div class="card-header bg-silver-600 fw-bold">
    Filtros
  </div>
  <div class="card-body">
    <div class="row mb-2">

			<div class="col-3">
				<div class="form-group">
					<label for="quincena2" class="form-label">Período</label>
					<select class="form-control form-control-sm select2-sm gen_catalogos" id="rpt_periodo" name="rpt_periodo">
						<option value=""></option>
						<?= $quincenas; ?>
					</select>
				</div>
			</div>

    	<div class="col-2">
        <div class="form-group">
          <label for="cf_dependencia" class="form-label">Dependencia</label>
          <select class="form-control gen_catalogos form-control-sm select2-sm" id="rpt_dependencia" name="rpt_dependencia">
						<?= $catdependencias; ?>
          </select>
        </div>
      </div>

      <div class="col-2">
        <div class="form-group">
          <label for="cf_categoria" class="form-label">Categoría</label>
          <select class="form-control gen_catalogos form-control-sm select2-sm" id="rpt_categoria" name="rpt_categoria">
						<?= $catcategorias; ?>
          </select>
        </div>
      </div>

			<div class="col-2">
				<div class="form-group">
					<label class="form-label">Tipo de Contrato</label>
					<select class="form-control form-control-sm select2-sm gen_catalogos" id="rpt_Contrato" name="rpt_Contrato">
						<option value="0" selected>Todos</option>
						<option value="P">Permanente</option>
					</select>
				</div>
			</div>

      <div class="col-1">
        <div class="form-group">
          <label class="form-label">Con hijos</label>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input rptFiltros" id="rpt_chckHijos" name="rpt_chckHijos" value="1">
            <label class="custom-control-label" for="rpt_chckHijos"></label>
          </div>
        </div>
      </div>

			<div class="col-1">
				<div class="form-group">
					<label class="form-label">Madre/Padre</label>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input rptFiltros" id="rpt_chckMadrePadre" name="rpt_chckMadrePadre" value="1">
						<label class="custom-control-label" for="rpt_chckMadrePadre"></label>
					</div>
				</div>
			</div>

			<!-- <div class="col-2">
				<div class="form-group">
					<label for="rpt_estado" class="form-label">Estado</label>
					<select class="form-control form-control-sm select2-sm gen_catalogos" id="rpt_estado" name="rpt_estado">
						<option></option>
						<option value="A" selected>ACTIVO</option>
						<option value="">SIN ESTADO</option>
						<option value="I">INACTIVO</option>
						<option value="B">BAJA</option>
						<option value="VA">VACACIONES</option>
					</select>
				</div>
			</div> -->

    </div>
		<div class="row mt-2">
			<div class="col-1">
				<div class="form-group">
					<label for="rpt_Sexo" class="form-label">Sexo</label>
					<select class="form-control form-control-sm select2-sm gen_catalogos" id="rpt_Sexo" name="rpt_Sexo">
						<option></option>
						<option value="M">Masculino</option>
						<option value="F">Femenino</option>
					</select>
				</div>
			</div>
			<div class="col-1">
				<div class="form-group">
					<label class="form-label">Liquidado</label>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input rptFiltros" id="rpt_liquidado" name="rpt_liquidado" value="1">
						<label class="custom-control-label" for="rpt_liquidado"></label>
					</div>
				</div>
			</div>
			<div class="col-1">
				<div class="form-group">
					<label class="form-label">Inactivo</label>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input rptFiltros" id="rpt_inactivo" name="rpt_inactivo" value="1">
						<label class="custom-control-label" for="rpt_inactivo"></label>
					</div>
				</div>
			</div>
			<div class="col-2">
				<div class="form-group">
					<label for="rpt_Sexo" class="form-label">Emisor</label>
					<select class="form-control form-control-sm select2-sm gen_catalogos" id="rpt_emisor" name="rpt_emisor">
						<option value="0" selected>Todos</option>
						<option value="1">HSBC</option>
						<option value="5">SANTANDER</option>
						<option value="6">SCOTIABANK</option>
					</select>
				</div>
			</div>
			<div class="col-2">
				<div class="form-group">
					<label for="rpt_Credencial" class="form-label">Credencial</label>
					<input type="text" class="form-control form-control-sm rptCredencial" id="rpt_credencial" name="rpt_credencial" placeholder="Credencial" autocomplete="off">
				</div>
			</div>
		</div>
  </div>

  <div class="card-footer f-w-600 text-end">
		<button class="btn btn-inverse btn-sm" title="Procesar reporte" id="btnProcesarReporte" name="btnProcesarReporte">
			<i class="fas fa-search"></i> Consultar
		</button>
  </div>
</div>

<?php
echo form_close();
?>

<div class="card mt-2" style="display:none;" id="cardtblReporte">
	<div class="card-body" id="resultReporte">

	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$(".gen_catalogos").select2({
		language: "es",
		placeholder: "Seleccione un Elemento",
		width:'100%',
	}).on("select2:close", function (event) {
			setTimeout(function() {
				$('.select2-container-active').removeClass('select2-container-active');
				$(':focus').blur();
				// dispara_tab_especial(event);
			}, 1);
	});
  $(".rptCredencial").inputmask("9{5}", { numericInput: true, placeholder: "0", positionCaretOnClick: "select", showMaskOnHover: false, showMaskOnFocus: false});
});

function PostBackFrmGenerarReporte(f,e) {
	e.preventDefault();
	let variables = $(f).serialize();

	if (variables == "" || !variables) {
		alerta_emergente("Debes seleccionar, al menos, un campo para generar el reporte.","warning");
		return false;
	}
	Carga_Metodo(f.action,
						 variables,
						 function finalizaProceso(data){
							 if (data.status == false) {
								 $('#cardtblReporte').hide();
								 $('#resultReporte').empty();
								 alerta_emergente(data.message, "warning");
							 }
							 else {
								 $('#cardtblReporte').show();
								 $('#resultReporte').html(data.html);
							 }
						 },
						 "Procesando...");
}

$("#btnSeleccionarTodos").click(function(){
	$("input[type=checkbox]:not(.rptFiltros)").prop('checked', true);
});

$("#btnAnularSeleccion").click(function(){
	$("input[type=checkbox]:not(.rptFiltros)").prop('checked', false);
});

</script>
