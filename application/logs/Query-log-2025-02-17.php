<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092761516571045 
 Hora: 08:26:18

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022335052490234 
 Hora: 08:26:18

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.018823862075806 
 Hora: 08:26:18

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.019868850708008 
 Hora: 08:26:18

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='01/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.019951105117798 
 Hora: 08:26:18

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1908'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.091881990432739 
 Hora: 08:26:18

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.014800071716309 
 Hora: 08:26:18

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.020082950592041 
 Hora: 08:26:18

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.021100997924805 
 Hora: 08:26:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069141387939453 
 Hora: 08:26:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011888027191162 
 Hora: 08:26:19

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.024272918701172 
 Hora: 08:26:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0103440284729 
 Hora: 08:26:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011851072311401 
 Hora: 08:26:28

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.012167930603027 
 Hora: 08:26:28

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.024127960205078 
 Hora: 08:26:28

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.031514167785645 
 Hora: 08:26:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087828636169434 
 Hora: 08:26:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089249610900879 
 Hora: 08:26:30

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015753984451294 
 Hora: 08:26:30

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014299154281616 
 Hora: 08:26:30

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02483081817627 
 Hora: 08:26:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062339305877686 
 Hora: 08:26:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087721347808838 
 Hora: 08:28:13

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015733957290649 
 Hora: 08:28:13

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015566110610962 
 Hora: 08:28:13

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024545907974243 
 Hora: 08:28:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085508823394775 
 Hora: 08:28:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086569786071777 
 Hora: 08:32:21

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014487981796265 
 Hora: 08:32:21

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018176078796387 
 Hora: 08:32:21

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.01715612411499 
 Hora: 08:32:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010462999343872 
 Hora: 08:32:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085821151733398 
 Hora: 08:32:30

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.020112037658691 
 Hora: 08:32:30

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.019330978393555 
 Hora: 08:32:30

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015856027603149 
 Hora: 08:32:30

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017567873001099 
 Hora: 08:32:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010411977767944 
 Hora: 08:32:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068869590759277 
 Hora: 08:32:32

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 1.7072629928589 
 Hora: 08:32:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010215997695923 
 Hora: 08:32:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065169334411621 
 Hora: 08:32:38

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020877122879028 
 Hora: 08:32:38

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.018150091171265 
 Hora: 08:32:38

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.020010948181152 
 Hora: 08:32:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080819129943848 
 Hora: 08:32:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081679821014404 
 Hora: 08:38:26

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018748044967651 
 Hora: 08:38:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091500282287598 
 Hora: 08:38:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017566919326782 
 Hora: 08:38:28

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.024320840835571 
 Hora: 08:38:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060839653015137 
 Hora: 08:38:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081779956817627 
 Hora: 08:38:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019557952880859 
 Hora: 08:38:36

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014012813568115 
 Hora: 08:38:36

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021812915802002 
 Hora: 08:38:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086400508880615 
 Hora: 08:38:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066320896148682 
 Hora: 08:56:17

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.013123035430908 
 Hora: 08:56:17

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.017929077148438 
 Hora: 08:56:17

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014569044113159 
 Hora: 08:56:17

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018316030502319 
 Hora: 08:56:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083808898925781 
 Hora: 08:56:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010662078857422 
 Hora: 08:56:17

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.033589839935303 
 Hora: 08:56:17

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.023396015167236 
 Hora: 08:56:17

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023892879486084 
 Hora: 08:56:17

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.012274026870728 
 Hora: 08:56:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098841190338135 
 Hora: 08:56:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096721649169922 
 Hora: 08:56:19

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 1.3520658016205 
 Hora: 08:56:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008275032043457 
 Hora: 08:56:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010323047637939 
 Hora: 08:56:21

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 1.4317009449005 
 Hora: 08:56:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010533809661865 
 Hora: 08:56:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0054738521575928 
 Hora: 08:56:27

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.029281854629517 
 Hora: 08:56:27

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.020324945449829 
 Hora: 08:56:27

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.021759986877441 
 Hora: 08:56:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093569755554199 
 Hora: 08:56:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010941982269287 
 Hora: 09:01:14

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.029911994934082 
 Hora: 09:01:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010033845901489 
 Hora: 09:01:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012161016464233 
 Hora: 09:01:16

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.027133941650391 
 Hora: 09:01:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062868595123291 
 Hora: 09:01:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014747142791748 
 Hora: 09:03:11

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.026624917984009 
 Hora: 09:03:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01454496383667 
 Hora: 09:03:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011538028717041 
 Hora: 09:03:13

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.032716989517212 
 Hora: 09:03:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096690654754639 
 Hora: 09:03:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082218647003174 
 Hora: 09:03:21

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019181966781616 
 Hora: 09:03:21

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019490003585815 
 Hora: 09:03:21

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.031116008758545 
 Hora: 09:03:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094058513641357 
 Hora: 09:03:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010599136352539 
 Hora: 09:03:26

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.012824058532715 
 Hora: 09:03:26

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017264842987061 
 Hora: 09:03:26

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.035799980163574 
 Hora: 09:03:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072808265686035 
 Hora: 09:03:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0055949687957764 
 Hora: 09:03:27

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022011041641235 
 Hora: 09:03:27

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018032073974609 
 Hora: 09:03:27

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.041604995727539 
 Hora: 09:03:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086379051208496 
 Hora: 09:03:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017010927200317 
 Hora: 09:03:28

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017796993255615 
 Hora: 09:03:28

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025386810302734 
 Hora: 09:03:28

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024693012237549 
 Hora: 09:03:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079789161682129 
 Hora: 09:03:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086710453033447 
 Hora: 09:12:29

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021430969238281 
 Hora: 09:12:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087611675262451 
 Hora: 09:12:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099449157714844 
 Hora: 09:12:30

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022260189056396 
 Hora: 09:12:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011029005050659 
 Hora: 09:12:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078039169311523 
 Hora: 09:12:38

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021227836608887 
 Hora: 09:12:38

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016747236251831 
 Hora: 09:12:38

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.030800104141235 
 Hora: 09:12:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019680023193359 
 Hora: 09:12:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079009532928467 
 Hora: 09:12:46

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017508983612061 
 Hora: 09:12:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093510150909424 
 Hora: 09:12:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075011253356934 
 Hora: 09:12:47

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020653963088989 
 Hora: 09:12:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093181133270264 
 Hora: 09:12:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095429420471191 
 Hora: 09:12:52

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020174026489258 
 Hora: 09:12:52

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018383979797363 
 Hora: 09:12:52

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.028088092803955 
 Hora: 09:12:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010737180709839 
 Hora: 09:12:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096499919891357 
 Hora: 09:14:33

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.015943050384521 
 Hora: 09:14:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075869560241699 
 Hora: 09:14:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0035550594329834 
 Hora: 09:14:33

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.024193048477173 
 Hora: 09:14:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011045932769775 
 Hora: 09:14:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059630870819092 
 Hora: 09:14:43

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.01925802230835 
 Hora: 09:14:43

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018941879272461 
 Hora: 09:14:43

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.030320882797241 
 Hora: 09:14:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088438987731934 
 Hora: 09:14:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010329008102417 
 Hora: 09:17:47

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017328977584839 
 Hora: 09:17:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064530372619629 
 Hora: 09:17:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071520805358887 
 Hora: 09:17:47

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025156021118164 
 Hora: 09:17:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0044519901275635 
 Hora: 09:17:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010034084320068 
 Hora: 09:17:50

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016232013702393 
 Hora: 09:17:50

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.01258397102356 
 Hora: 09:17:50

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026865005493164 
 Hora: 09:17:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090517997741699 
 Hora: 09:17:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096020698547363 
 Hora: 09:20:32

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021196842193604 
 Hora: 09:20:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075640678405762 
 Hora: 09:20:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014195919036865 
 Hora: 09:20:33

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.015980005264282 
 Hora: 09:20:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.005450963973999 
 Hora: 09:20:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067441463470459 
 Hora: 09:20:41

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014197111129761 
 Hora: 09:20:41

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021574020385742 
 Hora: 09:20:41

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.030050039291382 
 Hora: 09:20:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069179534912109 
 Hora: 09:20:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091230869293213 
 Hora: 10:10:44

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020224094390869 
 Hora: 10:10:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094242095947266 
 Hora: 10:10:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011687994003296 
 Hora: 10:10:45

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028757095336914 
 Hora: 10:10:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089950561523438 
 Hora: 10:10:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0056469440460205 
 Hora: 10:10:49

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.013747930526733 
 Hora: 10:10:49

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021492004394531 
 Hora: 10:10:49

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026038885116577 
 Hora: 10:10:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074779987335205 
 Hora: 10:10:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083169937133789 
 Hora: 10:11:39

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.027132987976074 
 Hora: 10:11:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094418525695801 
 Hora: 10:11:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088019371032715 
 Hora: 10:11:40

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020490884780884 
 Hora: 10:11:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010262966156006 
 Hora: 10:11:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065429210662842 
 Hora: 10:12:14

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018316030502319 
 Hora: 10:12:14

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017820835113525 
 Hora: 10:12:14

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.036555051803589 
 Hora: 10:12:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078639984130859 
 Hora: 10:12:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089929103851318 
 Hora: 10:12:56

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.033997058868408 
 Hora: 10:12:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087211132049561 
 Hora: 10:12:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0103759765625 
 Hora: 10:12:56

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028573036193848 
 Hora: 10:12:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096759796142578 
 Hora: 10:12:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076470375061035 
 Hora: 10:12:59

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015959024429321 
 Hora: 10:12:59

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019460916519165 
 Hora: 10:12:59

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.016431093215942 
 Hora: 10:12:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079140663146973 
 Hora: 10:12:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070071220397949 
 Hora: 10:13:01

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.031363010406494 
 Hora: 10:13:01

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.024810075759888 
 Hora: 10:13:01

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.047070026397705 
 Hora: 10:13:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015564918518066 
 Hora: 10:13:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0020921230316162 
 Hora: 10:14:33

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018080949783325 
 Hora: 10:14:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010082960128784 
 Hora: 10:14:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011860132217407 
 Hora: 10:14:34

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020860910415649 
 Hora: 10:14:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011682033538818 
 Hora: 10:14:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085220336914062 
 Hora: 10:14:37

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018617868423462 
 Hora: 10:14:37

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016083002090454 
 Hora: 10:14:37

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.029325008392334 
 Hora: 10:14:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091798305511475 
 Hora: 10:14:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010900974273682 
 Hora: 10:14:38

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.013734102249146 
 Hora: 10:14:38

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.01700496673584 
 Hora: 10:14:38

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025622844696045 
 Hora: 10:14:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091028213500977 
 Hora: 10:14:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011289834976196 
 Hora: 10:15:04

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019966840744019 
 Hora: 10:15:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0055041313171387 
 Hora: 10:15:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074210166931152 
 Hora: 10:15:05

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020072937011719 
 Hora: 10:15:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076649188995361 
 Hora: 10:15:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089619159698486 
 Hora: 10:15:08

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.029333114624023 
 Hora: 10:15:08

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.039280891418457 
 Hora: 10:15:08

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022274017333984 
 Hora: 10:15:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010525941848755 
 Hora: 10:15:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087640285491943 
 Hora: 10:15:09

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019443035125732 
 Hora: 10:15:09

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017807960510254 
 Hora: 10:15:09

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.032995939254761 
 Hora: 10:15:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012090921401978 
 Hora: 10:15:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0054099559783936 
 Hora: 10:15:22

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021516084671021 
 Hora: 10:15:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066409111022949 
 Hora: 10:15:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080709457397461 
 Hora: 10:15:23

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025241851806641 
 Hora: 10:15:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087640285491943 
 Hora: 10:15:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010322093963623 
 Hora: 10:15:26

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018033981323242 
 Hora: 10:15:26

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020862102508545 
 Hora: 10:15:26

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023515939712524 
 Hora: 10:15:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094978809356689 
 Hora: 10:15:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019749879837036 
 Hora: 10:19:53

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019829034805298 
 Hora: 10:19:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073671340942383 
 Hora: 10:19:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072159767150879 
 Hora: 10:19:53

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023193836212158 
 Hora: 10:19:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079190731048584 
 Hora: 10:19:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0049269199371338 
 Hora: 10:19:57

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014259815216064 
 Hora: 10:19:57

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015979051589966 
 Hora: 10:19:57

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022323131561279 
 Hora: 10:19:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076010227203369 
 Hora: 10:19:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0048689842224121 
 Hora: 10:55:57

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02185583114624 
 Hora: 10:55:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074028968811035 
 Hora: 10:55:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059950351715088 
 Hora: 10:55:57

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.02462100982666 
 Hora: 10:55:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081679821014404 
 Hora: 10:55:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097849369049072 
 Hora: 10:57:23

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022903919219971 
 Hora: 10:57:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008558988571167 
 Hora: 10:57:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091760158538818 
 Hora: 10:57:23

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.03548789024353 
 Hora: 10:57:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014616966247559 
 Hora: 10:57:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080769062042236 
 Hora: 10:58:21

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022156000137329 
 Hora: 10:58:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060188770294189 
 Hora: 10:58:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081429481506348 
 Hora: 10:58:21

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.035426139831543 
 Hora: 10:58:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063860416412354 
 Hora: 10:58:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061688423156738 
 Hora: 11:00:41

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022819995880127 
 Hora: 11:00:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.004612922668457 
 Hora: 11:00:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093629360198975 
 Hora: 11:00:41

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.019891023635864 
 Hora: 11:00:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094761848449707 
 Hora: 11:00:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094931125640869 
 Hora: 11:01:10

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02105188369751 
 Hora: 11:01:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011606931686401 
 Hora: 11:01:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095260143280029 
 Hora: 11:01:11

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021965026855469 
 Hora: 11:01:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0055181980133057 
 Hora: 11:01:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0036630630493164 
 Hora: 11:01:47

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.016607999801636 
 Hora: 11:01:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080521106719971 
 Hora: 11:01:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011309862136841 
 Hora: 11:01:48

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025324106216431 
 Hora: 11:01:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011397123336792 
 Hora: 11:01:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011772871017456 
 Hora: 11:02:25

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022624015808105 
 Hora: 11:02:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097777843475342 
 Hora: 11:02:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084390640258789 
 Hora: 11:02:27

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.029937028884888 
 Hora: 11:02:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012699127197266 
 Hora: 11:02:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098471641540527 
 Hora: 11:02:32

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.026056051254272 
 Hora: 11:02:32

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017410039901733 
 Hora: 11:02:32

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.033944129943848 
 Hora: 11:02:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0046730041503906 
 Hora: 11:02:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009099006652832 
 Hora: 11:03:56

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019376039505005 
 Hora: 11:03:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010167837142944 
 Hora: 11:03:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088300704956055 
 Hora: 11:03:57

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.02390718460083 
 Hora: 11:03:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012467861175537 
 Hora: 11:03:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010545015335083 
 Hora: 11:04:00

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016936063766479 
 Hora: 11:04:00

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014359951019287 
 Hora: 11:04:00

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.037479162216187 
 Hora: 11:04:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028694868087769 
 Hora: 11:04:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095629692077637 
 Hora: 11:24:13

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.031331062316895 
 Hora: 11:24:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011358022689819 
 Hora: 11:24:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022660970687866 
 Hora: 11:24:15

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.034404993057251 
 Hora: 11:24:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016712188720703 
 Hora: 11:24:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095670223236084 
 Hora: 11:24:20

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.031536102294922 
 Hora: 11:24:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099971294403076 
 Hora: 11:24:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021606922149658 
 Hora: 11:24:22

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.040774822235107 
 Hora: 11:24:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013251066207886 
 Hora: 11:24:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010021924972534 
 Hora: 11:25:26

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017859935760498 
 Hora: 11:25:26

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019612073898315 
 Hora: 11:25:26

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.13333702087402 
 Hora: 11:25:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086679458618164 
 Hora: 11:25:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.050816059112549 
 Hora: 11:25:31

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.09604811668396 
 Hora: 11:25:31

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.1094810962677 
 Hora: 11:25:31

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.32048392295837 
 Hora: 11:25:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.076536893844604 
 Hora: 11:25:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089278221130371 
 Hora: 11:26:43

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019299030303955 
 Hora: 11:26:43

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019048929214478 
 Hora: 11:26:43

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.028386116027832 
 Hora: 11:26:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010733842849731 
 Hora: 11:26:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079660415649414 
 Hora: 11:29:03

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022069215774536 
 Hora: 11:29:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010257005691528 
 Hora: 11:29:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009127140045166 
 Hora: 11:29:03

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.024090051651001 
 Hora: 11:29:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010279178619385 
 Hora: 11:29:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087211132049561 
 Hora: 11:29:07

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023375988006592 
 Hora: 11:29:07

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021085977554321 
 Hora: 11:29:07

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025145053863525 
 Hora: 11:29:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0055570602416992 
 Hora: 11:29:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095679759979248 
 Hora: 11:34:59

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.027239084243774 
 Hora: 11:34:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085580348968506 
 Hora: 11:34:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096340179443359 
 Hora: 11:34:59

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.019861936569214 
 Hora: 11:34:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010830879211426 
 Hora: 11:34:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063009262084961 
 Hora: 11:35:03

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018326997756958 
 Hora: 11:35:03

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016226053237915 
 Hora: 11:35:03

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021212816238403 
 Hora: 11:35:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090370178222656 
 Hora: 11:35:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070178508758545 
 Hora: 11:35:24

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017224073410034 
 Hora: 11:35:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093691349029541 
 Hora: 11:35:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01961088180542 
 Hora: 11:35:26

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.02919602394104 
 Hora: 11:35:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01439094543457 
 Hora: 11:35:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071730613708496 
 Hora: 11:35:30

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023849010467529 
 Hora: 11:35:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097489356994629 
 Hora: 11:35:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013383150100708 
 Hora: 11:35:31

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.035336971282959 
 Hora: 11:35:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012042045593262 
 Hora: 11:35:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086519718170166 
 Hora: 11:35:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024529218673706 
 Hora: 11:35:36

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014582872390747 
 Hora: 11:35:36

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.039572954177856 
 Hora: 11:35:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082669258117676 
 Hora: 11:35:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022080898284912 
 Hora: 11:35:40

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.026614904403687 
 Hora: 11:35:40

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025848865509033 
 Hora: 11:35:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027682781219482 
 Hora: 11:35:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012982130050659 
 Hora: 11:35:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097999572753906 
 Hora: 11:37:14

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015800952911377 
 Hora: 11:37:14

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019601106643677 
 Hora: 11:37:14

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.037851095199585 
 Hora: 11:37:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080368518829346 
 Hora: 11:37:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010998010635376 
 Hora: 11:37:34

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021490812301636 
 Hora: 11:37:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061159133911133 
 Hora: 11:37:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0036780834197998 
 Hora: 11:37:35

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022019863128662 
 Hora: 11:37:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010129928588867 
 Hora: 11:37:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083489418029785 
 Hora: 11:37:40

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.025187015533447 
 Hora: 11:37:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013103008270264 
 Hora: 11:37:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011255979537964 
 Hora: 11:37:41

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.035759925842285 
 Hora: 11:37:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020291090011597 
 Hora: 11:37:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086069107055664 
 Hora: 11:37:54

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015714168548584 
 Hora: 11:37:54

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.023984909057617 
 Hora: 11:37:54

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.036746978759766 
 Hora: 11:37:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0053160190582275 
 Hora: 11:37:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022425889968872 
 Hora: 11:37:58

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.03542685508728 
 Hora: 11:37:58

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.026298999786377 
 Hora: 11:37:58

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024823904037476 
 Hora: 11:37:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013190031051636 
 Hora: 11:37:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0039398670196533 
 Hora: 11:41:28

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.04753303527832 
 Hora: 11:41:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013442039489746 
 Hora: 11:41:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011593818664551 
 Hora: 11:41:30

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.027784109115601 
 Hora: 11:41:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062930583953857 
 Hora: 11:41:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011123895645142 
 Hora: 11:41:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020557880401611 
 Hora: 11:41:36

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017565011978149 
 Hora: 11:41:36

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023487091064453 
 Hora: 11:41:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075581073760986 
 Hora: 11:41:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018939018249512 
 Hora: 11:41:40

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.035439014434814 
 Hora: 11:41:40

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.032593965530396 
 Hora: 11:41:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020577907562256 
 Hora: 11:41:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012316942214966 
 Hora: 11:41:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062408447265625 
 Hora: 11:41:57

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019099950790405 
 Hora: 11:41:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01092004776001 
 Hora: 11:41:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.034219026565552 
 Hora: 11:41:58

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.030315160751343 
 Hora: 11:41:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012187957763672 
 Hora: 11:41:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099549293518066 
 Hora: 11:43:02

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022640943527222 
 Hora: 11:43:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011067867279053 
 Hora: 11:43:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013422966003418 
 Hora: 11:43:03

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028971910476685 
 Hora: 11:43:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013148069381714 
 Hora: 11:43:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097661018371582 
 Hora: 11:43:10

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020211935043335 
 Hora: 11:43:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076649188995361 
 Hora: 11:43:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010603904724121 
 Hora: 11:43:11

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.024976968765259 
 Hora: 11:43:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012698888778687 
 Hora: 11:43:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011373996734619 
 Hora: 11:43:15

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.01953387260437 
 Hora: 11:43:15

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.022021055221558 
 Hora: 11:43:15

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02882194519043 
 Hora: 11:43:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079858303070068 
 Hora: 11:43:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.031846046447754 
 Hora: 11:43:19

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.032410144805908 
 Hora: 11:43:19

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.038686990737915 
 Hora: 11:43:19

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027071952819824 
 Hora: 11:43:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.046326160430908 
 Hora: 11:43:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080809593200684 
 Hora: 11:43:58

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.016631126403809 
 Hora: 11:43:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01145601272583 
 Hora: 11:43:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010678052902222 
 Hora: 11:43:59

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023041963577271 
 Hora: 11:43:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013404130935669 
 Hora: 11:43:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069949626922607 
 Hora: 11:44:04

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.025252103805542 
 Hora: 11:44:04

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.027666091918945 
 Hora: 11:44:04

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.033303022384644 
 Hora: 11:44:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010118961334229 
 Hora: 11:44:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.038597106933594 
 Hora: 11:44:07

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.079355001449585 
 Hora: 11:44:07

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.056208848953247 
 Hora: 11:44:07

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.074632167816162 
 Hora: 11:44:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.05805778503418 
 Hora: 11:44:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.065294981002808 
 Hora: 11:44:13

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.15977787971497 
 Hora: 11:44:13

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.094825029373169 
 Hora: 11:44:13

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.21599817276001 
 Hora: 11:44:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.037044048309326 
 Hora: 11:44:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024452924728394 
 Hora: 11:44:27

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021931171417236 
 Hora: 11:44:27

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020545959472656 
 Hora: 11:44:27

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.12619590759277 
 Hora: 11:44:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.033521175384521 
 Hora: 11:44:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.072412014007568 
 Hora: 11:44:35

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.12689304351807 
 Hora: 11:44:35

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.088428020477295 
 Hora: 11:44:35

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.24951004981995 
 Hora: 11:44:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.082686901092529 
 Hora: 11:44:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024087905883789 
 Hora: 11:48:54

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017944097518921 
 Hora: 11:48:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01676607131958 
 Hora: 11:48:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012358903884888 
 Hora: 11:48:56

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028549194335938 
 Hora: 11:48:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013782978057861 
 Hora: 11:48:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078251361846924 
 Hora: 11:50:09

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.03159499168396 
 Hora: 11:50:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009929895401001 
 Hora: 11:50:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098748207092285 
 Hora: 11:50:10

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025285959243774 
 Hora: 11:50:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091438293457031 
 Hora: 11:50:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01257586479187 
 Hora: 11:50:14

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022740840911865 
 Hora: 11:50:14

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.022369146347046 
 Hora: 11:50:14

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025893926620483 
 Hora: 11:50:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012145042419434 
 Hora: 11:50:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.039150953292847 
 Hora: 11:50:18

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.033236026763916 
 Hora: 11:50:18

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.065286874771118 
 Hora: 11:50:18

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.031105995178223 
 Hora: 11:50:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014230966567993 
 Hora: 11:50:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0038180351257324 
 Hora: 11:50:49

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018461942672729 
 Hora: 11:50:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089550018310547 
 Hora: 11:50:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086839199066162 
 Hora: 11:50:51

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.038492918014526 
 Hora: 11:50:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012693166732788 
 Hora: 11:50:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013254880905151 
 Hora: 11:50:55

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.082281827926636 
 Hora: 11:50:55

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.040390014648438 
 Hora: 11:50:55

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027065992355347 
 Hora: 11:50:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015803098678589 
 Hora: 11:50:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011818885803223 
 Hora: 11:51:03

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015931844711304 
 Hora: 11:51:03

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.04447603225708 
 Hora: 11:51:03

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02348804473877 
 Hora: 11:51:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088651180267334 
 Hora: 11:51:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084681510925293 
 Hora: 11:51:16

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017047166824341 
 Hora: 11:51:16

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020209074020386 
 Hora: 11:51:16

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026815891265869 
 Hora: 11:51:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010760068893433 
 Hora: 11:51:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087192058563232 
 Hora: 11:51:29

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02181601524353 
 Hora: 11:51:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018793106079102 
 Hora: 11:51:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090529918670654 
 Hora: 11:51:30

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025092124938965 
 Hora: 11:51:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076711177825928 
 Hora: 11:51:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01429009437561 
 Hora: 11:51:37

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016579866409302 
 Hora: 11:51:37

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.012732028961182 
 Hora: 11:51:37

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.017320871353149 
 Hora: 11:51:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014213085174561 
 Hora: 11:51:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012187004089355 
 Hora: 11:52:02

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020578145980835 
 Hora: 11:52:02

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018747091293335 
 Hora: 11:52:02

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027738809585571 
 Hora: 11:52:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090820789337158 
 Hora: 11:52:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018131017684937 
 Hora: 11:52:25

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017531156539917 
 Hora: 11:52:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006821870803833 
 Hora: 11:52:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068449974060059 
 Hora: 11:52:26

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021600008010864 
 Hora: 11:52:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01025915145874 
 Hora: 11:52:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012890100479126 
 Hora: 11:52:56

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018630981445312 
 Hora: 11:52:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083320140838623 
 Hora: 11:52:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010350942611694 
 Hora: 11:52:56

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023319005966187 
 Hora: 11:52:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010189056396484 
 Hora: 11:52:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099120140075684 
 Hora: 11:52:59

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019036054611206 
 Hora: 11:52:59

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018934965133667 
 Hora: 11:52:59

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.018757104873657 
 Hora: 11:52:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01188588142395 
 Hora: 11:52:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073268413543701 
 Hora: 11:53:09

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019885063171387 
 Hora: 11:53:09

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016371011734009 
 Hora: 11:53:09

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02422308921814 
 Hora: 11:53:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087361335754395 
 Hora: 11:53:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090749263763428 
 Hora: 11:53:44

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021920204162598 
 Hora: 11:53:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0051789283752441 
 Hora: 11:53:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065429210662842 
 Hora: 11:53:45

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.018167018890381 
 Hora: 11:53:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068860054016113 
 Hora: 11:53:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058178901672363 
 Hora: 11:53:51

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.027024030685425 
 Hora: 11:53:51

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014667987823486 
 Hora: 11:53:51

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.0314781665802 
 Hora: 11:53:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011177062988281 
 Hora: 11:53:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.032480955123901 
 Hora: 11:54:05

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015774965286255 
 Hora: 11:54:05

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015373945236206 
 Hora: 11:54:05

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026001930236816 
 Hora: 11:54:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094108581542969 
 Hora: 11:54:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012103080749512 
 Hora: 11:54:10

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.050112009048462 
 Hora: 11:54:10

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.02711009979248 
 Hora: 11:54:10

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026103019714355 
 Hora: 11:54:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00913405418396 
 Hora: 11:54:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014050960540771 
 Hora: 11:54:42

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021467924118042 
 Hora: 11:54:42

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018565893173218 
 Hora: 11:54:42

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.029285907745361 
 Hora: 11:54:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059120655059814 
 Hora: 11:54:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013982057571411 
 Hora: 11:54:44

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.013603925704956 
 Hora: 11:54:44

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017980098724365 
 Hora: 11:54:44

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.047945976257324 
 Hora: 11:54:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093920230865479 
 Hora: 11:54:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013079166412354 
 Hora: 12:00:44

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.030187129974365 
 Hora: 12:00:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085818767547607 
 Hora: 12:00:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013880968093872 
 Hora: 12:00:46

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021485090255737 
 Hora: 12:00:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015332937240601 
 Hora: 12:00:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057470798492432 
 Hora: 12:00:52

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024361133575439 
 Hora: 12:00:52

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.02288293838501 
 Hora: 12:00:52

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.097819805145264 
 Hora: 12:00:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010925054550171 
 Hora: 12:00:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013056993484497 
 Hora: 12:00:56

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.026230812072754 
 Hora: 12:00:56

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.030128002166748 
 Hora: 12:00:56

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.030647993087769 
 Hora: 12:00:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013010025024414 
 Hora: 12:00:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092990398406982 
 Hora: 12:01:04

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015496015548706 
 Hora: 12:01:04

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016168117523193 
 Hora: 12:01:04

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.11613893508911 
 Hora: 12:01:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063550472259521 
 Hora: 12:01:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011901140213013 
 Hora: 12:01:11

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022921085357666 
 Hora: 12:01:11

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019161939620972 
 Hora: 12:01:11

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.031066179275513 
 Hora: 12:01:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010854005813599 
 Hora: 12:01:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085890293121338 
 Hora: 12:05:06

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020773887634277 
 Hora: 12:05:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014926910400391 
 Hora: 12:05:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011527061462402 
 Hora: 12:05:07

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.030422925949097 
 Hora: 12:05:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011662006378174 
 Hora: 12:05:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097029209136963 
 Hora: 12:05:12

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.03513503074646 
 Hora: 12:05:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089461803436279 
 Hora: 12:05:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012503862380981 
 Hora: 12:05:13

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.033382177352905 
 Hora: 12:05:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021661996841431 
 Hora: 12:05:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024801015853882 
 Hora: 12:05:22

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.02652907371521 
 Hora: 12:05:22

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.01823091506958 
 Hora: 12:05:22

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.030285120010376 
 Hora: 12:05:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010436058044434 
 Hora: 12:05:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020241975784302 
 Hora: 12:05:37

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.06424617767334 
 Hora: 12:05:37

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017602205276489 
 Hora: 12:05:37

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.028678178787231 
 Hora: 12:05:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.043069124221802 
 Hora: 12:05:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010309934616089 
 Hora: 12:41:11

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022903919219971 
 Hora: 12:41:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010847091674805 
 Hora: 12:41:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098400115966797 
 Hora: 12:41:12

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.039819955825806 
 Hora: 12:41:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087010860443115 
 Hora: 12:41:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010474920272827 
 Hora: 12:42:54

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021795988082886 
 Hora: 12:42:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010610103607178 
 Hora: 12:42:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025036096572876 
 Hora: 12:42:56

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.03748607635498 
 Hora: 12:42:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011157989501953 
 Hora: 12:42:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072839260101318 
 Hora: 12:44:26

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017271995544434 
 Hora: 12:44:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012923955917358 
 Hora: 12:44:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020265102386475 
 Hora: 12:44:27

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.02924919128418 
 Hora: 12:44:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01106595993042 
 Hora: 12:44:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010786056518555 
 Hora: 12:48:35

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020952939987183 
 Hora: 12:48:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012716054916382 
 Hora: 12:48:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008573055267334 
 Hora: 12:48:36

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.031676054000854 
 Hora: 12:48:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022006988525391 
 Hora: 12:48:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071320533752441 
 Hora: 12:48:55

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02524995803833 
 Hora: 12:48:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097169876098633 
 Hora: 12:48:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093958377838135 
 Hora: 12:48:57

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.029636144638062 
 Hora: 12:48:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013750076293945 
 Hora: 12:48:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022682905197144 
 Hora: 12:49:28

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021466970443726 
 Hora: 12:49:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017356872558594 
 Hora: 12:49:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093538761138916 
 Hora: 12:49:30

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.027338981628418 
 Hora: 12:49:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014482975006104 
 Hora: 12:49:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021331071853638 
 Hora: 12:49:43

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028727054595947 
 Hora: 12:49:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013501167297363 
 Hora: 12:49:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01034688949585 
 Hora: 12:50:34

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017642021179199 
 Hora: 12:50:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094029903411865 
 Hora: 12:50:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017534017562866 
 Hora: 12:50:35

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.01776385307312 
 Hora: 12:50:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064170360565186 
 Hora: 12:50:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010710954666138 
 Hora: 12:51:12

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.034204006195068 
 Hora: 12:51:12

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020849943161011 
 Hora: 12:51:12

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.039969205856323 
 Hora: 12:51:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012022018432617 
 Hora: 12:51:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01201605796814 
 Hora: 12:52:08

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023528099060059 
 Hora: 12:52:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083141326904297 
 Hora: 12:52:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021171092987061 
 Hora: 12:52:09

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.035233974456787 
 Hora: 12:52:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011960029602051 
 Hora: 12:52:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092930793762207 
 Hora: 12:52:12

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.025140047073364 
 Hora: 12:52:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010748147964478 
 Hora: 12:52:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011433124542236 
 Hora: 12:52:14

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021361112594604 
 Hora: 12:52:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014097929000854 
 Hora: 12:52:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092780590057373 
 Hora: 12:52:21

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.026470899581909 
 Hora: 12:52:21

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.02283501625061 
 Hora: 12:52:21

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026087999343872 
 Hora: 12:52:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080089569091797 
 Hora: 12:52:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006641149520874 
 Hora: 12:52:25

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.025824069976807 
 Hora: 12:52:25

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.0260169506073 
 Hora: 12:52:25

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026566982269287 
 Hora: 12:52:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012480020523071 
 Hora: 12:52:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012508869171143 
 Hora: 12:52:47

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.01948094367981 
 Hora: 12:52:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066208839416504 
 Hora: 12:52:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021712064743042 
 Hora: 12:52:49

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.032811880111694 
 Hora: 12:52:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014616012573242 
 Hora: 12:52:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010273933410645 
 Hora: 12:52:54

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.028611898422241 
 Hora: 12:52:54

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025521039962769 
 Hora: 12:52:54

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.03947901725769 
 Hora: 12:52:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012206077575684 
 Hora: 12:52:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011009931564331 
 Hora: 12:52:58

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015356063842773 
 Hora: 12:52:58

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.022783041000366 
 Hora: 12:52:58

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.032454013824463 
 Hora: 12:52:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012421846389771 
 Hora: 12:52:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073590278625488 
 Hora: 12:53:03

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020729064941406 
 Hora: 12:53:03

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019953012466431 
 Hora: 12:53:03

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.040080070495605 
 Hora: 12:53:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013648986816406 
 Hora: 12:53:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013260126113892 
 Hora: 12:53:26

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024794101715088 
 Hora: 12:53:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079162120819092 
 Hora: 12:53:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081179141998291 
 Hora: 12:53:27

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023158073425293 
 Hora: 12:53:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008126974105835 
 Hora: 12:53:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012237071990967 
 Hora: 12:53:32

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020339965820312 
 Hora: 12:53:32

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019582986831665 
 Hora: 12:53:32

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022135972976685 
 Hora: 12:53:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072882175445557 
 Hora: 12:53:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009119987487793 
 Hora: 12:53:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024441957473755 
 Hora: 12:53:36

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025926113128662 
 Hora: 12:53:36

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025103092193604 
 Hora: 12:53:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0056259632110596 
 Hora: 12:53:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012686967849731 
 Hora: 14:16:37

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.032711029052734 
 Hora: 14:16:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014049053192139 
 Hora: 14:16:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016863107681274 
 Hora: 14:16:38

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.030769824981689 
 Hora: 14:16:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008897066116333 
 Hora: 14:16:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098860263824463 
 Hora: 14:16:44

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017574071884155 
 Hora: 14:16:44

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.032548904418945 
 Hora: 14:16:44

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022176027297974 
 Hora: 14:16:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011064052581787 
 Hora: 14:16:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0038251876831055 
 Hora: 14:17:12

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020368099212646 
 Hora: 14:17:12

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017378091812134 
 Hora: 14:17:12

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.029262065887451 
 Hora: 14:17:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095970630645752 
 Hora: 14:17:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012941122055054 
 Hora: 14:17:15

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.040194988250732 
 Hora: 14:17:15

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.027245044708252 
 Hora: 14:17:15

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024835109710693 
 Hora: 14:17:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014258861541748 
 Hora: 14:17:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086739063262939 
 Hora: 14:18:34

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023097991943359 
 Hora: 14:18:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012639999389648 
 Hora: 14:18:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01216197013855 
 Hora: 14:18:36

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.031309127807617 
 Hora: 14:18:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015909910202026 
 Hora: 14:18:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019742012023926 
 Hora: 14:18:42

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.030558109283447 
 Hora: 14:18:42

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.032563924789429 
 Hora: 14:18:42

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.019994974136353 
 Hora: 14:18:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026216983795166 
 Hora: 14:18:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080978870391846 
 Hora: 14:18:46

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.027580976486206 
 Hora: 14:18:46

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.039760112762451 
 Hora: 14:18:46

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.03104305267334 
 Hora: 14:18:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070490837097168 
 Hora: 14:18:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083301067352295 
 Hora: 14:18:53

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021595001220703 
 Hora: 14:18:53

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018129825592041 
 Hora: 14:18:53

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.033442974090576 
 Hora: 14:18:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0045320987701416 
 Hora: 14:18:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010325908660889 
 Hora: 14:18:55

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023248910903931 
 Hora: 14:18:55

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018802881240845 
 Hora: 14:18:55

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.034137010574341 
 Hora: 14:18:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014777898788452 
 Hora: 14:18:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016016006469727 
 Hora: 14:25:33

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020482063293457 
 Hora: 14:25:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011433124542236 
 Hora: 14:25:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021015167236328 
 Hora: 14:25:34

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.04781699180603 
 Hora: 14:25:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013188123703003 
 Hora: 14:25:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012344837188721 
 Hora: 14:25:39

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.046233892440796 
 Hora: 14:25:39

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.032257795333862 
 Hora: 14:25:39

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.046538114547729 
 Hora: 14:25:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.036098957061768 
 Hora: 14:25:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010225057601929 
 Hora: 14:25:43

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020885944366455 
 Hora: 14:25:43

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.02175498008728 
 Hora: 14:25:43

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.031315803527832 
 Hora: 14:25:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012474060058594 
 Hora: 14:25:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010615110397339 
 Hora: 14:27:21

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021453142166138 
 Hora: 14:27:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011551141738892 
 Hora: 14:27:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013669967651367 
 Hora: 14:27:23

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.042252063751221 
 Hora: 14:27:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01024603843689 
 Hora: 14:27:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072228908538818 
 Hora: 14:28:51

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022465944290161 
 Hora: 14:28:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010090112686157 
 Hora: 14:28:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073299407958984 
 Hora: 14:28:52

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020222902297974 
 Hora: 14:28:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066251754760742 
 Hora: 14:28:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020868062973022 
 Hora: 14:29:33

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.01943302154541 
 Hora: 14:29:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010546922683716 
 Hora: 14:29:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007519006729126 
 Hora: 14:29:34

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.029206037521362 
 Hora: 14:29:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013908863067627 
 Hora: 14:29:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094120502471924 
 Hora: 14:29:44

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022078037261963 
 Hora: 14:29:44

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015934944152832 
 Hora: 14:29:44

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.081612110137939 
 Hora: 14:29:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082659721374512 
 Hora: 14:29:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090010166168213 
 Hora: 14:32:44

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020437002182007 
 Hora: 14:32:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010006904602051 
 Hora: 14:32:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065290927886963 
 Hora: 14:32:46

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.038952827453613 
 Hora: 14:32:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012794017791748 
 Hora: 14:32:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077970027923584 
 Hora: 14:32:52

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.030884981155396 
 Hora: 14:32:52

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.0223069190979 
 Hora: 14:32:52

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.037474870681763 
 Hora: 14:32:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078339576721191 
 Hora: 14:32:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015321969985962 
 Hora: 14:32:57

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020826101303101 
 Hora: 14:32:57

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.024998903274536 
 Hora: 14:32:57

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.051238059997559 
 Hora: 14:32:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01318097114563 
 Hora: 14:32:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012619972229004 
 Hora: 14:33:35

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020509004592896 
 Hora: 14:33:35

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016161918640137 
 Hora: 14:33:35

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026721000671387 
 Hora: 14:33:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061750411987305 
 Hora: 14:33:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010922908782959 
 Hora: 14:34:06

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.016646862030029 
 Hora: 14:34:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099830627441406 
 Hora: 14:34:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018513917922974 
 Hora: 14:34:08

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.033792972564697 
 Hora: 14:34:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058219432830811 
 Hora: 14:34:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013028144836426 
 Hora: 14:34:13

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.029957056045532 
 Hora: 14:34:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098721981048584 
 Hora: 14:34:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016526937484741 
 Hora: 14:34:14

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.031520843505859 
 Hora: 14:34:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012886047363281 
 Hora: 14:34:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012854099273682 
 Hora: 14:34:19

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020659923553467 
 Hora: 14:34:19

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.01436710357666 
 Hora: 14:34:19

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038258075714111 
 Hora: 14:34:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065381526947021 
 Hora: 14:34:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089640617370605 
 Hora: 14:34:29

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019292831420898 
 Hora: 14:34:29

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.038141965866089 
 Hora: 14:34:29

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02331805229187 
 Hora: 14:34:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013067960739136 
 Hora: 14:34:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012058019638062 
 Hora: 14:41:15

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.021796941757202 
 Hora: 14:41:15

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.071549892425537 
 Hora: 14:41:15

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016373872756958 
 Hora: 14:41:15

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023752927780151 
 Hora: 14:41:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008836030960083 
 Hora: 14:41:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018393039703369 
 Hora: 14:41:15

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.017319917678833 
 Hora: 14:41:15

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.025142908096313 
 Hora: 14:41:15

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.040036916732788 
 Hora: 14:41:15

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.025260925292969 
 Hora: 14:41:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007997989654541 
 Hora: 14:41:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01737904548645 
 Hora: 14:41:18

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 2.2665629386902 
 Hora: 14:41:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078928470611572 
 Hora: 14:41:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014300107955933 
 Hora: 14:41:20

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 1.6329560279846 
 Hora: 14:41:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014098882675171 
 Hora: 14:41:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013206958770752 
 Hora: 14:41:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010987043380737 
 Hora: 14:41:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008591890335083 
 Hora: 14:41:39

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.016736030578613 
 Hora: 14:41:39

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.029047966003418 
 Hora: 14:41:39

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.020288944244385 
 Hora: 14:41:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086069107055664 
 Hora: 14:41:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073859691619873 
 Hora: 14:41:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.04149603843689 
 Hora: 14:41:40

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.017786979675293 
 Hora: 14:41:40

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.017560005187988 
 Hora: 14:41:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020211935043335 
 Hora: 14:41:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010412931442261 
 Hora: 14:41:46

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.016983985900879 
 Hora: 14:41:46

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018666982650757 
 Hora: 14:41:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075700283050537 
 Hora: 14:41:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016141891479492 
 Hora: 14:41:47

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.026716947555542 
 Hora: 14:41:47

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.025919914245605 
 Hora: 14:41:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01141095161438 
 Hora: 14:41:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009727954864502 
 Hora: 14:41:51

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.021984100341797 
 Hora: 14:41:51

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.018019914627075 
 Hora: 14:41:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089201927185059 
 Hora: 14:41:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098679065704346 
 Hora: 14:41:52

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.023043870925903 
 Hora: 14:41:52

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.022104024887085 
 Hora: 14:41:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011486053466797 
 Hora: 14:41:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099608898162842 
 Hora: 14:41:54

