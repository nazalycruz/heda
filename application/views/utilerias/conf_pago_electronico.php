<?php ; //>>>RPERAZA(2021.08.06): CASU 1306/2021 ?>
<div class="modal-header">
  <input type="hidden" id="filtroSel_gi" value="0">
  <h4 class="modal-title" id="TituloModal"><i class="fa fa-dollar-sign"></i> Configuración de carga de Pago Electrónico</h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body pb-0">
    <div class="row pb-3">
        <div class="col-lg-12 table-responsive">
            <table id="tblUtilListaFormatos" class="table table-bordered table-sm table-striped" width="100%" cellspacing="0">
                <thead>
                    <tr class="bg-light">
                        <th></th><?php ; //Id?>
                        <th></th><?php ; //NombreFormato?>
                        <th></th><?php ; //Campos?>
                        <th></th><?php ; //Encabezado?>
                        <th></th><?php ; //Emisor?>
                        <th></th>
                    </tr>
                </thead>
                <tbody><?php
                    if ($cat_formatos):;
                        foreach ($cat_formatos as $item):;
                            $icon = $item->Encabezado > 0 ? 'fa fa-check text-success' : "fa fa-times text-danger"; ?>
                            <tr>
                                <td><?= $item->Id; ?></td>
                                <td><?= $item->NombreFormato; ?></td>
                                <td><?= $item->Campos; ?></td>
                                <td class="text-center"><i class="<?=$icon?>"></i></td>
                                <td><?= $item->Emisor; ?></td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-danger" onclick="confirmarEliminaPE(this);" title="Eliminar este formato"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr><?php
                        endforeach;
                    endif;?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal-footer pb-2 pt-2">
	<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
</div>

<script type="text/javascript">
	setTimeout(function prepara_fpagos() {
	   jQuery('#tblUtilListaFormatos').DataTable({
	        "columnDefs": [
	            { "targets":[0], "visible":false, "searchable": false},
	            { "targets":[1], "visible":true, "searchable": true, "title": "Formato"},
	            { "targets":[2], "visible":true, "searchable": true, "title": "Campos" },
	            { "targets":[3], "visible":true, "searchable": false, "title": "Encabezados"},
	            { "targets":[4], "visible":true, "searchable": true, "title": "Emisor"},
	            { "targets":[5], "visible":true, "searchable": false, "orderable": false},
	        ],
	        "paging":   true,
	        "bLengthChange": false,
	        "bFilter": true,
	        "info" : false,
	    		language: { "url": "<?=base_url();?>assets/plugins/DataTables/Spanish.json" },
	        dom: '<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
	        buttons: [
	          {
	            text: '<i class="fa fa-plus"></i> Nuevo formato',
	            action: function ( e, dt, node, config ) {
	                CapturaNuevoFormato_pe();
	            },
	            className: "btn-dark"
	          }
	        ]
	    });
	});

	function CapturaNuevoFormato_pe(){
	  $.ajax({
	      url: "<?=base_url();?>utilerias/capturar_formato_pago",
	      type: 'POST',
	      async: true,
	      dataType: "JSON",
	      error: function(XMLHttpRequest, errMsg, exception){
	          let msg = "jQuery message: "+errMsg+" XMLHttpRequest: "+StatusMsg(XMLHttpRequest.status);
	          alerta_emergente(msg, 'error');
	      },
	      beforeSend:function(request) {
	          showLoading("Procesando...");
	      },
	      success: function(data){
	          if(data.status == false) {
	              alerta_emergente(data.mensaje,"error");
	          }
	          else{
	              $("#modUtilerias").modal("hide");
	              $("#modUtilSecSize").removeClass("modal-md, modal-lg, modal-xl").addClass("modal-"+data.form_size);
	              $("#modUtilSecCont").html(data.html);
	              $("#modUtileriasSec").modal("show");
	          }
	      },
	      complete: function(request, json){
	     		hideLoading();
	      }
	  });
	}

  function confirmarEliminaPE(obj){
	  const swalWithBootstrapButtons = Swal.mixin({
	    customClass: {
	      confirmButton: 'btn btn-success btn-lg mr-3',
	      cancelButton: 'btn btn-danger btn-lg'
	    },
	    buttonsStyling: false
	  })

	  swalWithBootstrapButtons.fire({
	    title: "Advertencia",
	    text: '¿Confirma que desea eliminar el Formato de Pago seleccionado ?',
	    icon: "warning",
	    showCancelButton: true,
	    confirmButtonText: '<i class="fa fa-check mr-2"></i>Sí, eliminar formato.',
	    cancelButtonText: '<i class="fa fa-times mr-2"></i>Cancelar'
	  }).then(result => {
	      hideLoading();
	      if (result.value) {
	      	EliminarFormatoPago(obj);
	      }
	  }).catch(swal.noop);
  }

  function EliminarFormatoPago(obj){
	  let tabla = $('#tblUtilListaFormatos').DataTable(),
				datos = tabla.row($(obj).parents('tr')).data();
	  		FormatoId = datos[0];

	  $.ajax({
	      url: "<?=base_url();?>utilerias/eliminar_formato_pago",
	      type: 'POST',
	      async: true,
	      dataType: "JSON",
	      data: { FormatoId: FormatoId },
	      error: function(XMLHttpRequest, errMsg, exception) {
	        let msg = "jQuery message: "+errMsg+" XMLHttpRequest: "+StatusMsg(XMLHttpRequest.status);
	        alerta_emergente(msg, 'error');
	      },
	      beforeSend:function(request) {
        	showLoading("Procesando...");
	      },
	      success: function(data){
	        if (data.status == false) {
	        	alerta_emergente(data.mensaje,"error");
	        }
	        else {
	          alerta_emergente(data.mensaje,"success");
  					tabla.row( $(obj).parents('tr') ).remove().draw();
	        }
	      },
	      complete: function(request, json){
        	hideLoading();
	      }
	  });
	  return false;
  }

</script>
