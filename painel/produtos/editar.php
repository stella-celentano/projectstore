<?php
require_once "../usuarios/restrito.php";
require_once "painel_de_controle.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Produto</title>

    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
    <link rel="shortcut icon" type="image/x-png" href="../../img/logo.png">
    <link rel="stylesheet" type="text/css" href="../../css/estiloPainelControle.css">

    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:600&display=swap" rel="stylesheet">

    <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#texto',
            plugins: 'print preview fullpage paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            imagetools_cors_hosts: ['picsum.photos'],
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true
        });
    </script>
</head>

<body>
    <div class="corpo">
        <form action="editar_proc.php" method="post">
            <?php
            require_once "../usuarios/conexao.php";
            $id = intval($_GET['id']);
            $sql = "SELECT * FROM produtos
                    WHERE id = $id LIMIT 1";
            $resultado = mysqli_query($banco, $sql);
            $produto = mysqli_fetch_assoc($resultado);
            ?>
            <label for="nome" id="insere_produto">Nome</label><br>
            <input type="text" id="insere_produto" value="<?= $produto['nome'] ?>" name="nome"><br>

            <label for="categoria" id="insere_produto">Categoria</label><br>
            <input type="text" id="insere_produto" value="<?= $produto['categoria'] ?>" name="categoria"><br>

            <label for="descricao" id="insere_produto">Descrição</label><br>
            <textarea id="texto" name="descricao"><?= $produto['descricao'] ?></textarea>
            <br>

            <label for="preco" id="insere_produto">Preço</label><br>
            <input type="text" id="insere_produto" name="preco" value="<?= $produto['preco'] ?>"><br>

            <label for="imagem" id="insere_produto">Imagem</label><br>
            <input type="file" id="insere_produto" name="imagem"><br>


            <input type="hidden" value="<?= $produto['id'] ?>" name="id">

            <br>
            <div id="alinharBtn">
                <button id="btnSalvar" type="submit">Salvar</button>
            </div>
        </form>
    </div>
</body>

</html>