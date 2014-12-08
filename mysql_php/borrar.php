<?php
	$usuario = 'root';
	$pass = '';
	$link=mysql_connect("127.0.0.1",$usuario, $pass);
	if($link){
		if(mysql_select_db("miDirectorio")){
			//Borra toda la tabla, y reinicializa el autoincremento
			$query = "truncate table directorio";
			//Borra todos los registros de la tabla pero no reinicializa el 
			//autoincremento
			//$query = "delete from directorio";
			//echo $query;
			if($result=mysql_query($query,$link)){
				echo "Registros borrados<br>";
			}else{
				echo "Query incorrecto<br>";
			}
		}
	}
	mysql_close($link);
	echo "<a href='Menu.html'>Volver al Menú Principal</a>";
?>