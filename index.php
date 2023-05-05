<?php
require_once __DIR__ . '/Models/Prodotti.php';
require_once __DIR__ . '/Models/Giochi.php';
require_once __DIR__ . '/Models/Cibi.php';
require_once __DIR__ . '/Models/Articoli_Vari.php';
require_once __DIR__ . '/Models/Categoria.php';

$gatti = new Categoria('iconaGatto');
$cani = new Categoria('iconaCane');

$palla = new Giochi('Palla massaggia gengive', 10, 'images/palla.jpg', 'plastica', $cani);
$crocchette = new Cibi('Crocchette di pollo', 7, 'images/crocchette.webp', 300, $gatti);
$cuccia = new Articoli_Vari('Cuccia Morbida', 40, 'images/cuccia.webp', 500, $cani);
// var_dump($palla);
// var_dump($crocchette);
// var_dump($cuccia);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>php-oop-2</title>
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>
    <div class="container d-flex justify-content-around">
            <div class="card" style="width: 18rem;">
                <?php
                echo $palla->getImg();
                ?>
                <div class="card-body">
                    <?php
                    echo $palla->getFullData();
                    echo $palla->getData();
                    ?>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <?php
                echo $crocchette->getImg();
                ?>
                <div class="card-body">
                    <?php
                    echo $crocchette->getFullData();
                    ?>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <?php
                echo $cuccia->getImg();
                ?>
                <div class="card-body">
                    <?php
                    echo $cuccia->getFullData();
                    echo $cuccia->getData();
                    ?>
                </div>
            </div>
        </div>
</body>

</html>