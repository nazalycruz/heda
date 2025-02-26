<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082659721374512 
 Hora: 08:15:39

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015905857086182 
 Hora: 08:15:39

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016396999359131 
 Hora: 08:15:39

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '11' 
 Ejecutado en: 0.23607611656189 
 Hora: 08:15:39

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.084636926651001 
 Hora: 08:15:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010699987411499 
 Hora: 08:15:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095829963684082 
 Hora: 08:16:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096738338470459 
 Hora: 08:16:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01711893081665 
 Hora: 08:16:21

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.029356956481934 
 Hora: 08:16:21

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.045165777206421 
 Hora: 08:16:21

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.17905402183533 
 Hora: 08:16:21

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024457931518555 
 Hora: 08:16:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01708197593689 
 Hora: 08:16:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01282000541687 
 Hora: 08:16:24

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017605781555176 
 Hora: 08:16:24

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020789861679077 
 Hora: 08:16:24

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.18486213684082 
 Hora: 08:16:24

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02754807472229 
 Hora: 08:16:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099270343780518 
 Hora: 08:16:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010017156600952 
 Hora: 08:22:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010361194610596 
 Hora: 08:22:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011584997177124 
 Hora: 08:22:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017833948135376 
 Hora: 08:22:21

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '19/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.20356917381287 
 Hora: 08:22:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088319778442383 
 Hora: 08:22:32

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020615816116333 
 Hora: 08:22:32

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.030088186264038 
 Hora: 08:22:32

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.18635606765747 
 Hora: 08:22:32

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.059130907058716 
 Hora: 08:22:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091910362243652 
 Hora: 08:22:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025772094726562 
 Hora: 08:22:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.031347036361694 
 Hora: 08:22:36

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021955966949463 
 Hora: 08:22:36

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.18465995788574 
 Hora: 08:22:36

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.04105806350708 
 Hora: 08:22:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013331890106201 
 Hora: 08:22:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02072811126709 
 Hora: 08:22:43

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.038733959197998 
 Hora: 08:22:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019165992736816 
 Hora: 08:22:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.03427791595459 
 Hora: 08:22:44

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.096850156784058 
 Hora: 08:22:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.036916017532349 
 Hora: 08:22:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086090564727783 
 Hora: 08:23:02

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020610094070435 
 Hora: 08:23:02

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.022596120834351 
 Hora: 08:23:02

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.19217801094055 
 Hora: 08:23:02

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.046594858169556 
 Hora: 08:23:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011507987976074 
 Hora: 08:23:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.073794841766357 
 Hora: 08:23:06

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.14416790008545 
 Hora: 08:23:06

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.14818906784058 
 Hora: 08:23:06

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.36823797225952 
 Hora: 08:23:06

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.19197511672974 
 Hora: 08:23:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.080734968185425 
 Hora: 08:23:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.058289051055908 
 Hora: 08:23:22

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.09581184387207 
 Hora: 08:23:22

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.098006010055542 
 Hora: 08:23:22

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '23' 
 Ejecutado en: 0.23904991149902 
 Hora: 08:23:22

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.11622405052185 
 Hora: 08:23:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.052012920379639 
 Hora: 08:23:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.031590938568115 
 Hora: 08:30:54

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.11568117141724 
 Hora: 08:30:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.046509981155396 
 Hora: 08:30:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.067334890365601 
 Hora: 08:30:56

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.11728000640869 
 Hora: 08:30:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.065907001495361 
 Hora: 08:30:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.06712794303894 
 Hora: 08:31:28

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.14205408096313 
 Hora: 08:31:28

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.12733197212219 
 Hora: 08:31:28

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.35351181030273 
 Hora: 08:31:28

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.15191292762756 
 Hora: 08:31:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.057036161422729 
 Hora: 08:31:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.079972982406616 
 Hora: 08:31:59

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.12808418273926 
 Hora: 08:31:59

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.15447092056274 
 Hora: 08:31:59

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.39313697814941 
 Hora: 08:31:59

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.13316583633423 
 Hora: 08:31:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.063936948776245 
 Hora: 08:31:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.070215940475464 
 Hora: 08:32:01

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.11703085899353 
 Hora: 08:32:01

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.14884901046753 
 Hora: 08:32:01

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.3070228099823 
 Hora: 08:32:01

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.15557289123535 
 Hora: 08:32:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.048597097396851 
 Hora: 08:32:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.062556028366089 
 Hora: 08:32:03

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.14256310462952 
 Hora: 08:32:03

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.11894989013672 
 Hora: 08:32:03

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.2702739238739 
 Hora: 08:32:03

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.13134694099426 
 Hora: 08:32:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.079691886901855 
 Hora: 08:32:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.055791139602661 
 Hora: 08:33:36

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.10454511642456 
 Hora: 08:33:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.044718980789185 
 Hora: 08:33:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.049658060073853 
 Hora: 08:33:37

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.10734009742737 
 Hora: 08:33:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.051496028900146 
 Hora: 08:33:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.060766935348511 
 Hora: 08:34:08

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.13352799415588 
 Hora: 08:34:08

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.11568713188171 
 Hora: 08:34:08

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.27167510986328 
 Hora: 08:34:08

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.1034688949585 
 Hora: 08:34:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.064899921417236 
 Hora: 08:34:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.066674947738647 
 Hora: 08:34:11

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.14142298698425 
 Hora: 08:34:11

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.17188715934753 
 Hora: 08:34:11

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.61262512207031 
 Hora: 08:34:11

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.13892316818237 
 Hora: 08:34:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.071325063705444 
 Hora: 08:34:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025170087814331 
 Hora: 08:35:16

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.064983129501343 
 Hora: 08:35:16

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.071280002593994 
 Hora: 08:35:16

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.28223204612732 
 Hora: 08:35:16

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.057571887969971 
 Hora: 08:35:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028856992721558 
 Hora: 08:35:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.056302785873413 
 Hora: 08:35:19

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.10146713256836 
 Hora: 08:35:19

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.084877014160156 
 Hora: 08:35:19

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.28741908073425 
 Hora: 08:35:19

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.13298916816711 
 Hora: 08:35:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.071593999862671 
 Hora: 08:35:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.057205200195312 
 Hora: 08:35:26

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.098582029342651 
 Hora: 08:35:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.05367112159729 
 Hora: 08:35:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.072886943817139 
 Hora: 08:35:28

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.11002898216248 
 Hora: 08:35:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.069709062576294 
 Hora: 08:35:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.10294604301453 
 Hora: 08:36:09

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.2237069606781 
 Hora: 08:36:09

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.21779203414917 
 Hora: 08:36:09

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.43295001983643 
 Hora: 08:36:09

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.16525602340698 
 Hora: 08:36:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.092419147491455 
 Hora: 08:36:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.04827094078064 
 Hora: 08:36:38

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.11934089660645 
 Hora: 08:36:38

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.126216173172 
 Hora: 08:36:38

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.28110289573669 
 Hora: 08:36:38

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.10967993736267 
 Hora: 08:36:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.050499200820923 
 Hora: 08:36:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.092747926712036 
 Hora: 08:36:41

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.20101094245911 
 Hora: 08:36:41

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.19211196899414 
 Hora: 08:36:41

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.27578687667847 
 Hora: 08:36:41

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.13750815391541 
 Hora: 08:36:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.10616207122803 
 Hora: 08:36:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.048256874084473 
 Hora: 08:36:42

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.06571102142334 
 Hora: 08:36:42

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.10203504562378 
 Hora: 08:36:42

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.25547790527344 
 Hora: 08:36:42

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.12306904792786 
 Hora: 08:36:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.043823003768921 
 Hora: 08:36:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.066970825195312 
 Hora: 08:39:22

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.13307094573975 
 Hora: 08:39:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.071141958236694 
 Hora: 08:39:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.056511163711548 
 Hora: 08:39:23

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.11208581924438 
 Hora: 08:39:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.049370050430298 
 Hora: 08:39:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.048139095306396 
 Hora: 08:39:55

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.05809497833252 
 Hora: 08:39:55

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.022685050964355 
 Hora: 08:39:55

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.21722984313965 
 Hora: 08:39:55

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.17690086364746 
 Hora: 08:39:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029469966888428 
 Hora: 08:39:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.076687097549438 
 Hora: 08:39:59

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.18079090118408 
 Hora: 08:39:59

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.17092704772949 
 Hora: 08:39:59

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.35064601898193 
 Hora: 08:39:59

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.19719886779785 
 Hora: 08:39:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.075491189956665 
 Hora: 08:39:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.050266981124878 
 Hora: 08:40:06

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.10777902603149 
 Hora: 08:40:06

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.10345506668091 
 Hora: 08:40:06

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '955', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.31279110908508 
 Hora: 08:40:06

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.15528392791748 
 Hora: 08:40:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.053346872329712 
 Hora: 08:40:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.048007011413574 
 Hora: 08:43:46

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.083899021148682 
 Hora: 08:43:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.033224821090698 
 Hora: 08:43:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.047598123550415 
 Hora: 08:43:48

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.074877977371216 
 Hora: 08:43:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019346952438354 
 Hora: 08:43:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.044076919555664 
 Hora: 08:44:20

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.084694862365723 
 Hora: 08:44:20

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.09286904335022 
 Hora: 08:44:20

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.22096300125122 
 Hora: 08:44:20

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.14399290084839 
 Hora: 08:44:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.04633903503418 
 Hora: 08:44:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.077168941497803 
 Hora: 08:44:24

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.1668221950531 
 Hora: 08:44:24

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.13191103935242 
 Hora: 08:44:24

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.34736800193787 
 Hora: 08:44:24

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.16954612731934 
 Hora: 08:44:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.078990936279297 
 Hora: 08:44:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.055822134017944 
 Hora: 08:45:04

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.10564804077148 
 Hora: 08:45:04

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.10161900520325 
 Hora: 08:45:04

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '34' 
 Ejecutado en: 0.28992986679077 
 Hora: 08:45:04

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.1725070476532 
 Hora: 08:45:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.052836894989014 
 Hora: 08:45:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.08992600440979 
 Hora: 08:52:14

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.20032000541687 
 Hora: 08:52:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.089424848556519 
 Hora: 08:52:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.063485145568848 
 Hora: 08:52:16

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.13276290893555 
 Hora: 08:52:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.065315008163452 
 Hora: 08:52:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.038182020187378 
 Hora: 08:52:43

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.06890606880188 
 Hora: 08:52:43

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.075660943984985 
 Hora: 08:52:43

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.21589708328247 
 Hora: 08:52:43

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.12798285484314 
 Hora: 08:52:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.034918069839478 
 Hora: 08:52:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.062939882278442 
 Hora: 08:52:46

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.15623712539673 
 Hora: 08:52:46

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.10197710990906 
 Hora: 08:52:46

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.25665783882141 
 Hora: 08:52:46

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.10526704788208 
 Hora: 08:52:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.074472904205322 
 Hora: 08:52:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.043060064315796 
 Hora: 08:59:38

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.10603499412537 
 Hora: 08:59:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.042062997817993 
 Hora: 08:59:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.064901113510132 
 Hora: 08:59:40

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.12365293502808 
 Hora: 08:59:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.044787168502808 
 Hora: 08:59:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0712890625 
 Hora: 09:00:07

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.15183806419373 
 Hora: 09:00:07

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.16418600082397 
 Hora: 09:00:07

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.31937909126282 
 Hora: 09:00:07

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.090405941009521 
 Hora: 09:00:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.081763982772827 
 Hora: 09:00:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.052239179611206 
 Hora: 09:00:12

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.11325907707214 
 Hora: 09:00:12

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.10229897499084 
 Hora: 09:00:12

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.24201798439026 
 Hora: 09:00:12

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.12272787094116 
 Hora: 09:00:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.057631015777588 
 Hora: 09:00:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023268938064575 
 Hora: 09:02:40

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.072218894958496 
 Hora: 09:02:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.036879062652588 
 Hora: 09:02:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.045936822891235 
 Hora: 09:02:42

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.15372109413147 
 Hora: 09:02:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.068672895431519 
 Hora: 09:02:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.074046850204468 
 Hora: 09:03:14

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.11200284957886 
 Hora: 09:03:14

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.11672306060791 
 Hora: 09:03:14

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.28797006607056 
 Hora: 09:03:14

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.077322006225586 
 Hora: 09:03:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.071499109268188 
 Hora: 09:03:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027619123458862 
 Hora: 09:03:40

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.048413038253784 
 Hora: 09:03:40

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.048301935195923 
 Hora: 09:03:40

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.233158826828 
 Hora: 09:03:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.11433887481689 
 Hora: 09:03:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021517992019653 
 Hora: 09:03:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.12928986549377 
 Hora: 09:03:41

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.078361034393311 
 Hora: 09:03:41

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.088727951049805 
 Hora: 09:03:41

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.25995516777039 
 Hora: 09:03:41

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.086582183837891 
 Hora: 09:03:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.036366939544678 
 Hora: 09:03:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.07654595375061 
 Hora: 09:03:44

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.19991397857666 
 Hora: 09:03:44

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.2135808467865 
 Hora: 09:03:44

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.41463303565979 
 Hora: 09:03:44

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.2631778717041 
 Hora: 09:03:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.082666873931885 
 Hora: 09:03:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010487079620361 
 Hora: 09:07:15

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.030933141708374 
 Hora: 09:07:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014890909194946 
 Hora: 09:07:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.045875072479248 
 Hora: 09:07:17

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.1117799282074 
 Hora: 09:07:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.042707920074463 
 Hora: 09:07:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.070580005645752 
 Hora: 09:07:47

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.11721587181091 
 Hora: 09:07:47

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.11169099807739 
 Hora: 09:07:47

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.26356291770935 
 Hora: 09:07:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.07244610786438 
 Hora: 09:07:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.065710067749023 
 Hora: 09:08:13

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.13322305679321 
 Hora: 09:08:13

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.11159896850586 
 Hora: 09:08:13

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.30909991264343 
 Hora: 09:08:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.075735092163086 
 Hora: 09:08:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.049514055252075 
 Hora: 09:08:44

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.095046997070312 
 Hora: 09:08:44

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.11465716362 
 Hora: 09:08:44

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.26272487640381 
 Hora: 09:08:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.045360803604126 
 Hora: 09:08:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.16102719306946 
 Hora: 09:08:47

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.11806392669678 
 Hora: 09:08:47

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.14738583564758 
 Hora: 09:08:47

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.30646085739136 
 Hora: 09:08:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.073973894119263 
 Hora: 09:08:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.083849906921387 
 Hora: 09:08:48

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.14025402069092 
 Hora: 09:08:48

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.13891196250916 
 Hora: 09:08:48

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.29635286331177 
 Hora: 09:08:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.067503929138184 
 Hora: 09:08:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.062228918075562 
 Hora: 09:09:02

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.10941314697266 
 Hora: 09:09:02

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.12336897850037 
 Hora: 09:09:02

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.30070209503174 
 Hora: 09:09:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.06920599937439 
 Hora: 09:09:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.064236879348755 
 Hora: 09:13:21

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.14274406433105 
 Hora: 09:13:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.05234694480896 
 Hora: 09:13:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.078110933303833 
 Hora: 09:13:23

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.1713809967041 
 Hora: 09:13:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.082667112350464 
 Hora: 09:13:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.04399585723877 
 Hora: 09:13:54

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.1043529510498 
 Hora: 09:13:54

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.095306158065796 
 Hora: 09:13:54

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.23646402359009 
 Hora: 09:13:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.05549693107605 
 Hora: 09:13:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.068289995193481 
 Hora: 09:13:57

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.14209318161011 
 Hora: 09:13:57

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.16556000709534 
 Hora: 09:13:57

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.2748692035675 
 Hora: 09:13:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.067406892776489 
 Hora: 09:13:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.078423023223877 
 Hora: 09:21:26

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.09895396232605 
 Hora: 09:21:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.06426215171814 
 Hora: 09:21:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024183034896851 
 Hora: 09:21:27

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.12427997589111 
 Hora: 09:21:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029516935348511 
 Hora: 09:21:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.06924295425415 
 Hora: 09:22:00

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.090050935745239 
 Hora: 09:22:00

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.09390115737915 
 Hora: 09:22:00

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.25637722015381 
 Hora: 09:22:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.03509783744812 
 Hora: 09:22:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02640700340271 
 Hora: 09:22:20

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.067980051040649 
 Hora: 09:22:20

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.037050008773804 
 Hora: 09:22:20

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.22052693367004 
 Hora: 09:22:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025475025177002 
 Hora: 09:22:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.03252100944519 
 Hora: 09:22:38

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.076488971710205 
 Hora: 09:22:38

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.08636999130249 
 Hora: 09:22:38

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.27051281929016 
 Hora: 09:22:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.032051801681519 
 Hora: 09:22:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.034718990325928 
 Hora: 09:23:29

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.10300183296204 
 Hora: 09:23:29

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.09496808052063 
 Hora: 09:23:29

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.25338006019592 
 Hora: 09:23:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.052552938461304 
 Hora: 09:23:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.081423997879028 
 Hora: 09:27:31

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.13837099075317 
 Hora: 09:27:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.078025817871094 
 Hora: 09:27:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.086683988571167 
 Hora: 09:27:33

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.17363786697388 
 Hora: 09:27:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.065185070037842 
 Hora: 09:27:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.083709001541138 
 Hora: 09:28:05

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.18414402008057 
 Hora: 09:28:05

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.16149187088013 
 Hora: 09:28:05

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.34783101081848 
 Hora: 09:28:05

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.099416971206665 
 Hora: 09:28:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.069556951522827 
 Hora: 09:28:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.097211122512817 
 Hora: 09:28:26

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.19761991500854 
 Hora: 09:28:26

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.15118002891541 
 Hora: 09:28:26

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.24807906150818 
 Hora: 09:28:26

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.079756021499634 
 Hora: 09:28:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.10905718803406 
 Hora: 09:28:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.034148931503296 
 Hora: 09:28:29

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.061079978942871 
 Hora: 09:28:29

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.05662202835083 
 Hora: 09:28:29

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.29877400398254 
 Hora: 09:28:29

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.13371300697327 
 Hora: 09:28:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.037009954452515 
 Hora: 09:28:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.067960023880005 
 Hora: 09:28:32

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.12626886367798 
 Hora: 09:28:32

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.12264394760132 
 Hora: 09:28:32

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.24790096282959 
 Hora: 09:28:32

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.099889039993286 
 Hora: 09:28:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.074826002120972 
 Hora: 09:28:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.043865919113159 
 Hora: 09:30:21

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.079728126525879 
 Hora: 09:30:21

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.097301006317139 
 Hora: 09:30:21

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.25645613670349 
 Hora: 09:30:21

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.10051703453064 
 Hora: 09:30:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.043224096298218 
 Hora: 09:30:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.063616991043091 
 Hora: 09:30:32

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.11572504043579 
 Hora: 09:30:32

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.11061000823975 
 Hora: 09:30:32

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.27303910255432 
 Hora: 09:30:32

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.037456035614014 
 Hora: 09:30:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.048681020736694 
 Hora: 09:30:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012104034423828 
 Hora: 09:30:34

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024831056594849 
 Hora: 09:30:34

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.029117822647095 
 Hora: 09:30:34

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.35196590423584 
 Hora: 09:30:34

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.035027027130127 
 Hora: 09:30:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012279033660889 
 Hora: 09:30:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071589946746826 
 Hora: 09:30:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.028777837753296 
 Hora: 09:30:36

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.045728921890259 
 Hora: 09:30:36

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.29853582382202 
 Hora: 09:30:36

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.034476041793823 
 Hora: 09:30:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090200901031494 
 Hora: 09:30:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010495185852051 
 Hora: 09:31:50

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023042917251587 
 Hora: 09:31:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015846967697144 
 Hora: 09:31:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013828992843628 
 Hora: 09:31:51

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.046722888946533 
 Hora: 09:31:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009951114654541 
 Hora: 09:31:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01445198059082 
 Hora: 09:32:07

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021978855133057 
 Hora: 09:32:07

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.024141073226929 
 Hora: 09:32:07

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.19362998008728 
 Hora: 09:32:07

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02283501625061 
 Hora: 09:32:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018678903579712 
 Hora: 09:32:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065460205078125 
 Hora: 09:32:09

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014726161956787 
 Hora: 09:32:09

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.026917219161987 
 Hora: 09:32:09

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.34609198570251 
 Hora: 09:32:09

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.047346115112305 
 Hora: 09:32:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010258913040161 
 Hora: 09:32:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093481540679932 
 Hora: 09:35:18

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.027656078338623 
 Hora: 09:35:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090258121490479 
 Hora: 09:35:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017232894897461 
 Hora: 09:35:20

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.034576177597046 
 Hora: 09:35:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012879133224487 
 Hora: 09:35:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.046828985214233 
 Hora: 09:37:36

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.10223603248596 
 Hora: 09:37:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.030914783477783 
 Hora: 09:37:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024665117263794 
 Hora: 09:37:37

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.068310022354126 
 Hora: 09:37:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027326107025146 
 Hora: 09:37:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.032522916793823 
 Hora: 09:39:53

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.093417882919312 
 Hora: 09:39:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.037974119186401 
 Hora: 09:39:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.054124116897583 
 Hora: 09:39:55

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.066915035247803 
 Hora: 09:39:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.048676013946533 
 Hora: 09:39:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010786056518555 
 Hora: 09:42:34

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.16464591026306 
 Hora: 09:42:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012859106063843 
 Hora: 09:42:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008465051651001 
 Hora: 09:42:35

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.12938499450684 
 Hora: 09:42:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016392946243286 
 Hora: 09:42:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075480937957764 
 Hora: 09:42:39

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.057476997375488 
 Hora: 09:42:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010596990585327 
 Hora: 09:42:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094830989837646 
 Hora: 09:42:40

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023538112640381 
 Hora: 09:42:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015215158462524 
 Hora: 09:42:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012137889862061 
 Hora: 09:42:45

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02836799621582 
 Hora: 09:42:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021206855773926 
 Hora: 09:42:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020733118057251 
 Hora: 09:42:46

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.041228055953979 
 Hora: 09:42:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013885021209717 
 Hora: 09:42:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091068744659424 
 Hora: 09:43:44

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.025546073913574 
 Hora: 09:43:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095138549804688 
 Hora: 09:43:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020371913909912 
 Hora: 09:43:45

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028295040130615 
 Hora: 09:43:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01319408416748 
 Hora: 09:43:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017579078674316 
 Hora: 09:44:05

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.041225910186768 
 Hora: 09:44:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020724773406982 
 Hora: 09:44:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025454044342041 
 Hora: 09:44:06

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.031053066253662 
 Hora: 09:44:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014695882797241 
 Hora: 09:44:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010834932327271 
 Hora: 09:44:40

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.032778978347778 
 Hora: 09:44:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0171959400177 
 Hora: 09:44:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013725996017456 
 Hora: 09:44:42

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.036740064620972 
 Hora: 09:44:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023657083511353 
 Hora: 09:44:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013874053955078 
 Hora: 09:46:38

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022249221801758 
 Hora: 09:46:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073661804199219 
 Hora: 09:46:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027323007583618 
 Hora: 09:46:39

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.035917997360229 
 Hora: 09:46:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019207954406738 
 Hora: 09:46:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012470960617065 
 Hora: 09:48:07

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.034648895263672 
 Hora: 09:48:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014641046524048 
 Hora: 09:48:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020485162734985 
 Hora: 09:48:08

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.099536895751953 
 Hora: 09:48:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020678997039795 
 Hora: 09:48:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093839168548584 
 Hora: 09:48:12

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.029176950454712 
 Hora: 09:48:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011700868606567 
 Hora: 09:48:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026236057281494 
 Hora: 09:48:13

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.035469055175781 
 Hora: 09:48:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017381191253662 
 Hora: 09:48:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027829170227051 
 Hora: 09:48:36

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.033746957778931 
 Hora: 09:48:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014347076416016 
 Hora: 09:48:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023870944976807 
 Hora: 09:48:38

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.031697988510132 
 Hora: 09:48:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020171880722046 
 Hora: 09:48:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025297164916992 
 Hora: 09:49:41

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020576000213623 
 Hora: 09:49:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017782926559448 
 Hora: 09:49:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023515939712524 
 Hora: 09:49:42

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.042533159255981 
 Hora: 09:49:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011837959289551 
 Hora: 09:49:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017082929611206 
 Hora: 09:51:07

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.044921159744263 
 Hora: 09:51:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017580032348633 
 Hora: 09:51:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017653942108154 
 Hora: 09:51:08

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028801918029785 
 Hora: 09:51:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017448902130127 
 Hora: 09:51:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027008056640625 
 Hora: 09:53:50

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.14689707756042 
 Hora: 09:53:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.051616907119751 
 Hora: 09:53:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.058305025100708 
 Hora: 09:53:52

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.064061880111694 
 Hora: 09:53:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.059628009796143 
 Hora: 09:53:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016088962554932 
 Hora: 09:55:39

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.034334897994995 
 Hora: 09:55:39

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.029958963394165 
 Hora: 09:55:39

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.038232803344727 
 Hora: 09:55:39

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='16/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.081429004669189 
 Hora: 09:55:39

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1910'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.10384893417358 
 Hora: 09:55:39

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.029152154922485 
 Hora: 09:55:39

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.025543928146362 
 Hora: 09:55:39

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.061756134033203 
 Hora: 09:55:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012841939926147 
 Hora: 09:55:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011291980743408 
 Hora: 09:55:43

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.05925989151001 
 Hora: 09:55:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011826992034912 
 Hora: 09:55:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.047798871994019 
 Hora: 09:57:03

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.026834011077881 
 Hora: 09:57:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017461061477661 
 Hora: 09:57:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015897989273071 
 Hora: 09:57:04

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.036926031112671 
 Hora: 09:57:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017486095428467 
 Hora: 09:57:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012791156768799 
 Hora: 09:57:40

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.095603942871094 
 Hora: 09:57:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017091035842896 
 Hora: 09:57:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018263816833496 
 Hora: 09:57:43

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.033995866775513 
 Hora: 09:57:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017093896865845 
 Hora: 09:57:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088541507720947 
 Hora: 10:03:25

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.025394201278687 
 Hora: 10:03:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020090103149414 
 Hora: 10:03:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01984977722168 
 Hora: 10:03:28

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.039271116256714 
 Hora: 10:03:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010710000991821 
 Hora: 10:03:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015735864639282 
 Hora: 10:30:53

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.037314176559448 
 Hora: 10:30:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014787912368774 
 Hora: 10:30:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.057501077651978 
 Hora: 10:30:55

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.056127071380615 
 Hora: 10:30:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.047181844711304 
 Hora: 10:30:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.12214183807373 
 Hora: 10:31:08

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.18830704689026 
 Hora: 10:31:08

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.10585498809814 
 Hora: 10:31:08

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.97234988212585 
 Hora: 10:31:08

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.032812118530273 
 Hora: 10:31:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.098634004592896 
 Hora: 10:31:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010768890380859 
 Hora: 10:31:21

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018353223800659 
 Hora: 10:31:21

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021320104598999 
 Hora: 10:31:21

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.79109001159668 
 Hora: 10:31:21

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.049267053604126 
 Hora: 10:31:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013247966766357 
 Hora: 10:31:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014335870742798 
 Hora: 10:31:23

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.047632932662964 
 Hora: 10:31:23

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025588989257812 
 Hora: 10:31:23

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.064630031585693 
 Hora: 10:31:23

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026642084121704 
 Hora: 10:31:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014049053192139 
 Hora: 10:31:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019381046295166 
 Hora: 10:31:26

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.02567195892334 
 Hora: 10:31:26

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.041157960891724 
 Hora: 10:31:26

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.064850091934204 
 Hora: 10:31:26

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.057368040084839 
 Hora: 10:31:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013876914978027 
 Hora: 10:31:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094461441040039 
 Hora: 10:38:54

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024914979934692 
 Hora: 10:38:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075531005859375 
 Hora: 10:38:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091359615325928 
 Hora: 10:38:56

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.059357166290283 
 Hora: 10:38:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012259006500244 
 Hora: 10:38:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074751377105713 
 Hora: 10:39:02

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020389080047607 
 Hora: 10:39:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010787010192871 
 Hora: 10:39:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011831045150757 
 Hora: 10:39:04

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021672964096069 
 Hora: 10:39:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010339021682739 
 Hora: 10:39:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022023916244507 
 Hora: 10:39:19

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020220994949341 
 Hora: 10:39:19

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.027367115020752 
 Hora: 10:39:19

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.81409311294556 
 Hora: 10:39:19

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.035606145858765 
 Hora: 10:39:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082550048828125 
 Hora: 10:39:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027460098266602 
 Hora: 10:39:30

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.029401063919067 
 Hora: 10:39:30

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.023099899291992 
 Hora: 10:39:30

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.75643491744995 
 Hora: 10:39:30

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.04060697555542 
 Hora: 10:39:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014259815216064 
 Hora: 10:39:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.038367986679077 
 Hora: 10:39:32

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024309158325195 
 Hora: 10:39:32

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018306016921997 
 Hora: 10:39:32

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.061788082122803 
 Hora: 10:39:32

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.029175043106079 
 Hora: 10:39:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01371693611145 
 Hora: 10:39:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016406059265137 
 Hora: 10:39:35

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.053946018218994 
 Hora: 10:39:35

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019978046417236 
 Hora: 10:39:35

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.058769941329956 
 Hora: 10:39:35

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.053779125213623 
 Hora: 10:39:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014434099197388 
 Hora: 10:39:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023380994796753 
 Hora: 10:55:51

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.034216165542603 
 Hora: 10:55:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.03304386138916 
 Hora: 10:55:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.035418033599854 
 Hora: 10:55:52

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.061584949493408 
 Hora: 10:55:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028547048568726 
 Hora: 10:55:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018075942993164 
 Hora: 10:56:09

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021203994750977 
 Hora: 10:56:09

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.030380964279175 
 Hora: 10:56:09

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.8232798576355 
 Hora: 10:56:09

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.075690984725952 
 Hora: 10:56:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017338037490845 
 Hora: 10:56:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.042564868927002 
 Hora: 10:56:13

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.02551794052124 
 Hora: 10:56:13

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.030856847763062 
 Hora: 10:56:13

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.082392930984497 
 Hora: 10:56:13

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.077686071395874 
 Hora: 10:56:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026557922363281 
 Hora: 10:56:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.087000846862793 
 Hora: 10:56:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.052144050598145 
 Hora: 10:56:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.051470041275024 
 Hora: 10:56:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022975921630859 
 Hora: 10:56:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.037337064743042 
 Hora: 10:56:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.060142040252686 
 Hora: 10:56:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028173208236694 
 Hora: 10:56:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.05010199546814 
 Hora: 10:56:24

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '19/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.10154891014099 
 Hora: 10:56:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.081875085830688 
 Hora: 10:56:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.13087487220764 
 Hora: 10:56:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027796983718872 
 Hora: 10:56:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.087347984313965 
 Hora: 10:56:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.098450899124146 
 Hora: 10:56:31

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.071485042572021 
 Hora: 10:56:31

