<!-- Modal estática para las llamadas ajax -->
<div class="modal fade" id="processing-modal" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				<i class="fas fa-times"></i></button>
				<div class="text-center">
					<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
					<h4>Cargando...</h4>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Genérica para todos los módulos-->
<div class="modal fade" id="modGeneral" tabindex="-1" role="dialog">
	<div id="modtamanio" class="modal-dialog modal-lg">
		<div class="modal-content" id="modContenido">
			<!-- contenido de la ventana modal -->
		</div>
	</div>
</div>

<!-- Modal Genérica para todos los módulos (tamaño XL)-->
<div class="modal fade" id="modGeneralXL" tabindex="-1" role="dialog">
	<div id="modtamanio" class="modal-dialog modal-xl">
		<div class="modal-content" id="modContenidoXL">
			<!-- contenido de la ventana modal -->
		</div>
	</div>
</div>

<!-- Modal estática para las llamadas ajax -->
<div class="modal fade" id="processing-modal" role="dialog" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="text-center">
					<i class="fas fa-spinner fa-3x fa-spin"></i>
					<h4>Cargando...</h4>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ================== BEGIN BASE JS ================== -->
<script src="<?=auto_version('assets/js/vendor.min.js');?>"></script>
<script src="<?=auto_version('assets/js/app.min.js');?>"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== DATATABLE ================== -->
<script src="<?=auto_version('assets/plugins/DataTables/dataTables.min.js');?>"></script>
<script src="<?=auto_version('assets/plugins/DataTables/dataTables.checkboxes.min.js');?>"></script>
<script src="<?=auto_version('assets/plugins/DataTables/ellipsis.js');?>"></script>
<script src="<?=auto_version('assets/plugins/DataTables/sum().js');?>"></script>

<!-- ================== DATEPICKER ================== -->
<script src="<?=auto_version('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js');?>"></script>
<script src="<?=auto_version('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.es.min.js');?>"></script>

<!-- ================== FANCY TREE ================== -->
<script src="<?=auto_version('assets/plugins/fancytree/jquery.fancytree.js');?>"></script>
<script src="<?=auto_version('assets/plugins/fancytree/jquery.fancytree.filter.js');?>"></script>

<!-- ================== SELECT2 ================== -->
<script src="<?=auto_version('assets/plugins/select2/js/select2.min.js');?>"></script>
<script src="<?=auto_version('assets/plugins/select2/js/i18n/es.js');?>"></script>

<!-- ================== swal2 ================== -->
<script src="<?=auto_version('assets/plugins/sweetalert2/sweetalert2.all.min.js');?>"></script>

<!-- ================== iziToast ================== -->
<script src="<?=auto_version('assets/plugins/iziToast/iziToast.min.js');?>"></script>

<!-- ================== jstree ================== -->
<script src="<?=auto_version('assets/plugins/jstree/jstree.min.js');?>"></script>

<!-- ================== GENERICAS ================== -->
<script src="<?=auto_version('assets/js/funciones.js');?>"></script>
<script src="<?=auto_version('assets/js/formulario.js');?>"></script>
<script src="<?=auto_version('assets/js/calcularCurp.js');?>"></script>
<script src="<?=auto_version('assets/js/sistema.js');?>"></script>

<!-- InputMask -->
<script src="<?=auto_version('assets/plugins/input-mask/jquery.inputmask.min.js');?>" type="text/javascript"></script>

	<!-- ================== dependent-dropdown ================== -->
<script src="<?=auto_version('assets/plugins/dependent-dropdown/js/dependent-dropdown.min.js');?>" type="text/javascript"></script>
<script src="<?=auto_version('assets/plugins/dependent-dropdown/js/locales/es.js');?>" type="text/javascript"></script>

<!-- Parsley -->
<script src="<?=auto_version('assets/plugins/parsley/dist/parsley.min.js');?>" type="text/javascript"></script>

