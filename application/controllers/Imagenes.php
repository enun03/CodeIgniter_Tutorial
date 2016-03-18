<?php

class Imagenes extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        $datos['titulo'] = 'Libreria Image';
        $datos['contenido'] = 'imagenes';
        $this->load->view('templates/template', $datos);
    }

    function cargar_imagen() {
        //Cargar imagen
        $nombre_imagen = url_title(convert_accented_characters($_FILES['userfile']['name']), '-', TRUE);
        $nombre_modificado = str_replace('jpg', '', $nombre_imagen);
        $nombre_modificado .= '.jpg';
        $nombre_imagen_copia = 'copia_' . $nombre_modificado;

        $config['max_size'] = 10000;
        $config['quality'] = '90%';
        $config['upload_path'] = './assets/img/Imagenes/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['file_name'] = $nombre_modificado;
        $this->load->library('upload', $config);
        $this->upload->do_upload();
    }

    function procesar_imagen() {
        //Cargar imagen
        $nombre_imagen = url_title(convert_accented_characters($_FILES['userfile']['name']), '-', TRUE);
        $nombre_modificado = str_replace('jpg', '', $nombre_imagen);
        $nombre_modificado .= '.jpg';
        $nombre_imagen_copia = 'copia_' . $nombre_modificado;

        $config['max_size'] = 10000;
        $config['quality'] = '90%';
        $config['upload_path'] = './assets/img/Imagenes/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['file_name'] = $nombre_modificado;
        $this->load->library('upload', $config);
        $this->upload->do_upload();
//        
        //Procesar imagen
        $config2['source_image'] = './assets/img/Imagenes/' . $nombre_modificado;
        $config2['width'] = 800;
        $config2['height'] = 400;
//        $config2['maintain_ratio'] = FALSE;
//        $config2['master_dim'] = 'width';
        $config2['new_image'] = './assets/img/Imagenes/copias/' . $nombre_imagen_copia;
        $this->load->library('image_lib', $config2);
        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors();
        } else {
            $this->visualizar_imagen($nombre_imagen_copia);
        }
    }
    function image_watermark() {
        //Cargar imagen
        $nombre_imagen = url_title(convert_accented_characters($_FILES['userfile']['name']), '-', TRUE);
        $nombre_modificado = str_replace('jpg', '', $nombre_imagen);
        $nombre_modificado .= '.jpg';

        $config['max_size'] = 10000;
        $config['quality'] = '90%';
        $config['upload_path'] = './assets/img/Imagenes/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['file_name'] = $nombre_modificado;
        $this->load->library('upload', $config);
        $this->upload->do_upload();
   
        $config2['source_image'] = './assets/img/Imagenes/' . $nombre_modificado;
        $config2['wm_text'] = 'Copyright 2015 - CIQA';
        $config2['wm_type'] = 'text';
        $config2['wm_font_path'] = './system/fonts/texb.ttf';
        $config2['wm_font_size'] = '20';
        $config2['wm_font_color'] = 'ffffff';
        $config2['wm_vrt_alignment'] = 'bottom';
        $config2['wm_hor_alignment'] = 'center';
        $this->load->library('image_lib', $config2);
        
        if (!$this->image_lib->watermark()) {
            echo $this->image_lib->display_errors();
        } else {
            $this->visualizar_imagen($nombre_modificado);
        }
    }

    function rotar_imagen() {
        //Cargar imagen
        $nombre_imagen = url_title(convert_accented_characters($_FILES['userfile']['name']), '-', TRUE);
        $nombre_modificado = str_replace('jpg', '', $nombre_imagen);
        $nombre_modificado .= '.jpg';

        $config['max_size'] = 10000;
        $config['quality'] = '90%';
        $config['upload_path'] = './assets/img/Imagenes/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['file_name'] = $nombre_modificado;
        $this->load->library('upload', $config);
        $this->upload->do_upload();
        
        $config2['source_image'] = './assets/img/Imagenes/' . $nombre_modificado;
        $config2['rotation_angle'] = 'hor';
        $this->load->library('image_lib', $config2);

        if (!$this->image_lib->rotate()) {
            echo $this->image_lib->display_errors();
        } else {
            $this->visualizar_imagen($nombre_modificado);
        }
    }

    function recortar_imagen() {
        //Cargar imagen
        $nombre_imagen = url_title(convert_accented_characters($_FILES['userfile']['name']), '-', TRUE);
        $nombre_modificado = str_replace('jpg', '', $nombre_imagen);
        $nombre_modificado .= '.jpg';

        $config['max_size'] = 10000;
        $config['quality'] = '90%';
        $config['upload_path'] = './assets/img/Imagenes/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['file_name'] = $nombre_modificado;
        $this->load->library('upload', $config);
        $this->upload->do_upload();

        $config2['source_image'] = './assets/img/Imagenes/' . $nombre_modificado;
        $config2['width'] = 400;
        $config2['height'] = 400;
        $config2['x_axis'] = '100';
        $config2['y_axis'] = '60';
        $this->load->library('image_lib', $config2);

        if (!$this->image_lib->crop()) {
            echo $this->image_lib->display_errors();
        } else {
            $this->visualizar_imagen($nombre_modificado);
        }
    }

    function visualizar_imagen($nombre_imagen) {
        $imagen = getimagesize('./assets/img/Imagenes/copias/' . $nombre_imagen);
        $datos['ancho'] = $imagen[0];
        $datos['alto'] = $imagen[1];
        $datos['titulo'] = 'Imagen';
        $datos['contenido'] = 'visualizar_imagen';
        $datos['imagen'] = $nombre_imagen;
        $this->load->view('templates/template', $datos);
    }

}
