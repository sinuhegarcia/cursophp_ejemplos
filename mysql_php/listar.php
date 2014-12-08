<?php
echo "<h1>Lista de Registros</h1>";
$usuario = 'root';
$pass = '';
$link=mysql_connect("127.0.0.1",$usuario, $pass);//Conexión a la base de datos
if($link){
	if(mysql_select_db("miDirectorio")){//Seleccion de la base de datos
		//echo "La conexion fue un éxito<br>";
		$query = "select * from directorio";
		//echo $query;
		if($result=mysql_query($query,$link)){//Ejecucion de Query
			echo "<table border='1' style='width:100%'> ";
			echo "<tr>";
					echo "<td>ID</td>";
					echo "<td>NOMBRE</td>";
					echo "<td>APELLIDO</td>";
					echo "<td>EMAIL</td>";
					echo "<td>TELEFONO</td>";
			echo "</tr>";
			$renglones = mysql_numrows($result);//Se obtiene el número de renglones
			if($renglones > 0){
				
				for ($i=0;$i<$renglones;$i++){
					echo "<tr>";
					//Capturamos las columnas de cada renglón
					$id = mysql_result($result, $i, "id");
					$nombre = mysql_result($result, $i, "nombre");
					$apellido = mysql_result($result, $i, "apellido");
					$email = mysql_result($result, $i, "email");
					$telefono = mysql_result($result, $i, "telefono");
					
					//echo "id=$id  nombre =$nombre  apellido=$apellido 
					//email=$email telefono = $telefono<br>";
					echo "<td>$id</td>";
					echo "<td>$nombre</td>";
					echo "<td>$apellido</td>";
					echo "<td>$email</td>";
					echo "<td>$telefono</td>";
					
					echo "</tr>";
				}
				
			}
			echo "</table>";
		}
		else{
			echo 'Ocurrio un error';
		}
	}
}
else{
	echo "La conexion fallo, verifique los datos de la conexion.<br>";
}
echo "<a href='Menu.html'>Volver al Menú Principal</a>";
?>