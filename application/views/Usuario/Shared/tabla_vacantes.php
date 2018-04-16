                        <form id="creapublicacion">
                            <hr>
                                <h4 style="color: #18BC9C;">Listado De Ofertas</h4>
                            <hr>

                                <table id="tabla_publicaciones" class="display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Usu_id</th>
                                            <th>Fecha Publicación</th>                        
                                            <th>Cargo o Profesión</th>
                                            <th>Departamento</th>
                                            <th>Ciudad</th>
                                            <th>Fecha De Contratación</th>
                                            <th>Salario</th>
                                            <th>Descripcion</th>                       
                                            <th>Cantidad de vacantes</th>
                                            <th>Educacion minima</th>
                                            <th>Años De Experiencia</th>
                                            <th>Dispone Viajar</th>
                                            <th>Cambio De Residencia</th>
                                            <th>Area / Categoria</th>


                                            <?php 
                                                if($this->session->userdata('perfil') == 1)
                                                    {
                                                        echo "            
                                                             <th>Eliminar Publicación</th>  
                                                            <th>Actualizar Publicación</th>";
                                                    }
                                                else if($this->session->userdata('perfil') > 1)
                                                    {
                                                        echo "<th>Ver Publicación</th>";
                                                    }   
                                            ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>  
                                    <!--//ID_USUARIO//-->    
                        </form>