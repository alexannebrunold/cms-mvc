<?php
class Autoloader{

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($class){
        if(strpos($class, "Model") !== false){
            require 'model/' . $class . '.php';
        } else {
            require 'controller/' . strtolower($class) . 'Controller' . '.php';
        }
    }

}