<h1 class="page-header">Listados de Auditoría ASEY <small>(ANTES DE GENERAR EL REPORTE ES NECESARIO HABER SUBIDO LOS UUID)</small></h1>

<?php
$attributes = array("id" => "frmAuditoria", "name" => "frmAuditoria", "onsubmit" => "return PostBackfrmAuditoria(this, event);");
echo form_open("auditoria/procesar_reporte", $attributes);
?>

<!-- <div class="row" id="muestra-reportes"> -->
  <div class="card mb-2" id="muestra-reportes">
    <div class="card-body">
      <div class="row">
        <div class="col-7">
          <div class="form-group">
            <label for="idReporte" class="form-label">Seleccione un reporte</label>
            <select class="form-control form-control-sm select2-sm select2" id="idReporte" name="idReporte" required>
              <?= $cat_reportesauditoria; ?>
            </select>
          </div>
        </div>

        <!-- <div class="col-md-1">
          <div class="form-group">
            <label for="anio" class="form-label">Año</label>
            <input type="text" class="form-control form-control-sm" id="anio" name="anio" value="<?= date('Y') - 1; ?>" maxlength="4" onkeydown="return ProcesarCaptura(event, this);" />
          </div>
        </div> -->

				<div class="col">
					<div class="form-group">
						<label for="fInicio" class="form-label">Fecha de Inicio</label>
						<input type="text" class="form-control form-control-sm aud_fechas" id="fInicio" name="fInicio" required autocomplete="off" placeholder="Fecha inicial" value="<?= '01/01'.date('Y'); ?>">
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="fFin" class="form-label">Fecha Final</label>
						<input type="text" class="form-control form-control-sm aud_fechas" id="fFin" name="fFin" required autocomplete="off" placeholder="Fecha final" value="<?= date('d/m/Y'); ?>">
					</div>
				</div>

				<?php
				if ($PresupuestoId == 2) {
				 ?>
        <div class="col-md-2">
          <div class="form-group">
            <label class="form-label">Fondo Auxiliar</label>
            <div class="checkbox checkbox-css checkbox-inverse">
              <input type="checkbox" id="fondoAuxiliar" name="fondoAuxiliar" value="1"/>
              <label for="fondoAuxiliar"></label>
            </div>
          </div>
        </div>
				<?php
				}
				?>

			</div>
    </div>
		<div class="card-footer text-end">
			<!-- <button type="button" class="btn btn-sm btn-outline-secondary" id="btnLeerArch"><i class="fa-solid fa-file-excel"></i> Leer Archivo</button> -->
			<button class="btn btn-sm btn-inverse" id="btnImprimir"><i class="fa-solid fa-table-list"></i> Generar Listado</button>
			<button type="button" class="btn btn-sm btn-outline-secondary" id="btnExportar"><i class="fa-solid fa-file-excel"></i> Exportar Listado</button>
		</div>
  </div>
<!-- </div> -->
<?php
echo form_close();
?>

<div id="tblResult">

</div>

<script type="text/javascript">
  setTimeout(function cargarconsulta() {

    $(".select2").select2({
      language: "es",
      width: '100%',
      placeholder: 'Selecciona una Opción'
    });

		$(".aud_fechas").datepicker({
			format: "dd/mm/yyyy",
			weekStart: 1,
			maxViewMode: 3,
			language: "es",
			orientation: "bottom auto",
			autoclose: true,
			todayBtn: "linked",
			todayHighlight: true,
			// endDate: '+1d',
			// datesDisabled: '+1d',
		}).on("hide", function(e) {
			// dispara_tab_especial(e);
		}).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});
  });

  function PostBackfrmAuditoria(f,e) {
		e.preventDefault();
		if (ValidarCampos()) {
			Carga_Metodo(f.action, $(f).serialize(), function generandoListado(data) {
				if (data.status == false) { alerta_emergente(data.mensaje, "warning"); }
				else {
					$('#tblResult').html(data.html);
				}
			},"Generando Listado...");
		}

	  return false;
  }

	$("#btnExportar").click(function(){
		if (ValidarCampos() == true) {
			Carga_Metodo("<?=base_url();?>auditoria/exportar_reporte", $('#frmAuditoria').serialize(), function generandoArchivo(data) {
	      if (data.status == false) {
					alerta_emergente(data.message, "warning");
				}
	      else {
	        alerta_emergente(data.message, "success");
					let $a = $('<a />').appendTo('body');
					$a.attr('id', 'descargaXLS');
					$a.attr('href', data.file);
					$a.attr("download", data.nombreArch);
					$a.attr('target', '_blank');
					$a[0].click();
					$a.remove();
	      }
	    }, "Procesando...");
		}
	});

	$("#btnLeerArch").click(function(){
		if (ValidarCampos() == true) {
			let variables = [],
					length_data = Object.keys($('#idReporte').find(':selected').data()).length;
			for (i = 0; i < length_data; i++) {
				let str = Object.keys($('#idReporte').find(':selected').data())[i]
				variables.push({ name : str, value : $('#idReporte').find(':selected').attr('data-'+str) })
			}
			variables.push( $('#frmAuditoria').serialize());
			console.log(variables);
			return;
				Carga_Metodo("<?=base_url();?>auditoria/leer_plantilla_auditoria", variables, function leyendoArchivo(data) {
		      if (data.status == false) { alerta_emergente(data.message, "warning"); }
		      else {
		        alerta_emergente(data.message, "success");
		      }
		    }, "Procesando...");
		}
	});

  function ValidarCampos() {
    let resultado = true;

    if (resultado == true && $("#idReporte").val() == "") {
      alerta_emergente('Se requiere seleccione un reporte', "warning");
      resultado = false;
    }
		//
    // if (resultado == true && $("#Anio").val() == "") {
    //   alerta_emergente('Se requiere ingrese el año de la auditoría', "warning");
    //   resultado = false;
    // }
		//
    // if (resultado == true && $("#Anio").val() != "" && $("#Anio").val() < 2000 && $("#Anio").val() > 2050) {
    //   alerta_emergente('Se requiere ingrese un año válido de la auditoría', "warning");
    //   resultado = false;
    // }
    return resultado;
  }

  function ProcesarCaptura(e, campo) {
    let resultado = false;
    let ejecBusqueda = true;
    let _key = (window.Event) ? event.which : event.keyCode;
    if (_key > 95 && _key < 106) {
      resultado = true;
    } else if (_key > 47 && _key < 58) {
      resultado = true;
    } else if (_key == 8) {
      resultado = true;
    } else if (_key == 46) {
      resultado = true;
    } else if (_key == 37 | _key == 39 | _key == 9) { //Flechas y tab
      resultado = true;
      ejecBusqueda = false;
    } else {
      resultado = false;
      ejecBusqueda = false;
    }

    //if(ejecBusqueda == true) InicializaContador();

    return resultado;
  }
