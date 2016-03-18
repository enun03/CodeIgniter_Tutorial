<?php

class Ftp extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->load->library('ftp');
        
//        $this->ftp->connect();
        
//        $this->ftp->upload('./aplicacion.php','/public_html/aplicacion.php','auto', 0775);
//        $this->ftp->download('/public_html/aplicacion.php','./aplicacion_download.php');
//        $this->ftp->rename('/public_html/aplicacion.php', 'aplicacion-renamed.php');
//        $this->ftp->move('/public_html/aplicacion.com', '/public_html/directorio/aplicacion.com');
//        $this->ftp->delete_file('/public_html/aplicacion.php');
//        $this->ftp->delete_dir('/public_html/directorio/');
//        $this->ftp->mkdir('/public_html/directorio_nuevo/', 0777);
//        $this->ftp->mirror('./nbproject/', '/public_html/netbeans/');
//        $datos['archivos'] = $this->ftp->list_files('/netbeans');
//        $this->ftp->chmod('/public_html/aplicacion.php', 0635);
        
//        $this->ftp->close();
        $data['titulo'] = 'Libreria Ftp';
        $data['contenido'] = 'ftp';
        $this->load->view('templates/template', $data);
        
    }
}

