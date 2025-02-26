<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085690021514893 
 Hora: 08:20:48

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017868041992188 
 Hora: 08:20:48

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.018588066101074 
 Hora: 08:20:48

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.018286943435669 
 Hora: 08:20:48

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='16/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.017066955566406 
 Hora: 08:20:48

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1910'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.091037034988403 
 Hora: 08:20:48

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.012250900268555 
 Hora: 08:20:48

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.017071008682251 
 Hora: 08:20:48

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.018543004989624 
 Hora: 08:20:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069699287414551 
 Hora: 08:20:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069479942321777 
 Hora: 08:20:48

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022236108779907 
 Hora: 08:20:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072159767150879 
 Hora: 08:20:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091049671173096 
 Hora: 08:20:51

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020256996154785 
 Hora: 08:20:51

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.013056993484497 
 Hora: 08:20:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010102987289429 
 Hora: 08:20:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079829692840576 
 Hora: 08:20:52

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020711898803711 
 Hora: 08:20:52

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.011162042617798 
 Hora: 08:20:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078120231628418 
 Hora: 08:20:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006605863571167 
 Hora: 08:20:53

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.023462057113647 
 Hora: 08:20:53

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.015854120254517 
 Hora: 08:20:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010265827178955 
 Hora: 08:20:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063669681549072 
 Hora: 08:20:53

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.017847061157227 
 Hora: 08:20:53

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025213003158569 
 Hora: 08:20:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093560218811035 
 Hora: 08:20:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099449157714844 
 Hora: 08:24:36

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.01856803894043 
 Hora: 08:24:36

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.023366928100586 
 Hora: 08:24:36

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.014146089553833 
 Hora: 08:24:36

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='16/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.018390893936157 
 Hora: 08:24:36

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1910'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.076605081558228 
 Hora: 08:24:36

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.017223834991455 
 Hora: 08:24:36

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.019684076309204 
 Hora: 08:24:36

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.020348072052002 
 Hora: 08:24:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096879005432129 
 Hora: 08:24:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0053150653839111 
 Hora: 08:24:37

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025136947631836 
 Hora: 08:24:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088200569152832 
 Hora: 08:24:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0053620338439941 
 Hora: 08:24:42

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017593860626221 
 Hora: 08:24:42

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017723083496094 
 Hora: 08:24:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057730674743652 
 Hora: 08:24:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010462999343872 
 Hora: 08:24:43

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.01842999458313 
 Hora: 08:24:43

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023359060287476 
 Hora: 08:24:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010245800018311 
 Hora: 08:24:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023930072784424 
 Hora: 08:25:07

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022024154663086 
 Hora: 08:25:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087308883666992 
 Hora: 08:25:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074319839477539 
 Hora: 08:25:09

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021498203277588 
 Hora: 08:25:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095639228820801 
 Hora: 08:25:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074260234832764 
 Hora: 08:25:13

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017959833145142 
 Hora: 08:25:13

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014652013778687 
 Hora: 08:25:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085268020629883 
 Hora: 08:25:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010677099227905 
 Hora: 08:25:15

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.025893926620483 
 Hora: 08:25:15

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022974014282227 
 Hora: 08:25:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011932134628296 
 Hora: 08:25:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0055499076843262 
 Hora: 08:27:05

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021573066711426 
 Hora: 08:27:05

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.012551069259644 
 Hora: 08:27:05

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.020104885101318 
 Hora: 08:27:05

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='16/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.015583992004395 
 Hora: 08:27:05

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1910'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.083875894546509 
 Hora: 08:27:05

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.019268035888672 
 Hora: 08:27:05

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.018054962158203 
 Hora: 08:27:05

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.014850854873657 
 Hora: 08:27:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069169998168945 
 Hora: 08:27:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085899829864502 
 Hora: 08:27:08

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023519039154053 
 Hora: 08:27:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0053849220275879 
 Hora: 08:27:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.004472017288208 
 Hora: 08:27:24

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019995927810669 
 Hora: 08:27:24

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015017032623291 
 Hora: 08:27:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01072096824646 
 Hora: 08:27:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065429210662842 
 Hora: 08:27:26

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.020520210266113 
 Hora: 08:27:26

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.016512155532837 
 Hora: 08:27:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008544921875 
 Hora: 08:27:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098640918731689 
 Hora: 08:29:48

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017954111099243 
 Hora: 08:29:48

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.017742156982422 
 Hora: 08:29:48

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.02052116394043 
 Hora: 08:29:48

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='16/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.019569158554077 
 Hora: 08:29:48

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1910'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.076909065246582 
 Hora: 08:29:48

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.020563125610352 
 Hora: 08:29:48

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.017925977706909 
 Hora: 08:29:48

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.013284921646118 
 Hora: 08:29:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063629150390625 
 Hora: 08:29:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013813972473145 
 Hora: 08:29:49

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.016729831695557 
 Hora: 08:29:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068399906158447 
 Hora: 08:29:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00872802734375 
 Hora: 08:30:16

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020324945449829 
 Hora: 08:30:16

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017269849777222 
 Hora: 08:30:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076899528503418 
 Hora: 08:30:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010452032089233 
 Hora: 08:30:17

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017858028411865 
 Hora: 08:30:17

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.012256145477295 
 Hora: 08:30:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075018405914307 
 Hora: 08:30:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0050320625305176 
 Hora: 08:30:17

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.019707918167114 
 Hora: 08:30:17

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021148920059204 
 Hora: 08:30:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068559646606445 
 Hora: 08:30:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070550441741943 
 Hora: 08:30:17

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.020435094833374 
 Hora: 08:30:17

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020679235458374 
 Hora: 08:30:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083010196685791 
 Hora: 08:30:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098199844360352 
 Hora: 08:31:45

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016112804412842 
 Hora: 08:31:45

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020220994949341 
 Hora: 08:31:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008249044418335 
 Hora: 08:31:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0055041313171387 
 Hora: 08:31:47

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.016934871673584 
 Hora: 08:31:47

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024731159210205 
 Hora: 08:31:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066590309143066 
 Hora: 08:31:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008073091506958 
 Hora: 08:33:46

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021515846252441 
 Hora: 08:33:46

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.01552414894104 
 Hora: 08:33:46

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.014652967453003 
 Hora: 08:33:46

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='16/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.022672891616821 
 Hora: 08:33:46

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1910'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.082448959350586 
 Hora: 08:33:46

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.018473863601685 
 Hora: 08:33:46

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.017354011535645 
 Hora: 08:33:46

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.013429880142212 
 Hora: 08:33:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085389614105225 
 Hora: 08:33:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084841251373291 
 Hora: 08:33:47

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021383047103882 
 Hora: 08:33:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098669528961182 
 Hora: 08:33:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068747997283936 
 Hora: 08:33:49

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.013462066650391 
 Hora: 08:33:49

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.01633095741272 
 Hora: 08:33:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066289901733398 
 Hora: 08:33:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094819068908691 
 Hora: 08:33:50

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.015508890151978 
 Hora: 08:33:50

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025870084762573 
 Hora: 08:33:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067281723022461 
 Hora: 08:33:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00832200050354 
 Hora: 08:34:22

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024401187896729 
 Hora: 08:34:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084450244903564 
 Hora: 08:34:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093619823455811 
 Hora: 08:34:26

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.019510984420776 
 Hora: 08:34:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089528560638428 
 Hora: 08:34:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010120868682861 
 Hora: 08:34:48

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017549991607666 
 Hora: 08:34:48

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016808986663818 
 Hora: 08:34:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095391273498535 
 Hora: 08:34:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010123014450073 
 Hora: 08:34:51

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015978097915649 
 Hora: 08:34:51

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015455007553101 
 Hora: 08:34:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010093927383423 
 Hora: 08:34:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013799905776978 
 Hora: 08:34:51

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.025704860687256 
 Hora: 08:34:51

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023337125778198 
 Hora: 08:34:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0034198760986328 
 Hora: 08:34:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011486053466797 
 Hora: 08:34:53

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.022341966629028 
 Hora: 08:34:53

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026363134384155 
 Hora: 08:34:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082108974456787 
 Hora: 08:34:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012763977050781 
 Hora: 08:38:48

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020754814147949 
 Hora: 08:38:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085968971252441 
 Hora: 08:38:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011940002441406 
 Hora: 08:38:50

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022969007492065 
 Hora: 08:38:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092558860778809 
 Hora: 08:38:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009727954864502 
 Hora: 08:38:58

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019588947296143 
 Hora: 08:38:58

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018829107284546 
 Hora: 08:38:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067579746246338 
 Hora: 08:38:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096180438995361 
 Hora: 08:39:02

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021443128585815 
 Hora: 08:39:02

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.010557889938354 
 Hora: 08:39:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096499919891357 
 Hora: 08:39:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092930793762207 
 Hora: 08:39:02

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.0280601978302 
 Hora: 08:39:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094699859619141 
 Hora: 08:39:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0050661563873291 
 Hora: 08:39:05

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.018686056137085 
 Hora: 08:39:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082790851593018 
 Hora: 08:39:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012608051300049 
 Hora: 08:40:37

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.035989046096802 
 Hora: 08:40:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015645980834961 
 Hora: 08:40:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065100193023682 
 Hora: 08:40:40

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022666931152344 
 Hora: 08:40:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092651844024658 
 Hora: 08:40:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022334098815918 
 Hora: 08:40:49

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.034593105316162 
 Hora: 08:40:49

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.036361932754517 
 Hora: 08:40:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021522998809814 
 Hora: 08:40:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007781982421875 
 Hora: 08:40:50

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.015231847763062 
 Hora: 08:40:50

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024348020553589 
 Hora: 08:40:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057590007781982 
 Hora: 08:40:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097060203552246 
 Hora: 08:53:16

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020848989486694 
 Hora: 08:53:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010227918624878 
 Hora: 08:53:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00907301902771 
 Hora: 08:53:19

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025477886199951 
 Hora: 08:53:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011009931564331 
 Hora: 08:53:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082287788391113 
 Hora: 08:53:23

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024400949478149 
 Hora: 08:53:23

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016492128372192 
 Hora: 08:53:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058021545410156 
 Hora: 08:53:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097901821136475 
 Hora: 08:53:26

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.016067028045654 
 Hora: 08:53:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069241523742676 
 Hora: 08:53:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067248344421387 
 Hora: 08:53:34

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = NULL,
						@Tomadas = 0,
						@IdDependencia =NULL 
 Ejecutado en: 0.013941049575806 
 Hora: 08:53:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066750049591064 
 Hora: 08:53:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011177062988281 
 Hora: 08:56:14

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018935918807983 
 Hora: 08:56:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075070858001709 
 Hora: 08:56:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058310031890869 
 Hora: 08:56:16

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.018460035324097 
 Hora: 08:56:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076601505279541 
 Hora: 08:56:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080809593200684 
 Hora: 08:56:19

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021492004394531 
 Hora: 08:56:19

SELECT *
FROM "Cat_Periodos"
ORDER BY "PeriodoID" DESC 
 Ejecutado en: 0.010132074356079 
 Hora: 08:56:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011927843093872 
 Hora: 08:56:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010869026184082 
 Hora: 08:56:20

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.014404058456421 
 Hora: 08:56:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0049600601196289 
 Hora: 08:56:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083720684051514 
 Hora: 08:57:42

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019263029098511 
 Hora: 08:57:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01180100440979 
 Hora: 08:57:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011414051055908 
 Hora: 08:57:44

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.015163898468018 
 Hora: 08:57:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068490505218506 
 Hora: 08:57:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014611959457397 
 Hora: 08:57:46

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018915176391602 
 Hora: 08:57:46

