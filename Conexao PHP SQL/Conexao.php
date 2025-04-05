<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MySql PHP</title>
  <link rel="stylesheet" href="style.css" defer>
</head>
<body>
  <h1>Consulta MySQL com PHP</h1>
  <button class="btn_limpar" onclick="limparResultado()" >Limpar Resultado</button>
  
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Lista_usuarios";

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

      $sql = "INSERT INTO Usuarios (nome, email, endereco) VALUES ('$nome', '$email', '$endereco')";

      if ($conn->query($sql) === TRUE) {
        echo "
        
        <div class='search-result'>
          <p class'alerta_text'>Usuario cadastrado com sucesso</p>
        </div>";
      } else {
        echo "
        
        <div class='search-result'>
          <p class='alerta_text'>Erro: " . $sql . $conn->error. " </p>
        </div>";
      }
    }

    // READ (Ler)
    
    if(isset($_POST['procurar'])) {
      
      if(count($_POST) > 1){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        
        $sql = "SELECT id, nome, email, endereco FROM Usuarios WHERE id='$id' OR nome='$nome' OR email='$email' OR endereco='$endereco'";
        $result = $conn->query($sql);
        if ($result === false) {
          echo "
          
          <div class='search-result'>
            <p class='alerta_text'>Erro ao consultar: " . $sql . $conn->error. " </p>
          </div>";
        }else {
          if ($result->num_rows > 0) {
            echo "
            
              <div class='search-result'>
                <h2>Usuarios:</h2>
                <table>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Endereço</th>
                </tr>";
            while($row = $result->fetch_assoc()) {
              echo 
              "<tr>
                <td>", $row["id"], "</td>
                <td>" , $row["nome"] , "</td> 
                <td>" , $row["email"] , "</td>
                <td>", $row["endereco"], "</td>
              </tr>";
            }
            echo "</table>
              </div>";
            }else {
            echo "
            
            <div class='search-result'>
              <p class='alerta_text'>Usuario não encontrado</p>
            </div>";
          }
        }
        }else {
        $sql = "SELECT id, nome, email, endereco FROM Usuarios";
        $result = $conn->query($sql);
        
        if ($result === false) {
          echo "
          
          <div class='search-result'>
            <p class='alerta_text'>Erro ao consultar: " . $sql . $conn->error. " </p>
          </div>";
        }else {
          if ($result->num_rows > 0) {
            echo "
              
              <div class='search-result'>
                <h2>Usuarios:</h2>
                <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Endereço</th>
                </tr>";
            while($row = $result->fetch_assoc()) {
              echo 
              "<tr>
                  <td>", $row["id"], "</td>
                  <td>" , $row["nome"] , "</td> 
                  <td>" , $row["email"] , "</td>
                  <td>", $row["endereco"], "</td>
                </tr>";
            }
            echo "
            </table>
            </div>";
            }else {
              echo "
              
              <div class='search-result'>
                <p class='alerta_text'>>Usuario não encontrado</p>
              </div>";
            }
          }
        }
    }

    // UPDATE (Atualizar)
    if (isset($_POST['atualizar'])) {
      $id = $_POST['id'];
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $endereco = $_POST['endereco'];

      $sql = "UPDATE Usuarios SET nome='$nome', email='$email', endereco='$endereco' WHERE id=$id";

      if ($conn->query($sql) === TRUE) {
        echo "
        
        <div class='search-result'>
          <p class'alerta_text'>Usuário atualizado com sucesso</p>
        </div>";
      } else {
        echo "
        
        <div class='search-result'>
          <p class='alerta_text'>Erro ao consultar: " . $sql . $conn->error. " </p>
        </div>";
      }
    }

    // DELETE (deletar)
    if (isset($_GET['deletar'])) {

      if($_GET['id'] != "" ) {
        $id = $_GET['id'];
        $sql = "DELETE FROM Usuarios WHERE id=$id";
      }elseif ($_GET['nome'] != "") {
        $nome = $_GET['nome'];
        $sql = "DELETE FROM Usuarios WHERE nome='$nome'"; 
      }elseif ($_GET['email'] != "") { 
        $email = $_GET['email'];
        $sql = "DELETE FROM Usuarios WHERE email='$email'";
      }elseif ($_GET['endereco'] != "") {
        $endereco = $_GET['endereco'];
        $sql = "DELETE FROM Usuarios WHERE endereco='$endereco'";
      }

      if ($conn->query($sql) === TRUE) {
        echo "
        <script >
          limparResultado()
        </script>
        <div class='search-result'>
          <p class'alerta_text'>Usuário deletado com sucesso</p>
        </div>";
      } else {
        echo "
        
        <div class='search-result'>
          <p class='alerta_text'>Erro ao consultar: " . $sql . $conn->error. " </p>
        </div>";
      }
    }

    $conn->close();
  ?>
  <div class="container">

    <div class="box bd_conexao">
        <h2>O que deseja fazer?</h2>
        <div class="bd_conexao-botoes">
          <button class="btn" onclick="criarUserForm()">Criar usuário</button>
          <button class="btn" onclick="procurarUserForm()">Procurar usuário</button>
          <button class="btn" onclick="atualizarUserForm()">Atualizar usuário</button>
          <button class="btn" onclick="deletarUserForm()">Deletar usuário</button>
        </div>
    </div>

    <div class="box bd_crud bd_create">
      <h2>Criar usuário</h2>
      <form method="POST">
        <label>Digite o nome:</label>
        <input type="text" name="nome" placeholder="Digite o Nome desejado" id="nome" required>
        <label>Digite o email:</label>
        <input type="email" name="email" placeholder="Digite o Email desejado" id="email" required>
        <label>Digite o endereço:</label>
        <input type="text" name="endereco" placeholder="Digite o Endereço desejado" id="endereco" required>
        <button class="btn botao_enviar" name="criar" value="Criar" type="submit">Criar</button>
      </form> 
      <button class="btn botao_voltar" onclick="voltar(this)">Voltar</button>
    </div>

    <div class="box bd_crud bd_search">
      <h2>Procurar usuário</h2>
      <div class="bd_crud-botoes">
          <h3>Como deseja efetuar a busca?</h3>
          <button class="btn" onclick="metodoEscolhido(this)">ID</button>
          <button class="btn" onclick="metodoEscolhido(this)">Nome</button>
          <button class="btn" onclick="metodoEscolhido(this)">Email</button>
          <button class="btn" onclick="metodoEscolhido(this)">Endereço</button>
          <form method="POST" class="form_search-allButton" >
            <button class="btn" name="procurar" value="Procurar" type="submit">Procurar todos</button>
          </form>
      </div>

      <form method="POST">
        <h4>Qual usuário deseja buscar?</h4>
        <label>Digite o id:</label>
        <input type="text" name="id" placeholder="Digite o Id desejado" id="id">
        <label>Digite o nome:</label>
        <input type="text" name="nome" placeholder="Digite o Nome desejado" id="nome">
        <label>Digite o email:</label>
        <input type="email" name="email" placeholder="Digite o Email desejado" id="email">
        <label>Digite o endereço:</label>
        <input type="text" name="endereco" placeholder="Digite o Endereço desejado" id="endereco">
        <button class="btn botao_enviar" name="procurar" value="Procurar" type="submit">Procurar</button>
      </form> 
      <button class="btn botao_voltar" onclick="voltar()">Voltar</button>
    </div>

    <div class="box bd_crud bd_update">
      <h2>Atualizar usuário</h2>
      <form method="POST">
        <label>Digite o id:</label>
        <input type="text" name="id" placeholder="Digite o Id desejado" id="id" required>
        <label>Digite o nome:</label>
        <input type="text" name="nome" placeholder="Digite o Nome desejado" id="nome" required>
        <label>Digite o email:</label>
        <input type="email" name="email" placeholder="Digite o Email desejado" id="email" required>
        <label>Digite o endereço:</label>
        <input type="text" name="endereco" placeholder="Digite o Endereço desejado" id="endereco" required>
        <button class="btn botao_enviar" name="atualizar" value="Atualizar" type="submit">Atualizar</button>
      </form> 
      <button class="btn botao_voltar" onclick="voltar()">Voltar</button>
    </div>

    <div class="box bd_crud bd_delete">
      <h2>Procurar usuário</h2>
      <div class="bd_crud-botoes">
          <h3>Como deseja efetuar a busca?</h3>
          <button class="btn" onclick="metodoEscolhido(this)">ID</button>
          <button class="btn" onclick="metodoEscolhido(this)">Nome</button>
          <button class="btn" onclick="metodoEscolhido(this)">Email</button>
          <button class="btn" onclick="metodoEscolhido(this)">Endereço</button>
      </div>

      <form method="GET">
        <h4>Qual usuário deseja excluir?</h4>
        <label>Digite o id:</label>
        <input type="text" name="id" placeholder="Digite o Id desejado" id="id">
        <label>Digite o nome:</label>
        <input type="text" name="nome" placeholder="Digite o Nome desejado" id="nome">
        <label>Digite o email:</label>
        <input type="email" name="email" placeholder="Digite o Email desejado" id="email">
        <label>Digite o endereço:</label>
        <input type="text" name="endereco" placeholder="Digite o Endereço desejado" id="endereco">
        <button class="btn botao_enviar" name="deletar" value="Deletar" type="submit">Deletar</button>
      </form> 
      <button class="btn botao_voltar" onclick="voltar()">Voltar</button>
    </div>
  </div>

  
</body>
<script src="script.js"></script>
</html>
