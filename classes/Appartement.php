<?php

class Appartement extends Habitation {
    private bool $garage;

    public function __construct($pays, $ville, $codePostal, $chambres, $pieces, $garage) {
        parent::__construct($pays, $ville, $codePostal, $chambres, $pieces);
        $this->setGarage($garage);
    }

    /**
     * @return bool
     */
    public function isGarage(): bool
    {
        return $this->garage;
    }

    /**
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }
}
