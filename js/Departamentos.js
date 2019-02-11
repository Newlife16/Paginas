$(function(){
depalist();
});
//funcion de listar los archivos(objetos)
function depalist(){
 __ajax2("php/ConsultaDepartamento.php","")
 .done( function( info ){
   var depa= JSON.parse(info);
   console.log(depa);
   var html1="";
   for(var i in depa.depa){
    html1+=`<a id="${depa.depa[i].Departamento}"href="Anuncios.php">${depa.depa[i].Departamento},</a>`;
   }
$("#departamentosScort").html(html1);
$("#departamentosMasajes").html(html1);
$("#departamentosGigolo").html(html1);
$("#departamentosTra").html(html1);
$("#departamentosVideos").html(html1);
$("#departamentosScortG").html(html1);
 });
}
// funcion para recibir los archivos enviados
function __ajax2(url, depa){
var ajax= $.ajax({
    "method":"POST",
    "url":url,
    "data":depa
  })
  return ajax
}
