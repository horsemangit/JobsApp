$(document).ready(function() {

	$("#creapublicacion").on('submit',function(event)
	{
		event.preventDefault();

		var cadena = $(this).serializeArray();
		/*console.log(cadena);*/
			$.ajax({
				url: 'guardar_publicacion',
				type: 'POST',
				data: cadena,
			})
			.done(function(respuesta)
			{
				var resultado = $.parseJSON(respuesta);
				/*console.info(resultado);*/
				if(resultado)
				{
					swal({
						  	title: "Buen Trabajo!",
						  	text: "Tu oferta ha sido publicada!",
						  	type: "success",
						  	confirmButtonText: "Cerrar"
						},
						function()
						{
							location.href="../usuario/consultar_ofertas";
						});
				}
				else
				{
					swal("oh oh!", "Tu oferta no ha sido publicada!", "error");
				}
				//$("form#creapublicacion").validator("destroy");//$('#creapublicacion')[0].reset();
			})
			.fail(function() {
				console.log("error");
			});
	});

	/* SE EXTRAN LOS DATOS DE LA TABLA DEPARTAMENTO */

		$.ajax({
			url: 'listar_departamento',
			type: 'POST',
		})
		.done(function(respuesta) 
		{
			var resultado = $.parseJSON(respuesta);
			//console.info(resultado);			                                               
			for (var i = resultado.length - 1; i >= 0; i--) 
			{	
				var nombre = resultado[i].dpto_nombre;
				$("#departamento").append("<option name='" + nombre + "' value='" + resultado[i].dpto_id + "'>" + nombre + "</option>");								
			}
		})	
		.fail(function() {
			console.log("error");
		});

	/* SE EXTRAEN DATOS DE LA TABLA NACIONALIDAD */

		$("#departamento").change(function()
		{	
			//var pais = resultado[i].id_pais;	
			var pais = $(this).serialize();
			//alert(pais);
				$.ajax({
					type: "POST",
					url: "listar_ciudad",
					data: pais
				})
				.done(function(respuesta)
				{					
					var resultado = $.parseJSON(respuesta);
					$("#ciudad").empty();
					
					for (var i = resultado.length - 1; i >= 0; i--) 
						{
							var nombreciu = resultado[i].ciu_nombre;	
							$("#ciudad").append("<option name='" + nombreciu + "' value='" + resultado[i].ciu_id + "'>" + nombreciu + "</option>");					
						}		
				});
		});
	
	/* SE EXTRAEN DATOS DE LA TABLA NIVEL ESTUDIO */

		$.ajax({
			url: 'listar_educacion_minima',
			type: 'POST',
		})
		.done(function(respuesta)
		{
			var resultado = $.parseJSON(respuesta);
			for (var i = resultado.length - 1; i >= 0; i--) 
			{	
				var nombre = resultado[i].nives_descripcion;
				$("#educminima").append("<option name='" + nombre + "' value='" + resultado[i].nives_id + "'>" + nombre + "</option>");	
			}
		})
		.fail(function() {
			console.log("error");
		});

	/* SE EXTRAEN LOS DATOS DE LA TABLA ESTADOS */

		$.ajax({
			url: 'listar_estado_publicacion',
			type: 'POST',

		})
		.done(function(respuesta)
		{
			var resultado = $.parseJSON(respuesta);
			for (var i = resultado.length - 1; i >= 0; i--) 
			{	
				var nombre = resultado[i].estado_descripcion;
				$("#estado_publicacion").append("<option name='" + nombre + "' value='" + resultado[i].estado_id + "' readonly/>" + nombre + "</option>");	
			}
		})
		.fail(function() {
			console.log("error");
		});	
});