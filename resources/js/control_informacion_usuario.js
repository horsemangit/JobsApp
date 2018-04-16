$(document).ready(function()
{
	/* SE EXTRAEN DATOS DE LA TABLA TIPODOCUMENTO */
		$.ajax({
			url: 'listar_tipodocumento',
			type: 'POST'
		})
		.done(function(respuesta)
		{
			var resultado = $.parseJSON(respuesta);
			/* console.info(resultado); */
			$.each(resultado, function(index, item)
			{				
				$("#tipodocumento").append("<option value='" + item.td_tipodocumento_id + "'>" + item.td_tipodocumento + "</option>");
			});			
			// Acá se establece el id correspondient
			var id = $("#tipodocumento").data('id');
			$("#tipodocumento").val(id);
		})
		.fail(function() {
			console.log("error");
		});		

	/* SE EXTRAEN DATOS DE LA TABLA ESTADO CIVIL */
		$.ajax({
			url: 'listar_estadocivil',
			type: 'POST'
		})
		.done(function(respuesta)
		{
			var resultado = $.parseJSON(respuesta);			                                               
			$.each(resultado, function(index, item)
			{				
				$("#estadocivil").append("<option value='" + item.estacivil_id + "'>" + item.estacivil_descripcion + "</option>");
			});			
			var id = $("#estadocivil").data('id');
			$("#estadocivil").val(id);
		})
		.fail(function() {
			console.log("error");
		});	

	/* SE EXTRAEN DATOS DE LA TABLA TELEFONO */
		$.ajax({
			url: 'listar_telefono',
			type: 'POST'
		})
		.done(function(respuesta)
		{
			var resultado = $.parseJSON(respuesta);		                                               
			$.each(resultado, function(index, item)
			{				
				$("#tipotelefono").append("<option value='" + item.tipotel_id + "'>" + item.tipotel_descripcion + "</option>");
			});		
			var id = $("#tipotelefono").data('id');
			$("#tipotelefono").val(id);
		})		
		.fail(function() {
			console.log("error");
		});

	/* SE EXTRAEN DATOS DE LA TABLA PAIS */
		$.ajax({
			url: 'listar_pais',
			type: 'POST'
		})
		.done(function(respuesta)
		{
			var resultado = $.parseJSON(respuesta);						                                               
			$.each(resultado, function(index, item)
			{				
				$("#pais").append("<option value='" + item.pais_id + "'>" + item.pais_nombre + "</option>");
			});			
			var id = $("#pais").data('id');
			$("#pais").val(id).trigger('change');
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
					$("#departamento").empty();
					$.each(resultado, function(index, item)
					{				
						$("#departamento").append("<option value='" + item.dpto_id + "'>" + item.dpto_nombre + "</option>");
					});			
					var id = $("#departamento").data('id');
					$("#departamento").val(id).trigger('change');	
				});
		});

	/* SE EXTRAEN DATOS DE LA TABLA CIUDAD CUANDO SE SELECCIONA EL DEPARTAMENTO */
		$("#departamento").change(function()
		{		
			//var pais = resultado[i].id_pais;	
			var pais = $(this).serialize();
			//alert(pais);
			$.ajax({				
				url: "listar_ciudad",
				type: "POST",
				data: pais
			})
			.done(function(respuesta)
			{			
				var resultado = $.parseJSON(respuesta);
				$.each(resultado, function(index, item)
				{				
					$("#ciudad").append("<option value='" + item.ciu_id + "'>" + item.ciu_nombre + "</option>");
				});		
				
				var id = $("#ciudad").data('id');
				$("#ciudad").val(id);		
			});
		});

	/* SE EXTRAEN DATOS DE LA TABLA NACIONALIDAD */
		$.ajax({
			url: 'listar_nacionalidad',
			type: 'POST'
		})
		.done(function(respuesta)
		{
			var resultado = $.parseJSON(respuesta);
			
			$.each(resultado, function(index, item)
			{				
				$("#nacionalidad").append("<option value='" + item.nacional_id + "'>" + item.nacional_descripcion + "</option>");
			});		
			var id = $("#nacionalidad").data('id');
			$("#nacionalidad").val(id);
		})
		.fail(function() {
			console.log("error");
		});	

	/* SE EXTRAEN DATOS DE LA TABLA NIVEL ESTUDIO */
		$.ajax({
			url: 'listar_nivelestudio',
			type: 'POST'
		})
		.done(function(respuesta)
		{
			var resultado = $.parseJSON(respuesta);
			
			$.each(resultado, function(index, item)
			{				
				$("#nivelestudio").append("<option value='" + item.nives_id + "'>" + item.nives_descripcion + "</option>");
			});			
			var id = $("#nivelestudio").data('id');
			$("#nivelestudio").val(id);
		})
		.fail(function() {
			console.log("error");
		});

	/* SE EXTRAEN DATOS DE LA TABLA TIPO_IDIOMA */
		$.ajax({
			url: 'listar_tipoidioma',
			type: 'POST'
		})
		.done(function(respuesta) {
			var resultado = $.parseJSON(respuesta);
				
			$.each(resultado, function(index, item)
			{				
				$("#tipoidioma").append("<option value='" + item.idioma_id + "'>" + item.idioma_descripcion + "</option>");
			});		
			
			var id = $("#tipoidioma").data('id');
			$("#tipoidioma").val(id);
		})
		.fail(function() {
			console.log("error");
		});

	/* SE EXTRAEN DATOS DE LA TABLA NIVEL_IDIOMA */
		$.ajax({
			url: 'listar_nivelidioma',
			type: 'POST'
		})
		.done(function(respuesta) 
		{
			var resultado = $.parseJSON(respuesta);
			
			$.each(resultado, function(index, item)
			{				
				$("#nivelidioma").append("<option value='" + item.niv_idioma_id + "'>" + item.niv_idioma_descripcion + "</option>");
			});			
			
			var id = $("#nivelidioma").data('id');
			$("#nivelidioma").val(id);
		})
		.fail(function() {
			console.log("error");
		});

	/* SE EXTRAEN DATOS DE LA TABLA PROGRAMAS INFORMATICOS */
		$.ajax({
			url: 'listar_proinfo',
			type: 'POST'
		})
		.done(function(respuesta)
		{
			var resultado = $.parseJSON(respuesta);
			
			$.each(resultado, function(index, item)
			{				
				$("#proinfo").append("<option value='" + item.proinfo_id + "'>" + item.proinfo_descripcion + "</option>");
			});			
			
			var id = $("#proinfo").data('id');
			$("#proinfo").val(id);
		})
		.fail(function() {
			console.log("error");
		});

	/* SE EXTRAEN DATOS DE LA TABLA SITUACION ACTUAL */
		$.ajax({
			url: 'listar_situactual',
			type: 'POST'
		})
		.done(function(respuesta) 
		{
			var resultado = $.parseJSON(respuesta);
			
			$.each(resultado, function(index, item)
			{				
				$("#situacionactual").append("<option value='" + item.situactual_id + "'>" + item.situactual_descripcion + "</option>");
			});			
			
			var id = $("#situacionactual").data('id');
			$("#situacionactual").val(id);
		})
		.fail(function() {
			console.log("error");
		});

	/* SE EXTRAEN DATOS DE LA TABLA AREA O CATEGORIA A LA QUE SE APLICA */
		$.ajax({
			url: 'listar_area',
			type: 'POST'
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
		.fail(function(){
			console.log("error");
		});
});

	/*METODO AJAX PARA ACTUALIZAR LOS DATOS */		
		$("#formupdate").submit(function(event) {
			
			event.preventDefault();
			var cadena = $(this).serializeArray();
			/*console.log(cadena); */		
				$.ajax({
					url: 'actualizo_hoja_de_vida',
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
							  	text: "Tu hoja de vida se ha actualizado",
							  	type: "success",
							  	confirmButtonText: "Cerrar"
							},function(){
								location.href="informacion_usuario";
							});
					}
					else
					{
						swal({
							  title: "upps!",
							  text: "Tu hoja de vida no se ha actualizado",
							  type: "error",
							  confirmButtonText: "Cerrar"
							});
					}
				})
				.fail(function() {
					console.log("error");
				});
		});