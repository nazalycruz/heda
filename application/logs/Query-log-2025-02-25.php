<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010008096694946 
 Hora: 08:12:41

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02162504196167 
 Hora: 08:12:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089788436889648 
 Hora: 08:12:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070340633392334 
 Hora: 08:12:43

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023627996444702 
 Hora: 08:12:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066180229187012 
 Hora: 08:12:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.081370115280151 
 Hora: 08:13:06

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.14904999732971 
 Hora: 08:13:06

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.14044785499573 
 Hora: 08:13:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.081568956375122 
 Hora: 08:13:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.063375949859619 
 Hora: 08:13:08

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.10349893569946 
 Hora: 08:13:08

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.095154047012329 
 Hora: 08:13:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.050879955291748 
 Hora: 08:13:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010360956192017 
 Hora: 08:14:59

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019283056259155 
 Hora: 08:14:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075440406799316 
 Hora: 08:14:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011138916015625 
 Hora: 08:15:01

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.018655061721802 
 Hora: 08:15:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084130764007568 
 Hora: 08:15:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01018214225769 
 Hora: 08:15:05

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.025506973266602 
 Hora: 08:15:05

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020151138305664 
 Hora: 08:15:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011680126190186 
 Hora: 08:15:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068099498748779 
 Hora: 08:15:07

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016798973083496 
 Hora: 08:15:07

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019691228866577 
 Hora: 08:15:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061459541320801 
 Hora: 08:15:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081870555877686 
 Hora: 08:15:07

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.04289698600769 
 Hora: 08:15:07

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02435302734375 
 Hora: 08:15:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0052390098571777 
 Hora: 08:15:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092360973358154 
 Hora: 08:15:10

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.035785913467407 
 Hora: 08:15:10

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025131940841675 
 Hora: 08:15:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060200691223145 
 Hora: 08:15:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086040496826172 
 Hora: 08:15:43

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02271294593811 
 Hora: 08:15:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068469047546387 
 Hora: 08:15:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089600086212158 
 Hora: 08:15:46

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.019241809844971 
 Hora: 08:15:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008188009262085 
 Hora: 08:15:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014603137969971 
 Hora: 08:15:50

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.028775930404663 
 Hora: 08:15:50

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.0316481590271 
 Hora: 08:15:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016890048980713 
 Hora: 08:15:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015028953552246 
 Hora: 08:15:51

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.056847095489502 
 Hora: 08:15:51

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.034782886505127 
 Hora: 08:15:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078649520874023 
 Hora: 08:15:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010202884674072 
 Hora: 08:16:51

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022441864013672 
 Hora: 08:16:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073819160461426 
 Hora: 08:16:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015339136123657 
 Hora: 08:16:54

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028045177459717 
 Hora: 08:16:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010977983474731 
 Hora: 08:16:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01443886756897 
 Hora: 08:16:58

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.026570081710815 
 Hora: 08:16:58

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.02551794052124 
 Hora: 08:16:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01237678527832 
 Hora: 08:16:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026981830596924 
 Hora: 08:17:00

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.061154127120972 
 Hora: 08:17:00

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.062398910522461 
 Hora: 08:17:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028548002243042 
 Hora: 08:17:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007681131362915 
 Hora: 08:18:25

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023361921310425 
 Hora: 08:18:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089669227600098 
 Hora: 08:18:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094878673553467 
 Hora: 08:18:29

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028202056884766 
 Hora: 08:18:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068249702453613 
 Hora: 08:18:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093989372253418 
 Hora: 08:18:32

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015408992767334 
 Hora: 08:18:32

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015029907226562 
 Hora: 08:18:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079669952392578 
 Hora: 08:18:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.036060094833374 
 Hora: 08:18:33

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.1053729057312 
 Hora: 08:18:33

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.11220216751099 
 Hora: 08:18:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.043283939361572 
 Hora: 08:18:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010235071182251 
 Hora: 08:18:45

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021975994110107 
 Hora: 08:18:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010586023330688 
 Hora: 08:18:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010808944702148 
 Hora: 08:18:47

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020744800567627 
 Hora: 08:18:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074021816253662 
 Hora: 08:18:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087568759918213 
 Hora: 08:18:55

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014227151870728 
 Hora: 08:18:55

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016762971878052 
 Hora: 08:18:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.004828929901123 
 Hora: 08:18:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011887073516846 
 Hora: 08:18:58

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.054616928100586 
 Hora: 08:18:58

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021906852722168 
 Hora: 08:18:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097339153289795 
 Hora: 08:18:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019462108612061 
 Hora: 08:29:45

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.034652948379517 
 Hora: 08:29:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021192073822021 
 Hora: 08:29:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014294147491455 
 Hora: 08:29:47

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.039509057998657 
 Hora: 08:29:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016654968261719 
 Hora: 08:29:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084669589996338 
 Hora: 08:29:51

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022293090820312 
 Hora: 08:29:51

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021354913711548 
 Hora: 08:29:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0054981708526611 
 Hora: 08:29:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010478973388672 
 Hora: 08:30:32

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.030681848526001 
 Hora: 08:30:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006695032119751 
 Hora: 08:30:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02143406867981 
 Hora: 08:30:34

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.037161827087402 
 Hora: 08:30:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027378082275391 
 Hora: 08:30:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063910484313965 
 Hora: 08:30:43

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020586967468262 
 Hora: 08:30:43

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021632194519043 
 Hora: 08:30:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074172019958496 
 Hora: 08:30:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065648555755615 
 Hora: 08:30:45

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.025427103042603 
 Hora: 08:30:45

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.02592396736145 
 Hora: 08:30:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077030658721924 
 Hora: 08:30:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093269348144531 
 Hora: 08:30:46

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.041307926177979 
 Hora: 08:30:46

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.028159141540527 
 Hora: 08:30:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009044885635376 
 Hora: 08:30:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01425313949585 
 Hora: 08:30:47

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.050410032272339 
 Hora: 08:30:47

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.047538042068481 
 Hora: 08:30:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016499996185303 
 Hora: 08:30:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018418788909912 
 Hora: 08:33:27

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021606922149658 
 Hora: 08:33:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010689973831177 
 Hora: 08:33:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008246898651123 
 Hora: 08:33:29

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023013114929199 
 Hora: 08:33:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062949657440186 
 Hora: 08:33:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062160491943359 
 Hora: 08:33:38

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018416881561279 
 Hora: 08:33:38

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018883943557739 
 Hora: 08:33:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085878372192383 
 Hora: 08:33:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097429752349854 
 Hora: 08:33:40

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.043313026428223 
 Hora: 08:33:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026834011077881 
 Hora: 08:33:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057151317596436 
 Hora: 08:33:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015766859054565 
 Hora: 08:57:19

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.050496816635132 
 Hora: 08:57:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094590187072754 
 Hora: 08:57:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061149597167969 
 Hora: 08:57:21

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022296905517578 
 Hora: 08:57:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058598518371582 
 Hora: 08:57:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085330009460449 
 Hora: 08:57:24

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019780158996582 
 Hora: 08:57:24

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014549016952515 
 Hora: 08:57:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.005648136138916 
 Hora: 08:57:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077071189880371 
 Hora: 08:57:26

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.039806127548218 
 Hora: 08:57:26

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020193099975586 
 Hora: 08:57:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007220983505249 
 Hora: 08:57:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0054469108581543 
 Hora: 08:58:01

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.016494989395142 
 Hora: 08:58:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080320835113525 
 Hora: 08:58:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073840618133545 
 Hora: 08:58:02

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.019525051116943 
 Hora: 08:58:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057229995727539 
 Hora: 08:58:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0056300163269043 
 Hora: 08:58:06

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.0140221118927 
 Hora: 08:58:06

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.011933088302612 
 Hora: 08:58:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093228816986084 
 Hora: 08:58:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093190670013428 
 Hora: 08:58:07

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.040438890457153 
 Hora: 08:58:07

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026439189910889 
 Hora: 08:58:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0056500434875488 
 Hora: 08:58:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099210739135742 
 Hora: 08:59:30

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017046928405762 
 Hora: 08:59:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064408779144287 
 Hora: 08:59:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090799331665039 
 Hora: 08:59:33

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021100997924805 
 Hora: 08:59:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075139999389648 
 Hora: 08:59:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064191818237305 
 Hora: 08:59:37

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014447927474976 
 Hora: 08:59:37

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019170999526978 
 Hora: 08:59:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0041990280151367 
 Hora: 08:59:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095388889312744 
 Hora: 08:59:38

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.042111873626709 
 Hora: 08:59:38

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021636009216309 
 Hora: 08:59:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062198638916016 
 Hora: 08:59:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071799755096436 
 Hora: 09:03:20

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.01609992980957 
 Hora: 09:03:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085299015045166 
 Hora: 09:03:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092449188232422 
 Hora: 09:03:24

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.017906188964844 
 Hora: 09:03:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096709728240967 
 Hora: 09:03:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066390037536621 
 Hora: 09:03:47

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.010877132415771 
 Hora: 09:03:47

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017421960830688 
 Hora: 09:03:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099599361419678 
 Hora: 09:03:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078110694885254 
 Hora: 09:03:50

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.038290977478027 
 Hora: 09:03:50

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026031970977783 
 Hora: 09:03:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085248947143555 
 Hora: 09:03:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067138671875 
 Hora: 09:04:03

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019598007202148 
 Hora: 09:04:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089349746704102 
 Hora: 09:04:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080180168151855 
 Hora: 09:04:05

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.02567195892334 
 Hora: 09:04:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082519054412842 
 Hora: 09:04:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079278945922852 
 Hora: 09:04:09

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.012591123580933 
 Hora: 09:04:09

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015751123428345 
 Hora: 09:04:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010469913482666 
 Hora: 09:04:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088868141174316 
 Hora: 09:04:11

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.038539171218872 
 Hora: 09:04:11

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02275013923645 
 Hora: 09:04:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0044128894805908 
 Hora: 09:04:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066461563110352 
 Hora: 09:20:51

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019394159317017 
 Hora: 09:20:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010510921478271 
 Hora: 09:20:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010624885559082 
 Hora: 09:20:53

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025007009506226 
 Hora: 09:20:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066249370574951 
 Hora: 09:20:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069317817687988 
 Hora: 09:21:03

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017009019851685 
 Hora: 09:21:03

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014188051223755 
 Hora: 09:21:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074090957641602 
 Hora: 09:21:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00832200050354 
 Hora: 09:21:06

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.041867971420288 
 Hora: 09:21:06

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.029614925384521 
 Hora: 09:21:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088331699371338 
 Hora: 09:21:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010377168655396 
 Hora: 09:21:38

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.016956090927124 
 Hora: 09:21:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078780651092529 
 Hora: 09:21:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01045298576355 
 Hora: 09:21:41

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025646209716797 
 Hora: 09:21:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090680122375488 
 Hora: 09:21:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058698654174805 
 Hora: 09:22:49

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018680095672607 
 Hora: 09:22:49

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018625020980835 
 Hora: 09:22:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071790218353271 
 Hora: 09:22:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079638957977295 
 Hora: 09:22:51

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.039618015289307 
 Hora: 09:22:51

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022863149642944 
 Hora: 09:22:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0041329860687256 
 Hora: 09:22:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080270767211914 
 Hora: 09:27:58

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.015883922576904 
 Hora: 09:27:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010654926300049 
 Hora: 09:27:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008336067199707 
 Hora: 09:28:00

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022477149963379 
 Hora: 09:28:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092580318450928 
 Hora: 09:28:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080749988555908 
 Hora: 09:28:03

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019655227661133 
 Hora: 09:28:03

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.010712862014771 
 Hora: 09:28:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080008506774902 
 Hora: 09:28:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089809894561768 
 Hora: 09:28:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070571899414062 
 Hora: 09:28:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082128047943115 
 Hora: 09:37:25

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.016583919525146 
 Hora: 09:37:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011140108108521 
 Hora: 09:37:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069060325622559 
 Hora: 09:37:27

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021619081497192 
 Hora: 09:37:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012015819549561 
 Hora: 09:37:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086719989776611 
 Hora: 09:37:30

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.010929107666016 
 Hora: 09:37:30

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.013803005218506 
 Hora: 09:37:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067219734191895 
 Hora: 09:37:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064749717712402 
 Hora: 09:37:31

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.036055088043213 
 Hora: 09:37:31

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.019973039627075 
 Hora: 09:37:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083889961242676 
 Hora: 09:37:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091750621795654 
 Hora: 09:49:33

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02728009223938 
 Hora: 09:49:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090210437774658 
 Hora: 09:49:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015291929244995 
 Hora: 09:49:36

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.041501998901367 
 Hora: 09:49:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013216972351074 
 Hora: 09:49:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011045932769775 
 Hora: 09:49:39

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024320840835571 
 Hora: 09:49:39

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015475988388062 
 Hora: 09:49:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010856866836548 
 Hora: 09:49:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014291048049927 
 Hora: 09:49:40

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.042971134185791 
 Hora: 09:49:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.039382934570312 
 Hora: 09:49:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012590169906616 
 Hora: 09:49:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01108980178833 
 Hora: 09:49:42

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.033987045288086 
 Hora: 09:49:42

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.02935004234314 
 Hora: 09:49:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012164831161499 
 Hora: 09:49:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009753942489624 
 Hora: 09:49:44

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.036687850952148 
 Hora: 09:49:44

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022739887237549 
 Hora: 09:49:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010770082473755 
 Hora: 09:49:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01479697227478 
 Hora: 10:08:43

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.040324926376343 
 Hora: 10:08:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086610317230225 
 Hora: 10:08:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019948959350586 
 Hora: 10:08:47

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.046092987060547 
 Hora: 10:08:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013046026229858 
 Hora: 10:08:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068039894104004 
 Hora: 10:09:16

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015959978103638 
 Hora: 10:09:16

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.013650894165039 
 Hora: 10:09:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095939636230469 
 Hora: 10:09:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014143943786621 
 Hora: 10:09:18

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.040321111679077 
 Hora: 10:09:18

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.031761884689331 
 Hora: 10:09:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099020004272461 
 Hora: 10:09:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014209985733032 
 Hora: 10:16:07

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018486976623535 
 Hora: 10:16:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012255907058716 
 Hora: 10:16:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012814044952393 
 Hora: 10:16:10

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.044220924377441 
 Hora: 10:16:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015215873718262 
 Hora: 10:16:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082080364227295 
 Hora: 10:16:12

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021502017974854 
 Hora: 10:16:12

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.0173180103302 
 Hora: 10:16:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011386156082153 
 Hora: 10:16:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022693872451782 
 Hora: 10:16:14

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.098680973052979 
 Hora: 10:16:14

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.053710222244263 
 Hora: 10:16:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013711214065552 
 Hora: 10:16:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01018500328064 
 Hora: 10:58:56

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.038753032684326 
 Hora: 10:58:56

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.061212062835693 
 Hora: 10:58:56

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.016588926315308 
 Hora: 10:58:56

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='16/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.017904996871948 
 Hora: 10:58:56

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1910'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 1.269590139389 
 Hora: 10:58:56

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.019349813461304 
 Hora: 10:58:56

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.013085126876831 
 Hora: 10:58:56

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.019593954086304 
 Hora: 10:58:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092430114746094 
 Hora: 10:58:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011705875396729 
 Hora: 10:58:59

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.089278936386108 
 Hora: 10:58:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010251998901367 
 Hora: 10:58:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074560642242432 
 Hora: 10:59:02

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020342111587524 
 Hora: 10:59:02

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.045918941497803 
 Hora: 10:59:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074989795684814 
 Hora: 10:59:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069410800933838 
 Hora: 11:00:08

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021218061447144 
 Hora: 11:00:08

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.018687009811401 
 Hora: 11:00:08

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.018348932266235 
 Hora: 11:00:08

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='16/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.020344018936157 
 Hora: 11:00:08

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1910'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.076780080795288 
 Hora: 11:00:08

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.019195079803467 
 Hora: 11:00:08

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.017657995223999 
 Hora: 11:00:08

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.013429164886475 
 Hora: 11:00:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062930583953857 
 Hora: 11:00:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091159343719482 
 Hora: 11:00:09

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.018657922744751 
 Hora: 11:00:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089170932769775 
 Hora: 11:00:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096759796142578 
 Hora: 11:00:12

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018584966659546 
 Hora: 11:00:12

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016477108001709 
 Hora: 11:00:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080699920654297 
 Hora: 11:00:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093240737915039 
 Hora: 11:00:43

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021497011184692 
 Hora: 11:00:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076901912689209 
 Hora: 11:00:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010823965072632 
 Hora: 11:00:47

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021975040435791 
 Hora: 11:00:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007375955581665 
 Hora: 11:00:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010900974273682 
 Hora: 11:01:10

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016443967819214 
 Hora: 11:01:10

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014055013656616 
 Hora: 11:01:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097281932830811 
 Hora: 11:01:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007551908493042 
 Hora: 11:03:43

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.031875848770142 
 Hora: 11:03:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024030923843384 
 Hora: 11:03:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007969856262207 
 Hora: 11:03:46

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.024033069610596 
 Hora: 11:03:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006497859954834 
 Hora: 11:03:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011279106140137 
 Hora: 11:03:49

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021746873855591 
 Hora: 11:03:49

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014983177185059 
 Hora: 11:03:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010738134384155 
 Hora: 11:03:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011825084686279 
 Hora: 11:03:51

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.08457088470459 
 Hora: 11:03:51

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.085990190505981 
 Hora: 11:03:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012593030929565 
 Hora: 11:03:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087180137634277 
 Hora: 11:08:32

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020503997802734 
 Hora: 11:08:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0052611827850342 
 Hora: 11:08:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0052220821380615 
 Hora: 11:08:35

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.027044057846069 
 Hora: 11:08:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.005993127822876 
 Hora: 11:08:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076761245727539 
 Hora: 11:08:38

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019840955734253 
 Hora: 11:08:38

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.01900315284729 
 Hora: 11:08:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096151828765869 
 Hora: 11:08:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099411010742188 
 Hora: 11:08:40

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.023591995239258 
 Hora: 11:08:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.030455112457275 
 Hora: 11:08:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011149883270264 
 Hora: 11:08:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073239803314209 
 Hora: 11:08:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075428485870361 
 Hora: 11:08:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011477947235107 
 Hora: 11:09:55

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.016175031661987 
 Hora: 11:09:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0049781799316406 
 Hora: 11:09:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090467929840088 
 Hora: 11:09:57

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020165920257568 
 Hora: 11:09:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006850004196167 
 Hora: 11:09:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058739185333252 
 Hora: 11:10:00

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.01484203338623 
 Hora: 11:10:00

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018318891525269 
 Hora: 11:10:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082881450653076 
 Hora: 11:10:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0035958290100098 
 Hora: 11:10:02

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.041599988937378 
 Hora: 11:10:02

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022701025009155 
 Hora: 11:10:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087051391601562 
 Hora: 11:10:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011377096176147 
 Hora: 11:10:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01216197013855 
 Hora: 11:10:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071070194244385 
 Hora: 11:11:35

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019224882125854 
 Hora: 11:11:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095179080963135 
 Hora: 11:11:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092799663543701 
 Hora: 11:11:38

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.019445896148682 
 Hora: 11:11:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067760944366455 
 Hora: 11:11:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081849098205566 
 Hora: 11:11:42

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015439987182617 
 Hora: 11:11:42

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020954132080078 
 Hora: 11:11:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070819854736328 
 Hora: 11:11:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012404918670654 
 Hora: 11:11:44

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015059947967529 
 Hora: 11:11:44

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016973972320557 
 Hora: 11:11:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086369514465332 
 Hora: 11:11:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094001293182373 
 Hora: 11:11:45

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.022181034088135 
 Hora: 11:11:45

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022250890731812 
 Hora: 11:11:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094921588897705 
 Hora: 11:11:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078160762786865 
 Hora: 11:11:46

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.01944899559021 
 Hora: 11:11:46

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.018173933029175 
 Hora: 11:11:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062689781188965 
 Hora: 11:11:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011909008026123 
 Hora: 11:11:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068659782409668 
 Hora: 11:11:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099279880523682 
 Hora: 11:20:00

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='106' 
 Ejecutado en: 0.071743011474609 
 Hora: 11:20:00

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.035140037536621 
 Hora: 11:20:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011987924575806 
 Hora: 11:20:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013039112091064 
 Hora: 11:20:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092220306396484 
 Hora: 11:20:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090150833129883 
 Hora: 11:20:58

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019081830978394 
 Hora: 11:20:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065350532531738 
 Hora: 11:20:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092289447784424 
 Hora: 11:21:00

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020534992218018 
 Hora: 11:21:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065431594848633 
 Hora: 11:21:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009152889251709 
 Hora: 11:21:07

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019572973251343 
 Hora: 11:21:07

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017943143844604 
 Hora: 11:21:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073671340942383 
 Hora: 11:21:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088200569152832 
 Hora: 11:21:09

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.025311231613159 
 Hora: 11:21:09

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02153205871582 
 Hora: 11:21:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062201023101807 
 Hora: 11:21:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01010799407959 
 Hora: 11:21:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073449611663818 
 Hora: 11:21:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070841312408447 
 Hora: 11:22:11

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.016869068145752 
 Hora: 11:22:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093698501586914 
 Hora: 11:22:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015222072601318 
 Hora: 11:22:13

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022441864013672 
 Hora: 11:22:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070021152496338 
 Hora: 11:22:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074119567871094 
 Hora: 11:22:19

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015774011611938 
 Hora: 11:22:19

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016667127609253 
 Hora: 11:22:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071110725402832 
 Hora: 11:22:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093491077423096 
 Hora: 11:22:21

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.019187927246094 
 Hora: 11:22:21

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023876190185547 
 Hora: 11:22:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009627103805542 
 Hora: 11:22:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088608264923096 
 Hora: 11:22:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010305166244507 
 Hora: 11:22:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071630477905273 
 Hora: 11:27:22

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02466893196106 
 Hora: 11:27:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087270736694336 
 Hora: 11:27:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014086008071899 
 Hora: 11:27:25

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028707981109619 
 Hora: 11:27:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012781143188477 
 Hora: 11:27:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01117992401123 
 Hora: 11:27:29

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.013816118240356 
 Hora: 11:27:29

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014374017715454 
 Hora: 11:27:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012342929840088 
 Hora: 11:27:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090200901031494 
 Hora: 11:27:50

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.033169031143188 
 Hora: 11:27:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011101961135864 
 Hora: 11:27:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02223801612854 
 Hora: 11:27:53

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.029729127883911 
 Hora: 11:27:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012223958969116 
 Hora: 11:27:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010190010070801 
 Hora: 11:27:57

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019060850143433 
 Hora: 11:27:57

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019676923751831 
 Hora: 11:27:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0034501552581787 
 Hora: 11:27:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01437520980835 
 Hora: 11:27:59

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.030591011047363 
 Hora: 11:27:59

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.040606021881104 
 Hora: 11:27:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01991605758667 
 Hora: 11:27:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01192307472229 
 Hora: 11:30:40

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019513845443726 
 Hora: 11:30:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099468231201172 
 Hora: 11:30:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0042281150817871 
 Hora: 11:30:43

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.032557964324951 
 Hora: 11:30:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011786937713623 
 Hora: 11:30:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075039863586426 
 Hora: 11:30:50

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.012454986572266 
 Hora: 11:30:50

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.023071050643921 
 Hora: 11:30:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010112047195435 
 Hora: 11:30:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015172958374023 
 Hora: 11:30:52

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = 958,
						@Tomadas = 0,
						@IdDependencia =274 
 Ejecutado en: 0.037695169448853 
 Hora: 11:30:52

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.032088041305542 
 Hora: 11:30:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010290861129761 
 Hora: 11:30:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012918949127197 
 Hora: 11:30:59

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = 958,
						@Tomadas = 0,
						@IdDependencia =274 
 Ejecutado en: 0.020848035812378 
 Hora: 11:30:59

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024487018585205 
 Hora: 11:30:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059950351715088 
 Hora: 11:30:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0056278705596924 
 Hora: 11:31:29

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021684885025024 
 Hora: 11:31:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014484882354736 
 Hora: 11:31:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010025024414062 
 Hora: 11:31:32

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.030913114547729 
 Hora: 11:31:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008430004119873 
 Hora: 11:31:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012894868850708 
 Hora: 11:31:38

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020658016204834 
 Hora: 11:31:38

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016245126724243 
 Hora: 11:31:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009788990020752 
 Hora: 11:31:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012776136398315 
 Hora: 11:31:40

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = 958,
						@Tomadas = 0,
						@IdDependencia =274 
 Ejecutado en: 0.038641929626465 
 Hora: 11:31:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.033188819885254 
 Hora: 11:31:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012107849121094 
 Hora: 11:31:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010662078857422 
 Hora: 11:31:43

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = 958,
						@Tomadas = 0,
						@IdDependencia =274 
 Ejecutado en: 0.023606061935425 
 Hora: 11:31:43

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02006983757019 
 Hora: 11:31:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089499950408936 
 Hora: 11:31:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088109970092773 
 Hora: 11:32:18

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022417068481445 
 Hora: 11:32:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01397705078125 
 Hora: 11:32:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016242980957031 
 Hora: 11:32:21

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.030593872070312 
 Hora: 11:32:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072650909423828 
 Hora: 11:32:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011399030685425 
 Hora: 11:32:25

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.02074408531189 
 Hora: 11:32:25

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.030776023864746 
 Hora: 11:32:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067000389099121 
 Hora: 11:32:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.082834005355835 
 Hora: 11:32:27

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = 958,
						@Tomadas = 0,
						@IdDependencia =274 
 Ejecutado en: 0.034882068634033 
 Hora: 11:32:27

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023897886276245 
 Hora: 11:32:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012724161148071 
 Hora: 11:32:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011073112487793 
 Hora: 11:34:33

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020555019378662 
 Hora: 11:34:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063581466674805 
 Hora: 11:34:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.044026851654053 
 Hora: 11:34:37

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021039962768555 
 Hora: 11:34:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057809352874756 
 Hora: 11:34:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012439012527466 
 Hora: 11:34:43

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017800807952881 
 Hora: 11:34:43

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018522024154663 
 Hora: 11:34:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068371295928955 
 Hora: 11:34:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01479697227478 
 Hora: 11:34:45

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = 958,
						@Tomadas = 0,
						@IdDependencia =274 
 Ejecutado en: 0.032963037490845 
 Hora: 11:34:45

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.039191007614136 
 Hora: 11:34:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013881921768188 
 Hora: 11:34:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01244592666626 
 Hora: 11:34:50

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = 958,
						@Tomadas = 0,
						@IdDependencia =274 
 Ejecutado en: 0.035640001296997 
 Hora: 11:34:50

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025599956512451 
 Hora: 11:34:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074408054351807 
 Hora: 11:34:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010512113571167 
 Hora: 11:37:02

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022905111312866 
 Hora: 11:37:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098249912261963 
 Hora: 11:37:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089559555053711 
 Hora: 11:37:04

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.02402400970459 
 Hora: 11:37:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022876977920532 
 Hora: 11:37:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014767169952393 
 Hora: 11:37:09

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.033722162246704 
 Hora: 11:37:09

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.043091058731079 
 Hora: 11:37:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015851974487305 
 Hora: 11:37:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.030250787734985 
 Hora: 11:37:11

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024117946624756 
 Hora: 11:37:11

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.023882865905762 
 Hora: 11:37:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010303974151611 
 Hora: 11:37:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011632919311523 
 Hora: 11:37:11

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = 958,
						@Tomadas = 0,
						@IdDependencia =274 
 Ejecutado en: 0.027059078216553 
 Hora: 11:37:11

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038161039352417 
 Hora: 11:37:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011663913726807 
 Hora: 11:37:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084989070892334 
 Hora: 11:37:14

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = 958,
						@Tomadas = 0,
						@IdDependencia =274 
 Ejecutado en: 0.033902883529663 
 Hora: 11:37:14

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.034914970397949 
 Hora: 11:37:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01580286026001 
 Hora: 11:37:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093998908996582 
 Hora: 11:39:35

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024134874343872 
 Hora: 11:39:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080521106719971 
 Hora: 11:39:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016165018081665 
 Hora: 11:39:38

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.024899005889893 
 Hora: 11:39:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011645078659058 
 Hora: 11:39:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012341976165771 
 Hora: 11:39:41

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022399187088013 
 Hora: 11:39:41

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.02347207069397 
 Hora: 11:39:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086500644683838 
 Hora: 11:39:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024077177047729 
 Hora: 11:39:44

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.044130802154541 
 Hora: 11:39:44

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02656102180481 
 Hora: 11:39:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01318097114563 
 Hora: 11:39:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014675140380859 
 Hora: 11:40:05

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.026715040206909 
 Hora: 11:40:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014011859893799 
 Hora: 11:40:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010374069213867 
 Hora: 11:40:07

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.037153959274292 
 Hora: 11:40:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028913974761963 
 Hora: 11:40:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010268926620483 
 Hora: 11:40:15

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019590139389038 
 Hora: 11:40:15

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.029114961624146 
 Hora: 11:40:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086450576782227 
 Hora: 11:40:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010915040969849 
 Hora: 11:40:17

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.024657011032104 
 Hora: 11:40:17

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.040030002593994 
 Hora: 11:40:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010580062866211 
 Hora: 11:40:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010698080062866 
 Hora: 11:40:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085852146148682 
 Hora: 11:40:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008836030960083 
 Hora: 11:43:07

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020602941513062 
 Hora: 11:43:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010312080383301 
 Hora: 11:43:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014843940734863 
 Hora: 11:43:09

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.026548147201538 
 Hora: 11:43:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019207000732422 
 Hora: 11:43:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081071853637695 
 Hora: 11:43:13

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020064115524292 
 Hora: 11:43:13

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018851041793823 
 Hora: 11:43:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079720020294189 
 Hora: 11:43:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065948963165283 
 Hora: 11:43:15

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.022320032119751 
 Hora: 11:43:15

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.0396728515625 
 Hora: 11:43:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019128084182739 
 Hora: 11:43:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073280334472656 
 Hora: 11:43:18

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = NULL,
						@Tomadas = 0,
						@IdDependencia =NULL 
 Ejecutado en: 0.017220973968506 
 Hora: 11:43:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079119205474854 
 Hora: 11:43:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072429180145264 
 Hora: 11:43:51

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022247076034546 
 Hora: 11:43:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010771989822388 
 Hora: 11:43:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013650894165039 
 Hora: 11:43:54

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.02738094329834 
 Hora: 11:43:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013254165649414 
 Hora: 11:43:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060501098632812 
 Hora: 11:44:01

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014497995376587 
 Hora: 11:44:01

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016263961791992 
 Hora: 11:44:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084450244903564 
 Hora: 11:44:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020800113677979 
 Hora: 11:44:03

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.036869049072266 
 Hora: 11:44:03

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018571853637695 
 Hora: 11:44:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012852191925049 
 Hora: 11:44:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01235294342041 
 Hora: 11:44:04

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.032968997955322 
 Hora: 11:44:04

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.030584096908569 
 Hora: 11:44:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012971878051758 
 Hora: 11:44:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098190307617188 
 Hora: 11:44:06

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.038970947265625 
 Hora: 11:44:06

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.034311056137085 
 Hora: 11:44:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014333963394165 
 Hora: 11:44:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008051872253418 
 Hora: 11:46:54

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021477937698364 
 Hora: 11:46:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088579654693604 
 Hora: 11:46:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019901990890503 
 Hora: 11:46:57

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.030894994735718 
 Hora: 11:46:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010711908340454 
 Hora: 11:46:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095300674438477 
 Hora: 11:47:00

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.034470081329346 
 Hora: 11:47:00

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.027312040328979 
 Hora: 11:47:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010822057723999 
 Hora: 11:47:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012188196182251 
 Hora: 11:47:03

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.024259090423584 
 Hora: 11:47:03

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021514892578125 
 Hora: 11:47:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014405965805054 
 Hora: 11:47:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066549777984619 
 Hora: 11:47:22

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = NULL,
						@Tomadas = 0,
						@IdDependencia =NULL 
 Ejecutado en: 0.014668941497803 
 Hora: 11:47:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062739849090576 
 Hora: 11:47:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088338851928711 
 Hora: 11:47:54

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.037160158157349 
 Hora: 11:47:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077400207519531 
 Hora: 11:47:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009829044342041 
 Hora: 11:47:56

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021804094314575 
 Hora: 11:47:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013814926147461 
 Hora: 11:47:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011831998825073 
 Hora: 11:48:02

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015857934951782 
 Hora: 11:48:02

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.013698101043701 
 Hora: 11:48:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095388889312744 
 Hora: 11:48:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014084100723267 
 Hora: 11:48:04

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.039345026016235 
 Hora: 11:48:04

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024595975875854 
 Hora: 11:48:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014312028884888 
 Hora: 11:48:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010349035263062 
 Hora: 11:51:17

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020880937576294 
 Hora: 11:51:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073189735412598 
 Hora: 11:51:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013077974319458 
 Hora: 11:51:19

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021883964538574 
 Hora: 11:51:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0047519207000732 
 Hora: 11:51:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017130136489868 
 Hora: 11:51:27

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.025270938873291 
 Hora: 11:51:27

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.027292013168335 
 Hora: 11:51:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013608932495117 
 Hora: 11:51:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086359977722168 
 Hora: 11:51:29

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.026595115661621 
 Hora: 11:51:29

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025728940963745 
 Hora: 11:51:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013724088668823 
 Hora: 11:51:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017140865325928 
 Hora: 11:51:30

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.031390905380249 
 Hora: 11:51:30

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.0244460105896 
 Hora: 11:51:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012005090713501 
 Hora: 11:51:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010673999786377 
 Hora: 11:51:31

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.027854919433594 
 Hora: 11:51:31

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026515007019043 
 Hora: 11:51:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099549293518066 
 Hora: 11:51:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008152961730957 
 Hora: 11:51:36

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = NULL,
						@Tomadas = 0,
						@IdDependencia =NULL 
 Ejecutado en: 0.020163059234619 
 Hora: 11:51:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077450275421143 
 Hora: 11:51:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014810085296631 
 Hora: 11:52:03

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024469137191772 
 Hora: 11:52:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014586925506592 
 Hora: 11:52:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013581037521362 
 Hora: 11:52:06

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.034555912017822 
 Hora: 11:52:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012680053710938 
 Hora: 11:52:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013273000717163 
 Hora: 11:52:10

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019700050354004 
 Hora: 11:52:10

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020418167114258 
 Hora: 11:52:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010828971862793 
 Hora: 11:52:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077559947967529 
 Hora: 11:52:11

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.024889945983887 
 Hora: 11:52:11

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.028976917266846 
 Hora: 11:52:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012119054794312 
 Hora: 11:52:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010369062423706 
 Hora: 11:52:45

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = NULL,
						@Tomadas = 0,
						@IdDependencia =NULL 
 Ejecutado en: 0.012497901916504 
 Hora: 11:52:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080468654632568 
 Hora: 11:52:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010185956954956 
 Hora: 11:55:01

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024366140365601 
 Hora: 11:55:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0044131278991699 
 Hora: 11:55:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029014110565186 
 Hora: 11:55:03

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025625944137573 
 Hora: 11:55:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011337041854858 
 Hora: 11:55:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073790550231934 
 Hora: 11:55:09

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020990133285522 
 Hora: 11:55:09

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021424055099487 
 Hora: 11:55:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093848705291748 
 Hora: 11:55:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080561637878418 
 Hora: 11:55:11

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.023324966430664 
 Hora: 11:55:11

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021122932434082 
 Hora: 11:55:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015555858612061 
 Hora: 11:55:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0054299831390381 
 Hora: 11:55:51

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.014419078826904 
 Hora: 11:55:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087049007415771 
 Hora: 11:55:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009918212890625 
 Hora: 11:55:53

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023777008056641 
 Hora: 11:55:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097188949584961 
 Hora: 11:55:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007627010345459 
 Hora: 11:56:15

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.025207042694092 
 Hora: 11:56:15

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019199132919312 
 Hora: 11:56:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010585069656372 
 Hora: 11:56:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065369606018066 
 Hora: 11:56:17

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.039277076721191 
 Hora: 11:56:17

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.035446882247925 
 Hora: 11:56:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014325857162476 
 Hora: 11:56:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011123895645142 
 Hora: 11:56:21

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = NULL,
						@Tomadas = 0,
						@IdDependencia =NULL 
 Ejecutado en: 0.01970911026001 
 Hora: 11:56:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060100555419922 
 Hora: 11:56:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010204076766968 
 Hora: 12:01:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077738761901855 
 Hora: 12:01:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013001918792725 
 Hora: 12:01:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012998104095459 
 Hora: 12:01:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010322093963623 
 Hora: 12:01:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092179775238037 
 Hora: 12:01:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093321800231934 
 Hora: 12:01:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01247501373291 
 Hora: 12:01:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016364812850952 
 Hora: 12:01:08

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.036850929260254 
 Hora: 12:01:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015995979309082 
 Hora: 12:01:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014400005340576 
 Hora: 12:01:10

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.039261102676392 
 Hora: 12:01:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013382911682129 
 Hora: 12:01:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088860988616943 
 Hora: 12:01:10

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.034214973449707 
 Hora: 12:01:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012105941772461 
 Hora: 12:01:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01097297668457 
 Hora: 12:01:10

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022531986236572 
 Hora: 12:01:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0053670406341553 
 Hora: 12:01:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028825044631958 
 Hora: 12:01:11

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.028104066848755 
 Hora: 12:01:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017696142196655 
 Hora: 12:01:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010590076446533 
 Hora: 12:01:11

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019761085510254 
 Hora: 12:01:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012235164642334 
 Hora: 12:01:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079600811004639 
 Hora: 12:01:11

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.067034006118774 
 Hora: 12:01:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014394998550415 
 Hora: 12:01:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015352010726929 
 Hora: 12:01:12

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.027068138122559 
 Hora: 12:01:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090839862823486 
 Hora: 12:01:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019835948944092 
 Hora: 12:01:14

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.032571077346802 
 Hora: 12:01:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02695107460022 
 Hora: 12:01:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019007205963135 
 Hora: 12:01:17

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022161960601807 
 Hora: 12:01:17

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025275945663452 
 Hora: 12:01:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018527984619141 
 Hora: 12:01:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010708093643188 
 Hora: 12:01:19

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.038962125778198 
 Hora: 12:01:19

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.058933973312378 
 Hora: 12:01:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014546871185303 
 Hora: 12:01:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094249248504639 
 Hora: 12:01:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0053927898406982 
 Hora: 12:01:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015349864959717 
 Hora: 12:03:41

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020187854766846 
 Hora: 12:03:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008432149887085 
 Hora: 12:03:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010876893997192 
 Hora: 12:03:43

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.03355598449707 
 Hora: 12:03:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011280059814453 
 Hora: 12:03:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069990158081055 
 Hora: 12:03:44

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023159027099609 
 Hora: 12:03:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012143135070801 
 Hora: 12:03:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010560989379883 
 Hora: 12:03:48

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.027328014373779 
 Hora: 12:03:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091450214385986 
 Hora: 12:03:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010941028594971 
 Hora: 12:03:52

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019332885742188 
 Hora: 12:03:52

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021935939788818 
 Hora: 12:03:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009904146194458 
 Hora: 12:03:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074160099029541 
 Hora: 12:03:54

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.027701854705811 
 Hora: 12:03:54

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.039535045623779 
 Hora: 12:03:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010860919952393 
 Hora: 12:03:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014173984527588 
 Hora: 12:03:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072500705718994 
 Hora: 12:03:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085389614105225 
 Hora: 12:06:27

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022156953811646 
 Hora: 12:06:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0053119659423828 
 Hora: 12:06:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095019340515137 
 Hora: 12:06:29

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022573947906494 
 Hora: 12:06:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010097980499268 
 Hora: 12:06:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093870162963867 
 Hora: 12:06:38

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.010902881622314 
 Hora: 12:06:38

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015177011489868 
 Hora: 12:06:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009713888168335 
 Hora: 12:06:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007418155670166 
 Hora: 12:06:40

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.023324012756348 
 Hora: 12:06:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021146059036255 
 Hora: 12:06:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061991214752197 
 Hora: 12:06:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029543876647949 
 Hora: 12:06:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.038066864013672 
 Hora: 12:06:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099000930786133 
 Hora: 12:10:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080289840698242 
 Hora: 12:10:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093619823455811 
 Hora: 12:21:18

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.027268886566162 
 Hora: 12:21:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086698532104492 
 Hora: 12:21:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015124082565308 
 Hora: 12:21:20

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028526067733765 
 Hora: 12:21:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013238906860352 
 Hora: 12:21:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094089508056641 
 Hora: 12:21:23

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.01316499710083 
 Hora: 12:21:23

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.01533317565918 
 Hora: 12:21:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088479518890381 
 Hora: 12:21:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098180770874023 
 Hora: 12:21:40

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017802953720093 
 Hora: 12:21:40

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020798921585083 
 Hora: 12:21:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096371173858643 
 Hora: 12:21:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013619899749756 
 Hora: 12:21:44

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021852016448975 
 Hora: 12:21:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010125875473022 
 Hora: 12:21:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011414051055908 
 Hora: 12:21:46

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.026210069656372 
 Hora: 12:21:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091400146484375 
 Hora: 12:21:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014681100845337 
 Hora: 12:21:51

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018492937088013 
 Hora: 12:21:51

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025913953781128 
 Hora: 12:21:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016938209533691 
 Hora: 12:21:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010304927825928 
 Hora: 12:22:57

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02277398109436 
 Hora: 12:22:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010326147079468 
 Hora: 12:22:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071029663085938 
 Hora: 12:23:00

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.031376123428345 
 Hora: 12:23:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013401985168457 
 Hora: 12:23:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010585069656372 
 Hora: 12:23:04

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020040035247803 
 Hora: 12:23:04

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015403032302856 
 Hora: 12:23:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063309669494629 
 Hora: 12:23:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01427698135376 
 Hora: 12:23:06

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019649028778076 
 Hora: 12:23:06

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.023850917816162 
 Hora: 12:23:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014606952667236 
 Hora: 12:23:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012905836105347 
 Hora: 12:23:07

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.0362229347229 
 Hora: 12:23:07

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.039249897003174 
 Hora: 12:23:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012995004653931 
 Hora: 12:23:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018593072891235 
 Hora: 12:23:08

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.040588140487671 
 Hora: 12:23:08

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038100957870483 
 Hora: 12:23:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013731002807617 
 Hora: 12:23:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059430599212646 
 Hora: 12:23:51

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.01793384552002 
 Hora: 12:23:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011240005493164 
 Hora: 12:23:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060451030731201 
 Hora: 12:23:53

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.033334970474243 
 Hora: 12:23:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010580062866211 
 Hora: 12:23:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010792016983032 
 Hora: 12:24:01

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02300500869751 
 Hora: 12:24:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010784864425659 
 Hora: 12:24:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020913124084473 
 Hora: 12:24:03

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.041301012039185 
 Hora: 12:24:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011796951293945 
 Hora: 12:24:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013107776641846 
 Hora: 12:24:06

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.026010990142822 
 Hora: 12:24:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00819993019104 
 Hora: 12:24:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013677835464478 
 Hora: 12:24:10

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.026950120925903 
 Hora: 12:24:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012309074401855 
 Hora: 12:24:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010267019271851 
 Hora: 12:24:12

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.025101900100708 
 Hora: 12:24:12

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.038197994232178 
 Hora: 12:24:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017870903015137 
 Hora: 12:24:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065319538116455 
 Hora: 12:24:14

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.02764105796814 
 Hora: 12:24:14

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.044284105300903 
 Hora: 12:24:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017757177352905 
 Hora: 12:24:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01274299621582 
 Hora: 12:24:22

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='106' 
 Ejecutado en: 0.036280870437622 
 Hora: 12:24:22

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.034188985824585 
 Hora: 12:24:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094630718231201 
 Hora: 12:24:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012501001358032 
 Hora: 12:24:29

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='5' 
 Ejecutado en: 0.066985845565796 
 Hora: 12:24:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094618797302246 
 Hora: 12:24:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090160369873047 
 Hora: 12:24:52

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022416830062866 
 Hora: 12:24:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061781406402588 
 Hora: 12:24:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015646934509277 
 Hora: 12:24:54

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.029458999633789 
 Hora: 12:24:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013408184051514 
 Hora: 12:24:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095398426055908 
 Hora: 12:24:59

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016230821609497 
 Hora: 12:24:59

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021153926849365 
 Hora: 12:24:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011559009552002 
 Hora: 12:24:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.042657136917114 
 Hora: 12:25:01

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.032086849212646 
 Hora: 12:25:01

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.10551691055298 
 Hora: 12:25:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01216983795166 
 Hora: 12:25:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081589221954346 
 Hora: 12:25:05

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='106' 
 Ejecutado en: 0.025924921035767 
 Hora: 12:25:05

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038269996643066 
 Hora: 12:25:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080490112304688 
 Hora: 12:25:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018481969833374 
 Hora: 12:25:11

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='232' 
 Ejecutado en: 0.055873155593872 
 Hora: 12:25:11

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.03043007850647 
 Hora: 12:25:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007256031036377 
 Hora: 12:25:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086469650268555 
 Hora: 12:25:23

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.026408910751343 
 Hora: 12:25:23

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023862838745117 
 Hora: 12:25:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01373291015625 
 Hora: 12:25:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01082706451416 
 Hora: 12:25:38

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '957',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.051972150802612 
 Hora: 12:25:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070288181304932 
 Hora: 12:25:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097849369049072 
 Hora: 12:25:42

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '957',
						@Tomadas = 0,
						@IdDependencia ='249' 
 Ejecutado en: 0.041423797607422 
 Hora: 12:25:42

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.030230045318604 
 Hora: 12:25:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007457971572876 
 Hora: 12:25:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080399513244629 
 Hora: 12:25:47

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='249' 
 Ejecutado en: 0.02197790145874 
 Hora: 12:25:47

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.048658132553101 
 Hora: 12:25:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090610980987549 
 Hora: 12:25:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012382030487061 
 Hora: 12:25:53

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '957',
						@Tomadas = 0,
						@IdDependencia ='249' 
 Ejecutado en: 0.039510011672974 
 Hora: 12:25:53

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.037549018859863 
 Hora: 12:25:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012269020080566 
 Hora: 12:25:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089559555053711 
 Hora: 12:26:00

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '954',
						@Tomadas = 0,
						@IdDependencia ='249' 
 Ejecutado en: 0.036376953125 
 Hora: 12:26:00

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.033859968185425 
 Hora: 12:26:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013015031814575 
 Hora: 12:26:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011428117752075 
 Hora: 12:26:11

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='249' 
 Ejecutado en: 0.023182153701782 
 Hora: 12:26:11

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.049037933349609 
 Hora: 12:26:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0050718784332275 
 Hora: 12:26:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011077880859375 
 Hora: 12:26:20

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='233' 
 Ejecutado en: 0.076036930084229 
 Hora: 12:26:20

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.039188861846924 
 Hora: 12:26:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013273000717163 
 Hora: 12:26:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0050959587097168 
 Hora: 12:26:28

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '957',
						@Tomadas = 0,
						@IdDependencia ='233' 
 Ejecutado en: 0.055317878723145 
 Hora: 12:26:28

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.041949987411499 
 Hora: 12:26:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012224912643433 
 Hora: 12:26:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010409832000732 
 Hora: 12:26:39

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '954',
						@Tomadas = 0,
						@IdDependencia ='233' 
 Ejecutado en: 0.032840967178345 
 Hora: 12:26:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087680816650391 
 Hora: 12:26:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01054310798645 
 Hora: 12:26:50

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '948',
						@Tomadas = 0,
						@IdDependencia ='233' 
 Ejecutado en: 0.036587953567505 
 Hora: 12:26:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0053529739379883 
 Hora: 12:26:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076141357421875 
 Hora: 12:26:55

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '955',
						@Tomadas = 0,
						@IdDependencia ='233' 
 Ejecutado en: 0.036929845809937 
 Hora: 12:26:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018423080444336 
 Hora: 12:26:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076298713684082 
 Hora: 12:27:03

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '956',
						@Tomadas = 0,
						@IdDependencia ='233' 
 Ejecutado en: 0.06297492980957 
 Hora: 12:27:03

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.034999847412109 
 Hora: 12:27:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062389373779297 
 Hora: 12:27:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028064966201782 
 Hora: 12:29:57

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '954',
						@Tomadas = 0,
						@IdDependencia ='233' 
 Ejecutado en: 0.074996948242188 
 Hora: 12:29:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.031480073928833 
 Hora: 12:29:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028963088989258 
 Hora: 12:30:03

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '954',
						@Tomadas = 0,
						@IdDependencia ='234' 
 Ejecutado en: 0.079934120178223 
 Hora: 12:30:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025148868560791 
 Hora: 12:30:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00907301902771 
 Hora: 12:30:06

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '954',
						@Tomadas = 0,
						@IdDependencia ='235' 
 Ejecutado en: 0.040585994720459 
 Hora: 12:30:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013108968734741 
 Hora: 12:30:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013087034225464 
 Hora: 12:30:09

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '954',
						@Tomadas = 0,
						@IdDependencia ='236' 
 Ejecutado en: 0.023220062255859 
 Hora: 12:30:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011622905731201 
 Hora: 12:30:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012074947357178 
 Hora: 12:30:11

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '954',
						@Tomadas = 0,
						@IdDependencia ='237' 
 Ejecutado en: 0.042764902114868 
 Hora: 12:30:11

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038648843765259 
 Hora: 12:30:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013720035552979 
 Hora: 12:30:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097148418426514 
 Hora: 12:48:09

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020530939102173 
 Hora: 12:48:09

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.023464918136597 
 Hora: 12:48:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079250335693359 
 Hora: 12:48:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093469619750977 
 Hora: 12:48:12

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.021176815032959 
 Hora: 12:48:12

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022711992263794 
 Hora: 12:48:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0048890113830566 
 Hora: 12:48:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010154962539673 
 Hora: 12:50:43

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.016838073730469 
 Hora: 12:50:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080928802490234 
 Hora: 12:50:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011361122131348 
 Hora: 12:50:46

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.034263134002686 
 Hora: 12:50:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076358318328857 
 Hora: 12:50:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012980222702026 
 Hora: 12:50:49

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.02387809753418 
 Hora: 12:50:49

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025071144104004 
 Hora: 12:50:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014440774917603 
 Hora: 12:50:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013170003890991 
 Hora: 12:50:50

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.034282207489014 
 Hora: 12:50:50

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.042591094970703 
 Hora: 12:50:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01301908493042 
 Hora: 12:50:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073111057281494 
 Hora: 12:50:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011283159255981 
 Hora: 12:50:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066220760345459 
 Hora: 14:19:42

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023657083511353 
 Hora: 14:19:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098028182983398 
 Hora: 14:19:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008591890335083 
 Hora: 14:19:45

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021051168441772 
 Hora: 14:19:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090630054473877 
 Hora: 14:19:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00882887840271 
 Hora: 14:20:11

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021075010299683 
 Hora: 14:20:11

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.024269104003906 
 Hora: 14:20:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022768020629883 
 Hora: 14:20:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012463808059692 
 Hora: 14:20:13

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.034871816635132 
 Hora: 14:20:13

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.041319131851196 
 Hora: 14:20:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014642000198364 
 Hora: 14:20:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011361837387085 
 Hora: 14:20:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018227100372314 
 Hora: 14:20:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009861946105957 
 Hora: 14:36:25

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020352840423584 
 Hora: 14:36:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011806011199951 
 Hora: 14:36:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015945911407471 
 Hora: 14:36:29

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.037317991256714 
 Hora: 14:36:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069680213928223 
 Hora: 14:36:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065100193023682 
 Hora: 14:36:31

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020987987518311 
 Hora: 14:36:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082030296325684 
 Hora: 14:36:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013617992401123 
 Hora: 14:36:36

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.029355049133301 
 Hora: 14:36:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014626026153564 
 Hora: 14:36:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01098895072937 
 Hora: 14:36:43

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022186040878296 
 Hora: 14:36:43

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.013109922409058 
 Hora: 14:36:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083880424499512 
 Hora: 14:36:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011837959289551 
 Hora: 14:36:44

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.032093048095703 
 Hora: 14:36:44

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038383007049561 
 Hora: 14:36:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066859722137451 
 Hora: 14:36:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01180100440979 
 Hora: 14:36:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087549686431885 
 Hora: 14:36:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009505033493042 
 Hora: 14:37:53

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021378993988037 
 Hora: 14:37:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010489940643311 
 Hora: 14:37:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019786834716797 
 Hora: 14:37:55

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.037283182144165 
 Hora: 14:37:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027235984802246 
 Hora: 14:37:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019362926483154 
 Hora: 14:38:00

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.045863151550293 
 Hora: 14:38:00

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.045616865158081 
 Hora: 14:38:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016787767410278 
 Hora: 14:38:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013898849487305 
 Hora: 14:38:02

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.065426111221313 
 Hora: 14:38:02

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.072733163833618 
 Hora: 14:38:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025437116622925 
 Hora: 14:38:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.045595169067383 
 Hora: 14:38:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077099800109863 
 Hora: 14:38:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012022972106934 
 Hora: 14:40:30

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021169900894165 
 Hora: 14:40:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014482021331787 
 Hora: 14:40:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029279947280884 
 Hora: 14:40:33

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.075994968414307 
 Hora: 14:40:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.044360876083374 
 Hora: 14:40:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016029119491577 
 Hora: 14:40:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.026058912277222 
 Hora: 14:40:36

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.026723861694336 
 Hora: 14:40:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013802051544189 
 Hora: 14:40:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0384840965271 
 Hora: 14:40:38

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.053810119628906 
 Hora: 14:40:38

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.055898189544678 
 Hora: 14:40:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.030687093734741 
 Hora: 14:40:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.030613899230957 
 Hora: 14:40:38

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.048362016677856 
 Hora: 14:40:38

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.04227089881897 
 Hora: 14:40:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027844905853271 
 Hora: 14:40:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025290012359619 
 Hora: 14:40:40

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.092368125915527 
 Hora: 14:40:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.10410499572754 
 Hora: 14:40:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018735885620117 
 Hora: 14:40:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015363931655884 
 Hora: 14:40:50

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = NULL,
						@Tomadas = 0,
						@IdDependencia =NULL 
 Ejecutado en: 0.032108068466187 
 Hora: 14:40:50

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.03609299659729 
 Hora: 14:40:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022905111312866 
 Hora: 14:40:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02267599105835 
 Hora: 14:41:26

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.039917945861816 
 Hora: 14:41:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024276971817017 
 Hora: 14:41:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014120817184448 
 Hora: 14:41:28

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.037579774856567 
 Hora: 14:41:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017844200134277 
 Hora: 14:41:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025633096694946 
 Hora: 14:41:34

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.044651031494141 
 Hora: 14:41:34

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.037890911102295 
 Hora: 14:41:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02733302116394 
 Hora: 14:41:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.046646118164062 
 Hora: 14:41:36

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.062489986419678 
 Hora: 14:41:36

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.044965028762817 
 Hora: 14:41:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029059171676636 
 Hora: 14:41:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.031174182891846 
 Hora: 14:41:39

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = NULL,
						@Tomadas = 0,
						@IdDependencia =NULL 
 Ejecutado en: 0.063495874404907 
 Hora: 14:41:39

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.059238910675049 
 Hora: 14:41:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027170896530151 
 Hora: 14:41:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020531892776489 
 Hora: 14:55:41

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.15156888961792 
 Hora: 14:55:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023819208145142 
 Hora: 14:55:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027611017227173 
 Hora: 14:55:46

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.20231294631958 
 Hora: 14:55:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027639865875244 
 Hora: 14:55:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017518043518066 
 Hora: 14:55:56

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.033264875411987 
 Hora: 14:55:56

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.065667867660522 
 Hora: 14:55:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016298055648804 
 Hora: 14:55:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029186964035034 
 Hora: 14:56:03

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.075109958648682 
 Hora: 14:56:03

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.027525901794434 
 Hora: 14:56:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015950918197632 
 Hora: 14:56:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011024951934814 
 Hora: 14:56:17

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.04168701171875 
 Hora: 14:56:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012510061264038 
 Hora: 14:56:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029232978820801 
 Hora: 14:56:20

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.08641505241394 
 Hora: 14:56:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.035706043243408 
 Hora: 14:56:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0191969871521 
 Hora: 14:56:26

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.035465002059937 
 Hora: 14:56:26

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.047332048416138 
 Hora: 14:56:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018064022064209 
 Hora: 14:56:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091619491577148 
 Hora: 15:05:31

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017700910568237 
 Hora: 15:05:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0053861141204834 
 Hora: 15:05:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014088153839111 
 Hora: 15:05:33

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.033278942108154 
 Hora: 15:05:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017843008041382 
 Hora: 15:05:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078718662261963 
 Hora: 15:05:37

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.034584999084473 
 Hora: 15:05:37

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.026177883148193 
 Hora: 15:05:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014305114746094 
 Hora: 15:05:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068240165710449 
 Hora: 15:06:21

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024169921875 
 Hora: 15:06:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010048151016235 
 Hora: 15:06:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016946792602539 
 Hora: 15:06:24

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023504972457886 
 Hora: 15:06:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011373996734619 
 Hora: 15:06:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.004223108291626 
 Hora: 15:06:26

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018710136413574 
 Hora: 15:06:26

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014909982681274 
 Hora: 15:06:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010740995407104 
 Hora: 15:06:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010447025299072 
 Hora: 15:06:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078630447387695 
 Hora: 15:06:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011916875839233 
 Hora: 15:08:35

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021317958831787 
 Hora: 15:08:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096189975738525 
 Hora: 15:08:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011157035827637 
 Hora: 15:08:39

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.040083885192871 
 Hora: 15:08:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015649080276489 
 Hora: 15:08:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082828998565674 
 Hora: 15:08:46

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021323919296265 
 Hora: 15:08:46

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025189876556396 
 Hora: 15:08:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010109901428223 
 Hora: 15:08:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022244930267334 
 Hora: 15:08:48

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.072396039962769 
 Hora: 15:08:48

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.043477058410645 
 Hora: 15:08:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012562990188599 
 Hora: 15:08:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089511871337891 
 Hora: 15:08:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014559984207153 
 Hora: 15:08:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081980228424072 
 Hora: 15:09:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097401142120361 
 Hora: 15:09:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0052440166473389 
 Hora: 15:13:46

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019291162490845 
 Hora: 15:13:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011735916137695 
 Hora: 15:13:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018829822540283 
 Hora: 15:13:48

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.0347580909729 
 Hora: 15:13:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093522071838379 
 Hora: 15:13:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073990821838379 
 Hora: 15:13:52

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022547006607056 
 Hora: 15:13:52

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.026978015899658 
 Hora: 15:13:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083110332489014 
 Hora: 15:13:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009397029876709 
 Hora: 15:13:53

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.033099174499512 
 Hora: 15:13:53

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.040937185287476 
 Hora: 15:13:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016422986984253 
 Hora: 15:13:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011398077011108 
 Hora: 15:14:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097978115081787 
 Hora: 15:14:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093789100646973 
 Hora: 15:24:07

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020534992218018 
 Hora: 15:24:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099859237670898 
 Hora: 15:24:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088760852813721 
 Hora: 15:24:10

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.019951105117798 
 Hora: 15:24:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085361003875732 
 Hora: 15:24:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012569904327393 
 Hora: 15:24:12

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.031487941741943 
 Hora: 15:24:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083410739898682 
 Hora: 15:24:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012199878692627 
 Hora: 15:24:12

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.03010892868042 
 Hora: 15:24:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017851829528809 
 Hora: 15:24:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085439682006836 
 Hora: 15:24:12

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022812128067017 
 Hora: 15:24:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011222124099731 
 Hora: 15:24:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013761043548584 
 Hora: 15:24:12

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020098924636841 
 Hora: 15:24:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097970962524414 
 Hora: 15:24:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066080093383789 
 Hora: 15:24:13

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019953966140747 
 Hora: 15:24:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087549686431885 
 Hora: 15:24:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020941972732544 
 Hora: 15:24:15

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.03020191192627 
 Hora: 15:24:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013138055801392 
 Hora: 15:24:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012531042098999 
 Hora: 15:24:16

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021423101425171 
 Hora: 15:24:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083000659942627 
 Hora: 15:24:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096919536590576 
 Hora: 15:24:20

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.039339065551758 
 Hora: 15:24:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014209032058716 
 Hora: 15:24:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017948865890503 
 Hora: 15:24:21

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.030651092529297 
 Hora: 15:24:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025360107421875 
 Hora: 15:24:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087361335754395 
 Hora: 15:24:24

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.02881908416748 
 Hora: 15:24:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010329961776733 
 Hora: 15:24:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011613845825195 
 Hora: 15:24:25

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.026907920837402 
 Hora: 15:24:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098860263824463 
 Hora: 15:24:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084350109100342 
 Hora: 15:24:27

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.02338695526123 
 Hora: 15:24:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010992050170898 
 Hora: 15:24:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094778537750244 
 Hora: 15:25:35

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018473148345947 
 Hora: 15:25:35

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020915031433105 
 Hora: 15:25:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011099815368652 
 Hora: 15:25:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012510061264038 
 Hora: 15:25:37

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.044684886932373 
 Hora: 15:25:37

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.034243106842041 
 Hora: 15:25:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012759923934937 
 Hora: 15:25:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078229904174805 
 Hora: 15:25:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093309879302979 
 Hora: 15:25:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0121009349823 
 Hora: 15:26:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076332092285156 
 Hora: 15:26:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072951316833496 
 Hora: 15:26:40

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.026370048522949 
 Hora: 15:26:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091588497161865 
 Hora: 15:26:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014243841171265 
 Hora: 15:26:42

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.032482862472534 
 Hora: 15:26:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022216081619263 
 Hora: 15:26:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099339485168457 
 Hora: 15:26:53

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020690202713013 
 Hora: 15:26:53

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019169807434082 
 Hora: 15:26:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008465051651001 
 Hora: 15:26:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098938941955566 
 Hora: 15:26:56

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.029644012451172 
 Hora: 15:26:56

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025612115859985 
 Hora: 15:26:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020062923431396 
 Hora: 15:26:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01347279548645 
 Hora: 15:26:57

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.034204006195068 
 Hora: 15:26:57

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.033758878707886 
 Hora: 15:26:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013743162155151 
 Hora: 15:26:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069727897644043 
 Hora: 15:27:22

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.034089803695679 
 Hora: 15:27:22

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024391889572144 
 Hora: 15:27:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077080726623535 
 Hora: 15:27:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073459148406982 
 Hora: 15:27:59

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022016048431396 
 Hora: 15:27:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010571956634521 
 Hora: 15:27:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013522148132324 
 Hora: 15:28:02

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023102998733521 
 Hora: 15:28:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074870586395264 
 Hora: 15:28:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078930854797363 
 Hora: 15:28:04

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017569065093994 
 Hora: 15:28:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096170902252197 
 Hora: 15:28:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076749324798584 
 Hora: 15:28:06

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.039491891860962 
 Hora: 15:28:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013406038284302 
 Hora: 15:28:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01146388053894 
 Hora: 15:28:10

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017277956008911 
 Hora: 15:28:10

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016877889633179 
 Hora: 15:28:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097661018371582 
 Hora: 15:28:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010289907455444 
 Hora: 15:31:57

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020220994949341 
 Hora: 15:31:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011896848678589 
 Hora: 15:31:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011052131652832 
 Hora: 15:31:59

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.030599117279053 
 Hora: 15:31:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007929801940918 
 Hora: 15:31:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014569044113159 
 Hora: 15:32:03

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.026871919631958 
 Hora: 15:32:03

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.02510404586792 
 Hora: 15:32:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013412952423096 
 Hora: 15:32:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016462087631226 
 Hora: 15:32:04

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.039214849472046 
 Hora: 15:32:04

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.036407947540283 
 Hora: 15:32:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012382984161377 
 Hora: 15:32:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0038502216339111 
 Hora: 15:32:38

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017527103424072 
 Hora: 15:32:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010710000991821 
 Hora: 15:32:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020676851272583 
 Hora: 15:32:41

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028038024902344 
 Hora: 15:32:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019879102706909 
 Hora: 15:32:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011468887329102 
 Hora: 15:32:47

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.0368971824646 
 Hora: 15:32:47

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.022104024887085 
 Hora: 15:32:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012660026550293 
 Hora: 15:32:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020628213882446 
 Hora: 15:32:49

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.024292945861816 
 Hora: 15:32:49

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021715879440308 
 Hora: 15:32:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012027025222778 
 Hora: 15:32:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012696027755737 
 Hora: 15:35:56

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023055076599121 
 Hora: 15:35:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012367963790894 
 Hora: 15:35:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014040946960449 
 Hora: 15:35:59

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.036830902099609 
 Hora: 15:35:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013166904449463 
 Hora: 15:35:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0054559707641602 
 Hora: 15:36:00

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024805068969727 
 Hora: 15:36:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010733842849731 
 Hora: 15:36:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010703086853027 
 Hora: 15:36:03

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.042984962463379 
 Hora: 15:36:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013177156448364 
 Hora: 15:36:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0034840106964111 
 Hora: 15:36:09

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016837120056152 
 Hora: 15:36:09

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014130830764771 
 Hora: 15:36:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010494947433472 
 Hora: 15:36:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076298713684082 
 Hora: 15:36:12

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.034530878067017 
 Hora: 15:36:12

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.023678064346313 
 Hora: 15:36:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011773824691772 
 Hora: 15:36:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010931015014648 
 Hora: 15:36:12

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.028918027877808 
 Hora: 15:36:12

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.04177188873291 
 Hora: 15:36:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022676944732666 
 Hora: 15:36:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010760068893433 
 Hora: 15:36:13

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.021076917648315 
 Hora: 15:36:13

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.032156944274902 
 Hora: 15:36:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083010196685791 
 Hora: 15:36:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088329315185547 
 Hora: 15:41:32

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022995948791504 
 Hora: 15:41:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075969696044922 
 Hora: 15:41:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011855125427246 
 Hora: 15:41:34

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.032984018325806 
 Hora: 15:41:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099930763244629 
 Hora: 15:41:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010730028152466 
 Hora: 15:41:36

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.026058912277222 
 Hora: 15:41:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010129928588867 
 Hora: 15:41:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018046140670776 
 Hora: 15:41:36

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024430990219116 
 Hora: 15:41:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065910816192627 
 Hora: 15:41:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010360956192017 
 Hora: 15:41:39

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.033020973205566 
 Hora: 15:41:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020025968551636 
 Hora: 15:41:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01334810256958 
 Hora: 15:41:43

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017596006393433 
 Hora: 15:41:43

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017215013504028 
 Hora: 15:41:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015041828155518 
 Hora: 15:41:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011397838592529 
 Hora: 15:41:45

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.030857086181641 
 Hora: 15:41:45

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.031054019927979 
 Hora: 15:41:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0037240982055664 
 Hora: 15:41:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090389251708984 
 Hora: 15:41:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01032018661499 
 Hora: 15:41:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010003089904785 
 Hora: 15:46:00

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017684936523438 
 Hora: 15:46:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075130462646484 
 Hora: 15:46:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011445999145508 
 Hora: 15:46:02

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.039528131484985 
 Hora: 15:46:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016851186752319 
 Hora: 15:46:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0024490356445312 
 Hora: 15:46:06

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.025422096252441 
 Hora: 15:46:06

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019734144210815 
 Hora: 15:46:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077152252197266 
 Hora: 15:46:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013370990753174 
 Hora: 15:46:08

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.028630971908569 
 Hora: 15:46:08

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027860164642334 
 Hora: 15:46:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013721942901611 
 Hora: 15:46:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061969757080078 
 Hora: 15:47:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011059045791626 
 Hora: 15:47:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080912113189697 
 Hora: 15:47:46

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018113851547241 
 Hora: 15:47:46

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021317958831787 
 Hora: 15:47:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059769153594971 
 Hora: 15:47:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087110996246338 
 Hora: 15:47:49

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.028159856796265 
 Hora: 15:47:49

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.02570104598999 
 Hora: 15:47:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013246059417725 
 Hora: 15:47:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013598918914795 
 Hora: 15:47:49

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.033232927322388 
 Hora: 15:47:49

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.032636165618896 
 Hora: 15:47:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012254953384399 
 Hora: 15:47:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014856100082397 
 Hora: 15:47:52

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.022897958755493 
 Hora: 15:47:52

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.030203104019165 
 Hora: 15:47:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017711162567139 
 Hora: 15:47:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009937047958374 
 Hora: 15:47:57

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.045398950576782 
 Hora: 15:47:57

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.094280004501343 
 Hora: 15:47:57

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020821809768677 
 Hora: 15:47:57

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016871929168701 
 Hora: 15:47:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015169858932495 
 Hora: 15:47:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083539485931396 
 Hora: 15:48:01

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 3.0030879974365 
 Hora: 15:48:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015622854232788 
 Hora: 15:48:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012584209442139 
 Hora: 15:50:54

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1910' 
 Ejecutado en: 0.018477916717529 
 Hora: 15:50:54

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.014355182647705 
 Hora: 15:50:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011062860488892 
 Hora: 15:50:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089409351348877 
 Hora: 15:50:54

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1910' 
 Ejecutado en: 0.029743909835815 
 Hora: 15:50:54

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.023777008056641 
 Hora: 15:50:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014702081680298 
 Hora: 15:50:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026344060897827 
 Hora: 15:50:55

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1910' 
 Ejecutado en: 0.024067878723145 
 Hora: 15:50:55

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.027822971343994 
 Hora: 15:50:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009552001953125 
 Hora: 15:50:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014050006866455 
 Hora: 15:50:55

