<?php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Factories\TemplateFactory;
use Syntaxseed\Templateseed\TemplateSeed;

return function(ContainerConfigurator $configurator) {

    $services = $configurator->services()
        ->defaults()
        ->autowire()      // Automatically injects dependencies in your services.
        ->autoconfigure() // Automatically registers your services as commands, event subscribers, etc.
    ;

    $services->set(TemplateSeed::class)
        ->factory([TemplateFactory::class, 'createTemplateSeed'])
        ->arg('$templatesPath', '%app.templates.path%')
        ->arg('$cacheEnabled', '%app.templates.caching%')
        ->arg('$cachePath', '%app.templates.cachepath%')
    ;

    /*
    // Example without factory:
    $services->set(TemplateSeed::class)
        ->arg('$templatesPath', __DIR__.'/../templates/')
        ->arg('$cacheEnabled', false)
        ->arg('$cachePath', __DIR__.'/../var/cache/templates/') // Must be set if caching is ever used.
        ->call('setGlobalParams', [[
            'test'=>123
            ]])
    ;
    */
};
