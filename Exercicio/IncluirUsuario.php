<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
</head>
<body class="themed">

<?php 

include_once('conexao.php');
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];



$sqlinsert = "insert into usuarios (usuario, senha) 
values('$usuario','$senha')";

$resultado = mysqli_query($conexao, $sqlinsert);
if (!$resultado){
    die('Query Invalida: ' .mysqli_error($conexao));
}
else
{
    echo "";
}
mysqli_close($conexao);
?>

<br> <br>
    <div class="main">
    <div class="form-container">
        <div class="form-header">
        <br><br><br><br><br>
            <h3>Usuario Cadastrado com Sucesso!!</h3>
            <br>
            <a href="login.html" type="submit" value="Submit">Voltar a tela de Login!</button>
        </div>
        <!--Formulario de Cadastro do Usuario-->
        <form action="IncluirUsuario.php" method="POST">
            <div>
            </div>
            <br>
        </div>
        <!--Animação em arquivo JSON do site Lottie Files-->
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets8.lottiefiles.com/packages/lf20_ezug9ul4.json"  background="transparent"  speed="1"  style="width: 600px; height: 500px;"  loop  autoplay></lottie-player>
    </div>
</body>


   

</html>