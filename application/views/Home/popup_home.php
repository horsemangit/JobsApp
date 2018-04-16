<!-- Modal Insert HV Usuario-->
    <div class="bd-example">
        <div class="modal fade" id="ModalUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: #18BC9C; color: white;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>                        
                        <h4 class="modal-title" id="exampleModalLabel">Datos De Acceso</h4>
                    </div>

                    <div class="modal-body">
                        <form id="formularioHV">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" name="usu_nombre" class="form-control" id="usu_nombre" placeholder="Escriba Su Nombre*" required/>
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>                              
                                    <input type="text" name="usu_apellido" class="form-control" id="usu_apellido" placeholder="Escriba Su Apelllido*" required/>
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>                                
                                    <input type="email" name="usu_correo" class="form-control" id="usu_correo" placeholder="Example@gmail.com*" required/>
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    <input type="password" name="usu_contrasena" class="form-control" id="usu_contrasena" placeholder="Escriba la Contraseña*" required/>
                            </div>                   

                            <div class="modal-footer modal-left">            
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-success">Registrarse</button>                         
                            </div>        
                        </form>
                    </div>               
                </div>
            </div>
        </div>
    </div>
    <!-- Finaliza Modal HV-->

    <!-- Modal Login-->
    <div class="bd-example">
        <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: #18BC9C; color: white;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="exampleModalLabel">Login</h4>
                    </div>

                    <div class="modal-body">
                        <form id="formlogin">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="text" name="usu_correo_log" class="form-control" id="usu_correo_log" placeholder="Ingrese Su Email" required/>
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" name="usu_contrasena_log" class="form-control" id="usu_contrasena_log" placeholder="Digite Su Contraseña" required/>  
                            </div>

                            <div style="position: relative; bottom: 8px;">
                                <a href="#" id="restore_password" style="color: #2C3E50">¿Olvido su contraseña?</a>
                            </div>                        
                        
                            <div class="modal-footer modal-left">            
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-success" id="login">Ingresar</button>
                            </div>
                        </form>                     
                    </div>            
                </div>
            </div>
        </div>
    </div>
    <!-- Finaliza Modal Login-->