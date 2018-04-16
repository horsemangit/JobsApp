<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Links -->
        <?php include("Shared/links_page_usuario.php"); ?>
        <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>../../../template/css/estilos_hv.css">
      
        <!--Library Sweet Alert CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

        <!--CDN DataTable CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
        <title>Actualizar Oferta</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>template/img/images/favicon.ico">
    </head>

<body>
    <!--navbar 2-->
        <?php include("Shared/menu_perfil.php"); ?>  
    <!-- Finaliza navbar-->

    <div class="container">
        <h2>GRUPO OSPEDALE</h2>
        </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="formupdate">
                            <hr>
                                <h4 style="color: #18BC9C;">Actualizar Oferta De Trabajo</h4>
                            <hr>                           

                                <div class="form-group">
                                    <label for="tipovacante">Tipo De Vacante</label>
                                    <input type="text" class="form-control" id="tipovacante" name="tipovacante" placeholder="Ej: Auxiliar Enfermeria, Abogado, Medico General, Especialista..." value="<?= $public_tipovacante ?>">
                                </div>

                                <div class="form-group">
                                    <label for="selecarea">Area / Categoria</label>
                                        <select class="form-control" id="selecarea" name="selecarea" data-id="<?= $categoria_id ?>">              
                                            <option>Seleccione Area o Categoria</option>          
                                        </select>
                                </div>                                 

                                <div class="form-group">
                                    <label for="fechpublicacion">Fecha De Publicación</label>
                                        <input type="text" class="form-control" id="fechpublicacion" name="fechpublicacion" value="<?= $public_fecha_publicacion ?>" readonly/>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="departamento">Departamento</label>
                                            <select class="form-control" id="departamento" name="departamento" data-id="<?= $dpto_id ?>">              <option >Seleccione Departamento</option>         
                                            </select>                                  
                                    </div>

                                    <div class="col-lg-6">                                    
                                        <div class="form-group">
                                            <label for="ciudad">Ciudad</label>
                                                <select class="form-control" id="ciudad" name="ciudad" data-id="<?= $ciu_id ?>">              
                                                    <option>Seleccione Ciudad</option>           
                                                </select>
                                        </div>
                                    </div> 
                                </div>  

                                <div class="form-group">
                                    <label for="salario">Salario</label>
                                    <input type="text" class="form-control" id="salario" name="salario" placeholder="$" value="<?= $public_salario ?>">
                                </div>  

                                <div class="form-group">
                                    <label for="descripcion">Descripción De La Oferta</label>
                                    <textarea id="descripcion" class="form-control" rows="5" name="descripcion" placeholder="Ingrese La Descripción De La Oferta De Empleo"><?= $public_descripcion ?></textarea>
                                </div>  

                                <div class="form-group">
                                    <label for="fechcontratacion">Fecha De Contratación</label>
                                    <input type="date" class="form-control" id="fechcontratacion" name="fechcontratacion" value="<?= $public_fecha_contratacion ?>">
                                </div>  

                                <div class="form-group">
                                    <label for="cantivacantes">Cantidad De Vacantes</label>
                                    <input type="text" class="form-control" id="cantivacantes" name="cantivacantes" placeholder="Ingrese La Cantidad De Vacantes" value="<?= $public_cant_vacantes ?>">
                                </div>

                                <div class="form-group">
                                    <label for="educminima">Educación Minimima</label>
                                        <select class="form-control" id="educminima" name="educminima" data-id="<?= $public_educacion_minima_id ?>">
                                            <option>Seleccione Educación Minima</option>    
                                        </select>
                                </div>        
                                
                                <div class="form-group">
                                    <label for="anoexperiencia">Años De Experiencia</label>
                                    <input type="text" class="form-control" id="anoexperiencia" name="anoexperiencia" placeholder="Ingrese Los Años De Experiencia" value="<?= $public_anos_experiencia ?>">
                                </div>

                                <div class="form-group">
                                    <label for="disponeviajar">Disponibilidad Para Viajar</label>
                                        <select class="form-control" id="disponeviajar" name="disponeviajar">
                                            <option >Seleccione</option>
                                            <?php if($public_dispone_viajar == "Si") {?>
                                                <option value="Si" selected="selected">Si</option>
                                                <option value="No">No</option>           
                                            <?php } else {?>
                                                <option value="Si">Si</option>
                                                <option value="No" selected="selected">No</option>
                                            <?php } ?>
                                        </select>
                                </div>

                                <div class="form-group">
                                    <label for="disponecambioresidencia">Disponibilidad Para Cambiar De Residencia</label>
                                        <select class="form-control" id="disponecambioresidencia" name="disponecambioresidencia">
                                            <option >Seleccione</option>
                                            <?php if($public_cambio_residencia == "Si") {?>
                                                <option value="Si" selected="selected">Si</option>
                                                <option value="No">No</option>           
                                            <?php } else {?>
                                                <option value="Si">Si</option>
                                                <option value="No" selected="selected">No</option>
                                            <?php } ?>
                                        </select>                                                
                                </div>

                                <div class="form-group">
                                    <label for="estado_publicacion">Estado De La Publicación</label>
                                        <select class="form-control" id="estado_publicacion" name="estado_publicacion">                       
                                            <?php if($estado_id == "1") {?>
                                                <option value="1" selected="selected">Activa</option>
                                                <option value="2">Inactiva</option>           
                                            <?php } else {?>
                                                <option value="1">Activa</option>
                                                <option value="2" selected="selected">Inactiva</option>
                                            <?php } ?>
                                        </select>                                                
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="id_publicacion" class="form-control"
                                    id="id_publicacion" value="<?= $id_publicacion ?>">
                                </div>
                                    <hr>
                                        <center>
                                            <div class="form-group">   
                                                <button type="submit" name="submit" id="actualizar" class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span> Actualizar Oferta</button>
                                            </div>  
                                        </center>       
                        </form>

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript"></script>
    <!-- jQuery easing plugin -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>template/js/js_hv/funciones.js"></script> 
    
    <!-- JS controller APP -->
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/control_publicacion.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/site.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--Library Sweet Alert JS-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>