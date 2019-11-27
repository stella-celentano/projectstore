<?php
require_once "painel/usuarios/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reaproveite</title>

    <link rel="shortcut icon" type="image/x-png" href="img/logo.ico">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:600&display=swap" rel="stylesheet">
</head>

<body>

    <div class="nav">
        <nav class="navbar navbar-expand-lg navbar-light">
            <img src="/store/img/logo.ico" alt="logo" id="logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="#">Promoções</a>
                    <a class="nav-item nav-link" href="#">Feminino</a>
                    <a class="nav-item nav-link" href="#">Masculino</a>
                    <a class="nav-item nav-link" href="#">Infantil</a>
                </div>
            </div>
            <div>
                <?php
                session_start();
                if (!isset($_SESSION['usuario'])) :
                    ?>
                    <a class="nav-item nav-link" id="btnLogin" href="/store/painel/usuarios/entrarEcadastrar.php"><b>Entrar/Cadastrar</b></a>
                <?php
                endif;
                ?>

                <?php

                if (isset($_SESSION['usuario'])) :
                    ?>
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" id="btnSair" href="/store/painel/usuarios/sair_proc.php"><b>Sair</b></a>
                        <a class="nav-item nav-link" id="btnCarrinho" href="#"><b>Carrinho</b></a>
                    </div>
                <?php
                endif;
                ?>
            </div>
        </nav>
    </div>

</body>

</html>