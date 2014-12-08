<?php
//Fechas y tiempo en PHP
//Funcion date(formato, timestamp)
echo "Time Zone:".date("e").'<br>';
echo "Hora : ".date("H : m : s a").'<br>';

date_default_timezone_set("America/Mexico_City");
echo "Time Zone:".date("e").'<br>';
echo "Hora : ".date("H : m : s a").'<br>';

$fecha = date("Y/m/d"); 
echo $fecha.'<br>';

echo "Hoy es ".date("d")." de ".date("M")." del ".date("Y").'<br>';
echo "Hoy es ".date("l",time()+2*24*60*60).'<br>';

$d=strtotime("10:30pm April 15 2014");
echo "La fecha capturada es".date("Y-m-d h:m:s a", $d).'<br>';

$d=strtotime("tomorrow");
echo "La fecha tomorrow capturada es".date("Y-m-d h:m:s a", $d).'<br>';

$d=strtotime("next Saturday");
echo "La fecha del siguiente sabado es".date("Y-m-d h:m:s a", $d).'<br>';

$d=strtotime("+3 Months");
echo "La fecha dentro de tres meses es".date("Y-m-d h:m:s a", $d).'<br>';

$fechaInicio=strtotime("Sunday");
$fechaFinal=strtotime("-6 Weeks",$fechaInicio);

if($fechaInicio < $fechaFinal){
	echo "La fecha de inicio y fin son congruentes<br>";
}else{
	echo "La fecha de inicio y fin no son congruentes<br>";
}

$navidad = strtotime("December 25");
$d2 = ceil(($navidad-time())/60/60/24);
echo "Faltan ".$d2." dias para Navidad<br>"; 








?>