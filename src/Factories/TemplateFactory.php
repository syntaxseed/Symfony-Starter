<?php
namespace App\Factories;

use Syntaxseed\Templateseed\TemplateSeed;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;
use Symfony\Component\Asset\Context\RequestStackContext;
use Symfony\Component\Asset\PathPackage;
use Symfony\Component\HttpFoundation\RequestStack;

class TemplateFactory
{
    public static function createTemplateSeed(RequestStack $request_stack, string $templatesPath, string $cacheEnabled, string $cachePath)
    {
        $templateSeed = new TemplateSeed(
            $templatesPath,
            $cacheEnabled,
            $cachePath
        );

        // Set up a callable function that can be used in templates to generate asset urls.
        // Uses Symfony's Asset package.
        $assetsManager =  new PathPackage(
            '/',
            new EmptyVersionStrategy(),
            new RequestStackContext($request_stack)
        );

        $assetCallable = function($assetPath) use ($assetsManager){
            return $assetsManager->getUrl($assetPath);
        };

        // Pass some parameters as accessible in ALL templates.
        $templateSeed->setGlobalParams([
            '_asset'=>$assetCallable
        ]);

        return $templateSeed;
    }
}
