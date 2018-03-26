
function numberToReal(numero) {
    var numero = numero.toFixed(2).split('.');
    numero[0] = "R$ " + numero[0].split(/(?=(?:...)*$)/).join('.');
    return numero.join(',');
}

var x = numberToReal(9999000.33);
console.log(x);

var y = numberToReal(100000);
console.log(y);

var z = numberToReal(10.50);
console.log(z);

$.ajax({
  type:'GET',   //Definimos o método HTTP usado
  dataType: 'json', //Definimos o tipo de retorno
  url: 'http://api.promasters.net.br/cotacao/v1/valores',//Definindo o arquivo onde serão buscados os dados
  success: function(getdados){
  resposta(getdados);
    
    console.log(getdados.valores.ARS.nome + " = " + "R$" +  getdados.valores.ARS.valor);
    console.log(getdados.valores.EUR.nome + " = " + "R$" + getdados.valores.EUR.valor);
    console.log(getdados.valores.BTC.nome + " = " + "R$" + getdados.valores.BTC.valor);
    console.log(getdados.valores.GBP.nome + " = " + "R$" + getdados.valores.GBP.valor);
    console.log(getdados.valores.USD.nome + " = " + "R$" + getdados.valores.USD.valor); 
    
  }
});

function resposta(getdados){
var nome = [];

nome.push(getdados.valores.ARS.nome);
nome.push(getdados.valores.EUR.nome);
nome.push(getdados.valores.BTC.nome);
nome.push(getdados.valores.GBP.nome);
nome.push(getdados.valores.USD.nome);

var val = [];
val.push(getdados.valores.ARS.valor);
val.push(getdados.valores.EUR.valor);
val.push(getdados.valores.BTC.valor);
val.push(getdados.valores.GBP.valor);
val.push(getdados.valores.USD.valor);


//alert(nome[0]);



var data = [{
  "Name": nome[0] ,
  "Valor": val[0]}, {
  "Name": nome[1],
  "Valor": val[1] }, {
  "Name": nome[2] ,
  "Valor": val[2] }, 
  {
  "Name": nome[3],
  "Valor": val[3]
}, {
  
  "Name": nome[4],
  "Valor": val[4]
  }];


/* 
Dynamic creation of table is not the best practice...
Better way to clone existing table and fill it with data.
*/
$(data).each(function(i, elem) {
  $('#tCambio').append('<tr><td>' + elem['Name'] +
    '</td><td>' +"R$ " + elem['Valor'] + '</td><td>' +
    '</tr>')
});


  // })


// Delete Button Done!!!
// $('.btn-danger').on('click', function(){
//   $(this).parents('tr').remove();
// })

}