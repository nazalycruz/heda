<!--
POSIBLES MEJORAS
En la pantalla para configurar retroactivo serán tres pestañas
1 Empleados
	Es la que actualmente está hecha. Agregar botón a  la columna acciones para ver y configurar montos directamente.
2 conceptos
	Consultará los conceptos configurados.
	Similar a las pantallas de consulta por bono. Realizará búsquedas de lo configurado y de los conceptos configurados en quincenas pasadas.
	Campo a guardar: Monto y idConceptoRetroactivo

3 Archivo
	Carga de configuración por batch
	campos: basarse en la carga por archivo.
	contenido archivo: credencial, monto.
 - Pestaña revisar
 agregar botones a la columna acciones: eliminar y configurar -->

 <div class="d-flex justify-content-between">
   <h1 class="page-header">Cálculo de Retroactivos <small></small></h1>
 	<div><h4><a href="<?= base_url(); ?>assets/manuales/Retroactivo.pdf" target="_blank" title="Abrir archivo de ayuda" class="text-black-900"><i class="fa-regular fa-circle-question"></i></a></h4></div>
 </div>

<div class="card">
	<input type="hidden" name="idPeriodoPago" id="idPeriodoPago" value="<?= $idPeriodoPago; ?>">

  <div id="wzrdRetroactivo">
		<ul class="nav">
			<li>
        <a class="nav-link" href="#actualizar_montos">
					<h5 title="Actualizar Montos"><i class="fa-solid fa-arrows-rotate"></i> Actualizar</h5>
        </a>
      </li>
			<li>
        <a class="nav-link" href="#calcular_ret">
					<h5><i class="fas fa-calculator"></i> Calcular</h5>
        </a>
      </li>
			<li>
				<a class="nav-link" href="#configurar_ret">
					<h5><i class="fa-solid fa-sliders"></i> Configurar</h5>
				</a>
			</li>
			<li>
				<a class="nav-link" href="#revisar_ret">
					<h5><i class="fa-solid fa-list-check"></i> Revisar</h5>
				</a>
			</li>
		</ul>

		<div class="tab-content">
			<div id="actualizar_montos" class="tab-pane" role="tabpanel" aria-labelledby="actualizar_montos">
			</div>

			<div id="calcular_ret" class="tab-pane" role="tabpanel" aria-labelledby="calcular_ret">
				<div class="note alert-warning">
					<div class="note-icon"><i class="fa-solid fa-circle-exclamation"></i></div>
					<div class="note-content">
						<h4><b>Validar que ya se realizaron las siguientes configuraciones antes de continuar.</b></h4>
						<p>
							<ul>
								<li>Configurar montos por categoría<a href="javascript:;" class="btn btn-default btn-sm btn-icon" onclick="conf_cat_categorias();"><i class="fa-solid fa-circle-arrow-right"></i></a></li>
								<li>Configurar vales de despensa</li><!-- <a href="javascript:;" class="btn btn-default btn-sm btn-icon" onclick="conf_cat_categorias();"><i class="fa-solid fa-circle-arrow-right"></i></a> -->
								<li>Configurar prima de antigüedad <a href="javascript:;" class="btn btn-default btn-sm btn-icon" onclick="conf_prima_ant();"><i class="fa-solid fa-circle-arrow-right"></i></a></li>
								<li>Configurar bono por natalicio </li> <!-- <a href="javascript:;" class="btn btn-default btn-sm btn-icon" onclick="conf_bono_natalicio();"><i class="fa-solid fa-circle-arrow-right"></i></a> -->
							</ul>
						</p>
					</div>
				</div>
				<div class="card mb-2">
					<div class="card-body">
				    <div class="row">
							<div class="col">
								<div class="form-group">
									<label for="quincenaRet" class="form-label">Quincenas</label>
									<select class="form-control form-control-sm select2-sm ret_catalogos" id="quincenaRet" name="quincenaRet" required>
										<?= $quincenas; ?>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card" id="divCalculoRet" style="display:none;">
					<div class="card-body">
						<div class="row mt-2 mb-2">
						  <div class="col-12">
						   <div class="d-grid gap-2">
						     <button type="button" class="btn btn-success btn-lg btn-block btnCalculoRet" name="btnCalculaRetroactivo" id="btnCalculaRetroactivo" onclick="calcula_retroactivo_nomina();" title="Calcula los montos de retroactivo">
									 <i class="fas fa-calculator"></i> Calcular Retroactivo
								 </button>
						   </div>
						  </div>
						</div>
						<div class="card">
							<div class="card-body">
								<div id="divEmpleadosRetroactivo">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="configurar_ret" class="tab-pane" role="tabpanel" aria-labelledby="configurar_ret">
				<div class="row mt-2 mb-2">
					<div class="col-12">
					 <div class="d-grid gap-2">
						 <button type="button" class="btn btn-success btn-lg btn-block btnConfigurarRet" name="btnConfiguraRetroactivo" id="btnConfiguraRetroactivo" onclick="configura_retroactivo_nomina();" title="Configura a los empleados los montos de retroactivo calculados">
							 <i class="fas fa-calculator"></i> Configurar Retroactivo
						 </button>
					 </div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
				    <ul class="nav nav-tabs card-header-tabs">
				      <li class="nav-item">
				        <a class="nav-link active" data-bs-toggle="tab" href="#card-empleados" data-item="empleados">Empleados</a>
				      </li>
							<li class="nav-item">
				        <a class="nav-link" data-bs-toggle="tab" href="#card-conceptos_conf" data-item="conceptos_conf">Conceptos</a>
				      </li>
							<!-- <li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#card-conceptos" data-item="conceptos">Conceptos Retroactivo</a>
							</li> -->
				    </ul>
				  </div>
					<div class="card-body">
						<div class="tab-content p-0 m-0">
							<div class="tab-pane fade active show" id="card-empleados">
								<div class="card">
									<div class="card-body">
										<div id="divConfigurarRetroactivo">

										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="card-conceptos_conf">
								<legend>Validar conceptos calculados</legend>
								<div class="card">
									<div class="card-body">
										<div class="row mb-2">
											<div class="col-3">
												<div class="form-group">
													<label for="ret_conceptoRet" class="form-label">Concepto</label>
													<select class="form-control ret_catalogosCat form-control-sm select2-sm" id="ret_conceptoRet" name="ret_conceptoRet" required>
														<?= $catconceptos; ?>
													</select>
												</div>
											</div>

											<div class="col-2">
												<div class="form-group">
													<label for="cc_mntmin" class="form-label">Monto mínimo</label>
													<input type="text" class="form-control form-control-sm cm_currency" id="cc_mntmin" name="cc_mntmin" autocomplete="off" onkeypress="return dispara_tab(event, this);">
												</div>
											</div>

											<div class="col-2">
												<div class="form-group">
													<label for="cc_mntmax" class="form-label">Monto máximo</label>
													<input type="text" class="form-control form-control-sm cm_currency" id="cc_mntmax" name="cc_mntmax" autocomplete="off" onkeypress="return dispara_tab(event, this);">
												</div>
											</div>

											<div class="col">
												<div class="form-group">
													<label class="form-label">&nbsp;</label>
													<div>
														<button type="submit" class="btn btn-sm btn-inverse text-end" id="btnConsultaCategorias"><i class="fa-solid fa-magnifying-glass"></i> Consultar</button>
													</div>
												</div>
											</div>

										</div>
										<div class="row">
											<div class="col-2">
												<div class="form-group">
													<label for="ret_monto" class="form-label">Monto</label>
													<input type="text" class="form-control form-control-sm cm_currency" id="ret_monto" name="ret_monto" autocomplete="off">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="revisar_ret" class="tab-pane" role="tabpanel" aria-labelledby="revisar_ret">
				<div class="card" id="divRevisarRet">
					<div class="card-body">
						<div id="divRevisarRetroactivo">

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<script type="text/javascript">

