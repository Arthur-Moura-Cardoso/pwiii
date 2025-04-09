<?php
	$nome = "julia";
    $salario_fixo = 5;
    $total_vendas = 10;

    $salario_final = $salario_fixo + $total_vendas + ($total_vendas * 0.15);

    echo "<p> Seu nome é: ", $nome, "</p>" ;
    echo "<p> Seu salário fixo é R$: ", $salario_fixo, "</p>";
    echo "<p> Seu salário ao final do mês é R$: ", $salario_final, "</p>";
    
?>