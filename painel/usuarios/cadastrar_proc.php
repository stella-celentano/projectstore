<?php

session_start();

require_once '../usuarios/conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "SELECT id,usuario FROM usuarios
        WHERE usuario = '$usuario'";
$resultado = mysqli_query($banco, $sql);
$registro = mysqli_fetch_assoc($resultado);

if ($registro['usuario'] == $usuario) {
    echo "Esse Usuário já existe!";
} else {
    $sql = "INSERT INTO usuarios (nome,sobrenome,email,telefone,cidade,estado,usuario,senha)
    VALUES('$nome','$sobrenome','$email','$telefone','$cidade','$estado','$usuario','$hash')";
    mysqli_query($banco, $sql);
    echo mysqli_error($banco);
    echo "Usuário cadastrado com sucesso!";
}