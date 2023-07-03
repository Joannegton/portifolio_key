<?php
    $hostname = 'localhost';    
    $db = 'portifolio_key';
    $usuario = 'root';
    $senha = '';

    $conn = new mysqli($hostname, $usuario, $senha, $db);

    if($mysqli->connect_errno){
        echo 'Falha ao conectar: (' . $mysqli->connect_errno . ')' . $mysqli->connect_errno;
    } else{
        echo "Conectado ao Banco de dados";
    }
