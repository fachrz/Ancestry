<?php
namespace Core;

use Core\Providers\TwigServiceProvider;
use Symfony\Component\HttpFoundation\Response;

class BaseController{
    private $config;
    private $view;
    private $model;

    public function __construct(){
        $this->loadConfig();
        
        $twig = new TwigServiceProvider($this->config['twig']);
        $this->view = $twig->provide();
        
    }

    public function render($view, $data = []){
        $body = $this->view->render($view, $data);

        return new Response($body);
    }

    private function loadConfig(){
        $this->config = include(__DIR__ . '/../../config/config.php');
    }

}


?>