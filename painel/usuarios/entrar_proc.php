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
        WHERE usuario = '$usuario'";
$resultado = mysqli_query($banco, $sql);
$registro = mysqli_fetch_assoc($resultado);

if ($registro['usuario'] == 'admin'){
    $_SESSION['usuario'] = $registro['id'];
    header('location: entrarEcadastrar.php');
} else if (password_verify($senha, $registro['senha'])) {
    $_SESSION['usuario'] = $registro['id'];
    header('location: entrarEcadastrar.php');
} else {
    echo "Usuário ou Senha incorreto!";
}
