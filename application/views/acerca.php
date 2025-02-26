<style media="screen">
  .logoS img {
      width: auto;
      height: 80px;
      margin: 0 auto;
  }
</style>

<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <div class="logoS">
   <img src="<?=base_url();?>assets/img/logopje.jpg" class="img-responsive" alt="" height="80" width="100">
  </div>
  <div class="row scroll-dialog">
    <div class="col-md-12">
      <p class="lead">
  			<?php
          echo $cols;
        ?>
      </p>
    </div>
  </div>

  <legend>Configuraciones</legend>
  <div class="row">
    <div class="col-md-12">
      <ul>
        <li>
          <span class="fw-bolder">Conexión Nómina: </span><?php echo (empty($this->db->hostname) ? $this->db->dsn : $this->db->hostname); ?>
        </li>
        <li>
          <span class="fw-bolder">Conexión SecGral: </span><?php echo (empty($this->secgral->hostname) ? $this->secgral->dsn : $this->secgral->hostname); ?>
        </li>
        <li>
          <span class="fw-bolder">webservice ARCON: </span><?= $this->param_lib->get_parametro('WS_ARCON'); ?>
        </li>
        <li>
          <span class="fw-bolder">PHP: </span><?php echo PHP_VERSION; ?>
        </li>
        <li>
          <span class="fw-bolder">CodeIgniter: </span>v<?php echo CI_VERSION; ?>
        </li>
        <li>
          <span class="fw-bolder">ambiente: </span><?php echo ENVIRONMENT; ?>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" onclick="abreLog();"><i class="far fa-file-alt"></i> Log</button>
	<button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>


<script type="text/javascript">
  function abreLog() {
    window.open('<?=base_url();?>index.php/log');
  }
</script>
