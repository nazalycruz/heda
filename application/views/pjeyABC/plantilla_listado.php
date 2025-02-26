<style media="screen">
  td.dt-fontsm {
    font-size: 10px !important;
  }

  select {
    width: 100% !important;
    position: relative !important;
  }

  .grpBotones{
    white-space: nowrap !important;
  }

  .btnDivisor{
    margin-right:5px !important;
  }

  th.dt-head-center{
    text-align: center;
  }

  .cards tbody tr {
    float: left;
    width: 19rem;
    margin: 0.5rem;
    border: 0.0625rem solid rgba(0, 0, 0, .125);
    border-radius: .25rem;
    box-shadow: 0.25rem 0.25rem 0.5rem rgba(0, 0, 0, 0.25);
  }

  .cards tbody td {
    display: block;
  }

  .cards thead {
    display: none;
  }

  .cards td:before {
    content: attr(data-label);
    position: relative;
    float: left;
    color: #808080;
    min-width: 4rem;
    margin-left: 0;
    margin-right: 1rem;
    text-align: left;
  }

  tr.selected td:before {
    color: #CCC;
  }

</style>

<div class="row" id="rowContenido">
  <h1 class="page-header" id="head-titulo" style="display:none;"></h1>
  <div id="div-auxiliar" class="col-md-12"></div>

  <div class="col-md-12">
    <div id="panel-principal" class="card">
			<!-- card-header-condensed -->
      <h5 id="titulo-panel" class="card-header d-flex justify-content-between align-items-center">
        Resultados
      </h5>
      <div class="card-body mb-0">
        <?php
				$config = json_decode($config_data);
				$idTbl = (empty($config->extra_config->idTbl) ? 'tblLstPlantilla' : $config->extra_config->idTbl);
        if (!empty($result_data)) {
        ?>
        <div class="table-responsive" id="contenido-abc">
          <table id="<?= $idTbl; ?>" class="table table-bordered table-condensed compact tblLstPlantillaABC" cellspacing="0" width="100%" style="display:none;"></table>
					<!-- <table id="<?= $idTbl; ?>" class="table table-striped table-borderless border-bottom border-light dataTable no-footer table-condensed compact tblLstPlantillaABC classTBL<?= $idTbl; ?>" cellspacing="0" width="100%" style="display:none;"></table><?php ;//<<<RPERAZA(2022.12.01): Se aplican estilos de tablas según Guía de Estilos ?> -->
				</div>
        <?php
        }
        else {
					echo '<div class="row" id="contenido-abc">
									<div class="col">
										<div class="alert alert-warning fade show">
											<strong>No se encontraron resultados</strong>
										</div>
									</div>
									<div id="divBtnAgregar'.$idTbl.'"></div>
								</div>';
        }
        ?>
      </div>
			<!-- PENDIENTE: Agregar un card-footer con sumatorios u otro contenido -->
    </div>
  </div>

</div>

<!-- Modal Genérica para el ABC-->
<div class="modal fade" id="modpjeyABC" tabindex="-1" role="dialog">
  <div id="modtamanio" class="modal-dialog modal-lg">
    <div class="modal-content" id="modcontentABC">
      <!-- contenido de la ventana modal -->
    </div>
  </div>
</div>

<script type="text/javascript">

var dataSet       = <?= empty($result_data) ? '[]' : $result_data; ?>,
    dataConfig    = <?= empty($config_data) ? '[]' : $config_data; ?>,
    idTbl         = ((typeof dataConfig.extra_config.idTbl !== 'undefined') ? dataConfig.extra_config.idTbl : 'tblLstPlantilla'),
		tema					= dataConfig.tema,
    columnas      = [], itemCol = {}, cont = 0, cadenaPie = '', acciones = dataConfig.confAcciones,
    colEllipsis   = [], colFecha = [], colAnio = [], colVisible = [], colCentrado = [], colDerecha = [], colIzquierda = [], colMoneda = [], colPorcentaje = [], colCambiaValor = [], colClaseOpLog = [],
    filtrosSelect = [], filtrosTxt = [], colOrden = [],
    parentdiv     = $('#rowContenido').parents('div').prop('id'),
    base_url      = "<?= base_url(); ?>", controller = "<?= $this->router->fetch_class(); ?>", funcion = "<?= $this->router->fetch_method(); ?>";

var colJSONconf     = JSON.parse(dataConfig.colJSONconf),
    cantResultados  = dataConfig.cantResultados,
    extraCondensed  = dataConfig.extraCondensed; //<<<RPERAZA

// $('.tblLstPlantillaABC').attr("id", idTbl);

if (dataSet == '') dataSet = "[]";

if (dataConfig.cargando) ventana_cargando();

