<?php 
	
	session_start();

	require_once('db.class.php');

	$name = $_POST['name'];
	$password = $_POST['password'];

	$sql = "SELECT name, email, type FROM users WHERE name = '$name' AND password = '$password' ";

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$resultado_id =	mysqli_query($link, $sql);

	if ($resultado_id) {
		
		$dados_usuario = mysqli_fetch_array($resultado_id);
		//var_dump($dados_usuario);
		if (isset($dados_usuario['name'])) {
			//echo "Usuário existe";
			$_SESSION['name'] = $dados_usuario['name'];
			$_SESSION['email'] = $dados_usuario['email'];
			$_SESSION['type'] = $dados_usuario['type'];
			

				if($dados_usuario['type'] == 1){
				//Se é cliente
				header("location:index.php");
			
				} else {
				//Senão é administrador
				header('Location: listarProdutos.php');//temporario
				}
			} else {
			//echo "Usuário não existe!";
			header('Location: index.php?erro=1');
			}	
	} else {
		echo "Erro na execução da consulta, favor entrar em contato com o Administrador do site";
	}

 ?>