<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061740875244141 
 Hora: 15:33:35

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020843982696533 
 Hora: 15:33:35

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.016846179962158 
 Hora: 15:33:35

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.018852949142456 
 Hora: 15:33:35

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='01/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.018918991088867 
 Hora: 15:33:35

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1908'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.075031042098999 
 Hora: 15:33:35

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.017389059066772 
 Hora: 15:33:35

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.015845060348511 
 Hora: 15:33:35

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.017667055130005 
 Hora: 15:33:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099220275878906 
 Hora: 15:33:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091691017150879 
 Hora: 15:33:37

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.018174886703491 
 Hora: 15:33:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089230537414551 
 Hora: 15:33:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068531036376953 
 Hora: 15:33:51

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020127058029175 
 Hora: 15:33:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0055160522460938 
 Hora: 15:33:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085470676422119 
 Hora: 15:33:52

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020895957946777 
 Hora: 15:33:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096712112426758 
 Hora: 15:33:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090529918670654 
 Hora: 15:33:59

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018186092376709 
 Hora: 15:33:59

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.024364948272705 
 Hora: 15:33:59

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.023452997207642 
 Hora: 15:33:59

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='01/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.018496036529541 
 Hora: 15:33:59

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1908'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.086292028427124 
 Hora: 15:33:59

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.01826286315918 
 Hora: 15:33:59

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.015236854553223 
 Hora: 15:33:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077769756317139 
 Hora: 15:33:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012442111968994 
 Hora: 15:34:00

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.016807079315186 
 Hora: 15:34:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010108947753906 
 Hora: 15:34:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099658966064453 
 Hora: 15:34:03

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.025000810623169 
 Hora: 15:34:03

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.014228820800781 
 Hora: 15:34:03

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.017138957977295 
 Hora: 15:34:03

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='01/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.019837856292725 
 Hora: 15:34:03

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1908'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.079272985458374 
 Hora: 15:34:03

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.018844842910767 
 Hora: 15:34:03

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.021841049194336 
 Hora: 15:34:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016870975494385 
 Hora: 15:34:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079250335693359 
 Hora: 15:34:04

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.03052806854248 
 Hora: 15:34:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072040557861328 
 Hora: 15:34:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058469772338867 
 Hora: 15:34:07

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019898891448975 
 Hora: 15:34:07

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.019520998001099 
 Hora: 15:34:07

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.0094661712646484 
 Hora: 15:34:07

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='01/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.018425941467285 
 Hora: 15:34:07

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1908'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.07619309425354 
 Hora: 15:34:07

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.013442993164062 
 Hora: 15:34:07

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.021707057952881 
 Hora: 15:34:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01052713394165 
 Hora: 15:34:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0051438808441162 
 Hora: 15:34:08

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.031930923461914 
 Hora: 15:34:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078530311584473 
 Hora: 15:34:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071070194244385 
 Hora: 15:34:10

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02472186088562 
 Hora: 15:34:10

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.017530918121338 
 Hora: 15:34:10

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.019284009933472 
 Hora: 15:34:10

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='01/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.019145965576172 
 Hora: 15:34:10

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1908'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.072077989578247 
 Hora: 15:34:10

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.018397092819214 
 Hora: 15:34:10

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.022758960723877 
 Hora: 15:34:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065579414367676 
 Hora: 15:34:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010432004928589 
 Hora: 15:34:11

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.029899120330811 
 Hora: 15:34:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071549415588379 
 Hora: 15:34:11

