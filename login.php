<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <form action="teste_login.php" method="POST">
    <div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div>
      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>
    </div>
    <div>
      <input type="submit" name="submit" value="Login">
      <a href="./index.php">Cadastrar</a>
    </div>
  </form>

</body>

</html>