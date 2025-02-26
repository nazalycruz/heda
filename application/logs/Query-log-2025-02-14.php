<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080578327178955 
 Hora: 08:27:19

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019277811050415 
 Hora: 08:27:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094459056854248 
 Hora: 08:27:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.035621881484985 
 Hora: 08:27:20

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023470163345337 
 Hora: 08:27:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018733024597168 
 Hora: 08:27:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013246059417725 
 Hora: 08:27:24

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.01829195022583 
 Hora: 08:27:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088281631469727 
 Hora: 08:27:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.073554039001465 
 Hora: 08:50:18

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.11197113990784 
 Hora: 08:50:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.069908857345581 
 Hora: 08:50:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.058287143707275 
 Hora: 08:50:19

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.1111159324646 
 Hora: 08:50:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.05411696434021 
 Hora: 08:50:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027898073196411 
 Hora: 08:50:22

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.046499013900757 
 Hora: 08:50:22

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.067781925201416 
 Hora: 08:50:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013286113739014 
 Hora: 08:50:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016804933547974 
 Hora: 08:53:25

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.027727842330933 
 Hora: 08:53:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014230966567993 
 Hora: 08:53:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019192934036255 
 Hora: 08:53:26

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.051152944564819 
 Hora: 08:53:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022179126739502 
 Hora: 08:53:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026119947433472 
 Hora: 08:53:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018344163894653 
 Hora: 08:53:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01160192489624 
 Hora: 08:53:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014677047729492 
 Hora: 08:53:35

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '14/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.037164926528931 
 Hora: 08:53:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075628757476807 
 Hora: 08:54:24

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.0211181640625 
 Hora: 08:54:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078470706939697 
 Hora: 08:54:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079209804534912 
 Hora: 08:54:25

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.026920080184937 
 Hora: 08:54:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012803077697754 
 Hora: 08:54:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010640859603882 
 Hora: 08:54:41

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.028979063034058 
 Hora: 08:54:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097789764404297 
 Hora: 08:54:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012184143066406 
 Hora: 08:54:41

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023483991622925 
 Hora: 08:54:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013128042221069 
 Hora: 08:54:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.051636934280396 
 Hora: 08:54:50

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.01872992515564 
 Hora: 08:54:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014722108840942 
 Hora: 08:54:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095720291137695 
 Hora: 08:54:51

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.034080028533936 
 Hora: 08:54:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012986898422241 
 Hora: 08:54:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016111135482788 
 Hora: 08:54:55

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.035502195358276 
 Hora: 08:54:55

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.036125898361206 
 Hora: 08:54:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016838788986206 
 Hora: 08:54:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01161003112793 
 Hora: 09:00:03

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.025411128997803 
 Hora: 09:00:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095372200012207 
 Hora: 09:00:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0052268505096436 
 Hora: 09:00:04

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021682977676392 
 Hora: 09:00:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007990837097168 
 Hora: 09:00:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068950653076172 
 Hora: 09:02:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081489086151123 
 Hora: 09:02:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094449520111084 
 Hora: 09:02:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085701942443848 
 Hora: 09:02:01

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '14/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.020378112792969 
 Hora: 09:02:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082199573516846 
 Hora: 09:05:09

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017292976379395 
 Hora: 09:05:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071449279785156 
 Hora: 09:05:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010547876358032 
 Hora: 09:05:09

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023839950561523 
 Hora: 09:05:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061709880828857 
 Hora: 09:05:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021894931793213 
 Hora: 09:05:48

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.051368951797485 
 Hora: 09:05:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027790069580078 
 Hora: 09:05:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025098085403442 
 Hora: 09:05:48

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.051336050033569 
 Hora: 09:05:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022727966308594 
 Hora: 09:05:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018085956573486 
 Hora: 09:10:52

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.040959119796753 
 Hora: 09:10:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014240980148315 
 Hora: 09:10:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.042175054550171 
 Hora: 09:10:54

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.042676210403442 
 Hora: 09:10:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013684988021851 
 Hora: 09:10:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012192010879517 
 Hora: 09:11:06

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.026185989379883 
 Hora: 09:11:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011043071746826 
 Hora: 09:11:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011786937713623 
 Hora: 09:11:07

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.026383876800537 
 Hora: 09:11:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091469287872314 
 Hora: 09:11:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01085901260376 
 Hora: 09:11:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077788829803467 
 Hora: 09:11:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079820156097412 
 Hora: 09:11:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012382984161377 
 Hora: 09:11:17

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '14/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.02067494392395 
 Hora: 09:11:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013550996780396 
 Hora: 09:11:58

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.03039813041687 
 Hora: 09:11:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0157790184021 
 Hora: 09:11:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024447202682495 
 Hora: 09:12:01

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.063541173934937 
 Hora: 09:12:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028908014297485 
 Hora: 09:12:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018079042434692 
 Hora: 09:12:04

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.040227890014648 
 Hora: 09:12:04

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.046694040298462 
 Hora: 09:12:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021033048629761 
 Hora: 09:12:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017244100570679 
 Hora: 09:12:40

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021903991699219 
 Hora: 09:12:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016165018081665 
 Hora: 09:12:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011074066162109 
 Hora: 09:12:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089170932769775 
 Hora: 09:12:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006821870803833 
 Hora: 09:12:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010448932647705 
 Hora: 09:12:43

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '14/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.021257877349854 
 Hora: 09:12:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073831081390381 
 Hora: 09:12:44

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023790121078491 
 Hora: 09:12:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011270046234131 
 Hora: 09:12:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01130199432373 
 Hora: 09:12:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074470043182373 
 Hora: 09:12:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075080394744873 
 Hora: 09:12:50

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021342992782593 
 Hora: 09:12:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074169635772705 
 Hora: 09:12:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01140308380127 
 Hora: 09:13:16

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.031301021575928 
 Hora: 09:13:16

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.028979063034058 
 Hora: 09:13:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017581939697266 
 Hora: 09:13:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080788135528564 
 Hora: 09:14:14

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.028589010238647 
 Hora: 09:14:14

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.020864963531494 
 Hora: 09:14:14

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.019259929656982 
 Hora: 09:14:14

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='01/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.023165941238403 
 Hora: 09:14:14

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1908'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.095482110977173 
 Hora: 09:14:14

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.019338130950928 
 Hora: 09:14:14

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.026301860809326 
 Hora: 09:14:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069639682769775 
 Hora: 09:14:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013808012008667 
 Hora: 09:14:15

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.032174825668335 
 Hora: 09:14:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010716915130615 
 Hora: 09:14:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.028352975845337 
 Hora: 09:14:17

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.058243036270142 
 Hora: 09:14:17

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.055263996124268 
 Hora: 09:14:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029819011688232 
 Hora: 09:14:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063149929046631 
 Hora: 09:14:39

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014729976654053 
 Hora: 09:14:39

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020710945129395 
 Hora: 09:14:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078349113464355 
 Hora: 09:14:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011385917663574 
 Hora: 09:17:35

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015676975250244 
 Hora: 09:17:35

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018019914627075 
 Hora: 09:17:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071249008178711 
 Hora: 09:17:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059170722961426 
 Hora: 09:21:08

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016232967376709 
 Hora: 09:21:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01288890838623 
 Hora: 09:21:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066320896148682 
 Hora: 09:30:19

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019567966461182 
 Hora: 09:30:19

SELECT *
FROM "Cat_Periodos"
ORDER BY "Descripcion" DESC 
 Ejecutado en: 0.015059947967529 
 Hora: 09:30:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008836030960083 
 Hora: 09:30:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078120231628418 
 Hora: 09:30:46

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021036148071289 
 Hora: 09:30:46

SELECT *
FROM "Cat_Periodos"
ORDER BY "Descripcion" DESC 
 Ejecutado en: 0.015258073806763 
 Hora: 09:30:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090789794921875 
 Hora: 09:30:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011521816253662 
 Hora: 09:31:25

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.01790189743042 
 Hora: 09:31:25

SELECT *
FROM "Cat_Periodos"
ORDER BY "Descripcion" ASC 
 Ejecutado en: 0.016334056854248 
 Hora: 09:31:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011681079864502 
 Hora: 09:31:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072050094604492 
 Hora: 09:36:51

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018140077590942 
 Hora: 09:36:51

SELECT *
FROM "Cat_Periodos"
ORDER BY "PeriodoID" ASC 
 Ejecutado en: 0.018439054489136 
 Hora: 09:36:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010470867156982 
 Hora: 09:36:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009584903717041 
 Hora: 09:37:07

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015961885452271 
 Hora: 09:37:07

SELECT *
FROM "Cat_Periodos"
ORDER BY "PeriodoID" ASC 
 Ejecutado en: 0.01789116859436 
 Hora: 09:37:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010067939758301 
 Hora: 09:37:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010128021240234 
 Hora: 09:37:08

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018975973129272 
 Hora: 09:37:08

SELECT *
FROM "Cat_Periodos"
ORDER BY "PeriodoID" ASC 
 Ejecutado en: 0.022758007049561 
 Hora: 09:37:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010088920593262 
 Hora: 09:37:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010354995727539 
 Hora: 09:38:29

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015988826751709 
 Hora: 09:38:29

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015987873077393 
 Hora: 09:38:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090088844299316 
 Hora: 09:38:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009315013885498 
 Hora: 09:48:32

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.01863694190979 
 Hora: 09:48:32

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.011687040328979 
 Hora: 09:48:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095648765563965 
 Hora: 09:48:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085461139678955 
 Hora: 09:49:05

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019102811813354 
 Hora: 09:49:05

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020841836929321 
 Hora: 09:49:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074150562286377 
 Hora: 09:49:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083029270172119 
 Hora: 09:51:21

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019927024841309 
 Hora: 09:51:21

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018160820007324 
 Hora: 09:51:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010519027709961 
 Hora: 09:51:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010654211044312 
 Hora: 10:05:06

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012612819671631 
 Hora: 10:05:06

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0044260025024414 
 Hora: 10:05:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011147022247314 
 Hora: 10:05:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075521469116211 
 Hora: 10:05:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008573055267334 
 Hora: 10:05:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092589855194092 
 Hora: 10:05:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091679096221924 
 Hora: 10:05:08

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '14/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.021002054214478 
 Hora: 10:05:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085740089416504 
 Hora: 10:05:11

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016438961029053 
 Hora: 10:05:11

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.01910400390625 
 Hora: 10:05:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011049032211304 
 Hora: 10:05:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011721849441528 
 Hora: 10:05:12

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023632049560547 
 Hora: 10:05:12

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017301082611084 
 Hora: 10:05:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009620189666748 
 Hora: 10:05:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010082006454468 
 Hora: 10:05:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099771022796631 
 Hora: 10:05:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018692016601562 
 Hora: 10:05:18

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023410797119141 
 Hora: 10:05:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010089874267578 
 Hora: 10:05:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018274784088135 
 Hora: 10:05:31

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.025616884231567 
 Hora: 10:05:31

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.017508029937744 
 Hora: 10:05:31

