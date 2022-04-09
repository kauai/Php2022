<?php 

namespace App\Utils;

class View{

    /**
     * Metodo responsavel por retornar o coteudo de uma view
     * @param string $view
     * @return string
     */
    private static function getContentView($view)
    {
        $file = __DIR__."/../../resources/view/".$view.".html";
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * Metodo responsavel por retornar o coteudo renderizado de uma view
     * @param string $view
     * @param array $vars 
     */
    public static function render($view,array $vars = [])
    {
        $contentView = self::getContentView($view);
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return "{{{$item}}}";
        },$keys);
        
        return str_replace($keys,array_values($vars),$contentView);
    }
}
