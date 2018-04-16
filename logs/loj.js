

/*$(document).ready(function() {
    $('#example').DataTable( {
    	"ajax": '../../index.php/vacantes/mostrar_vacantes',
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function (respuesta) {
                        var data = respuesta.data();
                        return 'Details for '+data[0].public_descripcion+' '+data[1].public_cargo;
                    }
                } ),
                renderer: function ( api, rowIdx, columns ) {
                    var data = $.map( columns, function ( col, i ) {
                        return '<tr>'+
                                '<td>'+col.title+':'+'</td> '+
                                '<td>'+col.data+'</td>'+
                            '</tr>';
                    } ).join('');
 
                    return $('<table/>').append( data );
                }
            }
        }
    } );
} );
















/*$(document).ready(function() {
	console.log("Estoy Corriendo");*/

	///// METODO AJAX QUE ME PERMITE HACER LA SELECCION EN LA BASE DE DATOS PARA MOSTRARLOS EN UNA TABLA ////
		/*$.ajax({
			url: '../index.php/vacantes/mostrar_vacantes',
			type: 'POST',

		})
		.done(function(respuesta) {

			var resultado = $.parseJSON(respuesta);
			console.info(resultado);
		
		

			for (var i = resultado.length - 1; i >= 0; i--) 
			{

 				$("#modaldeprueba").append("<p>" +  resultado[i].public_fecha_publicacion + "</p>"
												+ "<td class='text-center'>" + resultado[i].public_tipovacante + "</td>"
												+ "<td class='text-center'>" + resultado[i].dpto_nombre + "</td>"
												+ "<td class='text-center'>" + resultado[i].public_fecha_contratacion + "</td>"
												+ "<td class='text-center'>" + '$' + ' ' + resultado[i].public_salario + "</td>"
												+ "<td>" + resultado[i].apr_barrio + "</td>"
												+ "<td>" + resultado[i].nom_ciudad + "</td>"
												+ "<td>" + resultado[i].nom_pais + "</td>"
												+ "<td><center><button class='btn btn-warning' data-toggle='modal' data-target='#ModalPublicacion' onclick='editar("+'"'+ resultado[i].public_id +'"'+");'><span class='glyphicon glyphicon-eye-open'></span> Ver Oferta</button></center></td>"
												+ "<td><a class='btn btn-primary' id='myBtn' href='../views/vista_consultar.php?id=" + resultado[i].apr_id + "&cedula=" + resultado[i].apr_cedula +"&nombre=" + resultado[i].apr_nombre + "&apellido=" + resultado[i].apr_apellido + "&telefono=" + resultado[i].apr_telefono + "&direccion=" + resultado[i].apr_direccion + "&barrio=" + resultado[i].apr_barrio + "&ciudad=" + resultado[i].nom_ciudad + "&boton='Registrar'>Actualizar</a></td>"
												+ "<td><center><button class='btn btn-danger' data-toggle='modal' onclick='eliminar("+'"'+ resultado[i].apr_id +'"'+");'><span class='glyphicon glyphicon-remove'></span></button></center></td>" +
												"<td><a class='btn btn-danger' onclick='location.reload();' href='../models/Dao_Aprendiz/deleteApr_Aprendiz.php?id=" + resultado[i].apr_id + "&boton=''>Eliminar</a></td>" +
 										   );					
			}
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");	

		});			*/



function editar(id){
	$("#myBtn").click(function(){
        $("#myModal").modal();
	//event.prevenDefault();

	$.post("../index.php/vacantes/mostrar_vacantes_por_id", {id:id})
		.done(function(result){
			var resultado = $.parseJSON(result);
			//alert(resultado);		
			var entidad = null;
			// el modelo retorna un array y solo necesitamos un solo indice

			if (resultado != null && resultado.length > 0){
				entidad = resultado[0];
			}

			if (entidad == null){
				return;
			}

			
			("#ModalPublicacion").modal(
			$("#fechpublicacion").append(entidad.public_fecha_publicacion),
			+ $("#ubicacion").append(entidad.dpto_nombre),
			+ $("#sueldo").append(entidad.public_salario),
			+ $("#descripcion").append(entidad.public_descripcion),
			+ $("#fechcontra").append(entidad.public_fecha_contratacion),
			+ $("#cantivacantes").append(entidad.public_cant_vacantes),
			+ $("#edumin").append(entidad.public_educacion_minima),
			+ $("#anoexperiencia").append(entidad.public_anos_experiencia),	
			+ $("#disponeviajar").append(entidad.public_dispone_viajar),
			+ $("#cambioresidencia").append(entidad.public_cambio_residencia),
			
			("#ModalPublicacion").modal("show"));

			
		})
		.fail(function(){
			alert("Ocurrió un error");
		});
			
});



 $('#tabla_publicaciones tbody').on('click', 'tr', function () {
        		var data = tabla_mostrar.row(this).data();
        		window.location.href ="../index.php/detalle_vacante";	
       			//sweetAlert(data[0]+data[1]+data[2]+data[3]+data[4]+data[5]+data[6]);
}
		

		       			swal({
     title: 'Grupo' + ' ' + '<font color=#18BC9C>' + 'Ospedale' ,
     text: htmlcontent,
     html: true
});