exec pa_getEmpleadosTodos  @Fecha = '25/02/2025',
										@PresupuestoId = '0002' 
 Ejecutado en: 0.032636880874634 
 Hora: 15:50:55

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022386074066162 
 Hora: 15:50:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014878034591675 
 Hora: 15:50:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086209774017334 
 Hora: 15:50:55

exec pa_getEmpleadosTodos  @Fecha = '25/02/2025',
										@PresupuestoId = '0002' 
 Ejecutado en: 0.028672933578491 
 Hora: 15:50:55

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.033422946929932 
 Hora: 15:50:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021713972091675 
 Hora: 15:50:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011013031005859 
 Hora: 15:50:56

exec pa_getEmpleadosTodos  @Fecha = '25/02/2025',
										@PresupuestoId = '0002' 
 Ejecutado en: 0.038387060165405 
 Hora: 15:50:56

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027101993560791 
 Hora: 15:50:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014847993850708 
 Hora: 15:50:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006072998046875 
 Hora: 15:51:15

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1910'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.96343994140625 
 Hora: 15:51:15

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1910' 
 Ejecutado en: 0.016366958618164 
 Hora: 15:51:15

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1910' 
 Ejecutado en: 0.10240793228149 
 Hora: 15:51:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007702112197876 
 Hora: 15:51:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017404079437256 
 Hora: 15:51:17

