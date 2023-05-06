<?php
require 'controllers/tasks.php';
$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
//split the url into an array
$urls = explode('/', $url);

switch ($urls[1]) {
    case 'add':
        $tasks = new Tasks();
        $tasks->addTask();
        break;
    case 'save':
        $tasks = new Tasks();
        $tasks->saveTask();
        break;
    case 'edit':
        $tasks = new Tasks();
        $tasks->editTask($urls[2]);
        break;
    case 'update':
        $tasks = new Tasks();
        $tasks->updateTask();
        break;
    case 'delete':
        $tasks = new Tasks();
        $tasks->deleteTask($urls[2]);
        break;
    default:
        $tasks = new Tasks();
        $tasks->getAllTasks();
        break;

} 