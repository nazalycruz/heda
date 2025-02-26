<?php ; //>>>RPERAZA(2021.08.05): CASU 1306/2021 ?>
<?php
$attributes = array("id" => "frmCatPresupuestos", "name" => "frmCatPresupuestos", "onsubmit" => "return guardarResponsable(this, event);");
echo form_open("utilerias/guardar_responsable_presupuesto", $attributes);
?>
<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"><i class="fa fa-user"></i> Configuración de Responsables de Presupuesto</h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body mb-0">
	<div class="card mb-2">
		<div class="card-body">
			<div class="row">
	      <div class="col-sm-7 col-md-7 col-lg-9">
	        <label for="Responsable_rp" class="form-label">Nombre del Responsable</label>
	        <input type="input" class="form-control" id="Responsable_rp" name="Responsable_rp" maxlength="100" autocomplete="off" value="<?=$responsable->Responsable?>">
	      </div>
	      <div class="col-sm-5 col-md-5 col-lg-3">
	        <label for="RFCResponsable_rp" class="form-label">RFC</label>
	        <input type="input" class="form-control" id="RFCResponsable_rp" name="RFCResponsable_rp" maxlength="15" autocomplete="off" value="<?=$responsable->RFCResponsable?>">
	      </div>
	    </div>

	    <div class="row">
	      <div class="col-md-12">
	        <label for="Categoria_rp" class="form-label">Categoría del Responsable</label>
	        <input type="input" class="form-control" id="Categoria_rp" name="Categoria_rp" maxlength="100" autocomplete="off" value="<?=$responsable->Categoria?>">
	      </div>
	    </div>
		</div>
	</div>

	<div class="card mb-2">
		<div class="card-body">
			<div class="row">
	      <div class="col-6">
	      	<label for="jefe_rh" class="form-label">Jefe de Recursos Humanos</label>
	        <input type="input" class="form-control" id="jefe_rh" name="jefe_rh" maxlength="100" autocomplete="off" value="<?= $responsable->jefeRH; ?>">
	      </div>
				<div class="col-6">
	        <label for="categoria_rh" class="form-label">Categoría del Jefe de Recursos Humanos</label>
	        <input type="input" class="form-control" id="categoria_rh" name="categoria_rh" maxlength="100" autocomplete="off" value="<?= $responsable->CategoriaJefeRH; ?>">
	      </div>
	    </div>
		</div>
	</div>

	<div class="card">
		<div class="card-body">
			<div class="row">
        <div class="col-6">
        	<label for="aux_rh" class="form-label">Auxiliar de Recursos Humanos</label>
          <input type="input" class="form-control" id="aux_rh" name="aux_rh" maxlength="100" autocomplete="off" value="<?= $responsable->AuxRH; ?>">
        </div>
				<div class="col-6">
          <label for="categoria_aux" class="form-label">Categoría del Auxiliar de Recursos Humanos</label>
          <input type="input" class="form-control" id="categoria_aux" name="categoria_aux" maxlength="100" autocomplete="off" value="<?= $responsable->CategoriaAuxRH; ?>">
        </div>
			</div>
		</div>
	</div>
</div>

<div class="modal-footer pb-2 pt-2">
	<button id="btnGuarda_rp" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Guardar</button>
	<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
</div>
<?php
echo form_close();
?>

<script type="text/javascript">
    function guardarResponsable(f,e){
			e.preventDefault();
	    if (validarCamposPr() == true) {
				let variables = $(f).serialize()
	      $.ajax({
	        url: f.action,
	        type: 'POST',
	        async: true,
	        dataType: "JSON",
	        data: variables,
	        error: function(XMLHttpRequest, errMsg, exception){
	          let msg = "jQuery message: "+errMsg+" XMLHttpRequest: "+StatusMsg(XMLHttpRequest.status);
	          alerta_emergente(msg, 'error');
	        },
	        beforeSend:function(request) {
	        	showLoading("Procesando...");
	        },
	        success: function(data){
	          if (data.status == false) {
	          	alerta_emergente(data.mensaje,"error");
	          }
	          else {
	          	alerta_emergente(data.mensaje,"success");
	          }
	        },
	        complete: function(request, json){
	        	hideLoading();
	        }
	      });
	    }

	    return false;
    }

    function validarCamposPr(){
        if ($('#Responsable_rp').val().trim() == ''){
            $('#Responsable_rp').focus();
            alerta_emergente('Se requiere el <b>Nombre</b> del Responsable.', 'warning');
            return false;
        }

        if ($('#RFCResponsable_rp').val().trim() == ''){
            $('#RFCResponsable_rp').focus();
            alerta_emergente('Se requiere el <b>RFC</b> del Responsable.', 'warning');
            return false;
        }

        if ($('#Categoria_rp').val().trim() == ''){
            $('#Categoria_rp').focus();
            alerta_emergente('Se requiere la <b>Categoría</b> del Responsable.', 'warning');
            return false;
        }

        return true;
    }
</script>