exec sp_GetEmpleadosParaRegIni @PresupuestoId='0002' 
 Ejecutado en: 1.5798540115356 
 Hora: 15:51:17

SELECT "EmpleadoID", COUNT(EmpleadoID) as dias
FROM "RegsIniGenNomina"
WHERE "PeriodoPagoID" = '1910'
AND "TieneLIS" = 0
GROUP BY "EmpleadoID" 
 Ejecutado en: 0.090845108032227 
 Hora: 15:51:17

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1910' 
 Ejecutado en: 0.022607088088989 
 Hora: 15:51:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0157790184021 
 Hora: 15:51:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084660053253174 
 Hora: 15:51:32

exec sp_GetEmpleadosParaRegIni @PresupuestoId='0002' 
 Ejecutado en: 0.11944389343262 
 Hora: 15:51:32

SELECT "EmpleadoID", COUNT(EmpleadoID) as dias
FROM "RegsIniGenNomina"
WHERE "PeriodoPagoID" = '1910'
AND "TieneLIS" = 0
GROUP BY "EmpleadoID" 
 Ejecutado en: 0.043917894363403 
 Hora: 15:51:32

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1910' 
 Ejecutado en: 0.016978025436401 
 Hora: 15:51:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010190010070801 
 Hora: 15:51:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01055908203125 
 Hora: 15:55:31

