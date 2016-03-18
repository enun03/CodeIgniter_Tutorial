<?php

class Lenguajes extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    function index($lenguaje = FALSE) {
        
        if($lenguaje && $lenguaje === 'en_US'){
            $this->lang->load('lenguajes', 'english');
        }
        if(!$lenguaje or $lenguaje === 'es_PR'){
            $this->lang->load('lenguajes', 'spanish');
            
        }
        
        $data['titulo'] = 'Lenguajes';
        $data['contenido'] = 'lenguajes';
        $this->load->view('templates/template', $data);
    }

}
