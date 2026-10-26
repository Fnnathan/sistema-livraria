<?php
require_once "../controle/verificaLogado.php";


if (isset($_GET['id'])) {
    // echo "editar";
    require_once "../controle/conexao.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM emprestimo WHERE idemprestimo = $id";
    $resultado = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_array($resultado);

    $data_emprestimo = $linha['data_emprestimo'];
    $data_devolucao = $linha['data_devolucao'];
    $pagamento = $linha['pagamento'];
    $dias_de_atraso = $linha['dias_de_atraso'];
    $valor_multa = $linha['valor_multa'];

    // $acao = "editar";
    $botao = "Salvar";
} else {
    // echo "cadastrar";
    $id = 0;
    $data_emprestimo = '';
    $data_devolucao = '';
    $pagamento  = '';
    $dias_de_atraso = '';
    $valor_multa = '';

    // $acao = "cadastrar";
    $botao = "Cadastrar";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Emprestimo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/estilo.css">

</head>


<body class="back2 fotoemprestimo">
    <div id="organizar_emprestimo">
        
            <div id="emprestimo1"><form id="formgeral" action="../controle/cadastroemprestimo.php?id=<?php echo $id; ?>" method="Post">
                <h2> Cadastrar Empréstimo </h2>
                <form action="../controle/cadastroemprestimo.php?id=<?php echo $id; ?>" method="post"><br>

                    <b>Data Emprestimo:</b>
                    <input type="text" name="data_emprestimo" class="form-control" value="<?php echo $data_emprestimo; ?>"><br>


                    <b>Data da Devolucão:</b>
                    <input type="text" name="data_devolucao" class="form-control" value="<?php echo $data_devolucao; ?>"><br>


                    <b>Pagamento:</b>
                    <input type="text" name="pagamento" class="form-control" value="<?php echo $pagamento; ?>"><br>


                    <b>valor da multa:</b>
                    <input type="text" name="valor_multa" class="form-control" value="<?php echo $valor_multa ?>"><br>

                    <b>Dias de atraso:</b>
                    <input type="text" name="dias_de_atraso" class="form-control" value="<?php echo $dias_de_atraso ?>"><br>



            </div>

            <div id="emprestimo2">
                <b>Cliente:</b> <br>
                <select class="form-select" name="idcliente">
                    <?php
                    require_once "../controle/conexao.php";

                    $sql = "SELECT idcliente, nome FROM cliente";

                    $resultados = mysqli_query($conexao, $sql);

                    while ($linha = mysqli_fetch_array($resultados)) {
                        $id = $linha['idcliente'];
                        $nome = $linha['nome'];
                        // $cpf = $linha['cpf'];
                        // $telefone = $linha['telefone'];

                        echo "<option value='$id'>$nome</option>";
                    }
                    ?>

                </select> <br>


                <b>Livro:</b> <br>
                <select class="form-select" name="idLivro">
                    <?php
                    require_once "../controle/conexao.php";

                    $sql = "SELECT idLivro, titulo FROM livro";

                    $resultados = mysqli_query($conexao, $sql);

                    while ($linha = mysqli_fetch_array($resultados)) {
                        $id = $linha['idLivro'];
                        $titulo = $linha['titulo'];
                        // $cpf = $linha['cpf'];
                        // $telefone = $linha['telefone'];

                        echo "<option value='$id'>$titulo</option>";
                    }
                    ?>
                </select><br>


                <b>Funcionario:</b> <br>
                <select class="form-select" name="idFuncionario">
                    <?php
                    require_once "../controle/conexao.php";

                    $sql = "SELECT idFuncionario, nome FROM funcionario";

                    $resultados = mysqli_query($conexao, $sql);

                    while ($linha = mysqli_fetch_array($resultados)) {
                        $id = $linha['idFuncionario'];
                        $nome = $linha['nome'];
                        // $cpf = $linha['cpf'];
                        // $telefone = $linha['telefone'];

                        echo "<option value='$id'>$nome</option>";
                    }
                    ?>
                </select><br>


                <input class="button" type="submit" value="Enviar">
                <br><br>
            </div>
    </div>


    </form>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>