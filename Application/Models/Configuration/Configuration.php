<?php
namespace Application\Models\Configuration;
use Application\Models\Configuration\Shortcut;

/**
 * Permet de Définir la Configuration de Base du Site Internet
 * Editer de Préférence avec un Editeur Encodage UTF-8
 */
class Configuration
{

    // -- Utilisation de Shortcut;
    use Shortcut;
    
	// -- Paramètres du Site
    public $NOM_SITE        	= "TechNews";
    public $ADRESSE_SITE    	= "ZI LES MANGLES - LOTISSEMENT LES MANGLES ACAJOU";
    public $CP_SITE         	= "97232";
    public $VILLE_SITE      	= "Le Lamentin";
    public $PAYS_SITE       	= "Martinique";
    public $LOGO_SITE       	= "logotech.png";
    public $CGV_SITE			= "#";
    public $MENTION_SITE		= "#";
    public $CNIL_SITE		    = "Ce site internet fait l'objet d'une d&eacute;claration aupr&egrave;s de la CNIL n&deg;1988380V0";
    public $TEL_SITE			= "05 96 42 68 60";
	
	// -- Paramètres du Profil Public
	public $PRENOM			= "Hugo";
	public $NOM				= "LIEGEARD";
	public $ROLEPROFIL		= "G&eacute;rant";
	public $EMAILPROFIL		= "contact@music-son.com";
    public $SIRET_SITE      = "478 871 619 00019";
	
	// -- Configuration de la BDD
	public $HOST 			= "localhost";
	public $DBNAME 		    = "news";
	public $USERNAME 		= "root";
	public $PASSWORD 		= "";

}

