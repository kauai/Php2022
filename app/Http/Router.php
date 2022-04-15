<?php
namespace App\Http;

class Router{

    /**
     * URL completa do projeto (RAIZ)
     * @var string 
     */
    private $url;
    
    /**
     * Prefixo de todas as rotas
     * @var string 
     */
    private $prefix = '';
    
    /**
     * Indice de rotas
     * @var array
     */
    private $routes = [];

    /**
     * Instancia de Request
     * @var Request
     */
    private $request;


    public function __construct($url)
    {
        $this->request = new Request;
        $this->url = $url;
        $this->setPrefix();
    }

    /**
     * Metodo responsavel por definir o prefixo das rotas
     * @var Request
     */
    public function setPrefix()
    {
        //Informaçoes da URL atual
        $parseUrl = parse_url($this->url);

        //Define o prefixo
        $this->prefix = $parseUrl['path'] ?? '';
    }


}