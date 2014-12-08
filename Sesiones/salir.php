<?php
	session_start();
	echo 'ID de la sesion = '.session_id().'<br>';
	echo 'Nombre de la sesion ='.session_name().'<br>';
	session_unset(); //Destruye las variables creadas con la sesion
	session_destroy();//Finaliza la sesion
	var_dump($_SESSION);
	echo "Ha salido del sistema";
	echo "<a href='inicio.php'>Volver al inicio</a>";
?>