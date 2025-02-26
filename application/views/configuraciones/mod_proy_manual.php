<div class="modal-header p-t-5 p-b-5">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body p-t-5 p-b-5">
  <div class="card-body">
    <div class="row mb-2">
      <input type="hidden" name="pm_idEmpleado" id="pm_idEmpleado" value="<?= $idEmpleado; ?>">
      <div class="col-8">
        <div class="form-group">
          <label for="pm_conceptoproy"><b>Concepto</b></label>
          <select class="form-control pm_catalogos form-control-sm select2-sm" id="pm_conceptoproy" name="pm_conceptoproy" onchange="comprobar_concepto_pm(this);">
            <?= $catconceptospe; ?>
          </select>
          <div class="invalid-feedback">Seleccione un Concepto</div>
        </div>
      </div>
      <div class="col-4">
        <div class="form-group">
          <label for="pm_mindias"><b>Mínimo de días para pagarlo</b></label>
          <input type="text" class="form-control form-control-sm inpt_entero" id="pm_mindias" name="pm_mindias" readonly value="0">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header fw-600 card-header-condensed text-center">Datos de la proyección</div>
          <div class="card-body card-body-condensed">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="pm_categoria"><b>Categoría</b></label>
                  <select class="form-control pm_catalogos form-control-sm select2-sm" id="pm_categoria" name="pm_categoria">
                    <?= $categorias; ?>
                  </select>
                  <div class="invalid-feedback">Seleccione un Concepto</div>
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="pm_diaslab"><b>D. Laborados</b></label>
                  <input type="text" class="form-control form-control-sm pminpt_entero" id="pm_diaslab" name="pm_diaslab" value="0">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="pm_diasproy"><b>D. Proyectados</b></label>
                  <input type="text" class="form-control form-control-sm pminpt_entero" id="pm_diasproy" name="pm_diasproy" value="0">
                </div>
              </div>
              <div class="col-2 text-end">
                <div class="form-group">
                  <label class="control-label">&nbsp;</label>
                  <div>
                    <button type="button" class="btn btn-inverse btn-xs btnEditDoc" title="Agregar" id="btnAgregar" name="btnAgregar" onclick="agregar_categoria();"><i class="fas fa-plus-circle"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <input type="hidden" name="tbl_rowidx" id="tbl_rowidx" value="">
            <table class="table table-bordered" id="tblDatosProy" name="tblDatosProy" cellspacing="0" width="100%" style="display:none;">
              <thead>
                <tr>
                  <th>idCategoria</th>
                  <th>Categoría</th>
                  <th>Días laborados</th>
                  <th>Proyectados</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>

          <div class="card-footer pt-0 pb-0">
            <div class="row text-end mb-0 pb-0">
              <div class="col-3">
                <div class="form-group p-t-15 mb-0">
                  <input type="text" class="form-control-plaintext form-control-sm f-w-700 text-end" id="pm_estado" name="pm_estado" readonly value="INCOMPLETO" style="display:none;">
                </div>
              </div>
              <div class="col-3">
                <div class="form-group mb-0">
                  <label for="pm_puestos" class="pb-0 mb-0"><b>Puestos</b></label>
                  <input type="text" class="form-control-plaintext form-control-sm f-w-700 text-end mb-0 pb-0" id="pm_puestos" name="pm_puestos" readonly value="0">
                </div>
              </div>
              <div class="col-3">
                <div class="form-group mb-0">
                  <label for="pm_lbldiaspag" class="pb-0 mb-0"><b>Días Laborados</b></label>
                  <input type="text" class="form-control-plaintext form-control-sm f-w-700 text-end mb-0 pb-0" id="pm_lbldiaspag" name="pm_lbldiaspag" readonly value="0">
                </div>
              </div>
              <div class="col-3">
                <div class="form-group mb-0">
                  <label for="pm_lbldiasproy" class="pb-0 mb-0"><b>Días Proyectados</b></label>
                  <input type="text" class="form-control-plaintext form-control-sm f-w-700 text-end mb-0 pb-0" id="pm_lbldiasproy" name="pm_lbldiasproy" readonly value="0">
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>

<div class="modal-footer p-t-5 p-b-5">
  <div class="col-6">
    <div class="form-group text-end">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="pm_aplicnominas" name="pm_aplicnominas" value="1">
        <label class="custom-control-label" for="pm_aplicnominas"><b>Aplicar a todas las nóminas</b></label>
      </div>
    </div>
  </div>

  <button type="button" class="btn btn-success btn-sm" onclick="guardar_proyeccion_manual();"><i class="far fa-save"></i> Guardar</button>
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>


<script type="text/javascript">

