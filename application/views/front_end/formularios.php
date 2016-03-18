<article class="contenido">
    <form method="post" action="<?php echo base_url(); ?>formulario/validar">
        <table>
            <tr>
                <td><label for="nombre">Nombre: </label></td>
                <td>
                    <input type="text" name="nombre" id="nombre" value="<?php echo set_value('nombre'); ?>">
                    <?php echo form_error('nombre'); ?>
                </td>
            </tr>
            <tr>
                <td><label for="email">Correo Electronico: </label></td>
                <td>
                    <input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>">
                    <?php echo form_error('email'); ?>
                </td>
            </tr>
            <tr>
                <td><label for="password">Contraseña: </label></td>
                <td>
                    <input type="text" name="password" id="password" value="<?php echo set_value('password'); ?>">
                    <?php echo form_error('password'); ?>
                </td>
            </tr>
            <tr>
                <td><label for="password">Confirmar contraseña: </label></td>
                <td>
                    <input type="text" name="password2" id="password2" value="<?php echo set_value('password2'); ?>">
                    <?php echo form_error('password2'); ?>
                </td>
            </tr>
            <tr>
                <td><label for="mensaje">Mensaje: </label></td>
                <td>
                    <textarea name="mensaje" id="mensaje" cols="35" rows="10"><?php echo set_value('mensaje'); ?></textarea>
                    <?php echo form_error('mensaje'); ?>
                </td>
            </tr>
            <tr>
                <td><label for="opciones">Opciones: </label></td>
                <td>
                    <select name="opciones" id="opciones">
                        <option value="" selected="selected">Seleccione</option>
                        <option value="1" <?php echo set_select('opciones', '1'); ?> >Opción 1</option>
                        <option value="2" <?php echo set_select('opciones', '2'); ?> >Opción 2</option>
                        <option value="3" <?php echo set_select('opciones', '3'); ?> >Opción 3</option> 
                    </select>
                    <?php echo form_error('opciones'); ?>
                </td>
            </tr>
            <tr>
                <td>Colores: </td>
                <td>
                    <input type="checkbox" name="colores[]" id="rojo" value="rojo" <?php echo set_checkbox('colores[]', 'rojo'); ?> >
                    <label for="rojo">Rojo</label>
                    <input type="checkbox" name="colores[]" id="verde" value="verde"<?php echo set_checkbox('colores[]', 'verde'); ?> >
                    <label for="verde">Verde</label>
                    <input type="checkbox" name="colores[]" id="azul" value="azul" <?php echo set_checkbox('colores[]', 'azul'); ?> >
                    <label for="azul">Azul</label>
                    <?php echo form_error('colores[]'); ?>
                </td>
            </tr>
            <tr>
                <td>Idiomas: </td>
                <td>
                    <input type="radio" name="idiomas" id="espanol" value="espanol" <?php echo set_radio('idiomas', 'espanol'); ?> >
                    <label for="espanol">Español</label>
                    <input type="radio" name="idiomas" id="ingles" value="ingles" <?php echo set_radio('idiomas', 'ingles'); ?> >
                    <label for="ingles">Ingles</label>
                    <input type="radio" name="idiomas" id="italiano" value="italiano" <?php echo set_radio('idiomas', 'italiano'); ?> >
                    <label for="italiano">Italiano</label>
                    <?php echo form_error('idiomas'); ?>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="Enviar"></td>
            </tr>
        </table> 
    </form>
    
</article>