SELECT *
FROM "cat_TipoNomina"
WHERE "ACTIVO" = 1 
 Ejecutado en: 0.015253067016602 
 Hora: 14:41:54

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.023455142974854 
 Hora: 14:41:54

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.014591932296753 
 Hora: 14:41:54

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "EsPercepcion" = 1
AND "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.02596378326416 
 Hora: 14:41:54

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.024718999862671 
 Hora: 14:41:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011168956756592 
 Hora: 14:41:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089559555053711 
 Hora: 14:41:54

SELECT *
FROM "cat_TipoNomina"
WHERE "ACTIVO" = 1 
 Ejecutado en: 0.03617000579834 
 Hora: 14:41:54

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.027493000030518 
 Hora: 14:41:54

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.030823945999146 
 Hora: 14:41:54

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "EsPercepcion" = 1
AND "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.029171943664551 
 Hora: 14:41:54

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.033411026000977 
 Hora: 14:41:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013123035430908 
 Hora: 14:41:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.032622098922729 
 Hora: 14:41:55

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.015357971191406 
 Hora: 14:41:55

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.030468940734863 
 Hora: 14:41:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079748630523682 
 Hora: 14:41:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092408657073975 
 Hora: 14:41:55

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.0206139087677 
 Hora: 14:41:55

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025557994842529 
 Hora: 14:41:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095829963684082 
 Hora: 14:41:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080990791320801 
 Hora: 14:42:09

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.045330047607422 
 Hora: 14:42:09

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.018615961074829 
 Hora: 14:42:09

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.019231081008911 
 Hora: 14:42:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086219310760498 
 Hora: 14:42:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011580944061279 
 Hora: 14:42:25

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1908' 
 Ejecutado en: 0.028685092926025 
 Hora: 14:42:25

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.018862962722778 
 Hora: 14:42:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099549293518066 
 Hora: 14:42:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008098840713501 
 Hora: 14:42:25

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1908' 
 Ejecutado en: 0.016194105148315 
 Hora: 14:42:25

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.021730899810791 
 Hora: 14:42:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01018214225769 
 Hora: 14:42:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079059600830078 
 Hora: 14:42:25

