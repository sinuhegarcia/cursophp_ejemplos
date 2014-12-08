<?php
	$diccionario = array(
	'Titulo de la Pagina'=>'POO y MVC en PHP',
	'keywords'=>'poo, mvc, php',
	'descripcion'=>'El paradigma de la programacion orientada a objetos'
	);
	
	$template = file_get_contents('plantilla.html');
	
	foreach($diccionario as $clave=>$valor){
		$template = str_replace('{'.$clave.'}',$valor, $template);
	}
	
	print $template;
?>