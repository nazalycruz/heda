<?php ; //>>>RPERAZA(2021.07.08): CASU 1306/2021 ?>

<div class="d-flex justify-content-between">
  <h1 class="page-header">Utilerías</h1>
	<div><h4><a href="<?= base_url(); ?>assets/manuales/Utilerias.pdf" target="_blank" title="Abrir archivo de ayuda" class="text-black-900"><i class="fa-regular fa-circle-question"></i></a></h4></div>
</div>

<div class="card">
    <div class="card-body pb-0 pl-0 pr-0" id="tablero">
        <div class="col">
            <div class="container-fluid">
                <div class="row">
                    <!-- <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-3 d-flex">
                        <div class="card card-body text-center bg-light flex-fill utileria" onclick="CargaFormUtil('carga_conf_grupos_impresion')">
                            <i class="fa fa-print fa-4x pb-3"></i>
                            <div class="col-12">
                                <h5><b>Configuración de Grupos de impresión</b></h5>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-3 d-flex">
                        <div class="card card-body text-center bg-light flex-fill utileria" onclick="CargaFormUtil('carga_responsable_presupuesto')">
                            <i class="fa fa-user fa-4x pb-3"></i>
                            <div class="col-12">
                                <h5><b>Configuración de Responsable de Presupuesto</b></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-3 d-flex">
                        <div class="card card-body text-center bg-light flex-fill utileria" onclick="CargaFormUtil('carga_conf_pago_electronico')">
                            <i class="fa fa-dollar-sign fa-4x pb-3"></i>
                            <div class="col-12">
                                <h5><b>Configuración de carga de Pago Electrónico</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php ; //Modal para cargar los formularios de cada utilería ?>
<div class="modal fade" id="modUtilerias" tabindex="-1" role="dialog" data-bs-keyboard="false" data-bs-backdrop="static">
	<div id="modUtilSize" class="modal-dialog">
	  <div class="modal-content" id="modUtilCont"></div>
	</div>
</div>

<?php ; //Modal secundario ?>
<div class="modal fade" id="modUtileriasSec" tabindex="-1" role="dialog" data-bs-keyboard="false" data-bs-backdrop="static">
	<div id="modUtilSecSize" class="modal-dialog">
	  <div class="modal-content" id="modUtilSecCont"></div>
	</div>
</div>

<script type="text/javascript">
    var busqueda = "";
    setTimeout(function cargarconsulta() { //<<<RPERAZA(2021.05.27): CASU 0804/2021
        $(".utileria")
            .on("mouseover", function(){
                destacar(this, event);
            })
            .on("mouseout", function(){
                destacar(this, event);
            })
            .css("transition", "background-color 0.3s, color 0.3s");
    });

    function destacar(obj, evento){
	    if (event.type == "mouseover") {
	    	$(obj).removeClass("bg-light").addClass("alert-danger shadow");
	    }
	    else if(event.type == "mouseout"){
	    	$(obj).removeClass("alert-danger shadow").addClass("bg-light");
	    }
    }

    function CargaFormUtil(funcion_controlador){ //<<<RPERAZA(2021.07.08): CASU 1306/2021
        $.ajax({
            url: "<?=base_url();?>utilerias/" + funcion_controlador,
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
                if (data.status == false) {
                    alerta_emergente(data.mensaje,"error");
                }
                else {
	                $("#modUtilSize").removeClass("modal-md, modal-lg, modal-xl").addClass("modal-"+data.form_size);
	                $("#modUtilerias").modal("show");
	                $("#modUtilCont").html(data.html);
                }
            },
            complete: function(request, json){
             	hideLoading();
            }
        });
    }

</script>
