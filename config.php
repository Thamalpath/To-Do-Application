<?php

$config = [
    'db_host' => 'localhost',
    'db_port' => '3306',
    'db_name' => 'tasks',
    'db_username' => 'root',
    'db_password' => 'My@123',
    'site_url' => 'http://localhost:8009'
];

foreach($config as $key => $value){
    $GLOBALS[$key] = $value;
}