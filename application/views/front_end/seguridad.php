<article class="contenido">
    <h2>Enviar contenidos</h2>
    <?php echo form_open('seguridad/nuevo_articulo');?>
        <table>
            <tr>
                <td><lable for="nombre">Nombre:</lable></td>
                <td><input type="text" name="nombre"></td>
            </tr>
            <tr>
                <td><lable for="contenido">Contenido:</lable></td>
                <td><textarea name="contenido" cols="80" rows="10"></textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                <input type="submit" name="login" value="Enviar">
                </td>
            </tr>
        </table>
    <?php echo form_close();?>
    <hr>
    <form method="post" action="<?php echo base_url();?>seguridad/limpiar_nombre">
        <lable for="nombre_archivo">Nombre de archivo:</lable>
        <input type="text" name="nombre_archivo">
        <input type="submit" name="enviar" value="Enviar">
    </form>
</article>