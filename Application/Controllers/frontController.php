<?php

namespace Application\Controllers;

class frontController extends \Application\Controllers\appController {

    public function __construct($params) {
        //print_r($params);
        
        if(empty($params)) {
            $params['controller'] = 'news';
            $params['action'] = 'index';
        }

        // -- Récupération des paramètres
        $controller = 'Application\Controllers\\'.$params['controller'].'Controller';
        $action     = $params['action'];

        // -- Tentative de branchement
        $controllerFile = RACINE_SITE.'\\'.$controller.'.php';
        if( file_exists($controllerFile) ) {

            // -- Création d'un Objet du Controller
            $obj = new $controller;

            // -- Vérification de l'existance de l'action
            if( method_exists($obj, $action) ){
                
                    // -- Execution de l'action
                    $obj->$action();
            
            } else {
                // -- Redirection 404 si la vue n'existe pas.
                $this->render('errors/404', 'Aucune Vue Correspondante');
            }

        } else {
            // -- Redirection 404 si le controlleur n'existe pas.
            $this->render('errors/404','Aucun Controleur correspondant.');
        }
        
    }

}