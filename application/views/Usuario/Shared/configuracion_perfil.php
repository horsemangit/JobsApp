<?php
    if($this->session->userdata("perfil") == 1)
    {
?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-lg-4">
                                    <a href="#" class="active" id="login-form-link"><span class="glyphicon glyphicon-refresh"></span> Cambiar Mi Contraseña</a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="#" id="register-form-link"><span class="glyphicon glyphicon-plus-sign"></span> Crear Nuevo Administrador</a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="#" id="display_table_admin"><span class="glyphicon glyphicon-user"></span> Administradores</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="formUpdatePassword" style="display: block;">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                            <input type="password" name="contrasena_user" class="form-control" id="contrasena_user" placeholder="Nueva Contraseña" required/>
                                        </div>
                                    
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-repeat"></span></span>
                                            <input type="password" name="new_contrasena" class="form-control" id="new_contrasena" placeholder="Confirmar Contraseña" required/>
                                        </div>  
                                        <hr>
                                        <div class="modal-rigth">  
                                            <center>         
                                                <button type="button" name="login-submit" class="form-control btn btn-register" id="updatepass"><span class="glyphicon glyphicon-refresh"></span> Actualizar</button>
                                            </center>    
                                        </div>
                                    </form>                                
                                    <form id="formNewAdmin" style="display: none;">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                            <input type="text" name="nombre_admin" class="form-control" id="nombre_admin" placeholder="Nombre De Admin" required/>
                                        </div>
                                        
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                            <input type="text" name="apellido_admin" class="form-control" id="apellido_admin" placeholder="Apellido De Admin" required/>
                                        </div>  

                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                            <input type="email" name="email_admin" class="form-control" id="email_admin" placeholder="Email De Admin" required/>
                                        </div>

                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                            <input type="password" name="contrasena_admin" class="form-control" id="contrasena_admin" placeholder="Contraseña" required/>
                                        </div>
                                        <hr>
                                        <div class="modal-rigth">  
                                            <center>          
                                                <button type="submit" name="register-submit"  id="nuevo_admin" class="form-control btn btn-register"><span class="glyphicon glyphicon-ok"></span> Crear</button>
                                            </center>    
                                        </div>
                                    </div>
                                </div>
                            </form>
                                <table id="table_admin" class="display" cellspacing="" width="100%">
                                    <thead >
                                        <tr>
                                            <th>Id. Admin</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                </table>                            
                            </div>
                        </div>
                    </div>
                </div>  

                <!-- Modal update_data_admin -->
                <div class="modal fade" id="ModalUpdateAdmin" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <h3 class="modal-title" id="lineModalLabel">Actualizar Administrador</h3>
                            </div>
                            
                            <div class="modal-body">
                                <form role="form" id="ActualizarAdmin">
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="apellido">Apellido</label>
                                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                                    </div> 
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="id_admin" id="id_admin" placeholder="E-mail">
                                    </div>                              
                            </div>
                            <div class="modal-footer">
                                <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Cerrar</button>
                                    </div>                                
                                    <div class="btn-group" role="group">
                                        <button type="submit" id="actualizar" class="btn btn-success btn-hover-green" data-action="save" role="button">Actualizar</button>
                                    </div>
                                </div>
                            </div>
                                </form>
                        </div>
                    </div>
                </div>
<?php
    }
    else if($this->session->userdata("perfil") > 1)
    {
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-lg-6">
                                <center><a href="#" class="active" id="login-form-link"><span class="glyphicon glyphicon-refresh"></span> Cambiar Mi Contraseña</a></center>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="formUpdatePassword" style="display: block;">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input type="password" name="contrasena_user" class="form-control" id="contrasena_user" placeholder="Nueva Contraseña" required/>
                                    </div>
                                
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-repeat"></span></span>
                                        <input type="password" name="new_contrasena" class="form-control" id="new_contrasena" placeholder="Confirmar Contraseña" required/>
                                    </div>  
                                    <hr>
                                    <div class="modal-rigth">  
                                        <center>         
                                            <button type="button" name="login-submit" class="form-control btn btn-register" id="updatepass"><span class="glyphicon glyphicon-refresh"></span> Actualizar</button>
                                        </center>    
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
<?php     
    }
?>