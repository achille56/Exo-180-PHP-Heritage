<?php

class Maison extends Habitation {
    private bool $jardin;
    private bool $garage;
    private int $etages;

    public function __construct($pays, $ville, $codePostal, $chambres, $pieces, $jardin, $etages, $garage) {
        parent::__construct($pays, $ville, $codePostal, $chambres, $pieces);
        $this->setJardin($jardin);
        $this->setEtages($etages);
        $this->setGarage($garage);
    }

    /**
     * @return bool
     */
    public function isJardin(): bool
    {
        return $this->jardin;
    }

    /**
     * @param bool $jardin
     */
    public function setJardin(bool $jardin): void
    {
        $this->jardin = $jardin;
    }

    /**
     * @return int
     */
    public function getEtages(): int
    {
        return $this->etages;
    }

    /**
     * @param int $etages
     */
    public function setEtages(int $etages): void
    {
        $this->etages = $etages;
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


