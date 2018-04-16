$(document).ready(function()
{
	/* UPLOAD HOJA DE VIDA */  
	    $("#btn_enviar").click(function(event)
	    {
	        event.preventDefault();
	       
	        var formData = new FormData(document.getElementById('frmSubir'));

	        var ruta = 'do_upload';
	        $.ajax({
			        url: ruta,
			        type: 'POST',
			        data: formData,
			        contentType: false,
			        processData: false,
			        beforeSend: function() 
			        {
	            	//$('#loading').prepend('<center><img src="../../template/img/ajax-loader.gif" /></center>');
	          	},
		        success: function(data)
	          	{
		            var resultado = $.parseJSON(data);

		            if(resultado.estado == "info")
		            {
		             	var response = '<div class="col-lg-12"><div class="alert alert-warning alert-dismissable">'
		              	+ '<button type="button" class="close" data-dismiss="alert">&times;</button>'
		              	+ '<strong>¡Por Favor Verifique!</strong>' + ' ' +resultado.mensaje + '</div></div>';
		              	$('#alert').html(response);
		              	
		              	return;
		            }

		            if(resultado.estado == "error")
		            {
	      				var response = '<div class="col-lg-12"><div class="alert alert-danger alert-dismissable">'
		              	+ '<button type="button" class="close" data-dismiss="alert">&times;</button>'
		              	+ '<strong>¡Espera..!</strong>' + ' ' +resultado.mensaje + '</div></div>';
		              	$('#alert').html(response);
		              	
		              	return;
		            }

		            if(resultado.estado == "ok")
		            {
		              location.href = "upload";
		            }            
		        }
	        });
		});	

	/* DOWNLOAD HDV */
		$(document).on("click", ".it-file", function()
	    { 
	        var txitxa = $(this).data("filecandidateid");             
	        window.open("../usuario/downloadfilecandidateid/" + txitxa);
	    });

	/* ELIMINAR HOJA DE VIDA */
	    $("#eliminarhv").on('click',function(event)
	    {   
	      	event.preventDefault();
	      		
	      		swal({
	            		title: "Esta Seguro De Eliminar Su Hoja De Vida?",
	            		text: "Se eliminara su hoja de vida permanentemente!",
	            		type: "warning",
	            		showCancelButton: true,
	            		confirmButtonColor: "#DD6B55",
	            		confirmButtonText: "Si, Eliminar!",
	            		cancelButtonText: "No, cancelar!",
	            		closeOnConfirm: false
	          		},
	          	
	          	function(isConfirm)
	          	{
	            	if(isConfirm)
	            	{
	              		$.ajax({
	                      		url: 'delete_upload',
	                    	})
		              	.done(function(respuesta)
		              	{
			                var resultado = $.parseJSON(respuesta);
		                	if(resultado)
		                	{
		                  		swal({
		                        	title: "Eliminada",
		                        	text: "Tu hoja de vida se elimino.",
		                        	type: "success",
		                        	confirmButtonText: "OK"
		                       	},			                        
		                      	function(isConfirm)
		                      	{
			                        if (isConfirm) 
		                        	{
		                          	window.location.href = 'upload';
		                        	}
		                      	});
		                	}	
		                	else
		                	{
		                  		swal("Error", "Tu hoja de vida no se elimino.", "error");
		                	}	
		              	});
		            } 
	          	});
        });
});