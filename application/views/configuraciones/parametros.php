<h1 class="page-header">Parámetros <small>configuración de parámetros</small></h1>

<div id="accordionParametros" class="accordion accordion-flush">
  <div class="accordion-item">
    <h2 class="accordion-header pointer-cursor" id="head-sistema">
			<button class="accordion-button bg-gradient-black text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collSistema" aria-expanded="true" aria-controls="collSistema">
      	<i class="fas fa-cogs fa-fw text-silver-darker"></i> SISTEMA
			</button>
    </h2>
    <div id="collSistema" class="accordion-collapse collapse" data-parent="#accordionParametros" aria-labelledby="head-sistema" data-bs-parent="#accordionParametros">
      <div class="accordion-body">
        <?php
        $attributes = array("id" => "frmParamSYS", "name" => "frmParamSYS", "onsubmit" => "return PostBackFrmGuardaParametros(this, event);");
        echo form_open("configuraciones/guarda_parametros_sistema", $attributes);
        ?>

        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-2">
                <div class="form-group">
                  <label for="lngCredencial" class="form-label">Longitud Credencial</label>
                  <input type="text" class="form-control form-control-sm inpt_entero" id="lngCredencial" name="lngCredencial" onkeypress="return dispara_tab(event, this);" placeholder="Longitud de la Credencial" required value="<?= $paramsysNomina->LongCredencial; ?>">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="lngNumEmpl" class="form-label">Longitud No. Empleado</label>
                  <input type="text" class="form-control form-control-sm inpt_entero" id="lngNumEmpl" name="lngNumEmpl" onkeypress="return dispara_tab(event, this);" placeholder="Longitud del del Número del Empleado" required value="<?= $paramsysNomina->LongNumEmpl; ?>">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="prmVac" class="form-label">ID Prima Vacacional</label>
                  <input type="text" class="form-control form-control-sm inpt_entero" id="prmVac" name="prmVac" onkeypress="return dispara_tab(event, this);" placeholder="id concepto prima vacacional" required value="<?= $paramsysNomina->ConcepPrimaVacID; ?>">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="sldBase" class="form-label">ID Sueldo Base</label>
                  <input type="text" class="form-control form-control-sm inpt_entero" id="sldBase" name="sldBase" onkeypress="return dispara_tab(event, this);" placeholder="id concepto sueldo base" required value="<?= $paramsysNomina->ConcepSueldoBase; ?>">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="lngPeriodoPago" class="form-label">Longitud Periodo Pago</label>
                  <input type="text" class="form-control form-control-sm inpt_entero" id="lngPeriodoPago" name="lngPeriodoPago" onkeypress="return dispara_tab(event, this);" placeholder="Longitud del periodo de pago" required value="<?= $paramsysNomina->LongPeriodoPago; ?>">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="clvHVesp" class="form-label">Clave Horario Vespertino</label>
                  <input type="text" class="form-control form-control-sm" id="clvHVesp" name="clvHVesp" onkeypress="return dispara_tab(event, this);" placeholder="Clave Horario Vespertino" required value="<?= $paramsysNomina->TurnoHV; ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-2">
                <div class="form-group">
                  <label for="salmin" class="form-label">Salario Mínimo</label>
                  <input type="text" class="form-control form-control-sm inpt_moneda" id="salmin" name="salmin" onkeypress="return dispara_tab(event, this);" placeholder="Salario Mínimo" required value="<?= $paramsysNomina->SalarioMinimo; ?>">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="txtUMA" class="form-label">UMA</label>
                  <input type="text" class="form-control form-control-sm inpt_moneda" id="txtUMA" name="txtUMA" onkeypress="return dispara_tab(event, this);" placeholder="UMA" required value="<?= (empty($paramsysNomina->UMA) ? '' : $paramsysNomina->UMA); ?>">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="mntBNat" class="form-label">Monto bono por natalicio</label>
                  <input type="text" class="form-control form-control-sm inpt_moneda" id="mntBNat" name="mntBNat" onkeypress="return dispara_tab(event, this);" placeholder="Monto bono por natalicio" required value="<?= $paramsysNomina->MontoCumpleanios; ?>">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="mntVM" class="form-label">Monto vales mensual</label>
                  <input type="text" class="form-control form-control-sm inpt_moneda" id="mntVM" name="mntVM" onkeypress="return dispara_tab(event, this);" placeholder="Monto vales mensual" required value="<?= $paramsysNomina->MontoValesDespensa; ?>">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="factsub" class="form-label">Factor Subsidio Acreditable</label>
                  <input type="text" class="form-control form-control-sm inpt_moneda" id="factsub" name="factsub" onkeypress="return dispara_tab(event, this);" placeholder="Factor Subsidio Acreditable" required value="<?= $paramsysNomina->FactorSubsidioAcreditable; ?>">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="clvtodosmovim" class="form-label">Clave Todos Movimientos</label>
                  <input type="text" class="form-control form-control-sm" id="clvtodosmovim" name="clvtodosmovim" onkeypress="return dispara_tab(event, this);" placeholder="Clave Todos Movimientos" required value="<?= $paramsysNomina->TodosMovim; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-2 text-truncate">
                <div class="form-group">
                  <label for="apISSTEY" class="form-label" data-bs-toggle="tooltip" title="Aportación ISSTEY en transición">Aportación ISSTEY</label>
                  <input type="text" class="form-control form-control-sm inpt_moneda" id="apISSTEY" name="apISSTEY" onkeypress="return dispara_tab(event, this);" placeholder="Aportación ISSTEY (en transición)" required value="<?= floatval($paramsysNomina->AportacionISSTEY); ?>" data-bs-toggle="tooltip" title="Aportación ISSTEY en transición">
                </div>
              </div>
              <div class="col-2 text-truncate">
                <div class="form-group">
                  <label for="topeISSTEY" class="form-label" data-bs-toggle="tooltip" title="Tope ISSTEY en transición">Tope ISSTEY</label>
                  <input type="text" class="form-control form-control-sm inpt_moneda" id="topeISSTEY" name="topeISSTEY" onkeypress="return dispara_tab(event, this);" placeholder="Tope ISSTEY (en transición)" required value="<?= (empty($paramsysNomina->topeISSTEY) ? '' : $paramsysNomina->topeISSTEY); ?>" data-bs-toggle="tooltip" title="Tope ISSTEY en transición">
                </div>
              </div>
							<div class="col-2 text-truncate">
								<div class="form-group">
									<label for="apISSTEY2" class="form-label" data-bs-toggle="tooltip" title="Aportación ISSTEY no en transición">Aportación ISSTEY 2 (no en Transición)</label>
									<input type="text" class="form-control form-control-sm inpt_moneda" id="apISSTEY2" name="apISSTEY2" onkeypress="return dispara_tab(event, this);" placeholder="Aportación ISSTEY" required value="<?= floatval($paramsysNomina->AportacionISSTEY2); ?>" data-bs-toggle="tooltip" title="Aportación ISSTEY no en transición">
								</div>
							</div>
							<div class="col-2 text-truncate">
								<div class="form-group">
									<label for="topeISSTEY2" class="form-label">Tope ISSTEY 2 (no en Transición)</label>
									<input type="text" class="form-control form-control-sm inpt_moneda" id="topeISSTEY2" name="topeISSTEY2" onkeypress="return dispara_tab(event, this);" placeholder="Tope ISSTEY" required value="<?= (empty($paramsysNomina->topeISSTEY2) ? '' : $paramsysNomina->topeISSTEY2); ?>" data-bs-toggle="tooltip" title="Tope ISSTEY no en transición">
								</div>
							</div>
							<div class="col-2 text-truncate">
								<div class="form-group">
								<label for="porcAportT" class="form-label" data-bs-toggle="tooltip" title="Porcentaje Aportación en Transición">Porcentaje Aportación en Transición</label>
									<input type="text" class="form-control form-control-sm inpt_moneda" id="porcAportT" name="porcAportT" onkeypress="return dispara_tab(event, this);" placeholder="Porcentaje Aportación en Transición" required value="<?= floatval($paramsysNomina->PorcAportTrans); ?>" data-bs-toggle="tooltip" title="Aportación ISSTEY">
								</div>
							</div>
							<div class="col-2 text-truncate">
								<div class="form-group">
									<label for="porcAportNT" class="form-label" data-bs-toggle="tooltip" title="Porcentaje Aportación no en Transición">Porcentaje Aportación no en Transición</label>
									<input type="text" class="form-control form-control-sm inpt_moneda" id="porcAportNT" name="porcAportNT" onkeypress="return dispara_tab(event, this);" placeholder="Porcentaje de aportación no en transición" required value="<?= (empty($paramsysNomina->PorcAportNoTrans) ? '' : $paramsysNomina->PorcAportNoTrans); ?>" data-bs-toggle="tooltip" title="Tope ISSTEY">
								</div>
							</div>
            </div>
						<div class="row">
							<div class="col-2">
								<div class="form-group">
									<label for="apISSTEY3" class="form-label" data-bs-toggle="tooltip" title="Aportación ISSTEY 3 (beneficios adquiridos)">Aportación ISSTEY 3 (beneficios adquiridos)</label>
									<input type="text" class="form-control form-control-sm inpt_moneda" id="apISSTEY3" name="apISSTEY3" onkeypress="return dispara_tab(event, this);" placeholder="Aportación ISSTEY (beneficios adquiridos)" required value="<?= floatval($paramsysNomina->AportacionISSTEY3); ?>" data-bs-toggle="tooltip" title="Aportación ISSTEY (beneficios adquiridos)">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="topeISSTEY3" class="form-label" data-bs-toggle="tooltip" title="Tope ISSTEY 3 (beneficios adquiridos)">Tope ISSTEY 3 (beneficios adquiridos)</label>
									<input type="text" class="form-control form-control-sm inpt_moneda" id="topeISSTEY3" name="topeISSTEY3" onkeypress="return dispara_tab(event, this);" placeholder="Tope ISSTEY (beneficios adquiridos)" required value="<?= (empty($paramsysNomina->topeISSTEY3) ? '' : $paramsysNomina->topeISSTEY3); ?>" data-bs-toggle="tooltip" title="Tope ISSTEY (beneficios adquiridos)">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="mntBDef" class="form-label">Monto Defunción</label>
									<input type="text" class="form-control form-control-sm inpt_moneda" id="mntBDef" name="mntBDef" onkeypress="return dispara_tab(event, this);" placeholder="Monto apoyo económico por gastos de defunción." required value="<?= (empty($paramsysNomina->MontoDefuncion) ? 0 : $paramsysNomina->MontoDefuncion); ?>">
								</div>
							</div>
						</div>

            <hr/>

            <div class="row" style="display:none;">
              <div class="col-3">
                <div class="form-group">
                  <label for="handT" class="form-label">Ruta del Rawdata Hand Tribunal</label>
                  <input type="text" class="form-control form-control-sm" id="handT" name="handT" onkeypress="return dispara_tab(event, this);" placeholder="Ruta del Rawdata Hand Tribunal" required value="<?= $paramsysNomina->RutaRawdata; ?>">
                </div>
              </div>
              <div class="col-3">
                <div class="form-group">
                  <label for="handP" class="form-label">Ruta del Rawdata Hand Penal Fuente</label>
                  <input type="text" class="form-control form-control-sm" id="handP" name="handP" onkeypress="return dispara_tab(event, this);" placeholder="Ruta del Rawdata Hand Penal Fuente" required value="<?= $paramsysNomina->RutaRawdataPenalOrigen; ?>">
                </div>
              </div>
              <div class="col-3">
                <div class="form-group">
                  <label for="rtFotos" class="form-label">Ruta Fotos</label>
                  <input type="text" class="form-control form-control-sm" id="rtFotos" name="rtFotos" onkeypress="return dispara_tab(event, this);" placeholder="Ruta Fotos" required value="<?= $paramsysNomina->RutaFotos; ?>">
                </div>
              </div>
              <div class="col-3">
                <div class="form-group">
                  <label for="rtPlant" class="form-label">Ruta Plantillas</label>
                  <input type="text" class="form-control form-control-sm" id="rtPlant" name="rtPlant" onkeypress="return dispara_tab(event, this);" placeholder="Ruta Plantillas" required value="<?= $paramsysNomina->RutaPlantillas; ?>">
                </div>
              </div>
            </div>

            <div class="row" style="display:none;">
              <div class="col-3">
                <div class="form-group">
                  <label for="rtSIASA" class="form-label">Ruta del Rawdata SIASA</label>
                  <input type="text" class="form-control form-control-sm" id="rtSIASA" name="rtSIASA" onkeypress="return dispara_tab(event, this);" placeholder="Ruta del Rawdata SIASA<" required value="<?= $paramsysNomina->RutaRawdataSIASA; ?>">
                </div>
              </div>
              <div class="col-3">
                <div class="form-group">
                  <label for="handPdest" class="form-label">Ruta del Rawdata Hand Penal Destino</label>
                  <input type="text" class="form-control form-control-sm" id="handPdest" name="handPdest" onkeypress="return dispara_tab(event, this);" placeholder="Ruta del Rawdata Hand Penal Destino" required value="<?= $paramsysNomina->RutaRawdataPenalDestino; ?>">
                </div>
              </div>
              <div class="col-3">
                <div class="form-group">
                  <label for="rtArelec" class="form-label">Ruta Archivo Electrónico</label>
                  <input type="text" class="form-control form-control-sm" id="rtArelec" name="rtArelec" onkeypress="return dispara_tab(event, this);" placeholder="Ruta Archivo Electrónico" required value="<?= $paramsysNomina->RutaArchivoElec; ?>">
                </div>
              </div>
              <div class="col-3">
                <div class="form-group">
                  <label for="rtOficios" class="form-label">Ruta Oficios</label>
                  <input type="text" class="form-control form-control-sm" id="rtOficios" name="rtOficios" onkeypress="return dispara_tab(event, this);" placeholder="Ruta Oficios" required value="<?= $paramsysNomina->RutaOficios; ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-3">
                <div class="form-group">
                  <label for="ccAcr" class="form-label">Cuenta Contable Acreedores</label>
                  <input type="text" class="form-control form-control-sm" id="ccAcr" name="ccAcr" onkeypress="return dispara_tab(event, this);" placeholder="Cuenta Contable Acreedores" required value="<?= $paramsysNomina->PartidaContable; ?>">
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer fw-600 text-end">
            <button class="btn bt btn-success"><i class="far fa-save"></i> Guardar</button>
          </div>
        </div>
        <?php
        echo form_close();
        ?>
      </div>
    </div>
  </div>

	<div class="accordion-item">
    <h2 class="accordion-header pointer-cursor" id="head-conceptos">
			<button class="accordion-button bg-gradient-black text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collConceptos" aria-expanded="true" aria-controls="collConceptos">
      	<i class="fas fa-cogs fa-fw"></i> CONCEPTOS
			</button>
    </h2>
    <div id="collConceptos" class="accordion-collapse collapse" data-parent="#accordionParametros" aria-labelledby="head-conceptos" data-bs-parent="#accordionParametros">
      <div class="accordion-body">
				<?php
        $attributes = array("id" => "frmConceptos", "name" => "frmConceptos", "onsubmit" => "return PostBackFrmGuardaParametros(this, event);");
        echo form_open("configuraciones/guarda_conceptos", $attributes);
        ?>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-2">
                <div class="form-group">
                  <label for="txtSueldBase" class="form-label">Sueldo Base</label>
                  <input type="text" class="form-control form-control-sm inpt_entero" id="txtSueldBase" name="txtSueldBase" onkeypress="return dispara_tab(event, this);" placeholder="Longitud de la Credencial" required value="<?= $paramsistema->SueldoBase; ?>" autocomplete="off">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="txtCompensacion" class="form-label">Compensación</label>
                  <input type="text" class="form-control form-control-sm inpt_entero" id="txtCompensacion" name="txtCompensacion" onkeypress="return dispara_tab(event, this);" placeholder="Compensación" required value="<?= $paramsistema->Compensacion; ?>" autocomplete="off">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="txtPVac" class="form-label">Prima Vacacional</label>
                  <input type="text" class="form-control form-control-sm inpt_entero" id="txtPVac" name="txtPVac" onkeypress="return dispara_tab(event, this);" placeholder="Prima Vacacional" required value="<?= $paramsistema->PrimaVacacional; ?>" autocomplete="off">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="txtGratif" class="form-label">Gratificaciones</label>
                  <input type="text" class="form-control form-control-sm inpt_entero" id="txtGratif" name="txtGratif" onkeypress="return dispara_tab(event, this);" placeholder="Gratificaciones" required value="<?= $paramsistema->Compensacion2; ?>" autocomplete="off">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="txtHE" class="form-label">Horas Extra</label>
                  <input type="text" class="form-control form-control-sm inpt_entero" id="txtHE" name="txtHE" onkeypress="return dispara_tab(event, this);" placeholder="Horas Extra" required value="<?= $paramsistema->HorasExtra; ?>" autocomplete="off">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="txtFaltas" class="form-label">Faltas</label>
                  <input type="text" class="form-control form-control-sm inpt_entero" id="txtFaltas" name="txtFaltas" onkeypress="return dispara_tab(event, this);" placeholder="Faltas" required value="<?= $paramsistema->Faltas; ?>" autocomplete="off">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-2">
                <div class="form-group">
                  <label for="txtRetardos" class="form-label">Retardos</label>
                  <input type="text" class="form-control form-control-sm inpt_entero" id="txtRetardos" name="txtRetardos" onkeypress="return dispara_tab(event, this);" placeholder="Retardos" required value="<?= $paramsistema->Retardos; ?>" autocomplete="off">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="txtISSTEY" class="form-label">ISSTEY</label>
                  <input type="text" class="form-control form-control-sm inpt_entero" id="txtISSTEY" name="txtISSTEY" onkeypress="return dispara_tab(event, this);" placeholder="ISSTEY" required value="<?= $paramsistema->AportISSTEY; ?>" autocomplete="off">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="txtISPT" class="form-label">ISPT</label>
                  <input type="text" class="form-control form-control-sm inpt_entero" id="txtISPT" name="txtISPT" onkeypress="return dispara_tab(event, this);" placeholder="ISPT" required value="<?= $paramsistema->ISPT; ?>" autocomplete="off">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="txtCreditoSalario" class="form-label">Crédito al Salario</label>
                  <input type="text" class="form-control form-control-sm inpt_entero" id="txtCreditoSalario" name="txtCreditoSalario" onkeypress="return dispara_tab(event, this);" placeholder="Crédito al Salario" required value="<?= $paramsistema->CreditoSalario; ?>" autocomplete="off">
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label for="txtSBPrest" class="form-label">Sueldo Base Prestadores</label>
                  <input type="text" class="form-control form-control-sm inpt_entero" id="txtSBPrest" name="txtSBPrest" onkeypress="return dispara_tab(event, this);" placeholder="Sueldo Base Prestador Servicios" required value="<?= $paramsistema->SueldoBasePS; ?>" autocomplete="off">
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer f-w-600 text-end">
            <button class="btn btn-success"><i class="far fa-save"></i> Guardar</button>
          </div>
        </div>

        <?php
        echo form_close();
        ?>
			</div>
		</div>
	</div>

	<div class="accordion-item">
    <h2 class="accordion-header pointer-cursor" id="head-movimientos">
			<button class="accordion-button bg-gradient-black text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collMovimientos" aria-expanded="true" aria-controls="collMovimientos">
      	<i class="fas fa-cogs fa-fw"></i> MOVIMIENTOS
			</button>
    </h2>
    <div id="collMovimientos" class="accordion-collapse collapse" data-parent="#accordionParametros" aria-labelledby="head-movimientos" data-bs-parent="#accordionParametros">
      <div class="accordion-body">
				<?php
				$attributes = array("id" => "frmMovimientos", "name" => "frmMovimientos", "onsubmit" => "return PostBackFrmGuardaParametros(this, event);");
				echo form_open("configuraciones/guarda_movimientosRH", $attributes);
				?>

				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-2">
								<div class="form-group">
									<label for="txtNuevoEmpleado"><b>Nuevo Empleado</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtNuevoEmpleado" name="txtNuevoEmpleado" onkeypress="return dispara_tab(event, this);" placeholder="Nuevo Empleado" required value="<?= $paramMovsRH->NuevoEmpleado; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtContrato"><b>Contrato</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtContrato" name="txtContrato" onkeypress="return dispara_tab(event, this);" placeholder="Contrato" required value="<?= $paramMovsRH->Contrato; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtApoyo"><b>Apoyo</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtApoyo" name="txtApoyo" onkeypress="return dispara_tab(event, this);" placeholder="Apoyo" required value="<?= $paramMovsRH->Apoyo; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtBase"><b>Base</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtBase" name="txtBase" onkeypress="return dispara_tab(event, this);" placeholder="Base" required value="<?= $paramMovsRH->Base; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtComision"><b>Comisión</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtComision" name="txtComision" onkeypress="return dispara_tab(event, this);" placeholder="Comisión" required value="<?= $paramMovsRH->Comision; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtComisionI"><b>Comisión Indefinida</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtComisionI" name="txtComisionI" onkeypress="return dispara_tab(event, this);" placeholder="Comisión Indefinida" required value="<?= $paramMovsRH->ComisionIndefinida; ?>" autocomplete="off">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-2">
								<div class="form-group">
									<label for="txtCambioAdq"><b>Cambio de Adscripción</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtCambioAdq" name="txtCambioAdq" onkeypress="return dispara_tab(event, this);" placeholder="Cambio de Adscripción" required value="<?= $paramMovsRH->CambioAdscripcion; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtNomInd"><b>Nombramiento Indefinido</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtNomInd" name="txtNomInd" onkeypress="return dispara_tab(event, this);" placeholder="Nombramiento Indefinido" required value="<?= $paramMovsRH->NombramientoIndefinido; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtCompRH"><b>Compensación</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtCompRH" name="txtCompRH" onkeypress="return dispara_tab(event, this);" placeholder="Compensación" required value="<?= $paramMovsRH->Compensacion; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtVac"><b>Vacaciones</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtVac" name="txtVac" onkeypress="return dispara_tab(event, this);" placeholder="Vacaciones" required value="<?= $paramMovsRH->Vacaciones; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtInc"><b>Incapacidad</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtInc" name="txtInc" onkeypress="return dispara_tab(event, this);" placeholder="Incapacidad" required value="<?= $paramMovsRH->Incapacidad; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtHV"><b>Horario Vespertino</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtHV" name="txtHV" onkeypress="return dispara_tab(event, this);" placeholder="Horario Vespertino" required value="<?= $paramMovsRH->HorararioVesp; ?>" autocomplete="off">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-2">
								<div class="form-group">
									<label for="txtLICS"><b>Lic. SIN goce de Sueldo</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtLICS" name="txtLICS" onkeypress="return dispara_tab(event, this);" placeholder="Lic. SIN goce de Sueldo" required value="<?= $paramMovsRH->LicenciaSin; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtLICC"><b>Lic. CON goce de Sueldo</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtLICC" name="txtLICC" onkeypress="return dispara_tab(event, this);" placeholder="Lic. CON goce de Sueldo" required value="<?= $paramMovsRH->LicenciaCon; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtRenuncia"><b>Renuncia</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtRenuncia" name="txtRenuncia" onkeypress="return dispara_tab(event, this);" placeholder="Renuncia" required value="<?= $paramMovsRH->Renuncia; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtDespido"><b>Despido</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtDespido" name="txtDespido" onkeypress="return dispara_tab(event, this);" placeholder="Despido" required value="<?= $paramMovsRH->Despido; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtPension"><b>Pensión</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtPension" name="txtPension" onkeypress="return dispara_tab(event, this);" placeholder="Pensión" required value="<?= $paramMovsRH->Pension; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtJub"><b>Jubilación</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtJub" name="txtJub" onkeypress="return dispara_tab(event, this);" placeholder="Jubilación" required value="<?= $paramMovsRH->Jubilacion; ?>" autocomplete="off">
								</div>
							</div>
						</div>

					</div>
					<div class="card-footer f-w-600 text-end">
						<button class="btn btn-success"><i class="far fa-save"></i> Guardar</button>
					</div>
				</div>

				<?php
				echo form_close();
				?>
			</div>
		</div>
	</div>

	<div class="accordion-item">
    <h2 class="accordion-header pointer-cursor" id="head-tiposnomina">
			<button class="accordion-button bg-gradient-black text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collTiposNomina" aria-expanded="true" aria-controls="collTiposNomina">
      	<i class="fas fa-cogs fa-fw"></i> TIPOS DE NÓMINA
			</button>
    </h2>
    <div id="collTiposNomina" class="accordion-collapse collapse" data-parent="#accordionParametros" aria-labelledby="head-tiposnomina" data-bs-parent="#accordionParametros">
      <div class="accordion-body">
				<?php
				$attributes = array("id" => "frmTiposNomina", "name" => "frmTiposNomina", "onsubmit" => "return PostBackFrmGuardaParametros(this, event);");
				echo form_open("configuraciones/guarda_tiposnomina", $attributes);
				?>

				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-2">
								<div class="form-group">
									<label for="txtTipoNomSB"><b>Sueldo Base</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtTipoNomSB" name="txtTipoNomSB" onkeypress="return dispara_tab(event, this);" placeholder="Sueldo Base" required value="<?= $paramtiposnom->TipoNomSueldoBase; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtTipoNomComp"><b>Compensación</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtTipoNomComp" name="txtTipoNomComp" onkeypress="return dispara_tab(event, this);" placeholder="Compensación" required value="<?= $paramtiposnom->TipoNomCompensacion; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtTipoNomHV"><b>Horas Extra</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtTipoNomHV" name="txtTipoNomHV" onkeypress="return dispara_tab(event, this);" placeholder="Horas Extra" required value="<?= $paramtiposnom->TipoNomHV; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtTipoNomGrat"><b>Gratificación</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtTipoNomGrat" name="txtTipoNomGrat" onkeypress="return dispara_tab(event, this);" placeholder="Gratificación" required value="" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtTipoNomAg"><b>Aguinaldo</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtTipoNomAg" name="txtTipoNomAg" onkeypress="return dispara_tab(event, this);" placeholder="Aguinaldo" required value="<?= $paramtiposnom->TipoNomAguinaldo; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtTipoNomSBPrest"><b>Sueldo Base Prestador</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtTipoNomSBPrest" name="txtTipoNomSBPrest" onkeypress="return dispara_tab(event, this);" placeholder="Sueldo Base Prestador" required value="<?= $paramtiposnom->TipoNomSueldoBasePrestador; ?>" autocomplete="off">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-2">
								<div class="form-group">
									<label for="txtTipoNomBonoC"><b>Bono Cuatrimestral</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtTipoNomBonoC" name="txtTipoNomBonoC" onkeypress="return dispara_tab(event, this);" placeholder="Bono Cuatrimestral" required value="<?= $paramtiposnom->TipoNomBonoCuatri; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtTipoNomAnt"><b>Prima de Antigüedad</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtTipoNomAnt" name="txtTipoNomAnt" onkeypress="return dispara_tab(event, this);" placeholder="Prima de Antigüedad" required value="<?= $paramtiposnom->TipoNomAntiguedad; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtTipoNomPagoExt"><b>Pago Extraordinario</b></label>
									<input type="text" class="form-control form-control-sm inpt_entero" id="txtTipoNomPagoExt" name="txtTipoNomPagoExt" onkeypress="return dispara_tab(event, this);" placeholder="Pago Extraordinario" required value="<?= $paramtiposnom->TipoNomCompensacion2; ?>" autocomplete="off">
								</div>
							</div>
						</div>

					</div>
					<div class="card-footer f-w-600 text-end">
						<button class="btn btn-success"><i class="far fa-save"></i> Guardar</button>
					</div>
				</div>
				<?php
				echo form_close();
				?>
			</div>
		</div>
	</div>

	<div class="accordion-item">
		<h2 class="accordion-header pointer-cursor" id="head-nominaelect">
			<button class="accordion-button bg-gradient-black text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collNominaElect" aria-expanded="true" aria-controls="collNominaElect">
				<i class="fas fa-cogs fa-fw"></i> NÓMINA ELECTRÓNICA
			</button>
		</h2>
		<div id="collNominaElect" class="accordion-collapse collapse" data-parent="#accordionParametros" aria-labelledby="head-nominaelect" data-bs-parent="#accordionParametros">
			<div class="accordion-body">
				<?php
				$attributes = array("id" => "frmNominaElec", "name" => "frmNominaElec", "onsubmit" => "return PostBackFrmGuardaParametros(this, event);");
				echo form_open("configuraciones/guarda_nominaelectronica", $attributes);
				?>
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-2">
								<div class="form-group">
									<label for="txtPlazaOp"><b>Plaza Operativa</b></label>
									<input type="text" class="form-control form-control-sm" id="txtPlazaOp" name="txtPlazaOp" onkeypress="return dispara_tab(event, this);" placeholder="Plaza Operativa" required value="<?= $paramEnom->PlazaOperativa; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtMoneda"><b>Moneda</b></label>
									<input type="text" class="form-control form-control-sm" id="txtMoneda" name="txtMoneda" onkeypress="return dispara_tab(event, this);" placeholder="Moneda" required value="<?= $paramEnom->moneda; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtCodTrans"><b>Cod. Transacción</b></label>
									<input type="text" class="form-control form-control-sm" id="txtCodTrans" name="txtCodTrans" onkeypress="return dispara_tab(event, this);" placeholder="Cod. Transacción" required value="<?= $paramEnom->codTransaccion; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtNumLote"><b>No. Lote</b></label>
									<input type="text" class="form-control form-control-sm" id="txtNumLote" name="txtNumLote" onkeypress="return dispara_tab(event, this);" placeholder="No. Lote" required value="<?= $paramEnom->NumLote; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtRegId"><b>Registro</b></label>
									<input type="text" class="form-control form-control-sm" id="txtRegId" name="txtRegId" onkeypress="return dispara_tab(event, this);" placeholder="Registro" required value="<?= $paramEnom->RegistroId; ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<label for="txtPzaCueEmp"><b>Plaza Cuenta Empleado</b></label>
									<input type="text" class="form-control form-control-sm" id="txtPzaCueEmp" name="txtPzaCueEmp" onkeypress="return dispara_tab(event, this);" placeholder="Plaza Cuenta Empleado" required value="<?= $paramEnom->plazaCuentaEmp; ?>" autocomplete="off">
								</div>
							</div>
						</div>

					<div class="row">
						<div class="col-2">
							<div class="form-group">
								<label for="txtFiller1"><b>Filler 1</b></label>
								<input type="text" class="form-control form-control-sm" id="txtFiller1" name="txtFiller1" onkeypress="return dispara_tab(event, this);" placeholder="Filler 1" value="<?= $paramEnom->filler1; ?>" autocomplete="off">
							</div>
						</div>
						<div class="col-2">
							<div class="form-group">
								<label for="txtRef"><b>Referencia</b></label>
								<input type="text" class="form-control form-control-sm" id="txtRef" name="txtRef" onkeypress="return dispara_tab(event, this);" placeholder="Referencia" value="<?= $paramEnom->Referencia; ?>" autocomplete="off">
							</div>
						</div>
						<div class="col-2">
							<div class="form-group">
								<label for="txtFiller2"><b>Filler 2</b></label>
								<input type="text" class="form-control form-control-sm" id="txtFiller2" name="txtFiller2" onkeypress="return dispara_tab(event, this);" placeholder="Filler 2" value="<?= $paramEnom->filler2; ?>" autocomplete="off">
							</div>
						</div>
						<div class="col-2">
							<div class="form-group">
								<label for="txtConcepto"><b>Concepto</b></label>
								<input type="text" class="form-control form-control-sm" id="txtConcepto" name="txtConcepto" onkeypress="return dispara_tab(event, this);" placeholder="Concepto" value="<?= $paramEnom->concepto; ?>" autocomplete="off">
							</div>
						</div>
						<div class="col-2">
							<div class="form-group">
								<label for="txtFiller3"><b>Filler 3</b></label>
								<input type="text" class="form-control form-control-sm" id="txtFiller3" name="txtFiller3" onkeypress="return dispara_tab(event, this);" placeholder="Filler 3" required value="<?= $paramEnom->Filler3; ?>" autocomplete="off">
							</div>
						</div>
						<div class="col-2">
							<div class="form-group">
								<label for="txtCuentaCorp"><b>Cuenta Corporativa</b></label>
								<input type="text" class="form-control form-control-sm" id="txtCuentaCorp" name="txtCuentaCorp" onkeypress="return dispara_tab(event, this);" placeholder="Cuenta Corporativa" required value="<?= $paramEnom->CuentaCorporativa; ?>" autocomplete="off">
							</div>
						</div>
					</div>

					</div>
					<div class="card-footer f-w-600 text-end">
						<button class="btn btn-success"><i class="far fa-save"></i> Guardar</button>
					</div>
				</div>
				<?php
				echo form_close();
				?>
			</div>
		</div>
	</div>
	<!-- cierra acordion item nómina electrónica -->

	<div class="accordion-item" style="display:none;">
		<h2 class="accordion-header pointer-cursor" id="head-nominaelect">
			<button class="accordion-button bg-gradient-black text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collGenerales" aria-expanded="true" aria-controls="collGenerales">
				<i class="fas fa-cogs fa-fw"></i> GENERALES
			</button>
		</h2>
		<div id="collGenerales" class="accordion-collapse collapse" data-parent="#accordionParametros" aria-labelledby="head-generales" data-bs-parent="#accordionParametros">
			<div class="accordion-body">
				<?php
				$attributes = array("id" => "frmParametrosGenerales", "name" => "frmParametrosGenerales", "onsubmit" => "return PostBackFrmGuardaParametros(this, event);");
				echo form_open("configuraciones/guarda_parametros_generales", $attributes);
				?>
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-3">
								<div class="form-group">
									<label for="fechainiV1p" class="form-label">Fecha Inicial de Vacaciones 1er Período</label>
									<input type="text" class="form-control form-control-sm fechaV" id="fechainiV1p" name="fechainiV1p" onkeypress="return dispara_tab(event, this);" placeholder="Fecha Inicial de Vacaciones 1er Período" required value="<?= (empty($paramGral['FIVAC1P']['Valor']) ? "" : $paramGral['FIVAC1P']['Valor']); ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-3">
								<div class="form-group">
									<label for="fechafinV1p" class="form-label">Fecha Final de Vacaciones 1er Período</label>
									<input type="text" class="form-control form-control-sm fechaV" id="fechafinV1p" name="fechafinV1p" onkeypress="return dispara_tab(event, this);" placeholder="Fecha Final de Vacaciones 1er Período" required value="<?= (empty($paramGral['FFVAC1P']['Valor']) ? "" : $paramGral['FFVAC1P']['Valor']); ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-3">
								<div class="form-group">
									<label for="fechainiV2p" class="form-label">Fecha Inicial de Vacaciones 2o Período</label>
									<input type="text" class="form-control form-control-sm fechaV" id="fechainiV2p" name="fechainiV2p" onkeypress="return dispara_tab(event, this);" placeholder="Fecha Inicial de Vacaciones 2o Período" required value="<?= (empty($paramGral['FIVAC2P']['Valor']) ? "" : $paramGral['FIVAC2P']['Valor']); ?>" autocomplete="off">
								</div>
							</div>
							<div class="col-3">
								<div class="form-group">
									<label for="fechafinV2p" class="form-label">Fecha Final de Vacaciones 2o Período</label>
									<input type="text" class="form-control form-control-sm fechaV" id="fechafinV2p" name="fechafinV2p" onkeypress="return dispara_tab(event, this);" placeholder="Fecha Final de Vacaciones 2o Período" required value="<?= (empty($paramGral['FFVAC2P']['Valor']) ? "" : $paramGral['FFVAC2P']['Valor']); ?>" autocomplete="off">
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer f-w-600 text-end">
						<button class="btn btn-success"><i class="far fa-save"></i> Guardar</button>
					</div>
				</div>
				<?php
				echo form_close();
				?>
			</div>
		</div>
	</div>
	<!-- cierra acordion item generales -->



</div>
<!-- cierra accordion -->

<script type="text/javascript">
  $(".inpt_moneda").inputmask('currency',{rightAlign: false, allowMinus: false, max: 50000, shortcuts:'' });
  $(".inpt_entero").inputmask('integer',{rightAlign: false, allowMinus: false, max: 1000});

	$(".fechaV").datepicker({
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

  function PostBackFrmGuardaParametros(f,e) {
    e.preventDefault();

    var variables = $(f).serialize();

    Carga_Metodo(f.action, variables, "", "Guardando...");
    return false;
  }

</script>
