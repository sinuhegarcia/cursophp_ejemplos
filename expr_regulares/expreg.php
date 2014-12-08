Metacaracteres
. cualquier caracter
^ Se va a buscar en el inicio de una cadena
$ Se va a buscar al final de una cadena
\s espacio en blanco
\d un digito[0-9]
\D Un caracter que no es digito
\w Un caracter que sea parte de una palabra(letra, numero, guion_bajo)
\W Caracter distinto a numero, letra o guion bajo
\A Inicio de una cadena de caracteres
\z Final de una cadena de caracteres

Cuantificadores
* indica que un caracter puede aparecer cero o mas veces
+ indica que nuestro caracter puede aparecer una o mas veces 
? indica que nuestro caracter puede aparecer cero o una vez
{n} el caracter aparece exactamente n veces
{n,} el caracter puede aparecer n o mas veces 
{n,m} el caracter puede aparecer entre n y m veces

Expresiones regulares siempre van entre diagonales
//
/ab?c/ valida ab o abc
/abc{1,3}/ abc abcc abccc

Agrupadores
[] Indican un rango [1-2] [b-d]
() Emplean subexpresiones /a(ac.)+e/ aac8ac4e
   /a(a|b)c/ aac abc

 Modificadores
 i Pueden coincidir mayusculas y minusculas
 m Indica que se hara un match multilinea
 s El metacaracter . hara match tambien con el de cambio de linea
 u Hace los match en modo utf8
 x ignora los espacios
 <br>

<?php
// preg_match() evalua si una cadena hace match con una expresion regular
$cadena = "abbbc";
$expreg="/ab?c/";

if(preg_match("/ab?c/",$cadena)){
	echo "La cadena cumple con la expresion regular<br>";
}else{
	echo "La cadena no cumple con la expresion regular<br>";
}
$array = array('23.32','22','12.009','23.43.43','.678');
//$expreg="/^(\d+)?\.\d+$/";
$expreg ="/^\.\d+/";
if(preg_grep($expreg, $array)){
	echo "La expresion regular $expreg existe en array <br>";
}else{
	echo "La expresion regular $expreg no existe en array";
}

$cadena = "Abril 15, 2007";
$patron = "/(\d+)$/i";
$sustitucion = "2014";
echo preg_replace($patron, $sustitucion, $cadena);

$email = "email@logo.com.mx";
if(verificaEmail($email)){
	echo "El email es correcto<br>";
}else{
	echo "Verifica tu correo que es incorrecto<br>";
}
function verificaEmail($cadena){
	$expreg="/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.([a-zA-Z0-9\._-]+)+$/";
	return preg_match($expreg,$cadena);
}
?>