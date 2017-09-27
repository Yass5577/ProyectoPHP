<html>
<?php
//codigo PHP
$asociativo = array(123, "123", true, 12.3);

?>
	<head>
		<title>Primeros pasos con PHP</title>
	</head>
	<body>
	<center> PRIMEROS PASOS CON PHP </center>
	<?php 
	$num = count($asociativo);
	echo "numero de elementos: ".$num;
?>
	</body>
</html>