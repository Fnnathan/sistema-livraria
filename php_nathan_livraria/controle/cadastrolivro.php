<?php
require_once "conexao.php";
$id = $_GET['id'];

$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$autor = $_POST['autor'];
$condicao = $_POST['condicao'];


if ($id == 0) {

    $sql = "INSERT INTO livro (titulo, genero, autor,condicao) VALUES ('$titulo', '$genero', '$autor','$condicao')";
    } 
    else {
        $sql = "UPDATE livro SET titulo = '$titulo', genero = '$genero', autor = '$autor',condicao ='$condicao' WHERE idlivro = $id";
    }
    

// rodar esse SQL
mysqli_query($conexao, $sql);

header("Location: ../public/listarlivro.php");
?>