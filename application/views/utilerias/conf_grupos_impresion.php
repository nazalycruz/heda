<?php ; //>>>RPERAZA(2021.07.13): CASU 1306/2021 ?>
<div class="modal-header">
	<input type="hidden" id="filtroSel_gi" value="0">
  <h4 class="modal-title" id="TituloModal"><i class="fa fa-print"></i> Configuración de Grupos de impresión</h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body mb-0">
    <div class="row mb-2">
        <div class="col-md-12">
            <label for="DependenciaId_gi" class="form-label"><h6 class="mb-0">Selecciona una dependencia:</h6></label>
            <select class="form-control form-control" id="DependenciaId_gi">
                <?= $cat_dependencias ?>
            </select>
        </div>
    </div>

    <div class="row" id="divGruposImpresion" style="display:none;">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="divCategorias">
                        <h6 class="card-title">Categorías</h6>
                        <button id="btnUtilTodas" class="btn btn-secondary mr-2 mb-1 util_filtro fTodas">Todas</button>
                        <button id="btnUtilConf" class="btn btn-outline-secondary mr-2 mb-1 util_filtro fConf">Configuradas</button>
                        <button id="btnUtilNoConf" class="btn btn-outline-secondary mr-2 mb-1 util_filtro fNoConf">No configuradas</button>
                    </div>

                    <div class="row mt-3" id="rowTlbCategorias">
                        <div id="divTablaCatGrupos" class="col-12 table-responsive">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal-footer pb-2 pt-2">
	<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
</div>

