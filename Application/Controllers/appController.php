<?php
namespace Application\Controllers;

use Application\Models\News\CategorieDb;
use Application\Models\News\ArticleDb;
use Application\Models\Configuration\Shortcut;

class appController
{
    // -- Utilisation du Trait Shortcut, � ne pas confondre avec le use pour le namespace.
    use Shortcut;
    
    private $_viewparams;
    
    /**
     * Permet de g�n�rer l'affichage de la vue pass�e en param�tres
     * @param String $view Vue � afficher
     */
    protected function render($view, $viewparam = '') {
        
        // -- R�cup�ration et Affectation des Param�tres de la Vue
        $this->_viewparams = $viewparam;
        
        // -- Affichage de l'En-Tete
        require(HEADER_SITE);
            
            if( file_exists(VIEW_SITE.'/'.$view.'.php') ) {
                // -- Inclusion de la Vue
                include_once VIEW_SITE.'/'.$view.'.php'; // news/index
            } else {
                $this->setParams(['erreur' => 'Le fichier de la vue est introuvable']);
                include_once VIEW_SITE.'/errors/404.php';
            }
        
        // -- Affichage du Pied de Page
        require(FOOTER_SITE);
    }
    
    /**
     * R�cup�re les Param�tres pour la Vue en Cours.
     * @return string
     */
    public function getParams() {
        return $this->_viewparams;
    }
    
    public function setParams($params) {
        $this->_viewparams = $params;
    }
    
    /**
     * R�cup�re et Retourne les Cat�gories dans la BDD
     */
    public function generateCategoryMenu() {
        
        $db = new CategorieDb();
        return $db->fetchAll();
        
    }
    
    /**
     * R�cup�re et Retourne les 5 Derniers Articles depuis la BDD
     */
    public function getLastFiveArticle() {
        // -- Connexion � la BDD
        $ArticleDb = new ArticleDb();
        return $ArticleDb->fetchAll(null, 'DATECREATIONARTICLE DESC', 5);
    }
    
    /**
     * R�cup�re et Retourne les articles en avant dans la BDD
     */
    public function getSpecialArticles() {
        // -- Connexion � la BDD
        $ArticleDb = new ArticleDb();
        $where = 'SPECIALARTICLE = 1';
        return $ArticleDb->fetchAll($where);
    }
    
    /**
     * V�rifie l'existance de valeur dans GET['action'];
     * @return string|unknown
     */
    public function getAction() {
        if(empty($_GET['action'])) {
           return 'accueil';
        }
        return $_GET['action'];
    }
    
    /**
     * Retourne l'URL Compl�te d'un Article
     * @param Entier $IDARTICLE
     * @param String $TITREARTICLE
     */
    public function generateArticleUrl($IDARTICLE, $TITREARTICLE) {
        # Format SEO : R��criture URL
        # public/article/[idarticle]-[slug].html ou idarticle = $_GET['idarticle'];
        return PUBLIC_URL.'/article/'.$IDARTICLE.'-'.$this->generateSlug($TITREARTICLE).'.html';
    }
    
    /**
     * V�rifie si $_POST contient des valeurs
     */
    public function isPost() {
        if(empty($_POST)) {
            return false;
        } else {
            return true;
        }
    }
    
    /**
     * Redirection vers une nouvelle route
     * @param unknown $route
     */
    public function redirect($route) {
        header('Location: '.$route);
    }
    
}





















