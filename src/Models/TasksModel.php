<?php


namespace App\Models;

use PDO;

class TasksModel
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getTasks(): array
    {
        $query = $this->db->prepare('SELECT * FROM `tasks`;');
        $query->execute();
        return $query->fetchAll();
    }

    public function addTask($task)
    {
        $query = $this->db->prepare('INSERT INTO `tasks` (`task`) VALUES (:task);');
        $query->bindParam('task', $task);
        $query->execute();
    }
}

/*
 * For model:
 * addTask - will go into UncompletedPageController
 * getCompletedTasks - will go into CompletedPageController
 * getUncompletedTasks - will go into UncompletedPageController
 * markTaskCompleted - will go into UncompletedPageController
 * deleteCompletedTask - will go into CompletedPageController
 */


