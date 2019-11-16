<?php
require_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reaproveite</title>

    <link rel="shortcut icon" type="image/x-png" href="../../img/logo.png">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:600&display=swap" rel="stylesheet">
</head>

<body>

    <div class="entrar">
        <form action="entrar_proc.php" method="post">
            <label for="login">Usuário</label><br>
            <input type="text" id="input" name="login"><br>
            <label for="senha">Senha</label><br>
            <input type="password" id="input" name="senha"><br><br>
            <button type="submit" id="btn">Entrar</button>
        </form>
    </div>

    <div class="cadastrar">
        <form action="cadastrar_proc.php" method="post">
            <label for="nome">Nome</label><br>
            <input type="text" id="input"><br>
            <label for="sobrenome">Sobrenome</label><br>
            <input type="text" id="input"><br>
            <label for="telefone">Telefone</label><br>
            <input type="text" id="input"><br>
            <label for="cidade">Cidade</label><br>
            <input type="text" id="input"><br>
            <label for="num">Estado</label><br>
            <input type="text" id="input"><br>
            <label for="num">Usuário</label><br>
            <input type="text" id="input"><br>
            <label for="num">Senha</label><br>
            <input type="text" id="input"><br><br>
            <button type="submit" id="btn">Cadastrar</button>
        </form>
    </div>

</body>

</html>