SELECT *
FROM "det_NominaXTipo"
WHERE "PeriodoID" = '1910'
AND "TipoNominaID" IN(3, 9) 
 Ejecutado en: 0.015882968902588 
 Hora: 15:55:31

SELECT *
FROM "conf_Empleado"
WHERE "Id_Concepto" IN(57, 69, 136, 137, 138, 146, 147, 151, 197, 201, 208, 221, 238, 239, 257, 258) 
 Ejecutado en: 0.027507066726685 
 Hora: 15:55:31

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1910' 
 Ejecutado en: 0.015260934829712 
 Hora: 15:55:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010748863220215 
 Hora: 15:55:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093860626220703 
 Hora: 15:55:40

exec pa_GetEmpleadosParaNomina @Id_Nomina=1910 
 Ejecutado en: 7.7078440189362 
 Hora: 15:55:40

exec pa_GetEmpleadosEnNomina @id_nomina=1910 
 Ejecutado en: 1.0926430225372 
 Hora: 15:55:40

SELECT "d"."EmpleadoId"
FROM "conf_PagosENomina" "d"
JOIN "conf_EmisorTipoNomina" "ct" ON "d"."EmisorId" = "ct"."IdEmisor"
WHERE "ct"."idPresupuesto" = '0002'
AND "EmisorId" IN(1, 5, 6, 10)
GROUP BY "EmpleadoID" 
 Ejecutado en: 0.061218023300171 
 Hora: 15:55:40

