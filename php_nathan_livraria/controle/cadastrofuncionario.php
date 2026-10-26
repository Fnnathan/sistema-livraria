<?php
// conectar esse arquivo ao banco
require_once "conexao.php";

$id = $_GET['id'];

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];


if ($id == 0) {

$sql = "INSERT INTO funcionario (nome, cpf, telefone) VALUES ('$nome', '$cpf', '$telefone')";
    } 
else {
    $sql = "UPDATE funcionario SET nome = '$nome', cpf = '$cpf', telefone = '$telefone' WHERE idfuncionario = $id";
    }
// rodar esse SQL
mysqli_query($conexao,$sql);

header("Location: ../public/listarfuncionario.php");
?>