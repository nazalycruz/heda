<h1 class="page-header">Tabuladores <small>mantenimiento de catálogo de tabuladores</small></h1>

<div class="card mb-2">
  <?php
  $attributes = array("id" => "frmTabuladores", "name" => "frmTabuladores","class" => "needs-validation", "onsubmit" => "return PostBackFrmGuardaTabulador(this, event);");
  echo form_open("catalogos/guarda_tabulador", $attributes);
  ?>
  <div class="card-body">
    <div id="errores_pe" class="alert alert-danger" style="display:none;"></div>
    <input type="hidden" id="idPagoEspecial" name="idPagoEspecial" value="0">

    <div class="row">
      <input type="hidden" id="ta_periodo" name="ta_periodo" value="0" required>
      <input type="hidden" id="ta_tabulador" name="ta_tabulador" value="" required>
      <div class="col-2">
        <div class="form-group">
          <label for="ta_renglon" class="form-label">Renglón</label>
          <input type="text" class="form-control form-control-sm inpt_entero" id="ta_renglon" name="ta_renglon" autocomplete="off" placeholder="Renglón" required readonly>
        </div>
      </div>
      <div class="col-2">
        <div class="form-group">
          <label for="ta_liminf" class="form-label">Límite Inferior</label>
          <input type="text" class="form-control form-control-sm cf_currency" id="ta_liminf" name="ta_liminf" autocomplete="off" placeholder="Límite Inferior" required>
        </div>
      </div>
      <div class="col-2">
        <div class="form-group">
          <label for="ta_limsup" class="form-label">Límite Superior</label>
          <input type="text" class="form-control form-control-sm cf_currency" id="ta_limsup" name="ta_limsup" autocomplete="off" placeholder="Límite Superior" required>
        </div>
      </div>
      <div class="col-2">
        <div class="form-group">
          <label for="ta_cfija" class="form-label">Cuota Fija</label>
          <input type="text" class="form-control form-control-sm cf_currency" id="ta_cfija" name="ta_cfija" autocomplete="off" placeholder="Cuota Fija" required>
        </div>
      </div>
      <div class="col-2" id="divPorcentaje">
        <div class="form-group">
          <label for="ta_porc" class="form-label">Porcentaje</label>
          <input type="text" class="form-control form-control-sm cf_porcentaje" id="ta_porc" name="ta_porc" autocomplete="off" placeholder="Porcentaje" required>
        </div>
      </div>
      <div class="col-2">
        <div class="form-group">
          <label class="control-label">&nbsp;</label>
          <div>
            <button class="btn btn-sm btn-success" id="btnGuardaTabulador" title="Guardar tabulador"><i class="far fa-save"></i> Guardar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  echo form_close();
  ?>
</div>
<div class="card mb-2">
  <ul class="nav nav-tabs nav-tabs-inverse nav-justified nav-justified-mobile" data-sortable-id="index-2">
    <li class="nav-item"><a href="#tab-quincenal" data-bs-toggle="tab" class="nav-link active"><i class="fas fa-table fa-lg m-r-5"></i> <span class="d-none d-md-inline">Tablas Quincenales</span></a></li>
    <li class="nav-item"><a href="#tab-mensual" data-bs-toggle="tab" class="nav-link"><i class="fas fa-table fa-lg m-r-5"></i> <span class="d-none d-md-inline">Tablas Mensuales</span></a></li>
  </ul>
  <div class="tab-content panel p-3 rounded-0 rounded-bottom">
    <div class="tab-pane fade active show" id="tab-quincenal">
      <div class="card-body">
        <div class="row">
          <div class="col-6">
            <div class="card">
              <div class="card-header pointer-cursor align-items-center bg-gradient-gray text-black fw-bold">
                ISR
              </div>
              <div class="card-body">
                <div class="table-responsive mt-0">
                  <table class="table table-bordered dn_tblTabuladores" id="tbl-ISR-1" cellspacing="0" width="100%">
                    <thead class="text-black">
                      <tr>
                        <th>Tabulador</th>
                        <th>Renglón</th>
                        <th>Límite Inferior</th>
                        <th>Límite Superior</th>
                        <th>Cuota Fija</th>
                        <th>Porcentaje</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody class="text-black">
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
          <div class="col-6">
            <div class="card">
              <div class="card-header pointer-cursor align-items-center bg-gradient-gray text-black fw-bold">
                Subsidio
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered dn_tblTabuladores" id="tbl-SUB-1" cellspacing="0" width="100%">
                    <thead class="bg-percepcion text-black">
                      <tr>
                        <th>Tabulador</th>
                        <th>Renglón</th>
                        <th>Límite Inferior</th>
                        <th>Límite Superior</th>
                        <th>Cuota Fija</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody class="text-black">
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="tab-mensual">
      <div class="card-body">
        <div class="row">
          <div class="col-6">
            <div class="card">
              <div class="card-header pointer-cursor d-flex align-items-center bg-gradient-gray text-black fw-bold">
                ISR
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered dn_tblTabuladores" id="tbl-ISR-2" cellspacing="0" width="100%">
                    <thead class="text-black">
                      <tr>
                        <th>Tabulador</th>
                        <th>Renglón</th>
                        <th>Límite Inferior</th>
                        <th>Límite Superior</th>
                        <th>Cuota Fija</th>
                        <th>Porcentaje</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody class="text-black">
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
          <div class="col-6">
            <div class="card">
              <div class="card-header pointer-cursor d-flex align-items-center bg-gradient-gray text-black fw-bold">
                Subsidio
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered dn_tblTabuladores" id="tbl-SUB-2" cellspacing="0" width="100%">
                    <thead class="bg-percepcion text-black">
                      <tr>
                        <th>Tabulador</th>
                        <th>Renglón</th>
                        <th>Límite Inferior</th>
                        <th>Límite Superior</th>
                        <th>Cuota Fija</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody class="text-black">
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<script type="text/javascript">

  $(document).ready(function(){
    $(".cf_currency").inputmask('currency',{rightAlign: true, allowMinus: false, removeMaskOnSubmit: true, undoOnEscape:false});
    $(".cf_porcentaje").inputmask('decimal', { rightAlign: true, allowMinus: false, removeMaskOnSubmit: true, });

    $('.dn_tblTabuladores').DataTable({
      language: {
        "url": "assets/plugins/DataTables/Spanish.json",
        "processing": "Cargando..."
      },
      dom: 't',
      paging: false,
      ordering: false,
      responsive: true,
      columnDefs: [
        { targets:[0],visible: false},
      ]
    });
    carga_tabuladores(1);
    carga_tabuladores(2);
  });

