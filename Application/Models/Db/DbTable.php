<?php

namespace Application\Models\Db;
use Application\Models\Db\DBFactory;

abstract class DbTable extends DBFactory
{
  
    // -- Nom de la Table
    protected $_table;

    // -- Clé Primaire
    protected $_primary;

    // -- Class To Map
    protected $_classToMap;

    private $_db;

    public function __construct() {
        $this->_db = DBFactory::PDOFactory();
    }

    public function getDbAdapter() {
        return $this->_db;
    }

    public function fetchAll($where = '', $orderby = '', $limit = '', $offset = '') {

        $sql = "SELECT * FROM ".$this->_table;
        
        if ($where != '') {
            $sql .= ' WHERE '.$where;
        }

        if ($orderby != '') {
            $sql .= ' ORDER BY '.$orderby;
        }

        if ($limit != '') {
            $sql .= ' LIMIT '.(int) $limit;
        }

        if ($offset != '') {
            $sql .= ' OFFSET '.(int) $offset;
        }

        $sth = $this->_db->prepare($sql);

        $sth->execute();
        # : http://stackoverflow.com/questions/7914914/pdo-fetch-class-and-namespacing-issue
        return $sth->fetchAll(\PDO::FETCH_CLASS,  $this->_classToMap);

    }

    public function fetchOne($id, $column = 'id') {
        
        $sth = $this->_db->prepare('SELECT * FROM '.$this->_table.' WHERE '.$column.' = :id');
        $sth->bindValue(':id', (int) $id, \PDO::PARAM_INT);
        $sth->execute();

        # : http://php.net/manual/fr/pdostatement.fetch.php
        $sth->setFetchMode(\PDO::FETCH_CLASS,  $this->_classToMap);
        return $sth->fetch();
    }

}