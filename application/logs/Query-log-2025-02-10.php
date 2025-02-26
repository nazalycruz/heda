<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00032496452331543 
 Hora: 09:05:54

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.004115104675293 
 Hora: 09:05:54

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.0008080005645752 
 Hora: 09:05:54

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.0011680126190186 
 Hora: 09:05:54

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='01/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.00082206726074219 
 Hora: 09:05:54

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1908'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.064923048019409 
 Hora: 09:05:54

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.00080990791320801 
 Hora: 09:05:54

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.00063705444335938 
 Hora: 09:05:54

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.00065302848815918 
 Hora: 09:05:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00038003921508789 
 Hora: 09:05:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00036191940307617 
 Hora: 09:05:55

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.0056560039520264 
 Hora: 09:05:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00035309791564941 
 Hora: 09:05:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00043511390686035 
 Hora: 09:14:04

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.0010550022125244 
 Hora: 09:14:04

SELECT *
FROM "ParametrosdeSistema"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.01247501373291 
 Hora: 09:14:04

SELECT *
FROM "ParametrosMovsRH"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.011116981506348 
 Hora: 09:14:04

SELECT *
FROM "ParamSystemTipoNomimas"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.012317895889282 
 Hora: 09:14:04

SELECT *
FROM "Param_ValoresENomina"
WHERE "Presupuestoid" = '0002' 
 Ejecutado en: 0.0066318511962891 
 Hora: 09:14:04

SELECT *
FROM "ParametrosGenerales" 
 Ejecutado en: 0.00092077255249023 
 Hora: 09:14:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00036001205444336 
 Hora: 09:14:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00072813034057617 
 Hora: 09:14:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00057196617126465 
 Hora: 09:14:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00059700012207031 
 Hora: 09:14:08

exec p_admarh_get_Escuelas @EscuelaId=0 
 Ejecutado en: 0.0073390007019043 
 Hora: 09:14:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00041604042053223 
 Hora: 09:14:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0005500316619873 
 Hora: 09:14:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00049686431884766 
 Hora: 09:14:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00056910514831543 
 Hora: 09:14:15

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.038678884506226 
 Hora: 09:14:15

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.0053169727325439 
 Hora: 09:14:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00042605400085449 
 Hora: 09:14:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00032305717468262 
 Hora: 09:25:05

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.0036909580230713 
 Hora: 09:25:05

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.00069785118103027 
 Hora: 09:25:05

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.0010440349578857 
 Hora: 09:25:05

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='01/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.0008080005645752 
 Hora: 09:25:05

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1908'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.061599969863892 
 Hora: 09:25:05

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.00062799453735352 
 Hora: 09:25:05

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.00055909156799316 
 Hora: 09:25:05

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.00062203407287598 
 Hora: 09:25:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00027585029602051 
 Hora: 09:25:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00034093856811523 
 Hora: 09:25:06

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.0066640377044678 
 Hora: 09:25:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00038599967956543 
 Hora: 09:25:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0006108283996582 
 Hora: 09:28:23

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.0043699741363525 
 Hora: 09:28:23

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.00065016746520996 
 Hora: 09:28:23

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.0012500286102295 
 Hora: 09:28:23

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='01/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.001107931137085 
 Hora: 09:28:23

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1908'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.063982963562012 
 Hora: 09:28:23

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.00063395500183105 
 Hora: 09:28:23

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.00050210952758789 
 Hora: 09:28:23

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.00063085556030273 
 Hora: 09:28:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00042581558227539 
 Hora: 09:28:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00060915946960449 
 Hora: 09:28:23

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.0058729648590088 
 Hora: 09:28:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00039100646972656 
 Hora: 09:28:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00034403800964355 
 Hora: 09:35:08

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.0033729076385498 
 Hora: 09:35:08

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.015479803085327 
 Hora: 09:35:08

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.0011708736419678 
 Hora: 09:35:08

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='01/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.00082516670227051 
 Hora: 09:35:08

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1908'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.072068929672241 
 Hora: 09:35:08

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.00073099136352539 
 Hora: 09:35:08

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.00066018104553223 
 Hora: 09:35:08

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.00091791152954102 
 Hora: 09:35:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00031590461730957 
 Hora: 09:35:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00029706954956055 
 Hora: 09:35:09

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.0056180953979492 
 Hora: 09:35:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00036406517028809 
 Hora: 09:35:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00066804885864258 
 Hora: 09:35:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00047397613525391 
 Hora: 09:35:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00031685829162598 
 Hora: 09:41:42

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.003532886505127 
 Hora: 09:41:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0003211498260498 
 Hora: 09:41:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00042486190795898 
 Hora: 09:41:42

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.0058300495147705 
 Hora: 09:41:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00039100646972656 
 Hora: 09:41:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0006260871887207 
 Hora: 09:41:52

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.0034439563751221 
 Hora: 09:41:52

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.00088286399841309 
 Hora: 09:41:52

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.0010499954223633 
 Hora: 09:41:52

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='01/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.000885009765625 
 Hora: 09:41:52

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1908'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.064702033996582 
 Hora: 09:41:52

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.00061297416687012 
 Hora: 09:41:52

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.0004880428314209 
 Hora: 09:41:52

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.00057005882263184 
 Hora: 09:41:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00037789344787598 
 Hora: 09:41:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00061988830566406 
 Hora: 09:41:52

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.0077450275421143 
 Hora: 09:41:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00037288665771484 
 Hora: 09:41:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0003199577331543 
 Hora: 09:50:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00028610229492188 
 Hora: 09:50:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00065708160400391 
 Hora: 09:50:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00035500526428223 
 Hora: 09:50:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00063300132751465 
 Hora: 09:50:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00037908554077148 
 Hora: 09:50:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00064206123352051 
 Hora: 09:50:36

