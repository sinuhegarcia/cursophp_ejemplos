<?php
	$id = $_POST['id'];
	$usuario = 'root';
	$pass = '';
	$link=mysql_connect("127.0.0.1",$usuario, $pass);
	if($link){
		if(mysql_select_db("miDirectorio")){
			$query = "delete from directorio where id = $id";
			//echo $query;
			if($result=mysql_query($query,$link)){
				echo "Registro borrado correctamente<br>";
			}else{
				echo "Query incorrecto<br>";
			}
		}
	}
	echo "<a href='Menu.html'>Volver al Menú Principal</a>";
?>