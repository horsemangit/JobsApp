<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Links -->
        <?php include("Shared/links_page_usuario.php"); ?>
        <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>../../template/css/estilos_hv.css">
     
        <!--Library Sweet Alert CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

        <!--CDN DataTable CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
        <title>Consultar Ofertas Inactivas</title>
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
                    <hr>
                        <h4 style="color: #18BC9C;">Estas Son Las Ofertas Inactivas</h4>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <table id="tabla_publicaciones_inactivas" class="display" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Usu_id</th>
                                                <th>Fecha Publicación</th>                        
                                                <th>Titulo Oferta</th>
                                                <th>Departamento</th>
                                                <th>Ciudad</th>
                                                <th>Fecha De Contratación</th>
                                                <th>Salario</th>
                                                <th>Descripcion</th>                       
                                                <th>Cantidad de vacantes</th>
                                                <th>Educacion minima</th>
                                                <th>Años De Experiencia</th>
                                                <th>Dispone Viajar</th>
                                                <th>Cambio De Residencia</th>
                                                <th>Area / Categoria</th> 
                                                <th>Republicar Oferta</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>

        <!-- Modal -->
        <div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
             aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" 
                           data-dismiss="modal">
                               <span aria-hidden="true">&times;</span>
                               <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Esta oferta se publicara nuevamente!
                            <h5><i><div id="titulo_oferta" style="color: #18BC9C"></div></i></h5>                           
                        </h4>
                    </div>
                    
                    <!-- Modal Body -->
                    <div class="modal-body">                        
                        <form role="form">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="fechpublicacion">Nueva Fecha De Publicación:</label>
                                        <input type="text" class="form-control"
                                        id="fechpublicacion" value="<?php echo date('d/m/Y') ?>" readonly/>
                                </div>
                            </div>
                          
                            <div class="col-xs-6">
                                <div class="form-group has-error">
                                    <label for="fechcontratacion">Nueva Fecha De Contratación:</label>
                                       <input type="date" id="fechcontratacion" class="form-control">
                                </div>
                            </div>
                        </div>

                            <div class="alert alert-info">
                              <strong>IMPORTANTE:</strong> Registre la nueva fecha de contratación.
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <button type="button" id="duplicar_oferta" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-tag"></span> Publicar 
                                </button>
                            </div>                                
                        </form>                     
                    </div>                    
                </div>
            </div>
        </div>


                       
        <!-- jQuery -->
        <?php include("Shared/script_page_usuario.php"); ?>

        <!-- JS Controller APP -->
        <script type="text/javascript" src="<?php echo base_url(); ?>template/js/js_hv/funciones.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/control_hojadevida.js"></script>
        <?php include("Shared/script_tablas.php"); ?>
        <script src="<?php echo base_url(); ?>resources/js/site.js"></script>

         <!--CDN DataTable JS-->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

        <!--Library Sweet Alert JS-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    </body>
</html> 