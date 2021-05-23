<?php


namespace App\Factories;


use App\Controllers\DeleteTaskController;
use Psr\Container\ContainerInterface;

class DeleteTaskControllerFactory
{
    public function __invoke(ContainerInterface $container): DeleteTaskController
    {
        $model = $container->get('TasksModel');
        $view = $container->get('renderer');
        return new DeleteTaskController($model, $view);
    }
}