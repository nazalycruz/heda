<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<?php
$attributes = array("id" => "frmAgregaPrestador", "name" => "frmAgregaPrestador", "onsubmit" => "return PostBackFrmAgregaPrestador(this, event);");
echo form_open("prestadores/agrega_prestador", $attributes);
?>
<div class="modal-body">
  <div class="row">
    <div class="col-12">

          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <input type="hidden" name="p_idPrestador" id="p_idPrestador" value="">
                <label for="p_nombre"><b>Nombre</b></label>
                <input type="text" class="form-control form-control-sm" id="p_nombre" name="p_nombre" autocomplete="off">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="p_apellido1"><b>Primer Apellido</b></label>
                <input type="text" class="form-control form-control-sm" id="p_apellido1" name="p_apellido1" autocomplete="off">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="p_apellido2"><b>Segundo Apellido</b></label>
                <input type="text" class="form-control form-control-sm" id="p_apellido2" name="p_apellido2" autocomplete="off">
              </div>
            </div>
          </div>

    </div>
  </div>
</div>
<div class="modal-footer">
  <button class="btn btn-success btn-sm" id="btnAgregarPrestador" title="Agregar prestador" onclick="agrega_prestador();"><i class="fa fa-plus"></i> Guardar</button>
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>
<?php
echo form_close();
?>

<script type="text/javascript">

function PostBackFrmAgregaPrestador(f,e) {
  e.preventDefault();
  let variables = $(f).serialize();

  Carga_Metodo(f.action, variables, "", "Cargando...");
  return false;
}

</script>