$(document).ready(function () {
  document.getElementById('div-auxiliar').id    = 'div-auxiliar'+idTbl;
  document.getElementById('panel-principal').id = 'panel-principal'+idTbl;
  document.getElementById('titulo-panel').id    = 'titulo-panel'+idTbl;
  document.getElementById('contenido-abc').id   = 'contenido-abc'+idTbl;

  if (dataConfig.muestra_panel === false) {
    $($("#div-auxiliar"+idTbl) ).append( $("#contenido-abc"+idTbl));
    $("#panel-principal"+idTbl).hide();
  }

	if (typeof dataConfig.extra_config.cardHeadClass !== 'undefined') {
		$("#titulo-panel"+idTbl).removeClass('bg-pjey');
		$("#titulo-panel"+idTbl).addClass(dataConfig.extra_config.cardHeadClass);
	}

  //Genera configuración para el título y subtítulo de la página
  if (typeof dataConfig.titulo !== "undefined" && dataConfig.titulo != "" && dataConfig.titulo != null) {
    var subTitulo = ((typeof(dataConfig.subtitulo) != "undefined" || dataConfig.subtitulo != "" || dataConfig.subtitulo != null) ? dataConfig.subtitulo : '');
    $('#head-titulo').html(dataConfig.titulo+' <small>'+subTitulo+'</small>');
    $('#head-titulo').show();
  }

  //Genera configuración para el título del panel
  if (typeof dataConfig.titulopanel !== "undefined" && dataConfig.titulopanel != "" && dataConfig.titulopanel != null) { $('#titulo-panel'+idTbl).html(dataConfig.titulopanel); }

  if (dataSet != '' && dataSet != '[]') {

    //Genera configuración para el formato de columnas
    if (typeof dataConfig.formatoColumna[0] !== 'undefined') {
      if (typeof dataConfig.formatoColumna[0].visible !== 'undefined' && dataConfig.formatoColumna[0].visible.length > 0) { colVisible = dataConfig.formatoColumna[0].visible; }
      if (typeof dataConfig.formatoColumna[0].ellipsis !== 'undefined' && dataConfig.formatoColumna[0].ellipsis.length > 0) { colEllipsis = dataConfig.formatoColumna[0].ellipsis; }
      if (typeof dataConfig.formatoColumna[0].fecha !== 'undefined' && dataConfig.formatoColumna[0].fecha.length > 0) { colFecha = dataConfig.formatoColumna[0].fecha; }
			if (typeof dataConfig.formatoColumna[0].fecha !== 'undefined' && dataConfig.formatoColumna[0].fecha.length > 0) { colAnio = dataConfig.formatoColumna[0].anio; }
      if (typeof dataConfig.formatoColumna[0].moneda !== 'undefined' && dataConfig.formatoColumna[0].moneda.length > 0) { colMoneda = dataConfig.formatoColumna[0].moneda; }
      if (typeof dataConfig.formatoColumna[0].porcentaje !== 'undefined' && dataConfig.formatoColumna[0].porcentaje.length > 0) { colPorcentaje = dataConfig.formatoColumna[0].porcentaje; }

      if (typeof dataConfig.formatoColumna[0].centrado !== 'undefined' && dataConfig.formatoColumna[0].centrado.length > 0) { colCentrado = dataConfig.formatoColumna[0].centrado; }
      if (typeof dataConfig.formatoColumna[0].derecha !== 'undefined' && dataConfig.formatoColumna[0].derecha.length > 0) { colDerecha = dataConfig.formatoColumna[0].derecha; }
      if (typeof dataConfig.formatoColumna[0].izquierda !== 'undefined' && dataConfig.formatoColumna[0].izquierda.length > 0) { colIzquierda = dataConfig.formatoColumna[0].izquierda; }
    }

    //obtiene los valores para ordenar columnas
    if (typeof dataConfig.extra_config.colOrden !== 'undefined') { colOrden = dataConfig.extra_config.colOrden; }

    //obtiene el valor de la columna para cambiar clases (arreglo claseOperadorLogico)
    if (typeof dataConfig.extra_config.claseOperadorLogico !== 'undefined') { colClaseOpLog = dataConfig.extra_config.claseOperadorLogico.targets; }
    //obtiene el valor de la columna para cambiar valores (arreglo modCell)
    if (typeof dataConfig.extra_config.modCell !== 'undefined') { colCambiaValor = dataConfig.extra_config.modCell.targets; };

    if (typeof dataConfig.extra_config.confFiltros !== 'undefined') {
      filtrosSelect = ( typeof dataConfig.extra_config.confFiltros.filtrosSelect !== 'undefined' ) ? dataConfig.extra_config.confFiltros.filtrosSelect : colVisible;
      filtrosTxt = ( typeof dataConfig.extra_config.confFiltros.filtrosTxt !== 'undefined' ) ? dataConfig.extra_config.confFiltros.filtrosTxt : [];
    }
    else { filtrosSelect = colVisible; }

    // $.each( dataSet, function( key, value ) {
    //   dataSet[key].Categoria = '<input type="text" id="txt"   value="'+dataSet[key].Categoria+'" class="form-control form-control-sm" />';
    // });

    //Genera los encabezados de la tabla
    $.each( dataSet[0], function( key, value ) {
      itemCol = {};
      itemCol.data = key.replace(/\./g, "\\.");
      itemCol.name = key;
      itemCol.title = ( (typeof(dataConfig.encabezados[key]) != "undefined" && dataConfig.encabezados[key].length > 0 ) ? dataConfig.encabezados[key] : key );
      if (colVisible > 0) itemCol.searchable = ( ($.inArray(cont, colVisible) !== -1) ? true : false );
      columnas.push(itemCol);
      cont++;
    });

    //Genera el arreglo de las columnas visibles
    if (colVisible.length == 0){
      for (var i = 0; i < columnas.length; i++) {
        colVisible.push(i);
      }
    }

  if (typeof(dataConfig.extra_config.confTblInput) != 'undefined') {
    columnas.push(
      {data:null, title:dataConfig.extra_config.confTblInput.title, orderable: false, searchable:false, class:"grpInputs",
          render: function ( data, type, row, meta ) {
              var strInpt = ''
              strInpt +=  '<input type="'+dataConfig.extra_config.confTblInput.tipo+'" id="txtTbl_'+row[dataConfig.key[1]]+'" name="txtTbl_'+row[dataConfig.key[1]]+'" class="form-control form-control-sm" placeholder="'+dataConfig.extra_config.confTblInput.placeholder+'" value="'+dataConfig.extra_config.confTblInput.valor+'">';
              return strInpt;
          }
      });
  }

  //Genera los botones para acciones adicionales y/o los botones del ABC
  if (dataConfig.acciones || dataConfig.crud) {
		let ttlAcc = (typeof dataConfig.extra_config.tituloAcciones !== 'undefined') ? dataConfig.extra_config.tituloAcciones : "Acciones";
    columnas.push( {data:null, title: ttlAcc, orderable: false, searchable:false, class:"grpBotones", render: function ( data, type, row, meta ) {
                    var string = '';
                    if (dataConfig.acciones) {
                      $.each( acciones, function( key, value ) {
												let dibujaBoton = true;
												if (typeof(value.cond_visibilidad) !== "undefined" && typeof(value.val_visibilidad) !== "undefined") {
													if (eval(row[value.cond_visibilidad] + value.val_visibilidad) == false) dibujaBoton = false;
												}
												if (dibujaBoton) {
													string += `<a href="javascript:;"
	                                    class="btn btn-xs `+( typeof value.class == "undefined" ? ' btn-default' : value.class )+`"
	                                    title="${value.titulo}"
	                                    data-json="${JSON.stringify(row).replace(/"/g, "&#34;")}"
	                                    onclick=${value.accion}("${base_url}",this,true)>${value.texto}<i class="${value.icono}"></i></a>`;
												}
                      });
                    }

                    if (dataConfig.crud) {
                      //pendiente: agregar botones visualizar y clonar
                      if (dataConfig.btnEditar) { string += '<a href="javascript:;" class="btn btn-xs btn-default" title="Editar" onclick="editar('+meta.row+')"><i class="fas fa-pencil-alt"></i></a></li>'; }
                      if (dataConfig.btnEliminar) { string += '<a href="javascript:;" class="btn btn-xs btn-danger" title="Eliminar" onclick="eliminar('+meta.row+');"><i class="fas fa-trash-alt"></i></a></li>'; }

                      // string += '<div class="btn-group pull-center">'+
                      //             '<button id="ddacciones" type="button" title="Abrir menú de acciones" class="btn btn-default btn-xs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fas fa-bars"></i></button>'+
                      //               '<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="ddacciones">'+
                      //                 '<li><a href="javascript:;" class="btn" onclick="editar('+meta.row+')"><i class="fas fa-pencil-alt"></i> Editar</a></li>'+
                      //                 '<li><a href="javascript:;" class="btn" onclick="eliminar('+meta.row+');"><i class="fas fa-trash-alt"></i> Eliminar</a></li>'+
                      //               '</ul>'+
                      //           '</div>';
                    }
                    return string;
                  }} );
    }

    //genera el pie de tabla para agregar los filtros
    if (dataConfig.filtros) {
      for (var i = 0; i < columnas.length; i++) {
        cadenaPie += '<td></td>';
      }

      $('#'+idTbl).append("<tfoot><tr>"+cadenaPie+"</tr></tfoot>");
    }

    //Genera la tabla
    if (!$.fn.dataTable.isDataTable( '#'+idTbl )) {
      let tablaABC = $('#'+idTbl).DataTable({
        initComplete: function(settings) {
          // mostrar/ocultar botones
          if (dataConfig.btnocultaColumnas == false) $(".btnhideColumn").css("display","none");
          if (dataConfig.btnborrarFiltros == false) $(".btndelFiltro").css("display","none");
          if (dataConfig.btncardView == false) $(".btncardView").css("display","none");
          if (dataConfig.copiarTbl == false) $(".btncopiarTbl").css("display","none");
          if (dataConfig.exportarXLS == false) $(".btnexpXLS").css("display","none");
          if (dataConfig.exportarPDF == false) $(".btnexpPDF").css("display","none");
          if (dataConfig.crud == false || dataConfig.btnAgregar == false) $(".btnAgregarRegistro").css("display","none");

          if (dataConfig.filtros) { //agrega filtros
            this.api().columns( filtrosSelect ).every(function() {
              var column = this;
              // var select = $('<select id="filtrocol_'+column.index()+'" class="slt_filtro"><option value=""></option></select>')
							var select = $('<select id="filtrocol_'+idTbl+'_'+column.index()+'" class="slt_filtro form-select form-select-sm" onclick="cargaOpciones('+column.index()+','+idTbl+');"><option value=""></option></select>')
               .appendTo($(column.footer()).empty())
                .on('change', function() {
                  var val = $.fn.dataTable.util.escapeRegex(
                    $(this).val()
                  );
                  column
                    .search(val ? '^' + jQuery.fn.DataTable.ext.type.search.string( val ) + '$' : '', true, false)
                    .draw();
                });
                // .on('click', function() {
                //   cargaOpciones(column.index());
                // });
            });

            if (typeof dataConfig.extra_config.confFiltros !== 'undefined') {
              this.api().columns( filtrosTxt ).every(function() {
                var that = this;
                var select = $('<input type="text" class="form-control form-control-sm txt_filtro" id="filtrotxtcol_'+that.index()+'" placeholder="Buscar..." />')
                 .appendTo($(that.footer()).empty())
                 .on('keyup change', function(e) {
                  that
                    .search(jQuery.fn.DataTable.ext.type.search.string( this.value ) )
                    .draw();
                });
              });
            }

            // muestra el campo sumatoria
            if (typeof dataConfig.extra_config.confSumatoria !== "undefined") {
              $('<input type="text" readonly class="form-control-plaintext fw-bold form-control-lg tblSum'+idTbl+' text-end" value="0" />').appendTo('#divExtraContent'+ idTbl);
            }

            $('#' + idTbl + ' tfoot tr').insertAfter('#' + idTbl + ' thead');
          }

          if (dataConfig.ocultos.length > 0) { this.api().columns( dataConfig.ocultos ).visible( false ); }
          else {
            this.api().columns( ).visible( false );
            this.api().columns(colVisible).visible( true );
          }

          //muestra la columna de acciones
          if (dataConfig.acciones || dataConfig.crud) {
            this.api().columns( columnas.length - 1 ).visible( true );
            if (typeof(dataConfig.extra_config.confTblInput) != 'undefined') { this.api().columns( columnas.length - 2 ).visible( true ); }
          }
          else {
            if (typeof(dataConfig.extra_config.confTblInput) != 'undefined') { this.api().columns( columnas.length - 1 ).visible( true ); }
          }

          //ordena columnas
          if (colOrden.length > 0) {
            // this.api().colReorder.order(colOrden);
          }
          this.api().colReorder.disable();
          $("#"+idTbl).show();
          this.api().columns.adjust().draw();

					if (dataConfig.cargando) oculta_ventana_cargando();

          if (extraCondensed) { $('#' + idTbl + ' > tbody').addClass('table-condensed-extra'); } //<<<RPERAZA

          //agrega botones extra
          if (typeof dataConfig.extra_config.btnExtra !== "undefined") {
            $.each(dataConfig.extra_config.btnExtra, function(index, value) {
              tablaABC.button().add(0, {
                  action: function ( e, dt, button, config ) {
                  	eval(value.action+"('"+base_url+"')")
                  },
                  text: value.texto, titleAttr: value.titulo, className: (typeof(value.clase) != 'undefined' ? value.clase + ' btn btn-sm btnExtra btnDivisor' : 'btn btn-sm btn-inverse btnExtra btnDivisor'),
									attr:  {
											name: index,
											id: index
									}
              } );
            });
          }

					// if (tema == 'b5') {
					// 	tablaABC.button().add( 0, {
					// 			extend: 'pageLength',
					// 			className: 'btn btn-sm btn-white btnDivisor',
					// 	} );
					// }

					if (typeof dataConfig.extra_config.theadClass !== 'undefined') { $("#"+idTbl+' thead th').addClass(dataConfig.extra_config.theadClass); }

          if (typeof dataConfig.extra_config.ocultarCabecera !== 'undefined' | dataConfig.extra_config.ocultarCabecera == true)
            { $("#"+idTbl+' thead').css("display", "none"); }

					if (typeof dataConfig.extra_config.checkBox !== "undefined" && typeof dataConfig.extra_config.checkBoxIndex ) {
						this.api().cells(
	            this.api().rows(function(idx, data, node){
             		return (data[dataConfig.extra_config.checkBoxIndex] > 0) ? true : false;
            }).indexes(),0).checkboxes.select();
					}
				},

        data: dataSet,
        columns: columnas,
        language: { "url": "<?=base_url();?>assets/plugins/DataTables/Spanish.json" },
        // processing: 'true',
        responsive: dataConfig.tblResponsive,
        //para implementar checkboxes con pantalla responsiva
        // responsive: {
        //     details: {
        //         type: 'column'
        //     }
        // },
        pageLength: cantResultados,
        lengthMenu: dataConfig.mnuLength,
				//PENDIENTE: agregar confSumatoria
				// dom: (typeof dataConfig.extra_config.confSumatoria !== "undefined" ? (tema == 'b5') ? dataConfig.domb5+'<"#divExtraContent'+idTbl+'.text-end">'
				// : dataConfig.dom+'<"#divExtraContent'+idTbl+'.text-end">' :	dataConfig.domb5),
				layout: {
					topStart:
						(dataConfig.dom == 't' ? null :
							{
							buttons: [
								'pageLength',
								// (tema == 'b4' ? '' : 'pageLength'),
								{ text: '<i class="fas fa-plus"></i> Agregar ', titleAttr: 'Agregar Registro', className: 'btn-sm btn-default btnAgregarRegistro btnDivisor', action: function ( e, dt, node, config ) { agregar(); } },
								{ text: '<i class="fas fa-broom"></i> ', titleAttr: 'Borrar Filtros', className: 'btn-sm btn-default btndelFiltro btnDivisor', action:function ( e, dt, node, config ) { borrar_filtros(); } },
								{ text: '<i class="fa fa-id-badge fa-fw" aria-hidden="true"></i>', titleAttr: 'Cambiar vista', className: 'btn-sm btn-default btncardView btnDivisor',
									action: function ( e, dt, node, config ) {
														$("#"+idTbl+" thead").toggle();
														$("#"+idTbl+" tfoot tr" ).toggle();
														$(dt.table().node()).toggleClass('cards');
														$('.fa', node).toggleClass(['fa-table', 'fa-id-badge']);
														dt.draw('page');
													}
								},
								{ extend: 'colvis', columns: ':gt(0)', text: ' <i class="fas fa-ban"></i> ', titleAttr: 'Ocultar Columnas', className: 'btn-sm btn-default btnhideColumn btnDivisor'},
								{ extend: 'copyHtml5', text: ' <i class="far fa-copy"></i> ', className: 'btn-sm btn-default btncopiarTbl btnDivisor',
									titleAttr: 'Copiar tabla', exportOptions: { columns: ':visible' }
								},
								{ extend: 'excel', text: ' <i class="far fa-file-excel"></i> ', autoFilter:true, className: 'btn-sm btn-default btnexpXLS btnDivisor',
									titleAttr: 'Exportar resultado en Excel',  filename:'Reporte',
									exportOptions: {
										columns: function(idx, data, node) {
											if ($(node).hasClass('noVis')) {
												return false;
											}
											return $("#"+idTbl).DataTable().column(idx).visible();
										}
									},
									messageTop: $('#titulo-panel'+idTbl).html(), title: null,
									customize: function (xlsx) {
										$(xlsx.xl["styles.xml"]).find('numFmt[numFmtId="164"]').attr('formatCode', '[$$-es-MX] #,##0.00;[Red]-[$$-es-MX] #,##0.00');
									}
								},
								{ extend: 'pdfHtml5', text: ' <i class="far fa-file-pdf"></i> ', className: 'btn-sm btn-default btnexpPDF', titleAttr: 'Exportar resultado en PDF', exportOptions: { columns: colVisible },
									download: 'open',
									messageTop: $('#titulo-panel'+idTbl).html(), title: null,
									pageSize: 'LEGAL',
									customize : function(doc){
										var tableNode;
										for (i = 0; i < doc.content.length; ++i) {
											if (doc.content[i].table !== undefined) {
												tableNode = doc.content[i];
												break;
											}
										}
										var rowIndex = 0;
										var tableColumnCount = tableNode.table.body[rowIndex].length;
										if (tableColumnCount > 5) {
											doc.pageOrientation = 'landscape';
										}
										doc.styles.tableHeader.color = 'white';
										doc.styles.tableHeader.fillColor = '#9a0825';
										doc.defaultStyle.fontSize = 8;
										doc.defaultStyle.alignment = 'center';
										doc.styles.tableHeader.fontSize = 10;
										doc.pageMargins = [ 10, 10, 10, 10 ];
									}
								},
							],
						}
					),
					topEnd: (dataConfig.dom == 't' ? null : 'search'),
					bottomStart: (dataConfig.dom == 't' ? null : 'info'),
					bottomEnd: (dataConfig.dom == 't' ? function () {
																									if (typeof dataConfig.extra_config.confSumatoria !== "undefined") {
																										let divSumatoria = '<div id="divExtraContent'+idTbl+'" class="text-end"></div>';
																				          	return divSumatoria;
																									}
																									else { return '<div></div>'; }
																								} : 'paging'),
				},
				order: [[ dataConfig.key[0], dataConfig.key[2] ]],
        colReorder: (colOrden.length > 0 ? true : false),
        createdRow: function(row, data, dataIndex, cells) {
          if (typeof dataConfig.extra_config.claseFilas !== "undefined" && dataConfig.extra_config.claseFilas != "") {
            $(row).addClass(dataConfig.extra_config.claseFilas);
          }

          if (typeof dataConfig.extra_config.claseEspecial !== "undefined" && dataConfig.extra_config.claseEspecial != "") {
            if (data[dataConfig.extra_config.claseEspecial.colBusca] == dataConfig.extra_config.claseEspecial.strBusca) {
              if (typeof dataConfig.extra_config.claseEspecial.bCelda !== "undefined" && dataConfig.extra_config.claseEspecial.bCelda != "") {
                $('td', row).eq(dataConfig.extra_config.claseEspecial.bCelda).addClass(dataConfig.extra_config.claseEspecial.clase);
              }
              else { $(row).addClass(dataConfig.extra_config.claseEspecial.clase); }
            }
              // $( row ).find('td:eq('+dataConfig.extra_config.claseEspecial.colBusca+')') //pendiente implementar: agregar atributos a celda o fila.
              //   .addClass(dataConfig.extra_config.claseEspecial.clase);
                // .attr('data-status', data.status ? 'locked' : 'unlocked'),
                // .addClass('warning');
          }
        },
        drawCallback: function (settings) {
          var api = this.api();
          //funcionalidad del botón para cambiar el tipo de vista
          if (dataConfig.btncardView) {
            var $table = $(api.table().node());

            if ($table.hasClass('cards')) {
               var labels = [];
               $('thead th', $table).each(function () {
                 labels.push($(this).text());
               });

               $('tbody tr', $table).each(function () {
                $(this).find('td').each(function (column) {
                  $(this).attr('data-label', labels[column]);
                });
               });

               var max = 0;
               $('tbody tr', $table).each(function () {
                  max = Math.max($(this).height(), max);
               }).height(max);
            }
            else {
               $('tbody td', $table).each(function () {
                  $(this).removeAttr('data-label');
               });

               $('tbody tr', $table).each(function () {
                  $(this).height('auto');
               });
            }
          }
          //realiza la sumatoria de una columna definida (resultado en formato moneda)
          if (typeof dataConfig.extra_config.confSumatoria !== "undefined") {
            let sum = api.column( dataConfig.extra_config.confSumatoria, {filter:'applied'} ).data().sum();
            $('.tblSum'+idTbl).val( 'Total: '+formatCurrency(sum) );
          }

					if (typeof dataConfig.extra_config.drawCallback !== "undefined") {
						let param = this.api();
						const funciondrawCallback = new Function(`${dataConfig.extra_config.drawCallback}()`);
						funciondrawCallback();
          }
				},

        rowGroup: {
          enable: ( typeof dataConfig.extra_config.rowGroup !== "undefined" ? true : false ),
          dataSrc: ( typeof dataConfig.extra_config.rowGroup !== "undefined" ? dataConfig.extra_config.rowGroup : '' )
        },

        //select
        select: {
            style:    ( typeof dataConfig.extra_config.checkBox !== "undefined" ? 'multi+shift' : 'api' ),
            selector: 'td:first-child'
        },

        columnDefs: [
          colJSONconf,
					{ responsivePriority: 1, targets: (dataConfig.acciones ? (columnas.length - 1) : 1)},
          { targets: colCentrado, className: "dt-body-center" },
          { targets: colDerecha, className: "dt-body-right" },
          { targets: colIzquierda, className: "dt-body-left" },
          { targets: ['_all'], className: 'dt-head-center' },
          { targets: colEllipsis, render: $.fn.dataTable.render.ellipsis( 300, true ) },
          { targets: colFecha, render: function(data){ return fecha_sql_a_normal(data); } },
					{ targets: colAnio, render: function(data){ return fecha_sql_a_normal(data,"Y"); } },
          { targets: colMoneda, render: function(data){ return formatCurrency(data); } },
          { targets: colPorcentaje, render: function(data){ return formatPorcentaje(data); } },
          { targets: colCambiaValor, render: function(data){ return cambia_valor_celda(data); } },
          { targets: colClaseOpLog,
            createdCell: function (td, cellData, rowData, row, col) {
              if (typeof dataConfig.extra_config.claseOperadorLogico !== "undefined" && dataConfig.extra_config.claseOperadorLogico != "") {
                $.each( dataConfig.extra_config.claseOperadorLogico.arrColMod, function( key, value ) {
                  switch (dataConfig.extra_config.claseOperadorLogico.arrOpLog[key]) {
                    case '<':
                      if (cellData < dataConfig.extra_config.claseOperadorLogico.arrValor[key]) { $(td).addClass(dataConfig.extra_config.claseOperadorLogico.arrClase[key]) }
                      break;
                    case '>':
                      if (cellData > dataConfig.extra_config.claseOperadorLogico.arrValor[key]) { $(td).addClass(dataConfig.extra_config.claseOperadorLogico.arrClase[key]) }
                      break;
                    case '<=':
                      if (cellData <= dataConfig.extra_config.claseOperadorLogico.arrValor[key]) { $(td).addClass(dataConfig.extra_config.claseOperadorLogico.arrClase[key]) }
                      break;
                    case '>=':
                      if (cellData >= dataConfig.extra_config.claseOperadorLogico.arrValor[key]) { $(td).addClass(dataConfig.extra_config.claseOperadorLogico.arrClase[key]) }
                      break;
                    case '=':
                      if (cellData == dataConfig.extra_config.claseOperadorLogico.arrValor[key]) { $(td).addClass(dataConfig.extra_config.claseOperadorLogico.arrClase[key]) }
                      break;
                    case '!=':
                      if (cellData != dataConfig.extra_config.claseOperadorLogico.arrValor[key]) { $(td).addClass(dataConfig.extra_config.claseOperadorLogico.arrClase[key]) }
                      break;
                  }
                });
              }
            }
          },

          {
            targets: ( typeof dataConfig.extra_config.checkBox !== "undefined" ? dataConfig.extra_config.checkBox : null ),
            render: function(data, type, row, meta){
                if (type === 'display') {
                   data = '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>';
                }
                return data;

            },
						checkboxes: { 'selectRow': true,
							'selectAllRender': ( typeof dataConfig.extra_config.checkBoxAll !== "undefined" ? dataConfig.extra_config.checkBoxAll : '<input type="checkbox">' )
						},
          }
        ],
      });
    }

  }
  else{
    if (dataConfig.crud) {
      $('#divBtnAgregar').html('<div class="col-md-12 ">'+
                               '  <div class="form-group pull-right">'+
                               '    <button id="btnAgregar" class="btn btn-sm btn-inverse" title="Agregar Registro" onclick="agregar();"><i class="fas fa-plus"></i> Agregar</button>'+
                               '  </div>'+
                               '</div>');
    }
    oculta_ventana_cargando();
  }
});



