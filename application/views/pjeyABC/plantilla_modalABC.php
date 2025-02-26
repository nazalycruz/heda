<?php
$controlador = $this->router->fetch_class();
$funcion = $this->router->fetch_method();

echo '<input type="hidden" id="txtAccion" value="'.($config_data['crear'] ? 'crear' : 'actualizar').'">';

$attributes = array("id" => "frmGuardarRegistro", "name" => "frmGuardarRegistro", "onsubmit" => "return GuardarRegistroABC(this, event);");
echo form_open($controlador.'/'.$funcion, $attributes);
?>

<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
  <div class="row">
    <input type="hidden" name="<?= $config_data['key'][1] ?>" id="<?= $config_data['key'][1] ?>" value="<?= ($config_data['crear'] ? 0 : $result_data->{$config_data['key'][1]}); ?>">
    <?php
    foreach ($result_data as $key => $value) {
      if( ($key != $config_data['key'][1]) ){
        if( !empty($field_data) || $config_data['crear'] ){
          if ( in_array($key, $field_data['editCampos']) || $config_data['crear'] ){
            echo '<div class="'.(empty($field_data["editConfig"][$key]['class']) ? 'col-6' : $field_data["editConfig"][$key]['class']).'">
                    <div class="form-group">
                      <label><b>'.(empty($field_data["editConfig"][$key]['lbl']) ? $key : $field_data["editConfig"][$key]['lbl']).'</b></label>';
            switch ($campos_data[$key]['db_type']) {
              case 'int':
              case 'tinyint':
              case 'money':
                echo ' <input type="text" class="form-control" id="'.$key.'" name="'.$key.'"
                        placeholder="'.(empty($field_data["editConfig"][$key]['placeholder']) ? $key : $field_data["editConfig"][$key]['placeholder']).'"
                        value="'.$value.'"
                        maxlength="'.($campos_data[$key]['db_type'] == 'tinyint' ? 1 : 10).'"
                        onkeypress="return onlyDigits(event, this);" autocomplete="off">';
                break;
              case 'char':
              case 'varchar':
                echo ' <input type="text" class="form-control" id="'.$key.'" name="'.$key.'"
                        placeholder="'.(empty($field_data["editConfig"][$key]['placeholder']) ? $key : $field_data["editConfig"][$key]['placeholder']).'"
                        value="'.$value.'"
                        maxlength="'.$campos_data[$key]['db_max_length'].'"
                        onkeypress="return dispara_tab(event, this);" autocomplete="off">';
                break;
              case 'datetime':
                echo ' <input type="text" class="form-control abcFecha" id="'.$key.'" name="'.$key.'"
                        value="'.$value.'"
                          onkeypress="return dispara_tab(event, this);">';
                break;
              case 'bit':
                echo '  <div class="checkbox checkbox-css checkbox-inverse">
                          <input type="checkbox" id="'.$key.'" name="'.$key.'" '.(!empty($value) ? 'checked="checked"' : '').'/>
                          <label for="'.$key.'"></label>
                        </div>';
                break;
              default:
                echo ' <input type="text" class="form-control" id="'.$key.'" name="'.$key.'"
                        placeholder="'.(empty($field_data["editConfig"][$key]['placeholder']) ? $key : $field_data["editConfig"][$key]['placeholder']).'"
                        value="'.$value.'"
                        onkeypress="return dispara_tab(event, this);" autocomplete="off">';
                break;
            }
            echo '  </div>
                  </div>';
          }
        }
        else{
    ?>
          <div class="form-group">
            <label><b><?= $key ?></b></label>
            <input type="text" class="form-control" id="" placeholder="<?php $key ?>" value="<?= $value; ?>">
          </div>
    <?php
        } // del else de editables
      } //del if del id
    } //del foreach
    ?>
  </div>
</div>

<div class="modal-footer">
  <button class="btn btn-success" title="Guardar" id="btnGuardaReg" name="btnGuardaReg"><i class="fas fa-check"></i> Guardar</button>
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>

<?php
echo form_close();
?>

<script type="text/javascript">
  var base_url = "<?= base_url(); ?>", controller = "<?= $this->router->fetch_class(); ?>", funcion = "<?= $this->router->fetch_method(); ?>"
    key = dataConfig['key'][1];

  $(".abcFecha").datepicker({
    format: "dd/mm/yyyy",
    weekStart: 1,
    maxViewMode: 3,
    language: "es",
    orientation: "bottom auto",
    autoclose: true,
    todayBtn: "linked",
    todayHighlight: true,
  }).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});

  function GuardarRegistroABC(f,e) {
    e.preventDefault();
    var variables = $(f).serialize(),
        accion = $('#txtAccion').val();
    Carga_Metodo(f.action, variables+'&accion='+accion, "", "Guardando*");
    if( accion == 'crear' ) { $('#modpjeyABC').modal('hide'); }
    return false;
  }

  // function exito_guarda_registroABC(respuesta) {
  //   if( respuesta.status == false ) { alerta_emergente(respuesta.message, "warning"); }
  //   else{
  //     alerta_emergente(respuesta.message, "success");
  //   }
  // }

</script>
