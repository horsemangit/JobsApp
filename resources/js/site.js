var NameServer = location.protocol + '//' + location.host + '/';
$(document).ready(function() 
{
    /* CERRAR SESIÓN */
      $("#cerrar").on("click",function(event)
      {
        event.preventDefault();

          $.ajax({
            url: NameServer + 'empleo/index.php/home/cerrar_sesion',
            type: 'POST',
          })
          .done(function() {
            window.location.replace(NameServer + "empleo/");        
          })
          .fail(function() {
            console.log("error");
          });
      });
});