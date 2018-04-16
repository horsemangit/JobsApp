
$(document).ready(function() 
{


    $('#login-form-link').click(function(e)
    {
      $("#formUpdatePassword").delay(100).fadeIn(100);
      $("#formNewAdmin").fadeOut(100);
      $('#register-form-link').removeClass('active');
      $("#display_table_admin").removeClass('active',$('#hide').css( 'display', 'none' ));
      $(this).addClass('active');
      e.preventDefault();
    });

    $('#register-form-link').click(function(e)
    {
      $("#formNewAdmin").delay(100).fadeIn(100);
      $("#formUpdatePassword").fadeOut(100);
      $('#login-form-link').removeClass('active');
      $('#display_table_admin').removeClass('active',$('#hide').css( 'display', 'none' ));
      $(this).addClass('active');
      e.preventDefault();
    });


    $('#display_table_admin').click(function(e)
    {
      tabla_administradores.row().remove();
      listar_datos();
      $("#formNewAdmin").delay(100).fadeIn(100);
      $("#formUpdatePassword").delay(100).fadeIn(100);
      $("#formNewAdmin").fadeOut(100);
      $("#formUpdatePassword").fadeOut(100);
      $('#register-form-link').removeClass('active');
      $('#login-form-link').removeClass('active');
      $(this).addClass('active', $('#hide').css( 'display', 'block' ));
      
      e.preventDefault();
    });

    /* CREAR ADMINISTRADOR */
      	$('#formNewAdmin').on('submit',function(event)
      	{
          	event.preventDefault();
          	var cadena = $(this).serializeArray();
          	/* console.log(cadena); */
	          
            	$.ajax({
              			url: 'crear_nuevo_admin',
	              		type: 'POST',
              			data: cadena,
        		})
            	.done(function(respuesta) 
            	{
              		var resultado = $.parseJSON(respuesta);
              		/* console.log(resultado); */
		                if(resultado <= 0)
                		{
                  		swal({
                        		title: "No se pudo crear el usuario",
                        		text: "Al parecer ya existe este email",
                        		type: "warning",
                        		confirmButtonText: "Entendido",
                      		});
                		}
                		else
                		{
                  			swal({
                        		title: "Muy Bien",
                        		text: "Ahora has creado un nuevo administrador",
                        		type: "success",
                        		confirmButtonText: "OK"
	                       	},		                        	
	                      	function(isConfirm)
	                      	{
		                        if (isConfirm) 
	                        	{
	                          		$('#ModalAdmin').modal('hide');
	                          		tabla_administradores.rows().remove();
	                        	}
	                      	});
                		}
            	})
            	.fail(function() {
              	console.log("error");
            	});
    	});

    /* ACTUALIZAR CONTRASEÑA */
	    $("#updatepass").on('click',function(event)
	    {
	      	event.preventDefault();
	    	var Contrasena = $("#contrasena_user").val();
	      	var Confirmcontrasena = $("#new_contrasena").val();

		    if(Contrasena != Confirmcontrasena || Contrasena == "" || Confirmcontrasena == "" )
		    {
		    	swal("Upps! Intente Nuevamente","Las Contraseñas No Coinciden","warning");
		    }
		    else
	    	{     
		        var cadena = {'nuevacontrasena':Confirmcontrasena};
		         /*console.log(cadena); */
			        $.ajax({
			          url: 'actualiza_contrasena',
			          type: 'POST',
			          data: cadena
			        })
			        .done(function(respuesta)
			        {
			          var resultado = $.parseJSON(respuesta);
			          /* console.log(resultado); */
				        if(resultado)
			          	{
				            swal({
				                  title: "Has Cambiado La Contraseña",
				                  text: "Vuelve A Iniciar Sesión Por Favor!",
				                  type: "success",
				                  confirmButtonText: "ok"
				                 },                  
				                function(isConfirm)
				                {
				                	if (isConfirm) 
				                  	{
					                    window.location.href = 'destruye_session_al_actualizar';
				                  	}
				                });
			            	return (resultado);
				        }
				        else
				        {
				            swal("Error","Ocurrio Un Error Al Cambiar La Contraseña","error");
				           	return (resultado);
				        }
		        	})
			       .fail(function() {
			          console.log("error");
			        });        
			    }
	    });
	
		 $('#table_admin').wrap('<div id="hide" style="display:none"/>');
		var tabla_administradores = $('#table_admin').DataTable({
		responsive: true,
        "language": {                
						"sProcessing":     "Procesando...",
						"sLengthMenu":     "Mostrar _MENU_ registros",
						"sZeroRecords":    "No se encontraron resultados",
						"sEmptyTable":     "Ningún dato disponible en esta tabla",
						"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
						"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
						"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
						"sInfoPostFix":    "",
						"sSearch":         "Consultar:",
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
			        ],

   				});

	/* DB ADMINISTRADORES */
	function listar_datos()
	{
		$.ajax({
				url: 'listar_administradores',
				type: 'POST',
				data: null
	    	})
	    .done(function(respuesta)
	    {
			var resultado = $.parseJSON(respuesta);
			/*console.log(resultado)*/
			for (var i = resultado.length - 1; i >= 0; i--) 
			{
				var rowNode = tabla_administradores
           		.row.add([
	  						resultado[i].usu_id,
	  						resultado[i].usu_nombre,
							resultado[i].usu_apellido,
							resultado[i].usu_correo,
              				'<center><button type="button" name="updateadmin" id="updateadmin" class="btn btn-warning" style="border-radius: 50%;"><span class="glyphicon glyphicon-pencil"></span></center></button>',              				
              				'<center><button type="button" name="deleteadmin" id="deleteadmin" class="btn btn-danger" style="border-radius: 50%;"><span class="glyphicon glyphicon-remove"></span></center></button>',              				
              			])		               
           			.draw()
           		.node();
            }
		})
		.fail(function() {
			console.log("error");
		});
	}

	/* UPDATE ADMINISTRADOR */
		$('#table_admin tbody').on( 'click', '#updateadmin', function ()
    	{ 
	    	var data = tabla_administradores.row( $(this).parents('tr') ).data();
	    	$("#ModalUpdateAdmin").modal('show');

	    	$("#id_admin").val(data[0]);
	    	$("#nombre").val(data[1]);
	    	$("#apellido").val(data[2]);
	    	$("#email").val(data[3]);
		});	


		$("#ActualizarAdmin").submit(function(event) 
		{
			event.preventDefault();
			var cadena = $(this).serializeArray();
			
			$.ajax({
				url: 'data_updateadmin',
				type: 'POST',
				data: cadena,
			})
			.done(function(respuesta) {
				var resultado = $.parseJSON(respuesta);
				if(resultado.title == "Ok")
				{
					swal("Buen trabajo", resultado.mensaje,"success");
					$('#ModalUpdateAdmin').modal('hide');
					tabla_administradores.rows().remove();
					listar_datos();
				}
				
				if(resultado.title == "Error")
				{
					swal("Error", resultado.mensaje,"error");
				}

				if(resultado.title == "Problema")
				{
					swal("Error", resultado.mensaje,"error");
				}		
			})
			.fail(function() {
				console.log("error");
			});			
		});

		/*DELETE ADMIN */
		$("#table_admin tbody").on('click', '#deleteadmin', function(){
			var data = tabla_administradores.row( $(this).parents('tr') ).data();
			swal({
					  title: "Esta seguro(a) de eliminar a este administrador?",
					  text: "Si elimina este usuario sera borrado permanentemente!",
					  type: "warning",
					  showCancelButton: true,
					  confirmButtonColor: "#DD6B55",
					  confirmButtonText: "Si, eliminar!",
					  closeOnConfirm: false
					},
					function(){
					  $.ajax({
								url: 'data_deleteadmin',
								type: 'POST',
								data: {'id_admin' : data[0]}
							})
							.done(function(respuesta) {
								var resultado = $.parseJSON(respuesta);

								if(resultado.title == "Error")
								{
									swal("Error!",resultado.mensaje, "warning");
								}

								if(resultado.title == "Eliminado")
								{
									swal("Eliminado!",resultado.mensaje, "success");
									tabla_administradores.rows().remove();
									listar_datos();									
								}

								if(resultado.title == "OcurrioError")
								{
									swal("Error!",resultado.mensaje, "error");
								}
							})
							.fail(function() {
								console.log("error");
							});
					});
		});
});
