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
    public function getData()
    {
        return
            '<span class="card-text">Peso: </span>' . $this->peso . '<span> g</span>' . '<br />';
    }
    public function getCategoria()
    {

        return
            $this->categoria->tipoAnimale;
        // "<img src='" . $this->categoria->tipoAnimale . "'class='card-img-top'>";
    }
}
