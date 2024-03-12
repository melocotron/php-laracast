<?php

$config = require('config.php');
$db = new Database($config['database']);


$heading = "Note";

$note = $db->query('select * from notes where id = :id', [
    // 'user' => 3,
    'id' => $_GET['id']
])->fetch();

if (!$note) {
    abort(404);# code...
}

if ($note['user_id'] != 3) {
    abort(403);# code...
}

require "views/note.view.php";