<!-- smartWizard -->
<script src="<?=auto_version('assets/plugins/SmartWizard/js/jquery.smartWizard.min.js');?>" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() {
		// App.settings({
		// 	ajaxMode: true,
		// 	// ajaxDefaultUrl: '#pages/index.html',
		// 	// ajaxType: 'GET',
		// 	ajaxDataType: 'html'
		// });
		// App.init();
		window.swal = Swal.mixin({
			cancelButtonColor: "#DD6B55",
			confirmButtonColor: "#BDBDBD",
			denyButtonColor: "#81c784",
			confirmButtonText: "Sí",
			cancelButtonText: "No",
		});

		<?php
		if (ENVIRONMENT === 'production') {
			$bdNomina = (empty($this->db->hostname) ? $this->db->dsn : $this->db->hostname);
			$bdSISEGE = (empty($this->secgral->hostname) ? $this->secgral->dsn : $this->secgral->hostname);
			if (!strpos(strtolower($bdNomina), 'tribunal2') || !strpos(strtolower($bdSISEGE), 'tribunal2')){
				log_message("inicio", "Inicio - Conf. BD_PJEYAdmin: ".$bdNomina);
				log_message("inicio", "Inicio - Conf. BDSecGral: ".$bdSISEGE);
			}
		?>
			var bdNomina = "<?= $bdNomina; ?>",
					bdSISEGE = "<?= $bdSISEGE; ?>";
			if (!bdNomina.toLowerCase().includes("tribunal2") || !bdSISEGE.toLowerCase().includes("tribunal2")) {
				swal.fire({
					title: "Alerta",
					text: "Las bases de datos no están configuradas correctamente. Avise al departamento de Servicios y Redes.",
					icon: "warning",
					confirmButtonText: "Salir",
					showCancelButton: false,
					allowOutsideClick:false,
					allowEscapeKey:false,
				}).then(result => {
					if (result.value) {
						salir();
					}
				}).catch(swal.noop);
				return false;
			}
		<?php
		} //cierra if valida ENVIRONMENT

		if (verificar_permiso('WFBEM') == 3) {
		?>
		// aceptar_inicio_movimientos();
		CargarModulo('<?=base_url();?>', 'inicio/tablero');
		<?php
		}
		else {
		?>
		CargarModulo('<?=base_url();?>', 'inicio/responsabilidad');
		<?php
		}
		?>
	});

	function salir() {
		window.location.href ="<?= base_url();?>seguridad/salir";
	}

	function valida_credencial(e,campo,decReq) {
		var valor = $(campo).val();
		var key = (isIE) ? event.keyCode : e.which;
		var obj = (isIE) ? event.srcElement : e.target;
		var isNum = (key > 47 && key < 58) ? true : false;
		var dotOK = (key==46 && decReq=='decOK' && (obj.value.indexOf(".")<0 || obj.value.length==0)) ? true:false;
		var isDel = (key==0 || key==8)?true:false;
		if (key==13) return $("button#btnSearchCredencial").click();
		return (isNum || dotOK || isDel);
	}

	$('body').on('click', '#showSearch', function(){
		var estado = $(this).data('estado');
		switch(estado){
			case undefined : $(this).data('estado', 1); ColocarFoco('credencialHead'); break;
			case 1 : ColocarFoco('credencialHead'); break;
		}
	});

	$(document).on('focus', '.searchselect', function() {
		this.select();
	}).on('mouseup', '.key', function(e) {
		e.preventDefault();
	});

	$("button#btnSearchCredencial").click(function(e){
		e.preventDefault();
		var credencial = $('#credencialHead').val();

		$.ajax({
					url: "<?=base_url();?>inicio/BuscarEmpleado",
					type: "POST",
					async: false,
					data: "credencial="+credencial,
					error: function(XMLHttpRequest, errMsg, exception){
							var msg = "<p>jQuery message: <i>"+errMsg+"</i><br />XMLHttpRequest: <i>"+StatusMsg(XMLHttpRequest.status)+"</i></p>";
							alerta_emergente(msg, 'error');
					},
					success: function(htmlcode){
							var r = htmlcode.substr(0,1);
							switch(r){
								case "@":
									alerta_emergente('Acceso denegado.', 'error');
									break;

								case "*":
									alerta_emergente('Parámetros incorrectos', 'error');
									break;

								case "2":
									alerta_emergente('Número de credencial inválido.', 'error');
									break;
								case "0":
									alerta_emergente('No existe ningún empleado con el número de credencial especificado.', 'error');
									break;

								case "1": //Todo correcto
									var Clave = htmlcode.substr(1);

									cargarpag('<?= base_url()?>'+'inicio/CargarFormulario', "div#content", true, "POST", "Clave="+Clave)
									break;

								default:
									msg = htmlcode.split("-");
									alerta_emergente(msg);
									break;
							}
					}
			});

		return false;
	});

	window.onerror = function() {
		alerta_emergente("Error al ejecutar la instrucción.","error");
		hideLoading();
	};

	function muestra_acerca() {
		cargamodalGenerica('<?= base_url() ?>index.php/inicio/acerca/','#modContenido', '#modGeneral', '', 'Acerca de HEDA',1);
		return false;
	}

	function aceptar_inicio_movimientos() {
		//1. aceptamos incapacidades
		Carga_Metodo("<?=base_url();?>movimientos/aceptar_inicio_incapacidades", "", acepta_vencimientos, "Procesando...*Aprobando los inicios de incapacidades. Esto podría tardar algunos minutos. Espere un momento, por favor...");
		return false;
	}

	function acepta_vencimientos(respuesta) {
		// 2. aceptamos vencimientos
		if (respuesta.status == false) { alerta_emergente(respuesta.message, "warning"); }
		else { alerta_emergente(respuesta.message, "success"); }
		alerta_emergente("Verificando si existen movimientos de incapacidades y vacaciones a vencer el día de hoy....", "info");
		Carga_Metodo("<?=base_url();?>movimientos/aceptar_vencimientos", "", exito_acepta_movimientos, "Procesando...*Aprobando los vencimientos de incapacidades y vacaciones para el dia de hoy. Esto podría tardar algunos minutos. Espere un momento por favor...");
	}

	function exito_acepta_movimientos(respuesta) {
		// 3. finalizamos
		if (respuesta.status == false) { alerta_emergente(respuesta.message, "warning"); }
		else {
			alerta_emergente(respuesta.message, "success");
			console.log(respuesta);
		}
	}

	$(document).on("select2:open", () => {
		document.querySelector(".select2-container--open .select2-search__field").focus()
	})

	// var targetElm = '#sidebar [data-toggle="ajax"][href="'+ url +'"]';
	// if ($(targetElm).length !== 0) {
	// 	$('#sidebar li').removeClass('active');
	// 	$(targetElm).closest('li').addClass('active');
	// 	$(targetElm).parents().addClass('active');
	// }

	// $(function() {
	// 	var targetElm = '#sidebar [data-toggle="ajax"][href="'+ url +'"]';
	// 	if ($(targetElm).length !== 0) {
	// 		$('#sidebar li').removeClass('active');
	// 		$(targetElm).closest('li').addClass('active');
	// 		$(targetElm).parents().addClass('active');
	// 	}
	// });

	// $(function() {
	// 	var opciones = $(".nav li");
	// 	opciones.click(function() {
	// 		opciones.removeClass("active");
	// 		$(this).addClass("active");
	// 	});
	// });
	// $(document).on('click', '[data-toggle="item-menu"]', function(e) {
	// 	e.preventDefault();
	//
	// 	var targetElm = this;
	// 	if ($(targetElm).length !== 0) {
	// 		$('#sidebar li').removeClass('active');
	// 		$(targetElm).closest('li').addClass('active');
	// 		$(targetElm).parents().addClass('active');
	// 	}
	//
	// });

</script>
</body>
</html>
