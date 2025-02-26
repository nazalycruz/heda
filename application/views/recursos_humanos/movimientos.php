<h1 class="page-header">Movimientos <small>administración de movimientos.</small></h1>

<div class="card border-0">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#card-aceptacion" data-item="aceptacion">Aceptación</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#card-nuevo" data-item="empleado">Nuevo Empleado</a>
      </li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="tab" href="#card-vencimientos" data-item="vencimientos">Vencimientos</a>
			</li>
    </ul>
  </div>
	<div class="card-body">
    <div class="tab-content p-0 m-0">
			<div class="tab-pane fade active show" id="card-aceptacion">
				<?php
				$attributes = array("id" => "frmConsultaMovimientos", "name" => "frmConsultaMovimientos", "onsubmit" => "return PostBackFrmConsultaMovimientos(this, event);");
				echo form_open("movimientos/carga_movimientos", $attributes);
				?>
				<div class="card mb-2">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<input type="hidden" id="aceptado" name="aceptado" value="0">
								<div class="form-group">
									<label for="fechaini" class="form-label">Fecha Inicial</label>
									<input type="text" class="form-control form-control-sm fechaM" id="fechaini" name="fechaini" onkeypress="return dispara_tab(event, this);" placeholder="Fecha Inicial" value="" autocomplete="off" required>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="fechafin" class="form-label">Fecha Final</label>
									<input type="text" class="form-control form-control-sm fechaM" id="fechafin" name="fechafin" onkeypress="return dispara_tab(event, this);" placeholder="Fecha Final" value="" autocomplete="off" required>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="clavemovimiento" class="form-label">Tipo de Movimiento</label>
									<select id="clavemovimiento" name="clavemovimiento" class="form-control form-control-sm select2-sm select2">
										<?= $cat_orig_movs; ?>
									</select>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="folio" class="form-label">Folio</label>
									<input type="text" id="folio" name="folio" class="form-control form-control-sm" value="0" autocomplete="off">
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="credencial" class="form-label">Credencial</label>
									<input type="text" id="credencial" name="credencial" class="form-control form-control-sm" value="" autocomplete="off">
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer text-end">
						<button type="submit" class="btn btn-sm btn-inverse"><i class="fas fa-binoculars"></i> Consultar</button>
					</div>
				</div>
				<?php
				echo form_close();
				?>
				<div class="card mb-2" id="card-movimientos" style="display:none;">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<div class="table-responsive">
									<table id="tblMovimientos" class="table table-bordered table-condensed" cellspacing="0" width="100%" style="display:none;">
										 <thead class="table-cadet_blue">
											 <tr>
												 <th>aceptado</th>
												 <th>Folio</th>
												 <th>Credencial</th>
												 <th>Nombre</th>
												 <th>Inicio</th>
												 <th>Terminación</th>
												 <th>TM</th>
												 <th>Descripción</th>
												 <th>Categoría</th>
												 <th>Clave Base</th>
												 <th>idPersonal</th>
												 <th>Mov. Relacionado</th>
												 <th></th>
											 </tr>
										 </thead>
										 <tbody id="bodydataMovimientos">

										 </tbody>
									 </table>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer text-end">
						<button type="button" class="btn btn-success btn-sm" title="Guardar" id="btnAceptarMovimientos" name="btnAceptarMovimientos" onclick="aceptar_movimientos();"><i class="far fa-save"></i> Aceptar</button>
					</div>
				</div>

			</div>
			<div class="tab-pane fade" id="card-nuevo">
				<?php
				$attributes = array("id" => "frmConsultaNuevoEmpleado", "name" => "frmConsultaNuevoEmpleado", "onsubmit" => "return PostBackFrmConsultaNuevoEmpleado(this, event);");
				echo form_open("movimientos/carga_movs_nuevo_empleado", $attributes);
				?>
				<div class="card mb-2">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<input type="hidden" id="aceptadoNE" name="aceptadoNE" value="0">
								<div class="form-group">
									<label for="fechainiNE" class="form-label">Fecha Inicial</label>
									<input type="text" class="form-control form-control-sm fechaM" id="fechainiNE" name="fechainiNE" onkeypress="return dispara_tab(event, this);" placeholder="Fecha Inicial" value="" autocomplete="off" required>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="fechafinNE" class="form-label">Fecha Final</label>
									<input type="text" class="form-control form-control-sm fechaM" id="fechafinNE" name="fechafinNE" onkeypress="return dispara_tab(event, this);" placeholder="Fecha Final" value="" autocomplete="off" required>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="folioNE" class="form-label">Folio</label>
									<input type="text" id="folioNE" name="folioNE" class="form-control form-control-sm" value="0" autocomplete="off">
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="credencialNE" class="form-label">Credencial</label>
									<input type="text" id="credencialNE" name="credencialNE" class="form-control form-control-sm" value="" autocomplete="off">
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer text-end">
						<button type="submit" class="btn btn-sm btn-inverse"><i class="fas fa-binoculars"></i> Consultar</button>
					</div>
				</div>
				<?php
				echo form_close();
				?>
				<div class="card">
					<div class="card-body">
						<div id="lstResultadOtblMovs">

						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="card-vencimientos">
				<div class="card">
					<div class="card-body">

					</div>
				</div>
			</div>

		</div>
	</div>

</div>

