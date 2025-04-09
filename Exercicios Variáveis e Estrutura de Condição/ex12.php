<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário e Reajuste</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h1 {
            text-align: center;
            color: #603b74 ;
        }

        label {
            font-size: 16px;
            margin-bottom: 8px;
            display: block;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #a091c3;
            border: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #603b74;
        }

        h2 {
            text-align: center;
            color: #333;
            font-size: 20px;
            margin-top: 20px;
        }

        .alert {
            color: red;
            text-align: center;
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Salário e Reajuste</h1>

        <form method="post">
            <label for="salario">Salário Atual: </label>
            <input type="number" name="salario" id="salario" required><br>

            <label for="porcentagem">Reajuste em Porcentagem: </label>
            <input type="number" name="porcentagem" id="porcentagem" required><br>

            <input type="submit" value="Calcular">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $Salario = $_POST['salario'];
            $Porcentagem = $_POST['porcentagem'];

                $Salario_Atual = $Salario + (($Salario * $Porcentagem) / 100);
                echo "<h2> Seu salário após o reajuste é R$: $Salario_Atual </h2>";
 
        }
        ?>

    </div>
</body>
</html>
