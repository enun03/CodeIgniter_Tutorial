<article class="contenido">
    <?php 
    $msg = 'Este mensaje será encriptado...';
    $key = 'q1M2w7N6aS0GHf5vcXu84Yt03hd5e3xl';
    echo $msg;
    ?>
    <br><br> 
    <?php
    $valor_encryptado = $this->encrypt->encode($msg, $key);
    echo 'Valor encriptado: '.$valor_encryptado;
    ?>
    <br><br> 
    <?php 
    echo 'Valor desencriptado: '.$this->encrypt->decode($valor_encryptado, $key);
    ?>
    <br><br> 
    <?php 
    echo 'Valor en sha1: '.sha1($msg);
    ?>
    <br><br> 
    <?php 
    echo 'Valor en md5: '.md5($msg);
    ?>
    <br><br> 
    <?php 
    echo 'Valor super encriptado: '.md5(sha1($valor_encryptado));
    ?>
    
</article>

