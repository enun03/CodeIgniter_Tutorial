<?php

$config = array(
    'formulario/validar' => array(
        array(
            'field' => 'nombre',
            'label' => 'Nombre',
            'rules' => 'trim|required|max_length[10]|alpha'
        ),
        array(
            'field' => 'email',
            'label' => 'Correo electronico',
            'rules' => 'trim|required|callback_check_email|valid_email'
        ),
        array(
            'field' => 'password',
            'label' => 'Contraseña',
            'rules' => 'trim|required|md5|min_length[8]'
        ),
        array(
            'field' => 'password2',
            'label' => 'Confirmar contraseña',
            'rules' => 'trim|required|matches[password]|min_length[8]'
        ),
        array(
            'field' => 'mensaje',
            'label' => 'Mensaje',
            'rules' => 'required'
        ),
        array(
            'field' => 'opciones',
            'label' => 'Opciones',
            'rules' => 'required'
        ),
        array(
            'field' => 'colores[]',
            'label' => 'Colores',
            'rules' => 'required'
        ),
        array(
            'field' => 'idiomas',
            'label' => 'Idioma',
            'rules' => 'required'
        )
    ),
    'login' => array(
        array(
            'field' => 'nombre',
            'label' => 'Nombre',
            'rules' => 'required|max_length[10]|alpha'
        ),
        array(
            'field' => 'email',
            'label' => 'Correo electronico',
            'rules' => 'required|valid_email'
        ),
        array(
            'field' => 'mensaje',
            'label' => 'Mensaje',
            'rules' => 'required'
        )
    )
);


