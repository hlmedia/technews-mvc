<?php

use Application\Controllers\frontController;

/* -- 

Nous sommes ici sur le point d'entrée de notre Application.
En MVC c'est ce que l'on appel un Controleur Frontal.
L'ensemble des actions de notre site internet passera uniquement par ce fichier (Controlleur)
Il a pour mission de transferer au bon controlleur la demande de l'utilisateur.
--------------------
Dans un Framework et en MVC nous utilisons la puissance de la réécriture des URLs via la création d'un fichier .htaccess

-- */

// -- Initialisation du Site
require('bootstrap.php');

// -- Affichage de l'En-Tete
//require(HEADER_SITE);

// -- Affichage du Contenu du Site.
$frontController = new frontController($_GET);

// -- Affichage du Pied de Page
//require(FOOTER_SITE);