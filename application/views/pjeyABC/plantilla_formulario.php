<h1 class="page-header" id="titulo-abcFormulario" style="display:none;"></h1>

<?php
if (!empty($form_data['formAttr'])) {
form_open($form_data['formAcc'], $form_data['formAttr']);
?>

<div class="card mb-2">
  <div class="card-body pb-0">
		<?php
		if (!empty($form_data['formBody'])) {
			echo $form_data['formBody'];
		}
		?>
  </div>

  <?php
  if (!empty($form_data['formPie'])) {
  ?>
  <div class="card-footer p-10 text-end m-t-0">
    <div>
      <?= $form_data['formPie']; ?>
    </div>
  </div>
  <?php
  }
  ?>
</div>

<?php
form_close();
}
else echo (empty($form_data['formBody']) ? '' : $form_data['formBody']);
?>

<div id="listadoGen">

</div>

<!-- Modal Genérica con contenido configurable-->
<div class="modal fade" id="modGenpjeyABC" tabindex="-1" role="dialog">
  <div id="modtamanio" class="modal-dialog modal-lg">
    <div class="modal-content" id="modcontentGen">
      <!-- contenido de la ventana modal -->
    </div>
  </div>
</div>

<script type="text/javascript">
var dataSet     = <?= (empty($form_data) ? '' : json_encode($form_data)); ?>,
		dataConfig  = <?= (empty($config_data) ? '[]' : $config_data); ?>;
$(function() {
  //Genera configuración para el título y subtítulo de la página
  if (typeof dataConfig.titulo !== "undefined" && dataConfig.titulo != "" && dataConfig.titulo != null) {
    var subTitulo = ((typeof(dataConfig.subtitulo) != "undefined" || dataConfig.subtitulo != "" || dataConfig.subtitulo != null) ? dataConfig.subtitulo : '');
    $('#titulo-abcFormulario').html(dataConfig.titulo+' <small>'+subTitulo+'</small>');
    $('#titulo-abcFormulario').show();
  }

  $(".ABCcatalogo").select2({
    placeholder: "Seleccione un Elemento",
    language: "es",
    width:'100%',
    minimumResultsForSearch: -1,
  }).on("select2:close", function (event) {
      setTimeout(function() {
        $('.select2-container-active').removeClass('select2-container-active');
        $(':focus').blur();
        dispara_tab_especial(event);
      }, 1);
  });

  $('.ABCfecha').datepicker({ //fecha dinámica
      format: "dd/mm/yyyy",
      weekStart: 1,
      maxViewMode: 3,
      language: "es",
      orientation: "bottom auto",
      autoclose: true,
      todayBtn: "linked",
      todayHighlight: true,
      endDate: '+1d',
      datesDisabled: '+1d',
  }).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});

  //convierte los campos tipo fecha
  $( ".ABCfecha" ).each(function( index ) {
    var fechaSQL = $( this ).val();
    $( this ).val( fecha_sql_a_normal(fechaSQL) );
  });

});

function ConsultaABCformulario(f,e) {
  e.preventDefault();
  var variables = $(f).serialize(),
      operacion = 'listar';
  cargarpag(f.action, "div#listadoGen", true, f.method, variables+'&operacion='+operacion);
  return false;
}

</script>
