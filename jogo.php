<?php

session_start();
include_once("./components/connect.php");

if(!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
  header("Location: login.php");
  exit;
}

$logado_email = $_SESSION['email'];
$logado_senha = $_SESSION['senha'];

$sql = "SELECT * FROM usuarios WHERE email = '$logado_email' AND senha = '$logado_senha'";
$result = mysqli_query($conexao, $sql);

if($result->num_rows > 0) {
  $user_data = $result->fetch_assoc();
  $nome = $user_data['nome'];
  $email = $user_data['email'];
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Tela de Jogo</title>
</head>

<body>
  <h1>Bem-vindo, <span id="nomeUsuario"><?php echo $nome ?></span>!</h1>
  <h2>Seu email é: <span id="emailUsuario"><?php echo $email ?></span></h2>

  <div id="perguntaQuiz">
    <h2>Pergunta do Quiz:</h2>
    <p>Aqui será exibida a pergunta do quiz.</p>
  </div>

  <div id="opcoesRespostas">
    <h3>Escolha a resposta correta:</h3>
    <form>
      <input type="radio" id="resposta1" name="resposta" value="1">
      <label for="resposta1">Resposta 1</label><br>

      <input type="radio" id="resposta2" name="resposta" value="2">
      <label for="resposta2">Resposta 2</label><br>

      <input type="radio" id="resposta3" name="resposta" value="3">
      <label for="resposta3">Resposta 3</label><br>

      <input type="radio" id="resposta4" name="resposta" value="4">
      <label for="resposta4">Resposta 4</label><br>
    </form>
    <a href="./components/sair.php">Sair</a>
  </div>
</body>

</html>