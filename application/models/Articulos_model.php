<?php

class Articulos_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
    
    //Genera un listado de articulos
    function lista_articulos($inicio = FALSE, $limite = FALSE){
       $this->db->order_by('id_articulos', 'desc');
       
       if($inicio !== FALSE && $limite !== FALSE){
           $this->db->limit($limite, $inicio);
       }
       $consulta = $this->db->get('articulos');
       return $consulta->result();
    }
    
    //Muestra el detalle de un articulo por ID
//    function detalle_articulo($id_articulo){
//        $this->db->where('id_articulos', $id_articulo);
//        $consulta = $this->db->get('articulos');
//        return $consulta->row();
//    }
    //Muestra el detalle de un articulo por nombre
//    function detalle_articulo($nombre_articulo){
//        $this->db->where('nombre_articulo', $nombre_articulo); 
//        $consulta = $this->db->get('articulos');
//        return $consulta->row();
//    }
    //Muestra el detalle de un articulo por URL
    function detalle_articulo($url_articulo){
        $this->db->where('url_articulo', $url_articulo); 
        $consulta = $this->db->get('articulos');
        return $consulta->row();
    }
    
    function nuevo_articulo($datos) {
        $this->db->insert('articulos', $datos);
        redirect(base_url());
    }
}
