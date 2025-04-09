<?php
$contador = 0;
$maior_numero = null;

while ($contador < 10) {
    $contador++;
    echo "Digite o número $contador: ";
    $numero = floatval(trim(fgets(STDIN)));

    if ($maior_numero === null || $numero > $maior_numero) {
        $maior_numero = $numero;
    }
}

echo "O maior número digitado foi: " . $maior_numero . "\n";
?>