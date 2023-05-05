<?php
require_once __DIR__ . '/Prodotti.php';
require_once __DIR__ . '/Categoria.php';


class Cibi extends Prodotti
{

    public $calorie;
    public $categoria;

    public function __construct($titolo, $prezzo, $immagine, $calorie, $categoria)

    {
        parent::__construct($titolo, $prezzo, $immagine);
        $this->calorie = $calorie;
        $this->categoria = $categoria;
    }
}
