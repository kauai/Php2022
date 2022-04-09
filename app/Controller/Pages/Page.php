<?php
namespace App\Controller\Pages;
use App\Utils\View;

class Page{

    /** 
    * Metodo responsavel por renderizar a view 
    * @return string
    **/
    private static function getHeader():string
    {
        return View::render('pages/includes/Header');
    }
    
    /** 
    * Metodo responsavel por renderizar a view 
    * @return string
    */
    private static function getFooter():string
    {
        return View::render('pages/includes/Footer');
    }
    
    /**
     * Metodo responsavel por retornar o caminho [View] Generi Page
     * @return string
     */
    public static function getPage($title,$content)
    {
        return View::render('pages/page',[
            'title' => $title,
            'content' => $content,
            'header' => self::getHeader(),
            'footer' => self::getFooter()
        ]);
    }
}