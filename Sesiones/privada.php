<?php
	
	session_start();
	echo var_dump($_SESSION);
	print_r($_SESSION);
	if($_SESSION['acceso']!=1){
		header("Location:inicio.php");
		exit;
	}
	echo "<h1>Hola ".$_SESSION['usuario'].", bienvenido a la pagina privada!!!</h1>";
	echo 'ID de la sesion = '.session_id().'<br>';
	echo 'Nombre de la sesion ='.session_name().'<br>';
	echo "<a href='salir.php'> Salir del sistema</a>"
?>