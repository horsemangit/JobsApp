<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Links -->
        <?php include("Shared/links_page_usuario.php"); ?>    
        <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>../template/css/estilos_hv.css">          
        <!-- Slider -->
        <link rel="stylesheet" href="<?php base_url();?>../template/Slider/flexslider.css" type="text/css">
        <!--Library Sweet Alert CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        <title>Home</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>template/img/images/favicon.ico">
    </head>

    <body>
        <!--navbar 2-->
            <?php include("Shared/menu_perfil.php"); ?>  
        <!-- Finaliza navbar-->


        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="<?php base_url(); ?>../template/Slider/imagenes/enfermera.png" alt="">
                    <section class="flex-caption">
                        
                    </section>
                </li>
                <li>
                    <img src="<?php base_url(); ?>../template/Slider/imagenes/enfermeros.png" alt="">
                    <section class="flex-caption">
                        
                    </section>
                </li>
            </ul>
        </div>


        <footer>
           <p>Grupo Ospedale &copy; 2017</p>
        </footer>

        <!-- jQuery's -->
        <?php  include("Shared/script_page_usuario.php") ; ?>

        <!-- JS Page -->   
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/site.js"></script>

        <!-- Slider JS-->
        <script src="<?php base_url(); ?>../template/Slider/js/jquery.flexslider.js"></script>
        
        <script type="text/javascript" charset="utf-8">
            $(window).load(function() 
            {
                $('.flexslider').flexslider({
                    touch: true,
                    pauseOnAction: false,
                    pauseOnHover: false,
                });
             });
        </script>

        <!--Library Sweet Alert JS-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    </body>
</html>