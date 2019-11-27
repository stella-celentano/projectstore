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
$preco = filter_input(INPUT_POST,"preco",
FILTER_SANITIZE_SPECIAL_CHARS);
$preco = mysqli_real_escape_string($banco,$preco);

$destino = "../../img/".$_FILES['imagem']['name'];
move_uploaded_file($_FILES['imagem']['tmp_name'],$destino);
$imagem = $_FILES['imagem']['name'];

$sql = "INSERT INTO produtos (nome,categoria,descricao,preco,imagem) 
        VALUES ('$nome','$categoria','$descricao','$preco','$imagem')";
mysqli_query($banco,$sql);

header('location: inserir_produto.php');


