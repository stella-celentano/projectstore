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


        <a id="btn1" href="inserir_produto.php">Inserir Produto</a>
        <br><br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <td>Id</td>
                    <td>Nome</td>
                    <td>Preço</td>
                    <td>Opções</td>
                </tr>
                <?php
                require_once '../usuarios/conexao.php';
                $sql = "SELECT id,nome,preco FROM produtos";
                $resultado = mysqli_query($banco, $sql);

                if ($resultado->num_rows > 0) :
                    while ($produto = $resultado->fetch_assoc()) :
                        ?>
                        <tr>
                            <td><?php echo $produto['id']; ?></td>
                            <td><?= $produto['nome'] ?></td>
                            <td><?= $produto['preco'] ?></td>
                            <td>
                                <a id="btn1" href="editar.php?id=<?= $produto['id'] ?>">
                                    Editar
                                </a>
                                <a id="btn1" href="excluir.php?id=<?= $produto['id'] ?>">
                                    Excluir
                                </a>
                            </td>
                        </tr>
                <?php
                    endwhile;
                endif;
                ?>
        </table>
    </div>
</body>

</html>