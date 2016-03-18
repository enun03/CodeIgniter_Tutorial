<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Articulos_model');
    }

    //Pagina principal
    function index($pagina = FALSE) {
        
        $inicio = 0;
        $limite = 2;
        
        if($pagina) {
            $inicio = ($pagina - 1) * $limite;
        }
        
        $this->load->library('pagination');

        $data['articulos'] = $this->Articulos_model->lista_articulos($inicio, $limite);

        $config['base_url'] = base_url() . 'pagina/';
        $config['total_rows'] = count($this->Articulos_model->lista_articulos());
        $config['per_page'] = $limite;
        $config['uri_segment'] = 2;
        $config['first_url'] = base_url();
        $config['num_links'] = 2;
        $config['full_tag_open'] = '<ul class="paginador">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&lsaquo; Primero';
        $config['last_link'] = 'Ultimo &lsaquo;';
        $config['next_link'] = 'Siguiente &gt;';
        $config['prev_link'] = '&lt; Anterior';
        $config['first_tag_open'] = '<li>';
        $config['last_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['prev_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><strong>';
        $config['cur_tag_close'] = '</strong></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        //$config['display_pages'] = FALSE;
        $config['anchor_class'] = 'class="paginador"';
        $this->pagination->initialize($config);

//        $this->load->library('migration');
//        
//        if(!$this->migration->latest()) {
//            show_error($this->migration->error_string());
//        }
        $data['titulo'] = 'Aplicaion - Ejemplo CI';
        $data['contenido'] = 'index';
        $this->load->view('templates/template', $data);
    }

    //Muestra un articulo por ID
//    function detalle_articulo($id_articulo){
//        $id_limpio = $this->security->xss_clean($id_articulo);
//        $data['detalles'] = $this->Articulos_model->detalle_articulo($id_limpio);
//        $data['titulo'] = $data['detalles']->nombre_articulo;
//        $this->load->view('detalle', $data);
//    }
    //Muestra un articulo por nombre
//    function detalle_articulo($nombre_articulo){
//        $nombre_limpio = str_replace('_', ' ', $nombre_articulo);
//        $data['detalles'] = $this->Articulos_model->detalle_articulo($nombre_limpio);
//        $data['titulo'] = $data['detalles']->nombre_articulo;
//        $this->load->view('detalle', $data);
//    }
    //Muestra un articulo por URL
    function detalle_articulo($url_articulo) {
        $url_limpio = $this->security->xss_clean($url_articulo);
        $data['detalles'] = $this->Articulos_model->detalle_articulo($url_limpio);
        $data['titulo'] = $data['detalles']->nombre_articulo;
        $data['contenido'] = 'detalle';
        $this->load->view('templates/template', $data);
    }

    function calendario() {
        $config = array(
            'show_next_prev' => TRUE,
            'next_prev_url' => base_url() . 'home/calendario/'
        );
        $this->config->load('mi_config');
        $this->config->set_item('item1', 'clasificadosfreelancer.com');
        $this->load->library('calendar');
        $data['titulo'] = 'Libreria Calendar';
        $data['contenido'] = 'calendario';
        $this->load->view('templates/template', $data);
    }

    function encriptacion() {
        $this->load->library('encrypt');
        $data['titulo'] = 'Encriptacion con CI';
        $data['contenido'] = 'encriptacion';
        $this->load->view('templates/template', $data);
    }

}
