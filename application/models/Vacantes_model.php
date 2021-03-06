<?php 

class Vacantes_model extends CI_MODEL
{
    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE); 
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
													public.public_publicaciones 		
												INNER JOIN 
													public.dpto_departamento			
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
												public.public_publicaciones.public_estado_id = 1
												ORDER BY 
													public.public_publicaciones.public_fecha_publicacion 
												DESC
												");

    	  $stmt->execute();

    	  $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    	  return $resultado;
    }

    public function detalle_vacante_por_id($id_publicacion){

    	$stmt = $this->db->conn_id->prepare("SELECT    	  									
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
												public.dpto_departamento.dpto_id,
												public.ciu_ciudad.ciu_id,
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
													public.public_publicaciones.public_id = $id_publicacion");


    	  $stmt->execute();

    	  $resultado = $stmt->fetch(PDO::FETCH_OBJ);

    	  return $resultado;

	    }
}