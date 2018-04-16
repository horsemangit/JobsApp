<?php

	Class Vacantes extends CI_CONTROLLER
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('url'));
			$this->load->model('Vacantes_model');
		}
		
		public function index()
		{
			if($this->session->userdata('login'))
			{
				$this->load->view('consultar_vacantes');
			}
			else{
				$this->load->view('vacantes');
			}
		}

		public function mostrar_vacantes()
		{			
	       	$response = $this->Vacantes_model->muestra_vacantes(); 
    	   	echo json_encode($response);
    	}

    	public function detalle_vacante($id_publicacion)
		{		
			if(isset($id_publicacion))
			{
				$response = $this->Vacantes_model->detalle_vacante_por_id($id_publicacion);
				if($response)
				{
					$datos = array('id_publicacion' => $id_publicacion,
					'public_usu_id' => $response->public_usu_id,
					'public_fecha_publicacion' => $response->public_fecha_publicacion,
					'public_tipovacante' => $response->public_tipovacante,
					'dpto_nombre' => $response->dpto_nombre,
					'ciu_nombre' => $response->ciu_nombre,
					'ciu_id' => $response->ciu_id,
					'dpto_id' => $response->dpto_id,					
					'public_fecha_contratacion' => $response->public_fecha_contratacion,
					'public_salario' => $response->public_salario,
					'public_descripcion' => $response->public_descripcion,
					'public_cant_vacantes' => $response->public_cant_vacantes,
					'public_educacion_minima' => $response->nives_descripcion,
					'public_educacion_minima_id' => $response->nives_id,
					'public_anos_experiencia' => $response->public_anos_experiencia,
					'public_dispone_viajar' => $response->public_dispone_viajar,
					'public_cambio_residencia' => $response->public_cambio_residencia,
					'categoria_id' => $response->cat_id,
					'categoria_descripcion' => $response->cat_descripcion,
					'estado_id' => $response->public_estado_id);

					if($this->session->userdata('perfil')==1)
					{
						$this->load->view('Usuario/actualizar_oferta',$datos);
					}
					elseif($this->session->userdata('perfil') > 1)
					{
						$this->load->view('Usuario/detalle_vacantes',$datos);
					}
					else
					{
						$this->load->view('detalle_vacante',$datos);
					}
					
				}
				else
				{
					redirect(site_url('Home/detalle_vacante',$id_publicacion));
				}			
			}
			else
			{
				redirect(site_url('Home/vacantes'));
			}
		}
	}