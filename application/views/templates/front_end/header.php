<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
        <title><?php echo $titulo; ?></title>
    </head>
    <body>
        <header>
            <section class="contenedor">
                <h1>Curso CodeIgniter</h1>
                <p>Plantilla de ejemplo para curso CI</p>
            </section>
        </header>
        <nav>
            <section class="contenedor">
                <ul>
                    <li><?php echo anchor('','Inicio');?></li>
                    <li><?php echo anchor('calendario', 'Calendario');?></li>
                    <li><?php echo anchor('productos', 'Productos');?></li>
                    <li><?php echo anchor('encriptacion', 'Encriptación');?></li>
                    <li><?php echo anchor('emails', 'Enviar Emails');?></li>
                    <li><?php echo anchor('formularios', 'Formulario');?></li>
                    <li><?php echo anchor('ftp', 'FTP');?></li>
                    <li><?php echo anchor('imagenes', 'Imágenes');?></li>
                    <li><?php echo anchor('lenguajes', 'Lenguaje');?></li>
                    <li><?php echo anchor('parser', 'Parser');?></li>
                    <li><?php echo anchor('seguridad', 'Seguridad');?></li>
                </ul>
            </section>
        </nav>
    <section class="contenedor">
