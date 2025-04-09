<?php
	$valor_carro = 100;
    $porcentagem_distribuidor= $valor_carro * 0.28;
    $imposto = $valor_carro * 0.45;
   
    $valor_final_carro = $valor_carro - ($porcentagem_distribuidor + $imposto );

  
    echo "<p> O valor do carro ao consumidor é: ", $valor_final_carro, "</p>";
    

?>