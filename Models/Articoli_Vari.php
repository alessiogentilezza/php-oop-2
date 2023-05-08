<?php
require_once __DIR__ . '/Prodotti.php';


class Articoli_Vari extends Prodotti
{

    public $peso;
    public $categoria;

    public function __construct($titolo, $prezzo, $immagine, Categoria $categoria)

    {
        parent::__construct($titolo, $prezzo, $immagine, $categoria);
    }
    public function getData()
    {
        return
            '<span class="card-text">Peso: </span>' . $this->peso . '<span> g</span>' . '<br />';
    }
}
