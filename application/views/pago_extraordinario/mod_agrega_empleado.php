<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <?php
  $attributes = array("id" => "frmBusquedaEmpleados", "name" => "frmBusquedaEmpleados", "onsubmit" => "return PostBackFrmCargaEmpleados(this, event);");
  echo form_open("empleado/busqueda_empleados_filtrado", $attributes);
  ?>
  <div class="row paramBusqueda">
    <!-- <div class="col-2">
      <div class="form-group">
        <label for="pextFiltro"><b>Buscar por</b></label>
        <select class="form-control form-control-sm select2-sm pExtempCatalogo" id="pextFiltro" name="pextFiltro">
          <option value="divCredNombre" selected>Credencial o Nombre</option>
          <option value="divFiltroBusqueda">Filtro</option>
        </select>
      </div>
    </div> -->
    <div class="col-4 divFiltros divCredNombre">
      <div class="form-group">
        <label for="pext_credencial"><b>Credencial o Nombre</b></label>
        <input type="text" class="form-control form-control-sm pext_credencial" id="pext_credencial" name="pext_credencial" placeholder="Credencial" autocomplete="off"  value="<?= empty($credencial) ? "" : $credencial; ?>">
        <!-- onkeypress="return onlyDigits(event, this, '', 'btnBuscaEmpleado');" -->
      </div>
    </div>
    <div class="col-4 filtroPagoExt divFiltros divFiltroBusqueda" id="divDependencias">
      <div class="form-group">
        <label for="pextEmisor"><b>Dependencia</b></label>
        <select class="form-control form-control-sm select2-sm pExtempCatalogo" id="pext_Dependencia" name="pext_Dependencia">
          <?= $catdependencias; ?>
        </select>
      </div>
    </div>
    <div class="col-4 filtroPagoExt divFiltros divFiltroBusqueda">
      <div class="form-group">
        <label for="pextEmisor"><b>Categoría</b></label>
        <select class="form-control form-control-sm select2-sm pExtempCatalogo" id="pext_Categoria" name="pext_Categoria">
          <?= $catcategorias; ?>
        </select>
      </div>
    </div>
  </div>

  <div class="row paramBusqueda">
    <div class="col-4">
      <div class="form-group">
        <label><b>Tipo de Contrato</b></label>
        <div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="opt_contrato" id="opt_base" checked value="1">Con Base
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="opt_contrato" id="opt_todos" value="0">Todos
            </label>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="col-2">
      <div class="form-group">
        <label for="fechaini"><b>Fecha Inicial</b></label>
        <input type="text" class="form-control form-control-sm fechasF" id="fechaini" name="fechaini" value="<?= $fechaini; ?>">
      </div>
    </div>

    <div class="col-2">
      <div class="form-group">
        <label for="fechafin"><b>Fecha Final</b></label>
        <input type="text" class="form-control form-control-sm fechasF" id="fechafin" name="fechafin" value="<?= $fechafin; ?>">
      </div>
    </div> -->

    <!-- <div class="col-md">
      <div class="form-group">
        <label for="fechafin"><b>Días lab.</b></label>
        <input type="text" class="form-control form-control-sm" id="diaslab" name="diaslab" value="270">
      </div>
    </div> -->

    <div class="col-2">
      <div class="form-group">
        <label><b>Con hijos</b></label>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="chckHijos" name="chckHijos" value="1">
          <label class="custom-control-label" for="chckHijos"></label>
        </div>
      </div>
    </div>

    <div class="col-2">
      <div class="form-group">
        <label for="cf_Sexo"><b>Sexo</b></label>
        <select class="form-control form-control-sm select2-sm pExtempCatalogoAlt" id="pext_Sexo" name="pext_Sexo">
          <option value="0">Seleccionar</option>
          <option value="M">Masculino</option>
          <option value="F">Femenino</option>
        </select>
      </div>
    </div>
    <div class="col-md">
      <div class="form-group">
        <label class="control-label">&nbsp;</label>
        <div>
          <button type="submit" class="btn btn-inverse btn-sm" title="Buscar Empleado" id="btnBuscaEmpleado" name="btnBuscaEmpleado">
            <i class="fas fa-search"></i> Buscar
          </button>
        </div>
      </div>
    </div>
  </div>

  <?php
  echo form_close();
  ?>

  <div class="row">
    <div class="col-12">
      <div class="card divCardResultado" id="cardEmpleadoUnico" style="display:none;">
        <div class="card-body">
          <div class="row">
            <div class="col-4 pull-right">
              <div class="form-group">
                <input type="hidden" name="pext_idEmpleado" id="pext_idEmpleado" value="">
                <label for="pext_nombre"><b>Empleado</b></label>
                <input type="text" class="form-control form-control-sm" id="pext_nombre" name="pext_nombre" readonly>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="pext_categoria"><b>Categoría</b></label>
                <input type="text" class="form-control form-control-sm" id="pext_categoria" name="pext_categoria" readonly>
                <input type="hidden" id="pext_idcategoria" name="pext_idcategoria">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="pext_dependencia"><b>Dependencia</b></label>
                <input type="text" class="form-control form-control-sm" id="pext_dependencia" name="pext_dependencia" readonly>
                <input type="hidden" id="pext_iddependencia" name="pext_iddependencia">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label><b>Depósito Electrónico</b></label>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="pextEnomina" name="pextEnomina" value="1">
                  <label class="custom-control-label" for="pextEnomina"></label>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="pextEmisor"><b>Emisor</b></label>
                <select class="form-control form-control-sm select2-sm pExtempCatalogo" id="pextEmisor" name="pextEmisor">
                  <?= $emisores; ?>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="pextNumCuenta"><b>Número de Cuenta</b></label>
                <input type="text" class="form-control form-control-sm inpt_entero" id="pextNumCuenta" name="pextNumCuenta" onkeypress="return dispara_tab(event, this);" placeholder="Número de Cuenta" value="" autocomplete="off">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card divCardResultado" id="cardMultiEmpleados" style="display:none;">
    <div class="card-body" id="tblMultiEmpleados">

    </div>
  </div>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-success btn-sm" id="btnAgregarEmpleado" title="Agregar empleado" onclick="agrega_empleado_pago_ext();" disabled><i class="fa fa-plus"></i> Agregar</button>
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>

