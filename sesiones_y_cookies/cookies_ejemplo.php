<?php
if(isset($_COOKIE['contador'])){
	//Caduca en una año
	setcookie('contador',$_COOKIE['contador']+1,time()+365*24*60*60);
	$mensaje = 'Numero de visitas: '.$_COOKIE['contador'];
}
else{
	//Caduca en un año
	//Con el metodo setcookie, se crea una cookie
	//setcookie(nombre,valor,tiempo de vida en segundos);
	setcookie('contador',1,time()+365*24*60*60);
	$mensaje = 'Bienvenido a nuestra pagina web';
}

//Los cookies de nuestra pagina son accesibles mediante $_COOKIE
//$_REQUEST accesder a los datos del $_POST , $_GET y $_COOKIE
?>
<!DOCTYPE html>
<html>
<head><title>Ejemplo cookies</title></head>

<body>
	<p><?php echo $mensaje;?></P>
</body>
</html>