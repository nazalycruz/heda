<div class="row">
<input type="hidden" id="jsonParametros" name="jsonParametros" value='<?php echo (empty($parametros) ? '' : json_encode($parametros)); ?>'>
<?php
if (!empty($parametros)) {
	foreach ($parametros as $param) {
		$confExtra = (!empty($param->ConfExtra) ? json_decode($param->ConfExtra,true) : '');
		$attrObj = (!empty($confExtra['attrObj']) ? $confExtra['attrObj'] : '');
		$tipo = $param->TipoCampo;
		$visible = (empty($param->Visible) ? " style=display:none;" : '')
?>
	<div id="param_<?= $param->Orden; ?>" class="col-4 mb-2" <?= $visible; ?>>
		<div class="form-group">
			<label for="<?= $param->NombreCampo; ?>" class="form-label"><?= $param->Etiqueta; ?></label>
			<?php
			switch ($tipo) {
				case 'text':
				case 'date':
					echo '<input type="text" class="form-control form-control-sm parametro '. $param->Clase .'" id="'.$param->NombreCampo.'"
								name="'.$param->NombreCampo.'" placeholder="'.$param->Etiqueta.'" value=""
								onkeypress="return '.(empty($attrObj['onkeypress']) ? 'dispara_tab' : $attrObj['onkeypress']).'(event, this);"
								onblur="return '.(empty($attrObj['onblur']) ? '' : $attrObj['onblur']).'(event, this);"
								'.(empty($param->Visible) ? " style=display:none;" : '').'
								'.(!empty($attrObj['required']) ? ' required ' : '').'
								autocomplete="off">
								';
					break;
				case 'select':
					$extraOpts = '';
					$selectOpts = (!empty($confExtra['selectOpt']) ? $confExtra['selectOpt'] : '');
					if (!empty($selectOpts)) {
						foreach ($selectOpts as $key => $opt) {
							$extraOpts .= '<option value="'.$key.'">'.$opt.'</option>';
						}
					}
					echo '<select id="'.$param->NombreCampo.'" name="'.$param->NombreCampo.'"
								 class="form-control form-control-sm select2-sm parametro rptP_catalogos"
								 '.(empty($param->Visible) ? " style=display:none;" : '').'>'
									.$extraOpts.$select[$param->Clave].
								'</select>';
					break;
				case 'checkbox':
					echo '<div class="custom-control custom-switch" '.(empty($param->Visible) ? " style=display:none;" : '').'>
					      	<input type="checkbox" class="custom-control-input parametro" id="'.$param->NombreCampo.'">
					      </div>';
					break;
				case 'radio':
					$rdoOpts = (!empty($confExtra['radioOpt']) ? $confExtra['radioOpt'] : '');
					if (!empty($rdoOpts)) {
						foreach ($rdoOpts as $key => $rdo) {
							echo '<div class="custom-control custom-radio" '.(empty($param->Visible) ? " style=display:none;" : '').'>
											<input type="radio" id="opt_'.$key.'" name="opt_'.$param->NombreCampo.'" class="custom-control-input" value="'.$key.'">
											<label class="custom-control-label" for="opt_'.$param->NombreCampo.'">'.$rdo.'</label>
										</div>';
						}
					}
					break;
				default:
					break;
			}
			if (!empty($confExtra['help'])) echo '<p class="help-block">'.$confExtra['help'].'</p>';
			?>
		</div>
	</div>
<?php
	}
}
?>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $(".rptP_decimal").inputmask('decimal',{digits: 2, digitsOptional: false, placeholder: '0.00', rightAlign: false  });

  $(".rptP_catalogos").select2({
    language: "es",
    placeholder: "Seleccione un Elemento",
		dropdownCssClass: "increasedzindexclass",
  }).on("select2:close", function (event) {
      setTimeout(function() {
        $('.select2-container-active').removeClass('select2-container-active');
        $(':focus').blur();
        dispara_tab_especial(event);
      }, 1);
  });

	$(".rptP_fechas").datepicker({
		format: "dd/mm/yyyy",
		weekStart: 1,
		maxViewMode: 3,
		language: "es",
		orientation: "bottom auto",
		autoclose: true,
		todayBtn: "linked",
		todayHighlight: true,
	}).on("hide", function(e) {
		dispara_tab_especial(e);
	}).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});

});

</script>
