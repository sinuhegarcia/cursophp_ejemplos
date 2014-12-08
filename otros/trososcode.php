<html>
	<head><title>Prueba</title></head>
	
	<body>
		<?php
			$activado = false;
		?>
		
		<p>Hola</p>
		
		<?php
			if($activado){
		?>
		<p> El dispositivo esta <b>activado</b> </p>
		
		<?php
		}
		else{
		?>
			<p> El dispositivo esta <b>desactivado</b> </p>
		<?php
		}
		?>
	</body>
</html>