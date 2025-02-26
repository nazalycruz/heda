/*jslint indent:2, regexp:true*/
(function (global) {
  'use strict';
  var comunes = [ 'MARIA', 'MA', 'MA.', 'JOSE', 'J', 'J.' ];
  /**
    curp.js
    Función para generar el CURP, de acuerdo a las especificaciones oficiales.
    Se puede usar con node.js y directamente en el navegador.

    INSTALACION:
    Navegador : <script src="curp.js"></script>
    Node.js   : var generaCurp = require('curp');

    MODO DE USO:
    var curp = generaCurp({
      nombre            : 'Juan',
      apellido_paterno  : 'Perez',
      apellido_materno  : 'Ramirez',
      sexo              : 'H',
      estado            : 'DF',
      fecha_nacimiento  : [31, 1, 1981]
    });


    Licencia: MIT ( http://opensource.org/licenses/MIT )
  */

  /**
  * filtraInconvenientes()
  * Filtra palabras altisonantes en los primeros 4 caracteres del CURP
  * @param {string} str - Los primeros 4 caracteres del CURP
  */
  function filtraInconvenientes(str) {
    var inconvenientes = [ 'BACA', 'LOCO', 'BUEI', 'BUEY', 'MAME', 'CACA', 'MAMO',
      'CACO', 'MEAR', 'CAGA', 'MEAS', 'CAGO', 'MEON', 'CAKA', 'MIAR', 'CAKO', 'MION',
      'COGE', 'MOCO', 'COGI', 'MOKO', 'COJA', 'MULA', 'COJE', 'MULO', 'COJI', 'NACA',
      'COJO', 'NACO', 'COLA', 'PEDA', 'CULO', 'PEDO', 'FALO', 'PENE', 'FETO', 'PIPI',
      'GETA', 'PITO', 'GUEI', 'POPO', 'GUEY', 'PUTA', 'JETA', 'PUTO', 'JOTO', 'QULO',
      'KACA', 'RATA', 'KACO', 'ROBA', 'KAGA', 'ROBE', 'KAGO', 'ROBO', 'KAKA', 'RUIN',
      'KAKO', 'SENO', 'KOGE', 'TETA', 'KOGI', 'VACA', 'KOJA', 'VAGA', 'KOJE', 'VAGO',
      'KOJI', 'VAKA', 'KOJO', 'VUEI', 'KOLA', 'VUEY', 'KULO', 'WUEI', 'LILO', 'WUEY',
      'LOCA' ];

    if (inconvenientes.indexOf(str) > -1) {
      str = str.replace(/^(\w)\w/, '$1X');
    }

    return str;
  }

  /**
   * ajustaCompuesto()
   * Cuando el nombre o los apellidos son compuestos y tienen
   * proposiciones, contracciones o conjunciones, se deben eliminar esas palabras
   * a la hora de calcular el CURP.
   * @param {string} str - String donde se eliminarán las partes que lo hacen compuesto
   */
  function ajustaCompuesto(str) {
    var compuestos = [ /\bDA\b/, /\bDAS\b/, /\bDE\b/, /\bDEL\b/, /\bDER\b/, /\bDI\b/,
        /\bDIE\b/, /\bDD\b/, /\bEL\b/, /\bLA\b/, /\bLOS\b/, /\bLAS\b/, /\bLE\b/,
        /\bLES\b/, /\bMAC\b/, /\bMC\b/, /\bVAN\b/, /\bVON\b/, /\bY\b/ ];

    compuestos.forEach(function (compuesto) {
      if (compuesto.test(str)) {
        str = str.replace(compuesto, '');
      }
    });

    return str;
  }

  /**
  * zeropad()
  * Rellena con ceros un string, para que quede de un ancho determinado.
  * @param {number} ancho - Ancho deseado.
  * @param {number} num - Numero que sera procesado.
  */
  function zeropad(ancho, num) {
    var pad = Array.apply(0, Array.call(0, ancho)).map(function () { return 0; }).join('');

    return (pad + num).replace(new RegExp('^.*([0-9]{' + ancho + '})$'), '$1');
  }
  /**
  * primerConsonante()
  * Saca la primer consonante interna del string, y la devuelve.
  * Si no hay una consonante interna, devuelve X.
  * @param {string} str - String del cual se va a sacar la primer consonante.
  */
  function primerConsonante(str) {
    str = str.trim().substring(1).replace(/[AEIOU]/ig, '').substring(0, 1);
    return (str === '' || str === 'Ñ') ? 'X' : str;
  }

  /**
  * filtraCaracteres()
  * Filtra convirtiendo todos los caracteres no alfabeticos a X.
  * @param {string} str - String el cual sera convertido.
  */
  function filtraCaracteres(str) {
    return str.toUpperCase().replace(/[\d_\-\.\/\\,]/g, 'X');
  }

  /**
  * estadoValido()
  * Valida si el estado esta en la lista de estados, de acuerdo a la RENAPO.
  * @param {string} str - String con el estado.
  */
  function estadoValido(str) {
    var estado = [ 'AS', 'BC', 'BS', 'CC', 'CS', 'CH', 'CL', 'CM', 'DF', 'DG',
        'GT', 'GR', 'HG', 'JC', 'MC', 'MN', 'MS', 'NT', 'NL', 'OC', 'PL', 'QT',
        'QR', 'SP', 'SL', 'SR', 'TC', 'TS', 'TL', 'VZ', 'YN', 'ZS', 'NE' ];

    return (estado.indexOf(str.toUpperCase()) > -1);
  }


  /**
  * normalizaString()
  * Elimina los acentos, eñes y diéresis que pudiera tener el nombre.
  * @param {string} str - String con el nombre o los apellidos.
  */
  function normalizaString(str) {
    var origen, destino, salida;
    origen  = [ 'Ã', 'À', 'Á', 'Ä', 'Â', 'È', 'É', 'Ë', 'Ê', 'Ì', 'Í', 'Ï', 'Î',
             'Ò', 'Ó', 'Ö', 'Ô', 'Ù', 'Ú', 'Ü', 'Û', 'ã', 'à', 'á', 'ä', 'â',
             'è', 'é', 'ë', 'ê', 'ì', 'í', 'ï', 'î', 'ò', 'ó', 'ö', 'ô', 'ù',
             'ú', 'ü', 'û', 'Ç', 'ç' ];
    destino = [ 'A', 'A', 'A', 'A', 'A', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I',
             'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'a', 'a', 'a', 'a', 'a',
             'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'u',
             'u', 'u', 'u', 'c', 'c' ];
    str     = str.split('');
    salida  = str.map(function (char) {
      var pos = origen.indexOf(char);
      return (pos > -1) ? destino[pos] : char;
    });

    return salida.join('');
  }


  /**
  * agregaDigitoVerificador()
  * Agrega el dígito que se usa para validar el CURP.
  * @param {string} curp_str - String que contiene los primeros 17 caracteres del CURP.
  */
  function agregaDigitoVerificador(curp_str) {
    var curp, caracteres, curpNumerico, suma, digito;

    // Convierte el CURP en un arreglo
    curp = curp_str.substring(0, 17).toUpperCase().split('');
    caracteres  = [
      '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E',
      'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'Ñ', 'O', 'P', 'Q', 'R', 'S',
      'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
    ];

    // Convierte el curp a un arreglo de números, usando la posición de cada
    // carácter, dentro del arreglo `caracteres`.
    curpNumerico = curp.map(function (caracter) {
      return caracteres.indexOf(caracter);
    });

    suma = curpNumerico.reduce(function (prev, valor, indice) {
      return prev + (valor * (18 - indice));
    }, 0);

    digito = (10 - (suma % 10));

    if (digito === 10) {
      digito = 0;
    }

    return curp_str + digito;
  }

  /**
   * extraerInicial()
   * Funcion que extrae la inicial del primer nombre, o, si tiene mas de 1 nombre Y el primer
   * nombre es uno de la lista de nombres comunes, la inicial del segundo nombre
   * @param {string} nombre - String que representa todos los nombres (excepto los apellidos) separados por espacio
   */
  function extraerInicial(nombre) {
    var nombres, primerNombreEsComun;
    nombres = nombre.toUpperCase().trim().split(/\s+/);
    primerNombreEsComun = (nombres.length > 1 && comunes.indexOf(nombres[0]) > -1);

    if (primerNombreEsComun) {
      return nombres[1].substring(0, 1);
    }

    return nombres[0].substring(0, 1);
  }

  /**
  * generaCurp()
  * Función principal que genera el CURP.
  * @param {object} param - Objeto que tiene los parámetros necesarios para poder generar el curp,
  * Las propiedasdes del objeto param son:
  * @param {string} nombre - Nombre(s).
  * @param {string} apellido_paterno - Apellido materno.
  * @param {string} apellido_materno - Apellido materno.
  * En caso de haber conjunciones en los apellidos, estas deben ir aqui.
  * @param {string} sexo - Sexo. H para hombre, M para mujer.
  * @param {string} estado - Estado, usando las abreviaturas oficiales.
  * @param {array} fecha_nacimiento - Arreglo con [ día, mes, año ], cada uno como numero.
  * @param {string} [homonimia] - Opcional. Valor usado para evitar repeticiones, es asignado por gobernación.
  * Por default es 0 si la fecha de nacimiento es menor o igual a 1999, o A, si es igual o mayor a 2000.
  */
  function generaCurp(param) {
    var inicial_nombre, vocal_apellido, posicion_1_4, posicion_14_16, curp, primera_letra_paterno, primera_letra_materno, nombres, nombre_a_usar, pad;

    pad = zeropad.bind(null, 2);
    if (!estadoValido(param.estado)) {
      return false;
    }

    param.nombre = ajustaCompuesto(normalizaString(param.nombre.toUpperCase())).trim();
    param.apellido_paterno = ajustaCompuesto(normalizaString(param.apellido_paterno.toUpperCase())).trim();

    param.apellido_materno = param.apellido_materno || "";
    param.apellido_materno = ajustaCompuesto(normalizaString(param.apellido_materno.toUpperCase())).trim();

    inicial_nombre = extraerInicial(param.nombre);

    vocal_apellido = param.apellido_paterno.trim().substring(1).replace(/[BCDFGHJKLMNÑPQRSTVWXYZ]/g, '').substring(0, 1);
    vocal_apellido = (vocal_apellido === '') ? 'X' : vocal_apellido;

    primera_letra_paterno = param.apellido_paterno.substring(0, 1);
    primera_letra_paterno = primera_letra_paterno === 'Ñ' ? 'X' : primera_letra_paterno;

    if (!param.apellido_materno || param.apellido_materno === "") {
      primera_letra_materno = 'X';
    } else {
      primera_letra_materno = param.apellido_materno.substring(0, 1);
      primera_letra_materno = primera_letra_materno === 'Ñ' ? 'X' : primera_letra_materno;
    }

    posicion_1_4 = [
      primera_letra_paterno,
      vocal_apellido,
      primera_letra_materno,
      inicial_nombre
    ].join('');

    posicion_1_4 = filtraInconvenientes(filtraCaracteres(posicion_1_4));

    nombres = param.nombre.split(" ").filter(function (palabra) {
      return palabra !== "";
    });
    nombre_a_usar = nombres.length > 1 && comunes.indexOf(nombres[0]) > -1 ? nombres[1] : nombres[0];

    posicion_14_16 = [
      primerConsonante(param.apellido_paterno),
      primerConsonante(param.apellido_materno),
      primerConsonante(nombre_a_usar)
    ].join('');

    curp = [
      posicion_1_4,
      pad(param.fecha_nacimiento[2] - 1900),
      pad(param.fecha_nacimiento[1]),
      pad(param.fecha_nacimiento[0]),
      param.sexo.toUpperCase(),
      param.estado.toUpperCase(),
      posicion_14_16,
      param.homonimia || (param.fecha_nacimiento[2] > 1999 ? 'A' : 0)
    ].join('');

    return agregaDigitoVerificador(curp);
  }

  // Si es un navegador, exporta 'generaCurp' a una variable global.
  // Si es node.js, exporta esa función en module.exports
  if (global.hasOwnProperty('window') && global.window === global) {
    global.generaCurp = generaCurp;
  } else {
    module.exports = generaCurp;
  }

}(this));

