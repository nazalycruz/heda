<?php ;//<<< RPERAZA(2019.08.19): CASU 1109/2019 ?>

     <table id="tblListadoEscuelas" class="table table-bordered table-striped table-condensed">
        <thead>
          <tr>
            <th>Escuela
            </th>
            <th>Razón Social</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody><?php
          if($escuelas):;
            foreach( $escuelas as $item ):;?>
              <tr>
                <td><?= LimpiaCadena($item->Nombre); ?></td>
                <td><?= LimpiaCadena($item->RazonSocial); ?></td>
                <td class="text-center">
                  <button type="button" class="btn btn-xs btn-default" onclick="CapturarEscuela(<?= $item->EscuelaId;?>);" title="Editar"><i class="fa fa-pencil-alt"></i></button>
                  <button type="button" class="btn btn-xs btn-default" onclick="EliminarEscuela(<?= $item->EscuelaId;?>);" title="Eliminar"><i class="fa fa-trash"></i></button>
                </td>
              </tr><?php
            endforeach;
          endif;?>
        </tbody>
      </table>

<script>
  setTimeout(function inicializarTablas(){
    inicializaDatatable('tblListadoEscuelas',20,true);
  });
</script>