SELECT *
FROM "Cat_Periodos"
ORDER BY "PeriodoID" ASC 
 Ejecutado en: 0.017879009246826 
 Hora: 08:57:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085580348968506 
 Hora: 08:57:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010457992553711 
 Hora: 08:57:47

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.020452976226807 
 Hora: 08:57:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.005547046661377 
 Hora: 08:57:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.005918025970459 
 Hora: 09:03:41

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020894050598145 
 Hora: 09:03:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012125968933105 
 Hora: 09:03:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083870887756348 
 Hora: 09:03:44

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021342039108276 
 Hora: 09:03:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065150260925293 
 Hora: 09:03:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074310302734375 
 Hora: 09:05:59

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018603086471558 
 Hora: 09:05:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095038414001465 
 Hora: 09:05:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010528087615967 
 Hora: 09:06:02

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.01862907409668 
 Hora: 09:06:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087540149688721 
 Hora: 09:06:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090341567993164 
 Hora: 09:06:34

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019174814224243 
 Hora: 09:06:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057058334350586 
 Hora: 09:06:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076220035552979 
 Hora: 09:06:37

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.02503490447998 
 Hora: 09:06:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01130485534668 
 Hora: 09:06:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062410831451416 
 Hora: 09:07:30

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021836042404175 
 Hora: 09:07:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010026931762695 
 Hora: 09:07:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0044450759887695 
 Hora: 09:07:33

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.02390193939209 
 Hora: 09:07:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010257005691528 
 Hora: 09:07:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097510814666748 
 Hora: 09:07:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.01447606086731 
 Hora: 09:07:36

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014326095581055 
 Hora: 09:07:36

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017626047134399 
 Hora: 09:07:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0045990943908691 
 Hora: 09:07:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085921287536621 
 Hora: 09:07:38

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.018499851226807 
 Hora: 09:07:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0052909851074219 
 Hora: 09:07:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010241031646729 
 Hora: 09:10:52

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020853042602539 
 Hora: 09:10:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010706901550293 
 Hora: 09:10:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091660022735596 
 Hora: 09:10:54

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021320104598999 
 Hora: 09:10:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096380710601807 
 Hora: 09:10:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006058931350708 
 Hora: 09:10:57

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017991065979004 
 Hora: 09:10:57

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017721176147461 
 Hora: 09:10:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066640377044678 
 Hora: 09:10:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070719718933105 
 Hora: 09:10:59

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.024762868881226 
 Hora: 09:10:59

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.015123128890991 
 Hora: 09:10:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074529647827148 
 Hora: 09:10:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061750411987305 
 Hora: 09:36:24

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021796941757202 
 Hora: 09:36:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081160068511963 
 Hora: 09:36:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012894153594971 
 Hora: 09:36:28

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.032773017883301 
 Hora: 09:36:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024085998535156 
 Hora: 09:36:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012402057647705 
 Hora: 09:36:29

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.028471946716309 
 Hora: 09:36:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013921976089478 
 Hora: 09:36:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014572858810425 
 Hora: 09:36:29

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.026412963867188 
 Hora: 09:36:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015659093856812 
 Hora: 09:36:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01678204536438 
 Hora: 09:36:30

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023900032043457 
 Hora: 09:36:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015390872955322 
 Hora: 09:36:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090899467468262 
 Hora: 09:36:30

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022343158721924 
 Hora: 09:36:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014829874038696 
 Hora: 09:36:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020056962966919 
 Hora: 09:36:30

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.015738010406494 
 Hora: 09:36:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010970115661621 
 Hora: 09:36:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016769170761108 
 Hora: 09:36:33

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.030978918075562 
 Hora: 09:36:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018619060516357 
 Hora: 09:36:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093870162963867 
 Hora: 09:36:35

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02190899848938 
 Hora: 09:36:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011171102523804 
 Hora: 09:36:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021236896514893 
 Hora: 09:36:38

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.041082143783569 
 Hora: 09:36:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014205932617188 
 Hora: 09:36:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085451602935791 
 Hora: 09:36:54

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022669792175293 
 Hora: 09:36:54

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016723155975342 
 Hora: 09:36:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096762180328369 
 Hora: 09:36:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021332979202271 
 Hora: 09:36:56

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.036056995391846 
 Hora: 09:36:56

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.040131807327271 
 Hora: 09:36:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013576030731201 
 Hora: 09:36:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086770057678223 
 Hora: 09:37:34

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024799108505249 
 Hora: 09:37:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011750936508179 
 Hora: 09:37:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0154869556427 
 Hora: 09:37:37

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.03780198097229 
 Hora: 09:37:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013532876968384 
 Hora: 09:37:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010561943054199 
 Hora: 09:37:38

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.033234119415283 
 Hora: 09:37:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012600183486938 
 Hora: 09:37:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013290882110596 
 Hora: 09:37:41

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.038052082061768 
 Hora: 09:37:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012849092483521 
 Hora: 09:37:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010293960571289 
 Hora: 09:37:44

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.029114007949829 
 Hora: 09:37:44

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.035884141921997 
 Hora: 09:37:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010084867477417 
 Hora: 09:37:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02028489112854 
 Hora: 09:37:46

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.037785053253174 
 Hora: 09:37:46

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.03880786895752 
 Hora: 09:37:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014694929122925 
 Hora: 09:37:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075509548187256 
 Hora: 09:38:12

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.015264987945557 
 Hora: 09:38:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093679428100586 
 Hora: 09:38:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016570091247559 
 Hora: 09:38:14

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.037914991378784 
 Hora: 09:38:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017505884170532 
 Hora: 09:38:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016386032104492 
 Hora: 09:38:19

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.01970911026001 
 Hora: 09:38:19

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019653081893921 
 Hora: 09:38:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0140380859375 
 Hora: 09:38:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018934965133667 
 Hora: 09:38:21

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.038107872009277 
 Hora: 09:38:21

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.039811849594116 
 Hora: 09:38:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013160943984985 
 Hora: 09:38:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090038776397705 
 Hora: 09:41:48

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019773006439209 
 Hora: 09:41:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011199951171875 
 Hora: 09:41:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017289161682129 
 Hora: 09:41:51

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.032958984375 
 Hora: 09:41:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012523889541626 
 Hora: 09:41:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010535955429077 
 Hora: 09:41:53

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.025669813156128 
 Hora: 09:41:53

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.029083967208862 
 Hora: 09:41:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0120530128479 
 Hora: 09:41:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012052059173584 
 Hora: 09:41:55

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.039508104324341 
 Hora: 09:41:55

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.055889129638672 
 Hora: 09:41:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074019432067871 
 Hora: 09:41:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097091197967529 
 Hora: 09:43:47

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021046876907349 
 Hora: 09:43:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099048614501953 
 Hora: 09:43:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012050867080688 
 Hora: 09:43:50

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.027714967727661 
 Hora: 09:43:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014704942703247 
 Hora: 09:43:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094819068908691 
 Hora: 09:43:55

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018251895904541 
 Hora: 09:43:55

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017790079116821 
 Hora: 09:43:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075299739837646 
 Hora: 09:43:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022775888442993 
 Hora: 09:43:57

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.034134864807129 
 Hora: 09:43:57

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.030646800994873 
 Hora: 09:43:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012845993041992 
 Hora: 09:43:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010579824447632 
 Hora: 09:54:24

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019006013870239 
 Hora: 09:54:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084030628204346 
 Hora: 09:54:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018402814865112 
 Hora: 09:54:27

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.029535055160522 
 Hora: 09:54:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013751983642578 
 Hora: 09:54:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084679126739502 
 Hora: 09:54:35

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023707866668701 
 Hora: 09:54:35

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.024986028671265 
 Hora: 09:54:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096840858459473 
 Hora: 09:54:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020581960678101 
 Hora: 09:54:37

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.034162998199463 
 Hora: 09:54:37

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.03858494758606 
 Hora: 09:54:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020941972732544 
 Hora: 09:54:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01256799697876 
 Hora: 09:54:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068151950836182 
 Hora: 09:54:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089120864868164 
 Hora: 09:56:30

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022405862808228 
 Hora: 09:56:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094609260559082 
 Hora: 09:56:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019037961959839 
 Hora: 09:56:33

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.041321992874146 
 Hora: 09:56:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014699935913086 
 Hora: 09:56:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011749982833862 
 Hora: 09:56:37

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024466991424561 
 Hora: 09:56:37

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021992921829224 
 Hora: 09:56:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01171088218689 
 Hora: 09:56:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013212919235229 
 Hora: 09:56:39

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.039177894592285 
 Hora: 09:56:39

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02790093421936 
 Hora: 09:56:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018562078475952 
 Hora: 09:56:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026679039001465 
 Hora: 10:05:24

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.04964804649353 
 Hora: 10:05:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017893075942993 
 Hora: 10:05:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015591859817505 
 Hora: 10:05:27

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.034385919570923 
 Hora: 10:05:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014799833297729 
 Hora: 10:05:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019475936889648 
 Hora: 10:05:28

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.039186000823975 
 Hora: 10:05:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017096996307373 
 Hora: 10:05:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01103687286377 
 Hora: 10:05:32

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.035233020782471 
 Hora: 10:05:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011921167373657 
 Hora: 10:05:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010647058486938 
 Hora: 10:05:35

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022094964981079 
 Hora: 10:05:35

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.024934053421021 
 Hora: 10:05:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01691198348999 
 Hora: 10:05:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023140907287598 
 Hora: 10:05:37

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.034363985061646 
 Hora: 10:05:37

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.055047988891602 
 Hora: 10:05:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01298189163208 
 Hora: 10:05:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013054132461548 
 Hora: 10:06:26

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.035506010055542 
 Hora: 10:06:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023699045181274 
 Hora: 10:06:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014946937561035 
 Hora: 10:06:28

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.04325008392334 
 Hora: 10:06:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024996042251587 
 Hora: 10:06:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096549987792969 
 Hora: 10:06:31

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.030769109725952 
 Hora: 10:06:31

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.045305013656616 
 Hora: 10:06:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016041994094849 
 Hora: 10:06:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020826101303101 
 Hora: 10:06:33

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.087624073028564 
 Hora: 10:06:33

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.060730934143066 
 Hora: 10:06:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014369010925293 
 Hora: 10:06:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01204776763916 
 Hora: 10:07:22

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.028546094894409 
 Hora: 10:07:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017966032028198 
 Hora: 10:07:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020360946655273 
 Hora: 10:07:24

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.05869197845459 
 Hora: 10:07:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024035930633545 
 Hora: 10:07:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013761043548584 
 Hora: 10:07:28

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.025524139404297 
 Hora: 10:07:28

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.029417037963867 
 Hora: 10:07:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015038013458252 
 Hora: 10:07:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014457941055298 
 Hora: 10:07:31

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.10097908973694 
 Hora: 10:07:31

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.10112500190735 
 Hora: 10:07:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.044299125671387 
 Hora: 10:07:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026305198669434 
 Hora: 10:09:21

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.038681983947754 
 Hora: 10:09:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013032913208008 
 Hora: 10:09:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016195058822632 
 Hora: 10:09:24

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.040951013565063 
 Hora: 10:09:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099220275878906 
 Hora: 10:09:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088241100311279 
 Hora: 10:09:29

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.010509014129639 
 Hora: 10:09:29

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015697002410889 
 Hora: 10:09:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01202917098999 
 Hora: 10:09:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015839099884033 
 Hora: 10:09:31

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.043323993682861 
 Hora: 10:09:31

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038256168365479 
 Hora: 10:09:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014154195785522 
 Hora: 10:09:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016940116882324 
 Hora: 10:14:51

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.057487964630127 
 Hora: 10:14:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019381999969482 
 Hora: 10:14:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023814916610718 
 Hora: 10:14:54

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.033936023712158 
 Hora: 10:14:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013752937316895 
 Hora: 10:14:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017445087432861 
 Hora: 10:14:59

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.037263870239258 
 Hora: 10:14:59

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.043845891952515 
 Hora: 10:14:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017606019973755 
 Hora: 10:14:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018269062042236 
 Hora: 10:15:02

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.038565158843994 
 Hora: 10:15:02

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.033082008361816 
 Hora: 10:15:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013742923736572 
 Hora: 10:15:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014681816101074 
 Hora: 10:16:43

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02974796295166 
 Hora: 10:16:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012544870376587 
 Hora: 10:16:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017884969711304 
 Hora: 10:16:46

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.040676116943359 
 Hora: 10:16:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.044140100479126 
 Hora: 10:16:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020740985870361 
 Hora: 10:16:51

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.028749942779541 
 Hora: 10:16:51

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.036143064498901 
 Hora: 10:16:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013473987579346 
 Hora: 10:16:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018694162368774 
 Hora: 10:16:53

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.038763999938965 
 Hora: 10:16:53

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038378000259399 
 Hora: 10:16:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013372898101807 
 Hora: 10:16:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013106107711792 
 Hora: 10:16:55

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.041359901428223 
 Hora: 10:16:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020121097564697 
 Hora: 10:16:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024453163146973 
 Hora: 10:16:55

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.028923988342285 
 Hora: 10:16:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015565156936646 
 Hora: 10:16:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015276193618774 
 Hora: 10:16:55

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02935791015625 
 Hora: 10:16:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016535997390747 
 Hora: 10:16:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011604070663452 
 Hora: 10:16:56

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.037950038909912 
 Hora: 10:16:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01341700553894 
 Hora: 10:16:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012603998184204 
 Hora: 10:16:56

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02592921257019 
 Hora: 10:16:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01430606842041 
 Hora: 10:16:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013166904449463 
 Hora: 10:16:56

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.03351879119873 
 Hora: 10:16:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014611005783081 
 Hora: 10:16:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010805130004883 
 Hora: 10:16:57

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.040141105651855 
 Hora: 10:16:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011010885238647 
 Hora: 10:16:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018979072570801 
 Hora: 10:16:59

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.054302930831909 
 Hora: 10:16:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025895833969116 
 Hora: 10:16:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012104988098145 
 Hora: 10:17:06

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023963928222656 
 Hora: 10:17:06

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021292924880981 
 Hora: 10:17:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013904094696045 
 Hora: 10:17:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013471126556396 
 Hora: 10:17:08

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.033054113388062 
 Hora: 10:17:08

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.044137954711914 
 Hora: 10:17:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025467157363892 
 Hora: 10:17:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016090869903564 
 Hora: 10:18:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026716947555542 
 Hora: 10:18:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026588916778564 
 Hora: 10:18:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01310920715332 
 Hora: 10:18:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010175943374634 
 Hora: 10:18:21

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.040328025817871 
 Hora: 10:18:21

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.033464193344116 
 Hora: 10:18:21

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014168977737427 
 Hora: 10:18:21

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017091989517212 
 Hora: 10:18:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013679027557373 
 Hora: 10:18:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011182069778442 
 Hora: 10:18:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075321197509766 
 Hora: 10:18:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012403011322021 
 Hora: 10:18:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026912927627563 
 Hora: 10:18:40

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.015439033508301 
 Hora: 10:18:40

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.019139051437378 
 Hora: 10:18:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012619018554688 
 Hora: 10:18:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01133394241333 
 Hora: 10:18:44

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.030410051345825 
 Hora: 10:18:44

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.02537989616394 
 Hora: 10:18:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012714862823486 
 Hora: 10:18:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021790981292725 
 Hora: 10:18:46

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.023229122161865 
 Hora: 10:18:46

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.029766082763672 
 Hora: 10:18:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015506029129028 
 Hora: 10:18:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016106128692627 
 Hora: 10:18:47

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.027411937713623 
 Hora: 10:18:47

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.043898105621338 
 Hora: 10:18:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017717838287354 
 Hora: 10:18:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012256860733032 
 Hora: 10:18:50

