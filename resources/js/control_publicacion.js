var NameServer = location.protocol + '//' + location.host + '/';
$(document).on("ready",function() 
{	
	$("#formupdate").submit(function(event)
	{   	
	   	event.preventDefault();
	    var cadena = $(this).serializeArray();

		    $.ajax({
		    	url: NameServer + 'empleo/index.php/usuario/actualizar_publicacion',
		    	type: 'POST',
		    	data: cadena
		    })
		    .done(function(respuesta) 
		    {
		    	var resultado = $.parseJSON(respuesta);
		    	if(resultado)
		    	{
					swal({
						  	title: "Buen Trabajo!",
						  	text: "Tu publicación se actualizo con éxito ",
						  	type: "success",
						  	confirmButtonText: "Cerrar"
						},
						function()
						{
							location.href="../../usuario/consultar_ofertas";
						});
		    	}
		    	else
		    	{
		    		swal("Upps..", "Ha ocurrido un error... VERIFICA!!", "error");
		    	}
		    })
		    .fail(function() {
		    	alert("error");
		    });
	});

	/* SE EXTRAEN DATOS DE LA TABLA DEPARTAMENTO */
		$.ajax({
			url: '../../usuario/listar_departamento',
			type: 'POST',
		})
		.done(function(respuesta) 
		{
			var resultado = $.parseJSON(respuesta);						

			$.each(resultado, function(index, item)
			{				
				$("#departamento").append("<option value='" + item.dpto_id + "'>" + item.dpto_nombre + "</option>");
			});			
			
			var id = $("#departamento").data('id');			
			$("#departamento").val(id).trigger('change');
		})		
		.fail(function() {
			console.log("error");
		});	
	
	/* SE EXTRAEN DATOS DE LA TABLA CIUDAD CUANDO SE SELECCIONA EL DPTO */
		$("#departamento").change(function()
		{		
			//var pais = resultado[i].id_pais;	
			var pais = $(this).serialize();
			//alert(pais);
				$.ajax({
				type: "POST",
				url: "../../usuario/listar_ciudad",
				data: pais
				})
				.done(function(respuesta)
				{						
					var resultado = $.parseJSON(respuesta);
					//console.info(resultado);
					$("#ciudad").empty();
					$.each(resultado, function(index, item)
					{				
						$("#ciudad").append("<option value='" + item.ciu_id + "'>" + item.ciu_nombre + "</option>");
					});			
					
					var id = $("#ciudad").data('id');			
					$("#ciudad").val(id);	
				});
		});	

	/* SE EXTRAEN DATOS DE LA TABLA "EDUCACION MINIMA" */
		$.ajax({
			url: '../../usuario/listar_educacion_minima',
			type: 'POST',
		})
		.done(function(respuesta) 
		{
			var resultado = $.parseJSON(respuesta);
			$.each(resultado, function(index, item)
			{				
				$("#educminima").append("<option value='" + item.nives_id + "'>" + item.nives_descripcion + "</option>");
			});			
			
			var id = $("#educminima").data('id');
			$("#educminima").val(id);
		})		
		.fail(function() {
			console.log("error");
		});	

	/* SE EXTRAEN DATOS DE LA TABLA "CATEGORIA" */
		$.ajax({
			url: '../../usuario/listar_area',
			type: 'POST',
		})
		.done(function(respuesta) 
		{
			var resultado = $.parseJSON(respuesta);			

			$.each(resultado, function(index, item)
			{
				$("#selecarea").append("<option value='" + item.cat_id + "'>" + item.cat_descripcion + "</option>");
			});			
			
			var id = $("#selecarea").data('id');
			$("#selecarea").val(id);
		})		
		.fail(function() {
			console.log("error");
		});	
});