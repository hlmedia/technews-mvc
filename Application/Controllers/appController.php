<?php

namespace Application\Controllers;
use Application\Models\News\CategorieDb;
use Application\Models\News\ArticleDb;
use Application\Models\News\TagsDb;

class appController {

    private $_viewparams;

    /**
    *   Rendu de la Vue
    */
    public function render($view, $viewparams='') {

        // -- Récupération des Paramètres de la Vue
        $this->_viewparams = $viewparams;

        // -- Affichage de l'En-Tete
        require(HEADER_SITE);

            // -- Inclusion de la Vue
            include_once VIEW_SITE.'/'.$view.'.php';

        // -- Affichage du Pied de Page
        require(FOOTER_SITE);
    }

    /**
    *   Affichage du Menu
    */
    private function generateCategoryMenu() {
        $CategorieModel = new CategorieDb;
        return $CategorieModel->fetchAll();
    }

    /**
    *   Récupération des derniers articles
    */
    private function getLastArticles() {
         // -- Connexion à la BDD
        $ArticleDb = new ArticleDb;

        // -- Récupération des 5 Derniers Articles
        # fetchAll($where = '', $orderby = '', $limit = '', $offset = '')
        return $ArticleDb->fetchAll(null, null, 4);
    }

   /**
    *   Récupération des articles en avant
    */
    private function getSpecialArticles() {
         // -- Connexion à la BDD
        $ArticleDb = new ArticleDb;

        // -- Récupération des 5 Derniers Articles
        # fetchAll($where = '', $orderby = '', $limit = '', $offset = '')
        $where = 'SPECIALARTICLE = 1';
        return $ArticleDb->fetchAll($where);
    }

   /**
    *   Récupération des tags
    */
    private function getTags() {
         // -- Connexion à la BDD
        $TagsDb = new TagsDb;
        return $TagsDb->fetchAll();
    }

    public function getParams() {
        return $this->_viewparams;
    }

}