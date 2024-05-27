<?php require 'header.php';
?>

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"><a href="#">Titulo del articulo</a></h2>
                <p class="fecha">1 de Enero del 2024</p>
                <div class="thumnb">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/imagenes/1.png" alt="">
                    </a>
                </div>
                <p class="extracto">Lorem imjadkaf fsfsgf </p>
                <a href="#" class="continuar">Continuar leyendo</a>
            </article>



        </div>
        <div class="post">
            <article>
                <h2 class="titulo"><a href="#">Titulo del articulo</a></h2>
                <p class="fecha">1 de Enero del 2024</p>
                <div class="thumnb">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/imagenes/1.png" alt="">
                    </a>
                </div>
                <p class="extracto">Lorem imjadkaf fsfsgf </p>
                <a href="#" class="continuar">Continuar leyendo</a>
            </article>



        </div>

        <?php require 'paginacion.php'; ?>

    </div>

    <?php require 'footer.php';
    ?>

