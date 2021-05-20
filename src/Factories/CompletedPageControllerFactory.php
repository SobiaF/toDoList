<?php

namespace App\Factories;

use App\Controllers\CompletedPageController;
use Psr\Container\ContainerInterface;

class CompletedPageControllerFactory
{
    public function __invoke(ContainerInterface $container): CompletedPageController
    {
        $model = $container->get('TasksModel');
        $view = $container->get('renderer');
        return new CompletedPageController($model, $view);
    }
}