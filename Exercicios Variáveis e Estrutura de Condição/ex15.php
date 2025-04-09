<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Peso Ideal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        form {
            margin: 20px auto;
            padding: 20px;
            width: 300px;
            border: 1px solid #9c225d;
            border-radius: 5px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid  #9c225d;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #db3082;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: # #db3082;
        }
    </style>
</head>
<body>

    <h1>Calcular Peso Ideal</h1>

    <form method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" required><br>

        <label for="altura">Altura (em metros):</label><br>
        <input type="number" name="altura" id="altura" step="0.01" required><br>

        <label for="sexo">Sexo:</label><br>
        <select name="sexo" id="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $altura = $_POST['altura'];
        $sexo = $_POST['sexo'];

        if ($sexo == 'M') {
            $peso_ideal = (72.7 * $altura) - 58;
        } elseif ($sexo == 'F') {
            $peso_ideal = (62.1 * $altura) - 44.7;
        }

        echo "<h2>O peso ideal de $nome é: " . number_format($peso_ideal, 2, ',', '.') . " kg</h2>";
    }
    ?>

</body>
</html>
