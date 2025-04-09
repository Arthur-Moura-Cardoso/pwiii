<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Idade em Dias</title>
</head>
<body>
    <h1>Calcular o custo da viagem</h1>
    <h3> Informe as seguintes informações do seu carro:</h3>

    <form method="post">
        <label for="km/l">Km/L:</label>
        <input type="number" name="km/l" id="km/l" required><br><br>

        <label for="distancia">Distância Percorrida: </label>
        <input type="number" name="distancia" id="distancia" required><br><br>

        <label for="preco">Preço Unitário do Combustível:</label>
        <input type="number"  step="0.01" name="preco" id="preco" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $Km_L = $_POST['km/l'];
        $Distancia_Percorrida = $_POST['distancia'];
        $Preco_Combustivel = $_POST['preco'];

        $custo_total = $Distancia_Percorrida/ $Km_L * $Preco_Combustivel;

        echo "<h2>O custo da sua viagem é R$: $custo_total </h2>";
    }
    ?>

</body>
</html