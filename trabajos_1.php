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
        } elseif ($i >= 42 && $i <= 48) {
            $des = 'Camara de vision trasera BMW X3';
        } elseif ($i >= 49 && $i <= 59) {
            $des = 'Sensores de aparcamiento delantero y trasero en Ford Mondeo';
        } elseif ($i >= 60 && $i <= 64) {
            $des = 'Retrovisor con vision de camara de marcha atras en Renault';
        } elseif ($i >= 65 && $i <= 68) {
            $des = 'Radio con DVD y amplificador en VW passat';
        }
    } else {
        $des = 'Electro car - Mauricio | Servicio profesional para automóviles';
    }
    $img[$i] = array('img' => "img/0$i.jpg", 'des' => $des);
}
$count = count($img);

foreach ($img as $i) {
    ?>
    <div class="col-sm-4">
        <a class="thumbnail" href="<?php echo $i['img']; ?>">
            <img class="img-responsive" src="<?php echo $i['img']; ?>" alt="Electro car - Mauricio | Servicio profesional para automóviles" />
        </a>
    </div>
    <?php
}