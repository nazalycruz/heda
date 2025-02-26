<?php
function genera_menu_html($menu, $idPadre = 0, $nivel = 0)
{
	$html = '';
	foreach($menu as $index => $opcion)
	{
		$clase_icono = ($opcion['clase_icono'] != '' ? $opcion['clase_icono'] : 'fa fa-genderless');

		if (!empty($opcion['contSubMenu'])) {
			if ($opcion['idOpcionPadre'] == $idPadre) {
				$html .= '<div class="menu-item has-sub">';
				$html .= '	<a href="javascript:;" class="menu-link">';
				$html .= '		<div class="menu-icon" title="'.(LimpiaCadena($opcion['NombreWeb'])).'"><i class="'.$clase_icono.'"></i></div>';
				$html .= '		<div class="menu-text">'.(LimpiaCadena($opcion['NombreWeb'])).'</div>';
				$html .= '		<div class="menu-caret"></div>';
				$html .= '	</a>';
				$html .= '	<div class="menu-submenu">';
				$html .= genera_menu_html($opcion['submenu'], $opcion['idOpcion'], $nivel+1);
				$html .= '	</div>';
	      $html .= '</div>';
	    }
		}
		else {
			$clase_icono = ($nivel == 0 ? $clase_icono : ($opcion['clase_icono'] != '' ? $opcion['clase_icono'] : 'far fa-dot-circle'));
			$onclick = (empty($opcion['NewWinWeb']) ? 'CargarModulo(\''.base_url().'\',\''.$opcion['url'].'\');' :
									'cargamodalGenerica(\''.base_url().$opcion['url'].'\', \'#modContenido\', \'modGeneral\', \'\',\''.(LimpiaCadena($opcion['NombreWeb'])).'\', 1);');
			$html .= '<div class="menu-item">';
			$html .= '	<a href="javascript:;" class="menu-link" onclick="'.$onclick.'">';
			$html .= '		<div class="menu-icon" title="'.(LimpiaCadena($opcion['NombreWeb'])).'"><i class="'.$clase_icono.'"></i></div>';
			$html .= '		<div class="menu-text">'.(LimpiaCadena($opcion['NombreWeb'])).'</div>';
			$html .= '  </a>';
			$html .= '</div>';
		}

	}
	return $html;
}

echo genera_menu_html($menu);
?>
