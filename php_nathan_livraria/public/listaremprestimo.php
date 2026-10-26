<?php
require_once "../controle/verificaLogado.php";

if (isset($_GET['valor'])) {
    $valor = $_GET['valor'];
} else {
    $valor = '';
}

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empréstimos</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="./css/estilo.css">


<body class="back2">
    <div class="pesquisa">
        <h1>Lista de Empréstimos </h1>

        <form action="listaremprestimo.php" method="get">
            <b>Pesquise:</b> <br>
            <input type="text" name="valor" value="<?php echo $valor; ?>"> <br><br>

            <input class="button" type="submit" value="Procurar">
        </form> <br>

        <?php

        if (isset($_GET['valor']) == false) {
            require_once "../controle/conexao.php";
            echo '<table class="table table-striped">';
                echo '<tr>';
                echo '<th>Data do Emprestimo</th>';
                echo '<th>Data de Devolucao</th>';
                echo '<th>Pagamento</th>';
                echo '<th>Dias de Atraso</th>';
                echo '<th>Valor da Multa</th>';
                echo '<th>id do Cliente</th>';
                echo '<th>id do Livro</th>';
                echo '<th>id do Funcionario</th>';
                echo '<th></th>';
                echo '<th></th>';
                echo '</tr>';

            $sql = "SELECT * FROM emprestimo";

            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['idEmprestimo'];
                $data_emprestimo = $linha['data_emprestimo'];
                $data_devolucao = $linha['data_devolucao'];
                $pagamento = $linha['pagamento'];
                $dias_de_atraso = $linha['dias_de_atraso'];
                $valor_multa = $linha['valor_multa'];
    
                $cliente_idcliente = $linha['cliente_idcliente'];
                $livro_idLivro = $linha['livro_idLivro'];
                $funcionario_idFuncionario = $linha['funcionario_idFuncionario'];
    
                echo "<tr>";
                echo "<th>$data_emprestimo</th>";
                echo "<th>$data_devolucao</th>";
                echo "<th>$pagamento</th>";
                echo "<th>$dias_de_atraso</th>";
                echo "<th>$valor_multa</th>";
                echo "<th>$cliente_idcliente</th>";
                echo "<th>$livro_idLivro</th>";
                echo "<th>$funcionario_idFuncionario</th>";
                echo "<td><a href='../controle/deletaremprestimo.php?id=$id' class='button'>Deletar</a></td>";
                echo "<td><a href='emprestimo.php?id=$id' class='button'>Editar</a></td>";
                echo "</tr>";
            }
            echo '</table>';
        } elseif ($_GET['valor'] == "") {
            require_once "../controle/conexao.php";

            echo '<table class="table table-striped">';
            echo '<tr>';
            echo '<th>Data do Emprestimo</th>';
            echo '<th>Data de Devolucao</th>';
            echo '<th>Pagamento</th>';
            echo '<th>Dias de Atraso</th>';
            echo '<th>Valor da Multa</th>';
            echo '<th>id do Cliente</th>';
            echo '<th>id do Livro</th>';
            echo '<th>id do Funcionario</th>';
            echo '<th></th>';
            echo '<th></th>';
            echo '</tr>';

            $sql = "SELECT * FROM emprestimo";

            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['idEmprestimo'];
                $data_emprestimo = $linha['data_emprestimo'];
                $data_devolucao = $linha['data_devolucao'];
                $pagamento = $linha['pagamento'];
                $dias_de_atraso = $linha['dias_de_atraso'];
                $valor_multa = $linha['valor_multa'];
    
                $cliente_idcliente = $linha['cliente_idcliente'];
                $livro_idLivro = $linha['livro_idLivro'];
                $funcionario_idFuncionario = $linha['funcionario_idFuncionario'];
    
                echo "<tr>";
                echo "<th>$data_emprestimo</th>";
                echo "<th>$data_devolucao</th>";
                echo "<th>$pagamento</th>";
                echo "<th>$dias_de_atraso</th>";
                echo "<th>$valor_multa</th>";
                echo "<th>$cliente_idcliente</th>";
                echo "<th>$livro_idLivro</th>";
                echo "<th>$funcionario_idFuncionario</th>";
                echo "<td><a href='../controle/deletaremprestimo.php?id=$id' class='button'>Deletar</a></td>";
                echo "<td><a href='emprestimo.php?id=$id' class='button'>Editar</a></td>";  
                echo "</tr>";
            }
            echo '</table>';
        } else {
            
            require_once "../controle/conexao.php";
            $sql = "SELECT * FROM emprestimo  WHERE data_emprestimo LIKE '%$valor%' 
            or data_devolucao LIKE '%$valor%' or pagamento LIKE '%$valor%' 
            or dias_de_atraso LIKE '%$valor%' or valor_multa LIKE '%$valor%' or cliente_idcliente LIKE '%$valor%'
            or livro_idLivro LIKE '%$valor%' or funcionario_idFuncionario LIKE '%$valor%'";
            $resultados = mysqli_query($conexao, $sql);
        

            if (mysqli_num_rows($resultados) > 0) {

                echo '<table class="table table-striped">';
                echo '<tr>';
                echo '<th>Data do Emprestimo</th>';
                echo '<th>Data de Devolucao</th>';
                echo '<th>Pagamento</th>';
                echo '<th>Dias de Atraso</th>';
                echo '<th>Valor da Multa</th>';
                echo '<th>id do Cliente</th>';
                echo '<th>id do Livro</th>';
                echo '<th>id do Funcionario</th>';
                echo '<th></th>';
                echo '<th></th>';
                echo '</tr>';


                while ($linha = mysqli_fetch_array($resultados)) {
                    $id = $linha['idEmprestimo'];
                    $data_emprestimo = $linha['data_emprestimo'];
                    $data_devolucao = $linha['data_devolucao'];
                    $pagamento = $linha['pagamento'];
                    $dias_de_atraso = $linha['dias_de_atraso'];
                    $valor_multa = $linha['valor_multa'];
        
                    $cliente_idcliente = $linha['cliente_idcliente'];
                    $livro_idLivro = $linha['livro_idLivro'];
                    $funcionario_idFuncionario = $linha['funcionario_idFuncionario'];
    

                    echo "<tr>";
                    echo "<th>$data_emprestimo</th>";
                    echo "<th>$data_devolucao</th>";
                    echo "<th>$pagamento</th>";
                    echo "<th>$dias_de_atraso</th>";
                    echo "<th>$valor_multa</th>";
                    echo "<th>$cliente_idcliente</th>";
                    echo "<th>$livro_idLivro</th>";
                    echo "<th>$funcionario_idFuncionario</th>";
                    echo "<td><a href='../controle/deletaremprestimo.php?id=$id' class='button'>Deletar</a></td>";
                    echo "<td><a href='emprestimo.php?id=$id' class='button'>Editar</a></td>";  
                    echo "</tr>";
                }
                echo '</table>';
            } else {
                echo "<h1>Nenhum resultado encontrado</h1>";
            }
    }



        ?>
        
    </div>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>