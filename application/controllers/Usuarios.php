<?php

class Usuarios extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    function  login() {
        $this->load->model('Usuarios_model');
        $usuario = $this->security->xss_clean(strip_tags($this->input->post('user')));
        $password = md5($this->security->xss_clean(strip_tags($this->input->post('password'))));
        //die($password);
        $this->Usuarios_model->login($usuario,$password);
        redirect(base_url());
    }
    
    function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}