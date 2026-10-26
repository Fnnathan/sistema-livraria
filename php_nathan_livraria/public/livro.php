<?php
require_once "../controle/verificaLogado.php";

if (isset($_GET['id'])) {
    // echo "editar";
    require_once "../controle/conexao.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM livro WHERE idlivro = $id";
    $resultado = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_array($resultado);

    $titulo = $linha['titulo'];
    $genero = $linha['genero'];
    $autor  = $linha['autor'];
    $condicao = $linha ['condicao'];

    // $acao = "editar";
    $botao = "Salvar";
} else {
    // echo "cadastrar";
    $id = 0;
    $titulo = '';
    $genero = '';
    $autor = '';
    $condicao = '';
    
    // $acao = "cadastrar";
    $botao = "Cadastrar";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRAR LIVRO</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">


<body class = "back2 fotolivro"><div class = "cadastro" >


<form action="../controle/cadastrolivro.php?id=<?php echo $id; ?>" method="post">
<br><br>
<h2>Cadastrar Livro</h2>    
<br>    
        <b>Titulo:</b>
        <input type="text" name="titulo" class="form-control" value="<?php echo $titulo; ?>">

        <b>Genero:</b>
        <input type="text" name="genero" class="form-control" value="<?php echo $genero; ?>">

        <b>Autor:</b>
        <input type="text" name="autor" class="form-control" value="<?php echo $autor; ?>">

        <b>Condicao:</b>
        <input type="text" name="condicao" class="form-control" value="<?php echo $condicao; ?>">
         <br><br>
        <input type="submit" value="<?php echo $botao; ?>" class="button">

        <br>

       
    </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>