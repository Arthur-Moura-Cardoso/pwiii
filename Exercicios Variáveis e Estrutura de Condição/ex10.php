<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Idade em Dias</title>
</head>
<body>
    <h1>Calculadora de Idade em Dias</h1>

    <form method="post">
        <label for="anos">Anos:</label>
        <input type="number" name="anos" id="anos" required><br><br>

        <label for="meses">Meses:</label>
        <input type="number" name="meses" id="meses" required><br><br>

        <label for="dias">Dias:</label>
        <input type="number" name="dias" id="dias" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $anos = $_POST['anos'];
        $meses = $_POST['meses'];
        $dias = $_POST['dias'];

        $dias_totais = ($anos * 365) + ($meses * 30) + $dias;

        echo "<h2>A idade total em dias é: $dias_totais dias</h2>";
    }
    ?>

</body>
</html>
