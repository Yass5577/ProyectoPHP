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
		//foreach ($persona as $clave => $valor) {
		//	echo $clave." => " . $valor."<br>";
		//}
		//while (list($clave, $valor) = each($persona))
		//	echo $clave." => " . $valor."<br>";
		while (list($clave, $valor) = each($asociativo))
			echo($asociativo[$clave])."<br>";
		while (list($clave, $valor) = each($persona))
			echo($persona[$clave])."<br>";
		//var_dump
		//var_dump($persona);
		//echo "<br>****************<br>";
		//print_r
		//print_r($persona);
		//echo "<br>****************<br>";
		//echo($persona["nif"]); //imprime nif de persona
		?>
	</body>
</html>