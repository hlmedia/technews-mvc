<?php

namespace Application\Models\News;
use Application\Models\Db\DbTable;

class TagsDb extends DbTable
{
  
    // -- Nom de la Table
    protected $_table = 'tags';

    // -- Clé Primaire
    protected $_primary = 'IDTAGS';
    
    // -- Class à Mapper
    protected $_classToMap  = __NAMESPACE__ . '\\Tags';
    
}