<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora </title>
</head>
<body>
    <h1>Calculadora - Comissão de Vendas</h1>

    <form method="post">
        <label for="num_carro">Número de carros vendidos ao mês: </label>
        <input type="number" name="num_carro" id="num_carro" required><br><br>

        <label for="salario">Salário fixo:</label>
        <input type="number" name="salario" id="salario" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $Numero_carro= $_POST['num_carro'];
        $Salario_fixo = $_POST['salario'];

        $Comissao_vendas = ($Numero_carro * 0.15);
        $Salario_final = $Salario_fixo + $Comissao_vendas + ($Comissao_vendas * 0.05);

        echo "<h2>O salário final é: $Salario_final  reais </h2>";
    }
    ?>

</body>
</html>