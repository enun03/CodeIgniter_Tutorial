<?php

if(!defined('BASEPATH')){
    exit('No direct script access allowed');
}

class Seguridad extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
    }
    
    function index(){
        $data['titulo'] = 'Seguridad en Formularios';
        $data['contenido'] = 'seguridad';
        $this->load->view('templates/template', $data);
    }
    function nuevo_articulo() {
        $this->load->model('Articulos_model');
        
        $nombre = $this->input->post('nombre');
        $contenido = $this->input->post('contenido');
        $url = url_title(convert_accented_characters($nombre),'_',TRUE);
        $fecha = date('Y-m-d');
        $keywords = 'key1,key2,key3';
        $id_categoria = '1';
        
        $datos = array (
            'nombre_articulo' => $nombre,
            'contenido_articulo' => $contenido,
            'fecha_articulo' => $fecha,
            'keywords' => $keywords,
            'url_articulo' => $url,
            'categorias_id_categoria' => $id_categoria 
        );
        
        $this->Articulos_model->nuevo_articulo($this->security->xss_clean($datos));
        redirect(base_url());
    }
    
    function limpiar_nombre() {
        $this->output->set_output($this->security->sanitize_filename($this->input->post('nombre_archivo'),TRUE));
    }
}