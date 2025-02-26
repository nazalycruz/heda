<?php

//Arreglo predeterminado para generar el formulario.
//Para los campos fecha, en ConfExtra se agrega el parámetro claeObj:e_fechaDin
$catalogos = array(
    'CCON'  => array(
      'nombre'      => 'conceptos',
      'titulo'      =>  'Conceptos',
      'consulta'    =>  'trae_cat_conceptos',
			'tabla'				=>	'cat_Conceptos'
    ),
		'CCAT'  => array(
			'nombre'      => 'categorias',
			'titulo'      =>  'Categorías',
			'consulta'    =>  'traer_cat_varios_filtros',
			'tabla'				=>	'cat_Categorias',
			'conf' => array('fnc' => 'catalogos/abc_cat_categorias')
		),
		//catálogo de emisores
		'CEMR'  => array(
			'nombre'      => 'emisores',
			'titulo'      =>  'Emisores',
			'consulta'    =>  'traer_cat_varios_filtros',
			'tabla'				=>	'cat_Emisores',
			'conf' => array('fnc' => 'catalogos/abc_cat_emisores')
		),
		'CACR'  => array(
			'nombre'      => 'acreedores',
			'titulo'      =>  'Acreedores',
			'consulta'    =>  'traer_cat_varios_filtros',
			'tabla'				=>	'cat_Acreedores',
			'conf' => array('fnc' => 'catalogos/abc_cat_acreedores')
		),
		'CDEP'  => array(
			'nombre'      => 'dependencias',
			'titulo'      =>  'Dependencias',
			'consulta'    =>  'traer_cat_varios_filtros',
			'tabla'				=>	'cat_Dependencias',
			'conf' => array('fnc' => 'catalogos/abc_cat_dependencias')
		),
		'CUADMV'  => array(
			'nombre'      => 'unidades_admvas',
			'titulo'      =>  'Unidades Admvas.',
			'consulta'    =>  'traer_cat_varios_filtros',
			'tabla'				=>	'Cat_UniAdmvas',
			'conf' => array('fnc' => 'catalogos/abc_cat_uniadmvas')
		),
		'CDADMV'  => array(
			'nombre'      => 'direcciones_admvas',
			'titulo'      =>  'Direcciones Admvas.',
			'consulta'    =>  'traer_cat_varios_filtros',
			'tabla'				=>	'Cat_DireccionAdmvas',
			'conf' => array('fnc' => 'catalogos/abc_cat_diradmvas')
		),
		'CDF'  => array(
			'nombre'      => 'dias_festivos',
			'titulo'      =>  'Días Festivos',
			'consulta'    =>  'traer_cat_varios_filtros',
			'tabla'				=>	'Cat_DiasFestivos'
		),
);

// if (!empty($confForm)) {
//   if (is_array($confForm)) {
//     foreach ($confForm as $item) {
//       $arrayConf[$item->ClaveSeccion][$item->Clave] = get_object_vars($item);
//     }
//
//     foreach ($defaultForm as $key => $value) {
//       if (isset($arrayConf[$key])) {
//         $defaultForm[$key] = $arrayConf[$key];
//         unset($arrayConf[$key]);
//       }
//     }
//
//     if (count($arrayConf) > 0) {
//       $defaultForm = array_merge($defaultForm, $arrayConf);
//     }
//   }
// }

