<?php
session_start();

require_once "conexao.php";

$usuario = filter_input(
    INPUT_POST,
    'usuario',
    FILTER_SANITIZE_SPECIAL_CHARS
);

$senha = filter_input(
    INPUT_POST,
    'senha',
    FILTER_SANITIZE_SPECIAL_CHARS
);


$sql = "SELECT id,usuario,senha FROM usuarios
        WHERE login = '$usuario'";
$resultado = mysqli_query($banco, $sql);
$registro = mysqli_fetch_assoc($resultado);

if (password_verify($senha, $registro['senha'])) {
    $_SESSION['usuario'] = $registro['id'];
    header('location: index.php');
} else {
    echo "Senha incorreta!";
}