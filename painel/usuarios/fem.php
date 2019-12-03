<?php
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
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">

    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:600&display=swap" rel="stylesheet">
</head>

<body>
<br>
<h2>Peças Femininas</h2>

    <div id="main">

        <?php
        require_once "conexao.php";
        $sql = 'SELECT * FROM produtos
                WHERE categoria = 2';
        $resultado = mysqli_query($banco, $sql);

        if ($resultado->num_rows > 0) :
            while ($produto = $resultado->fetch_assoc()) :
                ?>

                <div class="card" style="width: 25rem; height=20px; background-color:#F5F5F5; border:none;">
                    <img src="<?= $produto['imagem'] ?>" height="300" width="300" id="imagem">
                    <div class="card-body">
                        <h4 class="card-title"><?= $produto['nome'] ?></h4>
                        <p class="card-text"> <?= $produto['descricao'] ?> </p>
                        <h5 class="h5"> <?= $produto['preco'] ?> </h5>
                        <a href="carrinho.php" class="btn btn-primary" id="comprar">Comprar</a>
                    </div>
                </div>

        <?php
            endwhile;
        endif;
        ?>

    </div>


</body>


</html>