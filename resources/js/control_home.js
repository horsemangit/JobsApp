var NameServer = location.protocol + '//' + location.host + '/';
$(document).ready(function() 
{
    $("#buscar").click(function(){
      window.location.href = NameServer + "empleo/index.php/home/vacantes";
    });

    $("#vacantes").click(function()
    {
      window.location.href = NameServer + "empleo/index.php/home/vacantes";
    });

    /* INICIO DE SESION INDEX/HOME */
    	$('#formlogin').on('submit',function(event)
      {
        /* El event.preventDefault(); evita que hayan esos "recargos de pagina"  */
        event.preventDefault();
        /* Con (this).serializeArray(); recojo todos los datos o parametros del formulario que voy a enviar (los name="") */
  		  var cadena = $(this).serializeArray();
  		  /* console.log(cadena); */
      		$.ajax({
        		      url: NameServer + "empleo/index.php/home/iniciar_sesion",
        		      type: 'POST',
        		      data: cadena
      		})
          .done(function(respuesta)
          {
            var resultado = $.parseJSON(respuesta);
            /* console.info(resultado); */
        	  if(resultado <= 0)
        		{
        			swal({
        		        title: "Upps!",
        		        text: "El email o contraseñas son incorrectos!",
            		    type: "warning",
        		        confirmButtonText: "Entendido"
        		      });
        		}
        	  else
           	{
           		window.location.href = NameServer + "empleo/index.php/usuario";
           	}
          })
        	.fail(function() {
         		alert("Error");
         	});		 
    	});	

    /* INICIO SESION NUEVO USUARIO */
    	$('#formularioHV').on('submit',function(event)
      {
        event.preventDefault();
        var cadena = $(this).serializeArray();

          $.ajax({
                  url: NameServer + "empleo/index.php/home/registrar_usuario",
                  type: 'POST',
                  data: cadena
          })
          .done(function(respuesta)
          {
            var resultado = $.parseJSON(respuesta);
            if(resultado)
            {
              window.location.href = NameServer + "empleo/index.php/usuario/registro_informacion";
            } 
            else
            {
              swal({
                    title: "Error!",
                    text: "El Usuario No Se Creo. ¡VERIFIQUE!",
                    type: "error",
                    confirmButtonText: "Cerrar"
                  });      
            }
          })
          .fail(function() {
            alert("Error");
          });
      });

      /* VIEW RESTAURAR CONTRASEÑA */
      $("#restore_password").click(function() {
          window.location = (NameServer + "empleo/index.php/home/login_restore");
      });
      

      /* RECUPERAR CONTRASEÑA */
      $('.form-signin').on('submit',function(event)
      {
        event.preventDefault();
        var cadena = $(this).serializeArray();
        

          $.ajax({
                  url: NameServer + "empleo/index.php/home/sendMail_pass",
                  type: 'POST',
                  data: cadena
          })
          .done(function(respuesta)
          {            
            var resultado = $.parseJSON(respuesta);
            if(resultado == undefined){
              return;
            }

            if(resultado.title == "Error"){
              swal("Error", resultado.mensaje, "error");
              return;
            }

            if(resultado.title == "Enviado")
            {
              swal({
                      title: "Enviado...",
                      text: resultado.title,
                      type: "success",
                      confirmButtonText: "Cerrar"
                    },
                    function(isConfirm)
                    {
                      if(isConfirm)
                      {
                        window.location = (NameServer + "empleo/");
                      }
                      else{
                        window.location = (NameServer + "empleo/");
                      }
                    });               
              
               return;
            }

            if(resultado.title == "problema"){
              swal("Upps!", resultado.mensaje, "error");
              return;
            }        

            if(resultado.title == "errorcito"){
              swal("Fallo!", resultado.mensaje, "error");
              return;
            }   
          })
          .fail(function() {
            alert("Error");
          });
      });

      ////////////////////////// TABLA VACANTES %N&%0&$U@5#u&534%&/r(9)io //////////////////////////
      var tabla_mostrar = $('#tabla_publicaciones').DataTable({
              "language": {                
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Consultar Ofertas:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate":
                 {
                  "sFirst":    "Primero",
                  "sLast":     "Último",
                  "sNext":     "Siguiente",
                  "sPrevious": "Anterior"
                },
                "oAria":
                 {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                
                }
                    },

                  "columnDefs": [
                      {
                          "targets": [ 0 ],
                          "visible": false,
                          "searchable": false
                      },
                      {
                          "targets": [ 1 ],
                          "visible": false
                      },
                      {
                          "targets": [ 7 ],
                          "visible": false
                      },
                      {
                          "targets": [ 8 ],
                          "visible": false
                      },
                      {
                          "targets": [ 9 ],
                          "visible": false
                      },
                      {
                          "targets": [ 10 ],
                          "visible": false
                      },
                      {
                          "targets": [ 11 ],
                          "visible": false
                      },
                      {
                          "targets": [ 12 ],
                          "visible": false
                      }, 
                      {
                          "targets": [ 13 ],
                          "visible": false
                      },                   
                      {
                          "targets": [ 14 ],
                          "visible": false
                      },

                  ]

                }); 

    /* TABLE SHOW VACANTES */
      listar_datos();
        function listar_datos()
        {      
          $.ajax({
              url: '../home/mostrar_vacantes',
              type: 'POST'
            })
          .done(function(respuesta)
          {
            var resultado = $.parseJSON(respuesta);
            /* console.info(resultado); */
            for (var i = resultado.length - 1; i >= 0; i--) 
            {
              var rowNode = tabla_mostrar
                .row.add([
                            resultado[i].public_id,
                            resultado[i].public_usu_id,
                            resultado[i].public_fecha_publicacion,
                            '<b>' + resultado[i].public_tipovacante + '</b>',
                            resultado[i].public_descripcion.substring(0,40) + "...",
                            resultado[i].ciu_nombre + "/" + resultado[i].dpto_nombre,                                    
                            resultado[i].cat_descripcion,
                            resultado[i].public_salario,                        
                            resultado[i].public_fecha_contratacion,             
                            resultado[i].public_cant_vacantes,
                            resultado[i].nives_descripcion,
                            resultado[i].public_anos_experiencia,
                            resultado[i].public_dispone_viajar,
                            resultado[i].public_cambio_residencia,
                            resultado[i].cat_descripcion          
                          ])
                    .draw()
                .node();
            }
          })
          .fail(function(){
            console.log("error");
          });  
        }

    /* BODY TABLE PUBLICACIONES */
      $('#tabla_publicaciones tbody').on('click', 'tr', function ()
       {
          var data = tabla_mostrar.row(this).data();
          var id_publicacion = data[0];
          var muestra = location.replace('../vacantes/detalle_vacante/' + id_publicacion);
        });
});  

    /* POSTULACION */
    $('#postularse').submit(function(event)
    {
      event.preventDefault();
      //var id_publicacion= $('#id_publicacion').val();
      //var id_usuario = $('#id_usuario').val();
      var cadena = $(this).serializeArray();//{'id_publicacion': id_publicacion,'id_usuario': id_usuario};
      /* console.log(cadena); */
        $.ajax({
          url: NameServer + "empleo/index.php/usuario/aplica_oferta",
          type: 'POST',
          data: cadena
        })
        .done(function(respuesta)
         {
            var resultado = $.parseJSON(respuesta);
            if(resultado == undefined){
              return;
            }

            if(resultado.estado == "problema"){
              swal("Espera...!", resultado.mensaje, "error");
              return;
            }

            if(resultado.estado == "nologin"){           
               $('#ModalLogin').modal();  
               return;
            }

            if(resultado.estado == "error"){
              swal("Upps!", resultado.mensaje, "error");
              return;
            }

            if(resultado.estado == "ok"){
              swal("Buen Trabajo!", resultado.mensaje, "success");
              return;
            }              
        })
        .fail(function() {
          console.log("error");
        });
    });    
     
    /* ENVIAR DATOS POR POST A PHP POR MEDIO DE UN OBJETO */

    /*  var parametros = {'id_publicacion':  id_publicacion};
        parametros.public_usu_id = usu_id,
        parametros.public_fecha_publicacion = fecha_publicacion,
        parametros.public_tipovacante = tipovacante,
        parametros.dpto_nombre = nombre_departamento,
        parametros.public_fecha_contratacion = fecha_contratacion,
        parametros.public_salario = salario,
        parametros.public_descripcion = descripcion,
        parametros.public_cant_vacantes = cant_vacantes,
        parametros.public_educacion_minima = educacion_minima ,
        parametros.public_anos_experiencia = anos_experiencia,
        parametros.public_dispone_viajar = dispone_viajar,
        parametros.public_cambio_residencia = cambio_residencia,

        console.log(parametros);
            $.ajax({
              url: '../index.php/detalle_vacante/detalle_vacante',
              type: 'POST',
              data: parametros,
            })
            .done(function(respuesta) {
              var resultado = $.parseJSON(respuesta);
              console.log(resultado);
              //window.location.href = "../index.php/detalle_vacante";

            })
            .fail(function() {
              console.log("error");
            })     
          });
      */