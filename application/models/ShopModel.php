<?php 
class ShopModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    # Información de la tienda
    public function information_shop()
    {
    	return $this->db->where('id', 1)->get('ec_shop_layout')->result_array();
    }

    # Retorna todos las categorías
    public function all_list_category()
    {
        return $this->db->order_by('name_category')->get('categories')->result_array();
    }

}