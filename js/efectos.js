//aqui va la url que tenga de momento
var miwebUrl="http://localhost/xampp/paginas/Anuncios.php";
function ventanas(valor){
  if (valor==1){
    $('.Error').fadeOut(100)
    $('#cogebox').fadeIn(500);
  }else if(valor==2){$('#cogebox').fadeOut(500);}
}
