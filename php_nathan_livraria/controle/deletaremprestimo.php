<?php
require_once "conexao.php";

$id = $_GET['id'];

// DELETE FROM paciente WHERE idpaciente = 2;
$sql = "DELETE FROM emprestimo WHERE idemprestimo = $id";

mysqli_query($conexao, $sql);

header("Location: ../public/listaremprestimo.php");
?>