SELECT *
FROM "cat_TipoNomina"
WHERE "ACTIVO" = 1 
 Ejecutado en: 0.025123834609985 
 Hora: 10:18:50

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.033424854278564 
 Hora: 10:18:50

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.030263900756836 
 Hora: 10:18:50

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "EsPercepcion" = 1
AND "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.035368919372559 
 Hora: 10:18:50

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.025406837463379 
 Hora: 10:18:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086209774017334 
 Hora: 10:18:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017990827560425 
 Hora: 10:18:51

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.036715030670166 
 Hora: 10:18:51

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027921199798584 
 Hora: 10:18:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013390064239502 
 Hora: 10:18:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01006817817688 
 Hora: 10:18:58

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.024576902389526 
 Hora: 10:18:58

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.03504204750061 
 Hora: 10:18:58

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.029163837432861 
 Hora: 10:18:58

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.02885890007019 
 Hora: 10:18:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013543128967285 
 Hora: 10:18:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010619163513184 
 Hora: 10:19:03

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.01504111289978 
 Hora: 10:19:03

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.022314071655273 
 Hora: 10:19:03

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024525880813599 
 Hora: 10:19:03

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.03718113899231 
 Hora: 10:19:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069048404693604 
 Hora: 10:19:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.055346012115479 
 Hora: 10:21:47

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.11798691749573 
 Hora: 10:21:47

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.11913704872131 
 Hora: 10:21:47

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.1257381439209 
 Hora: 10:21:47

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.14962816238403 
 Hora: 10:21:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.055079936981201 
 Hora: 10:21:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015813827514648 
 Hora: 10:26:45

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.028868913650513 
 Hora: 10:26:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020015001296997 
 Hora: 10:26:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028692007064819 
 Hora: 10:26:48

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.042639017105103 
 Hora: 10:26:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026418924331665 
 Hora: 10:26:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019591093063354 
 Hora: 10:26:54

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.084362983703613 
 Hora: 10:26:54

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.042443990707397 
 Hora: 10:26:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028347969055176 
 Hora: 10:26:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.038399934768677 
 Hora: 10:26:57

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.049031972885132 
 Hora: 10:26:57

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.054104089736938 
 Hora: 10:26:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.044052839279175 
 Hora: 10:26:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.031692981719971 
 Hora: 10:26:57

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.052896022796631 
 Hora: 10:26:57

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.040349006652832 
 Hora: 10:26:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.039689064025879 
 Hora: 10:26:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024064779281616 
 Hora: 10:26:59

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.088730812072754 
 Hora: 10:26:59

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.067166090011597 
 Hora: 10:26:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017450094223022 
 Hora: 10:26:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071780681610107 
 Hora: 10:27:12

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.017417907714844 
 Hora: 10:27:12

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.023019075393677 
 Hora: 10:27:12

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020736932754517 
 Hora: 10:27:12

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015490055084229 
 Hora: 10:27:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011646032333374 
 Hora: 10:27:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0048248767852783 
 Hora: 10:32:50

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.027385950088501 
 Hora: 10:32:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093879699707031 
 Hora: 10:32:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013001918792725 
 Hora: 10:32:53

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.05411696434021 
 Hora: 10:32:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013107061386108 
 Hora: 10:32:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019335031509399 
 Hora: 10:33:01

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.02151894569397 
 Hora: 10:33:01

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.023567914962769 
 Hora: 10:33:01

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.036149978637695 
 Hora: 10:33:01

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.028625965118408 
 Hora: 10:33:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017997980117798 
 Hora: 10:33:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015110015869141 
 Hora: 10:33:03

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 1.3228650093079 
 Hora: 10:33:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028130054473877 
 Hora: 10:33:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019590139389038 
 Hora: 10:35:11

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.046150922775269 
 Hora: 10:35:11

SELECT *
FROM "ParametrosdeSistema"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.03260612487793 
 Hora: 10:35:11

SELECT *
FROM "ParametrosMovsRH"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.038211107254028 
 Hora: 10:35:11

SELECT *
FROM "ParamSystemTipoNomimas"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.054205179214478 
 Hora: 10:35:11

SELECT *
FROM "Param_ValoresENomina"
WHERE "Presupuestoid" = '0002' 
 Ejecutado en: 0.026907205581665 
 Hora: 10:35:11

SELECT *
FROM "ParametrosGenerales" 
 Ejecutado en: 0.023060083389282 
 Hora: 10:35:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018056869506836 
 Hora: 10:35:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019369840621948 
 Hora: 10:35:13

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018129825592041 
 Hora: 10:35:13

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.023627042770386 
 Hora: 10:35:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010392904281616 
 Hora: 10:35:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01755690574646 
 Hora: 10:35:16

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.058326959609985 
 Hora: 10:35:16

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.072801113128662 
 Hora: 10:35:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029582023620605 
 Hora: 10:35:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026911020278931 
 Hora: 10:35:16

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.042180061340332 
 Hora: 10:35:16

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.040223121643066 
 Hora: 10:35:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012756109237671 
 Hora: 10:35:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018826007843018 
 Hora: 10:35:18

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.030455827713013 
 Hora: 10:35:18

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.039757966995239 
 Hora: 10:35:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029008865356445 
 Hora: 10:35:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012320995330811 
 Hora: 10:35:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012264013290405 
 Hora: 10:35:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010885953903198 
 Hora: 10:35:34

exec p_admarh_get_Escuelas @EscuelaId=0 
 Ejecutado en: 0.028794050216675 
 Hora: 10:35:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092740058898926 
 Hora: 10:35:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011001110076904 
 Hora: 10:35:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011400938034058 
 Hora: 10:35:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012709856033325 
 Hora: 10:35:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027405977249146 
 Hora: 10:35:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014343023300171 
 Hora: 10:35:44

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.023687124252319 
 Hora: 10:35:44

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.030153036117554 
 Hora: 10:35:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01413106918335 
 Hora: 10:35:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019217014312744 
 Hora: 10:35:44

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.040184020996094 
 Hora: 10:35:44

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.039618968963623 
 Hora: 10:35:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011218070983887 
 Hora: 10:35:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021669864654541 
 Hora: 10:35:49

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.031618118286133 
 Hora: 10:35:49

SELECT Cat_Emisores.*
FROM "Cat_Emisores"
WHERE "Activo" = 1 
 Ejecutado en: 0.021439075469971 
 Hora: 10:35:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066170692443848 
 Hora: 10:35:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023442029953003 
 Hora: 10:35:50

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038383960723877 
 Hora: 10:35:50

SELECT cat_Categorias.*
FROM "cat_Categorias" 
 Ejecutado en: 0.024675130844116 
 Hora: 10:35:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064630508422852 
 Hora: 10:35:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016151905059814 
 Hora: 10:35:52

