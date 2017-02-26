<?php

namespace Application\Models\News;

class Auteur
{
    
    // -- Définition des Variables
    private $IDAUTEUR,
        $NOMAUTEUR,
        $PRENOMAUTEUR,
        $EMAILAUTEUR;

    // -- Constructeur
    public function __construct() {}

    // -- Getters
    public function getIDAUTEUR() {
        return $this->IDAUTEUR;
    }

    public function getNOMAUTEUR() {
        return $this->NOMAUTEUR;
    }

    public function getPRENOMAUTEUR() {
        return $this->PRENOMAUTEUR;
    }

    public function getEMAILAUTEUR() {
        return $this->EMAILAUTEUR;
    }

    public function getNOMCOMPLET() {
        return $this->PRENOMAUTEUR.' '.$this->NOMAUTEUR;
    }

}