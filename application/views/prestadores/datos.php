<h1 class="page-header">Prestadores de Servicios <small></small></h1>
<div class="card mb-2">
  <div class="card-body">
    <?php
    $attributes = array("id" => "frmBuscaPrestador", "name" => "frmBuscaPrestador", "onsubmit" => "return PostBackFrmBuscaPrestador(this, event);");
    echo form_open("prestadores/carga_personales", $attributes);
    ?>
    <div class="row">
      <input type="hidden" name="p_idPrestador" id="p_idPrestador" value="">
      <div class="col-4 divFiltros divCredNombre">
        <div class="form-group">
          <label for="p_credencial"><b>Credencial o Nombre</b></label>
          <input type="text" class="form-control form-control-sm p_credencial" id="p_credencial" name="p_credencial" placeholder="Credencial o nombre" autocomplete="off"  value="<?= empty($credencial) ? "" : $credencial; ?>">
        </div>
      </div>
      <div class="col-md">
        <div class="form-group">
          <label class="control-label">&nbsp;</label>
          <div>
            <button class="btn btn-inverse btn-sm" title="Buscar Prestador" id="btnBuscaPrestador" name="btnBuscaPrestador">
              <i class="fas fa-search"></i> Buscar
            </button>
          </div>
        </div>
      </div>
    </div>
    <?php
    echo form_close();
    ?>
  </div>
</div>

<div class="card">
  <div class="card-header bg-pjey text-white pointer-cursor d-flex align-items-center panel-title">
    <i class="fa fa-circle fa-fw text-green mr-2 f-s-8"></i> Datos
  </div>
  <div class="card-body">
    <!-- begin card -->
    <div class="card">
      <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
          <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#personales"><i class="fa fa-user"></i> Identificación</a></li>
          <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#contratos" data-item="contratos"><i class="far fa-credit-card"></i> Contratos</a></li> -->
          <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#pagoelect" data-item="pagoelect"><i class="far fa-credit-card"></i> Pago Electrónico</a></li> -->
        </ul>
      </div>
      <input type="hidden" class="form-control" id="ClavePrestador" name="ClavePrestador" value="">
      <div class="card-block">
        <div class="tab-content p-0 m-0">
          <div class="tab-pane fade active show" id="personales"></div>
          <div class="tab-pane fade" id="contratos"></div>
          <div class="tab-pane fade" id="pagoelect"></div>
        </div>
      </div>
    </div>
    <!-- end card -->
  </div>
</div>

<script type="text/javascript">
setTimeout(function FuncionesIniciales(){
  $('#frmBuscaPrestador').submit();
});


$('.nav-pills a').on('shown.bs.tab', function(event){
  var x = $(event.target).data('item'),         // active tab
      y = $(event.relatedTarget).data('item');  // previous tab

  switch (x) {
    case 'personales':
      $('#frmBuscaPrestador').submit();
      break;
    case 'contratos':
      CargarContratoPrestador();
      break;
    case 'pagoelect':
      CargarPagoElectronicoPrestador();
      break;
    default:
      break;
  }
});

// function CargarDatosPrestador() {
//   var ClavePrestador = $('#ClavePrestador').val();
//   cargarpag('<?=base_url();?>prestadores/carga_personales', "div#personales", true, "POST","p_credencial="+ClavePrestador);
//   return false;
// }

function CargarContratoPrestador() {
  var ClavePrestador = $('#ClavePrestador').val();
  cargarpag('<?=base_url();?>prestadores/CargaContratos', "div#contratos", true, "POST","ClavePrestador="+ClavePrestador);
  return false;
}

function CargarPagoElectronicoPrestador() {
  var ClavePrestador = $('#ClavePrestador').val();
  cargarpag('<?=base_url();?>prestadores/CargaPagoElectronico', "div#pagoelect", true, "POST","ClavePrestador="+ClavePrestador);
  return false;
}

function carga_agregar_prestador() {
  cargamodalGenerica('<?= base_url() ?>prestadores/carga_agregar_prestador', '#modContenido', '#modGeneral', "", "Agregar Prestador de Servicios", 1);
  return false;
}

function PostBackFrmBuscaPrestador(f,e) {
  e.preventDefault();
  let variables = $(f).serialize();
  //PENDIENTE: validar
  // cargarpag('<?=base_url();?>prestadores/carga_personales', "div#personales", true, "POST",variables);
  Carga_Metodo(f.action, variables, function guardar(res) {
    if (res.status == false) { alerta_emergente(res.message, "warning"); }
    else {
      $('#p_credencial').val(res.prestador.Credencial);
      $('div#personales').html(res.html);
    }
  }, "Cargando...");

  return false;
}

</script>