SELECT *
FROM "Cat_CategoriasPrestServ"
WHERE "Activo" = 1 
 Ejecutado en: 0.054505825042725 
 Hora: 10:56:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.063566923141479 
 Hora: 10:56:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.043549060821533 
 Hora: 10:56:31

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.086849927902222 
 Hora: 10:56:31

SELECT *
FROM "Cat_CategoriasPrestServ"
WHERE "Activo" = 1 
 Ejecutado en: 0.036235094070435 
 Hora: 10:56:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.095718860626221 
 Hora: 10:56:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.044309854507446 
 Hora: 10:56:32

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='01/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.070604085922241 
 Hora: 10:56:32

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.091643810272217 
 Hora: 10:56:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.036808967590332 
 Hora: 10:56:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.092654943466187 
 Hora: 10:56:33

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='01/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.057758092880249 
 Hora: 10:56:33

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.030051946640015 
 Hora: 10:56:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.051287889480591 
 Hora: 10:56:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.083600997924805 
 Hora: 10:56:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.06177282333374 
 Hora: 10:56:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061399936676025 
 Hora: 10:56:37

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.032875061035156 
 Hora: 10:56:37

SELECT *
FROM "Cat_CategoriasPrestServ"
WHERE "Activo" = 1 
 Ejecutado en: 0.030604839324951 
 Hora: 10:56:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013822078704834 
 Hora: 10:56:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018937110900879 
 Hora: 10:56:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01502799987793 
 Hora: 10:56:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015269994735718 
 Hora: 10:56:43

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.051741123199463 
 Hora: 10:56:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023133039474487 
 Hora: 10:56:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.034333944320679 
 Hora: 10:56:44

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.06994104385376 
 Hora: 10:56:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.030894994735718 
 Hora: 10:56:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.10352802276611 
 Hora: 10:56:48

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.042279005050659 
 Hora: 10:56:48

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.048597097396851 
 Hora: 10:56:48

