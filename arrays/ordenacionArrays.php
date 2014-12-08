<?php
	$array = array("Mexico", "Argentina", "Brasil", "Venezuela");
	var_dump($array);
	
	echo "Ordenacion ascendente<br>";
	sort($array);
	var_dump($array);
	
	echo "Ordenacion descendente<br>";
	rsort($array);
	var_dump($array);
	
	$array = array('27', '21', '18', '45');
	var_dump($array);
	
	echo "Ordenacion ascendente<br>";
	sort($array);
	var_dump($array);
	
	echo "Ordenacion descendente<br>";
	rsort($array);
	var_dump($array);
	
	echo 'Array asociativo<br>';
	$arrayAsociativo = array('Nombre'=>'Rodrigo','edad'=>34, 'telefono'=>'4543324554');
	var_dump($arrayAsociativo);
	
	echo "Orden ascendente valores<br>";
	asort($arrayAsociativo);
	var_dump($arrayAsociativo);
	
	echo "Orden descendente valores<br>";
	arsort($arrayAsociativo);
	var_dump($arrayAsociativo);
	
	echo "Orden ascendente Keys<br>";
	ksort($arrayAsociativo);
	var_dump($arrayAsociativo);
	
	echo "Orden descendente Keys<br>";
	krsort($arrayAsociativo);
	var_dump($arrayAsociativo);
?>