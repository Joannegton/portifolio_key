<?php
    session_start();

    if(empty($_POST) or (empty($_POST['usuario']) or (empty($_POST['senha'])))){
        print "<script>location.href='index.html';</script>";
    }

    include('conexao_db.php');


    $usuario = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios
            WHERE email = '{$usuario}'
            AND senha = '{$senha}'";


    $res = $conn->query($sql) or die($conn->error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    if($qtd > 0){
        $_SESSION["email"] = $usuario;
        $_SESSION["nome"] = $row->nome;
  
        print "<script>location.href='post.html';</script>";
    } else{
        print "<script>alert('Usuário e/ou senha incorreto(s)');</script>";
        print "<script>location.href='login.html';</script>";
    }





//    $values = json_encode($_POST);
//    file_put_contents('posts.json', $values, FILE_APPEND);