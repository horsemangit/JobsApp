<?php
	Class Usuario_model extends CI_MODEL
	{
		function __construct()
    {
      parent::__construct();
      $this->db = $this->load->database('default', TRUE); 
	  }

    public function hojadevida_por_usuario($id_usuario)
    {
      $stmt = $this->db->conn_id->prepare("SELECT *
                                            FROM
                                              public.hv_hojadevida
                                            WHERE
                                            public.hv_hojadevida.hv_usu_id = $id_usuario");
      $stmt->execute();
      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $resultado;
    }

    public function registro_hoja_de_vida($hv_td_tipodocumento_id,
                                            $hv_cat_id,
                                            $hv_situactual_id,
                                            $hv_ciu_id,
                                            $hv_usu_id,
                                            $hv_proinfo_id,
                                            $hv_nacional_id,
                                            $hv_niv_idioma_id,
                                            $hv_idioma_id,
                                            $hv_nives_id,
                                            $hv_tipotel_id,
                                            $hv_estacivil_id,
                                            $hv_genero,
                                            $hv_fecha_nacimiento,
                                            $hv_numero_telefono,
                                            $hv_direccion,
                                            $hv_descripcion,
                                            $hv_experiencia_profesional,
                                            $hv_cargo,
                                            $hv_centro_educativo,
                                            $hv_area_estudio,
                                            $hv_conocimiento,
                                            $hv_estado,
                                            $hv_periodo_inicio,
                                            $hv_dispone_cambio_residencia,
                                            $hv_dispone_viajar,
                                            $hv_salario,
                                            $hv_periodo_culminado,
                                            $hv_numero_identificacion,
                                            $hv_pto_puesto_trabajo)
    {
      try{
        $stmt = $this->db->conn_id->prepare("INSERT INTO 
                                                public.hv_hojadevida(
                                                hv_id,
                                                hv_td_tipodocumento_id,
                                                hv_cat_id,
                                                hv_situactual_id,
                                                hv_ciu_id,
                                                hv_usu_id,
                                                hv_proinfo_id,
                                                hv_nacional_id,
                                                hv_niv_idioma_id,
                                                hv_idioma_id,
                                                hv_nives_id,
                                                hv_tipotel_id,
                                                hv_estacivil_id,
                                                hv_genero,
                                                hv_fecha_nacimiento,
                                                hv_numero_telefono,
                                                hv_direccion,
                                                hv_descripcion,
                                                hv_experiencia_profesional,
                                                hv_cargo,
                                                hv_centro_educativo,
                                                hv_area_estudio,
                                                hv_conocimiento,
                                                hv_estado,
                                                hv_periodo_inicio,
                                                hv_dispone_cambio_residencia,
                                                hv_dispone_viajar,
                                                hv_salario,
                                                hv_periodo_culminado,
                                                hv_numero_identificacion,
                                                hv_pto_puesto_trabajo)                                                
                                              VALUES
                                              (DEFAULT,
                                                   $hv_td_tipodocumento_id,
                                                   $hv_cat_id,
                                                   $hv_situactual_id,
                                                   $hv_ciu_id,
                                                   $hv_usu_id,
                                                   $hv_proinfo_id,
                                                   $hv_nacional_id,
                                                   $hv_niv_idioma_id,
                                                   $hv_idioma_id,
                                                   $hv_nives_id,
                                                   $hv_tipotel_id,
                                                   $hv_estacivil_id,
                                                  '$hv_genero',
                                                  '$hv_fecha_nacimiento',
                                                  '$hv_numero_telefono',
                                                  '$hv_direccion',
                                                  '$hv_descripcion',
                                                  '$hv_experiencia_profesional',
                                                  '$hv_cargo',
                                                  '$hv_centro_educativo',
                                                  '$hv_area_estudio',
                                                  '$hv_conocimiento',
                                                  '$hv_estado',
                                                  '$hv_periodo_inicio',
                                                  '$hv_dispone_cambio_residencia',
                                                  '$hv_dispone_viajar',
                                                  '$hv_salario',
                                                  '$hv_periodo_culminado',
                                                  '$hv_numero_identificacion',
                                                  '$hv_pto_puesto_trabajo')");   

           $resultado = $stmt->execute(); 
          //INSERT no es necesario que me retorne el resultado  
          //$resultado= $stmt->fetch(PDO::FETCH_OBJ);        
           return $resultado;
        }

      catch(PDOException $e)
        {
          echo $e->getMessage();
        }
    }

		public function informacion_usuario($id_usuario)
    {
			$stmt = $this->db->conn_id->prepare("SELECT   
                  												  public.usu_usuario.usu_nombre,
                  												  public.usu_usuario.usu_apellido,
                  												  public.usu_usuario.usu_correo,
                  												  public.usu_usuario.usu_contrasena,
                  												  public.hv_hojadevida.hv_id,
                                            public.hv_hojadevida.hv_td_tipodocumento_id,
                  												  public.hv_hojadevida.hv_cat_id,
                  												  public.hv_hojadevida.hv_situactual_id,
                  												  public.ciu_ciudad.ciu_nombre,
                  												  public.hv_hojadevida.hv_usu_id,
                  												  public.hv_hojadevida.hv_proinfo_id,
                  												  public.hv_hojadevida.hv_nacional_id,
                  												  public.hv_hojadevida.hv_niv_idioma_id,
                  												  public.hv_hojadevida.hv_idioma_id,
                  												  public.hv_hojadevida.hv_nives_id,
                  												  public.hv_hojadevida.hv_tipotel_id,
                  												  public.hv_hojadevida.hv_estacivil_id,
                  												  public.hv_hojadevida.hv_genero,
                  												  public.hv_hojadevida.hv_fecha_nacimiento,
                  												  public.hv_hojadevida.hv_numero_telefono,
                  												  public.hv_hojadevida.hv_direccion,
                  												  public.hv_hojadevida.hv_descripcion,
                  												  public.hv_hojadevida.hv_experiencia_profesional,
                  												  public.hv_hojadevida.hv_cargo,
                  												  public.hv_hojadevida.hv_centro_educativo,
                  												  public.hv_hojadevida.hv_area_estudio,
                  												  public.hv_hojadevida.hv_conocimiento,
                  												  public.hv_hojadevida.hv_estado,
                  												  public.hv_hojadevida.hv_periodo_inicio,
                  												  public.hv_hojadevida.hv_dispone_cambio_residencia,
                  												  public.hv_hojadevida.hv_dispone_viajar,
                  												  public.hv_hojadevida.hv_salario,
                  												  public.hv_hojadevida.hv_periodo_culminado,
                  												  public.hv_hojadevida.hv_numero_identificacion,
                  												  public.hv_hojadevida.hv_pto_puesto_trabajo,
                  												  public.dpto_departamento.dpto_nombre as departamento,
                  												  public.pais.pais_nombre as pais,
                                            public.hv_hojadevida.hv_ciu_id,
                                            public.dpto_departamento.dpto_pais_id,
                                            public.ciu_ciudad.ciu_dpto_id
                  												FROM
                  												  public.usu_usuario
                  												INNER JOIN 
                                            public.hv_hojadevida 
                                          ON 
                                            (public.usu_usuario.usu_id = public.hv_hojadevida.hv_usu_id)                  								
                  												INNER JOIN 
                                            public.ciu_ciudad 
                                          ON 
                                            (public.hv_hojadevida.hv_ciu_id = public.ciu_ciudad.ciu_id)
                  												INNER JOIN 
                                            public.dpto_departamento 
                                          ON 
                                            (public.ciu_ciudad.ciu_dpto_id = public.dpto_departamento.dpto_id)
                  												INNER JOIN 
                                            public.pais 
                                          ON 
                                            (public.dpto_departamento.dpto_pais_id = public.pais.pais_id)               												
                  												WHERE
                												  	public.usu_usuario.usu_id = $id_usuario");
			$stmt->execute();
			$resultado = $stmt->fetch(PDO::FETCH_OBJ);
			return $resultado;
		}
    
    public function actualizo_hoja_de_vida($hv_td_tipodocumento_id,
                                            $hv_cat_id,
                                            $hv_situactual_id,
                                            $hv_ciu_id,
                                            $hv_usu_id,
                                            $hv_proinfo_id,
                                            $hv_nacional_id,
                                            $hv_niv_idioma_id,
                                            $hv_idioma_id,
                                            $hv_nives_id,
                                            $hv_tipotel_id,
                                            $hv_estacivil_id,
                                            $hv_genero,
                                            $hv_fecha_nacimiento,
                                            $hv_numero_telefono,
                                            $hv_direccion,
                                            $hv_descripcion,
                                            $hv_experiencia_profesional,
                                            $hv_cargo,
                                            $hv_centro_educativo,
                                            $hv_area_estudio,
                                            $hv_conocimiento,
                                            $hv_estado,
                                            $hv_periodo_inicio,
                                            $hv_dispone_cambio_residencia,
                                            $hv_dispone_viajar,
                                            $hv_salario,
                                            $hv_periodo_culminado,
                                            $hv_numero_identificacion,
                                            $hv_pto_puesto_trabajo,
                                            $hv_id)
    {
      try{
          $stmt = $this->db->conn_id->prepare("UPDATE 
                                                public.hv_hojadevida
                                              SET                                                
                                                hv_td_tipodocumento_id = '$hv_td_tipodocumento_id',
                                                hv_cat_id = '$hv_cat_id',
                                                hv_situactual_id = '$hv_situactual_id',
                                                hv_ciu_id = '$hv_ciu_id',
                                                hv_usu_id = '$hv_usu_id',
                                                hv_proinfo_id = '$hv_proinfo_id',
                                                hv_nacional_id = '$hv_nacional_id',
                                                hv_niv_idioma_id = '$hv_niv_idioma_id',
                                                hv_idioma_id = '$hv_idioma_id',
                                                hv_nives_id = '$hv_nives_id',
                                                hv_tipotel_id = '$hv_tipotel_id',
                                                hv_estacivil_id = '$hv_estacivil_id',
                                                hv_genero = '$hv_genero',
                                                hv_fecha_nacimiento = '$hv_fecha_nacimiento',
                                                hv_numero_telefono =  '$hv_numero_telefono',
                                                hv_direccion = '$hv_direccion',
                                                hv_descripcion = '$hv_descripcion',
                                                hv_experiencia_profesional = '$hv_experiencia_profesional',
                                                hv_cargo = '$hv_cargo',
                                                hv_centro_educativo = '$hv_centro_educativo',
                                                hv_area_estudio = '$hv_area_estudio',
                                                hv_conocimiento = '$hv_conocimiento',
                                                hv_estado = '$hv_estado',
                                                hv_periodo_inicio = '$hv_periodo_inicio',
                                                hv_dispone_cambio_residencia = '$hv_dispone_cambio_residencia',
                                                hv_dispone_viajar = '$hv_dispone_viajar',
                                                hv_salario = '$hv_salario',
                                                hv_periodo_culminado = '$hv_periodo_culminado',
                                                hv_numero_identificacion = '$hv_numero_identificacion',
                                                hv_pto_puesto_trabajo = '$hv_pto_puesto_trabajo'
                                              WHERE
                                                hv_id = '$hv_id'");   
          $resultado = $stmt->execute();      
          return $resultado;
        }

      catch(PDOException $e)
        {
          echo $e->getMessage();
        }
    }

    public function upload_select_hv($id_usuario)
    {
      $sql = $this->db->conn_id->prepare("SELECT
                                            public.hv_formato.hv_formato_usu_id,
                                            public.hv_formato.hv_formato_id,
                                            public.hv_formato.hv_formato_filename,
                                            public.hv_formato.hv_formato_fecha_subido 
                                          FROM
                                            public.hv_formato
                                          WHERE
                                            public.hv_formato.hv_formato_usu_id = $id_usuario");
      $sql->execute();
      $resultado = $sql->fetch(PDO::FETCH_OBJ);
      return $resultado;
    }

    public function downloadfilecandidateid($id_usuario,$downloadfilecandidateid)
    {

      $sql = $this->db->conn_id->prepare("SELECT
                                            public.hv_formato.hv_formato_usu_id,
                                            public.hv_formato.hv_formato_id,
                                            public.hv_formato.hv_formato_filename,
                                            public.hv_formato.hv_formato_fecha_subido 
                                          FROM
                                            public.hv_formato
                                          WHERE
                                            public.hv_formato.hv_formato_usu_id = $id_usuario
                                          AND
                                            public.hv_formato.hv_formato_id = $downloadfilecandidateid");
      $sql->execute();
      $resultado = $sql->fetchAll(PDO::FETCH_OBJ);
      return $resultado;
    }

    public function upload_insert_hv($id_usuario,$filename,$fecha_registro)
    {
      $stmt = $this->db->conn_id->prepare("INSERT INTO 
                                            public.hv_formato
                                            (hv_formato_id,
                                            hv_formato_usu_id,
                                            hv_formato_filename,
                                            hv_formato_fecha_subido)
                                          VALUES
                                            (DEFAULT,
                                            $id_usuario,
                                            '$filename',                                            
                                            '$fecha_registro')");
      $resultado = $stmt->execute();
      return $resultado;
    }

    public function delete_upload($id_usuario)
    {
      $sql = $this->db->conn_id->prepare("DELETE 
                                          FROM
                                            public.hv_formato
                                          WHERE
                                            public.hv_formato.hv_formato_usu_id = $id_usuario");
      $resultado = $sql->execute();
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
                                            (public.public_publicaciones.public_nives_id = public.nives_nivelestudio.nives_id) 
                                          WHERE
                                            public.public_publicaciones.public_estado_id = 1
                                          ORDER BY 
                                            public.public_publicaciones.public_fecha_publicacion 
                                          DESC");
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function guardar_publicacion($tipovacante,
                                        $selecarea,
                                        $fechpublicacion, 
                                        $departamento,
                                        $ciudad,
                                        $salario,
                                        $descripcion,
                                        $fechcontratacion,
                                        $cantivacantes,
                                        $educminima,
                                        $anoexperiencia,
                                        $disponeviajar,
                                        $disponecambioresidencia,
                                        $id_usuario,
                                        $estado_publicacion)
    {
      $stmt = $this->db->conn_id->prepare("INSERT INTO 
                                            public.public_publicaciones(
                                            public_id,
                                            public_dpto_id,
                                            public_fecha_publicacion,
                                            public_salario,
                                            public_descripcion,
                                            public_fecha_contratacion,
                                            public_cant_vacantes,
                                            public_anos_experiencia,
                                            public_dispone_viajar,
                                            public_cambio_residencia,
                                            public_tipovacante,
                                            public_ciu_id,
                                            public_nives_id,
                                            public_cat_id,
                                            public_usu_id,
                                            public_estado_id)
                                          VALUES
                                            ( DEFAULT,
                                              '$departamento',
                                              '$fechpublicacion',
                                              '$salario',
                                              '$descripcion',
                                              '$fechcontratacion',
                                              '$cantivacantes',
                                              '$anoexperiencia',
                                              '$disponeviajar',
                                              '$disponecambioresidencia',                     
                                              '$tipovacante',
                                              '$ciudad',
                                              '$educminima',
                                              '$selecarea',
                                              '$id_usuario',
                                              '$estado_publicacion')");
      $resultado = $stmt->execute();
      return $resultado;
    }    

    public function actualizar_publicacion($tipovacante,
                                            $selecarea,
                                            $fechpublicacion, 
                                            $departamento,
                                            $ciudad,
                                            $salario,
                                            $descripcion,
                                            $fechcontratacion,
                                            $cantivacantes,
                                            $educminima,
                                            $anoexperiencia,
                                            $disponeviajar,
                                            $disponecambioresidencia,
                                            $id_usuario,
                                            $id_publicacion,
                                            $estado_publicacion)  
    {
      $stmt = $this->db->conn_id->prepare("UPDATE 
                                            public.public_publicaciones
                                          SET
                                            public_dpto_id = '$departamento',
                                            public_fecha_publicacion = '$fechpublicacion',
                                            public_salario = '$salario',
                                            public_descripcion = '$descripcion',
                                            public_fecha_contratacion = '$fechcontratacion',
                                            public_cant_vacantes = '$cantivacantes',
                                            public_anos_experiencia = '$anoexperiencia',
                                            public_dispone_viajar = '$disponeviajar',
                                            public_cambio_residencia = '$disponecambioresidencia',
                                            public_tipovacante = '$tipovacante',
                                            public_ciu_id = '$ciudad',
                                            public_nives_id = '$educminima',
                                            public_cat_id = '$selecarea',                 
                                            public_usu_id = '$id_usuario',
                                            public_estado_id = '$estado_publicacion'
                                          WHERE
                                            public_id = '$id_publicacion'");

      $resultado = $stmt->execute();
      return $resultado;                                                           
    }    

    public function eliminar_publicacion($id_publicacion)
    {
      $stmt = $this->db->conn_id->prepare("DELETE 
                                            FROM
                                              public.public_publicaciones
                                            WHERE
                                              public.public_publicaciones.public_id = $id_publicacion");
      $resultado = $stmt->execute();
      return $resultado;
    }

    public function listar_area()
    {
      $stmt = $this->db->conn_id->prepare("SELECT 
                                            public.cat_categoria.cat_id,
                                            public.cat_categoria.cat_descripcion,
                                            COUNT(public.public_publicaciones.public_tipovacante) AS cant
                                          FROM
                                            public.cat_categoria
                                          INNER JOIN 
                                            public.public_publicaciones 
                                          ON 
                                            (public.cat_categoria.cat_id = public.public_publicaciones.public_cat_id) 
                                          INNER JOIN 
                                            (SELECT DISTINCT post_public_id FROM post_postulaciones) postulados
                                          ON 
                                            postulados.post_public_id = public_publicaciones.public_id  
                                          WHERE   
                                            public.public_publicaciones.public_estado_id = 1    
                                          GROUP BY 
                                            public.cat_categoria.cat_id
                                          ORDER BY
                                            public.cat_categoria.cat_descripcion DESC");
      $stmt->execute();
      $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
      return $resultado;
    }

    public function listar_ofertas($id_categoria)
    {
      $stmt = $this->db->conn_id->prepare("SELECT 
                                              public.public_publicaciones.public_id,
                                              public.public_publicaciones.public_cat_id,    
                                              public.public_publicaciones.public_tipovacante,   
                                              COUNT(public.post_postulaciones.post_public_id) AS cant
                                            FROM                                               
                                              public.public_publicaciones 
                                            INNER JOIN post_postulaciones 
                                            ON post_postulaciones.post_public_id = public_publicaciones.public_id                                              
                                            WHERE 
                                              public.public_publicaciones.public_cat_id = $id_categoria
                                              AND
                                              public.public_publicaciones.public_estado_id = 1
                                            GROUP BY 
                                              public.public_publicaciones.public_id,
                                              public.public_publicaciones.public_cat_id,public.public_publicaciones.public_tipovacante
                                            ORDER BY public.public_publicaciones.public_tipovacante DESC");
      $stmt->execute();
      $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
      return $resultado;
    }

    public function listar_hojasdevida($public_id)
    {
      $stmt = $this->db->conn_id->prepare("SELECT 
                                              hv_id,
                                              hv_td_tipodocumento_id,
                                              public.cat_categoria.cat_descripcion,
                                              hv_cat_id,
                                              hv_situactual_id,
                                              hv_ciu_id,
                                              public.ciu_ciudad.ciu_nombre,
                                              hv_usu_id,
                                              hv_proinfo_id,
                                              hv_nacional_id,
                                              hv_niv_idioma_id,
                                              hv_idioma_id,
                                              public.nives_nivelestudio.nives_descripcion,
                                              hv_nives_id,
                                              hv_tipotel_id,
                                              hv_estacivil_id,
                                              hv_genero,
                                              hv_fecha_nacimiento,
                                              hv_numero_telefono,
                                              hv_direccion,
                                              hv_descripcion,
                                              hv_experiencia_profesional,
                                              hv_cargo,
                                              hv_centro_educativo,
                                              hv_area_estudio,
                                              hv_conocimiento,
                                              hv_estado,
                                              hv_periodo_inicio,
                                              hv_dispone_cambio_residencia,
                                              hv_dispone_viajar,
                                              hv_salario,
                                              hv_periodo_culminado,
                                              hv_numero_identificacion,
                                              hv_pto_puesto_trabajo, 
                                              post_postulaciones.post_proceso_seleccion,
                                              usu_usuario.usu_nombre,
                                              usu_usuario.usu_apellido,
                                              public.post_postulaciones.post_id                      
                                            FROM 
                                              public.hv_hojadevida 
                                            INNER JOIN 
                                              public.post_postulaciones
                                            ON 
                                              hv_hojadevida.hv_usu_id = post_postulaciones.post_usu_id
                                            INNER JOIN
                                              public.usu_usuario
                                            ON 
                                              hv_hojadevida.hv_usu_id = usu_usuario.usu_id
                                            INNER JOIN 
                                              public.ciu_ciudad 
                                            ON 
                                              public.hv_hojadevida.hv_ciu_id = public.ciu_ciudad.ciu_id
                                            INNER JOIN 
                                              public.nives_nivelestudio
                                            ON 
                                              public.hv_hojadevida.hv_nives_id = public.nives_nivelestudio.nives_id
                                            INNER JOIN 
                                              public.cat_categoria 
                                            ON 
                                              (public.hv_hojadevida.hv_cat_id = public.cat_categoria.cat_id)
                                            WHERE
                                              post_postulaciones.post_public_id = $public_id");
      $stmt->execute();
      $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
      return $resultado;
    }

    public function hoja_de_vida_postulados_por_id($post_id)
    {
      $stmt = $this->db->conn_id->prepare("SELECT   
                                            public.usu_usuario.usu_nombre,
                                            public.usu_usuario.usu_apellido,
                                            public.usu_usuario.usu_correo,
                                            public.hv_hojadevida.hv_id,
                                            public.hv_hojadevida.hv_td_tipodocumento_id,
                                            public.hv_hojadevida.hv_cat_id,
                                            public.hv_hojadevida.hv_situactual_id,
                                            public.ciu_ciudad.ciu_nombre,
                                            public.hv_hojadevida.hv_usu_id,
                                            public.hv_hojadevida.hv_proinfo_id,
                                            public.hv_hojadevida.hv_nacional_id,
                                            public.hv_hojadevida.hv_niv_idioma_id,
                                            public.hv_hojadevida.hv_idioma_id,
                                            public.hv_hojadevida.hv_nives_id,
                                            public.hv_hojadevida.hv_tipotel_id,
                                            public.hv_hojadevida.hv_estacivil_id,
                                            public.hv_hojadevida.hv_genero,
                                            public.hv_hojadevida.hv_fecha_nacimiento,
                                            public.hv_hojadevida.hv_numero_telefono,
                                            public.hv_hojadevida.hv_direccion,
                                            public.hv_hojadevida.hv_descripcion,
                                            public.hv_hojadevida.hv_experiencia_profesional,
                                            public.hv_hojadevida.hv_cargo,
                                            public.hv_hojadevida.hv_centro_educativo,
                                            public.hv_hojadevida.hv_area_estudio,
                                            public.hv_hojadevida.hv_conocimiento,
                                            public.hv_hojadevida.hv_estado,
                                            public.hv_hojadevida.hv_periodo_inicio,
                                            public.hv_hojadevida.hv_dispone_cambio_residencia,
                                            public.hv_hojadevida.hv_dispone_viajar,
                                            public.hv_hojadevida.hv_salario,
                                            public.hv_hojadevida.hv_periodo_culminado,
                                            public.hv_hojadevida.hv_numero_identificacion,
                                            public.hv_hojadevida.hv_pto_puesto_trabajo,
                                            public.dpto_departamento.dpto_nombre as departamento,
                                            public.pais.pais_nombre as pais,
                                            public.hv_hojadevida.hv_ciu_id,
                                            public.dpto_departamento.dpto_pais_id,
                                            public.ciu_ciudad.ciu_dpto_id,
                                            public.estacivil_estadocivil.estacivil_descripcion,
                                            public.cat_categoria.cat_descripcion,
                                            public.nives_nivelestudio.nives_descripcion,
                                            public.idioma_tipoidioma.idioma_descripcion,
                                            public.niv_nivel_idioma.niv_idioma_descripcion,
                                            public.nacional_nacionalidad.nacional_descripcion,
                                            public.situactual_situacionactual.situactual_descripcion,
                                            public.td_tipodocumento.td_tipodocumento,
                                            public.proinfo_programasinformaticos.proinfo_descripcion,
                                            public.post_postulaciones.post_id,
                                            public.post_postulaciones.post_proceso_seleccion,
                                            public.public_publicaciones.public_tipovacante
                                          FROM
                                            public.usu_usuario
                                          INNER JOIN 
                                            public.hv_hojadevida 
                                          ON 
                                            (public.usu_usuario.usu_id = public.hv_hojadevida.hv_usu_id)                                  
                                          INNER JOIN 
                                            public.ciu_ciudad 
                                          ON 
                                            (public.hv_hojadevida.hv_ciu_id = public.ciu_ciudad.ciu_id)
                                          INNER JOIN 
                                            public.dpto_departamento 
                                          ON 
                                            (public.ciu_ciudad.ciu_dpto_id = public.dpto_departamento.dpto_id)
                                          INNER JOIN 
                                            public.pais 
                                          ON 
                                            (public.dpto_departamento.dpto_pais_id = public.pais.pais_id)                                      
                                          INNER JOIN 
                                            public.cat_categoria 
                                          ON 
                                            (public.hv_hojadevida.hv_cat_id = public.cat_categoria.cat_id)
                                          INNER JOIN 
                                            public.nives_nivelestudio 
                                          ON 
                                            (public.hv_hojadevida.hv_nives_id = public.nives_nivelestudio.nives_id)
                                          INNER JOIN 
                                            public.niv_nivel_idioma
                                           ON
                                             (public.hv_hojadevida.hv_niv_idioma_id = public.niv_nivel_idioma.niv_idioma_id)
                                          INNER JOIN 
                                            public.nacional_nacionalidad 
                                          ON 
                                            (public.hv_hojadevida.hv_nacional_id = public.nacional_nacionalidad.nacional_id)
                                          INNER JOIN 
                                            public.idioma_tipoidioma 
                                          ON 
                                            (public.hv_hojadevida.hv_idioma_id = public.idioma_tipoidioma.idioma_id)
                                          INNER JOIN 
                                            public.estacivil_estadocivil
                                          ON 
                                            (public.hv_hojadevida.hv_estacivil_id = estacivil_estadocivil.estacivil_id)
                                          INNER JOIN 
                                            public.situactual_situacionactual 
                                          ON 
                                            (public.hv_hojadevida.hv_situactual_id = public.situactual_situacionactual.situactual_id)
                                          INNER JOIN 
                                            public.td_tipodocumento 
                                          ON 
                                            (public.hv_hojadevida.hv_td_tipodocumento_id = public.td_tipodocumento.td_tipodocumento_id)
                                          INNER JOIN 
                                            public.tipotel_tipotelefono ON (public.hv_hojadevida.hv_tipotel_id = public.tipotel_tipotelefono.tipotel_id)
                                          INNER JOIN 
                                            public.proinfo_programasinformaticos 
                                          ON 
                                            (public.hv_hojadevida.hv_proinfo_id = public.proinfo_programasinformaticos.proinfo_id)
                                          INNER JOIN 
                                            public.post_postulaciones 
                                          ON 
                                            (public.usu_usuario.usu_id = public.post_postulaciones.post_usu_id)
                                          INNER JOIN 
                                            public.public_publicaciones 
                                          ON 
                                            (public.post_postulaciones.post_public_id = public.public_publicaciones.public_id)
                                          WHERE
                                            public.post_postulaciones.post_id = $post_id");
      $stmt->execute();
      $resultado = $stmt->fetch(PDO::FETCH_OBJ);
      return $resultado;
    }

    public function actualiza_proceso_por_usuario($proceso,$post_id)
    {
      $stmt = $this->db->conn_id->prepare("UPDATE 
                                              public.post_postulaciones
                                            SET
                                              post_proceso_seleccion = '$proceso'
                                            WHERE
                                              post_id = $post_id");
      $resultado = $stmt->execute();
      return $resultado;  
    }

    public function listar_hojasdevida_por_categoria()
    {
     $stmt = $this->db->conn_id->prepare("SELECT 
                                            public.hv_hojadevida.hv_cat_id,
                                            public.cat_categoria.cat_descripcion,
                                            COUNT(public.hv_hojadevida.*) AS cant
                                          FROM
                                            public.hv_hojadevida
                                          INNER JOIN 
                                            public.cat_categoria 
                                          ON (public.hv_hojadevida.hv_cat_id = public.cat_categoria.cat_id)
                                          GROUP BY 
                                            public.hv_hojadevida.hv_cat_id,
                                            public.cat_categoria.cat_descripcion
                                          ORDER BY 
                                            public.cat_categoria.cat_descripcion DESC");
      $stmt->execute();
      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $resultado;  
    }

    public function listar_hojasdevida_count_postulaciones($id_categoria)
    {
      $stmt = $this->db->conn_id->prepare("SELECT
                                            public.hv_hojadevida.hv_id,
                                            public.usu_usuario.usu_nombre,
                                            public.usu_usuario.usu_apellido,
                                            public.hv_hojadevida.hv_numero_telefono,
                                            public.ciu_ciudad.ciu_nombre,
                                            public.dpto_departamento.dpto_nombre,
                                            public.nives_nivelestudio.nives_descripcion,
                                           COUNT(public.post_postulaciones.post_id) AS cant_postulaciones,
                                            public.hv_hojadevida.hv_usu_id
                                          FROM
                                            public.hv_hojadevida
                                          INNER JOIN 
                                            public.usu_usuario 
                                          ON 
                                            (public.hv_hojadevida.hv_usu_id = public.usu_usuario.usu_id)
                                          FULL OUTER JOIN
                                            public.post_postulaciones 
                                          ON 
                                            (public.usu_usuario.usu_id = public.post_postulaciones.post_usu_id)
                                          INNER JOIN 
                                            public.cat_categoria 
                                          ON 
                                            (public.hv_hojadevida.hv_cat_id = public.cat_categoria.cat_id)
                                          INNER JOIN 
                                            public.ciu_ciudad 
                                          ON 
                                            (public.hv_hojadevida.hv_ciu_id = public.ciu_ciudad.ciu_id)
                                          INNER JOIN 
                                            public.dpto_departamento 
                                          ON 
                                            (public.ciu_ciudad.ciu_dpto_id = public.dpto_departamento.dpto_id)
                                          INNER JOIN 
                                            public.nives_nivelestudio 
                                          ON 
                                            (public.hv_hojadevida.hv_nives_id = public.nives_nivelestudio.nives_id)
                                          WHERE
                                            public.cat_categoria.cat_id = $id_categoria
                                          GROUP BY 
                                            public.usu_usuario.usu_nombre,
                                            public.usu_usuario.usu_apellido,
                                            public.hv_hojadevida.hv_numero_telefono,
                                            public.ciu_ciudad.ciu_nombre,
                                            public.dpto_departamento.dpto_nombre,
                                            public.nives_nivelestudio.nives_descripcion,
                                            public.hv_hojadevida.hv_id,
                                            public.hv_hojadevida.hv_usu_id,  
                                            public.cat_categoria.cat_descripcion
                                          ORDER BY 
                                            public.nives_nivelestudio.nives_descripcion ASC");
      $stmt->execute();
      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $resultado;   
    }

    public function historial_postulaciones_por_usuario($id_usuario)
    {
      $stmt = $this->db->conn_id->prepare("SELECT 
                                            public.usu_usuario.usu_nombre,
                                            public.usu_usuario.usu_apellido,
                                            public.public_publicaciones.public_fecha_publicacion,
                                            public.public_publicaciones.public_tipovacante,
                                            public.estado_publicacion.estado_id,
                                            public.post_postulaciones.post_fecha_postulacion,
                                            public.post_postulaciones.post_proceso_seleccion
                                          FROM
                                            public.public_publicaciones
                                          INNER JOIN 
                                            public.post_postulaciones 
                                          ON 
                                            (public.public_publicaciones.public_id = public.post_postulaciones.post_public_id)
                                          INNER JOIN 
                                            public.usu_usuario 
                                          ON 
                                            (public.post_postulaciones.post_usu_id = public.usu_usuario.usu_id)
                                          INNER JOIN 
                                            public.estado_publicacion 
                                          ON 
                                            (public.public_publicaciones.public_estado_id = public.estado_publicacion.estado_id)
                                          WHERE 
                                            public.usu_usuario.usu_id = $id_usuario
                                          ORDER BY
                                            public.post_postulaciones.post_fecha_postulacion ASC");                                            
      $stmt->execute();
      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $resultado;   
    }

    public function CV($hv_id)
    {
      $stmt = $this->db->conn_id->prepare("SELECT   
                                            public.usu_usuario.usu_nombre,
                                            public.usu_usuario.usu_apellido,
                                            public.usu_usuario.usu_correo,
                                            public.hv_hojadevida.hv_id,
                                            public.hv_hojadevida.hv_td_tipodocumento_id,
                                            public.hv_hojadevida.hv_cat_id,
                                            public.hv_hojadevida.hv_situactual_id,
                                            public.ciu_ciudad.ciu_nombre,
                                            public.hv_hojadevida.hv_usu_id,
                                            public.hv_hojadevida.hv_proinfo_id,
                                            public.hv_hojadevida.hv_nacional_id,
                                            public.hv_hojadevida.hv_niv_idioma_id,
                                            public.hv_hojadevida.hv_idioma_id,
                                            public.hv_hojadevida.hv_nives_id,
                                            public.hv_hojadevida.hv_tipotel_id,
                                            public.hv_hojadevida.hv_estacivil_id,
                                            public.hv_hojadevida.hv_genero,
                                            public.hv_hojadevida.hv_fecha_nacimiento,
                                            public.hv_hojadevida.hv_numero_telefono,
                                            public.hv_hojadevida.hv_direccion,
                                            public.hv_hojadevida.hv_descripcion,
                                            public.hv_hojadevida.hv_experiencia_profesional,
                                            public.hv_hojadevida.hv_cargo,
                                            public.hv_hojadevida.hv_centro_educativo,
                                            public.hv_hojadevida.hv_area_estudio,
                                            public.hv_hojadevida.hv_conocimiento,
                                            public.hv_hojadevida.hv_estado,
                                            public.hv_hojadevida.hv_periodo_inicio,
                                            public.hv_hojadevida.hv_dispone_cambio_residencia,
                                            public.hv_hojadevida.hv_dispone_viajar,
                                            public.hv_hojadevida.hv_salario,
                                            public.hv_hojadevida.hv_periodo_culminado,
                                            public.hv_hojadevida.hv_numero_identificacion,
                                            public.hv_hojadevida.hv_pto_puesto_trabajo,
                                            public.dpto_departamento.dpto_nombre as departamento,
                                            public.pais.pais_nombre as pais,
                                            public.hv_hojadevida.hv_ciu_id,
                                            public.dpto_departamento.dpto_pais_id,
                                            public.ciu_ciudad.ciu_dpto_id,
                                            public.estacivil_estadocivil.estacivil_descripcion,
                                            public.cat_categoria.cat_descripcion,
                                            public.nives_nivelestudio.nives_descripcion,
                                            public.idioma_tipoidioma.idioma_descripcion,
                                            public.niv_nivel_idioma.niv_idioma_descripcion,
                                            public.nacional_nacionalidad.nacional_descripcion,
                                            public.situactual_situacionactual.situactual_descripcion,
                                            public.td_tipodocumento.td_tipodocumento,
                                            public.proinfo_programasinformaticos.proinfo_descripcion 
                                          FROM
                                            public.usu_usuario
                                          INNER JOIN 
                                            public.hv_hojadevida 
                                          ON 
                                            (public.usu_usuario.usu_id = public.hv_hojadevida.hv_usu_id)                                  
                                          INNER JOIN 
                                            public.ciu_ciudad 
                                          ON 
                                            (public.hv_hojadevida.hv_ciu_id = public.ciu_ciudad.ciu_id)
                                          INNER JOIN 
                                            public.dpto_departamento 
                                          ON 
                                            (public.ciu_ciudad.ciu_dpto_id = public.dpto_departamento.dpto_id)
                                          INNER JOIN 
                                            public.pais 
                                          ON 
                                            (public.dpto_departamento.dpto_pais_id = public.pais.pais_id)                                      
                                          INNER JOIN 
                                            public.estacivil_estadocivil 
                                          ON 
                                            (public.hv_hojadevida.hv_estacivil_id = public.estacivil_estadocivil.estacivil_id)
                                          INNER JOIN 
                                            public.cat_categoria 
                                          ON 
                                            (public.hv_hojadevida.hv_cat_id = public.cat_categoria.cat_id)
                                          INNER JOIN 
                                            public.nives_nivelestudio 
                                          ON 
                                            (public.hv_hojadevida.hv_nives_id = public.nives_nivelestudio.nives_id)
                                          INNER JOIN 
                                            public.niv_nivel_idioma
                                           ON
                                             (public.hv_hojadevida.hv_niv_idioma_id = public.niv_nivel_idioma.niv_idioma_id)
                                          INNER JOIN 
                                            public.nacional_nacionalidad 
                                          ON 
                                            (public.hv_hojadevida.hv_nacional_id = public.nacional_nacionalidad.nacional_id)
                                          INNER JOIN 
                                            public.idioma_tipoidioma 
                                          ON 
                                            (public.hv_hojadevida.hv_idioma_id = public.idioma_tipoidioma.idioma_id)                                      
                                          INNER JOIN 
                                            public.situactual_situacionactual 
                                          ON 
                                            (public.hv_hojadevida.hv_situactual_id = public.situactual_situacionactual.situactual_id)
                                          INNER JOIN 
                                            public.td_tipodocumento 
                                          ON 
                                            (public.hv_hojadevida.hv_td_tipodocumento_id = public.td_tipodocumento.td_tipodocumento_id)
                                          INNER JOIN 
                                            public.tipotel_tipotelefono ON (public.hv_hojadevida.hv_tipotel_id = public.tipotel_tipotelefono.tipotel_id)
                                          INNER JOIN 
                                            public.proinfo_programasinformaticos 
                                          ON 
                                            (public.hv_hojadevida.hv_proinfo_id = public.proinfo_programasinformaticos.proinfo_id)
                                          WHERE
                                            public.hv_hojadevida.hv_id = $hv_id");
      $stmt->execute();
      $resultado = $stmt->fetch(PDO::FETCH_OBJ);
      return $resultado;
    }

    public function mis_postulaciones_usuario($id_usuario)
    {
      $stmt = $this->db->conn_id->prepare("SELECT 
                                            public.public_publicaciones.public_tipovacante,
                                            public.post_postulaciones.post_fecha_postulacion,
                                            public.dpto_departamento.dpto_nombre,
                                            public.ciu_ciudad.ciu_nombre,
                                            public.post_postulaciones.post_proceso_seleccion
                                          FROM
                                            public.public_publicaciones
                                          INNER JOIN 
                                            public.post_postulaciones 
                                          ON 
                                            (public.public_publicaciones.public_id = public.post_postulaciones.post_public_id)
                                          INNER JOIN 
                                            public.usu_usuario 
                                          ON 
                                            (public.public_publicaciones.public_usu_id = public.usu_usuario.usu_id)
                                          INNER JOIN 
                                            public.ciu_ciudad 
                                          ON 
                                            (public.public_publicaciones.public_ciu_id = public.ciu_ciudad.ciu_id)
                                          INNER JOIN 
                                            public.dpto_departamento 
                                          ON 
                                            (public.ciu_ciudad.ciu_dpto_id = public.dpto_departamento.dpto_id)
                                          WHERE
                                            public.post_postulaciones.post_usu_id = $id_usuario");
      $stmt->execute();
      $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
      return $resultado;
    }

    public function postulados_por_id($id_publicacion,$id_usuario)
    {
      $stmt = $this->db->conn_id->prepare("SELECT
                                              post_usu_id,
                                              post_public_id
                                            FROM 
                                            post_postulaciones
                                            WHERE
                                            post_usu_id = $id_usuario
                                            AND
                                            post_public_id = $id_publicacion");
      $stmt->execute();
      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $resultado;
    }

    public function postulados($id_publicacion,$id_usuario,$proceso_seleccion)
    {
      $stmt = $this->db->conn_id->prepare("INSERT INTO 
                                              public.post_postulaciones(
                                              post_id,
                                              post_public_id,
                                              post_usu_id,
                                              post_proceso_seleccion)
                                            VALUES
                                              (DEFAULT,
                                              $id_publicacion,
                                              $id_usuario,
                                              '$proceso_seleccion')");
      $resultado = $stmt->execute();
      return $resultado;
    }

    public function actualiza_contrasena($contrasena,$id_usuario)
    {
      $stmt = $this->db->conn_id->prepare("UPDATE 
                                            usu_usuario
                                          SET                                              
                                            usu_contrasena = '$contrasena'
                                          WHERE
                                            usu_id = $id_usuario");
      $resultado = $stmt->execute();
      return $resultado;
    }

    public function listar_administradores()
    {
      $stmt = $this->db->conn_id->prepare("SELECT 
                                            public.usu_usuario.usu_id,
                                            public.usu_usuario.usu_per_id_perfil,
                                            public.usu_usuario.usu_nombre,
                                            public.usu_usuario.usu_apellido,
                                            public.usu_usuario.usu_correo
                                          FROM
                                            public.usu_usuario
                                          WHERE 
                                            public.usu_usuario.usu_per_id_perfil = 1");
      $stmt->execute();
      $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
      return $resultado;
    }

    public function listar_administradores_por_correo($email)
    {
      $stmt = $this->db->conn_id->prepare("SELECT 
                                              public.usu_usuario.usu_id,
                                              public.usu_usuario.usu_nombre,
                                              public.usu_usuario.usu_apellido               
                                            FROM
                                              public.usu_usuario
                                            WHERE 
                                              public.usu_usuario.usu_correo = '$email'");
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    public function data_updateadmin($id_admin,
                                      $nombre,
                                      $apellido,
                                      $email)
    {
      $stmt = $this->db->conn_id->prepare("UPDATE 
                                              public.usu_usuario
                                            SET
                                              usu_nombre = '$nombre',
                                              usu_apellido = '$apellido',
                                              usu_correo = '$email'
                                            WHERE
                                              usu_id =".$id_admin);
      $resultado = $stmt->execute();
      return $resultado;
    }

    public function data_deleteadmin($id_admin)
    {
      $stmt = $this->db->conn_id->prepare("DELETE 
                                            FROM
                                              usu_usuario
                                            WHERE
                                              usu_id =".$id_admin);
      $resultado = $stmt->execute();
      return $resultado;
    }

  }