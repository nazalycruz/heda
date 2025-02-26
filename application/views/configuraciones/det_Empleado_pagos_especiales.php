<div class="card mb-2">
  <div class="card-body">
    <div class="row">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <legend>Resumen de días contabilizados</legend>
            <?php
						if (!empty($diasCondensado)) {
            $conceptos = (empty($diasCondensado) ? 0 : $diasCondensado[0]->ConceptosXPagar);
            $puestos = (empty($diasCondensado) ? 0 : $diasCondensado[0]->Puestos);
						?>
						<div class="col-12">
				      <div class="form-group">
				        <input type="text" readonly class="form-control-plaintext fw-bold fs-5" value="<?= "Puestos: ".($puestos); ?>" />
				      </div>
				    </div>
						<?php
						foreach ($diasCondensado as $item) {
            ?>
            <ul class="list-group list-group-flush fw-bold">
              <li class="list-group-item"><?= $item->Concepto; ?>
                <ul id="subgroup" class="list-group">
                  <li class="list-group-item"><?= $item->Categoria.': D. Lab. '.$item->DiasLaboradosXCat.' - D. Proy. '.$item->DiasProyectadosXCat; ?></li>
                </ul>
              </li>
            </ul>
            <?php
							}
            }
            ?>
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <legend>Detalle de días por quincena</legend>
            <div id="jstree-default">

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="card">
  <div class="card-body">
		<legend>Movimientos</legend>
    <?= $movimientos; ?>
  </div>
</div>

<?php
$mes = 0;
$catData = '[';
if (!empty($diasCat)) {
  foreach ($diasCat as $key => $value) {
    if ($value->NumMes > $mes) {
      $catData .= '{"id":"'.$value->NumMes.'","parent":"#","text":'.json_encode(strtoupper($value->Mes)).',"state":{"opened":"true"},"a_attr":{"class":"fw-600 text-orange-700"}},';
    }
    $mes = $value->NumMes;
		$botonRI = ' <button type=\'button\' title=\'Registros Iniciales\' class=\'btn btn-sm btn-outline-secondary btn-icon\' onclick=\'abre_registros_iniciales('.$value->PeriodoPagoID.');\'><i class=\'fas fa-list-ol\'></i></button>';
    $quincena = ($value->Quincena == 1 ? 'Primera Quincena' : 'Segunda Quincena').$botonRI;
		$textCategoria = str_replace(array('\'', '"'), '', $value->Categoria);
    $categoria = '('.($value->DiasXQuincena).') - '.($textCategoria);
    $catData .= '{"id":"'.$value->NumMes.'_'.$value->Quincena.'","parent":"'.$value->NumMes.'","text":"'.$quincena.'","state":{"opened":"true"}},';
    $catData .= '{"id":"'.$value->NumMes.'_'.$value->Quincena.'_'.$value->CategoriaID.'","parent":"'.$value->NumMes.'_'.$value->Quincena.'","text":"'.$categoria.'","state":{"opened":"true"},"a_attr":{"class":"text-green-700"}},';
  }
}
$catData .= ']';
?>

<script type="text/javascript">
$(document).ready(function(){
  var data = <?= $catData; ?>;
  $('#jstree-default').jstree({
      "core": {
          "data" : data,
          "themes": {
              "responsive": true,
              "icons":false
          }
      },
  });
});
</script>
