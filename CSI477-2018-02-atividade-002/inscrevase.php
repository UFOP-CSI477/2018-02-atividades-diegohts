<?php 
  
  $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
  include_once('funcoes.php');
  cabecalho();
?>

	    <div class="container">
	    	
	    	<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3>Inscreva-se já!</h3>
	    		<br />
				<form method="post" action="registra_usuario.php" id="formCadastrarse">
					<div class="form-group">
						<label for="name">Nome:</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do usuário" required="requiored">
					</div>

					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" required="requiored">
					</div>
					
					<div class="form-group">
						<label for="password">Senha</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required="requiored">
					</div>

					<div class="form-group">

						<label for="type">Tipo</label>
						<select name="type" id="type" class="form-control">
							
							<option value="1" selected>Cliente</option>
							<option value="2">Administrador</option>
							<option value="3">Operador</option>
						</select>	

					</div>				
					
					<button type="submit" class="btn btn-primary form-control">Inscreva-se</button>
				</form>
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			

<?php 
rodape();
 ?>
 