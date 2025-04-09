<?php
do {
    $valor_tabuada = (int)readline("Digite um valor entre 1 e 10: ");
} while ($valor_tabuada < 1 || $valor_tabuada > 10);

echo "Tabuada do $valor_tabuada: \n";
for ($i = 1; $i <= 10; $i++) {
    echo "$valor_tabuada x $i = " . ($valor_tabuada * $i) . "\n";
}
?>
