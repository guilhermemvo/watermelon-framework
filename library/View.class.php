<?php

/**
 * Description of View
 *
 * @author gmoliveira
 */
class View {
    
    public static $params;

    public static function output($view) {
        if (!empty(self::$params)) {
            extract(self::$params,EXTR_OVERWRITE);
        }
        
        include TEMPLATE_PATH . $view . '.php';
    }
    
    public static function setParams($array) {
        
        self::$params = $array;
        
    }
    
}
?>
