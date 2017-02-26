<?php

namespace Application\Models\News;
use Application\Models\Db\DbTable;

class CategorieDb extends DbTable
{
  
    // -- Nom de la Table
    protected $_table = 'categorie';

    // -- Clé Primaire
    protected $_primary = 'IDCATEGORIE';
    
    // -- Class à Mapper
    protected $_classToMap  = __NAMESPACE__ . '\\Categorie';
    
}