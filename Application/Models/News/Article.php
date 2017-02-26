<?php

namespace Application\Models\News;
use Application\Models\News\AuteurDb;
use Application\Models\News\CategorieDb;
use Application\Models\Configuration\Shortcut;

class Article
{
    
    use Shortcut;

    // -- Définition des Variables
    private $IDARTICLE,
        $IDAUTEUR,
        $IDCATEGORIE,
        $TITREARTICLE,
        $CONTENUARTICLE,
        $FEATUREDIMAGEARTICLE,
        $SPECIALARTICLE,
        $SPOTLIGHTARTICLE,
        $DATECREATIONARTICLE,
        $AuteurObj,
        $CategorieObj;

    // -- Constructeur
    public function __construct() {
        // -- L'Appel au Constructeur se fait de façon automatique par la classe PDO
        // -- A chaque Construction nous allons récupérer des informations
        
        // -- Récupération de l'Auteur'
        $AuteurDb = new AuteurDb;
        $this->AuteurObj = $AuteurDb->fetchOne($this->getIDAUTEUR(), 'IDAUTEUR');

        // -- Récupération des Catégories
        $CategorieDb = new CategorieDb;
        $this->CategorieObj = $CategorieDb->fetchOne($this->getIDCATEGORIE(), 'IDCATEGORIE');
    }

    // -- Getters
    public function getIDARTICLE() {
        return $this->IDARTICLE;
    }

    public function getIDAUTEUR() {
        return $this->IDAUTEUR;
    }

    public function getIDCATEGORIE() {
        return $this->IDCATEGORIE;
    }

    public function getTITREARTICLE() {
        return $this->TITREARTICLE;
    }

    public function getCONTENUARTICLE() {
        return $this->CONTENUARTICLE;
    }

    public function getFEATUREDIMAGEARTICLE() {
        return $this->FEATUREDIMAGEARTICLE;
    }

    public function getSPECIALARTICLE() {
        return $this->SPECIALARTICLE;
    }

    public function getSPOTLIGHTARTICLE() {
        return $this->SPOTLIGHTARTICLE;
    }

    public function getDATECREATIONARTICLE() {
        return $this->DATECREATIONARTICLE;
    }

    public function getAuteurObj() {
        return $this->AuteurObj;
    }

    public function getCategorieObj() {
        return $this->CategorieObj;
    }

    public function generateURL() {
        return SITE_URL.'/public/article/'.$this->getIDARTICLE().'-'.$this->generateSlug($this->getTITREARTICLE()).'.html';
    }

    public function getAccroche() {
        # : http://stackoverflow.com/questions/4258557/limit-text-length-in-php-and-provide-read-more-link

        // strip tags to avoid breaking any html
        $string = strip_tags($this->getCONTENUARTICLE());

        if (strlen($string) > 170) {

            // truncate string
            $stringCut = substr($string, 0, 170);

            // make sure it ends in a word so assassinate doesn't become ass...
            $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
        }

        return $string;
    }

}