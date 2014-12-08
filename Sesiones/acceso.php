<?php
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	
	
	//strcmp($str1,$str2) si str11 y str2 son iguales regresa 0
	if(strcmp($usuario,'root')==0&&strcmp($contrasena,'super')==0){
		session_start();
		$_SESSION['acceso']=1;
		$_SESSION['usuario']= $usuario;
		echo "<h1> Bienvenido $usuario</h2>";
		echo 'ID de la sesion = '.session_id().'<br>';
		echo 'Nombre de la sesion ='.session_name().'<br>';
		
	}
	echo "<a href='privada.php'> Acceder a la pagina privada </a>";
	
?>