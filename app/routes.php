<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/',  'UncompletedPageController');
    $app->post('/add', 'AddTaskController');
    $app->get('/mark/{id}', 'MarkCompletedController');
    $app->get('/done',  'CompletedPageController');
    $app->get('/delete/{id}',  'DeleteTaskController');
    $app->get('/edit/{id}', 'EditTaskController');
    $app->post('/edit/{id}', 'SubmitEditController');
};