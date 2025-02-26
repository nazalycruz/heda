<table>
	<tr>
		<td width="170px">
			<img src="<?=base_url();?>assets/img/Logo_sin_texto.png" width="150px">
		</td>
		<td width="350px" align="center">
			<span style="font-size:x-large;font-weight:bold;">PODER JUDICIAL DEL ESTADO DE YUCATÁN</span>
			<span style="font-weight:bold;"><?=$empleado->DescPresupuesto?></span>
			<br />
			<span style="font-size:x-large;font-weight:bold;">Departamento de Recursos Humanos</span>
		</td>
	</tr>
</table>

<br />&nbsp;
<hr>
&nbsp;<br />

<table>
	<tr>
		<td align="center">
			<h1>ACUSE</h1>
		</td>
	</tr>
</table>


&nbsp;<br />

Por medio de este acuse se confirma el envío de datos actualizados así como los beneficios solicitados por el empleado:
<div>
	<span style="text-align:center; font-size: x-large;"><b><?=$empleado->NombreCompleto?></b></span>
	<br />
	<span style="text-align:center;"><b>(Número de credencial: <?=$empleado->Credencial?>)</b></span>
</div>

&nbsp;<br /><br />

<b>Detalle de fechas de envío:</b>
&nbsp;<br /><br />

<table>
	<tr>
		<td width="110px">Datos del empleado: </td>
		<td><?=cambiaf_a_normal($fechas_envio->fEnvioEmpleado,true);?></td>
	</tr>
	<tr>
		<td>Datos de la pareja: </td>
		<td><?=cambiaf_a_normal($fechas_envio->fEnvioConyuge,true);?></td>
	</tr>
	<tr>
		<td>Datos de estudiantes: </td>
		<td><?=cambiaf_a_normal($fechas_envio->fEnvioEstudiante,true);?></td>
	</tr>
</table>