exec pa_getEmpleadosTodos  @Fecha = '17/02/2025',
										@PresupuestoId = '0002' 
 Ejecutado en: 0.023010015487671 
 Hora: 14:42:25

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.019363880157471 
 Hora: 14:42:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013086080551147 
 Hora: 14:42:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091559886932373 
 Hora: 14:42:26

exec pa_getEmpleadosTodos  @Fecha = '17/02/2025',
										@PresupuestoId = '0002' 
 Ejecutado en: 0.027364015579224 
 Hora: 14:42:26

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.037667036056519 
 Hora: 14:42:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066461563110352 
 Hora: 14:42:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078790187835693 
 Hora: 14:42:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063869953155518 
 Hora: 14:42:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012956142425537 
 Hora: 14:42:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061728954315186 
 Hora: 14:42:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071818828582764 
 Hora: 14:42:35

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.020460844039917 
 Hora: 14:42:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083889961242676 
 Hora: 14:42:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084378719329834 
 Hora: 14:42:35

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1908' 
 Ejecutado en: 0.10517406463623 
 Hora: 14:42:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084450244903564 
 Hora: 14:42:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088601112365723 
 Hora: 14:42:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00919508934021 
 Hora: 14:42:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097570419311523 
 Hora: 14:42:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091159343719482 
 Hora: 14:42:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015033960342407 
 Hora: 14:42:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064101219177246 
 Hora: 14:42:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071959495544434 
 Hora: 14:42:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081291198730469 
 Hora: 14:42:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089778900146484 
 Hora: 14:42:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006354808807373 
 Hora: 14:42:54

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '17/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.029778003692627 
 Hora: 14:42:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093791484832764 
 Hora: 14:43:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011729955673218 
 Hora: 14:43:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097057819366455 
 Hora: 14:43:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010385990142822 
 Hora: 14:43:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096719264984131 
 Hora: 14:43:01

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024470090866089 
 Hora: 14:43:01

