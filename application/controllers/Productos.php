<?php

class Productos extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    function lista_productos(){
        $data['titulo'] = 'Lista de Productos';
        $data['contenido'] = 'lista_productos';
        $this->load->view('templates/template', $data);
    }
    
    function agregar_carrito() {
        $opciones = array();
        if($this->input->post('opciones')){
            $opciones = $this->input->post('opciones');
        }
        $data = array(
            'id' => $this->input->post('id_producto'),
            'qty' => $this->input->post('cantidad'),
            'price' => $this->input->post('precio_producto'),
            'options' => $opciones
        );
        
        $this->cart->insert($data);
        redirect('carrito');
    }
    
    function mostrar_carrito() {
        $data['titulo'] = 'Lista de Productos';
        $data['contenido'] = 'carrito';
        $this->load->view('templates/template', $data);
    }
    
    function vaciar_carrito() {
        $this->cart->destroy();
        redirect('carrito');
    }
    
    function actualizar_carrito() {
        $data = $this->input->post();
        $this->cart->update($data);
        redirect('carrito');
    }
}


