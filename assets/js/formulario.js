	// Removes leading whitespaces
	function LTrim( value ) {
		var re = /\s*((\S+\s*)*)/;
		return value.replace(re, "$1");
		
	}
	// Removes ending whitespaces
	function RTrim( value ) {	
		var re = /((\s*\S+)*)\s*/;
		return value.replace(re, "$1");
	}
	
	// Removes leading and ending whitespaces
	function trim( value ) {
		return LTrim(RTrim(value));
	}
	
	function SustituyeTxt(objetotxt){
		objetotxt.value = RemoveBad(objetotxt.value);
	}
	
	function RemoveBad(strTemp) {
		strTemp = strTemp.replace(/\<|\>|\"|\'|\%|\;|\(|\)|\&|\+/g,"");
		return strTemp;
	}

	function isUsername(strUsername) {
		return strUsername.search(/^[a-zA-Z][\w-\.]{3,29}$/ig);
		/********************
		^[a-zA-Z]     Indicamos que empiece con una letra mayuscula o minuscula
		[\w-\.]{3,99} Indicamos que luego puede ir una letra, numero, guion, guion bajo o punto, de 3 a 99 veces
		Asi tenemos 1 + 3 = 4 carateres minimo para un username y m�ximo 100 caracteres
		La funcion regresa 0 si todo es correcto y -1 en caso de error
		/********************
		flags	Significado 
		 g 		  Explorar la cadena completa 
		 i 		  No distinguir may�suculas de min�suculas 
		 m 		  Permite usar varios ^y $ en el patr�n 
		 s 		  Incluye el salto de l�nea en el comod�n punto .  
		 x 		  Ignora los espacios en el patr�n 
		 ********************/
	}
	
	function isEMail(strEMail){
		return strEMail.search(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/ig);
	}