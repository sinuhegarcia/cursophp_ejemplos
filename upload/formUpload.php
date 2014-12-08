<html>
<head><title>Formulario Upload </title></head>
<body>
	
	<form enctype="multipart/form-data" action="upload.php" method="POST">
	<p>Selecciona una imagen para cargar en el servidor (PNG/GIF/JPEG)</p>
	Nombre en caso de que ya exista el archivo en el servidor:<br>
	<input type="text" name="otroNombre"><br>
	<input type="file" name="photoUp"><br>
	<input type="submit" value="Cargar archivo">
	</form>	
</body>

</html>