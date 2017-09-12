<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthUser extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }
    
    # Formulario de unicio de sesion
	public function index()
	{	
		# Carga del modelo y librerias
		$this->load->model('ShopModel', 'layout', TRUE);
		$this->load->helper('form');
		# Información de la tienda
		$data['information_shop'] = $this->layout->information_shop();
		# Listado de categorías
		$data['category'] = $this->layout->all_list_category();
		# Renderizando la vista | plantilla
		$this->load->view('template/header', $data);
		$this->load->view('authuser');
		$this->load->view('template/footer');
	}

	# Plantilla para crear el usuario
	public function output_template_create_account()
	{
		# Carga del modelo y librerias
		$this->load->model('ShopModel', 'layout', TRUE);
		$this->load->helper('form');
		# Información de la tienda
		$data['information_shop'] = $this->layout->information_shop();
		# Listado de categorías
		$data['category'] = $this->layout->all_list_category();
		# Listado de paises
		$data['country'] = $this->layout->all_list_country();
		# Listado de ciudades
		$data['cities'] = $this->layout->all_list_cities();
		# Renderizando la vista | plantilla
		$this->load->view('template/header', $data);
		$this->load->view('account');
		$this->load->view('template/footer');
	}

	public function create_account()
	{
		switch ($this->input->post()) {
			case false:
				$this->output_template_create_account();
			break;
			case true:
				$this->rules_insert();
				switch ($this->form_validation->run()) {
					case false:
						$this->output_template_create_account();
					break;
					case true:
						$data = $this->input->post();
						if (!isset($data['subscribe_to_newsletter'])) {
							$data['subscribe_to_newsletter'] = 0;
						}
						$this->load->model('AuthUserModel', 'auth', TRUE);
						$this->auth->save_account($data);
						redirect('account-create-success');
					break;
				}
			break;
		}
	}

	# Vista de confirmacion de creacion de la cuenta de usuario
	public function account_create_success()
	{
		# Carga del modelo y librerias
		$this->load->model('ShopModel', 'layout', TRUE);
		$this->load->helper('form');
		# Información de la tienda
		$data['information_shop'] = $this->layout->information_shop();
		# Listado de categorías
		$data['category'] = $this->layout->all_list_category();
		# Renderizando la vista | plantilla
		$this->load->view('template/header', $data);
		$this->load->view('account_create_success');
		$this->load->view('template/footer');
	}

	# Confirmacion de la cuenta de acceso
	public function confirm_create_account($id = NULL, $key = NULL)
	{
		if (empty($id) or empty($key)) {
			return redirect('error-show-404');
		}

		$this->load->model('AuthUserModel', 'auth', TRUE);
		if (!$this->auth->validate_url_confirm_account($id, $key)) {
			return redirect('error-show-404');	
		} 

		return redirect('auth-create-account-success');

	}

	# Mensaje de confirmacion, la cuenta a sido creada
	public function auth_create_account_success()
	{
		# Carga del modelo y librerias
		$this->load->model('ShopModel', 'layout', TRUE);
		$this->load->helper('form');
		# Información de la tienda
		$data['information_shop'] = $this->layout->information_shop();
		# Listado de categorías
		$data['category'] = $this->layout->all_list_category();
		# Renderizando la vista | plantilla
		$this->load->view('template/header', $data);
		$this->load->view('auth_create_account_success');
		$this->load->view('template/footer');
	}

	# Mensaje de error, no ha confirmado la cuenta de acceso
	public function error_confirm_create_account()
	{
		# Carga del modelo y librerias
		$this->load->model('ShopModel', 'layout', TRUE);
		$this->load->helper('form');
		# Información de la tienda
		$data['information_shop'] = $this->layout->information_shop();
		# Listado de categorías
		$data['category'] = $this->layout->all_list_category();
		# Renderizando la vista | plantilla
		$this->load->view('template/header', $data);
		$this->load->view('errors/error_confirm_create_account');
		$this->load->view('template/footer');
	}

	# Relas de validacion de registro de usuarios
	public function rules_insert()
	{
		$config = array(
			array(
				'field' => 'name',
				'label' => 'primer nombre',
				'rules' => 'required|max_length[80]|trim',
				'errors' => array(
								'required' 	=> 'Es necesario ingresar el %s',
								'max_length'=> 'La longitud maxima a ingresar es de 80 caracteres'
						   )
			),
			array(
				'field' => 'second_name',
				'label' => 'segundo nombre',
				'rules' => 'max_length[80]|trim',
				'errors' => array(
								'max_length'=> 'La longitud maxima a ingresar es de 80 caracteres'
						   )
			),
			array(
				'field' => 'last_name',
				'label' => 'apellidos',
				'rules' => 'required|max_length[80]|trim',
				'errors' => array(
								'required' 	=> 'Es necesario ingresar el %s',
								'max_length'=> 'La longitud maxima a ingresar es de 80 caracteres'
						   )
			),
			array(
				'field' => 'email',
				'label' => 'correo electrónico',
				'rules' => 'required|max_length[120]|valid_email|is_unique[ec_client.email]|trim',
				'errors' => array(
								'required' 	  => 'Es necesario ingresar el %s',
								'max_length'  => 'La longitud maxima a ingresar es de 120 caracteres',
								'valid_email' => 'Correo electrónico invalido',
								'is_unique'	  => 'El correo electrónico ingresado ya esta registrado, por favor intente de nuevo'
						   )
			),
			array(
				'field' => 'phone',
				'label' => 'teléfono',
				'rules' => 'required|max_length[20]|trim',
				'errors' => array(
								'required' 	=> 'Es necesario ingresar el %s',
								'max_length'=> 'La longitud maxima a ingresar es de 20 caracteres'
						   )
			),
			array(
				'field' => 'movil',
				'label' => 'movil',
				'rules' => 'required|max_length[20]|trim',
				'errors' => array(
								'required' 	=> 'Es necesario ingresar el %s',
								'max_length'=> 'La longitud maxima a ingresar es de 20 caracteres'
						   )
			),
			array(
				'field' => 'address',
				'label' => 'dirección',
				'rules' => 'required|max_length[255]|trim',
				'errors' => array(
								'required' 	=> 'Es necesario ingresar una %s',
								'max_length'=> 'La longitud maxima a ingresar es de 255 caracteres'
						   )
			),
			array(
				'field' => 'password',
				'label' => 'contraseña',
				'rules' => 'required|max_length[30]|trim',
				'errors' => array(
								'required' 	=> 'Es necesario ingresar una %s',
								'max_length'=> 'La longitud maxima a ingresar es de 30 caracteres'
						   )
			),
			array(
				'field' => 'confirm_password',
				'label' => 'confirmar contraseña',
				'rules' => 'required|max_length[30]|matches[password]|trim',
				'errors' => array(
								'required' 	=> 'Es necesario ingresar una %s',
								'max_length'=> 'La longitud maxima a ingresar es de 30 caracteres',
								'matches'   => 'Las contraseñas ingresadas son distintas'
						   )
			),
			array(
				'field' => 'country',
				'label' => 'país',
				'rules' => 'required|trim',
				'errors' => array(
								'required' 	=> 'Es necesario seleccionar un %s'
						   )
			),
			array(
				'field' => 'cities',
				'label' => 'ciudad',
				'rules' => 'required|trim',
				'errors' => array(
								'required' 	=> 'Es necesario seleccionar una %s'
						   )
			)
		);
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger msg-error">', '</p>');
		$this->form_validation->set_rules($config);
	}

	# Restablecer clave de acceso
	public function reset_key()
	{	
		# Carga del helper form, para el desarrollo de formulairos
		$this->load->helper('form');
		# Renderizar la vista del formulario para restablecer la clave de acceso
		$this->load->view('reset_key');
	}

	# Validar envio de informacion para restablecer clave de acceso
	public function validate_reset_key()
	{
		switch ($this->input->post()) {
			# Envio de informacion del formulario de inicio de sesion
			case TRUE:
				# Cargar reglas de validación y liberias
				$this->set_rules();
				switch ($this->form_validation->run()) {
					case FALSE:
						$this->reset_key();
					break;
					case TRUE:
						# Carga del modelo base de datos y liberias
						$this->load->model('AuthUserModel', 'auth', TRUE);
						$this->load->helper('string');
						# Validar si existe el correo electronico
						if ($this->auth->validate_email_user_reset($this->input->post('email')) > 0) {
							$key 	 = random_string('alnum', 16);
							$subject = base_url('restore-key/').$key.'/'.$this->auth->search_id_restore($this->input->post('email'));
							$this->auth->send_restore_key($this->input->post('email'), $key);
							# Carga de la libreria de envio de email
							$this->load->library('email');
							$this->email->from('edwardrodriguez@wa-armonia.com', 'Pwex');
							$this->email->to($this->input->post('email'));
							$this->email->subject('Recuperación de clave de acceso');
							$this->email->message($subject);
							$this->email->send();
							redirect('reset-key/confirm-email');
						} else {
							redirect('reset-key/invalid-email');
						}
					break;
				}
			break;
			# Ingreso de forma insegura, ataque por url
			case FALSE:
				$this->reset_key();
			break;
		}
	}

	# Confirmacion que la restauracion fue exitosa
	public function confirmation_restore()
	{
		# Renderizar la vista del formulario para restablecer la clave de acceso
		$this->load->view('confirmation_restore');
	}

	# Formulario de restaurar clave
	public function restore_key()
	{	
		# Carga del helper form, para el desarrollo de formulairos
		$this->load->helper('form');
		# Renderizar la vista del formulario para restablecer la clave de acceso
		$this->load->view('restore_key');
	}

	# Validar información enviada al correo electronico
	public function restore_key_validate($key = NULL, $id = NULL)
	{
		switch ($this->input->post()) {
			case FALSE:
				
				# Si la clave esta vacia que envia un error 404
				if ( (empty($key) or is_null($key)) or (empty($id) or is_null($id)) ) {
					return show_404();
				}

				# Cargar modelo base de datos
				$this->load->model('AuthUserModel', 'auth', TRUE);
				
				# Verificar el key enviado al correo electronico
				if ($this->auth->validate_key_user($id, $key) > 0) {
					$this->restore_key();
				} else {
					return show_404();
				}

			break;
			case TRUE:
				$this->rules_restore_key();
				switch ($this->form_validation->run()) {
					case FALSE:
						$data['id']  = $this->input->post('id'); 
						$data['key'] = $this->input->post('key'); 
						# Carga del helper form, para el desarrollo de formulairos
						$this->load->helper('form');
						# Renderizar la vista del formulario para restablecer la clave de acceso
						$this->load->view('restore_key', $data);
					break;
					case TRUE:
					 	# Carga de librerias y modelo base de datos
						$this->load->library('encrypt');
						$this->load->model('AuthUserModel', 'auth', TRUE);
						# Cambio de clave de seguridad
						$this->auth->change_password_restore($this->input->post('id'), $this->encrypt->encode($this->input->post('password')));
						$this->auth->send_change_password_notifications($this->input->post('id'), 'change_password', $this->input->ip_address());
						redirect('confirmation-restore');
					break;
				}
			break;
		}

	}

	# Validar el acceso de los usuarios a la comunidad de desarrollo
	public function validate_access()
	{
		switch ($this->input->post()) {
			# Envio de informacion del formulario de inicio de sesion
			case TRUE:
				# Cargar el modelo de datos de AuthUser | Libreria Manager Auth | User Agent
					$this->load->library(array('managerauth', 'session'));
				# Validacion del acceso al sistema y carga de la sesion de usuario
					# Creacion de la sesión de usuario
					$this->session->set_userdata($this->managerauth->validation($this->input->post(), $this->input->ip_address()));
					# Redireccionar a la pagina de dashboard
					redirect('dashboard');
			break;
			# Ingreso de forma insegura, ataque por url
			case FALSE:
				show_404('Página no encontrada', 'Ha ocurrido un error en la solicitud enviada al servidor');
			break;
		}
	}

	# Eliminar la sesion del usuario actual
	public function sess_destroy()
	{
		# Cargar el modelo de datos de AuthUser | Libreria Manager Auth | User Agent
		$this->load->model('AuthUserModel', 'auth', TRUE);
		$this->load->library('session');
		# Cambiar el estutus del usuario
		$this->auth->change_status_session_user($this->session->userdata['user']['id_client'], NULL, FALSE);
		# Cerrar el seguimiento del usuario
		$this->auth->log_exit($this->session->userdata['user']['log']);
		# Eliminar sesion
		$this->session->sess_destroy();
		# Redireccionar al login
		redirect();
	}

	# Reglas de validación | Formulario de recuperación de clave de acceso
	public function set_rules()
	{
		$config = array(
			array(
				'field' => 'email',
				'label' => 'correo electrónico',
				'rules' => 'required|max_length[120]|trim',
				'errors' => array(
								'required' 	=> 'Es necesario ingresar el %s',
								'max_length'=> 'La longitud maxima a ingresar es de 120 caracteres'
						   )
			),
			array(
				'field' => 'email_confirm',
				'label' => 'confirmar correo electrónico',
				'rules' => 'required|max_length[120]|matches[email]|trim',
				'errors' => array(
								'required' 	=> 'Es necesario ingresar el %s',
								'max_length'=> 'La longitud maxima a ingresar es de 120 caracteres',
								'matches'	=> 'Los correos electrónicos son distintos'
						   )
			)
		);
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger msg-error">', '</p>');
		$this->form_validation->set_rules($config);
	}

	# Reglas de validación | Formulario de establecer nueva clave de seguridad
	public function rules_restore_key()
	{
		$config = array(
			array(
				'field' => 'password',
				'label' => 'clave de seguridad',
				'rules' => 'required|max_length[255]|trim',
				'errors' => array(
								'required' 	=> 'Es necesario ingresar una %s',
								'max_length'=> 'La longitud maxima a ingresar es de 255 caracteres'
						   )
			),
			array(
				'field' => 'password_confirm',
				'label' => 'confirmar clave de seguridad',
				'rules' => 'required|max_length[255]|matches[password]|trim',
				'errors' => array(
								'required' 	=> 'Es necesario ingresar una %s',
								'max_length'=> 'La longitud maxima a ingresar es de 255 caracteres',
								'matches'	=> 'Las clave de seguridad son distintas'
						   )
			)
		);
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger msg-error">', '</p>');
		$this->form_validation->set_rules($config);
	}

}
