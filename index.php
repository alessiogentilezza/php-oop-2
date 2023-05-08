<?php
require_once __DIR__ . '/Models/Prodotti.php';
require_once __DIR__ . '/Models/Giochi.php';
require_once __DIR__ . '/Models/Cibi.php';
require_once __DIR__ . '/Models/Articoli_Vari.php';
require_once __DIR__ . '/Models/Categoria.php';


$gatti = new Categoria('<i class="fa-solid fa-cat"></i>');
$cani = new Categoria('<i class="fa-solid fa-dog"></i>');

$palla = new Giochi('Palla massaggia gengive', 10, 'images/palla.jpg', $cani, 'Plastica');
$palla->setFullDim(10, 10, 10, 'cm');
$crocchette = new Cibi('Crocchette di pollo', 7, 'images/crocchette.webp', $gatti, 300);
$cuccia = new Articoli_Vari('Cuccia Morbida', 40, 'images/cuccia.webp', $gatti, 500);


// var_dump($palla);
// var_dump($crocchette);
// var_dump($cuccia);

// $gatti->secondaCategoria = '<i class="fa-solid fa-cat"></i>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>php-oop-2</title>
    <link rel="stylesheet" href="css/style.css" />

</head>





<body>
    <div class="container d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
            <?php
            echo $palla->getImg();
            ?>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <?php
                    echo $palla->getFullData();
                    echo $palla->getData();
                    echo $palla->getFullDim();
                    ?>
                </li>
                <div class="card-footer">
                    <?php
                    echo $palla->getCategoria();
                    // echo $gatti->secondaCategoria;
                    ?>
                </div>
            </ul>
        </div>
        <div class="card" style="width: 18rem;">
            <?php
            echo $crocchette->getImg();
            ?>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <?php
                    echo $crocchette->getFullData();
                    echo $crocchette->getData();
                    ?>
                </li>
                <div class="card-footer">
                    <?php
                    echo $crocchette->getCategoria();
                    ?>
                </div>
            </ul>
        </div>
        <div class="card" style="width: 18rem;">
            <?php
            echo $cuccia->getImg();
            ?>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <?php
                    echo $cuccia->getFullData();
                    echo $cuccia->getData();
                    ?>
                </li>
                <div class="card-footer">
                    <?php
                    echo $cuccia->getCategoria();
                    ?>
                </div>
            </ul>
        </div>
    </div>

</body>

</html>