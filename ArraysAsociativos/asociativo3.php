<html>
	<?php
	//codigo PHP
	$asociativo = array(123, "123", true, 12.3);
	$persona = array("nif" => "45623891J", "nombre" =>"Pedro", "peso" => 76);

	?>
	<head>
		<title>Primeros pasos con PHP</title>
	</head>
	<body>
		<center> PRIMEROS PASOS CON PHP </center>
		<?php 
		/*$num = count($asociativo);
		echo "numero de elementos: ".$num;
		*/
		//Recorrer el asociativo "asociativo"
		//for($i=0; $i<count($asociativo); $i++)
		//	print $asociativo[$i]; "<br>";

		//Recorrer el asociativo "persona"
		foreach ($persona as $clave => $valor) {
			echo $clave." => " . $valor."<br>";
		}
		?>
	</body>
</html>