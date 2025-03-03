<?php
require 'header.php';
?>
<div class="container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php echo $img[$count - 1]['img']; ?>" class="img-responsive center-block" alt="Electro car - Mauricio | Servicio profesional para automóviles">
            </div>
            <?php
            for ($i = $count - 2; $i > 0; --$i) {
                ?>
                <div class="item">
                    <img src="<?php echo $img[$i]['img']; ?>" class="img-responsive center-block" alt="Electro car - Mauricio | Servicio profesional para automóviles">
                </div>
                <?php
            }
            ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container">
    <h2>Servicio profesional de Car-Audio</h2>
    <div class="row clearfix">
        <div class="col-sm-12 col-md-6">
            <ul>
                <li>Alarmas</li>
                <li>Radios</li>
                <li>Altavoces</li>
                <li>Amplificadores</li>
                <li>Subwoofer</li>
                <li>Sensores de aparcamiento</li>
                <li>Camara de marcha atras</li>
                <li>Manos libres</li>
                <li>Caja acústica a media para subwofer</li>
                <li>Maleteros personalizados</li>
                <li>Ajustes de audio con osciloscopio y RTA</li>
                <li>Kit de Xenon</li>
                <li>Accesorios en general</li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="clearfix">
                <img class="img-responsive center-block" src="img/carAudio.png" alt="Car Audio" title="Car Audio"/>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <h3>Revisión y reparación</h3>
                <div class="col-md-6">
                    <h3>Averías eléctricas y electrónicas</h3>
                </div>
                <div class="col-md-6">
                    <h3>Sistemas de aire acondicionado</h3>
                </div>
            </div>
        </div>
    </div>
    <br/>
</div>
<div class="bg-acercade">
    <div class="container">
        <article role="article">
            <header class="page-header" id="acercade">
                <h2>Acerca de</h2>
            </header>

            <section>
                <h3>Mauricio Marulanda L.</h3>
                <p>Mis comienzos en el <strong>Car-Audio</strong> datan del año 1994, que en un principio lo tome como <em>hobbie</em>, poco a poco mis amigos me recomendaban a mas personas y me vi en la necesidad de capacitarme como técnico.</p>
                <p><strong>Estudie electricidad y electrónica</strong>, complementándolo con cursos de instalación profesional, ajuste de audio, trabajos con fibra de vidrio con acabados en polipiel y pintura.</p>
                <p>Luego me capacite como juez de sonido para <strong>IASCA</strong>, y posteriormente juez de <strong>EMMA</strong>.</p>
                <p>Queriendo ampliar mi campo de conocimiento, en el año 2012 realice un curso de electromecánica automotriz y en la actualidad soy Autónomo y viajo por la provincia de Málaga, reparando averías eléctricas y electrónicas en los coches, también sistemas de aire acondicionado de vehículos.</p>
            </section>
        </article>
    </div>
</div>
<?php require 'footer.php';