$(document).ready(function(){
	$('#wzrdRetroactivo').smartWizard({
		selected: 0,
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

	$(".ret_catalogos").select2({
		language: "es",
		placeholder: "Seleccione un Elemento",
		width:'100%',
		sorter: function(data) {
				return data.sort(function (a, b) {
								if (a.id > b.id) { return 1; }
								if (a.id < b.id) { return -1; }
								return 0;
				});
		}
	}).on("select2:close", function (event) {
			setTimeout(function() {
				$('.select2-container-active').removeClass('select2-container-active');
				$(':focus').blur();
				// dispara_tab_especial(event);
			}, 1);
	});
});

$("#wzrdRetroactivo").on("leaveStep", function(e, anchorObject, currentStepIndex, nextStepIndex, stepDirection) {
	if (stepDirection == "forward") {
		var msj = '';
		switch (currentStepIndex) {
			case 0: //actualizar
				break;
			case 1: //Calcular
				let quincena = $('#quincenaRet').val();
				if (typeof(quincena) == "undefined" || quincena == "" || quincena == 0 || quincena == null) {
					alerta_emergente("Ocurrió un error al obtener la información de la quincena. Seleccione una quincena válida para continuar.","warning")
					return false;
				}
				break;
			case 2: // configurar
				break;
			case 3: //revisar
				break;
			default:
				return false;
		}
	}
});

$("#wzrdRetroactivo").on("stepContent", function(e, anchorObject, stepIndex, stepDirection) {
	if (stepIndex == null) { stepIndex = 0 ; }
	switch (stepIndex) {
		case 0:
			carga_conf_montos();
			break;
		case 2:
			$('#divConfigurarRetroactivo').empty();
			Carga_Metodo("<?=base_url();?>retroactivos/consultar_empleados_retroactivo", "", function finalizaProceso(data){
											 if (data.status == false) {
												 $('.btnConfigurarRet').hide();
												 alerta_emergente(data.message, "warning");
											 }
											 else {
												 $('#divConfigurarRetroactivo').html(data.html);
											 }
										 }, "Cargando...");
			break;
		case 3:
			$('#divRevisarRetroactivo').empty();
			Carga_Metodo("<?=base_url();?>retroactivos/consultar_total", "", function finalizaProceso(data) {
											 if (data.status == false) {
												 alerta_emergente(data.message, "warning");
											 }
											 else {
												 $('#divRevisarRetroactivo').html(data.html);
											 }
										 }, "Cargando...");
				break;
		default:
			return false;
	}
	return false;
});

function carga_conf_montos() {
	cargarpag('<?= base_url()?>retroactivos/conf_montos', "div#actualizar_montos", true, "POST", "");
	return false;
}

$("#quincenaRet").on("change", function (e) {
  let quincena = $(this).val();

  if (typeof(quincena) == "undefined" || quincena === "" || quincena == 0) {
    alerta_emergente("Ocurrió un error al obtener la información del período de pago. Por favor intente de nuevo más tarde.","warning")
    return false;
  }
	$('#divCalculoRet').hide();
  Carga_Metodo("<?=base_url();?>retroactivos/obtener_empleados_quincena", {quincena:quincena}, function finalizaProceso(data){
									 if (data.status == false) { alerta_emergente(data.message, "warning"); }
									 else {
										 $('#divCalculoRet').show();
										 $('#divEmpleadosRetroactivo').html(data.html);
									 }
								 }, "Cargando...");
  return false;
});

function calcula_retroactivo_nomina() {
	let quincena = $("#quincenaRet").val();

	if (typeof(quincena) == "undefined" || quincena === "" || quincena == 0) {
		alerta_emergente("Ocurrió un error al obtener la información del período de pago. Por favor intente de nuevo más tarde.","warning")
		return false;
	}

	let tablaEmpleados = $('#tblEmpleadosRetroactivo').DataTable(),
      numEmpleados = tablaEmpleados.rows().indexes().length,
      totalnumEmpleados = tablaEmpleados.rows().indexes().length,
			registros = tablaEmpleados.rows().data().toArray(),
			quincenaTxt = $("#quincenaRet").find("option:selected").text();

	swal.fire({
      title: "Alerta",
      text: "Se realizará el cálculo de retroactivo para "+numEmpleados+ " empleado(s), ¿desea continuar?",
      icon: "warning",
      showCancelButton: true,
      showLoaderOnConfirm: true,
      allowOutsideClick: false,
      preConfirm: function () {
          return new Promise(function(resolve) {
						let dt = new Date(),
								time = ('0'+dt.getHours()).slice(-2) + ":" + ('0'+dt.getMinutes()).slice(-2) + ":" + ('0'+dt.getSeconds()).slice(-2);

						Carga_Metodo("<?=base_url();?>retroactivos/calcular_quincena", {quincena:quincena,registros:JSON.stringify(registros)}, function finalizaProceso(data){
														if (data.status == false) { alerta_emergente(data.message, "warning"); }
														else {
															alerta_emergente(data.message,"success");
														}
													}, "Procesando*<p>"+quincenaTxt+"</p> <p>Calculando retroactivo para "+numEmpleados+" empleado(s)...</p> <p> Proceso iniciado: "+time+"</p>");
          });
      }
  });
}

function calcula_retroactivo_empleado(url,data,esBoton) {
	if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
	if (esBoton) data = $(data).data('json')

	let quincena = $("#quincenaRet").val(),
			idEmpleado = data.Id_Empleado;

	if (typeof(quincena) == "undefined" || quincena === "" || quincena == 0) {
		alerta_emergente("Ocurrió un error al obtener la información del período de pago. Por favor intente de nuevo más tarde.","warning")
		return false;
	}
	Carga_Metodo("<?=base_url();?>retroactivos/calcular_empleado", {quincena:quincena,idEmpleado:idEmpleado}, function finalizaProceso(data){
									if (data.status == false) {
										alerta_emergente(data.message, "warning");
									}
									else {
										alerta_emergente(data.message,"success");
									}
								}, "Procesando...");
}

function calcula_retroactivo_configurado(url,data,esBoton) {
	if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
	if (esBoton) data = $(data).data('json')

	let quincena = $("#quincenaRet").val(),
			idEmpleado = data.Id_Empleado;

	if (typeof(quincena) == "undefined" || quincena === "" || quincena == 0) {
		alerta_emergente("Ocurrió un error al obtener la información del período de pago. Por favor intente de nuevo más tarde.","warning")
		return false;
	}
	Carga_Metodo("<?=base_url();?>retroactivos/calcular_empleado", {quincena:quincena,idEmpleado:idEmpleado,configurado:1}, function finalizaProceso(data){
									if (data.status == false) {
										alerta_emergente(data.message, "warning");
									}
									else {
										alerta_emergente(data.message,"success");
									}
								}, "Procesando...");
}

function configura_retroactivo_nomina() {
	let tablaEmpleados = $('#tblConfiguraRetroactivo').DataTable(),
			numEmpleados = tablaEmpleados.rows().indexes().length;
	swal.fire({
      title: "Alerta",
      text: "Se configurarán los retroactivo para "+numEmpleados+ " empleado(s), ¿desea continuar?",
      icon: "warning",
      showCancelButton: true,
      showLoaderOnConfirm: true,
      allowOutsideClick: false,
      preConfirm: function () {
          return new Promise(function(resolve) {
						let dt = new Date(),
								time = ('0'+dt.getHours()).slice(-2) + ":" + ('0'+dt.getMinutes()).slice(-2) + ":" + ('0'+dt.getSeconds()).slice(-2);
						Carga_Metodo("<?=base_url();?>retroactivos/configurar", "", function finalizaProceso(data){
														if (data.status == false) { alerta_emergente(data.message, "warning"); }
														else {
															alerta_emergente(data.message,"success");
														}
													}, "Procesando*<p>Configurando retroactivo para "+numEmpleados+" empleado(s)...</p> <p> Proceso iniciado: "+time+"</p>");
          });
      }
  });
}

function configura_retroactivo_empleado(url,data,esBoton) {
	//PENDIENTE: verificar esta función (debe ser calculo total)
	if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
	if (esBoton) data = $(data).data('json')

	let idEmpleado = data.Id_Empleado;

	Carga_Metodo("<?=base_url();?>retroactivos/configurar_empleado", {idEmpleado:idEmpleado}, function finalizaProceso(data){
									if (data.status == false) {
										alerta_emergente(data.message, "warning");
									}
									else {
										alerta_emergente(data.message,"success");
									}
								}, "Procesando...");
}

function conf_cat_categorias() {
	CargarModulo('<?=base_url();?>', 'catalogos/mantenimiento');
	return false;
}

function conf_bono_natalicio() {
	CargarModulo('<?=base_url();?>', 'configuraciones/carga_sianom');
	return false;
}

function conf_prima_ant() {
	CargarModulo('<?=base_url();?>', 'configuraciones/por_parametros');
	return false;
}
</script>