//carga el contenido de los filtros
function cargaOpciones(columna,tabla) {
	let id = $(tabla).attr('id');
	let tablaABC = $('#'+id).DataTable(),
	    selector = $('#filtrocol_'+id+'_'+columna),
	    selectorVal = selector.val();
	selector.find('option').remove();
	selector.append('<option value="" style="font-weight:bold;">MOSTRAR TODO</option>');
	tablaABC.column(columna,{ filter : 'applied'}).data().unique().sort().each(function(d, j) {
		if (d.indexOf("span") >= 0) {
			var element = $(d);
			element.find("span").empty();
			element.find("span").remove();
			element.children().find("strong");
			var d = element.text().replace(/<br\s*\/?>/gi,'');
		}
	  if ($.inArray(columna,colFecha) != -1) {
	    selector.append('<option value="' + fecha_sql_a_normal(d) + '">'+fecha_sql_a_normal(d)+'</option>');
	  }
	  else if ($.inArray(columna,colMoneda) != -1) {
	    selector.append('<option value="' + formatCurrency(d) + '">'+formatCurrency(d)+'</option>');
	  }
		else if ($.inArray(columna,colCambiaValor) != -1) {
			selector.append('<option value="' + cambia_valor_celda(d) + '">'+cambia_valor_celda(d)+'</option>');
		}
	  else {
	    var valor = d.replace(/<br\s*\/?>/gi,'');
	    selector.append('<option value="' + valor + '">'+d+'</option>');
	  }
	});
	if (selectorVal != '') selector.val(selectorVal);
}

