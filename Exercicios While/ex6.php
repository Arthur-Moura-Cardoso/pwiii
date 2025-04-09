<?php
$contador = 0;
$maior1 = null;
$maior2 = null;

while ($contador < 10) {
    $contador++;
    echo "Digite o número $contador: ";
    $numero = floatval(trim(fgets(STDIN)));

    if ($maior1 === null || $numero > $maior1) {
        $maior2 = $maior1;
        $maior1 = $numero;
    } elseif ($maior2 === null || $numero > $maior2) {
        $maior2 = $numero;
    }
}

if ($maior1 !== null && $maior2 !== null) {
    echo "Os dois maiores números digitados foram: $maior1 e $maior2\n";
} else {
    echo "Nenhum número válido foi digitado.\n";
}
?>