SELECT *
FROM "cat_TipoReporte"
WHERE "Clave" = '3' 
 Ejecutado en: 0.020482063293457 
 Hora: 10:05:31

SELECT *
FROM "cat_TipoReporte"
WHERE "Clave" != 4 
 Ejecutado en: 0.01978588104248 
 Hora: 10:05:31

SELECT *
FROM "cat_Reportes"
WHERE "idTipoReporte" = '3'
AND "Activo" = 1 
 Ejecutado en: 0.021151065826416 
 Hora: 10:05:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011270046234131 
 Hora: 10:05:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094461441040039 
 Hora: 10:05:31

SELECT *
FROM "cat_Reportes"
WHERE "idTipoReporte" = '3'
AND "Activo" = 1 
 Ejecutado en: 0.017586946487427 
 Hora: 10:05:31

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027286052703857 
 Hora: 10:05:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011695861816406 
 Hora: 10:05:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092570781707764 
 Hora: 10:05:33

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.019088983535767 
 Hora: 10:05:33

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014050960540771 
 Hora: 10:05:33

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020457029342651 
 Hora: 10:05:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088989734649658 
 Hora: 10:05:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0055332183837891 
 Hora: 10:06:18

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.020343065261841 
 Hora: 10:06:18

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019515037536621 
 Hora: 10:06:18

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017383813858032 
 Hora: 10:06:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077810287475586 
 Hora: 10:06:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063738822937012 
 Hora: 10:06:20

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.018600940704346 
 Hora: 10:06:20

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.018835067749023 
 Hora: 10:06:20

SELECT *
FROM "cat_TipoReporte"
WHERE "Clave" = '3' 
 Ejecutado en: 0.024852991104126 
 Hora: 10:06:20

SELECT *
FROM "cat_TipoReporte"
WHERE "Clave" != 4 
 Ejecutado en: 0.02252197265625 
 Hora: 10:06:20

SELECT *
FROM "cat_Reportes"
WHERE "idTipoReporte" = '3'
AND "Activo" = 1 
 Ejecutado en: 0.020606994628906 
 Hora: 10:06:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079259872436523 
 Hora: 10:06:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010519981384277 
 Hora: 10:06:20

SELECT *
FROM "cat_Reportes"
WHERE "idTipoReporte" = '3'
AND "Activo" = 1 
 Ejecutado en: 0.020313024520874 
 Hora: 10:06:20

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.019860982894897 
 Hora: 10:06:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071828365325928 
 Hora: 10:06:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095250606536865 
 Hora: 10:06:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070180892944336 
 Hora: 10:06:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011412143707275 
 Hora: 10:06:23

exec p_admarh_get_Escuelas @EscuelaId=0 
 Ejecutado en: 0.020968914031982 
 Hora: 10:06:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097100734710693 
 Hora: 10:06:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078189373016357 
 Hora: 10:06:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086121559143066 
 Hora: 10:06:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013966083526611 
 Hora: 10:06:30

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.021795988082886 
 Hora: 10:06:30

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.022361993789673 
 Hora: 10:06:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010722875595093 
 Hora: 10:06:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083878040313721 
 Hora: 10:06:30

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.028779983520508 
 Hora: 10:06:30

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.022576093673706 
 Hora: 10:06:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011270999908447 
 Hora: 10:06:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086469650268555 
 Hora: 10:06:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091869831085205 
 Hora: 10:06:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010117053985596 
 Hora: 10:06:35

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.024970769882202 
 Hora: 10:06:35

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020972967147827 
 Hora: 10:06:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010793209075928 
 Hora: 10:06:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065250396728516 
 Hora: 10:06:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086941719055176 
 Hora: 10:06:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084140300750732 
 Hora: 10:06:43

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.019042015075684 
 Hora: 10:06:43

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.018501043319702 
 Hora: 10:06:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013049125671387 
 Hora: 10:06:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097548961639404 
 Hora: 10:06:43

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.02056097984314 
 Hora: 10:06:43

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.019675970077515 
 Hora: 10:06:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091440677642822 
 Hora: 10:06:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010854959487915 
 Hora: 10:24:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014080047607422 
 Hora: 10:24:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091619491577148 
 Hora: 10:24:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071170330047607 
 Hora: 10:24:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011108875274658 
 Hora: 10:24:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096628665924072 
 Hora: 10:24:58

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '14/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.027007818222046 
 Hora: 10:24:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073070526123047 
 Hora: 10:24:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072219371795654 
 Hora: 10:24:59

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '14/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.018862962722778 
 Hora: 10:24:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010828018188477 
 Hora: 10:25:02

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.020288944244385 
 Hora: 10:25:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018635034561157 
 Hora: 10:25:02

[BDSECGRAL] 
SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.018915891647339 
 Hora: 10:25:02

[BDSECGRAL] 
SELECT p.IdPersonal,Movimientos.IdMovimiento,p.NumNomina,CONCAT(p.Nombre,' ',p.ApPaterno,' ',p.ApMaterno) as Nombre,hcd.DescripcionNuevaCategoria,hcd.DescripcionNuevaDependencia,FechaInicio,FechaTerminacion, hcd.IdNuevaCategoria,hcd.IdNuevaDependencia,s.*,cc.AreaAdscripcion
FROM "Movimientos"
JOIN "Personal" "p" ON "Movimientos"."IdPersonal" = "p"."IdPersonal"
JOIN "HistorialCatDep" "hcd" ON "Movimientos"."IdMovimiento" = "hcd"."IdMovimiento"
JOIN "Sesiones" "s" ON "Movimientos"."IdSesion" = "s"."IdSesion"
JOIN "Cat_Categorias" "cc" ON "hcd"."IdNuevaCategoria" = "cc"."IdCategoria"
WHERE "Movimientos"."IdSesion" = '3853'
AND "Origen" = 'CN' 
 Ejecutado en: 0.032923936843872 
 Hora: 10:25:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009727954864502 
 Hora: 10:32:55

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020110845565796 
 Hora: 10:32:55

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017097949981689 
 Hora: 10:32:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010748147964478 
 Hora: 10:32:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096361637115479 
 Hora: 10:34:17

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.020076990127563 
 Hora: 10:34:17

SELECT *
FROM "ParametrosdeSistema"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.015315055847168 
 Hora: 10:34:17

SELECT *
FROM "ParametrosMovsRH"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.016197204589844 
 Hora: 10:34:17

SELECT *
FROM "ParamSystemTipoNomimas"
WHERE "Presupuesto" = '0002' 
 Ejecutado en: 0.018032073974609 
 Hora: 10:34:17

SELECT *
FROM "Param_ValoresENomina"
WHERE "Presupuestoid" = '0002' 
 Ejecutado en: 0.017343997955322 
 Hora: 10:34:17

SELECT *
FROM "ParametrosGenerales" 
 Ejecutado en: 0.017083168029785 
 Hora: 10:34:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009080171585083 
 Hora: 10:34:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007174015045166 
 Hora: 10:34:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088660717010498 
 Hora: 10:34:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080552101135254 
 Hora: 10:34:21

exec p_admarh_get_Escuelas @EscuelaId=0 
 Ejecutado en: 0.016968965530396 
 Hora: 10:34:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0056440830230713 
 Hora: 10:34:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068569183349609 
 Hora: 10:34:26

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1908' 
 Ejecutado en: 0.018747806549072 
 Hora: 10:34:26

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.020346879959106 
 Hora: 10:34:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064301490783691 
 Hora: 10:34:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088489055633545 
 Hora: 10:34:26

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1908' 
 Ejecutado en: 0.017853021621704 
 Hora: 10:34:26

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.017587900161743 
 Hora: 10:34:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086038112640381 
 Hora: 10:34:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011129140853882 
 Hora: 10:34:27

exec pa_getEmpleadosTodos  @Fecha = '14/02/2025',
										@PresupuestoId = '0002' 
 Ejecutado en: 0.021810054779053 
 Hora: 10:34:27

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02212381362915 
 Hora: 10:34:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015282869338989 
 Hora: 10:34:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.02137017250061 
 Hora: 10:34:27

exec pa_getEmpleadosTodos  @Fecha = '14/02/2025',
										@PresupuestoId = '0002' 
 Ejecutado en: 0.021839141845703 
 Hora: 10:34:27

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027066946029663 
 Hora: 10:34:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014240980148315 
 Hora: 10:34:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011027812957764 
 Hora: 10:34:38

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.015618085861206 
 Hora: 10:34:38

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.020044088363647 
 Hora: 10:34:38

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016665935516357 
 Hora: 10:34:38

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.016674995422363 
 Hora: 10:34:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0059370994567871 
 Hora: 10:34:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071568489074707 
 Hora: 10:34:38

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.023307085037231 
 Hora: 10:34:38

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.022997856140137 
 Hora: 10:34:38

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019102811813354 
 Hora: 10:34:38

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.012208938598633 
 Hora: 10:34:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011209964752197 
 Hora: 10:34:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012090921401978 
 Hora: 10:34:40

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 1.3140389919281 
 Hora: 10:34:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099480152130127 
 Hora: 10:34:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016901016235352 
 Hora: 10:34:41

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 1.3007040023804 
 Hora: 10:34:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0052289962768555 
 Hora: 10:34:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013936996459961 
 Hora: 10:34:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067808628082275 
 Hora: 10:34:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069270133972168 
 Hora: 10:34:43

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.019234895706177 
 Hora: 10:34:43

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.081246137619019 
 Hora: 10:34:43

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.012325048446655 
 Hora: 10:34:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021595001220703 
 Hora: 10:34:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.004608154296875 
 Hora: 10:34:49

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.023662090301514 
 Hora: 10:34:49

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014494895935059 
 Hora: 10:34:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094740390777588 
 Hora: 10:34:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017719030380249 
 Hora: 10:34:53

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020591974258423 
 Hora: 10:34:53

