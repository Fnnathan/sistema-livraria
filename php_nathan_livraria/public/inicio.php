<?php
require_once "../controle/verificaLogado.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body >
    
        <!-- Cabeçalho -->

        <div class="header">
            <iframe src="ptcima.php" class="iframeinteiro"></iframe>
        </div>


        <!-- Menu Lateral -->
    <div class="row">  
        <div class="column side">
            <iframe src="ptlateral.php" name="lateral" class="iframeinteiro" ></iframe>
        </div>


        <!-- Conteúdo Central -->
        <div class="column middle">
            <iframe src="ptcentral.php" name="central" class="iframeinteiro" ></iframe>
        </div>

    </div>   
        <!-- Rodapé -->
        <div class="footer">
            <iframe src="rodape.php" class="iframeinteiro"></iframe>
        </div>

    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>