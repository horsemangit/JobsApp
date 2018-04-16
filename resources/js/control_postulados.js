$(document).ready(function()
{	
	/* SE EXTRAEN DATOS DE LA TABLA AREA O CATEGORIA A LA QUE SE APLICA */
		$.ajax({
			url: 'listar_area_postulados',
			type: 'POST'
		})
		.done(function(respuesta)
		{
			var resultado = $.parseJSON(respuesta);			
			for (var i = resultado.length - 1; i >= 0; i--) 
			{	
				var nombre = resultado[i].cat_descripcion;
				$("#selecarea").append("<option value='" + resultado[i].cat_id + "' data-content='<span class=\"label label-success\">" + resultado[i].cant + "</span> " + nombre + "'>" + nombre +  "</option>");
				$("#selecarea").selectpicker('refresh');
			}
		})	
		.fail(function() {
			console.log("error");
		});

	/* SE HACE AL CAMBIO PARA LA MUESTRA DE OFERTAS AL SELECCIONAR UNA CATEGORIA */
		$("#selecarea").change(function()
		{		
			$("#ofertas").find('option').remove();
			
			$.ajax({
				url: 'listar_ofertas',
				type: 'POST',
				data: {id_categoria:this.value}
			})
			.done(function(respuesta)
			{			
				var resultado = $.parseJSON(respuesta);
				/* console.log(resultado); */
				for (var i = resultado.length - 1; i >= 0; i--)
				{			
					var nombre = resultado[i].public_tipovacante;		
					$("#ofertas").append("<option value='" + resultado[i].public_id + "' data-content='<span class=\"label label-success\">" + resultado[i].cant + "</span> " + nombre + "'>" + nombre + "</option>");
					$("#ofertas").selectpicker('refresh');

				}
				$("#ofertas").trigger("change");					
			})		
			.fail(function(){
				console.log("error");
			});
		});

	var tabla_postulados = $('#hojasdevida').DataTable({
        "language": {                
						"sProcessing":     "Procesando...",
						"sLengthMenu":     "Mostrar _MENU_ registros",
						"sZeroRecords":    "No se encontraron resultados",
						"sEmptyTable":     "Ningún dato disponible en esta tabla",
						"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
						"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
						"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
						"sInfoPostFix":    "",
						"sSearch":         "Consultar Oferta:",
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
			                "targets": [ 9 ],
			                "visible": false,
			                "searchable": false
			            },			            
			        ],

   				}); 
    		
 	listar_datos();
		function listar_datos()
		{
			$("#ofertas").change(function()
			{
				$.ajax({
						url: 'listar_hojasdevida',
						type: 'POST',
						data: {public_id:this.value}
			    	})
			    .done(function(respuesta)
			    {
					var resultado = $.parseJSON(respuesta);
					/* console.log(resultado); */				
					tabla_postulados.rows().remove();
					for (var i = resultado.length - 1; i >= 0; i--) 
					{
						var rowNode = tabla_postulados
	               		.row.add([
	    	  						resultado[i].post_id,
	    	  						resultado[i].usu_nombre,
									resultado[i].usu_apellido,
									resultado[i].ciu_nombre,
									resultado[i].cat_descripcion,
									resultado[i].nives_descripcion,
		    	  					(resultado[i].post_proceso_seleccion == "Aplicada" ? 
									  	"<div class='btn-info' style='border-radius : 5px;'>Aplicada</div>" : 
										
										(resultado[i].post_proceso_seleccion == "Hdv Vista" ? 
									    	"<div class='btn-success' style='border-radius : 5px;'>HdV Vista</div>" : 
										    
											(resultado[i].post_proceso_seleccion == "En proceso" ? 
									    		"<div class='btn-warning' style='border-radius : 5px;'>En Proceso</div>" :
											    "<div class='btn-danger' style='border-radius : 5px;'>Finalista</label>"	
											)
								    	) 
									),
	                  				'<center><button type="button" name="viewhv" id="viewhv" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></center></button>',
	                  				'<center><button type="button" name="viewhvfor" id="viewhvfor" class="btn btn-danger"><span class="glyphicon glyphicon-file"></span></center></button>',
	                  				resultado[i].hv_usu_id
	                  			])		               
	               			.draw()
	               		.node();
		            }
				})
				.fail(function() {
					console.log("error");
				});
			});
		}



    /* VIEW PAGE HV */
	    $('#hojasdevida tbody').on( 'click', '#viewhv', function (event)
	    { 
	    	event.preventDefault();   	
	        var data = tabla_postulados.row( $(this).parents('tr') ).data();
	        var post_id = data[0];
	        //alert(post_id);
	        window.open('../usuario/proceso_seleccion_postulados/' + post_id, '_blank');
		});

	/* VIEW FILE HV */
	    $('#hojasdevida tbody').on( 'click', '#viewhvfor', function (event)
	    { 
	    	event.preventDefault();   	
	        var data = tabla_postulados.row( $(this).parents('tr') ).data();
	        var usu_id = data[9];
	        //alert(usu_id);
	        $.ajax({
	        	url: 'file_view',
	        	type: 'POST',
	        	data: {'usu_id' : usu_id}
	        })
	        .done(function(respuesta)
	        {
	        	var resultado = $.parseJSON(respuesta);
	        	if(resultado)
	        	{
	        		//window.open('../../uploads/' + resultado.hv_formato_filename, '_blank');
			        msg=open('../../uploads/' + resultado.hv_formato_filename,"NewWindow","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no");	
	        	}
	        	else
	        	{
	        		swal("Que lastima!","Este usuario no tiene una hoja de vida para mostrar.","info");
	        	}       	
	        })
	        .fail(function() {
	        	console.log("error");
	        });
		});

		/* ACTUALIZAR PROCESO SELECCION */
		$("#procesos").on('submit',function(event)
		{
	      	event.preventDefault();
	      	var cadena = $(this).serializeArray();
	      	/* console.log(cadena); */
	      	$.ajax({
	            	url: '../actualizar_proceso_seleccion',
	            	type: "POST",
	            	data: cadena
	          	})
	      	.done(function(response)
	      	{
	            var resultado = $.parseJSON(response);
	            	if(resultado)
	            	{
	              		swal("Buen Trabajo","Proceso actualizado con exito", "success");
	            	}
	            	else
	            	{
	              		swal("Error","Hubo un error, verifique!", "error");
	            	}
	      	})
	      	.fail(function() {
		        console.log("error");
		  	});
	    });
});
	    


