<h1 class="page-header">Anticipo de Aguinaldo <small> configuración</small></h1>


<div class="card border-0">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#card-anticipo" data-item="anticipo">Anticipo</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#card-complemento" data-item="complemento">Complemento</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <div class="tab-content p-0 m-0">
      <div class="tab-pane fade active show" id="card-anticipo">
				<div class="card mb-2">
					<?php
					$attributes = array("id" => "frmConfAnticipo", "name" => "frmConfAnticipo", "onsubmit" => "return PostBackFrmGuardaConfigAnticipo(this, event);");
					echo form_open("configuraciones/procesa_conf_anticipo_aguinaldo", $attributes);
					?>
				  <div class="card-body">
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="aa_tiponomina" class="form-label">Tipo de Nómina</label>
									<select class="form-control aa_catalogos form-control-sm select2-sm" id="aa_tiponomina" name="aa_tiponomina" required>
										<?= $cattiponomina; ?>
									</select>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="aa_porcentaje" class="form-label">Porcentaje a calcular</label>
									<div class="input-group mb-3">
										<input type="text" id="aa_porcentaje" name="aa_porcentaje" class="form-control form-control-sm" value="25" required maxlength="2" onkeypress="return onlyDigits(event,this,'','btnBuscar');">
										<div class="input-group-text"><i class="fa-solid fa-percent"></i></div>
									</div>
								</div>
							</div>
					    <div class="col-2">
					      <div class="form-group">
					        <label>&nbsp;</label>
					        <div class="custom-control custom-checkbox">
					          <input type="checkbox" class="custom-control-input" id="aa_chkGravado" name="aa_chkGravado" value="1" checked>
					          <label class="custom-control-label" for="aa_chkGravado" class="form-label">Gravado</label>
					        </div>
					      </div>
					    </div>
					    <div class="col-2">
					      <div class="form-group">
					        <label>&nbsp;</label>
					        <div class="custom-control custom-checkbox">
					          <input type="checkbox" class="custom-control-input" id="aa_chkParteExe" name="aa_chkParteExe" value="1" onclick="CambiaParteExentaConf(this.checked);">
					          <label class="custom-control-label" for="aa_chkParteExe" class="form-label">Tiene Parte Exenta</label>
					        </div>
					      </div>
					    </div>
					    <div class="col-2">
					      <div class="form-group">
					        <label for="aa_parteexe" class="form-label">Parte Exenta</label>
					        <input type="text" class="form-control form-control-sm aa_decimal" id="aa_parteexe" name="aa_parteexe" autocomplete="off" required disabled>
					      </div>
					    </div>
				    </div>
				  </div>
					<div class="card-footer f-w-600 text-end">
						<button type="button" class="btn btn-inverse btn-sm" title="Aplicar Porcentaje" id="btnAplicarPorcentaje" name="btnAplicarPorcentaje" onclick="aplicar_porcentaje_empleados();">
							<i class="fa-solid fa-percent"></i> Aplicar
						</button>
						<button class="btn btn-sm btn-success" title="Guardar configuración de empleado"><i class="fa-solid fa-gears"></i> Configurar</button>
					</div>
					<?php
					echo form_close();
					?>
				</div>

				<div class="card mb-2">
					<div class="card-body">
						<div class="row" id="divTablaConfAnticipoAguinaldo">
							<table id="tablaAnticipoAguinaldo" class="table table-bordered table-sm" cellspacing="0" width="100%">
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="tab-pane fade" id="card-complemento">
				<div class="card">
					<div class="card-body">
						<div id="tblComplementoResult">

						</div>
					</div>
					<div class="card-footer f-w-600 text-end">
						<button type="button" class="btn btn-sm btn-success" title="Guardar configuración de empleado" onclick="configurar_complemento_aguinaldo();"><i class="fa-solid fa-gears"></i> Configurar</button>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(".aa_catalogos").select2({
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

		$(".aa_currency").inputmask('currency',{rightAlign: true, prefix: '$ '  });
		$(".aa_decimal").inputmask('decimal',{digits: 2, digitsOptional: false, placeholder: '0.00', rightAlign: false  });

		var dataSetEmpleados	= <?= empty($empleados) ? '[]' : $empleados; ?>,
				columnas      		= [{"data": "IdEmpleado","name": "IdEmpleado","title": "idEmpleado","mData": "IdEmpleado","sName": "IdEmpleado","sTitle": "IdEmpleado",
																render: function(data, type, row, meta){
																	if (type === 'display') {
																		if (row['Configurado'] > 0) { data = '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes" checked><label></label></div>'; }
																		else { data = '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes"><label></label></div>'; }
																	}
																	 return data;
																},
																checkboxes: { 'selectRow': true, 'selectAllRender': '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes" title="Seleccionar Todos"><label></label></div>' },
														 },
		  											 {"data": "Credencial","name": "Credencial","title": "Credencial","mData": "Credencial","sName": "Credencial","sTitle": "Credencial"},
		  										 	 {"data": "Empleado","name": "Empleado","title": "Empleado","mData": "Empleado","sName": "Empleado","sTitle": "Empleado"},
		  										 	 {"data": "Estado","name": "Estado","title": "Estado","mData": "Estado","sName": "Estado","sTitle": "Estado"},
 		  										 	 {"data": "Tipo","name": "Tipo","title": "Tipo","mData": "Tipo","sName": "Tipo","sTitle": "Tipo"},
		  										 	 {"data": "Aguinaldo","name": "Aguinaldo", "title": "Monto Total","mData": "Aguinaldo","sName": "Aguinaldo","sTitle": "Aguinaldo",
														 render: function(data, type, row) {
																 if (type === 'display') {
																	 return formatCurrency(data,false);
																 }
																 return data;
															 }
														 },
														 {"data": "MontoConfigurado","name": "MontoConfigurado", "title": "Monto Configurado","mData": "MontoConfigurado","sName": "MontoConfigurado","sTitle": "MontoConfigurado",
														 render: function(data, type, row) {
																 if (type === 'display') {
																	 // return data.toFixed(2)
																	 return formato_moneda(data,false);
																 }
																 return data;
															 }
														 },
														 {"data": "Configurado","name": "Configurado","title": "Configurado","mData": "Configurado","sName": "Configurado","sTitle": "Configurado"},
												],cadenaPie = '';

		for (var i = 0; i < columnas.length; i++) {
      cadenaPie += '<td></td>';
    }
    $('#tablaAnticipoAguinaldo').append("<tfoot><tr>"+cadenaPie+"</tr></tfoot>");

		if (!$.fn.dataTable.isDataTable( '#tablaAnticipoAguinaldo')) {
			let tablaConfAguinaldo = $('#tablaAnticipoAguinaldo').DataTable({
				initComplete: function () {
					this.api().columns( [1,2,3,4] ).every(function() {
						var column = this;
						var select = $('<select id="filtrocolAA_'+column.index()+'" class="slt_filtro form-select form-select-sm"><option value=""></option></select>')
						 .appendTo($(column.footer()).empty())
							.on('change', function() {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).val()
								);
								column
									.search(val ? '^' + jQuery.fn.DataTable.ext.type.search.string( val ) + '$' : '', true, false)
									.draw();
							})
							.on('click', function() {
							  cargaOpciones(column.index());
							});
					});
					$('#tablaAnticipoAguinaldo tfoot tr').appendTo('#tablaAnticipoAguinaldo thead');
			  	this.api().columns.adjust().draw();
				},
        language: {
          "url": "assets/plugins/DataTables/Spanish.json",
          "processing": "Cargando..."
        },
				layout: {
					topStart: {
							buttons: [
								'pageLength',
								{ text: '<i class="fas fa-broom"></i> ', titleAttr: 'Borrar Filtros', className: 'btn-sm btn-default btndelFiltro btnDivisor', action:function ( e, dt, node, config ) { borrar_filtros(); } },
								{extend: 'excel', text:' <i class="far fa-file-excel"></i> ', autoFilter:true,
								className: 'btn-sm btn-default', titleAttr: 'Exportar resultado en Excel',
								filename:'Reporte',
								exportOptions: { columns: [1,2,3,4,5,6] },
								messageTop: 'Empleados configurados con Anticipo de Aguinaldo' }
							]
					}
				},
				data: dataSetEmpleados,
				columns: columnas,
				order: [1, 'asc'],
        responsive: 'true',
        processing: 'true',
        select: {
            style:    'multi+shift',
            selector: 'td:first-child'
        },
				columnDefs: [
					{targets: 7, visible: false, searchable: false},
				],
			});
		}
	});

	$('.nav-tabs a').on('shown.bs.tab', function(event){
		let x = $(event.target).data('item'),         // active tab
				y = $(event.relatedTarget).data('item');  // previous tab
		switch (x) {
			case 'complemento':
				carga_complemento_aguinaldo();
				break;
			default:
				break;
		}
	});

	function CambiaParteExentaConf(checked) {
    if (checked == true) {
      $("#aa_parteexe").prop("disabled", false);
    }
    else {
      $("#aa_parteexe").prop("disabled", true).val('');
    }
  }

	function aplicar_porcentaje_empleados() {
		let tabla = $('#tablaAnticipoAguinaldo').DataTable();
		tabla.rows().deselect();
		tabla.rows().every( function (rowIdx, tableLoop, rowLoop) {
	    var d = this.data();
	    d.counter++;
			var porcentaje = ($('#aa_porcentaje').val()/100),
					monto = (tabla.cell(rowIdx,5).data() * porcentaje);
			tabla.cell(rowIdx,6).data(monto);
	    this.invalidate();

			if (d['Configurado'] > 0) {
				tabla.row(rowIdx).select();
			}
		});
		tabla.draw();
	}

	function PostBackFrmGuardaConfigAnticipo(f,e) {
		e.preventDefault();
		let	tablaConf = $('#tablaAnticipoAguinaldo').DataTable(),
				confEmpleado = [];

		if (tablaConf.rows({selected: true}).indexes().length == 0) {
			alerta_emergente('No ha seleccionado algún empleado para configurar.','warning');
			return false;
		}

		let variables = $(f).serialize();

		tablaConf.rows({selected: true}).every( function (rowIdx, tableLoop, rowLoop) {
			var datosConf = {};
			if (tablaConf.cell(rowIdx,6).data() > 0) {
				datosConf.idEmpleado = tablaConf.cell(rowIdx,0).data();
				datosConf.Credencial = tablaConf.cell(rowIdx,1).data();
				datosConf.Monto = tablaConf.cell(rowIdx,6).data();
				confEmpleado.push(datosConf);
			}
	  });

		if (confEmpleado.length == 0) {
			alerta_emergente('Ningún empleado seleccionado tiene un monto configurado. Aplica el porcentaje antes de continuar.','warning');
			return false;
		}

		swal.fire({
			 title: "Alerta",
			 html: "¿Confirma que desea guardar la configuración para "+confEmpleado.length+" empleado(s)?",
			 icon: "question",
			 showCancelButton: true,
			 showLoaderOnConfirm: true,
			 allowOutsideClick: false,
			 preConfirm: function () {
				 return new Promise(function(resolve) {
					 Carga_Metodo(f.action,
												variables+"&empleados="+JSON.stringify(confEmpleado),
												function finalizaProceso(data){
													if (data.status == false) { alerta_emergente(data.message, "warning"); }
													else { alerta_emergente(data.message, "success"); }
													aplicar_porcentaje_empleados();
												},
												"Procesando...");
				});
			 }
		});
		return false;
	}

	function cargaOpciones(columna) {
		let tabla = $('#tablaAnticipoAguinaldo').DataTable(),
				selector = $('#filtrocolAA_'+columna),
				selectorVal = selector.val();

		selector.find('option').remove();
		selector.append('<option value="" style="font-weight:bold;">MOSTRAR TODO</option>');
		tabla.column(columna,{ filter : 'applied'}).data().unique().sort().each(function(d, j) {
			if (d.indexOf("span") >= 0) {
				var element = $(d);
				element.find("span").empty();
				element.find("span").remove();
				element.children().find("strong");
				var d = element.text().replace(/<br\s*\/?>/gi,'');
			}

			selector.append('<option value="' + d + '">'+d+'</option>');
		});
		if (selectorVal != '')  selector.val(selectorVal);
	}

	function borrar_filtros() {
	  $('.slt_filtro').val('');
	  var table = $('#tablaAnticipoAguinaldo').DataTable();
	  table.search('').columns().search('').draw();
	}

	function carga_complemento_aguinaldo() {
		Carga_Metodo("<?=base_url();?>configuraciones/complemento_aguinaldo",
								 '',
								 function finalizaProceso(data){
									 if (data.status == false) { alerta_emergente(data.message, "warning"); }
									 else {
										 $('#tblComplementoResult').html(data.html);
									 }
								 },
								 "Cargando...");
		return false;
	}

	function configurar_complemento_aguinaldo() {
		let tablaEmpleados = $('#tblEmpleadosComplementoAguinaldo').DataTable();

		if (!tablaEmpleados.rows().any()) {
			alerta_emergente('No existen empleados con anticipo de aguinaldo.','warning');
			return false;
		}
		let empleados = tablaEmpleados.rows({selected: true}).data().toArray();

		swal.fire({
			 title: "Alerta",
			 html: "¿Confirma que desea guardar la configuración para "+tablaEmpleados.rows(({selected: true})).indexes().length+" empleado(s)?",
			 icon: "question",
			 showCancelButton: true,
			 showLoaderOnConfirm: true,
			 allowOutsideClick: false,
			 preConfirm: function () {
				 return new Promise(function(resolve) {
					 Carga_Metodo("<?=base_url();?>configuraciones/configura_complemento_aguinaldo",
												"empleados="+JSON.stringify(empleados),
												function finalizaProceso(data){
													if (data.status == false) { alerta_emergente(data.message, "warning"); }
													else { alerta_emergente(data.message, "success"); }
												},
												"Procesando...");
				});
			 }
		});
		return false;
	}

</script>
