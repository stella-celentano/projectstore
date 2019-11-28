<?php
require_once "conexao.php";
require_once "../../topo.php";
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
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">

    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

    <div class="entrar">
        <form action="entrar_proc.php" method="POST">
            <h3>Já sou Cliente</h3>
            <label for="usuario">Usuário</label><br>
            <input type="text" id="input" name="usuario"><br>
            <label for="senha">Senha</label><br>
            <input type="password" id="input" name="senha"><br><br>
            <button type="submit" id="btn">Entrar</button>
            <button type="submit" class="btn1" id="btn">Redefinir Senha</button>
            <input type="button" value="cadastrar" id="botaoExibirCadastro"/>
        </form>
    </div>
    <script type="text/javascript">
        $("#botaoExibirCadastro").click(function(){
            $(".cadastrar").show();
            $(".entrar").hide();
        });
    </script>

    <div id="divPrincipalEntrarCadastrar">
        <div class="cadastrar">
            <form action="cadastrar_proc.php" method="POST">
                <h3>Quero Criar uma Conta</h3>
                <table>
                    <tr>
                        <td>
                        <p>*Todos os campos são obrigatórios!</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nome" id="cad">Nome</label><br>
                            <input type="text" id="cad" name="nome"><br>
                        </td>
                        <td>
                            <label for="sobrenome" id="cad">Sobrenome</label><br>
                            <input type="text" id="cad" name="sobrenome"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email" id="cad">Email</label><br>
                            <input type="text" id="cad" name="email"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="telefone" id="cad">Telefone</label><br>
                            <input type="text" id="cad" name="telefone"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="cidade" id="cad">Cidade</label><br>
                            <input type="text" id="cad" name="cidade">
                        </td>
                        <td>
                            <label for="estado" id="cad">Estado</label><br>
                            <input type="text" id="cad" name="estado"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="usuario" id="cad">Usuário</label><br>
                            <input type="text" id="cad" name="usuario"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="senha" id="cad">Senha</label><br>
                            <input type="text" id="cad" name="senha"><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" class="btn2" id="btn">Cadastrar</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>