$(document).on("ready",function() 
{	
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
				                "targets": [ 1 ],
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
				        ],
       				}); 
    		

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
			console.info(resultado); 
			for (var i = resultado.length - 1; i >= 0; i--) 
			{
				var rowNode = tabla_mostrar
               .row.add([
		  					resultado[i].public_id,
		  					resultado[i].public_usu_id,
							resultado[i].public_fecha_publicacion,
							'<b>' + resultado[i].public_tipovacante + '</b>',
							resultado[i].dpto_nombre,
							resultado[i].ciu_nombre,
							resultado[i].public_fecha_contratacion,
							'$' + resultado[i].public_salario.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"),
							resultado[i].public_descripcion,							
							resultado[i].public_cant_vacantes,
							resultado[i].nives_descripcion,
							resultado[i].public_anos_experiencia,
							resultado[i].public_dispone_viajar,
							resultado[i].public_cambio_residencia,
							resultado[i].cat_descripcion,		           	
          					"<center><button class='btn btn-danger' name='eliminar' id='eliminar'><span class='glyphicon glyphicon-remove'></span></button>",
                  			"<center><button class='btn btn-success' name='actualizar' id='actualizar'><span class='glyphicon glyphicon-refresh'></span></button>"
                  		])
    	           	.draw()
    	       .node();
            }
		})
		.fail(function() {
			console.log("error");
		});  
	}

	/* FUNCION ELIMINAR OFERTAS */
    $('#tabla_publicaciones tbody').on( 'click', '#eliminar', function(event)
    {
    	event.preventDefault();
        var data = tabla_mostrar.row( $(this).parents('tr') ).data();
        var id_publicacion = data[0];
        var parametros = {'id_publicacion':  id_publicacion};

        swal({
  				title: "Esta Seguro De Eliminar Esta Publicación?",
				text: "Se Eliminara La Publicación Permanentemente!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Si, Eliminar!",
				cancelButtonText: "No, Cancelar!",
				closeOnConfirm: false,
				closeOnCancel: false
			},
			function(isConfirm)
			{
		  		if(isConfirm) 
		  		{
			  		var resultado = eliminar_oferta(parametros);			  		
				}
				else 
				{
			    	swal("Cancelado", "No se Elimino Ninguna Publicacion", "error");
				}
    		});

    	function eliminar_oferta(parametros)
    	{	
    		event.preventDefault();
    		
    		$.ajax({
			  		url: 'eliminar_publicacion',
			  		type: 'POST',
			  		data: parametros,
			  	})
	   		.done(function(respuesta)
  	 		{
	  			var resultado = $.parseJSON(respuesta);	  			
	  			if(resultado)
	  			{
					swal({
		            		title: "Buen Trabajo",
		              		text: "Se Ha Eliminado La Publicación Correctamente",
		              		type: "success",
		              		confirmButtonText: "ok"
		            	},
	            	function()
	            	  	{
							location.href="../usuario/consultar_ofertas";
						});	  		
				}	 
				else
  				{
	  				swal("Upps Que Falla!!","No Puedes Eliminar Esta Publicación, Hay Usuarios Que Ya Aplicaron","error");
  				}	
		   		return resultado;
			})
		  	.fail(function() {
			  	console.log("error");
		  	});
    	}
	});

    /* ACTUALIZAR OFERTAS */
    $('#tabla_publicaciones tbody').on( 'click', '#actualizar', function (event) 
    { 
    	event.preventDefault();   	
        var data = tabla_mostrar.row( $(this).parents('tr') ).data();
        var id_publicacion = data[0];

        var muestra = location.replace('../vacantes/detalle_vacante/' + id_publicacion);
	});
});