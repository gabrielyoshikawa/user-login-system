<?php
// CONECTA AO BANCO DE DADOS
    $db_serverName = 'localhost';
    $db_Username = 'root';
    $db_password = '';
    $db_name = 'projeto';

    $connect = new mysqli($db_serverName, $db_Username, $db_password, $db_name);

    if($connect->connect_errno)
    {

        echo "Erro ao se conectar" . mysqli_connect_error();
    }
    else{
        echo "Conexão Efetuada com sucesso";
    }

?>