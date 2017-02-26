<?php

namespace Application\Models\News;
use Application\Models\Db\DbTable;

class ArticleDb extends DbTable
{
  
    // -- Nom de la Table
    protected $_table = 'article';

    // -- Clé Primaire
    protected $_primary = 'IDARTICLE';
    
    // -- Class à Mapper
    protected $_classToMap  = __NAMESPACE__ . '\\Article';

    /* SELECT  article.IDARTICLE, article.IDAUTEUR, article.IDCATEGORIE, categorie.LIBELLECATEGORIE, 
		article.TITREARTICLE, article.CONTENUARTICLE, article.FEATUREDIMAGEARTICLE, article.SPECIALARTICLE,
        article.SPOTLIGHTARTICLE, article.DATECREATIONARTICLE, auteur.IDAUTEUR, auteur.NOMAUTEUR, auteur.PRENOMAUTEUR, auteur.EMAILAUTEUR
        
	FROM article, auteur, categorie
	WHERE article.IDAUTEUR = auteur.IDAUTEUR
    AND article.IDCATEGORIE = categorie.IDCATEGORIE */
    
}