<?php

$nombre=$_REQUEST['nombre'];
$edoCivil="ninguno";
if(isset($_REQUEST['edo_civ'])){
	$edoCivil=isset($_REQUEST['edo_civ']);
}
$mensaje=$_REQUEST['mensaje'];
$equipo=$_REQUEST['equipo'];
$civil = "";

if($edoCivil=='1'){
	$civil="soltero";
}
else if($edoCivil==2){
	$civil="casado";
}
else{
	$civil="ninguno";
}
echo "<b>".$nombre."</b> est&aacute; ".$civil.
" y le va al equipo de ".$equipo."<br>";
echo "Mensaje:".$mensaje."<br>";


?>