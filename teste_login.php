<?php

session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once("./components/connect.php");
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = mysqli_query($conexao, $sql);

    if($result->num_rows > 0) {
        $user_data = $result->fetch_assoc();
        $logado_nome = $user_data['nome'];
        $logado_email = $user_data['email'];
    }

    if($result->num_rows < 1) {
      unset($_SESSION['email']);
      unset($_SESSION['nome']);
      unset($_SESSION['senha']);
      header("Location: login.php");
    } else {
      $_SESSION['email'] = $email;
      $_SESSION['senha'] = $senha;
      header("Location: jogo.php");
    }
}
