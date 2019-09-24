<?php
use Syntaxseed\Templateseed\TemplateSeed;;

$container->autowire(TemplateSeed::class)
    ->setAutoconfigured(true)
    ->setPublic(false)
    ->setArgument('$templatesPath', __DIR__.'/../templates/')
    ;
