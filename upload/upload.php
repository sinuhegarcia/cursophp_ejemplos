<?php
if(isset($_FILES['photoUp'])!=null){
	echo "Existe photoUp<br>";
	$size=$_FILES['photoUp']['size'];
	$type=$_FILES['photoUp']['type'];
	$name=$_FILES['photoUp']['name'];
	
	$otroNombre = $_POST['otroNombre'];
	
	$path = "fotos/$name";//Ruta donde se guardara la imagen
	echo 'Nombre:'.$name.'<br>';
	echo 'Tamanyo:'.$size.'<br>';
	echo 'Tipo:'.$type.'<br>';
	

	if($type=="image/jpeg" OR $type=="image/png" OR $type=="image/gif"){
		if(file_exists($path)){
			echo "Este archivo ya existe <br>";
			$path = "fotos/".$_POST['otroNombre'];
			echo 'path='.$path.'<br>';
		}
		
		if(move_uploaded_file($_FILES['photoUp']['tmp_name'],$path)){
			echo "El archivo $path se ha cargado satisfactoriamente<br>";
		}else{ 
			echo "Ocurrio un erro al copiar el archivo<br>";
		}
	}else{
		echo "El formato del archivo no es correcto, debe ser JPEG, GIF o PNG<br>";
	}
	
}else{
	echo "Intenta cargar de nuevo tu archivo <br>";
	echo "<a href='formUpload.html'>Cargar de nuevo</a>";
}
?>

<?php
		$miArray  = array("uno","dos", "tres", "cuatro");
		echo "Array(0)=".$miArray[0];
		$miArray2 = array(
		array("Volvo",22,18),
		array("BMW",15,13),
		array("Land Rover", 5,2)
		);
		 
		echo "Nombre".$miArray2[0][0].'<br>';
		
		
		
?>