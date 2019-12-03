<?php
require_once '../usuarios/conexao.php';
require_once '../usuarios/restrito.php';
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

    <div class="menu">

        <div class="botoes">
            <img src="../../img/logo1.png" alt="" id="imgCriminosa">
            <a class="nav-item nav-link" id="btn" href="inserir_produto.php"><b>Adicionar Produtos</b></a><br>
            <a class="nav-item nav-link" id="btn" href="listar.php"><b>Listar Produtos</b></a><br>
            <a class="nav-item nav-link" id="btn" href="vendas.php"><b>Relatório de Vendas</b></a><br>
            <a class="nav-item nav-link" id="btn" href="listar_clientes.php"><b>Clientes</b></a><br>
            <a class="nav-item nav-link" id="btn" href="../usuarios/sair_proc.php"><b>Sair</b></a>
        </div>

    </div>

    <div class="corpo">



    </div>
    
</body>

</html>