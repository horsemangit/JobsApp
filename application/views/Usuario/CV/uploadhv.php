<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Links -->
       <?php include(APPPATH.'views/Usuario/Shared/links_page_usuario.php'); ?>
        <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>../../template/css/estilos_hv.css">
        <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>../../template/css/tabla_formato_hv.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css">

        <!--CDN DataTable CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

        <!--Library Sweet Alert CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        <title>HdV en formato(PDF|DOC)</title>
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
            <h4 style="color: #18BC9C;">Cargar Hoja De Vida</h4>
        <hr>
    </div>
    

        <div class="container"> <br />
        <form id="frmSubir" name="frmSubir" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong>Hoja De Vida</strong> <small> </small></div>
                        <div class="panel-body">
                            <div class="input-group file-preview">
                                <input placeholder="" type="text" class="form-control file-preview-filename" disabled="disabled">
                                <!-- don't give a name === doesn't send on POST/GET --> 
                                <span class="input-group-btn"> 
                                <!-- file-preview-input -->
                                <div class="btn btn-default file-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="file-preview-input-title">Cargar</span>
                                <input type="file" accept="text/cfg" id="archivo" name="archivo"/>
                                    <!-- rename it --> 
                            </div>
                                <button type="button" class="btn btn-labeled btn-primary" id="btn_enviar"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Subir</button>
                                </span> </div>
                            <!-- /input-group image-preview [TO HERE]--> 
                            
                            <br />
                            
                            <!-- Drop Zone -->
                            
                            <div class="panel panel-default">
                                <div class="col-md-12 column">
                                    <table class="table table-bordered table-hover" id="tab_logic" >
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Hoja De Vida (pdf|doc)
                                                </th>
                                                <th class="text-center">Acción</th>
                                            </tr>    
                                        </thead>
                                        <tbody id="tablamostrar">
                                        <tr>
                                            <?php 
                                                if(empty($filename))
                                                {
                                                ?>                                                  
                                                    <div class="alert alert-info alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                        <strong>¡Información!</strong> Sr. usuario, solo podra adjuntar una hoja de vida.
                                                    </div>
                                                
                                            <?php
                                                }
                                                else
                                                {
                                             ?>
                                                <td>                                             
                                                    <a href="#" class="it-file" data-filecandidateid="<?= $filesecuenceid ?> "><?= $filename ?></a>
                                                </td>
                                                <td>
                                                    <center>
                                                        <button type="submit" class='btn btn-danger' id="eliminarhv"><span class='glyphicon glyphicon-trash'></span> 
                                                        Eliminar
                                                        </button>
                                                    </center>                                                 
                                                </td>        
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                           </div> 
                                <div id="alert"></div>
                                </div> 
                            </div>                  
                        </div>
                    </div>                                   
                </div>
            </div>
        </form>    
    </div>    




    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript"></script>
    <!-- jQuery easing plugin -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>template/js/js_hv/funciones.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/control_postulados.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/site.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/control_upload_hv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.min.js"></script>
    <!--CDN DataTable JS-->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <!--Library Sweet Alert JS-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

</body>
</html>
      
