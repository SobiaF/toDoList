<?php


namespace App\Controllers;

use App\Models\TasksModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class AddTaskController
{
    protected $model;

    public function __construct(TasksModel $model)
    {
        $this->model = $model;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        // Get the name of the task out of the $request (getParsedBody)
        $task = $request->getParsedBody();
        // Take that name, and give it to the add method on your TasksModel
        $this->model->addTask($task['addTaskHere']);
        // Return a redirect to send the user back to the page they came from
        return $response->withHeader('Location', '/');
    }

}