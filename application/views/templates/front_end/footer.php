</section>
<footer>
    <section class="contenedor">
        <p>Esta p&aacute;gina fu&eacute; diseñada como ejemplo para propositos de evaluaci&oacute;n de 
            un proseso de reclutamiento de la empresa CIQA. <br> Participante: Eli Nu&ntilde;ez
        </p>
    </section>
</footer>
<script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/functions.js"></script>
<script>
    $(function() {
    <?php
        if($this->uri->segment(2)):
    ?>
    $('#lenguaje option[value="<?php echo $this->uri->segment(2); ?>"]').attr('selected', 'selected');
    <?php
        endif;
    ?>
    });
</script>
</body>
</html>