SELECT conf_CategoriaConceptos.Id,conf_CategoriaConceptos.Id_Concepto,ClaveRecibo,con.Descripcion AS Concepto,DiasBase,MontoBase, conf_CategoriaConceptos.AplicaSB,conf_CategoriaConceptos.Permanente,conf_CategoriaConceptos.VecesAplicar,conf_CategoriaConceptos.AntesDeImp AS Gravado, conf_CategoriaConceptos.Id_TipoNomina,conf_CategoriaConceptos.Id_Categoria,conf_CategoriaConceptos.AplicaComp,conf_CategoriaConceptos.VecesAplicadas, conf_CategoriaConceptos.TieneParteExcenta,conf_CategoriaConceptos.DiasSalMinParteExc,conf_CategoriaConceptos.CodigoAcreedor,conf_CategoriaConceptos.NombreAcreedor
FROM "conf_CategoriaConceptos"
JOIN "cat_Categorias" "c" ON "conf_CategoriaConceptos"."Id_Categoria" = "c"."Id"
JOIN "cat_Conceptos" "con" ON "conf_CategoriaConceptos"."Id_Concepto" = "con"."Id"
WHERE "Id_TipoNomina" = '9'
AND "EsPercepcion" = '1'
AND "Id_Categoria" = '9'
AND "PresupuestoId" = '0002' 
 Ejecutado en: 0.048403024673462 
 Hora: 10:34:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012550115585327 
 Hora: 10:34:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063600540161133 
 Hora: 10:34:53

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023320913314819 
 Hora: 10:34:53

SELECT conf_CategoriaConceptos.Id,conf_CategoriaConceptos.Id_Concepto,ClaveRecibo,con.Descripcion AS Concepto,DiasBase,MontoBase, conf_CategoriaConceptos.AplicaSB,conf_CategoriaConceptos.Permanente,conf_CategoriaConceptos.VecesAplicar,conf_CategoriaConceptos.AntesDeImp AS Gravado, conf_CategoriaConceptos.Id_TipoNomina,conf_CategoriaConceptos.Id_Categoria,conf_CategoriaConceptos.AplicaComp,conf_CategoriaConceptos.VecesAplicadas, conf_CategoriaConceptos.TieneParteExcenta,conf_CategoriaConceptos.DiasSalMinParteExc,conf_CategoriaConceptos.CodigoAcreedor,conf_CategoriaConceptos.NombreAcreedor
FROM "conf_CategoriaConceptos"
JOIN "cat_Categorias" "c" ON "conf_CategoriaConceptos"."Id_Categoria" = "c"."Id"
JOIN "cat_Conceptos" "con" ON "conf_CategoriaConceptos"."Id_Concepto" = "con"."Id"
WHERE "Id_TipoNomina" = '9'
AND "EsPercepcion" = '0'
AND "Id_Categoria" = '9'
AND "PresupuestoId" = '0002' 
 Ejecutado en: 0.023532152175903 
 Hora: 10:34:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060698986053467 
 Hora: 10:34:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010983943939209 
 Hora: 10:34:55

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024221897125244 
 Hora: 10:34:55

SELECT conf_CategoriaConceptos.Id,conf_CategoriaConceptos.Id_Concepto,ClaveRecibo,con.Descripcion AS Concepto,DiasBase,MontoBase, conf_CategoriaConceptos.AplicaSB,conf_CategoriaConceptos.Permanente,conf_CategoriaConceptos.VecesAplicar,conf_CategoriaConceptos.AntesDeImp AS Gravado, conf_CategoriaConceptos.Id_TipoNomina,conf_CategoriaConceptos.Id_Categoria,conf_CategoriaConceptos.AplicaComp,conf_CategoriaConceptos.VecesAplicadas, conf_CategoriaConceptos.TieneParteExcenta,conf_CategoriaConceptos.DiasSalMinParteExc,conf_CategoriaConceptos.CodigoAcreedor,conf_CategoriaConceptos.NombreAcreedor
FROM "conf_CategoriaConceptos"
JOIN "cat_Categorias" "c" ON "conf_CategoriaConceptos"."Id_Categoria" = "c"."Id"
JOIN "cat_Conceptos" "con" ON "conf_CategoriaConceptos"."Id_Concepto" = "con"."Id"
WHERE "Id_TipoNomina" = '3'
AND "EsPercepcion" = '1'
AND "Id_Categoria" = '3'
AND "PresupuestoId" = '0002' 
 Ejecutado en: 0.026189088821411 
 Hora: 10:34:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098671913146973 
 Hora: 10:34:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092728137969971 
 Hora: 10:34:55

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023574113845825 
 Hora: 10:34:55

SELECT conf_CategoriaConceptos.Id,conf_CategoriaConceptos.Id_Concepto,ClaveRecibo,con.Descripcion AS Concepto,DiasBase,MontoBase, conf_CategoriaConceptos.AplicaSB,conf_CategoriaConceptos.Permanente,conf_CategoriaConceptos.VecesAplicar,conf_CategoriaConceptos.AntesDeImp AS Gravado, conf_CategoriaConceptos.Id_TipoNomina,conf_CategoriaConceptos.Id_Categoria,conf_CategoriaConceptos.AplicaComp,conf_CategoriaConceptos.VecesAplicadas, conf_CategoriaConceptos.TieneParteExcenta,conf_CategoriaConceptos.DiasSalMinParteExc,conf_CategoriaConceptos.CodigoAcreedor,conf_CategoriaConceptos.NombreAcreedor
FROM "conf_CategoriaConceptos"
JOIN "cat_Categorias" "c" ON "conf_CategoriaConceptos"."Id_Categoria" = "c"."Id"
JOIN "cat_Conceptos" "con" ON "conf_CategoriaConceptos"."Id_Concepto" = "con"."Id"
WHERE "Id_TipoNomina" = '3'
AND "EsPercepcion" = '0'
AND "Id_Categoria" = '3'
AND "PresupuestoId" = '0002' 
 Ejecutado en: 0.024693012237549 
 Hora: 10:34:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094459056854248 
 Hora: 10:34:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010401964187622 
 Hora: 10:35:02

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.017174005508423 
 Hora: 10:35:02

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.022001981735229 
 Hora: 10:35:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057840347290039 
 Hora: 10:35:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068740844726562 
 Hora: 10:35:02

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.016147136688232 
 Hora: 10:35:02

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.016645908355713 
 Hora: 10:35:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062570571899414 
 Hora: 10:35:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062849521636963 
 Hora: 10:35:04

SELECT *
FROM "cat_TipoNomina"
WHERE "ACTIVO" = 1 
 Ejecutado en: 0.020052909851074 
 Hora: 10:35:04

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.016216039657593 
 Hora: 10:35:04

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.016453981399536 
 Hora: 10:35:04

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "EsPercepcion" = 1
AND "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.025723934173584 
 Hora: 10:35:04

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.020911931991577 
 Hora: 10:35:04

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079641342163086 
 Hora: 10:35:04

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.037703037261963 
 Hora: 10:35:05

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.012866020202637 
 Hora: 10:35:05

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024124145507812 
 Hora: 10:35:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010560989379883 
 Hora: 10:35:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061848163604736 
 Hora: 10:35:10

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.018161058425903 
 Hora: 10:35:10

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017002820968628 
 Hora: 10:35:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010281085968018 
 Hora: 10:35:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091869831085205 
 Hora: 10:38:41

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.018017053604126 
 Hora: 10:38:41

SELECT conf_CategoriaConceptos.Id,conf_CategoriaConceptos.Id_Concepto,ClaveRecibo,con.Descripcion AS Concepto,DiasBase,MontoBase, conf_CategoriaConceptos.AplicaSB,conf_CategoriaConceptos.Permanente,conf_CategoriaConceptos.VecesAplicar,conf_CategoriaConceptos.AntesDeImp AS Gravado, conf_CategoriaConceptos.Id_TipoNomina,conf_CategoriaConceptos.Id_Categoria,conf_CategoriaConceptos.AplicaComp,conf_CategoriaConceptos.VecesAplicadas, conf_CategoriaConceptos.TieneParteExcenta,conf_CategoriaConceptos.DiasSalMinParteExc,conf_CategoriaConceptos.CodigoAcreedor,conf_CategoriaConceptos.NombreAcreedor
FROM "conf_CategoriaConceptos"
JOIN "cat_Categorias" "c" ON "conf_CategoriaConceptos"."Id_Categoria" = "c"."Id"
JOIN "cat_Conceptos" "con" ON "conf_CategoriaConceptos"."Id_Concepto" = "con"."Id"
WHERE "Id_TipoNomina" = '9'
AND "EsPercepcion" = '0'
AND "Id_Categoria" = '9'
AND "PresupuestoId" = '0002' 
 Ejecutado en: 0.023963928222656 
 Hora: 10:38:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098609924316406 
 Hora: 10:38:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072400569915771 
 Hora: 10:38:41

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020735025405884 
 Hora: 10:38:41

