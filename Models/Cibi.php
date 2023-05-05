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
    public function getData()
    {
        return
            '<span class="card-text">Calorie: </span>' . $this->calorie . '<span> kcal</span>' . '<br />';
    }
    public function getCategoria()
    {

        return
            $this->categoria->tipoAnimale;
        // "<img src='" . $this->categoria->tipoAnimale . "'class='card-img-top'>";
    }
}