SELECT *
FROM "vw_DatosGeneralesEmpl"
WHERE "Presupuestoid" = '0002'
AND  "Nombre" LIKE '%giovanna%' ESCAPE '!'
AND  "Apellido1" LIKE '%%' ESCAPE '!'
AND  "Apellido2" LIKE '%%' ESCAPE '!' 
 Ejecutado en: 0.53866100311279 
 Hora: 09:50:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00037598609924316 
 Hora: 09:50:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00072813034057617 
 Hora: 09:50:56

SELECT *
FROM "vw_DatosGeneralesEmpl"
WHERE "Presupuestoid" = '0002'
AND  "Nombre" LIKE '%nazely%' ESCAPE '!'
AND  "Apellido1" LIKE '%%' ESCAPE '!'
AND  "Apellido2" LIKE '%%' ESCAPE '!' 
 Ejecutado en: 0.067731857299805 
 Hora: 09:50:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00043296813964844 
 Hora: 09:50:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00033903121948242 
 Hora: 10:01:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00028300285339355 
 Hora: 10:01:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0003669261932373 
 Hora: 10:01:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00041794776916504 
 Hora: 10:01:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00068497657775879 
 Hora: 10:01:57

execute pa_datosgeneralesempl @credencial='00647' 
 Ejecutado en: 0.07693886756897 
 Hora: 10:01:57

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.0050220489501953 
 Hora: 10:01:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00051593780517578 
 Hora: 10:01:57

[BDSECGRAL] 
SELECT *
FROM "Personal"
WHERE "NumNomina" = '00647' 
 Ejecutado en: 0.093481779098511 
 Hora: 10:01:57

[BDSECGRAL] 
execute p_admasg_getEstatusEmpleado @credencial = '00647', @fecha = '10/02/2025' 
 Ejecutado en: 0.21045398712158 
 Hora: 10:01:57

[BDSECGRAL] 
SELECT "M".*, "p"."Status" as "EstadoSISEGE"
FROM "Movimientos" "M"
JOIN "cat_OrigenesMovs" "co" ON "M"."Origen" = "co"."Clave"
JOIN "Personal" "p" ON "M"."IdPersonal" = "p"."IdPersonal"
WHERE "M"."Cancelado" = 0
AND "M"."Concluido" = 0
AND "M"."sinEfecto" = 0
AND "co"."BajaRH" = 1
AND "p"."NumNomina" = '00647' 
 Ejecutado en: 0.01497483253479 
 Hora: 10:01:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00063705444335938 
 Hora: 10:01:58

exec sp_detallenomina @Credencial='00647',@PeriodoPagoID=1908 
 Ejecutado en: 0.29936480522156 
 Hora: 10:01:58

exec pa_TipoNominaXEmpleadoXPeriodo @Id_empleado=644,@PeriodoId=1908 
 Ejecutado en: 0.021131992340088 
 Hora: 10:01:58

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1908' 
 Ejecutado en: 0.055742025375366 
 Hora: 10:01:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00040817260742188 
 Hora: 10:01:58