SELECT conf_CategoriaConceptos.Id,conf_CategoriaConceptos.Id_Concepto,ClaveRecibo,con.Descripcion AS Concepto,DiasBase,MontoBase, conf_CategoriaConceptos.AplicaSB,conf_CategoriaConceptos.Permanente,conf_CategoriaConceptos.VecesAplicar,conf_CategoriaConceptos.AntesDeImp AS Gravado, conf_CategoriaConceptos.Id_TipoNomina,conf_CategoriaConceptos.Id_Categoria,conf_CategoriaConceptos.AplicaComp,conf_CategoriaConceptos.VecesAplicadas, conf_CategoriaConceptos.TieneParteExcenta,conf_CategoriaConceptos.DiasSalMinParteExc,conf_CategoriaConceptos.CodigoAcreedor,conf_CategoriaConceptos.NombreAcreedor
FROM "conf_CategoriaConceptos"
JOIN "cat_Categorias" "c" ON "conf_CategoriaConceptos"."Id_Categoria" = "c"."Id"
JOIN "cat_Conceptos" "con" ON "conf_CategoriaConceptos"."Id_Concepto" = "con"."Id"
WHERE "Id_TipoNomina" = '9'
AND "EsPercepcion" = '1'
AND "Id_Categoria" = '9'
AND "PresupuestoId" = '0002' 
 Ejecutado en: 0.020365953445435 
 Hora: 10:38:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0050160884857178 
 Hora: 10:38:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010891199111938 
 Hora: 10:57:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068869590759277 
 Hora: 10:57:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0044000148773193 
 Hora: 10:57:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010915994644165 
 Hora: 10:57:33

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '14/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.018563985824585 
 Hora: 10:57:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094661712646484 
 Hora: 10:57:36

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.016539096832275 
 Hora: 10:57:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090739727020264 
 Hora: 10:57:36

[BDSECGRAL] 
SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021670818328857 
 Hora: 10:57:36

[BDSECGRAL] 
SELECT p.IdPersonal,Movimientos.IdMovimiento,p.NumNomina,CONCAT(p.Nombre,' ',p.ApPaterno,' ',p.ApMaterno) as Nombre,hcd.DescripcionNuevaCategoria,hcd.DescripcionNuevaDependencia,FechaInicio,FechaTerminacion, hcd.IdNuevaCategoria,hcd.IdNuevaDependencia,s.*,cc.AreaAdscripcion
FROM "Movimientos"
JOIN "Personal" "p" ON "Movimientos"."IdPersonal" = "p"."IdPersonal"
JOIN "HistorialCatDep" "hcd" ON "Movimientos"."IdMovimiento" = "hcd"."IdMovimiento"
JOIN "Sesiones" "s" ON "Movimientos"."IdSesion" = "s"."IdSesion"
JOIN "Cat_Categorias" "cc" ON "hcd"."IdNuevaCategoria" = "cc"."IdCategoria"
WHERE "Movimientos"."IdSesion" = '3853'
AND "Origen" = 'CN' 
 Ejecutado en: 0.030881881713867 
 Hora: 10:57:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012614011764526 
 Hora: 10:57:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0107581615448 
 Hora: 10:57:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014308929443359 
 Hora: 10:57:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014127969741821 
 Hora: 10:57:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010089874267578 
 Hora: 10:57:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011248826980591 
 Hora: 10:57:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013073921203613 
 Hora: 10:57:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016618013381958 
 Hora: 10:57:47

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '14/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.038760900497437 
 Hora: 10:57:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011210918426514 
 Hora: 10:57:51

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.02990198135376 
 Hora: 10:57:51

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.027945041656494 
 Hora: 10:57:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075230598449707 
 Hora: 10:57:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0036139488220215 
 Hora: 10:57:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01090407371521 
 Hora: 10:57:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088529586791992 
 Hora: 10:57:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094590187072754 
 Hora: 10:57:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0036749839782715 
 Hora: 10:57:56

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.024055957794189 
 Hora: 10:57:56

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.024372100830078 
 Hora: 10:57:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061149597167969 
 Hora: 10:57:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011528968811035 
 Hora: 10:58:01

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.022834062576294 
 Hora: 10:58:01

SELECT conf_CategoriaConceptos.Id,conf_CategoriaConceptos.Id_Concepto,ClaveRecibo,con.Descripcion AS Concepto,DiasBase,MontoBase, conf_CategoriaConceptos.AplicaSB,conf_CategoriaConceptos.Permanente,conf_CategoriaConceptos.VecesAplicar,conf_CategoriaConceptos.AntesDeImp AS Gravado, conf_CategoriaConceptos.Id_TipoNomina,conf_CategoriaConceptos.Id_Categoria,conf_CategoriaConceptos.AplicaComp,conf_CategoriaConceptos.VecesAplicadas, conf_CategoriaConceptos.TieneParteExcenta,conf_CategoriaConceptos.DiasSalMinParteExc,conf_CategoriaConceptos.CodigoAcreedor,conf_CategoriaConceptos.NombreAcreedor
FROM "conf_CategoriaConceptos"
JOIN "cat_Categorias" "c" ON "conf_CategoriaConceptos"."Id_Categoria" = "c"."Id"
JOIN "cat_Conceptos" "con" ON "conf_CategoriaConceptos"."Id_Concepto" = "con"."Id"
WHERE "Id_TipoNomina" = '3'
AND "EsPercepcion" = '1'
AND "Id_Categoria" = '73'
AND "PresupuestoId" = '0002' 
 Ejecutado en: 0.025425910949707 
 Hora: 10:58:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057399272918701 
 Hora: 10:58:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099930763244629 
 Hora: 10:58:01

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025186061859131 
 Hora: 10:58:01

SELECT conf_CategoriaConceptos.Id,conf_CategoriaConceptos.Id_Concepto,ClaveRecibo,con.Descripcion AS Concepto,DiasBase,MontoBase, conf_CategoriaConceptos.AplicaSB,conf_CategoriaConceptos.Permanente,conf_CategoriaConceptos.VecesAplicar,conf_CategoriaConceptos.AntesDeImp AS Gravado, conf_CategoriaConceptos.Id_TipoNomina,conf_CategoriaConceptos.Id_Categoria,conf_CategoriaConceptos.AplicaComp,conf_CategoriaConceptos.VecesAplicadas, conf_CategoriaConceptos.TieneParteExcenta,conf_CategoriaConceptos.DiasSalMinParteExc,conf_CategoriaConceptos.CodigoAcreedor,conf_CategoriaConceptos.NombreAcreedor
FROM "conf_CategoriaConceptos"
JOIN "cat_Categorias" "c" ON "conf_CategoriaConceptos"."Id_Categoria" = "c"."Id"
JOIN "cat_Conceptos" "con" ON "conf_CategoriaConceptos"."Id_Concepto" = "con"."Id"
WHERE "Id_TipoNomina" = '3'
AND "EsPercepcion" = '0'
AND "Id_Categoria" = '73'
AND "PresupuestoId" = '0002' 
 Ejecutado en: 0.019726037979126 
 Hora: 10:58:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010116100311279 
 Hora: 10:58:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099778175354004 
 Hora: 11:00:41

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02234411239624 
 Hora: 11:00:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010947942733765 
 Hora: 11:00:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087430477142334 
 Hora: 11:00:42

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.018465042114258 
 Hora: 11:00:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007976770401001 
 Hora: 11:00:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091850757598877 
 Hora: 11:07:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098350048065186 
 Hora: 11:07:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010421991348267 
 Hora: 11:07:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070040225982666 
 Hora: 11:07:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086028575897217 
 Hora: 11:07:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090069770812988 
 Hora: 11:07:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008336067199707 
 Hora: 11:07:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067169666290283 
 Hora: 11:07:38

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '14/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.024023056030273 
 Hora: 11:07:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029378890991211 
 Hora: 11:07:41

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.020278930664062 
 Hora: 11:07:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010272979736328 
 Hora: 11:07:41

[BDSECGRAL] 
SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.03333592414856 
 Hora: 11:07:41

[BDSECGRAL] 
SELECT p.IdPersonal,Movimientos.IdMovimiento,p.NumNomina,CONCAT(p.Nombre,' ',p.ApPaterno,' ',p.ApMaterno) as Nombre,hcd.DescripcionNuevaCategoria,hcd.DescripcionNuevaDependencia,FechaInicio,FechaTerminacion, hcd.IdNuevaCategoria,hcd.IdNuevaDependencia,s.*,cc.AreaAdscripcion
FROM "Movimientos"
JOIN "Personal" "p" ON "Movimientos"."IdPersonal" = "p"."IdPersonal"
JOIN "HistorialCatDep" "hcd" ON "Movimientos"."IdMovimiento" = "hcd"."IdMovimiento"
JOIN "Sesiones" "s" ON "Movimientos"."IdSesion" = "s"."IdSesion"
JOIN "Cat_Categorias" "cc" ON "hcd"."IdNuevaCategoria" = "cc"."IdCategoria"
WHERE "Movimientos"."IdSesion" = '3853'
AND "Origen" = 'CN' 
 Ejecutado en: 0.040210008621216 
 Hora: 11:07:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063629150390625 
 Hora: 11:08:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089900493621826 
 Hora: 11:08:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060250759124756 
 Hora: 11:08:26

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.01499080657959 
 Hora: 11:08:26

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090351104736328 
 Hora: 11:08:26

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070388317108154 
 Hora: 11:08:33

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.012353897094727 
 Hora: 11:08:33

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.013447999954224 
 Hora: 11:08:33

SELECT *
FROM "cat_TipoReporte"
WHERE "Clave" = '3' 
 Ejecutado en: 0.019685983657837 
 Hora: 11:08:33

SELECT *
FROM "cat_TipoReporte"
WHERE "Clave" != 4 
 Ejecutado en: 0.017770051956177 
 Hora: 11:08:33

SELECT *
FROM "cat_Reportes"
WHERE "idTipoReporte" = '3'
AND "Activo" = 1 
 Ejecutado en: 0.016953945159912 
 Hora: 11:08:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084908008575439 
 Hora: 11:08:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007918119430542 
 Hora: 11:08:33

SELECT *
FROM "cat_Reportes"
WHERE "idTipoReporte" = '3'
AND "Activo" = 1 
 Ejecutado en: 0.017954111099243 
 Hora: 11:08:33

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.014831066131592 
 Hora: 11:08:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089349746704102 
 Hora: 11:08:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081758499145508 
 Hora: 11:08:35

SELECT "cpr".*
FROM "cat_ParametrosReporte" "cpr"
JOIN "conf_ReporteParametro" "crp" ON "cpr"."Clave" = "crp"."claveParametro"
WHERE "crp"."idReporte" = '1' 
 Ejecutado en: 0.017765045166016 
 Hora: 11:08:35

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.013644933700562 
 Hora: 11:08:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085160732269287 
 Hora: 11:08:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010154008865356 
 Hora: 11:08:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082449913024902 
 Hora: 11:08:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094060897827148 
 Hora: 11:08:43

