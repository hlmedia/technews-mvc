<?php
namespace Application\Controllers;

use Application\Models\Db\DBFactory;
use Application\Models\Db\ORM;

class adminController extends \Application\Controllers\appController
{
    public function connexion() {
        
        $this->render('admin/connexion');
    }
    
    public function inscription() {
    
        $this->render('admin/inscription');
    }
    
    public function addcategorie() {
        
        if($this->isPost()) {
            // -- Traitement POST
            // -- R�cup�ration des Donn�es
            $LIBELLECATEGORIE = $_POST['LIBELLECATEGORIE'];
            
            // -- V�rification des Donn�es
            
            // -- Insertion en BDD
            DBFactory::start();
            $categorie = ORM::for_table('categorie')->create();
            $categorie->LIBELLECATEGORIE = $LIBELLECATEGORIE;
            $categorie->ROUTECATEGORIE   = 'news/'.strtolower($LIBELLECATEGORIE);
            $categorie->save();
            
            // -- Redirection
            $this->redirect(PUBLIC_URL);
        }
        
        $this->render('admin/categorie');
    }
}

