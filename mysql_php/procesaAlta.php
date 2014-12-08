<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];

$usuario = 'root';
$pass = '';
$link=mysql_connect("127.0.0.1",$usuario, $pass);
if($link){
	if(mysql_select_db("miDirectorio")){
		//echo "La conexion fue un exito<br>";
		$query = "insert into directorio (nombre, apellido, email, 
		telefono) values('$nombre','$apellido','$email','$telefono')";
		//echo $query;
		if(mysql_query($query,$link)){
			echo 'Registro an&ntilde;adido correctamente<br>';
		}
		else{
			echo 'Ocurrio un error<br>';
		}
	}
}
else{
	echo "La conexion falló, verifique los datos de la conexion.<br>";
}

echo "<a href='Menu.html'>Volver al Menú Principal</a>";

?>