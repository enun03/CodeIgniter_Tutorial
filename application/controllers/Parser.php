<?php

class Parser extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Articulos_model');
    }

    function index() {
        $this->load->library('parser');

        $articulos = $this->Articulos_model->lista_articulos();
        $data = array(
//            'var1' => 'Este es el contenido de la variable 1',
//            'var2' => 'Esta es una nueva pseudo-variable...'
            'articulos' => $articulos
//            'articulos' => array(
//                array('titulo' => 'Titulo1', 'contenido' => 'Contenido del articulo 1'),
//                array('titulo' => 'Titulo2', 'contenido' => 'Contenido del articulo 2'),
//                array('titulo' => 'Titulo3', 'contenido' => 'Contenido del articulo 3'),
//                array('titulo' => 'Titulo4', 'contenido' => 'Contenido del articulo 4')
//            )
        );
        $data['titulo'] = 'Parseo de pseudo-variables';
        $data['contenido'] = 'parser';
        $this->parser->parse('templates/template', $data);
//        $this->parser->parse_string('Hola {var1} esta es otra {var2}', $datos);
    }

}
