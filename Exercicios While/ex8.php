<?php
echo "Digite o tamanho do lado do quadrado (entre 1 e 20): ";
$tamanho = intval(trim(fgets(STDIN)));

if ($tamanho < 1 || $tamanho > 20) {
    echo "Por favor, digite um número entre 1 e 20.\n";
} else {
    $i = 0;

    while ($i < $tamanho) {
        $j = 0;

        if ($i == 0 || $i == $tamanho - 1) {
            while ($j < $tamanho) {
                echo "*";
                $j++;
            }
        } else {
            echo "*";
            while ($j < $tamanho - 2) {
                echo " ";
                $j++;
            }
            echo "*";
        }

        echo "\n";
        $i++;
    }
}
?>