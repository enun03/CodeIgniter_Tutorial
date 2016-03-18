<?php

class Formulario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index() {
        $data['titulo'] = 'Form Class';
        $data['contenido'] = 'formularios';
        $this->load->view('templates/template', $data);
    }

    function validar() {

        $this->form_validation->set_error_delimiters('<span class="mensaje-error">', '</span>');

//        $this->form_validation->set_rules('nombre', 'Nombre', 'required|alpha|max_length[10]');
//        $this->form_validation->set_rules('mensaje', 'Correo Electronico', 'required');
//        $this->form_validation->set_rules('opciones', 'Opciones', 'required');
//        $this->form_validation->set_rules('colores[]', 'Colores', 'required');
//        $this->form_validation->set_rules('idiomas', 'Idiomas', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['titulo'] = 'Form Class';
            $data['contenido'] = 'formularios';
            $this->load->view('templates/template', $data);
        } else {
            $data['titulo'] = 'Formulario Validado';
            $data['contenido'] = 'formulario_correcto';
            $this->load->view('templates/template', $data);
        }
    }

    function check_email($email) {
        $this->load->model('Usuarios_model');
        if ($this->Usuarios_model->check_email($email)) {
            $this->form_validation->set_message('check_email', 'El correo ' . $email . ' ya está registrado.');
            return FALSE;
        } 
        else {
            return TRUE;
        }
    }
    
    function recibir_datos() {
        echo $this->input->post('nombre');
    }
}
