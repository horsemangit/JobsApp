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
        <title>Consultar Ofertas</title>
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
                        <?php include("Shared/tabla_vacantes.php"); ?>

    <!-- jQuery -->
    <?php include("Shared/script_page_usuario.php"); ?>

    <!-- JS Controller APP -->
    <script type="text/javascript" src="<?php echo base_url(); ?>template/js/js_hv/funciones.js"></script> 
    <?php include("Shared/script_tablas.php"); ?>
    <script src="<?php echo base_url(); ?>resources/js/site.js"></script>

     <!--CDN DataTable JS-->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

    <!--Library Sweet Alert JS-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

</body>
</html>    