$(function(){
listar();
});
//funcion de listar los archivos(objetos)
function listar(){
 __ajax("php/ConsultaPais.php","")
 .done( function( info ){
   var paises= JSON.parse(info);
  var html="";
   for(var i in paises.data){
    html+=`<a id="${paises.data.Pais}"href="Anuncios.php">${paises.data[i].Pais},</a>`
   }
   $("#paises").html( html );
 });
}
// funcion para recibir los archivos enviados
function __ajax(url, data){
var ajax= $.ajax({
    "method":"POST",
    "url":url,
    "data":data
  })
  return ajax
}
