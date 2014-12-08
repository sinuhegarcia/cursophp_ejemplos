<?php
class Persona{
	private $nombre;
	private $edad;
	
	public function __construct($nom,$ed){
		$this->nombre=$nom;
		$this->edad=$ed;
	}
	public function inicializar($nom, $ed){
		$this->nombre=$nom;
		$this->edad=$ed;
	}
	
	public function imprimir(){
		echo $this->nombre.' tiene la edad de '.$this->edad.'<br>';
	}
	
	
}

$persona1 = new Persona('','');
$persona1->inicializar('Antonio',18);

$persona2 = new Persona('','');
$persona2->inicializar('Rita',17);

$persona1->imprimir();
$persona2->imprimir();

$persona3 = new Persona('Luis',20);
$persona3->imprimir();


?>