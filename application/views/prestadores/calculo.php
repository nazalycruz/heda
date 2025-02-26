<h1 class="page-header">Cálculo de Nómina Prestadores de Servicio <small>quincena: <?= $quincena; ?></small></h1>

<div class="card panel-default">
	<div class="card-body">
		<input type="hidden" name="idPeriodoPago" id="idPeriodoPago" value="<?= $idPeriodoPago; ?>">
	  <input type="hidden" name="fechainiPeriodo" id="fechainiPeriodo" value="<?= $fechainiPeriodo; ?>">

	  <!-- control de procesos -->
	  <input type="hidden" name="bregini" id="bregini" value="<?= $control->RegsIniciales; ?>">
	  <input type="hidden" name="bantimp" id="bantimp" value="<?= $control->ConceptAntesImpu; ?>">
		<?php
		$ctrlConceptos = ( (!empty($control->Impuestos) && !empty($control->ConceptDespImpu) ) ? 1 : 0 );
		?>
		<input type="hidden" name="bcompl" id="bcompl" value="<?= $ctrlConceptos; ?>">

    <div id="smartwizard">
			<ul class="nav">
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
			autoAdjustHeight: false,
			backButtonSupport: true,
			enableURLhash: false,
			showStepURLhash: false,
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
        CargaRegistrosIniciales();
        break;
			case 1:
				CargaCalculoConceptos();
				break;
			case 2:
        CargaNominasAbiertas();
        break;
      default:
        return false;
    }
    return false;
  });

	$("#smartwizard").on("leaveStep", function(e, anchorObject, currentStepIndex, nextStepIndex, stepDirection) {
		if (stepDirection == "forward") {
			var msj = '';
			switch (currentStepIndex) {
				case 0: //registros iniciales
					if ($('#bregini').val() == 1) {	return true; }
					msj = "No se han generado los registros iniciales. No se puede continuar, primero genere los registros iniciales.";
					break;
				case 1: //cálculo
					if ($('#bregini').val() == 1 && $('#bcompl').val() == 1) {	return true; }
					msj = "<p>No se han completado alguno (o todos) de los siguientes procesos:<p> <ul><li>Generar Registros Iniciales</li><li>Calculo de Nómina</li></ul>";
					break;
				default:
					return false;
			}
			alerta_emergente(msj,"warning");
			return false;
		}
	});

  function CargaRegistrosIniciales() {
    cargarpag("<?=base_url();?>index.php/prestadores/carga_registros_iniciales", "div#registros_iniciales", true, "POST");
    return false;
  }

	function CargaCalculoConceptos() {
		cargarpag("<?=base_url();?>index.php/prestadores/carga_calculo_conceptos", "div#calculo_conceptos", true, "POST");
		return false;
	}

	function CargaNominasAbiertas() {
    cargarpag("<?=base_url();?>index.php/prestadores/carga_nominas_abiertas", "div#nominas_abiertas", true, "POST");
    return false;
  }

</script>
