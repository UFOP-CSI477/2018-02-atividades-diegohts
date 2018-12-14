<?php

    require_once('db.class.php');
    
    $quantidade = $_POST['quantidade'];
    $data = $_POST['data'];
    
    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "INSERT INTO compras (user_id, produto_id, quantidade, data) VALUES ('$quantidade', '$data')";

    //executar a query
    if(mysqli_query($link, $sql)){
        $_SESSION['mensagem'] = "Usuário Cadastrado com sucesso! ";
        header("location:index.php");
        exit;
    }else{
        echo "Erro ao registrar o usuário!";
    }