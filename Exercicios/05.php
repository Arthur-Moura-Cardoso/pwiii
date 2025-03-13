<?php

    $altura = 165;
    $altura = $altura / 100 //tranforma (m) em (cm)
    $peso = 60;
    $imc = $peso / ($altura*$altura);

    echo "O resultado do seu imc foi :", $imc;
?>