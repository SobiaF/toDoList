<?php


namespace App\Controllers;


use App\Models\TasksModel;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class MarkCompletedController
{
    protected $model;

    public function __construct(TasksModel $model)
    {
        $this->model = $model;
    }

    public function __invoke(Request $request, Response $response, $args): Response
    {
        $this->model->markCompleted($args['id']);
        return $response->withHeader('Location', '/');
    }
}