<?php
namespace Application\Models\Configuration;

/**
 * Les traits sont un m�canisme de r�utilisation de code dans un langage 
 * � h�ritage simple tel que PHP. Un trait tente de r�duire certaines limites 
 * de l'h�ritage simple, en autorisant le d�veloppeur � r�utiliser un certain 
 * nombre de m�thodes dans des classes ind�pendantes. 
 * 
 * La s�mantique entre les classes et les traits r�duit la complexit� et 
 * �vite les probl�mes typiques de l'h�ritage multiple et des Mixins
 * 
 * Un trait est semblable � une classe, mais il ne sert qu'� grouper 
 * des fonctionnalit�s d'une mani�re int�ressante. 
 * Il n'est pas possible d'instancier un Trait en lui-m�me. 
 * C'est un ajout � l'h�ritage traditionnel, qui autorise la composition 
 * horizontale de comportements, c'est � dire l'utilisation de m�thodes 
 * de classe sans besoin d'h�ritage.
 * 
 * @author Hugo LIEGEARD
 *
 */

trait Shortcut
{
    /**
     * Cr�er un SLUG � partir du Titre d'un Article
     * http://stackoverflow.com/questions/2955251/php-function-to-make-slug-url-string
     */
    public function generateSlug($text) {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        
        // trim
        $text = trim($text, '-');
        
        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);
        
        // lowercase
        $text = strtolower($text);
        
        if (empty($text)) {
            return 'n-a';
        }
        
        return $text;
    }
}

