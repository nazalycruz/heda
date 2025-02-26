<?php
$attributes = array("id" => "frmGuardarDatosEmpleado", "name" => "frmGuardarDatosEmpleado", "onsubmit" => "return GuardarDatosEmpleado(this, event);");
echo form_open("nomina/guardar_datos_empleado_nomina", $attributes);
?>

<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <div class="row mb-2">
    <div class="col-6">
      <div class="form-group">
        <label for="de_nombre" class="form-label">Empleado</label>
        <input type="text" readonly class="form-control f-w-600 f-s-15" value="<?= $datos_empleado->NombreCompleto; ?>" />
      </div>
    </div>
    <div class="col-6">
      <div class="form-group">
        <label for="de_nombre" class="form-label">Quincena</label>
        <input type="text" readonly class="form-control f-w-600 f-s-15" id="de_quincena" name="de_quincena" value="" />
      </div>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="row mb-2">
            <div class="col-4">
              <div class="form-group">
                <label for="de_categoria" class="form-label">Categoría</label>
                <select class="form-control form-control-sm select2-sm de_catalogos" id="de_categoria" name="de_categoria" required>
                  <?= $categorias; ?>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="de_dependencia" class="form-label">Dependencia</label>
                <select class="form-control form-control-sm select2-sm de_catalogos" id="de_dependencia" name="de_dependencia" required>
                  <?= $dependencias; ?>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="de_departamento" class="form-label">Departamento</label>
                <select class="form-control form-control-sm select2-sm de_catalogos" id="de_departamento" name="de_departamento" required>
                  <?= $departamentos; ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <div class="form-group">
                <label for="de_tipocontrato" class="form-label">Tipo de Contrato</label>
                <select class="form-control form-control-sm select2-sm de_catalogos" id="de_tipocontrato" name="de_tipocontrato" required>
                  <?= $tipocontrato ?>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="de_gpoimpresion" class="form-label">Grupo de impresión</label>
                <select class="form-control form-control-sm select2-sm de_catalogos" id="de_gpoimpresion" name="de_gpoimpresion" required>
                  <?= $grupoimpresion; ?>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="de_tipopago" class="form-label">Tipo de Pago</label>
                <select class="form-control form-control-sm select2-sm de_catalogos" id="de_tipopago" name="de_tipopago" required>
                  <?= $tipopago; ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <div class="form-group">
                <label for="juzgado" class="form-label">Estado</label>
                <select class="form-control form-control-sm select2-sm de_catalogos" id="de_estado" name="de_estado" required>
                  <?= $estados_emp; ?>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<div class="modal-footer">
  <?php
  if ($ctrlProceso->NominaCerrada == 0) {
  ?>
    <button class="btn btn-success" title="Guardar datos del empleado" id="btnGuardarDatosEmpleado" name="btnGuardarDatosEmpleado"><i class="far fa-save"></i> Guardar</button>
  <?php
  }
  ?>
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>

<?php
echo form_close();
?>
<script type="text/javascript">
<?php
if ($ctrlProceso->NominaCerrada == 0) {
?>
$('.de_catalogos').each(function () {
	$(this).select2({
		language: "es",
		width:'100%',
		placeholder: "Seleccione un Elemento",
		dropdownParent: $(this).parent(),
	}).on("select2:close", function (event) {
      setTimeout(function() {
        $('.select2-container-active').removeClass('select2-container-active');
        $(':focus').blur();
      }, 1);
  });
})
<?php
}
else {
?>
  $(".de_catalogos").prop("disabled",true);
<?php
}
?>

$('#de_quincena').val($("#quincena option:selected").text());

function GuardarDatosEmpleado(f,e) {
  e.preventDefault();
  let idEmpleado = $('#idEmpleado').val(),
      idPeriodoPago = $("#quincena option:selected").val(),
      variables = $(f).serialize();
  Carga_Metodo(f.action, variables+'&idEmpleado='+idEmpleado+'&idPeriodoPago='+idPeriodoPago, "", "Guardando...");
  return false;
}

</script>
