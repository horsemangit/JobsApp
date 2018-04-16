$(document).on("ready",function() 
{
    var tabla_mostrar = $('#tabla_publicaciones_inactivas').DataTable({
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
	function listar_datos(){	
		$.ajax({
	    		url: '../home/mostrar_vacantes_inactivas',
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
                  			"<center><button class='btn btn-primary' name='duplicar' id='duplicar'><span class='glyphicon glyphicon-globe'></span></button>",
                  			resultado[i].public_tipovacante,
                  			resultado[i].cat_id,
                  			resultado[i].dpto_id,
                  			resultado[i].ciu_id,
                  			resultado[i].public_salario,
                  			resultado[i].public_estado_id,
                  			resultado[i].nives_id
                  			])
               		.draw()
           		.node();
        	}
		})
		.fail(function() {
			console.log("error");
		});  
	}

	$('#tabla_publicaciones_inactivas tbody').on( 'click', '#duplicar', function ()
    { 
    	var data = tabla_mostrar.row( $(this).parents('tr') ).data();
    	$("#myModalNorm").modal('show');
    	$("#titulo_oferta").html(data[3]);

    	$("#duplicar_oferta").click(function()
    	{
    		var datafechpublicacion = $("#fechpublicacion").val();    		
    		var datafechacontratacion = $("#fechcontratacion").val();
    	
    		var parametros = {'tipovacante' : data[16],
		        				'selecarea' : data[17],        				
								'departamento' :data[18],
								'ciudad' :data[19],
								'fechpublicacion': datafechpublicacion,
								'fechcontratacion': datafechacontratacion,
								'salario' :data[20],
								'descripcion' :data[8],
								'cantivacantes' :data[9],
								'educminima' :data[22],
								'anoexperiencia' :data[11],
								'disponeviajar' :data[12],
								'disponecambioresidencia' :data[13],
								'estado_publicacion' : 1};
			$.ajax({
				url: 'guardar_publicacion',
				type: 'POST',				
				data: parametros,
			})
			.done(function(respuesta)
			{
				var resultado = $.parseJSON(respuesta);
				if(resultado)
				{
					swal("Buen Trabajo", "Has republicado esta oferta con exito","success");
					$("#myModalNorm").modal('hide');
				}
				else{
					swal("Error", "Ha Ocurrido Un Error","error");
				}
			})
			.fail(function() {
				console.log("error");
			});          		
    	});           
	});
});
