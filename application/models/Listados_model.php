<?php

class Listados_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE); 
    }
    
    public function listar_tipodocumento(){
            $stmt = $this->db->conn_id->prepare("SELECT 
                                                  td_tipodocumento_id,
                                                  td_tipodocumento
                                                FROM
                                                  td_tipodocumento
                                                ORDER BY
                                                  td_tipodocumento
                                                DESC");   

            $stmt->execute();  
           //Cuando Se Trate De Un SELECT necesito de un fetchAll(PDO::FETCH_ASSOC); Para Que Me Retorne El Arreglo O Los Datos. 
           $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
      return $resultado;
    }

    public function listar_estadocivil(){
            $stmt = $this->db->conn_id->prepare("SELECT 
                                                  estacivil_id,
                                                  estacivil_descripcion
                                                FROM
                                                  estacivil_estadocivil
                                                ORDER BY
                                                  estacivil_descripcion
                                                DESC");   

            $stmt->execute();  
           //Cuando Se Trate De Un SELECT necesito de un etchAll(PDO::FETCH_ASSOC); Para Que Me Retorne El Arreglo O Los Datos. 
           $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
      return $resultado;
    }

    public function listar_telefono(){
            $stmt = $this->db->conn_id->prepare("SELECT                                           
                                                  tipotel_id,
                                                  tipotel_descripcion
                                                FROM
                                                  tipotel_tipotelefono
                                                ORDER BY
                                                  tipotel_descripcion
                                                DESC");   

            $stmt->execute();  
           //Cuando Se Trate De Un SELECT necesito de un etchAll(PDO::FETCH_ASSOC); Para Que Me Retorne El Arreglo O Los Datos. 
           $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
      return $resultado;
    }

    public function listar_pais(){
            $stmt = $this->db->conn_id->prepare("SELECT 
                                                  pais_id,
                                                  pais_nombre
                                                FROM
                                                  pais");   

            $stmt->execute();  
           //Cuando Se Trate De Un SELECT necesito de un etchAll(PDO::FETCH_ASSOC); Para Que Me Retorne El Arreglo O Los Datos. 
           $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
      return $resultado;
    }

   public function listar_dpto($dpto){     
            $stmt = $this->db->conn_id->prepare("SELECT 
                                                  dpto_id,
                                                  dpto_pais_id,
                                                  dpto_nombre
                                                FROM
                                                  dpto_departamento
                                                WHERE 
                                                  dpto_pais_id = $dpto
                                                ORDER BY 
                                                  dpto_nombre
                                                DESC");   

            $stmt->execute();  
           //Cuando Se Trate De Un SELECT necesito de un etchAll(PDO::FETCH_ASSOC); Para Que Me Retorne El Arreglo O Los Datos. 
           $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
      return $resultado;
    }

    public function listar_ciudad($ciudad){
            $stmt = $this->db->conn_id->prepare("SELECT 
                                                    ciu_id,
                                                    ciu_dpto_id,
                                                    ciu_nombre
                                                  FROM
                                                    ciu_ciudad                                    
                                                  WHERE
                                                    ciu_dpto_id = $ciudad
                                                  ORDER BY
                                                    ciu_nombre
                                                  DESC");   

            $stmt->execute();  
           //Cuando Se Trate De Un SELECT necesito de un etchAll(PDO::FETCH_ASSOC); Para Que Me Retorne El Arreglo O Los Datos. 
           $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
      return $resultado;
    }

    public function listar_nacionalidad(){
            $stmt = $this->db->conn_id->prepare("SELECT 
                                                  nacional_id,
                                                  nacional_descripcion
                                                FROM
                                                  nacional_nacionalidad
                                                ORDER BY
                                                  nacional_descripcion
                                                DESC");   

            $stmt->execute();  
           //Cuando Se Trate De Un SELECT necesito de un etchAll(PDO::FETCH_ASSOC); Para Que Me Retorne El Arreglo O Los Datos. 
           $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
      return $resultado;
    }

    public function listar_nivelestudio(){
            $stmt = $this->db->conn_id->prepare("SELECT 
                                                  nives_id,
                                                  nives_descripcion
                                                FROM
                                                  nives_nivelestudio
                                                ORDER BY
                                                  nives_descripcion
                                                DESC");   

            $stmt->execute();  
           //Cuando Se Trate De Un SELECT necesito de un etchAll(PDO::FETCH_ASSOC); Para Que Me Retorne El Arreglo O Los Datos. 
           $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
      return $resultado;
    }

    public function listar_tipoidioma(){
            $stmt = $this->db->conn_id->prepare("SELECT 
                                                  idioma_id,
                                                  idioma_descripcion
                                                FROM
                                                  idioma_tipoidioma
                                                ORDER BY
                                                  idioma_descripcion
                                                DESC");   

            $stmt->execute();  
           //Cuando Se Trate De Un SELECT necesito de un etchAll(PDO::FETCH_ASSOC); Para Que Me Retorne El Arreglo O Los Datos. 
           $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
      return $resultado;
    }

    public function listar_nivelidioma(){
            $stmt = $this->db->conn_id->prepare("SELECT 
                                                  niv_idioma_id,
                                                  niv_idioma_descripcion
                                                FROM
                                                  niv_nivel_idioma
                                                ORDER BY
                                                  niv_idioma_descripcion
                                                DESC");   

            $stmt->execute();  
           //Cuando Se Trate De Un SELECT necesito de un etchAll(PDO::FETCH_ASSOC); Para Que Me Retorne El Arreglo O Los Datos. 
           $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
      return $resultado;
    }

    public function listar_proinfo(){
            $stmt = $this->db->conn_id->prepare("SELECT 
                                                  proinfo_id,
                                                  proinfo_descripcion
                                                FROM
                                                  proinfo_programasinformaticos
                                                ORDER BY
                                                  proinfo_descripcion
                                                DESC");   

            $stmt->execute();  
           //Cuando Se Trate De Un SELECT necesito de un etchAll(PDO::FETCH_ASSOC); Para Que Me Retorne El Arreglo O Los Datos. 
           $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
      return $resultado;
    }

    public function listar_situactual(){
            $stmt = $this->db->conn_id->prepare("SELECT 
                                                  situactual_id,
                                                  situactual_descripcion
                                                FROM
                                                  situactual_situacionactual
                                                ORDER BY
                                                  situactual_descripcion
                                                DESC");   

            $stmt->execute();  
           //Cuando Se Trate De Un SELECT necesito de un etchAll(PDO::FETCH_ASSOC); Para Que Me Retorne El Arreglo O Los Datos. 
           $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
      return $resultado;
    }

    public function listar_area(){
            $stmt = $this->db->conn_id->prepare("SELECT 
                                                  cat_id,
                                                  cat_descripcion
                                                FROM
                                                  cat_categoria
                                                ORDER BY
                                                  cat_descripcion
                                                DESC");   

            $stmt->execute();  
           //Cuando Se Trate De Un SELECT necesito de un etchAll(PDO::FETCH_ASSOC); Para Que Me Retorne El Arreglo O Los Datos. 
           $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
      return $resultado;
    }   

    public function listar_departamento(){     
            $stmt = $this->db->conn_id->prepare("SELECT 
                                                  dpto_id,
                                                  dpto_pais_id,
                                                  dpto_nombre
                                                FROM
                                                  dpto_departamento
                                                ORDER BY 
                                                  dpto_nombre
                                                DESC");   

            $stmt->execute();  
           //Cuando Se Trate De Un SELECT necesito de un etchAll(PDO::FETCH_ASSOC); Para Que Me Retorne El Arreglo O Los Datos. 
           $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
      return $resultado;
    }

    public function listar_educacion_minima(){
            $stmt = $this->db->conn_id->prepare("SELECT 
                                                  nives_id,
                                                  nives_descripcion
                                                FROM
                                                  nives_nivelestudio
                                                ORDER BY
                                                  nives_descripcion
                                                DESC");   

            $stmt->execute();  
           //Cuando Se Trate De Un SELECT necesito de un etchAll(PDO::FETCH_ASSOC); Para Que Me Retorne El Arreglo O Los Datos. 
           $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
      return $resultado;
    } 

    public function listar_estado_publicacion()
    {
      $sql = $this->db->conn_id->prepare("SELECT 
                                            public.estado_publicacion.estado_id,
                                            public.estado_publicacion.estado_descripcion
                                          FROM
                                            public.estado_publicacion
                                          ORDER BY
                                            public.estado_publicacion.estado_descripcion DESC");
      $sql->execute();
      $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
      return $resultado;
    }

}

?>