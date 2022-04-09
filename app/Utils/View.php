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
     */
    public static function render($view)
    {
        $contentView = self::getContentView($view);
        return $contentView;
    }
}
