<?php

namespace Application\Models\Db;
use Application\Models\Configuration\Configuration;
use PDO;

class DBFactory
{
  public static function PDOFactory()
  {

    $c = new Configuration;
    #$db = new \PDO('mysql:host='.$c->HOST.';dbname='.$c->DNAME.', '.$c->USERNAME.', '.$c->PASSWORD);
    $db = new PDO('mysql:host='.$c->HOST.';dbname='.$c->DBNAME.'', $c->USERNAME , $c->PASSWORD);
    #$db = new PDO('mysql:host=localhost;dbname=news', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $db;
  }
}