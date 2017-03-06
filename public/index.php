<?php

use Application\Controllers\frontController;

/**
 *  Nous sommes ici sur le point d'entr�e de notre Application.
 *  En MVC c'est ce que l'on appel : un Controleur Frontal.
 *  L'ensemble des actions de notre site internet passera uniquement par ce fichier. (Controleur)
 *  Il a pour mission de transferer au bon controleur la demande de l'utilisateur.
 *  -------------
 *  Dans un Framework et en MVC nous utilisons la puissance de la r��criture des URLs via la cr�ation d'un fichier .htaccess
 */

// -- Initialisation du Site
require 'bootstrap.php';

$frontController = new frontController;
$frontController->run($_GET);