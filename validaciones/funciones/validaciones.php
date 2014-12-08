<?php
//Funcion que verifica si un campo esta o no vacio
function validaRequerido($valor){
	if(trim($valor) == ''){
		//Esta vacio - invalido
		return false;
	}else{
		//No esta vacio - valido
		return true;
	}
}

//Valida si un valor es un numero
function validaEntero($valor, $opciones=null){
	if(filter_var($valor,FILTER_VALIDATE_INT,$opciones)===false){
		return false;
	}
	else{
		return true;
	}
}

//Valida si el $valor es un email
function validaEmail($valor){
	if(filter_var($valor,FILTER_VALIDATE_EMAIL)===false){
		return false;
	}
	else{
		return true;
	}
}

?>