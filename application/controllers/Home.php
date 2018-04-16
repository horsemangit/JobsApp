<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Home_model');		
	}

	public function index()
	{	
		if(!$this->session->userdata('login'))
		{	
			$this->load->view('Home/index');
		}
		else
		{
			redirect(site_url('Usuario'));		
		}
	}

	public function iniciar_sesion()
	{
		$usu_correo_log = $this->input->post('usu_correo_log');
		$usu_contrasena_log = sha1($this->input->post('usu_contrasena_log')); 

     	$usuario = $this->Home_model->login_usuario($usu_correo_log, $usu_contrasena_log);
    	
     	if($usuario)
 		{
 			$usuario_data = array('usu_id' => $usuario->usu_id,
            'usu_nombre' => $usuario->usu_nombre,
    		'usu_apellido' => $usuario->usu_apellido,
    		'perfil' => $usuario->usu_per_id_perfil,
            'login' => TRUE,
            );

            $this->session->set_userdata($usuario_data);         	
    	}           
	            
        echo json_encode($usuario);
	}

	public function login_restore()
	{ 
		$this->load->view('Home/restore_pass.php');
	}

	public function sendMail_pass()
	{
		$this->load->library('email');
		$correo_usuario = $this->input->post('restaurar_password');
		$response = $this->Home_model->valida_email_sendMail($correo_usuario);

	  	if(empty($response))
	  	{
	  		$js = array('title' => 'Error', 'mensaje' => 'Al parecer este correo no existe... ¡POR FAVOR VERIFIQUE!');

	  		echo json_encode($js);
	  	}
	  	else
	  	{
	  		/* Password Aleatorio */
	  		$cadena = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';	    
	    	$longitudCadena=strlen($cadena);   	    
	    	$pass = '';
	    	$longitudPass=10;     
	    
	    	for($i=1 ; $i<=$longitudPass ; $i++)
	    	{
	        	$pos=rand(0,$longitudCadena-1);     
	        	$pass .= substr($cadena,$pos,1);
    		}

    		$resp = $this->Home_model->update_password_sendMail($correo_usuario,$pass);

    		if($resp)
    		{
				$config = array('mailtiype' => 'html','charset' => 'utf-8', 'protocol' => 'stmp', 'stmp_host' => 'ssl://smtp.googlemail.com', 'stmp_port' => 587);
		  		$this->email->initialize($config);

		  		$mensaje = 
		  			'Estimado usuario:

					Usted ha solicitado el restablecimiento de su contraseña en la plataforma de la bolsa de empleo del GRUPO OSPEDALE. 
					El restablecimiento de la contraseña es: '.$pass; 

				$mensaje .=
					'Puede ingresar nuevamente atraves de este link <a href=#>Login G.OCHO</a>


					Recuerde...

					Una vez ingrese al sistema se recomienda cambiar la contraseña.
					Esta contraseña tiene una vigencia de 48 horas. Si dentro de este tiempo no cambia la contraseña asignada, debera repetir el proceso de restablecimiento de contraseña o comunicarse 
					con la linea de atencion al usuario 386 53 10.					


					**********************NO RESPONDER - Mensaje Generado Automáticamente**********************

					Este correo es únicamente informativo y es de uso exclusivo del destinatario(a), puede contener información privilegiada y/o confidencial. Si no es usted el destinatario(a) deberá borrarlo inmediatamente. Queda notificado que el mal uso, divulgación no autorizada, alteración y/o  modificación malintencionada sobre este mensaje y sus anexos quedan estrictamente prohibidos y pueden ser legalmente sancionados. -El GRUPO OSPEDALE  no asume ninguna responsabilidad por estas circunstancias-';
		  		$this->email->from('Empleo_Ospedale@ospedale.com');
		  		$this->email->to($correo_usuario);
		  		$this->email->subject('Restablecimiento de contraseña');
		  		$this->email->message($mensaje);

		  		if($this->email->send())
		  		{
		  			$js = array('title' => 'Enviado', 'mensaje' => 'Se ha enviado una contraseña a su correo');
		  			echo json_encode($js);
		  		}
		  		else
		  		{
		  			$js = array('title' => 'problema', 'mensaje' => 'Ha ocurrido un error tratando de restaurar la contraseña');
		  			echo json_encode($js);
		  		}
		  	}
		  	else
		  	{
		  		$js = array('title' => 'errorcito','mensaje' => 'Ha ocurrido un problema con el servidor');
		  		echo json_encode($js);
		  	}
	  	}
	  	
	}

	function cerrar_sesion()
	{
		$this->session->sess_destroy();	
	}

	public function registrar_usuario(){

		$usu_nombre = $this->input->post('usu_nombre');
		$usu_apellido = $this->input->post('usu_apellido');
		$usu_correo = $this->input->post('usu_correo');		
		$usu_contrasena = sha1($this->input->post('usu_contrasena'));
		$usu_per_id_perfil = 2;
		
			
       	$response = $this->Home_model->registrar_usuario($usu_nombre,$usu_apellido,$usu_correo,$usu_contrasena,$usu_per_id_perfil); 
       	if($response)
       	{
       		$usuario = $this->Home_model->login_usuario($usu_correo, $usu_contrasena);
    	
     		if($usuario)
     		{
     			$usuario_data = array('usu_id' => $usuario->usu_id,
	            'usu_nombre' => $usuario->usu_nombre,
        		'usu_apellido' => $usuario->usu_apellido,
        		'perfil' => $usuario->usu_per_id_perfil,
	            'login' => TRUE,
	            );

	            $this->session->set_userdata($usuario_data);         	
        	}
       	}
        echo json_encode($response);
    }

    public function vacantes()
    {
    	$this->load->view('vacantes');
    }

    public function mostrar_vacantes()
	{			
	    $response = $this->Home_model->muestra_vacantes(); 
       	echo json_encode($response);
    }

    public function mostrar_vacantes_inactivas()
	{
	    $response = $this->Home_model->muestra_vacantes_inactivas(); 
       	echo json_encode($response);
    }
}
