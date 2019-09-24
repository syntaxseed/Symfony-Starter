<?php
use App\Controller\PageController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('index', '/{name}')
        ->controller([PageController::class, 'index'])
        ->methods(['GET'])
        ->defaults(['name' => 'Symfony Starter'])
    ;
};
