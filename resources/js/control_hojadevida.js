$(document).ready(function() 
{
	/* SE EXTRAEN DATOS DE LA TABLA TIPODOCUMENTO */

		$.ajax({
			url: 'listar_tipodocumento',
			type: 'POST',
		})
		.done(function(respuesta)
		{
			var resultado = $.parseJSON(respuesta);
			//console.info(resultado);
			for (var i = resultado.length - 1; i >= 0; i--) 
			{	
				var nombre = resultado[i].td_tipodocumento;
				$("#tipodocumento").append("<option name='" + nombre + "' value='" + resultado[i].td_tipodocumento_id + "'>" + nombre + "</option>");		
			}
		})
		.fail(function() {
			console.log("error");
		});

	/* SE EXTRAEN DATOS DE LA TABLA ESTADO CIVIL */

		$.ajax({
			url: 'listar_estadocivil',
			type: 'POST',
		})
		.done(function(respuesta)
		{
			var resultado = $.parseJSON(respuesta);
			//console.info(resultado);			                                               
			for (var i = resultado.length - 1; i >= 0; i--) 
			{	
				var nombre = resultado[i].estacivil_descripcion;
				$("#estadocivil").append("<option name='" + nombre + "' value='" + resultado[i].estacivil_id + "'>" + nombre + "</option>");								
			}
		})
		.fail(function() {
			console.log("error");
		});	

	/* SE EXTRAEN DATOS DE LA TABLA TELEFONO */

		$.ajax({
			url: 'listar_telefono',
			type: 'POST',
		})
		.done(function(respuesta)
		{
			var resultado = $.parseJSON(respuesta);
			//console.info(resultado);			                                               
			for (var i = resultado.length - 1; i >= 0; i--) 
			{	
				var nombre = resultado[i].tipotel_descripcion;
				$("#tipotelefono").append("<option name='" + nombre + "' value='" + resultado[i].tipotel_id + "'>" + nombre + "</option>");								
			}
		})		
		.fail(function() {
			console.log("error");
		});

	/* SE EXTRAEN DATOS DE LA TABLA PAIS */

		$.ajax({
			url: 'listar_pais',
			type: 'POST',
		})
		.done(function(respuesta)
		{
			var resultado = $.parseJSON(respuesta);
			//console.info(resultado);			                                               
			for (var i = resultado.length - 1; i >= 0; i--) 
			{	
				var nombre = resultado[i].pais_nombre;
				$("#pais").append("<option name='" + nombre + "' value='" + resultado[i].pais_id + "'>" + nombre + "</option>");								
			}
		})		
		.fail(function() {
			console.log("error");
		});

	/* SE EXTRAEN DATOS DE LA TABLA DEPARTAMENTO CUANDO SE SELECCIONA EL PAIS */

		$("#pais").change(function()
		{		
			//var pais = resultado[i].id_pais;	
			var pais = $(this).serialize();
			//alert(pais);
				$.ajax({
					type: "POST",
					url: "listar_dpto",
					data: pais
				})
				.done(function(respuesta)
				{			
					var resultado = $.parseJSON(respuesta);
					//console.info(resultado);
					$("#departamento").empty();
					for (var i = resultado.length - 1; i >= 0; i--) 
						{
							var nombredpto = resultado[i].dpto_nombre;
							$("#departamento").append("<option name='" + nombredpto + "' value='" + resultado[i].dpto_id + "'>" + nombredpto + "</option>");					
						}		
				});
		});

	/* SE EXTRAEN DATOS DE LA TABLA CIUDAD CUANDO SE SELECCIONA EL DEPARTAMENTO */

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
					//console.info(resultado);
					$("#ciudad").empty();
					for (var i = resultado.length - 1; i >= 0; i--) 
						{
							var nombreciu = resultado[i].ciu_nombre;
							//console.log(nombreciudad);					
							$("#ciudad").append("<option name='" + nombreciu + "' value='" + resultado[i].ciu_id + "'>" + nombreciu + "</option>");					
						}		
				});
		});	

	/* SE EXTRAEN DATOS DE LA TABLA CIUDAD */

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

	/* SE EXTRAEN DATOS DE LA TABLA NACIONALIDAD */

		$.ajax({
			url: 'listar_nacionalidad',
			type: 'POST',
		})
		.done(function(respuesta) 
		{
			var resultado = $.parseJSON(respuesta);
			//console.info(resultado);
			for (var i = resultado.length - 1; i >= 0; i--) 
			{	
				var nombre = resultado[i].nacional_descripcion;
				$("#nacionalidad").append("<option name='" + nombre + "' value='" + resultado[i].nacional_id + "'>" + nombre + "</option>");			
			}
		})
		.fail(function() {
			console.log("error");
		});		

	/* SE EXTRAEN DATOS DE LA TABLA NIVEL ESTUDIO */

		$.ajax({
			url: 'listar_nivelestudio',
			type: 'POST',
		})
		.done(function(respuesta) 
		{
			var resultado = $.parseJSON(respuesta);
			//console.info(resultado);
			for (var i = resultado.length - 1; i >= 0; i--) 
			{	
				var nombre = resultado[i].nives_descripcion;
				$("#nivelestudio").append("<option name='" + nombre + "' value='" + resultado[i].nives_id + "'>" + nombre + "</option>");		
			}
		})
		.fail(function() {
			console.log("error");
		});

	/* SE EXTRAEN DATOS DE LA TABLA TIPO_IDIOMA */

		$.ajax({
			url: 'listar_tipoidioma',
			type: 'POST',
		})
		.done(function(respuesta) 
		{
			var resultado = $.parseJSON(respuesta);
			//console.info(resultado);
			for (var i = resultado.length - 1; i >= 0; i--) 
			{	
				var nombre = resultado[i].idioma_descripcion;
				$("#tipoidioma").append("<option name='" + nombre + "' value='" + resultado[i].idioma_id + "'>" + nombre + "</option>");									
			}
		})
		.fail(function() {
			console.log("error");
		});

	/* SE EXTRAEN DATOS DE LA TABLA NIVEL_IDIOMA */

		$.ajax({
			url: 'listar_nivelidioma',
			type: 'POST',
		})
		.done(function(respuesta) 
		{
			var resultado = $.parseJSON(respuesta);
			//console.info(resultado);
			for (var i = resultado.length - 1; i >= 0; i--) 
			{	
				var nombre = resultado[i].niv_idioma_descripcion;
				$("#nivelidioma").append("<option name='" + nombre + "' value='" + resultado[i].niv_idioma_id + "'>" + nombre + "</option>");									
			}
		})
		.fail(function() {
			console.log("error");
		});

	/* SE EXTRAEN DATOS DE LA TABLA PROGRAMAS INFORMATICOS */

		$.ajax({
			url: 'listar_proinfo',
			type: 'POST',
		})
		.done(function(respuesta) 
		{
			var resultado = $.parseJSON(respuesta);
			//console.info(resultado);
			for (var i = resultado.length - 1; i >= 0; i--) 
			{	
				var nombre = resultado[i].proinfo_descripcion;
				$("#proinfo").append("<option name='" + nombre + "' value='" + resultado[i].proinfo_id + "'>" + nombre + "</option>");									
			}
		})
		.fail(function() {
			console.log("error");
		});

	/* SE EXTRAEN DATOS DE LA TABLA ESTADO ACTUAL */

		$.ajax({
			url: 'listar_situactual',
			type: 'POST',
		})
		.done(function(respuesta) 
		{
			var resultado = $.parseJSON(respuesta);
			//console.info(resultado);
			for (var i = resultado.length - 1; i >= 0; i--) 
			{	
				var nombre = resultado[i].situactual_descripcion;
				$("#situacionactual").append("<option name='" + nombre + "' value='" + resultado[i].situactual_id + "'>" + nombre + "</option>");									
			}
		})
		.fail(function() {
			console.log("error");
		});

	/* SE EXTRAEN DATOS DE LA TABLA AREA O CATEGORIA A LA QUE SE APLICA */

		$.ajax({
			url: 'listar_area',
			type: 'POST',
		})
		.done(function(respuesta)
		{
			var resultado = $.parseJSON(respuesta);
			//console.info(resultado);
			for (var i = resultado.length - 1; i >= 0; i--) 
			{	
				var nombre = resultado[i].cat_descripcion;
				$("#selecarea").append("<option name='" + nombre + "' value='" + resultado[i].cat_id + "'>" + nombre + "</option>");									
			}
		})
		.fail(function(){
			console.log("error");
		});

	/* FUNCIONES CONTADOR DE CARACTERES TEXTAREA */
		$('#descripcionbreve').keyup(function()
		{
	      var count = $(this).val().length;
	      $('#count').html("(Máximo 1000 : " + count + " Caracteres)");
	    });

		$('#experiencia').keyup(function()
		{
	      var count = $(this).val().length;
	      $('#count1').html("(Máximo 500 : " + count + " Caracteres)");
	    });

	/* METODO INDEX PARA INSERTAR LOS DATOS */	
		$("#formpage").submit(function(event)
		{
			event.preventDefault();		 
			var cadena = $(this).serializeArray();
			console.log(cadena);

			
				$.ajax({
					url: 'registro_hoja_de_vida',
					type: 'POST',
					data: cadena
				})		
				.done(function(respuesta) {

					var resultado = $.parseJSON(respuesta);
					console.log(resultado);
					if(resultado)
					{	
						swal({
							  	title: "Buen Trabajo!",
							  	text: "Se registro tu hoja de vida",
							  	type: "success",
							  	confirmButtonText: "Cerrar"
							},
							function()
							{
								location.href="informacion_usuario";
							});
					}
					else
					{
						swal({
							  title: "Ha Ocurrido Un Error!",
							  text: "Su hoja de vida no se registro.. ¡VERIFIQUE!",
							  type: "error",
							  confirmButtonText: "Cerrar"
							});
					}

				})
				.fail(function() {
					console.log("error");
				});
		});
});