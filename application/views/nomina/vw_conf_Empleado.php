<input type="hidden" name="bmodificado" id="bmodificado" value="0">
<input type="hidden" name="objeto" id="objeto" value="<?= (empty($objeto) ? false : $objeto); ?>">
<input type="hidden" name="esPrestador" id="esPrestador" value="<?= (empty($EsPrestador) ? 0 : 1); ?>">
<div id="body-principal" class="mb-0 mt-0">
  <div class="card mb-2 mt-0">
    <div class="card-body mb-0 mt-0">
      <input type="hidden" name="cf_idEmpleado" id="cf_idEmpleado" value="<?= $idEmpleado; ?>">
      <input type="hidden" name="calculoCierre" id="calculoCierre" value="<?= ( empty($calculoCierre) ? 'true' : 'false' ); ?>">
      <input type="hidden" name="cf_idPeriodo" id="cf_idPeriodo" value="<?= $idPeriodoPago; ?>">
      <div class="row mb-2">
				<?php if (empty($objeto)): ?>
				<div class="col-2">
          <div class="form-group">
            <label for="cf_credencial" class="form-label">Credencial</label>
            <input type="text" class="form-control form-control-sm" id="cf_credencial" readonly value="<?= $credencial; ?>">
          </div>
        </div>
				<?php endif; ?>
        <div class="col">
          <div class="form-group">
            <label for="cf_empleado" class="form-label">Nombre</label>
            <input type="text" class="form-control form-control-sm" id="cf_empleado" name="cf_empleado" value="<?= $empleado->NombreCompleto; ?>" readonly>
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-4">
          <div class="form-group">
            <label class="form-label">Categoría</label>
            <input type="text" class="form-control form-control-sm" id="cf_categoria" name="cf_categoria" value="<?= $empleado->DescripcionCategoria; ?>" readonly>
            <input type="hidden" id="cf_idcategoria" name="cf_idcategoria" value="<?= $empleado->Id_Categoria; ?>" readonly>
          </div>
        </div>
        <div class="col-4">
          <div class="form-group">
            <label class="form-label">Dependencia</label>
            <input type="text" class="form-control form-control-sm" id="cf_dependencia" name="cf_dependencia" value="<?= $empleado->DescripcionDependencia; ?>" readonly>
          </div>
        </div>
        <div class="col-4">
          <div class="form-group">
            <label for="cf_tiponomina" class="form-label">Tipo Nómina</label>
            <select class="form-control cf_catalogos form-control-sm select2-sm" id="cf_tiponomina" name="cf_tiponomina">
              <?= $cattiponomina; ?>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card mt-0">
    <div class="card-header container-fluid f-w-600 card-header-condensed">
			<div class="row">
			  <div class="col-10">
			    <h4>Percepciones/Deducciones</h4>
			  </div>
				<div class="col-2 text-end">
					<a href="javascript:;" class="btn btn-xs btn-default" title="Agregar" id="btnAgregar" name="btnAgregar" onclick="muestra_agregar_percepcion();"><i class="fas fa-plus"></i> Agregar</a>
				</div>
			</div>
    </div>
    <div class="card-body">
      <div class="row mb-0" id="confResult">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-td-valign-middle" id="tblConfPerDeduc" name="tblConfPerDeduc" style="width:100%">
            <thead>
              <tr>
                <th>Folio</th>
                <th>Percepción</th>
                <th>Id_TipoNomina</th>
                <th>Id_Concepto</th>
                <th>Clave</th>
                <th>Descripción</th>
                <th>Permanente</th>
                <th>Monto</th>
                <th>Veces Aplicadas</th>
                <th>Aplicar</th>
                <th>Gravado</th>
                <th>idConfEmpleado</th>
                <th>Código Acreedor</th>
                <th>Acreedor</th>
                <th></th>
                <th>monto percepción</th>
                <th>monto deducción</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="card-footer mt-0" id="footerConf">
      <div class="row text-end">
        <div class="col-4">
          <div class="form-group">
            <label for="total_percep" class="text-green-800 fw-bold">Total Percepciones</label>
            <input type="text" class="form-control-plaintext f-w-700 text-end" id="total_percep" name="total_percep" readonly>
          </div>
        </div>
        <div class="col-4">
          <div class="form-group">
            <label for="total_deduc" class="text-red-800 fw-bold">Total Deducciones</label>
            <input type="text" class="form-control-plaintext f-w-700 text-end" id="total_deduc" name="total_deduc" readonly>
          </div>
        </div>
        <div class="col-4">
          <div class="form-group">
            <label for="total_cobrar" class="form-label fw-bold">Total Configurado</label>
            <input type="text" class="form-control-plaintext fw-700 text-end" id="total_cobrar" name="total_cobrar" readonly>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div id="body-secundario" style="display:none;" class="card">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#card-tab-percepciones">Percepciones </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#card-tab-deducciones">Deducciones </a>
      </li>
    </ul>
  </div>
  <div class="card-body mb-0 pb-0">
    <div class="tab-content">
      <div class="tab-pane fade active show" id="card-tab-percepciones">
	      <?php
	      $attributes = array("id" => "frmGuardaPercepcionEmpleado", "name" => "frmGuardaPercepcionEmpleado", "onsubmit" => "return GuardarPercepcionDeduccionEmpleado(this, event);");
	        echo form_open("nomina/guardar_percepcion_deduccion_empleado", $attributes);
	      ?>
	      <div class="row mb-2">
	        <input type="hidden" id="percepcion" name="percepcion" value="1">
	        <input type="hidden" id="cf_idConfEmpleadoperc" name="cf_idConfEmpleado" value="0">
	        <div class="col-7">
	          <div class="form-group">
	            <label for="cf_conceptoperc" class="form-label">Concepto</label>
	            <select class="form-control form-control-sm select2-sm cf_catalogos" id="cf_conceptoperc" name="cf_concepto" required>
	              <?= $catperc; ?>
	            </select>
	          </div>
	        </div>
	        <div class="col-3">
	          <div class="form-group">
	            <label for="cf_monto" class="form-label">Monto</label>
	            <input type="text" class="form-control form-control-sm cf_currency" id="cf_montoperc" name="cf_monto" autocomplete="off" required>
	          </div>
	        </div>
	        <div class="col-2">
	          <div class="form-group">
	            <label>&nbsp;</label>
	            <div class="custom-control custom-checkbox">
	              <input type="checkbox" class="custom-control-input" id="chkPermanenteperc" name="chkPermanente" value="1" onclick="CambiaEstadoPermanente(this.checked,true);">
	              <label class="form-label" for="chkPermanenteperc">Permanente</label>
	            </div>
	          </div>
	        </div>
	      </div>
				<?php
				if (empty($EsPrestador)):
				?>
	      <div class="row mb-2">
	        <div class="col-2">
	          <div class="form-group">
	            <label for="cf_vecesaplicar" class="form-label">Veces a Aplicar</label>
	            <input type="text" class="form-control form-control-sm" id="cf_vecesaplicarperc" name="cf_vecesaplicar" autocomplete="off" onkeypress="return onlyDigits(event, this);" maxlength="3" onblur="CambiaVecesAplicar(this,true)" value="1">
	          </div>
	        </div>
	        <div class="col-2">
	          <div class="form-group">
	            <label for="cf_aplicadas" class="form-label">Aplicadas</label>
	            <input type="text" class="form-control form-control-sm" id="cf_aplicadasperc" name="cf_aplicadas" autocomplete="off" onkeypress="return onlyDigits(event, this);" maxlength="3" value="0">
	          </div>
	        </div>
	        <div class="col-3">
	          <div class="form-group text-end">
	            <label>&nbsp;</label>
	            <div class="custom-control custom-checkbox">
	              <input type="checkbox" class="custom-control-input" id="chkGravadoperc" name="chkGravado" value="1" disabled>
	              <label class="form-label" for="chkGravadoperc">Gravado</label>
	            </div>
	          </div>
	        </div>
	        <div class="col-3">
	          <div class="form-group">
	            <label>&nbsp;</label>
	            <div class="custom-control custom-checkbox">
	              <input type="checkbox" class="custom-control-input" id="chkParteExeperc" name="chkParteExe" value="1" disabled onclick="CambiaParteExenta(this.checked,true);">
	              <label class="form-label" for="chkParteExeperc">Tiene Parte Exenta</label>
	            </div>
	          </div>
	        </div>
	        <div class="col-2">
	          <div class="form-group">
	            <label for="cf_parteexeperc" class="form-label">Parte Exenta</label>
	            <input type="text" class="form-control form-control-sm cf_decimal" id="cf_parteexeperc" name="cf_parteexe" autocomplete="off" required disabled>
	          </div>
	        </div>
	      </div>
	      <div class="row" style="display:none;">
	        <div class="col-7">
	          <div class="form-group">
	            <label for="cf_acreedor" class="form-label">Acreedor</label>
	            <select class="form-control form-control-sm select2-sm cf_catalogosAcreedor" id="cf_acreedorperc" name="cf_acreedor">

	            </select>
	          </div>
	        </div>

	        <div class="col-5">
	          <div class="form-group">
	            <label for="cf_codacreedor" class="form-label">Código ARCON</label>
	            <input type="text" class="form-control form-control-sm" id="cf_codacreedorperc" name="cf_codacreedor" autocomplete="off" readonly>
	          </div>
	        </div>
	      </div>
				<?php
				endif;
				 ?>
	      <div class="row mt-2 mb-2">
	        <div class="col-sm-12 text-end">
	          <div class="form-group">
	            <label class="control-label">&nbsp;</label>
	            <button class="btn btn-success btn-sm" id="btnAgregarPercepcion" title="Agregar Percepción"><i class="fa fa-plus"></i> Agregar</button>
							<?php if (!empty($objeto)): ?>
							<label class="control-label">&nbsp;</label>
							<button type="button" onclick="regresar_principal();" class="btn btn-default btn-sm" id="btnAgregarDeduccion" title="Regresar al listado"><i class="fa-solid fa-angles-left"></i> Regresar</button>
							<?php endif; ?>
	          </div>
	        </div>
	      </div>
	      <?php
	      echo form_close();
	      ?>
      </div>

      <div class="tab-pane fade" id="card-tab-deducciones">
        <?php
        $attributes = array("id" => "frmGuardaDeduccionEmpleado", "name" => "frmGuardaDeduccionEmpleado", "onsubmit" => "return GuardarPercepcionDeduccionEmpleado(this, event);");
        echo form_open("nomina/guardar_percepcion_deduccion_empleado", $attributes);
        ?>
        <div class="row mb-2">
          <input type="hidden" id="deduccion" name="deduccion" value="1">
          <input type="hidden" id="cf_idConfEmpleadodeduc" name="cf_idConfEmpleado" value="0">
          <input type="hidden" id="cf_esISSTEY" name="cf_esISSTEY" value="0">
          <div class="col-md-7">
            <div class="form-group">
              <label for="cf_conceptodeduc" class="form-label">Concepto</label>
              <select class="form-control form-control-sm select2-sm cf_catalogos" id="cf_conceptodeduc" name="cf_concepto" required>
                <?= $catdeduc; ?>
              </select>
            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
              <label for="cf_monto" class="form-label">Monto</label>
              <input type="text" class="form-control form-control-sm cf_currency" id="cf_montodeduc" name="cf_monto" autocomplete="off" required>
            </div>
          </div>
          <div class="col-2">
            <div class="form-group">
              <label>&nbsp;</label>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="chkPermanentededuc" name="chkPermanente" value="1" onclick="CambiaEstadoPermanente(this.checked,false);">
                <label class="form-label" for="chkPermanentededuc">Permanente</label>
              </div>
            </div>
          </div>
        </div>
				<?php
				if (empty($EsPrestador)):
				 ?>
        <div class="row mb-2">
          <div class="col-2">
            <div class="form-group">
              <label for="cf_vecesaplicar" class="form-label">Veces a Aplicar</label>
              <input type="text" class="form-control form-control-sm" id="cf_vecesaplicardeduc" name="cf_vecesaplicar" autocomplete="off" onkeypress="return onlyDigits(event, this);" maxlength="3" onblur="CambiaVecesAplicar(this,false)" value="1">
            </div>
          </div>
          <div class="col-2">
            <div class="form-group">
              <label for="cf_aplicadas" class="form-label">Aplicadas</label>
              <input type="text" class="form-control form-control-sm" id="cf_aplicadasdeduc" name="cf_aplicadas" autocomplete="off" onkeypress="return onlyDigits(event, this);" maxlength="3" value="0">
            </div>
          </div>
          <div class="col-3">
            <div class="form-group text-end">
              <label>&nbsp;</label>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="chkGravadodeduc" name="chkGravado" value="1" disabled>
                <label class="form-label" for="chkGravadodeduc">Gravado</label>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
              <label>&nbsp;</label>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="chkParteExededuc" name="chkParteExe" disabled value="1" onclick="CambiaParteExenta(this.checked,true);">
                <label class="form-label" for="chkParteExededuc">Tiene Parte Exenta</label>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="form-group">
              <label for="cf_parteexededuc" class="form-label">Parte Exenta</label>
              <input type="text" class="form-control form-control-sm cf_decimal" id="cf_parteexededuc" name="cf_parteexe" autocomplete="off" required disabled>
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-2">
            <div class="form-group">
              <label for="cf_folio" class="form-label">Folio</label>
              <input type="text" class="form-control form-control-sm" id="cf_folio" name="cf_folio" autocomplete="off" onkeypress="return onlyDigits(event, this);" disabled>
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-7">
            <div class="form-group">
              <label for="cf_acreedordeduc" class="form-label">Acreedor</label>
              <select class="form-control form-control-sm select2-sm cf_catalogos" id="cf_acreedordeduc" name="cf_acreedor">
								<?= $catacreedores; ?>
              </select>
            </div>
          </div>

          <div class="col-5">
            <div class="form-group">
              <label for="cf_codacreedordeduc" class="form-label">Clave Acreedor</label>
              <input type="text" class="form-control form-control-sm" id="cf_codacreedordeduc" name="cf_codacreedor" autocomplete="off" readonly />
            </div>
          </div>
        </div>
				<?php endif; ?>
        <div class="row mt-2 mb-2">
          <div class="col-sm-12 text-end">
            <div class="form-group">
              <label class="form-label">&nbsp;</label>
              <button class="btn btn-danger btn-sm" id="btnAgregarDeduccion" title="Agregar Deducción"><i class="fa fa-plus"></i> Agregar</button>
							<?php if (!empty($objeto)): ?>
							<label class="form-label">&nbsp;</label>
							<button type="button" onclick="regresar_principal();" class="btn btn-default btn-sm" id="btnRegresar" title="Regresar al listado"><i class="fa-solid fa-angles-left"></i> Regresar</button>
							<?php endif; ?>
						</div>

          </div>
        </div>
        <?php
        echo form_close();
        ?>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
		var objeto = $("#objeto").val();
    $(".cf_currency").inputmask('currency',{rightAlign: true, prefix: '$ '  });
    $(".cf_decimal").inputmask('decimal',{digits: 2, digitsOptional: false, placeholder: '0.00', rightAlign: false  });

    Inputmask("#-#-#-#-####-####-##-##-##-#####", {}).mask(".codacreedor");

		$('.cf_catalogos').each(function () {
			$(this).select2({
	      language: "es",
	      placeholder: "Seleccione un Elemento",
	      width:'100%',
				dropdownParent: $(this).parent(),
	    }).on("select2:close", function (event) {
	        setTimeout(function() {
	          $('.select2-container-active').removeClass('select2-container-active');
	          $(':focus').blur();
	          dispara_tab_especial(event);
	        }, 1);
	    });
		});

		selectRefresh($(".cf_catalogosAcreedor"));

    if (!$.fn.dataTable.isDataTable( '#tblConfPerDeduc' )) {
      var tablaCPD = $('#tblConfPerDeduc').DataTable({
        initComplete: function() {
          tablaCPD.columns.adjust().draw();
          tablaCPD.responsive.recalc();
        },
        language: {
          "url": "assets/plugins/DataTables/Spanish.json",
          "processing": "Cargando..."
        },
        dom: 't',
        // pageLength: 20,
        order: [1, 'asc'],
        ordering: false,
        responsive: true,
        processing: 'true',
        columnDefs: [
          { targets:[2,3,11,15,16],visible: false},
          { targets: [1,6,10], className: "dt-center" },
          { targets: '_all', className: "dt-head-center" },
          { targets: [1,14], responsivePriority: 1 },
        ]
      });
    }

    carga_conf_percepciones_deducciones();
  });

  function carga_conf_percepciones_deducciones(){
		let esPrestador = $('#esPrestador').val(),
				url = 'nomina/trae_percepciones_deducciones_empleado';
		if (esPrestador == 1) {
			carga_conf_prestador();
			return false;
		}

    let tabla = $('#tblConfPerDeduc').DataTable(),
        idTipoNomina = $("#cf_tiponomina option:selected").val(),
        idEmpleado = $('#cf_idEmpleado').val(),
        icono = '<span class="text-center text-success btn-icon btn-circle btn-xs"><i class="fa fa-check"></i></span>',
        totalP = 0,totalD = 0,totalC = 0;

    $.ajax({
      url   : '<?= base_url() ?>'+url,
      type: "POST",
      data: {idEmpleado:idEmpleado,idTipoNomina:idTipoNomina},
      dataType: "JSON",
      success : function(data){
        if (data.status == false) {
          alerta_emergente(data.msj,"warning");
          return false;
        }
        else{
          tabla.clear().draw();
          for (var i in data) {
            tabla.row.add(
             [
               (data[i].FolioISSTEY == -1 ? '' : data[i].FolioISSTEY),
               (data[i].EsPercepcion == 1 ? icono : ''),
               data[i].Id_TipoNomina,
               data[i].Id_Concepto,
               data[i].ClaveRecibo,
               data[i].Descripcion,
               (data[i].Permanente == 1 ? icono : ''),
               formato_moneda(data[i].Monto),
               data[i].VecesAplicadas,
               data[i].VecesAplicar,
               (data[i].Gravado == 1 ? icono : ''),
               data[i].ConfEmpleadoID,
               data[i].CodigoAcreedor,
               data[i].NombreAcreedor,
               '<div class="btn-group" role="group" aria-label="Acciones">'+
               '  <button type="button" class="btn btn-xs btn-default" title="Editar" onclick="editar_concepto(\'\',this);"><i class="fas fa-pencil-alt"></i></button>'+
               '  <button type="button" class="btn btn-xs btn-danger" title="Eliminar" onclick="eliminar_concepto(\'\',this);"><i class="far fa-trash-alt"></i></button>'+
               '</div>',
               (data[i].EsPercepcion == 1 ? data[i].Monto : 0),
               (data[i].EsPercepcion == 0 ? data[i].Monto : 0),
             ]
            );
          }
          tabla.columns.adjust().draw();
          tabla.responsive.recalc();
          totalP = tabla.column( 15 ).data().sum();
          totalD = tabla.column( 16 ).data().sum();
          totalC = totalP - totalD;
          $('#total_percep').val(formato_moneda(totalP));
          $('#total_deduc').val(formato_moneda(totalD));
          $('#total_cobrar').val(formato_moneda(totalC));
        }
      }
    });
  }

  function muestra_agregar_percepcion() {
    limpiaForm($('#frmGuardaDeduccionEmpleado'));
    limpiaForm($('#frmGuardaPercepcionEmpleado'));
    $('#cf_conceptoperc').prop("disabled",false);
    $('#cf_conceptodeduc').prop("disabled",false);
    $('#body-principal').hide();
    $('#body-secundario').show();
    $('#btnCerrar').hide();
    $('#btnRegresar').show();
		$('.cf_catalogos').each(function () {
			if ($(this).hasClass("select2-hidden-accessible")) {
	    	$('#'+this.id).select2("destroy");
			}
			$('#'+this.id).select2({
				language: "es",
				placeholder: "Seleccione un Elemento",
				width:'100%',
				dropdownParent: $('#'+this.id).parent(),
			}).on("select2:close", function (event) {
					setTimeout(function() {
						$('.select2-container-active').removeClass('select2-container-active');
						$(':focus').blur();
						dispara_tab_especial(event);
					}, 1);
			});
		});
  }

  function regresar_principal() {
    carga_conf_percepciones_deducciones();
		limpiaForm($('#frmGuardaDeduccionEmpleado'));
		limpiaForm($('#frmGuardaPercepcionEmpleado'));
    $('#body-principal').show();
    $('#body-secundario').hide();
    $('#btnCerrar').show();
    $('#btnRegresar').hide();
  }

  function GuardarPercepcionDeduccionEmpleado(f,e) {
    e.preventDefault();
    let esPrestador = $('#esPrestador').val();
		if (esPrestador == 1) {
			guarda_perdeduc_prestador(f,e);
			return false;
		}

		let	idEmpleado      = $('#cf_idEmpleado').val(),
        idTipoNomina    = $('#cf_tiponomina').val(),
        idPeriodoPago   = $('#cf_idPeriodo').val(),
        suf             = (f.id == "frmGuardaPercepcionEmpleado" ? 'perc' : 'deduc');
        idConcepto      = $("#cf_concepto"+suf+" option:selected").val();
        idConfEmpleado  = $('#cf_idConfEmpleado'+suf).val(),
        ClaveRecibo     = $("#cf_concepto"+suf+" option:selected").data('claverecibo'),
        Acreedor        = $("#cf_acreedor"+suf+" option:selected").text(),
        variables       = $(f).serialize();

    $('form#'+f.id+' :disabled').each( function() {
      variables = variables + '&' + $(this).attr('name') + '=' + $(this).val();
    });

    if (valida_guardado_concepto($(f).serializeArray(),idEmpleado,idTipoNomina,ClaveRecibo,idConcepto,idConfEmpleado)) {
      var idCategoria = $('#cf_idcategoria').val();
      $.when( valida_concepto(idConcepto,idCategoria,idTipoNomina,idEmpleado) )
      .then(function( data, textStatus, jqXHR ) {
        if (data.valido == false) {
          alerta_emergente(data.message,'warning');
          return false;
        }
        else if (data.tienePrimaVA) {
          swal.fire({
            title: "Atención",
            html: "<p>Este empleado tiene una prima vacacional pagada para el periodo del "+data.periodoVAini+" al "+data.periodoVAfin+", con un monto de "+formato_moneda(data.montoVA)+".</p>"+
                  "<p>¿Desea configurar el concepto nuevamente? </p>",
            icon: 'warning',
            showCancelButton: true,
            allowOutsideClick: false,
          }).then((result) => {
            if (result.value) {
              Carga_Metodo(f.action, variables+'&idEmpleado='+idEmpleado+'&idTipoNomina='+idTipoNomina+'&idPeriodoPago='+idPeriodoPago+'&ClaveRecibo='+ClaveRecibo+'&acreedor='+Acreedor, "", "Guardando...");
              $('#bmodificado').val(1);
            }
            else if ( result.dismiss === Swal.DismissReason.cancel ) {
              alerta_emergente("El empleado ya tiene una prima vacacional.",'warning');
              return false;
            }
          })
        }
        else {
          Carga_Metodo(f.action, variables+'&idEmpleado='+idEmpleado+'&idTipoNomina='+idTipoNomina+'&idPeriodoPago='+idPeriodoPago+'&ClaveRecibo='+ClaveRecibo+'&acreedor='+Acreedor, "", "Guardando...");
          $('#bmodificado').val(1);
        }
      })
      .fail(function() {
        alerta_emergente("Ocurrió un error al intentar validar. Intente de nuevo más tarde.",'warning');
        return false;
      });
    }
    return false;
  }

  function valida_guardado_concepto(variables,idEmpleado,idTipoNomina,ClaveRecibo,idConcepto,idConfEmpleado) {
    let tabla       = $('#tblConfPerDeduc').DataTable(),
        idCategoria = $('#cf_idcategoria').val(),
        mensaje     = '',
        continuar   = true, permanente = false,
        editar      = (idConfEmpleado > 0 ? true : false);
    if (continuar) {
      if (typeof(ClaveRecibo) == "undefined" || ClaveRecibo === "" || ClaveRecibo == 0 || typeof(idConcepto) == "undefined" || idConcepto === "" || idConcepto == 0) {
        mensaje = "Error al obtener la Clave del concepto. Intente de nuevo más tarde.";
        continuar = false;
      }
    }

    if (continuar) {
      if (typeof(idEmpleado) == "undefined" || idEmpleado === "" || idEmpleado == 0) {
        mensaje = "Error al obtener la información del empleado. Intente de nuevo más tarde.";
        continuar = false;
      }
    }

    if (continuar) {
      if (typeof(idTipoNomina) == "undefined" || idTipoNomina === "" || idTipoNomina == 0) {
        mensaje = "Error al obtener el tipo de nómina. Intente de nuevo más tarde";
        continuar = false;
      }
    }

    if (continuar) {
      if (typeof(idCategoria) == "undefined" || idCategoria === "" || idCategoria == 0) {
        mensaje = "Error al obtener la categoría del empleado. Intente de nuevo más tarde";
        continuar = false;
      }
    }

    if (continuar) {
      $.each( variables, function( i, field ) {
        if (continuar && field.name == "cf_concepto") {
          if (typeof(field.value) == "undefined" || field.value === "" || field.value == 0) {
            continuar = false;
            mensaje = "Debe seleccionar un concepto.";
          }
          else {
            if (editar == false) {
              var idConcepto = field.value;
              tabla.rows().every( function ( rowIdx, tableLoop, rowLoop ) {
                if (continuar) {
                  var data = this.data();
                  if (data[3] == idConcepto) {
                    continuar = false;
                    mensaje = "Favor de verificar que no exista configuración del concepto a agregar.";
                  }
                }
              });
            }
          }
        }

        if (continuar && field.name == "cf_monto") {
          if (typeof(field.value) == "undefined" || field.value === "" || field.value <= 0) {
            continuar = false;
            mensaje = "Favor de verificar el monto.";
          }
        }

        if (continuar && field.name == "cf_vecesaplicar") {
          if (typeof(field.value) == "undefined" || field.value === "" || field.value <= 0) {
            $.each( variables, function( j, campo ) {
              if( campo.name == "chkPermanente" ){ permanente = true; }
            });
            if (permanente == false) {
              continuar = false;
              mensaje = "Favor de verificar las veces a aplicar.";
            }
          }
        }

        if (continuar && field.name == "cf_folio") {
          if (typeof(field.value) == "undefined" || field.value === "" || field.value == 0) {
            continuar = false;
            mensaje = "Debe ingresar el número de folio.";
          }
        }
      });
    }

    if (continuar == false) { alerta_emergente(mensaje,'warning'); }

    return continuar;

  }

  function valida_concepto(idConcepto,idCategoria,idTipoNomina,idEmpleado) {
    return $.ajax('<?=base_url();?>nomina/valida_guardar_concepto', {
        data: {
            idConcepto:idConcepto,idCategoria:idCategoria,idTipoNomina:idTipoNomina,idEmpleado:idEmpleado
        },
        type: "POST",
        dataType: 'json'
    });
  }

  function eliminar_concepto(obj,btn) {
    let tabla           = $('#tblConfPerDeduc').DataTable(),
        data            = tabla.row( $(btn).parents('tr') ).data(),
        EsPercepcion    = (data[15] > 0 ? true : false),
        idConfEmpleado  = data[11],
        folioISSTEY     = data[0],
        ClaveRecibo     = data[4],
        idEmpleado      = $('#cf_idEmpleado').val(),
        idTipoNomina    = $('#cf_tiponomina').val();

    if (typeof(idConfEmpleado) == "undefined" || idConfEmpleado === "" || idConfEmpleado == 0 || typeof(idEmpleado) == "undefined" || idEmpleado === "" || idEmpleado == 0) {
      alerta_emergente("Ocurrió un error al obtener la información. Por favor intente de nuevo más tarde.","warning")
      return false;
    }

    swal.fire({
       title: "Eliminar",
       html: "<p>¿Confirma que desea eliminar la "+(EsPercepcion ? "Percepción" : "Deducción")+": "+data[5]+"?</p>",
       icon: "question",
       showCancelButton: true,
       showLoaderOnConfirm: true,
       allowOutsideClick: false,
       preConfirm: function () {
         return new Promise(function(resolve) {
           Carga_Metodo('<?=base_url();?>nomina/elimina_percepcion_deduccion_empleado/', {idEmpleado:idEmpleado,idTipoNomina:idTipoNomina,idConfEmpleado:idConfEmpleado,ClaveRecibo:ClaveRecibo,folioISSTEY:folioISSTEY},
                        function(data){ exito_elimina_concepto(data,btn); }, "Eliminando...");
           swal.close();
          });
        }
      });

    return false;
  }

  function exito_elimina_concepto(respuesta,btn) {
    if (respuesta.status == false) { alerta_emergente(respuesta.message, "warning"); }
    else {
      $('#bmodificado').val(1);
      alerta_emergente(respuesta.message, "success");
      carga_conf_percepciones_deducciones();
    }
  }

  function editar_concepto(url,obj) {
		let esPrestador = $('#esPrestador').val(),
				tabla         = $('#tblConfPerDeduc').DataTable(),
				data          = tabla.row( $(obj).parents('tr') ).data();

    muestra_agregar_percepcion();
		if (esPrestador == 1) {
			editar_concepto_prestador(data);
			return false;
		}

		let EsPercepcion  = (data[15] > 0 ? true : false),
				suf           = (EsPercepcion ? 'perc' : 'deduc');
    $('#cf_concepto'+suf).addClass('editando');
    $('#cf_concepto'+suf).val(data[3]).trigger('change');
    $('#cf_idConfEmpleado'+suf).val(data[11]);
    $('#cf_monto'+suf).val(data[7]);

    $('#cf_acreedor'+suf).val(data[12]).trigger('change');
		
    $('#cf_vecesaplicar'+suf).val(data[9]);
    $('#cf_aplicadas'+suf).val(data[8]);

    if (data[6] == '') $('#chkPermanente'+suf).prop("checked",false);
    else $('#chkPermanente'+suf).prop("checked",true);

    if (data[10] == '') $('#chkGravado'+suf).prop("checked",false)
    else $('#chkGravado'+suf).prop("checked",true)
    if (!EsPercepcion) {
      $('#cf_folio').val(data[0]);
      $('#cf_conceptoperc').prop("disabled",false);
      $('#cf_conceptodeduc').prop("disabled",true);
      $('[href="#card-tab-deducciones"]').tab('show');
    }
    else {
      $('#cf_conceptoperc').prop("disabled",true);
      $('#cf_conceptodeduc').prop("disabled",false);
      $('[href="#card-tab-percepciones"]').tab('show');
    }

    $('#cf_concepto'+suf).removeClass('editando');
  }

	function editar_concepto_prestador(data) {
		let suf	= (data.EsPercepcion == 1 ? 'perc' : 'deduc');
		$('#cf_concepto'+suf).addClass('editando');
    $('#cf_concepto'+suf).val(data.Id_Concepto);
    $('#cf_concepto'+suf).select2().trigger('change');
    $('#cf_idConfEmpleado'+suf).val(data.ConfPrestServID);
    $('#cf_monto'+suf).val(data.Monto);
		if (data.Permanente == 0) $('#chkPermanente'+suf).prop("checked",false);
    else $('#chkPermanente'+suf).prop("checked",true);
		if (data.EsPercepcion == 0) {
      $('#cf_conceptoperc').prop("disabled",false);
      $('#cf_conceptodeduc').prop("disabled",true);
      $('[href="#card-tab-deducciones"]').tab('show');
    }
    else {
      $('#cf_conceptoperc').prop("disabled",true);
      $('#cf_conceptodeduc').prop("disabled",false);
      $('[href="#card-tab-percepciones"]').tab('show');
    }

		$('#cf_concepto'+suf).removeClass('editando');
	}

  $("#cf_tiponomina").on("change", function (e) {
    carga_conf_percepciones_deducciones();
    return false;
  });

  function CambiaEstadoPermanente(checked,EsPercepcion){
    if (checked == true) {
      if (EsPercepcion) { $("#cf_vecesaplicarperc").val(0); }
      else { $("#cf_vecesaplicardeduc").val(0); }
    }
    else{
      if (EsPercepcion) { $("#cf_vecesaplicarperc").val(1); }
      else { $("#cf_vecesaplicardeduc").val(1); }
    }
  }

  function CambiaParteExenta(checked,EsPercepcion) {
    if (checked == true) {
      if (EsPercepcion) { $("#cf_parteexeperc").prop("disabled", false); }
      else { $("#cf_parteexededuc").prop("disabled", false); }
    }
    else {
      if (EsPercepcion) { $("#cf_parteexeperc").prop("disabled", true); }
      else { $("#cf_parteexededuc").prop("disabled", true); }
    }
  }

  function CambiaVecesAplicar(obj,EsPercepcion) {
    var valor = $(obj).val();
    if (valor > 0) {
      if (EsPercepcion) {
        $('#chkPermanenteperc').prop('checked', false);
      }
      else {
        $('#chkPermanentededuc').prop('checked', false);
      }
    }
  }

  $("#cf_acreedorperc").on("change", function (e) {
    var codigo = $(this).val();
    $('#cf_codacreedorperc').val(codigo);
    return false;
  });

  $("#cf_acreedordeduc").on("change", function (e) {
    var codigo = $('option:selected',this).data("codigoacreedor");
    $('#cf_codacreedordeduc').val(codigo);
    return false;
  });

  function cierra_modal_configuracion() {
		ocultamodalGenerica();
		ocultamodalGenerica('modGeneralXL');

    if ($('#calculoCierre').val() == 'true') {
      if ($('#bmodificado').val() > 0) {
        calcular("Para que estos cambios se reflejen es necesario calcular la nómina,</p> <p>¿Desea realizar este proceso?</p>");
      }
    }
  }

  /* GSantos, 2021.12.29*/
  $("#cf_conceptodeduc").on("change", function (e) {
		var IdConcepto = $("#cf_conceptodeduc option:selected").val();
		if (IdConcepto > 0) {
			traer_datos_concepto(IdConcepto, "deduc");
		}

		return false;
  });

  /* GSantos, 2021.12.28*/
  $("#cf_conceptoperc").on("change", function (e) {
		var IdConcepto = $("#cf_conceptoperc option:selected").val();
		if (IdConcepto > 0) {
			traer_datos_concepto(IdConcepto, "perc");
		}

		return false;
  });

 /* GSantos, 2021.12.22*/
  function traer_datos_concepto(idConcepto, suf) {
     // $("#cf_acreedor"+suf).select2("val", "");
     // $("#cf_acreedor"+suf).select2('data', null);
     // $("#cf_acreedor"+suf).val('');
     // $("#cf_acreedor"+suf).empty().trigger("change");

     $.ajax({
      url: "<?=base_url();?>nomina/trae_datos_concepto",
      type: "POST",
      data: {idConcepto:idConcepto},
      dataType: "JSON",

      success : function(data){
	      if (data.status == false) {
	        alerta_emergente(data.message,"warning");
	        return false;
	      }
	      else {
	        var datosConcepto = data.datosconcepto;

	        if (datosConcepto['antesimp'] == true) {
          	$('#chkGravado'+suf).prop("checked",true);
						$('#chkGravado'+suf).val(1);
	        }
	        else {
          	$('#chkGravado'+suf).prop("checked",false);
						$('#chkGravado'+suf).val(0);
	        }
	        if (datosConcepto['tieneparteexe'] == true) {
	          $('#chkParteExe'+suf).prop("checked",true);
	          $('#cf_parteexe'+suf).prop("value", datosConcepto['parteexe']).prop("disabled", false);
						$('#chkParteExe'+suf).val(1);
	        }
	        else {
	          $('#chkParteExe'+suf).prop("checked",false);
						$('#chkParteExe'+suf).val(0);
	          $('#cf_parteexe'+suf).prop("value", "").prop("disabled", true);
	        }

	        if (datosConcepto['esISSTEY'] == true) {
	          $('#cf_folio').prop("disabled",false);
	          $('#cf_esISSTEY').val(1);
	        }
	        else {
	          $('#cf_folio').prop("disabled",true);
	          $('#cf_esISSTEY').val(0);
	        }
	        //Aquí vamos a llenar el combo de acreedores
	         // var datosacreedores = datosConcepto.catacreedores;
					 // $('#cf_acreedor'+suf).append(datosacreedores);
					 // selectRefresh($('#cf_acreedor'+suf));
	      }
	    }
    });
  }

	function selectRefresh($sel) {
		$sel.select2({
      language: "es",
      placeholder: "Seleccione un Elemento",
      width:'100%',
      dropdownParent: (objeto == false ? $('#modGeneral .modal-content') : ''),
    }).on("select2:close", function (event) {
        setTimeout(function() {
          $('.select2-container-active').removeClass('select2-container-active');
          $(':focus').blur();
          dispara_tab_especial(event);
        }, 1);
    });
	}

	function carga_conf_prestador() {
		let idTipoNomina = $("#cf_tiponomina option:selected").val(),
				idPrestador = $('#cf_idEmpleado').val(),
				totalP = 0,totalD = 0,totalC = 0;
		$('div#confResult').empty();
		$('div#footerConf').empty();
		Carga_Metodo("<?=base_url();?>prestadores/trae_configuracion", {idPrestador:idPrestador,idTipoNomina:idTipoNomina}, function cargaConf(respuesta){
			$('div#confResult').html(respuesta.html);
		}, "Cargando...");
		return false;
	}

	function guarda_perdeduc_prestador(f,e) {
		let	idPrestador     = $('#cf_idEmpleado').val(),
				idTipoNomina    = $('#cf_tiponomina').val(),
				idPeriodoPago   = $('#cf_idPeriodo').val(),
				suf             = (f.id == "frmGuardaPercepcionEmpleado" ? 'perc' : 'deduc');
				idConcepto      = $("#cf_concepto"+suf+" option:selected").val();
				idConfEmpleado  = $('#cf_idConfEmpleado'+suf).val(),
				ClaveRecibo     = $("#cf_concepto"+suf+" option:selected").data('claverecibo'),
				variables       = $(f).serialize();
		Carga_Metodo("<?=base_url();?>prestadores/guardar_percepciones_deducciones", variables+'&idPrestador='+idPrestador+'&idTipoNomina='+idTipoNomina+'&idPeriodoPago='+idPeriodoPago+'&ClaveRecibo='+ClaveRecibo+'&idConcepto='+idConcepto, "", "Guardando...");
		$('#bmodificado').val(1);
	}

</script>
