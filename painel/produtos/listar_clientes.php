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

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <td>Id</td>
                    <td>Nome</td>
                    <td>Telefone</td>
                </tr>
                <?php
                require_once '../usuarios/conexao.php';
                $sql = "SELECT id,nome,email FROM usuarios";
                $resultado = mysqli_query($banco, $sql);

                if ($resultado->num_rows > 0) :
                    while ($cliente = $resultado->fetch_assoc()) :
                        ?>
                        <tr>
                            <td><?php echo $cliente['id']; ?></td>
                            <td><?= $cliente['nome'] ?></td>
                            <td><?= $cliente['email'] ?></td>
                        </tr>
                <?php
                    endwhile;
                endif;
                ?>

        </table>
    </div>
</body>

</html>