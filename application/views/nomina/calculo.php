<div class="d-flex justify-content-between">
  <h1 class="page-header">Cálculo de Nómina <small>quincena: <?= $quincena; ?></small></h1>
	<div><h4><a href="<?= base_url(); ?>assets/manuales/Calculo_Nomina.pdf" target="_blank" title="Abrir archivo de ayuda" class="text-black-900"><i class="fa-regular fa-circle-question"></i></a></h4></div>
</div>

<div class="card">
	<div class="card-body">
		<input type="hidden" name="idPeriodoPago" id="idPeriodoPago" value="<?= $idPeriodoPago; ?>">
	  <input type="hidden" name="fechainiPeriodo" id="fechainiPeriodo" value="<?= $fechainiPeriodo; ?>">

	  <!-- control de procesos -->
	  <input type="hidden" name="bregini" id="bregini" value="<?= $control->RegsIniciales; ?>">
	  <input type="hidden" name="bantimp" id="bantimp" value="<?= $control->ConceptAntesImpu; ?>">
		<?php
		$ctrlConceptos = ((!empty($control->Impuestos) && !empty($control->ConceptDespImpu) && !empty($control->ISSTEY)) ? 1 : 0 );
		?>
		<input type="hidden" name="bcompl" id="bcompl" value="<?= $ctrlConceptos; ?>">

    <div id="smartwizard">
			<ul class="nav">
				<li>
	        <a class="nav-link" href="#asistencias">
						<h5><i class="fa-solid fa-building-user"></i> Asistencias</h5>
	        </a>
	      </li>
				<li>
	        <a class="nav-link" href="#registros_iniciales">
						<h5><i class="far fa-calendar-alt"></i> Registros Iniciales</h5>
	        </a>
	      </li>
				<li>
					<a class="nav-link" href="#calculo_conceptos">
						<h5><i class="fas fa-calculator"></i> Calcular</h5>
					</a>
				</li>
	      <li>
	        <a class="nav-link" href="#nominas_abiertas">
						<h5><i class="fas fa-coins"></i> Nóminas Abiertas</h5>
	        </a>
	      </li>
			</ul>

			<div class="tab-content">
				<div id="asistencias" class="tab-pane" role="tabpanel" aria-labelledby="asistencias">
          <!-- registros iniciales -->
				</div>
				<div id="registros_iniciales" class="tab-pane" role="tabpanel" aria-labelledby="registros_iniciales">
          <!-- registros iniciales -->
				</div>

				<div id="calculo_conceptos" class="tab-pane" role="tabpanel" aria-labelledby="calculo_conceptos">
					<!-- calcular conceptos -->
				</div>

        <div id="nominas_abiertas" class="tab-pane" role="tabpanel">
          <!--nóminas abiertas-->
        </div>

			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		$('#smartwizard').smartWizard({
			selected: 0,
			// theme: 'dots',
			autoAdjustHeight: false,
			backButtonSupport: true,
			enableURLhash: false,
			keyNavigation: false,
			lang: {  // Language variables
				next: 'Siguiente',
				previous: 'Anterior'
			},
	    anchorSettings: {
	      anchorClickable: true, // Enable/Disable anchor navigation
	      enableAllAnchors: true, // Activates all anchors clickable all times
	      markDoneStep: false, // add done css
				removeDoneStepOnNavigateBack: true,
				enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
	    },
			toolbarSettings: {
	      toolbarPosition: 'bottom', // none, top, bottom, both
	      toolbarButtonPosition: 'right', // left, right
	      showNextButton: true, // show/hide a Next button
	      showPreviousButton: true, // show/hide a Previous button
			},
		});

  });

	$("#smartwizard").on("stepContent", function(e, anchorObject, stepIndex, stepDirection) {
		if (stepIndex == null) { stepIndex = 0 ;}
		switch (stepIndex) {
			case 0:
				CargaAsistencias();
				break;
      case 1:
        CargaRegistrosIniciales();
        break;
			case 2:
				CargaCalculoConceptos();
				break;
			case 3:
        CargaNominasAbiertas();
        break;
      default:
        return false;
    }
    return false;
	});

	// $("#smartwizard").on("showStep", function(e, anchorObject, stepIndex, stepDirection) {
	// 	if (stepIndex == null) { stepIndex = 0 ;}
	// 	switch (stepIndex) {
  //     case 0:
  //       CargaRegistrosIniciales();
  //       break;
	// 		case 1:
	// 			CargaCalculoConceptos();
	// 			break;
	// 		case 2:
  //       CargaNominasAbiertas();
  //       break;
  //     // case 1:
  //     //   CargaAntesImpuestos();
  //     //   break;
  //     // case 2:
  //     //   CargaImpuestos();
  //     //   break;
  //     // case 3:
  //     //   CargaDespuesImpuestos();
  //     //   break;
  //     // case 4:
  //     //   CargaAportIsstey();
  //     //   break;
  //     default:
  //       return false;
  //   }
  //   return false;
  // });

	$("#smartwizard").on("leaveStep", function(e, anchorObject, currentStepIndex, nextStepIndex, stepDirection) {
		if (stepDirection == "forward") {
			var msj = '';
			switch (currentStepIndex) {
				case 0:
					return true;
					break;
				case 1: //registros iniciales
					if ($('#bregini').val() == 1) {	return true; }
					msj = "No se han generado los registros iniciales. No se puede continuar, primero genere los registros iniciales.";
					break;
				case 2: //cálculo
					if ($('#bregini').val() == 1 && $('#bcompl').val() == 1) {	return true; }
					msj = "<p>No se han completado alguno (o todos) de los siguientes procesos:<p> <ul><li>Generar Registros Iniciales</li><li>Calculo de Nómina</li></ul>";
					break;
				// case 1: //antes de impuestos
				// 	if( $('#bregini').val() == 1 && $('#bantimp').val() == 1 ){	return true; }
				// 	msj = "<p>No se han completado alguno (o todos) de los siguientes procesos:<p> <ul><li>Generar Registros Iniciales</li><li>Conceptos Antes de Impuestos</li></ul>";
				// 	break;
				default:
					return false;
			}
			alerta_emergente(msj,"warning");
			return false;
		}
	});

	function CargaAsistencias() {
		cargarpag("<?=base_url();?>index.php/asistencias/carga_registro_asistencias", "div#asistencias", true, "POST","",true);
    return false;
	}

  function CargaRegistrosIniciales() {
    cargarpag("<?=base_url();?>index.php/nomina/carga_registros_iniciales", "div#registros_iniciales", true, "POST");
    return false;
  }

	function CargaCalculoConceptos() {
		cargarpag("<?=base_url();?>index.php/nomina/carga_calculo_conceptos", "div#calculo_conceptos", true, "POST");
		return false;
	}

	function CargaNominasAbiertas() {
    cargarpag("<?=base_url();?>index.php/nomina/carga_nominas_abiertas", "div#nominas_abiertas", true, "POST");
    return false;
  }

</script>
