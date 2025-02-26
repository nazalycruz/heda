<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visor de Log</title>
    <link href="<?=base_url();?>assets/plugins/font-Roboto/css/Roboto.css" rel="stylesheet" />
		<link href="<?=auto_version('assets/css/vendor.min.css');?>" rel="stylesheet" />
		<link href="<?=auto_version('assets/css/app.min.css');?>" rel="stylesheet" />
    <link href="<?=auto_version('assets/plugins/DataTables/datatables.min.css');?>" rel="stylesheet" />
  	<link href="<?=auto_version('assets/css/estilosPJE.css');?>" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      body {
      padding: 25px;
      }
      h1 {
      font-size: 1.5em;
      margin-top: 0;
      }
      .date {
      min-width: 75px;
      }
      .text {
      word-break: break-all;
      }
      a.llv-active {
      z-index: 2;
      background-color: #f5f5f5;
      border-color: #777;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <h1><span class="far fa-calendar-alt" aria-hidden="true"></span> Visor de Log  &nbsp;&nbsp;<a href="" title="Actualizar"><i class="fas fa-sync"></i></a></h1>
          <div class="list-group">
            <?php if (empty($files)): ?>
            <a id="no_archivos" class="list-group-item liv-active text-center" style="background-color: #d42e2e !important;"><span style="color: #fff !important; font-size: x-large;"><b>LOG VACÍO</b></span></a>
            <?php else: ?>
            <?php foreach ($files as $file): ?>
            <a href="?f=<?= base64_encode($file); ?>"
              class="list-group-item <?= ($currentFile == $file) ? "llv-active" : "" ?>" style="font-size: 12px;">
            <?= $file; ?>
            </a>
            <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-sm-9 col-md-10 table-container">
          <?php if(is_null($logs)): ?>
          <div>
            <br><br>
            <strong>Archivo > 50MB, debe descargarlo.</strong>
            <br><br>
          </div>
          <?php else: ?>
          <table id="table-log" class="table table-striped table-condensed table-bordered">
            <thead>
              <tr>
                <!--<th>Nivel</th>-->
                <th>Fecha</th>
                <th>Descripción</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($logs as $key => $log): ?>
              <tr data-display="stack<?= $key; ?>">
                <td class="date" style="font-size: 12px;"><?= $log['date']; ?></td>
                <td class="text" style="font-size: 12px;">
                  <?php if (array_key_exists("extra", $log)): ?>
                  <a class="pull-right expand btn btn-default btn-xs" data-display="stack<?= $key; ?>">
                  	<i class="fa-solid fa-plus"></i>
                  </a>
                  <?php endif; ?>
                  <?= LimpiaCadena(str_replace('ERROR - '.$log['date'].' --> ','',$log['content'])); ?>
                  <?php if (array_key_exists("extra", $log)): ?>
                  <div class="stack" id="stack<?= $key; ?>"
                    style="display: none; white-space: pre-wrap;">
                    <?= LimpiaCadena($log['extra']) ?>
                  </div>
                  <?php endif; ?>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <?php endif; ?>
          <div>
            <?php if($currentFile): ?>
            <a href="?dl=<?= base64_encode($currentFile); ?>">
            <span class="fas fa-download"></span>
            Descargar
            </a>
            &nbsp;&nbsp;&nbsp;
            <a id="delete-log" href="?del=<?= base64_encode($currentFile); ?>"><span
              class="far fa-trash-alt"></span> Eliminar</a>
            <?php if(count($files) > 1): ?>
            &nbsp;&nbsp;&nbsp;
            <a id="delete-all-log" href="?del=<?= base64_encode("all"); ?>"><span class="far fa-trash-alt"></span> Eliminar todos</a>
            <?php endif; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

		<script src="<?=auto_version('assets/js/vendor.min.js');?>"></script>
		<script src="<?=auto_version('assets/js/app.min.js');?>"></script>
    <script src="<?=base_url();?>assets/plugins/DataTables/dataTables.min.js"></script>

    <script type="text/javascript">
      <?php if(empty($files)): ?>
      var repeticiones = 3;
      function parpadear(){
          if (repeticiones > 0) {
              $('#no_archivos').fadeIn(150).delay(150).fadeOut(150, parpadear);
              repeticiones--;
          }
          else {
              $('#no_archivos').fadeIn(150);
          }
      }

      setTimeout(function FuncionesIniciales(){
        parpadear();
      });
      <?php endif; ?>

      $(document).ready(function () {
          $('.table-container tr').on('click', function () {
            $('#' + $(this).data('display')).toggle();
          });

          if (!$.fn.dataTable.isDataTable( '#table-log' )) {
            var tablaLOG = $('#table-log').DataTable({
              language: {
                "url": "<?=base_url();?>assets/plugins/DataTables/Spanish.json",
                "processing": "Cargando..."
              },
              responsive: true,
              processing: 'true',
              stateSave: true,
              stateSaveCallback: function (settings, data) {
                window.localStorage.setItem("datatable", JSON.stringify(data));
              },
              stateLoadCallback: function (settings) {
                var data = JSON.parse(window.localStorage.getItem("datatable"));
                if (data) data.start = 0;
                return data;
              }
            });
          }

          $('#delete-log').click(function () {
            return confirm('¿Confirma que desea eliminar el archivo de log seleccionado?');
          });

           $('#delete-all-log').click(function () {
             return confirm('¿Confirma que desea eliminar todos los archivos?');
          });
      });
    </script>
  </body>
</html>
