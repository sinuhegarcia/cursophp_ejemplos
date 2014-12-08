<?php
//Definimos la codificacion de la cabecera
header('Content-Type: text/html; charset:utf-8');
//importamos el archivo de las validaciones
include 'funciones/validaciones.php';
//Guarda valores de los campos 
$nombre = isset($_POST['nombre'])? $_POST['nombre']: null;
$edad = isset($_POST['edad'])? $_POST['edad']:null;
$email = isset($_POST['email'])? $_POST['email'] : null;

//Este array guardara los errores de validacion que surjan.
$errores = array();
//PRegunta si esta llegando una peticion por POST
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	//echo "Se envio por metodo POST $nombre, $edad, $email";
	//Valida que el campo del nombre no este vacio
	//include 'funciones.php';
	if(!validaRequerido($nombre)){
		$errores[] = 'El campo nombre es incorrecto';
	}

	//Valida la edad en un rango de 3 a 130 años
	$opciones_edad = array('options'=>array('min_range'=>30, 'max_range'=>130));
	if(!validaEntero($edad,$opciones_edad)){
		$errores[] = 'El campo de edad es incorrecto';
	}

	//Valida que el email sea correcto
	if(!validaEmail($email)){
		$errores[] = 'El campo email es incorrecto';
	}

	//Verifica que se han encontrado errores
	if(!$errores){
		header('Location: validado.php');
		exit;
	}

}

?>
<html>
	<head>
		<title>Formulario</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<?php if($errores):?>
		<ul style='color: #f00;'>
			<?php foreach ($errores as $error):?>
			<li><?php echo $error?></li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
		
		<form method="post" action="index.php">
			<label>Nombre:</label><br>
			<input type="text" name="nombre" value=<?php echo "'$nombre'"?>/><br>
			<label>Edad:</label><br>
			<input type="text" name="edad" size="3" value=<?php echo "'$edad'"?> /><br>
			<label>Email:</label><br>
			<input type="text" name="email" value=<?php echo "'$email'"?> /><br> 
			<input type="submit" value="Enviar" />
		</form>
	</body>
</html>