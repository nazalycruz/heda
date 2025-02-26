
<div id="divEnvios" class="panel panel-inverse">
  <div class="panel-heading">
    <h4 class="panel-title"><b>Beneficios solicitados - <?=$anio_beneficios?></b></h4>
  </div>
  <div class="panel-body">

     <table id="tblListadoBeneficios" class="table table-bordered table-striped table-condensed">
        <thead>
          <tr>
            <th>Credencial</th>
            <th>Empleado</th>
            <th>Beneficiario</th>
            <th class="text-center col-xs-1 no-sort">Guard.</th>
            <th class="text-center no-sort">Útiles</th>
            <th class="text-center no-sort">Beca</th>
          </tr>
        </thead>
        <tbody><?php
          if($beneficios):;
            foreach( $beneficios as $item ):;?>
              <tr>
                <td><?= $item->Credencial; ?></td>
                <td><?= LimpiaCadena($item->Empleado); ?></td>
                <td><?= LimpiaCadena($item->Estudiante); ?></td>
                <td class="text-center"><img src="<?=base_url();?>assets/img/<?=($item->SeConcedeGuarderia=='SI'?'si.png':'no.png')?>"></td>
                <td class="text-center"><img src="<?=base_url();?>assets/img/<?=($item->SeConcedeUtiles=='SI'?'si.png':'no.png')?>"></td>
                <td class="text-center"><img src="<?=base_url();?>assets/img/<?=($item->SeConcedeBeca=='SI'?'si.png':'no.png')?>"></td>
              </tr><?php
            endforeach;
          endif;?>
        </tbody>
      </table>

  </div>

  <div class="panel-footer">
    <button type="button" class="btn btn-success" onclick="GenerarExcelBeneficios();" title="Generar archivo de Excel"><i class="fa fa-file-excel-o"></i> Generar Excel</button>
  </div>

</div>

<!-- #modal-dialog large -->
<div class="modal fade" data-backdrop="static" id="pnlModalLg">
  <div class="modal-dialog modal-lg">
    <div id="pnlModalContentLg" class="modal-content">

    </div>
  </div>
</div>

<!-- #modal-dialog large -->
<div class="modal fade" data-backdrop="static" id="pnlModal">
  <div class="modal-dialog">
    <div id="pnlModalContent" class="modal-content">

    </div>
  </div>
</div>

<script>

  setTimeout(function inicializarTablas(){
    inicializaDatatable('tblListadoBeneficios',20,true);

  });

  function GenerarExcelBeneficios(){
    var presupuestoid = $("#presupuestoid").val();

        $form = $('<form></form>');
        $form.attr('action',"<?=base_url();?>inicio/GenerarExcelBeneficiosSolicitados");
        $form.attr('method','POST');
        $form.appendTo('body').submit();
  }



</script>
