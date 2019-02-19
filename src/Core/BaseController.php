<?php
namespace Core;

use Core\Providers\TwigServiceProvider;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing;
use Symfony\Component\Routing\Generator\UrlGenerator;

class BaseController{

    private $config;
    private $view; 
    private $urlGenerator;

    public function __construct()
    {

        $this->loadConfig();
        
        $routes = include __DIR__.'/../../config/routes.php';
        $requestContext = new Routing\RequestContext();
        $context = $requestContext->setBaseUrl($this->config['baseUrl']);

        $this->urlGenerator = new UrlGenerator($routes, $context);

        $twig = new TwigServiceProvider($this->config['twig']);
        $this->view = $twig->provide(array(
            'urlGenerator' => $this->urlGenerator
        ));

    }

    /*
    * Twig Render Function
    */
    public function render($view, $data = [])
    {

        $body = $this->view->render($view, $data);

        return new Response($body);

    }


    /*
    * Function Response without twig Render
    */
    public function response($response)
    {

        return new Response($response);

    }

    /*
    * Redirect Function
    */
    public function redirect($location)
    {

        return new RedirectResponse($location);

    }

    /*
    * use this function with redirect
    */
    public function generateUrl($view)
    {
        return $this->urlGenerator->generate($view);
        
    }


    /*
    * Do Not Modified this please!!
    */
    private function loadConfig()
    {

        $this->config = include(__DIR__ . '/../../config/config.php');

    }

}


?>