<?php
require_once __DIR__ . '/Prodotti.php';


class Cibi extends Prodotti
{

    public $calorie;

    public function __construct($titolo, $prezzo, $immagine, Categoria $categoria, $calorie)

    {
        $this->calorie = $calorie;
        parent::__construct($titolo, $prezzo, $immagine, $categoria);
    }
    public function getData()
    {
        return
        '<span class="card-text">Calorie: </span>' . $this->calorie . '<span> kcal</span>' . '<br />';
    }
}