<script type="text/javascript">
setTimeout(function cargarconsulta() {
  // $(".pext_credencial").inputmask("9{5}",{ numericInput: true,placeholder: "0", positionCaretOnClick: "select", showMaskOnHover: false, showMaskOnFocus: false});

  $(".pExtempCatalogo").select2({
    language: "es",
    placeholder: "Seleccione un Elemento",
    width:'100%',
    // minimumResultsForSearch: Infinity,
     allowClear: true
  }).on("select2:close", function (event) {
      setTimeout(function() {
        $('.select2-container-active').removeClass('select2-container-active');
        $(':focus').blur();
        // dispara_tab_especial(event);
      }, 1);
  });

  $(".pExtempCatalogoAlt").select2({
    language: "es",
    placeholder: "Seleccione un Elemento",
    width:'100%',
    minimumResultsForSearch: Infinity,
    // allowClear: true
  }).on("select2:close", function (event) {
      setTimeout(function() {
        $('.select2-container-active').removeClass('select2-container-active');
        $(':focus').blur();
        // dispara_tab_especial(event);
      }, 1);
  })

  if ($("#pext_credencial").val() != "") { $('#frmBusquedaEmpleados').submit().toggle(); }
});

$("#pext_credencial").on("keydown change", function() {
  if ($(this).val().length == 1 && $.isNumeric($(this).val())){
    $(this).inputmask("9{5}",{ numericInput: true,placeholder: "0", positionCaretOnClick: "select", showMaskOnHover: false, showMaskOnFocus: false});
    $(this)[0].setSelectionRange(5,5);
  }
  if ($(this).val() == "") {
    $(this).inputmask('remove');
  }
});

$("#pextFiltro").on("change", function (e) {
  let filtro = $(this).val();
  $('.divFiltros').hide();
  $('.' + filtro).show();
});

function PostBackFrmCargaEmpleados(f,e) {
  e.preventDefault();
  let variables = $(f).serialize(),
      filtro = $("#pextFiltro").val();
  //PENDIENTE: validar
  Carga_Metodo(f.action, variables, exito_carga_empleado, "Cargando...");
  return false;
}

