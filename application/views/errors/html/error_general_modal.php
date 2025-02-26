<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style type="text/css">

.h1Error {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
}

.pError {
	margin: 12px 15px 12px 15px;
}

</style>
<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">

	<div id="container">
		<h1 class="h1Error"><?php echo $heading; ?></h1>
		<div class="pError">
			<?php echo $message; ?>
		</div>
	</div>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>
