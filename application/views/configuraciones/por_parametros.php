<h1 class="page-header">Configuración de conceptos por Parámetros <small></small></h1>

<?php
$attributes = array("id" => "frmConfporParametros", "name" => "frmConfporParametros", "onsubmit" => "return PostBackFrmGuardaConfig(this, event);");
echo form_open("configuraciones/procesa_conf_por_parametros", $attributes);
?>
<div class="card mb-2">
  <div class="card-header bg-silver-600 fw-bold">
    Filtros
  </div>
  <div class="card-body">
    <div class="row mb-2">

      <div class="col-3">
        <div class="form-group">
          <label for="cf_tiponomina" class="form-label">Tipo de Nómina</label>
          <select class="form-control cfp_catalogos form-control-sm select2-sm" id="cf_tiponomina" name="cf_tiponomina">
            <?= $cattiponomina; ?>
          </select>
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="cf_concepto" class="form-label">Concepto</label>
          <select class="form-control cfp_catalogos form-control-sm select2-sm" id="cf_concepto" name="cf_concepto">
            <?= $catconceptos; ?>
          </select>
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="cf_dependencia" class="form-label">Dependencia</label>
          <select class="form-control cfp_catalogos form-control-sm select2-sm" id="cf_dependencia" name="cf_dependencia">
						<?= $catdependencias; ?>
          </select>
        </div>
      </div>

      <div class="col-3">
        <div class="form-group">
          <label for="cf_categoria" class="form-label">Categoría</label>
          <select class="form-control cfp_catalogos form-control-sm select2-sm" id="cf_categoria" name="cf_categoria">
						<?= $catcategorias; ?>
          </select>
        </div>
      </div>

    </div>

    <div class="row">
			<div class="col-2">
				<div class="form-group">
						<label class="form-label">Tipo de Contrato</label>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="opt_base" name="opt_contrato" class="custom-control-input" checked value="1">
							<label class="custom-control-label" for="opt_base">Con Base</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="opt_todos" name="opt_contrato" class="custom-control-input" value="0">
							<label class="custom-control-label" for="opt_todos">Todos</label>
						</div>
				</div>
			</div>

      <div class="col-2">
        <div class="form-group">
          <label for="fechaini" class="form-label">Fecha Inicial</label>
          <input type="text" class="form-control form-control-sm fechasF" id="fechaini" name="fechaini" value="<?= $fechaini; ?>">
        </div>
      </div>

      <div class="col-2">
        <div class="form-group">
          <label for="fechafin" class="form-label">Fecha Final</label>
          <input type="text" class="form-control form-control-sm fechasF" id="fechafin" name="fechafin" value="<?= $fechafin; ?>">
        </div>
      </div>

      <div class="col-2">
        <div class="form-group">
          <label for="fechafin" class="form-label">Días lab.</label>
          <input type="text" class="form-control form-control-sm" id="diaslab" name="diaslab" value="270" autocomplete="off">
        </div>
      </div>

      <div class="col-1">
        <div class="form-group">
          <label class="form-label">Con hijos</label>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="chckHijos" name="chckHijos">
            <label class="custom-control-label" for="chckHijos"></label>
          </div>
        </div>
      </div>

      <div class="col-1">
        <div class="form-group">
          <label for="cf_Sexo" class="form-label">Sexo</label>
          <select class="form-control form-control-sm select2-sm cfp_catalogos" id="cf_Sexo" name="cf_Sexo">
            <option></option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
          </select>
        </div>
      </div>

      <div class="col-2">
        <div class="form-group">
          <label for="monto" class="form-label">Monto Configurado</label>
          <input type="text" class="form-control form-control-sm cf_currency" id="monto" name="monto" value="0" autocomplete="off">
        </div>
      </div>

    </div>
  </div>

  <div class="card-footer f-w-600 text-end">
    <button type="button" onclick="listar_empleados();" class="btn btn-xs btn-default"><i class="fas fa-list-ul"></i> Listar</button>
		<!-- <button type="button" onclick="eliminar_conf();" class="btn btn-xs btn-danger"><i class="fa-solid fa-trash-can"></i> Eliminar Conf.</button> -->
  </div>
</div>

