<?php
// SEGURANÇA
// QUANDO CLICKA NO BOTÃO DE SAIR APAGA A SESSÃO
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);  
    header('Location: login.php');
?>