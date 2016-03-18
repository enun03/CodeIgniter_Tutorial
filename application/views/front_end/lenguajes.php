<article class="contenido">
    <fieldset>
        <legend><?php echo $this->lang->line('form_legend');?></legend>
        <label for="lenguaje"><?php echo $this->lang->line('form_language');?></label>
        <select name="lenguaje" id="lenguaje">
            <option value="es_PR"><?php echo $this->lang->line('form_spanish');?></option>
            <option value="en_US"><?php echo $this->lang->line('form_english');?></option>
        </select>
    </fieldset>
    <br>
    <table>
        <tr>
            <td>
                <label for="nombre"><?php echo $this->lang->line('form_label_name');?></label>
            </td>
            <td>
                <input type="text" name="nombre" id="nombre">
            </td>
        </tr>
        <tr>
            <td>
                <label for="nombre"><?php echo $this->lang->line('form_label_address');?></label>
            </td>
            <td>
                <textarea name="direccion" id="direccion"></textarea>
            </td>
        </tr>
        <tr>
            <td><label for="sexo"><?php echo $this->lang->line('form_label_sex');?></label></td>
            <td>
                <select name="sexo" id="sexo">
                    <option value="" selected="selected"><?php echo $this->lang->line('form_sex');?></option>
                    <option value="<?php echo $this->lang->line('form_female');?>"><?php echo $this->lang->line('form_female');?></option>
                    <option value="<?php echo $this->lang->line('form_male');?>"><?php echo $this->lang->line('form_male');?></option>
                </select>
            </td>
        <tr>
            <td colspan="2"><input type="button" name="enviar" value="<?php echo $this->lang->line('form_button');?>"></td>
        </tr>
    </table>
</article>