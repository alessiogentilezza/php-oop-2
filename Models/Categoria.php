<?php

class Categoria
{

    public $tipoAnimale;
    public $secondaCategoria;

    public function __construct($tipoAnimale)

    {
        $this->tipoAnimale = $tipoAnimale;
    }
}
