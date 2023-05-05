<?php

class Prodotti
{

    public $titolo;
    public $prezzo;
    public $immagine;

    public function __construct($titolo, $prezzo, $immagine)
    {
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
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
}
