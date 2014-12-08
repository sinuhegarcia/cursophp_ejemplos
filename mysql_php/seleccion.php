<?php
$proceso = $_POST["proceso"];
echo "Proceso".$proceso."<br>";
switch($proceso){
case 1:
	formAlta();
	break;
case 2:
	formBaja();
	break;
case 3:
	actualizar();
	break;
case 4:
	borrar();
	break;
case 5:
	listar();
	break;
}

function formAlta(){
	header("Location:formAlta.php");
}
function listar(){
	header("Location:listar.php");
}
function actualizar(){
	header("Location:formUpdate.php");
}
function formBaja(){
	header("Location:formBaja.php");
}
function borrar(){
	header("location:borrar.php");
}

?>