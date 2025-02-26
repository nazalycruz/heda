<?php
// var_dump($empleado);
?>


           <!-- GSantos, 2021.04.13 -->
<div class="card-body" id="erroresHEDA" >
 
 <h1 class="page-header bg-dark text-white"> ERRORES en datos </h1>
   <!-- -->
    <div class="row" >
          <div class="col-12">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="tblErrores" width="100%">
                 <thead>
                  <tr class="bg-gray text-white">
                    <th>Clave</th>
                    <th>Descripción</th>
                    <th>Error</th>
                    <th>Acción</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                      if($errores):;
                          foreach( $errores as $item ):;
                    ?>
                    <tr  id="rowError_<?= $item->Id.'_'.$item->Tipo;?>" >
                      <td class="text-left" width="6%"><?= $item->Clave; ?></td>
                      <td class="text-left" width="30%"><?= $item->Descripcion; ?></td>
                      <td class="text-left" width="52%"><?= $item->Error; ?></td>

                      <td class="text-center">
                          <?php if($item->Tipo == 1): ?>
                                <button type="button" id="btnEditar" class="btn btn-xs btn-default" onclick="corregirError(<?= $item->Id;?>, '<?=$item->Clave;?>', '<?=$item->Descripcion;?>', '<?= $item->Tipo;?>');" title="Editar"><i class="fa fa-pencil-alt"></i></button>
                          <?php endif; ?>
                      </td>  
                    </tr>
                    <?php
                    endforeach;
                    endif;?>
                </tbody>
              </table>
            </div>
          </div>
    
    </div>

    <!-- <div class="divVales" id="divVales" hidden="true"> -->
      <div class="card-body" id="divVales">
      <h1 class="h3 bg-dark text-white">  Agregar el monto de los vales en la configuración  </h1>

      <div class="row">
        <div class="col-md-1">
          <div class="form-group">
            <input type="hidden" class="form-control form-control-sm" id="id" name="id" >
            <label for="Clave"><b>Clave</b></label>
            <input type="text" class="form-control form-control-sm" id="clave" name="clave" >
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="descripcion"><b>Descripción</b></label>
            <input type="text" class="form-control form-control-sm" id="descripcion" name="descripcion" >
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group">
            <label for="monto"><b>Monto</b></label>
            <input type="text" class="form-control form-control-sm" id="monto" name="monto" >
          </div>
        </div>

        <div class="col-1">
          <div class="form-group">
            <label>¿Se grava?</label>
            <div class="checkbox checkbox-css checkbox-inverse">
              <input type="checkbox" id="chkAntesDeImp" name="chkAntesDeImp"/>
              <label for="chkAntesDeImp"></label>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group">
            <label class="control-label">&nbsp;</label>
            <div>
              <button type="button" class="btn btn-inverse btn-sm" title="Agregar configuración de vales para la categoría" id="btnVales" name="btnVales" onclick="agregar_confVales();"><i class="fas fa-save"></i> Guardar
              </button>
            </div>
          </div>
        </div>
      </div>

    </div>

</div>


<script type="text/javascript">
setTimeout(function cargarconsulta() {
  $("#divVales *").prop("disabled",true);
  $("#divVales").hide();
  

  $('#tblErrores').DataTable({
    language: {
      "url": "assets/plugins/DataTables/Spanish.json",
      "processing": "Cargando..."
    },
    dom: 'ft',
    paging: false,
    responsive: true,
    order: [0, 'asc'],
    columnDefs: [
      { className: "dt-center", targets: '_all' }
    ],});

 });

//funciones

function corregirError(Id, Clave, Descripcion, Tipo){
    $("#divVales *").prop("disabled",true);
    $("#divVales").hide();

    switch(Tipo)
      {
          case '0':
              alerta_emergente("Tipo = 0", "error");
              break;
          case '1':
               $("#id").val(Id);
               $("#clave").val(Clave); 
               $("#descripcion").val(Descripcion); 
               $("#divVales *").children().prop("disabled",false);
               $("#divVales").show();
              break;

          case '2':
              alerta_emergente("Tipo = 2", "error");
              break;
      }
      return false;
}

function agregar_confVales()
  {
  var idcategoria = $("#id").val(),
      monto = $("#monto").val(),
      antesdeimp = ($('#chkAntesDeImp').prop('checked') ? 0 : 1);

 $('#rowError_'+idcategoria+'_1').addClass('selected');      
 if (DatosValidos()){
        $.ajax({
          url   : '<?= base_url() ?>validaciones/AgregarConfiguracionVales',
          type: "POST",
          dataType: "JSON",
          data: {idcategoria:idcategoria, monto:monto, antesdeimp:antesdeimp},
          success : function(data)
              {
              if(data.status == false) {
                    alerta_emergente(data.mensaje,"error");
                    return false;
                  }
              else{
                    alerta_emergente(data.mensaje,"error");
                    $("#id").val(0);
                    $("#clave").val(''); 
                    $("#descripcion").val('');   
                    $("#divVales *").prop("disabled",true);
                    $("#divVales").hide();
                    var tblErrores = $('#tblErrores').DataTable();
                    tblErrores.row('.selected').remove().draw( false );
                    $('#rowError_'+idcategoria+'_1').removeClass('selected');
                    swal.close();
                  }
              }
           });
    }
}

function DatosValidos(){
    var resultado = true;

   if($("#monto").val() == "0" || $("#monto").val() == ""){
        resultado = false;
        $("#monto").focus();
        alerta_emergente('Debe capturar el monto','info');
      }
    
    return resultado;
  }
//fin funciones

</script>