[BDSECGRAL] 
SELECT "M".*, "p"."Status" as "EstadoSISEGE"
FROM "Movimientos" "M"
JOIN "cat_OrigenesMovs" "co" ON "M"."Origen" = "co"."Clave"
JOIN "Personal" "p" ON "M"."IdPersonal" = "p"."IdPersonal"
WHERE "M"."Cancelado" = 0
AND "M"."Concluido" = 0
AND "M"."sinEfecto" = 0
AND "co"."BajaRH" = 1
AND "p"."NumNomina" = '00647' 
 Ejecutado en: 0.0023839473724365 
 Hora: 10:01:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00035881996154785 
 Hora: 13:25:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00030708312988281 
 Hora: 13:25:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00036406517028809 
 Hora: 13:25:58

execute pa_datosgeneralesempl @credencial='00647' 
 Ejecutado en: 0.012456893920898 
 Hora: 13:25:58

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.0013918876647949 
 Hora: 13:25:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00040602684020996 
 Hora: 13:25:58

[BDSECGRAL] 
SELECT *
FROM "Personal"
WHERE "NumNomina" = '00647' 
 Ejecutado en: 0.00091385841369629 
 Hora: 13:25:58

[BDSECGRAL] 
execute p_admasg_getEstatusEmpleado @credencial = '00647', @fecha = '10/02/2025' 
 Ejecutado en: 0.0026249885559082 
 Hora: 13:25:58

[BDSECGRAL] 
SELECT "M".*, "p"."Status" as "EstadoSISEGE"
FROM "Movimientos" "M"
JOIN "cat_OrigenesMovs" "co" ON "M"."Origen" = "co"."Clave"
JOIN "Personal" "p" ON "M"."IdPersonal" = "p"."IdPersonal"
WHERE "M"."Cancelado" = 0
AND "M"."Concluido" = 0
AND "M"."sinEfecto" = 0
AND "co"."BajaRH" = 1
AND "p"."NumNomina" = '00647' 
 Ejecutado en: 0.001737117767334 
 Hora: 13:25:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0005500316619873 
 Hora: 13:25:59

exec sp_detallenomina @Credencial='00647',@PeriodoPagoID=1908 
 Ejecutado en: 0.0036439895629883 
 Hora: 13:25:59

exec pa_TipoNominaXEmpleadoXPeriodo @Id_empleado=644,@PeriodoId=1908 
 Ejecutado en: 0.00047492980957031 
 Hora: 13:25:59

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1908' 
 Ejecutado en: 0.00056886672973633 
 Hora: 13:25:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00037503242492676 
 Hora: 13:25:59

[BDSECGRAL] 
SELECT "M".*, "p"."Status" as "EstadoSISEGE"
FROM "Movimientos" "M"
JOIN "cat_OrigenesMovs" "co" ON "M"."Origen" = "co"."Clave"
JOIN "Personal" "p" ON "M"."IdPersonal" = "p"."IdPersonal"
WHERE "M"."Cancelado" = 0
AND "M"."Concluido" = 0
AND "M"."sinEfecto" = 0
AND "co"."BajaRH" = 1
AND "p"."NumNomina" = '00647' 
 Ejecutado en: 0.0022671222686768 
 Hora: 13:25:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00059390068054199 
 Hora: 13:26:01

exec sp_detallenomina @Credencial='00647',@PeriodoPagoID=1907 
 Ejecutado en: 0.41478800773621 
 Hora: 13:26:01

exec pa_TipoNominaXEmpleadoXPeriodo @Id_empleado=644,@PeriodoId=1907 
 Ejecutado en: 0.017457962036133 
 Hora: 13:26:01

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1907' 
 Ejecutado en: 0.19115209579468 
 Hora: 13:26:01

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1907' 
 Ejecutado en: 0.0028548240661621 
 Hora: 13:26:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0004279613494873 
 Hora: 13:26:01

[BDSECGRAL] 
SELECT "M".*, "p"."Status" as "EstadoSISEGE"
FROM "Movimientos" "M"
JOIN "cat_OrigenesMovs" "co" ON "M"."Origen" = "co"."Clave"
JOIN "Personal" "p" ON "M"."IdPersonal" = "p"."IdPersonal"
WHERE "M"."Cancelado" = 0
AND "M"."Concluido" = 0
AND "M"."sinEfecto" = 0
AND "co"."BajaRH" = 1
AND "p"."NumNomina" = '00647' 
 Ejecutado en: 0.0022220611572266 
 Hora: 13:26:01

