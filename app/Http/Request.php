<?php

namespace App\Http;

class Request{

    /**
     * Metodo http da requisiçao
     * @var string
     */
    private $httpMethod;

    /**
     * Uri da página
     * @var string
     */
    private $uri;

    /**
     * Parametros da URL [$_GET]
     * @var array
     */
    private $queryParams = [];

    /**
     * variaveis recebdias no post da pagina [$_POST]
     * @var array
     */
    private $postVars = [];

    /**
     * Cabeçalho da requisição
     * @var array
     */
    private $header = [];

    public function __construct()
    {
        $this->queryParams = $_GET ?? [];
        $this->postVars = $_POST ?? [];
        $this->header = getallHeaders();
        $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri = $_SERVER['REQUEST_URI'] ?? '';
    }

    /**
     * Retorna metodo Http
     * @return string
     */
    public function getHttpMethod()
    {
        return $this->httpMethod;
    }
   
    /**
     * Retorna uri da nossa requisiçao
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }
    
    /**
     * Retorna os headers da requisição
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Retorna os parametros da url da requisição
     * @return array
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

     /**
     * Retorna os parametros da url da requisição
     * @return array
     */
    public function getPostVars()
    {
        return $this->postVars;
    }


}