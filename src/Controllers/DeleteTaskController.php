<?php


namespace App\Controllers;

use App\Models\TasksModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class DeleteTaskController
{
    protected $model;
    protected $view;

    public function __construct(TasksModel $model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $this->model->deleteTask($args['id']);
        $currentLocation = $request->getHeader('HTTP_REFERER');
        return $response->withHeader('Location', $currentLocation);
    }

}