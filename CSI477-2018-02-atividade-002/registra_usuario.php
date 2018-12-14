<?php

    require_once('db.class.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "INSERT INTO users (name, email, password, type) VALUES ('$name', '$email', '$password', '$type')";

    //executar a query
    if(mysqli_query($link, $sql)){
        $_SESSION['mensagem'] = "Usuário Cadastrado com sucesso! ";
        header("location:index.php");
        exit;
    }else{
        echo "Erro ao registrar o usuário!";
    }

?>