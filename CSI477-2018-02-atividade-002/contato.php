<?php 
 include_once('funcoes.php');
 cabecalho();
 ?>
      <div class="container">

	      <!-- Main component for a primary marketing message or call to action -->
	      <div class="jumbotron">
	        <h1>Bem vindo ao Petshop</h1>
	        <p>Cuidado, carinho e atenção para seu animal de estimacão.</p>
	      </div>

	      <div class="clearfix"></div>

	    </div> 
		
		<section>
			<div class="container">
				   
				<div class="page-header">
				    <h1>Formulário de Contato</h1>
				</div>

				<div class="row">
				     
				    <div class="col-md-8">
				       <h4>Informe corretamente seus dados para entrar em contato</h4>
				       
				       <form method="POST" action="enviarEmail.php">				         
				         <div class="form-group">
				           <label for="nome">Nome</label>
				           <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
				         </div>

				         <div class="form-group">
				           <label for="email">Email</label>
				           <input type="email" class="form-control" id="email" placeholder="example@example.com" required>
				         </div>
							
						<div class="form-group">
						  <label for="assunto">Assunto</label>
						  <input type="text" class="form-control" id="assunto" placeholder="Assunto">
						</div>

				         <div class="form-group">
				           <label for="mensagem">Mensagem:</label>
				           <textarea class="form-control" rows="5" id="mensagem" required></textarea>
				         </div>

						<input type="submit" class="btn btn-primary" value="Enviar" required>

						</form>
					</div>
				</div>
			</div>
		</section>			
	<?php 
		rodape();
	 ?>