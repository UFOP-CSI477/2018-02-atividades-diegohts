<?php
    
    session_start();
    require_once('db.class.php');
    
    //Cadastrar os registros
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];


    $msg = false;

        if(isset($_FILES['imagem'])){
            $extensao = strtolower(substr($_FILES['imagem']['name'], -4)); // pega a extensao do arquivo
            $novo_nome = md5(time()) . $extensao; //define o nome do arquivo / criptografia de imagem (mas não é interessante pois não queremos imagem duplicada)
            $diretorio = "imagens/"; //define o diretorio para onde enviaremos o arquivo

            move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio .$novo_nome); //efetua o upload

            
        }
    

    //Conexão com o BD
    $objDb = new db();
    $link = $objDb->conecta_mysql();
    //Inserindo os novos dados ao BD com os respectivos campos
   if($id != ''){

    if($_SESSION['type'] == 3){
        $sql = "UPDATE produtos SET preco = '$preco', imagem = '$novo_nome' WHERE id = $id";
    }else{
        $sql = "UPDATE produtos SET nome = '$nome', preco = '$preco', imagem = '$novo_nome' WHERE id = $id";
    }

   } else {

    if($_SESSION['type'] == 3){
        echo '<script>
        alert("O operador não pode cadastrar produtos.");
        location.href="listarProdutos.php";
        </script>';
        die();
    }
     
     $sql = "INSERT INTO produtos (id, nome, preco, imagem) VALUES ('$id', '$nome', '$preco', '$novo_nome')";
    }

    //executar a query
    if(mysqli_query($link, $sql)){
      //echo "Emite um alerta se deu certo o cadastro de um novo registro";
       echo "<script>
        alert('Foi realizado com sucesso!   Aperte OK');
       location.href='listarProdutos.php'</script>";
    }else{
       //echo "Algo deu errado ao cadastrar";
        echo "<script>
         alert('Erro...     Aperte OK para voltar!');
        location.href='cadastraNovosProdutos.php'</script>";
    }

?>