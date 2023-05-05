<?php
require_once __DIR__ . '/Models/Prodotti.php';
require_once __DIR__ . '/Models/Giochi.php';
require_once __DIR__ . '/Models/Categoria.php';

$gatti = new Categoria('iconaGatto');
$cani = new Categoria('iconaCane');

$palla = new Giochi('palla', 10, 'img', 'gomma', $gatti);
var_dump($palla);
