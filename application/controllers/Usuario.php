<?php
	
	Class Usuario extends CI_CONTROLLER
	{	
    public function __construct()
    {
  		parent::__construct();
  		$this->load->helper(array('url'));
  		$this->load->model('Usuario_model');
      $this->load->model('Listados_model');
      $this->load->model('Home_model');
  	}
  	
    /* HomePage */
    public function index()
		{	
		  if($this->session->userdata('login'))
			{
        if($this->session->userdata('perfil') == 1)
        {
          $this->load->view('Usuario/home');
        }
        else
        {
          $id_usuario = $this->session->userdata('usu_id');
          $response = $this->Usuario_model->hojadevida_por_usuario($id_usuario);
            if(empty($response))
            {
              redirect(site_url('Usuario/registro_informacion'));
            }
            else
            {
              $this->load->view('Usuario/home');  
            }
        }				
			}
      else
      {
        redirect(site_url());
      }		
		}

    /* Validation View Page HdV */
    public function registro_informacion()
    { 
      if($this->session->userdata('login'))
      {           
        $id_usuario = $this->session->userdata('usu_id');
        //Consultar si el usuario tiene una hoja de vida
        $response = $this->Usuario_model->hojadevida_por_usuario($id_usuario);
        
        if($response)
        {
          redirect(site_url('Usuario/CV/informacion_usuario'));            
        }
        else
        {
          $this->load->view('Usuario/CV/hoja_de_vida');
        }
      }
      else
      {
        redirect(site_url());
      }    
    }

    /* Insert Data HdV */
    public function registro_hoja_de_vida()
    {
      $hv_td_tipodocumento_id =  $this->input->post('tipodocumento');
      $hv_cat_id = $this->input->post('selecarea');
      $hv_situactual_id = $this->input->post('situacionactual');
      $hv_ciu_id = $this->input->post('ciudad');
      $hv_usu_id = $this->session->userdata('usu_id');
      $hv_proinfo_id = $this->input->post('proinfo');
      $hv_nacional_id = $this->input->post('nacionalidad');
      $hv_niv_idioma_id = $this->input->post('nivelidioma');
      $hv_idioma_id = $this->input->post('tipoidioma');
      $hv_nives_id = $this->input->post('nivelestudio');
      $hv_tipotel_id = $this->input->post('tipotelefono');
      $hv_estacivil_id = $this->input->post('estadocivil');
      $hv_genero = $this->input->post('genero');
      $hv_fecha_nacimiento = $this->input->post('fechnaci');
      $hv_numero_telefono = $this->input->post('numero_telefono');
      $hv_direccion = $this->input->post('direccion');
      $hv_descripcion = $this->input->post('descripcionbreve');
      $hv_experiencia_profesional = $this->input->post('experiencia');
      $hv_cargo = $this->input->post('cargobreve');
      $hv_centro_educativo = $this->input->post('centroeducativo');
      $hv_area_estudio = $this->input->post('areaestudio');
      $hv_conocimiento = $this->input->post('conocimientos');
      $hv_estado = $this->input->post('estado');
      $hv_periodo_inicio = $this->input->post('fechinicio');
      $hv_dispone_cambio_residencia = $this->input->post('disponecambioresidencia');
      $hv_dispone_viajar = $this->input->post('disponeviajar');
      $hv_salario = $this->input->post('salario');
      $hv_periodo_culminado = $this->input->post('fechfinal');
      $hv_numero_identificacion = $this->input->post('num_documento');
      $hv_pto_puesto_trabajo = $this->input->post('ptotrabajo'); 

      $response = $this->Usuario_model->registro_hoja_de_vida($hv_td_tipodocumento_id,
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
                                                              $hv_pto_puesto_trabajo);
        echo json_encode($response);
    }

    /* View Page HdV */
    public function informacion_usuario()
  	{	
  		$id = $this->session->userdata('usu_id');
  		$response = $this->Usuario_model->informacion_usuario($id);

  			if($response)
  			{			
  				$datos = array('id_usuario' => $id,
         							'usu_nombre' => $response->usu_nombre,
         							'usu_apellido' => $response->usu_apellido,
         							'usu_correo' => $response->usu_correo,
         							'usu_contrasena' => $response->usu_contrasena,
         							'hv_id' => $response->hv_id,
         							'td_tipodocumento_id' => $response->hv_td_tipodocumento_id,
         							'area_id' => $response->hv_cat_id,
         							'situactual_id' => $response->hv_situactual_id,
         							'ciu_id' => $response->hv_ciu_id,
         							'hv_usu_id' => $response->hv_usu_id,
         							'proinfo_id' => $response->hv_proinfo_id,
         							'nacional_id' => $response->hv_nacional_id,
         							'niv_idioma_id' => $response->hv_niv_idioma_id,
         							'idioma_id' => $response->hv_idioma_id,
         							'nives_id' => $response->hv_nives_id,
         							'tipotel_id' => $response->hv_tipotel_id,
         							'estacivil_id' => $response->hv_estacivil_id,
         							'genero' => $response->hv_genero,
         							'fecha_nacimiento' => $response->hv_fecha_nacimiento,
         							'numero_telefono' => $response->hv_numero_telefono,
         							'direccion' => $response->hv_direccion,
         							'descripcionbreve' => $response->hv_descripcion,
         							'experiencia_profesional' => $response->hv_experiencia_profesional,
         							'cargo' => $response->hv_cargo,
         							'centro_educativo' => $response->hv_centro_educativo,
         							'area_estudio' => $response->hv_area_estudio,
         							'conocimiento' => $response->hv_conocimiento,
         							'estado' => $response->hv_estado,
         							'periodo_inicio' => $response->hv_periodo_inicio,
         							'dispone_cambio_residencia' => $response->hv_dispone_cambio_residencia,
         							'dispone_viajar' => $response->hv_dispone_viajar,
         							'salario' => $response->hv_salario,
         							'periodo_culminado' => $response->hv_periodo_culminado,
         							'numero_identificacion' => $response->hv_numero_identificacion,
         							'pto_puesto_trabajo' => $response->hv_pto_puesto_trabajo,
         							'dpto_nombre' => $response->departamento,
  						   		  'pais_nombre' => $response->pais,
                      'dpto_pais_id' => $response->dpto_pais_id,
                      'ciu_dpto_id' => $response->ciu_dpto_id);

  				$this->load->view('Usuario/CV/informacion_personal',$datos);
  			}
  			else
        {
  				redirect(site_url());
  			}
  		//echo json_encode($response);
  	}    

    /* Update Data View Hdv */
    public function actualizo_hoja_de_vida()
    {
      $hv_td_tipodocumento_id =  $this->input->post('tipodocumento');
      $hv_cat_id = $this->input->post('selecarea');
      $hv_situactual_id = $this->input->post('situacionactual');
      $hv_ciu_id = $this->input->post('ciudad');
      $hv_usu_id = $this->session->userdata('usu_id');
      $hv_proinfo_id = $this->input->post('proinfo');
      $hv_nacional_id = $this->input->post('nacionalidad');
      $hv_niv_idioma_id = $this->input->post('nivelidioma');
      $hv_idioma_id = $this->input->post('tipoidioma');
      $hv_nives_id = $this->input->post('nivelestudio');
      $hv_tipotel_id = $this->input->post('tipotelefono');
      $hv_estacivil_id = $this->input->post('estadocivil');
      $hv_genero = $this->input->post('genero');
      $hv_fecha_nacimiento = $this->input->post('fechnaci');
      $hv_numero_telefono = $this->input->post('numero_telefono');
      $hv_direccion = $this->input->post('direccion');
      $hv_descripcion = $this->input->post('descripcionbreve');
      $hv_experiencia_profesional = $this->input->post('experiencia');
      $hv_cargo = $this->input->post('cargobreve');
      $hv_centro_educativo = $this->input->post('centroeducativo');
      $hv_area_estudio = $this->input->post('areaestudio');
      $hv_conocimiento = $this->input->post('conocimientos');
      $hv_estado = $this->input->post('estado');
      $hv_periodo_inicio = $this->input->post('fechinicio');
      $hv_dispone_cambio_residencia = $this->input->post('disponecambioresidencia');
      $hv_dispone_viajar = $this->input->post('disponeviajar');
      $hv_salario = $this->input->post('salario');
      $hv_periodo_culminado = $this->input->post('fechfinal');
      $hv_numero_identificacion = $this->input->post('num_documento');
      $hv_pto_puesto_trabajo = $this->input->post('ptotrabajo');
      $hv_id = $this->input->post('hv_id');   

      $response = $this->Usuario_model->actualizo_hoja_de_vida($hv_td_tipodocumento_id,
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
                                                                $hv_id);
      echo json_encode($response);
    }

    /* View Page Upload Files */
    public function upload()
    {
      //Acá hay que validar que el usuario este logueado
      if($this->session->userdata('login'))
      {                 
        $id_usuario = $this->session->userdata('usu_id');
        $response = $this->Usuario_model->upload_select_hv($id_usuario);
          if($response)
          {
            $datos = array('filename' => $response->hv_formato_filename,
                           'filesecuenceid' => $response->hv_formato_id);
            $this->load->view('Usuario/CV/uploadhv',$datos);  
          }
          else
          {
            $this->load->view('Usuario/CV/uploadhv');
          }
      }              
      else
      {
        redirect(site_url());
      }
    }      

    /* Do_Uploads Function Files */
    public function do_upload()
    {
      if($this->session->userdata('login'))
      {   
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'pdf|docs|docx|doc';

        $this->load->library('upload', $config);
        
        if(! $this->upload->do_upload('archivo'))
        {
          $js = array('estado'=>'info','mensaje'=> 'Al parecer no has seleccionado nada o el documento no es valido.');
          echo json_encode($js); 
        }
        else
        {
          /* Se pueden extraer todos los detalles de un archivo(nombre,tipo,etc) por
          medio de un array o de manera unica accediendo al objeto.
          Ej: Por medio de Array: $data = array('upload_data' => $this->upload->data());
          Manera unica: $data = $this->upload->data(); */
          date_default_timezone_set('America/Bogota');
          $filename = $this->upload->data('file_name');                   
          $id_usuario = $this->session->userdata('usu_id');
          $fecha_registro = date('Y-m-d H:m:s');
          $response = $this->Usuario_model->upload_select_hv($id_usuario);            
          if(empty($response))
          { 
            $this->Usuario_model->upload_insert_hv($id_usuario,$filename,$fecha_registro);
            $js = array('estado'=>'ok','mensaje'=> '');
            echo json_encode($js);           
          }
          else
          {
            $js = array('estado'=>'error','mensaje'=> 'No es necesario insertar mas hojas de vida.');
              echo json_encode($js);              
          } 
        }
      }             
    }

    /* View File Hdv En Formato PDF/WORD */
    public function file_view()
    {
      if($this->session->userdata('perfil') == 1)
      {
        $id_hoja_de_vida = $this->input->post('usu_id');
        $response = $this->Usuario_model->upload_select_hv($id_hoja_de_vida);
        echo json_encode($response->hv_formato_filename);            
      }
      else
      {
        redirect(site_url());
      }          
    }

    /* Download File HdV User */
    public function downloadfilecandidateid($id_file)
    {
      if($this->session->userdata('login'))
      {
        $id_usuario = $this->session->userdata('usu_id');        
        $response = $this->Usuario_model->downloadfilecandidateid($id_usuario,$id_file);
        if(empty($response))
        {
          echo json_encode($response);
        }
        else
        {
          $datos = $response[0]->hv_formato_filename;
          $root = 'uploads/';
          $namefile = basename($datos);
          $path = $root.$file;
          $type = '';

          $ruote = dirname(APP_PATH).$path;
          $filename = $namefile;
          header("Content-type: application/octet-stream");
          header("Content-Type: application/force-download");
          header("Content-Disposition: attachment; filename=\"$filename\"\n");
          readfile($file);
        }

           
          /*if (is_file($path))
          {
            $size = filesize($path);
              if (function_exists('mime_content_type'))
              {
                $type = mime_content_type($path);
              } 
              else if (function_exists('finfo_file')) 
              {
                $info = finfo_open(FILEINFO_MIME);
                $type = finfo_file($info, $path);
                finfo_close($info);
              }
              
              if ($type == '')
              {
                $type = 'application/force-download';
              }

             // Definir headers
             header('Content-type: $type');
             header('Content-disposition: attachment; filename=$file');
             header('Content-transfer-encoding: binary');
             header('Content-Length: ' . $size);
             // Descargar archivo
             readfile($path);
          } 
          else
          {
           die('El archivo no existe.');
          } */    
      }
      else
      {
        redirect(site_url());      
      }
    }


    /* Delete File Upload */
    public function delete_upload()
    {
      if($this->session->userdata('login'))
      {
        $id_usuario = $this->session->userdata('usu_id');

        $response = $this->Usuario_model->delete_upload($id_usuario);
        echo json_encode($response);
      }
    }

    /* View Page Consultar Ofertas */
    public function consultar_ofertas()
    { 
      if($this->session->userdata('login'))
      {
        $this->load->view('Usuario/consultar_ofertas');
      }
      else
      {
        redirect(site_url())  ;
      }
    }

    /* List Ofertas Activas View Page Consultar Ofertas */
    public function mostrar_vacantes()
    {
      $response = $this->Usuario_model->muestra_vacantes(); 
      echo json_encode($response);
    }

    /* View Page Ofertas Inactivas */
    public function consultar_ofertas_inactivas()
    { 
      if($this->session->userdata('perfil') == 1)
      {
        $this->load->view('Usuario/consultar_ofertas_inactivas');
      }
      else if($this->session->userdata('perfil') > 1)
      {
        $this->load->view('Usuario/consultar_ofertas');
      }
      else
      {
        redirect(site_url())  ;
      }
    }      

    /* View Page Create Publicaciones */
    public function crear_publicacion()
    {
      if($this->session->userdata('login'))
        {
          $this->load->view('Usuario/Publication/crear_publicacion');
        }
      else
        {
          redirect(base_url());
        }  
    }
    
    /* Save Data View Page Publicacion */
    public function guardar_publicacion()
    {
      $tipovacante = $this->input->post('tipovacante');
      $selecarea = $this->input->post('selecarea');
      $fechpublicacion = $this->input->post('fechpublicacion');
      $departamento = $this->input->post('departamento');
      $ciudad = $this->input->post('ciudad');
      $salario = $this->input->post('salario');
      $descripcion = $this->input->post('descripcion');
      $fechcontratacion = $this->input->post('fechcontratacion');
      $cantivacantes = $this->input->post('cantivacantes');
      $educminima = $this->input->post('educminima');
      $anoexperiencia = $this->input->post('anoexperiencia');
      $disponeviajar = $this->input->post('disponeviajar');
      $disponecambioresidencia = $this->input->post('disponecambioresidencia');
      $id_usuario = $this->session->userdata('usu_id');
      $estado_publicacion = $this->input->post('estado_publicacion');

      $response = $this->Usuario_model->guardar_publicacion($tipovacante,
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
                                                              $estado_publicacion); 
      echo json_encode($response);
    }

    /* Update Data View Page Publicacion */
    public function actualizar_publicacion()
    {
      $tipovacante = $this->input->post('tipovacante');
      $selecarea = $this->input->post('selecarea');
      $fechpublicacion = $this->input->post('fechpublicacion');
      $departamento = $this->input->post('departamento');
      $ciudad = $this->input->post('ciudad');
      $salario = $this->input->post('salario');
      $descripcion = $this->input->post('descripcion');
      $fechcontratacion = $this->input->post('fechcontratacion');
      $cantivacantes = $this->input->post('cantivacantes');
      $educminima = $this->input->post('educminima');
      $anoexperiencia = $this->input->post('anoexperiencia');
      $disponeviajar = $this->input->post('disponeviajar');
      $disponecambioresidencia = $this->input->post('disponecambioresidencia');
      $id_usuario = $this->session->userdata('usu_id');
      $id_publicacion = $this->input->post('id_publicacion');
      $estado_publicacion = $this->input->post('estado_publicacion');

      $response = $this->Usuario_model->actualizar_publicacion($tipovacante,
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
                                                                $estado_publicacion);
      echo json_encode($response);
      /*print_r($this->session->usuario_data['usu_id']); 
      una manera de obtener un valor  cuando se usa el fectAll con el manejo del modelo*/          
    }

    /* Delete Publicaciones */
    public function eliminar_publicacion()
    {
      $id_publicacion = $this->input->post('id_publicacion');  
      $response = $this->Usuario_model->eliminar_publicacion($id_publicacion);
      echo json_encode($response);    
    }

    /* View Page Postulados */
     public function postulados()
    {
      if($this->session->userdata('perfil') == 1)
      {
        $this->load->view('Usuario/postulados');
      }
      else if($this->session->userdata('perfil') > 1)
      {
        redirect(site_url('Home'));
      }
      else
      {
        redirect(site_url());
      }          
    }

    /* List Categorias y/o Areas Postulados Count Ofertas View Page Postulados */
     public function listar_area_postulados()
    {        
      $response = $this->Usuario_model->listar_area();
      echo json_encode($response);
    } 

    /* List Ofertas Count Hdv View Page Postulados*/
    public function listar_ofertas()
    {          
      $id_categoria = $this->input->post('id_categoria');
      $response = $this->Usuario_model->listar_ofertas($id_categoria); 
      echo json_encode($response);
    }

    /* Lista HdV Postulados En La Oferta View Page Postulados */
    public function listar_hojasdevida()
    {          
      $public_id = $this->input->post('public_id');
      $response = $this->Usuario_model->listar_hojasdevida($public_id); 
      echo json_encode($response);
    }

    /* Load View _blank HdV para Iniciar Proceso De Seleccion*/
    public function proceso_seleccion_postulados($id_hoja_de_vida)
    {    
      if(isset($id_hoja_de_vida))
      {   
        $response = $this->Usuario_model->hoja_de_vida_postulados_por_id($id_hoja_de_vida);

        if($response)
        {     
          $datos = array('id_usuario' => $id_hoja_de_vida,
                      'usu_nombre' => $response->usu_nombre,
                      'usu_apellido' => $response->usu_apellido,
                      'usu_correo' => $response->usu_correo,
                      'hv_id' => $response->hv_id,
                      'td_tipodocumento_id' => $response->hv_td_tipodocumento_id,
                      'area_id' => $response->hv_cat_id,
                      'situactual_id' => $response->hv_situactual_id,
                      'ciu_id' => $response->hv_ciu_id,
                      'ciu_nombre' => $response->ciu_nombre,
                      'hv_usu_id' => $response->hv_usu_id,
                      'proinfo_id' => $response->hv_proinfo_id,
                      'nacional_id' => $response->hv_nacional_id,
                      'niv_idioma_id' => $response->hv_niv_idioma_id,
                      'idioma_id' => $response->hv_idioma_id,
                      'nives_id' => $response->hv_nives_id,
                      'tipotel_id' => $response->hv_tipotel_id,
                      'estacivil_id' => $response->hv_estacivil_id,
                      'genero' => $response->hv_genero,
                      'fecha_nacimiento' => $response->hv_fecha_nacimiento,
                      'numero_telefono' => $response->hv_numero_telefono,
                      'direccion' => $response->hv_direccion,
                      'descripcionbreve' => $response->hv_descripcion,
                      'experiencia_profesional' => $response->hv_experiencia_profesional,
                      'cargo' => $response->hv_cargo,
                      'centro_educativo' => $response->hv_centro_educativo,
                      'area_estudio' => $response->hv_area_estudio,
                      'conocimiento' => $response->hv_conocimiento,
                      'estado' => $response->hv_estado,
                      'periodo_inicio' => $response->hv_periodo_inicio,
                      'dispone_cambio_residencia' => $response->hv_dispone_cambio_residencia,
                      'dispone_viajar' => $response->hv_dispone_viajar,
                      'sueldo' => $response->hv_salario,
                      'periodo_culminado' => $response->hv_periodo_culminado,
                      'numero_identificacion' => $response->hv_numero_identificacion,
                      'pto_puesto_trabajo' => $response->hv_pto_puesto_trabajo,
                      'dpto_nombre' => $response->departamento,
                      'pais_nombre' => $response->pais,
                      'dpto_pais_id' => $response->dpto_pais_id,
                      'ciu_dpto_id' => $response->ciu_dpto_id,
                      'estadocivil' => $response->estacivil_descripcion,
                      'categoria' => $response->cat_descripcion,
                      'nivelestudio' => $response->nives_descripcion,
                      'idioma' => $response->idioma_descripcion,
                      'nivelidioma' => $response->niv_idioma_descripcion,
                      'nacionalidad' => $response->nacional_descripcion,
                      'situacionactual' => $response->situactual_descripcion,
                      'tipodocumento' => $response->td_tipodocumento,
                      'proinfo' => $response->proinfo_descripcion,
                      'post_id' => $response->post_id,
                      'prose' => $response->post_proceso_seleccion,
                      'public_tipovacante' =>$response->public_tipovacante);

            if($this->session->userdata('perfil') == 1)
            {
                $this->load->view('Usuario/CV/hoja_de_vida_postulados',$datos);
            }
            else if($this->session->userdata('perfil') > 1)
            {
              redirect(site_url('Home'));
            }
            else
            {
              redirect(site_url());
            }
          }      
        else{
          redirect(site_url('Usuario/CV/hoja_de_vida_postulados',$id_hoja_de_vida));
        }
      }
      else
      {
        redirect(site_url('Usuario/postulados'));
      }
    }

    /* Update Proceso De Seleccion */
    public function actualizar_proceso_seleccion()
    {
      $proceso = $this->input->post('proceso_seleccion');
      $id_postulacion = $this->input->post('post_id');

      $response = $this->Usuario_model->actualiza_proceso_por_usuario($proceso,
                                                                      $id_postulacion);  
      echo json_encode($response);                
    }

    /* View Page Banco Hojas De Vida */ 
    public function banco_hojas_de_vida()
    {
      if($this->session->userdata('perfil') == 1)
      {
        $this->load->view('Usuario/CV/banco_hojas_de_vida');
      }
      else
      {
        reidrect(site_url());
      }
    }

    /* List Categorias Count HdV Que Hay En Toda la DB view Page Banco Hojas De Vida */
    public function listar_hojasdevida_por_categoria()
    {
      $response = $this->Usuario_model->listar_hojasdevida_por_categoria();
      echo json_encode($response);
    }
    
    /* Count Postulaciones Badge Users con Hdv View Page Banco Hojas De Vida*/
    public function listar_hojasdevida_count_postulaciones()
    {
      $id_categoria = $this->input->post('cat_id');
      $response = $this->Usuario_model->listar_hojasdevida_count_postulaciones($id_categoria);
      echo json_encode($response);
    }

    /* Show Modal Historial De Postulaciones Por Usuario View Page Banco Hojas De Vida */
    public function historial_postulaciones_por_usuario()
    {
      $id_usuario = $this->input->post('usu_id');
      $response = $this->Usuario_model->historial_postulaciones_por_usuario($id_usuario);
      echo json_encode($response);
    }

    /* Load View _blank HdV Banco Hojas De Vida */
    public function CV($hv_id)
    {
      if(isset($hv_id))
      {   
        $response = $this->Usuario_model->CV($hv_id);

        if($response)
        {     
          $datos = array('hv_id' => $hv_id,
                          'usu_nombre' => $response->usu_nombre,
                          'usu_apellido' => $response->usu_apellido,
                          'usu_correo' => $response->usu_correo,
                          'hv_id' => $response->hv_id,
                          'td_tipodocumento_id' => $response->hv_td_tipodocumento_id,
                          'area_id' => $response->hv_cat_id,
                          'situactual_id' => $response->hv_situactual_id,
                          'ciu_id' => $response->hv_ciu_id,
                          'ciu_nombre' => $response->ciu_nombre,
                          'hv_usu_id' => $response->hv_usu_id,
                          'proinfo_id' => $response->hv_proinfo_id,
                          'nacional_id' => $response->hv_nacional_id,
                          'niv_idioma_id' => $response->hv_niv_idioma_id,
                          'idioma_id' => $response->hv_idioma_id,
                          'nives_id' => $response->hv_nives_id,
                          'tipotel_id' => $response->hv_tipotel_id,
                          'estacivil_id' => $response->hv_estacivil_id,
                          'genero' => $response->hv_genero,
                          'fecha_nacimiento' => $response->hv_fecha_nacimiento,
                          'numero_telefono' => $response->hv_numero_telefono,
                          'direccion' => $response->hv_direccion,
                          'descripcionbreve' => $response->hv_descripcion,
                          'experiencia_profesional' => $response->hv_experiencia_profesional,
                          'cargo' => $response->hv_cargo,
                          'centro_educativo' => $response->hv_centro_educativo,
                          'area_estudio' => $response->hv_area_estudio,
                          'conocimiento' => $response->hv_conocimiento,
                          'estado' => $response->hv_estado,
                          'periodo_inicio' => $response->hv_periodo_inicio,
                          'dispone_cambio_residencia' => $response->hv_dispone_cambio_residencia,
                          'dispone_viajar' => $response->hv_dispone_viajar,
                          'sueldo' => $response->hv_salario,
                          'periodo_culminado' => $response->hv_periodo_culminado,
                          'numero_identificacion' => $response->hv_numero_identificacion,
                          'pto_puesto_trabajo' => $response->hv_pto_puesto_trabajo,
                          'dpto_nombre' => $response->departamento,
                          'pais_nombre' => $response->pais,
                          'dpto_pais_id' => $response->dpto_pais_id,
                          'ciu_dpto_id' => $response->ciu_dpto_id,
                          'estadocivil' => $response->estacivil_descripcion,
                          'categoria' => $response->cat_descripcion,
                          'nivelestudio' => $response->nives_descripcion,
                          'idioma' => $response->idioma_descripcion,
                          'nivelidioma' => $response->niv_idioma_descripcion,
                          'nacionalidad' => $response->nacional_descripcion,
                          'situacionactual' => $response->situactual_descripcion,
                          'tipodocumento' => $response->td_tipodocumento,
                          'proinfo' => $response->proinfo_descripcion);

            if($this->session->userdata('perfil') == 1)
            {
                $this->load->view('Usuario/CV/CV',$datos);
            }
            else if($this->session->userdata('perfil') > 1)
            {
              redirect(site_url('Home'));
            }
            else
            {
              redirect(site_url());
            }
          }      
        else{
          
          redirect(site_url('Usuario/CV/CV',$hv_id));
        }
      }
      else
      {
        redirect(site_url('Usuario/CV/banco_hojas_de_vida'));
      }
    } 

    /* View Page Aplicaciones */
    public function aplicaciones()
    {
      if($this->session->userdata('login'))
      {
        $this->load->view('Usuario/aplicaciones');
      }
      else
      {
        redirect(site_url());
      }
    } 

    /* List Postulaciones Por Usuario View Page Aplicaciones */
    public function mis_postulaciones_usuario()
    {
      if($this->session->userdata('login'))
      {
        $id_usuario = $this->session->userdata('usu_id');
        $response = $this->Usuario_model->mis_postulaciones_usuario($id_usuario);
        if(empty($response))
        {
          $js = array('estado' => 'vacio', 'mensaje' => 'Aún no te has postulado alguna oferta. ¿Que Esperas?');
          echo json_encode($js);
        }
        else
        {
          echo json_encode($response);
        }
      }
      else
      {
        redirect(site_url());          
      }
    }

    /* Validation Aplicar Oferta User */
    public function aplica_oferta()
    { 
      if($this->session->userdata('login'))
      {
        $id_usuario = $this->session->userdata('usu_id');
        if($id_usuario)
        {
          $response = $this->Usuario_model->hojadevida_por_usuario($id_usuario);
          if(empty($response))
          {
            $js = array('estado'=>'problema','mensaje'=> 'Aún no has registro una hoja de vida');
            echo json_encode($js);
          }              
          else
          {
            $id_publicacion = $this->input->post('id_publicacion');
            //$id_usuario = $this->session->userdata('usu_id');
            $proceso_seleccion = 'Aplicada';

            //Aca se llama un metodo del modelo, donde se verifique si este usuario ya esta registrado para esa oferta. Si es así retorna false (puede ser).         
            $response = $this->Usuario_model->postulados_por_id($id_publicacion,$id_usuario);            
            if(empty($response))
            {              
              $this->Usuario_model->postulados($id_publicacion,$id_usuario,$proceso_seleccion);
              $js = array('estado'=>'ok','mensaje'=> 'Has aplicado a esta oferta exitosamente.');
              echo json_encode($js);           
            }
            else{
              $js = array('estado'=>'error','mensaje'=> 'Usted ya se encuentra registrado para esta oferta.');
              echo json_encode($js);              
            }
          }
        }            
      }
      else
      {
        $js = array('estado'=>'nologin','mensaje'=> 'No ha iniciado sesión.');
        echo json_encode($js);
      }
    }

    /* View Page Configuracion */
    public function configuracion()
    {
      if($this->session->userdata('login'))
      {
        $this->load->view('Usuario/Config_usuario/configuracion_de_usuario');
      }
      else
      {
        redirect(site_url());
      }
    }

    /* Update Contraseña Usuario / Administrador View Page Configuracion */
    public function actualiza_contrasena()
    {
      $pass = sha1($this->input->post('nuevacontrasena'));
      $id_usuario = $this->session->userdata('usu_id');
      $response = $this->Usuario_model->actualiza_contrasena($pass,$id_usuario);
      echo json_encode($response);
    }

    /* Destruye Sesion Al Actualizar La Contraseña */
    public function destruye_session_al_actualizar()
    {
      if($this->session->userdata('login'))
      {
        session_destroy();
        redirect(site_url());  
      }          
    }

    /* Create New Administrador View Page Configuracion */
    public function crear_nuevo_admin()
    {
      $nombre = $this->input->post('nombre_admin');
      $apellido = $this->input->post('apellido_admin');
      $email = $this->input->post('email_admin');
      $password = sha1($this->input->post('contrasena_admin'));
      $perfil = 1;

      $response = $this->Home_model->registrar_usuario($nombre,
                                                        $apellido,
                                                        $email,
                                                        $password,
                                                        $perfil);
      echo json_encode($response);
    }

    /*Listar Administradores View Page Configuracion */
    public function listar_administradores()
    {
      $response = $this->Usuario_model->listar_administradores();
      echo json_encode($response);
    }

    /* Actualizar Datos De Administrador */
    public function data_updateadmin()
    {
      $id_admin = $this->input->post('id_admin');
      $nombre = $this->input->post('nombre');
      $apellido = $this->input->post('apellido');
      $email = $this->input->post('email');

      $response = $this->Usuario_model->listar_administradores_por_correo($email);
        if(empty($response))
        {
          $resp = $this->Usuario_model->data_updateadmin($id_admin,
                                                          $nombre,
                                                          $apellido,
                                                          $email);
          if($resp)
          {
            $js = array('title' => 'Ok', 'mensaje' => 'Se han actualizado los datos de este administrador');
            echo json_encode($js);
          }
          else
          {
            $js = array('title' => 'Problema', 'mensaje' => 'Ha ocurrido un error en el servidor');
            echo json_encode($js);
          }
        }
        else
        {
          $js = array('title' => 'Error', 'mensaje' => 'Ya existe un usuario con este correo');
          echo json_encode($js);
        }
    }

    /* Eliminar Un Administrador */
    public function data_deleteadmin()
    {
      $id_admin = $this->input->post('id_admin');
      $id_admin_sesion = $this->session->userdata('usu_id');

        if($id_admin == $id_admin_sesion)
        {
          $js = array('title' => 'Error', 'mensaje' => 'No puede eliminar su usuario mientras se encuentre en sesion');
          echo json_encode($js);
        }
        else if($id_admin != $id_admin_sesion)
        {
          $response = $this->Usuario_model->data_deleteadmin($id_admin);
          if($response)
          {
            $js = array('title' => 'Eliminado', 'mensaje' => 'Este administrador ha sido eliminado exitosamente.');
            echo json_encode($js);
          }
          else
          {
            $js = array('title' => 'OcurrioError', 'mensaje' => 'Ha ocurrido un error tratando de eliminar este administrador.');
            echo json_encode($js);
          }

        }

    }

    /* List Show Select's En Todas Las Vistas */
		public function listar_tipodocumento()
    {  	   	
   		$response = $this->Listados_model->listar_tipodocumento();
   		echo json_encode($response);
    }

    public function listar_estadocivil()
    {  	   	
    	$response = $this->Listados_model->listar_estadocivil();
    	echo json_encode($response);
    }

    public function listar_telefono()
    {  	   	
    	$response = $this->Listados_model->listar_telefono();
    	echo json_encode($response);
    }

    public function listar_pais()
    {  	   	
    	$response = $this->Listados_model->listar_pais();
    	echo json_encode($response);
    }

    public function listar_dpto()
    { 
    	$dpto = $this->input->post('pais'); 

		  	$response = $this->Listados_model->listar_dpto($dpto);
     	echo json_encode($response);
   	}   

    public function listar_ciudad()
    {
      $ciudad = $this->input->post('departamento'); 

  		$response = $this->Listados_model->listar_ciudad($ciudad);
  	  echo json_encode($response);
   	}  

    public function listar_nacionalidad()
    {  	   	
   		$response = $this->Listados_model->listar_nacionalidad();
   		echo json_encode($response);
    }   

    public function listar_nivelestudio()
    {  	   	
     	$response = $this->Listados_model->listar_nivelestudio();
     	echo json_encode($response);
    }  

    public function listar_tipoidioma()
    {  	   	
     	$response = $this->Listados_model->listar_tipoidioma();
     	echo json_encode($response);
    }  

    public function listar_nivelidioma()
    {  	   	
   		$response = $this->Listados_model->listar_nivelidioma();
   		echo json_encode($response);
   	}  

   	public function listar_proinfo()
    {  	   	
   		$response = $this->Listados_model->listar_proinfo();
   		echo json_encode($response);
    } 

    public function listar_situactual()
    {  	   	
     	$response = $this->Listados_model->listar_situactual();
     	echo json_encode($response);
    }  

    public function listar_area()
    {  	   	
     	$response = $this->Listados_model->listar_area();
     	echo json_encode($response);
    } 

    public function listar_estado_publicacion()
    {
      $response = $this->Listados_model->listar_estado_publicacion();
      echo json_encode($response);
    }  

    public function listar_departamento()
    {
      $response = $this->Listados_model->listar_departamento();
      echo json_encode($response);
    }

    public function listar_educacion_minima()
    {
      $response = $this->Listados_model->listar_educacion_minima();
      echo json_encode($response);
    }    
}