//genera la funcionalidad para el doble click en la tabla
if (typeof dataConfig.fnc_dblclick  !== "undefined" && dataConfig.fnc_dblclick != "") {
  $('#'+idTbl).on('dblclick','tr',function(e){
    var tablaPR = $('#'+idTbl).DataTable(),
        data = tablaPR.row(this).data();

    if (typeof(tablaPR.row(this).index()) == "undefined") return false;

    if (typeof(data) == "undefined" || data == "" || data == null) {
      alerta_emergente("Error al obtener los datos del registro.","warning");
      return false;
    }

     eval(dataConfig.fnc_dblclick+"('"+base_url+"',"+JSON.stringify(data)+")");
  })
}

function cambia_valor_celda(valor) {
	if (typeof dataConfig.extra_config.modCell !== 'undefined') {
		$.each( dataConfig.extra_config.modCell.arrColMod, function( key, value ) {
      if (dataConfig.extra_config.modCell.arrayBusca[key] == valor) { valor = dataConfig.extra_config.modCell.arrayMod[key]; }
    });
    return valor;
	}
	return false;
}

function borrar_filtros() {
  $('.slt_filtro').val('');
  var table = $('#'+idTbl).DataTable();
  table.search('').columns().search('').draw();
}

function agregar() {
  cargamodalGenerica('<?= base_url() ?>index.php/'+controller+'/'+funcion+'/','#modcontentABC', '#modpjeyABC', 'id=0&accion=editar', "Agregar", 1, true);
  return false;
}

