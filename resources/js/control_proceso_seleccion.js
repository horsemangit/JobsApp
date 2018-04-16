$(document).ready(function()
{
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