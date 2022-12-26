<?php 

include_once('conexao.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


    $alteracao = "UPDATE usuarios SET usuario='$usuario', senha='$senha' WHERE id='$id'";

    $resultado = $conexao->query($alteracao);
}

header('location: UsuariosCadastrados.php');