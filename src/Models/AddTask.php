<?php


namespace App\Models;

use PDO;

class addTask
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getTask(): array
    {
        $query = $this->db->prepare('SELECT * FROM `tasks`;');
        $query->execute();
        return $query->fetchAll();
    }
}