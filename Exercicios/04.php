<?php
	$valor_um = 4;
    $valor_dois = 10;

    function calculaQuadrado($num) {
        $num = $num * $num;
        return $num;
    };

    $soma_quadrado = calculaQuadrado($valor_um) + calculaQuadrado($valor_dois);
 	
	echo "A soma dos quadrados corresponde a: ", $soma_quadrado;
?>