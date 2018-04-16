
<?php 
$perfil = $this->session->userdata('perfil');
if($perfil == 1)
    {
?>
<!-- Navbar fixed top -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation" style="background: #2C3E50">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="#"><font color="gray">Grupo</font><font color="#18BC9C"> Ospedale</font></a>
            </div>
        
    <div class="navbar-collapse collapse" id="color">
      
        <!-- Left nav -->
        <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>index.php/usuario"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-bullhorn"></span> Ofertas <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>index.php/usuario/crear_publicacion"><span class="glyphicon glyphicon-tag"></span> Publicar Oferta</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/usuario/consultar_ofertas"><span class="glyphicon glyphicon-eye-open"></span> Ver Ofertas Publicadas</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>index.php/usuario/consultar_ofertas_inactivas"><span class="glyphicon glyphicon-ban-circle"></span> Ver Ofertas Inactivas</a></li>

                </ul>

            <li><a href="<?php echo base_url(); ?>index.php/usuario/postulados"><span class="glyphicon glyphicon-pushpin"></span> Postulados</a>
            <li><a href="<?php echo base_url(); ?>index.php/usuario/banco_hojas_de_vida"><span class="glyphicon glyphicon-list"></span> Banco Hojas De Vida</a>
            <li><a href="<?php echo base_url(); ?>index.php/usuario/configuracion"><span class="glyphicon glyphicon-wrench"></span> Configuración</a>

        </ul>       
      
         <!-- Right nav -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>
                    Hola, 
                    <?= $this->session->userdata('usu_nombre'); ?>
                    <?=$this->session->userdata('usu_apellido'); /*print_r($this->session->usuario_data['usu_apellido']);*/  ?>
                <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)" id="cerrar"><span class="glyphicon glyphicon-off"></span> Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container -->
    </div>    
    <?php
    }
    else if($perfil > 1)
    {
?>  
<!-- Navbar fixed top -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation" style="background: #2C3E50">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="#"><font color="gray">Grupo</font><font color="#18BC9C"> Ospedale</font></a>
            </div>
        <div class="navbar-collapse collapse" id="color">
      
        <!-- Left nav -->
        <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>index.php/usuario"><span class="glyphicon glyphicon-home"></span> Home</a></li>           
            <li><a href="<?php echo base_url(); ?>index.php/usuario/informacion_usuario"><span class="glyphicon glyphicon-file"></span> Mi Hoja De Vida</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/usuario/consultar_ofertas"><span class="glyphicon glyphicon-search"></span> Buscar Ofertas</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/usuario/aplicaciones"><span class="glyphicon glyphicon-list-alt"></span> Aplicaciones</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/usuario/configuracion"><span class="glyphicon glyphicon-wrench"></span> Configuracíon</a>
        </ul>       
      
         <!-- Right nav -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>
                    Hola,
                    <?= $this->session->userdata('usu_nombre'); ?>
                    <?=$this->session->userdata('usu_apellido'); /*print_r($this->session->usuario_data['usu_apellido']);*/  ?>
                <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)" id="cerrar"><span class="glyphicon glyphicon-off"></span> Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container -->
    </div>  

<?php 
    }
?>
