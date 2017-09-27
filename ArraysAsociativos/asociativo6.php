<html>
	
	<head>
		<title>Primeros pasos con PHP</title>
	</head>
	<body>
		
		<?php 
		/*$num = count($asociativo);
		echo "numero de elementos: ".$num;
		*/
		//Recorrer el asociativo "SERVER"
		//for($i=0; $i<count($asociativo); $i++)
		//	print $asociativo[$i]; "<br>";

		//Recorrer el asociativo "SERVER"
		foreach ($_SERVER as $clave => $valor) {
		echo $clave." => " . $valor."<br>";
		}
		//while (list($clave, $valor) = each($_SERVER))
		//	echo $clave." => " . $valor."<br>";
		
		
		?>
	</body>
</html>