SELECT *
FROM "cat_TipoReporte"
WHERE "Clave" = '3' 
 Ejecutado en: 0.055081844329834 
 Hora: 10:56:48

SELECT *
FROM "cat_TipoReporte"
WHERE "Clave" != 4 
 Ejecutado en: 0.034882068634033 
 Hora: 10:56:48

SELECT *
FROM "cat_Reportes"
WHERE "idTipoReporte" = '3'
AND "Activo" = 1 
 Ejecutado en: 0.048123121261597 
 Hora: 10:56:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022988080978394 
 Hora: 10:56:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.097223997116089 
 Hora: 10:56:49

SELECT *
FROM "cat_Reportes"
WHERE "idTipoReporte" = '3'
AND "Activo" = 1 
 Ejecutado en: 0.089859008789062 
 Hora: 10:56:49

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.06269097328186 
 Hora: 10:56:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.051061868667603 
 Hora: 10:56:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02381706237793 
 Hora: 10:56:52

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.18011999130249 
 Hora: 10:56:52

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.054376125335693 
 Hora: 10:56:52

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.055125951766968 
 Hora: 10:56:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.058722019195557 
 Hora: 10:56:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.032454967498779 
 Hora: 10:56:53

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.21559381484985 
 Hora: 10:56:53

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.064565181732178 
 Hora: 10:56:53

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.054558992385864 
 Hora: 10:56:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.062343120574951 
 Hora: 10:56:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.04887580871582 
 Hora: 10:57:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.04879093170166 
 Hora: 10:57:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.033646821975708 
 Hora: 10:57:00

exec p_admarh_get_Escuelas @EscuelaId=0 
 Ejecutado en: 0.040726184844971 
 Hora: 10:57:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063610076904297 
 Hora: 10:57:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.060153961181641 
 Hora: 10:57:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.051039934158325 
 Hora: 10:57:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022080898284912 
 Hora: 10:57:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.032610893249512 
 Hora: 10:57:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.09514307975769 
 Hora: 10:57:06

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.14042496681213 
 Hora: 10:57:06

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.069644927978516 
 Hora: 10:57:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.04585599899292 
 Hora: 10:57:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022286176681519 
 Hora: 10:57:07

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.035147905349731 
 Hora: 10:57:07

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.030923128128052 
 Hora: 10:57:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01802396774292 
 Hora: 10:57:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.031273126602173 
 Hora: 10:57:07

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.039879083633423 
 Hora: 10:57:07

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.099431037902832 
 Hora: 10:57:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.043296813964844 
 Hora: 10:57:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.054976940155029 
 Hora: 10:57:07

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.10422205924988 
 Hora: 10:57:07

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.077486991882324 
 Hora: 10:57:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.052562952041626 
 Hora: 10:57:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.034960985183716 
 Hora: 10:57:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.035461187362671 
 Hora: 10:57:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.048731088638306 
 Hora: 10:57:18

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.071784973144531 
 Hora: 10:57:18

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.18587589263916 
 Hora: 10:57:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022238969802856 
 Hora: 10:57:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.09961986541748 
 Hora: 10:57:21

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.066387891769409 
 Hora: 10:57:21

SELECT cat_Categorias.*
FROM "cat_Categorias" 
 Ejecutado en: 0.054758071899414 
 Hora: 10:57:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.11888194084167 
 Hora: 10:57:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.033890008926392 
 Hora: 10:57:24

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.059126138687134 
 Hora: 10:57:24

SELECT *
FROM "ParametrosdeSistema"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.040281057357788 
 Hora: 10:57:24

SELECT *
FROM "ParametrosMovsRH"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.040131092071533 
 Hora: 10:57:24

SELECT *
FROM "ParamSystemTipoNomimas"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.060328960418701 
 Hora: 10:57:24

SELECT *
FROM "Param_ValoresENomina"
WHERE "Presupuestoid" = '0002' 
 Ejecutado en: 0.065284013748169 
 Hora: 10:57:24

SELECT *
FROM "ParametrosGenerales" 
 Ejecutado en: 0.10585188865662 
 Hora: 10:57:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.031733989715576 
 Hora: 10:57:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.046144008636475 
 Hora: 10:57:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.063528776168823 
 Hora: 10:57:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028156995773315 
 Hora: 10:57:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.043874025344849 
 Hora: 10:57:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029711961746216 
 Hora: 10:57:28

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.15938401222229 
 Hora: 10:57:28

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.11353588104248 
 Hora: 10:57:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.050763130187988 
 Hora: 10:57:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028022050857544 
 Hora: 10:57:28

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.038716077804565 
 Hora: 10:57:28

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.049887180328369 
 Hora: 10:57:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022002935409546 
 Hora: 10:57:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.036522150039673 
 Hora: 10:57:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.087955951690674 
 Hora: 10:57:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029343843460083 
 Hora: 10:57:29

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.057626962661743 
 Hora: 10:57:29

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.13107895851135 
 Hora: 10:57:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02177095413208 
 Hora: 10:57:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.094908952713013 
 Hora: 10:57:30

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.071563959121704 
 Hora: 10:57:30

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.063978910446167 
 Hora: 10:57:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.061651945114136 
 Hora: 10:57:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099480152130127 
 Hora: 10:57:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0051867961883545 
 Hora: 10:57:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01537299156189 
 Hora: 10:57:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012456893920898 
 Hora: 10:57:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009868860244751 
 Hora: 10:57:36

exec p_admarh_get_Escuelas @EscuelaId=0 
 Ejecutado en: 0.030714988708496 
 Hora: 10:57:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012273073196411 
 Hora: 10:57:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.031522989273071 
 Hora: 10:57:36