SELECT "den"."Id_Nomina" as "idNomina", "den"."Id_Empleado" as "idEmpleado"
FROM "det_EmpleadosNomina" "den"
JOIN "his_Nomina" "hn" ON "den"."Id_Nomina" = "hn"."Id"
WHERE "hn"."FechaIni" = '16/02/2025'
AND "hn"."Id" <> '1910' 
 Ejecutado en: 0.029036045074463 
 Hora: 15:55:40

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1910' 
 Ejecutado en: 0.018091917037964 
 Hora: 15:55:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00907301902771 
 Hora: 15:55:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020368099212646 
 Hora: 16:05:00

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1910' 
 Ejecutado en: 0.028247833251953 
 Hora: 16:05:00

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1910' 
 Ejecutado en: 0.033041000366211 
 Hora: 16:05:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010402202606201 
 Hora: 16:05:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080230236053467 
 Hora: 16:05:10

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1910' 
 Ejecutado en: 0.015266180038452 
 Hora: 16:05:10

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1910' 
 Ejecutado en: 0.017284870147705 
 Hora: 16:05:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080628395080566 
 Hora: 16:05:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088241100311279 
 Hora: 16:09:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011061906814575 
 Hora: 16:09:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013905048370361 
 Hora: 16:09:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0118248462677 
 Hora: 16:09:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015561103820801 
 Hora: 16:09:08

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.014852046966553 
 Hora: 16:09:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096120834350586 
 Hora: 16:09:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087118148803711 
 Hora: 16:09:08

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.032934904098511 
 Hora: 16:09:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079691410064697 
 Hora: 16:09:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098321437835693 
 Hora: 16:09:08

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1910' 
 Ejecutado en: 0.019325971603394 
 Hora: 16:09:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070028305053711 
 Hora: 16:09:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.005936861038208 
 Hora: 16:09:08

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1910' 
 Ejecutado en: 0.016564846038818 
 Hora: 16:09:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011023998260498 
 Hora: 16:09:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084280967712402 
 Hora: 16:12:08

