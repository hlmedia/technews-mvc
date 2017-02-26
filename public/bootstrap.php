<?php

# Initialisation de la Session
session_start();

# Affichage des Errors DEV
ini_set("display_errors", 1); 

# Racine du site Internet
# Nécessite PHP 7.0 +
define('RACINE_SITE', dirname(__FILE__, 2));

#URL Relative du site
define('SITE_URL', '/POO/technews');

# En-tete du site
define('HEADER_SITE', RACINE_SITE.'/Application/layout/header.inc.php');

# Pied de page du site
define('FOOTER_SITE', RACINE_SITE.'/Application/layout/footer.inc.php');

# Barre Lateral
define('SIDEBAR_SITE', RACINE_SITE.'/Application/layout/sidebar.inc.php');

# Les Vues
define('VIEW_SITE', RACINE_SITE.'/Application/views');

# Autoloader
require_once'Autoloader.php';
Autoloader::register();

?>