<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">   

        <!-- Bootstrap Core CSS -->
        <link  rel="stylesheet" href="<?php echo base_url(); ?>template/vendor/bootstrap/css/bootstrap.min.css">

        <!-- Theme CSS -->
        <link href="<?php echo base_url(); ?>template/css/freelancer.min.css" rel="stylesheet">
        
        <!--CDN DataTable CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

        <!--Library Sweet Alert CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

        <!-- Custom Fonts -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/vendor/font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">        
        <title>Vacantes</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>template/img/images/favicon.ico">
    </head>

    <body id="page-top" class="index">

        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">    
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    
                    <a class="navbar-brand"><i><font color="WHITE">POSTULATE </font><font color="WHITE">  AHORA!</font></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll">
                           <a href="<?php echo base_url(); ?>" style="border-radius: 8px;"><span class="glyphicon glyphicon-home"></span> Inicio</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#"  data-toggle="modal" data-target="#ModalLogin" style="border-radius: 8px;"><span class="glyphicon glyphicon-user"></span> Login</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#" class="btn-success" data-toggle="modal" data-target="#ModalUsuario" style="border-radius: 8px;"><span class="glyphicon glyphicon-file"></span> Ingresa Su Hoja De Vida</a>
                        </li>
                    </ul>
                </div>        
            </div>      
        </nav>
        <!-- End Navigation-->
        <hr>
        <!-- Portfolio Grid Section & Table -->
        <section id="portafolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>Lista De Ofertas</i></h3>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="alert alert-info alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Importante:</strong> 
                    <ul>
                        <span class="glyphicon glyphicon-hand-right"></span> Para ver mas detallada la oferta solo basta con un CLICK.
                        <br>
                        <span class="glyphicon glyphicon-hand-right"></span> En 'Consultar Oferta' podras buscar lo que desees y ordenar los items de la manera mas comoda para ti.</li>
                    </ul>    
                </div>           

                <table id="tabla_publicaciones" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Usu_id</th>
                            <th>Fecha Publicación</th>                        
                            <th>Anuncio</th>                             
                            <th>Descripción</th>                       
                            <th>Departamento / Ciudad</th>
                            <th>Área / Categoria</th>
                            <th>Salario</th>
                            <th>Descripcion</th>                       
                            <th>Cantidad de vacantes</th>
                            <th>Educacion minima</th>
                            <th>Años De Experiencia</th>
                            <th>Dispone Viajar</th>
                            <th>Cambio De Residencia</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        
                    </tbody>
                </table>  
            </div>
        </section>
        <!--End Grid & Table-->


        <!-- Popup's Home -->
        <?php include("Home/popup_home.php") ?>
        <!-- End Popup's Home -->      

        <!-- Footer -->
        <footer class="text-center">
            <div class="footer-below">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <font color="gray" size="5">Grupo</font><font color="#18BC9C" size="5"> Ospedale</font>
                            <br>
                            <font color="white">por el bien comun.</font>
                        </div>    

                        <div class="col-lg-4">
                           Todos los derechos reservados <br> Copyright &copy; 2016
                        </div>
                        
                        <div class="col-lg-4">
                            <span class="glyphicon glyphicon-globe"></span>  Carrera 66 #9 ~ 20  B/ Limonar 
                            <br><span class="glyphicon glyphicon-phone-alt"></span>  PBX (57-2) 3865310
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Finaliza Footer-->

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

        <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

        <!-- JS Controller APP -->
        <script src="<?php echo base_url(); ?>resources/js/control_home.js"></script>


        <!--Library Sweet Alert JS-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

        <!-- Theme JavaScript -->
        <script src="<?php echo base_url(); ?>template/js/freelancer.min.js"></script>

    </body>
</html>
