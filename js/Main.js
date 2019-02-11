
jQuery(document).on('submit','#fromlg',function(event){
  $('.Error').slideUp('slow');
            event.preventDefault();
            jQuery.ajax({
                url:'php/consulta.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend:function(){
                  $('.Botonlg').val('Validando....');
                }
              })

              .done(function(respuesta){
                console.log(respuesta);
                if (!respuesta.error) {
                  if (respuesta.Tipo_usuario=='Admin') {
                    location='Admin.php';
                  }else if (respuesta.Tipo_usuario=='usuario') {
                    location='panel.php';
                  }
                }else {
                  $('.Error').slideDown('slow');
                  setTimeout(function(){
                  $('.Error').slideUp('slow');
                },3000);
                $('.Botonlg').val('Iniciar Sesion');
                }
              })
              .fail(function(resp){
                console.log(resp.responseText);
              })
              .always(function(){
                console.log("complete");
            });
      });