function editar(id) {
  if( typeof(id) == "undefined" || id == "" ){
    alerta_emergente("Error al obtener la información del registro.","warning");
    return false;
  }
  var tablaPR = $('#'+idTbl).DataTable(),
      data = tablaPR.row(id).data(),
      idReg = data[ dataConfig.key[1] ];

  if( typeof(idReg) == "undefined" || idReg == "" ){
    alerta_emergente("Error al obtener la información del registro.","warning");
    return false;
  }

  cargamodalGenerica('<?= base_url() ?>index.php/'+controller+'/'+funcion+'/','#modcontentABC', '#modpjeyABC', 'id='+idReg+'&accion=editar', "Editar", 1, true);
  return false;
}

function eliminar(id) {
  if( typeof(id) == "undefined" || id == "" ){
    alerta_emergente("Error al obtener la información del registro.","warning");
    return false;
  }

  var tablaPR = $('#'+idTbl).DataTable(),
      data = tablaPR.row(id).data(),
      idReg = data[ dataConfig.key[1] ];

  if( typeof(idReg) == "undefined" || idReg == "" ){
    alerta_emergente("Error al obtener la información del registro.","warning");
    return false;
  }

  swal.fire({
     title: "Alerta",
     text: "¿Confirma que desea eliminar el registro seleccionado?",
     icon: "question",
     showCancelButton: true,
     showLoaderOnConfirm: true,
     allowOutsideClick: false,
     preConfirm: function () {
       return new Promise(function(resolve) {
         Carga_Metodo('<?= base_url() ?>index.php/'+controller+'/'+funcion+'/', 'idReg='+idReg+'&accion=borrar', exito_eliminar_registroABC, "Eliminando*");
      });
     }
  });

  return false;

}