if (!empty($tabs)) {
?>
<div class="d-flex justify-content-between">
  <h1 class="page-header">Mantenimiento de Catálogos <small></small></h1>
	<div><h4><a href="<?= base_url(); ?>assets/manuales/Mantenimiento_Catalogos.pdf" target="_blank" title="Abrir archivo de ayuda" class="text-black-900"><i class="fa-regular fa-circle-question"></i></a></h4></div>
</div>
  <div class="card mb-2">
    <div class="card-header p-10">
			<ul class="nav nav-pills card-header-pill" id="pills-catalogos" role="tablist">
				<?php
				if (!empty($catalogos)) {
					foreach ($catalogos as $key => $value) {
				?>
			  <li class="nav-item" role="presentation">
			    <button class="nav-link" id="tab-<?= $value['nombre']; ?>" data-bs-toggle="tab" data-bs-target="#nav-pills-<?= $value['nombre']; ?>"
						type="button" role="tab" aria-controls="<?= $value['nombre']; ?>" aria-selected="false"
						data-item="<?= $value['nombre']; ?>" data-consulta="<?= $value['consulta']; ?>" data-conf="<?= htmlspecialchars(json_encode($catalogos[$key])); ?>"><?= $value['titulo']; ?></button>
			  </li>
				<?php
					}
				}
				?>
			</ul>
    </div>
    <div class="card-block">
      <div class="tab-content p-0 m-0" id="pills-tabContent">
        <?php
        if(!empty($catalogos)) {
          foreach ($catalogos as $key => $value) {
        ?>
        <div class="tab-pane" id="nav-pills-<?= $value['nombre']; ?>" role="tabpanel" aria-labelledby="tab-<?= $value['nombre']; ?>">
          <div class="card-body">
            <div class="row">
              <div class="col-12" id="div<?= $value['nombre']; ?>">
								<!-- Contenido del catálogo -->
							</div>
            </div>
          </div>
          <!-- cargar formulario con contenido genérico -->
        </div>
        <?php
          }
        }
        ?>
      </div>
      <!-- card-block -->
    </div>
    <!-- card-header -->
  </div>
  <!-- card -->
<?php
}

if (!empty($contenido)) {
  foreach ($defaultForm as $key => $value) {
  ?>
  <div class="row" id="sec_<?= $key; ?>">
  <?php
    if (!empty($defaultForm[$key])) {
      foreach ($defaultForm[$key] as $item) {
        $confExtra = (!empty($item['ConfExtra']) ? json_decode($item['ConfExtra'],true) : '');
  ?>
        <div class="<?= $item['Clase']; ?>">
          <div class="form-group">
            <label for="<?= $item['nombreCampo']; ?>"><strong><?= $item['Etiqueta']; ?></strong></label>
            <input type="<?= $item['Tipo']; ?>" class="form-control form-control-sm <?= (empty($confExtra['claseObj']) ? '' : $confExtra['claseObj']); ?>"
            id="<?= $item['nombreCampo']; ?>" name="<?= $item['nombreCampo']; ?>"
            value="<?= (empty($evento->{$item['Predeterminado']}) ? '' : $evento->{$item['Predeterminado']}); ?>" placeholder="<?= $item['Placeholder']; ?>"
            onkeypress="return <?= (empty($confExtra['funKeyP']) ? 'dispara_tab' : $confExtra['funKeyP']); ?>(event, this);"
            <?= (!empty($item['Obligatorio']) ? ' required ' : ''); ?>
            autocomplete="off">
            <p class="help-block"><?= (empty($confExtra['help']) ? '' : $confExtra['help']); ?></p>
          </div>
        </div>
  <?php
      }
    }
  ?>
  </div>
  <?php
  }
}
?>

