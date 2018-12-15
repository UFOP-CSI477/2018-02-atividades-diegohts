<?php 
	include_once('funcoes.php');
	cabecalho();
?>
	    <div class="container">

	      <!-- Main component for a primary marketing message or call to action -->
	      <div class="jumbotron">
	        <h1>Bem vindo ao Petshop</h1>
	        <p>Cuidado, carinho e atenção para seu animal de estimação.</p>
	      </div>

	      <div class="clearfix"></div>

	    </div>
			<br>
			<br>
			<div class="container">
				<div class="row">
					<?php 
					$objDb = new db();
		    		$link = $objDb->conecta_mysql();

		    		$sql_produtos = "SELECT * FROM produtos";
		   			$resultado_produtos = mysqli_query($link, $sql_produtos);
		   			while($totalProdutos = mysqli_fetch_array($resultado_produtos)){
						mostrarProduto($totalProdutos['id'], $totalProdutos['nome'], $totalProdutos['preco'], $totalProdutos['imagem']);
					  }
					?>
					</div>
				</div>
<?php 
	
	rodape();

 ?>			
