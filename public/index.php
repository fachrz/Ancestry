<?php
require_once __DIR__.'/../vendor/autoload.php';

// use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\RequestStack;
// use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel;
use Symfony\Component\Routing;

$request = Request::createFromGlobals();
// $requestStack = new RequestStack();
$routes = include __DIR__.'/../config/routes.php';


$context = new Routing\RequestContext();

$matcher = new Routing\Matcher\UrlMatcher($routes, $context);
$controllerResolver = new HttpKernel\Controller\ControllerResolver();
$argumentResolver = new HttpKernel\Controller\ArgumentResolver();

// $dispatcher = new EventDispatcher();
// $dispatcher->addSubscriber(new HttpKernel\EventListener\RouterListener($matcher, $requestStack));

$framework = new Core\Framework($matcher, $controllerResolver, $argumentResolver);

$response = $framework->handle($request);

$response->send();