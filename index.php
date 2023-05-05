<?php
require_once __DIR__ . '/Models/Prodotti.php';
require_once __DIR__ . '/Models/Giochi.php';
require_once __DIR__ . '/Models/Cibi.php';
require_once __DIR__ . '/Models/Articoli_Vari.php';
require_once __DIR__ . '/Models/Categoria.php';

$gatti = new Categoria('iconaGatto');
$cani = new Categoria('iconaCane');

$palla = new Giochi('palla', 10, 'img_palla', 'plastica', $cani);
$crocchette = new Cibi('crocchette', 7, 'img_crocchette', 300, $gatti);
$cuccia = new Articoli_Vari('cuccia', 40, 'img_cuccia', '500g', $cani);
var_dump($palla);
var_dump($crocchette);
var_dump($cuccia);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>php-oop-2</title>
</head>
<body>
    <div>
        <?php
            echo $palla->getFullData();
            ?>
    </div>
</body>
</html>
