<?php
$titulo="Mi generador html";
?>
<html>
<head><title><?php echo $titulo;?></title></head>
<body>
<?php
$tituloPagina="Titulo de la pagina";
$subtitulo="Subtitulo";

echo titulo($tituloPagina);
echo subtitulo($subtitulo);
echo subtitulo("Otro subtitulo");

$colores = array("rojo","negro","blanco","azul");
lista($colores);

function titulo($text){
	echo "<h1>".$text."</h1>";
}
function subtitulo($text){
	echo "<h2>".$text."</h2>";
}
function lista($array){
	

	for ($i = 0; $i<count($array);$i++){
		echo "<li>".$array[$i]."</li>";
	}
}
?>
</body>
</html>