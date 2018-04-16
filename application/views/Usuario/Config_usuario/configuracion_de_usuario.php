<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Links -->
       <?php include(APPPATH.'views/Usuario/Shared/links_page_usuario.php'); ?>
        <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>../../template/css/estilos_hv.css">
        <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>../../template/css/configuracion.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css">

        <!--Library Sweet Alert CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

        <!--CDN DataTable CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
        <title>Configuración</title>
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
            <h4 style="color: #18BC9C;">Configuración de Usuario</h4>
        <hr>
    </div>
    <p>

    <?php include(APPPATH.'views/Usuario/Shared/configuracion_perfil.php'); ?>

    
    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript"></script>
    <!-- jQuery easing plugin -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>template/js/js_hv/funciones.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/site.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/control_configuracion.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.min.js"></script>
    <!--Library Sweet Alert JS-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <!--CDN DataTable JS-->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>


</body>
</html>
      