exec p_admarh_get_Escuelas @EscuelaId=0 
 Ejecutado en: 0.046473979949951 
 Hora: 10:57:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012036085128784 
 Hora: 10:57:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.03504204750061 
 Hora: 11:04:00

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.077875137329102 
 Hora: 11:04:00

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.045701026916504 
 Hora: 11:04:00

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.79016304016113 
 Hora: 11:04:00

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.074601888656616 
 Hora: 11:04:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.059520959854126 
 Hora: 11:04:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025861978530884 
 Hora: 11:04:14

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.092015981674194 
 Hora: 11:04:14

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.055409908294678 
 Hora: 11:04:14

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.89787006378174 
 Hora: 11:04:14

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.036437034606934 
 Hora: 11:04:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.048426866531372 
 Hora: 11:04:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024336814880371 
 Hora: 11:04:44

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.058557033538818 
 Hora: 11:04:44

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.048151969909668 
 Hora: 11:04:44

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.76926112174988 
 Hora: 11:04:44

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.040237188339233 
 Hora: 11:04:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015652179718018 
 Hora: 11:04:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02205491065979 
 Hora: 11:04:54

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.037823915481567 
 Hora: 11:04:54

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.053544998168945 
 Hora: 11:04:54

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.80369400978088 
 Hora: 11:04:54

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.05417799949646 
 Hora: 11:04:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020578861236572 
 Hora: 11:04:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023195028305054 
 Hora: 11:05:18

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021214962005615 
 Hora: 11:05:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017550945281982 
 Hora: 11:05:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015846967697144 
 Hora: 11:05:20

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.061617136001587 
 Hora: 11:05:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011318206787109 
 Hora: 11:05:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087878704071045 
 Hora: 11:05:33

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.031360149383545 
 Hora: 11:05:33

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.02640700340271 
 Hora: 11:05:33

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.88442993164062 
 Hora: 11:05:33

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.029267072677612 
 Hora: 11:05:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010292053222656 
 Hora: 11:05:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01144814491272 
 Hora: 11:06:27

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.035068988800049 
 Hora: 11:06:27

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.035020112991333 
 Hora: 11:06:27

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.87882614135742 
 Hora: 11:06:27

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.03057599067688 
 Hora: 11:06:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012541055679321 
 Hora: 11:06:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.075921058654785 
 Hora: 11:07:07

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.22221112251282 
 Hora: 11:07:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.088721990585327 
 Hora: 11:07:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.069275140762329 
 Hora: 11:07:09

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.1764018535614 
 Hora: 11:07:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028579950332642 
 Hora: 11:07:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.078992128372192 
 Hora: 11:07:46

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.25155997276306 
 Hora: 11:07:46

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.14454913139343 
 Hora: 11:07:46

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 1.3041989803314 
 Hora: 11:07:46

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.040390014648438 
 Hora: 11:07:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.13243389129639 
 Hora: 11:07:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011574983596802 
 Hora: 11:08:17

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.032526016235352 
 Hora: 11:08:17

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017699003219604 
 Hora: 11:08:17

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.054975032806396 
 Hora: 11:08:17

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026861906051636 
 Hora: 11:08:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060348510742188 
 Hora: 11:08:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024728059768677 
 Hora: 11:08:20

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.0328209400177 
 Hora: 11:08:20

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.032252073287964 
 Hora: 11:08:20

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.054831027984619 
 Hora: 11:08:20

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.035566806793213 
 Hora: 11:08:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02310585975647 
 Hora: 11:08:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099990367889404 
 Hora: 11:08:21

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.052865982055664 
 Hora: 11:08:21

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.034526109695435 
 Hora: 11:08:21

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.063817977905273 
 Hora: 11:08:21

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.053366899490356 
 Hora: 11:08:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02692699432373 
 Hora: 11:08:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015207052230835 
 Hora: 11:08:22

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.034433126449585 
 Hora: 11:08:22

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.036679029464722 
 Hora: 11:08:22

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.89598989486694 
 Hora: 11:08:22

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.059414148330688 
 Hora: 11:08:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012043952941895 
 Hora: 11:08:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071301460266113 
 Hora: 11:08:22

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018944025039673 
 Hora: 11:08:22

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.023043155670166 
 Hora: 11:08:22

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.059555053710938 
 Hora: 11:08:22

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.069792985916138 
 Hora: 11:08:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010320901870728 
 Hora: 11:08:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01860499382019 
 Hora: 11:08:23

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.035587072372437 
 Hora: 11:08:23

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.054590940475464 
 Hora: 11:08:23

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.39005208015442 
 Hora: 11:08:23

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.034257888793945 
 Hora: 11:08:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013919830322266 
 Hora: 11:08:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013069868087769 
 Hora: 11:09:20

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.03934907913208 
 Hora: 11:09:20

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.050595045089722 
 Hora: 11:09:20

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.84374022483826 
 Hora: 11:09:20

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.068804025650024 
 Hora: 11:09:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016718149185181 
 Hora: 11:09:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022610902786255 
 Hora: 11:09:22

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.049723148345947 
 Hora: 11:09:22

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.052617788314819 
 Hora: 11:09:22

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.05431604385376 
 Hora: 11:09:22

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025857925415039 
 Hora: 11:09:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020881175994873 
 Hora: 11:09:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029624938964844 
 Hora: 11:09:23

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.044128894805908 
 Hora: 11:09:23

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.030379056930542 
 Hora: 11:09:23

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.083817958831787 
 Hora: 11:09:23

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.045798063278198 
 Hora: 11:09:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018923997879028 
 Hora: 11:09:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017812967300415 
 Hora: 11:09:24

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.03817081451416 
 Hora: 11:09:24

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.037249088287354 
 Hora: 11:09:24

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.058222055435181 
 Hora: 11:09:24

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.056279182434082 
 Hora: 11:09:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017731904983521 
 Hora: 11:09:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016991853713989 
 Hora: 11:09:25

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.03183388710022 
 Hora: 11:09:25

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.033534049987793 
 Hora: 11:09:25

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.051202774047852 
 Hora: 11:09:25

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022816896438599 
 Hora: 11:09:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023705005645752 
 Hora: 11:09:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090799331665039 
 Hora: 11:09:26

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.01720404624939 
 Hora: 11:09:26

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.013474941253662 
 Hora: 11:09:26

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.045231103897095 
 Hora: 11:09:26

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.016512870788574 
 Hora: 11:09:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0031118392944336 
 Hora: 11:09:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011175155639648 
 Hora: 11:09:52

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.029201984405518 
 Hora: 11:09:52

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019845008850098 
 Hora: 11:09:52

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.06069803237915 
 Hora: 11:09:52

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.032848834991455 
 Hora: 11:09:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017826080322266 
 Hora: 11:09:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011450052261353 
 Hora: 11:09:52

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022047996520996 
 Hora: 11:09:52

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.027808904647827 
 Hora: 11:09:52

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.070778846740723 
 Hora: 11:09:52

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.047212839126587 
 Hora: 11:09:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089309215545654 
 Hora: 11:09:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.049041986465454 
 Hora: 11:09:53

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.035253047943115 
 Hora: 11:09:53

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.027427911758423 
 Hora: 11:09:53

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.064750909805298 
 Hora: 11:09:53

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.084978103637695 
 Hora: 11:09:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029765129089355 
 Hora: 11:09:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026550054550171 
 Hora: 11:09:54

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.025784969329834 
 Hora: 11:09:54

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.04891300201416 
 Hora: 11:09:54

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.071980953216553 
 Hora: 11:09:54

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.035523891448975 
 Hora: 11:09:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081989765167236 
 Hora: 11:09:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018577814102173 
 Hora: 11:09:55

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.05134916305542 
 Hora: 11:09:55

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.19351005554199 
 Hora: 11:09:55

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.055855989456177 
 Hora: 11:09:55

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.038455009460449 
 Hora: 11:09:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014750003814697 
 Hora: 11:09:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017693042755127 
 Hora: 11:24:07

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.041680812835693 
 Hora: 11:24:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022538900375366 
 Hora: 11:24:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.038182020187378 
 Hora: 11:24:09

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.068611145019531 
 Hora: 11:24:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017362833023071 
 Hora: 11:24:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024457931518555 
 Hora: 11:24:26

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.061215162277222 
 Hora: 11:24:26

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.067936897277832 
 Hora: 11:24:26

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.93993496894836 
 Hora: 11:24:26

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.032236814498901 
 Hora: 11:24:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.047640085220337 
 Hora: 11:24:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010829925537109 
 Hora: 11:30:38

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02324104309082 
 Hora: 11:30:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094239711761475 
 Hora: 11:30:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007300853729248 
 Hora: 11:30:40

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021174907684326 
 Hora: 11:30:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0054469108581543 
 Hora: 11:30:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023455858230591 
 Hora: 11:31:02

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.03228497505188 
 Hora: 11:31:02

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.037926912307739 
 Hora: 11:31:02

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.79458594322205 
 Hora: 11:31:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012457847595215 
 Hora: 11:31:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012987852096558 
 Hora: 11:31:28

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02239990234375 
 Hora: 11:31:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012101173400879 
 Hora: 11:31:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011912107467651 
 Hora: 11:31:34

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.16305088996887 
 Hora: 11:31:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021965980529785 
 Hora: 11:31:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023085117340088 
 Hora: 11:31:46

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.026506900787354 
 Hora: 11:31:46

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.042294025421143 
 Hora: 11:31:46

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.81392407417297 
 Hora: 11:31:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012315034866333 
 Hora: 11:31:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020135164260864 
 Hora: 11:32:01

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.056057929992676 
 Hora: 11:32:01

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.038360118865967 
 Hora: 11:32:01

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.84878492355347 
 Hora: 11:32:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.04106616973877 
 Hora: 11:32:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0052540302276611 
 Hora: 11:35:50

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02157998085022 
 Hora: 11:35:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096590518951416 
 Hora: 11:35:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013845205307007 
 Hora: 11:35:52

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022567987442017 
 Hora: 11:35:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094690322875977 
 Hora: 11:35:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093719959259033 
 Hora: 11:36:02

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019418001174927 
 Hora: 11:36:02

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014849901199341 
 Hora: 11:36:02

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.86337780952454 
 Hora: 11:36:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0049140453338623 
 Hora: 11:36:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012257099151611 
 Hora: 12:04:11

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019521951675415 
 Hora: 12:04:11

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.024624109268188 
 Hora: 12:04:11

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.88643479347229 
 Hora: 12:04:11

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023406982421875 
 Hora: 12:04:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012559175491333 
 Hora: 12:04:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028870105743408 
 Hora: 12:04:43

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017534971237183 
 Hora: 12:04:43

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.026894092559814 
 Hora: 12:04:43

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.13349485397339 
 Hora: 12:04:43

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.060853004455566 
 Hora: 12:04:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013473033905029 
 Hora: 12:04:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016480207443237 
 Hora: 12:04:44

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.013675928115845 
 Hora: 12:04:44

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.022494792938232 
 Hora: 12:04:44

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.10622501373291 
 Hora: 12:04:44

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.050441980361938 
 Hora: 12:04:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01814603805542 
 Hora: 12:04:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078020095825195 
 Hora: 12:04:44

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.031682014465332 
 Hora: 12:04:44

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014801025390625 
 Hora: 12:04:44

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.067806959152222 
 Hora: 12:04:44

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.034455060958862 
 Hora: 12:04:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014585018157959 
 Hora: 12:04:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010864019393921 
 Hora: 12:04:45

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.035085916519165 
 Hora: 12:04:45

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.022462844848633 
 Hora: 12:04:45

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.054203033447266 
 Hora: 12:04:45

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024374961853027 
 Hora: 12:04:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01081395149231 
 Hora: 12:04:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013084173202515 
 Hora: 12:04:46

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023706912994385 
 Hora: 12:04:46

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.023454904556274 
 Hora: 12:04:46

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.0436110496521 
 Hora: 12:04:46

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024084091186523 
 Hora: 12:04:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084249973297119 
 Hora: 12:04:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095970630645752 
 Hora: 12:06:04

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02578592300415 
 Hora: 12:06:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011330127716064 
 Hora: 12:06:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010768890380859 
 Hora: 12:06:06

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023054838180542 
 Hora: 12:06:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016362190246582 
 Hora: 12:06:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014856100082397 
 Hora: 12:06:17

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.027484893798828 
 Hora: 12:06:17

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017634868621826 
 Hora: 12:06:17

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.81143712997437 
 Hora: 12:06:17

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.04066801071167 
 Hora: 12:06:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010237216949463 
 Hora: 12:06:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009976863861084 
 Hora: 12:08:04

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019312143325806 
 Hora: 12:08:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079770088195801 
 Hora: 12:08:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097930431365967 
 Hora: 12:08:07

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.029332160949707 
 Hora: 12:08:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023177146911621 
 Hora: 12:08:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.031661987304688 
 Hora: 12:08:11

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.062350988388062 
 Hora: 12:08:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.034627914428711 
 Hora: 12:08:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.047612190246582 
 Hora: 12:08:13

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.079257011413574 
 Hora: 12:08:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018068075180054 
 Hora: 12:08:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011025190353394 
 Hora: 12:08:24

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022158145904541 
 Hora: 12:08:24

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.034871101379395 
 Hora: 12:08:24

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.83681392669678 
 Hora: 12:08:24

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024703025817871 
 Hora: 12:08:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010524988174438 
 Hora: 12:08:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01616907119751 
 Hora: 12:08:33

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022357940673828 
 Hora: 12:08:33

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.035032987594604 
 Hora: 12:08:33

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.7800600528717 
 Hora: 12:08:33

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.028306007385254 
 Hora: 12:08:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097441673278809 
 Hora: 12:08:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061259269714355 
 Hora: 12:09:12

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016965866088867 
 Hora: 12:09:12

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.01480507850647 
 Hora: 12:09:12

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.81918621063232 
 Hora: 12:09:12

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023228883743286 
 Hora: 12:09:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092549324035645 
 Hora: 12:09:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014997005462646 
 Hora: 12:10:02

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.026127099990845 
 Hora: 12:10:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091209411621094 
 Hora: 12:10:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012227058410645 
 Hora: 12:10:05

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.026337146759033 
 Hora: 12:10:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083250999450684 
 Hora: 12:10:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079741477966309 
 Hora: 12:10:16

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.026987791061401 
 Hora: 12:10:16

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.038485765457153 
 Hora: 12:10:16

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.91387605667114 
 Hora: 12:10:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011584997177124 
 Hora: 12:10:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01091480255127 
 Hora: 12:12:58

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019214153289795 
 Hora: 12:12:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011639833450317 
 Hora: 12:12:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010532855987549 
 Hora: 12:12:59

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.10203886032104 
 Hora: 12:12:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069921016693115 
 Hora: 12:12:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015854835510254 
 Hora: 12:13:10

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018141031265259 
 Hora: 12:13:10

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020951986312866 
 Hora: 12:13:10

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.74241590499878 
 Hora: 12:13:10

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02069091796875 
 Hora: 12:13:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089409351348877 
 Hora: 12:13:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075569152832031 
 Hora: 12:13:22

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024684906005859 
 Hora: 12:13:22

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018266916275024 
 Hora: 12:13:22

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.76174283027649 
 Hora: 12:13:22

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020968914031982 
 Hora: 12:13:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060768127441406 
 Hora: 12:13:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083239078521729 
 Hora: 12:16:17

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.015429019927979 
 Hora: 12:16:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012386083602905 
 Hora: 12:16:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028565883636475 
 Hora: 12:16:19

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.04090404510498 
 Hora: 12:16:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010184049606323 
 Hora: 12:16:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095210075378418 
 Hora: 12:16:28

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021903038024902 
 Hora: 12:16:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011072874069214 
 Hora: 12:16:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011509895324707 
 Hora: 12:16:33

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.01818323135376 
 Hora: 12:16:33

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015748977661133 
 Hora: 12:16:33

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.76831388473511 
 Hora: 12:16:33

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027584791183472 
 Hora: 12:16:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060830116271973 
 Hora: 12:16:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019781112670898 
 Hora: 12:16:34

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025467872619629 
 Hora: 12:16:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074551105499268 
 Hora: 12:16:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011667966842651 
 Hora: 12:16:38

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022200107574463 
 Hora: 12:16:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009105920791626 
 Hora: 12:16:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010889053344727 
 Hora: 12:16:43

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.028008937835693 
 Hora: 12:16:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011859178543091 
 Hora: 12:16:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0106520652771 
 Hora: 12:16:52

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.027493000030518 
 Hora: 12:16:52

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025106906890869 
 Hora: 12:16:52

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.83602786064148 
 Hora: 12:16:52

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026201009750366 
 Hora: 12:16:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013145923614502 
 Hora: 12:16:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084450244903564 
 Hora: 12:17:02

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.026402950286865 
 Hora: 12:17:02

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.073812961578369 
 Hora: 12:17:02

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.77437686920166 
 Hora: 12:17:02

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.019867897033691 
 Hora: 12:17:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.056555986404419 
 Hora: 12:17:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011932134628296 
 Hora: 12:17:27

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018275022506714 
 Hora: 12:17:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063199996948242 
 Hora: 12:17:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020910024642944 
 Hora: 12:17:28

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.034754991531372 
 Hora: 12:17:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02112603187561 
 Hora: 12:17:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.03353214263916 
 Hora: 12:17:39

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.037292003631592 
 Hora: 12:17:39

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016339063644409 
 Hora: 12:17:39

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.76918411254883 
 Hora: 12:17:39

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025151968002319 
 Hora: 12:17:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01361608505249 
 Hora: 12:17:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018538951873779 
 Hora: 12:17:51

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020899057388306 
 Hora: 12:17:51

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018688201904297 
 Hora: 12:17:51

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.81437802314758 
 Hora: 12:17:51

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.034469842910767 
 Hora: 12:17:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01298189163208 
 Hora: 12:17:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012235164642334 
 Hora: 12:17:54

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.030987024307251 
 Hora: 12:17:54

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.039330959320068 
 Hora: 12:17:54

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.059844017028809 
 Hora: 12:17:54

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.042155027389526 
 Hora: 12:17:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013682126998901 
 Hora: 12:17:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013662815093994 
 Hora: 12:17:57

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.031245946884155 
 Hora: 12:17:57

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.060598134994507 
 Hora: 12:17:57

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.05603289604187 
 Hora: 12:17:57

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.040587186813354 
 Hora: 12:17:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013351917266846 
 Hora: 12:17:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067589282989502 
 Hora: 12:19:17

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023250102996826 
 Hora: 12:19:17

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.022992134094238 
 Hora: 12:19:17

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.020579099655151 
 Hora: 12:19:17

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='16/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.018603086471558 
 Hora: 12:19:17

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1910'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.088969945907593 
 Hora: 12:19:17

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.021188974380493 
 Hora: 12:19:17

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.022469997406006 
 Hora: 12:19:17

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.024631977081299 
 Hora: 12:19:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011765003204346 
 Hora: 12:19:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014874935150146 
 Hora: 12:19:25

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023752212524414 
 Hora: 12:19:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012598991394043 
 Hora: 12:19:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0051939487457275 
 Hora: 12:19:41

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.039843082427979 
 Hora: 12:19:41

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.035634994506836 
 Hora: 12:19:41

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.79044508934021 
 Hora: 12:19:41

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021376848220825 
 Hora: 12:19:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011132955551147 
 Hora: 12:19:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012299060821533 
 Hora: 12:19:52

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.036733150482178 
 Hora: 12:19:52

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.03105902671814 
 Hora: 12:19:52

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.062038898468018 
 Hora: 12:19:52

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.043332815170288 
 Hora: 12:19:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01848292350769 
 Hora: 12:19:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013838768005371 
 Hora: 12:20:24

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023119211196899 
 Hora: 12:20:24

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.032151937484741 
 Hora: 12:20:24

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.74238586425781 
 Hora: 12:20:24

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.029583930969238 
 Hora: 12:20:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087521076202393 
 Hora: 12:20:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013124942779541 
 Hora: 12:20:30

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.031143188476562 
 Hora: 12:20:30

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019596099853516 
 Hora: 12:20:30

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.79030799865723 
 Hora: 12:20:30

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.041983842849731 
 Hora: 12:20:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014187097549438 
 Hora: 12:20:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010226011276245 
 Hora: 12:20:37

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.028229951858521 
 Hora: 12:20:37

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021157026290894 
 Hora: 12:20:37

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.78298306465149 
 Hora: 12:20:37

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.037306070327759 
 Hora: 12:20:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017704010009766 
 Hora: 12:20:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015374898910522 
 Hora: 12:20:43

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.038932800292969 
 Hora: 12:20:43

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.034130096435547 
 Hora: 12:20:43

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.85488510131836 
 Hora: 12:20:43

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.036899089813232 
 Hora: 12:20:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020484924316406 
 Hora: 12:20:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014256000518799 
 Hora: 12:20:54

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.037971019744873 
 Hora: 12:20:54

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.038143873214722 
 Hora: 12:20:54

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.79294514656067 
 Hora: 12:20:54

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.018184900283813 
 Hora: 12:20:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011415004730225 
 Hora: 12:20:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014936208724976 
 Hora: 12:21:00

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021420955657959 
 Hora: 12:21:00

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.01694393157959 
 Hora: 12:21:00

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.75717806816101 
 Hora: 12:21:00

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02114200592041 
 Hora: 12:21:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013130187988281 
 Hora: 12:21:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026287794113159 
 Hora: 12:22:01

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.035104990005493 
 Hora: 12:22:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009835958480835 
 Hora: 12:22:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01427698135376 
 Hora: 12:22:02

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020843982696533 
 Hora: 12:22:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022804021835327 
 Hora: 12:22:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086991786956787 
 Hora: 12:36:45

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02311897277832 
 Hora: 12:36:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012915849685669 
 Hora: 12:36:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097630023956299 
 Hora: 12:36:47

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.040825128555298 
 Hora: 12:36:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017446041107178 
 Hora: 12:36:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02120304107666 
 Hora: 12:38:18

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.050303936004639 
 Hora: 12:38:18

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.034691095352173 
 Hora: 12:38:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012813091278076 
 Hora: 12:38:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011039018630981 
 Hora: 12:38:27

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.076048851013184 
 Hora: 12:38:27

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.049339056015015 
 Hora: 12:38:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.034359931945801 
 Hora: 12:38:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018722057342529 
 Hora: 12:38:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.038192987442017 
 Hora: 12:38:36

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.023319959640503 
 Hora: 12:38:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022693157196045 
 Hora: 12:38:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016603946685791 
 Hora: 12:38:41

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.040763854980469 
 Hora: 12:38:41

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.057858943939209 
 Hora: 12:38:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021723031997681 
 Hora: 12:38:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022253036499023 
 Hora: 12:38:44

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.071614980697632 
 Hora: 12:38:44

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.055817842483521 
 Hora: 12:38:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027935981750488 
 Hora: 12:38:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01983904838562 
 Hora: 12:38:54

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.039039850234985 
 Hora: 12:38:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090270042419434 
 Hora: 12:38:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014571189880371 
 Hora: 12:38:54

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022589921951294 
 Hora: 12:38:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095219612121582 
 Hora: 12:38:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012799978256226 
 Hora: 12:38:54

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.038260936737061 
 Hora: 12:38:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010607004165649 
 Hora: 12:38:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.052203178405762 
 Hora: 12:38:58

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.030326128005981 
 Hora: 12:38:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011436939239502 
 Hora: 12:38:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012751817703247 
 Hora: 12:39:02

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.031244993209839 
 Hora: 12:39:02

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.029839038848877 
 Hora: 12:39:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011590957641602 
 Hora: 12:39:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018518924713135 
 Hora: 12:39:04

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.038339138031006 
 Hora: 12:39:04

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.039434909820557 
 Hora: 12:39:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011902093887329 
 Hora: 12:39:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075991153717041 
 Hora: 12:45:34

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021921873092651 
 Hora: 12:45:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012105941772461 
 Hora: 12:45:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014108896255493 
 Hora: 12:45:36

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.038112878799438 
 Hora: 12:45:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010967969894409 
 Hora: 12:45:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074169635772705 
 Hora: 12:45:38

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.030741930007935 
 Hora: 12:45:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070459842681885 
 Hora: 12:45:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021712064743042 
 Hora: 12:45:41

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.03009295463562 
 Hora: 12:45:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014611959457397 
 Hora: 12:45:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011224031448364 
 Hora: 12:45:45

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.032759189605713 
 Hora: 12:45:45

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025194883346558 
 Hora: 12:45:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006742000579834 
 Hora: 12:45:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069060325622559 
 Hora: 12:46:03

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020509004592896 
 Hora: 12:46:03

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019883155822754 
 Hora: 12:46:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012287855148315 
 Hora: 12:46:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012360095977783 
 Hora: 12:47:12

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.033949851989746 
 Hora: 12:47:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013538122177124 
 Hora: 12:47:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019888877868652 
 Hora: 12:47:14

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.042115926742554 
 Hora: 12:47:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015264987945557 
 Hora: 12:47:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010417938232422 
 Hora: 12:47:18

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022204160690308 
 Hora: 12:47:18

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.031893968582153 
 Hora: 12:47:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077230930328369 
 Hora: 12:47:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014484882354736 
 Hora: 12:50:34

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.066673040390015 
 Hora: 12:50:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014425039291382 
 Hora: 12:50:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.050229072570801 
 Hora: 12:50:37

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.065371036529541 
 Hora: 12:50:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028175115585327 
 Hora: 12:50:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088310241699219 
 Hora: 12:50:59

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023665904998779 
 Hora: 12:50:59

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019679069519043 
 Hora: 12:50:59

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.95125603675842 
 Hora: 12:50:59

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.058527946472168 
 Hora: 12:50:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018157958984375 
 Hora: 12:50:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070490837097168 
 Hora: 13:57:23

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.015239000320435 
 Hora: 13:57:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088050365447998 
 Hora: 13:57:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070040225982666 
 Hora: 13:57:23

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.014195919036865 
 Hora: 13:57:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089190006256104 
 Hora: 13:57:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006666898727417 
 Hora: 13:57:25

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.029213905334473 
 Hora: 13:57:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078580379486084 
 Hora: 13:57:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012119770050049 
 Hora: 13:57:40

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022151947021484 
 Hora: 13:57:40

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015039205551147 
 Hora: 13:57:40

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.8898298740387 
 Hora: 13:57:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020577907562256 
 Hora: 13:57:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075290203094482 
 Hora: 13:57:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013222932815552 
 Hora: 13:57:57

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.054386854171753 
 Hora: 13:57:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01622486114502 
 Hora: 13:57:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010087966918945 
 Hora: 13:58:02

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.032826900482178 
 Hora: 13:58:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013390779495239 
 Hora: 13:58:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015456914901733 
 Hora: 13:58:15

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.038867950439453 
 Hora: 13:58:15

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.027501821517944 
 Hora: 13:58:15

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.95060300827026 
 Hora: 13:58:15

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.01506495475769 
 Hora: 13:58:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013110160827637 
 Hora: 13:58:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019829988479614 
 Hora: 13:58:59

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021153926849365 
 Hora: 13:58:59

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.026626110076904 
 Hora: 13:58:59

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.83870983123779 
 Hora: 13:58:59

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.016541004180908 
 Hora: 13:58:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0050489902496338 
 Hora: 13:58:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011271953582764 
 Hora: 14:01:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090360641479492 
 Hora: 14:01:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006633996963501 
 Hora: 14:01:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016981840133667 
 Hora: 14:01:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085070133209229 
 Hora: 14:01:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083670616149902 
 Hora: 14:01:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071301460266113 
 Hora: 14:01:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011106014251709 
 Hora: 14:01:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014919996261597 
 Hora: 14:01:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083060264587402 
 Hora: 14:01:38

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '19/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.050529003143311 
 Hora: 14:01:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013424873352051 
 Hora: 14:01:59

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.028785943984985 
 Hora: 14:01:59

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025707960128784 
 Hora: 14:01:59

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.77379584312439 
 Hora: 14:01:59

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02493691444397 
 Hora: 14:01:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0154869556427 
 Hora: 14:01:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018960952758789 
 Hora: 14:02:00

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.038372993469238 
 Hora: 14:02:00

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.16367292404175 
 Hora: 14:02:00

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.03109884262085 
 Hora: 14:02:00

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023623943328857 
 Hora: 14:02:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012671947479248 
 Hora: 14:02:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084598064422607 
 Hora: 14:02:27

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.022263050079346 
 Hora: 14:02:27

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.02146577835083 
 Hora: 14:02:27

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.02457594871521 
 Hora: 14:02:27

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020308017730713 
 Hora: 14:02:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065670013427734 
 Hora: 14:02:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057940483093262 
 Hora: 14:02:32

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 4.0534868240356 
 Hora: 14:02:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063087940216064 
 Hora: 14:02:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.13725900650024 
 Hora: 14:02:43

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 1.3851978778839 
 Hora: 14:02:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02858304977417 
 Hora: 14:02:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.04193902015686 
 Hora: 14:02:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024396181106567 
 Hora: 14:02:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012390851974487 
 Hora: 14:02:48

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025522947311401 
 Hora: 14:02:48

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.12813997268677 
 Hora: 14:02:48

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.014101028442383 
 Hora: 14:02:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066277980804443 
 Hora: 14:02:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0043699741363525 
 Hora: 14:03:01

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.019608974456787 
 Hora: 14:03:01

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.013312101364136 
 Hora: 14:03:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069642066955566 
 Hora: 14:03:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011904001235962 
 Hora: 14:03:03

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.030055999755859 
 Hora: 14:03:03

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.025716066360474 
 Hora: 14:03:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014382839202881 
 Hora: 14:03:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012773036956787 
 Hora: 14:03:04

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.027420997619629 
 Hora: 14:03:04

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.025914907455444 
 Hora: 14:03:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087780952453613 
 Hora: 14:03:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012902021408081 
 Hora: 14:03:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010371923446655 
 Hora: 14:03:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012358903884888 
 Hora: 14:03:07

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.017436981201172 
 Hora: 14:03:07

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.030375957489014 
 Hora: 14:03:07

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018882036209106 
 Hora: 14:03:07

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015753984451294 
 Hora: 14:03:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059850215911865 
 Hora: 14:03:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064048767089844 
 Hora: 14:03:09

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 1.5427610874176 
 Hora: 14:03:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085129737854004 
 Hora: 14:03:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069010257720947 
 Hora: 14:03:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010206937789917 
 Hora: 14:03:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085358619689941 
 Hora: 14:03:48

