<?php
// VERIFICA SE O LOGIN BATE COM O BANCO DE DADOS
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
        $result = $connect->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            // APAGA AS INFORMAÇÕES DA SESSÃO E RETORNA AO MENU
            unset($_SESSION['email']);
            unset($_SESSION['senha']);    
            header('Location: login.php');
        }
        else
        {
            // CONSEGUE FAZER LOGIN
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
    else
    {
        // VOLTA AO MENU
        header('Location: login.php');
    }

?>