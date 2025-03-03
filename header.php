<?php
$img = array();
for ($i = 68; $i >= 1; --$i) {
    if (($i >= 10 && $i <= 13) || $i == 16 || ($i >= 19 && $i <= 25)) {
        if ($i >= 10 && $i <= 13) {
            $des = 'Led con emblema';
        } elseif ($i == 15) {
            $des = 'Sensores de aparcamiento - Despues';
        } elseif ($i == 14) {
            $des = 'Sensores de aparcamiento - Antes';
        }elseif($i >= 42 && $i <= 48){
            $des = 'Camara de vision trasera BMW X3';
        }elseif($i >= 49 && $i <= 59){
            $des = 'Sensores de aparcamiento delantero y trasero en Ford Mondeo';
        }elseif($i >= 60 && $i <= 64){
            $des = 'Retrovisor con vision de camara de marcha atras en Renault';
        }elseif($i >= 65 && $i <= 68){
            $des = 'Radio con DVD y amplificador en VW passat';
        }
    } else {
        $des = 'Electro car - Mauricio | Servicio profesional para automóviles';
    }
    $img[$i] = array('img' => "img/0$i.jpg", 'des' => $des);
}
$count = count($img);
?>
<!DOCTYPE html>
<html lang="es" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Electro Car | Servicio profesional para automóviles</title>
        <meta name="description" content="Servicio profesional para automóviles a domicilio en toda la Costa del Sol. Revisión y reparación de sistemas eléctricos. Instalación a domicilio de Car Audio." />
        <meta name="keywords" content="benalmadena, averias, diagnosis, instalación, reparación, sistemas electricos" />
        <meta name="robots" content="index, follow">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <style>.ig-b- { display: inline-block; }
            .ig-b- img { visibility: hidden; }
            .ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
            .ig-b-32 { width: 32px; height: 32px; background: url(//badges.instagram.com/static/images/ig-badge-sprite-32.png) no-repeat 0 0; }
            @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
                .ig-b-32 { background-image: url(//badges.instagram.com/static/images/ig-badge-sprite-32@2x.png); background-size: 60px 178px; } }</style>
        </head>
        <body>
            <header>
                <div class="container">
                <div class="header-top clearfix">
                    <div class="pull-left">
                        <div class="fb-like" data-href="https://www.facebook.com/marubox" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>

                        <a href="https://www.instagram.com/electrocar21/?ref=badge" class="ig-b- ig-b-32"><img src="//badges.instagram.com/static/images/ig-badge-32.png" alt="Instagram" /></a>
                    </div>
                    <div class="pull-right">Mauricio Marulanda L. - info@electro-car.es - 659 377 179 - <a href="http://benalmas.es/electro-car/" title="" target="_blank">Ver formulario</a></div>
                </div>
            </div>
            <nav class="navbar navbar-red">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand"><a href="index.php" title="Electro Car">Electro Car</a></div>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php#acercade">Acerca de</a></li>
                            <li><a href="trabajos.php">Trabajos</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header><!-- /bg-header -->