<?php
require_once __DIR__ . '/Prodotti.php';
require_once __DIR__ . '/Categoria.php';


class Articoli_Vari extends Prodotti
{

    public $peso;
    public $categoria;

    public function __construct($titolo, $prezzo, $immagine, $peso, $categoria)

    {
        parent::__construct($titolo, $prezzo, $immagine);
        $this->peso = $peso;
        $this->categoria = $categoria;
    }
}
