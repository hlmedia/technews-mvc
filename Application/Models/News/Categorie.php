<?php

namespace Application\Models\News;

class Categorie
{
    
    private $IDCATEGORIE,
        $LIBELLECATEGORIE,
        $ROUTECATEGORIE;

    public function __construct() {}

    // -- Getters
    public function getIDCATEGORIE() {
        return $this->IDCATEGORIE;
    }

    public function getLIBELLECATEGORIE() {
        return $this->LIBELLECATEGORIE;
    }

    public function getROUTECATEGORIE() {
        return $this->ROUTECATEGORIE;
    }

}