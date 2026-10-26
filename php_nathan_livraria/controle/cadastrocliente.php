<?php
require_once "conexao.php";

$id = $_GET['id'];

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];

if ($id == 0) {

$sql = "INSERT INTO cliente (nome, cpf,endereco ,telefone) VALUES ('$nome', '$cpf','$endereco','$telefone')";
} 
else {
    $sql = "UPDATE cliente SET nome = '$nome', cpf = '$cpf', telefone = '$telefone',endereco ='$endereco' WHERE idcliente = $id";
}

// rodar esse SQL
mysqli_query($conexao,$sql);

header("Location: ../public/listarcliente.php");
?>