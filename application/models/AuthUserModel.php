<?php 
class AuthUserModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    # Validar el acceso de los usuarios
    public function validation($data)
    {
    	$this->load->library('encrypt');
		$user = $this->db->select('email, password, status_register')->where('email', $data['email'])->get('ec_client')->result_array();
            if (count($user) > 0) {
				$password_decode = $this->encrypt->decode($user[0]['password']);
					if ($password_decode == $data['password']) {
						if ($user[0]['status_register'] == 0) {
                            return 2;
                        }
                        return 1;
					} else {
						return 0; # Usuario o clave de acceso incorrectos
					}
			} else {
				return 0; # Usuario o clave de acceso incorrectos
			}
    }

    # Crear el usuario
    public function save_account($data)
    {
        # Eliminar el password de confirmacion
        unset($data['confirm_password']);
        $data['status'] = 0;
        $data['ip']     = '';

        # Cifrar la clave de seguridad
        $password = $data['password'];
        $this->load->library('encrypt');
        $data['password'] = $this->encrypt->encode($data['password']);
        
        # Insertar el registro nuevo
        $this->db->insert('ec_client', $data);

        # Tomar el id insertado
        $id_new_client = $this->db->insert_id();

        # Envio de informacion al correo electronico y a la base de datos
        $this->load->helper('string');
        $key     = random_string('alnum', 16);
        $subject = base_url('confirm-create-account/').$id_new_client.'/'.$key;
        $this->db->set('key_register', $key)->where('id_client', $id_new_client)->update('ec_client');

        # Carga de la libreria de envio de email
        $this->load->library('email');
        $this->email->from('edwardrodriguez@wa-armonia.com', 'Pwex');
        $this->email->to($this->input->post('email'));
        $this->email->subject('Confirmar cuenta de acceso pwex market');
        $this->email->message($subject);
        $this->email->send();
    }

    # Validar si existe la url envia al correo electronico del usuario
    public function validate_url_confirm_account($id, $key)
    {
        if ($this->db->from('ec_client')->select('id_client, key_register')->where(array('id_client' => $id, 'key_register' => $key))->count_all_results() > 0 ) {
            $this->db->set('status_register', 1)->where('id_client', $id)->update('ec_client');
            return true;
        }
        return false;
    }

    # Buscar el id de usuario que inicia sesion
    public function search_id_user($email)
    {
    	return $this->db->select('id_client, name, last_name, email, country')->where('email', $email)->get('ec_client')->result_array();
    }

    # Cambiar el estatus de sesion del usuario
    public function change_status_session_user($user, $ip, $status)
    {
    	if ($status) {
    		$this->db->set(array('ip' => $ip, 'status' => $status))->where('id_client', $user)->update('ec_client');
    	} else {
    		$this->db->set(array('ip' => '', 'status' => $status))->where('id_client', $user)->update('ec_client');
    	}
    }

    # Seguimiento de inicio de sesion de usuarios
    public function log_entry($insert)
    {
    	$this->db->insert('ec_log', $insert);
    	return $this->db->insert_id();
    }

    # Cerrar el seguimiento del usuario
    public function log_exit($user)
    {
    	$this->db->set('date_exit', date('Y-m-d H:i:s'))->where('log', $user)->update('ec_log');
    	return TRUE;
    }

    # Verificar si el usuario no ha iniciado sesion en otro dispositivo de forma simultanea
    public function validate_session_other_device($user, $ip)
    {
        if ($this->db->from('ec_client')->where(array('email' => $user, 'status' => 1, 'ip' => $ip))->count_all_results() > 0){
            return TRUE;
        }else if ($this->db->from('ec_client')->where(array('email' => $user, 'status' => 0, 'ip' => ''))->count_all_results() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    # Enviar notificacion al usuario, porque otro usuario intento ingresar con su datos mientras este está en una sesion abierta previa
    public function send_error_access_other_user($user, $type_of_notification, $ip)
    {
    	# Buscar al usuario por el correo electronico para asocial la notificacion
    	$search = $this->db->select('id_client')->where('email', $user)->get('ec_client')->result_array();

    	# Enviar notificacion al usuario
    	$data['user_notification'] 		= $search[0]['id_client'];
    	$data['type_of_notification'] 	= $type_of_notification;
    	$data['ip_error_access'] 		= $ip;
    	$data['date'] 					= date('Y-m-d H:i:s');
    	$data['status'] 				= 1;
    	return $this->db->insert('ec_notifications', $data);
    }

    # Validar si existe el email para recuperar la clave de acceso
    public function validate_email_user_reset($email)
    {
        return $this->db->from('ec_client')->where('email', $email)->count_all_results();
    }

    # Envio de la clave de seguridad get
    public function send_restore_key($user, $key)
    {
        $this->db->set('restore_key', $key)->where('email', $user)->update('ec_client');
    }

    # Buscar el id del usuario y pasar a la url
    public function search_id_restore($user)
    {
        $result = $this->db->select('id_client')->where('email', $user)->get('ec_client')->result_array();
        return $result[0]['id_client'];
    }

    # Validar la clave que se pasa por url
    public function validate_key_user($id, $key)
    {
        return $this->db->from('ec_client')->where(array('id_client' => $id, 'restore_key' => $key))->count_all_results();
    }

    # Cambiar la clave del usuario
    public function change_password_restore($id, $key)
    {
        $this->db->set('password', $key)->where('id_client', $id)->update('ec_client');
    }

    # Enviar notificacion de cambio de clave
    public function send_change_password_notifications($id, $type_of_notification, $ip)
    {
        # Enviar notificacion
        $data['user_notification']      = $id;
        $data['type_of_notification']   = $type_of_notification;
        $data['ip_error_access']        = $ip;
        $data['date']                   = date('Y-m-d H:i:s');
        $data['status']                 = 1;
        return $this->db->insert('ec_notifications', $data);
    }
}