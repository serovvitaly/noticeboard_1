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
    
    
    /**
    * Перевод русского текста в транслит
    * 
    * @param mixed $st
    */
    public static function enstr($string)
    {
        //mb_http_input('UTF-8'); 
        //mb_http_output('UTF-8'); 
        //mb_internal_encoding("UTF-8");
        
        $string = str_replace(array('а','б','в','г','д','е','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ы','э','ь'), 
                              array('a','b','v','g','d','e','g','z','i','y','k','l','m','n','o','p','r','s','t','u','f','h','i','e',''), $string);
                              
        $string = str_replace(array('А','Б','В','Г','Д','Е','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ы','Э','Ь'), 
                              array('A','B','V','G','D','E','G','Z','I','Y','K','L','M','N','O','P','R','S','T','U','F','H','I','E',''), $string);
        
        $string = str_replace(array( 'ё', 'ц', 'ч', 'ш', 'щ',   'ю', 'я', 'Ё', 'Ц', 'Ч', 'Ш', 'Щ',   'Ю', 'Я' ),
                              array( 'yo','ts','ch','sh','shch','yu','ya','Yo','Ts','Ch','Sh','Shch','Yu','Ya'), $string);
        
        return $string;
    }
    
    
    
    public static function lower($string, $delimiter = '_')
    {
        return str_replace(' ', $delimiter, strtolower($string));
    }
    
}