SELECT *
FROM "Cat_CategoriasPrestServ"
WHERE "Activo" = 1 
 Ejecutado en: 0.020086050033569 
 Hora: 14:43:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011152982711792 
 Hora: 14:43:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012089967727661 
 Hora: 14:43:01

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.02144193649292 
 Hora: 14:43:01

SELECT *
FROM "Cat_CategoriasPrestServ"
WHERE "Activo" = 1 
 Ejecutado en: 0.023062944412231 
 Hora: 14:43:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064420700073242 
 Hora: 14:43:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067992210388184 
 Hora: 14:43:08

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='01/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.01774001121521 
 Hora: 14:43:08

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.017439842224121 
 Hora: 14:43:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079770088195801 
 Hora: 14:43:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01894998550415 
 Hora: 14:43:08

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='01/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.015583992004395 
 Hora: 14:43:08

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.016426086425781 
 Hora: 14:43:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099871158599854 
 Hora: 14:43:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011559963226318 
 Hora: 14:43:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091750621795654 
 Hora: 14:43:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018189191818237 
 Hora: 14:43:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071208477020264 
 Hora: 14:43:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070629119873047 
 Hora: 14:43:13

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.026705026626587 
 Hora: 14:43:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009357213973999 
 Hora: 14:43:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012796878814697 
 Hora: 14:43:13

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021461963653564 
 Hora: 14:43:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072569847106934 
 Hora: 14:43:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095350742340088 
 Hora: 14:43:16

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.019284009933472 
 Hora: 14:43:16

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.020263910293579 
 Hora: 14:43:16

