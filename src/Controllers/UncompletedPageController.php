<?php


namespace App\Controllers;

use App\Models\AddTask;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class UncompletedPageController
{
    protected $model;
    protected $view;

    public function __construct(AddTask $model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        var_dump($this->model->getTask());
        return $this->view->render($response, "index.php", $args);
    }

}