exec pa_GeneraTXTparaSAT @Periodoid=1910,@TipoNomina='3',@NumNomina=0 
 Ejecutado en: 171.89257407188 
 Hora: 16:12:08

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021582126617432 
 Hora: 16:12:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0042541027069092 
 Hora: 16:12:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01118016242981 
 Hora: 16:16:58

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.010382175445557 
 Hora: 16:16:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072550773620605 
 Hora: 16:16:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081830024719238 
 Hora: 16:16:58

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.019731044769287 
 Hora: 16:16:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077428817749023 
 Hora: 16:16:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088579654693604 
 Hora: 16:16:58

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1910' 
 Ejecutado en: 0.025427103042603 
 Hora: 16:16:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0136399269104 
 Hora: 16:16:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010648012161255 
 Hora: 16:16:59

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.018298864364624 
 Hora: 16:16:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069160461425781 
 Hora: 16:16:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088791847229004 
 Hora: 16:16:59

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1910' 
 Ejecutado en: 0.026738166809082 
 Hora: 16:16:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012233972549438 
 Hora: 16:16:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011408090591431 
 Hora: 16:16:59

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1910' 
 Ejecutado en: 0.019340038299561 
 Hora: 16:16:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007411003112793 
 Hora: 16:16:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080180168151855 
 Hora: 16:17:03

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.020049095153809 
 Hora: 16:17:03

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.019447088241577 
 Hora: 16:17:03

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.02121901512146 
 Hora: 16:17:03

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.012711048126221 
 Hora: 16:17:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086240768432617 
 Hora: 16:17:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0050051212310791 
 Hora: 16:17:06

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 1.9431571960449 
 Hora: 16:17:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0042688846588135 
 Hora: 16:17:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069239139556885 
 Hora: 16:17:12

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.019248008728027 
 Hora: 16:17:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057239532470703 
 Hora: 16:17:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070779323577881 
 Hora: 16:17:12

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.014477014541626 
 Hora: 16:17:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075130462646484 
 Hora: 16:17:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01016092300415 
 Hora: 16:17:12

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1910' 
 Ejecutado en: 0.021598100662231 
 Hora: 16:17:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010934829711914 
 Hora: 16:17:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091800689697266 
 Hora: 16:17:12

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1910' 
 Ejecutado en: 0.023129940032959 
 Hora: 16:17:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009376049041748 
 Hora: 16:17:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059759616851807 
 Hora: 16:17:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099940299987793 
 Hora: 16:17:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012526988983154 
 Hora: 16:17:20

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.034013032913208 
 Hora: 16:17:20

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.054940938949585 
 Hora: 16:17:20

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.021084070205688 
 Hora: 16:17:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013477087020874 
 Hora: 16:17:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014910936355591 
 Hora: 16:17:20

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.029525995254517 
 Hora: 16:17:20

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.019392013549805 
 Hora: 16:17:20

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.02007794380188 
 Hora: 16:17:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063290596008301 
 Hora: 16:17:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008253812789917 
 Hora: 16:17:29

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.017681121826172 
 Hora: 16:17:29

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016350984573364 
 Hora: 16:17:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090658664703369 
 Hora: 16:17:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097329616546631 
 Hora: 16:17:29

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.021581888198853 
 Hora: 16:17:29

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.01695704460144 
 Hora: 16:17:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0052640438079834 
 Hora: 16:17:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012876987457275 
 Hora: 16:17:32

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038758993148804 
 Hora: 16:17:32

SELECT conf_CategoriaConceptos.Id,conf_CategoriaConceptos.Id_Concepto,ClaveRecibo,con.Descripcion AS Concepto,DiasBase,MontoBase, conf_CategoriaConceptos.AplicaSB,conf_CategoriaConceptos.Permanente,conf_CategoriaConceptos.VecesAplicar,conf_CategoriaConceptos.AntesDeImp AS Gravado, conf_CategoriaConceptos.Id_TipoNomina,conf_CategoriaConceptos.Id_Categoria,conf_CategoriaConceptos.AplicaComp,conf_CategoriaConceptos.VecesAplicadas, conf_CategoriaConceptos.TieneParteExcenta,conf_CategoriaConceptos.DiasSalMinParteExc,conf_CategoriaConceptos.CodigoAcreedor,conf_CategoriaConceptos.NombreAcreedor
FROM "conf_CategoriaConceptos"
JOIN "cat_Categorias" "c" ON "conf_CategoriaConceptos"."Id_Categoria" = "c"."Id"
JOIN "cat_Conceptos" "con" ON "conf_CategoriaConceptos"."Id_Concepto" = "con"."Id"
WHERE "Id_TipoNomina" = '3'
AND "EsPercepcion" = '0'
AND "Id_Categoria" = '73'
AND "PresupuestoId" = '0002' 
 Ejecutado en: 0.04255199432373 
 Hora: 16:17:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017014980316162 
 Hora: 16:17:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010563135147095 
 Hora: 16:17:33

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.029579162597656 
 Hora: 16:17:33

SELECT conf_CategoriaConceptos.Id,conf_CategoriaConceptos.Id_Concepto,ClaveRecibo,con.Descripcion AS Concepto,DiasBase,MontoBase, conf_CategoriaConceptos.AplicaSB,conf_CategoriaConceptos.Permanente,conf_CategoriaConceptos.VecesAplicar,conf_CategoriaConceptos.AntesDeImp AS Gravado, conf_CategoriaConceptos.Id_TipoNomina,conf_CategoriaConceptos.Id_Categoria,conf_CategoriaConceptos.AplicaComp,conf_CategoriaConceptos.VecesAplicadas, conf_CategoriaConceptos.TieneParteExcenta,conf_CategoriaConceptos.DiasSalMinParteExc,conf_CategoriaConceptos.CodigoAcreedor,conf_CategoriaConceptos.NombreAcreedor
FROM "conf_CategoriaConceptos"
JOIN "cat_Categorias" "c" ON "conf_CategoriaConceptos"."Id_Categoria" = "c"."Id"
JOIN "cat_Conceptos" "con" ON "conf_CategoriaConceptos"."Id_Concepto" = "con"."Id"
WHERE "Id_TipoNomina" = '3'
AND "EsPercepcion" = '1'
AND "Id_Categoria" = '73'
AND "PresupuestoId" = '0002' 
 Ejecutado en: 0.037662982940674 
 Hora: 16:17:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021630048751831 
 Hora: 16:17:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010179996490479 
 Hora: 16:17:44

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.015614032745361 
 Hora: 16:17:44

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.020694017410278 
 Hora: 16:17:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009307861328125 
 Hora: 16:17:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012278079986572 
 Hora: 16:17:47

SELECT *
FROM "cat_TipoNomina"
WHERE "ACTIVO" = 1 
 Ejecutado en: 0.02075982093811 
 Hora: 16:17:47

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.013638019561768 
 Hora: 16:17:47

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.014977931976318 
 Hora: 16:17:47

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "EsPercepcion" = 1
AND "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.023953199386597 
 Hora: 16:17:47

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.025675058364868 
 Hora: 16:17:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0104660987854 
 Hora: 16:17:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0042350292205811 
 Hora: 16:17:47

SELECT *
FROM "cat_TipoNomina"
WHERE "ACTIVO" = 1 
 Ejecutado en: 0.02197003364563 
 Hora: 16:17:47

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.022501945495605 
 Hora: 16:17:47

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.015764951705933 
 Hora: 16:17:47

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "EsPercepcion" = 1
AND "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.019910097122192 
 Hora: 16:17:47

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.02007007598877 
 Hora: 16:17:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077240467071533 
 Hora: 16:17:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084431171417236 
 Hora: 16:17:47

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.014204978942871 
 Hora: 16:17:47

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.0225830078125 
 Hora: 16:17:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091249942779541 
 Hora: 16:17:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0055530071258545 
 Hora: 16:17:48

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.020824909210205 
 Hora: 16:17:48

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023478984832764 
 Hora: 16:17:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012170076370239 
 Hora: 16:17:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084960460662842 
 Hora: 16:17:56

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.020848035812378 
 Hora: 16:17:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084199905395508 
 Hora: 16:17:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097320079803467 
 Hora: 16:18:00

SELECT *
FROM "cat_TipoNomina"
WHERE "ACTIVO" = 1
AND "PagoEspecial" = 1 
 Ejecutado en: 0.022531986236572 
 Hora: 16:18:00

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "EsPercepcion" = 1
AND "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.021306037902832 
 Hora: 16:18:00

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.017899990081787 
 Hora: 16:18:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0051679611206055 
 Hora: 16:18:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01023006439209 
 Hora: 16:18:07

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.015136957168579 
 Hora: 16:18:07

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025701999664307 
 Hora: 16:18:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010010004043579 
 Hora: 16:18:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085029602050781 
 Hora: 16:33:14

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022485971450806 
 Hora: 16:33:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086088180541992 
 Hora: 16:33:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011787891387939 
 Hora: 16:33:17

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025331974029541 
 Hora: 16:33:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012622117996216 
 Hora: 16:33:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015974044799805 
 Hora: 16:33:17

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019736051559448 
 Hora: 16:33:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014245986938477 
 Hora: 16:33:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021614789962769 
 Hora: 16:33:19

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.039673089981079 
 Hora: 16:33:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0143141746521 
 Hora: 16:33:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067949295043945 
 Hora: 16:33:26

