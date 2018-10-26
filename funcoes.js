$(document).ready(function(){

	console.log("Documento carregado.");

	$('#botao').click(function () {
      var peso = $('#peso').val();
      var altura = $('#altura').val();
      var imc = peso / (altura * altura);

           // Apresentar o resultado
           $('#resultado').val(imc);

	});
 
});