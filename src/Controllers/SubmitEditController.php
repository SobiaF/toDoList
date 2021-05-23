<?php


namespace App\Controllers;

use App\Models\TasksModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class SubmitEditController
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
        $task = $request->getParsedBody();
        $id = $args['id'];
        $this->model->updateTask($id, $task['newTaskName']);
        $tasks = $this->model->getUncompletedTasks();
        return $this->view->render($response, "index.php", ['tasks'=>$tasks]);
    }
}