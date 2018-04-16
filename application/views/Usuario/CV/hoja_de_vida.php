<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<!-- Links -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    	<link rel="stylesheet" href="<?php base_url(); ?>../../template/css/wizard_hv.css">
    	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/4.4.0/font/octicons.css">
    	<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>../../template/css/estilos_hv.css">
    	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css">

	    <!--Library Sweet Alert CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        
        <title>Hoja De Vida</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>template/img/images/favicon.ico">     
        <style type="text/css">
        	#wrap {
			    position: relative;
			    display: inline-block;
			}
			#wrap span {
			    position: absolute;
			    bottom: 5px;
			    right: 0px;
			    }
			.counter{
			    background-color: #5dc991;
			    color: #fff;
			    font-size: 10px;
			    padding: 2px 5px;
			    line-height: 12px;
			    height: 14px;
			    text-align: center;
			    border-top-right-radius: 4px;
			    border-bottom-left-radius: 4px;
			    font-weight: 400;
			}
        </style>   
	</head>    

<body>
    <!-- Navigation -->
            <?php include(APPPATH.'views/Usuario/Shared/menu_perfil.php'); ?> 
    <!-- End Navigation-->
	    <p>
	    <div class="container">
	    <div class="row">
	        <section>
	        <div class="wizard">
	            <div class="wizard-inner">
	                <div class="connecting-line"></div>
	                <ul class="nav nav-tabs" role="tablist">

	                    <li role="presentation" class="active">
	                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Datos Personales">
	                            <span class="round-tab">
	                               <i class="glyphicon glyphicon-pencil"></i>
	                            </span>
	                        </a>
	                    </li>

	                    <li role="presentation" class="disabled">
	                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Perfil Profesional">
	                            <span class="round-tab">
	                                <i class="glyphicon glyphicon-check"></i>
	                            </span>
	                        </a>
	                    </li>
	                    <li role="presentation" class="disabled">
	                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Formación">
	                            <span class="round-tab">

	                                <i class="mega-octicon octicon-mortar-board"></i>

	                            </span>
	                        </a>
	                    </li>

	                    <li role="presentation" class="disabled">
	                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Preferencias De Empleo">
	                            <span class="round-tab">
	                                <i class="mega-octicon octicon-briefcase"></i>                                
	                            </span>
	                        </a>
	                    </li>
	                </ul>
	            </div>

	<!-- Datos #1 -->
	            <form id="formpage" role="form">
	                <div class="tab-content">
	                    <div class="tab-pane active" role="tabpanel" id="step1">
	                        <h3><center>Datos Personales</center></h3>
	                            <div class="row">
	                                <div class="col-lg-6">
	                                    <div class="form-group">
	                                        <label>Tipo De Documento</label>
	                                            <select name="tipodocumento" id="tipodocumento" class="form-control">
	                                                <option >-- Seleccione Tipo De Documento --</option>           
	                                            </select> 
	                                    </div>
	                                </div>    
	                                <div class="col-lg-6">
	                                    <div class="form-group">
	                                        <label>Numero De Identificación</label>
	                                            <input type="text"  name="num_documento" id="num_documento" class="form-control" placeholder="Digite Numero De Identificacion" maxlength="11">
	                                    </div>        
	                                </div>                                   
	                            </div>

	                            <div class="form-group">
	                                <label>Fecha De Nacimiento</label>                             
	                                    <input type="date" name="fechnaci" id="fechnaci" class="form-control">
	                            </div>    

	                            <div class="form-group">
	                                <label>Genéro</label>
	                                    <div class="radio">
	                                        <label><input type="radio" name="genero" id="genero" value="M">Masculino</label>
	                                    </div>  

	                                    <div class="radio">
	                                        <label><input type="radio" name="genero" id="genero" value="F">Femenino</label>
	                                    </div>
	                            </div>

	                            <div class="form-group">
	                                <label>Estado Civil</label>    
	                                    <select name="estadocivil" id="estadocivil" class="form-control">
	                                        <option>-- Seleccione Estado Civil --</option>           
	                                    </select>
	                            </div>        

	                            <div class="row">
	                                <div class="col-lg-6">
	                                    <div class="form-group">
	                                        <label>Tipo De Teléfono</label>    
	                                            <select  name="tipotelefono" id="tipotelefono" class="form-control">
	                                                <option>-- Seleccione Tipo De Teléfono --</option>   
	                                            </select>
	                                    </div>
	                                </div>    

	                                <div class="col-lg-6">
	                                    <div class="form-group">
	                                        <label>Numero De Teléfono</label>
	                                            <input type="text" maxlength="10" name="numero_telefono" id="numero_telefono" class="form-control" placeholder="Digite Numero de Telefono">    
	                                    </div>
	                                </div>
	                            </div> 

	                            <div class="form-group">
	                                <label>Pais</label>
	                                <select name="pais" id="pais" class="form-control">
	                                    <option>-- Seleccione Pais --</option>            
	                                </select>
	                            </div>    

	                            <div class="form-group">
	                                <label>Departamento</label> 
	                                <select name="departamento" id="departamento" class="form-control">
	                                    <option>-- Seleccione Departamento --</option>            
	                                </select>
	                            </div>          

	                            <div class="form-group">
	                                <label>Ciudad</label>                                    
	                                <select name="ciudad" id="ciudad" class="form-control">
	                                    <option>-- Seleccione Ciudad --</option>
	                                </select>
	                            </div>
	                            
	                            <div class="form-group">                            
	                                <label>Dirección</label>
	                                    <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingrese Direccion De Residencia">
	                            </div>        
	                            
	                            <div class="form-group">
	                                <label>Nacionalidad</label>    
	                                    <select name="nacionalidad" id="nacionalidad" class="form-control" >
	                                    <option>-- Seleccione Nacionalidad --</option>          
	                                </select>
	                            </div>                                                                   
	                                  
	                        <ul class="list-inline pull-right">
	                            <li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
	                        </ul>
	                    </div>
	                <!-- Finaliza Datos #1-->
	                
	                <!-- Datos #2-->  
	                    <div class="tab-pane" role="tabpanel" id="step2">
	                        <h3><center>Perfil Profesional</center></h3>
	                            <div class="form-group">
	                                <label>Cargo</label>
	                                    <input type="text" name="cargobreve" id="cargobreve" class="form-control" placeholder="Ej: Auxiliar Contable " />
	                            </div>    

	                            <div class="form-group">
	                                <label>Descripción breve de su perfil profesional</label>
	                                <textarea name="descripcionbreve" id="descripcionbreve" class="form-control" placeholder="Ej: Amplia experiencia en el área de tesoreria como auxiliar contable en el pago de cuentas por pagar (énfasis en el manejo, identificación, clasificación, análisis y evaluación de cuentas contables)." maxlength="1000" rows="5"></textarea>
	                                <div id="count"  style="padding: 4px; float: left; font-size: 15px; color: #2C3E50; text-align: center;">(Máximo 1000 : 0 Caracteres)</div>
	                                <br>
	                            </div>

	                            <div class="form-group">
	                                <label>Experiencia Laboral</label>
	                                <br>
	                                <b>Nota:*</b> Ingrese Información De Manera Breve De La Ultima Experiencia Laboral Que Haya Tenido
	                                        <textarea name="experiencia" id="experiencia" class="form-control" placeholder="Ej: Empresa, Cargo, Area, Periodo, Funciones." rows="5" maxlength="500"></textarea>
	                                        <div id="count1"  style="padding: 4px; float: left; font-size: 15px; color: #2C3E50; text-align: center;">(Máximo 500 : 0 Caracteres)</div>
	                            </div>    

	                        <ul class="list-inline pull-right">
	                            <li><button type="button" class="btn btn-default prev-step">Regresar</button></li>
	                            <li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
	                        </ul>
	                    </div>
	                <!-- Finaliza Datos #2-->
	                
	                <!-- Datos #3-->    
	                    <div class="tab-pane" role="tabpanel" id="step3">
	                        <h3><center>Formación</center></h3>

	                        <div class="form-group">
	                            <label>Centro Educativo</label>
	                                <input type="text" name="centroeducativo" id="centroeducativo" placeholder="Centro Educativo"  class="form-control" />
	                        </div>

	                        <div class="form-group">    
	                            <label>Nivel De Estudio</label>
	                                <select name="nivelestudio" id="nivelestudio" class="form-control" >
	                                    <option>-- Seleccione Nivel De Estudio --</option>
	                                </select>
	                        </div>

	                        <div class="form-group">
	                            <label>Area De Estudio</label>
	                                <input type="text" name="areaestudio" id="areaestudio" placeholder="Area De Estudio" class="form-control" />
	                        </div>

	                        <div class="form-group">
	                            <label>Estado</label>
	                                <div class="radio">
	                                    <label><input type="radio" name="estado" id="estado" value="culminado">Culminado</label>
	                                </div>  

	                                <div class="radio">
	                                    <label><input type="radio" name="estado" id="estado" value="cursando">Cursando</label>
	                                </div>

	                                <div class="radio">
	                                    <label><input type="radio" name="estado" id="estado" value="abandonado/aplazado">Abandonado/Aplazado</label>
	                                </div>
	                        </div>                        

	                        <div class="row">
	                            <div class="col-lg-6">
	                                <div class="form-group">  
	                                    <label>Fecha Inicio</label>
	                                            <input type="date" name="fechinicio" id="fechinicio" class="form-control">
	                                </div>
	                            </div>    

	                            <div class="col-lg-6"> 
	                                <div class="form-group">                   
	                                    <label>Fecha Final</label>    
	                                        <input type="date" name="fechfinal" id="fechfinal" class="form-control">
	                                </div>
	                            </div>                                         
	                        </div>

	                        <div class="row">
	                            <div class="col-lg-6">
	                                <div class="form-group">
	                                    <label>Idioma</label>
	                                        <select name="tipoidioma" id="tipoidioma" class="form-control">
	                                            <option>-- Seleccione El Tipo De Idioma --</option>
	                                    </select> 
	                                </div>                       
	                            </div>
	                                
	                            <div class="col-lg-6">
	                                <div class="form-group">
	                                    <label>Nivel</label> 
	                                        <select name="nivelidioma" id="nivelidioma" class="form-control">
	                                            <option>-- Seleccione Nivel De Idioma --</option>
	                                        </select>                       
	                                </div> 
	                            </div> 
	                        </div>
	                        
	                        <div class="form-group">            
	                            <label>Programas Informaticos (El Que Mas Domine)</label>
	                                <select name="proinfo" id="proinfo" class="form-control">
	                                    <option>-- Seleccione Un Programa Informatico --</option>
	                                </select>
	                        </div>

	                        <div class="form-group">
	                            <label>Conocimientos</label> 
	                                <input type="text" name="conocimientos" id="conocimientos" placeholder="Psicologia, Aux. Enfermeria, Call Center,etc." class="form-control" />
	                        </div>
	                                                       
	                        <ul class="list-inline pull-right">
	                            <li><button type="button" class="btn btn-default prev-step">Regresar</button></li>
	                            <li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
	                        </ul>
	                    </div>
	                <!-- Finaliza Datos #3-->
	                
	                <!-- Datos #4-->    

	                    <div class="tab-pane" role="tabpanel" id="complete">
	                        <h3><center>Preferencias De Empleo</center></h3>

	                            <div class="form-group">
	                                <label>Situacion Actual</label> 
	                                    <select class="form-control" name="situacionactual" id="situacionactual" >
	                                        <option>-- Seleccione Su Situacion Actual --</option>
	                                    </select>
	                            </div>

	                            <div class="form-group">
	                                <label>Puesto De Trabajo Deseado</label> 
	                                    <input type="text" name="ptotrabajo" id="ptotrabajo" class="form-control" placeholder="Puesto De Trabajo Deseado">
	                            </div>

	                            <div class="form-group">
	                                <label>Área</label> 
	                                    <select name="selecarea" id="selecarea" class="form-control">
	                                        <option>-- Seleccione Una Area --</option>
	                                    </select>
	                            </div>

	                            <div class="form-group">
	                                <label>Salario Minimo Aceptado</label> 
	                                    <br>
	                                        <b>Nota:*</b> Evite Poner Comas O Puntos. 
	                                            <input type="text" maxlength="10" name="salario" id="salario" placeholder="$" class="form-control">
	                            </div>

	                            <div class="form-group">
	                                <label>Disponibilidad Para Viajar</label>
	                                    <div class="radio">
	                                        <label><input type="radio" name="disponeviajar" id="disponeviajar" value="Si">Si</label>
	                                    </div>  

	                                    <div class="radio">
	                                        <label><input type="radio" name="disponeviajar" id="disponeviajar" value="No">No</label>
	                                    </div>
	                            </div>

	                            <div class="form-group">
	                                <label>Disponibilidad Para Cambiar De Residencia</label>
	                                    <div class="radio">
	                                        <label><input type="radio" name="disponecambioresidencia" id="disponecambioresidencia" value="Si">Si</label>
	                                    </div>  

	                                    <div class="radio">
	                                        <label><input type="radio" name="disponecambioresidencia" id="disponecambioresidencia" value="No">No</label>
	                                    </div>
	                            </div>      
	                        <ul class="list-inline pull-right">
	                            <li><button type="button" class="btn btn-default prev-step">Regresar</button></li>
	                            <li><button type="submit" name="submit" id="submit" class="btn btn-success">Registrar Datos</button></li>
	                        </ul>                            
	                    </div>

	                        <div class="clearfix"></div>
	                </div>
	            </form>
	        </div>
	    </section>
	   </div>
	</div>

    <!-- jQuery's -->
            <?php include(APPPATH.'views/Usuario/Shared/script_page_usuario.php'); ?>

	<!-- Scripts Control Usuario -->
	<script type="text/javascript" src="<?php base_url(); ?>../../template/js/wizard_hv.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/site.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/control_hojadevida.js"></script>

        <!--Library Sweet Alert JS-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

</body>
</html>
