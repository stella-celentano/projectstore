<?php
require_once '../usuarios/restrito.php';
require_once '../usuarios/conexao.php';

$nome = filter_input(INPUT_POST,"nome",
            FILTER_SANITIZE_SPECIAL_CHARS);
$nome = mysqli_real_escape_string($banco,$nome);

$categoria = filter_input(INPUT_POST,"categoria",
            FILTER_SANITIZE_SPECIAL_CHARS);
$categoria = mysqli_real_escape_string($banco,$categoria);

$descricao = $_POST['descricao'];
$decricao = mysqli_real_escape_string($banco,$descricao);

$preco = filter_input(INPUT_POST,"preco",
FILTER_SANITIZE_SPECIAL_CHARS);
$preco = mysqli_real_escape_string($banco,$preco);

$id = intval($_POST['id']);

$destino = "../../img/".$_FILES['imagem']['name'];
move_uploaded_file($_FILES['imagem']['tmp_name'],$destino);
$imagem = $_FILES['imagem']['name'];

$sql = "UPDATE produtos SET nome = '$nome', categoria = '$categoria',
        descricao = '$descricao', preco = '$preco', imagem = '$imagem'
        WHERE id = $id";
mysqli_query($banco,$sql);

header("location: listar.php");