exec p_admarh_get_Escuelas @EscuelaId=0 
 Ejecutado en: 0.016320943832397 
 Hora: 11:08:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009119987487793 
 Hora: 11:08:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065238475799561 
 Hora: 11:08:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086698532104492 
 Hora: 11:08:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011689186096191 
 Hora: 11:08:47

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.027814865112305 
 Hora: 11:08:47

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.016600131988525 
 Hora: 11:08:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092599391937256 
 Hora: 11:08:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081019401550293 
 Hora: 11:08:47

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.011820793151855 
 Hora: 11:08:47

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.01641321182251 
 Hora: 11:08:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010439872741699 
 Hora: 11:08:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0102379322052 
 Hora: 11:08:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074348449707031 
 Hora: 11:08:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009835958480835 
 Hora: 11:08:54

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.017535209655762 
 Hora: 11:08:54

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.019493103027344 
 Hora: 11:08:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094940662384033 
 Hora: 11:08:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090210437774658 
 Hora: 11:08:54

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.015908002853394 
 Hora: 11:08:54

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.018822193145752 
 Hora: 11:08:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0054121017456055 
 Hora: 11:08:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016474962234497 
 Hora: 11:08:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011811017990112 
 Hora: 11:08:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0061938762664795 
 Hora: 11:08:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062999725341797 
 Hora: 11:08:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093319416046143 
 Hora: 11:08:55

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.018640995025635 
 Hora: 11:08:55

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.018162965774536 
 Hora: 11:08:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067751407623291 
 Hora: 11:08:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012117862701416 
 Hora: 11:08:56

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.015611171722412 
 Hora: 11:08:56

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.017730951309204 
 Hora: 11:08:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097761154174805 
 Hora: 11:08:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010398864746094 
 Hora: 11:08:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086750984191895 
 Hora: 11:08:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011367082595825 
 Hora: 11:08:56

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.017462015151978 
 Hora: 11:08:56

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.019318103790283 
 Hora: 11:08:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010122060775757 
 Hora: 11:08:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064949989318848 
 Hora: 11:08:56

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.01857590675354 
 Hora: 11:08:56

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.016251087188721 
 Hora: 11:08:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010771036148071 
 Hora: 11:08:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086991786956787 
 Hora: 11:08:56

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.017622947692871 
 Hora: 11:08:56

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '1' 
 Ejecutado en: 0.018916130065918 
 Hora: 11:08:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094201564788818 
 Hora: 11:08:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088820457458496 
 Hora: 11:08:56

SELECT *
FROM "cat_ISR"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.018699884414673 
 Hora: 11:08:56

SELECT *
FROM "cat_Subsidio"
WHERE "TipoPeriodo" = '2' 
 Ejecutado en: 0.019151926040649 
 Hora: 11:08:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079269409179688 
 Hora: 11:08:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010573863983154 
 Hora: 11:08:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093841552734375 
 Hora: 11:08:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010392189025879 
 Hora: 11:08:57

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0002
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.020325183868408 
 Hora: 11:08:57

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025170803070068 
 Hora: 11:08:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016425132751465 
 Hora: 11:08:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089709758758545 
 Hora: 11:21:35

SELECT *
FROM "cat_Conceptos"
WHERE "Id" = '45' 
 Ejecutado en: 0.018018007278442 
 Hora: 11:21:35

SELECT *
FROM "Cat_TipoConcepto" 
 Ejecutado en: 0.014777183532715 
 Hora: 11:21:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010178804397583 
 Hora: 11:21:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083799362182617 
 Hora: 11:21:35

SELECT *
FROM "cat_Conceptos"
WHERE "Id" = '45' 
 Ejecutado en: 0.015610933303833 
 Hora: 11:21:35

SELECT *
FROM "Cat_TipoConcepto" 
 Ejecutado en: 0.019392013549805 
 Hora: 11:21:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011549949645996 
 Hora: 11:21:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089249610900879 
 Hora: 12:28:47

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.025974988937378 
 Hora: 12:28:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094358921051025 
 Hora: 12:28:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097599029541016 
 Hora: 12:28:47

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020180940628052 
 Hora: 12:28:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010029077529907 
 Hora: 12:28:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01010799407959 
 Hora: 12:29:13

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023922920227051 
 Hora: 12:29:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065100193023682 
 Hora: 12:29:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.018323183059692 
 Hora: 12:29:15

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.052953004837036 
 Hora: 12:29:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012048959732056 
 Hora: 12:29:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010867118835449 
 Hora: 12:29:56

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018963813781738 
 Hora: 12:29:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012417078018188 
 Hora: 12:29:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099959373474121 
 Hora: 12:29:57

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021914005279541 
 Hora: 12:29:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088200569152832 
 Hora: 12:29:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010838985443115 
 Hora: 12:30:59

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021365880966187 
 Hora: 12:30:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013110160827637 
 Hora: 12:30:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010031938552856 
 Hora: 12:31:00

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025889873504639 
 Hora: 12:31:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013242959976196 
 Hora: 12:31:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091469287872314 
 Hora: 12:34:19

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.017593860626221 
 Hora: 12:34:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077798366546631 
 Hora: 12:34:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096280574798584 
 Hora: 12:34:19

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1908' 
 Ejecutado en: 0.016914129257202 
 Hora: 12:34:19

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011641025543213 
 Hora: 12:34:19

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011704921722412 
 Hora: 12:34:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087101459503174 
 Hora: 12:34:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082061290740967 
 Hora: 12:34:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0049729347229004 
 Hora: 12:34:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086958408355713 
 Hora: 12:34:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072879791259766 
 Hora: 12:34:25

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '14/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.02022385597229 
 Hora: 12:34:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010133981704712 
 Hora: 12:34:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010467052459717 
 Hora: 12:34:25

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '14/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.033864974975586 
 Hora: 12:34:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010284185409546 
 Hora: 12:34:27

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.023066997528076 
 Hora: 12:34:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010895013809204 
 Hora: 12:34:27

[BDSECGRAL] 
SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.019618988037109 
 Hora: 12:34:27

[BDSECGRAL] 
SELECT p.IdPersonal,Movimientos.IdMovimiento,p.NumNomina,CONCAT(p.Nombre,' ',p.ApPaterno,' ',p.ApMaterno) as Nombre,hcd.DescripcionNuevaCategoria,hcd.DescripcionNuevaDependencia,FechaInicio,FechaTerminacion, hcd.IdNuevaCategoria,hcd.IdNuevaDependencia,s.*,cc.AreaAdscripcion
FROM "Movimientos"
JOIN "Personal" "p" ON "Movimientos"."IdPersonal" = "p"."IdPersonal"
JOIN "HistorialCatDep" "hcd" ON "Movimientos"."IdMovimiento" = "hcd"."IdMovimiento"
JOIN "Sesiones" "s" ON "Movimientos"."IdSesion" = "s"."IdSesion"
JOIN "Cat_Categorias" "cc" ON "hcd"."IdNuevaCategoria" = "cc"."IdCategoria"
WHERE "Movimientos"."IdSesion" = '3853'
AND "Origen" = 'CN' 
 Ejecutado en: 0.034893989562988 
 Hora: 12:34:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096089839935303 
 Hora: 12:34:48

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021592855453491 
 Hora: 12:34:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.004688024520874 
 Hora: 12:34:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0042369365692139 
 Hora: 12:34:50

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.035118103027344 
 Hora: 12:34:50

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085608959197998 
 Hora: 12:34:50

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021209001541138 
 Hora: 12:35:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019845962524414 
 Hora: 12:35:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012219905853271 
 Hora: 12:35:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027330875396729 
 Hora: 12:35:02

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '14/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.028953075408936 
 Hora: 12:35:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011674165725708 
 Hora: 12:35:11

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.021967887878418 
 Hora: 12:35:11

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081169605255127 
 Hora: 12:35:11

[BDSECGRAL] 
SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025878190994263 
 Hora: 12:35:11

[BDSECGRAL] 
SELECT p.IdPersonal,Movimientos.IdMovimiento,p.NumNomina,CONCAT(p.Nombre,' ',p.ApPaterno,' ',p.ApMaterno) as Nombre,hcd.DescripcionNuevaCategoria,hcd.DescripcionNuevaDependencia,FechaInicio,FechaTerminacion, hcd.IdNuevaCategoria,hcd.IdNuevaDependencia,s.*,cc.AreaAdscripcion
FROM "Movimientos"
JOIN "Personal" "p" ON "Movimientos"."IdPersonal" = "p"."IdPersonal"
JOIN "HistorialCatDep" "hcd" ON "Movimientos"."IdMovimiento" = "hcd"."IdMovimiento"
JOIN "Sesiones" "s" ON "Movimientos"."IdSesion" = "s"."IdSesion"
JOIN "Cat_Categorias" "cc" ON "hcd"."IdNuevaCategoria" = "cc"."IdCategoria"
WHERE "Movimientos"."IdSesion" = '3853'
AND "Origen" = 'CN' 
 Ejecutado en: 0.057470083236694 
 Hora: 12:35:11

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011245965957642 
 Hora: 12:36:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010540008544922 
 Hora: 12:36:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014048099517822 
 Hora: 12:36:09

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094740390777588 
 Hora: 12:36:09

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008275032043457 
 Hora: 12:36:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060889720916748 
 Hora: 12:36:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012871026992798 
 Hora: 12:36:47

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023737907409668 
 Hora: 12:36:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072751045227051 
 Hora: 12:36:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075569152832031 
 Hora: 12:36:49

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.047924995422363 
 Hora: 12:36:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.023899078369141 
 Hora: 12:36:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.029682874679565 
 Hora: 12:36:53

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081272125244141 
 Hora: 12:36:53

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078690052032471 
 Hora: 12:36:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020360946655273 
 Hora: 12:36:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011332988739014 
 Hora: 12:36:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021118879318237 
 Hora: 12:36:54

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '14/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.020143032073975 
 Hora: 12:36:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014273881912231 
 Hora: 12:36:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011199951171875 
 Hora: 12:36:55

