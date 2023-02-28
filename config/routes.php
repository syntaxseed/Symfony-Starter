<?php
use App\Controller\PageController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {



    $routes->add('publish', '/publish')
        ->controller([PageController::class, 'publish'])
        ->methods(['GET']);



    $routes->add('test', '/{name}')
        ->controller([PageController::class, 'index'])
        ->methods(['GET'])
        ->defaults(['name' => 'Symfony Starter']);



};
