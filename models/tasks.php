<?php

require 'core/db.php';

class TaskModel
{
    private $db;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function getAllTasks()
    {
        $sql = "SELECT * FROM tasks";
        $stmt = $this->db->query($sql);
        $stmt->execute();
        $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $tasks;
    }

    public function saveTask($title, $task)
    {
        $date = time();
        $sql = "INSERT INTO tasks (title, task, date) VALUES (:title, :task, :date)";
        $this->db->queryRun($sql);
        $this->db->bind(':title', $title);
        $this->db->bind(':task', $task);
        $this->db->bind(':date', $date);
        return $this->db->execute();
    }

    public function getTask($id)
    {
        $sql = "SELECT * FROM tasks WHERE id = $id";
        $stmt = $this->db->query($sql);
        $stmt->execute();
        $task = $stmt->fetch(PDO::FETCH_ASSOC);
        return $task;
    }

    public function updateTask($id, $title, $task)
    {
        $sql = "UPDATE tasks SET title = '$title', task = '$task' WHERE id = $id";
        $stmt = $this->db->query($sql);
        $stmt->execute();
        return $stmt;
    }

    public function deleteTask($id)
    {
        $sql = "DELETE FROM tasks WHERE id = $id";
        $stmt = $this->db->query($sql);
        $stmt->execute();
        return $stmt;
    }
}
