<?php
define("VALOR_INVALIDO", "VALOR INVÁLIDO");

do {
    echo "Digite o primeiro valor: ";
    $valor1 = floatval(fgets(STDIN));

    echo "Digite o segundo valor: ";
    $valor2 = floatval(fgets(STDIN));

    if ($valor2 == 0) {
        echo VALOR_INVALIDO . ". O segundo valor não pode ser zero.\n";
    }
} while ($valor2 == 0);


$resultado = $valor1 / $valor2;
echo "Resultado da divisão: " . $resultado . "\n";
?>
