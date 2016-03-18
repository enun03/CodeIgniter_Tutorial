<?php

class Usuarios_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function login($usuario, $password) {
        $this->db->where('user', $usuario)
                ->from('usuarios');
        $consulta = $this->db->get();
		
		if ($consulta->num_rows() > 0){
			$this->db->where('user', $usuario)
                ->where('password', $password)
                ->from('usuarios');
        $consulta = $this->db->get();
		
		if ($consulta->num_rows() > 0) {
			$consulta = $consulta->row();
			$data = array(
                'login' => $consulta->user,
                'email' => $consulta->email_usuario 
            );
            $this->session->set_userdata($data);
		} else {
			 $this->session->set_flashdata('mensaje','Contraseña incorrecta.');
		}
	}else {
		 $this->session->set_flashdata('mensaje','Usuario incorrecto');
	}
       
    }
  
        
    function check_email($email) {
        $this->db->select('email_usuario')
                ->where('email_usuario', $email);
        $consulta = $this->db->get('usuarios');

        if ($consulta->num_rows() > 0) {
            return TRUE;
        }
    }

}
