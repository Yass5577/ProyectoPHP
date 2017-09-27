<!DOCTYPE html>
<html lang="es">

<head>
        <title>Estadística de Visitantes a Canarias</title>
    </head>
<body>
<?php
$meses = array("ENERO", "FEBRERO", "MARZO", "ABRIL",
           "MAYO", "JUNIO","JULIO", "AGOSTO","SETIEMBRE", "OCTUBRE",
           "NOVIEMBRE", "DICIEMBRE");
$islas = array("Gran Canaria","Lanzarote", "Fuerteventura",
"Tenerife","La Palma","Gomera" ,"El Hierro");
$visitantesCanarias = array(
     array(10,12,13,11,10,15,12,11,9,14,12,11),
     array(10,12,13,11,10,15,12,11,9,14,12,11),
     array(10,12,13,11,10,15,12,11,9,14,12,11),
     array(10,12,13,11,10,15,12,11,9,14,12,11),
     array(10,12,13,11,10,15,12,11,9,14,12,11),
     array(10,12,13,11,10,15,12,11,9,14,12,11),
     array(10,12,13,11,10,15,12,11,9,14,12,11)
);

//función visitantes mes
function visitantesMes($mes){
global $visitantesCanarias;
    $acumulado=0;
    for ($i=0; $i< count($visitantesCanarias);$i++)
    {
          $acumulado+=$visitantesCanarias[$i][$mes];
          echo $visitantesCanarias[$i][$mes]."<br>";
    }
    return $acumulado;
}

$mes=2; // marzo
echo "Suma de Visitantes al mes de ". $meses[$mes]. " = ". visitantesMes($mes);

?>
</body>
</html>
