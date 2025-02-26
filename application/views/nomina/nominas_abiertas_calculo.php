<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <!-- <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <button type="button" class="btn btn-success btn-sm" onclick="ActualizarNominas();" title="Actualizar la fecha de pago"><i class="fas fa-sync"></i> Actualizar</button>
            </div>
          </div>
        </div> -->
        <div class="table-responsive">
          <table id="tblNominasAbiertas" class="table table-bordered compact" cellspacing="0" width="100%" style="display:none;">
             <thead>
               <tr>
                 <th>idDetNomina</th>
                 <th>Descripción</th>
                 <th>¿Nómina Cerrada?</th>
                 <th>Cerrada</th>
								 <th>¿Nómina Confirmada?</th>
								 <th>Confirmada</th>
                 <th>idTipoNomina</th>
                 <th>Fecha de Pago</th>
								 <th></th>
               </tr>
             </thead>
             <tbody><?php
               if( $nominas ):;
                 foreach( $nominas as $item ):;?>
                   <tr>
                     <td><?= $item->IdDetNomina; ?></td>
                     <td><?= $item->Descripcion; ?></td>
                     <td><?= (!empty($item->Cerrada) ? 'SÍ' : 'NO'); ?></td>
                     <td><?= $item->Cerrada; ?></td>
										 <td><?= (!empty($item->Confirmada) ? 'SÍ' : 'NO'); ?></td>
                     <td><?= $item->Confirmada; ?></td>
                     <td><?= $item->TipoNominaID; ?></td>
                     <td>
                       <input type="text" id="nomFechaPago_<?= $item->TipoNominaID; ?>" class="form-control fechaPago" value="<?= cambiaf_a_normal($item->FechaPago); ?>">
                     </td>
										 <td>
											 <?= (!empty($item->Confirmada) || !empty($item->Cerrada) ?
											 '' : '
											 <div class="btn-group" role="group" aria-label="Acciones">
												 <button type="button" class="btn btn-xs btn-inverse" title="Actualizar fecha de pago" onclick="ActualizarNominas(this);"><i class="fas fa-sync"></i> </button>
												  <button type="button" class="btn btn-xs btn-success" title="Confirmar el tipo de nómina" onclick="confirmar_nomina(this);"><i class="fa-solid fa-check"></i></button>
											 </div>');
											 ?>
										 </td>
                   </tr><?php
                 endforeach;
               endif;?>
             </tbody>
           </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
setTimeout(function FuncionesIniciales(){
  <?php
  if (empty($control->RegsIniciales) || empty($control->ConceptAntesImpu) || empty($control->Impuestos) || empty($control->ConceptDespImpu) || empty($control->ISSTEY))
    echo "$('#smartwizard').smartWizard('prev')";
  ?>

  if (!$.fn.dataTable.isDataTable( '#tblNominasAbiertas' )) {
    var tablaEmpAI = $('#tblNominasAbiertas').DataTable({
      initComplete: function() {
        $(".fechaPago").datepicker({
          format: "dd/mm/yyyy",
          weekStart: 1,
          maxViewMode: 3,
          language: "es",
          orientation: "bottom auto",
          autoclose: true,
          todayBtn: "linked",
          todayHighlight: true,
        }).inputmask({'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy', 'min':'01/01/1900'});
        $("#tblNominasAbiertas").show();
        this.api().columns.adjust().draw();
      },
      language: {
        "url": "assets/plugins/DataTables/Spanish.json",
        "processing": "Cargando..."
      },
      order: [0, 'asc'],
      responsive: 'true',
      processing: 'true',
      dom:'t',
      columnDefs: [
        { visible: false, targets: [0,3,5,6] },
        { searchable: false, targets: [0,3,5,6] },
        { sortable: false, targets: [0,3,5,6,8] }
      ]
    });
  }
});

function ActualizarNominas(obj) {
  let tablaNom 			= $('#tblNominasAbiertas').DataTable(),
			data          = tablaNom.row($(obj).parents('tr')).data(),
			idDetNomina 	= data[0],
			cerrada 			= data[3],
			idTipoNomina	= data[6],
			descripcion		= data[1],
      fecha 				= $('#nomFechaPago_'+idTipoNomina).val();
	if (fecha == "") { alerta_emergente("Debe capturar una fecha de pago.","warning"); }
  else {
		Carga_Metodo("<?=base_url();?>nomina/actualizar_nominas",
			{idDetNomina:idDetNomina,cerrada:cerrada,fecha:fecha,descripcion:descripcion},
			function finalizaProceso(data) {
				if (data.status == false) { alerta_emergente(data.message, "warning"); }
				else {
					alerta_emergente(data.message, "success");
					CargaNominasAbiertas();
				}
			},"Procesando*Actualizando Nómina...");
	}
	return false;
}

function confirmar_nomina(obj) {
	let tabla         = $('#tblNominasAbiertas').DataTable(),
			data          = tabla.row($(obj).parents('tr')).data(),
			idTipoNomina	= data[6],
			confirmada		= data[5];

	if (typeof(confirmada) == 1) {
    alerta_emergente("No se puede volver a confirmar este tipo de nómina.","warning")
    return false;
  }

	swal.fire({
		title: "Alerta",
		text: "¿Desea confirmar el tipo de nómina "+data[1]+" (este proceso no puede ser revertido)?",
		icon: "question",
		showCancelButton: true,
	}).then(result => {
		if (result.value) {
			Carga_Metodo('nomina/confirmar_nomina',
									 {idTipoNomina:idTipoNomina},
									 function finalizaProceso(data) {
										 if (data.status == false) { alerta_emergente(data.message, "warning"); }
										 else {
											 alerta_emergente(data.message, "success");
								 			 CargaNominasAbiertas();
										 }
									 },
									 "Confirmando Nómina...");
		}
	}).catch(swal.noop);
	return false;
}

</script>
