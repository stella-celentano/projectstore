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

        <div class="logo">
            <img src="../../img/logo.png" alt="logo">
        </div>

        <div class="botoes">
            <a class="nav-item nav-link" id="btn" href=""><b>Painel de Controle</b></a><br>
            <a class="nav-item nav-link" id="btn" href=""><b>Produtos</b></a><br>
            <a class="nav-item nav-link" id="btn" href=""><b>Clientes</b></a><br>
            <a class="nav-item nav-link" id="btn" href=""><b>Vendas</b></a><br>
            <a class="nav-item nav-link" id="btn" href="../usuarios/sair_proc.php"><b>Sair</b></a>
        </div>

    </div>

    <div class="corpo">



    </div>
    
</body>

</html>