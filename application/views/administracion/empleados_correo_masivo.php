<style media="screen">
	.accordion-header {
		position: relative;
	}

	.i-custom {
		position: absolute;
		right: 50px;
		/* z-index: 9999; */
	}

	.item-custom {
		position: absolute;
		top: 15px;
		right: 10px;
		z-index: 99999;
	}
</style>

<div class="card mt-2">
	<div class="card-body">
		<?php
		if (!empty($empleados)):
			$empleados = json_decode($empleados);
			$empleados_agrupado = array_chunk($empleados, 100);
			foreach ($empleados_agrupado as $key => $grupo): ?>
				<div class="accordion" id="accordionCorreoMasivo">
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="flush-heading-<?= $key; ?>">
							<div class="d-flex">
								<button class="d-inine-block accordion-button text-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?= $key; ?>" aria-expanded="false" aria-controls="flush-collapse-<?= $key; ?>">
					         Grupo #<?= $key; ?>
					      </button>
								<div class="d-flex align-items-start item-custom">
									<button type="button" name="button" class="btn btn-xs i-custom" id="btn-enviargrupo" name="btn-enviargrupo" onclick="enviar_correo_agrupado(<?= $key; ?>);" title="Enviar correo electrónico al grupo"><i class="fa-solid fa-paper-plane"></i></button>
			          </div>
							</div>
				    </h2>
				    <div id="flush-collapse-<?= $key; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading-<?= $key; ?>" data-bs-parent="#accordionGrupo-<?= $key; ?>">
				      <div class="accordion-body">
								<div class="card mt-2">
									<div class="card-body">
										<table id="tblGrupoCorreo<?= $key; ?>" class="table table-striped table-bordered compact align-middle datatable-grupo-correo" width="100%" cellspacing="0">
										  <thead>
												<tr>
													<th class="text-nowrap">idEmpleado</th>
													<th class="text-nowrap">Credencial</th>
													<th class="text-nowrap">Nombre</th>
													<th class="text-nowrap">Dependencia</th>
													<th class="text-nowrap">Categoría</th>
													<th class="text-nowrap">Correo Electrónico</th>
													<th class="text-nowrap">Estado</th>
												</tr>
										  </thead>
										  <tbody>
												<?php foreach ($grupo as $key => $empleado): ?>
												<tr>
													<td><?= $empleado->Id_Empleado; ?></td>
													<td><?= $empleado->Credencial; ?></td>
													<td><?= $empleado->Nombre; ?></td>
													<td><?= $empleado->Dependencia; ?></td>
													<td><?= $empleado->Categoria; ?></td>
													<td><?= $empleado->Exper; ?></td>
													<td><?= $empleado->TipoEnvio; ?></td>
												</tr>
												<?php endforeach; ?>
										  </tbody>
										</table>
									</div>
								</div>
							</div>
				    </div>
				  </div>
				</div>
		<?php
			endforeach;
		endif;
		?>
	</div>
</div>

<script type="text/javascript">
$('.datatable-grupo-correo').DataTable({
	language: {
		"url": "<?=base_url();?>assets/plugins/DataTables/Spanish.json",
	},
	columnDefs: [
		{ target: [0,6], visible: false, searchable: false },
	],
});

function enviar_correo_agrupado(key) {
	if (valida_formulario_correo_electronico()) {
		let tablaGrupo = $('#tblGrupoCorreo'+key).DataTable();
		if (!tablaGrupo.rows().any()) {
			alerta_emergente('El grupo no contiene algún empleado.','warning');
			return false;
		}
		let variables = $('#frmEnvioMasivoEmail').serializeArray(),
				formData = new FormData(),
				empleados = tablaGrupo.rows().data().toArray(),
				archivos = $(".file");

		$.each(archivos, function(i,archivo){
			if (archivo.files.length > 0) {
				$.each(archivo.files, function(k,file){
					formData.append('adjuntos[]', file);
				});
			}
		});
		$(variables).each(function(index, obj){
			formData.append(obj.name,obj.value);
		});
		formData.append("empleados",JSON.stringify(empleados));
		formData.append("agrupado",true);

		swal.fire({
			 title: "Alerta",
			 html: "¿Confirma que desea enviar el correo electrónico a "+tablaGrupo.rows().indexes().length+" empleado(s)?",
			 icon: "question",
			 showCancelButton: true,
			 showLoaderOnConfirm: true,
			 allowOutsideClick: false,
			 preConfirm: function () {
				 return new Promise(function(resolve) {
					 Carga_Metodo("administracion/envio_correo_masivo",formData,exito_envio_correo_agrupado,"Procesando...",true);
				});
			 }
		});
	}
	return false;
}
</script>