<script type="text/javascript">
  $(function(){
    $('#tab-<?= $inicio; ?>').click();
  });

	$('.nav-link').on('shown.bs.tab', function(event){
		event.preventDefault();
	  let catalogo = $(event.target).data('item'),
	      consulta = $(event.target).data('consulta'),
				configuracion = $(event.target).data('conf');
		if (typeof(configuracion.conf) != "undefined") { funcion = configuracion.conf.fnc; }
		else funcion = 'catalogos/carga_catalogo_generico'
		cargarpag(funcion, "div#div"+catalogo, true, "POST",{catalogo:catalogo,consulta:consulta,configuracion:configuracion,accion:'listar'});
	  return false;
	});

	function carga_catalogo(funcion,catalogo,consulta) {
		cargarpag(funcion, "div#div"+catalogo, true, "POST",{catalogo:catalogo,consulta:consulta,accion:'listar'});
    return false;
	}

  function editar_cat_concepto(url,data,esBoton) {
    if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }

    if (esBoton) data = $(data).data('json');
    var idConcepto = data.Id;

    if (typeof(idConcepto) == "undefined" || idConcepto == "" || idConcepto == null) {
      alerta_emergente("Error al obtener los valores del concepto.","warning");
      return false;
    }

    cargamodalGenerica(url+'catalogos/carga_editar_concepto/','#modContenido', '#modGeneral', {idConcepto:idConcepto}, 'Configurar Concepto: '+data.Descripcion, 1, false, false);
    return false;
  }

  function nuevo_cat_concepto() {
    cargamodalGenerica('catalogos/carga_editar_concepto/','#modContenido', '#modGeneral', '', 'Configurar Nuevo Concepto', 1, false, false);
    return false;
  }

	function editar_cat_diasfestivos(url,data,esBoton) {
		if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }

		if (esBoton) data = $(data).data('json');
		var idDiaFestivo = data.DiaID;

		if (typeof(idDiaFestivo) == "undefined" || idDiaFestivo == "" || idDiaFestivo == null) {
			alerta_emergente("Error al obtener los valores del concepto.","warning");
			return false;
		}

		cargamodalGenerica(url+'catalogos/carga_editar_diafestivo/','#modContenido', '#modGeneral', {idDiaFestivo:idDiaFestivo}, 'Configurar Día Festivo: '+data.Descripcion, 1, false, false);
		return false;
	}

	function nuevo_cat_diasfestivos() {
		cargamodalGenerica('catalogos/carga_editar_diafestivo/','#modContenido', '#modGeneral', '', 'Configurar Nuevo Concepto', 1, false, false);
		return false;
	}

	function editar_cat_dependencias(url,data,esBoton) {
		if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }

		if (esBoton) data = $(data).data('json');
		let idDependencia = data.Id,
				idUniAdmvas = data.IdUniAdmvas;

		if (typeof(idDependencia) == "undefined" || idDependencia == "" || idDependencia == null) {
			alerta_emergente("Error al obtener los valores de la dependencia.","warning");
			return false;
		}
		cargamodalGenerica('catalogos/abc_cat_dependencias/','#modContenido', '#modGeneral', {Id:idDependencia,idUniAdmvas:idUniAdmvas,accion:'editar_aux',vista_aux:'catalogos/editar_dependencia'}, 'Configurar dependencia: '+data.Descripcion, 1, false, false);
		return false;
	}

	function editar_cat_categorias(url,data,esBoton) {
		if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }

    if (esBoton) data = $(data).data('json');
    let idCategoria = data.Id;

    if (typeof(idCategoria) == "undefined" || idCategoria == "" || idCategoria == null) {
      alerta_emergente("Error al obtener los valores de la categoría.","warning");
      return false;
    }
    cargamodalGenerica('catalogos/abc_cat_categorias/','#modContenido', '#modGeneral', {Id:idCategoria,accion:'editar_aux',vista_aux:'catalogos/editar_categoria'}, 'Configurar categoría: '+data.Descripcion, 1, false, false);
    return false;
	}

	function editar_cat_acreedores(url,data,esBoton) {
		if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }

		if (esBoton) data = $(data).data('json');
		let idAcreedor = data.Id;

		if (typeof(idAcreedor) == "undefined" || idAcreedor == "" || idAcreedor == null) {
			alerta_emergente("Error al obtener los valores del Acreedor.","warning");
			return false;
		}
		cargamodalGenerica('catalogos/abc_cat_acreedores/','#modContenido', '#modGeneral', {Id:idAcreedor,accion:'editar_aux',vista_aux:'catalogos/editar_acreedor'}, 'Configurar Acreedor: '+data.Acreedor, 1, false, false);
		return false;
	}

	function editar_cat_uniadmva(url,data,esBoton) {
		if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
		if (esBoton) data = $(data).data('json');
		let idUnidadAdmva = data.IdUniAdmvas,
				idDirAdmva = data.IdDireccion;

		if (typeof(idUnidadAdmva) == "undefined" || idUnidadAdmva == "" || idUnidadAdmva == null) {
			alerta_emergente("Error al obtener los valores de la Unidad Administrativa.","warning");
			return false;
		}
		cargamodalGenerica('catalogos/abc_cat_uniadmvas/','#modContenido', '#modGeneral', {Id:idUnidadAdmva,idDirAdmva:idDirAdmva,accion:'editar_aux',vista_aux:'catalogos/editar_unidad_admva'}, 'Configurar Unidad Administrativa: '+data.Descripcion, 1, false, false);
		return false;
	}

	function editar_cat_diradmva(url,data,esBoton) {
		if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
		if (esBoton) data = $(data).data('json');
		let idDirAdmva = data.IdDireccion;

		if (typeof(idDirAdmva) == "undefined" || idDirAdmva == "" || idDirAdmva == null) {
			alerta_emergente("Error al obtener los valores de la Dirección Administrativa.","warning");
			return false;
		}
		cargamodalGenerica('catalogos/abc_cat_diradmvas/','#modContenido', '#modGeneral', {Id:idDirAdmva,accion:'editar_aux',vista_aux:'catalogos/editar_direccion_admva'}, 'Configurar Unidad Administrativa: '+data.Descripcion, 1, false, false);
		return false;
	}

	function nuevo_cat_emisores() {
		cargamodalGenerica('catalogos/editar_emisor/','#modContenido', '#modGeneral', {id:0,}, 'Configurar Nuevo Emisor', 1, false, false);
		return false;
	}

	function editar_cat_emisores(url,data,esBoton) {
		if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }

		if (esBoton) data = $(data).data('json');
		let idEmisor = data.Id;

		if (typeof(idEmisor) == "undefined" || idEmisor == "" || idEmisor == null) {
			alerta_emergente("Error al obtener los valores del emisor.","warning");
			return false;
		}
		cargamodalGenerica('catalogos/editar_emisor/','#modContenido', '#modGeneral', {id:idEmisor}, 'Configurar emisor: '+data.Emisor, 1, false, false);
		return false;
	}

	function carga_catalogo_archivo() {
		cargamodalGenerica('catalogos/carga_catalogo_archivo/','#modContenido', '#modGeneral', "", 'Cargar categorías por Archivo', 1, false, false);
		return false;
	}

	function nuevo_cat_acreedor() {
		cargamodalGenerica('catalogos/abc_cat_acreedores/','#modContenido', '#modGeneral', {Id:0,accion:'nuevo',vista_aux:'catalogos/editar_acreedor'}, 'Configurar nuevo Acreedor', 1, false, false);
		return false;
	}

	function nuevo_cat_uniadmva() {
		cargamodalGenerica('catalogos/abc_cat_uniadmvas/','#modContenido', '#modGeneral', {Id:0,accion:'nuevo',vista_aux:'catalogos/editar_unidad_admva'}, 'Configurar nueva Unidad Administrativa', 1, false, false);
		return false;
	}

	function nuevo_cat_diradmva() {
		cargamodalGenerica('catalogos/abc_cat_diradmvas/','#modContenido', '#modGeneral', {Id:0,accion:'nuevo',vista_aux:'catalogos/editar_direccion_admva'}, 'Configurar nueva Dirección Administrativa', 1, false, false);
		return false;
	}

	function eliminar_cat_acreedores(url,data,esBoton) {
		if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }
		let idAcreedor = data.Id;
		if (typeof(idAcreedor) == "undefined" || idAcreedor == "" || idAcreedor == null) {
			alerta_emergente("Error al obtener los valores del Acreedor.","warning");
			return false;
		}
		Carga_Metodo('catalogos/abc_cat_acreedores/', {Id:idAcreedor,accion:'borrar'} , function finaliza_fnc(respuesta) {
			if (respuesta.status == false) {
				alerta_emergente(respuesta.message, "warning");
			}
			else {
				alerta_emergente(respuesta.message,"success");
				carga_catalogo('catalogos/abc_cat_acreedores','acreedores','traer_cat_varios_filtros');
			}
			return false;
		}, "Eliminando...");
		return false;
	}
</script>
