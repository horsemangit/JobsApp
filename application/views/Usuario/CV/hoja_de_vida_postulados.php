<!DOCTYPE html>
 <html lang="en">  
<head>
    <title>Sr.(a) <?= $usu_nombre ?> <?= $usu_apellido ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>template/img/images/favicon.ico">
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Links -->
    <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>../../../template/css/estilos_hv.css">

    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php base_url(); ?>../../../template/CV/assets/plugins/bootstrap/css/bootstrap.min.css">   

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php base_url(); ?>../../../template/CV/assets/plugins/font-awesome/css/font-awesome.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="<?php base_url(); ?>../../../template/CV/assets/css/styles-6.css">

    <!--Library Sweet Alert CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head> 

<body>
    <?php include(APPPATH.'views/Usuario/Shared/menu_perfil.php'); ?>  
    <div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <?php 
                    if($genero == "M")
                    {
                        echo '<img class="profile" src="../../../template/CV/assets/images/profilem.png">'; 
                    }
                    else
                    { 
                        echo '<img class="profile" src="../../../template/CV/assets/images/profilef.png">';
                    } 
                ?>
                <h1 class="name"><?= $usu_nombre ?> <?= $usu_apellido ?></h1>
                <h3 class="tagline"><?= $pto_puesto_trabajo ?></h3>                
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa fa-envelope"></i><a href="mailto: <?= $usu_correo ?>">
                    <?= $usu_correo ?></a></li>
                    <li class="phone"><i class="fa fa-phone"></i><?= $numero_telefono ?></li>
                    <li class="linkedin"><i class="fa fa-globe"></i><?= $pais_nombre?></li>
                    <li class="website"><i class="fa fa-map-marker" aria-hidden="true"></i><?= $dpto_nombre; echo "/" ?> <?= $ciu_nombre ?></li>            
                    <li class="github"><i class="fa fa-street-view" aria-hidden="true"></i><?= $direccion ?></li>
                    <li class="github"><i class="fa fa-credit-card" aria-hidden="true"></i><?= $tipodocumento ?>Numero: <?= number_format($numero_identificacion) ?></li>
                    <li class="github"><i class="fa fa-calendar" aria-hidden="true"></i>Edad: <?php $hoy = date("Y-m-d"); $fecha_nacimiento; $resultado = $hoy - $fecha_nacimiento; echo $resultado?></li>
                    <li class="github"><i class="fa fa-briefcase" aria-hidden="true"></i><?= $situacionactual ?></li>
                    <label>Disponibilidad Para Viajar:</label>
                    <li class="github"><i class="<?php if($dispone_viajar == "Si"){ echo "fa fa-check";}else { echo "fa fa-close"; }?> aria-hidden="true"></i><?= $dispone_viajar ?></a></li>
                    <label>Dispone Cambiar De Residencia:</label>
                    <li class="github"><i class="<?php if($dispone_cambio_residencia == "Si"){ echo "fa fa-check";}else { echo "fa fa-close"; }?>" aria-hidden="true"></i><?= $dispone_cambio_residencia ?></li>
                    <label>Salario Neto/Mensual:</label>
                    <li class="github">$ <?= number_format($sueldo) ?></li>
                </ul>
            </div><!--//contact-container-->            
        </div><!--//sidebar-wrapper-->
         
        <div class="main-wrapper">            
            <section class="section summary-section">
                <a href="#abajo" class="btn btn-warning" id="bajar">Seleccionar Estado HV <span class="glyphicon glyphicon-arrow-down"></a>
                <h2 class="section-title"><i class="fa fa-user"></i>Información Personal</h2>
                <div class="summary">
                        <div class="row">
                            <div class="col-xs-4">
                                <label>Género:</label>
                                    <ul>
                                        <li><?php if($genero == "M"){ echo "Masculino"; }else{ echo "Femenino";} ?></li>
                                    </ul>
                            </div>
                            <div class="col-xs-4">
                                <label>Estado Civil:</label>
                                    <ul>
                                        <li><?= $estadocivil ?></li>
                                    </ul>
                            </div>
                            <div class="col-xs-4">
                                <label>Nacionalidad:</label>
                                    <ul>
                                        <li><?= $nacionalidad ?></li>
                                    </ul>
                            </div>                            
                            <div>
                                
                            </div>    
                        </div>    
                </div><!--//summary-->
                <hr>
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title"><i class="fa fa-black-tie" aria-hidden="true"></i>Experiencia Profesional</h2>
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title"><?= $cargo ?></h3>
                            <div class="time"></div>
                        </div><!--//upper-row-->
                        <div class="company"></div>
                    </div><!--//meta-->
                    <div class="details">
                        <p class="text-justify"><?= $experiencia_profesional ?></p>

                    </div><!--//details-->
                </div><!--//item-->    
                 <hr>                   
            </section><!--//section-->
           
            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-pencil"></i>Descripción Breve</h2>
                <div class="intro">
                    <p class="text-justify"><?= $descripcionbreve ?></p>
                </div><!--//intro-->
                <hr>
            </section><!--//section-->

            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Formación</h2>
                <div class="intro">
                    <div class="row">
                        <div class="col-xs-4">
                            <label>Centro Educativo: </label>
                                <ul>
                                    <li><?= $centro_educativo ?></li>
                                </ul>   
                        </div>
                        <div class="col-xs-4">
                            <label>Nivel De Estudio: </label>
                                <ul>
                                    <li><?= $nivelestudio ?></li>
                                </ul> 
                        </div>
                        <div class="col-xs-4">
                            <label>Area De Estudio: </label>
                                <ul>
                                    <li><?= $area_estudio ?></li>
                                </ul> 
                        </div>                        
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-4">
                            <label>Estado: </label>
                                <ul>
                                    <li><?= $estado ?></li>
                                </ul> 
                        </div>
                        <div class="col-xs-4">
                            <label>Fecha De Inicio: </label>
                                <ul>
                                    <li><?= $periodo_inicio ?></li>
                                </ul> 
                        </div>
                        <div class="col-xs-4">
                            <label>Fecha De Culminación: </label>
                                <ul>
                                    <li><?= $periodo_culminado ?></li>
                                </ul> 
                        </div>                                                                                                              
                    </div> 
                </div><!--//intro-->
                <hr>
            </section><!--//section-->  


            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-flag" aria-hidden="true"></i>Idioma</h2>
                <div class="intro">
                    <div class="row">
                        <div class="col-xs-4">
                            <label>Lenguaje: </label>
                                <ul>
                                    <li><?= $idioma ?></li>
                                </ul>
                        </div>
                        <div class="col-xs-4">        
                            <label>Nivel: </label>
                                <ul>
                                    <li><?= $nivelidioma ?></li>
                                </ul>    
                        </div>
                    </div>            
                </div><!--//intro-->
                <hr>
            </section><!--//section-->


            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-laptop" aria-hidden="true"></i>Habilidades (Programas Ofimaticos)</h2>
                <div class="intro">
                    <ul>
                        <li><?= $proinfo ?></li>
                    </ul>    
                </div><!--//intro-->
                <hr>
            </section><!--//section-->

            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-cogs" aria-hidden="true"></i>Conocimientos</h2>
                <div class="intro">
                    <ul>
                        <li><?= $conocimiento ?></li>
                    </ul>                                          
                </div><!--//intro-->
                <hr>
            </section><!--//section-->

            <section class="section projects-section">
                 <h2 class="section-title"><i class="fa fa-clipboard" aria-hidden="true"></i>Iniciar El Proceso En Esta Hoja De Vida PARA LA OFERTA:<ul><li><div class="text-primary"><i>"<?= $public_tipovacante ?>"</div></li></ul></i></h2>
                <div class="intro">
                    <form id="procesos" role="form">
                        <div class="col-lg-3">
                              <h5 class="text-success">Hv Vista <i class="fa fa-eye" aria-hidden="true"></i></h5>
                              <input type="radio" name="proceso_seleccion" class="form-control" value="Hdv Vista" <?php if( $prose == "Hdv Vista" ) { ?>checked="checked"<?php } ?>>                   
                        </div>
                        <div class="col-lg-3">                          
                            <h5 class="text-warning">En Proceso <i class="fa fa-cogs" aria-hidden="true"></i></h5>
                            <input type="radio" name="proceso_seleccion" class="form-control" value="En proceso" <?php if( $prose == "En proceso" ) { ?>checked="checked"<?php } ?>>                             
                        </div>
                        <div class="col-lg-3">
                            <h5 class="text-primary">Finalista <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></h5>
                            <input type="radio" name="proceso_seleccion" class="form-control" value="Finalista" <?php if( $prose == "Finalista" ) { ?>checked="checked"<?php } ?>>
                        </div>
                        <div class="col-lg-3">
                            <button type="submit" class="btn btn-success" id="proceso" name="proceso"><i class="fa fa-mouse-pointer" aria-hidden="true"></i> Guardar Proceso </button>                      
                        </div>
                        <input type="hidden" name="post_id" id="post_id" value="<?= $post_id ?>">
                    </form>   
                        <br>
                </div><!--intro--> 
                
            </section><!--//section-->  
            <hr>                                                          
        </div><!--//main-body-->
        <a name="abajo"></a>
    </div>
 
    <footer class="footer">
        <div class="text-center">
                <small class="copyright">Designed <i class="fa fa-smile"></i>for the <font color="gray">GRUPO</font> <font color="#18BC9C">OSPEDALE</font></small>
        </div><!--//container-->
    </footer><!--//footer-->
    
    <!-- Control JS -->
        <?php include(APPPATH.'views/Usuario/Shared/script_page_usuario.php'); ?>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/site.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/control_proceso_seleccion.js"></script>

    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 

    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>

    <!--Library Sweet Alert JS-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>  

</body>
</html> 

