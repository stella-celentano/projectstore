<?php

session_start();

require_once '../usuarios/conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$hash = password_hash($senha, PASSWORD_DEFAULT);

if ($usuario == "" || $usuario == null) {
    echo "<script language = 'javascript' type = 'text/javascript'>
    alert('O campo Usuário deve ser preenchido');window.location.href='entrarEcadastrar.php';
    </script>";
} else {
    
        $sql = "INSERT INTO usuarios (nome,sobrenome,telefone,cidade,estado,usuario,senha)
                VALUES(''$nome','$sobrenome','$telefone','$cidade','$estado','$usuario','$hash')";
         mysqli_query($banco, $sql);

        
            echo "<script language = 'javascript' type = 'text/javascript'>
            alert('Usuário cadastrado com sucesso!');window.location.href='entrarEcadastrar.php';
            </script>";
       
        }
    

