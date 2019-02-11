$(function(){
listar();
});
//funcion de listar los archivos(objetos)
function listar(){
 __ajax("php/ConsultarAnuncios.php","")
 .done( function( info ){
   //console.log( info );
   var anuncios= JSON.parse(info);
   console.log(info);
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
