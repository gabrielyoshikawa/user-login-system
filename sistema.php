<?php
// TELA QUANDO LOGADO
    session_start();
    if((!isset($_SESSION['email']) == true and (!isset($_SESSION['senha']) == true)))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);  
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Sistema</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(82, 229, 231), rgb(19, 12, 183));
            color: white;
            text-align: center;
            }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">Menu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            </button>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger">Sair</a>
        </div>
    </nav>
    <br>
    <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
    <br><br>
    <select> 
        <option> Escolha o treino </option>
        <option> Braço </option>
        <option> Perna </option>
        <option> Ombro </option>
        <option> Costas </option>
        <option> Peito </option>
    </select>
</body>
</html>