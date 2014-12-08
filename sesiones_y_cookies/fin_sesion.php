<?php

	session_start();
	var_dump($_SESSION);
	//Borra todas las variables de la sesion
	$_SESSION = array();
	
	//Borra la cookie que almacena la sesion
	if(isset($_COOKIE[session_name()])){
		setcookie('session_name()','',time()-42000,'/');
	}
	
	//Se destruye la sesion
	session_destroy();
	
	echo "<a href='sesion.php'>Volver</a>";
?>