[BDSECGRAL] 
SELECT "IdSesion", FORMAT(FechaHoraSesion, 'dd/MM/yyyy') as Fecha, CONCAT(dbo.fn_OrdinalEnLetras(Numero, 1), ' - ', FORMAT(FechaHoraSesion, 'dd/MM/yyyy'), ' - ', TipoSesion) as Sesion, "FechaHoraSesion"
FROM "Sesiones"
WHERE "IdResponsable" = '0002'
AND "FechaHoraSesion" >= '01/01/2025'
AND "FechaHoraSesion" <= '14/02/2025'
ORDER BY "IdSesion" DESC 
 Ejecutado en: 0.02721095085144 
 Hora: 12:36:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070178508758545 
 Hora: 12:37:03

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.038666009902954 
 Hora: 12:37:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010211944580078 
 Hora: 12:37:03

[BDSECGRAL] 
SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.019388914108276 
 Hora: 12:37:03

[BDSECGRAL] 
SELECT p.IdPersonal,Movimientos.IdMovimiento,p.NumNomina,CONCAT(p.Nombre,' ',p.ApPaterno,' ',p.ApMaterno) as Nombre,hcd.DescripcionNuevaCategoria,hcd.DescripcionNuevaDependencia,FechaInicio,FechaTerminacion, hcd.IdNuevaCategoria,hcd.IdNuevaDependencia,s.*,cc.AreaAdscripcion
FROM "Movimientos"
JOIN "Personal" "p" ON "Movimientos"."IdPersonal" = "p"."IdPersonal"
JOIN "HistorialCatDep" "hcd" ON "Movimientos"."IdMovimiento" = "hcd"."IdMovimiento"
JOIN "Sesiones" "s" ON "Movimientos"."IdSesion" = "s"."IdSesion"
JOIN "Cat_Categorias" "cc" ON "hcd"."IdNuevaCategoria" = "cc"."IdCategoria"
WHERE "Movimientos"."IdSesion" = '3853'
AND "Origen" = 'CN' 
 Ejecutado en: 0.031471014022827 
 Hora: 12:37:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079581737518311 
 Hora: 12:37:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011969089508057 
 Hora: 12:37:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021551847457886 
 Hora: 12:46:37

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.099653005599976 
 Hora: 12:46:37

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.039707183837891 
 Hora: 12:46:37

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.040171146392822 
 Hora: 12:46:38

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.14275598526001 
 Hora: 12:46:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.088411092758179 
 Hora: 12:46:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.054638147354126 
 Hora: 14:02:59

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.046040058135986 
 Hora: 14:02:59

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.030411958694458 
 Hora: 14:02:59

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025242805480957 
 Hora: 14:03:00

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.027557134628296 
 Hora: 14:03:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093381404876709 
 Hora: 14:03:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.042426109313965 
 Hora: 14:03:44

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.015805959701538 
 Hora: 14:03:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.034262180328369 
 Hora: 14:03:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0065701007843018 
 Hora: 14:03:46

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.026339054107666 
 Hora: 14:03:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093801021575928 
 Hora: 14:03:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01007604598999 
 Hora: 14:04:34

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.037252902984619 
 Hora: 14:04:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094699859619141 
 Hora: 14:04:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0051898956298828 
 Hora: 14:04:36

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.024991035461426 
 Hora: 14:04:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009321928024292 
 Hora: 14:04:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009397029876709 
 Hora: 14:08:01

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018718004226685 
 Hora: 14:08:01

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010740041732788 
 Hora: 14:08:01

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011698961257935 
 Hora: 14:08:02

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.015559911727905 
 Hora: 14:08:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088191032409668 
 Hora: 14:08:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081961154937744 
 Hora: 14:17:55

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.064336061477661 
 Hora: 14:17:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012108087539673 
 Hora: 14:17:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.062634944915771 
 Hora: 14:17:57

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023993015289307 
 Hora: 14:17:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.024966955184937 
 Hora: 14:17:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016171932220459 
 Hora: 14:20:21

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019683122634888 
 Hora: 14:20:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011699914932251 
 Hora: 14:20:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011135816574097 
 Hora: 14:20:22

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.016436815261841 
 Hora: 14:20:22

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085101127624512 
 Hora: 14:20:22

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011077880859375 
 Hora: 14:20:48

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.01695704460144 
 Hora: 14:20:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010381937026978 
 Hora: 14:20:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087809562683105 
 Hora: 14:20:49

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.019160985946655 
 Hora: 14:20:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098140239715576 
 Hora: 14:20:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01064395904541 
 Hora: 14:21:32

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019421815872192 
 Hora: 14:21:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079479217529297 
 Hora: 14:21:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097789764404297 
 Hora: 14:21:33

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.016908884048462 
 Hora: 14:21:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091161727905273 
 Hora: 14:21:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092029571533203 
 Hora: 14:24:48

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019331932067871 
 Hora: 14:24:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090699195861816 
 Hora: 14:24:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0063290596008301 
 Hora: 14:24:49

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025215864181519 
 Hora: 14:24:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0064539909362793 
 Hora: 14:24:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021113157272339 
 Hora: 14:25:07

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021796941757202 
 Hora: 14:25:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013934135437012 
 Hora: 14:25:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.005180835723877 
 Hora: 14:25:08

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021557092666626 
 Hora: 14:25:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076761245727539 
 Hora: 14:25:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0054500102996826 
 Hora: 14:25:13

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019620895385742 
 Hora: 14:25:13

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014662981033325 
 Hora: 14:25:13

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026114940643311 
 Hora: 14:25:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068531036376953 
 Hora: 14:25:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058639049530029 
 Hora: 14:28:51

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018224954605103 
 Hora: 14:28:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073108673095703 
 Hora: 14:28:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00689697265625 
 Hora: 14:28:52

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.019976139068604 
 Hora: 14:28:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0102698802948 
 Hora: 14:28:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093469619750977 
 Hora: 14:34:52

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018050909042358 
 Hora: 14:34:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076909065246582 
 Hora: 14:34:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093090534210205 
 Hora: 14:34:54

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020711183547974 
 Hora: 14:34:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0057358741760254 
 Hora: 14:34:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093989372253418 
 Hora: 14:35:10

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02162504196167 
 Hora: 14:35:10

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095069408416748 
 Hora: 14:35:10

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009613037109375 
 Hora: 14:35:12

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.025781154632568 
 Hora: 14:35:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0067999362945557 
 Hora: 14:35:12

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011847972869873 
 Hora: 14:35:17

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.014264106750488 
 Hora: 14:35:17

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019318103790283 
 Hora: 14:35:17

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.03938102722168 
 Hora: 14:35:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012727022171021 
 Hora: 14:35:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0054609775543213 
 Hora: 14:58:45

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017051935195923 
 Hora: 14:58:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0056300163269043 
 Hora: 14:58:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078918933868408 
 Hora: 14:58:47

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.02152681350708 
 Hora: 14:58:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075080394744873 
 Hora: 14:58:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015000104904175 
 Hora: 14:58:54

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.027059078216553 
 Hora: 14:58:54

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.024154186248779 
 Hora: 14:58:54

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.015492916107178 
 Hora: 14:58:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010949850082397 
 Hora: 14:58:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010004043579102 
 Hora: 14:58:57

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020344972610474 
 Hora: 14:58:57

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021542072296143 
 Hora: 14:58:57

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.018902063369751 
 Hora: 14:58:57

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087640285491943 
 Hora: 14:58:57

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012894153594971 
 Hora: 15:00:46

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02198600769043 
 Hora: 15:00:46

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01072883605957 
 Hora: 15:00:46

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.021074056625366 
 Hora: 15:00:47

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.030719995498657 
 Hora: 15:00:47

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025903940200806 
 Hora: 15:00:47

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013511896133423 
 Hora: 15:00:52

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.022109031677246 
 Hora: 15:00:52

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.02661395072937 
 Hora: 15:00:52

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.075891017913818 
 Hora: 15:00:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012541055679321 
 Hora: 15:00:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.016325950622559 
 Hora: 15:01:29

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019721031188965 
 Hora: 15:01:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010464906692505 
 Hora: 15:01:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01983904838562 
 Hora: 15:01:30

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.036777019500732 
 Hora: 15:01:30

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.022205114364624 
 Hora: 15:01:30

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.014213085174561 
 Hora: 15:01:35

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.01905083656311 
 Hora: 15:01:35

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.041968107223511 
 Hora: 15:01:35

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.031116962432861 
 Hora: 15:01:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013798952102661 
 Hora: 15:01:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097579956054688 
 Hora: 15:02:21

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021662950515747 
 Hora: 15:02:21

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080277919769287 
 Hora: 15:02:21

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0098981857299805 
 Hora: 15:02:23

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022293090820312 
 Hora: 15:02:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072388648986816 
 Hora: 15:02:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011435985565186 
 Hora: 15:02:29

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.030181884765625 
 Hora: 15:02:29

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.011308908462524 
 Hora: 15:02:29

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.017918109893799 
 Hora: 15:02:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013689994812012 
 Hora: 15:02:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.019117832183838 
 Hora: 15:02:32

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.021639108657837 
 Hora: 15:02:32

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014657020568848 
 Hora: 15:02:32

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026958227157593 
 Hora: 15:02:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078890323638916 
 Hora: 15:02:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092558860778809 
 Hora: 15:04:49

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023357152938843 
 Hora: 15:04:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074489116668701 
 Hora: 15:04:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0037930011749268 
 Hora: 15:04:51

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.027578830718994 
 Hora: 15:04:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079421997070312 
 Hora: 15:04:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0049159526824951 
 Hora: 15:04:52

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.0258469581604 
 Hora: 15:04:52

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008296012878418 
 Hora: 15:04:52

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068650245666504 
 Hora: 15:04:58

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020136117935181 
 Hora: 15:04:58

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.024846076965332 
 Hora: 15:04:58

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.017482042312622 
 Hora: 15:04:58

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010191202163696 
 Hora: 15:04:58

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095431804656982 
 Hora: 15:10:32

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02545690536499 
 Hora: 15:10:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090970993041992 
 Hora: 15:10:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011563777923584 
 Hora: 15:10:34

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023983001708984 
 Hora: 15:10:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013119220733643 
 Hora: 15:10:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079760551452637 
 Hora: 15:10:56

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.015227079391479 
 Hora: 15:10:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097460746765137 
 Hora: 15:10:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092320442199707 
 Hora: 15:10:56

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021293163299561 
 Hora: 15:10:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092778205871582 
 Hora: 15:10:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010528087615967 
 Hora: 15:11:00

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.030229091644287 
 Hora: 15:11:00

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016234159469604 
 Hora: 15:11:00

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.025848150253296 
 Hora: 15:11:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.020739078521729 
 Hora: 15:11:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092129707336426 
 Hora: 15:11:27

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.023807048797607 
 Hora: 15:11:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081050395965576 
 Hora: 15:11:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079610347747803 
 Hora: 15:11:27

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022099018096924 
 Hora: 15:11:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075380802154541 
 Hora: 15:11:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0096111297607422 
 Hora: 15:11:31

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018666982650757 
 Hora: 15:11:31

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.020427942276001 
 Hora: 15:11:31

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.016577959060669 
 Hora: 15:11:31

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085780620574951 
 Hora: 15:11:31

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092020034790039 
 Hora: 15:17:44

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019623041152954 
 Hora: 15:17:44

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073091983795166 
 Hora: 15:17:44

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011377811431885 
 Hora: 15:17:45

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.014746189117432 
 Hora: 15:17:45

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010828971862793 
 Hora: 15:17:45

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.006234884262085 
 Hora: 15:17:48

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.01973295211792 
 Hora: 15:17:48

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.021836996078491 
 Hora: 15:17:48

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026439905166626 
 Hora: 15:17:48

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009584903717041 
 Hora: 15:17:48

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0080840587615967 
 Hora: 15:18:02

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.018647909164429 
 Hora: 15:18:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0071849822998047 
 Hora: 15:18:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0051939487457275 
 Hora: 15:18:02

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.019884824752808 
 Hora: 15:18:02

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062370300292969 
 Hora: 15:18:02

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010133981704712 
 Hora: 15:18:03

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021420001983643 
 Hora: 15:18:03

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0070319175720215 
 Hora: 15:18:03

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0056719779968262 
 Hora: 15:18:07

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.022423982620239 
 Hora: 15:18:07

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.019615888595581 
 Hora: 15:18:07

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.021214008331299 
 Hora: 15:18:07

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='01/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.022554159164429 
 Hora: 15:18:07

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1908'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.091806888580322 
 Hora: 15:18:07

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.011729955673218 
 Hora: 15:18:07

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.018250942230225 
 Hora: 15:18:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094671249389648 
 Hora: 15:18:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092358589172363 
 Hora: 15:18:08

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.021234035491943 
 Hora: 15:18:08

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012202024459839 
 Hora: 15:18:08

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068559646606445 
 Hora: 15:18:13

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.023323059082031 
 Hora: 15:18:13

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.017414093017578 
 Hora: 15:18:13

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.019445896148682 
 Hora: 15:18:13

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091068744659424 
 Hora: 15:18:13

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073518753051758 
 Hora: 15:24:20

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017011165618896 
 Hora: 15:24:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010524034500122 
 Hora: 15:24:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0084559917449951 
 Hora: 15:24:20

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.016316890716553 
 Hora: 15:24:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092408657073975 
 Hora: 15:24:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082027912139893 
 Hora: 15:24:23

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019399881362915 
 Hora: 15:24:23

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.016209840774536 
 Hora: 15:24:23

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.017755031585693 
 Hora: 15:24:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092480182647705 
 Hora: 15:24:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089261531829834 
 Hora: 15:24:24

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.0191650390625 
 Hora: 15:24:24

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.022873163223267 
 Hora: 15:24:24

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020588159561157 
 Hora: 15:24:24

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078749656677246 
 Hora: 15:24:24

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083880424499512 
 Hora: 15:39:32

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.017966985702515 
 Hora: 15:39:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010131120681763 
 Hora: 15:39:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082800388336182 
 Hora: 15:39:32

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020604133605957 
 Hora: 15:39:32

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078248977661133 
 Hora: 15:39:32

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069558620452881 
 Hora: 16:18:16

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.02684497833252 
 Hora: 16:18:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011358976364136 
 Hora: 16:18:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015110015869141 
 Hora: 16:18:18

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022401094436646 
 Hora: 16:18:18

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0047671794891357 
 Hora: 16:18:18

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092849731445312 
 Hora: 16:21:25

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020340204238892 
 Hora: 16:21:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083260536193848 
 Hora: 16:21:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0099501609802246 
 Hora: 16:21:27

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.022965908050537 
 Hora: 16:21:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010984897613525 
 Hora: 16:21:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0094220638275146 
 Hora: 16:25:34

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.024608135223389 
 Hora: 16:25:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010170936584473 
 Hora: 16:25:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.012722015380859 
 Hora: 16:25:35

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.020835876464844 
 Hora: 16:25:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.013762950897217 
 Hora: 16:25:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010011911392212 
 Hora: 16:25:40

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020514011383057 
 Hora: 16:25:40

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.018123865127563 
 Hora: 16:25:40

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.027716159820557 
 Hora: 16:25:40

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.005424976348877 
 Hora: 16:25:40

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088708400726318 
 Hora: 16:34:23

