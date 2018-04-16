<?php

class Home_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE); 
    }

    public function registrar_usuario($usu_nombre,$usu_apellido,$usu_correo,$usu_contrasena,$usu_per_id_perfil)
    {
        $valida_email = $this->db->conn_id->prepare("SELECT 
                                                      public.usu_usuario.usu_correo
                                                    FROM
                                                      public.usu_usuario
                                                    WHERE 
                                                      public.usu_usuario.usu_correo = '$usu_correo'");

        $valida_email->execute();
        $resultado = $valida_email->fetch(PDO::FETCH_OBJ);          
        if(empty($resultado))
        {
             $query = $this->db->conn_id->prepare("INSERT INTO
                                                    public.usu_usuario(
                                                    usu_id,
                                                    usu_per_id_perfil,
                                                    usu_nombre,
                                                    usu_apellido,
                                                    usu_correo,
                                                    usu_contrasena)
                                                  VALUES
                                                    (DEFAULT,
                                                    $usu_per_id_perfil,
                                                    '$usu_nombre',
                                                    '$usu_apellido',    
                                                    '$usu_correo',
                                                    '$usu_contrasena')"); 
            $result =  $query->execute(); 
            //INSERT no es necesario que me retorne el resultado  
            //$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);         
            return $result; 
        }
        else
        {   
            return false;
        }                

             
    }

    public function login_usuario($usu_correo_log,$usu_contrasena_log)
    {  
        $stmt = $this->db->conn_id->prepare("SELECT 
                                              usu_id,
                                              usu_nombre,
                                              usu_apellido,
                                              usu_per_id_perfil
                                            FROM
                                              usu_usuario
                                            WHERE   
                                              usu_correo = '$usu_correo_log'
                                            AND   
                                              usu_contrasena = '$usu_contrasena_log'");  
        /// fetch(PDO::FETCH_OBJ); => Traigo los datos de la DB en un OBJETO 
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_OBJ);          
        return $resultado;

        /// fetchAll(PDO::FETCH_ASSOC); => Traigo los datos de la DB en un arreglo
        /*$stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        return $resultado;*/

    }  

    public function valida_email_sendMail($correo_usuario)
    {
        $stmt = $this->db->conn_id->prepare("SELECT 
                                              public.usu_usuario.usu_nombre,
                                              public.usu_usuario.usu_apellido
                                            FROM
                                              public.usu_usuario
                                              WHERE 
                                              public.usu_usuario.usu_correo = '$correo_usuario'");
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $resultado;
    }

    public function update_password_sendMail($correo_usuario,$pass)
    {
        $stmt = $this->db->conn_id->prepare("UPDATE 
                                              public.usu_usuario
                                            SET
                                              usu_contrasena = '$pass'
                                            WHERE
                                              public.usu_usuario.usu_correo = '$correo_usuario'");

        $resultado = $stmt->execute();
        return $resultado;
    }

    public function muestra_vacantes()
    {
          $stmt = $this->db->conn_id->prepare("SELECT  
                                                    public.public_publicaciones.public_id,
                                                    public.public_publicaciones.public_usu_id,
                                                    public.public_publicaciones.public_fecha_publicacion,
                                                    public.public_publicaciones.public_salario,
                                                    public.public_publicaciones.public_tipovacante,
                                                    public.public_publicaciones.public_descripcion,
                                                    public.public_publicaciones.public_fecha_contratacion,
                                                    public.public_publicaciones.public_cant_vacantes,
                                                    public.public_publicaciones.public_anos_experiencia,
                                                    public.public_publicaciones.public_dispone_viajar,
                                                    public.public_publicaciones.public_cambio_residencia,
                                                    public.dpto_departamento.dpto_nombre,
                                                    public.ciu_ciudad.ciu_nombre,                  
                                                public.nives_nivelestudio.nives_descripcion,
                                                public.cat_categoria.cat_descripcion,
                                                public.public_publicaciones.public_estado_id
                                                FROM
                                                    public.dpto_departamento
                                                INNER JOIN 
                                                    public.public_publicaciones 
                                                ON 
                                                    (public.dpto_departamento.dpto_id = public.public_publicaciones.public_dpto_id) 
                                                INNER JOIN
                                                    public.ciu_ciudad 
                                                ON
                                                    (public.ciu_ciudad.ciu_id = public.public_publicaciones.public_ciu_id) 
                                                INNER JOIN
                                                    public.nives_nivelestudio 
                                                ON  
                                                    (public.nives_nivelestudio.nives_id = public.public_publicaciones.public_nives_id)
                                                INNER JOIN 
                                                    public.cat_categoria
                                                ON 
                                                    (public.public_publicaciones.public_cat_id = public.cat_categoria.cat_id) 
                                                WHERE
                                                public.public_publicaciones.public_estado_id =1
                                                ORDER BY 
                                                    public.public_publicaciones.public_fecha_publicacion 
                                                DESC");

          $stmt->execute();

          $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

          return $resultado;
    }
    public function muestra_vacantes_inactivas()
    {
          $stmt = $this->db->conn_id->prepare("SELECT  
                                                    public.public_publicaciones.public_id,
                                                    public.public_publicaciones.public_usu_id,
                                                    public.public_publicaciones.public_fecha_publicacion,
                                                    public.public_publicaciones.public_salario,
                                                    public.public_publicaciones.public_tipovacante,
                                                    public.public_publicaciones.public_descripcion,
                                                    public.public_publicaciones.public_fecha_contratacion,
                                                    public.public_publicaciones.public_cant_vacantes,
                                                    public.public_publicaciones.public_anos_experiencia,
                                                    public.public_publicaciones.public_dispone_viajar,
                                                    public.public_publicaciones.public_cambio_residencia,
                                                    public.dpto_departamento.dpto_id,
                                                    public.dpto_departamento.dpto_nombre,
                                                    public.ciu_ciudad.ciu_id,
                                                    public.ciu_ciudad.ciu_nombre,
                                                    public.nives_nivelestudio.nives_id,                  
                                                public.nives_nivelestudio.nives_descripcion,
                                                public.cat_categoria.cat_id,
                                                public.cat_categoria.cat_descripcion,
                                                public.public_publicaciones.public_estado_id
                                                FROM
                                                    public.dpto_departamento
                                                INNER JOIN 
                                                    public.public_publicaciones 
                                                ON 
                                                    (public.dpto_departamento.dpto_id = public.public_publicaciones.public_dpto_id) 
                                                INNER JOIN
                                                    public.ciu_ciudad 
                                                ON
                                                    (public.ciu_ciudad.ciu_id = public.public_publicaciones.public_ciu_id) 
                                                INNER JOIN
                                                    public.nives_nivelestudio 
                                                ON  
                                                    (public.nives_nivelestudio.nives_id = public.public_publicaciones.public_nives_id)
                                                INNER JOIN 
                                                    public.cat_categoria
                                                ON 
                                                    (public.public_publicaciones.public_cat_id = public.cat_categoria.cat_id) 
                                                WHERE
                                                public.public_publicaciones.public_estado_id = 2
                                                ORDER BY 
                                                    public.public_publicaciones.public_fecha_publicacion 
                                                DESC");

          $stmt->execute();

          $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

          return $resultado;
    }
}


?>