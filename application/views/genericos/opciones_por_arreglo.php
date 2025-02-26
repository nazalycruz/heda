<!-- vista para cargar las opciones de un select en base a un arreglo-->
<?php

foreach ($catalogo as $key => $value) {
	if( $id == $item->{$ident} ) echo '<option value="'.$item->{$id_sel}.'" selected="selected" data-clave="'.(empty($item->Clave) ? '' : $item->Clave).'">'.$item->{$desc_sel}.'</option>'.PHP_EOL;
	else echo '<option value="'.$item->{$id_sel}.'" data-clave="'.(empty($item->Clave) ? '' : $item->Clave).'">'.$item->{$desc_sel}.'</option>'.PHP_EOL;
}

?>
