<?php
//  la clave del jugador es el dorsal...
$clubs = array(array("nombre" => "Real Madrid","jugadores" => array("1" =>"Casillas","18" =>"Albiol","12" =>"Marcelo","3" =>"Pepe","4" =>"Sergio Ramos","22" =>"Di Maria","6" =>"Khedira","14" =>"Xabi Alonso")),
               array("nombre" => "Barcelona FC","jugadores" => array("1" => "Valdes", "18" => "Jordi Alba","10" =>"Messi","4" =>"Cesc Fabregas",
               "17" =>"Pedro","3" => "Pique", "16" => "Sergi Busquets")),
			   array("nombre" => "Atletico de Madrid","jugadores" => array("1" =>"Sergio Asenjo","3" =>"Filipe Luis","20" =>"Juanfran","17" =>"Silvio",
			          "21" =>"Emre","14" =>"Gabi","6" =>"Koke","9" =>"Falcao")));
echo "CONSULTA DE JUGADORES DE PRIMERA DIVISION";
$html = "<form action='".$_SERVER['PHP_SELF']."' method='post'>";


  $html .= "<select name='club'>";
			   foreach($clubs as $indice => $club)
			   {
		         $selected ="";
				if ($indice == $_POST['club']) 
				{
				  
				   $selected = " selected ";
			    }
			    $html .= "<option  $selected value='$indice'".">".$club['nombre']."</option>\n";
			   }
			   $html .= "</select>";
			   $html .= "<input type='submit' value='enviar' name='boton'>";
			   $html .= "</form>";
			   echo $html;

if (isset($_POST['boton']))
{
   		foreach ($clubs[$_POST['club']]['jugadores'] as $jugador)
   		{
 			echo "$jugador<br/>";
   		}
}

?>
