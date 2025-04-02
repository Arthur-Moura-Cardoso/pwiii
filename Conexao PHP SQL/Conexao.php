<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "livraria";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

// CREATE (Criar)
if (isset($_POST['criar'])) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $endereco = $_POST['endereco'];

  $sql = "INSERT INTO clientes (nome, email, endereco) VALUES ('$nome', '$email', '$endereco')";

  if ($conn->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso <br>";
  } else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
  }
}

// READ (Ler)
$sql = "SELECT id, nome, email, endereco FROM clientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<h2>Clientes:</h2>";
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. " - Endereço: " . $row["endereco"]. "<br>";
  }
} else {
  echo "0 resultados <br>";
}

// UPDATE (Atualizar)
if (isset($_POST['atualizar'])) {
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $endereco = $_POST['endereco'];

  $sql = "UPDATE clientes SET nome='$nome', email='$email', endereco='$endereco' WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    echo "Registro atualizado com sucesso";
  } else {
    echo "Erro ao atualizar registro: " . $conn->error;
  }
}

// DELETE (deletar)
if (isset($_GET['deletar'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM clientes WHERE id=$id";

  
  if ($conn->query($sql) === TRUE) {
    echo "Registro deletado com sucesso";
  } else {
    echo "Erro ao deletar registro: " . $conn->error;
  }
}

$conn->close();
?>

<!-- <h2>Deletar Cliente</h2>
<form method="get">
  ID: <input type="number" name="id"><br>
  <input type="submit" name="deletar" value="deletar">
</form>




<h2>Criar Cliente</h2>
<form method="post">
  Nome: <input type="text" name="nome"><br>
  Email: <input type="email" name="email"><br>
  Endereço: <input type="text" name="endereco"><br>
  <input type="submit" name="criar" value="Criar">
</form>

<h2>Atualizar Cliente</h2>
<form method="post">
  ID: <input type="number" name="id"><br>
  Nome: <input type="text" name="nome"><br>
  Email: <input type="email" name="email"><br>
  Endereço: <input type="text" name="endereco"><br>
  <input type="submit" name="atualizar" value="Atualizar">
</form> -->

<body>
    
<div class="container">
        <div class="containerLeft">
        <img class="image" src="Investment data-amico.png" alt="">
        </div>

        <div class="containerRight">
            <div class="formulario">
                <h1 class="login">Criar Usuário</h1>
                <form method="post">
                    <input class="texto" type="text" name="nome" placeholder="Nome">
                    <input class="texto" type="email" name="email" placeholder="Email">
                    <input class="texto" type="text" name="endereco" placeholder="Endereço">
                    <input class="enviar" type="submit" name="criar" value="Enviar">
                </form>
            </div>
        </div>
</div>

</body>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400;500;600;700;800&display=swap');

body{
    background-color: rgb(37, 37, 37);
}

.image{
    width: 500px;
    height: 500px;
}

.containerLeft{
    border-radius: 40px;
    padding: 70px 60px;
    display: flex;
    justify-content: center;
    align-items: center;

}

.containerRight{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.container{
    margin-top: 16vh;
    display: flex;
    justify-content: space-around;
}

form{
    gap: 50px;
    display: flex;
    flex-direction: column;
}

.formulario{
    border-radius: 40px;
    padding: 70px 60px;
    background-color: rgb(27, 27, 27);
}

.texto{
    border: 0;
    border-radius: 10px;
    width: 200px;
    height: 55px;
    outline: 0;
    padding-left: 10px;
    font-family: 'Wix Madefor Display', sans-serif;
}

.texto::placeholder{
    color: rgb(0, 0, 0);
}

.enviar{
    width: 100px;
    height: 55px;
    border-radius: 10px;
    font-family: 'Wix Madefor Display', sans-serif;
    border: 0;
    transition: 0.5s;
    background-color: rgb(255, 255, 255);
}

.login{
    color: white;
    margin-bottom: 50px;
    font-family: 'Wix Madefor Display', sans-serif;
}

.enviar:hover{
    background-color: rgb(165, 165, 165);
}
  </style>