<?php

namespace Application\Controllers;
use Application\Controllers\appController;
use Application\Models\Configuration\Shortcut;
use Application\Models\News\ArticleDb;

class newsController extends appController {

    // -- Utilisation de Shortcut;
    use Shortcut;

    // -- Page d'accueil
    public function index() {

        // -- Connexion à la BDD
        $ArticleDb = new ArticleDb;

        // -- Récupération des Articles de la Catégorie
        $articles  = $ArticleDb->fetchAll();
        $spotlight = $ArticleDb->fetchAll('SPOTLIGHTARTICLE = 1');

        // -- Include de la Vue
        $this->setTITRE("TechNews - Technology Magazine");
        $this->render('news/index',['articles' => $articles, 'categorie' => 'Accueil', 'spotlight' => $spotlight]);
    }

    // -- Page Business
    public function business() {

        // -- Connexion à la BDD
        $ArticleDb = new ArticleDb;

        // -- Récupération des Articles de la Catégorie
        $where = 'IDCATEGORIE = 2';
        $articles = $ArticleDb->fetchAll($where);

        // -- Include de la Vue
        $this->setTITRE("TechNews | Business");
        $this->render('news/category', ['articles' => $articles, 'categorie' => 'Business']);
    }

    // -- Page Computing
    public function computing() {
        // -- Connexion à la BDD
        $ArticleDb = new ArticleDb;

        // -- Récupération des Articles de la Catégorie
        $where = 'IDCATEGORIE = 3';
        $articles = $ArticleDb->fetchAll($where);

        // -- Include de la Vue
        $this->setTITRE("TechNews | Computing");
        $this->render('news/category', ['articles' => $articles, 'categorie' => 'Computing']);
    }

    // -- Page Tech
    public function tech() {
        // -- Connexion à la BDD
        $ArticleDb = new ArticleDb;

        // -- Récupération des Articles de la Catégorie
        $where = 'IDCATEGORIE = 4';
        $articles = $ArticleDb->fetchAll($where);

        // -- Include de la Vue
        $this->setTITRE("TechNews | Tech");
        $this->render('news/category', ['articles' => $articles, 'categorie' => 'Tech']);
    }

    // -- Page Article
    public function article() {
        // -- Connexion à la BDD
        $ArticleDb = new ArticleDb;

       // -- Récupération de l'article
       $idarticle = $_GET['idarticle'];
       $article = $ArticleDb->fetchOne($idarticle, 'IDARTICLE');

       // -- Récupération de 3 suggestions d'article de la meme catégorie

       $where   = 'IDCATEGORIE = '.$article->getIDCATEGORIE();
       $orderby = 'IDARTICLE DESC';
       $limit   = 3;

       $suggestions = $ArticleDb->fetchAll($where, $orderby, $limit);

        // -- Include de la Vue
        $this->setTITRE("TechNews | Tech");
        $this->render('news/article', ['article' => $article, 'suggestions' => $suggestions]);
    }

}