<script type="text/javascript">
    var utilGrupoSel = 0;
    var utilCatSel = 0;
    var btnGuardar = '<button type="button" class="btn btn-xs btn-success btn-block mb-1 util_grp_edit" onclick="GuardarGrupoImp(this);">Guardar</button>';
    var btnCancelar = '<button type="button" class="btn btn-xs btn-secondary btn-block util_grp_edit" onclick="CancelarGrupoImp(this);">Cancelar</button>';
    var btnEliminar = '<button type="button" class="btn btn-xs btn-danger util_grp_btn" onclick="VerificaExistenEmpGrupoImp(this);" title="Eliminar el Grupo de impresión"><i class="fa fa-trash"></i></button>';

    function muestraFiltradas(GrupoImpresionId){
	    let filtro = $("#filtroSel_gi").val(),
	    		respuesta = true;

	    switch(filtro){
	        case "0": //Todas
	            respuesta = true;
	            break;
	        case "1": //Configuradas
	            respuesta = (GrupoImpresionId > 0);
	            break;
	        case "2": //No configuradas
	            respuesta = (GrupoImpresionId == 0);
	            break;
	    }
	    return respuesta;
    }

    var dtFiltroGruposImp = function (settings, data, dataIndex, originalData) {
        <?php ; //esta condición permite que las reglas de filtrado solo apliquen a la tabla tblUtilListaCategorias ?>

        if (settings.nTable.id !== 'tblUtilListaCategorias') {
        	return true;
        }

        let grupoConfigurado = parseInt(originalData[2]) || 0;
        if (!muestraFiltradas(grupoConfigurado)) { <?php ; //Si no tiene un grupo?>
      		return false;
        }
        return true;
    };

    setTimeout(function prepara_grp_imp() {
        $.fn.dataTable.ext.search.splice($.fn.dataTable.ext.search.indexOf(dtFiltroGruposImp, 0)); <?php ; //Elimina la versión anterior de la función de filtrado (en caso de existir)?>
        $.fn.dataTable.ext.search.push(dtFiltroGruposImp); <?php ; //Define la función de filtrado ?>

				if ($("#DependenciaId_gi").hasClass("select2-hidden-accessible")) {
					$("#DependenciaId_gi").select2("destroy");
				}
				$('#DependenciaId_gi').each(function () {
					$(this).select2({
						language: "es",
						width:'100%',
						placeholder: "Dependencias",
						dropdownParent: $(this).parent(),
					});
				}).on("change", function(){
					cargaCategorias();
				});

        $(".util_filtro").on("click", function(){
        	filtraCategorias(this);
        })

        $("#divCategorias").hide();
				$("#divGruposImpresion").hide();
        utilGrupoSel = 0;
        utilCatSel = 0;
    });

    function cargaCategorias(){
	    let DependenciaId = $("#DependenciaId_gi").val();
	    $("#filtroSel_gi").val(0);
	    $("#divCategorias").hide();
			$("#divGruposImpresion").hide();

	    restableceBotonesCat();
	    $.ajax({
	        url: "<?=base_url();?>utilerias/get_categorias_con_grupo_imp",
	        type: 'POST',
	        async: true,
	        dataType: "JSON",
	        data: "DependenciaId="+DependenciaId,
	        error: function(XMLHttpRequest, errMsg, exception){
	          let msg = "jQuery message: "+errMsg+" XMLHttpRequest: "+StatusMsg(XMLHttpRequest.status);
	          alerta_emergente(msg, 'error');
	        },
	        beforeSend:function(request) {
	            //$("#divSpinTipoRpt").show();
	        },
	        success: function(data){
	          if (data.status == false) {
            	alerta_emergente(data.mensaje,"error");
	          }
	          else {
							$("#divGruposImpresion").show();
	            $("#divTablaCatGrupos").html(data.html);
	            $("#divCategorias").show();
	          }
	        },
	        complete: function(request, json){
	        }
	    });
    }

    function restableceBotonesCat(){
	    $(".util_filtro").removeClass("btn-secondary").addClass("btn-outline-secondary");
	    $("#btnUtilTodas").removeClass("btn-outline-secondary").addClass("btn-secondary");
    }

    function filtraCategorias(obj){
	    let table = $('#tblUtilListaCategorias').DataTable();

	    if ($(obj).hasClass("btn-secondary") == false) {
	    	$(".util_filtro").removeClass("btn-secondary").addClass("btn-outline-secondary");
	    	$(obj).removeClass("btn-outline-secondary").addClass("btn-secondary");
	    	$(obj).html($(obj).html());
	    }

	    if ($(obj).hasClass("fConf")) {
	  		$("#filtroSel_gi").val(1);
	    }
	    else if ($(obj).hasClass("fNoConf")) {
	    	$("#filtroSel_gi").val(2);
	    }
	    else {
	    	$("#filtroSel_gi").val(0);
	    }
	    table.draw();
    }

    function ModificarGrupoImp(obj){
	    let table = $('#tblUtilListaCategorias').DataTable(),
	    		row = table.row( $(obj).parent().parent()),
	    		celdaBtn = table.cell( $(obj).parent() ),
	    		celdaGrupo = table.cell( $(obj).parent().prev("td") );

	    utilCatSel = row.data()[0];
	    utilGrupoSel = row.data()[2];

	    celdaBtn.data( celdaBtn.data() + btnGuardar + btnCancelar );

	    $("#cboxGrupoImpresion").css("display", "");

	    var clone = $("#cboxGrupoImpresion").clone();
	    $(clone).attr("id", "IdGrupoImp_" + utilCatSel);

	    celdaGrupo.data($(clone).prop('outerHTML'));

	    let currentPage = table.page();
	    table.page(currentPage).draw('page');

			if ($("#IdGrupoImp_" + utilCatSel).hasClass("select2-hidden-accessible")) {
				$("#IdGrupoImp_" + utilCatSel).select2("destroy");
			}
			$("#IdGrupoImp_" + utilCatSel).each(function () {
				$(this).select2({
					language: "es",
					width:'100%',
					placeholder: "Selecciona un elemento",
					dropdownParent: $(this).parent(),
				});
			})

	    $("#IdGrupoImp_" + utilCatSel).val(utilGrupoSel).trigger('change');

	    $("#cboxGrupoImpresion").css("display", "none");

	    $(".util_grp_btn").hide();
	    $("#tblUtilListaCategorias_paginate").hide();
    }

    function RestauraControlesUtil(obj, DescGrupo){
	    let table = $('#tblUtilListaCategorias').DataTable(),
	    		row = table.row( $(obj).parent().parent()),
	    		celdaBtn = table.cell( $(obj).parent() ),
	    		celdaGrupo = table.cell( $(obj).parent().prev("td") );

	    celdaGrupo.data(DescGrupo);
	    celdaBtn.data(celdaBtn.data().replace(btnGuardar+btnCancelar, ""));

	    if (row.data()[2] == 0) {
	    	celdaBtn.data(celdaBtn.data().replace(btnEliminar, ""));
	    }
	    else if(celdaBtn.data().includes(btnEliminar) == false) {
	    	celdaBtn.data(celdaBtn.data() + " " + btnEliminar);
	    }

	    let currentPage = table.page();
	    table.page(currentPage).draw('page');

	    $(".util_grp_btn").show();
	    $("#tblUtilListaCategorias_paginate").show();
	    utilGrupoSel = 0;
	    utilCatSel = 0;
    }

    function CancelarGrupoImp(obj){
	    let text = ( utilGrupoSel > 0 ? '<i class="fa fa-check text-success"></i> &nbsp;' + $("#cboxGrupoImpresion option[value='"+utilGrupoSel+"']").text() : '<i class="fa fa-times text-danger"></i> &nbsp;');
	    RestauraControlesUtil(obj, text);
    }

    function GuardarGrupoImp(obj){
        let table = $('#tblUtilListaCategorias').DataTable(),
        		row = table.row( $(obj).parent().parent()),
        		catSel = row.data()[0],
        		grupoSel = $("#IdGrupoImp_" + catSel).val(),
        		Configurado = row.data()[4];

        if (grupoSel > 0) {
            $.ajax({
                url: "<?=base_url();?>utilerias/guardar_cat_grupo_impresion",
                type: 'POST',
                async: true,
                dataType: "JSON",
                data: {  GrupoImpresion: grupoSel
                        ,CategoriaId: catSel
                        ,DependenciaId: $("#DependenciaId_gi").val()
                        ,Configurado: Configurado
                      },
                error: function(XMLHttpRequest, errMsg, exception){
	                let msg = "jQuery message: "+errMsg+" XMLHttpRequest: "+StatusMsg(XMLHttpRequest.status);
	                alerta_emergente(msg, 'error');
	                CancelarGrupoImp(obj)
                },
                beforeSend:function(request) {
                	showLoading("Procesando...");
                },
                success: function(data){
                    if (data.status == false) {
	                    alerta_emergente(data.mensaje,"error");
	                    CancelarGrupoImp(obj)
                    }
                    else {
                        let text = '<i class="fa fa-check text-success"></i> &nbsp;' + $("#IdGrupoImp_" + catSel + " option:selected").text();

                        table.cell(row.index(),2).data($("#IdGrupoImp_" + catSel).val());
                        table.cell(row.index(),4).data(1);
                        let currentPage = table.page();
                        //table.draw();
                        table.page(currentPage).draw('page');

                        RestauraControlesUtil(obj, text);

                        alerta_emergente(data.mensaje,"success");
                    }
                },
                complete: function(request, json){
                    hideLoading();
                }
            });
        }
        else {
        	alerta_emergente("Selecciona un <b>Grupo de impresión.</b>", "warning");
        }
    }

    function VerificaExistenEmpGrupoImp(obj){
        let table = $('#tblUtilListaCategorias').DataTable(),
        		row = table.row( $(obj).parent().parent()),
        		catSel = row.data()[0],
        		grupoSel = row.data()[2],
        		contador = 0;

        $.ajax({
            url: "<?=base_url();?>utilerias/verifica_empleados_grupo_impresion",
            type: 'POST',
            async: true,
            dataType: "JSON",
            data: {  GrupoImpresion: grupoSel
                    ,CategoriaId: catSel
                    ,DependenciaId: $("#DependenciaId_gi").val()
                  },
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
                    contador = data.contador;
                }
            },
            complete: function(request, json){
                if (contador > 0) {
                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: 'btn btn-success btn-lg mr-3',
                            cancelButton: 'btn btn-danger btn-lg'
                        },
                        buttonsStyling: false
                    })

                    swalWithBootstrapButtons.fire({
                        title: "Advertencia",
                        text: 'Existe uno o más empleados configurados con este grupo de impresión ¿Confirma que desea eliminar esta configuración?',
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: '<i class="fa fa-check mr-2"></i>Sí, eliminar la configuración',
                        cancelButtonText: '<i class="fa fa-times mr-2"></i>Cancelar'
                    }).then(result => {
                        hideLoading();
                        if(result.value){
                            EliminarGrupoImp(obj);
                        }
                    }).catch(swal.noop);
                }
                else {
                    hideLoading();
                    EliminarGrupoImp(obj);
                }
            }
        });
    }

    function EliminarGrupoImp(obj){
        let table = $('#tblUtilListaCategorias').DataTable();
        		row = table.row( $(obj).parent().parent());
        		catSel = row.data()[0];
        		grupoSel = row.data()[2];

        $.ajax({
            url: "<?=base_url();?>utilerias/eliminar_cat_grupo_impresion",
            type: 'POST',
            async: true,
            dataType: "JSON",
            data: {  GrupoImpresion: grupoSel
                    ,CategoriaId: catSel
                    ,DependenciaId: $("#DependenciaId_gi").val()
                  },
            error: function(XMLHttpRequest, errMsg, exception){
                let msg = "jQuery message: "+errMsg+" XMLHttpRequest: "+StatusMsg(XMLHttpRequest.status);
                alerta_emergente(msg, 'error');
                CancelarGrupoImp(obj)
            },
            beforeSend:function(request) {
                showLoading("Procesando...");
            },
            success: function(data){
                if (data.status == false) {
                    alerta_emergente(data.mensaje,"error");
                    CancelarGrupoImp(obj)
                }
                else {
                    let text = '<i class="fa fa-times text-danger"></i> &nbsp;';

                    table.cell(row.index(),2).data(0);
                    table.cell(row.index(),4).data(0);
                    let currentPage = table.page();
                    //table.draw();
                    table.page(currentPage).draw('page');

                    RestauraControlesUtil(obj, text);

                    alerta_emergente(data.mensaje,"success");
                }
            },
            complete: function(request, json){
                hideLoading();
            }
        });
    }
</script>
