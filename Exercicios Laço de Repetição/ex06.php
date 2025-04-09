<?php

do {
    echo "Digite a nota da primiera avaliação: ";
    $nota_um = floatval(fgets(STDIN));
} while ($nota_um < 0 || $nota_um > 10);


do {
    echo "Digite a nota da prova avaliação: ";
    $nota_dois = floatval(fgets(STDIN));
} while ($nota_dois < 0 || $nota_dois > 10);


$media_final = ($nota_um + $nota_dois) / 2;


echo "A média do aluno é: " . number_format($media_final, 2) . "\n";


echo "Deseja fazer um novo cálculo (S/N)? ";
    $resposta = strtoupper(trim(fgets(STDIN)));
    while ($resposta == 'S');

echo "Programa encerrado.\n";
?>



