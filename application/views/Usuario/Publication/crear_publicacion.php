<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Links -->
       <?php include(APPPATH.'views/Usuario/Shared/links_page_usuario.php'); ?>
        <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>../../template/css/estilos_hv.css">
      
        <!--Library Sweet Alert CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

        <!--CDN DataTable CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
        <title>Nueva Publicación</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>template/img/images/favicon.ico">
    </head>

<body>
    <!--navbar 2-->
        <?php include(APPPATH.'views/Usuario/Shared/menu_perfil.php'); ?>   
    <!-- Finaliza navbar-->

    <div class="container">
        <h2>GRUPO OSPEDALE</h2>
        </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="creapublicacion">
                            <hr>
                                <h4 style="color: #18BC9C;">Crear Publicación</h4>
                            <hr>    

                                <div class="form-group">
                                    <label for="tipovacante">Tipo De Vacante</label>
                                    <input type="text" class="form-control" id="tipovacante" name="tipovacante" placeholder="Ej: Auxiliar Enfermeria, Abogado, Medico General, Especialista...">
                                </div>

                                <div class="form-group">
                                    <label for="tipovacante">Seleccione Area o  Categoria</label>
                                        <select class="form-control" id="selecarea" name="selecarea">
                                            <option>Seleccione Area o Categoria</option>         
                                        </select> 
                                </div>                                

                                <div class="form-group">
                                    <label for="fechpublicacion">Fecha De Publicación</label>
                                        <input type="text" class="form-control" id="fechpublicacion" name="fechpublicacion" value="<?php echo date("d/m/Y"); ?>" readonly/>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="departamento">Departamento</label>
                                            <select class="form-control" id="departamento" name="departamento">              
                                                <option >Seleccione Departamento</option>         
                                            </select>                                  
                                    </div>

                                    <div class="col-lg-6">                                    
                                        <div class="form-group">
                                            <label for="ciudad">Ciudad</label>
                                                <select class="form-control" id="ciudad" name="ciudad">              
                                                    <option >Seleccione Ciudad</option>           
                                                </select>
                                        </div>
                                    </div> 
                                </div>  

                                <div class="form-group">
                                    <label for="salario">Salario</label>
                                    <input type="number" class="form-control" id="salario" name="salario" placeholder="$">
                                </div>  

                                <div class="form-group">
                                    <label for="descripcion">Descripción De La Oferta</label>
                                    <textarea id="descripcion" class="form-control" rows="5" name="descripcion" placeholder="Ingrese La Descripción De La Oferta De Empleo"></textarea>
                                </div>  

                                <div class="form-group">
                                    <label for="fechcontratacion">Fecha De Contratación</label>
                                    <input type="date" class="form-control" id="fechcontratacion" name="fechcontratacion">
                                </div>  

                                <div class="form-group">
                                    <label for="cantivacantes">Cantidad De Vacantes</label>
                                    <input type="number" class="form-control" id="cantivacantes" name="cantivacantes" placeholder="Ingrese La Cantidad De Vacantes">
                                </div>

                                <div class="form-group">
                                    <label for="educminima">Educación Minimima</label>
                                        <select class="form-control" id="educminima" name="educminima">              
                                            <option >Seleccione Educación Minima</option>           
                                        </select>
                                </div>        
                                
                                <div class="form-group">
                                    <label for="anoexperiencia">Años De Experiencia</label>
                                    <input type="number" class="form-control" id="anoexperiencia" name="anoexperiencia" placeholder="Ingrese Los Años De Experiencia">
                                </div>

                                <div class="form-group">
                                    <label for="disponeviajar">Disponibilidad Para Viajar</label>
                                        <select class="form-control" id="disponeviajar" name="disponeviajar">            
                                            <option >Seleccione</option>
                                            <option>Si</option>
                                            <option>No</option>           
                                        </select>
                                </div>

                                <div class="form-group">
                                    <label for="disponecambioresidencia">Disponibilidad Para Cambiar De Residencia</label>
                                        <select class="form-control" id="disponecambioresidencia" name="disponecambioresidencia">
                                            <option>Seleccione</option>           
                                            <option>Si</option>
                                            <option>No</option>
                                        </select>                                                
                                </div>

                                <div class="form-group">
                                    <label for="estado_publicacion">Estado De La Publicación</label>
                                        <select class="form-control" id="estado_publicacion" name="estado_publicacion">           
                                        </select>                                                
                                </div>
                                    <hr>
                                        <center>
                                            <div class="form-group">   
                                                <button type="submit" name="submit" id="actualizar" class="btn btn-success"><span class=" glyphicon glyphicon-tag"></span> Publicar</button>
                                            </div>  
                                        </center>        
                        </form>

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript"></script>
    <!-- jQuery easing plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>template/js/js_hv/funciones.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/control_hojadevida.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/control_crearpublicacion.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/site.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--Library Sweet Alert JS-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
