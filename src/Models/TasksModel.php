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

    /**
     * gets uncompleted tasks
     *
     * @return array
     */
    public function getUncompletedTasks(): array
    {
        $query = $this->db->prepare('SELECT * FROM `tasks` WHERE `completed` = 0 AND `deleted` = 0;');
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * marks task as completed
     *
     * @param int $id
     */
    public function markCompleted(int $id): void
    {
        $query = $this->db->prepare('UPDATE `tasks` SET `completed` = 1 WHERE id = :id;');
        $query->bindParam(':id', $id);
        $query->execute();
    }

    /**
     * adds a task to the to do list
     *
     * @param $task
     */

    public function addTask($task)
    {
        $query = $this->db->prepare('INSERT INTO `tasks` (`task`) VALUES (:task);');
        $query->bindParam('task', $task);
        $query->execute();
    }

    /**
     * gets completed tasks
     *
     * @return array
     */

    public function getCompletedTasks(): array
    {
        $query = $this->db->prepare('SELECT * FROM `tasks` WHERE `completed` = 1;');
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * deletes a completed task
     *
     * @param int $id
     */
    public function deleteTask(int $id): void
    {
        $query = $this->db->prepare('UPDATE `tasks` SET `deleted` = 1 WHERE id = :id;');
        $query->bindParam(':id', $id);
        $query->execute();
    }

    /**
     * edits a completed task
     *
     * @param int $id
     * @param string $newTaskName
     */
    public function updateTask(int $id, string $newTaskName): void
    {
        $query = $this->db->prepare('UPDATE `tasks` SET `task` = :newTaskName WHERE `id` = :id;');
        $query->bindParam(':newTaskName', $newTaskName);
        $query->bindParam(':id', $id);
        $query->execute();
    }

    public function getTask(int $id): array
    {
        $query = $this->db->prepare('SELECT * FROM `tasks` WHERE id = :id;');
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch();
    }
}