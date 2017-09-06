<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        #$this->load->library(array('managerauth'));
        #$this->managerauth->validate_session();
    }

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
		$this->load->view('dashboard/home');
		$this->load->view('template/footer');
	}

}
