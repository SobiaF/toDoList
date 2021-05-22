<?php


namespace App\Factories;


use App\Controllers\MarkCompletedController;
use Psr\Container\ContainerInterface;

class MarkCompletedControllerFactory
{
    public function __invoke(ContainerInterface $container): MarkCompletedController
    {
        $model = $container->get('TasksModel');
        return new MarkCompletedController($model);
    }
}