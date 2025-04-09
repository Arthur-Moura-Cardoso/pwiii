<?php

    $numero = 50;
    $numero1 = $numero;
    $numero2 = $numero;
    echo "Números pares: ";
    while($numero1>0){
        if($numero1%2==0){
            echo $numero1,  " ";
            
        }
        $numero1--;
    }
    echo "\n Números impares: ";
    while($numero2>0){
        if($numero2%2>0){
            echo $numero2,  " ";
            
        }
        $numero2--;
    }

?>