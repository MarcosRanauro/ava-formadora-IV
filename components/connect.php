<?php

$dbHost = "127.0.0.1";
$dbUserName = "root";
$dbPassword = "";
$dbName = "AVA4";

$conexao = mysqli_connect($dbHost, $dbUserName, $dbPassword, $dbName);

// if($conexao->error) {
//     die("Erro: " . $conexao->error);
// }

// if($conexao->connect_errno) {
//     echo "Erro";
// } else {
//     echo "Conectado com sucesso";
// };
