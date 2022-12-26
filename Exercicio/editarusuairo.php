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
    <div class="main">
    <div class="form-container">
        <div class="form-header">
            <h3>Editar Cadastro do Usuario!!</h3>
            <?php

            include_once('conexao.php');

            if(isset($_GET['id']))
            {
              $id = $_GET['id'];
              $sql = "SELECT * FROM usuarios where id = '$id'";
              $resultado = mysqli_query($conexao, $sql);
              $dados = mysqli_fetch_array($resultado);
            }
            ?>
        </div>
        <!--Formulario de Alteração do Usuario-->
        <form action="delete.php" method="POST">
            <div>
              <input name="usuario" id="usuario" placeholder="Username" value="<?php echo $dados['usuario'];?>" class="inputs required">
            </div>
            <br>
            <div>
              <input name="senha" id="senha" placeholder="Senha" value="<?php echo $dados['senha'];?>" type="text" class="inputs required">
            </div>
            <br>
            <button type="submit" id="update" name="update" class="btn>">Concluir a Edição</button>
            <input type="hidden" name="id" value="<?php echo $id ?>">
        </form>
        </div>

        <!--Animação em arquivo JSON do site Lottie Files-->
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets7.lottiefiles.com/packages/lf20_smww5edn.json"  background="transparent"  speed="1"  style="width: 600px; height: 400px;"  loop  autoplay></lottie-player> 
    </div>
</body>




<!--Validação do Usuario com JavaScript Puro-->

<script>
    const form = document.getElementById('form');
    const campos = document.querySelectorAll('.required');
    const spans = document.querySelectorAll('.span-required');
    const emailRegex = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  
    function setError(index){
      campos[index].style.border = '2px solid #e63636';
      spans[index].style.display = 'block';
  
    }
  
    function removeError(index){
      campos[index].style.border = '';
      spans[index].style.display = 'none';
    }
  
    function nameValidate(){
      if(campos[0].value.length < 3)
      {
        setError(0);
      }
      else{
        removeError(0);
      }
   }
   
   function emailValidate(){
    if(!emailRegex.test(campos[1].value))
    {
      setError(1);
    }
    else{
      removeError(1);
    }
   }
  
   function mainPasswordValidate(){
    if(campos[2].value.length < 8)
    {
       setError(2);
    }
    else{
      removeError(2);
      ComparePassword();
    }
   }
  
   function ComparePassword(){
    if(campos[2].value == campos[3].value && campos[3].value.length >= 8)
    {
      removeError(3);
    }
    else {
      setError(3);
    }
   }
    </script>
</html>