<?php

use Core\Database;
use Core\Validator;

require base_path("Core/" . 'Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (!Validator::string($_POST['body'], 1, 140)) {
        $errors['body'] = 'A body of no more than 140 characters is required';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => trim(preg_replace('/\s+/', ' ', $_POST['body'])),
            'user_id' => 3
        ]);
    }
}

view("notes/create.view.php", [
    'heading' => 'Create a note',
    'errors' => $errors
]);
