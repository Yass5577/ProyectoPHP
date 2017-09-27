<html>


<?php
//array
$visitantes = array (
    $meses = array('ENERO','FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO','AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'),
    $islas = array('GRAN CANARIA', 'TENERIFE', 'FUERTEVENTURA', 'LANZAROTE', 'LA PALMA', 'LA GOMERA', 'EL HIERRO' ),
    $grancanaria = array('396.418','354.409', '382.164', '311.729', '267.345', '276.614', '357.816', '352.039', '304.653', '407.125', '399.076', '414.291'),
    $tenerife = array('470.980','461.482', '522.213', '477.573', '414.506', '424.357', '520.278', '505.127', '451.926', '509.210', '484.987', '527.353'),
    $fuerteventura = array('182.791','184.005', '204.914', '189.184', '170.387', '167.083', '214.111', '205.071', '173.579', '218.619', '189.267', '188.639'),
    $lanzarote = array('209.529','226.621', '263.829', '232.550', '209.171', '218.963', '263.014', '269.088', '244.539', '278.437', '251.939', '248.047'),
    $lapalma = array('29.640','27.053', '41.951', '25.613', '19.739', '17.459', '19.470', '25.126', '27.276', '25.571', '47.819', '34.254'),
    $lagomera = array('no consta','no consta', 'no consta', 'no consta', 'no consta', 'no consta', 'no consta', 'no consta', 'no consta', 'no consta', 'no consta', 'no consta'),
    $elhierro = array('no consta','no consta', 'no consta', 'no consta', 'no consta', 'no consta', 'no consta', 'no consta', 'no consta', 'no consta', 'no consta', 'no consta'),
    $estadistica = array($grancanaria, $tenerife, $fuerteventura, $lanzarote, $lapalma, $lagomera, $elhierro),
);
?>

    <head>
        <title>Estadística de Visitantes a Canarias</title>
    </head>
    <body>
        <h1>AÑO 2016</h1> 
            <H2>ESTADÍSTICA DE VISITANTES A CANARIAS</h2>
       
       <table border="1" width="60%" cellspacing="0">
        
        <TH>ISLAS</TH><TH>ENERO</TH> <TH>FEBRERO</TH> <TH>MARZO</TH><TH>ABRIL</TH> <TH>MAYO</TH> <TH>JUNIO</TH><TH>JULIO</TH> <TH>AGOSTO</TH> <TH>SEPTIEMBRE</TH><TH>OCTUBRE</TH> <TH>NOVIEMBRE</TH> <TH>DICIEMBRE</TH>
            <?php  
            foreach ($estadistica as $fila){
                echo "<tr><td>prueba</td>" ;
                foreach ($fila as $celda){
                    echo "<td> $celda </td>";
                }

                echo "</tr>";
            }
            

            ?>
        </table>
    </body>
</html>