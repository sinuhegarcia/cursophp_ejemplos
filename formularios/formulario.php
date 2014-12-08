<html>
<head><title>Formulario</title></head>
<body>
	<form action="procesa.php" method="GET">
		Nombre:<input type="text" name="nombre"><br>
		Estado Civil:<br>
		<input type="radio" name="edo_civ" value="1">Soltero<br>
		<input type="radio" name="edo_civ" value="2">Casado<br>
		Mensaje<br>
		<textarea name="mensaje">
		Inserta tu mensaje
		</textarea><br>
	
		Equipo: <select name = "equipo" >
		<option value="PUMAS">PUMAS
		<option value="CHIVAS" selected>CHIVAS
		<option value="CRUZ AZUL">CRUZ AZUL
	</select><br>

	<input type="submit" value="Enviar">
	
	</form>
</body>
</html>