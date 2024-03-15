<?php

require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database']);

$heading = "Create a note";

dd(Validator::email('asd@asd.cas'));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];


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

require 'views/note-create.view.php';
