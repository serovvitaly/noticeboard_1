<?php
/**
* Набор всяких полезных функций
*/

class Helper {
    
    
    /**
    * Выводит список сообщений в стиле Twitter Bootstrap alert
    * 
    * @param mixed $msgs - многомерный массив сообщений
    */
    public static function msg($msgs)
    {
        $output = NULL;
        
        if (is_array($msgs) AND count($msgs) > 0) {
            foreach ($msgs AS $msg) {
                
                if ( isset($msg['text']) AND !empty($msg['text']) ) {
                    $type = (isset($msg['type']) AND in_array($msg['type'], array('danger','error','info','success'))) ? ' alert-' . $msg['type'] : NULL;
                    $title = isset($msg['title']) ? "<strong>{$msg['title']}</strong> " : NULL;
                    
                    $output .= '<div class="alert' . $type . ' fade in"><button type="button" class="close" data-dismiss="alert">×</button>';
                    $output .= $title . $msg['text'];
                    $output .= '</div>';
                }
            }
        }
        
        return $output;
    }
    
    
    
    public static function get($name, $default = NULL)
    {
        return isset($_GET[$name]) ? $_GET[$name] : $default;
    }
    
    public static function post($name, $default = NULL)
    {
        return isset($_POST[$name]) ? $_POST[$name] : $default;
    }
    
}
