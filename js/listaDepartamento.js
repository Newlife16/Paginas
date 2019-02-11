$(function(){
delistDepartamento();
});
//funcion de listar los archivos(objetos)
function delistDepartamento(){
 __ajax2("php/consultaListaDepartamento.php","")
 .done( function( info ){
   var depart= JSON.parse(info);
   console.log(depart);
   var html1="";
   for(var i in depart.depart){
    html1+=`<option value="${depart.depart[i].departamento}"> ${depart.depart[i].departamento}</option>`;
   }
$("#listaDepartamento").html(html1);

 });
}
// funcion para recibir los archivos enviados
function __ajax2(url, depart){
var ajax= $.ajax({
    "method":"POST",
    "url":url,
    "data":depart
  })
  return ajax
}
