<?php
	$valor_Um = 200;
	$valor_Dois = 150;

	$desconto_Um = ($valor_Um/100) * 5 ;
	$desconto_Dois = ($valor_Dois/100) *50 ;
	
	echo "<p> 5% do valor informado corresponde a: ", $desconto_Um, "</p>";
    echo "<p> 50% do valor informado corresponde a: ", $desconto_Dois, "</p>";
?>