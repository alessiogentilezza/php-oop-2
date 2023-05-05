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
}
