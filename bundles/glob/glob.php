<?php

/**
* 
*/

class Glob{

    
    protected static $_instance = NULL;
    
    protected $_store;
    
    
    protected static function _instance()
    {
        if (!self::$_instance) {
            $class = __CLASS__;
            self::$_instance = new $class;
        }
        
        return self::$_instance;
    }
    
    
    public static function set($name, $value)
    {
        self::_instance()->_store[$name] = $value;
        
        return self::_instance();
    } 
    

    public static function get($name)
    {
        $_store = self::_instance()->_store;
        
        if (isset($_store[$name])) {
            return $_store[$name];
        }
        
        return NULL;
    }
    
}