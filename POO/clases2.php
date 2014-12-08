<?php
class MediosDeTransporte{
	protected $nombre;
	protected $numPasajeros;
	public static $unValor;
	
	
	public function setNombre($nombre){
		$this->nombre=$nombre;
	}
	public function setNumPasajeros($num){
		$this->numPasajeros=$num;
	}
	
	public static function unMetodoEstatico(){
		echo "Este es un m[etodo estatico<br>";
	}
	
	public function describe(){
		echo 'Este medio de transporte se llama '.$this->nombre.'<br>';
		echo 'El numero de pasajeros es: '.$this->numPasajeros.'<br>';
	}
}

class TransporteAereo extends MediosDeTransporte{
	public function despegar(){
		echo 'El '.$this->nombre.' esta despegando...<br>';
	}
	public function volar(){
		echo 'El '.$this->nombre.' esta volando...<br>';
	}
	public function aterrizar(){
		echo 'El '.$this->nombre.' esta aterrizando...<br>';
	}
	public function describe(){
		parent::describe();
		echo 'Este medio de transporte puede volar<br>';
	}
}
class TransporteTerrestre extends MediosDeTransporte{
	protected $ruedas;
	
	public function __construct($nombre, $num, $rued){
		parent::setNombre($nombre);
		parent::setNumPasajeros($num);
		$this->ruedas = $rued;
	}
	
	public function avanzar(){
		echo $this->nombre.' esta avanzando...<br>';
	}
	public function parar(){
		echo $this->nombre.' se detuvo...<br>';
	}
	public function describe(){
		parent::describe();
		echo $this->nombre.' es de tipo terrestre y se mueve sobre la superficie terrestre<br>';
		echo 'Posee '.$this->ruedas.'<br>';
	}
}
class TransporteAcuatico extends MediosDeTransporte implements Mensaje{

	public function mensaje($msg){
		echo $msg.'<br>';
	}
}

interface Mensaje{
	public function mensaje($msg);
}

$avion = new TransporteAereo();
$avion->setNombre("Avion");
$avion->setNumPasajeros(100);
$avion->describe();
$avion->despegar();
$avion->volar();
$avion->aterrizar();

echo '<br><br>';

$bicicleta = new TransporteTerrestre('Bicicleta',1,2);
$bicicleta->describe();
$bicicleta->avanzar();
$bicicleta->parar();

//InstanceOf
if($bicicleta instanceof TransporteAereo){
	echo "bicileta es un transporte aereo<br>";
}
else if($bicicleta instanceof Transporteterrestre){
	echo "bicicleta es un transporte terrestre<br>";
}

//La palabra final en un método, hace que un método no se pueda sobreescribir
//La palabra final en una clase, hace que una clase no pueda tener subclases
 class Patineta extends TransporteTerrestre{
	public final function miMetodo(){
	
	}
}

//Metodos y variables estáticas
MediosDeTransporte::$unValor=34;
echo "El valor estatico de unValor de la clase MediosDeTransporte es ".MediosDeTransporte::$unValor.'<br>';
MediosDeTransporte::unMetodoEstatico();
?>

<h2>Encuesta</h2>
<a href="http://goo.gl/p3t34">Enlace a la encuesta</a><br>

<h2>Datos personales</h2>
<ul>
	<li>Sinuhe Garcia Martinez</li>
	<li>asgardodinmx@gmail.com</li>
	<li>Twitter @sgmladai</li>
</ul>
