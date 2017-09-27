<html>

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

//función visitantes isla
function visitantesIsla($isla){
    global $visitantesCanarias;
    $acumulado=0;
    for ($i=0; $i< count($visitantesCanarias[$isla]);$i++)
    {
          $acumulado+=$visitantesCanarias[$isla][$i];
          echo $visitantesCanarias[$isla][$i]."<br>";
    }
    return $acumulado;
}

$isla=2; // fuerteventura
echo "Suma anual de Visitantes a la isla ". $islas[$isla]. " = ". visitantesIsla($isla);

?>
</body>
</html>
