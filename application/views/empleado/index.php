<div id="divEnvios" class="card">
	<h5 class="card-header d-flex justify-content-between align-items-center bg-pjey text-white">
	  Datos del empleado - <?= FormatoFolio($ClaveEmpleado,5) .' '. $empleado->Nombre.' '.$empleado->Apellido1.' '.$empleado->Apellido2;; ?>
	  <button class="btn btn-xs btn-white text-end" id="btnImprimirAcuse" title="Imprimir acuse" onclick="ImprimirAcuse();"><i class="fa fa-print"></i>&nbsp;&nbsp;Imprimir acuse</button>
	</h5>
  <div class="card-body">
    <!-- begin card -->
    <div class="card">
      <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
          <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Registro"><i class="fa fa-user"></i> Datos personales
            <span id="iconoEdoEmp_Pend" class="text-danger btn-icon btn-circle btn-xs"><i class="fa fa-exclamation"></i></span>
            <span id="iconoEdoEmp_Conf" class="text-success btn-icon btn-circle btn-xs"><i class="fa fa-check"></i></span></a>
          </li>
					<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contrato" data-item="contrato" title="Contrato"><i class="fa-solid fa-pen-fancy"></i> Contrato
						<span id="iconoEdoContrato_Pend" class="text-danger btn-icon btn-circle btn-xs" style="display:none;"><i class="fa fa-exclamation"></i></span>
						<span id="iconoEdoContrato_Conf" class="text-success btn-icon btn-circle btn-xs" style="display:none;"><i class="fa fa-check"></i></span></a>
					</li>
					<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#educacion" data-item="educacion" title="Formación Académica"><i class="fa-solid fa-book-open-reader"></i> Formación Académica
						<span id="iconoEdoEduc_Pend" class="text-danger btn-icon btn-circle btn-xs"><i class="fa fa-exclamation"></i></span>
						<span id="iconoEdoEduc_Conf" class="text-success btn-icon btn-circle btn-xs"><i class="fa fa-check"></i></span></a>
					</li>
					<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#laboral" data-item="laboral" title="Experiencia Laboral"><i class="fa-solid fa-briefcase"></i> Experiencia Laboral
						<span id="iconoEdoLaboral_Pend" class="text-danger btn-icon btn-circle btn-xs"><i class="fa fa-exclamation"></i></span>
						<span id="iconoEdoLaboral_Conf" class="text-success btn-icon btn-circle btn-xs"><i class="fa fa-check"></i></span></a>
					</li>
					<?php
	        //if($this->session->userdata('EsAdmin')){
	        if (verificar_permiso('WFBEM') == 3) { //<<<RPERAZA(2018.08.15): CASU 1033/2018
	        ?>
          <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pareja"><i class="fa fa-<?php echo($empleado->Sexo=='M' ? 'female' : 'male');?>"></i> Datos de la Pareja
            <span id="iconoEdoCon_Pend" class="text-danger btn-icon btn-circle btn-xs"><i class="fa fa-exclamation"></i></span>
            <span id="iconoEdoCon_Conf" class="text-success btn-icon btn-circle btn-xs"><i class="fa fa-check"></i></span></a>
          </li>
          <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#beneficiarios"><i class="fas fa-users"></i> Beneficiarios
            <span id="iconoEdoBenef_Pend" class="text-danger btn-icon btn-circle btn-xs"><i class="fa fa-exclamation"></i></span>
            <span id="iconoEdoBenef_Conf" class="text-success btn-icon btn-circle btn-xs"><i class="fa fa-check"></i></span></a>
          </li>
          <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#apoyo"><i class="fas fa-dollar-sign"></i> Apoyos
            <span id="iconoEdoEst_Pend" class="text-danger btn-icon btn-circle btn-xs"><i class="fa fa-exclamation"></i></span>
            <span id="iconoEdoEst_Conf" class="text-success btn-icon btn-circle btn-xs"><i class="fa fa-check"></i></span></a>
          </li>
          <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#contrato" data-item="contrato"><i class="fas fa-file-signature"></i> Contrato</a></li> PENDIENTE para completar la vista-->
					<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pagoelect" data-item="pagoelect"><i class="far fa-credit-card"></i> Pago Electrónico</a></li>
					<!-- <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contrato" data-item="contrato"><i class="fa-solid fa-pen-fancy"></i> Contrato</li> -->
					<?php
					} ?>
				</ul>
      </div>
      <input type="hidden" class="form-control" id="ClaveEmpleado" name="ClaveEmpleado" value="<?php echo $ClaveEmpleado; ?>">
      <input type="hidden" class="form-control" id="ConyugeId" name="ConyugeId" value="<?php echo $conyuge->ConyugeId; ?>">
      <input type="hidden" class="form-control" id="ruta_archivo" name="ruta_archivo" value="<?= (empty($ruta_img->Valor) ? RUTA_IMG_ESTUDIANTE : $ruta_img->Valor); ?>">
      <div class="card-block">
        <div class="tab-content p-0 m-0">
          <div class="tab-pane fade active show" id="Registro"></div>
					<div class="tab-pane fade" id="contrato"></div>
					<div class="tab-pane fade" id="educacion"></div>
					<div class="tab-pane fade" id="laboral"></div>
          <div class="tab-pane fade" id="pareja"></div>
          <div class="tab-pane fade" id="beneficiarios"></div>
          <div class="tab-pane fade" id="apoyo"></div>
          <div class="tab-pane fade" id="pagoelect"></div>
        </div>
      </div>
    </div>
    <!-- end card -->
  </div>
