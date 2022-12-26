<?php 

$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_banco = "banco2";

$conexao = mysqli_connect($nome_servidor, $nome_usuario, $senha, $nome_banco);

if(mysqli_connect_error()){
echo "Problemas com a conexão com o banco de Dados, Por favor Verificar!".mysqli_connect_error();
}
else
{
 echo "";
}

?>