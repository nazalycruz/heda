<?php
$attributes = array("id" => "frmContrato", "name" => "frmContrato", "onsubmit" => "return PostBackFrmGuardaContrato(this, event);");
echo form_open("empleado/guarda_contrato_empleado", $attributes);
?>
<div class="card">
	<input type="hidden" name="dc_credencial" id="dc_credencial" value="<?= (empty($credencial) ? '' : $credencial); ?>">
	<input type="hidden" name="dc_idEmpleado" id="dc_idEmpleado" value="<?= (empty($idEmpleado) ? '' : $idEmpleado); ?>">
  <div class="card-body">
		<div class="row">
			<div class="col-2">
        <div class="form-group">
          <label for="txtAltaCon" class="form-label">Alta</label>
          <input type="text" class="form-control form-control-sm fechasDC" id="txtAltaCon" name="txtAltaCon" onkeypress="return dispara_tab(event, this);" placeholder="Fecha de Alta" value="<?= (empty($empleado) ? '' : cambiaf_a_normal($empleado->FechaAlta)); ?>" required>
        </div>
      </div>
		</div>
    <div class="row">
      <div class="col-2">
        <div class="form-group">
          <label for="txtTipoCon" class="form-label">Tipo</label>
          <input type="text" class="form-control form-control-sm" id="txtTipoCon" name="txtTipoCon" onkeypress="return dispara_tab(event, this);" placeholder="Tipo de Contrato" required value="<?= (empty($empleado) ? '' : $empleado->TipoContra); ?>" readonly>
        </div>
      </div>
      <div class="col-2">
        <div class="form-group">
          <label for="txtIniCon" class="form-label">Inicia</label>
          <input type="text" class="form-control form-control-sm fechasDC" id="txtIniCon" name="txtIniCon" onkeypress="return dispara_tab(event, this);" placeholder="Fecha inicial del contrato" required value="<?= (empty($empleado) ? '' : cambiaf_a_normal($empleado->IniciaCon)); ?>">
        </div>
      </div>
      <div class="col-2">
        <div class="form-group">
          <label for="txtFinCon" class="form-label">Termina</label>
          <input type="text" class="form-control form-control-sm fechasDC" id="txtFinCon" name="txtFinCon" onkeypress="return dispara_tab(event, this);" placeholder="Fecha final del contrato" value="<?= (empty($empleado) ? '' : cambiaf_a_normal($empleado->FinalCon)); ?>">
        </div>
      </div>
      <div class="col-2">
				<div class="form-group">
          <label for="dc_EstadoCon" class="form-label">Estado</label>
          <select class="form-control cf_catalogos form-control-sm select2-sm" id="dc_EstadoCon" name="dc_EstadoCon">
            <?= $estados; ?>
          </select>
        </div>
      </div>
			<div class="col-2">
				<div class="form-group">
					<label for="dc_Edificio" class="form-label">Edificio</label>
					<select class="form-control cf_catalogos form-control-sm select2-sm" id="dc_Edificio" name="dc_Edificio">
						<?= $catedificios; ?>
					</select>
				</div>
			</div>
			<div class="col-2">
				<div class="form-group">
					<label for="dc_Departamento" class="form-label">Departamento</label>
					<select class="form-control cf_catalogos form-control-sm select2-sm" id="dc_Departamento" name="dc_Departamento">
						<?= $catdepartamentos; ?>
					</select>
				</div>
			</div>
    </div>
    <div class="row">
      <div class="col-2">
        <div class="form-group">
          <label for="dc_GpoImpresion" class="form-label">Grupo de Impresión</label>
          <select class="form-control cf_catalogos form-control-sm select2-sm" id="dc_GpoImpresion" name="dc_GpoImpresion">
						<?= $grupoimpresion; ?>
          </select>
        </div>
      </div>
      <div class="col-2">
        <div class="form-group">
          <label for="dc_CodPago" class="form-label">Código de Pago</label>
          <select class="form-control cf_catalogos form-control-sm select2-sm" id="dc_CodPago" name="dc_CodPago">
						<?= $codigo_pago; ?>
          </select>
        </div>
      </div>
      <div class="col-2">
        <div class="form-group">
          <label for="dc_Supervisor" class="form-label">Supervisor</label>
          <select class="form-control cf_catalogos form-control-sm select2-sm" id="dc_Supervisor" name="dc_Supervisor">
						<?= $catsupervisores; ?>
          </select>
        </div>
      </div>
			<div class="col">
				<div class="form-group">
					<label class="form-label">Registra asistencia</label>
					<div class="checkbox checkbox-css checkbox-inverse">
						<input type="checkbox" id="chkRegistraAsistencia" name="chkRegistraAsistencia" value="1"/>
						<label for="chkRegistraAsistencia"></label>
					</div>
				</div>
			</div>
			<div class="col-2">
				<div class="form-group">
					<label class="form-label">De Baja (liquidado)</label>
					<div class="checkbox checkbox-css checkbox-inverse">
						<input type="checkbox" id="chkDeBaja" name="chkDeBaja" value="1" title="Si este cuadro está marcado, significa que al empleado no se le calculará su nómina."/>
						<label for="chkDeBaja"></label>
					</div>
				</div>
			</div>
			<div class="col-2">
				<div class="form-group">
					<label for="fechaBaja" class="form-label">Fecha de Baja</label>
					<input type="text" class="form-control form-control-sm fechasDC" id="fechaBaja" name="fechaBaja" onkeypress="return dispara_tab(event, this);" placeholder="Fecha de Baja" value="<?= (empty($empleado) ? '' : cambiaf_a_normal($empleado->FechaBaja)); ?>" style="color:red;">
				</div>
			</div>
    </div>
		<div class="row">
			<!-- <div class="col-2">
        <div class="form-group">
          <label for="dc_Turno" class="form-label">Turno</label>
          <select class="form-control cf_catalogos form-control-sm select2-sm" id="dc_Turno" name="dc_Turno">
						<?= $cat_turnos; ?>
          </select>
        </div>
      </div> -->
		</div>

  </div>
	<div class="card-footer text-end">
		<button class="btn btn-success btn-sm" title="Guardar" id="btnGuardarContrato" name="btnGuardarContrato" disabled>
			<i class="far fa-save"></i> Guardar
		</button>
	</div>
