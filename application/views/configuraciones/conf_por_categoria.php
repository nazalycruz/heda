<h1 class="page-header">Configuración por categoría <small>configuración manual por categoría.</small></h1>
<div class="card mb-2">
  <div class="card-body">
    <div class="row mb-2">
      <div class="col-4">
        <div class="form-group">
          <label for="cfc_tiponomina" class="form-label">Tipo de Nómina</label>
          <select class="form-control cfc_catalogos form-control-sm select2-sm main-cat" id="cfc_tiponomina" name="cfc_tiponomina">
            <?= $cattiponomina; ?>
          </select>
        </div>
      </div>
      <div class="col-4">
        <div class="form-group">
          <label for="cfc_categoria" class="form-label">Categoría</label>
          <select class="form-control cfc_catalogos form-control-sm select2-sm main-cat" id="cfc_categoria" name="cfc_categoria">
            <?= $categorias; ?>
          </select>
        </div>
      </div>
    </div>
	</div>
</div>

<div class="card" id="card-agrega-concepto" style="display:none;">

</div>

<div class="card" style="display:none;" id="card-perc-deduc">
	<div class="card-body">
		<div class="row mb-2">
			<div class="col-12">
				<div class="card bg-white text-white">
					<div class="card-header container-fluid card-header-condensed bg-green-700">
						<div class="row">
							<div class="col-10">
								<h5>Percepciones</h5>
							</div>
							<div class="col-2 text-end">
								<a href="javascript:;" class="btn btn-xs btn-white" title="Agregar percepción por categoría" onclick="agregar_concepto(1);"><i class="fas fa-plus"></i> Agregar</a>
							</div>
						</div>
					</div>
					<div class="card-body" id="resultConfPerc">

					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card bg-white text-white">
					<div class="card-header container-fluid card-header-condensed bg-red-600">
						<div class="row">
							<div class="col-10">
								<h5>Deducciones</h5>
							</div>
							<div class="col-2 text-end">
								<a href="javascript:;" class="btn btn-xs btn-white" title="Agregar deducción por categoría" onclick="agregar_concepto(0);"><i class="fas fa-plus"></i> Agregar</a>
							</div>
						</div>
					</div>
					<div class="card-body" id="resultConfDeduc">

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card-footer text-end">
		<button class="btn btn-secondary btn-sm" id="btnAplicarConf" title="Aplicar para todas las categorías" onclick="aplicar_configuracion();"><i class="fa-regular fa-share-from-square"></i> Aplicar para todas las categorías</button>
		<button class="btn btn-danger btn-sm" id="btnEliminarConf" title="Eliminar para todas las categorías" onclick="eliminar_configuracion();"><i class="fa-solid fa-trash"></i> Eliminar para todas las categorías</button>
	</div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $(".cfc_catalogos").select2({
      language: "es",
      placeholder: "Seleccione un Elemento",
      width:'100%',
    }).on("select2:close", function (event) {
        setTimeout(function() {
          $('.select2-container-active').removeClass('select2-container-active');
          $(':focus').blur();
          // dispara_tab_especial(event);
        }, 1);
    });
  });

	function carga_percepciones_categoria(idCategoria,idTipoNomina) {
		Carga_Metodo('<?= base_url() ?>configuraciones/obtener_conf_categoria',
								{idCategoria:idCategoria,idTipoNomina:idTipoNomina,esPercepcion:1},
								function exito_carga_per_deduc(respuesta) {
									if (respuesta.status == false) {
										alerta_emergente(respuesta.message, "warning");
									}
									else {
										$('#resultConfPerc').html(respuesta.vista);
									}
									return false;
								}, "Procesando...");
	}

	function carga_deducciones_categoria(idCategoria,idTipoNomina) {
		Carga_Metodo('<?= base_url() ?>configuraciones/obtener_conf_categoria',
								{idCategoria:idCategoria,idTipoNomina:idTipoNomina,esPercepcion:0},
								function exito_carga_per_deduc(respuesta) {
									if (respuesta.status == false) {
										alerta_emergente(respuesta.message, "warning");
									}
									else {
										$('#resultConfDeduc').html(respuesta.vista);
									}
									return false;
								}, "Procesando...");
	}

	$("#cfc_tiponomina").on("change", function (e) {
		let idCategoria = $(this).val(),
				idTipoNomina = $("#cfc_tiponomina").val();

		if (typeof(idCategoria) == "undefined" || idCategoria === "" || idCategoria == 0 || typeof(idTipoNomina) == "undefined" || idTipoNomina === "" || idTipoNomina == 0) {
      alerta_emergente("Debe seleccionar una categoría y un tipo de nómina.","warning")
      return false;
    }
		carga_percepciones_categoria(idCategoria,idTipoNomina);
		carga_deducciones_categoria(idCategoria,idTipoNomina);
		$("#card-perc-deduc").show();
		$("#card-agrega-concepto").hide();
		return false;
	});

  $("#cfc_categoria").on("change", function (e) {
    let idCategoria = $(this).val(),
        idTipoNomina = $("#cfc_tiponomina").val();

		if (typeof(idCategoria) == "undefined" || idCategoria === "" || idCategoria == 0 || typeof(idTipoNomina) == "undefined" || idTipoNomina === "" || idTipoNomina == 0) {
      alerta_emergente("Debe seleccionar una categoría y un tipo de nómina.","warning")
      return false;
    }

		carga_percepciones_categoria(idCategoria,idTipoNomina);
		carga_deducciones_categoria(idCategoria,idTipoNomina);
		$("#card-perc-deduc").show();
		$("#card-agrega-concepto").hide();
    return false;
  });

	function GuardaPercepcionDeduccionCategoria(f,e) {
    e.preventDefault();
		$('#frmGuardaPercDeducCategoria').parsley().validate();
		if (!$('#frmGuardaPercDeducCategoria').parsley().isValid()){
			return false;
		}
		let idCategoria = $("#cfc_categoria").val(),
				idTipoNomina = $("#cfc_tiponomina").val(),
				variables = $(f).serialize();
		$('form#'+f.id+' :disabled').each( function() {
			variables = variables + '&' + $(this).attr('name') + '=' + $(this).val();
		});
  	Carga_Metodo(f.action, variables + '&idCategoria='+idCategoria+'&idTipoNomina='+idTipoNomina+ '&accion=guardar', exito_guarda_configuracion, "Guardando...");
	}

	function exito_guarda_configuracion(respuesta) {
		if (respuesta.status == false) {
	    $('div#cfc_errores').html(respuesta.errores).fadeIn('slow');
	    alerta_emergente(respuesta.message, "warning");
	  }
	  else {
	    alerta_emergente(respuesta.message,"success");
			$(".main-cat").prop("disabled", false);
			$("#cfc_categoria").trigger('change');
	  }
	  return false;
	}

  function agregar_concepto(esPercepcion) {
    let idCategoria = $("#cfc_categoria").val(),
        idTipoNomina = $("#cfc_tiponomina").val();

    if (typeof(idCategoria) == "undefined" || idCategoria === "" || idCategoria == 0 || typeof(idTipoNomina) == "undefined" || idTipoNomina === "" || idTipoNomina == 0) {
      alerta_emergente("Debe seleccionar una categoría y un tipo de nómina.","warning")
      return false;
    }

		$("#card-perc-deduc").hide();
	 	$(".main-cat").prop("disabled", true);
		cargarpag('<?= base_url()?>configuraciones/carga_conf_perdeduc_categoria', "div#card-agrega-concepto", true, "POST", {percepcion:esPercepcion,idCategoria:idCategoria,idTipoNomina:idTipoNomina});
		$("#card-agrega-concepto").show();
		return false;
  }

	function eliminar_conf_categoria(url,data,esBoton) {
		if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
		if (esBoton) data = $(data).data('json');
		let idConcepto = data.Id_Concepto,
				idTipoNomina = data.Id_TipoNomina,
				idCategoria = data.Id_Categoria;

		if (typeof(idCategoria) == "undefined" || idCategoria === "" || idCategoria == 0 || typeof(idTipoNomina) == "undefined" || idTipoNomina === "" || idTipoNomina == 0) {
      alerta_emergente("Debe seleccionar una categoría y un tipo de nómina.","warning")
      return false;
    }
		swal.fire({
			title: "Alerta",
			text: "¿Confirma que desea eliminar la configuración del concepto: "+data.Concepto+"?",
			icon: "question",
			showCancelButton: true,
		}).then(result => {
			if (result.value) {
				Carga_Metodo('<?= base_url()?>configuraciones/elimina_configuracion_categoria',
				{idCategoria:idCategoria,idConcepto:idConcepto,idTipoNomina:idTipoNomina,accion:'borrar'},
				exito_guarda_configuracion, "Eliminando...");
			}
		}).catch(swal.noop);

		return false;
	}

	function aplicar_configuracion() {
		let idTipoNomina = $("#cfc_tiponomina").val(),
				tblConfPerc = $('#tblConfPerc').DataTable(),
				tblConfDeduc = $('#tblConfDeduc').DataTable();
		if (typeof(idTipoNomina) == "undefined" || idTipoNomina === "" || idTipoNomina == 0) {
      alerta_emergente("Debe seleccionar un tipo de nómina.","warning")
      return false;
    }

		if ( ! $.fn.DataTable.isDataTable( '#tblConfPerc' ) && ! $.fn.DataTable.isDataTable( '#tblConfDeduc' )) {
			alerta_emergente('Verifique que exista una configuración de percepción o deducción.','warning');
			return false;
		}
		else {
			if (!tblConfPerc.rows().any() && !tblConfDeduc.rows().any()) {
				alerta_emergente('Verifique que exista una configuración de percepción o deducción.','warning');
				return false;
			}
			else {
				var percepciones = tblConfPerc.rows().data().toArray(),
						deducciones = tblConfDeduc.rows().data().toArray(),
						conceptos = $.merge(percepciones,deducciones);
			}
		}

		swal.fire({
			title: "Alerta",
			text: "¿Desea aplicar esta configuración a todas las categorías?",
			icon: "question",
			showCancelButton: true,
		}).then(result => {
			if (result.value) {
				Carga_Metodo('<?= base_url()?>configuraciones/aplicar_conf_todasCategorias',
				{idTipoNomina:idTipoNomina,conceptos:JSON.stringify(conceptos)},exito_guarda_configuracion, "Configurando...");
			}
		}).catch(swal.noop);

		return false;
	}

	function eliminar_configuracion() {
		let idTipoNomina = $("#cfc_tiponomina").val();
		if (typeof(idTipoNomina) == "undefined" || idTipoNomina === "" || idTipoNomina == 0) {
			alerta_emergente("Debe seleccionar un tipo de nómina.","warning")
			return false;
		}

		swal.fire({
			title: "Alerta",
			text: "¿Desea eliminar la configuración para todas las categorías?",
			icon: "question",
			showCancelButton: true,
		}).then(result => {
			if (result.value) {
				Carga_Metodo('<?= base_url()?>configuraciones/eliminar_conf_todasCategorias',
				{idTipoNomina:idTipoNomina}, exito_guarda_configuracion, "Eliminando...");
			}
		}).catch(swal.noop);

		return false;
	}
</script>
