<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <div class="row">
    <div class="col-3">
      <div class="form-group">
        <label for="de_credencial"><b>Credencial</b></label>
        <input type="text" readonly class="form-control form-control-sm f-w-600" value="<?= $encabezado->Credencial; ?>" />
      </div>
    </div>
    <div class="col-9">
      <div class="form-group">
        <label for="de_nombre"><b>Nombre</b></label>
        <input type="text" readonly class="form-control form-control-sm f-w-600"  value="<?= $encabezado->Empleado; ?>"  />
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label for="pext_categoria"><b>Categoría</b></label>
        <input type="text" readonly class="form-control form-control-sm f-w-600"  value="<?= $encabezado->Categoria; ?>"  />
      </div>
    </div>
    <div class="col-6">
      <div class="form-group">
        <label for="pext_dependencia"><b>Dependencia</b></label>
        <input type="text" readonly class="form-control form-control-sm f-w-600"  value="<?= $encabezado->Dependencia; ?>"  />
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-2">
      <div class="form-group">
        <label><b>Pago Electrónico</b></label>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="chkENomina" name="chkENomina" value="1" <?= ($encabezado->ENomina ? 'checked="checked"' : '') ?> disabled>
          <label class="custom-control-label" for="chkENomina"></label>
        </div>
      </div>
    </div>

    <div class="col-4">
      <div class="form-group">
        <label for="pext_numerocuenta"><b>Número de cuenta</b></label>
        <input type="text" readonly class="form-control form-control-sm f-w-600"  value="<?= $encabezado->NumeroCuenta; ?>"  />
      </div>
    </div>

    <div class="col-4">
      <div class="form-group">
        <label for="pext_emisor"><b>Banco</b></label>
        <input type="text" readonly class="form-control form-control-sm f-w-600"  value="<?= $encabezado->Emisor; ?>"  />
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-6">
      <div class="table-responsive">
        <table class="table" cellspacing="0" width="100%">
          <thead class="bg-percepcion text-black">
            <tr>
              <th>Clave</th>
              <th>Percepción</th>
              <th>Monto</th>
              <th>Gravado</th>
              <th>Exento</th>
              <th></th>
            </tr>
          </thead>
          <tbody class="text-black">
            <?php
            if (!empty($detalle)) {
              $totalper = 0;
              $i=0;
              foreach ($detalle as $item) {
                if ($item->EsPercepcion == 1) {
            ?>
                  <tr >
                    <td><?= $item->claveRecibo; ?></td>
                    <td><?= $item->Concepto; ?></td>
                    <td><?= DecimalMoneda($item->Monto); ?></td>
                    <td><?= DecimalMoneda($item->MontoGravado); ?></td>
                    <td><?= DecimalMoneda($item->MontoExento); ?></td>
                  </tr>
            <?php
                  $totalper = $totalper + $item->Monto;
                  $i++;
                }
              }
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-6">
      <div class="table-responsive">
        <table class="table" cellspacing="0" width="100%">
          <thead class="bg-danger text-black">
            <tr>
              <th>Clave</th>
              <th>Deducción</th>
              <th>Monto</th>
              <th></th>
            </tr>
          </thead>
          <tbody class="text-black">
            <?php
            if (!empty($detalle)) {
              $totalded = 0;
              $i=0;
              foreach ($detalle as $item) {
                if ($item->EsPercepcion ==0) {
            ?>
                  <tr >
                    <td><?= $item->claveRecibo; ?></td>
                    <td><?= $item->Concepto; ?></td>
                    <td><?= DecimalMoneda($item->Monto); ?></td>
                  </tr>
            <?php
                  $totalded = $totalded + $item->Monto;
                  $i++;
                  }

              }
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <hr class="text-black bg-black">
  <div class="row clearfix">
    <div class="col-md-12 text-end text-black">
      <!-- <p class="mb-0"><b>Total Percepciones:</b></p><input type="text" class="form-control-plaintext nom_currency" value="<?= $totalper; ?>" readOnly/> -->
      <p class="mb-0"><b>Total Percepciones:</b> <?= '$'.DecimalMoneda($totalper); ?></p>
      <p class="mb-0"><b>Total Deducciones:</b> <?= '$'.DecimalMoneda($totalded); ?></p>
      <h5 class="mb-0 m-t-10">Total: <?= '$'.DecimalMoneda($totalper - $totalded); ?></h5>
    </div>
  </div>
</div>

<div class="modal-footer">
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>
