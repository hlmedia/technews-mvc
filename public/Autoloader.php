<?php

class Autoloader {

    public static function register() {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    public static function autoload($class){
      //$nameSpace = explode('\\', $class);
      //print_r($nameSpace);
      //$nameSpace = array_map('strtolower', $nameSpace);
      //print_r($nameSpace);
      //$i = count($nameSpace) - 1;
      //$nameSpace[$i] = ucfirst($nameSpace[$i]);      
      //$class = implode('/', $nameSpace);
      //print_r($class);
      require '../'.$class.'.php';
    }

}