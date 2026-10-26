<?php
require_once "../controle/verificaLogado.php";


if (isset($_GET['id'])) {
    // echo "editar";
    require_once "../controle/conexao.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM cliente WHERE idcliente = $id";
    $resultado = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_array($resultado);

    $nome = $linha['nome'];
    $cpf = $linha['cpf'];
    $telefone = $linha['telefone'];
    $endereco = $linha ['endereco'];

    // $acao = "editar";
    $botao = "Salvar";
} else {
    // echo "cadastrar";
    $id = 0;
    $nome = '';
    $cpf = '';
    $telefone = '';
    $endereco = '';
    
    // $acao = "cadastrar";
    $botao = "Cadastrar";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">

</head>

<body class = "back2 fotocliente"><div class = "cadastro" >

<form action="../controle/cadastrocliente.php?id=<?php echo $id; ?>" method="post">
<br><br>
<h2>Cadastrar Cliente</h2>
<br>
        <b>Nome:</b>
        <input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>">

        <b>CPF:</b>
        <input type="text" name="cpf" class="form-control" value="<?php echo $cpf; ?>">

        <b>Telefone:</b>
        <input type="text" name="telefone" class="form-control" value="<?php echo $telefone; ?>">
        
        <b>Endereço:</b>
        <input type="text" name="endereco" class="form-control" value="<?php echo $endereco; ?>">
         <br><br>
        <input type="submit" value="<?php echo $botao; ?>" class="button">

        <br>
    </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>