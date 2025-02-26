<?php
$attributes = array("id" => "frmGuardaPrestador", "name" => "frmGuardaPrestador", "onsubmit" => "return PostBackFrmGuardaPrestador(this, event);");
echo form_open("prestadores/guarda_prestador", $attributes);
?>
<div class="card-body">
  <div class="row">
    <div class="col-4">
      <div class="form-group">
        <label for="p_nombre"><b>Nombre</b></label>
        <input type="text" class="form-control form-control-sm" id="p_nombre" name="p_nombre" value="<?= (empty($prestador->Nombre) ? "" : $prestador->Nombre); ?>" autocomplete="off">
      </div>
    </div>
    <div class="col-4">
      <div class="form-group">
        <label for="p_apellido1"><b>Primer Apellido</b></label>
        <input type="text" class="form-control form-control-sm" id="p_apellido1" name="p_apellido1" value="<?= (empty($prestador->Apellido1) ? "" : $prestador->Apellido1); ?>" autocomplete="off">
      </div>
    </div>
    <div class="col-4">
      <div class="form-group">
        <label for="p_apellido2"><b>Segundo Apellido</b></label>
        <input type="text" class="form-control form-control-sm" id="p_apellido2" name="p_apellido2" value="<?= (empty($prestador->Apellido2) ? "" : $prestador->Apellido2); ?>" autocomplete="off">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label for="p_categoria"><b>Categoría</b></label>
        <select class="form-control p_catalogos form-control-sm select2-sm" id="p_categoria" name="p_categoria">
          <?= $catcategorias; ?>
        </select>
      </div>
    </div>
    <div class="col-6">
      <div class="form-group">
        <label for="p_dependencia"><b>Dependencia</b></label>
        <select class="form-control p_catalogos form-control-sm select2-sm" id="p_dependencia" name="p_dependencia">
          <?= $catdependencias; ?>
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-3">
      <div class="form-group">
        <label for="p_fechanac"><b>Fecha de Nac.</b></label>
        <input type="text" class="form-control form-control-sm fechasPrest" id="p_fechanac" name="p_fechanac" required autocomplete="off" value="<?= (empty($prestador->fechaNac) ? "" : $prestador->fechaNac); ?>">
      </div>
    </div>
    <div class="col-3">
      <div class="form-group">
        <label for="p_fechaalta"><b>Fecha de Alta</b></label>
        <input type="text" class="form-control form-control-sm fechasPrest" id="p_fechaalta" name="p_fechaalta" required autocomplete="off" value="<?= (empty($prestador->FechaAlta) ? "" : cambiaf_a_normal($prestador->FechaAlta)); ?>">
      </div>
    </div>
    <div class="col-2">
      <div class="form-group">
        <label for="p_EdoCivil"><b>Estado civil</b></label>
        <select class="form-control form-control-sm p_catalogos" id="p_EdoCivil" name="p_EdoCivil">
          <option></option>
        </select>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="form-group">
        <label for="Sexo"><b>Sexo</b></label>
        <select class="form-control form-control-sm p_catalogos" id="p_Sexo" name="p_Sexo">
          <option value="M" selected="selected">Masculino</option>
          <option value="F" selected="selected">Femenino</option>
          <option value="O" selected="selected">Otro</option>
        </select>
      </div>
    </div>
    <div class="col-2">
      <div class="form-group">
        <label for="Hijos"><b>Número de hijos</b></label>
        <input type="text" class="form-control form-control-sm" id="p_Hijos" name="p_Hijos" value="" onkeypress="return onlyDigits(event, this);" autocomplete="off" maxlength="2" >
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      <div class="form-group">
        <label for="Email"><b>Correo Electrónico</b></label>
        <input type="text" class="form-control form-control-sm" id="Email" name="Email" onkeypress="return dispara_tab(event, this);" value="<?= (empty($prestador->Email) ? "" : $prestador->Email); ?>" >
      </div>
    </div>
    <div class="col-8">
      <div class="form-group">
        <label for="Direccion"><b>Domicilio</b></label>
        <input type="text" class="form-control form-control-sm" id="Direccion" onkeypress="return dispara_tab(event, this);" name="Direccion" value="<?= (empty($prestador->Direccion) ? "" : $prestador->Direccion); ?>" >
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      <div class="form-group">
        <label for="estado"><b>Estado de domicilio</b></label>
        <select class="form-control form-control-sm" id="estado" name="estado">
        </select>
      </div>
    </div>
    <div class="col-3">
      <div class="form-group">
        <label for="ciudad"><b>Ciudad de domicilio</b></label>
        <select class="form-control form-control-sm" id="p_ciudad" name="p_ciudad" onchange="CargarColonias(this.value);" >
        </select>
      </div>
    </div>
    <div class="col-3">
      <div class="form-group">
        <label for="colonia"><b>Colonia de domicilio</b></label>
        <select class="form-control form-control-sm" id="p_colonia" name="p_colonia">
        </select>
      </div>
    </div>
    <div class="col-2">
      <div class="form-group">
        <label for="p_cp"><b>C.P.</b></label>
        <input type="text" class="form-control form-control-sm" id="p_cp" onkeypress="return dispara_tab(event, this);" name="p_cp" value="" >
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4">
      <div class="form-group">
        <label for="RFC"><b>RFC</b></label>
        <input type="text" class="form-control form-control-sm" id="p_RFC" name="p_RFC" value="">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label for="CURP"><b>CURP</b></label>
        <input type="text" class="form-control form-control-sm" id="p_CURP" name="p_CURP" value="">
      </div>
    </div>
    <div class="col-md-3 col-xs-4">
      <div class="form-group">
        <label for="IMSS"><b>IMSS</b></label>
        <input type="text" class="form-control form-control-sm" id="p_IMSS" name="p_IMSS" value="">
      </div>
    </div>
    <div class="col-md-1 col-xs-4">
      <div class="form-group">
        <label for="Zona" title="Unidad Médica Famiiliar"><b>UMF</b></label>
        <input type="text" class="form-control form-control-sm" id="p_Zona" name="p_Zona" maxlength="8" value="">
      </div>
    </div>
  </div>
</div>
<div class="card-footer text-end">
  <button class="btn btn-success btn-sm" id="btnAgregarPrestador" title="Agregar prestador"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
</div>
<?php
echo form_close();
?>

<script type="text/javascript">

$(".p_catalogos").select2({
	language: "es",
	placeholder: "Seleccione un Elemento",
	minimumResultsForSearch: Infinity,
	width:'100%'
}).on("select2:close", function (event) {
		setTimeout(function() {
			$('.select2-container-active').removeClass('select2-container-active');
			$(':focus').blur();
			dispara_tab_especial(event);
		}, 1);
});

function PostBackFrmGuardaPrestador(f,e) {
  e.preventDefault();
  let variables = $(f).serialize();
  Carga_Metodo(f.action, variables, function guardar(res) {
    if (res.status == false) { alerta_emergente(res.message, "warning"); }
    else {
      alerta_emergente(res.message, "success");
      $('#p_idPrestador').val(res.id);
      $('#frmBuscaPrestador').submit();
    }
  }, "Cargando...");
  return false;
}

</script>
