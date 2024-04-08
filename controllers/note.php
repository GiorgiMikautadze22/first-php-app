<?php

$config = require 'config.php';
$db = new Database($config);

$header = "Note";


$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->findOrFail();

if (!$note) {
    abort(404);
}

authorize($note['user_id'] === 1);



require "views/note.view.php";