//Función para validar una CURP
function curpValida(curp) {
    var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
        validado = curp.match(re);

    if (!validado)  //¿Coincide con el formato general?
    	return false;

    //Validar que coincida el dígito verificador
    function digitoVerificador(curp17) {
        //Fuente https://consultas.curp.gob.mx/CurpSP/
        var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
            lngSuma      = 0.0,
            lngDigito    = 0.0;
        for(var i=0; i<17; i++)
            lngSuma = lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
        lngDigito = 10 - lngSuma % 10;
        if (lngDigito == 10) return 0;
        return lngDigito;
    }

    if (validado[2] != digitoVerificador(validado[1]))
    	return false;

    return true; //Validado
}


// /* LICENSE
//  * The MIT License (MIT)
//  *
//  *  Copyright (c) <2014> <Julio César Márquez Martínez>
//  *
//  *  Permission is hereby granted, free of charge, to any person obtaining a copy
//  *  of this software and associated documentation files (the "Software"), to deal
//  *  in the Software without restriction, including without limitation the rights
//  *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
//  *  copies of the Software, and to permit persons to whom the Software is
//  *  furnished to do so, subject to the following conditions:
//  *
//  *  The above copyright notice and this permission notice shall be included in
//  *  all copies or substantial portions of the Software.
//  *
//  *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
//  *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
//  *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
//  *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
//  *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
//  *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
//  *  THE SOFTWARE.
//  */
//
//
// //Variables Globales
// var vocales,nombres;
//
// vocales = ["A","E","I","O","U"];
// nombres = ["MARÍA","MARIA","JOSÉ","JOSE"];
//
// /**
//  * Recibe un string para poder quitar acentos y eñes
//  *
//  * @param {String} str
//  * @returns {String}
//  */
// function limpiaString(str){
//
//     str = str.replace(/\Á|á/g, 'A');
//     str = str.replace(/\É|é/g, 'E');
//     str = str.replace(/\Í|í/g, 'I');
//     str = str.replace(/\Ó|ó/g, 'O');
//     str = str.replace(/\Ú|ú/g, 'U');
//     str = str.replace(/\Ñ|ñ/g, 'X');
//
//     return str;
// }
//
// /**
//  * Recibe un string para verificar si esta separadao por un espacio y si existe otro strong después del espacio.
//  *
//  * @param {String} arreglo Un arreglo de caracteres
//  * @returns {String} El segundo string en caso de ser encontrado, si no existe regresa SINDEFINIR.
//  */
// function segundoString(arreglo){
//     var segundo;
// 	//alert(arreglo[1]);
//     if(arreglo[1] != undefined && arreglo[1] != ''){
//         segundo = arreglo[1].toUpperCase();
//         //alert(nombre2);
//     }else{
//         segundo = "SINDEFINIR";
//     }
//
//     return segundo;
// }
//
// /**
//  * Recibe una fecha y la formatea para el curp, es decir con formato yymmdd Ej. (890418)
//  *
//  * @param {String} fecha Con formato dd-mm-yyyy Ej. (18-04-1989)
//  * @returns {String} Fecha con formato yyddmm Ej. (890418)
//  */
// function getFecha(fecha){
//     return fecha[8]+fecha[9]+fecha[3]+fecha[4]+fecha[0]+fecha[1];
// }
//
// /**
//  * Obtiene la primer consonante interna de un String
//  *
//  * @param {String} string Cadena a verificar
//  * @returns {char} Consonante Interna
//  */
// function consonanteInterna(string){
//     var tmp,tmp1,tmp2;
//     tmp1 = 0;
//     tmp2 = 0;
//
// 	if(string != 'SINDEFINIR'){
// 		for (var i = 0; i < string.length; i++) {
// 			if (tmp1 == 0 && $.inArray(string[i], vocales) == -1 && tmp2 != 0) {
// 				//alert(vocales);
// 				//alert(apater[i]);
// 				tmp1 = tmp1 + 1;
// 				tmp = string[i];
// 			}
// 			tmp2++;
// 		}
// 	}else{
// 		tmp = "X";
// 	}
//
//
//     return tmp;
// }
//
// /**
//  * Obtiene la primer vocal interna de un String
//  *
//  * @param {String} string Cadena a verificar
//  * @returns {char} Vocal Interna
//  */
// function vocalInterna(string){
//     var tmp,tmp1,tmp2;
//     tmp1 = 0;
//     tmp2 = 0;
//
// 	if(string != 'SINDEFINIR'){
// 		for (var i = 0; i < string.length; i++) {
// 			if (tmp1 == 0 && $.inArray(string[i], vocales) != -1 && tmp2 != 0) {
// 				tmp1 = tmp1 + 1;
// 				tmp = string[i];
// 			}
// 			tmp2++;
// 		}
// 	}else{
// 		tmp = "X";
// 	}
//
//
//     return tmp;
// }
//
// (function($) {
//     /**
//      * Función CURP. Calcula el CURP en base a ciertas opciones.
//      *
//      * @param {array} options Opciones para el calculo de la CURP.
//      * @param {function} callbackFunction Posible función a ejecutar antes de terminar el proceso.
//      * @returns {_L99.$.fn@call;val|_L99.$.fn@call;html} Puede regresar el valor calculado a un input o un div/span
//      */
//     $.fn.curp = function(options,callbackFunction) {
//
//         //Variables locales
//         var curp,nombre1,nombre2,apater,amater,tmp,tmp1;
//
//         //Valores por default
//         var settings = $.extend({
//             nombre: "PrimerNombre SegundoNombre", //Separados por un Espacio.
//             apellido: "ApellidoPaterno ApellidoMaterno", //Separados por un espacio.
//             fechaNacimiento: "01-01-2001", //En formato dd-mm-yyyy.
//             lugarNacimiento: "NE", //Por default lo trata como extranjero. Ver lista de valores aceptados.
//             sexo: "H" //Sólo puede ser H o M.
//         }, options);
//
//         //Limpiamos de acentos los nombres y apellidos.
//         settings.nombre = limpiaString(settings.nombre);
//         settings.apellido = limpiaString(settings.apellido);
//
//         //Separamos el nombre para obtener el segundo nombre.
//         tmp = settings.nombre.split(" ");
//         nombre1 = tmp[0].toUpperCase();
//         nombre2 = segundoString(tmp);
//
//         //Separamos el apellido en paterno y materno.
//         tmp = settings.apellido.split(" ");
//         apater = tmp[0].toUpperCase();
//         amater = segundoString(tmp);
//
//         //Obtenemos la primera vocal del apellido paterno
//         curp = apater[0] + vocalInterna(apater);
//
//         //Obtenemos la primer letra del apellido materno
// 		if(amater != 'SINDEFINIR'){
// 			curp = curp + amater[0];
// 		}else{
// 			curp = curp + "X";
// 		}
//
//
//         //Obtenemos la primer letra del nombre, si el primer nombre es maria o jose y existe un segundo nombre se utiliza el segundo nombre.
//         if($.inArray(nombre1,nombres) > -1 && nombre2 != 'SINDEFINIR'){
//             curp = curp + nombre2[0];
//         }else{
//             curp = curp +nombre1[0];
//         }
//
//         //Obtenemos la fecha de nacimiento, el sexo y el lugar de nacimiento
//         curp = curp+""+getFecha(settings.fechaNacimiento);
//         curp = curp + settings.sexo.toUpperCase() + settings.lugarNacimiento;
//
//         //Obtenemos la primer consonante interna del apellido paterno,materno y el primer nombre
//         curp = curp + consonanteInterna(apater);
//         curp = curp + consonanteInterna(amater);
//         curp = curp + consonanteInterna(nombre1);
//
//         //Los dos últimos digitos son de control generados por el gobierno para evitar duplicados y no tenemos acceso a ellos.
//         curp = curp + "00";
//
//         //Se ejecuta función callback si existe.
//         if ($.isFunction(callbackFunction)) {
//             callbackFunction.call();
//         }
//
//         //Se verifica que tipo de elemento DOM es this para ejecutar la instrucción correcta.
//         tmp = this[0].tagName;
//         if(tmp == 'INPUT'){
//             return this.val(curp);
//         }else{
//             return this.html(curp);
//         }
//
//     };
// }(jQuery));