SELECT *
FROM "cat_TipoReporte"
WHERE "Clave" = '3' 
 Ejecutado en: 0.019215822219849 
 Hora: 14:43:16

SELECT *
FROM "cat_TipoReporte"
WHERE "Clave" != 4 
 Ejecutado en: 0.012411117553711 
 Hora: 14:43:16

SELECT *
FROM "cat_Reportes"
WHERE "idTipoReporte" = '3'
AND "Activo" = 1 
 Ejecutado en: 0.02655291557312 
 Hora: 14:43:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073459148406982 
 Hora: 14:43:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008526086807251 
 Hora: 14:43:16

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.019982814788818 
 Hora: 14:43:16

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.015066862106323 
 Hora: 14:43:16

SELECT *
FROM "cat_TipoReporte"
WHERE "Clave" = '3' 
 Ejecutado en: 0.016647815704346 
 Hora: 14:43:16

SELECT *
FROM "cat_TipoReporte"
WHERE "Clave" != 4 
 Ejecutado en: 0.021171092987061 
 Hora: 14:43:16

SELECT *
FROM "cat_Reportes"
WHERE "idTipoReporte" = '3'
AND "Activo" = 1 
 Ejecutado en: 0.019608974456787 
 Hora: 14:43:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093770027160645 
 Hora: 14:43:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064699649810791 
 Hora: 14:43:17

SELECT *
FROM "cat_Reportes"
WHERE "idTipoReporte" = '3'
AND "Activo" = 1 
 Ejecutado en: 0.01240611076355 
 Hora: 14:43:17

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021387100219727 
 Hora: 14:43:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01972508430481 
 Hora: 14:43:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020252227783203 
 Hora: 14:43:17

SELECT *
FROM "cat_Reportes"
WHERE "idTipoReporte" = '3'
AND "Activo" = 1 
 Ejecutado en: 0.01781702041626 
 Hora: 14:43:17

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.031138896942139 
 Hora: 14:43:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010654926300049 
 Hora: 14:43:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006011962890625 
 Hora: 14:43:27

SELECT *
FROM "cat_Reportes"
WHERE "idTipoReporte" = '2'
AND "Activo" = 1 
 Ejecutado en: 0.019151926040649 
 Hora: 14:43:27

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020488977432251 
 Hora: 14:43:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010264873504639 
 Hora: 14:43:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083909034729004 
 Hora: 14:43:31

SELECT *
FROM "cat_Reportes"
WHERE "idTipoReporte" = '1'
AND "Activo" = 1 
 Ejecutado en: 0.018065929412842 
 Hora: 14:43:31

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.018965005874634 
 Hora: 14:43:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010044097900391 
 Hora: 14:43:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0048658847808838 
 Hora: 14:43:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076801776885986 
 Hora: 14:43:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095181465148926 
 Hora: 14:43:37

exec p_admarh_get_Escuelas @EscuelaId=0 
 Ejecutado en: 0.015153169631958 
 Hora: 14:43:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096328258514404 
 Hora: 14:43:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0052118301391602 
 Hora: 14:43:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010840892791748 
 Hora: 14:43:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060780048370361 
 Hora: 14:43:40

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.02155613899231 
 Hora: 14:43:40

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.023759841918945 
 Hora: 14:43:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095779895782471 
 Hora: 14:43:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094399452209473 
 Hora: 14:43:40

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.017616033554077 
 Hora: 14:43:40

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.017790079116821 
 Hora: 14:43:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099678039550781 
 Hora: 14:43:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012476921081543 
 Hora: 14:43:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064239501953125 
 Hora: 14:43:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070540904998779 
 Hora: 14:43:41

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.019704103469849 
 Hora: 14:43:41

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.018085956573486 
 Hora: 14:43:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006659984588623 
 Hora: 14:43:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091450214385986 
 Hora: 14:43:41

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.016371965408325 
 Hora: 14:43:41

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.020689010620117 
 Hora: 14:43:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019363880157471 
 Hora: 14:43:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010231018066406 
 Hora: 14:43:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073709487915039 
 Hora: 14:43:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011240005493164 
 Hora: 14:43:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010040044784546 
 Hora: 14:43:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064809322357178 
 Hora: 14:43:45

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.022425889968872 
 Hora: 14:43:45

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020308017730713 
 Hora: 14:43:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0053398609161377 
 Hora: 14:43:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017312049865723 
 Hora: 14:43:45

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.02192497253418 
 Hora: 14:43:45

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021221876144409 
 Hora: 14:43:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090041160583496 
 Hora: 14:43:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096850395202637 
 Hora: 14:44:05

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02212119102478 
 Hora: 14:44:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086238384246826 
 Hora: 14:44:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081188678741455 
 Hora: 14:44:06

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022014141082764 
 Hora: 14:44:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011216878890991 
 Hora: 14:44:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083968639373779 
 Hora: 14:44:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088121891021729 
 Hora: 14:44:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009274959564209 
 Hora: 14:44:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062100887298584 
 Hora: 14:44:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015030145645142 
 Hora: 14:44:09

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.026175022125244 
 Hora: 14:44:09

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022104024887085 
 Hora: 14:44:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096900463104248 
 Hora: 14:44:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084290504455566 
 Hora: 14:44:09

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.017744064331055 
 Hora: 14:44:09

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024554967880249 
 Hora: 14:44:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085370540618896 
 Hora: 14:44:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010347127914429 
 Hora: 14:44:12

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020095825195312 
 Hora: 14:44:12

SELECT cat_Categorias.*
FROM "cat_Categorias" 
 Ejecutado en: 0.014650106430054 
 Hora: 14:44:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010355949401855 
 Hora: 14:44:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085430145263672 
 Hora: 14:44:13

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022248029708862 
 Hora: 14:44:13

SELECT Cat_Emisores.*
FROM "Cat_Emisores"
WHERE "Activo" = 1 
 Ejecutado en: 0.017417192459106 
 Hora: 14:44:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074601173400879 
 Hora: 14:44:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009990930557251 
 Hora: 14:44:14

SELECT *
FROM "Cat_DiasFestivos" 
 Ejecutado en: 0.021185874938965 
 Hora: 14:44:14

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022945165634155 
 Hora: 14:44:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083131790161133 
 Hora: 14:44:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010327100753784 
 Hora: 14:44:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010215044021606 
 Hora: 14:44:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014090061187744 
 Hora: 14:44:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080327987670898 
 Hora: 14:44:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013642072677612 
 Hora: 14:44:15

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.027290821075439 
 Hora: 14:44:15

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.019822120666504 
 Hora: 14:44:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018085956573486 
 Hora: 14:44:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095961093902588 
 Hora: 14:44:15

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.020096063613892 
 Hora: 14:44:15

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.015017986297607 
 Hora: 14:44:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013523817062378 
 Hora: 14:44:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011730909347534 
 Hora: 14:44:15

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.018514156341553 
 Hora: 14:44:15

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.018527984619141 
 Hora: 14:44:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077598094940186 
 Hora: 14:44:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010473966598511 
 Hora: 14:44:16

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.010759115219116 
 Hora: 14:44:16

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.016278028488159 
 Hora: 14:44:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01009202003479 
 Hora: 14:44:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097508430480957 
 Hora: 14:44:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010481119155884 
 Hora: 14:44:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012164115905762 
 Hora: 14:44:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011007070541382 
 Hora: 14:44:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088319778442383 
 Hora: 14:44:17

exec p_admarh_get_Escuelas @EscuelaId=0 
 Ejecutado en: 0.021751880645752 
 Hora: 14:44:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013869047164917 
 Hora: 14:44:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009058952331543 
 Hora: 14:44:17

exec p_admarh_get_Escuelas @EscuelaId=0 
 Ejecutado en: 0.020121812820435 
 Hora: 14:44:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007194995880127 
 Hora: 14:44:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086650848388672 
 Hora: 14:44:23

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.016819953918457 
 Hora: 14:44:23

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015105962753296 
 Hora: 14:44:23

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020359992980957 
 Hora: 14:44:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064878463745117 
 Hora: 14:44:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094108581542969 
 Hora: 14:44:30

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.019112110137939 
 Hora: 14:44:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011177062988281 
 Hora: 14:44:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090820789337158 
 Hora: 14:44:30

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.026758909225464 
 Hora: 14:44:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0042309761047363 
 Hora: 14:44:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068831443786621 
 Hora: 14:44:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079758167266846 
 Hora: 14:44:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011831998825073 
 Hora: 14:44:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0042440891265869 
 Hora: 14:44:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071790218353271 
 Hora: 14:44:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0118567943573 
 Hora: 14:44:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012810945510864 
 Hora: 14:44:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007133960723877 
 Hora: 14:44:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010593891143799 
 Hora: 14:44:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016018867492676 
 Hora: 14:44:36

