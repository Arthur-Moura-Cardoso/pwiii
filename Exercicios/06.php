<?php
	$valor_prod = 200;

	$desconto_prod = ($valor_prod/100) * 7 ;

    $valor_final = $valor_prod - $desconto_prod;
	
	echo "<p> O valor do produto é de: ", $valor_prod, "</p>";
    echo "<p> O desconto sera de : ", $desconto_prod, "</p>";
    echo "<p> O valor final sera de : ", $valor_final, "</p>";
?>