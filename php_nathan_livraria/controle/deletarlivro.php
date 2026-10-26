<?php
require_once "conexao.php";

$id = $_GET['id'];

// DELETE FROM paciente WHERE idpaciente = 2;
$sql = "DELETE FROM livro WHERE idlivro = $id";

mysqli_query($conexao, $sql);

header("Location: ../public/listarlivro.php");
?>