function carga_tabuladores(periodo) {
  var tablaISR = $('#tbl-ISR-'+periodo).DataTable(),
      tablaSubsidio = $('#tbl-SUB-'+periodo).DataTable();
  $.ajax({
    url   : '<?= base_url() ?>catalogos/carga_tabuladores',
    type: "POST",
    data: {periodo:periodo},
    dataType: "JSON",
    success : function(data){
      if (data.status == false) {
        alerta_emergente(data.message,"warning");
        return false;
      }
      else {
        var datosISR = data.datosISR,
            datosSubsidio = data.datosSubsidio,
            btnAccionesISR 			= '<a href="javascript:;" class="btn btn-xs btn-warning" title="Editar tabulador ISR" onclick="editar_renglon_tabulador(this,'+periodo+',\'ISR\')"><i class="far fa-edit"></i></a>'+
														 			'<a href="javascript:;" class="btn btn-xs btn-danger" title="Eliminar tabulador ISR" onclick="eliminar_renglon_tabulador(this,'+periodo+',\'ISR\')"><i class="fa-regular fa-trash-can"></i></a>',
						btnAccionesSubsidio = '<a href="javascript:;" class="btn btn-xs btn-warning" title="Editar tabulador Subsidio" onclick="editar_renglon_tabulador(this,'+periodo+',\'SUB\')"><i class="far fa-edit"></i></a>'+
																	'<a href="javascript:;" class="btn btn-xs btn-danger" title="Eliminar tabulador Subsidio" onclick="eliminar_renglon_tabulador(this,'+periodo+',\'SUB\')"><i class="fa-regular fa-trash-can"></i></a>';

        tablaISR.clear().draw();
        tablaSubsidio.clear().draw();

        for (var i in datosISR) {
          tablaISR.row.add(
            [ 'ISR', datosISR[i].idISR, formato_moneda(datosISR[i].LimInf), formato_moneda(datosISR[i].LimSup), formato_moneda(datosISR[i].CuotaFija), formatPorcentaje(datosISR[i].Porcentaje), btnAccionesISR ]
          );
        }

        for (var i in datosSubsidio) {
          tablaSubsidio.row.add(
            [ 'Subsidio', datosSubsidio[i].idSubsidio, formato_moneda(datosSubsidio[i].LimInf), formato_moneda(datosSubsidio[i].LimSup), formato_moneda(datosSubsidio[i].CuotaFija), btnAccionesSubsidio ]
          );
        }

        tablaISR.columns.adjust().draw(false);
        tablaISR.responsive.recalc();
        tablaSubsidio.columns.adjust().draw(false);
        tablaSubsidio.responsive.recalc();
      }
    }
  });
}

function PostBackFrmGuardaTabulador(f,e) {
  e.preventDefault();
  variables = $(f).serialize();
  Carga_Metodo(f.action, variables, exito_guarda_tabuladores, "Guardando...");
  return false;
}

function exito_guarda_tabuladores(respuesta) {
  if( respuesta.status == false ) {
    alerta_emergente(respuesta.message, "warning");
  }
  else{
    alerta_emergente(respuesta.message,"success");
    carga_tabuladores(respuesta.periodo);
    limpiaForm($('#frmTabuladores'));
  }
  return false;
}


function editar_renglon_tabulador(obj,periodo,tipo) {
	let data = $('#tbl-'+tipo+'-'+periodo).DataTable().row($(obj).closest('tr')).data();
  $('#ta_periodo').val(periodo);
  $('#ta_renglon').val(data[1]);
  $('#ta_liminf').val(data[2]);
  $('#ta_limsup').val(data[3]);
  $('#ta_cfija').val(data[4]);
  if (data[0] == 'ISR') {
    $('#divPorcentaje *').prop('disabled',false).show();
    $('#ta_porc').val(data[5]);
  }
  else { $('#divPorcentaje *').prop('disabled',true).hide(); }
  $('#ta_tabulador').val(data[0]);
}

function eliminar_renglon_tabulador(obj,periodo,tipo) {
	let data = $('#tbl-'+tipo+'-'+periodo).DataTable().row($(obj).closest('tr')).data(),
			renglon = data[1],
			tabulador = data[0];
	swal.fire({
    title: "Alerta",
    text: "¿Confirma que desea eliminar el registro?",
    icon: "question",
    showCancelButton: true,
  }).then(result => {
    if (result.value) {
      Carga_Metodo("<?=base_url();?>catalogos/eliminar_tabulador", {renglon:renglon,periodo:periodo,tabulador:tabulador}, exito_guarda_tabuladores, "Eliminando...");
    }
  }).catch(swal.noop);

	return false;
}

</script>
