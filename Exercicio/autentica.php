<?php



        if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
        {

            include_once('conexao.php');

            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];


            $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'";

            $resultado = $conexao->query($sql);


            if(mysqli_num_rows($resultado) < 1)
            {
                header('Location: login.html');
            }
            else
            {
                header('Location: UsuariosCadastrados.php');
            }
        }
        else
        {
            header('Location: login.html');
        }
?>