exec p_admarh_get_Escuelas @EscuelaId=0 
 Ejecutado en: 0.050279855728149 
 Hora: 14:03:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0036160945892334 
 Hora: 14:03:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010956048965454 
 Hora: 14:03:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072839260101318 
 Hora: 14:03:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.034879922866821 
 Hora: 14:03:51

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.031859159469604 
 Hora: 14:03:51

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.034113883972168 
 Hora: 14:03:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016093015670776 
 Hora: 14:03:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089240074157715 
 Hora: 14:03:51

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.038187980651855 
 Hora: 14:03:51

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.038776874542236 
 Hora: 14:03:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016295909881592 
 Hora: 14:03:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014146089553833 
 Hora: 14:03:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016051054000854 
 Hora: 14:03:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010271072387695 
 Hora: 14:03:53

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.023393869400024 
 Hora: 14:03:53

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027780055999756 
 Hora: 14:03:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007249116897583 
 Hora: 14:03:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064959526062012 
 Hora: 14:03:56

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.018617868423462 
 Hora: 14:03:56

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.015748977661133 
 Hora: 14:03:56

SELECT *
FROM "cat_TipoReporte"
WHERE "Clave" = '3' 
 Ejecutado en: 0.023880958557129 
 Hora: 14:03:56

SELECT *
FROM "cat_TipoReporte"
WHERE "Clave" != 4 
 Ejecutado en: 0.021248817443848 
 Hora: 14:03:56

