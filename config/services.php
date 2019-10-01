<?php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Factories\TemplateFactory;
use Syntaxseed\Templateseed\TemplateSeed;

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
/*
use function Symfony\Component\DependencyInjection\Loader\Configurator\inLine;
use function Symfony\Component\DependencyInjection\Loader\Configurator\ref;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;
use Symfony\Component\Asset\Context\RequestStackContext;
use Symfony\Component\Asset\PathPackage;
use Symfony\Component\HttpFoundation\RequestStack;
*/

return function(ContainerConfigurator $configurator) {

    $services = $configurator->services()
        ->defaults()
        ->autowire()      // Automatically injects dependencies in your services.
        ->autoconfigure() // Automatically registers your services as commands, event subscribers, etc.
    ;

    $services->set(TemplateSeed::class)
        ->factory([TemplateFactory::class, 'createTemplateSeed'])
        ->arg('$templatesPath', '%app.templates.path%')
        ->arg('$cacheEnabled', '%app.templates.cache.enabled%')
        ->arg('$cachePath', '%app.templates.cache.path%')
        ->arg('$cacheExpiry', '%app.templates.cache.ttl%')
    ;

    /*
    // Experimenting...

    $services->set('assets.path_package', PathPackage::class)
    ->arg('$basePath', '/')
    ->arg('$versionStrategy', '@assets.empty_version_strategy')
    ->arg('$context', '@request_stack');


    $services->set(TemplateSeed::class)
            ->arg('$templatesPath', '%app.templates.path%')
            ->arg('$cacheEnabled', '%app.templates.caching%')
            ->arg('$cachePath', '%app.templates.cachepath%')
            ->call('setGlobalParams', [[
                '_asset' => inline('string')
                    ->factory(['Closure', 'fromCallable'])
                    ->args([
                        [ref('assets.path_package'), 'getUrl']
                    ])
                ]
            ]);
    */


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
