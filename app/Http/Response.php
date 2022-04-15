<?php 

namespace App\Http;

class Response{

    /**
    * Codigo do status http
    * @var integer
    */
    private $httpCode = 200;
   
    /**
    * Cabeçalho do response
    * @var array
    */
    private $headers = [];

    /**
    * Tipo de conteudo que esta sendo retornado
    * @var array
    */
    private $contentType = 'text/html';
   
    /**
    * Conteudo do response
    * @var mixed
    */
    private $content;


    public function __construct($httpCode,$content,$contentType = 'text/html')
    {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->setContentType($contentType);
    }

    /**
    * Metodo responsavel por alterar o contenType do response
    * @param string $contentType
    */
    public function setContentType(string $contentType)
    {
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }
   
    /**
    * Metodo responsável por adicionar um registro no cabeçalho de response
    * @param string $contentType
    */
    public function addHeader($key,$value)
    {
        $this->headers[$key] = $value;
    }
   
    /**
    * Metodo responsável por enviar os headers para o navegador
    * @param string $contentType
    */
    public function sendHeaders()
    {
        //STATUS
        http_response_code($this->httpCode);

        //Enviar header
        foreach($this->headers as $key=>$value) {
            header($key.': '.$value);
        }
    }

    /**
    * Metodo responsável por enviar a resposta para o usuario
    */
    public function sendResponse()
    {
        //Envia os headers
        $this->sendHeaders();

        //Inprime o conteudo
        switch($this->contentType):
            case 'text/html':
                echo $this->content;
                exit;
        endswitch;
    }
}