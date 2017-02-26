<?php

namespace Application\Models\News;
use Application\Models\Db\DbTable;

class AuteurDb extends DbTable
{
  
    // -- Nom de la Table
    protected $_table = 'auteur';

    // -- Clé Primaire
    protected $_primary = 'IDAUTEUR';
    
    // -- Class à Mapper
    protected $_classToMap  = __NAMESPACE__ . '\\Auteur';
    
}