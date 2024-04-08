<?php

$config = require 'config.php';
$db = new Database($config);

$header = "Note";


$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->fetch(PDO::FETCH_ASSOC);



require "views/note.view.php";