SELECT *
FROM "Cat_DiasFestivos" 
 Ejecutado en: 0.042011976242065 
 Hora: 10:35:52

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026637077331543 
 Hora: 10:35:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011749982833862 
 Hora: 10:35:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080950260162354 
 Hora: 10:36:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011129856109619 
 Hora: 10:36:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017695903778076 
 Hora: 10:36:01

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.034624099731445 
 Hora: 10:36:01

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.034438848495483 
 Hora: 10:36:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013002157211304 
 Hora: 10:36:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010060787200928 
 Hora: 10:36:01

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.027853965759277 
 Hora: 10:36:01

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.035059928894043 
 Hora: 10:36:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01160717010498 
 Hora: 10:36:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018463134765625 
 Hora: 10:37:48

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.10090517997742 
 Hora: 10:37:48

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.040525913238525 
 Hora: 10:37:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014875888824463 
 Hora: 10:37:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.28211903572083 
 Hora: 10:37:50

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.032806158065796 
 Hora: 10:37:50

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.041136026382446 
 Hora: 10:37:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014158010482788 
 Hora: 10:37:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0258469581604 
 Hora: 10:37:50

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.033283948898315 
 Hora: 10:37:50

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.041340112686157 
 Hora: 10:37:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026464939117432 
 Hora: 10:37:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014993906021118 
 Hora: 10:37:52

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.034941911697388 
 Hora: 10:37:52

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038378000259399 
 Hora: 10:37:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013153076171875 
 Hora: 10:37:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021286010742188 
 Hora: 10:40:19

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.03192400932312 
 Hora: 10:40:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019027948379517 
 Hora: 10:40:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019577980041504 
 Hora: 10:40:23

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.043323040008545 
 Hora: 10:40:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013562917709351 
 Hora: 10:40:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.030182123184204 
 Hora: 10:40:24

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.0311119556427 
 Hora: 10:40:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013124227523804 
 Hora: 10:40:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084869861602783 
 Hora: 10:40:27

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.030452013015747 
 Hora: 10:40:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010833978652954 
 Hora: 10:40:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012033939361572 
 Hora: 10:40:35

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023826837539673 
 Hora: 10:40:35

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.038461923599243 
 Hora: 10:40:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01323390007019 
 Hora: 10:40:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012548923492432 
 Hora: 10:40:36

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.033372163772583 
 Hora: 10:40:36

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.037889003753662 
 Hora: 10:40:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013159036636353 
 Hora: 10:40:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013099908828735 
 Hora: 10:43:12

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023335933685303 
 Hora: 10:43:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009721040725708 
 Hora: 10:43:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018484830856323 
 Hora: 10:43:15

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.035946130752563 
 Hora: 10:43:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026398897171021 
 Hora: 10:43:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014879941940308 
 Hora: 10:43:18

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.076775074005127 
 Hora: 10:43:18

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021394014358521 
 Hora: 10:43:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019033908843994 
 Hora: 10:43:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012928009033203 
 Hora: 10:43:22

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.040932893753052 
 Hora: 10:43:22

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.040465116500854 
 Hora: 10:43:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011862993240356 
 Hora: 10:43:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.055912017822266 
 Hora: 10:43:22

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.02968692779541 
 Hora: 10:43:22

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.04092001914978 
 Hora: 10:43:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011952877044678 
 Hora: 10:43:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029415845870972 
 Hora: 10:43:24

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.077606916427612 
 Hora: 10:43:24

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.053858995437622 
 Hora: 10:43:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026978015899658 
 Hora: 10:43:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067098140716553 
 Hora: 10:45:20

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023703098297119 
 Hora: 10:45:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079069137573242 
 Hora: 10:45:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.040408134460449 
 Hora: 10:45:24

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.073441982269287 
 Hora: 10:45:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014408826828003 
 Hora: 10:45:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011038064956665 
 Hora: 10:45:28

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.035962104797363 
 Hora: 10:45:28

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.035505056381226 
 Hora: 10:45:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010229110717773 
 Hora: 10:45:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.042125940322876 
 Hora: 10:45:30

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.060879945755005 
 Hora: 10:45:30

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.053890943527222 
 Hora: 10:45:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025408029556274 
 Hora: 10:45:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013170003890991 
 Hora: 10:46:04

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023355007171631 
 Hora: 10:46:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014726877212524 
 Hora: 10:46:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017385959625244 
 Hora: 10:46:07

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.061745882034302 
 Hora: 10:46:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028388977050781 
 Hora: 10:46:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013549089431763 
 Hora: 10:46:11

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.031121969223022 
 Hora: 10:46:11

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.027601003646851 
 Hora: 10:46:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02032208442688 
 Hora: 10:46:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013065099716187 
 Hora: 10:46:12

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.036301136016846 
 Hora: 10:46:12

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.042322874069214 
 Hora: 10:46:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013950824737549 
 Hora: 10:46:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011925935745239 
 Hora: 10:46:44

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.023080110549927 
 Hora: 10:46:44

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.023571968078613 
 Hora: 10:46:44

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023952960968018 
 Hora: 10:46:44

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023146152496338 
 Hora: 10:46:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010744094848633 
 Hora: 10:46:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019788980484009 
 Hora: 10:46:47

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 1.4069209098816 
 Hora: 10:46:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010935068130493 
 Hora: 10:46:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017657995223999 
 Hora: 10:46:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017935991287231 
 Hora: 10:46:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058929920196533 
 Hora: 10:46:53

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.033032894134521 
 Hora: 10:46:53

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.023725986480713 
 Hora: 10:46:53

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.022447109222412 
 Hora: 10:46:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081250667572021 
 Hora: 10:46:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022311925888062 
 Hora: 11:05:16

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.041567087173462 
 Hora: 11:05:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024781942367554 
 Hora: 11:05:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.078422069549561 
 Hora: 11:05:17

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.041022062301636 
 Hora: 11:05:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.059181928634644 
 Hora: 11:05:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021379947662354 
 Hora: 11:05:17

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.050881147384644 
 Hora: 11:05:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.037137031555176 
 Hora: 11:05:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018677949905396 
 Hora: 11:05:17

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.045661926269531 
 Hora: 11:05:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016036987304688 
 Hora: 11:05:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023405075073242 
 Hora: 11:05:17

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.043983936309814 
 Hora: 11:05:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020941972732544 
 Hora: 11:05:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.036407947540283 
 Hora: 11:05:20

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.062421083450317 
 Hora: 11:05:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027805089950562 
 Hora: 11:05:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011213064193726 
 Hora: 11:05:24

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.034374952316284 
 Hora: 11:05:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017601013183594 
 Hora: 11:05:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020833015441895 
 Hora: 11:05:28

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.050718069076538 
 Hora: 11:05:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01983904838562 
 Hora: 11:05:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016664028167725 
 Hora: 11:05:33

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.059138059616089 
 Hora: 11:05:33

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.052887916564941 
 Hora: 11:05:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025811910629272 
 Hora: 11:05:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009782075881958 
 Hora: 11:06:22

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020838022232056 
 Hora: 11:06:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080239772796631 
 Hora: 11:06:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021982192993164 
 Hora: 11:06:26

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.035145998001099 
 Hora: 11:06:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015594959259033 
 Hora: 11:06:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026276111602783 
 Hora: 11:06:30

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.02949595451355 
 Hora: 11:06:30

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.032776117324829 
 Hora: 11:06:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020391941070557 
 Hora: 11:06:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020680904388428 
 Hora: 11:06:33

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.029847145080566 
 Hora: 11:06:33

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.040970087051392 
 Hora: 11:06:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012827157974243 
 Hora: 11:06:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023193120956421 
 Hora: 11:06:35

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.050312042236328 
 Hora: 11:06:35

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025639057159424 
 Hora: 11:06:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0135338306427 
 Hora: 11:06:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018887996673584 
 Hora: 11:07:06

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.045233964920044 
 Hora: 11:07:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01427698135376 
 Hora: 11:07:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023031949996948 
 Hora: 11:07:09

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.055619955062866 
 Hora: 11:07:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01742696762085 
 Hora: 11:07:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01377010345459 
 Hora: 11:07:16

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.025829076766968 
 Hora: 11:07:16

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.029311180114746 
 Hora: 11:07:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014981031417847 
 Hora: 11:07:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012433052062988 
 Hora: 11:07:33

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023065090179443 
 Hora: 11:07:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01238489151001 
 Hora: 11:07:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.031814813613892 
 Hora: 11:07:37

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.030541181564331 
 Hora: 11:07:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028851985931396 
 Hora: 11:07:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059688091278076 
 Hora: 11:07:40

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.038439989089966 
 Hora: 11:07:40

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.053956985473633 
 Hora: 11:07:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007702112197876 
 Hora: 11:07:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016617059707642 
 Hora: 11:07:43

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.052209138870239 
 Hora: 11:07:43

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.032838106155396 
 Hora: 11:07:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014173984527588 
 Hora: 11:07:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.042057037353516 
 Hora: 11:08:07

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.081547975540161 
 Hora: 11:08:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024324893951416 
 Hora: 11:08:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014484882354736 
 Hora: 11:08:10

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.031677961349487 
 Hora: 11:08:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012617826461792 
 Hora: 11:08:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.049485921859741 
 Hora: 11:08:14

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.090392112731934 
 Hora: 11:08:14

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.066044092178345 
 Hora: 11:08:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.03950309753418 
 Hora: 11:08:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.05814790725708 
 Hora: 11:08:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.069363832473755 
 Hora: 11:08:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092051029205322 
 Hora: 11:13:08

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023192882537842 
 Hora: 11:13:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084679126739502 
 Hora: 11:13:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013418912887573 
 Hora: 11:13:12

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.031805992126465 
 Hora: 11:13:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028328895568848 
 Hora: 11:13:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02072811126709 
 Hora: 11:13:16

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.02519702911377 
 Hora: 11:13:16

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.028923988342285 
 Hora: 11:13:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018808126449585 
 Hora: 11:13:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024602174758911 
 Hora: 11:13:33

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.043730020523071 
 Hora: 11:13:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095829963684082 
 Hora: 11:13:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022104024887085 
 Hora: 11:13:36

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.041289091110229 
 Hora: 11:13:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021969079971313 
 Hora: 11:13:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014484882354736 
 Hora: 11:13:37

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.040372848510742 
 Hora: 11:13:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02318000793457 
 Hora: 11:13:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02965784072876 
 Hora: 11:13:40

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.038821935653687 
 Hora: 11:13:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029163122177124 
 Hora: 11:13:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016324996948242 
 Hora: 11:13:43

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.035417079925537 
 Hora: 11:13:43

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.033866882324219 
 Hora: 11:13:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012122869491577 
 Hora: 11:13:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011047124862671 
 Hora: 11:21:55

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.027467012405396 
 Hora: 11:21:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013804912567139 
 Hora: 11:21:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.036127090454102 
 Hora: 11:21:57

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.061707019805908 
 Hora: 11:21:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018212080001831 
 Hora: 11:21:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.04808497428894 
 Hora: 11:22:07

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.10919189453125 
 Hora: 11:22:07

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.051061153411865 
 Hora: 11:22:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.07735800743103 
 Hora: 11:22:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016790866851807 
 Hora: 11:22:09

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.028898000717163 
 Hora: 11:22:09

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.04193115234375 
 Hora: 11:22:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013492822647095 
 Hora: 11:22:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014824151992798 
 Hora: 11:33:42

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.052688121795654 
 Hora: 11:33:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016561985015869 
 Hora: 11:33:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009552001953125 
 Hora: 11:33:45

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.030115127563477 
 Hora: 11:33:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016628980636597 
 Hora: 11:33:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016355991363525 
 Hora: 11:33:49

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018270969390869 
 Hora: 11:33:49

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020497798919678 
 Hora: 11:33:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01068902015686 
 Hora: 11:33:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073370933532715 
 Hora: 11:33:51

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020359039306641 
 Hora: 11:33:51

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025843143463135 
 Hora: 11:33:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082409381866455 
 Hora: 11:33:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010363101959229 
 Hora: 11:33:51

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.018640041351318 
 Hora: 11:33:51

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024493217468262 
 Hora: 11:33:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094840526580811 
 Hora: 11:33:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020692110061646 
 Hora: 11:33:53

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.024874210357666 
 Hora: 11:33:53

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.042031049728394 
 Hora: 11:33:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01264500617981 
 Hora: 11:33:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016351938247681 
 Hora: 11:36:48

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023961067199707 
 Hora: 11:36:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017670154571533 
 Hora: 11:36:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016718149185181 
 Hora: 11:36:51

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.05690598487854 
 Hora: 11:36:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013618946075439 
 Hora: 11:36:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014859914779663 
 Hora: 11:37:45

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.029994010925293 
 Hora: 11:37:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057539939880371 
 Hora: 11:37:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013232946395874 
 Hora: 11:37:47

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024424076080322 
 Hora: 11:37:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021494150161743 
 Hora: 11:37:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085430145263672 
 Hora: 11:37:48

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.02020001411438 
 Hora: 11:37:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059208869934082 
 Hora: 11:37:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010793924331665 
 Hora: 11:37:50

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025564193725586 
 Hora: 11:37:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075061321258545 
 Hora: 11:37:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012435913085938 
 Hora: 11:37:53

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.028966903686523 
 Hora: 11:37:53

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.066503047943115 
 Hora: 11:37:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013574838638306 
 Hora: 11:37:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020636081695557 
 Hora: 11:37:55

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.040404796600342 
 Hora: 11:37:55

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026279926300049 
 Hora: 11:37:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072281360626221 
 Hora: 11:37:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025123119354248 
 Hora: 11:40:12

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.038573026657104 
 Hora: 11:40:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023114919662476 
 Hora: 11:40:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027633905410767 
 Hora: 11:40:15

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.075891971588135 
 Hora: 11:40:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023884773254395 
 Hora: 11:40:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022557020187378 
 Hora: 11:40:19

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.053313970565796 
 Hora: 11:40:19

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.060106039047241 
 Hora: 11:40:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023344039916992 
 Hora: 11:40:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016775131225586 
 Hora: 11:40:22

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.042142868041992 
 Hora: 11:40:22

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.050963878631592 
 Hora: 11:40:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015966176986694 
 Hora: 11:40:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019461870193481 
 Hora: 11:42:13

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.041946172714233 
 Hora: 11:42:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020278930664062 
 Hora: 11:42:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011221885681152 
 Hora: 11:42:16

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.034085035324097 
 Hora: 11:42:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01042103767395 
 Hora: 11:42:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01314902305603 
 Hora: 11:42:16

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.038628101348877 
 Hora: 11:42:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016380071640015 
 Hora: 11:42:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021452188491821 
 Hora: 11:42:18

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.058675050735474 
 Hora: 11:42:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027261018753052 
 Hora: 11:42:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013746976852417 
 Hora: 11:42:29

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017285108566284 
 Hora: 11:42:29

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021668910980225 
 Hora: 11:42:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012362957000732 
 Hora: 11:42:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010485887527466 
 Hora: 11:42:31

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.025421857833862 
 Hora: 11:42:31

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023622035980225 
 Hora: 11:42:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083842277526855 
 Hora: 11:42:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015228986740112 
 Hora: 11:44:36

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.19549489021301 
 Hora: 11:44:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087988376617432 
 Hora: 11:44:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022318124771118 
 Hora: 11:44:39

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.14706301689148 
 Hora: 11:44:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.034664869308472 
 Hora: 11:44:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014879941940308 
 Hora: 11:44:40

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.037490844726562 
 Hora: 11:44:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090420246124268 
 Hora: 11:44:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0050981044769287 
 Hora: 11:44:44

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021291971206665 
 Hora: 11:44:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0037808418273926 
 Hora: 11:44:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010542154312134 
 Hora: 11:47:16

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.01985502243042 
 Hora: 11:47:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080947875976562 
 Hora: 11:47:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070128440856934 
 Hora: 11:47:20

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020999908447266 
 Hora: 11:47:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077810287475586 
 Hora: 11:47:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088710784912109 
 Hora: 11:47:35

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019927024841309 
 Hora: 11:47:35

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.031629085540771 
 Hora: 11:47:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013247966766357 
 Hora: 11:47:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019565105438232 
 Hora: 11:47:42

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.028589010238647 
 Hora: 11:47:42

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014153003692627 
 Hora: 11:47:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014516115188599 
 Hora: 11:47:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085289478302002 
 Hora: 11:52:45

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017040967941284 
 Hora: 11:52:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099120140075684 
 Hora: 11:52:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061790943145752 
 Hora: 11:52:47

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022641897201538 
 Hora: 11:52:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013313055038452 
 Hora: 11:52:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094339847564697 
 Hora: 11:52:51

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016199111938477 
 Hora: 11:52:51

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019701957702637 
 Hora: 11:52:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087120532989502 
 Hora: 11:52:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.043222904205322 
 Hora: 11:52:54

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.077162981033325 
 Hora: 11:52:54

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.053315877914429 
 Hora: 11:52:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011021137237549 
 Hora: 11:52:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012271165847778 
 Hora: 12:10:04

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024879217147827 
 Hora: 12:10:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066080093383789 
 Hora: 12:10:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007375955581665 
 Hora: 12:10:07

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.019098043441772 
 Hora: 12:10:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080630779266357 
 Hora: 12:10:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011543035507202 
 Hora: 12:10:32

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020179033279419 
 Hora: 12:10:32

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016029834747314 
 Hora: 12:10:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060148239135742 
 Hora: 12:10:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012694835662842 
 Hora: 12:10:34

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.045228004455566 
 Hora: 12:10:34

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.033578872680664 
 Hora: 12:10:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013303995132446 
 Hora: 12:10:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085959434509277 
 Hora: 12:12:58

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022785902023315 
 Hora: 12:12:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083229541778564 
 Hora: 12:12:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060520172119141 
 Hora: 12:12:58

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022893190383911 
 Hora: 12:12:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011204957962036 
 Hora: 12:12:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060968399047852 
 Hora: 12:13:02

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019404888153076 
 Hora: 12:13:02

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015439033508301 
 Hora: 12:13:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0056910514831543 
 Hora: 12:13:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096659660339355 
 Hora: 12:13:03

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.037813186645508 
 Hora: 12:13:03

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021356105804443 
 Hora: 12:13:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011152982711792 
 Hora: 12:13:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097270011901855 
 Hora: 12:13:44

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017461061477661 
 Hora: 12:13:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092401504516602 
 Hora: 12:13:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087330341339111 
 Hora: 12:13:45

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.016419172286987 
 Hora: 12:13:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.004302978515625 
 Hora: 12:13:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094599723815918 
 Hora: 12:13:49

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014363050460815 
 Hora: 12:13:49

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017838954925537 
 Hora: 12:13:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096170902252197 
 Hora: 12:13:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083649158477783 
 Hora: 12:13:49

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.040541887283325 
 Hora: 12:13:49

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023277044296265 
 Hora: 12:13:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090270042419434 
 Hora: 12:13:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087759494781494 
 Hora: 12:29:07

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02043080329895 
 Hora: 12:29:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089981555938721 
 Hora: 12:29:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01958179473877 
 Hora: 12:29:09

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.043576955795288 
 Hora: 12:29:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017168998718262 
 Hora: 12:29:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067801475524902 
 Hora: 12:29:37

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021319150924683 
 Hora: 12:29:37

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014663934707642 
 Hora: 12:29:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011677026748657 
 Hora: 12:29:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064029693603516 
 Hora: 12:29:38

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.048305034637451 
 Hora: 12:29:38

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.040467977523804 
 Hora: 12:29:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014106035232544 
 Hora: 12:29:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090999603271484 
 Hora: 12:47:52

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018759965896606 
 Hora: 12:47:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098280906677246 
 Hora: 12:47:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017096996307373 
 Hora: 12:47:56

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.04121994972229 
 Hora: 12:47:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029350996017456 
 Hora: 12:47:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016005992889404 
 Hora: 12:48:01

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018533945083618 
 Hora: 12:48:01

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015004873275757 
 Hora: 12:48:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012578010559082 
 Hora: 12:48:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011561870574951 
 Hora: 12:48:03

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.054100036621094 
 Hora: 12:48:03

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.029393911361694 
 Hora: 12:48:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012321949005127 
 Hora: 12:48:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014930009841919 
 Hora: 12:52:59

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023810863494873 
 Hora: 12:52:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087728500366211 
 Hora: 12:52:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014428853988647 
 Hora: 12:53:03

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.060728073120117 
 Hora: 12:53:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013703107833862 
 Hora: 12:53:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091638565063477 
 Hora: 12:53:05

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020666122436523 
 Hora: 12:53:05

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.02570915222168 
 Hora: 12:53:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013011932373047 
 Hora: 12:53:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090329647064209 
 Hora: 12:53:08

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.041375875473022 
 Hora: 12:53:08

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.041028022766113 
 Hora: 12:53:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012524843215942 
 Hora: 12:53:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072588920593262 
 Hora: 12:53:55

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.029474973678589 
 Hora: 12:53:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012399911880493 
 Hora: 12:53:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013621807098389 
 Hora: 12:53:59

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.037872076034546 
 Hora: 12:53:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095369815826416 
 Hora: 12:53:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01557993888855 
 Hora: 12:54:03

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024796009063721 
 Hora: 12:54:03

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.02685284614563 
 Hora: 12:54:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079739093780518 
 Hora: 12:54:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025560140609741 
 Hora: 12:54:04

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.051383972167969 
 Hora: 12:54:04

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.029633045196533 
 Hora: 12:54:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010108947753906 
 Hora: 12:54:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010724067687988 
 Hora: 12:54:41

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021683931350708 
 Hora: 12:54:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090808868408203 
 Hora: 12:54:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.047224998474121 
 Hora: 12:54:44

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.042168140411377 
 Hora: 12:54:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015468120574951 
 Hora: 12:54:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010272026062012 
 Hora: 12:54:48

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020534038543701 
 Hora: 12:54:48

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017144918441772 
 Hora: 12:54:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060138702392578 
 Hora: 12:54:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02679705619812 
 Hora: 12:54:49

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.043591022491455 
 Hora: 12:54:49

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.032102108001709 
 Hora: 12:54:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020677089691162 
 Hora: 12:54:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012015819549561 
 Hora: 12:56:39

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024745941162109 
 Hora: 12:56:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010646820068359 
 Hora: 12:56:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014238834381104 
 Hora: 12:56:41

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.027237892150879 
 Hora: 12:56:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012356996536255 
 Hora: 12:56:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090310573577881 
 Hora: 12:56:45

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020988941192627 
 Hora: 12:56:45

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019865989685059 
 Hora: 12:56:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010221004486084 
 Hora: 12:56:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010974884033203 
 Hora: 12:56:53

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.036659002304077 
 Hora: 12:56:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011928081512451 
 Hora: 12:56:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010200023651123 
 Hora: 12:56:56

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.027015209197998 
 Hora: 12:56:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094959735870361 
 Hora: 12:56:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0050477981567383 
 Hora: 12:56:59

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018234014511108 
 Hora: 12:56:59

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021039962768555 
 Hora: 12:56:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089750289916992 
 Hora: 12:56:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069248676300049 
 Hora: 12:57:04

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021326065063477 
 Hora: 12:57:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069270133972168 
 Hora: 12:57:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016870975494385 
 Hora: 12:57:06

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.026382923126221 
 Hora: 12:57:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012763977050781 
 Hora: 12:57:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092780590057373 
 Hora: 12:57:13

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015942811965942 
 Hora: 12:57:13

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.01598596572876 
 Hora: 12:57:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010377883911133 
 Hora: 12:57:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095200538635254 
 Hora: 12:58:04

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022095203399658 
 Hora: 12:58:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080070495605469 
 Hora: 12:58:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014496088027954 
 Hora: 12:58:05

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024245023727417 
 Hora: 12:58:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088591575622559 
 Hora: 12:58:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011235952377319 
 Hora: 12:58:05

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021595001220703 
 Hora: 12:58:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072629451751709 
 Hora: 12:58:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010957956314087 
 Hora: 12:58:07

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.035813093185425 
 Hora: 12:58:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012868881225586 
 Hora: 12:58:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01549506187439 
 Hora: 12:58:07

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028997182846069 
 Hora: 12:58:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089740753173828 
 Hora: 12:58:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098979473114014 
 Hora: 12:58:09

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.02997899055481 
 Hora: 12:58:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011729955673218 
 Hora: 12:58:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012062072753906 
 Hora: 12:58:11

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019255876541138 
 Hora: 12:58:11

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017725944519043 
 Hora: 12:58:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094871520996094 
 Hora: 12:58:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010843992233276 
 Hora: 12:58:15

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022548198699951 
 Hora: 12:58:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009390115737915 
 Hora: 12:58:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088529586791992 
 Hora: 12:58:18

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020887136459351 
 Hora: 12:58:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085849761962891 
 Hora: 12:58:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090980529785156 
 Hora: 12:58:34

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.028682947158813 
 Hora: 12:58:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090179443359375 
 Hora: 12:58:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013516902923584 
 Hora: 12:58:37

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.032940864562988 
 Hora: 12:58:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014292001724243 
 Hora: 12:58:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018702983856201 
 Hora: 12:58:39

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022655010223389 
 Hora: 12:58:39

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.030717849731445 
 Hora: 12:58:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012902975082397 
 Hora: 12:58:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009443998336792 
 Hora: 12:58:41

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.045557975769043 
 Hora: 12:58:41

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.031528949737549 
 Hora: 12:58:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011704921722412 
 Hora: 12:58:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017786026000977 
 Hora: 12:59:21

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020153999328613 
 Hora: 12:59:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011579990386963 
 Hora: 12:59:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013136148452759 
 Hora: 12:59:24

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.030536890029907 
 Hora: 12:59:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012531042098999 
 Hora: 12:59:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013827085494995 
 Hora: 12:59:26

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022348880767822 
 Hora: 12:59:26

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021864175796509 
 Hora: 12:59:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090749263763428 
 Hora: 12:59:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087080001831055 
 Hora: 12:59:28

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.040807962417603 
 Hora: 12:59:28

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.048332929611206 
 Hora: 12:59:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011697053909302 
 Hora: 12:59:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010370969772339 
 Hora: 14:03:21

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022915124893188 
 Hora: 14:03:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078239440917969 
 Hora: 14:03:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011490106582642 
 Hora: 14:03:22

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.026045083999634 
 Hora: 14:03:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011892080307007 
 Hora: 14:03:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018630981445312 
 Hora: 14:03:22

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.038465976715088 
 Hora: 14:03:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010623931884766 
 Hora: 14:03:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016427040100098 
 Hora: 14:03:24

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.029232978820801 
 Hora: 14:03:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022216081619263 
 Hora: 14:03:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006309986114502 
 Hora: 14:03:24

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.025707006454468 
 Hora: 14:03:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079278945922852 
 Hora: 14:03:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011227130889893 
 Hora: 14:03:24

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.027827024459839 
 Hora: 14:03:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010721921920776 
 Hora: 14:03:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010070085525513 
 Hora: 14:03:28

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.032024145126343 
 Hora: 14:03:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016112089157104 
 Hora: 14:03:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01941990852356 
 Hora: 14:03:29

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.032072067260742 
 Hora: 14:03:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013212919235229 
 Hora: 14:03:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097930431365967 
 Hora: 14:03:32

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.055907011032104 
 Hora: 14:03:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010874032974243 
 Hora: 14:03:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012020826339722 
 Hora: 14:03:37

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020685911178589 
 Hora: 14:03:37

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018428087234497 
 Hora: 14:03:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011872053146362 
 Hora: 14:03:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01374888420105 
 Hora: 14:03:38

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.0419020652771 
 Hora: 14:03:38

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038558006286621 
 Hora: 14:03:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012585878372192 
 Hora: 14:03:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0049118995666504 
 Hora: 14:04:38

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019035816192627 
 Hora: 14:04:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086410045623779 
 Hora: 14:04:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011972904205322 
 Hora: 14:04:40

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.036480903625488 
 Hora: 14:04:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019334077835083 
 Hora: 14:04:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0119469165802 
 Hora: 14:04:45

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.056156158447266 
 Hora: 14:04:45

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.093211889266968 
 Hora: 14:04:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013314008712769 
 Hora: 14:04:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015468120574951 
 Hora: 14:04:47

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.039263010025024 
 Hora: 14:04:47

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.03511905670166 
 Hora: 14:04:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086150169372559 
 Hora: 14:04:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077860355377197 
 Hora: 14:15:56

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019257068634033 
 Hora: 14:15:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075328350067139 
 Hora: 14:15:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020730018615723 
 Hora: 14:15:58

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.038909196853638 
 Hora: 14:15:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012572050094604 
 Hora: 14:15:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013391017913818 
 Hora: 14:15:59

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.044816970825195 
 Hora: 14:15:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021142959594727 
 Hora: 14:15:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059502124786377 
 Hora: 14:16:01

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020689010620117 
 Hora: 14:16:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010557174682617 
 Hora: 14:16:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020369052886963 
 Hora: 14:16:07

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017977952957153 
 Hora: 14:16:07

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.02249002456665 
 Hora: 14:16:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015829086303711 
 Hora: 14:16:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017687082290649 
 Hora: 14:16:09

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.040724992752075 
 Hora: 14:16:09

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.030076026916504 
 Hora: 14:16:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012643098831177 
 Hora: 14:16:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007411003112793 
 Hora: 14:16:50

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.025182008743286 
 Hora: 14:16:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071120262145996 
 Hora: 14:16:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017632961273193 
 Hora: 14:16:53

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.036335945129395 
 Hora: 14:16:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014789819717407 
 Hora: 14:16:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086269378662109 
 Hora: 14:16:57

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024202108383179 
 Hora: 14:16:57

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025606870651245 
 Hora: 14:16:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013252973556519 
 Hora: 14:16:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02979588508606 
 Hora: 14:16:59

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.039616107940674 
 Hora: 14:16:59

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.043424844741821 
 Hora: 14:16:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.030484914779663 
 Hora: 14:16:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.089344024658203 
 Hora: 14:17:58

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.17624306678772 
 Hora: 14:17:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.086850881576538 
 Hora: 14:17:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.088146924972534 
 Hora: 14:18:02

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.21813678741455 
 Hora: 14:18:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.11693906784058 
 Hora: 14:18:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.090960025787354 
 Hora: 14:18:11

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.18478798866272 
 Hora: 14:18:11

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.16647815704346 
 Hora: 14:18:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.090126037597656 
 Hora: 14:18:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.084818124771118 
 Hora: 14:18:13

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.18262887001038 
 Hora: 14:18:13

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.22545790672302 
 Hora: 14:18:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.084131956100464 
 Hora: 14:18:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.033030986785889 
 Hora: 14:18:13

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.058657169342041 
 Hora: 14:18:13

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.067631959915161 
 Hora: 14:18:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013093948364258 
 Hora: 14:18:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01468300819397 
 Hora: 14:18:15

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.045963048934937 
 Hora: 14:18:15

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.029906988143921 
 Hora: 14:18:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01437783241272 
 Hora: 14:18:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00850510597229 
 Hora: 14:19:01

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020085096359253 
 Hora: 14:19:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089550018310547 
 Hora: 14:19:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073678493499756 
 Hora: 14:19:04

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.01607608795166 
 Hora: 14:19:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012134075164795 
 Hora: 14:19:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096430778503418 
 Hora: 14:19:07

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022191047668457 
 Hora: 14:19:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093300342559814 
 Hora: 14:19:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01524806022644 
 Hora: 14:19:10

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.027385950088501 
 Hora: 14:19:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012799978256226 
 Hora: 14:19:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010159969329834 
 Hora: 14:19:16

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014303922653198 
 Hora: 14:19:16

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018245935440063 
 Hora: 14:19:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012674808502197 
 Hora: 14:19:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012149095535278 
 Hora: 14:19:17

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.039839029312134 
 Hora: 14:19:17

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.043377876281738 
 Hora: 14:19:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015413045883179 
 Hora: 14:19:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077278614044189 
 Hora: 14:20:52

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02137303352356 
 Hora: 14:20:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087370872497559 
 Hora: 14:20:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013705968856812 
 Hora: 14:20:54

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.041502952575684 
 Hora: 14:20:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021029949188232 
 Hora: 14:20:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016756057739258 
 Hora: 14:20:57

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015825033187866 
 Hora: 14:20:57

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015346050262451 
 Hora: 14:20:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012637138366699 
 Hora: 14:20:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015269994735718 
 Hora: 14:20:59

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.040961980819702 
 Hora: 14:20:59

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.04128885269165 
 Hora: 14:20:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097801685333252 
 Hora: 14:20:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093960762023926 
 Hora: 14:36:09

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.016263008117676 
 Hora: 14:36:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0046160221099854 
 Hora: 14:36:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010192155838013 
 Hora: 14:36:12

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.038488149642944 
 Hora: 14:36:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011950969696045 
 Hora: 14:36:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021381139755249 
 Hora: 14:36:16

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.035865068435669 
 Hora: 14:36:16

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.032238960266113 
 Hora: 14:36:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012870073318481 
 Hora: 14:36:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012259006500244 
 Hora: 14:36:18

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.026357889175415 
 Hora: 14:36:18

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019069910049438 
 Hora: 14:36:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012967824935913 
 Hora: 14:36:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011388063430786 
 Hora: 14:36:18

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.044528007507324 
 Hora: 14:36:18

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.039463996887207 
 Hora: 14:36:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01144814491272 
 Hora: 14:36:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014621019363403 
 Hora: 14:36:20

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.054594993591309 
 Hora: 14:36:20

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.07574200630188 
 Hora: 14:36:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090601444244385 
 Hora: 14:36:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014070987701416 
 Hora: 14:38:47

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022830009460449 
 Hora: 14:38:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020498037338257 
 Hora: 14:38:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014954805374146 
 Hora: 14:38:49

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.01871395111084 
 Hora: 14:38:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015455007553101 
 Hora: 14:38:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013045072555542 
 Hora: 14:38:54

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020910024642944 
 Hora: 14:38:54

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.012414932250977 
 Hora: 14:38:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0049998760223389 
 Hora: 14:38:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017130851745605 
 Hora: 14:38:57

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.027513980865479 
 Hora: 14:38:57

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.038897037506104 
 Hora: 14:38:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012349128723145 
 Hora: 14:38:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012051105499268 
 Hora: 14:38:57

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.10672998428345 
 Hora: 14:38:57

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.055803060531616 
 Hora: 14:38:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02709698677063 
 Hora: 14:38:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014289855957031 
 Hora: 14:38:58

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.039952039718628 
 Hora: 14:38:58

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.028093814849854 
 Hora: 14:38:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013022184371948 
 Hora: 14:38:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099000930786133 
 Hora: 14:49:36

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020199060440063 
 Hora: 14:49:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010907888412476 
 Hora: 14:49:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015439033508301 
 Hora: 14:49:40

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.043270111083984 
 Hora: 14:49:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097329616546631 
 Hora: 14:49:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0048971176147461 
 Hora: 14:49:43

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.03386378288269 
 Hora: 14:49:43

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.01658296585083 
 Hora: 14:49:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01495099067688 
 Hora: 14:49:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016049861907959 
 Hora: 14:49:45

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.048254013061523 
 Hora: 14:49:45

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.032130002975464 
 Hora: 14:49:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022773027420044 
 Hora: 14:49:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095140933990479 
 Hora: 14:50:34

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020783185958862 
 Hora: 14:50:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068619251251221 
 Hora: 14:50:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074319839477539 
 Hora: 14:50:37

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.031425952911377 
 Hora: 14:50:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0050818920135498 
 Hora: 14:50:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010741949081421 
 Hora: 14:50:44

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021307229995728 
 Hora: 14:50:44

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.022636890411377 
 Hora: 14:50:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010524034500122 
 Hora: 14:50:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014796018600464 
 Hora: 14:50:46

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.0384681224823 
 Hora: 14:50:46

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.026236057281494 
 Hora: 14:50:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012809038162231 
 Hora: 14:50:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029000043869019 
 Hora: 14:50:49

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.10509586334229 
 Hora: 14:50:49

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.077883005142212 
 Hora: 14:50:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.056440830230713 
 Hora: 14:50:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027063131332397 
 Hora: 14:50:51

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.030272960662842 
 Hora: 14:50:51

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021257877349854 
 Hora: 14:50:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014685869216919 
 Hora: 14:50:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014541149139404 
 Hora: 14:50:51

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.040247201919556 
 Hora: 14:50:51

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024118900299072 
 Hora: 14:50:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013144016265869 
 Hora: 14:50:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010052919387817 
 Hora: 14:50:51

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.036354064941406 
 Hora: 14:50:51

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038069009780884 
 Hora: 14:50:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013385057449341 
 Hora: 14:50:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020457029342651 
 Hora: 14:50:52

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.054116010665894 
 Hora: 14:50:52

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.044506072998047 
 Hora: 14:50:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012876987457275 
 Hora: 14:50:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019387006759644 
 Hora: 14:50:52

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.043348073959351 
 Hora: 14:50:52

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024606943130493 
 Hora: 14:50:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084590911865234 
 Hora: 14:50:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010824918746948 
 Hora: 14:51:26

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018061876296997 
 Hora: 14:51:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093009471893311 
 Hora: 14:51:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01189112663269 
 Hora: 14:51:28

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.032632112503052 
 Hora: 14:51:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012225151062012 
 Hora: 14:51:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074000358581543 
 Hora: 14:51:33

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019967794418335 
 Hora: 14:51:33

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015860080718994 
 Hora: 14:51:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058410167694092 
 Hora: 14:51:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014714956283569 
 Hora: 14:51:35

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.041056871414185 
 Hora: 14:51:35

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.039860010147095 
 Hora: 14:51:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016643047332764 
 Hora: 14:51:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0047998428344727 
 Hora: 14:53:06

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021836042404175 
 Hora: 14:53:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093169212341309 
 Hora: 14:53:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016635894775391 
 Hora: 14:53:09

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023844003677368 
 Hora: 14:53:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012158155441284 
 Hora: 14:53:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01307201385498 
 Hora: 14:53:13

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022655963897705 
 Hora: 14:53:13

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018086910247803 
 Hora: 14:53:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010961055755615 
 Hora: 14:53:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014122009277344 
 Hora: 14:53:15

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.046199083328247 
 Hora: 14:53:15

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.042407989501953 
 Hora: 14:53:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012504100799561 
 Hora: 14:53:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062751770019531 
 Hora: 14:53:19

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020416021347046 
 Hora: 14:53:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0055358409881592 
 Hora: 14:53:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011451959609985 
 Hora: 14:53:21

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.03016996383667 
 Hora: 14:53:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011416912078857 
 Hora: 14:53:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010030031204224 
 Hora: 14:53:26

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017802000045776 
 Hora: 14:53:26

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015397071838379 
 Hora: 14:53:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083401203155518 
 Hora: 14:53:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015837907791138 
 Hora: 14:53:28

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.050796031951904 
 Hora: 14:53:28

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.040971994400024 
 Hora: 14:53:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066370964050293 
 Hora: 14:53:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011636018753052 
 Hora: 14:53:29

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017703056335449 
 Hora: 14:53:29

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017316102981567 
 Hora: 14:53:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063269138336182 
 Hora: 14:53:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078530311584473 
 Hora: 14:53:30

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.040035009384155 
 Hora: 14:53:30

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.030059099197388 
 Hora: 14:53:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010302066802979 
 Hora: 14:53:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0055620670318604 
 Hora: 14:54:18

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018028974533081 
 Hora: 14:54:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081019401550293 
 Hora: 14:54:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088860988616943 
 Hora: 14:54:21

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020895957946777 
 Hora: 14:54:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012996912002563 
 Hora: 14:54:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089230537414551 
 Hora: 14:54:26

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.025207996368408 
 Hora: 14:54:26

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018753051757812 
 Hora: 14:54:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065560340881348 
 Hora: 14:54:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088651180267334 
 Hora: 14:54:28

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.044749975204468 
 Hora: 14:54:28

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038640975952148 
 Hora: 14:54:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062530040740967 
 Hora: 14:54:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077059268951416 
 Hora: 14:55:17

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.016077995300293 
 Hora: 14:55:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010262966156006 
 Hora: 14:55:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065889358520508 
 Hora: 14:55:20

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.03741192817688 
 Hora: 14:55:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014039993286133 
 Hora: 14:55:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010643005371094 
 Hora: 14:55:24

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015550136566162 
 Hora: 14:55:24

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015262126922607 
 Hora: 14:55:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010818958282471 
 Hora: 14:55:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093510150909424 
 Hora: 14:55:26

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.040877103805542 
 Hora: 14:55:26

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025077104568481 
 Hora: 14:55:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02068305015564 
 Hora: 14:55:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088558197021484 
 Hora: 15:08:56

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021143913269043 
 Hora: 15:08:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010796070098877 
 Hora: 15:08:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098741054534912 
 Hora: 15:08:59

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.029759883880615 
 Hora: 15:08:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014227151870728 
 Hora: 15:08:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0053911209106445 
 Hora: 15:09:06

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022099018096924 
 Hora: 15:09:06

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.013580083847046 
 Hora: 15:09:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012604951858521 
 Hora: 15:09:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0052680969238281 
 Hora: 15:09:07

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.042870998382568 
 Hora: 15:09:07

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.034327983856201 
 Hora: 15:09:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012355089187622 
 Hora: 15:09:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017818927764893 
 Hora: 15:11:45

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.058479070663452 
 Hora: 15:11:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059819221496582 
 Hora: 15:11:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.052267074584961 
 Hora: 15:11:48

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.068465948104858 
 Hora: 15:11:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070619583129883 
 Hora: 15:11:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.046358108520508 
 Hora: 15:11:58

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.057008028030396 
 Hora: 15:11:58

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.10102701187134 
 Hora: 15:11:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011817932128906 
 Hora: 15:11:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.054557085037231 
 Hora: 15:11:59

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.14292693138123 
 Hora: 15:11:59

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.1159610748291 
 Hora: 15:11:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.054102897644043 
 Hora: 15:11:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.049986124038696 
 Hora: 15:12:12

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018178939819336 
 Hora: 15:12:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011169910430908 
 Hora: 15:12:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.084709882736206 
 Hora: 15:12:15

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.090101003646851 
 Hora: 15:12:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014667987823486 
 Hora: 15:12:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.041352033615112 
 Hora: 15:12:18

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.074851989746094 
 Hora: 15:12:18

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.01487398147583 
 Hora: 15:12:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083911418914795 
 Hora: 15:12:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.066032886505127 
 Hora: 15:12:20

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.085482120513916 
 Hora: 15:12:20

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038124084472656 
 Hora: 15:12:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011209964752197 
 Hora: 15:12:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015983104705811 
 Hora: 15:12:58

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017669916152954 
 Hora: 15:12:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011168003082275 
 Hora: 15:12:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082762241363525 
 Hora: 15:13:01

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.024275064468384 
 Hora: 15:13:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065009593963623 
 Hora: 15:13:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021061897277832 
 Hora: 15:13:04

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015337944030762 
 Hora: 15:13:04

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015426158905029 
 Hora: 15:13:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083248615264893 
 Hora: 15:13:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090751647949219 
 Hora: 15:13:06

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.053786993026733 
 Hora: 15:13:06

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038109064102173 
 Hora: 15:13:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0032880306243896 
 Hora: 15:13:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065407752990723 
 Hora: 15:13:21

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021913051605225 
 Hora: 15:13:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057888031005859 
 Hora: 15:13:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015353918075562 
 Hora: 15:13:24

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.033525943756104 
 Hora: 15:13:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015978813171387 
 Hora: 15:13:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064229965209961 
 Hora: 15:13:27

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.01958703994751 
 Hora: 15:13:27

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019430875778198 
 Hora: 15:13:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059161186218262 
 Hora: 15:13:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078158378601074 
 Hora: 15:13:28

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.041226148605347 
 Hora: 15:13:28

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.044743061065674 
 Hora: 15:13:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061240196228027 
 Hora: 15:13:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008842945098877 
 Hora: 15:14:14

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024518013000488 
 Hora: 15:14:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095410346984863 
 Hora: 15:14:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009307861328125 
 Hora: 15:14:17

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.08134388923645 
 Hora: 15:14:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019100904464722 
 Hora: 15:14:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085639953613281 
 Hora: 15:14:20

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021452903747559 
 Hora: 15:14:20

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.01834511756897 
 Hora: 15:14:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.038421869277954 
 Hora: 15:14:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010177135467529 
 Hora: 15:14:22

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.063811063766479 
 Hora: 15:14:22

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.048836946487427 
 Hora: 15:14:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083358287811279 
 Hora: 15:14:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082879066467285 
 Hora: 15:20:43

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021167039871216 
 Hora: 15:20:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014059066772461 
 Hora: 15:20:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.080640077590942 
 Hora: 15:20:46

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.03351092338562 
 Hora: 15:20:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013638019561768 
 Hora: 15:20:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069580078125 
 Hora: 15:20:49

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019927024841309 
 Hora: 15:20:49

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020642042160034 
 Hora: 15:20:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093460083007812 
 Hora: 15:20:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022619009017944 
 Hora: 15:20:51

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.039835929870605 
 Hora: 15:20:51

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.035928964614868 
 Hora: 15:20:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099852085113525 
 Hora: 15:20:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076320171356201 
 Hora: 15:25:53

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019166946411133 
 Hora: 15:25:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075981616973877 
 Hora: 15:25:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012333869934082 
 Hora: 15:25:56

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.027517080307007 
 Hora: 15:25:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013465166091919 
 Hora: 15:25:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010022878646851 
 Hora: 15:26:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010786056518555 
 Hora: 15:26:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013373851776123 
 Hora: 15:26:03

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018226146697998 
 Hora: 15:26:03

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.01901388168335 
 Hora: 15:26:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009958028793335 
 Hora: 15:26:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091578960418701 
 Hora: 15:26:30

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.030664920806885 
 Hora: 15:26:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013261079788208 
 Hora: 15:26:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013215065002441 
 Hora: 15:26:32

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020185947418213 
 Hora: 15:26:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014174222946167 
 Hora: 15:26:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071349143981934 
 Hora: 15:26:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013208866119385 
 Hora: 15:26:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012961864471436 
 Hora: 15:26:37

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.033216953277588 
 Hora: 15:26:37

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.037333011627197 
 Hora: 15:26:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078468322753906 
 Hora: 15:26:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093858242034912 
 Hora: 15:27:56

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019098997116089 
 Hora: 15:27:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071651935577393 
 Hora: 15:27:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.068071842193604 
 Hora: 15:27:59

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020112037658691 
 Hora: 15:27:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061271190643311 
 Hora: 15:27:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010033130645752 
 Hora: 15:28:01

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015913963317871 
 Hora: 15:28:01

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019579887390137 
 Hora: 15:28:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073468685150146 
 Hora: 15:28:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065062046051025 
 Hora: 15:28:03

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.030596017837524 
 Hora: 15:28:03

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.022454023361206 
 Hora: 15:28:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012788057327271 
 Hora: 15:28:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01292610168457 
 Hora: 15:28:04

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.054725885391235 
 Hora: 15:28:04

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.029145956039429 
 Hora: 15:28:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01832389831543 
 Hora: 15:28:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.033107042312622 
 Hora: 15:28:05

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.036988973617554 
 Hora: 15:28:05

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038604021072388 
 Hora: 15:28:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013503074645996 
 Hora: 15:28:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087058544158936 
 Hora: 15:29:55

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020999193191528 
 Hora: 15:29:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009268045425415 
 Hora: 15:29:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019196033477783 
 Hora: 15:29:57

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020689010620117 
 Hora: 15:29:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011693000793457 
 Hora: 15:29:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010426998138428 
 Hora: 15:30:02

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.027007102966309 
 Hora: 15:30:02

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.029366016387939 
 Hora: 15:30:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011005878448486 
 Hora: 15:30:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019186019897461 
 Hora: 15:30:05

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.036319017410278 
 Hora: 15:30:05

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025707006454468 
 Hora: 15:30:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012531042098999 
 Hora: 15:30:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018862009048462 
 Hora: 15:30:06

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.04936695098877 
 Hora: 15:30:06

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.039214134216309 
 Hora: 15:30:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012856006622314 
 Hora: 15:30:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01764988899231 
 Hora: 15:30:07

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.062917947769165 
 Hora: 15:30:07

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038534879684448 
 Hora: 15:30:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011622905731201 
 Hora: 15:30:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007288932800293 
 Hora: 15:43:31

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022935152053833 
 Hora: 15:43:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070841312408447 
 Hora: 15:43:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011778831481934 
 Hora: 15:43:33

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.033099889755249 
 Hora: 15:43:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019832849502563 
 Hora: 15:43:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091021060943604 
 Hora: 15:43:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023799896240234 
 Hora: 15:43:36

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017791986465454 
 Hora: 15:43:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013853073120117 
 Hora: 15:43:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099987983703613 
 Hora: 15:44:00

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021821022033691 
 Hora: 15:44:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075221061706543 
 Hora: 15:44:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016656875610352 
 Hora: 15:44:03

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.032798051834106 
 Hora: 15:44:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012911796569824 
 Hora: 15:44:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011312007904053 
 Hora: 15:44:07

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.036335945129395 
 Hora: 15:44:07

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.024661064147949 
 Hora: 15:44:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013167858123779 
 Hora: 15:44:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065889358520508 
 Hora: 15:44:14

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018100023269653 
 Hora: 15:44:14

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021899938583374 
 Hora: 15:44:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086228847503662 
 Hora: 15:44:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067260265350342 
 Hora: 15:44:45

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018439054489136 
 Hora: 15:44:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060021877288818 
 Hora: 15:44:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01346492767334 
 Hora: 15:44:47

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.030148029327393 
 Hora: 15:44:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011948823928833 
 Hora: 15:44:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019598960876465 
 Hora: 15:44:47

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.02928900718689 
 Hora: 15:44:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013244152069092 
 Hora: 15:44:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012040853500366 
 Hora: 15:44:49

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.024846076965332 
 Hora: 15:44:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099170207977295 
 Hora: 15:44:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092899799346924 
 Hora: 15:44:53

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022809028625488 
 Hora: 15:44:53

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.013085126876831 
 Hora: 15:44:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058200359344482 
 Hora: 15:44:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007735013961792 
 Hora: 15:44:53

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.049116134643555 
 Hora: 15:44:53

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.031798839569092 
 Hora: 15:44:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090880393981934 
 Hora: 15:44:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065290927886963 
 Hora: 16:14:50

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018548011779785 
 Hora: 16:14:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097010135650635 
 Hora: 16:14:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015208959579468 
 Hora: 16:14:51

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028817176818848 
 Hora: 16:14:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093600749969482 
 Hora: 16:14:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076210498809814 
 Hora: 16:14:55

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020752906799316 
 Hora: 16:14:55

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017692089080811 
 Hora: 16:14:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008901834487915 
 Hora: 16:14:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012385845184326 
 Hora: 16:14:57

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.052937984466553 
 Hora: 16:14:57

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.039304971694946 
 Hora: 16:14:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010113000869751 
 Hora: 16:14:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0044910907745361 
 Hora: 16:52:24

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020787000656128 
 Hora: 16:52:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077211856842041 
 Hora: 16:52:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095720291137695 
 Hora: 16:52:26

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023382902145386 
 Hora: 16:52:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091738700866699 
 Hora: 16:52:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060501098632812 
 Hora: 16:52:30

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019973993301392 
 Hora: 16:52:30

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019500017166138 
 Hora: 16:52:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095000267028809 
 Hora: 16:52:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008404016494751 
 Hora: 16:52:57

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.015169143676758 
 Hora: 16:52:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0037281513214111 
 Hora: 16:52:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069420337677002 
 Hora: 16:53:00

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021028995513916 
 Hora: 16:53:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0042588710784912 
 Hora: 16:53:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069558620452881 
 Hora: 16:53:03

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021170854568481 
 Hora: 16:53:03

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017528057098389 
 Hora: 16:53:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009749174118042 
 Hora: 16:53:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079059600830078 
 Hora: 16:53:07

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018419981002808 
 Hora: 16:53:07

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020004034042358 
 Hora: 16:53:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099830627441406 
 Hora: 16:53:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088939666748047 
 Hora: 16:55:53

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.015251159667969 
 Hora: 16:55:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083379745483398 
 Hora: 16:55:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099160671234131 
 Hora: 16:55:56

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022783041000366 
 Hora: 16:55:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010371923446655 
 Hora: 16:55:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074520111083984 
 Hora: 16:56:01

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019576072692871 
 Hora: 16:56:01

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014358043670654 
 Hora: 16:56:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058341026306152 
 Hora: 16:56:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073020458221436 
 Hora: 16:56:56

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021225929260254 
 Hora: 16:56:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065310001373291 
 Hora: 16:56:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0053210258483887 
 Hora: 16:56:59

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020618915557861 
 Hora: 16:56:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006871223449707 
 Hora: 16:56:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079901218414307 
 Hora: 16:57:02

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022337913513184 
 Hora: 16:57:02

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016191005706787 
 Hora: 16:57:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.005972146987915 
 Hora: 16:57:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007145881652832 
 Hora: 16:57:22

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018241882324219 
 Hora: 16:57:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075571537017822 
 Hora: 16:57:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091469287872314 
 Hora: 16:57:24

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022547006607056 
 Hora: 16:57:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078918933868408 
 Hora: 16:57:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010836124420166 
 Hora: 16:57:27

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.013855934143066 
 Hora: 16:57:27

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016229152679443 
 Hora: 16:57:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087039470672607 
 Hora: 16:57:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093529224395752 
 Hora: 16:57:28

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.044871091842651 
 Hora: 16:57:28

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026175022125244 
 Hora: 16:57:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087571144104004 
 Hora: 16:57:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073189735412598 
 Hora: 16:58:31

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022657155990601 
 Hora: 16:58:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077250003814697 
 Hora: 16:58:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0042269229888916 
 Hora: 16:58:33

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021536827087402 
 Hora: 16:58:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057971477508545 
 Hora: 16:58:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096070766448975 
 Hora: 16:58:35

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018935203552246 
 Hora: 16:58:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072689056396484 
 Hora: 16:58:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091381072998047 
 Hora: 16:58:38

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.029430866241455 
 Hora: 16:58:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062799453735352 
 Hora: 16:58:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098989009857178 
 Hora: 16:58:40

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019917964935303 
 Hora: 16:58:40

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016643047332764 
 Hora: 16:58:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081450939178467 
 Hora: 16:58:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010869979858398 
 Hora: 16:58:42

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.034149885177612 
 Hora: 16:58:42

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020559072494507 
 Hora: 16:58:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080540180206299 
 Hora: 16:58:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010698080062866 
 Hora: 16:59:15

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021191835403442 
 Hora: 16:59:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010145902633667 
 Hora: 16:59:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010267019271851 
 Hora: 16:59:17

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021500110626221 
 Hora: 16:59:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088400840759277 
 Hora: 16:59:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091841220855713 
 Hora: 16:59:24

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018736124038696 
 Hora: 16:59:24

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017506122589111 
 Hora: 16:59:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0050709247589111 
 Hora: 16:59:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095369815826416 
 Hora: 16:59:25

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.040045022964478 
 Hora: 16:59:25

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022578954696655 
 Hora: 16:59:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070080757141113 
 Hora: 16:59:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098950862884521 
 Hora: 17:00:11

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020123958587646 
 Hora: 17:00:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098569393157959 
 Hora: 17:00:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006943941116333 
 Hora: 17:00:13

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.015784025192261 
 Hora: 17:00:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074710845947266 
 Hora: 17:00:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059921741485596 
 Hora: 17:00:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.011034965515137 
 Hora: 17:00:36

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.02028489112854 
 Hora: 17:00:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059370994567871 
 Hora: 17:00:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098488330841064 
 Hora: 17:00:37

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.035617113113403 
 Hora: 17:00:37

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024040937423706 
 Hora: 17:00:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087480545043945 
 Hora: 17:00:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010679960250854 
 Hora: 17:00:57

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017367124557495 
 Hora: 17:00:57

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018115997314453 
 Hora: 17:00:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086159706115723 
 Hora: 17:00:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058059692382812 
 Hora: 17:00:59

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017244100570679 
 Hora: 17:00:59

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021014928817749 
 Hora: 17:00:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070528984069824 
 Hora: 17:00:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069670677185059 
 Hora: 17:01:01

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020393133163452 
 Hora: 17:01:01

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018004179000854 
 Hora: 17:01:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010076999664307 
 Hora: 17:01:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081579685211182 
 Hora: 17:01:01

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.038653135299683 
 Hora: 17:01:01

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026463985443115 
 Hora: 17:01:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084240436553955 
 Hora: 17:01:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011754989624023 
 Hora: 17:01:02

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.039597034454346 
 Hora: 17:01:02

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026217937469482 
 Hora: 17:01:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060219764709473 
 Hora: 17:01:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01088285446167 
 Hora: 17:01:39

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.043075084686279 
 Hora: 17:01:39

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027853012084961 
 Hora: 17:01:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069730281829834 
 Hora: 17:01:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069279670715332 
 Hora: 17:03:32

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.01638388633728 
 Hora: 17:03:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090310573577881 
 Hora: 17:03:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010565996170044 
 Hora: 17:03:35

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.017097949981689 
 Hora: 17:03:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091941356658936 
 Hora: 17:03:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006598949432373 
 Hora: 17:03:47

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018999099731445 
 Hora: 17:03:47

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017522096633911 
 Hora: 17:03:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090298652648926 
 Hora: 17:03:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096127986907959 
 Hora: 17:03:48

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.036673069000244 
 Hora: 17:03:48

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021015167236328 
 Hora: 17:03:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061819553375244 
 Hora: 17:03:48

