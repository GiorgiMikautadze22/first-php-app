<?php
require 'Validator.php';

$config = require 'config.php';
$db = new Database($config);

$header = 'Note Create';


$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of less than 1000 and more than 1 characters is required';
    }


    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}


require 'views/note-create.view.php';