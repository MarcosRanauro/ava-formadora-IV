<?php
include_once("./components/connect.php");

if(isset($_POST['submit'])) {
    $nome = $_POST['nome_completo'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    //print_r($nome);
    //print_r($email);
    //print_r($senha);

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    $result = mysqli_query($conexao, $sql);

    if($result) {
        echo '<script>alert("Usuário cadastrado com sucesso");</script>';
        header("Location: login.php");
    } else {
        echo "Erro ao cadastrar usuário";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
</head>

<body>
  <form action="index.php" method="POST">
    <h1>Cadastro</h1>
    <div>
      <label for="nome_completo">Nome Completo:</label>
      <input type="text" id="nome_completo" name="nome_completo" required>
      <span class="mensagem-erro" id="msg-nome"></span>
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <span class="mensagem-erro" id="msg-email"></span>
    </div>
    <div>
      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>
      <span class="mensagem-erro" id="msg-senha"></span>
    </div>
    <div>
      <input type="submit" name="submit" value="Enviar">
      <input type="button" name="login" value="Login" onclick="window.location.href='login.php'">
    </div>
  </form>
</body>

</html>