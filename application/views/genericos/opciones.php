<?php ; //vista para cargar las opciones de un select

$id_sel = (empty($campoid) ? 'Id' : $campoid);
$desc_sel = (empty($campodesc) ? 'Descripcion' : $campodesc);
$info_data = (!isset($info_data) || !is_bool($info_data) ? true : $info_data); //<<<RPERAZA(2021.05.21): CASU 0804/2021

if( $elemvacio == true ) echo '<option></option>';

foreach( $catalogo as $item ){
	$data = '';
	$selected = '';

	if( $info_data == true ){ //<<<RPERAZA(2021.05.21): CASU 0804/2021
		$prop = get_object_vars($item);
		foreach($prop as $name => $value){
			$data .=' data-'.strtolower($name).'="'.$value.'"';
		}
	}

	if ($id == $item->{$ident}) $selected = 'selected="selected"';

	echo '<option value="'.$item->{$id_sel}.'" '.$selected.' '.$data.'>'.$item->{$desc_sel}.'</option>'.PHP_EOL;

	//if( $id == $item->{$ident} ) echo '<option value="'.$item->{$id_sel}.'" selected="selected" data-clave="'.(empty($item->{$clave_sel}) ? '' : $item->{$clave_sel}).'">'.$item->{$desc_sel}.'</option>'.PHP_EOL;
	//else echo '<option value="'.$item->{$id_sel}.'" data-clave="'.(empty($item->{$clave_sel}) ? '' : $item->{$clave_sel}).'">'.$item->{$desc_sel}.'</option>'.PHP_EOL;
}

?>
