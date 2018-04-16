<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Links -->
        <?php include(APPPATH.'views/Usuario/Shared/links_page_usuario.php'); ?>
        <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>../../template/css/estilos_hv.css">
      
        <!--Library Sweet Alert CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

        <!--CDN DataTable CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
        <title>Información Personal</title>
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
                <div class="row">
                    <div class="col-lg-12">
                        <form id="formupdate">
                            <hr>
                                <div class="row">
                                    <div class="col-lg-9">
                                        <h4 style="color: #18BC9C;">Datos Personales</h4>
                                    </div>
                                    <div class="col-lg-3">                                    
                                        <a href="<?php base_url(); ?>upload" class="btn btn-warning"><span class="glyphicon glyphicon-upload"></span>
                                     Subir Mi Hoja De Vida (PDF|DOC)</a>
                                    </div>
                                </div>   
                                
                            <hr>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?= $usu_nombre ?>">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="apellido">Apellido</label>
                                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="<?= $usu_apellido ?>">
                                        </div>
                                    </div> 
                                </div>    

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tipodoc">Tipo De Identificación</label>
                                                <select class="form-control" id="tipodocumento" name="tipodocumento" data-id="<?= $td_tipodocumento_id ?>">
                                                <option >Seleccione Tipo De Identificacion</option>     
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="num_documento">Numero De Documento</label>
                                            <input type="text" class="form-control" id="num_documento" name="num_documento" placeholder="Numero De Identificación" value="<?= $numero_identificacion ?>">
                                        </div>
                                    </div>    
                                </div> 

                                <div class="form-group">
                                    <label for="fechnaci">Fecha De Nacimiento</label>
                                    <input type="date" class="form-control" id="fechnaci" name="fechnaci" placeholder="Apellido" value="<?= $fecha_nacimiento?>">
                                </div>

                                <div class="form-group">
                                    <label for="genero">Genéro</label>
                                </div>

                                <div id="genero">
                                <div class="form-group">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="genero" id="genero" value="M" <?php if( $genero == "M" ) { ?>checked="checked"<?php } ?> /> Masculino
                                    </label>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="genero" id="genero" value="F" <?php if( $genero == "F" ) { ?>checked="checked"<?php } ?> /> 
                                        Femenino
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label for="estadocivil">Estado Civil</label>
                                        <select class="form-control" id="estadocivil" name="estadocivil" data-id="<?= $estacivil_id ?>">
                                            <option >Seleccione Estado Civil</option>  
                                        </select>
                                </div>
                                 
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tipotelefono">Teléfono</label>
                                                <select class="form-control" id="tipotelefono" name="tipotelefono" data-id="<?= $tipotel_id ?>">    <option >Seleccione Tipo De Telefono</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="numero_telefono">Numero De Telefono</label>
                                            <input type="text" class="form-control" id="numero_telefono" name="numero_telefono" placeholder="Numero telefonico" value="<?= $numero_telefono ?>">
                                        </div>
                                    </div>    
                                </div> 

                                <div class="form-group">
                                    <label for="pais">Pais</label>
                                        <select class="form-control" id="pais" name="pais" data-id="<?= $dpto_pais_id?>">               
                                            <option>Seleccione Pais</option>           
                                        </select>
                                </div>

                                <div class="form-group">
                                    <label for="departamento">Departamento</label>
                                        <select class="form-control" id="departamento" name="departamento" data-id="<?= $ciu_dpto_id ?>">              
                                            <option>Seleccione Departamento</option>         
                                        </select>
                                </div>

                                <div class="form-group">
                                    <label for="ciudad">Ciudad</label>
                                        <select class="form-control" id="ciudad" name="ciudad" data-id="<?= $ciu_id ?>">               
                                            <option>Seleccione Ciudad</option>           
                                        </select>
                                </div>

                                <div class="form-group">
                                    <label for="direccion">Dirección</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese Direccion De Residencia" value="<?= $direccion ?>">
                                </div>    

                                <div class="form-group">
                                    <label for="nacionalidad">Nacionalidad</label>
                                        <select class="form-control" id="nacionalidad" name="nacionalidad" data-id="<?= $nacional_id ?>">              
                                            <option >Seleccione Nacionalidad</option>           
                                        </select>
                                </div>                                           

                                <!--PASO #2-->
                                <hr>
                                    <h4 style="color: #18BC9C">Perfil Profesional</h4>
                                <hr> 
                                    <div class="form-group">
                                        <label for="cargobreve">Cargo o titulo</label>
                                        <input type="text" class="form-control" id="cargobreve" name="cargobreve" placeholder="Auxiliar Contable" value="<?= $cargo ?>">
                                    </div>                         

                                    <div class="form-group">
                                        <label for="descripcionbreve">Perfil Profesional</label>
                                        <textarea class="form-control" rows="5" id="descripcionbreve"  name="descripcionbreve"><?= $descripcionbreve ?></textarea>
                                    </div>                                               

                                    <div class="form-group">
                                        <label for="experiencia">Experiencia Laboral</label>
                                        <textarea class="form-control" rows="5" id="experiencia"  name="experiencia"><?= $experiencia_profesional ?></textarea>
                                    </div>                      

                                <!--PASO #3-->
                                <hr>
                                    <h4 style="color: #18BC9C">Formación</h4>
                                <hr>  

                                    <div class="form-group">
                                        <label for="centroeducativo">Centro Educativo</label>
                                        <input type="text" class="form-control" id="centroeducativo" name="centroeducativo" placeholder="Centro Educativo" value="<?= $centro_educativo ?>">
                                    </div>  

                                    <div class="form-group">
                                        <label for="nivelestudio">Nivel De Estudio</label>
                                            <select class="form-control" id="nivelestudio" name="nivelestudio" data-id="<?= $nives_id ?>">             
                                                <option>Seleccione Nivel De Estudio</option>           
                                            </select>
                                    </div>                          

                                    <div class="form-group">
                                        <label for="areaestudio">Area De Estudio</label>
                                        <input type="text" class="form-control" id="areaestudio" name="areaestudio" placeholder="Area De Estudio" value="<?= $area_estudio ?>">
                                    </div>  

                                    <div class="form-group">
                                        <label for="estado">Estado</label>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="estado" id="estado" value="culminado" <?php if( $estado == "culminado" ) { ?>checked="checked"<?php } ?>> Culminado
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="estado" id="estado" value="cursando" <?php if( $estado == "cursando" ) { ?>checked="checked"<?php } ?>> 
                                            Cursando
                                        </label>
                                    </div>    

                                    <div class="form-group">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="estado" id="estado" value="abandonado/aplazado" <?php if( $estado == "abandonado/aplazado" ) { ?>checked="checked"<?php } ?>> 
                                            Abandonado/Aplazado
                                        </label>
                                    </div> 

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="fechinicio">Fecha Inicio</label>
                                                <input type="date" class="form-control" id="fechinicio" name="fechinicio" value="<?= $periodo_inicio ?>">
                                            </div>   
                                        </div>    

                                        <div class="col-lg-6">    
                                            <div class="form-group">
                                                <label for="fechfinal">Fecha Final</label>
                                                <input type="date" class="form-control" id="fechfinal" name="fechfinal" value="<?= $periodo_culminado ?>">
                                            </div>
                                        </div>
                                    </div>        

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="tipoidioma">Idioma</label>
                                                    <select class="form-control" id="tipoidioma" name="tipoidioma" data-id="<?= $idioma_id ?>"> 
                                                        <option>Seleccione Tipo De Idioma</option>
                                                    </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6">    
                                            <div class="form-group">
                                                <label for="nivelidioma">Nivel</label>
                                                    <select class="form-control" id="nivelidioma" name="nivelidioma" data-id="<?= $niv_idioma_id ?>">          
                                                        <option>Seleccione Nivel De Idioma</option>           
                                                    </select>
                                            </div>
                                        </div>
                                    </div>    

                                    <div class="form-group">
                                        <label for="proinfo">Programas Informaticos</label>
                                            <select class="form-control" id="proinfo" name="proinfo" data-id="<?= $proinfo_id ?>">               
                                                <option>Seleccione Programa Informatico</option> 
                                            </select>
                                    </div> 

                                    <hr>
                                        <h4 style="color: #18BC9C">Conocimientos</h4>
                                    <hr>  

                                    <div class="form-group">
                                        <label for="conocimientos">Conocimientos Que Provee</label>
                                        <input type="text" name="conocimientos" id="conocimientos" class="form-control" placeholder="Psicologia, Aux. Enfermeria, Call Center,etc." value="<?= $conocimiento ?>"> 
                                    </div>                                                                                                      

                                <!--PASO #4-->
                                <hr> 
                                    <h4 style="color: #18BC9C">Preferencias De Empleo</h4>
                                <hr>
                                    <div class="form-group"> 
                                        <label for="situactual">Situacion Actual</label>              
                                            <select name="situacionactual" id="situacionactual" class="form-control" data-id="<?= $situactual_id ?>">
                                                <option>Seleccione Situacion Actual</option>
                                            </select>
                                    </div> 

                                    <div class="form-group">
                                        <label for="ptotrabajo">Puesto De Trabajo Deseado</label>
                                        <input type="text" name="ptotrabajo" id="ptotrabajo" class="form-control" placeholder="Puesto De Trabajo Deseado" value="<?= $pto_puesto_trabajo ?>"> 
                                    </div>                 

                                    <div class="form-group"> 
                                        <label for="selecarea">Área</label>              
                                            <select name="selecarea" id="selecarea" class="form-control" data-id="<?= $area_id ?>">
                                                <option>Seleccione Área</option>
                                            </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="salario">Aspiración Salarial</label>
                                        <input type="text" name="salario" id="salario" class="form-control" placeholder="$" value="<?= $salario ?>"> 
                                    </div> 


                                    <div class="form-group">
                                        <label for="disponeviajar">Disponibilidad Para Viajar</label>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="disponeviajar" id="disponeviajar" value="Si" <?php if( $dispone_viajar == "Si" ) { ?>checked="checked"<?php } ?>> Si
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="disponeviajar" id="disponeviajar" value="No" <?php if( $dispone_viajar == "No" ) { ?>checked="checked"<?php } ?>> No
                                        </label>
                                    </div>    

                                    <div class="form-group">
                                        <label for="disponecambioresidencia">Disponibilidad Para Cambiar De Residencia</label>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="disponecambioresidencia" id="disponecambioresidencia" value="Si" <?php if( $dispone_cambio_residencia == "Si" ) { ?>checked="checked"<?php } ?>> Si
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="disponecambioresidencia" id="disponecambioresidencia" value="No" <?php if( $dispone_cambio_residencia == "No" ) { ?>checked="checked"<?php } ?>> No
                                        </label>
                                    </div>     

                                    <hr>
                                    <center>
                                        <div class="form-group">   
                                            <button type="submit" name="submit" id="actualizar" class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span> Guardar Cambios</button>
                                        </div>  
                                    </center>         
  
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="hv_id" id="hv_id" value="<?= $hv_id ?>">
                                    </div>  
                        </form>

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript"></script>
    <!-- jQuery easing plugin -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>template/js/js_hv/funciones.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/control_informacion_usuario.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/site.js"></script>

    <!--Library Sweet Alert JS-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

</body>
</html>