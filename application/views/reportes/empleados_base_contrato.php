<h1 class="page-header">Listado de Empleados<small> con Base y Contrato vigente</small></h1>

<?php
$attributes = array("id" => "frmReporteEmpleados", "name" => "frmReporteEmpleados", "onsubmit" => "return PostBackfrmReporteEmpleados(this, event);");
echo form_open("reportes/procesa_listado_empleados_base_contrato", $attributes);
?>

<div class="card mb-2">
  <div class="card-body">
    <div class="row">
      <div class="col-2">
        <div class="form-group">
          <label for="anio" class="form-label">Días</label>
          <input type="text" class="form-control form-control-sm" id="txtDias" name="txtDias" value="" maxlength="4" onkeypress="return onlyDigits(event,this,'','btnGenerarReporte');" placeholder="Días del contrato vigente" required autocomplete="off"/>
        </div>
      </div>
		</div>
  </div>
	<div class="card-footer text-end">
		<button class="btn btn-sm btn-inverse" id="btnGenerarReporte" name="btnGenerarReporte"><i class="fa-solid fa-table-list"></i> Generar Listado</button>
	</div>
</div>

<?php
echo form_close();
?>

<div class="card">
	<div class="card-body">
		<div id="tblResultReporte">

		</div>
	</div>
</div>

<script type="text/javascript">
  function PostBackfrmReporteEmpleados(f,e) {
		e.preventDefault();
		Carga_Metodo(f.action, $(f).serialize(), function generandoListado(data) {
			if (data.status == false) { alerta_emergente(data.message, "warning"); }
			else {
				$('#tblResultReporte').html(data.html);
			}
		},"Generando Listado...");
	  return false;
  }