function exito_carga_empleado(respuesta) {
  if (respuesta.status == false) { alerta_emergente(respuesta.message, "warning"); }
  else {
    let empleado = respuesta.empleados;
    $('.divCardResultado').hide();
    if (typeof(empleado) == "undefined") {
      let html = respuesta.html;
      $('#btnAgregarEmpleado').prop('disabled',true);
      $('#tblMultiEmpleados').html(html);
      $('#cardMultiEmpleados').show();
    }
    else{
      $('#btnAgregarEmpleado').prop('disabled',false);
      $('#cardEmpleadoUnico').show();
      $('#pext_idEmpleado').val(empleado.Id);
      $('#pext_nombre').val(empleado.Empleado);
      $('#pext_idcategoria').val(empleado.idCategoria);
      $('#pext_categoria').val(empleado.Categoria);
      $('#pext_iddependencia').val(empleado.idDependencia);
      $('#pext_dependencia').val(empleado.Dependencia);
      $('#pext_idEmpleado').val(empleado.Id);
      $('#pext_credencial').val(empleado.Credencial);
      Carga_Metodo("pago_extraordinario/carga_pago_electronico", {idEmpleado:empleado.Id}, function functionName(res) {
        $('#pextNumCuenta').val(res.NumeroCuenta);
        $('#pextEmisor').val(res.EmisorId).select2().trigger('change');
        $('#pextEnomina').prop("checked",(res.ENomina == 1 ? true : false));
      }  , "Cargando...");
    }
  }
}

function agrega_empleado_pago_ext() {
  let tabla = $('#tblEmpleadosPagoExt').DataTable(),
      btn = '<button type="button" class="btn btn-xs btn-default" onclick="edita_emp_pago_ext(this);"><i class="fas fa-pencil-alt"></i></button>'+
            '<button type="button" class="btn btn-xs btn-danger" onclick="elimina_emp_pago_ext(this);"><i class="far fa-trash-alt"></i></button>';

  tabla.rows().every(function(rowIdx, tableLoop, rowLoop) {
    if (this.data() != null && this.data()[0] == $('#pext_idEmpleado').val()) {
      tabla.row(rowIdx).remove().draw();
    }
  });

  tabla.row.add( [
      $('#pext_idEmpleado').val(),
      $('#pext_credencial').val(),
      $('#pext_nombre').val(),
      $('#pext_idcategoria').val(),
      $('#pext_categoria').val(),
      $('#pext_iddependencia').val(),
      $('#pext_dependencia').val(),
      $('#pextEmisor').val(),
      $('#pextEmisor').find(':selected').text(),
      $('#pextNumCuenta').val(),
      ($('#pextEnomina').prop("checked") ? 'Sí' : ''),
      btn
  ] ).draw( false );
  tabla.columns.adjust().draw();
  tabla.responsive.recalc();
  return false;
}

function agrega_empleado_pago_ext_sys(url,data,esBoton) {
  if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
  if (esBoton) data = $(data).data('json');

  let idEmpleado = data.Id;

  if (typeof(idEmpleado) == "undefined" || idEmpleado == "" || idEmpleado == null ) {
    alerta_emergente("Error al obtener los valores del Empleado.","warning");
    return false;
  }

  Carga_Metodo("pago_extraordinario/carga_pago_electronico", {idEmpleado:idEmpleado}, function functionName(res) {
    let tabla = $('#tblEmpleadosPagoExt').DataTable(),
        btn = '<button type="button" class="btn btn-xs btn-default" onclick="edita_emp_pago_ext(this);"><i class="fas fa-pencil-alt"></i></button>'+
              '<button type="button" class="btn btn-xs btn-danger" onclick="elimina_emp_pago_ext(this);"><i class="far fa-trash-alt"></i></button>';

    tabla.rows().every(function(rowIdx, tableLoop, rowLoop) {
      if (this.data() != null && this.data()[0] == idEmpleado) {
        tabla.row(rowIdx).remove().draw();
      }
    });

    tabla.row.add( [
        idEmpleado,
        data.Credencial,
        data.Empleado,
        data.idCategoria,
        data.Categoria,
        data.idDependencia,
        data.Dependencia,
        res.EmisorId,
        res.Emisor,
        res.NumeroCuenta,
        (res.ENomina == 1 ? 'Sí' : ''),
        btn
    ] ).draw( false );
    tabla.columns.adjust().draw();
    tabla.responsive.recalc();
  }  , "Cargando...");

}
</script>
