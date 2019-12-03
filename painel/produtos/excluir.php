<?php
require_once '../usuarios/conexao.php';

$id = intval($_GET['id']);

$sql = "SELECT imagem FROM produtos
        WHERE id = $id LIMIT 1";
        $resultado = mysqli_query($banco,$sql);
        $noticia = mysqli_fetch_assoc($resultado);

// Apaga um arquivo
unlink('img/'.$produto['imagem']);

$sql = "DELETE FROM produtos WHERE id = $id";
mysqli_query($banco,$sql);

header("location: listar.php");