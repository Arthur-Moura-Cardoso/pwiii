<?php
	$valor_A = 100;
    $valor_B = 5;

    $valor_Auxiliar = $valor_B;
    $valor_B = $valor_A;
    $valor_A = $valor_Auxiliar;

    echo "<p> Variável 1: ", $valor_A, "</p>";
    echo "<p> Variável 2: ", $valor_B, "</p>";

    


?>
