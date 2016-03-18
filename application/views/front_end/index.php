<section class="contenido">
    <h1>Aplicaci&oacute;n Dinamica con CI</h1>
    <?php
    foreach ($articulos as $item):
    ?>
        <h3> 
            <?php
            echo anchor('articulo/' . $item->url_articulo, $item->nombre_articulo);
            ?>
        </h3>
        <strong>Fecha de publicaci&oacute;n:</strong> <?php echo $item->fecha_articulo; ?>
        <p><?php echo $item->contenido_articulo; ?></p>
        <hr>
    <?php
    endforeach;
    echo $this->pagination->create_links();
    ?>
</section>
