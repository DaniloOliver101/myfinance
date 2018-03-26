$(document).ready(function(){
	//$('#tmetas').Empty();
$.get('buscametas.php',[], function(response){
	var r=JSON.parse(response);
			for(var i=0;r.length>i;i++){
				$('#tmetas').append('<tr><td>'+(r[i].Valor)+'</td>'
					+'<td>'+r[i].DataConclusao+'</td>'
					+'<td>'+r[i].Descricao+'</td>'
					+'<td>'+r[i].descmotivo+'</td>'
					+'<td>'+r[i].CodMeta+'</td></tr>');
			}

              })

	})