<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        # Helper 
        $this->load->helper('form');
    }

	public function index()
	{
		# Carga del modelo y librerias
		$this->load->model('ShopModel', 'layout', TRUE);
		# Información de la tienda
		$data['information_shop'] = $this->layout->information_shop();
		# Listado de categorías
		$data['category'] = $this->layout->all_list_category();
		# Renderizando la vista | plantilla
		$this->load->view('template/header', $data);
		$this->load->view('shop/home');
		$this->load->view('template/footer');
	}

	# Visualizar categorías
	public function category($id = null, $url = null)
	{
		# Carga del modelo y librerias
		$this->load->model('ShopModel', 'layout', TRUE);
		# Información de la tienda
		$data['information_shop'] = $this->layout->information_shop();
		# Listado de categorías
		$data['category'] = $this->layout->all_list_category();
		# Renderizando la vista | plantilla
		$this->load->view('template/header', $data);
		$this->load->view('shop/category');
		$this->load->view('template/footer');
	}

	# Buscador principal
	public function search()
	{
		$q 			= url_title(strtolower($this->input->post('q')));
		$category   = $this->input->post('cat');
		if (!empty($q)) {
			# Carga del modelo y librerias
			$this->load->model('ShopModel', 'layout', TRUE);
			# Información de la tienda
			$data['information_shop'] = $this->layout->information_shop();
			# Listado de categorías
			$data['category'] = $this->layout->all_list_category();
			# Renderizando la vista | plantilla
			$this->load->view('template/header', $data);
			$this->load->view('shop/search');
			$this->load->view('template/footer');
		} else {
			echo "pendiente por finalizar";
		}
	}

	# Comunidad | Blog
	public function blog()
	{
		# Carga del modelo y librerias
		$this->load->model('ShopModel', 'layout', TRUE);
		# Información de la tienda
		$data['information_shop'] = $this->layout->information_shop();
		# Listado de categorías
		$data['category'] = $this->layout->all_list_category();
		# Renderizando la vista | plantilla
		$this->load->view('template/header', $data);
		$this->load->view('blog/home');
		$this->load->view('template/footer');
	}

	# Comunidad | Blog Ver información del post
	public function publication()
	{
		# Carga del modelo y librerias
		$this->load->model('ShopModel', 'layout', TRUE);
		# Información de la tienda
		$data['information_shop'] = $this->layout->information_shop();
		# Listado de categorías
		$data['category'] = $this->layout->all_list_category();
		# Renderizando la vista | plantilla
		$this->load->view('template/header', $data);
		$this->load->view('blog/publication');
		$this->load->view('template/footer');
	}

	# Contacto 
	public function contact()
	{
		# Carga del modelo y librerias
		$this->load->model('ShopModel', 'layout', TRUE);
		# Información de la tienda
		$data['information_shop'] = $this->layout->information_shop();
		# Listado de categorías
		$data['category'] = $this->layout->all_list_category();
		# Renderizando la vista | plantilla
		$this->load->view('template/header', $data);
		$this->load->view('shop/contact');
		$this->load->view('template/footer');
	}

	# Detalles de productos 
	public function product($id = NULL, $nombre = NULL)
	{
		# Carga del modelo y librerias
		$this->load->model('ShopModel', 'layout', TRUE);
		# Información de la tienda
		$data['information_shop'] = $this->layout->information_shop();
		# Listado de categorías
		$data['category'] = $this->layout->all_list_category();
		# Renderizando la vista | plantilla
		$this->load->view('template/header', $data);
		$this->load->view('shop/product');
		$this->load->view('template/footer');
	}

	# Carrito de compras 
	public function shopping_cart()
	{
		# Carga del modelo y librerias
		$this->load->model('ShopModel', 'layout', TRUE);
		# Información de la tienda
		$data['information_shop'] = $this->layout->information_shop();
		# Listado de categorías
		$data['category'] = $this->layout->all_list_category();
		# Renderizando la vista | plantilla
		$this->load->view('template/header', $data);
		$this->load->view('shop/shopping-cart');
		$this->load->view('template/footer');
	}

	# Pasar por la caja 
	public function checkout()
	{
		# Carga del modelo y librerias
		$this->load->model('ShopModel', 'layout', TRUE);
		# Información de la tienda
		$data['information_shop'] = $this->layout->information_shop();
		# Listado de categorías
		$data['category'] = $this->layout->all_list_category();
		# Renderizando la vista | plantilla
		$this->load->view('template/header', $data);
		$this->load->view('shop/checkout');
		$this->load->view('template/footer');
	}

}
