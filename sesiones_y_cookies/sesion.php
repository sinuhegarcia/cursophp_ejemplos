<?php
session_start();
if(isset($_SESSION['contador'])){
	$_SESSION['contador'] = $_SESSION['contador'] + 1;
	$mensaje = 'Numero de visitas: '.$_SESSION['contador'];
}
else{
	$_SESSION['contador']=1;
	$mensaje = 'Bienvenido a nuestra pagina web';	
}

?>

<!DOCTYPE html>
<html>
<head><title>Ejemplo cookies</title></head>

<body>
	<p><?php echo $mensaje;?></P>
	<a href="fin_sesion.php">Finalizar</a>
</body>
</html>