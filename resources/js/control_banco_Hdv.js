$(document).ready(function() 
{
	$.ajax({
		url: 'listar_hojasdevida_por_categoria',
		type: 'POST'
	})
	.done(function(respuesta)
	{
		var resultado = $.parseJSON(respuesta);
		for (var i = resultado.length - 1; i >= 0; i--) 
		{	
			var nombre = resultado[i].cat_descripcion;
			$("#selectcate").append("<option value='" + resultado[i].hv_cat_id + "' data-content='<span class=\"label label-success\">" + resultado[i].cant + "</span> " + nombre + "'>" + nombre +  "</option>");
			$("#selectcate").selectpicker('refresh');
		}
	})	
	.fail(function() {
		console.log("error");
	});


	var tabla_banco_hv = $('#banco').DataTable({
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

	listar_datos();
	function listar_datos()
	{
		$("#selectcate").change(function()
		{
			$.ajax({
					url: 'listar_hojasdevida_count_postulaciones',
					type: 'POST',
					data: {cat_id:this.value}
		    	})
		    .done(function(respuesta) 
		    {
				var resultado = $.parseJSON(respuesta);
				tabla_banco_hv.rows().remove();
				for (var i = resultado.length - 1; i >= 0; i--) 
				{
					var rowNode = tabla_banco_hv
	           		.row.add([
		  						resultado[i].hv_id,
		  						"<span class='badge btn' data-toggle='modal' onclick='editar("+'"'+ resultado[i].hv_usu_id +'"'+");'>" + resultado[i].cant_postulaciones + "</span>",		  						
		  						resultado[i].usu_nombre,
								resultado[i].usu_apellido,
								resultado[i].hv_numero_telefono,
								resultado[i].ciu_nombre + "/" + resultado[i].dpto_nombre,
								resultado[i].nives_descripcion,
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
    $('#banco tbody').on( 'click', '#viewhv', function (event)
    { 
    	event.preventDefault();   	
        var data = tabla_banco_hv.row( $(this).parents('tr') ).data();
        var hv_id = data[0];
        window.open('../usuario/CV/' + hv_id, '_blank');
	});

	/* VIEW FILE HV */
    $('#banco tbody').on( 'click', '#viewhvfor', function (event)
    { 
    	event.preventDefault();   	
        var data = tabla_banco_hv.row( $(this).parents('tr') ).data();
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
        	if(resultado != "")
        	{
        		window.open('../../uploads/' + resultado,"_blank","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no");	
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
});
	
	function editar(id)
	{
		var tabla_historial_banco_hv = $("#historial_postulaciones").DataTable({
		retrieve: true,
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
   				});

		$.ajax({
			url: 'historial_postulaciones_por_usuario',
			type: 'POST',
			data: {'usu_id': id},
		})
		.done(function(respuesta) 
		{
			var resultado = $.parseJSON(respuesta);
			tabla_historial_banco_hv.rows().remove();
			
			if(resultado.length > 0)
			{											
				$("#nombre").html('<i>' + resultado[0].usu_nombre + " " + resultado[0].usu_apellido + '</i>');
				for (var i = resultado.length - 1; i >= 0; i--) 
				{
					var rowNode = tabla_historial_banco_hv
	           		.row.add([
		  						resultado[i].public_fecha_publicacion,
		  						(resultado[i].estado_id == 1 ? "<div class='btn-success' style='border-radius : 5px;'>Activa</div>" :
		  						"<div class='btn-danger' style='border-radius : 5px;'>Inactiva</div>"),		  						
		  						'<b>' + resultado[i].public_tipovacante + '</b>',
								resultado[i].post_fecha_postulacion,
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
	              			])		               
	           			.draw()
	           		.node();
	           		$("#myModal").modal("show");	          
	            }	           	 
			}			
			else
			{
				swal("Vaya...","Este usuario no ha tenido postulaciones...","warning");
			}
		})
		.fail(function() {
			console.log("error");
		});	
	}


/*$('#banco tbody').on('click', '#list', function () {
    var tr = $(this).closest('tr');
    var row = tabla_banco_hv.row( tr );

    if ( row.child.isShown() ) {
        // This row is already open - close it
        row.child.hide();
        tr.removeClass('shown');
    }
    else {
        // Open this row
        format(row.data(), function(resultado){
            // "resultado" contiene la cadena que necesitas retornar
            row.child(resultado).show();
            tr.addClass('shown');
        });
    }
} );
	function format (data, callback) {

    $.ajax({
        url: "hola",
        type: 'POST', 
        data: {'usu_id':data[9]}, 
        success: function (respuesta){
        	var resultado = $.parseJSON(respuesta);

            for (var i = resultado.length - 1; i >= 0; i--)
            { 
                var imprimir = resultado[i].public_fecha_publicacion +
	  						resultado[i].public_tipovacante + 
							resultado[i].post_fecha_postulacion + 
							resultado[i].post_proceso_seleccion;
            }
            // Tras obtener tu resultado, ejecutas la función recibida
            // como parámetro, con "resultado" como argumento
            callback(imprimir);
        }
    });
}*/
