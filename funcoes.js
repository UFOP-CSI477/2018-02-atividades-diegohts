$(document).ready(function(){

	console.log("Documento carregado.");

	$('#botao').click(function () {
      var peso = $('#peso').val();
      var altura = $('#altura').val();
      var imc = peso / (altura * altura);

           // Apresentar o resultado
           $('#resultado').val(imc);

     if (imc < 18.5) {
     	document.dados.classificacao.value = "Subnutrição";
     }
	else if(imc >= 18.5 && imc <= 24.9){
		document.dados.classificacao.value = "Peso Saudável";
	}
	else if(imc >= 25 && imc <= 29.9){
		document.dados.classificacao.value = "Sobrepeso";
	}
	else if(imc >= 30 && imc <= 34.9){
		document.dados.classificacao.value = "Obesidade grau 1";
	}
	else if(imc >= 35 && imc <= 39.9){
		document.dados.classificacao.value = "Obesidade grau 2";
	}
	else if(imc >= 40){
		document.dados.classificacao.value = "Obesidade grau 3";
	}
	
	});
 
});