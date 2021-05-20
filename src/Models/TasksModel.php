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
}