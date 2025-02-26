<?php
$attributes = array("id" => "frmBuscaEmpleadoporNombre", "name" => "frmBuscaEmpleadoporNombre", "onsubmit" => "return PostBackFrmBuscaEmpleadoporNombre(this, event);");
echo form_open("empleado/busca_por_nombre", $attributes);
?>

<div class="modal-header">
  <h4 class="modal-title" id="TituloModal"></h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body mb-0">
  <div class="row mb-2">
    <div class="col-md-4">
      <div class="form-group">
        <label for="bn_appaterno"><b>Apellido Paterno</b></label>
        <input type="text" class="form-control form-control-sm alpha-only" id="bn_appaterno" name="bn_appaterno" placeholder="Apellido Paterno" autocomplete="off">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="bn_apmaterno"><b>Apellido Materno</b></label>
        <input type="text" class="form-control form-control-sm alpha-only" id="bn_apmaterno" name="bn_apmaterno" placeholder="Apellido Materno" autocomplete="off">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="bn_nombre"><b>Nombre</b></label>
        <input type="text" class="form-control form-control-sm alpha-only" id="bn_nombre" name="bn_nombre" placeholder="Nombre" autocomplete="off">
      </div>
    </div>
  </div>

  <div class="row mb-0">
    <div class="col-md-12">
      <div class="card mb-0">
        <div class="card-body">
          <table class="table table-striped table-bordered" id="tblResBusEmp" name="tblResBusEmp" cellspacing="0" width="100%" style="display:none;">
            <thead>
              <tr>
                <th></th>
                <th>Credencial</th>
                <th>Nombre del Empleado</th>
                <th>Categoría</th>
                <th>Dependencia</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="modal-footer p-0">
  <button class="btn btn-inverse btn-sm" title="Guardar Registros Iniciales" id="btnBuscarEmpleado_nombre" name="btnBuscarEmpleado_nombre"><i class="fas fa-binoculars"></i> Buscar</button>
  <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>
</div>

<?php
echo form_close();

?>

<script type="text/javascript">

var datos = <?= empty($datos) ? '[]' : $datos; ?>,
    confFuncion = (typeof datos.funcion == 'undefined' ? 'devuelve_empleado' : datos.funcion);

setTimeout(function FuncionesIniciales(){

  if ( !$.fn.dataTable.isDataTable( '#tblResBusEmp' ) ) {
    var tablaEmpRI = $('#tblResBusEmp').DataTable({
      initComplete: function() {
        $("#tblResBusEmp").show();
        tablaEmpRI.columns.adjust().draw();
        tablaEmpRI.responsive.recalc();
      },
      language: {
        "url": "assets/plugins/DataTables/Spanish.json",
        "processing": "Cargando..."
      },
      order: [0, 'asc'],
      responsive: true,
      processing: 'true',
      columnDefs: [
        {targets:[0,5],visible: false, searchable: false},
        {targets:[6],orderable: false},
      ],
      createdRow: function( row, data, dataIndex ) {
        if ( data[5] == "I" ) {
          $(row).addClass( 'text-red' );
        }
      }
    });
  }

});

function PostBackFrmBuscaEmpleadoporNombre(f,e) {
  e.preventDefault();
  var variables = $(f).serialize(),
      tabla = $('#tblResBusEmp').DataTable();

  $.ajax({
    url   : '<?= base_url() ?>empleado/busca_por_nombre',
    type: "POST",
    data: variables,
    dataType: "JSON",
    success : function(data){
      if( data.status == false ) {
        alerta_emergente(data.message,"warning");
        return false;
      }
      else{
        var empleados = data.empleados;
        tabla.clear().draw();
        for (var i in empleados) {
          tabla.row.add(
             [ empleados[i].Id,
               empleados[i].Credencial,
               empleados[i].NombreCompleto,
               empleados[i].DescripcionCategoria,
               empleados[i].DescripcionDependencia,
               empleados[i].Estado,
               '<button type="button" class="btn btn-default btn-xs" onclick="'+confFuncion+'(\''+empleados[i].Credencial+'\');" title="Consultar empleado"><i class="fas fa-user-edit"></i></button>'
             ]
          );
        }
        tabla.columns.adjust().draw();
        tabla.responsive.recalc();
      }
    }
  });
}

$('#tblResBusEmp').on('dblclick','tr',function(e){
  var tabla = $('#tblResBusEmp').DataTable(),
      data = tabla.row(this).data();

  if ( typeof(tabla.row(this).index()) == "undefined" ) return false;

  if( typeof(data) == "undefined" || data == "" || data == null ) {
    alerta_emergente("Error al obtener los datos del empleado.","warning");
    return false;
  }
  eval(confFuncion+"('"+data[1]+"')");
})

</script>
