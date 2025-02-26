<h1 class="page-header">Listado vacacional <small>control de vacaciones y prima vacacional.</small></h1>

<form action="" method="post">
	<div class="card mb-2">
		<div class="card-body">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="idPeriodo" class="form-label">Periodo vacacional</label><select id="idPeriodo" name="idPeriodo" class="form-control form-control-sm select2-sm select2"><?= $periodos?></select>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="idDependencia" class="form-label">Dependencia</label><select name="idDependencia" id="idDependencia" class="form-control form-control-sm select2-sm select2"><?= $dependencias?></select>

					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<div class="card mt-2" style="display:none;" id="cardtblempleados">
	<div class="card-body" id="result_empleados">

	</div>
</div>
<div id="result_txt">

</div>
<div class="row" style="display:none;" id="divTabla">
  <div class="col-md-12">
    <div class="card">
			<div class="card-header pointer-cursor align-items-center fw-bold text-center bg-silver-600">
				Listado de empleados ACTIVOS que cumplen con las condiciones seleccionadas
			</div>
      <div class="card-body">
        <div class="table-responsive-sm">
          <table id="tblEmpleadosConfig" class="table table-bordered table-sm" cellspacing="0" width="100%">
             <thead>
               <tr>
                 <th>Nombre</th>
                 <th>Credencial</th>
                 <th>FechaInicioVac</th>
                 <th>FechaFinVac</th>
                 <th>PrimaPagada?</th>
                 <th>Tomadas</th>
                 <th>Tiene cancelaciones</th>
                 <th>Observaciones</th>
           
               </tr>
             </thead>
             <tfoot>
              <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
             </tfoot>
             <tbody>

             </tbody>
           </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
	
	listadoempleados();
	// listado();

	$("#idDependencia, #idPeriodo").change(function() {
		listadoempleados();
	});

});

function listadoempleados(){
	let idPeriodo = $('#idPeriodo').val();
	console.log(idPeriodo);
	let idDependencia = $('#idDependencia').val();

	Carga_Metodo('<?= base_url()?>recursos_humanos/obtenerlistado',
	{
		idPeriodo : idPeriodo,
		idDependencia : idDependencia,
	},
	function finalizaProceso(data){
		console.log(data);
		if(data.status == false){
			alerta_emergente(data.message,"warning");
			$('div#result_txt').empty();
		}else{
			$('div#result_txt').html(data.html);
		}
	},
	"generando lista..."
	);
}

function listado(){
	let tabla = $('#tblEmpleadosConfig').DataTable();
	let idPeriodo = $('#idPeriodo').val();
	let idDependencia = $('#idDependencia').val();

	$.ajax({
		url: '<?= base_url()?>recursos_humanos/obtenerlistado',
		type: "POST",
		data: {idPeriodo: idPeriodo, idDependencia: idDependencia},
		dataType: "JSON",
		beforeSend: function(){
			$('#divTabla').hide();
			showLoading("Procesando", "Generando listado...");
		},
		success : function(data){
			if(data.status == false){
				alerta_emergente(data.message, "warning");
				return false;
			}else{
				console.log(data.empleados.empleados);
				var empleados = data.empleados.empleados;
				for (var i in empleados){
					tabla.row.add(
						[
							empleados[i].Credencial,
							empleados[i].NombreCompleto,							
							empleados[i].FechaInicioVac,
							empleados[i].FechaFinVac,
							'<input style="text-align: center" type="checkbox" ' + (empleados[i].PrimaPagada == 0 ? '' : 'checked') + '>',
							'<input type="checkbox" ' + (empleados[i].Tomadas == 0 ? '' : 'checked') + '>',
							'<input type="checkbox" ' + (empleados[i].tienecancelaciones == 0 ? '' : 'checked') + '>',
							empleados[i].Observaciones,
						]
					);
				}
				tabla.columns.adjust().draw();

				$('#divTabla').show();
			}
		},
		error: function(xhr, textStatus, errorThrown){
			if ( xhr.status == 500 ) { alerta_emergente("Error interno del servidor, intente de nuevo más tarde.", "error");	}
				else if ( xhr.status == 404 ) { alerta_emergente("Página no encontrada, avise al Departamento de Servicios y Redes", "warning"); }
				else alerta_emergente("Mensaje de Error: "+textStatus+",  Solicitud XHR: "+StatusMsg(xhr.status), "error");
				return false;
		},
		complete: function( jqXHR, Status){
			hideLoading();
		}
});
}

$('#tblEmpleadosConfig').DataTable({
    columnDefs: [
        { className: "text-center", targets: [4,5,6] } 
    ]
});


</script>

