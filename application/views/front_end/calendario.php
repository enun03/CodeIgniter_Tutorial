<article class="contenido">
    <?php 
    echo $this->calendar->generate($this->uri->segment('3'), $this->uri->segment('4'));
    echo $this->config->item('item1');
    //echo $this->config->site_url();
    //echo $this->config->system_url();
    ?>
</article>