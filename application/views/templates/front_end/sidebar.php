<aside>
    <?php
    if (!$this->session->userdata('login')):
    ?>
        <h3>Login</h3>
        <form name="inicio_sesion" method="post" action="<?php echo base_url(); ?>usuarios/login">
            <input type="text" name="user" placeholder="Usuario">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="login" placeholder="Login">
        </form>
        <p><?php echo $this->session->flashdata('mensaje'); ?></p>
        <?php
    else:
        ?>
        <h3>Bienvenido</h3>
        <p>Usuario: <?php echo $this->session->userdata('login');?></p>
        <p>Email: <?php echo $this->session->userdata('email');?></p>
        <a href="<?php echo base_url();?>usuarios/logout">Cerrar Sesión</a>
    <?php
    endif;
    ?>
    <ul>
        <li>Menú Lateral 1</li>
        <li><?php echo anchor('login', 'Login');?></li>
        <li><?php echo anchor('create_user', 'Registrar Usuario');?></li>
        <li><?php echo anchor('edit_user', 'Editar Usuario');?></li>
        <li><a href="#">Librería Table</a></li>
        <li><a href="#">Librería TrackBack</a></li>
    </ul>
    <ul>
        <li>Menú Lateral 2</li>
        <li><a href="#">Librería Unit Test</a></li>
        <li><a href="#">Librería Upload</a></li>
        <li><a href="#">Upload Multiple</a></li>
        <li><a href="#">Submenu 9</a></li>
    </ul>
    <ul>
        <li>Menú Lateral 3</li>
        <li><a href="#">Submenu 10</a></li>
        <li><a href="#">Submenu 11</a></li>
        <li><a href="#">Submenu 12</a></li>
    </ul>
</aside>