</div>
<?php
echo form_close();
?>

<script type="text/javascript">
$(document).ready(function(){
	$(".cf_catalogos").select2({
    language: "es",
    placeholder: "Seleccione un Elemento",
    width:'100%',
  }).on("select2:close", function (event) {
      setTimeout(function() {
        $('.select2-container-active').removeClass('select2-container-active');
        $(':focus').blur();
      }, 1);
  });

  $(".fechasDC").datepicker({
    format: "dd/mm/yyyy",
    weekStart: 1,
    maxViewMode: 3,
    language: "es",
    orientation: "bottom auto",
    autoclose: true,
    todayBtn: "linked",
    todayHighlight: true,
  }).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});

	$("#dc_EstadoCon").trigger('change');
});

	$("#dc_EstadoCon").on("change", function (e) {
	  let estado = $(this).val(),
				hoy = new Date();
		switch (estado) {
			case 'A':
				$("#fechaBaja").val('');
				$("#chkRegistraAsistencia").prop("checked",true);
				break;
			case 'VA':
			case 'IN':
			case 'LIC':
			case 'LIS':
				$("#chkRegistraAsistencia").prop("checked",false);
				break;
			case "I":
				$("#fechaBaja").val(hoy);
				$('#txtIniCon').val(hoy);
				$('#txtFinCon').val('');
				$("#chkRegistraAsistencia").prop("checked",false);
				break;
			default:
		}
	  return false;
	});

	function PostBackFrmGuardaContrato(f,e) {
  	e.preventDefault();
		Carga_Metodo(f.action,
								 $(f).serialize(),
								 function finalizaProceso(data){
									 if (data.status == false) { alerta_emergente(data.message, "warning"); }
									 else { alerta_emergente(data.message, "success"); }
								 },
								 "Guardando...");
	}

// 	Private Sub cmbEstado_Click()
//   Select Case cmbEstado.text
//     Case "ACTIVO"
//       If year(txtIniciaCon.DateValue) = year(dHoy) Then
//         txtIGafett.DateValue = txtIniciaCon.DateValue
//       Else
//         txtIGafett.DateValue = "01/01/" + CStr(year(dHoy))
//       End If
//       txtFinalCon.DateValue = "31/12/" + CStr(year(dHoy))
//       txtTGafett.DateValue = "31/12/" + CStr(year(dHoy))
//       txtFechaBaja = vbNullString
// '      Checa = vbChecked
//     Case "VACACIONES", "INCAPACIDAD"
// '      Checa = vbUnchecked
//     Case "INACTIVO"
//       txtIniciaCon = dHoy
//       txtFinalCon.DateValue = "01/01/1900"
//       txtFechaBaja = txtIniciaCon
//       txtIGafett.DateValue = "01/01/1900"
//       txtTGafett.DateValue = "01/01/1900"
//       Checa = vbUnchecked
//   End Select
//  ' If Tab_Empleado.Tab = 1 Then txtIniciaCon.SetFocus
// End Sub
</script>
