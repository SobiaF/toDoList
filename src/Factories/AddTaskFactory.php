<?php


namespace App\Factories;

use Psr\Container\ContainerInterface;
use App\Models\AddTask;

class addTaskFactory
{
    public function __invoke(ContainerInterface $container): AddTask
    {
        // Get a DB connection
        $db = $container->get('db');
        // Pass that connection into AddTask
        // Return the setup AddTask
        return new AddTask($db);
    }
}