SELECT "PeridoPagoID", "RegsIniciales", "ConceptAntesImpu", "Impuestos", "ConceptDespImpu", "ISSTEY", "FechaIni", "FechaFin", "NominaCerrada"
FROM "vw_ControlProcesosGenNomina"
WHERE "PeridoPagoID" = '1908' 
 Ejecutado en: 0.020933866500854 
 Hora: 16:34:23

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.021556854248047 
 Hora: 16:34:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0097770690917969 
 Hora: 16:34:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073850154876709 
 Hora: 16:34:23

exec pa_getEmpleadosTodos  @Fecha = '14/02/2025',
										@PresupuestoId = '0002' 
 Ejecutado en: 0.024806022644043 
 Hora: 16:34:23

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.026514053344727 
 Hora: 16:34:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093169212341309 
 Hora: 16:34:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087409019470215 
 Hora: 16:34:27

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082311630249023 
 Hora: 16:34:27

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0076808929443359 
 Hora: 16:34:33

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.016216993331909 
 Hora: 16:34:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0072801113128662 
 Hora: 16:34:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086789131164551 
 Hora: 16:34:34

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1908' 
 Ejecutado en: 0.01988410949707 
 Hora: 16:34:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088770389556885 
 Hora: 16:34:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077590942382812 
 Hora: 16:36:05

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020254135131836 
 Hora: 16:36:05

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.017867803573608 
 Hora: 16:36:05

SELECT *
FROM "his_Nomina"
WHERE "NominaCerrada" = 0
AND "PresupuestoId" = '0002'
ORDER BY "FechaIni" DESC 
 Ejecutado en: 0.019365072250366 
 Hora: 16:36:05

exec p_admarh_NominaAbiertaXFechaIni @FechaIni='01/02/2025',@PresupuestoId='0002' 
 Ejecutado en: 0.014304876327515 
 Hora: 16:36:05

SELECT *
FROM "his_Asistencia"
WHERE "PeriodoPagoID" = '1908'
ORDER BY "Fecha" DESC
 OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY 
 Ejecutado en: 0.18002104759216 
 Hora: 16:36:05

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.020087003707886 
 Hora: 16:36:05

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'WS_ARCON' 
 Ejecutado en: 0.033061981201172 
 Hora: 16:36:05

SELECT *
FROM "ParamSystemNomina"
WHERE "PresupuestoId" = '0002' 
 Ejecutado en: 0.022300958633423 
 Hora: 16:36:05

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.00826096534729 
 Hora: 16:36:05

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011664867401123 
 Hora: 16:36:07

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.019413948059082 
 Hora: 16:36:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010405778884888 
 Hora: 16:36:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010005950927734 
 Hora: 16:36:25

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.013589859008789 
 Hora: 16:36:25

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019221067428589 
 Hora: 16:36:25

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021342039108276 
 Hora: 16:36:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0086641311645508 
 Hora: 16:36:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0075781345367432 
 Hora: 16:36:33

exec p_admarh_getHistorialNomina 
 Ejecutado en: 0.018414974212646 
 Hora: 16:36:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0060939788818359 
 Hora: 16:36:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008558988571167 
 Hora: 16:36:33

SELECT *
FROM "vw_nominas"
WHERE "PeriodoID" = '1908' 
 Ejecutado en: 0.016390085220337 
 Hora: 16:36:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010572910308838 
 Hora: 16:36:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.007559061050415 
 Hora: 16:36:36

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.017095804214478 
 Hora: 16:36:36

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.023535966873169 
 Hora: 16:36:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017858982086182 
 Hora: 16:36:36

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020741939544678 
 Hora: 16:36:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0074150562286377 
 Hora: 16:36:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091450214385986 
 Hora: 16:36:36

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.013707160949707 
 Hora: 16:36:36

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.026959896087646 
 Hora: 16:36:36

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019902944564819 
 Hora: 16:36:36

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.015045881271362 
 Hora: 16:36:36

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0029170513153076 
 Hora: 16:36:36

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0087049007415771 
 Hora: 16:36:39

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 2.1708190441132 
 Hora: 16:36:39

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093348026275635 
 Hora: 16:36:39

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010197877883911 
 Hora: 16:36:41

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 2.270143032074 
 Hora: 16:36:41

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011900901794434 
 Hora: 16:36:41

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062267780303955 
 Hora: 16:37:42

