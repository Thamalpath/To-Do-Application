<?php
require 'models/tasks.php';

class Tasks
{
    private $taskmodel;
    public function __construct()
    {
        $this->taskmodel = new Taskmodel();
    }

    public function getAllTasks()
    {
        $tasks = $this->taskmodel->getAllTasks();
        
        require 'view/tasks.view.php';
        exit;
    }

    public function addTask()
    {
        require 'view/add.view.php';
        exit;
    }

    public function saveTask()
    {
        $this->taskmodel->saveTask($_POST['title'], $_POST['task']);
        header("Location: $GLOBALS[site_url]");
        exit;
    }

    public function editTask($id){
        $task = $this->taskmodel->getTask($id);
        require 'view/edit.view.php';
        exit;
    }

    public function updateTask(){
        $this->taskmodel->updateTask($_POST['id'], $_POST['title'], $_POST['task']);
        header("Location: $GLOBALS[site_url]");
        exit;
    }

    public function deleteTask($id){
        $this->taskmodel->deleteTask($id);
        header("Location: $GLOBALS[site_url]");
        exit;
    }
} 