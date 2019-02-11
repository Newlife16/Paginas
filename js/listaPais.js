$(function(){
delistPais();
});
//funcion de listar los archivos(objetos)
function delistPais(){
 __ajax2("php/consultaPais.php","")
 .done( function( info ){
   var pais= JSON.parse(info);
   console.log(pais);
   var html1="<option selected>seleccione la marca</option>";
   for(var i in pais.pais){
    html1+=`<option value="${pais.pais[i].id_Pais}"> ${pais.pais[i].pais}</option>`;
   }
$("#listaPais").html(html1);

 });
}

// funcion para recibir los archivos enviados
function __ajax2(url, pais){
var ajax= $.ajax({
    "method":"POST",
    "url":url,
    "data":pais
  })
  return ajax
}
