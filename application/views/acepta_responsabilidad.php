<div class="row">
  <div class="col-sm-12">
    <div class="alert alert-warning">
      <div class="checkbox">
        <label class="control-label col-sm-12" >
          <input type="checkbox" id="aceptares" name="aceptares" value="1" onclick="AceptaResponsabilidad(this.checked);" <?= (empty($this->session->userdata('aceptaresp')) ? '' : ' checked="checked"'); ?>>
          Acepto que los datos proporcionados, en este registro, son de mi responsabilidad y garantizo que los datos personales proporcionados son verdaderos.
        </label>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

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
