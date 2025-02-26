<div class="row">
	<div class="col-sm-12">
		<div class="alert alert-warning">
			<div class="col-12">
				<div class="form-group">
					<label>&nbsp;</label>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="aceptares" name="aceptares" value="1" onclick="AceptaResponsabilidad(this.checked);" <?= (empty($this->session->userdata('aceptaresp')) ? '' : ' checked="checked"'); ?>>
						<label class="custom-control-label" for="aceptares">
							<b>Acepto que los datos proporcionados, en este registro, son de mi responsabilidad y garantizo que los datos personales proporcionados son verdaderos.</b>
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

<?php
if (!empty($this->session->userdata('aceptaresp'))) {
?>
cargarpag('<?= base_url()?>'+'inicio/CargarFormulario', "div#content", true, "POST", "")
<?php
}
 ?>

function AceptaResponsabilidad(aceptaRes){
  $.ajax({
    url: "<?php echo base_url();?>inicio/acepta_responsabilidad",
    type: "POST",
    async: true,
    dataType: "JSON",
    data: {aceptares:aceptaRes},
    error: function(xhr, status, error){
      alerta_emergente("Error: " + error,"error");
      return false;
    },
    success: function(data){
      if( data.status == false ) {
        alerta_emergente(data.message,"warning");
      }
      else{
        alerta_emergente(data.message,"success");
      }
    }
  });
  return false;
}

</script>