SELECT *
FROM "Cat_CategoriasPrestServ"
WHERE "Activo" = 1 
 Ejecutado en: 0.017839908599854 
 Hora: 14:44:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01107382774353 
 Hora: 14:44:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010342121124268 
 Hora: 14:44:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023308038711548 
 Hora: 14:44:36

SELECT *
FROM "Cat_CategoriasPrestServ"
WHERE "Activo" = 1 
 Ejecutado en: 0.022119045257568 
 Hora: 14:44:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010562896728516 
 Hora: 14:44:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077579021453857 
 Hora: 14:44:56

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1908' 
 Ejecutado en: 0.019084930419922 
 Hora: 14:44:56

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.01997184753418 
 Hora: 14:44:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097498893737793 
 Hora: 14:44:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02576208114624 
 Hora: 14:44:57

exec pa_getEmpleadosTodos  @Fecha = '17/02/2025',
										@PresupuestoId = '0002' 
 Ejecutado en: 0.037422895431519 
 Hora: 14:44:57

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020283937454224 
 Hora: 14:44:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.031162977218628 
 Hora: 14:44:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068659782409668 
 Hora: 14:45:00

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1908'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.78072905540466 
 Hora: 14:45:00

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1908' 
 Ejecutado en: 0.027136087417603 
 Hora: 14:45:00

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1908' 
 Ejecutado en: 0.036386966705322 
 Hora: 14:45:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010457038879395 
 Hora: 14:45:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007418155670166 
 Hora: 14:45:02

exec sp_GetEmpleadosParaRegIni @PresupuestoId='0002' 
 Ejecutado en: 1.2012240886688 
 Hora: 14:45:02

SELECT "EmpleadoID", COUNT(EmpleadoID) as dias
FROM "RegsIniGenNomina"
WHERE "PeriodoPagoID" = '1908'
AND "TieneLIS" = 0
GROUP BY "EmpleadoID" 
 Ejecutado en: 0.26455283164978 
 Hora: 14:45:02

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1908' 
 Ejecutado en: 0.020495176315308 
 Hora: 14:45:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090169906616211 
 Hora: 14:45:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010360956192017 
 Hora: 14:45:05

SELECT *
FROM "det_NominaXTipo"
WHERE "PeriodoID" = '1908'
AND "TipoNominaID" IN(3, 9) 
 Ejecutado en: 0.015629053115845 
 Hora: 14:45:05

SELECT *
FROM "conf_Empleado"
WHERE "Id_Concepto" IN(57, 69, 136, 137, 138, 146, 147, 151, 197, 201, 208, 221, 238, 239, 257, 258) 
 Ejecutado en: 0.034129858016968 
 Hora: 14:45:05

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1908' 
 Ejecutado en: 0.018175840377808 
 Hora: 14:45:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073349475860596 
 Hora: 14:45:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098550319671631 
 Hora: 14:45:13

exec pa_GetEmpleadosParaNomina @Id_Nomina=1908 
 Ejecutado en: 6.3279750347137 
 Hora: 14:45:13

exec pa_GetEmpleadosEnNomina @id_nomina=1908 
 Ejecutado en: 0.95798492431641 
 Hora: 14:45:13

SELECT "d"."EmpleadoId"
FROM "conf_PagosENomina" "d"
JOIN "conf_EmisorTipoNomina" "ct" ON "d"."EmisorId" = "ct"."IdEmisor"
WHERE "ct"."idPresupuesto" = '0002'
AND "EmisorId" IN(1, 5, 6, 10)
GROUP BY "EmpleadoID" 
 Ejecutado en: 0.025322914123535 
 Hora: 14:45:13

SELECT "den"."Id_Nomina" as "idNomina", "den"."Id_Empleado" as "idEmpleado"
FROM "det_EmpleadosNomina" "den"
JOIN "his_Nomina" "hn" ON "den"."Id_Nomina" = "hn"."Id"
WHERE "hn"."FechaIni" = '01/02/2025'
AND "hn"."Id" <> '1908' 
 Ejecutado en: 0.018455028533936 
 Hora: 14:45:13

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1908' 
 Ejecutado en: 0.01559591293335 
 Hora: 14:45:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065009593963623 
 Hora: 14:45:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021494150161743 
 Hora: 14:45:17

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1908' 
 Ejecutado en: 0.030322074890137 
 Hora: 14:45:17

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1908' 
 Ejecutado en: 0.028011083602905 
 Hora: 14:45:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020073890686035 
 Hora: 14:45:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013752937316895 
 Hora: 14:46:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098230838775635 
 Hora: 14:46:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010498046875 
 Hora: 14:46:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014554023742676 
 Hora: 14:46:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011153221130371 
 Hora: 14:46:06

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.018640041351318 
 Hora: 14:46:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015640020370483 
 Hora: 14:46:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012386083602905 
 Hora: 14:46:06

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.047052145004272 
 Hora: 14:46:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012197971343994 
 Hora: 14:46:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012004137039185 
 Hora: 14:46:07

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1908' 
 Ejecutado en: 0.026886940002441 
 Hora: 14:46:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010322093963623 
 Hora: 14:46:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012424945831299 
 Hora: 14:46:07

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1908' 
 Ejecutado en: 0.039466857910156 
 Hora: 14:46:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019690990447998 
 Hora: 14:46:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070798397064209 
 Hora: 14:46:47

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1902' 
 Ejecutado en: 0.11006689071655 
 Hora: 14:46:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077710151672363 
 Hora: 14:46:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016885042190552 
 Hora: 14:55:55

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.031479120254517 
 Hora: 14:55:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096390247344971 
 Hora: 14:55:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010848999023438 
 Hora: 14:55:58

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.043219089508057 
 Hora: 14:55:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012107849121094 
 Hora: 14:55:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072319507598877 
 Hora: 14:56:03

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.039438009262085 
 Hora: 14:56:03

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017849922180176 
 Hora: 14:56:03

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02944278717041 
 Hora: 14:56:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097510814666748 
 Hora: 14:56:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095958709716797 
 Hora: 14:56:19

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020183801651001 
 Hora: 14:56:19

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021605968475342 
 Hora: 14:56:19

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.043673992156982 
 Hora: 14:56:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057330131530762 
 Hora: 14:56:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086410045623779 
 Hora: 15:05:03

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019812822341919 
 Hora: 15:05:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098590850830078 
 Hora: 15:05:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012449979782104 
 Hora: 15:05:04

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021511077880859 
 Hora: 15:05:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074551105499268 
 Hora: 15:05:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058770179748535 
 Hora: 15:05:17

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016947984695435 
 Hora: 15:05:17

SELECT *
FROM "cat_Escuelas" 
 Ejecutado en: 0.018306970596313 
 Hora: 15:05:17

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.043324947357178 
 Hora: 15:05:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066678524017334 
 Hora: 15:05:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089571475982666 
 Hora: 15:05:29

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019612073898315 
 Hora: 15:05:29

SELECT *
FROM "cat_Escuelas" 
 Ejecutado en: 0.020653009414673 
 Hora: 15:05:29

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022383213043213 
 Hora: 15:05:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098788738250732 
 Hora: 15:05:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006843090057373 
 Hora: 15:05:32

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017687082290649 
 Hora: 15:05:32

SELECT *
FROM "cat_Escuelas" 
 Ejecutado en: 0.013750076293945 
 Hora: 15:05:32

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022929906845093 
 Hora: 15:05:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091848373413086 
 Hora: 15:05:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090367794036865 
 Hora: 15:05:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017802953720093 
 Hora: 15:05:36

SELECT *
FROM "cat_Escuelas" 
 Ejecutado en: 0.017675876617432 
 Hora: 15:05:36

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.030441045761108 
 Hora: 15:05:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082640647888184 
 Hora: 15:05:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066039562225342 
 Hora: 15:05:39

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015658140182495 
 Hora: 15:05:39

SELECT *
FROM "cat_Escuelas" 
 Ejecutado en: 0.019964933395386 
 Hora: 15:05:39

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.028181076049805 
 Hora: 15:05:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081110000610352 
 Hora: 15:05:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076010227203369 
 Hora: 15:05:42

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018589973449707 
 Hora: 15:05:42

SELECT *
FROM "cat_Escuelas" 
 Ejecutado en: 0.01350998878479 
 Hora: 15:05:42

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020496845245361 
 Hora: 15:05:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010046005249023 
 Hora: 15:05:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079500675201416 
 Hora: 15:05:46

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017108917236328 
 Hora: 15:05:46

SELECT *
FROM "cat_Escuelas" 
 Ejecutado en: 0.017671823501587 
 Hora: 15:05:46

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022834062576294 
 Hora: 15:05:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095639228820801 
 Hora: 15:05:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068340301513672 
 Hora: 15:05:48

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017559051513672 
 Hora: 15:05:48

SELECT *
FROM "cat_Escuelas" 
 Ejecutado en: 0.016244888305664 
 Hora: 15:05:48

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02231502532959 
 Hora: 15:05:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010511875152588 
 Hora: 15:05:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077321529388428 
 Hora: 15:05:52

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019882202148438 
 Hora: 15:05:52

SELECT *
FROM "cat_Escuelas" 
 Ejecutado en: 0.017153978347778 
 Hora: 15:05:52

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022442102432251 
 Hora: 15:05:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010631084442139 
 Hora: 15:05:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01073694229126 
 Hora: 15:06:59

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.032701969146729 
 Hora: 15:06:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026237964630127 
 Hora: 15:06:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023310899734497 
 Hora: 15:07:00

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.027824878692627 
 Hora: 15:07:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023772001266479 
 Hora: 15:07:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014753103256226 
 Hora: 15:07:07

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.029881954193115 
 Hora: 15:07:07

SELECT *
FROM "cat_Escuelas" 
 Ejecutado en: 0.033993005752563 
 Hora: 15:07:07

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.036700010299683 
 Hora: 15:07:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014592885971069 
 Hora: 15:07:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.060436964035034 
 Hora: 15:07:44

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018344879150391 
 Hora: 15:07:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092849731445312 
 Hora: 15:07:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011106014251709 
 Hora: 15:07:45

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022310018539429 
 Hora: 15:07:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011547803878784 
 Hora: 15:07:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.002953052520752 
 Hora: 15:07:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097570419311523 
 Hora: 15:07:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0036678314208984 
 Hora: 15:07:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098400115966797 
 Hora: 15:07:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097429752349854 
 Hora: 15:07:54

exec p_admarh_get_Escuelas @EscuelaId=0 
 Ejecutado en: 0.017611980438232 
 Hora: 15:07:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097830295562744 
 Hora: 15:07:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079309940338135 
 Hora: 15:07:54

