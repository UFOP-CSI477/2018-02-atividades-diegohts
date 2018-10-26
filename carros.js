var valorselect = function(){
 	var select = $("#competidores");
 	var j =0;
 	for (var i = 0; i < select.val(); i++) {
 		j++;
 		var tr = "<tr>" +
 					"<td>"+ j + "</td>" + 
 					"<td> <input type='text' name='nome'> </td>" + 
 					"<td> <input type='text' name='segundos'> </td>" + 
 				 "</tr>";
 		$("#tabela").append(tr); 	
 	}
 	
};

var processa = function(){
	
	var linhas = $("#tabela").find("tbody").find("tr");

	var jogador = [];

	  for (var i = 0 ; i < linhas.length; i++) {
		 
		 //var largada = $(linhas[i]).children("td:first").text();
		 var nome = $(linhas[i]).children("td:nth-child(2)").find("input[name='nome']").val();
		 var tempo = $(linhas[i]).children("td:nth-child(3)").find("input[name='segundos']").val();
		 
		 jogador.push({//"largada":largada,
		 				"nome":nome,"tempo":tempo});
		 
	 } 
     
     jogador.sort(function(a,b){return a.tempo - b.tempo;});

     var j = 0;
     var vencedor = "";

      for (var i = 0; i < jogador.length; i++){
        if(jogador[i].tempo !== ""){
          j++;
          if(j == 1){
            vencedor = "Vencedor(a)!";
          }
          else{
            vencedor = "";
          }
          var tr = "<tr>" +
                      "<td>" + j + "</td>" +
                      "<td>" + jogador[i].nome + "</td>" +
                      "<td>" + jogador[i].tempo + "</td>" +
                      "<td>" + vencedor + "</td>" +
                   "</tr>";

          $("#tabela").append(tr);
      		}
        }
     console.log(jogador);

};	 