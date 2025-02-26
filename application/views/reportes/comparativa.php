<h1 class="page-header">Comparativa por Quincenas</h1>

<div class="card mb-2">
	<?php
	$attributes = array("id" => "frmComparativaQuincenas", "name" => "frmComparativaQuincenas", "onsubmit" => "return PostBackFrmConsultaComparativaQuincenas(this, event);");
	echo form_open("reportes/obtener_resultado_comparativa", $attributes);
	?>
	<div class="card-body">
		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="idTipoNomina" class="form-label">Tipo de Nómina</label>
					<select class="form-control form-control-sm select2-sm comp_catalogos" id="idTipoNomina" name="idTipoNomina" required>
						<?= $tiponomina; ?>
					</select>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="idConcepto" class="form-label">Concepto</label>
					<select class="form-control form-control-sm select2-sm comp_catalogos" id="idConcepto" name="idConcepto" required>
						<?= $conceptos; ?>
					</select>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="quincena1" class="form-label">Quincena 1</label>
					<select class="form-control form-control-sm select2-sm comp_catalogos" id="quincena1" name="quincena1" required>
						<?= $quincenas; ?>
					</select>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="quincena2" class="form-label">Quincena 2</label>
					<select class="form-control form-control-sm select2-sm comp_catalogos" id="quincena2" name="quincena2" required>
						<?= $quincenas; ?>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="card-footer text-end">
  	<button class="btn btn-sm btn-outline-secondary text-end" id="btnConsultaQuincenas"><i class="fas fa-search"></i> Consultar</button>
	</div>
	<?php
	echo form_close();
	?>
</div>

<div class="card border-0">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#card-concepto" data-item="concepto">Por Concepto</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#card-empleado" data-item="empleado">Por Empleado</a>
      </li>
    </ul>
  </div>
	<div class="card-body">
    <div class="tab-content p-0 m-0">
			<div class="tab-pane fade active show" id="card-concepto">
				<div class="card">
					<div class="card-body">
						<div id="tblComparativaConcepto">

						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="card-empleado">
				<div class="card">
					<div class="card-body">
						<div id="tblComparativaEmpleado">

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>

<script type="text/javascript">
$(".comp_catalogos").select2({
	language: "es",
	placeholder: "Seleccione un Elemento",
	width:'100%',
}).on("select2:close", function (event) {
		setTimeout(function() {
			$('.select2-container-active').removeClass('select2-container-active');
			$(':focus').blur();
			dispara_tab_especial(event);
		}, 1);
});

$('.nav-tabs a').on('shown.bs.tab', function(event){
	$('#tblComparativaConcepto, #tblComparativaEmpleado').empty();
	let x = $(event.target).data('item'),         // active tab
			y = $(event.relatedTarget).data('item');  // previous tab
	switch (x) {
		case 'concepto':
			$('#idConcepto').prop("disabled",false);
			break;
		case 'empleado':
			$('#idConcepto').prop("disabled",true);
			break;
		default:
			break;
	}
});

function PostBackFrmConsultaComparativaQuincenas(f,e) {
	e.preventDefault();
	let variables = $(f).serialize(),
			descNomina1 = $("#quincena1 option:selected").text(),
			descNomina2 = $("#quincena2 option:selected").text();
	$('#tblComparativaConcepto, #tblComparativaEmpleado').empty();
	Carga_Metodo(f.action,
							 variables+'&descNomina1='+descNomina1+'&descNomina2='+descNomina2,
							 function finalizaProceso(data){
								 if (data.status == false) {
									 alerta_emergente(data.message, "warning");
								 }
								 else {
									 $('#tblComparativa'+data.div).html(data.html);
								 }
							 },
							 "Procesando...");
}
</script>