function exito_eliminar_registroABC(data) {
  if( data.status == false ) { alerta_emergente(data.message, "warning"); }
  else{
    alerta_emergente(data.message, "success");
    cargarpag("<?=base_url();?>"+controller+"/"+funcion, "div#"+parentdiv, true, "POST", "");
  }
}

function ventana_cargando(titulo,mensaje) {
	if( typeof(titulo) == "undefined" || titulo === "" ) { titulo = "Cargando..."; }
	if( typeof(mensaje) == "undefined" || mensaje === "" ) { mensaje = ""; }
  $(document.body).css({'cursor' : 'wait'});
  swal.fire({
		 icon: 'warning',
     title: titulo,
     text: mensaje,
     showConfirmButton: false,
     allowOutsideClick: false,
		 allowEscapeKey: false
   });
}

function oculta_ventana_cargando(divId, name) {
  $(document.body).css({'cursor' : 'default'});
  swal.close();
}

$("#modpjeyABC").on("hidden.bs.modal", function () {
  cargarpag("<?=base_url();?>"+controller+"/"+funcion, "div#"+parentdiv, true, "POST", "");
  return false;
});

// footerCallback: function( tfoot, data, start, end, display ) {
//   // var api = this.api(), data;
//   // $(api.column(16).footer()).html(format(total2, ''));
//   // var api = this.api(), data;
//   //
//   //             // Remove the formatting to get integer data for summation
//   //             var intVal = function ( i ) {
//   //                 return typeof i === 'string' ?
//   //                     i.replace(/[\$,]/g, '')*1 :
//   //                     typeof i === 'number' ?
//   //                         i : 0;
//   //             };
//   //
//   //             // Total over all pages
//   //             total = api
//   //                 .column( 16 )
//   //                 .data()
//   //                 .reduce( function (a, b) {
//   //                     return intVal(a) + intVal(b);
//   //                 }, 0 );
//   //
//   //             // Total over this page
//   //             pageTotal = api
//   //                 .column( 16, { page: 'current'} )
//   //                 .data()
//   //                 .reduce( function (a, b) {
//   //                     return intVal(a) + intVal(b);
//   //                 }, 0 );
//   //
//   //             // Update footer
//   //             $( api.column( 16 ).footer() ).html(
//   //               '$'+pageTotal +' ( $'+ total +' total)'
//   //             );
// },

</script>
