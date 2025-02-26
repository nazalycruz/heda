					<?php
					if( isset($imagenes) ){
					foreach($imagenes as $item){?>
					<tr><td>

						<input type="hidden" id="DescImagen_<?=$item->IdImagen;?>" value="<?=LimpiaCadena($item->Titulo);?>"><?php
						if($estado_datos < 3 |  verificar_permiso('WFBEM') == 3){?>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-original-title="Eliminar imagen" title="Eliminar imagen" onclick="EliminarImagen(<?=$item->IdImagen;?>);"><i class="fa fa-times"></i></a>&nbsp;<?php
						}?>
						<span><a href="<?=(empty($ruta_img_v->Valor) ? RUTA_IMG_ESTUDIANTE : $ruta_img_v->Valor).$item->Nombre;?>" title="Abrir imagen" target="_blank" ><?=LimpiaCadena($item->Titulo);?></a></span>

					</td></tr><?php
					}}?>