$(document).ready(function(){
  $('.pminpt_entero').inputmask({
    alias: 'numeric',
    allowMinus: false,
    min:0,
    digits: 0,
    max: 360
  });

  if ( !$.fn.dataTable.isDataTable( '#tblDatosProy' ) ) {
    $('#tblDatosProy').DataTable({
      initComplete: function() {
        $("#tblDatosProy").show();
      },
      language: {
        "url": "assets/plugins/DataTables/Spanish.json",
        "processing": "Cargando..."
      },
      dom: 't',
      responsive: true,
      columnDefs: [
        {targets:[0], visible: false, searchable: false},
        {targets:[4], sortable: false, searchable: false},
      ],
    });
  }

  $(".pm_catalogos").select2({
    language: "es",
    placeholder: "Seleccione un Elemento",
    width:'100%',
		dropdownParent: $('#modGeneral')
  }).on("select2:close", function (event) {
      setTimeout(function() {
        $('.select2-container-active').removeClass('select2-container-active');
        $(':focus').blur();
        dispara_tab_especial(event);
      }, 1);
  });
  var idConcepto = "<?= (empty($idConcepto) ? 0 : $idConcepto); ?>";
	$('#pm_conceptoproy').val(idConcepto).trigger('change');
});

function comprobar_concepto_pm(obj) {
  var conceptoPE = $(obj).find(':selected'),
      mindias = conceptoPE.data('mindiasparapagar'),
      idEmpleado = $('#pm_idEmpleado').val(),
      idConcepto = conceptoPE.data('idconcepto');

  $('#pm_mindias').val(mindias);

  Carga_Metodo("<?=base_url();?>configuraciones/carga_datos_proyeccion_manual", {idConcepto:idConcepto,idEmpleado:idEmpleado}, carga_datos_proyeccion, "Procesando...");
  return false;
}

function carga_datos_proyeccion(respuesta) {
  var tablaDatosProy = $('#tblDatosProy').DataTable(),
      totalDL = 0, totalDP = 0, puestos = 0, dEstado = false;
  if( respuesta.status == false ) {
    alerta_emergente(respuesta.message, "warning");
    tablaDatosProy.clear().draw();
  }
  else{
    var datosProy = respuesta.datosProy,
        botones = '<button type="button" class="edit btn btn-xs btn-warning btnEditDoc" onclick="editar_categoria_pm(this);" title="Editar"><i class="fas fa-pencil-alt"></i></button>'+
                  '<button type="button" class="delete btn btn-xs btn-danger btnEditDoc" onclick="eliminar_categoria_pm(this);" title="Eliminar"><i class="fas fa-trash-alt"></i></button>';
    tablaDatosProy.clear().draw();
    for (var i in datosProy) {
      tablaDatosProy.row.add(
        [ datosProy[i].CategoriaId,
          datosProy[i].Categoria,
          datosProy[i].Dias_r_c,
          datosProy[i].Dias_p_c,
          botones
        ]
      );
    }
    tablaDatosProy.columns.adjust().draw(false);
    tablaDatosProy.responsive.recalc();

  }
  puestos = tablaDatosProy.rows().count();
  totalDL = tablaDatosProy.column( 2 ).data().sum();
  totalDP = tablaDatosProy.column( 3 ).data().sum();
  dEstado = ((totalDL + totalDP) == 360 ? "COMPLETO" : "INCOMPLETO");

  $('#pm_estado').val(dEstado).show();
  $('#pm_puestos').val(puestos);
  $('#pm_lbldiaspag').val(totalDL);
  $('#pm_lbldiasproy').val(totalDP);
}

function agregar_categoria() {
  var idConcepto = $('#pm_conceptoproy').val(),
      idCategoria = $('#pm_categoria').val(),
      diasLab = parseInt($('#pm_diaslab').val()),
      diasProy = parseInt($('#pm_diasproy').val()),
      minDias = parseInt($('#pm_mindias').val());

  if( typeof(idConcepto) == "undefined" || idConcepto == "" || idConcepto == 0 ) {
    alerta_emergente("Debe seleccionar un concepto.","warning");
    return false;
  }

  if( typeof(idCategoria) == "undefined" || idCategoria == "" || idCategoria == 0 ) {
    alerta_emergente("Debe seleccionar una categoría.","warning");
    return false;
  }

  if( (diasLab + diasProy) > 360 ){
    alerta_emergente("El máximo de días es de 360. Por favor, corrija los datos proporcionados","warning");
    return false;
  }

  if( diasLab < minDias ) {
    swal.fire({
      title: "Alerta",
      text: "No cumple los días mínimos para que se le pague el concepto, ¿Desea configurarlo?",
      icon: "question",
      showCancelButton: true,
    }).then(result => {
      if ( result.value ) {
        configura_categoria(idCategoria,diasLab,diasProy,minDias)
      }
    }).catch(swal.noop)
  }
  else{ configura_categoria(idCategoria,diasLab,diasProy,minDias) }
}