<div class="card mb-2">
  <div class="card-header bg-silver-600 fw-bold">
    Configuración
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-2">
          <div class="form-group">
            <label>&nbsp;</label>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="chkPermanente" name="chkPermanente" value="1" onclick="CambiaEstadoPermanenteConf(this.checked);">
              <label class="custom-control-label" for="chkPermanente" class="form-label">Permanente</label>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <label for="cf_vecesaplicar" class="form-label">Veces a Aplicar</label>
            <input type="text" class="form-control form-control-sm" id="cf_vecesaplicar" name="cf_vecesaplicar" autocomplete="off" onkeypress="return onlyDigits(event, this);" maxlength="3" onblur="CambiaVecesAplicarConf(this)" value="1">
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <label for="cf_aplicadas" class="form-label">Veces Aplicadas</label>
            <input type="text" class="form-control form-control-sm" id="cf_aplicadas" name="cf_aplicadas" autocomplete="off" onkeypress="return onlyDigits(event, this);" maxlength="3" value="0">
          </div>
        </div>

        <div class="col-2">
          <div class="form-group">
            <label for="folio" class="form-label">Folio</label>
            <input type="text" class="form-control form-control-sm" id="folio" name="folio" value="" autocomplete="off">
          </div>
        </div>

        <div class="col-2">
          <div class="form-group">
            <label for="montoconf" class="form-label">Monto</label>
            <input type="text" class="form-control form-control-sm cf_currency" id="montoconf" name="montoconf" value="" required autocomplete="off">
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <label>&nbsp;</label>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="chkGravado" name="chkGravado" value="1">
              <label class="custom-control-label" for="chkGravadoperc" class="form-label">Gravado</label>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <label>&nbsp;</label>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="chkParteExe" name="chkParteExe" value="1" onclick="CambiaParteExentaConf(this.checked);">
              <label class="custom-control-label" for="chkParteExe" class="form-label">Tiene Parte Exenta</label>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <label for="cf_parteexe" class="form-label">Parte Exenta</label>
            <input type="text" class="form-control form-control-sm cf_decimal" id="cf_parteexe" name="cf_parteexe" autocomplete="off" required disabled>
          </div>
        </div>
    </div>

    <div class="row">
      <div class="col-5">
        <div class="form-group">
          <label for="cf_acreedor" class="form-label">Acreedor</label>
          <select class="form-control form-control-sm select2-sm cfp_catalogos" id="cf_acreedorperc" name="cf_acreedor">
          </select>
        </div>
      </div>
      <div class="col-7">
        <div class="form-group">
          <label for="cf_codacreedor" class="form-label">Código</label>
          <input type="text" class="form-control form-control-sm codacreedor" id="cf_codacreedorperc" name="cf_codacreedor" autocomplete="off" readonly>
        </div>
      </div>
    </div>

  </div>
	<div class="card-footer f-w-600 text-end">
		<button  class="btn btn-xs btn-success"><i class="fa-solid fa-gears"></i> Procesar</button>
	</div>

</div>
<?php
echo form_close();
?>

