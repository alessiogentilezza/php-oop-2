<?php

trait DimensioniPacco {
    
    protected $altezza;
    protected $larghezza;
    protected $profondità;
    protected $unitaDiMisura;


    public function setFullDim(int $altezza, int $larghezza, int $profondità, string $unitaDiMisura)
    {        
        $this->altezza = $altezza;
        $this->larghezza = $larghezza;
        $this->profondità = $profondità;
        $this->unitaDiMisura = $unitaDiMisura;

    }
    public function getFullDim()
    {
        return
            '<span class="card-text">Altezza: </span>' . $this->altezza . ' '
            . '<span class="card-text">Larghezza: € </span>' . $this->larghezza . ' '
            . '<span class="card-text">Profondità: € </span>' . $this->profondità . ' '
            . '<span class="card-text">Unità di Misura: € </span>' . $this->unitaDiMisura;
    }

}
