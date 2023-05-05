<?php
require_once __DIR__ . '/Prodotti.php';
require_once __DIR__ . '/Categoria.php';


class Giochi extends Prodotti
{

    public $materiale;
    public $categoria;

    public function __construct($titolo, $prezzo, $immagine, $materiale, Categoria $categoria)

    {
        parent::__construct($titolo, $prezzo, $immagine);
        $this->materiale = $materiale;
        $this->categoria = $categoria;
    }

    public function getData()
    {
        return
            '<span class="card-text">Materiale: € </span>' . $this->materiale . '<br />';
    }
    public function getCategoria()
    {
        return
            "<img src=' $this->categoria' class='card-img-top'>";
    }
}
