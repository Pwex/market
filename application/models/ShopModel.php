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

    # Retorna el listado de paises
    public function all_list_country()
    {
        $country = array();
        foreach ($this->db->select('id_country, name_country')->order_by('name_country', 'ASC')->get('countrys')->result_array() as $key => $value) {
            $country[$value['id_country']] = $value['name_country'];
        }
        asort($country);
        return $country;
    }

    # Retorna el listado de ciudades
    public function all_list_cities()
    {
        $city = array();
        foreach ($this->db->select('id_city, name_city')->order_by('name_city', 'ASC')->get('cities')->result_array() as $key => $value) {
            $city[$value['id_city']] = $value['name_city'];
        }
        asort($city);
        return $city;
    }

}