SELECT *
FROM "cat_TipoNomina"
WHERE "ACTIVO" = 1 
 Ejecutado en: 0.020411968231201 
 Hora: 16:33:26

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.019366979598999 
 Hora: 16:33:26

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.014853000640869 
 Hora: 16:33:26

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "EsPercepcion" = 1
AND "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.02343487739563 
 Hora: 16:33:26

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.017163038253784 
 Hora: 16:33:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009105920791626 
 Hora: 16:33:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010394096374512 
 Hora: 16:33:26

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.016079902648926 
 Hora: 16:33:26

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027956962585449 
 Hora: 16:33:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011337995529175 
 Hora: 16:33:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091760158538818 
 Hora: 16:38:16

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.018350839614868 
 Hora: 16:38:16

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.019712924957275 
 Hora: 16:38:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088379383087158 
 Hora: 16:38:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015589952468872 
 Hora: 16:38:27

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.014850854873657 
 Hora: 16:38:27

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020689964294434 
 Hora: 16:38:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089550018310547 
 Hora: 16:38:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010386943817139 
 Hora: 16:38:38

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.022762060165405 
 Hora: 16:38:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010457038879395 
 Hora: 16:38:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098409652709961 
 Hora: 16:38:42

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.021503925323486 
 Hora: 16:38:42

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027251958847046 
 Hora: 16:38:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01148509979248 
 Hora: 16:38:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011152982711792 
 Hora: 16:39:14

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.022094011306763 
 Hora: 16:39:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021577835083008 
 Hora: 16:39:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067250728607178 
 Hora: 16:39:15

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.024224996566772 
 Hora: 16:39:15

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025408029556274 
 Hora: 16:39:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057268142700195 
 Hora: 16:39:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011998891830444 
 Hora: 16:44:06

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.021320104598999 
 Hora: 16:44:06

SELECT *
FROM "ParametrosdeSistema"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.029160022735596 
 Hora: 16:44:06

SELECT *
FROM "ParametrosMovsRH"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.030293941497803 
 Hora: 16:44:06

SELECT *
FROM "ParamSystemTipoNomimas"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.02949595451355 
 Hora: 16:44:06

SELECT *
FROM "Param_ValoresENomina"
WHERE "Presupuestoid" = '0002' 
 Ejecutado en: 0.039589881896973 
 Hora: 16:44:06

SELECT *
FROM "ParametrosGenerales" 
 Ejecutado en: 0.029874086380005 
 Hora: 16:44:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010220050811768 
 Hora: 16:44:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012434959411621 
 Hora: 16:44:10

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.025215864181519 
 Hora: 16:44:10

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.026301860809326 
 Hora: 16:44:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01570987701416 
 Hora: 16:44:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011461019515991 
 Hora: 16:44:12

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.040410041809082 
 Hora: 16:44:12

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.043062925338745 
 Hora: 16:44:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011783838272095 
 Hora: 16:44:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078639984130859 
 Hora: 16:44:42

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018671035766602 
 Hora: 16:44:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071890354156494 
 Hora: 16:44:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013747930526733 
 Hora: 16:44:45

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028170108795166 
 Hora: 16:44:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083110332489014 
 Hora: 16:44:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013980150222778 
 Hora: 16:44:48

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.025643825531006 
 Hora: 16:44:48

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.022135972976685 
 Hora: 16:44:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007559061050415 
 Hora: 16:44:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013369798660278 
 Hora: 16:45:40

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024112224578857 
 Hora: 16:45:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010210990905762 
 Hora: 16:45:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010585069656372 
 Hora: 16:45:42

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.036339998245239 
 Hora: 16:45:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011021852493286 
 Hora: 16:45:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061829090118408 
 Hora: 16:45:47

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014899015426636 
 Hora: 16:45:47

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.01813006401062 
 Hora: 16:45:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010264873504639 
 Hora: 16:45:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081799030303955 
 Hora: 16:46:46

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022140026092529 
 Hora: 16:46:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010648012161255 
 Hora: 16:46:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010437965393066 
 Hora: 16:46:49

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.032767057418823 
 Hora: 16:46:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011453866958618 
 Hora: 16:46:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010211229324341 
 Hora: 16:47:06

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024650096893311 
 Hora: 16:47:06

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.021744012832642 
 Hora: 16:47:06

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.016257047653198 
 Hora: 16:47:06

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='16/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.024994134902954 
 Hora: 16:47:06

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1910'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.094434976577759 
 Hora: 16:47:06

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.021552085876465 
 Hora: 16:47:06

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.018038988113403 
 Hora: 16:47:06

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.01848292350769 
 Hora: 16:47:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011356830596924 
 Hora: 16:47:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080900192260742 
 Hora: 16:47:08

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021371841430664 
 Hora: 16:47:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012433052062988 
 Hora: 16:47:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099451541900635 
 Hora: 16:47:13

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021438837051392 
 Hora: 16:47:13

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019103050231934 
 Hora: 16:47:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076479911804199 
 Hora: 16:47:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011219024658203 
 Hora: 16:47:23

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023297071456909 
 Hora: 16:47:23

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.02032995223999 
 Hora: 16:47:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090360641479492 
 Hora: 16:47:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092358589172363 
 Hora: 16:48:24

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022265911102295 
 Hora: 16:48:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010344982147217 
 Hora: 16:48:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012787103652954 
 Hora: 16:48:27

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.03690505027771 
 Hora: 16:48:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01737904548645 
 Hora: 16:48:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01276707649231 
 Hora: 16:48:32

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.028645038604736 
 Hora: 16:48:32

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020411014556885 
 Hora: 16:48:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084941387176514 
 Hora: 16:48:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082001686096191 
 Hora: 16:48:34

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.035439968109131 
 Hora: 16:48:34

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.040153980255127 
 Hora: 16:48:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013098001480103 
 Hora: 16:48:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016709089279175 
 Hora: 16:48:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024725914001465 
 Hora: 16:48:36

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025924921035767 
 Hora: 16:48:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010780096054077 
 Hora: 16:48:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011061906814575 
 Hora: 16:48:37

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.024648904800415 
 Hora: 16:48:37

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.030570983886719 
 Hora: 16:48:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079050064086914 
 Hora: 16:48:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013756990432739 
 Hora: 16:48:56

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018333911895752 
 Hora: 16:48:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086469650268555 
 Hora: 16:48:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025776863098145 
 Hora: 16:48:59

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.031332969665527 
 Hora: 16:48:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011888980865479 
 Hora: 16:48:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017535924911499 
 Hora: 16:49:02

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024432897567749 
 Hora: 16:49:02

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.027626037597656 
 Hora: 16:49:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012813091278076 
 Hora: 16:49:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007720947265625 
 Hora: 16:51:56

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.028594970703125 
 Hora: 16:51:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009321928024292 
 Hora: 16:51:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075149536132812 
 Hora: 16:51:58

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020356178283691 
 Hora: 16:51:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010746955871582 
 Hora: 16:51:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011834859848022 
 Hora: 16:52:01

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016366004943848 
 Hora: 16:52:01

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020389080047607 
 Hora: 16:52:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087809562683105 
 Hora: 16:52:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070791244506836 
 Hora: 16:52:09

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.027976036071777 
 Hora: 16:52:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090899467468262 
 Hora: 16:52:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011358976364136 
 Hora: 16:52:09

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019021987915039 
 Hora: 16:52:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011514902114868 
 Hora: 16:52:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023709774017334 
 Hora: 16:52:10

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022510051727295 
 Hora: 16:52:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01318883895874 
 Hora: 16:52:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010220050811768 
 Hora: 16:52:10

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.027611017227173 
 Hora: 16:52:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084638595581055 
 Hora: 16:52:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009188175201416 
 Hora: 16:52:12

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.039481163024902 
 Hora: 16:52:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01521897315979 
 Hora: 16:52:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01050591468811 
 Hora: 16:52:25

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.028566122055054 
 Hora: 16:52:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010973215103149 
 Hora: 16:52:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01157283782959 
 Hora: 16:52:27

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.050648927688599 
 Hora: 16:52:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.036230087280273 
 Hora: 16:52:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011760950088501 
 Hora: 16:52:31

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.026494979858398 
 Hora: 16:52:31

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021589040756226 
 Hora: 16:52:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016341209411621 
 Hora: 16:52:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010822057723999 
 Hora: 16:52:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014318943023682 
 Hora: 16:52:36

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.027835845947266 
 Hora: 16:52:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013860940933228 
 Hora: 16:52:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093021392822266 
 Hora: 16:53:30

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023667097091675 
 Hora: 16:53:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069408416748047 
 Hora: 16:53:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01295018196106 
 Hora: 16:53:33

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.04686713218689 
 Hora: 16:53:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017493009567261 
 Hora: 16:53:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077798366546631 
 Hora: 16:53:38

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.10442495346069 
 Hora: 16:53:38

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014004945755005 
 Hora: 16:53:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074598789215088 
 Hora: 16:53:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012768030166626 
 Hora: 16:53:40

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.03179407119751 
 Hora: 16:53:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023196935653687 
 Hora: 16:53:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012037992477417 
 Hora: 16:53:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093159675598145 
 Hora: 16:54:19

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.026776075363159 
 Hora: 16:54:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059471130371094 
 Hora: 16:54:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013964891433716 
 Hora: 16:54:21

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028647184371948 
 Hora: 16:54:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080568790435791 
 Hora: 16:54:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084519386291504 
 Hora: 16:54:26

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.027963876724243 
 Hora: 16:54:26

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019428014755249 
 Hora: 16:54:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094130039215088 
 Hora: 16:54:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011415004730225 
 Hora: 16:54:28

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.030472040176392 
 Hora: 16:54:28

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025122880935669 
 Hora: 16:54:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014158010482788 
 Hora: 16:54:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017144918441772 
 Hora: 16:54:33

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021193027496338 
 Hora: 16:54:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010844945907593 
 Hora: 16:54:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012452125549316 
 Hora: 16:54:35

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.02902889251709 
 Hora: 16:54:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016128063201904 
 Hora: 16:54:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057880878448486 
 Hora: 16:55:15

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020725965499878 
 Hora: 16:55:15

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.018208980560303 
 Hora: 16:55:15

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.018355131149292 
 Hora: 16:55:15

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='16/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.021502017974854 
 Hora: 16:55:15

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1910'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.10043787956238 
 Hora: 16:55:15

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.017087936401367 
 Hora: 16:55:15

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.019094944000244 
 Hora: 16:55:15

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.014960050582886 
 Hora: 16:55:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082199573516846 
 Hora: 16:55:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01875901222229 
 Hora: 16:55:18

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.044245958328247 
 Hora: 16:55:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096549987792969 
 Hora: 16:55:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088880062103271 
 Hora: 16:55:22

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019227027893066 
 Hora: 16:55:22

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.012970924377441 
 Hora: 16:55:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011687040328979 
 Hora: 16:55:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024924039840698 
 Hora: 16:55:25

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.033444166183472 
 Hora: 16:55:25

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.030282974243164 
 Hora: 16:55:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013401985168457 
 Hora: 16:55:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007606029510498 
 Hora: 16:55:58

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021268844604492 
 Hora: 16:55:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087518692016602 
 Hora: 16:55:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071079730987549 
 Hora: 16:56:01

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.039004802703857 
 Hora: 16:56:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010188102722168 
 Hora: 16:56:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076448917388916 
 Hora: 16:56:32

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020876884460449 
 Hora: 16:56:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068659782409668 
 Hora: 16:56:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070469379425049 
 Hora: 16:56:34

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025866031646729 
 Hora: 16:56:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013267040252686 
 Hora: 16:56:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011687994003296 
 Hora: 16:56:37

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015069007873535 
 Hora: 16:56:37

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019294023513794 
 Hora: 16:56:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0105299949646 
 Hora: 16:56:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074310302734375 
 Hora: 16:57:43

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024325132369995 
 Hora: 16:57:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0045809745788574 
 Hora: 16:57:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098280906677246 
 Hora: 16:57:45

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.036422967910767 
 Hora: 16:57:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010775089263916 
 Hora: 16:57:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016594886779785 
 Hora: 16:57:48

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019363164901733 
 Hora: 16:57:48

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020725011825562 
 Hora: 16:57:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010640144348145 
 Hora: 16:57:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023329973220825 
 Hora: 16:57:50

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.028814077377319 
 Hora: 16:57:50

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.034991025924683 
 Hora: 16:57:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013957023620605 
 Hora: 16:57:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013540983200073 
 Hora: 16:58:11

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023618221282959 
 Hora: 16:58:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013125896453857 
 Hora: 16:58:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013017892837524 
 Hora: 16:58:14

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.043435096740723 
 Hora: 16:58:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012533903121948 
 Hora: 16:58:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010164022445679 
 Hora: 16:58:17

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017508029937744 
 Hora: 16:58:17

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019361019134521 
 Hora: 16:58:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010873079299927 
 Hora: 16:58:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016889810562134 
 Hora: 16:58:20

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.024689912796021 
 Hora: 16:58:20

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.037645101547241 
 Hora: 16:58:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011744976043701 
 Hora: 16:58:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011625051498413 
 Hora: 16:58:25

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='98' 
 Ejecutado en: 0.059945106506348 
 Hora: 16:58:25

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027302026748657 
 Hora: 16:58:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015655040740967 
 Hora: 16:58:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010308027267456 
 Hora: 16:58:32

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.023638010025024 
 Hora: 16:58:32

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.028598070144653 
 Hora: 16:58:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093419551849365 
 Hora: 16:58:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010712862014771 
 Hora: 16:58:38

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02121901512146 
 Hora: 16:58:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01019811630249 
 Hora: 16:58:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012678146362305 
 Hora: 16:58:40

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023178815841675 
 Hora: 16:58:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091919898986816 
 Hora: 16:58:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01190185546875 
 Hora: 16:58:45

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014371871948242 
 Hora: 16:58:45

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018101930618286 
 Hora: 16:58:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0047240257263184 
 Hora: 16:58:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011603116989136 
 Hora: 16:58:46

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.022495985031128 
 Hora: 16:58:46

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.03759503364563 
 Hora: 16:58:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058391094207764 
 Hora: 16:58:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015315055847168 
 Hora: 17:00:38

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.02875804901123 
 Hora: 17:00:38

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.034770011901855 
 Hora: 17:00:38

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.032773971557617 
 Hora: 17:00:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011827945709229 
 Hora: 17:00:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073750019073486 
 Hora: 17:01:06

exec p_admarh_getComparativoNominas @TipoNominaId = '3',
									 @IdConcepto = '45',
									 @IdNomina1 = '1910',
									 @IdNomina2 = '1910',
									 @DescNomina1 = '2A FEBRERO DE 2025 - CONSEJO',
									 @DescNomina2 = '2A FEBRERO DE 2025 - CONSEJO' 
 Ejecutado en: 4.3943729400635 
 Hora: 17:01:06

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024691104888916 
 Hora: 17:01:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058760643005371 
 Hora: 17:01:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099859237670898 
 Hora: 17:01:18

