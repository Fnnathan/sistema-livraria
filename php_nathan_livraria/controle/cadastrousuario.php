<?php
require_once "conexao.php";

$email= $_POST['email'];
$senha = $_POST['senha'];

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario (email, senha) VALUES ('$email', '$senhaHash')";

// echo $senha . "<br>";
// echo $senhaHash;

mysqli_query($conexao, $sql);

header("Location: ../public/index.php");