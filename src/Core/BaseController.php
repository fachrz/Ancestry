<?php
namespace Core;

use Core\Providers\TwigServiceProvider;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;
use Symfony\Component\Routing\Generator\UrlGenerator;

class BaseController{
    private $config;
    private $view; 
    private $urlGenerator;

    public function __construct(){
        $this->loadConfig();
        
        $routes = include __DIR__.'/../../config/routes.php';
        $this->urlGenerator = new UrlGenerator($routes, new Routing\RequestContext());

        $twig = new TwigServiceProvider($this->config['twig']);
        $this->view = $twig->provide(array(
            'urlGenerator' => $this->urlGenerator
        ));
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