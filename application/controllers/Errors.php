<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

    public function output_template($page)
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
		$this->load->view($page);
		$this->load->view('template/footer');
    }

	# Pagina de error 404
	public function show_404()
	{
		$this->output_template('errors/show_404');
	}

	# Pagina de error, inicio de sesion con otro dispositivos simultaneamente
	public function session_other_device()
	{
		$this->output_template('errors/session_other_device');
	}

}