</div>

<!-- #modal-dialog large -->
<div class="modal fade" data-backdrop="static" id="pnlModalLg">
  <div class="modal-dialog modal-lg">
    <div id="pnlModalContentLg" class="modal-content">

    </div>
  </div>
</div>

<!-- #modal-dialog large -->
<div class="modal fade" data-backdrop="static" id="pnlModal">
  <div class="modal-dialog">
    <div id="pnlModalContent" class="modal-content">

    </div>
  </div>
</div>

<script>

  setTimeout(function FuncionesIniciales(){ //<<<RPERAZA(2018.07.06): CASU 0159/2018
    OcultarIconosEstado();
  });

  function OcultarIconosEstado(){ //<<<RPERAZA(2018.07.06): CASU 0159/2018
    $("#iconoEdoEmp_Pend").hide();
    $("#iconoEdoEmp_Conf").hide();
		$("#iconoEdoEduc_Pend").hide();
		$("#iconoEdoEduc_Conf").hide();
		$("#iconoEdoLaboral_Pend").hide();
		$("#iconoEdoLaboral_Conf").hide();
    $("#iconoEdoCon_Pend").hide();
    $("#iconoEdoCon_Conf").hide();
    $("#iconoEdoEst_Pend").hide();
    $("#iconoEdoEst_Conf").hide();
    $("#iconoEdoBen_Pend").hide();
    $("#iconoEdoBen_Conf").hide();
  }

function cerrarSesion(){
	window.location.href="inicio/Salir";
}

$('.nav-pills a').on('shown.bs.tab', function(event){
  var x = $(event.target).data('item'),         // active tab
      y = $(event.relatedTarget).data('item');  // previous tab

  switch (x) {
    case 'contrato':
      CargarContratoEmpleado();
      break;
    case 'educacion':
      CargarFormacionAcademica();
      break;
		case 'laboral':
			CargarExperienciaLaboral();
			break;
		case 'pagoelect':
      CargarPagoElectronicoEmpleado();
      break;
    default:
      break;
  }
});

function CargarDatosEmpleado(){
  let ClaveEmpleado = $('#ClaveEmpleado').val();
  cargarpag('<?=base_url();?>empleado/CargarEmpleado', "div#Registro", true, "POST","ClaveEmpleado="+ClaveEmpleado);
  return false;
}

function CargarFormacionAcademica() {
  let ClaveEmpleado = $('#ClaveEmpleado').val();
  cargarpag('<?=base_url();?>empleado/CargarFormacionAcademica', "div#educacion", true, "POST","ClaveEmpleado="+ClaveEmpleado);
  return false;
}

function CargarExperienciaLaboral() {
  let ClaveEmpleado = $('#ClaveEmpleado').val();
  cargarpag('<?=base_url();?>empleado/CargarExperienciaLaboral', "div#laboral", true, "POST","ClaveEmpleado="+ClaveEmpleado);
  return false;
}

