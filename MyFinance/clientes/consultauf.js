$(document).ready(function(){
	$('#txtcoduf').append('<option value="">'+'SELECIONE'+'</option>');
	$.ajax({
		type:'POST',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: 'buscauf.php',//Definindo o arquivo onde serão buscados os dados
		success: function(getdados){
			for(var i=0;getdados.length>i;i++){
				//Adicionando registros retornados na tabela
				$('#txtcoduf').append('<option value="'+(getdados[i].CodEstado)+'">'+(getdados[i].CodEstado)+'</option>');
			}
		}
	});
});