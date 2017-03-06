<?php
namespace Application\Models\Db;
use Application\Models\Db\ORM;
use PDO;

/* --
 * Le fait de d�clarer des propri�t�s ou des m�thodes comme 
 * statiques vous permet d'y acc�der sans avoir besoin d'instancier 
 * la classe. On ne peut acc�der � une propri�t� d�clar�e comme statique 
 * avec l'objet instanci� d'une classe (bien que ce soit possible pour 
 * une m�thode statique).
 * Docs : http://php.net/manual/fr/language.oop5.static.php
 */
class DBFactory
{
    public static function PDOFactory() {
        
        // -- Cr�ation d'une Connexion PDO
        $pdo = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME, DBUSERNAME, DBPASSWORD);
        
        // : http://php.net/manual/fr/pdo.error-handling.php
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $pdo;
    }
    
    public static function start() {
        // -- Initialisation de Idiorm
        ORM::configure('mysql:host='.DBHOST.';dbname='.DBNAME);
        ORM::configure('username', DBUSERNAME);
        ORM::configure('password', DBPASSWORD);

        // -- Configuration de la cl� primaire de chaque table
        // : Cette configuration n'est n�cessaire que si les cl� primaires sont diff�rentes de 'id'
        ORM::configure('id_column_overrides', array(
            'article'       => 'IDARTICLE',
            'auteur'        => 'IDAUTEUR',
            'categorie'     => 'IDCATEGORIE',
            'tags'          => 'IDTAGS',
            'view_articles' => 'IDARTICLE',
            'view_tags'     => 'IDARTICLE'
        ));
    }
    
}

















