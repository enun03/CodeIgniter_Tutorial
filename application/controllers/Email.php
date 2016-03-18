<?php

class Email extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('email');
    }

    function index() {
        $data['titulo'] = 'Email Class';
        $data['contenido'] = 'emails';
        $this->load->view('templates/template', $data);
    }

    function enviar() {
        $destinatario = $this->input->post('destinatario');
        $asunto = $this->input->post('asunto');
        $mensaje = $this->input->post('mensaje');
        
        $this->email->from('enunez025@gmail.com', 'Eli Nuñez');
        $this->email->to($destinatario);
        $this->email->subject($asunto);
        $this->email->message($mensaje);
        $this->email->send();
        redirect('email');
        
    }

}
