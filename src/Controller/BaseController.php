<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Syntaxseed\Templateseed\TemplateSeed;
use Psr\Log\LoggerInterface;

class BaseController extends AbstractController
{
    protected $view;
    protected $log;

    public function __construct(TemplateSeed $seed, LoggerInterface $logger)
    {
        // Set up services used by all controllers.
        $this->view = $seed;
        $this->log = $logger;
    }
}