<script type="text/javascript">
setTimeout(function FuncionesIniciales(){
	$(".select2").select2({
		language: "es",
		placeholder: "Selecciona un Elemento",
		width:'100%',
	}).on("select2:close", function (event) {
			setTimeout(function() {
				$('.select2-container-active').removeClass('select2-container-active');
				$(':focus').blur();
				// dispara_tab_especial(event);
			}, 1);
	});

	$(".fechaM").datepicker({
		format: "dd/mm/yyyy",
		weekStart: 1,
		maxViewMode: 3,
		language: "es",
		orientation: "bottom auto",
		autoclose: true,
		todayBtn: "linked",
		todayHighlight: true,
	}).on("hide", function(e) {
		dispara_tab_especial(e);
	}).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});

	$('#fechaini, #fechainiNE').datepicker("update", new Date(new Date().getFullYear(), 0, 1));
	$("#fechafin, #fechafinNE").datepicker("update", new Date());

	$("#fechaini").datepicker().on('changeDate', function (selected) {
		var minDate = new Date(selected.date.valueOf());
		$('#fechafin').datepicker('setStartDate', minDate);
	});

	$("#fechafin").datepicker().on('changeDate', function (selected) {
		var minDate = new Date(selected.date.valueOf());
		$('#fechaini').datepicker('setEndDate', minDate);
	});

	$("#fechainiNE").datepicker().on('changeDate', function (selected) {
		var minDate = new Date(selected.date.valueOf());
		$('#fechafinNE').datepicker('setStartDate', minDate);
	});

	$("#fechafinNE").datepicker().on('changeDate', function (selected) {
		var minDate = new Date(selected.date.valueOf());
		$('#fechainiNE').datepicker('setEndDate', minDate);
	});

	if (!$.fn.dataTable.isDataTable('#tblMovimientos')) {
		var tablaMovimientos = $('#tblMovimientos').DataTable({
			initComplete: function() {
				$("#tblMovimientos").show();
				this.api().columns.adjust().draw();
			},
			language: {
				"url": "assets/plugins/DataTables/Spanish.json",
				"processing": "Cargando..."
			},
			responsive: true,
			processing: 'true',
			order: [[1, 'asc']],
			select: {
					style:    'multi+shift',
			},
			columnDefs: [
				{ targets: 0,
					render: function(data, type, row, meta){
						 if (type === 'display') {
								data = '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes"><label></label></div>';
						 }
						 return data;
					},
					checkboxes: { 'selectRow': true, 'selectAllRender': '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes" title="Seleccionar Todos"><label></label></div>' }
				},
				{
					 targets: [0,11],
					 orderable: false,
				},
				{ targets: [10,11], orderable: false, visible: false, searchable:false },
				{ targets: [12], orderable: false, searchable:false },
			]
		});
	}

	carga_todos_movimientos("clavemovimiento=&fechaini="+$('#fechaini').val()+"&fechafin="+$('#fechafin').val()+"&aceptado=0&folio=0&credencial=");
});

function carga_todos_movimientos(variables) {
	let tabla = $('#tblMovimientos').DataTable();
	Carga_Metodo("movimientos/carga_movimientos",
							 variables,
								function finalizaProceso(data) {
							 		if (data.status == false) {
										alerta_emergente(data.message, "warning");
										$('#card-movimientos').hide();
									}
									else {
										$('#card-movimientos').show();
										tabla.clear().draw();
										let movimientos = data.movimientos;
										for (var i in movimientos) {
											// console.log(movimientos[i]);
											if (movimientos[i].Origen != "Nuevo Empleado") {
												tabla.row.add(
													[
														movimientos[i].MovimientoAceptado,
														movimientos[i].IdMovimiento,
														movimientos[i].NumNomina,
														movimientos[i].NombreCompleto,
														movimientos[i].finicio,
														movimientos[i].FFIN,
														movimientos[i].Origen,
														movimientos[i].DescOrigen,
														movimientos[i].Categoria,
														movimientos[i].ClaveBase,
														movimientos[i].IdPersonal,
														movimientos[i].MovRelacionado,
														'',
													]
												).draw();
											}
										}
										tabla.columns.adjust().draw();
										tabla.responsive.recalc();
									}
								},
								"Procesando...");
}

function PostBackFrmConsultaMovimientos(f,e) {
  e.preventDefault();
	let variables = $(f).serialize();
	carga_todos_movimientos(variables);
	return false;
}

function PostBackFrmConsultaNuevoEmpleado(f,e) {
	e.preventDefault();
	let variables = $(f).serialize();
	cargarpag('<?= base_url()?>movimientos/carga_movs_nuevo_empleado', "div#lstResultadOtblMovs", true, "POST", variables);
	return false;
}

function agregar_info_nuevo_empleado(url,data,esBoton) {
	if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
	if (esBoton) data = $(data).data('json');
	cargamodalGenerica(url+'movimientos/carga_agregar_nuevo_empleado/','#modContenido', '#modGeneral', data, 'Agregar Nuevo Empleado: '+data.NombreCompleto, 1, false, false);
	return false;
}

function aceptar_movimientos() {
	let tabla = $('#tblMovimientos').DataTable();
	if (tabla.rows({selected : true}).indexes().length === 0) {
		alerta_emergente('No se ha seleccionado algún movimiento para aceptar.','info');
		return false;
	}
	let registros = tabla.rows({selected: true}).data().toArray();

}

</script>