<div class="row" style="display:none;" id="divTabla">
  <div class="col-md-12">
    <div class="card">
			<div class="card-header pointer-cursor align-items-center fw-bold text-center bg-silver-600">
				Listado de empleados ACTIVOS que cumplen con las condiciones seleccionadas
			</div>
      <div class="card-body">
        <div class="table-responsive-sm">
          <table id="tblEmpleadosConfig" class="table table-bordered table-sm" cellspacing="0" width="100%">
             <thead>
               <tr>
                 <th></th>
                 <th>Credencial</th>
                 <th>Empleado</th>
                 <th>¿Configurado?</th>
                 <th>Monto</th>
                 <th>¿Gravado?</th>
                 <th>idDependencia</th>
                 <th>Dependencia</th>
                 <th>idCategoría</th>
                 <th>Categoría</th>
                 <th>Días Lab.</th>
                 <th>idConfEmpleado</th>
                 <th>Es Percepción</th>
                 <th>Clave Recibo</th>
                 <th>Folio</th>
               </tr>
             </thead>
             <tfoot>
              <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
             </tfoot>
             <tbody>

             </tbody>
           </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $(".cf_currency").inputmask('currency',{rightAlign: true, prefix: '$ '  });
    $(".cf_decimal").inputmask('decimal',{digits: 2, digitsOptional: false, placeholder: '0.00', rightAlign: false  });
    Inputmask("#-#-#-#-####-####-##-##-##-#####", {}).mask(".codacreedor");

    $(".cfp_catalogos").select2({
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

    $(".fechasF").datepicker({
      format: "dd/mm/yyyy",
      weekStart: 1,
      maxViewMode: 3,
      language: "es",
      orientation: "bottom auto",
      autoclose: true,
      todayBtn: "linked",
      todayHighlight: true,
    }).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});


    if (!$.fn.dataTable.isDataTable( '#tblEmpleadosConfig' )) {
      var tablaEmpConf = $('#tblEmpleadosConfig').DataTable({
        initComplete: function() {
					this.api().columns( [1,2,3,4,5,7,9,10] ).every(function() {
						var column = this;
						// var select = $('<select id="filtrocol_'+column.index()+'" class="slt_filtro"><option value=""></option></select>')
						var select = $('<select id="filtrocol_'+column.index()+'" class="slt_filtro form-select form-select-sm"><option value=""></option></select>')
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
					$('#tblEmpleadosConfig tfoot tr').insertAfter('#tblEmpleadosConfig thead');
          this.api().rows().select();
          this.api().columns.adjust().draw();
          //$("#tblEmpleadosConfig").show();
        },
        language: {
          "url": "assets/plugins/DataTables/Spanish.json",
          "processing": "Cargando..."
        },
        // dom: '<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
				layout: {
			    topStart: {
						buttons: [
							{ extend: 'pageLength',	className: 'btn btn-sm btn-white btnDivisor'},
		          { extend: 'excel', text: ' <i class="far fa-file-excel"></i> ', autoFilter:true, className: 'btn-sm btn-default', titleAttr: 'Exportar resultado en Excel',  filename:'Reporte', exportOptions: { columns: [1,2,3] }, messageTop: 'Empleados para Registros Iniciales' },
						],
					},
			    topEnd: 'search',
			    bottomStart: 'info',
			    bottomEnd: 'paging'
				},
				order: [1, 'asc'],
        responsive: 'true',
        processing: 'true',
        select: {
            style:    'multi+shift',
            selector: 'td:first-child'
        },
        columnDefs: [
          { targets: 0,
            render: function(data, type, row, meta){
               if(type === 'display'){
                  data = '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes"><label></label></div>';
               }
               return data;
            },
            checkboxes: { 'selectRow': true, 'selectAllRender': '<div class="checkbox"><input type="checkbox" class="form-check-input dt-checkboxes" title="Seleccionar Todos"><label></label></div>' } },
          { targets:[6,8,11,12,13,14],visible: false,orderable:false,searchable:false },
        ],
      });
    }

    // $('#tblEmpleadosConfig tfoot tr').appendTo('#tblEmpleadosConfig thead');

    listar_empleados();
  });

  function CambiaEstadoPermanenteConf(checked){
    if( checked == true ){
      $("#cf_vecesaplicar").val(0);
    }
    else{
      $("#cf_vecesaplicarperc").val(1);
    }
  }

  function CambiaParteExentaConf(checked) {
    if( checked == true ){
      $("#cf_parteexe").prop("disabled", false);
    }
    else{
      $("#cf_parteexe").prop("disabled", true);
    }
  }

  function CambiaVecesAplicarConf(obj) {
    var valor = $(obj).val();
    if( valor > 0 ){
      $('#chkPermanente').prop('checked', false);
    }
  }

  function listar_empleados() {
    let tabla = $('#tblEmpleadosConfig').DataTable(),
     		variables = $('#frmConfporParametros').serialize();

    $.ajax({
      url   : '<?= base_url() ?>nomina/empleados_conf_parametros',
      type: "POST",
      data: variables,
      dataType: "JSON",
      beforeSend: function() {
        $('#divTabla').hide();
        showLoading("Procesando","Consultando empleados...");
      },
      success : function(data){
        if (data.status == false) {
          alerta_emergente(data.message,"warning");
          return false;
        }
        else {
          var empleados = data.empleados,
              sexo = $('#cf_Sexo').val(),
              hijos = ($('#chckHijos').prop('checked') ? 1 : 0),
							monto = $('#monto').inputmask('unmaskedvalue'),
							dependencia = ($('#cf_dependencia option:selected').val() === "" ? 0 : $('#cf_dependencia option:selected').val()),
							categoria = ($('#cf_categoria option:selected').val() === "" ? 0 : $('#cf_categoria option:selected').val()),
              fltSexo = (sexo == "" ? ['M','F'] : [sexo]),
              fltHijos = false,fltMonto = 0,fltDependencia,fltCategoria;
          tabla.clear().draw();
          for (var i in empleados) {
            fltHijos = (empleados[i].Hijos == '0' ? 0 : 1);
						fltMonto = (monto > 0 ? formato_moneda(empleados[i].Monto,false) : 0);
						fltDependencia = (dependencia > 0 ? empleados[i].Id_Dependencia : 0);
						fltCategoria = (categoria > 0 ? empleados[i].Id_Categoria : 0);
						if ($.inArray(empleados[i].Sexo, fltSexo) !== -1 && fltHijos >= hijos && fltMonto == monto && dependencia == fltDependencia && categoria == fltCategoria) {
              tabla.row.add(
                 [ empleados[i].Id_Empleado,
                   empleados[i].Credencial,
                   empleados[i].Empleado,
                   (empleados[i].Configurado == 0 ? 'No' : '<span class="text-center text-success btn-icon btn-circle btn-xs"><i class="fa fa-check"></i></span>'),
                   formato_moneda(empleados[i].Monto),
                   (empleados[i].AntesDeImp == 0 ? 'No' : '<span class="text-center text-success btn-icon btn-circle btn-xs"><i class="fa fa-check"></i></span>'),
                   empleados[i].Id_Dependencia,
                   empleados[i].Dependencia,
                   empleados[i].Id_Categoria,
                   empleados[i].Categoria,
                   empleados[i].Dias,
                   empleados[i].ConfEmpleadoID,
                   empleados[i].EsPercepcion,
                   empleados[i].ClaveRecibo,
                   empleados[i].Folio,
                 ]
              );
            }
          }
          //tabla.rows().select();
          tabla.columns.adjust().draw();

          $('#divTabla').show();
        }
      },
      error: function(xhr, textStatus, errorThrown){
  			if ( xhr.status == 500 ) { alerta_emergente("Error interno del servidor, intente de nuevo más tarde.", "error");	}
  			else if ( xhr.status == 404 ) { alerta_emergente("Página no encontrada, avise al Departamento de Servicios y Redes", "warning"); }
  			else alerta_emergente("Mensaje de Error: "+textStatus+",  Solicitud XHR: "+StatusMsg(xhr.status), "error");
  			return false;
  		},
      complete: function( jqXHR, Status){
        hideLoading();
      }
    });
  }

	function PostBackFrmGuardaConfig(f,e) {
		e.preventDefault();
		let	tablaConf = $('#tblEmpleadosConfig').DataTable();

		if (!tablaConf.rows('.selected').any()) {
			alerta_emergente('No ha seleccionado algún empleados para configurar. Revisar los filtros y volver a listar.','warning');
			return false;
		}
		let empleados = tablaConf.rows({selected: true}).data().toArray(),
				select = document.getElementById("cf_concepto"),
				optData = select.options[select.selectedIndex].dataset,
				variables = $(f).serialize();

		Object.entries(optData).forEach(function(entry) {
			variables = variables + '&'+entry[0]+'='+entry[1];
		})

		swal.fire({
			 title: "Alerta",
			 html: "¿Confirma que desea guardar la configuración para "+tablaConf.rows({selected: true}).indexes().length+" empleado(s)?",
			 icon: "question",
			 showCancelButton: true,
			 showLoaderOnConfirm: true,
			 allowOutsideClick: false,
			 preConfirm: function () {
				 return new Promise(function(resolve) {
					 Carga_Metodo(f.action,
												variables+"&empleados="+JSON.stringify(empleados),
												function finalizaProceso(data){
													if (data.status == false) { alerta_emergente(data.message, "warning"); }
													else { alerta_emergente(data.message, "success"); }
													listar_empleados();
												},
												"Procesando...");
				});
			 }
		});
		return false;
	}

	function eliminar_conf() {
		let tablaConf = $('#tblEmpleadosConfig').DataTable();

		if (!tablaConf.rows('.selected').any()) {
			alerta_emergente('No ha seleccionado algún empleados para eliminar.','warning');
			return false;
		}
		let empleados = tablaConf.rows({selected: true}).data().toArray();

		swal.fire({
			 title: "Alerta",
			 html: "¿Confirma que desea eliminar la configuración del concepto "+ $('#cf_concepto option:selected').text() +" para la nómina "+$('#cf_tiponomina option:selected').text() +" de "+tablaConf.rows({selected: true}).indexes().length+" empleado(s) seleccionado(s)?",
			 icon: "question",
			 showCancelButton: true,
			 showLoaderOnConfirm: true,
			 allowOutsideClick: false,
			 preConfirm: function () {
				 return new Promise(function(resolve) {
					 Carga_Metodo('<?= base_url()?>configuraciones/elimina_configuracion_empleados',
												"empleados="+JSON.stringify(empleados),
												function finalizaProceso(data){
													if (data.status == false) { alerta_emergente(data.message, "warning"); }
													else { alerta_emergente(data.message, "success"); }
													listar_empleados();
										 		},
												"Procesando...");
				});
			 }
		});
		return false;
	}

	function cargaOpciones(columna) {
		var tabla = $('#tblEmpleadosConfig').DataTable(),
				selector = $('#filtrocol_'+columna),
				selectorVal = selector.val();

		selector.find('option').remove();
		selector.append('<option value="" style="font-weight:bold;">MOSTRAR TODO</option>');
		tabla.column(columna,{ filter : 'applied'}).data().unique().sort().each(function(d, j) {
			if ( d.indexOf("span") >= 0 ){
				var element = $(d);
				element.find("span").empty();
				element.find("span").remove();
				element.children().find("strong");
				var d = element.text().replace(/<br\s*\/?>/gi,'');
			}

			selector.append('<option value="' + d + '">'+d+'</option>');
		});
		if( selectorVal != '' ) selector.val(selectorVal);
	}

</script>
