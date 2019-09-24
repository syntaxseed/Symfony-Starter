<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class PageController extends BaseController
{
    public function index($name)
    {
        /* Examples:
         * // Logging:
         * $this->log->info('This is logged from PageController.');
         *
         * // Referring to a config value:
         * var_dump($this->getParameter('app.awesomevalue'));
         */

        return new Response(
            $this->view->render('index', [
                'name' => $name
            ])
        );
    }
}
