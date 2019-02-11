$(function(){
catelistCategorias();
});
//funcion de listar los archivos(objetos)
function catelistCategorias(){
 __ajax2("php/consultaCategoria.php","")
 .done( function( info ){
   var cate= JSON.parse(info);
   console.log(cate);
   var html1="";
   for(var i in cate.cate){
    html1+=`<option value="${cate.cate[i].titulo}"> ${cate.cate[i].titulo}</option>`;
   }
$("#listaCategoria").html(html1);

 });
}
// funcion para recibir los archivos enviados
function __ajax2(url, cate){
var ajax= $.ajax({
    "method":"POST",
    "url":url,
    "data":cate
  })
  return ajax
}
