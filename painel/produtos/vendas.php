<?php
require_once "../usuarios/restrito.php";
require_once "painel_de_controle.php";
?>
<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reaproveite</title>

    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
    <link rel="shortcut icon" type="image/x-png" href="../../img/logo.png">
    <link rel="stylesheet" type="text/css" href="../../css/estiloPainelControle.css">

    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="corpo">
        <h3>Relatório de Vendas</h3>
        <br>

        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h2 class="card-title">Vendas Semanais</h2>
                <h5 class="h5">Visitas no site: </h5>
                <h5 class="h5">Média de vendas por semana:</h5>
                <h5 class="h5">Lucro: </h5>
                <a href="#" class="btn btn-primary" id="imprimir">Imprimir Relatório Completo</a>
            </div>
        </div>
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h2 class="card-title">Vendas Mensais</h2>
                <h5 class="h5">Visitas no site: </h5>
                <h5 class="h5">Média de vendas por mês:</h5>
                <h5 class="h5">Lucro: </h5>
                <a href="#" class="btn btn-primary" id="imprimir">Imprimir Relatório Completo</a>
            </div>
        </div>
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h2 class="card-title">Vendas Anuais</h2>
                <h5 class="h5">Visitas no site: </h5>
                <h5 class="h5">Média de vendas por ano:</h5>
                <h5 class="h5">Lucro: </h5>
                <a href="#" class="btn btn-primary" id="imprimir">Imprimir Relatório Completo</a>
            </div>
        </div>
    </div>

</body>

</html>