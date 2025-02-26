//funciones específicas del sistema HEDA

function det_empleado_isr_anual(url,data,esBoton) {
  if (typeof(esBoton) == "undefined" || esBoton == "" || esBoton == null) { esBoton = false; }

  if (esBoton) data = $(data).data('json');

  var idEmpleado = data.idEmpleado;

  if (typeof(idEmpleado) == "undefined" || idEmpleado == "" || idEmpleado == null) {
    alerta_emergente("Error al obtener los valores del Empleado.","warning");
    return false;
  }

  cargamodalGenerica(url+'nomina/carga_det_empleado_isr_anual/','#modContenido', '#modGeneral', 'idEmpleado='+idEmpleado, 'Detalle por Concepto', 1, false, false);
  return false;
}

function devuelve_empleado(credencial) {
  $('#modGeneral').modal('hide');
  $('#credencial').val(credencial);
  $('#frmConsultaEmpleado').submit();
  return false;
}
