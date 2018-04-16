<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
        <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
        <link rel="shortcut icon" href="favicon.ico">  
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> 

        <!-- Links -->
        <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>../../../template/css/estilos_hv.css"> 

        <!-- Bootstrap Core CSS -->
        <link  rel="stylesheet" href="<?php echo base_url(); ?>template/vendor/bootstrap/css/bootstrap.min.css">

        <!-- Theme CSS -->
        <link href="<?php echo base_url(); ?>template/css/freelancer.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/vendor/font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Theme CSS -->  
        <link id="theme-style" rel="stylesheet" href="<?php base_url(); ?>../../../template/CV/assets/css/styles6.css"> 

        <!--Library Sweet Alert CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        <title>Detalle Vacante</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>template/img/images/favicon.ico">
    </head>

    <body id="page-top" class="index">
        <!-- Navigation -->
            <?php include("Shared/menu_perfil.php"); ?>
        <!-- End Navigation -->
        <hr>

    <!--Wrapper-->
        <div class="wrapper">
            <div class="sidebar-wrapper">
                <div class="profile-container">
                    <img class="img-circle" src="<?php base_url(); ?>../../../template/CV/assets/images/g9.png" alt="" />
                        <h1 class="name">
                            <font color="gray">Grupo</font>
                            <br>
                            <font color="#18D9B9">Ospedale</font>
                        </h1>
                        
                        <h3 class="tagline"><i><font color="#ffffff ">Por el bien común.</font></i></h3>
                </div><!--//profile-container-->
            
                <div class="contact-container container-block">
                    <ul class="list-unstyled contact-list">
                        <i class="fa fa-pencil"></i>
                            <label>Resumen De La Oferta</label>                    
                                <ul>
                                    <li><?= $public_tipovacante ?></li>
                                </ul>

                        <i class="fa fa-home"></i><label>Empresa: </label>
                            <ul>
                                <li><a href="http://200.6.184.147/digitallnet/" target="_blank">Grupo Ospedale (G.OCHO S.A.S)</a></li>
                            </ul>

                        <i class="fa fa-dollar"></i><label>Salario: </label>
                            <ul>
                                <li>$ <?= number_format($public_salario); ?></a></li>
                            </ul>
                            
                            <i class="fa fa-map-marker"></i><label>Ubicación: </label>
                            <ul>
                                <li><?= $dpto_nombre ?> / <?= $ciu_nombre ?></li>
                            </ul>
                            <hr style="border: none; border-top: medium double #ffffff; color: #333;">
                    </ul>
            </div><!--//contact-container-->
        </div><!--//sidebar-wrapper-->           
    
    <!-- Vacante-->
        <div class="main-wrapper">            
            <section class="section summary-section">
                <hr>
                    <h3 class="section-title">
                        <i class="fa fa-tag"></i>
                            <?= $public_tipovacante?>
                    </h3>
                <hr>
                    <font color="#18BC9C" size="5">
                        <strong>
                            G OCHO S.A.S
                        </strong>
                    </font>
                    <br>                    
                        <i class="text-center">
                            <font size="3">
                                Empresa del sector salud interesada en el personal idóneo para satisfacción de sus clientes. 
                                Empresa del sector Legal / Asesoría, localizada en Valle del Cauca, De 251 a 500 trabajadores.
                            </font>
                        </i>
                <hr>

                    <div class="row">
                        <div class="col-lg-6">                                 
                            <span class="glyphicon glyphicon-time"></span>
                                <i>
                                    <font size="3"> 
                                        Publicado: <?= $public_fecha_publicacion ?>
                        </div>
                                
                        <div class="col-lg-6">
                            <span class="glyphicon glyphicon-map-marker"></span> 
                                Ubicacion: <?= $ciu_nombre ?> , <?= $dpto_nombre ?>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <font size="4">
                                <strong>Salario</strong>
                            </font>  

                            <ul>
                                <li>$ <?= number_format($public_salario) ?></li>
                            </ul>

                            <font size="4">
                                <strong>Descripción</strong>
                            </font>                                 
                                <ul>
                                    <li><?= $public_descripcion ?></li>
                                    <li>Fecha De Contratacion: <?= $public_fecha_contratacion ?></li>
                                    <li>Cantidad De Vacantes: <?= $public_cant_vacantes ?></li>
                                </ul>   
                        
                            <font size="4">
                                <strong>Requerimientos</strong>
                            </font>     
                                <ul>
                                    <li>Educacion Mínima: <?= $public_educacion_minima ?></li>
                                    <li>Años De Experiencia: <?= $public_anos_experiencia ?> </li>
                                    <li>Disponibilidad De Viajar : <?= $public_dispone_viajar ?></li>
                                    <li>Disponibilidad De Cambio De Residencia: <?= $public_cambio_residencia ?></li>
                                </ul> 
                        </font></i>
                        <hr>
                            <form id="postularse">
                                <input type="hidden" name="id_publicacion" id="id_publicacion" value="<?= $id_publicacion ?>">
                                <center><button type="submit" id="postularse" class="btn btn-success">
                                Postularme</button></center>
                            </form>    
                        <hr>  
                    </div> 
                </div>
        </section>
    </div>
    </div>
    <!--finaliza Vacante -->

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
    <script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript"></script>
    <!-- jQuery easing plugin -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>template/js/js_hv/funciones.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="<?php echo base_url(); ?>resources/js/site.js"></script>

    <!--Library Sweet Alert JS-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>         

    <!-- JS Controller APP -->
    <script src="<?php echo base_url(); ?>resources/js/control_home.js"></script>  
    <script src="<?php echo base_url(); ?>resources/js/site.js"></script>  
</body>
</html> 