function CargarDatosConyuge(){
  let ClaveEmpleado = $('#ClaveEmpleado').val();
  cargarpag('<?=base_url();?>empleado/CargarConyuge', "div#pareja", true, "POST","ClaveEmpleado="+ClaveEmpleado);
  return false;
}

function CargarDatosPrestaciones(){
  let ClaveEmpleado = $('#ClaveEmpleado').val();
  cargarpag('<?=base_url();?>empleado/CargarPrestaciones', "div#apoyo", true, "POST","ClaveEmpleado="+ClaveEmpleado);
  return false;
}

function CargarDatosBeneficiarios() {
  let ClaveEmpleado = $('#ClaveEmpleado').val();
  cargarpag('<?=base_url();?>empleado/CargaBeneficiarios', "div#beneficiarios", true, "POST","ClaveEmpleado="+ClaveEmpleado);
  return false;
}

function CargarContratoEmpleado() {
  let ClaveEmpleado = $('#ClaveEmpleado').val();
  cargarpag('<?=base_url();?>empleado/CargaContrato', "div#contrato", true, "POST","ClaveEmpleado="+ClaveEmpleado);
  return false;
}

function CargarPagoElectronicoEmpleado() {
  let ClaveEmpleado = $('#ClaveEmpleado').val();
  cargarpag('<?=base_url();?>empleado/CargaPagoElectronico', "div#pagoelect", true, "POST","ClaveEmpleado="+ClaveEmpleado);
  return false;
}

function PreparaSubidaImagen(IdPrimario, tipoRegistro, estadoDatos, tipo_persona){ //<<<RPERAZA(2018.07.10), se agrega parametro tipoRegistro
                                                                                   //<<<RPERAZA(2018.08.10), se agrega parametro tipo_persona
  var ruta_archivo = $("#ruta_archivo").val();
  var nombre_archivo = "";
  //tipo_persona:  1 = Estudiante, 2 = Empleado

  $.ajax({
    url: "<?=base_url();?>inicio/preparar_subida_archivo",
    type: "POST",
    async: true,
    data: 'ruta_archivo=' + ruta_archivo +'&nombre_archivo=' + nombre_archivo +'&IdPrimario='
          + IdPrimario +'&tipo_persona=' + tipo_persona + '&ClaveSeccionImagen='+ tipoRegistro + '&estado_datos='+ estadoDatos,
    error: function(XMLHttpRequest, errMsg, exception){
      var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
      alerta_emergente(msg, 'error');
    },
    success: function(htmlcode){
      $("#pnlModalContent").html(htmlcode);
      $("#pnlModal").modal('show');
    }
  });
  return false;
}

function VerificaEnvioCompleto(){ //<<<RPERAZA(2018.08.13): CASU 1033/2018
  var ClaveEmpleado = $("#ClaveEmpleado").val();
  $("#btnImprimirAcuse").hide();
  $.ajax({
    url: "<?=base_url();?>inicio/VerificarEnvioCompleto",
    type: "POST",
    async: true,
    data: 'ClaveEmpleado=' + ClaveEmpleado,
    error: function(XMLHttpRequest, errMsg, exception){
      var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
      alerta_emergente(msg, 'error');
    },
    success: function(htmlcode){
      var r = htmlcode.substr(0,1);
      switch(r){
        case "1":   //Todo correcto
          $("#btnImprimirAcuse").show();
          break;
      }
    }
  });
  return false;
}

function ImprimirAcuse(){ //<<<RPERAZA(2018.08.14): CASU 1033/2018
  var ClaveEmpleado = $("#ClaveEmpleado").val();

  $form = $('<form target="_blank"></form>');
  $form.append('<input type="hidden" id="ClaveEmpleado" name="ClaveEmpleado" value="' + ClaveEmpleado + '">');
  $form.attr('action',"<?=base_url();?>inicio/ImprimirAcuse");
  $form.attr('method','POST');
  $form.appendTo('body').submit();
}

CargarDatosEmpleado();
// CargarFormacionAcademica();
// CargarExperienciaLaboral();
CargarDatosConyuge();
CargarDatosBeneficiarios();
CargarDatosPrestaciones();
VerificaEnvioCompleto(); //<<<RPERAZA(2018.08.13): CASU 1033/2018
CargarContratoEmpleado();
// CargarPagoElectronicoEmpleado();
</script>
