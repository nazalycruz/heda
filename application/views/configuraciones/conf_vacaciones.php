<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
	<div class="row" id="divTablaConfVacaciones">
		<table id="tblConfVacaciones" class="table table-bordered  table-condensed-extra" width="100%" cellspacing="0">
		</table>
	</div>
</div>

<div class="modal-footer">
  <button type="button" class="btn btn-success" title="Procesar" id="btnProcesarBonoVacaciones" name="btnProcesarBonoVacaciones" onclick="procesar_bono_vacaciones();"><i class="fas fa-check"></i> Procesar</button>
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>


<script type="text/javascript">
var grupoSuma = {}
$(document).ready(function(){
	var dataSetEmpleados	= <?= empty($empleados) ? '[]' : $empleados; ?>,
			columnas      		= [{"data": "EmpleadoID","name": "EmpleadoID","title": "idEmpleado","mData": "EmpleadoID","sName": "EmpleadoID","sTitle": "EmpleadoID",
														'checkboxes': {
																		 'selectRow': true
																	},
													 },
	  											 {"data": "Credencial","name": "Credencial","title": "Credencial","mData": "Credencial","sName": "Credencial","sTitle": "Credencial",
												 		},
	  										 	 {"data": "Empleado","name": "Empleado","title": "Empleado","mData": "Empleado","sName": "Empleado","sTitle": "Empleado"},
	  										 	 {"data": "CategoriaID","name": "CategoriaID","title": "idCategoria","mData": "|CategoriaID","sName": "CategoriaID","sTitle": "CategoriaID"},
	  										 	 {"data": "Categoria","name": "Categoria","title": "Categoría","mData": "Categoria","sName": "Categoria","sTitle": "Categoria"},
	  										 	 {"data": "SueldoBase","name": "SueldoBase","title": "Sueldo Base","mData": "SueldoBase", "sName": "SueldoBase","sTitle": "SueldoBase",
													 render: function(data, type, row) {
															 if (type === 'display') {
																 return formato_moneda(data,false);
															 }
															 return data;
														 }
													 },
													 {data: 'Dias', render: function(data, type, row) {
																if (type === 'display') {
																	return '<input type="text" class="form-control diasCalcular_'+row.EmpleadoID+ ' no-border text-black" placeholder="Días" value="'+data+'" name="txtDias_'+row.EmpleadoID+'_'+row.CategoriaID+'" id="txtDias_'+row.EmpleadoID+'_'+row.CategoriaID+'" maxlength="3" onblur="valida_dias_calcular(this)" onkeypress="return onlyDigits(event, this);">';
																}
																return data;
															},"name": "Dias","title": "Días","mData": "Dias","sName": "Dias","sTitle": "Dias"},
													{data: null, render: function(data, type, row) {
																			var monto = (((data.Dias * data.SueldoBase)/180)/3);
																			return formato_moneda(monto,false);
																	},"name": "Monto","title": "Monto","mData": "Monto","sName": "Monto","sTitle": "Monto"},
											];
	if (!$.fn.dataTable.isDataTable( '#tablaConfVacaciones')) {
		let tablaConfVacaciones = $('#tblConfVacaciones').DataTable({
			data: dataSetEmpleados,
			columns: columnas,
			language: { "url": "<?=base_url();?>assets/plugins/DataTables/Spanish.json" },
			initComplete: function() {
				this.api().rows().select();
			},
			// paging: false,
			orderFixed: [1, 'asc'],
			rowGroup: {
        dataSrc: "Empleado",
				startRender: function(rows, group) {
					 // Assign class name to all child rows
					 var groupName = 'group-' + group.replace(/[^A-Za-z0-9]/g, '');
					 var rowNodes = rows.nodes();
					 rowNodes.to$().addClass(groupName);
					 // Get selected checkboxes
					 var checkboxesSelected = $('.dt-checkboxes:checked', rowNodes);
					 // Parent checkbox is selected when all child checkboxes are selected
					 // var isSelected = (checkboxesSelected.length == rowNodes.length);
					 var isSelected = true;
					 return '<label><input type="checkbox" class="group-checkbox" data-group-name="'
									+ groupName + '"' + (isSelected ? ' checked' : '') +'> ' + group + ' (' + rows.count() + ')</label>';
				},
				endRender: function (rows, group) {
					var sum = 0, dias = 0;
					rows.every(function(idx) {
						var cell = rows.cell(idx, 7),
								data = cell.data();
								monto = (((data.Dias * data.SueldoBase)/180)/3);
						sum += monto;
        	});
					grupoSuma[group] = sum;
					return $('<tr/>').append( '<td colspan="5" class="text-end"><b>Total</b></td>' ).append('<td>'+formatCurrency(sum)+'</td>');
				},
      },
			// 'select': {
			// 	 'style': 'multi'
			// },
			columnDefs: [
				{ target: [3], visible: false, searchable: false, orderable: false },
				{ target: [2], visible: false},
			],
		});
	}

	$('#tblConfVacaciones').on('click', '.group-checkbox', function(e){
		let groupName = $(this).data('group-name');
		$('#tblConfVacaciones').DataTable().cells('tr.' + groupName, 0).checkboxes.select(this.checked);
	});

	$('#tblConfVacaciones').on('click', 'thead .dt-checkboxes-select-all', function(e){
		let $selectAll = $('input[type="checkbox"]', this);
		setTimeout(function(){
			$('.group-checkbox').prop('checked', $selectAll.prop('checked'));
		}, 0);
	});

});

