<?php
namespace App\Controller\Pages;
use App\Utils\View;

class Home{
    
    /**
     * Metodo responsavel por retornar o caminho [View] da Home
     * @return string
     */
    public static function getHome()
    {
        return View::render('pages/home',[
            'name' => "Teste de conteudo",
            'description' => "Mais um teste de conteudo",
            'site' => "www.conteudo.com.br"
        ]);
    }
}