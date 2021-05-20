<?php


namespace App\Factories;

use Psr\Container\ContainerInterface;
use App\Models\TasksModel;

class TasksModelFactory
{
    public function __invoke(ContainerInterface $container): TasksModel
    {
        $db = $container->get('db');
        return new TasksModel($db);
    }
}