function valida_dias_calcular(obj) {
	let dias = $(obj).val();

	if (dias < 0 || dias > 180 ) {
		$(obj).val("");
		dias = 0;
		alerta_emergente("El valor no puede ser mayor a 180","warning");
	}
	let tablaConfVacaciones = $('#tblConfVacaciones').DataTable(),
			idx = $(obj).closest('tr'),
			idEmpleado = tablaConfVacaciones.cell(idx,0).data();

	var sumDias = 0;
	$('.diasCalcular_'+idEmpleado).each(function(){
  	sumDias += parseInt(this.value);
	});
	if (sumDias < 0 || sumDias > 180 ) {
		$(obj).val("");
		dias = 0;
		alerta_emergente("El valor no puede ser mayor a 180","warning");
	}
	tablaConfVacaciones.cell(idx,6).data(dias).draw(false);
	tablaConfVacaciones.cell(idx,7).data(dias).draw(false);
}

function procesar_bono_vacaciones() {
	let tablaConfVacaciones = $('#tblConfVacaciones').DataTable(),
			confEmpleado = [];
	if (tablaConfVacaciones.rows({selected: true}).indexes().length == 0) {
		alerta_emergente('No ha seleccionado algún empleado para configurar.','warning');
		return false;
	}
	tablaConfVacaciones.rows({selected: true}).every( function (rowIdx, tableLoop, rowLoop) {
    var idEmpleado = tablaConfVacaciones.cell(rowIdx,0).data(),
				datosConf = {};

		if (confEmpleado.find((item) => item.idEmpleado === idEmpleado) === undefined) {
			datosConf.idEmpleado = idEmpleado;
			datosConf.Monto = grupoSuma[tablaConfVacaciones.cell(rowIdx,2).data()]; //tablaConfVacaciones.cell(rowIdx, 7).render('display'); //
			confEmpleado.push(datosConf);
		}
  });
	swal.fire({
		 title: "Alerta",
		 html: "¿Confirma que desea configurar el pago de vacaciones para "+confEmpleado.length+" empleado(s)?",
		 icon: "question",
		 showCancelButton: true,
		 showLoaderOnConfirm: true,
		 allowOutsideClick: false,
		 preConfirm: function () {
			 return new Promise(function(resolve) {
				 Carga_Metodo("<?=base_url();?>configuraciones/configura_vacaciones_empleados", {empleados:JSON.stringify(confEmpleado)}, function finaliza_conf(data) {
			 		if (data.status == false) { alerta_emergente(data.message, "warning"); }
			 		else { alerta_emergente(data.message, "success"); }
			 	}, "Procesando...");
			});
		 }
	});

}

</script>
