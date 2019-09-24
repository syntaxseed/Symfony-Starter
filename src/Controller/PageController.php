<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class PageController extends BaseController
{
    public function index($name)
    {
        $this->log->info('This is logged from HelloController.');

        //var_dump($this->getParameter('app.awesomevalue'));

        return new Response(
            $this->view->render('index', ['name' => $name])
        );
    }
}
