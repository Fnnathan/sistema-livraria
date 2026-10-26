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
    <title>Lista de Clientes</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="./css/estilo.css">


<body class="back2">
    <div class="pesquisa">
        <h1>Lista de clientes </h1>

        <form action="listarcliente.php" method="get">
            <b>Pesquise:</b> <br>
            <input type="text" name="valor" value="<?php echo $valor; ?>"> <br><br>
            <input type="submit" value="Procurar" class="button"> 
        </form> <br>

        <?php

        if (isset($_GET['valor']) == false) {
            require_once "../controle/conexao.php";
            echo '<table class="table table-striped">';
            echo '<tr>';
            echo '<th>id</th>';
            echo '<th>nome</th>';
            echo '<th>cpf</th>';
            echo '<th>telefone</th>';
            echo '<th>endereco</th>';
            echo '<th></th>';
            echo '<th></th>';
            echo '</tr>';

            $sql = "SELECT * FROM cliente";

            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['idcliente'];
                $nome = $linha['nome'];
                $cpf = $linha['cpf'];
                $telefone = $linha['telefone'];
                $endereco = $linha['endereco'];

                echo "<tr>";
                echo "<th>$id</th>";
                echo "<th>$nome</th>";
                echo "<th>$cpf</th>";
                echo "<th>$telefone</th>";
                echo "<th>$endereco</th>";
                echo "<td><a href='../controle/deletarcliente.php?id=$id' class='button'>Deletar</a></td>";
                echo "<td><a href='cliente.php?id=$id' class='button'>Editar</a></td>";
                echo "</tr>";
            }
            echo '</table>';
        } elseif ($_GET['valor'] == '') {
            require_once "../controle/conexao.php";

            echo '<table class="table table-striped">';
            echo '<tr>';
            echo '<th>id</th>';
            echo '<th>nome</th>';
            echo '<th>cpf</th>';
            echo '<th>telefone</th>';
            echo '<th>endereco</th>';
            echo '<th></th>';
            echo '<th></th>';
            echo '</tr>';

            $sql = "SELECT * FROM cliente";

            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['idcliente'];
                $nome = $linha['nome'];
                $cpf = $linha['cpf'];
                $telefone = $linha['telefone'];
                $endereco = $linha['endereco'];

                echo "<tr>";
                echo "<th>$id</th>";
                echo "<th>$nome</th>";
                echo "<th>$cpf</th>";
                echo "<th>$telefone</th>";
                echo "<th>$endereco</th>";
                echo "<td><a href='../controle/deletarcliente.php?id=$id' class='button'>Deletar</a></td>";
                echo "<td><a href='cliente.php?id=$id' class='button'>Editar</a></td>";
                echo "</tr>";
            }
            echo '</table>';
        } else {
            require_once "../controle/conexao.php";
            $sql = "SELECT * FROM cliente WHERE nome LIKE '%$valor%' 
            or cpf LIKE '%$valor%' or telefone LIKE '%$valor%' 
            or endereco LIKE '%$valor%'";
            $resultados = mysqli_query($conexao, $sql);


            if (mysqli_num_rows($resultados) > 0) {

                echo '<table class="table table-striped">';
                echo '<tr>';
                echo '<th>id</th>';
                echo '<th>nome</th>';
                echo '<th>cpf</th>';
                echo '<th>telefone</th>';
                echo '<th>endereco</th>';
                echo '<th></th>';
                echo '<th></th>';
                echo '</tr>';


                while ($linha = mysqli_fetch_array($resultados)) {
                    $id = $linha['idcliente'];
                    $nome = $linha['nome'];
                    $cpf = $linha['cpf'];
                    $telefone = $linha['telefone'];
                    $endereco = $linha['endereco'];

                    echo "<tr>";
                    echo "<th>$id</th>";
                    echo "<th>$nome</th>";
                    echo "<th>$cpf</th>";
                    echo "<th>$telefone</th>";
                    echo "<th>$endereco</th>";
                    echo "<td><a href='../controle/deletarcliente.php?id=$id' class='button'>Deletar</a></td>";
                    echo "<td><a href='cliente.php?id=$id' class='button'>Editar</a></td>";
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