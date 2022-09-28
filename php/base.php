<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MODELO DE ARQUIVO PARA OS EXEMPLOS</title>
    <link rel="stylesheet" href="../../_libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../_assets/css/styles.css">
</head>
<body>

<div class="container top">
    <div class="row">
        <div class="col-sm-12">
            <img class="img-fluid logo d-block" src="../../_assets/img/logo.png" alt="">
        </div>
    </div>
</div>

<div class="container white content">
    <div class="row">
        <div class="col-sm-12">
            <h1>:: Trabalhando com variáveis <small>Strings e operadores</small></h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h2>Escrevendo variáveis</h2>
            <code>
                <?php

                $nome = "Fabio Web Developer";

                echo "Meu nome é {$nome}";
                ?>
            </code>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h2>Datas com PHP</h2>
            <code>
                <?php

                $data = new DateTime();

                var_dump($data);
                ?>
            </code>
        </div>
    </div>
</div>

<script src="../../_libs/jquery/jquery.js"></script>
<script src="../../_libs/bootstrap/js/bootstrap.min.js"></script>
<script src="../../_assets/js/scripts.js"></script>

</body>
</html>