exec p_admarh_get_Escuelas @EscuelaId=0 
 Ejecutado en: 0.014612913131714 
 Hora: 15:07:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090930461883545 
 Hora: 15:07:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073158740997314 
 Hora: 15:08:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073099136352539 
 Hora: 15:08:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010154008865356 
 Hora: 15:08:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089108943939209 
 Hora: 15:08:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009882926940918 
 Hora: 15:08:01

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.018988132476807 
 Hora: 15:08:01

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.012871980667114 
 Hora: 15:08:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00726318359375 
 Hora: 15:08:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010967016220093 
 Hora: 15:08:01

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.013625860214233 
 Hora: 15:08:01

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.016706943511963 
 Hora: 15:08:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091760158538818 
 Hora: 15:08:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070078372955322 
 Hora: 15:08:01

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.017940044403076 
 Hora: 15:08:01

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.017834901809692 
 Hora: 15:08:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097191333770752 
 Hora: 15:08:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099098682403564 
 Hora: 15:08:01

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.017821073532104 
 Hora: 15:08:01

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.019093036651611 
 Hora: 15:08:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074470043182373 
 Hora: 15:08:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00701904296875 
 Hora: 15:08:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068399906158447 
 Hora: 15:08:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090019702911377 
 Hora: 15:08:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007235050201416 
 Hora: 15:08:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093040466308594 
 Hora: 15:08:04

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.016631126403809 
 Hora: 15:08:04

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.015753030776978 
 Hora: 15:08:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00711989402771 
 Hora: 15:08:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0036790370941162 
 Hora: 15:08:04

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.01396107673645 
 Hora: 15:08:04

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021978855133057 
 Hora: 15:08:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011368036270142 
 Hora: 15:08:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073099136352539 
 Hora: 15:08:07

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026090145111084 
 Hora: 15:08:07

SELECT cat_Categorias.*
FROM "cat_Categorias" 
 Ejecutado en: 0.02027702331543 
 Hora: 15:08:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010400056838989 
 Hora: 15:08:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063850879669189 
 Hora: 15:08:08

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025420904159546 
 Hora: 15:08:08

SELECT Cat_Emisores.*
FROM "Cat_Emisores"
WHERE "Activo" = 1 
 Ejecutado en: 0.018030881881714 
 Hora: 15:08:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097990036010742 
 Hora: 15:08:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011384963989258 
 Hora: 15:08:09

SELECT *
FROM "Cat_DiasFestivos" 
 Ejecutado en: 0.022854089736938 
 Hora: 15:08:09

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021265029907227 
 Hora: 15:08:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078229904174805 
 Hora: 15:08:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007627010345459 
 Hora: 15:08:11

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.015391111373901 
 Hora: 15:08:11

SELECT *
FROM "ParametrosdeSistema"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.019399166107178 
 Hora: 15:08:11

SELECT *
FROM "ParametrosMovsRH"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.020127058029175 
 Hora: 15:08:11

SELECT *
FROM "ParamSystemTipoNomimas"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.020364999771118 
 Hora: 15:08:11

SELECT *
FROM "Param_ValoresENomina"
WHERE "Presupuestoid" = '0002' 
 Ejecutado en: 0.019210815429688 
 Hora: 15:08:11

SELECT *
FROM "ParametrosGenerales" 
 Ejecutado en: 0.017900943756104 
 Hora: 15:08:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097959041595459 
 Hora: 15:08:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010602951049805 
 Hora: 15:08:11

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.015563011169434 
 Hora: 15:08:11

SELECT *
FROM "ParametrosdeSistema"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.020738840103149 
 Hora: 15:08:11

SELECT *
FROM "ParametrosMovsRH"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.017897129058838 
 Hora: 15:08:11

SELECT *
FROM "ParamSystemTipoNomimas"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.018691062927246 
 Hora: 15:08:11

SELECT *
FROM "Param_ValoresENomina"
WHERE "Presupuestoid" = '0002' 
 Ejecutado en: 0.018460988998413 
 Hora: 15:08:11

SELECT *
FROM "ParametrosGenerales" 
 Ejecutado en: 0.020224809646606 
 Hora: 15:08:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071120262145996 
 Hora: 15:08:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076148509979248 
 Hora: 15:08:21

execute p_admarh_getDatosEmpleado @Clave=2257 
 Ejecutado en: 0.11686396598816 
 Hora: 15:08:21

exec pa_Conyuges_Consulta @Clave=2257 
 Ejecutado en: 0.028384923934937 
 Hora: 15:08:21

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'RUTA_IMG' 
 Ejecutado en: 0.019237995147705 
 Hora: 15:08:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010514974594116 
 Hora: 15:08:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010751962661743 
 Hora: 15:08:22

execute p_admarh_getDatosEmpleado @Clave=2257 
 Ejecutado en: 0.015929937362671 
 Hora: 15:08:22

exec p_admarh_getFechasEnvioDatos  @IdEmpleado=2628 
 Ejecutado en: 0.021996021270752 
 Hora: 15:08:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.005824089050293 
 Hora: 15:08:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087637901306152 
 Hora: 15:08:22

execute p_admarh_getDatosEmpleado @Clave=2257 
 Ejecutado en: 0.017822980880737 
 Hora: 15:08:22

exec p_admarh_VerificaPeriodoCaptura 
 Ejecutado en: 0.019347906112671 
 Hora: 15:08:22

exec pa_Estudiantes_Consulta_Completa @Clave=2257 
 Ejecutado en: 0.020174026489258 
 Hora: 15:08:22

execute p_admarh_getDatosEmpleado @Clave=2257 
 Ejecutado en: 0.021423816680908 
 Hora: 15:08:22

exec p_admarh_VerificaPeriodoCaptura 
 Ejecutado en: 0.020166158676147 
 Hora: 15:08:22

exec pa_Conyuges_Consulta @Clave=2257 
 Ejecutado en: 0.01689600944519 
 Hora: 15:08:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067191123962402 
 Hora: 15:08:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010028839111328 
 Hora: 15:08:22

exec p_admarh_EliminaDatosAntEmpleado
                    @Clave = 2257 
 Ejecutado en: 0.021095991134644 
 Hora: 15:08:22

execute p_admarh_getDatosEmpleado @Clave=2257 
 Ejecutado en: 0.019485950469971 
 Hora: 15:08:22

exec p_admarh_VerificaPeriodoCaptura 
 Ejecutado en: 0.018038034439087 
 Hora: 15:08:22

exec p_admarh_VerificaPeriodoCaptura 
 Ejecutado en: 0.022309064865112 
 Hora: 15:08:22

execute p_admarh_getDatosEmpleado @Clave=2257 
 Ejecutado en: 0.022691965103149 
 Hora: 15:08:22

SELECT "Descripcion", "Id"
FROM "cat_Escolaridad" 
 Ejecutado en: 0.018862009048462 
 Hora: 15:08:22

SELECT "EstadoID", "Estado"
FROM "Cat_Estados"
WHERE "EstadoID" = '31' 
 Ejecutado en: 0.016347169876099 
 Hora: 15:08:22

SELECT "CiudadId", "Ciudad"
FROM "Cat_Ciudades"
WHERE "EstadoID" = '31'
ORDER BY "Ciudad" 
 Ejecutado en: 0.031934022903442 
 Hora: 15:08:22

SELECT "ColoniaId", "Colonia"
FROM "Cat_Colonias"
WHERE "CiudadId" = '247'
ORDER BY "Colonia" 
 Ejecutado en: 0.017425060272217 
 Hora: 15:08:22

SELECT "Id", "Clave", "Descripcion"
FROM "cat_TipoRegimen"
WHERE "Activo" = 1 
 Ejecutado en: 0.02069091796875 
 Hora: 15:08:22

SELECT *
FROM "cat_Sindicatos" 
 Ejecutado en: 0.028378009796143 
 Hora: 15:08:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078589916229248 
 Hora: 15:08:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089530944824219 
 Hora: 15:08:23

execute pa_datosgeneralesempl @credencial='02257' 
 Ejecutado en: 0.19177007675171 
 Hora: 15:08:23

SELECT *
FROM "tmp_PayRules" 
 Ejecutado en: 0.01958703994751 
 Hora: 15:08:23

SELECT *
FROM "Cat_Supervisores" 
 Ejecutado en: 0.01854681968689 
 Hora: 15:08:23

SELECT *
FROM "cat_Edificios"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021450996398926 
 Hora: 15:08:23

SELECT *
FROM "cat_Departamentos" 
 Ejecutado en: 0.017827033996582 
 Hora: 15:08:23

SELECT *
FROM "Cat_GrupoImpresion"
WHERE "GrupoImpId" != 0 
 Ejecutado en: 0.022305965423584 
 Hora: 15:08:23

SELECT *
FROM "tmp_Turnos" 
 Ejecutado en: 0.018417835235596 
 Hora: 15:08:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090620517730713 
 Hora: 15:08:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0035707950592041 
 Hora: 15:08:23

execute p_admarh_getDatosEmpleado @Clave=2257 
 Ejecutado en: 0.018924951553345 
 Hora: 15:08:23

exec p_admarh_VerificaPeriodoCaptura 
 Ejecutado en: 0.014148950576782 
 Hora: 15:08:23

exec pa_Estudiantes_Consulta_Completa @Clave=2257 
 Ejecutado en: 0.024593114852905 
 Hora: 15:08:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096659660339355 
 Hora: 15:08:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010151863098145 
 Hora: 15:08:23

exec pa_Conyuges_Consulta @Clave=2257 
 Ejecutado en: 0.021544933319092 
 Hora: 15:08:23

exec p_admarh_VerificaPeriodoCaptura 
 Ejecutado en: 0.028620004653931 
 Hora: 15:08:23

exec p_admarh_EliminaDatosAntConyuge
                    @Clave = 2257 
 Ejecutado en: 0.020974159240723 
 Hora: 15:08:23

execute p_admarh_getDatosEmpleado @Clave=2257 
 Ejecutado en: 0.021499872207642 
 Hora: 15:08:23

exec p_admarh_VerificaPeriodoCaptura 
 Ejecutado en: 0.021040916442871 
 Hora: 15:08:23

exec pa_Conyuges_Consulta @Clave=2257 
 Ejecutado en: 0.023626089096069 
 Hora: 15:08:23

SELECT "Descripcion", "Id"
FROM "cat_ParentescoPareja" 
 Ejecutado en: 0.018931865692139 
 Hora: 15:08:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011445045471191 
 Hora: 15:08:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082180500030518 
 Hora: 15:08:26

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1908' 
 Ejecutado en: 0.017612934112549 
 Hora: 15:08:26

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.019697904586792 
 Hora: 15:08:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069580078125 
 Hora: 15:08:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079450607299805 
 Hora: 15:08:26

