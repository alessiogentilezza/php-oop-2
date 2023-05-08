<?php
require_once __DIR__ . '/Prodotti.php';


class Giochi extends Prodotti
{

    public $materiale;
    public $secondaCategoria;



    public function __construct($titolo, $prezzo, $immagine, Categoria $categoria, $materiale)

    {
        $this->materiale = $materiale;
        parent::__construct($titolo, $prezzo, $immagine, $categoria);
    }

    public function getData()
    {
        return
            '<span class="card-text">Materiale: </span>' . $this->materiale . '<br />';
    }
}
