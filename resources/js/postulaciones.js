$(document).on("ready",function() 
{
    var tabla_mostrar = $('#tabla_postulaciones').DataTable({
            "language": {                
							"sProcessing":     "Procesando...",
							"sLengthMenu":     "Mostrar _MENU_ registros",
							"sZeroRecords":    "",
							"sEmptyTable":     "",
							"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
							"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
							"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
							"sInfoPostFix":    "",
							"sSearch":         "Consultar Aplicaciones:",
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
       				}); 
    		
 	listar_datos();
		function listar_datos()
		{		
			$.ajax({
		    		url: 'mis_postulaciones_usuario',
		    		type: 'POST'
		    	   })
		    .done(function(respuesta)
		    {
				var resultado = $.parseJSON(respuesta);

				if(resultado.estado == "vacio")
				{
					var response = '<div class="alert alert-warning alert-dismissable">'
		            + '<strong>¡Oh vaya..!</strong>' + ' ' +resultado.mensaje + '</div>';
		            $('#alert').html(response);
				}
							
				if(resultado)
				{
					for (var i = resultado.length - 1; i >= 0; i--) 
					{
						var rowNode = tabla_mostrar
		               .row.add([
		    	  					//'<img  src="../../template/img/images/favicon-16x16.png"><b><font color="gray">Grupo</font><font color="#18BC9C"> Ospedale</font></b>',
		    	  					'<b>' + resultado[i].public_tipovacante + '</b>',
		    	  					resultado[i].post_fecha_postulacion,
		    	  					resultado[i].dpto_nombre + "/" + resultado[i].ciu_nombre,
		    	  					(resultado[i].post_proceso_seleccion == "Aplicada" ? 
									  	"<div class='btn-info' style='border-radius : 5px;'>Aplicada</div>" : 
										
										(resultado[i].post_proceso_seleccion == "Hdv Vista" ? 
									    	"<div class='btn-success' style='border-radius : 5px;'>HdV Vista</div>" : 
										    
											(resultado[i].post_proceso_seleccion == "En proceso" ? 
									    		"<div class='btn-warning' style='border-radius : 5px;'>En Proceso</div>" :
											    "<div class='btn-danger' style='border-radius : 5px;'>Finalista</label>"	
											)
								    	) 
									)
		    	  					//'<div class="btn-info" style="border-radius : 5px;">' + resultado[i].post_proceso_seleccion + '</div>'
		    	  				])
		               .draw()
		               .node();
		            }
		        }
			})
			.fail(function() {
				console.log("error");
				});  
		}
});