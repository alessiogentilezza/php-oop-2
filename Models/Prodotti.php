<?php
require_once __DIR__ . '/Categoria.php';

class Prodotti
{

    public $titolo;
    public $prezzo;
    public $immagine;
    public $categoria;

    public function __construct($titolo, $prezzo, $immagine, Categoria $categoria)
    {
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }

    public function getFullData()
    {
        return
            '<span class="card-text">Tipo: </span>' . $this->titolo . '<br />'
            . '<span class="card-text">Prezzo: € </span>' . $this->prezzo . '<br />';
    }
    public function getImg()
    {
        return
            "<img src=' $this->immagine' class='card-img-top'>";
    }

    public function getCategoria()
    {

        return
            $this->categoria->tipoAnimale;
        // "<img src='" . $this->categoria->tipoAnimale . "'class='card-img-top'>";

    }
}