exec pa_getEmpleadosTodos  @Fecha = '17/02/2025',
										@PresupuestoId = '0002' 
 Ejecutado en: 0.02196216583252 
 Hora: 15:08:26

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024654865264893 
 Hora: 15:08:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074892044067383 
 Hora: 15:08:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096790790557861 
 Hora: 15:08:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069639682769775 
 Hora: 15:08:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071659088134766 
 Hora: 15:08:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074758529663086 
 Hora: 15:08:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009037971496582 
 Hora: 15:08:28

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.014580965042114 
 Hora: 15:08:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009207010269165 
 Hora: 15:08:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089459419250488 
 Hora: 15:08:29

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.011283874511719 
 Hora: 15:08:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074059963226318 
 Hora: 15:08:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012325048446655 
 Hora: 15:08:29

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1908' 
 Ejecutado en: 0.019278049468994 
 Hora: 15:08:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008012056350708 
 Hora: 15:08:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085899829864502 
 Hora: 15:08:29

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1908' 
 Ejecutado en: 0.020409107208252 
 Hora: 15:08:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074119567871094 
 Hora: 15:08:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073320865631104 
 Hora: 15:08:36

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.019856929779053 
 Hora: 15:08:36

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.021131992340088 
 Hora: 15:08:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017220020294189 
 Hora: 15:08:36

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014235019683838 
 Hora: 15:08:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088222026824951 
 Hora: 15:08:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0107741355896 
 Hora: 15:08:36

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.021520853042603 
 Hora: 15:08:36

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.019042015075684 
 Hora: 15:08:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020089149475098 
 Hora: 15:08:36

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015743017196655 
 Hora: 15:08:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075149536132812 
 Hora: 15:08:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0055861473083496 
 Hora: 15:08:38

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 1.4053888320923 
 Hora: 15:08:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074751377105713 
 Hora: 15:08:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075600147247314 
 Hora: 15:08:40

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 1.636214017868 
 Hora: 15:08:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065598487854004 
 Hora: 15:08:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075769424438477 
 Hora: 15:08:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090949535369873 
 Hora: 15:08:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012189865112305 
 Hora: 15:08:46

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022335052490234 
 Hora: 15:08:46

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.014758825302124 
 Hora: 15:08:46

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.012445211410522 
 Hora: 15:08:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080459117889404 
 Hora: 15:08:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080499649047852 
 Hora: 15:08:47

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.018474102020264 
 Hora: 15:08:47

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019803047180176 
 Hora: 15:08:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079030990600586 
 Hora: 15:08:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006688117980957 
 Hora: 15:08:49

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.017432928085327 
 Hora: 15:08:49

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.016654014587402 
 Hora: 15:08:49

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.021511077880859 
 Hora: 15:08:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080389976501465 
 Hora: 15:08:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064198970794678 
 Hora: 15:08:49

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024857044219971 
 Hora: 15:08:49

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.017806053161621 
 Hora: 15:08:49

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.018378019332886 
 Hora: 15:08:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009282112121582 
 Hora: 15:08:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073118209838867 
 Hora: 15:08:53

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.014798879623413 
 Hora: 15:08:53

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.016737937927246 
 Hora: 15:08:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093870162963867 
 Hora: 15:08:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010802030563354 
 Hora: 15:08:53

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.014425992965698 
 Hora: 15:08:53

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.019650936126709 
 Hora: 15:08:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075559616088867 
 Hora: 15:08:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068409442901611 
 Hora: 15:08:54

SELECT *
FROM "cat_TipoNomina"
WHERE "ACTIVO" = 1 
 Ejecutado en: 0.014647006988525 
 Hora: 15:08:54

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.020072937011719 
 Hora: 15:08:54

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.020771026611328 
 Hora: 15:08:54

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "EsPercepcion" = 1
AND "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.019711017608643 
 Hora: 15:08:54

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.017029047012329 
 Hora: 15:08:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073950290679932 
 Hora: 15:08:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010562896728516 
 Hora: 15:08:55

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.016894102096558 
 Hora: 15:08:55

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022901773452759 
 Hora: 15:08:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0045478343963623 
 Hora: 15:08:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085270404815674 
 Hora: 15:08:59

SELECT *
FROM "cat_TipoNomina"
WHERE "ACTIVO" = 1 
 Ejecutado en: 0.016433954238892 
 Hora: 15:08:59

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.018607139587402 
 Hora: 15:08:59

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.018557071685791 
 Hora: 15:08:59

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "EsPercepcion" = 1
AND "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.020601987838745 
 Hora: 15:08:59

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.016595125198364 
 Hora: 15:08:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083818435668945 
 Hora: 15:08:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097858905792236 
 Hora: 15:08:59

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.030122995376587 
 Hora: 15:08:59

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023726940155029 
 Hora: 15:08:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095300674438477 
 Hora: 15:08:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079619884490967 
 Hora: 15:19:25

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019603967666626 
 Hora: 15:19:25

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018784046173096 
 Hora: 15:19:25

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021600008010864 
 Hora: 15:19:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057990550994873 
 Hora: 15:19:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059900283813477 
 Hora: 15:19:27

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016536951065063 
 Hora: 15:19:27

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014472007751465 
 Hora: 15:19:27

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025461912155151 
 Hora: 15:19:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009861946105957 
 Hora: 15:19:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012331008911133 
 Hora: 15:28:52

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021016836166382 
 Hora: 15:28:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090539455413818 
 Hora: 15:28:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014928102493286 
 Hora: 15:28:55

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.037184000015259 
 Hora: 15:28:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011056900024414 
 Hora: 15:28:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011790037155151 
 Hora: 15:28:59

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019061088562012 
 Hora: 15:28:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0056421756744385 
 Hora: 15:28:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010968208312988 
 Hora: 15:29:02

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.035736083984375 
 Hora: 15:29:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014245986938477 
 Hora: 15:29:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075979232788086 
 Hora: 15:30:37

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020855188369751 
 Hora: 15:30:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094380378723145 
 Hora: 15:30:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068929195404053 
 Hora: 15:30:38

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.026721000671387 
 Hora: 15:30:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010725975036621 
 Hora: 15:30:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074949264526367 
 Hora: 15:30:46

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025280952453613 
 Hora: 15:30:46

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023772001266479 
 Hora: 15:30:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090298652648926 
 Hora: 15:30:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098390579223633 
 Hora: 15:30:56

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017987966537476 
 Hora: 15:30:56

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026979207992554 
 Hora: 15:30:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010564088821411 
 Hora: 15:30:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011363983154297 
 Hora: 15:34:19

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024456024169922 
 Hora: 15:34:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0052680969238281 
 Hora: 15:34:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014448881149292 
 Hora: 15:34:20

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.037570953369141 
 Hora: 15:34:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019976854324341 
 Hora: 15:34:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073249340057373 
 Hora: 15:34:27

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.01970100402832 
 Hora: 15:34:27

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.032002925872803 
 Hora: 15:34:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075678825378418 
 Hora: 15:34:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023051977157593 
 Hora: 15:34:31

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.029915809631348 
 Hora: 15:34:31

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.040604829788208 
 Hora: 15:34:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013201951980591 
 Hora: 15:34:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0056531429290771 
 Hora: 15:43:03

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024708986282349 
 Hora: 15:43:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099730491638184 
 Hora: 15:43:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082929134368896 
 Hora: 15:43:05

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.033959150314331 
 Hora: 15:43:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012310028076172 
 Hora: 15:43:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087199211120605 
 Hora: 15:43:09

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023162841796875 
 Hora: 15:43:09

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015583992004395 
 Hora: 15:43:09

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.019960880279541 
 Hora: 15:43:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010671138763428 
 Hora: 15:43:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084688663482666 
 Hora: 15:43:42

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018647193908691 
 Hora: 15:43:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072731971740723 
 Hora: 15:43:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012346029281616 
 Hora: 15:43:42

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021934032440186 
 Hora: 15:43:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065710544586182 
 Hora: 15:43:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093820095062256 
 Hora: 15:43:45

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021660089492798 
 Hora: 15:43:45

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.023914813995361 
 Hora: 15:43:45

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.01780891418457 
 Hora: 15:43:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098879337310791 
 Hora: 15:43:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010854005813599 
 Hora: 15:43:51

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018166065216064 
 Hora: 15:43:51

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020276069641113 
 Hora: 15:43:51

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025874853134155 
 Hora: 15:43:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010875940322876 
 Hora: 15:43:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088450908660889 
 Hora: 15:45:45

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023597002029419 
 Hora: 15:45:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059270858764648 
 Hora: 15:45:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013143062591553 
 Hora: 15:45:47

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.03033709526062 
 Hora: 15:45:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081579685211182 
 Hora: 15:45:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019222021102905 
 Hora: 15:45:54

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024579048156738 
 Hora: 15:45:54

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.02658486366272 
 Hora: 15:45:54

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02894401550293 
 Hora: 15:45:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00636887550354 
 Hora: 15:45:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011111974716187 
 Hora: 15:46:43

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020292997360229 
 Hora: 15:46:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012750864028931 
 Hora: 15:46:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097858905792236 
 Hora: 15:46:45

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028291940689087 
 Hora: 15:46:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014074087142944 
 Hora: 15:46:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010039806365967 
 Hora: 15:46:52

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020302057266235 
 Hora: 15:46:52

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.024451971054077 
 Hora: 15:46:52

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.028802871704102 
 Hora: 15:46:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010068893432617 
 Hora: 15:46:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010535955429077 
 Hora: 15:46:56

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.040300130844116 
 Hora: 15:46:56

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.026075124740601 
 Hora: 15:46:56

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.041283130645752 
 Hora: 15:46:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013175964355469 
 Hora: 15:46:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061638355255127 
 Hora: 15:47:39

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024016141891479 
 Hora: 15:47:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060501098632812 
 Hora: 15:47:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098400115966797 
 Hora: 15:47:41

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.017674922943115 
 Hora: 15:47:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014461994171143 
 Hora: 15:47:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064260959625244 
 Hora: 15:47:46

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024445056915283 
 Hora: 15:47:46

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.022410869598389 
 Hora: 15:47:46

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026609897613525 
 Hora: 15:47:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061111450195312 
 Hora: 15:47:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084199905395508 
 Hora: 15:47:58

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016956090927124 
 Hora: 15:47:58

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017560005187988 
 Hora: 15:47:58

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021871089935303 
 Hora: 15:47:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096540451049805 
 Hora: 15:47:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093159675598145 
 Hora: 15:48:00

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.032095193862915 
 Hora: 15:48:00

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.031068086624146 
 Hora: 15:48:00

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.031361103057861 
 Hora: 15:48:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012227058410645 
 Hora: 15:48:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016034841537476 
 Hora: 15:48:04

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017377853393555 
 Hora: 15:48:04

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.010958909988403 
 Hora: 15:48:04

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024593114852905 
 Hora: 15:48:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060889720916748 
 Hora: 15:48:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0056438446044922 
 Hora: 15:48:10

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015424013137817 
 Hora: 15:48:10

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.026262044906616 
 Hora: 15:48:10

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.014392852783203 
 Hora: 15:48:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082330703735352 
 Hora: 15:48:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012516021728516 
 Hora: 15:48:16

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.013890027999878 
 Hora: 15:48:16

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016564846038818 
 Hora: 15:48:16

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024460077285767 
 Hora: 15:48:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070400238037109 
 Hora: 15:48:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070090293884277 
 Hora: 15:48:20

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021095037460327 
 Hora: 15:48:20

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019620895385742 
 Hora: 15:48:20

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.031474113464355 
 Hora: 15:48:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097110271453857 
 Hora: 15:48:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078120231628418 
 Hora: 15:48:24

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018265008926392 
 Hora: 15:48:24

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016445875167847 
 Hora: 15:48:24

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.040584087371826 
 Hora: 15:48:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080411434173584 
 Hora: 15:48:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068562030792236 
 Hora: 16:30:56

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.015417098999023 
 Hora: 16:30:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01042914390564 
 Hora: 16:30:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011915922164917 
 Hora: 16:30:56

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.018815040588379 
 Hora: 16:30:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010353088378906 
 Hora: 16:30:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087859630584717 
 Hora: 16:31:53

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020289897918701 
 Hora: 16:31:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013128042221069 
 Hora: 16:31:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014679908752441 
 Hora: 16:31:56

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.03947114944458 
 Hora: 16:31:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011296033859253 
 Hora: 16:31:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071620941162109 
 Hora: 16:34:23

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022636890411377 
 Hora: 16:34:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016085147857666 
 Hora: 16:34:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011848211288452 
 Hora: 16:34:24

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.024111032485962 
 Hora: 16:34:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095000267028809 
 Hora: 16:34:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085380077362061 
 Hora: 16:38:25

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020941019058228 
 Hora: 16:38:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085048675537109 
 Hora: 16:38:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014456987380981 
 Hora: 16:38:27

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028611898422241 
 Hora: 16:38:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011181831359863 
 Hora: 16:38:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009800910949707 
 Hora: 16:39:41

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.026521921157837 
 Hora: 16:39:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082788467407227 
 Hora: 16:39:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012082815170288 
 Hora: 16:39:43

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.039715051651001 
 Hora: 16:39:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013742923736572 
 Hora: 16:39:43