function configura_categoria(idCategoria,diasLab,diasProy,minDias) {
  var tabla = $('#tblDatosProy').DataTable(),
      rowid = 0, actualiza = false, diasCat = 0,
      categoria = $('#pm_categoria').find("option:selected").text(),
      botones = '<button type="button" class="edit btn btn-xs btn-warning btnEditDoc" onclick="editar_categoria_pm(this);" title="Editar"><i class="fas fa-pencil-alt"></i></button>'+
                '<button type="button" class="delete btn btn-xs btn-danger btnEditDoc" onclick="eliminar_categoria_pm(this);" title="Eliminar"><i class="fas fa-trash-alt"></i></button>';

  tabla.rows().every(function(rowIdx, tableLoop, rowLoop) {
    if ( this.data()[0] == idCategoria ) {
      diasCat = (parseInt(this.data()[2]) + parseInt(this.data()[3]));
      actualiza = true;
      rowid = rowIdx;
      return;
    }
  });

  var totalDL = tabla.column( 2 ).data().sum(),
      totalDP = tabla.column( 3 ).data().sum(),
      sumDias = (totalDL + totalDP);

  if( actualiza ) {
    if( ((sumDias - diasCat) + diasLab + diasProy) > 360 ){
      alerta_emergente("El máximo de días es de 360. Por favor, corrija los datos proporcionados","warning");
      return false;
    }
    tabla.row( rowid ).data( [idCategoria,categoria,diasLab,diasProy,botones] ).draw();
  }
  else{
    if( (sumDias + diasLab + diasProy) > 360 ){
      alerta_emergente("El máximo de días es de 360. Por favor, corrija los datos proporcionados","warning");
      return false;
    }
    tabla.row.add([idCategoria,categoria,diasLab,diasProy,botones]).draw().node();
  }

  totalDL = tabla.column( 2 ).data().sum();
  totalDP = tabla.column( 3 ).data().sum();
  sumDias = (totalDL + totalDP);
  puestos = tabla.rows().count();
  dEstado = ((totalDL + totalDP) == 360 ? "COMPLETO" : "INCOMPLETO");

  $('#pm_estado').val(dEstado).show();
  $('#pm_puestos').val(puestos);
  $('#pm_lbldiaspag').val(totalDL);
  $('#pm_lbldiasproy').val(totalDP);

  $('#tbl_rowidx').val('');
  $('#pm_categoria').val('').trigger('change.select2');
  $('#pm_diaslab').val(0);
  $('#pm_diasproy').val(0);
  return false;
}

function editar_categoria_pm(obj) {
  var tabla = $('#tblDatosProy').DataTable(),
      data = tabla.row( $(obj).parents('tr') ).data();
  $('#pm_categoria').val(data[0]).trigger('change');
  $('#pm_diaslab').val(data[2]);
  $('#pm_diasproy').val(data[3]);
}

function eliminar_categoria_pm(obj) {
  var tabla = $('#tblDatosProy').DataTable();
  tabla
      .row( $(obj).parents('tr') )
      .remove()
      .draw();
  return false;
}

function guardar_proyeccion_manual() {
  var datos = {},
      tabla = $('#tblDatosProy').DataTable();

  if (!tabla.data().any()) {
    alerta_emergente('Debe seleccionar un concepto para poder guardar la proyección manual.','warning');
    return false;
  }

  var categorias = tabla.rows().data().toArray();
  datos.idEmpleado = $('#pm_idEmpleado').val();
  datos.diasLab = $('#pm_lbldiaspag').val();
  datos.diasProy = $('#pm_lbldiasproy').val();
  datos.Puestos = $('#pm_puestos').val();
  datos.Tipo = $('#pm_estado').val();

  if ($('#pm_aplicnominas').is(':checked')) {
    datos.aplicarTodo = 1;
    var datosConceptos = [];
    $("#pm_conceptoproy > option").each(function() {
      if( typeof(this.value) != "undefined" && this.value != "" && this.value != 0 ) {
        datosConceptos.push({idConcepto:$(this).data('idconcepto'),
                                fechaini:$(this).data('fechainicio'),
                                fechafin:$(this).data('fechafinal'),
                                diasmin:$(this).data('mindiasparapagar'),
                              });
      }
    });
    datos.datosConceptos = datosConceptos;
  }
  else{
    datos.idConcepto = $('#pm_conceptoproy').find(':selected').data('idconcepto');
    datos.fechaini = $('#pm_conceptoproy').find(':selected').data('fechainicio');
    datos.fechafin = $('#pm_conceptoproy').find(':selected').data('fechafinal');
    datos.diasmin = $('#pm_conceptoproy').find(':selected').data('mindiasparapagar');
  }

  Carga_Metodo("<?=base_url();?>configuraciones/guarda_proyeccion_manual", {categorias:JSON.stringify(categorias),datos:JSON.stringify(datos)}, function finalizaProc(data) {
		if (data.status == false) { alerta_emergente(data.message, "warning"); }
		else {
			alerta_emergente(data.message, "success");
			ver_detalle_empleado();
		}
	}, "Procesando...");
	  return false;
}

</script>
