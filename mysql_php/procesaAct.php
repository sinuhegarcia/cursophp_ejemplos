<?php
$id = $_POST['id'];
$origen = $_POST['origen'];
//echo $origen;
$link = mysql_connect('127.0.0.1','root','');
$nombre = '';
$apellido = '';
$email = '';
$telefono = '';

//Obtenemos los id's y los nombres de todos los registros y los listamos para una
//lista de seleccion.
if($link && $origen == 'formUpdate'){
	if(mysql_select_db('miDirectorio')){
		$query = "select * from directorio where id = '$id'";
		//echo $query;
		$result = mysql_query($query,$link);
		if($result){
			if(mysql_numrows($result)>0){
				$nombre = mysql_result($result,0,"nombre");
				$apellido = mysql_result($result,0,"apellido");
				$email  = mysql_result($result,0,"email");
				$telefono = mysql_result($result,0,"telefono");
			}else{
					echo 'No se obtuvieron resultados';
				}
		}
		else{
			echo 'Error de query';
		}
	}else{
		echo 'Error uso de la base';
	}
	
}
mysql_close($link);
if($origen=='formUpdate'){
?>
<htlml>
<head><title>Actualizacion de Registros de Registros</title></head>
<body>
	<h1>Mi Directorio </h1>
	<h2>Actualizacion de registros</h2>
	<form action="procesaAct.php" method="POST">
	Nombre: <input type="text" name="nombre" value="<?php echo $nombre;?>"><br>
	Apellido: <input type="text" name="apellido" value = "<?php echo $apellido;?>"><br>
	Email: <input type="text" name="email" value = "<?php echo $email;?>"><br>
	Telefono: <input type="text" name="telefono" value = "<?php echo $telefono;?>"><br>
	<input type=hidden name='origen' value="procesaAct">
	<input type=hidden name='id' value = '<?php echo $id; ?>'>
	<input type="submit"  value="Actualizar"><br>
	
	</form>
</body>
</html>
<?php
}
else if($origen == 'procesaAct'){
	echo '<h1>Actualizacion de datos</h1>';
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$link = mysql_connect('127.0.0.1','root','');
	if($link){
		if(mysql_select_db('miDirectorio')){
			$query = "update directorio set nombre='$nombre', apellido='$apellido', email='$email', telefono = '$telefono' where id = '$id'";
			//echo $query;
			$result = mysql_query($query,$link);
			if($result){
				echo "Se actualizo el registro correctamente<br>";
			}
			else{
				echo '[actualizacion]Error de query<br>';
			}
		}else{
			echo 'Error uso de la base<br>';
		}
		
	}
	else{
		echo '[actualizacion]Error de conexion<br>';
	}
	mysql_close($link);
}
echo "<a href='Menu.html'>Volver al Menú Principal</a>";
?>