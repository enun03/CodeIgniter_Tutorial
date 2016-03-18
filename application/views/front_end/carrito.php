<article class="contenido">
    <?php echo anchor('productos', 'Volver al listado'); ?> 
    <hr>
    <form action="<?php echo base_url();?>productos/actualizar_carrito" method="post">
        <table class="carrito">
            <tr>
                <th>Nombre del Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
            <?php
            $i = 1;
            foreach ($this->cart->contents() as $items): 
                ?>
            <input type="hidden" name="<?php echo $i;?>[rowid]" value="<?php echo $item['rowid']?>">
            <tr>
                    <td>
                        <?php echo $items['name'];
                        if ($this->cart->has_options($items['rowid']) === TRUE): 
                            ?>
                            <p>
                                <?php
                                foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): 
                                    ?>
                                    <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
                                <?php endforeach; ?>
                            </p>
                        <?php endif; ?>
                    </td>
                    <td>$ <?php echo number_format($item['price'],2,'.',',');?></td>
                    <td>
                        <input type="text" name="<?php echo $i;?>[qty]" value="<?php echo $item['qty']; ?>" maxlength="3" size="5">
                    </td>
                    <td>$ <?php echo number_format($item['subtotal'],2,'.',','); ?></td>
                </tr>
                <?php 
                $i++;
                endforeach;
                ?>
            <tr>
                <td colspan="2"> 
                    <input type="submit" name="actualizar" value="Actualizar Carrito">
                    <?php echo anchor('productos/vaciar_carrito', 'Vaciar Carrito');?>
                </td>
                <td>Total:</td>
                <td>$ <?php echo number_format($this->cart->total(),2,'.',','); ?></td>
            </tr>

        </table>
    </form>
</article>


