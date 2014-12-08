<html>
<head><title>Actualiza Registro</title></head>
<body>
	<h1>Mi Directorio </h1>
	<h2>Actualizar Registro</h2>
	<form action="procesaAct.php" method="POST">
	<p>¿Cuál registro deseas actualizar?</p>
	<select name="id">
	<?php
		$usuario = 'root';
		$pass = '';
		$link=mysql_connect("127.0.0.1",$usuario, $pass);
		if($link){
			if(mysql_select_db("miDirectorio")){
				$query = "select id,nombre from directorio";
				//echo $query;
				if($result=mysql_query($query,$link)){
					$renglones = mysql_numrows($result);
					if($renglones > 0){
				
						for ($i=0;$i<$renglones;$i++){
							$id = mysql_result($result, $i, "id");
							$nombre = mysql_result($result, $i, "nombre");
							echo "<option value='$id'>$id - $nombre</option>";
						}
					}
				}
			}else{
				echo "<option value='Error!!'>'Error!!'</option>";
			}
		}
		
	?>
	</select>
	<input type=hidden name='origen' value='formUpdate'>
	<input type="submit" value="Actualizar">
	</form>
	
	<a href="Menu.html">Volver al menú </a>
</body>
</html>