SELECT *
FROM "cat_TipoNomina"
WHERE "ACTIVO" = 1 
 Ejecutado en: 0.020869970321655 
 Hora: 17:01:18

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.017524003982544 
 Hora: 17:01:18

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.016716957092285 
 Hora: 17:01:18

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "EsPercepcion" = 1
AND "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.020430088043213 
 Hora: 17:01:18

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.016608953475952 
 Hora: 17:01:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009890079498291 
 Hora: 17:01:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01724100112915 
 Hora: 17:01:18

SELECT *
FROM "cat_TipoNomina"
WHERE "ACTIVO" = 1 
 Ejecutado en: 0.018215894699097 
 Hora: 17:01:18

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.017920017242432 
 Hora: 17:01:18

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.022630929946899 
 Hora: 17:01:18

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "EsPercepcion" = 1
AND "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.01456093788147 
 Hora: 17:01:18

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.036303043365479 
 Hora: 17:01:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078990459442139 
 Hora: 17:01:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010006189346313 
 Hora: 17:01:18

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.032397985458374 
 Hora: 17:01:18

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027773857116699 
 Hora: 17:01:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090618133544922 
 Hora: 17:01:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010788917541504 
 Hora: 17:01:19

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.020694017410278 
 Hora: 17:01:19

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.035803079605103 
 Hora: 17:01:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012341976165771 
 Hora: 17:01:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075531005859375 
 Hora: 17:19:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093729496002197 
 Hora: 17:19:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01018500328064 
 Hora: 17:19:19

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.024710893630981 
 Hora: 17:19:19

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022118091583252 
 Hora: 17:19:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079140663146973 
 Hora: 17:19:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086309909820557 
 Hora: 17:19:21

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024026155471802 
 Hora: 17:19:21

SELECT cat_Categorias.*
FROM "cat_Categorias" 
 Ejecutado en: 0.017208099365234 
 Hora: 17:19:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088520050048828 
 Hora: 17:19:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057830810546875 
 Hora: 17:19:22

SELECT *
FROM "Cat_DiasFestivos" 
 Ejecutado en: 0.016388893127441 
 Hora: 17:19:22

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022090911865234 
 Hora: 17:19:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092868804931641 
 Hora: 17:19:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082290172576904 
 Hora: 17:19:23

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023902177810669 
 Hora: 17:19:23

SELECT Cat_Emisores.*
FROM "Cat_Emisores"
WHERE "Activo" = 1 
 Ejecutado en: 0.015201091766357 
 Hora: 17:19:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090579986572266 
 Hora: 17:19:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092179775238037 
 Hora: 17:19:23

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.016853094100952 
 Hora: 17:19:23

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02107310295105 
 Hora: 17:19:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095529556274414 
 Hora: 17:19:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010843992233276 
 Hora: 17:21:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010114908218384 
 Hora: 17:21:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087900161743164 
 Hora: 17:21:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013022899627686 
 Hora: 17:21:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011056900024414 
 Hora: 17:21:58

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.027587175369263 
 Hora: 17:21:58

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020380973815918 
 Hora: 17:21:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012134075164795 
 Hora: 17:21:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00844407081604 
 Hora: 17:21:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006976842880249 
 Hora: 17:21:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073699951171875 
 Hora: 17:21:58

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.021433115005493 
 Hora: 17:21:58

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020364046096802 
 Hora: 17:21:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059881210327148 
 Hora: 17:21:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075230598449707 
 Hora: 17:21:58

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.021688938140869 
 Hora: 17:21:58

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025644063949585 
 Hora: 17:21:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064330101013184 
 Hora: 17:21:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010133028030396 
 Hora: 17:22:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010825872421265 
 Hora: 17:22:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090980529785156 
 Hora: 17:22:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0047049522399902 
 Hora: 17:22:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059258937835693 
 Hora: 17:22:04

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.03069806098938 
 Hora: 17:22:04

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.021724939346313 
 Hora: 17:22:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092759132385254 
 Hora: 17:22:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097310543060303 
 Hora: 17:22:05

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.036204814910889 
 Hora: 17:22:05

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.012996912002563 
 Hora: 17:22:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011418104171753 
 Hora: 17:22:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010214805603027 
 Hora: 17:22:05

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.020696878433228 
 Hora: 17:22:05

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.017665863037109 
 Hora: 17:22:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024994134902954 
 Hora: 17:22:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095429420471191 
 Hora: 17:22:05

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.013931035995483 
 Hora: 17:22:05

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.01741099357605 
 Hora: 17:22:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012495994567871 
 Hora: 17:22:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006594181060791 
 Hora: 17:22:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073528289794922 
 Hora: 17:22:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01331615447998 
 Hora: 17:22:10

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.037591934204102 
 Hora: 17:22:10

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02021598815918 
 Hora: 17:22:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010870933532715 
 Hora: 17:22:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095839500427246 
 Hora: 17:23:23

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022509098052979 
 Hora: 17:23:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010715007781982 
 Hora: 17:23:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010009765625 
 Hora: 17:23:24

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.024986028671265 
 Hora: 17:23:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070419311523438 
 Hora: 17:23:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009580135345459 
 Hora: 17:23:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093200206756592 
 Hora: 17:23:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098249912261963 
 Hora: 17:23:27

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.018147945404053 
 Hora: 17:23:27

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.016026973724365 
 Hora: 17:23:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094599723815918 
 Hora: 17:23:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009350061416626 
 Hora: 17:24:11

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027959108352661 
 Hora: 17:24:11

SELECT cat_Categorias.*
FROM "cat_Categorias" 
 Ejecutado en: 0.018543004989624 
 Hora: 17:24:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078980922698975 
 Hora: 17:24:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070340633392334 
 Hora: 17:24:14

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.021829128265381 
 Hora: 17:24:14

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.014292001724243 
 Hora: 17:24:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066280364990234 
 Hora: 17:24:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010277986526489 
 Hora: 17:25:57

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018348932266235 
 Hora: 17:25:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010251045227051 
 Hora: 17:25:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097689628601074 
 Hora: 17:26:00

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.024641990661621 
 Hora: 17:26:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013585090637207 
 Hora: 17:26:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010406970977783 
 Hora: 17:26:04

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021317005157471 
 Hora: 17:26:04

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.0094759464263916 
 Hora: 17:26:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009570837020874 
 Hora: 17:26:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068721771240234 
 Hora: 17:26:06

exec p_admarh_ListadoVacaciones  @PresupuestoId = '0002',
						@PeriodoId = '958',
						@Tomadas = 0,
						@IdDependencia ='274' 
 Ejecutado en: 0.020325183868408 
 Hora: 17:26:06

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022106885910034 
 Hora: 17:26:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0053291320800781 
 Hora: 17:26:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064539909362793 
 Hora: 17:27:38

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.020007848739624 
 Hora: 17:27:38

SELECT *
FROM "ParametrosdeSistema"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.017604112625122 
 Hora: 17:27:38

SELECT *
FROM "ParametrosMovsRH"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.019331216812134 
 Hora: 17:27:38

SELECT *
FROM "ParamSystemTipoNomimas"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.013698101043701 
 Hora: 17:27:38

SELECT *
FROM "Param_ValoresENomina"
WHERE "Presupuestoid" = '0002' 
 Ejecutado en: 0.020033121109009 
 Hora: 17:27:38

SELECT *
FROM "ParametrosGenerales" 
 Ejecutado en: 0.018595933914185 
 Hora: 17:27:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085570812225342 
 Hora: 17:27:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098941326141357 
 Hora: 17:27:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064888000488281 
 Hora: 17:27:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010794878005981 
 Hora: 17:27:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061299800872803 
 Hora: 17:27:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095419883728027 
 Hora: 17:27:40

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.016500949859619 
 Hora: 17:27:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026911973953247 
 Hora: 17:27:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070850849151611 
 Hora: 17:27:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058908462524414 
 Hora: 17:27:40

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.017616033554077 
 Hora: 17:27:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.028362989425659 
 Hora: 17:27:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081350803375244 
 Hora: 17:27:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097451210021973 
 Hora: 17:27:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0044469833374023 
 Hora: 17:27:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095808506011963 
 Hora: 17:27:42

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.023770809173584 
 Hora: 17:27:42

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022382974624634 
 Hora: 17:27:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098481178283691 
 Hora: 17:27:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087029933929443 
 Hora: 18:02:21

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018315076828003 
 Hora: 18:02:21

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.017101049423218 
 Hora: 18:02:21

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.017520904541016 
 Hora: 18:02:21

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='16/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.013334989547729 
 Hora: 18:02:21

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1910'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.087560892105103 
 Hora: 18:02:21

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.017398834228516 
 Hora: 18:02:21

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.017853975296021 
 Hora: 18:02:21

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.016039848327637 
 Hora: 18:02:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009227991104126 
 Hora: 18:02:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0056478977203369 
 Hora: 18:02:23

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021225929260254 
 Hora: 18:02:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010571956634521 
 Hora: 18:02:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087020397186279 
 Hora: 18:02:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0046219825744629 
 Hora: 18:02:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059800148010254 
 Hora: 18:02:27

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.015728950500488 
 Hora: 18:02:27

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024956941604614 
 Hora: 18:02:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094699859619141 
 Hora: 18:02:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098230838775635 
 Hora: 18:02:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072770118713379 
 Hora: 18:02:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008080005645752 
 Hora: 18:02:28

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.021939039230347 
 Hora: 18:02:28

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02232813835144 
 Hora: 18:02:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063831806182861 
 Hora: 18:02:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010004043579102 
 Hora: 18:07:11

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.026821851730347 
 Hora: 18:07:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088460445404053 
 Hora: 18:07:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085759162902832 
 Hora: 18:07:12

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027108907699585 
 Hora: 18:07:12

SELECT cat_Dependencias.Id,cat_Dependencias.Clave,cat_Dependencias.Descripcion,cua.Descripcion as UnidadAdmva,cda.Descripcion as DireccionAdmva, ce.Nombre as Edificio, cat_Dependencias.IdUniAdmvas,ccc.CentroCosto
FROM "cat_Dependencias"
JOIN "cat_Edificios" "ce" ON "cat_Dependencias"."Id_Edificio" = "ce"."Id"
JOIN "Cat_UniAdmvas" "cua" ON "cat_Dependencias"."IdUniAdmvas" = "cua"."IdUniAdmvas"
JOIN "Cat_DireccionAdmvas" "cda" ON "cua"."IdDireccion" = "cda"."IdDireccion"
LEFT JOIN "Cat_CentrodeCostos_Arcon" "ccc" ON "cat_Dependencias"."CuentaId" = "ccc"."ClaveCentroCosto"
WHERE "cat_Dependencias"."Cancelado" = 0
AND "ProgramaId" = '0002' 
 Ejecutado en: 0.063904047012329 
 Hora: 18:07:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073018074035645 
 Hora: 18:07:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010124206542969 
 Hora: 18:07:12

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022430896759033 
 Hora: 18:07:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0051500797271729 
 Hora: 18:07:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010526895523071 
 Hora: 18:07:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009753942489624 
 Hora: 18:07:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010803937911987 
 Hora: 18:07:15

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.027487993240356 
 Hora: 18:07:15

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023766040802002 
 Hora: 18:07:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010195016860962 
 Hora: 18:07:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016578912734985 
 Hora: 18:07:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011178016662598 
 Hora: 18:07:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067369937896729 
 Hora: 18:07:24

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.010347843170166 
 Hora: 18:07:24

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.012278079986572 
 Hora: 18:07:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065920352935791 
 Hora: 18:07:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088019371032715 
 Hora: 18:07:25

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.019850969314575 
 Hora: 18:07:25

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.022807121276855 
 Hora: 18:07:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009876012802124 
 Hora: 18:07:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006065845489502 
 Hora: 18:07:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093221664428711 
 Hora: 18:07:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011938095092773 
 Hora: 18:07:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010969877243042 
 Hora: 18:07:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0034768581390381 
 Hora: 18:07:26

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.024599075317383 
 Hora: 18:07:26

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022964954376221 
 Hora: 18:07:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015229940414429 
 Hora: 18:07:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060269832611084 
 Hora: 18:07:27

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.021759986877441 
 Hora: 18:07:27

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022401094436646 
 Hora: 18:07:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0036258697509766 
 Hora: 18:07:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084898471832275 
 Hora: 18:08:11

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.020110130310059 
 Hora: 18:08:11

SELECT *
FROM "ParametrosdeSistema"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.021806001663208 
 Hora: 18:08:11

SELECT *
FROM "ParametrosMovsRH"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.017922878265381 
 Hora: 18:08:11

SELECT *
FROM "ParamSystemTipoNomimas"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.021087884902954 
 Hora: 18:08:11

SELECT *
FROM "Param_ValoresENomina"
WHERE "Presupuestoid" = '0002' 
 Ejecutado en: 0.020807981491089 
 Hora: 18:08:11

SELECT *
FROM "ParametrosGenerales" 
 Ejecutado en: 0.018040180206299 
 Hora: 18:08:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006587028503418 
 Hora: 18:08:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012156009674072 
 Hora: 18:08:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010986804962158 
 Hora: 18:08:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010809183120728 
 Hora: 18:08:12

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.016976118087769 
 Hora: 18:08:12

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021202087402344 
 Hora: 18:08:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021667957305908 
 Hora: 18:08:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084760189056396 
 Hora: 18:11:18

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021471977233887 
 Hora: 18:11:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010683059692383 
 Hora: 18:11:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012374877929688 
 Hora: 18:11:19

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021574974060059 
 Hora: 18:11:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011197805404663 
 Hora: 18:11:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0041251182556152 
 Hora: 18:11:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069460868835449 
 Hora: 18:11:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012449026107788 
 Hora: 18:11:24

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.02140998840332 
 Hora: 18:11:24

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024673938751221 
 Hora: 18:11:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096199512481689 
 Hora: 18:11:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068111419677734 
 Hora: 18:11:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024853944778442 
 Hora: 18:11:40

SELECT cat_Categorias.*
FROM "cat_Categorias" 
 Ejecutado en: 0.03235912322998 
 Hora: 18:11:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081191062927246 
 Hora: 18:11:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010438203811646 
 Hora: 18:13:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01010799407959 
 Hora: 18:13:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095851421356201 
 Hora: 18:13:02

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.021000862121582 
 Hora: 18:13:02

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02369499206543 
 Hora: 18:13:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0056328773498535 
 Hora: 18:13:02

