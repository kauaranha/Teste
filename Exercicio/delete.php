<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
</html>


<?php
include_once 'conexao.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$sql = "DELETE FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql);

if($resultado && $sql){
    function myAlert($msg, $url){
        echo '<script language="javascript">alert("'.$msg.'");</script>';
        echo "<script>document.location = '$url' </script>";
    }

    myAlert("Registro excluído com sucesso.","UsuariosCadastrados.php");
}
else {
    die ('não foi possível realizar a exclusão.'.mysqli_error($conexao));
}
header('Location: UsuariosCadastrados.php');
?>