exec pa_GeneraTXTparaSAT @Periodoid=1908,@TipoNomina='3',@NumNomina=0 
 Ejecutado en: 176.86781978607 
 Hora: 16:37:42

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.015349864959717 
 Hora: 16:37:42

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069742202758789 
 Hora: 16:37:42

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010515928268433 
 Hora: 16:37:43

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.014481067657471 
 Hora: 16:37:43

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0069000720977783 
 Hora: 16:37:43

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010565042495728 
 Hora: 16:39:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085539817810059 
 Hora: 16:39:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0055928230285645 
 Hora: 16:39:34

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024554967880249 
 Hora: 16:39:34

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.019110918045044 
 Hora: 16:39:34

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.019857168197632 
 Hora: 16:39:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081589221954346 
 Hora: 16:39:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0077040195465088 
 Hora: 16:39:35

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024451017379761 
 Hora: 16:39:35

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.022023916244507 
 Hora: 16:39:35

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.019818067550659 
 Hora: 16:39:35

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0056660175323486 
 Hora: 16:39:35

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011000871658325 
 Hora: 16:41:16

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.016386985778809 
 Hora: 16:41:16

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.005878210067749 
 Hora: 16:41:16

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.025068998336792 
 Hora: 16:41:17

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.031291961669922 
 Hora: 16:41:17

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.017181873321533 
 Hora: 16:41:17

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089719295501709 
 Hora: 16:41:20

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.018877029418945 
 Hora: 16:41:20

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.019727945327759 
 Hora: 16:41:20

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.020248174667358 
 Hora: 16:41:20

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093801021575928 
 Hora: 16:41:20

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.027657032012939 
 Hora: 16:41:34

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.062260866165161 
 Hora: 16:41:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.030180215835571 
 Hora: 16:41:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0095489025115967 
 Hora: 16:41:34

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.018769979476929 
 Hora: 16:41:34

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091030597686768 
 Hora: 16:41:34

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.011847972869873 
 Hora: 16:41:38

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019832849502563 
 Hora: 16:41:38

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015534162521362 
 Hora: 16:41:38

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024042844772339 
 Hora: 16:41:38

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0058920383453369 
 Hora: 16:41:38

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010463953018188 
 Hora: 16:41:55

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.021392107009888 
 Hora: 16:41:55

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089080333709717 
 Hora: 16:41:55

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0066239833831787 
 Hora: 16:41:56

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.023186922073364 
 Hora: 16:41:56

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0082330703735352 
 Hora: 16:41:56

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.01045298576355 
 Hora: 16:42:00

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.02500581741333 
 Hora: 16:42:00

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.015756130218506 
 Hora: 16:42:00

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.023055076599121 
 Hora: 16:42:00

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0089058876037598 
 Hora: 16:42:00

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0092170238494873 
 Hora: 16:42:49

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.017188787460327 
 Hora: 16:42:49

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.018424034118652 
 Hora: 16:42:49

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.017357110977173 
 Hora: 16:42:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0085279941558838 
 Hora: 16:42:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0056841373443604 
 Hora: 16:43:14

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.014992952346802 
 Hora: 16:43:14

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.020149946212769 
 Hora: 16:43:14

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020985841751099 
 Hora: 16:43:14

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.017643928527832 
 Hora: 16:43:14

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.008275032043457 
 Hora: 16:43:14

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091619491577148 
 Hora: 16:43:15

exec p_admarh_getDiasEmpleadosActivosXFecha @FechaIni='01/01/2024',@FechaFin='31/12/2024',@Base=1,@Dias=270,@TipoNominaId=31,@ConceptoId=121,@PresupuestoId='0002' 
 Ejecutado en: 1.3317179679871 
 Hora: 16:43:15

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0040371417999268 
 Hora: 16:43:15

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0073599815368652 
 Hora: 16:43:23

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.015878200531006 
 Hora: 16:43:23

SELECT *
FROM "cat_Categorias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.01658296585083 
 Hora: 16:43:23

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010072946548462 
 Hora: 16:43:23

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0088579654693604 
 Hora: 16:43:25

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.019717931747437 
 Hora: 16:43:25

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.0280601978302 
 Hora: 16:43:25

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091590881347656 
 Hora: 16:43:25

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0079290866851807 
 Hora: 16:43:28

SELECT *
FROM "cat_TipoNomina"
WHERE "ACTIVO" = 1 
 Ejecutado en: 0.014998912811279 
 Hora: 16:43:28

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.018477916717529 
 Hora: 16:43:28

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.015428066253662 
 Hora: 16:43:28

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "EsPercepcion" = 1
AND "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.02013897895813 
 Hora: 16:43:28

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.019024848937988 
 Hora: 16:43:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083229541778564 
 Hora: 16:43:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0083351135253906 
 Hora: 16:43:28

SELECT *
FROM "cat_TipoNomina"
WHERE "ACTIVO" = 1 
 Ejecutado en: 0.020259857177734 
 Hora: 16:43:28

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'urlReporteador' 
 Ejecutado en: 0.016839027404785 
 Hora: 16:43:28

SELECT *
FROM "ParametrosGenerales"
WHERE "Clave" = 'rutaReportes' 
 Ejecutado en: 0.018967866897583 
 Hora: 16:43:28

SELECT "cc"."Calculado", "cc"."EsPrestamo", "cc"."AntesDeImp", "cc"."EsPercepcion", "cc"."Descripcion", "cc"."ClaveRecibo", "cc"."Id", "cc"."Frecuencia", "cc"."Quincena", "cc"."PagoUnico", "cc"."TieneParteExcenta", "cc"."DiasSalMinParteExc", "cc"."TipoConceptoID", "ctc"."TipoConcepto", SUBSTRING(cc.CuentaContable, 1, 1) + '-' + SUBSTRING(cc.CuentaContable, 2, 1) + '-' + SUBSTRING(cc.CuentaContable, 3, 1) + '-' + SUBSTRING(cc.CuentaContable, 4, 1) + '-' + cc.PartidaPresupuestal + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 1, 4)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 5, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 7, 2) + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 9, 2)
 											 + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", + '-' + SUBSTRING(cc.SubPartidaPresupuestal, 10, 5) AS CuentaContable, "cc"."CuentaContable" AS "Gastos", "cc"."PartidaPresupuestal", "cc"."SubPartidaPresupuestal", "cc"."ClaveSAT", "cc"."Confirmado", ISNULL(ccp.ClavePlanCuentas, '') as ClavePlanCuentas
FROM "dbo"."cat_Conceptos" "cc"
JOIN "dbo"."Cat_TipoConcepto" "ctc" ON "cc"."TipoConceptoID" = "ctc"."ClaveTipo"
LEFT JOIN "conf_conceptoCvePres" "ccp" ON "cc"."Id" = "ccp"."IdConcepto" AND "ccp"."IdPresupuesto" = 0
WHERE "EsPercepcion" = 1
AND "Confirmado" = 1
ORDER BY "cc"."EsPercepcion" DESC, "cc"."ClaveRecibo" 
 Ejecutado en: 0.022564888000488 
 Hora: 16:43:28

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.016299962997437 
 Hora: 16:43:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010187149047852 
 Hora: 16:43:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0068559646606445 
 Hora: 16:43:28

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.019697904586792 
 Hora: 16:43:28

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.019974946975708 
 Hora: 16:43:28

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010712862014771 
 Hora: 16:43:28

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0093178749084473 
 Hora: 16:43:29

exec pa_obtienePagosEspeciales @IDConcepto= 0 
 Ejecutado en: 0.025276899337769 
 Hora: 16:43:29

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.018427133560181 
 Hora: 16:43:29

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0091869831085205 
 Hora: 16:43:29

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0090928077697754 
 Hora: 16:43:33

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.019759893417358 
 Hora: 16:43:33

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.01767897605896 
 Hora: 16:43:33

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.019330024719238 
 Hora: 16:43:33

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015918970108032 
 Hora: 16:43:33

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.009357213973999 
 Hora: 16:44:49

SELECT "CE"."Id", "CE"."Credencial", "CE"."Nombre", "CE"."Apellido1", "CE"."Apellido2", "CE"."Clave", CONVERT(bit, ISNULL(idEmpleado, 0)) AS EsAdmin, ISNULL(d.Descripcion, '') AS Dependencia, "AnioAceptaDatos"
FROM "Cat_Empleados" "CE"
LEFT JOIN "Cat_Admin" "CA" ON "CE"."Id" = "CA"."idEmpleado"
LEFT JOIN "cat_Dependencias" "d" ON "CE"."Id_Dependencia" = "d"."Id"
WHERE CE.Credencial =  CONVERT (INT,02257) 
 Ejecutado en: 0.020835161209106 
 Hora: 16:44:49

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010210037231445 
 Hora: 16:44:49

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010118961334229 
 Hora: 16:44:51

exec p_admarh_getBeneficiosSolicitados 
 Ejecutado en: 0.024281978607178 
 Hora: 16:44:51

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0081639289855957 
 Hora: 16:44:51

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010265111923218 
 Hora: 16:44:54

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.020366907119751 
 Hora: 16:44:54

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.023342132568359 
 Hora: 16:44:54

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.024726152420044 
 Hora: 16:44:54

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0062661170959473 
 Hora: 16:44:54

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.010784864425659 
 Hora: 16:50:07

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.021766901016235 
 Hora: 16:50:07

exec p_admarh_rptAnticipoAguinaldo @FechaInicial  = '01/01/2025', @FechaFinal  = '31/12/2025', @NumNomina  = '', @PresupuestoId  = '0002' 
 Ejecutado en: 0.018823862075806 
 Hora: 16:50:07

SELECT *
FROM "cat_TipoNomina"
WHERE "Activo" = 1 
 Ejecutado en: 0.019749879837036 
 Hora: 16:50:07

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.0078418254852295 
 Hora: 16:50:07

SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.026781797409058 
 Hora: 16:51:12

SELECT *
FROM "cat_Dependencias"
WHERE "Cancelado" = 0 
 Ejecutado en: 0.019885063171387 
 Hora: 16:51:12

SELECT *
FROM "cat_Periodos" 
 Ejecutado en: 0.014653921127319 
 Hora: 16:51:12

SELECT "name" FROM "sysobjects" WHERE "type" = 'U' ORDER BY "name" 
 Ejecutado en: 0.02265191078186 
 Hora: 16:51:12

[BDSECGRAL] 
SELECT CASE WHEN (@@OPTIONS | 256) = @@OPTIONS THEN 1 ELSE 0 END AS qi 
 Ejecutado en: 0.015011072158813 
 Hora: 16:51:12

