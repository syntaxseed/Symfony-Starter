<?php
/* Application specific configuration.
 * Not related to Symfony framework.
 * To reference a config value from any other configuration file,
 * wrap the parameter name in two % (e.g. %app.admin_email%).
 */

/*
$container->setParameter('app.awesomevalue', 'This is a value.');
*/

/*
 * Path to template files (with trailing slash).
 */
$container->setParameter('app.templates.path', __DIR__.'/../../templates/');

/*
 * Whether to turn on caching by default (true/false).
 */
$container->setParameter('app.templates.caching', false);

/*
 * Path to template cache directory (with trailing slash).
 * Required if caching is ever used..
 */
$container->setParameter('app.templates.cachepath', __DIR__.'/../../var/cache/templates/');
