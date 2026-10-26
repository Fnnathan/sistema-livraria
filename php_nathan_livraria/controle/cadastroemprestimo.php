<?php
require_once "conexao.php";

$id = $_GET['id'];

$data_emprestimo = $_POST['data_emprestimo'];
$data_devolucao = $_POST['data_devolucao'];
$pagamento = $_POST['pagamento'];
$dias_de_atraso = $_POST['dias_de_atraso'];
$valor_multa = $_POST['valor_multa'];

$cliente_idcliente = $_POST['idcliente'];
$livro_idLivro = $_POST['idLivro'];
$funcionario_idFuncionario = $_POST['idFuncionario'];


if ($id == 0) {

    $sql = "INSERT INTO emprestimo  (data_emprestimo, data_devolucao, pagamento, dias_de_atraso, valor_multa, cliente_idcliente, livro_idLivro, funcionario_idFuncionario) VALUES ('$data_emprestimo', '$data_devolucao', '$pagamento','$dias_de_atraso','$valor_multa','$cliente_idcliente','$livro_idLivro','$funcionario_idFuncionario')";
} else {
    $sql = "UPDATE emprestimo SET data_emprestimo = '$data_emprestimo', data_devolucao = '$data_devolucao',pagamento ='$pagamento', dias_de_atraso = '$dias_de_atraso',valor_multa ='$valor_multa', cliente_idcliente = '$cliente_idcliente', livro_idLivro ='$livro_idLivro',funcionario_idFuncionario ='$funcionario_idFuncionario'WHERE idemprestimo = $id";
}


// rodar esse SQL
mysqli_query($conexao, $sql);


header("Location: ../public/listaremprestimo.php");
