<?php

namespace App\Factories;

use App\Controllers\SubmitEditController;
use Psr\Container\ContainerInterface;

class SubmitEditControllerFactory
{
    public function __invoke(ContainerInterface $container): SubmitEditController
    {
        $model = $container->get('TasksModel');
        $view = $container->get('renderer');
        return new SubmitEditController($model, $view);
    }
}