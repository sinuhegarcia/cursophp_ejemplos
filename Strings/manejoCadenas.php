<?php

$cadena1 = "Hola Mundo!!!";

//Capturamos la longitud de la cadena
$lon = strlen($cadena1);
echo "La cadena $cadena1 tiene una longitud de $lon caracteres<br>";

//Contar el numero de palabras de la cadena
$palabras = str_word_count($cadena1);
echo "La cadena $cadena1 tiene $palabras palabras<br>";

//Voltea el sentido e las palabras
echo strrev($cadena1).'<br>';

//Busca la posicion de una palabra en la cadena
$pos = strpos($cadena1,"Mundo");
echo "La posicion de 'Mundo' en $cadena1 es $pos <br>";

//Reemplaza una cadena por otra
echo str_replace("Mundo", "Gente", $cadena1).'<br>';

//Comparamos dos cadenas sensible a mayusculas
if($res=strcmp("Mexico","Argentina")!==0){
	echo "Mexico y Argentina son diferentes $res <br>";
}
if($res=strcmp("Mexico","mexico")!==0){
	echo "Mexico y mexico son diferentes $res <br>";
}
if($res=strcmp("Mexico","Mexico")!==0){
	echo "Mexfirstico y Mexico son diferentes $res <br>";
}else{
	echo "Mexico y Mexico son iguales $res <br>";
}

//comparacion dos cadenas caso insensible a mayusculas
if($res=strcasecmp("Mexico","mExICo")==0){
	echo "Mexico y mExICo son iguales en caso insensible a mayusculas $res <br>";
}

//Convertir a Mayusculas
echo strtoupper($cadena1).'<br>';

//Convertir a minusculas
echo strtolower($cadena1).'<br>';

//Convertir a mayusculas solo la primera letra de cada palabra
echo ucwords($cadena1).'<br>';

//Para poner en mayuscula solo la primera letra de la primera palabra de la cadena
echo ucfirst($cadena1).'<br>';

$pais = 'Brasil';

//Cambiar a Mundo por Brasil en mayusculas
echo str_replace("Mundo",strtoupper($pais),$cadena1).'<br>';

//Encuntra la posicion de la ultima aparicion de una palabra en una cadena
$cadena1 = "Hola Mundo Mundo mundo!!!";
$pos = strripos($cadena1,"Mundo");
echo "La ultima aparicion de Mundo en $cadena1 es en $pos <br>";
if($pos === false){
	echo "No se pudo encontrar la ultma ocurrencia de Mundo<br>"; 
}else{
	echo "La ultima aparicion de Mundo en $cadena1 es en $pos <br>";
}




?>