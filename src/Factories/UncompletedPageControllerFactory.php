<?php



namespace App\Factories;

use App\Controllers\UncompletedPageController;
use Psr\Container\ContainerInterface;

class UncompletedPageControllerFactory
{
    public function __invoke(ContainerInterface $container): \App\Factories\UncompletedPageController
    {
        $model = $container->get('TasksModel');
        $view = $container->get('renderer');
        return new UncompletedPageController($model, $view);
    }
}