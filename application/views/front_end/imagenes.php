<article class="contenido">
    <h2>Seleccione una imagen</h2>
    <form action="<?php echo base_url();?>imagenes/procesar_imagen" enctype="multipart/form-data" method="post">
        <input type="file" name="userfile">
        <br><br>
        <input type="submit" name="subir" value="Subir Imagen">
    </form>
</article>