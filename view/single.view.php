<?php require 'header.php';
?>

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"><?= $post['titulo'] ?></h2>
                <p class="fecha"><?= fecha($post['fecha']) ?></p>
                <div class="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/imagenes/<?= $post['thumb'] ?>" alt="><?= $post['titulo'] ?>">
                    </a>
                </div>
                <p class="extracto"><?= nl2br($post['texto']); ?></p>
        
                
            </article>



        </div>
      


    </div>

    <?php require 'footer.php';
    ?>

