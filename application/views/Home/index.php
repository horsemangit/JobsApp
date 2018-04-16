<!DOCTYPE html>
<html lang="en">

    <head>
        <title color="#18BC9C">Grupo Ospedale</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>template/img/images/favicon.ico">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap Core CSS -->
        <link  rel="stylesheet" href="<?php echo base_url(); ?>template/vendor/bootstrap/css/bootstrap.min.css">

        <!-- Theme CSS -->
        <link href="<?php echo base_url(); ?>template/css/freelancer.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/vendor/font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Bootstrap-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css">

        <!--Library Sweet Alert CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    </head>

    <body id="page-top" class="index">

        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">    
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="http://200.6.184.147/digitallnet/" target="_blank" style="margin-top: -15px;"><i><font color="gray">BOLSA DE EMPLEO  </font><font color="#18BC9C"> G.OCHO</font><img class="" src="<?php echo base_url(); ?>template/img/Lupa.png" style=" width: 70px; height: 70px; margin-top: -15px;"></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="page-scroll">
                            <a href="#"  data-toggle="modal" data-target="#ModalLogin" style="border-radius: 8px;"><span class="glyphicon glyphicon-user"></span> Login</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#" class="btn-success" data-toggle="modal" data-target="#ModalUsuario" style="border-radius: 8px;"><span class="glyphicon glyphicon-file"></span> Ingrese Su Hoja De Vida</a>
                        </li>
                    </ul>
                </div>        
            </div>      
        </nav>
        <!-- End Navigation-->

        <!-- Header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">                        
                        <div class="intro-text">
                            <span class="name">Busca Tu Vacante AHORA!</span>
                                <hr class="star-light">
                                    <span class="skills">
                                        <hr>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <form id="formconsultar">
                                                        <div class="input-group">
                                                            <input class="form-control input-lg js-searchbox-input"
                                                             id="buscar"
                                                             type="text"
                                                             maxlength="100"
                                                             placeholder="Escribe el cargo o area profesional"
                                                             data-search-url=''>
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-primary btn-lg" type="button" id="vacantes" name="vacantes">
                                                                <i class="fa fa-search"></i>
                                                             </button>
                                                            </span>
                                                        </div>                              
                                                    </form>
                                                </div>    
                                            </div>        
                                        <hr>                                           
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <!-- Portfolio Grid Section -->
        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>¿Como Funciona?</h3>
                        <hr class="star-primary">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 portfolio-item">
                        <h4 class="text-center">REGISTRA TU HOJA DE VIDA</h4>
                            <p class="text-justify">Solo Deberas publicar la información básica de tu hoja de vida. Recuerda que debes ser mayor de edad.</p>                   
                                <img src="<?php echo base_url(); ?>template/img/form.png" class="" alt="" height="150px" style="padding: 0px 0px 0px 33%;">                   
                    </div>

                    <div class="col-sm-4 portfolio-item">
                    	<h4 class="text-center">SUBE TU HOJA DE VIDA</h4>
                            <p class="text-justify">Si tienes tu HV en formato word o pdf no dudes en subirla junto con tus datos basicos para tenerte en cuenta.</p>
                                <img src="<?php echo base_url(); ?>template/img/archivo.png" class="" alt="" height="150px" style="padding: 0px 0px 0px 33%;">
                    </div>

                    <div class="col-sm-4 portfolio-item">
                        <h4 class="text-center">No te preocupes</h4>
                            <p class="text-justify">Nosotros nos encargamos, el Grupo Ospedale quiere que hagas parte de este gran equipo, cuenta con nosotros. </p>
                                <img src="<?php echo base_url(); ?>template/img/pa.jpg" class="" alt="" height="150px" style="padding: 0px 0px 0px 33%;">
                   </div>         
                </div>
            </div>
        </section>
        <!-- End Portafolio Grid-->

        <!--Popup's Home-->
        <?php include("popup_home.php") ?>
        <!-- End Popup's -->
        

        <!-- Footer -->
        <footer class="text-center">
            <div class="footer-above">
                <div class="container">
                    <div class="row">
                        <div class="footer-col col-md-4">
                            <h3>¿Donde Estamos?</h3>
                            <p><span class="glyphicon glyphicon-globe"></span>  Carrera 66 #9 ~ 20  B/ Limonar 
                                <br><span class="glyphicon glyphicon-phone-alt"></span>  PBX (57-2) 386 53 10</p>         
                        </div>

                        <div class="footer-col col-md-4">
                            <h3>Siguenos en </h3>
                                <ul class="list-inline">
                                    <li>
                                        <a href="https://www.facebook.com/pages/Grupo-ospedale/966727650064947" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                                    </li>
                                </ul>
                        </div>

                        <div class="footer-col col-md-4">
                            <h3>Acerca De</h3>
                                <p class="text-justify">El <font color="gray">Grupo</font> <font color="#18BC9C">Ospedale</font>, es una Sociedad Anónima Simplificada, con domicilio en la ciudad de Cali... <a href="http://200.6.184.147/digitallnet/G-OchoSAS.aspx" target="_blank">(Seguir Leyendo)</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-below">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                           Todos los derechos reservados <br> Copyright &copy; 2017 <br> Versión D1.5
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer-->

        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
        <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
            <a class="btn btn-primary" href="#page-top">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>template/vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>template/vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
        <script src="<?php echo base_url(); ?>resources/js/site.js"></script>    
        <script src="<?php echo base_url(); ?>resources/js/control_home.js"></script>      

        <!-- Theme JavaScript -->
        <script src="<?php echo base_url(); ?>template/js/freelancer.min.js"></script>

        <!--Library Sweet Alert JS-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    </body>
</html>
