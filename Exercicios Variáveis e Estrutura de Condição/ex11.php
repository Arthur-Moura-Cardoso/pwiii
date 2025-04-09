<?php
	$total_votos = 150;
    $votos_brancos= 5;
    $votos_nulos = 20;
    $votos_validos = 15;

    $Percentual_votos_brancos = $votos_brancos * 100/ $total_votos; 
    $Percentual_votos_nulos = $votos_nulos * 100 / $total_votos;
    $Percentual_votos_validos = $votos_validos * 100 / $total_votos;

    echo "<p> O total de eleitores é: ", $total_votos , "</p>",
         "<p> Os votos brancos correspondem a: ", $Percentual_votos_brancos , "%", "</p>", 
         "<p> Os votos nulos correspondem a: ", $Percentual_votos_nulos , "%" , "</p>",
         "<p> Os votos válidos correspondem a: ", $Percentual_votos_validos , "%" , "</p>";
    
    
    

?>