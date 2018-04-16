<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Links -->
       <?php include(APPPATH.'views/Usuario/Shared/links_page_usuario.php'); ?>
        <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>../../template/css/estilos_hv.css">

        <!--CDN DataTable CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

        <!--Library Sweet Alert CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

        <!-- Selectpiker -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css">
        <title>Banco Hojas De Vida</title>
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
        <hr>
            <h4 style="color: #18BC9C;">Banco De Hojas De Vida</h4>
        <hr>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <label style="color: #18BC9C;">Seleccione La Categoria.</label>
                <br>
                <select  class="selectpicker" id="selectcate" name="selectcate" data-width="100%">
                    <option>-- Categoria --</option>
                </select> 
            </div>          
        </div>
        <hr>
        <p>
       
        <table id="banco" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Postulaciones Realizadas</th>                    
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>                        
                    <th>Localizacion</th>
                    <th>Nivel De Estudios</th>
                    <th>Ver Hoja De Vida</th>
                    <th>Ver Hoja De Vida (PDF)</th>
                </tr>  
            </thead>
            <tbody class="text-center">

            </tbody>
        </table>  

        <!-- "DISEÑO DE MODAL" -->
        <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- CONTENIDO DE LA VENTANA MODAL-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><font color="#18BC9C">Historial De Postulaciones </font></h4><div id="nombre"></div>
                    </div>

                    <br>
                    <div class="separado" style="margin-left: 10px;margin-right: 10px;">
                            <table id="historial_postulaciones" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr> 
                                        <th>Fecha De Publicación</th>
                                        <th>Estado De Publicación</th>                    
                                        <th>Titulo Oferta</th>
                                        <th>Fecha De Postulación</th>
                                        <th>Proceso</th>
                                    </tr>  
                                </thead>
                                <tbody class="text-center">

                                </tbody>
                            </table>
                    </div>                         
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
        </div>    
        </div>

        <!-- jQuery -->
        <?php include(APPPATH.'views/Usuario/Shared/script_page_usuario.php'); ?>

        <!-- Selectpiker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.min.js"></script>

        <!-- JS Controller APP -->
        <script type="text/javascript" src="<?php echo base_url(); ?>template/js/js_hv/funciones.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/control_banco_Hdv.js"></script>
        
        <script src="<?php echo base_url(); ?>resources/js/site.js"></script>

         <!--CDN DataTable JS-->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

        <!--Library Sweet Alert JS-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


    </body>
</html> 