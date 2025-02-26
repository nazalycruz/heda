<?php ;//<<< RPERAZA(2019.08.20): CASU 1109/2019 ?>

<div id="divEscuelas" class="card">
  <h5 class="card-header d-flex justify-content-between align-items-center bg-pjey text-white">
    <b>Escuelas</b>
    <button type="button" id="btnNuevaEscuela" class="btn btn-default btn-xs m-r-5" onclick="return CapturarEscuela(0);"><i class="fa fa-plus"></i> Nueva</button>
  </h5>
  <div class="card-body">
    <div id="divListaEscuelas">
  	</div>
	</div>
</div>

<!-- #modal-dialog xlarge -->
<div class="modal fade" data-backdrop="static" id="pnlModalLg">
  <div class="modal-dialog modal-xl">
    <div id="pnlModalContentLg" class="modal-content">

    </div>
  </div>
</div>

<!-- #modal-dialog large -->
<div class="modal fade" id="pnlModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content" id="pnlModalContent">
			<!-- contenido de la ventana modal -->
		</div>
	</div>
</div>

<script>

  setTimeout(function inicializarTablas(){
    CargarEscuelas();
    //inicializaDatatable('tblListadoEscuelas',20,true);

  });

  function CargarEscuelas(){ //<<< RPERAZA(2019.08.20): CASU 1109/2019
    $.ajax({
      url: "<?=base_url();?>catalogos/traer_escuelas",
      type: "POST",
      async: true,
      dataType: "JSON",
      error: function(xhr, status, error){
        alerta_emergente("Error: " + error,"error");
        return false;
      },
      success: function(data){
        if(data.status == false) {
          alerta_emergente(data.mensaje,"error");
        }
        else{
            $("#divListaEscuelas").fadeOut(function(){
              $("#divListaEscuelas").html(data.datos);
              $("#divListaEscuelas").fadeIn('slow');
            });
        }
      }
    });

    return false;
  }

  function CapturarEscuela(EscuelaId){ //<<< RPERAZA(2019.08.19): CASU 1109/2019
    $.ajax({
      url: "<?=base_url();?>catalogos/capturar_escuela",
      type: "POST",
      async: true,
      data: 'EscuelaId='+EscuelaId,
      dataType: "JSON",
      error: function(xhr, status, error){
        alerta_emergente("Error: " + error,"error");
        return false;
      },
      success: function(data){
        if(data.status == false) {
          alerta_emergente(data.mensaje,"error");
        }
        else{
          $("#pnlModalContent").html(data.datos);
          $("#pnlModal").modal('show');
        }
      }
    });

    return false;
  }



  function EliminarEscuela(EscuelaId){ //<<<RPERAZA(2019.08.20): CASU 1109/2019

    swal.fire({
        title: "Alerta",
        text: "¿Confirma que desea eliminar la escuela seleccionada?",
        icon: "question",
        showCancelButton: true,
        showLoaderOnConfirm: true,
        allowOutsideClick: false,
        preConfirm: function () {
            return new Promise(function(resolve) {
                $.ajax({
                    url: "<?=base_url();?>catalogos/eliminar_escuela",
                    type: 'POST',
                    async: true,
                    dataType: "JSON",
                    data: 'EscuelaId=' + EscuelaId,
                    error: function(XMLHttpRequest, errMsg, exception){
                        var msg = "jQuery message: "+errMsg+" XMLHttpRequest: "+StatusMsg(XMLHttpRequest.status);
                        alerta_emergente(msg, 'error');
                        swal.close();
                    },
                    success: function(data){
                        if(data.status == false) {
                        alerta_emergente(data.mensaje,"error");
                        swal.close();
                        }
                        else{
                            alerta_emergente(data.mensaje,"success");
                            CargarEscuelas();
                            swal.close();
                        }
                    }
                });
            });
        }
    });
    return false;
  }



</script>