SELECT *
FROM "cat_Reportes"
WHERE "idTipoReporte" = '3'
AND "Activo" = 1 
 Ejecutado en: 0.022608041763306 
 Hora: 14:03:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011157035827637 
 Hora: 14:03:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057759284973145 
 Hora: 14:03:57

SELECT *
FROM "cat_Reportes"
WHERE "idTipoReporte" = '3'
AND "Activo" = 1 
 Ejecutado en: 0.017851114273071 
 Hora: 14:03:57

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.016515970230103 
 Hora: 14:03:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019178152084351 
 Hora: 14:03:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063400268554688 
 Hora: 14:04:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011609077453613 
 Hora: 14:04:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01462197303772 
 Hora: 14:04:05

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020804882049561 
 Hora: 14:04:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008080005645752 
 Hora: 14:04:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071568489074707 
 Hora: 14:04:06

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021497011184692 
 Hora: 14:04:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093648433685303 
 Hora: 14:04:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008948802947998 
 Hora: 14:04:17

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.020671129226685 
 Hora: 14:04:17

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.021395921707153 
 Hora: 14:04:17

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018509864807129 
 Hora: 14:04:17

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022181034088135 
 Hora: 14:04:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010420083999634 
 Hora: 14:04:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013808012008667 
 Hora: 14:04:19

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 1.2443821430206 
 Hora: 14:04:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092589855194092 
 Hora: 14:04:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01305103302002 
 Hora: 14:05:35

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.042668104171753 
 Hora: 14:05:35

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.023881912231445 
 Hora: 14:05:35

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.88922905921936 
 Hora: 14:05:35

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.062060117721558 
 Hora: 14:05:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02861499786377 
 Hora: 14:05:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011900901794434 
 Hora: 14:06:19

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.035576105117798 
 Hora: 14:06:19

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.040122985839844 
 Hora: 14:06:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014086961746216 
 Hora: 14:06:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065479278564453 
 Hora: 14:09:33

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.02579402923584 
 Hora: 14:09:33

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.032785892486572 
 Hora: 14:09:33

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.098397016525269 
 Hora: 14:09:33

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.026088953018188 
 Hora: 14:09:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013538122177124 
 Hora: 14:09:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013921022415161 
 Hora: 14:09:36

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 1.3053040504456 
 Hora: 14:09:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011325836181641 
 Hora: 14:09:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.033578157424927 
 Hora: 14:34:15

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.033354997634888 
 Hora: 14:34:15

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.045636892318726 
 Hora: 14:34:15

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.86331391334534 
 Hora: 14:34:15

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022268056869507 
 Hora: 14:34:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01604700088501 
 Hora: 14:34:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010334968566895 
 Hora: 14:34:27

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021178960800171 
 Hora: 14:34:27

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014655828475952 
 Hora: 14:34:27

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.7816698551178 
 Hora: 14:34:27

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02385687828064 
 Hora: 14:34:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089130401611328 
 Hora: 14:34:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.041482925415039 
 Hora: 14:34:55

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.12232494354248 
 Hora: 14:34:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.079836845397949 
 Hora: 14:34:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013489007949829 
 Hora: 14:34:58

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.024847030639648 
 Hora: 14:34:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016767024993896 
 Hora: 14:34:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019203901290894 
 Hora: 14:35:10

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.025504112243652 
 Hora: 14:35:10

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.042695999145508 
 Hora: 14:35:10

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.89795899391174 
 Hora: 14:35:10

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.047590017318726 
 Hora: 14:35:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011940002441406 
 Hora: 14:35:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016559839248657 
 Hora: 14:39:20

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.0400390625 
 Hora: 14:39:20

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.046850919723511 
 Hora: 14:39:20

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.80690407752991 
 Hora: 14:39:20

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026249885559082 
 Hora: 14:39:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015738964080811 
 Hora: 14:39:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025844097137451 
 Hora: 14:39:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018352031707764 
 Hora: 14:39:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019381999969482 
 Hora: 14:39:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012340068817139 
 Hora: 14:39:37

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '19/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.044103860855103 
 Hora: 14:39:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086519718170166 
 Hora: 14:39:40

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.0381920337677 
 Hora: 14:39:40

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.040314912796021 
 Hora: 14:39:40

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.86189103126526 
 Hora: 14:39:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.036041021347046 
 Hora: 14:39:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012938976287842 
 Hora: 14:39:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013824939727783 
 Hora: 14:39:53

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.052594900131226 
 Hora: 14:39:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.03741192817688 
 Hora: 14:39:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012270927429199 
 Hora: 14:39:55

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.044523954391479 
 Hora: 14:39:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014499187469482 
 Hora: 14:39:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.03891396522522 
 Hora: 14:39:57

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.067312002182007 
 Hora: 14:39:57

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.055212020874023 
 Hora: 14:39:57

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.81656789779663 
 Hora: 14:39:57

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.054342985153198 
 Hora: 14:39:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01219916343689 
 Hora: 14:39:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014167070388794 
 Hora: 14:40:12

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.068150997161865 
 Hora: 14:40:12

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.055004835128784 
 Hora: 14:40:12

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 1.157035112381 
 Hora: 14:40:12

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.030781984329224 
 Hora: 14:40:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013236045837402 
 Hora: 14:40:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018856048583984 
 Hora: 14:40:12

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.03679895401001 
 Hora: 14:40:12

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.048408031463623 
 Hora: 14:40:12

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 1.5239768028259 
 Hora: 14:40:12

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.033997058868408 
 Hora: 14:40:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025442123413086 
 Hora: 14:40:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095860958099365 
 Hora: 14:45:24

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023138999938965 
 Hora: 14:45:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010028839111328 
 Hora: 14:45:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021331071853638 
 Hora: 14:45:25

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.02894401550293 
 Hora: 14:45:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014374971389771 
 Hora: 14:45:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018943071365356 
 Hora: 14:45:40

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.026395082473755 
 Hora: 14:45:40

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.024881839752197 
 Hora: 14:45:40

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.83866190910339 
 Hora: 14:45:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.037101030349731 
 Hora: 14:45:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011651992797852 
 Hora: 14:45:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.031489849090576 
 Hora: 14:45:51

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.038211107254028 
 Hora: 14:45:51

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.04121994972229 
 Hora: 14:45:51

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.80310010910034 
 Hora: 14:45:51

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.059032917022705 
 Hora: 14:45:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014043807983398 
 Hora: 14:45:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01743483543396 
 Hora: 14:47:01

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.031084060668945 
 Hora: 14:47:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022490978240967 
 Hora: 14:47:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020078897476196 
 Hora: 14:47:03

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.035945892333984 
 Hora: 14:47:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029938936233521 
 Hora: 14:47:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063989162445068 
 Hora: 14:47:19

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.027984142303467 
 Hora: 14:47:19

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.03567910194397 
 Hora: 14:47:19

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.81540083885193 
 Hora: 14:47:19

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.0329749584198 
 Hora: 14:47:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016635179519653 
 Hora: 14:47:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007472038269043 
 Hora: 14:48:35

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.035529851913452 
 Hora: 14:48:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01730489730835 
 Hora: 14:48:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014477968215942 
 Hora: 14:48:37

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.041111946105957 
 Hora: 14:48:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014613151550293 
 Hora: 14:48:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083630084991455 
 Hora: 14:48:50

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017871856689453 
 Hora: 14:48:50

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.023635864257812 
 Hora: 14:48:50

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.78067207336426 
 Hora: 14:48:50

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.035449028015137 
 Hora: 14:48:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098350048065186 
 Hora: 14:48:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025253057479858 
 Hora: 14:59:22

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.033059120178223 
 Hora: 14:59:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017223834991455 
 Hora: 14:59:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014545917510986 
 Hora: 14:59:24

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.026314973831177 
 Hora: 14:59:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022806167602539 
 Hora: 14:59:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01271390914917 
 Hora: 15:00:15

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.013528108596802 
 Hora: 15:00:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0052051544189453 
 Hora: 15:00:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015356063842773 
 Hora: 15:00:18

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.03374195098877 
 Hora: 15:00:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022994995117188 
 Hora: 15:00:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011767864227295 
 Hora: 15:00:18

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.041462898254395 
 Hora: 15:00:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013331890106201 
 Hora: 15:00:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083639621734619 
 Hora: 15:00:23

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.03753399848938 
 Hora: 15:00:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010747194290161 
 Hora: 15:00:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097360610961914 
 Hora: 15:00:37

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021749019622803 
 Hora: 15:00:37

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019665956497192 
 Hora: 15:00:37

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.83695888519287 
 Hora: 15:00:37

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.043725967407227 
 Hora: 15:00:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010159015655518 
 Hora: 15:00:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010609865188599 
 Hora: 15:00:52

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.027312040328979 
 Hora: 15:00:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00400710105896 
 Hora: 15:00:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022146940231323 
 Hora: 15:00:56

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.040118932723999 
 Hora: 15:00:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011730194091797 
 Hora: 15:00:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098209381103516 
 Hora: 15:01:08

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020061016082764 
 Hora: 15:01:08

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019613027572632 
 Hora: 15:01:08

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.86682796478271 
 Hora: 15:01:08

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022787094116211 
 Hora: 15:01:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011044025421143 
 Hora: 15:01:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063591003417969 
 Hora: 15:02:03

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.02405309677124 
 Hora: 15:02:03

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.022011041641235 
 Hora: 15:02:03

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.94384407997131 
 Hora: 15:02:03

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.037188053131104 
 Hora: 15:02:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065040588378906 
 Hora: 15:02:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010046005249023 
 Hora: 15:02:13

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018224954605103 
 Hora: 15:02:13

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015636920928955 
 Hora: 15:02:13

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.91137194633484 
 Hora: 15:02:13

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022374868392944 
 Hora: 15:02:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092430114746094 
 Hora: 15:02:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011193990707397 
 Hora: 15:03:04

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.025558948516846 
 Hora: 15:03:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010136127471924 
 Hora: 15:03:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022087097167969 
 Hora: 15:03:06

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.034921169281006 
 Hora: 15:03:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014091968536377 
 Hora: 15:03:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009768009185791 
 Hora: 15:03:09

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.027307033538818 
 Hora: 15:03:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010258197784424 
 Hora: 15:03:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015212059020996 
 Hora: 15:03:10

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.0298171043396 
 Hora: 15:03:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097579956054688 
 Hora: 15:03:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010982990264893 
 Hora: 15:03:21

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020641088485718 
 Hora: 15:03:21

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.024572134017944 
 Hora: 15:03:21

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.89529514312744 
 Hora: 15:03:21

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022234916687012 
 Hora: 15:03:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014212131500244 
 Hora: 15:03:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013618946075439 
 Hora: 15:03:50

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024113178253174 
 Hora: 15:03:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088930130004883 
 Hora: 15:03:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092318058013916 
 Hora: 15:03:51

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.026911973953247 
 Hora: 15:03:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013406038284302 
 Hora: 15:03:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083930492401123 
 Hora: 15:04:02

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021466016769409 
 Hora: 15:04:02

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014072179794312 
 Hora: 15:04:02

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.83482813835144 
 Hora: 15:04:02

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022577047348022 
 Hora: 15:04:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008206844329834 
 Hora: 15:04:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089519023895264 
 Hora: 15:04:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015609979629517 
 Hora: 15:04:36

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014863014221191 
 Hora: 15:04:36

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.8915331363678 
 Hora: 15:04:36

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.01724100112915 
 Hora: 15:04:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011822938919067 
 Hora: 15:04:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02934193611145 
 Hora: 15:04:42

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.061330080032349 
 Hora: 15:04:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026811122894287 
 Hora: 15:04:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012791872024536 
 Hora: 15:04:44

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025838136672974 
 Hora: 15:04:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015504121780396 
 Hora: 15:04:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086181163787842 
 Hora: 15:05:15

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.012080192565918 
 Hora: 15:05:15

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017390012741089 
 Hora: 15:05:15

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.78059101104736 
 Hora: 15:05:15

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024489879608154 
 Hora: 15:05:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085799694061279 
 Hora: 15:05:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014127969741821 
 Hora: 15:06:53

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.04416298866272 
 Hora: 15:06:53

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.080436944961548 
 Hora: 15:06:53

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.03623104095459 
 Hora: 15:06:53

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='16/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.040119886398315 
 Hora: 15:06:53

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1910'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 2.2055659294128 
 Hora: 15:06:53

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.029032945632935 
 Hora: 15:06:53

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.021327972412109 
 Hora: 15:06:53

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.042950868606567 
 Hora: 15:06:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016922950744629 
 Hora: 15:06:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02715802192688 
 Hora: 15:06:57

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.073247194290161 
 Hora: 15:06:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027575016021729 
 Hora: 15:06:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028143167495728 
 Hora: 15:07:21

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.070678949356079 
 Hora: 15:07:21

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.057446956634521 
 Hora: 15:07:21

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.85835003852844 
 Hora: 15:07:21

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.039287805557251 
 Hora: 15:07:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027307033538818 
 Hora: 15:07:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025921106338501 
 Hora: 15:07:51

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.09280800819397 
 Hora: 15:07:51

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.10020399093628 
 Hora: 15:07:51

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.09526801109314 
 Hora: 15:07:51

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='16/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.069300889968872 
 Hora: 15:07:51

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1910'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.14487385749817 
 Hora: 15:07:51

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.077663898468018 
 Hora: 15:07:51

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.054545164108276 
 Hora: 15:07:51

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.054370880126953 
 Hora: 15:07:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023016929626465 
 Hora: 15:07:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.039401054382324 
 Hora: 15:07:53

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.086156129837036 
 Hora: 15:07:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.036952972412109 
 Hora: 15:07:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.046696901321411 
 Hora: 15:08:11

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.077288150787354 
 Hora: 15:08:11

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.065345048904419 
 Hora: 15:08:11

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.76346683502197 
 Hora: 15:08:11

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.036643028259277 
 Hora: 15:08:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027067899703979 
 Hora: 15:08:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022439002990723 
 Hora: 15:08:21

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023031949996948 
 Hora: 15:08:21

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.043098926544189 
 Hora: 15:08:21

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.87405204772949 
 Hora: 15:08:21

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027715921401978 
 Hora: 15:08:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018667936325073 
 Hora: 15:08:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017745971679688 
 Hora: 15:09:02

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.042316198348999 
 Hora: 15:09:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01836109161377 
 Hora: 15:09:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022583961486816 
 Hora: 15:09:03

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.038954019546509 
 Hora: 15:09:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014549970626831 
 Hora: 15:09:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021627902984619 
 Hora: 15:09:16

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.036337852478027 
 Hora: 15:09:16

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.031613111495972 
 Hora: 15:09:16

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.84039092063904 
 Hora: 15:09:16

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.037785053253174 
 Hora: 15:09:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017097949981689 
 Hora: 15:09:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017857074737549 
 Hora: 15:09:25

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.038722991943359 
 Hora: 15:09:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016103029251099 
 Hora: 15:09:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020537137985229 
 Hora: 15:09:27

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.045310020446777 
 Hora: 15:09:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.030503034591675 
 Hora: 15:09:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027837991714478 
 Hora: 15:09:37

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.072968006134033 
 Hora: 15:09:37

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.056073904037476 
 Hora: 15:09:37

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.822674036026 
 Hora: 15:09:37

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022432088851929 
 Hora: 15:09:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.037829875946045 
 Hora: 15:09:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088019371032715 
 Hora: 15:09:45

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016238927841187 
 Hora: 15:09:45

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017560005187988 
 Hora: 15:09:45

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.85128808021545 
 Hora: 15:09:45

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021488189697266 
 Hora: 15:09:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073659420013428 
 Hora: 15:09:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094690322875977 
 Hora: 15:09:56

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022511005401611 
 Hora: 15:09:56

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018424987792969 
 Hora: 15:09:56

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.9310839176178 
 Hora: 15:09:56

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.085073232650757 
 Hora: 15:09:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072031021118164 
 Hora: 15:09:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067870616912842 
 Hora: 15:12:07

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017815113067627 
 Hora: 15:12:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010586977005005 
 Hora: 15:12:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0104660987854 
 Hora: 15:12:08

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025637865066528 
 Hora: 15:12:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008120059967041 
 Hora: 15:12:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067851543426514 
 Hora: 15:12:25

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021356105804443 
 Hora: 15:12:25

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014194965362549 
 Hora: 15:12:25

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.8274199962616 
 Hora: 15:12:25

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.018723011016846 
 Hora: 15:12:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070188045501709 
 Hora: 15:12:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01178503036499 
 Hora: 15:17:20

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022463083267212 
 Hora: 15:17:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076029300689697 
 Hora: 15:17:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012551069259644 
 Hora: 15:17:21

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021209955215454 
 Hora: 15:17:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015194892883301 
 Hora: 15:17:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014161109924316 
 Hora: 15:17:31

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019704103469849 
 Hora: 15:17:31

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016052961349487 
 Hora: 15:17:31

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.82553911209106 
 Hora: 15:17:31

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.028277158737183 
 Hora: 15:17:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011518955230713 
 Hora: 15:17:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076498985290527 
 Hora: 15:17:39

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.026232957839966 
 Hora: 15:17:39

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017693042755127 
 Hora: 15:17:39

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.8532121181488 
 Hora: 15:17:39

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020684957504272 
 Hora: 15:17:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082721710205078 
 Hora: 15:17:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0054459571838379 
 Hora: 15:25:56

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.025007009506226 
 Hora: 15:25:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012802124023438 
 Hora: 15:25:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095949172973633 
 Hora: 15:25:58

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.0191810131073 
 Hora: 15:25:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010622024536133 
 Hora: 15:25:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011281967163086 
 Hora: 15:26:08

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.027904987335205 
 Hora: 15:26:08

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021897077560425 
 Hora: 15:26:08

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 1.0190370082855 
 Hora: 15:26:08

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02928900718689 
 Hora: 15:26:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077509880065918 
 Hora: 15:26:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011016130447388 
 Hora: 15:26:51

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02324104309082 
 Hora: 15:26:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069830417633057 
 Hora: 15:26:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021214962005615 
 Hora: 15:26:53

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.031798839569092 
 Hora: 15:26:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012817144393921 
 Hora: 15:26:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01584005355835 
 Hora: 15:27:02

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019880056381226 
 Hora: 15:27:02

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019603967666626 
 Hora: 15:27:02

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.83121681213379 
 Hora: 15:27:02

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.032848834991455 
 Hora: 15:27:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074949264526367 
 Hora: 15:27:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014802932739258 
 Hora: 15:41:37

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020553112030029 
 Hora: 15:41:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085980892181396 
 Hora: 15:41:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016279935836792 
 Hora: 15:41:39

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.035233020782471 
 Hora: 15:41:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070078372955322 
 Hora: 15:41:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019905805587769 
 Hora: 15:41:48

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.011924028396606 
 Hora: 15:41:48

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.027856111526489 
 Hora: 15:41:48

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.89582300186157 
 Hora: 15:41:48

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.032510995864868 
 Hora: 15:41:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011018991470337 
 Hora: 15:41:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064330101013184 
 Hora: 15:42:04

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020334005355835 
 Hora: 15:42:04

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017668962478638 
 Hora: 15:42:04

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.92719388008118 
 Hora: 15:42:04

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022546052932739 
 Hora: 15:42:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099461078643799 
 Hora: 15:42:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071589946746826 
 Hora: 15:47:03

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023591041564941 
 Hora: 15:47:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090639591217041 
 Hora: 15:47:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015356063842773 
 Hora: 15:47:05

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.029275894165039 
 Hora: 15:47:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013270854949951 
 Hora: 15:47:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064809322357178 
 Hora: 15:47:16

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.01933217048645 
 Hora: 15:47:16

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.023189067840576 
 Hora: 15:47:16

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.83882594108582 
 Hora: 15:47:16

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020694017410278 
 Hora: 15:47:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086238384246826 
 Hora: 15:47:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013412952423096 
 Hora: 15:52:32

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022173881530762 
 Hora: 15:52:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085370540618896 
 Hora: 15:52:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01272988319397 
 Hora: 15:52:34

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025563955307007 
 Hora: 15:52:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011934995651245 
 Hora: 15:52:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084497928619385 
 Hora: 15:52:44

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.02054500579834 
 Hora: 15:52:44

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019956827163696 
 Hora: 15:52:44

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.79578804969788 
 Hora: 15:52:44

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026424169540405 
 Hora: 15:52:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012667894363403 
 Hora: 15:52:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010797023773193 
 Hora: 15:52:47

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.034256935119629 
 Hora: 15:52:47

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.024120092391968 
 Hora: 15:52:47

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.070538997650146 
 Hora: 15:52:47

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.03234601020813 
 Hora: 15:52:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014920949935913 
 Hora: 15:52:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007612943649292 
 Hora: 16:00:20

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017760038375854 
 Hora: 16:00:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010840177536011 
 Hora: 16:00:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064170360565186 
 Hora: 16:00:22

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021122932434082 
 Hora: 16:00:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010657072067261 
 Hora: 16:00:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090689659118652 
 Hora: 16:00:35

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018496036529541 
 Hora: 16:00:35

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014845848083496 
 Hora: 16:00:35

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.94883298873901 
 Hora: 16:00:35

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021612167358398 
 Hora: 16:00:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092349052429199 
 Hora: 16:00:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089941024780273 
 Hora: 16:00:37

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.02833104133606 
 Hora: 16:00:37

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018339872360229 
 Hora: 16:00:37

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.052827835083008 
 Hora: 16:00:37

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.019926071166992 
 Hora: 16:00:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097110271453857 
 Hora: 16:00:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084562301635742 
 Hora: 16:01:18

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019307136535645 
 Hora: 16:01:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011311054229736 
 Hora: 16:01:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084109306335449 
 Hora: 16:01:19

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025358200073242 
 Hora: 16:01:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008903980255127 
 Hora: 16:01:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097720623016357 
 Hora: 16:01:30

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018553972244263 
 Hora: 16:01:30

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019231081008911 
 Hora: 16:01:30

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.79227685928345 
 Hora: 16:01:30

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022138833999634 
 Hora: 16:01:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.03500509262085 
 Hora: 16:01:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090329647064209 
 Hora: 16:01:33

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.012892961502075 
 Hora: 16:01:33

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020442008972168 
 Hora: 16:01:33

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.05131196975708 
 Hora: 16:01:33

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02322793006897 
 Hora: 16:01:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075559616088867 
 Hora: 16:01:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079889297485352 
 Hora: 16:03:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092840194702148 
 Hora: 16:03:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012866973876953 
 Hora: 16:03:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080869197845459 
 Hora: 16:03:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010634899139404 
 Hora: 16:03:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072629451751709 
 Hora: 16:03:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063221454620361 
 Hora: 16:03:35

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.021446943283081 
 Hora: 16:03:35

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.03815484046936 
 Hora: 16:03:35

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019582986831665 
 Hora: 16:03:35

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014166116714478 
 Hora: 16:03:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074019432067871 
 Hora: 16:03:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011677980422974 
 Hora: 16:03:38

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 2.0468981266022 
 Hora: 16:03:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023496150970459 
 Hora: 16:03:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068960189819336 
 Hora: 16:13:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011579036712646 
 Hora: 16:13:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098319053649902 
 Hora: 16:13:02

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023401975631714 
 Hora: 16:13:02

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.048685073852539 
 Hora: 16:13:02

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.016597986221313 
 Hora: 16:13:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012443065643311 
 Hora: 16:13:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096728801727295 
 Hora: 16:21:22

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017830848693848 
 Hora: 16:21:22

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016100883483887 
 Hora: 16:21:22

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.82301902770996 
 Hora: 16:21:22

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02559494972229 
 Hora: 16:21:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0049479007720947 
 Hora: 16:21:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068790912628174 
 Hora: 16:21:24

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022287130355835 
 Hora: 16:21:24

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017773151397705 
 Hora: 16:21:24

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.062255144119263 
 Hora: 16:21:24

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023777008056641 
 Hora: 16:21:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078599452972412 
 Hora: 16:21:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019279003143311 
 Hora: 16:25:02

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020823001861572 
 Hora: 16:25:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012709856033325 
 Hora: 16:25:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022660970687866 
 Hora: 16:25:04

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023617029190063 
 Hora: 16:25:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0052320957183838 
 Hora: 16:25:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010547161102295 
 Hora: 16:25:19

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020724058151245 
 Hora: 16:25:19

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019679069519043 
 Hora: 16:25:19

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.75847220420837 
 Hora: 16:25:19

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026693105697632 
 Hora: 16:25:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013339996337891 
 Hora: 16:25:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010786056518555 
 Hora: 16:25:39

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.033886909484863 
 Hora: 16:25:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0141921043396 
 Hora: 16:25:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014136075973511 
 Hora: 16:25:41

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.037557125091553 
 Hora: 16:25:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012378931045532 
 Hora: 16:25:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013636112213135 
 Hora: 16:25:56

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.026391983032227 
 Hora: 16:25:56

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.013175010681152 
 Hora: 16:25:56

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.77791714668274 
 Hora: 16:25:56

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.032447099685669 
 Hora: 16:25:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017688989639282 
 Hora: 16:25:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014848947525024 
 Hora: 16:26:19

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.039083957672119 
 Hora: 16:26:19

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.026560068130493 
 Hora: 16:26:19

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.82975602149963 
 Hora: 16:26:19

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.046568155288696 
 Hora: 16:26:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075850486755371 
 Hora: 16:26:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014267921447754 
 Hora: 16:26:30

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.041508913040161 
 Hora: 16:26:30

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.035173892974854 
 Hora: 16:26:30

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.77514100074768 
 Hora: 16:26:30

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.0260009765625 
 Hora: 16:26:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084350109100342 
 Hora: 16:26:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012001037597656 
 Hora: 16:27:21

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.026175975799561 
 Hora: 16:27:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010973930358887 
 Hora: 16:27:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095179080963135 
 Hora: 16:27:22

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021345853805542 
 Hora: 16:27:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083599090576172 
 Hora: 16:27:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016849040985107 
 Hora: 16:27:35

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022779941558838 
 Hora: 16:27:35

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018168926239014 
 Hora: 16:27:35

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.78617715835571 
 Hora: 16:27:35

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.043986797332764 
 Hora: 16:27:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069611072540283 
 Hora: 16:27:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085480213165283 
 Hora: 16:28:41

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014960050582886 
 Hora: 16:28:41

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016954898834229 
 Hora: 16:28:41

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.75297403335571 
 Hora: 16:28:41

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022450923919678 
 Hora: 16:28:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089480876922607 
 Hora: 16:28:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085940361022949 
 Hora: 16:29:24

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.031123876571655 
 Hora: 16:29:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007843017578125 
 Hora: 16:29:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011229038238525 
 Hora: 16:29:24

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020925045013428 
 Hora: 16:29:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010885000228882 
 Hora: 16:29:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011542081832886 
 Hora: 16:29:34

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022035837173462 
 Hora: 16:29:34

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016473054885864 
 Hora: 16:29:34

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.74535298347473 
 Hora: 16:29:34

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025448083877563 
 Hora: 16:29:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094680786132812 
 Hora: 16:29:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013943910598755 
 Hora: 16:29:45

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.016653060913086 
 Hora: 16:29:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096168518066406 
 Hora: 16:29:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014360904693604 
 Hora: 16:29:46

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.024209022521973 
 Hora: 16:29:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012233972549438 
 Hora: 16:29:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099589824676514 
 Hora: 16:30:04

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018503189086914 
 Hora: 16:30:04

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017493009567261 
 Hora: 16:30:04

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.75489187240601 
 Hora: 16:30:04

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02321720123291 
 Hora: 16:30:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082459449768066 
 Hora: 16:30:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070090293884277 
 Hora: 16:31:17

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017070055007935 
 Hora: 16:31:17

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.01623010635376 
 Hora: 16:31:17

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.020770072937012 
 Hora: 16:31:17

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='16/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.019232034683228 
 Hora: 16:31:17

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1910'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.080972909927368 
 Hora: 16:31:17

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.020122051239014 
 Hora: 16:31:17

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.017093181610107 
 Hora: 16:31:17

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.022457122802734 
 Hora: 16:31:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083620548248291 
 Hora: 16:31:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074269771575928 
 Hora: 16:31:19

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023873805999756 
 Hora: 16:31:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058012008666992 
 Hora: 16:31:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010994911193848 
 Hora: 16:31:28

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019469976425171 
 Hora: 16:31:28

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017006874084473 
 Hora: 16:31:28

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.82484698295593 
 Hora: 16:31:28

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024837970733643 
 Hora: 16:31:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010403156280518 
 Hora: 16:31:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084919929504395 
 Hora: 16:31:34

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018409967422485 
 Hora: 16:31:34

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018156051635742 
 Hora: 16:31:34

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.86942315101624 
 Hora: 16:31:34

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022125005722046 
 Hora: 16:31:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058619976043701 
 Hora: 16:31:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090341567993164 
 Hora: 16:33:12

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.025150060653687 
 Hora: 16:33:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080268383026123 
 Hora: 16:33:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01261305809021 
 Hora: 16:33:12

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.031748056411743 
 Hora: 16:33:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011470079421997 
 Hora: 16:33:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016515016555786 
 Hora: 16:33:24

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.026965141296387 
 Hora: 16:33:24

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.026317119598389 
 Hora: 16:33:24

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.82289791107178 
 Hora: 16:33:24

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.0241539478302 
 Hora: 16:33:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014868021011353 
 Hora: 16:33:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097930431365967 
 Hora: 16:33:27

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016304016113281 
 Hora: 16:33:27

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.036606073379517 
 Hora: 16:33:27

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.051548957824707 
 Hora: 16:33:27

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.037096977233887 
 Hora: 16:33:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01343297958374 
 Hora: 16:33:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013411998748779 
 Hora: 16:34:09

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024074077606201 
 Hora: 16:34:09

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.03186297416687 
 Hora: 16:34:09

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.79152607917786 
 Hora: 16:34:09

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020576000213623 
 Hora: 16:34:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084948539733887 
 Hora: 16:34:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081210136413574 
 Hora: 16:34:18

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022056102752686 
 Hora: 16:34:18

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.01505708694458 
 Hora: 16:34:18

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.79674100875854 
 Hora: 16:34:18

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.016500949859619 
 Hora: 16:34:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01286792755127 
 Hora: 16:34:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093510150909424 
 Hora: 16:34:37

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019273996353149 
 Hora: 16:34:37

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.012089014053345 
 Hora: 16:34:37

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.82713389396667 
 Hora: 16:34:37

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022452831268311 
 Hora: 16:34:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012511968612671 
 Hora: 16:34:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062909126281738 
 Hora: 16:34:45

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016684055328369 
 Hora: 16:34:45

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014307022094727 
 Hora: 16:34:45

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.7959189414978 
 Hora: 16:34:45

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.019828081130981 
 Hora: 16:34:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010785102844238 
 Hora: 16:34:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013062000274658 
 Hora: 16:34:46

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016856908798218 
 Hora: 16:34:46

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016600847244263 
 Hora: 16:34:46

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.048978805541992 
 Hora: 16:34:46

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025292873382568 
 Hora: 16:34:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085999965667725 
 Hora: 16:34:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022091865539551 
 Hora: 16:34:54

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.028939008712769 
 Hora: 16:34:54

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.025964975357056 
 Hora: 16:34:54

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.80315089225769 
 Hora: 16:34:54

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020987033843994 
 Hora: 16:34:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010734796524048 
 Hora: 16:34:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010719060897827 
 Hora: 16:40:13

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017642021179199 
 Hora: 16:40:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011388063430786 
 Hora: 16:40:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095770359039307 
 Hora: 16:40:15

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.032732963562012 
 Hora: 16:40:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014971017837524 
 Hora: 16:40:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078730583190918 
 Hora: 16:40:24

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016714096069336 
 Hora: 16:40:24

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014281988143921 
 Hora: 16:40:24

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.73082685470581 
 Hora: 16:40:24

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.030631065368652 
 Hora: 16:40:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089998245239258 
 Hora: 16:40:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011182069778442 
 Hora: 16:40:27

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021310091018677 
 Hora: 16:40:27

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.024398803710938 
 Hora: 16:40:27

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.074931144714355 
 Hora: 16:40:27

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.041074991226196 
 Hora: 16:40:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012378931045532 
 Hora: 16:40:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008246898651123 
 Hora: 16:42:39

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.033689022064209 
 Hora: 16:42:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011044025421143 
 Hora: 16:42:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020503044128418 
 Hora: 16:42:41

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.03346586227417 
 Hora: 16:42:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012592077255249 
 Hora: 16:42:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014458894729614 
 Hora: 16:42:54

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015515804290771 
 Hora: 16:42:54

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016852140426636 
 Hora: 16:42:54

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.71297979354858 
 Hora: 16:42:54

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024858951568604 
 Hora: 16:42:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006425142288208 
 Hora: 16:42:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093510150909424 
 Hora: 16:42:57

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.030823945999146 
 Hora: 16:42:57

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017841100692749 
 Hora: 16:42:57

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = '958', @Tomadas = '', @IdDependencia = '1' 
 Ejecutado en: 0.049914836883545 
 Hora: 16:42:57

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.039846897125244 
 Hora: 16:42:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099129676818848 
 Hora: 16:42:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095148086547852 
 Hora: 16:47:30

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019730806350708 
 Hora: 16:47:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011148929595947 
 Hora: 16:47:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097949504852295 
 Hora: 16:47:31

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023543119430542 
 Hora: 16:47:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076730251312256 
 Hora: 16:47:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097160339355469 
 Hora: 16:47:41

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019699096679688 
 Hora: 16:47:41

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.013036966323853 
 Hora: 16:47:41

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.75222396850586 
 Hora: 16:47:41

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.018393993377686 
 Hora: 16:47:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014473915100098 
 Hora: 16:47:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012526988983154 
 Hora: 16:47:49

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.01802396774292 
 Hora: 16:47:49

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.013502836227417 
 Hora: 16:47:49

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.74030089378357 
 Hora: 16:47:49

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022810935974121 
 Hora: 16:47:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067219734191895 
 Hora: 16:47:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070068836212158 
 Hora: 16:50:06

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015098094940186 
 Hora: 16:50:06

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019484043121338 
 Hora: 16:50:06

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.71637296676636 
 Hora: 16:50:06

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024317979812622 
 Hora: 16:50:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0052351951599121 
 Hora: 16:50:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078580379486084 
 Hora: 16:50:13

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017817974090576 
 Hora: 16:50:13

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.011060953140259 
 Hora: 16:50:13

EXEC p_admarh_ListadoVacaciones @PresupuestoId = '0002', @PeriodoId = NULL, @Tomadas = 2, @IdDependencia = NULL 
 Ejecutado en: 0.71919298171997 
 Hora: 16:50:13

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021427869796753 
 Hora: 16:50:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010102987289429 
 Hora: 16:50:13

