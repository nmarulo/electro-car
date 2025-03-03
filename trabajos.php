<?php
require 'header.php';
?>
        <div class="container">
            <article role="article">
                <header class="page-header" id="trabajos">
                    <h2>Trabajos</h2>
                </header>
                <section>
                    <div class="gallery">
                        <div class="row clearfix">
                        <?php
                        foreach ($img as $i) {
                            ?>
                            <div class="col-sm-4">
                                <a class="thumbnail" href="<?php echo $i['img']; ?>">
                                    <img class="img-responsive" src="<?php echo $i['img']; ?>" alt="Electro car - Mauricio | Servicio profesional para automóviles" />
                                </a>
                            </div>
                            <?php
                        }
                        ?>
                        </div>
                    </div>
                </section>
            </article>
        </div>
<?php require 'footer.php'; ?>