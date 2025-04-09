<?php

echo "Quantos alunos tem na sala? ";
$num_alunos = intval(trim(fgets(STDIN)));

$soma_notas = 0;
$contador = 0;

while ($contador < $num_alunos) {
    $contador++;
    echo "Digite a nota do aluno $contador: ";
    $nota = floatval(trim(fgets(STDIN)));
    $soma_notas += $nota;
}

$media = $soma_notas / $num_alunos;

echo "A média aritmética da turma é: " . number_format($media, 2) . "\n";
?>